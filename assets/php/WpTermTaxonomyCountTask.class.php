<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 8. Calculate the wp_term_taxonomy.count field value
	 */
	class WpTermTaxonomyCountTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP terms count created from DLE terms.
		 */
		protected $intTermTaxonomyCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intWpTermTaxonomyCount = WpTermTaxonomy::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intTermTaxonomyCount</strong> term taxonomy relations from <strong>$intWpTermTaxonomyCount</strong> processed.</li>
RESULT;
			return $strResults;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected function get_objects_array($intOffset) {
			return WpTermTaxonomy::LoadAll(QQ::Clause(
				QQ::LimitInfo(10, $intOffset)
				, QQ::OrderBy(QQN::WpTermTaxonomy()->TermTaxonomyId)
			));
		}
		/**
		 * @param WpTermTaxonomy $objWpTermTaxonomy The DB ORM object to process
		 */
		protected function process_object($objWpTermTaxonomy) {
			$objWpTermTaxonomy->Count = WpTermRelationships::CountByTermTaxonomyId($objWpTermTaxonomy->TermTaxonomyId);
			$objWpTermTaxonomy->Save();
			$this->intTermTaxonomyCount++;
		}
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected function get_process_objects_count() {
			return WpTermTaxonomy::CountAll();
		}
		
		/**
		 * @return string The task description, like "Converting DLE Terms"
		 */
		public function get_description() {
			return QApplication::Translate("Calculate the wp_term_taxonomy.count field value");
		}
	}
