<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 2. convert terms
	 */
	class WpTermsTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP terms count created from DLE terms.
		 */
		protected $intTermCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intDleCategoriesCount = $this->get_process_objects_count();
			$intWpTermsCount = WpTerms::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intTermCount</strong> terms from <strong>$intDleCategoriesCount</strong> converted. The wordpress database already has <strong>$intWpTermsCount</strong> terms.</li>
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
			// wp: term_id, name, slug
			// dl: id,      name, alt_name
			$strAltName = $objDleCategory->AltName;
			if ($strAltName && strlen($strAltName)) {
				// check if already copied
				if (!WpTerms::LoadBySlug($strAltName)) {
					$objWpTerms = new WpTerms;
					$objWpTerms->Initialize(); // set defaults
					$objWpTerms->Name = $objDleCategory->Name;
					$objWpTerms->Slug = $objDleCategory->AltName;
					$objWpTerms->TermGroup = 0;
					$objWpTerms->Save();
					$this->intTermCount++;
				}
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
			return QApplication::Translate("Converting DLE Categories");
		}
	}
