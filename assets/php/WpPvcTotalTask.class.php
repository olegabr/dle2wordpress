<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 7. copy the Postcount
	 * This needs the Page Views Count plugin to be installed: http://wordpress.org/extend/plugins/page-views-count/
	 */
	class WpPvcTotalTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP posts count created from DLE posts.
		 */
		protected $intPvcTotalCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDlePostsCount = $this->get_process_objects_count();
			$strResults =<<< RESULT
		<li><strong>$this->intPvcTotalCount</strong> page read counts for <strong>$intDlePostsCount</strong> posts processed.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return DlePost::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::DlePost()->Id)
			));
		}
		/**
		 * @param DlePost $objDlePost The DB ORM object to process
		 */
		protected function process_object($objDlePost) {
			$objWpPosts = $objDlePost->LoadWpPosts();
			if (!$objWpPosts) {
				return;
			}
			$objWpPvcTotalArray = WpPvcTotal::LoadArrayByPostnum($objWpPosts->Id);
			if ($objWpPvcTotalArray) {
				foreach ($objWpPvcTotalArray as $objWpPvcTotal) {
					$objWpPvcTotal->Postcount = $objDlePost->NewsRead;
					$objWpPvcTotal->Save();
				} 
			} else {
				$objWpPvcTotal = new WpPvcTotal;
				$objWpPvcTotal->Initialize();
				$objWpPvcTotal->Postnum = $objWpPosts->Id;
				$objWpPvcTotal->Postcount = $objDlePost->NewsRead;
				$objWpPvcTotal->Save();
			}
			$this->intPvcTotalCount++;
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return DlePost::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Copy the Postcount for the WP PvcTotal plugin");
		}
	}
