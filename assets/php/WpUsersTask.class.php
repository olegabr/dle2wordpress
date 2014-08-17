<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 1. convert users
	 */
	class WpUsersTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP users count created from DLE users.
		 */
		protected $intUserCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDleUsersCount = $this->get_process_objects_count();
			$intWpUsersCount = WpUsers::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intUserCount</strong> users from <strong>$intDleUsersCount</strong> converted. The wordpress database already has <strong>$intWpUsersCount</strong> users.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return DleUsers::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::DleUsers()->UserId)
			));
		}
		/**
		 * @param DleUsers $objDleUsers The DB ORM object to process
		 */
		protected function process_object($objDleUsers) {
			// wp: ID,      user_login, user_nicename, user_email, user_registered,           display_name
			// dl: user_id, name,       name,          email,      FROM_UNIXTIME( reg_date ), fullname
			$strEmail = $objDleUsers->Email;
			if ($strEmail && strlen($strEmail)) {
				// check if already copied
				if (!WpUsers::QueryCount(QQ::Equal(QQN::WpUsers()->UserEmail, $strEmail))) {
					$objWpUsers = new WpUsers;
					$objWpUsers->Initialize(); // set defaults
					$objWpUsers->UserLogin = $objDleUsers->Name;
					$objWpUsers->UserNicename = $objDleUsers->Name;
					$objWpUsers->UserEmail = $objDleUsers->Email;
					$objWpUsers->UserRegistered = QDateTime::FromTimestamp(intval($objDleUsers->RegDate));
					$objWpUsers->DisplayName = $objDleUsers->Fullname;
					$objWpUsers->UserPass = '';
					$objWpUsers->UserUrl = '';
					$objWpUsers->UserActivationKey = '';
					$objWpUsers->UserStatus = 0;
					$objWpUsers->Save();
					$this->intUserCount++;
				}
			}
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return DleUsers::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Users"
		 */
		public function get_description() {
			return QApplication::Translate("Converting DLE Users");
		}
	}
