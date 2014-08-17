<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 4. convert posts
	 */
	class WpPostsTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP posts count created from DLE posts.
		 */
		protected $intPostsCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDlePostsCount = $this->get_process_objects_count();
			$intWpPostsCount = WpPosts::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intPostsCount</strong> posts from <strong>$intDlePostsCount</strong> converted. The wordpress database already has <strong>$intWpPostsCount</strong> posts.</li>
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
			// check if already copied
			if (!$objWpPosts) {
				$objWpUsers = $objDlePost->LoadWpUser();
				if ($objWpUsers) {
					$objWpPosts = new WpPosts;
					$objWpPosts->Initialize(); // set defaults
					$objWpPosts->PostAuthor = $objWpUsers->Id;
					$objWpPosts->PostDate = $objDlePost->Date;
					$objWpPosts->PostModified = $objDlePost->Date;
					$objWpPosts->PostDateGmt = $objDlePost->Date;
					$objWpPosts->PostModifiedGmt = $objDlePost->Date;
					$objWpPosts->PostContent = str_replace('\»', '»', str_replace('\"', '"', $objDlePost->FullStory));
					$objWpPosts->PostContentFiltered = "";
					$objWpPosts->PostParent = 0;
					$objWpPosts->PostTitle = $objDlePost->Title;
					$objWpPosts->PostExcerpt = str_replace('\»', '»', str_replace('\"', '"', $objDlePost->ShortStory));
					$objWpPosts->CommentStatus = "open";
					$objWpPosts->PingStatus = "open";
					$objWpPosts->PostStatus = "publish";
					$objWpPosts->PostPassword = "";
					$objWpPosts->PostName = $objDlePost->AltName;
					$objWpPosts->ToPing = "";
					$objWpPosts->Pinged = "";
					$objWpPosts->Guid = "";
					$objWpPosts->MenuOrder = 0;
					$objWpPosts->PostType = "post";
					$objWpPosts->PostMimeType = "";
					$objWpPosts->CommentCount = 0;
					$objWpPosts->Save();
					$this->intPostCount++;
				}
			}
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
			return QApplication::Translate("Converting DLE posts");
		}
	}
