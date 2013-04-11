<?php
	require(__MODEL_GEN__ . '/WpWsluserscontactsGen.class.php');

	/**
	 * The WpWsluserscontacts class defined here contains any
	 * customized code for the WpWsluserscontacts class in the
	 * Object Relational Model.  It represents the "wp_wsluserscontacts" table
	 * in the database, and extends from the code generated abstract WpWsluserscontactsGen
	 * class, which contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * @package My QCubed Application
	 * @subpackage DataObjects
	 *
	 */
	class WpWsluserscontacts extends WpWsluserscontactsGen {
		/**
		 * Default "to string" handler
		 * Allows pages to _p()/echo()/print() this object, and to define the default
		 * way this object would be outputted.
		 *
		 * Can also be called directly via $objWpWsluserscontacts->__toString().
		 *
		 * @return string a nicely formatted string representation of this object
		 */
		public function __toString() {
			return sprintf('WpWsluserscontacts Object %s',  $this->intId);
		}


		// Override or Create New Load/Count methods
		// (For obvious reasons, these methods are commented out...
		// but feel free to use these as a starting point)
/*
		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return an array of WpWsluserscontacts objects
			return WpWsluserscontacts::QueryArray(
				QQ::AndCondition(
					QQ::Equal(QQN::WpWsluserscontacts()->Param1, $strParam1),
					QQ::GreaterThan(QQN::WpWsluserscontacts()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a single WpWsluserscontacts object
			return WpWsluserscontacts::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpWsluserscontacts()->Param1, $strParam1),
					QQ::GreaterThan(QQN::WpWsluserscontacts()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function CountBySample($strParam1, $intParam2, $objOptionalClauses = null) {
			// This will return a count of WpWsluserscontacts objects
			return WpWsluserscontacts::QueryCount(
				QQ::AndCondition(
					QQ::Equal(QQN::WpWsluserscontacts()->Param1, $strParam1),
					QQ::Equal(QQN::WpWsluserscontacts()->Param2, $intParam2)
				),
				$objOptionalClauses
			);
		}

		public static function LoadArrayBySample($strParam1, $intParam2, $objOptionalClauses) {
			// Performing the load manually (instead of using QCubed Query)

			// Get the Database Object for this Class
			$objDatabase = WpWsluserscontacts::GetDatabase();

			// Properly Escape All Input Parameters using Database->SqlVariable()
			$strParam1 = $objDatabase->SqlVariable($strParam1);
			$intParam2 = $objDatabase->SqlVariable($intParam2);

			// Setup the SQL Query
			$strQuery = sprintf('
				SELECT
					`wp_wsluserscontacts`.*
				FROM
					`wp_wsluserscontacts` AS `wp_wsluserscontacts`
				WHERE
					param_1 = %s AND
					param_2 < %s',
				$strParam1, $intParam2);

			// Perform the Query and Instantiate the Result
			$objDbResult = $objDatabase->Query($strQuery);
			return WpWsluserscontacts::InstantiateDbResult($objDbResult);
		}
*/



		// Override or Create New Properties and Variables
		// For performance reasons, these variables and __set and __get override methods
		// are commented out.  But if you wish to implement or override any
		// of the data generated properties, please feel free to uncomment them.
/*
		protected $strSomeNewProperty;

		public function __get($strName) {
			switch ($strName) {
				case 'SomeNewProperty': return $this->strSomeNewProperty;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'SomeNewProperty':
					try {
						return ($this->strSomeNewProperty = QType::Cast($mixValue, QType::String));
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				default:
					try {
						return (parent::__set($strName, $mixValue));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
*/


		// Initialize each property with default values from database definition
/*
		public function __construct()
		{
			$this->Initialize();
		}
*/
	}
?>