<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 9. convert static pages
	 */
	class WpPostsStaticTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP posts count created from DLE static pages.
		 */
		protected $intPostsCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDleStaticCount = $this->get_process_objects_count();
			$intWpPostsCount = WpPosts::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intPostsCount</strong> posts from <strong>$intDleStaticCount</strong> converted. The wordpress database already has <strong>$intWpPostsCount</strong> posts.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return DleStatic::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::DleStatic()->Id)
			));
		}
		/**
		 * @param DleStatic $objDleStatic The DB ORM object to process
		 */
		protected function process_object($objDleStatic) {
			$objWpPosts0 = $objDleStatic->LoadWpPost();
			if ($objWpPosts0) {
				return;
			}
			$objWpUsers = WpUsers::LoadFirst();
			if (!$objWpUsers) {
				return;
			}
			$objWpPosts = new WpPosts;
			$objWpPosts->Initialize(); // set defaults
			$objWpPosts->PostAuthor = $objWpUsers->Id;
			$objWpPosts->PostDate = $objDleStatic->Date;
			$objWpPosts->PostModified = $objDleStatic->Date;
			$objWpPosts->PostDateGmt = $objDleStatic->Date;
			$objWpPosts->PostModifiedGmt = $objDleStatic->Date;
			$objWpPosts->PostContent = str_replace(
				'{ACCEPT-DECLINE}', '', str_replace(
					'\»', '»', str_replace(
						'\"', '"', $objDleStatic->Template)));
			$objWpPosts->PostContentFiltered = "";
			$objWpPosts->PostParent = 0;
			$objWpPosts->PostTitle = $objDleStatic->Descr;
			$objWpPosts->PostExcerpt = str_replace('\»', '»', str_replace('\"', '"', $objDleStatic->Metadescr));
			$objWpPosts->CommentStatus = "open";
			$objWpPosts->PingStatus = "open";
			$objWpPosts->PostStatus = "publish";
			$objWpPosts->PostPassword = "";
			$objWpPosts->PostName = $objDleStatic->Name;
			$objWpPosts->ToPing = "";
			$objWpPosts->Pinged = "";
			$objWpPosts->Guid = "";
			$objWpPosts->MenuOrder = 0;
			$objWpPosts->PostType = "page";
			$objWpPosts->PostMimeType = "";
			$objWpPosts->CommentCount = 0;
			$objWpPosts->Save();
			$this->intPostCount++;
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return DleStatic::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Converting DLE static pages");
		}
	}
