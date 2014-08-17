<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 3. convert term taxonomy
	 */
	class WpTermTaxonomyTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP terms count created from DLE terms.
		 */
		protected $intTermTaxonomyCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDleCategoriesCount = $this->get_process_objects_count();
			$intWpTermTaxonomyCount = WpTermTaxonomy::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intTermTaxonomyCount</strong> term taxonomy relations from <strong>$intDleCategoriesCount</strong> converted. The wordpress database already has <strong>$intWpTermTaxonomyCount</strong> term taxonomies.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return DleCategory::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::DleCategory()->Id)
			));
		}
		/**
		 * @param DleCategory $objDleCategory The DB ORM object to process
		 */
		protected function process_object($objDleCategory) {
			// wp: term_taxonomy_id, term_id, description, parent
			// dl: id,               id,      descr,       parentid
			$wpTerms = $objDleCategory->LoadWpTerms();
			if (!$wpTerms) {
				throw QCallerException(QApplication::Translate("Failed to find the WpTerm object for DleCategory."));
			}
			$wpTermsParent = null;
			if ($objDleCategory->ParentidObject) {
				$wpTermsParent = $objDleCategory->ParentidObject->LoadWpTerms();
			}
			$intWpTermsParentId = 0;
			if ($wpTermsParent) {
				$intWpTermsParentId = $wpTermsParent->TermId;
			}
			// check if already copied
			if (!WpTermTaxonomy::QueryCount(
					QQ::AndCondition(
						QQ::Equal(QQN::WpTermTaxonomy()->TermId, $wpTerms->TermId)
						, QQ::Equal(QQN::WpTermTaxonomy()->Parent, $intWpTermsParentId)
					)
				)
			) {
				$objWpTermTaxonomy = new WpTermTaxonomy;
				$objWpTermTaxonomy->Initialize(); // set defaults
				$objWpTermTaxonomy->TermId = $wpTerms->TermId;
				$objWpTermTaxonomy->Description = $objDleCategory->Descr;
				$objWpTermTaxonomy->Parent = $intWpTermsParentId;
				$objWpTermTaxonomy->Taxonomy = "category";
				$objWpTermTaxonomy->Count = 0;
				$objWpTermTaxonomy->Save();
				$this->intTermTaxonomyCount++;
			}
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return DleCategory::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Converting DLE Categories hierarchy");
		}
	}
