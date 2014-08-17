<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 6. convert comments
	 */
	class WpCommentsTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP terms count created from DLE terms.
		 */
		protected $intCommentsCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDleCommentsCount = $this->get_process_objects_count();
			$intWpTermTaxonomyCount = WpComments::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intCommentsCount</strong> comments from <strong>$intDleCommentsCount</strong> converted. The wordpress database already has <strong>$intWpTermTaxonomyCount</strong> comments.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return DleComments::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::DleComments()->Id)
			));
		}
		/**
		 * @param DleComments $objDleComments The DB ORM object to process
		 */
		protected function process_object($objDleComments) {
			$objWpComments0 = $objDleComments->LoadWpComments();
			// check if already copied
			if ($objWpComments0) {
				return;
			}
			$objWpPosts = $objDleComments->LoadWpPosts();
			if (!$objWpPosts) {
				return;
			}
			$objWpComments = new WpComments;
			$objWpComments->Initialize(); // set defaults
			$objWpComments->CommentPostID = $objWpPosts->Id;
			$objWpComments->CommentAuthor = $objDleComments->Autor;
			$objWpComments->CommentAuthorEmail = $objDleComments->Email;
			$objWpComments->CommentAuthorUrl = "";
			$objWpComments->CommentAuthorIP = $objDleComments->Ip;
			$objWpComments->CommentDate = $objDleComments->Date;
			$objWpComments->CommentDateGmt = $objDleComments->Date;
			$objWpComments->CommentContent = str_replace('\»', '»', str_replace('\"', '"', $objDleComments->Text));
			$objWpComments->CommentKarma = 0;
			$objWpComments->CommentApproved = 1;
			$objWpComments->CommentAgent = "";
			$objWpComments->CommentType = "comment";
			$objWpComments->CommentParent = 0;
			$objWpComments->UserId = 0;
			$objWpUsers = $objDleComments->LoadWpUsers();
			if ($objWpUsers) {
				$objWpComments->UserId = $objWpUsers->Id;
			}
			$objWpComments->Save();
			$this->intCommentsCount++;
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return DleComments::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Converting DLE Comments");
		}
	}
