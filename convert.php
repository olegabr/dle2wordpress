<?php
	// Include prepend.inc to load Qcodo
	require('qcubed.inc.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpUsersTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpTermsTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpTermTaxonomyTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpPostsTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpTermRelationshipsTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpCommentsTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpTermsAsTagsTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpTermTaxonomyCountTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpPostsStaticTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpCommentsCountTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpPvcTotalTask.class.php');
	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/WpPollsipTask.class.php');

	class Dle2WpConvertForm extends QForm {
		protected $lblMessage;
		protected $btnButton;
		
		protected $strErrorMessage = null;
		protected $intUserCount = 0;
		protected $intTermCount = 0;
		protected $intTermTaxonomyCount = 0;
		protected $intPostCount = 0;
		protected $intDleTermRelationshipsCount = 0;
		protected $intCommentsCount = 0;
		/**
		 * @var int $intTermRelationshipsCount The full relationships count in the DLE database.
		 */
		protected $intTermRelationshipsCount = 0;
		
		protected $taskArray;

		protected function Form_Run() {
			QApplication::CheckRemoteAdmin();
		}
		protected function Form_Create() {
			$this->taskArray = array();
			$this->taskArray[] = new WpUsersTask;
			$this->taskArray[] = new WpTermsTask;
			$this->taskArray[] = new WpTermTaxonomyTask;
			$this->taskArray[] = new WpPostsTask;
			$this->taskArray[] = new WpTermRelationshipsTask;
			$this->taskArray[] = new WpCommentsTask;
			$this->taskArray[] = new WpTermsAsTagsTask;
			$this->taskArray[] = new WpTermTaxonomyCountTask;
			$this->taskArray[] = new WpPostsStaticTask;
			$this->taskArray[] = new WpCommentsCountTask;
			
			// Populate plugin-related tables
			$objTableArray = WpPvcTotal::GetDatabase()->GetTables();
			if (in_array(WpPvcTotal::GetTableName(), $objTableArray)) {
				$this->taskArray[] = new WpPvcTotalTask;
			}
			if (in_array(WpPollsq::GetTableName(), $objTableArray) &&
				in_array(WpPollsa::GetTableName(), $objTableArray) &&
				in_array(WpPollsip::GetTableName(), $objTableArray)
			) {
				$this->taskArray[] = new WpPollsipTask;
			}
			
			$this->lblMessage = new QPanel($this);
			$this->lblMessage->Text = QApplication::Translate('Click the button to start the conversion process.');
			$this->lblMessage->HtmlEntities = false;
			$this->lblMessage->AddCssFile(__JQUERY_CSS__);
			
			$this->btnButton = new QJqButton($this);
			$this->btnButton->Text = QApplication::Translate('Convert!');
			$this->btnButton->AddAction(new QClickEvent(), new QServerAction('btnButton_Click'));
		}

		protected function btnButton_Click($strFormId, $strControlId, $strParameter) {
			
			$strInProgress = "";
			$strCompleteResults = '	<ul class="link-list">';
			foreach ($this->taskArray as /** @var ITask */$objTask) {
				if ($objTask->is_complete()) {
					$strCompleteResults .= $objTask->get_results();
					continue;
				}
				$objTask->execute();
				if ($objTask->is_complete()) {
					$strCompleteResults .= $objTask->get_results();
					continue;
				}
				$strDesc = $objTask->get_description();
				$strProgress = $objTask->get_progress();
				$strInProgress = $strDesc . ": " . $strProgress;
				break;
			}
			$strCompleteResults .= '	</ul>';
			
			$strInProgress2 = "";
			if (!$strInProgress) {
				$strInProgress = QApplication::Translate("Conversion complete!");
			}
			$strInProgress2 = <<<PROGRESS
	<div class="ui-widget">
		<div class="ui-state-highlight ui-corner-all" style="margin-top: 20px; padding: 0 .7em;">
			<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
			$strInProgress</p>
		</div>
	</div>

PROGRESS;
			
			$this->lblMessage->Text = $strInProgress2 . $strCompleteResults;
			/*
				// TODO: 
				// 1. GMT рассчитать по честному
				// 2. guid для post#141: http://localhost/?p=141

			 */
		}
	}

	Dle2WpConvertForm::Run('Dle2WpConvertForm');	
?>
