<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 3. calculate the comment_count
	 */
	class WpCommentsCountTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP posts count processed.
		 */
		protected $intPostsCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intWpPostsCount = $this->get_process_objects_count();
			$strResults =<<< RESULT
		<li><strong>$this->intPostsCount</strong> from <strong>$intWpPostsCount</strong> posts for comments count are processed.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return WpPosts::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::WpPosts()->Id)
			));
		}
		/**
		 * @param WpPosts $objWpPosts The DB ORM object to process
		 */
		protected function process_object($objWpPosts) {
			$objWpPosts->CommentCount = WpComments::CountByCommentPostID($objWpPosts->Id);
			$objWpPosts->Save();
			$this->intPostsCount++;
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return WpPosts::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Calculate the comment_count");
		}
	}
