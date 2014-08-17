<?php

	include_once (__DOCROOT__ . __APP_PHP_ASSETS__ . '/ITask.inc.php');

	/**
	 * 1. convert users
	 */
	abstract class TaskImpl implements ITask {
		protected $intOffset = 0;
		protected $intTimeElapsed = 0;
		
		protected static $intMaxExecutionTime = null;
		protected static function getMaxExecutionTime() {
			if (null === self::$intMaxExecutionTime) {
				$str_max_execution_time = ini_get("max_execution_time");
				$max_execution_time = (int)$str_max_execution_time;

				self::$intMaxExecutionTime = $max_execution_time;
			}
			return self::$intMaxExecutionTime;
		}
		
		/**
		 * @return mixed[] The array of DB ORM objects to process.
		 * @param int $intOffset The offset means already processed objects exclusion.
		 */
		protected abstract function get_objects_array($intOffset);
		/**
		 * @param mixed $objDBObject The DB ORM object to process
		 */
		protected abstract function process_object($objDBObject);
		/**
		 * @return int The number of object in the DLE database to process.
		 */
		protected abstract function get_process_objects_count();


		/**
		 * Process the task.
		 */
		public function execute() {
			try {
				WpUsers::GetDatabase()->TransactionBegin();

				$intTimeBegin = time();
				do {
					$intTime = time();
					if (self::checkBreak($intTimeBegin)) {
						break;
					}
					$objDleObjectArray = $this->get_objects_array($this->intOffset);
					if (!$objDleObjectArray) {
						break;
					}
					foreach ($objDleObjectArray as $objDleObject) {
						if (self::checkBreak($intTimeBegin)) {
							break;
						}
						$this->process_object($objDleObject);
						$this->intOffset++;
					}
					if (self::checkBreak($intTimeBegin)) {
						break;
					}
				} while(true);
				$this->intTimeElapsed += (time() - $intTimeBegin);

				WpUsers::GetDatabase()->TransactionCommit();
			} catch(QDatabaseExceptionBase $ex) {
				WpUsers::GetDatabase()->TransactionRollBack();
				throw $ex;
			} catch(QCallerException $ex) {
				WpUsers::GetDatabase()->TransactionRollBack();
				$ex->IncrementOffset();
				throw $ex;
			} catch(Exception $ex) {
				WpUsers::GetDatabase()->TransactionRollBack();
				throw $ex;
			}
		}
		/**
		 * @return string The task progress, like "37/102, 02:37 elapsed"
		 */
		public function get_progress() {
			$intUsersCount = $this->get_process_objects_count();
			$intProcessedUsersCount = $this->intOffset;
			$strTimeElapsed = QApplication::Translate("N/A");
			if ($this->intTimeElapsed) {
				$spanTime = new QDateTimeSpan($this->intTimeElapsed);
				$strHours = "";
				$intHours = $spanTime->Hours;
				if ($intHours > 0) {
					$strHours = $intHours . ":";
					if ($intHours < 10) {
						$strHours = "0" . $strHours;
					}
				}
				$strMinutes = "";
				$intMinutes = $spanTime->Minutes;
				$strMinutes = $intMinutes . ":";
				if ($intMinutes < 10) {
					$strMinutes = "0" . $strMinutes;
				}
				$strSeconds = "";
				$intSeconds = $spanTime->Seconds;
				$intSeconds = $intSeconds - 3600 * $intHours - 60 * $intMinutes;
				$strSeconds = $intSeconds . "";
				if ($intSeconds < 10) {
					$strSeconds = "0" . $strSeconds;
				}
				$strTimeElapsed = $strHours . $strMinutes . $strSeconds;
			}
			return sprintf("%s/%s, %s elapsed.", $intProcessedUsersCount, $intUsersCount, $strTimeElapsed);
		}
		
		/**
		 * @return boolean Is the task complete?
		 */
		public function is_complete() {
			return $this->get_process_objects_count() == $this->intOffset;
		}

		protected static function checkBreak($intTimeBegin) {
			$intTime = time();
			return (2*($intTime - $intTimeBegin) >= self::getMaxExecutionTime());
		}
	}
