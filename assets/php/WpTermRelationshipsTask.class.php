<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/TaskImpl.class.php');
	/**
	 * 5. convert wp_term_relationships
	 */
	class WpTermRelationshipsTask extends TaskImpl {
		/**
		 *
		 * @var int The real WP terms count created from DLE terms.
		 */
		protected $intTermRelationshipsCount = 0;
		protected $intDleTermRelationshipsCount = 0;
		/**
		 * @return string The task results for already complete tasks
		 */
		public function get_results() {
			$intWpTermRelationshipsCount = WpTermRelationships::CountAll();
			$strResults =<<< RESULT
		<li><strong>$this->intTermRelationshipsCount</strong> term relationships from <strong>$this->intDleTermRelationshipsCount</strong> converted. The wordpress database already has <strong>$intWpTermRelationshipsCount</strong> term relationships.</li>
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
			$objWpTermsArray = $objDlePost->LoadWpTermsArray();
			if ($objWpTermsArray) {
				$this->intDleTermRelationshipsCount += count($objWpTermsArray);
			}
			else {
				return;
			}
			$objWpPosts = $objDlePost->LoadWpPosts();
			if (!$objWpPosts) {
				return;
			}
			foreach ($objWpTermsArray as $objWpTerms) {
				$objWpTermTaxonomy = WpTermTaxonomy::LoadByTermIdTaxonomy($objWpTerms->TermId, "category");
				if (!$objWpTermTaxonomy) {
					continue;
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
			return QApplication::Translate("Converting DLE Post to Categories relations");
		}
	}
