<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/encodestring.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 7. convert tags
	 */
	class WpTermsAsTagsTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP terms count created from DLE tags.
		 */
		protected $intTermCount = 0;
		protected $intTermTaxonomyCount = 0;
		protected $intTermRelationshipsCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDleTagsCount = $this->get_process_objects_count();
			$intWpTermsCount = WpTerms::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intTermCount</strong> terms from <strong>$intDleTagsCount</strong> converted. The wordpress database already has <strong>$intWpTermsCount</strong> terms.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return DleTags::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::DleTags()->Id)
			));
		}
		/**
		 * @param DleTags $objDleTags The DB ORM object to process
		 */
		protected function process_object($objDleTags) {
			$objWpTerms = WpTerms::LoadBySlug($objDleTags->Tag);
			if (!$objWpTerms) {
				// It does not work. even with an appropriate setlocale call and with ISO-8859-1//TRANSLIT too
//				$strSlug = iconv(QApplication::$EncodingType, 'US-ASCII//TRANSLIT', $objDleTags->Tag);
				$strSlug = encodestring($objDleTags->Tag);
				$objWpTerms = WpTerms::LoadBySlug($strSlug);
				if (!$objWpTerms) {
					// This tag was not copied yet.
					$objWpTerms = new WpTerms;
					$objWpTerms->Initialize(); // set defaults
					$objWpTerms->Name = $objDleTags->Tag;
					// DLE does not has url-compartible tag name version. it uses the urlencoded from cp1251 one.
					// We do a translit enstead.
					$objWpTerms->Slug = $strSlug;
					$objWpTerms->TermGroup = 0;
					$objWpTerms->Save();
					$this->intTermCount++;
				}
			}
			// check if already copied
			$objWpTermTaxonomy = WpTermTaxonomy::LoadByTermIdTaxonomy($objWpTerms->TermId, "post_tag");
			if (!$objWpTermTaxonomy) {
				$objWpTermTaxonomy = new WpTermTaxonomy;
				$objWpTermTaxonomy->Initialize(); // set defaults
				$objWpTermTaxonomy->TermId = $objWpTerms->TermId;
				$objWpTermTaxonomy->Description = $objWpTerms->Name;
				$objWpTermTaxonomy->Parent = 0;
				$objWpTermTaxonomy->Taxonomy = "post_tag";
				$objWpTermTaxonomy->Count = 0;
				$objWpTermTaxonomy->Save();
				$this->intTermTaxonomyCount++;
			}
			$objWpPosts = $objDleTags->News->LoadWpPosts();
			if (!$objWpPosts) {
				return;
			}
			$objWpTermRelationships = WpTermRelationships::LoadByObjectIdTermTaxonomyId($objWpPosts->Id, $objWpTermTaxonomy->TermTaxonomyId);
			// check if already copied
			if (!$objWpTermRelationships) {
				$objWpTermRelationships = new WpTermRelationships;
				$objWpTermRelationships->Initialize(); // set defaults
				$objWpTermRelationships->ObjectId = $objWpPosts->Id;
				$objWpTermRelationships->TermTaxonomyId = $objWpTermTaxonomy->TermTaxonomyId;
				$objWpTermRelationships->TermOrder = 0;
				$objWpTermRelationships->Save();
				$this->intTermRelationshipsCount++;
			}
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return DleTags::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Converting DLE Tags");
		}
	}
