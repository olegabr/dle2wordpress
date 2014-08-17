<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 8. copy the polls
	 * This needs the WP-Polls plugin to be installed: http://wordpress.org/extend/plugins/wp-polls/
	 */
	class WpPollsipTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP posts count created from DLE posts.
		 */
		protected $intPollCount = 0;
		protected $intPollQuestionCount = 0;
		protected $intPollAnswerCount = 0;
		protected $intPollIpCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDlePollsCount = $this->get_process_objects_count();
			$intWpPollsqCount = WpPollsq::CountAll();
			$intWpPollsaCount = WpPollsa::CountAll();
			$intWpPollsipCount = WpPollsip::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intPollIpCount</strong> from <strong>$intDlePollsCount</strong> DLE polls processed. <strong>$this->intPollQuestionCount</strong> questions, <strong>$this->intPollAnswerCount</strong> answers, and <strong>$this->intPollIpCount</strong> answer events were converted. The wordpress database already has <strong>$intWpPollsqCount</strong> questions, <strong>$intWpPollsaCount</strong> answers, and <strong>$intWpPollsipCount</strong> answer events.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return DlePoll::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::DlePoll()->Id)
			));
		}
		/**
		 * @param DlePoll $objDlePoll The DB ORM object to process
		 */
		protected function process_object($objDlePoll) {
			$objWpPollsq = WpPollsq::QuerySingle(QQ::Equal(QQN::WpPollsq()->PollqQuestion, $objDlePoll->Frage), QQ::Clause(QQ::LimitInfo(1)));
			if (!$objWpPollsq) {
				$objWpPollsq = new WpPollsq;
				$objWpPollsq->PollqQuestion = $objDlePoll->Frage;
				$objWpPollsq->PollqTimestamp = $objDlePoll->News->Date->Timestamp;
				$objWpPollsq->PollqTotalvotes = $objDlePoll->Votes;
				$objWpPollsq->PollqActive = 1;
				$objWpPollsq->PollqExpiry = '';
				$objWpPollsq->PollqMultiple = intval($objDlePoll->Multiple);
				$objWpPollsq->PollqTotalvoters = $objDlePoll->Votes;
				$objWpPollsq->Save();
				$this->intPollQuestionCount++;
			}

			if ($objDlePoll->Answer && strlen($objDlePoll->Answer) && $objDlePoll->Body && strlen($objDlePoll->Body)) {
				$intA2VArray = array();
				$strAnswerVoteArray = explode("|", $objDlePoll->Answer);
				if ($strAnswerVoteArray) {
					foreach ($strAnswerVoteArray as $strAnswerVote) {
						$intA2V = explode(":", $strAnswerVote);
						if (2 == count($intA2V)) {
							$intA2VArray[$intA2V[0]] = $intA2V[1];
						}
					}
				}
				$strAnswerArray = explode("<br />", $objDlePoll->Body);
				$intAnswerCounter = 0;
				if ($strAnswerArray) {
					foreach ($strAnswerArray as $strAnswer) {
						$objWpPollsa = WpPollsa::QuerySingle(
							QQ::AndCondition(
								QQ::Equal(QQN::WpPollsa()->PollaQid, $objWpPollsq->PollqId)
								, QQ::Equal(QQN::WpPollsa()->PollaAnswers, $strAnswer))
							, QQ::Clause(QQ::OrderBy(QQN::WpPollsa()->PollaAid), QQ::LimitInfo(1))
						);
						if (!$objWpPollsa) {
							$objWpPollsa = new WpPollsa;
							$objWpPollsa->PollaQid = $objWpPollsq->PollqId;
							$objWpPollsa->PollaAnswers = $strAnswer;
							$intVotes = 0;
							if (isset($intA2VArray[$intAnswerCounter])) {
								$intVotes = $intA2VArray[$intAnswerCounter];
							}
							$objWpPollsa->PollaVotes = $intVotes;
							$objWpPollsa->Save();
							$this->intPollAnswerCount++;
						}
					}
				}
			}

			$objDlePollLogArray = DlePollLog::LoadArrayByNewsId($objDlePoll->NewsId);
			if ($objDlePollLogArray) {
				foreach ($objDlePollLogArray as $objDlePollLog) {
					$strPollipUser = '';
					$intPollipUserid = 0;
					$strPollipIp = '';
					if (false === strpos($objDlePollLog->Member, '.')) {
						// The userId saved in the field Member
						$objDleUsers = DleUsers::Load($objDlePollLog->Member);
						if ($objDleUsers) {
							$objWpUsers = $objDleUsers->LoadWpUsers();
							if ($objWpUsers) {
								$strPollipUser = $objWpUsers->UserLogin;
								$intPollipUserid = $objWpUsers->Id;
							}
						}
					} else {
						// The IP address is saved in the field Member
						$strPollipIp = $objDlePollLog->Member;
					}
					$objWpPollsip = WpPollsip::QuerySingle(
						QQ::AndCondition(
							QQ::Equal(QQN::WpPollsip()->PollipQid, $objWpPollsq->PollqId)
							, QQ::Equal(QQN::WpPollsip()->PollipIp, $strPollipIp)
							, QQ::Equal(QQN::WpPollsip()->PollipUser, $strPollipUser)
							, QQ::Equal(QQN::WpPollsip()->PollipUserid, $intPollipUserid)
						)
						, QQ::Clause(QQ::OrderBy(QQN::WpPollsip()->PollipId), QQ::LimitInfo(1))
					);
					if (!$objWpPollsip) {
						$objWpPollsip = new WpPollsip;
						$objWpPollsip->PollipQid = $objWpPollsq->PollqId;
						$objWpPollsip->PollipAid = '';
						$objWpPollsip->PollipIp = $strPollipIp;
						$objWpPollsip->PollipUser = $strPollipUser;
						$objWpPollsip->PollipUserid = $intPollipUserid;
						$objWpPollsip->PollipHost = '';
						$objWpPollsip->PollipTimestamp = '0';
						$objWpPollsip->Save();
						$this->intPollIpCount++;
					}
				}
			}

			// Insert the poll into the corresponding WP post
			$objDlePost = $objDlePoll->News;
			$objWpPosts = $objDlePost->LoadWpPosts();
			$strText = $objWpPosts->PostContent;
			if (false === strpos($strText, "[poll id=")) {
				$objWpPosts->PostContent = sprintf('[poll id="%s"] %s', $objWpPollsq->PollqId, $strText);
				$objWpPosts->Save();
			}
			$this->intPollCount++;
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return DlePoll::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Converting DLE Polls for the WP Polls plugin");
		}
	}
