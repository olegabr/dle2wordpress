<?php
	/**
	 * The abstract WpPollsqGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpPollsq subclass which
	 * extends this WpPollsqGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpPollsq class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $PollqId the value for intPollqId (Read-Only PK)
	 * @property string $PollqQuestion the value for strPollqQuestion (Not Null)
	 * @property string $PollqTimestamp the value for strPollqTimestamp (Not Null)
	 * @property integer $PollqTotalvotes the value for intPollqTotalvotes (Not Null)
	 * @property boolean $PollqActive the value for blnPollqActive (Not Null)
	 * @property string $PollqExpiry the value for strPollqExpiry (Not Null)
	 * @property integer $PollqMultiple the value for intPollqMultiple (Not Null)
	 * @property integer $PollqTotalvoters the value for intPollqTotalvoters (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpPollsqGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_pollsq.pollq_id
		 * @var integer intPollqId
		 */
		protected $intPollqId;
		const PollqIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsq.pollq_question
		 * @var string strPollqQuestion
		 */
		protected $strPollqQuestion;
		const PollqQuestionMaxLength = 200;
		const PollqQuestionDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsq.pollq_timestamp
		 * @var string strPollqTimestamp
		 */
		protected $strPollqTimestamp;
		const PollqTimestampMaxLength = 20;
		const PollqTimestampDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsq.pollq_totalvotes
		 * @var integer intPollqTotalvotes
		 */
		protected $intPollqTotalvotes;
		const PollqTotalvotesDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsq.pollq_active
		 * @var boolean blnPollqActive
		 */
		protected $blnPollqActive;
		const PollqActiveDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsq.pollq_expiry
		 * @var string strPollqExpiry
		 */
		protected $strPollqExpiry;
		const PollqExpiryMaxLength = 20;
		const PollqExpiryDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsq.pollq_multiple
		 * @var integer intPollqMultiple
		 */
		protected $intPollqMultiple;
		const PollqMultipleDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsq.pollq_totalvoters
		 * @var integer intPollqTotalvoters
		 */
		protected $intPollqTotalvoters;
		const PollqTotalvotersDefault = null;


		/**
		 * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
		 * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
		 * GetVirtualAttribute.
		 * @var string[] $__strVirtualAttributeArray
		 */
		protected $__strVirtualAttributeArray = array();

		/**
		 * Protected internal member variable that specifies whether or not this object is Restored from the database.
		 * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
		 * @var bool __blnRestored;
		 */
		protected $__blnRestored;




		///////////////////////////////
		// PROTECTED MEMBER OBJECTS
		///////////////////////////////



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intPollqId = WpPollsq::PollqIdDefault;
			$this->strPollqQuestion = WpPollsq::PollqQuestionDefault;
			$this->strPollqTimestamp = WpPollsq::PollqTimestampDefault;
			$this->intPollqTotalvotes = WpPollsq::PollqTotalvotesDefault;
			$this->blnPollqActive = WpPollsq::PollqActiveDefault;
			$this->strPollqExpiry = WpPollsq::PollqExpiryDefault;
			$this->intPollqMultiple = WpPollsq::PollqMultipleDefault;
			$this->intPollqTotalvoters = WpPollsq::PollqTotalvotersDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[2];
		}

		/**
		 * Load a WpPollsq from PK Info
		 * @param integer $intPollqId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsq
		 */
		public static function Load($intPollqId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPollsq', $intPollqId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpPollsq::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPollsq()->PollqId, $intPollqId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpPollsqs
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsq[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpPollsq::QueryArray to perform the LoadAll query
			try {
				return WpPollsq::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpPollsqs
		 * @return int
		 */
		public static function CountAll() {
			// Call WpPollsq::QueryCount to perform the CountAll query
			return WpPollsq::QueryCount(QQ::All());
		}




		///////////////////////////////
		// QCUBED QUERY-RELATED METHODS
		///////////////////////////////

		/**
		 * Internally called method to assist with calling Qcubed Query for this class
		 * on load methods.
		 * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
		 * @param boolean $blnCountOnly only select a rowcount
		 * @return string the query statement
		 */
		protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
			// Get the Database Object for this Class
			$objDatabase = WpPollsq::GetDatabase();

			// Create/Build out the QueryBuilder object with WpPollsq-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_pollsq');

			$blnAddAllFieldsToSelect = true;
			if ($objDatabase->OnlyFullGroupBy) {
				// see if we have any group by or aggregation clauses, if yes, don't add the fields to select clause
				if ($objOptionalClauses instanceof QQClause) {
					if ($objOptionalClauses instanceof QQAggregationClause || $objOptionalClauses instanceof QQGroupBy) {
						$blnAddAllFieldsToSelect = false;
					}
				} else if (is_array($objOptionalClauses)) {
					foreach ($objOptionalClauses as $objClause) {
						if ($objClause instanceof QQAggregationClause || $objClause instanceof QQGroupBy) {
							$blnAddAllFieldsToSelect = false;
							break;
						}
					}
				}
			}
			if ($blnAddAllFieldsToSelect) {
				WpPollsq::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_pollsq');

			// Set "CountOnly" option (if applicable)
			if ($blnCountOnly)
				$objQueryBuilder->SetCountOnlyFlag();

			// Apply Any Conditions
			if ($objConditions)
				try {
					$objConditions->UpdateQueryBuilder($objQueryBuilder);
				} catch (QCallerException $objExc) {
					$objExc->IncrementOffset();
					throw $objExc;
				}

			// Iterate through all the Optional Clauses (if any) and perform accordingly
			if ($objOptionalClauses) {
				if ($objOptionalClauses instanceof QQClause)
					$objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
				else if (is_array($objOptionalClauses))
					foreach ($objOptionalClauses as $objClause)
						$objClause->UpdateQueryBuilder($objQueryBuilder);
				else
					throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
			}

			// Get the SQL Statement
			$strQuery = $objQueryBuilder->GetStatement();

			// Prepare the Statement with the Query Parameters (if applicable)
			if ($mixParameterArray) {
				if (is_array($mixParameterArray)) {
					if (count($mixParameterArray))
						$strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

					// Ensure that there are no other Unresolved Named Parameters
					if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
						throw new QCallerException('Unresolved named parameters in the query');
				} else
					throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
			}

			// Return the Objects
			return $strQuery;
		}

		/**
		 * Static Qcubed Query method to query for a single WpPollsq object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPollsq the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsq::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpPollsq object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpPollsq::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
					if ($objItem)
						$objToReturn[] = $objItem;
				}
				if (count($objToReturn)) {
					// Since we only want the object to return, lets return the object and not the array.
					return $objToReturn[0];
				} else {
					return null;
				}
			} else {
				// No expands just return the first row
				$objDbRow = $objDbResult->GetNextRow();
				if(null === $objDbRow)
					return null;
				return WpPollsq::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpPollsq objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPollsq[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsq::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpPollsq::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcodo query method to issue a query and get a cursor to progressively fetch its results.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return QDatabaseResultBase the cursor resource instance
		 */
		public static function QueryCursor(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the query statement
			try {
				$strQuery = WpPollsq::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the query
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Return the results cursor
			$objDbResult->QueryBuilder = $objQueryBuilder;
			return $objDbResult;
		}

		/**
		 * Static Qcubed Query method to query for a count of WpPollsq objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsq::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and return the row_count
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Figure out if the query is using GroupBy
			$blnGrouped = false;

			if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
				if ($objClause instanceof QQGroupBy) {
					$blnGrouped = true;
					break;
				}
			}

			if ($blnGrouped)
				// Groups in this query - return the count of Groups (which is the count of all rows)
				return $objDbResult->CountRows();
			else {
				// No Groups - return the sql-calculated count(*) value
				$strDbRow = $objDbResult->FetchRow();
				return QType::Cast($strDbRow[0], QType::Integer);
			}
		}

		public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpPollsq::GetDatabase();

			$strQuery = WpPollsq::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wppollsq', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpPollsq::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpPollsq
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_pollsq';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'pollq_id', $strAliasPrefix . 'pollq_id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'pollq_id', $strAliasPrefix . 'pollq_id');
			    $objBuilder->AddSelectItem($strTableName, 'pollq_question', $strAliasPrefix . 'pollq_question');
			    $objBuilder->AddSelectItem($strTableName, 'pollq_timestamp', $strAliasPrefix . 'pollq_timestamp');
			    $objBuilder->AddSelectItem($strTableName, 'pollq_totalvotes', $strAliasPrefix . 'pollq_totalvotes');
			    $objBuilder->AddSelectItem($strTableName, 'pollq_active', $strAliasPrefix . 'pollq_active');
			    $objBuilder->AddSelectItem($strTableName, 'pollq_expiry', $strAliasPrefix . 'pollq_expiry');
			    $objBuilder->AddSelectItem($strTableName, 'pollq_multiple', $strAliasPrefix . 'pollq_multiple');
			    $objBuilder->AddSelectItem($strTableName, 'pollq_totalvoters', $strAliasPrefix . 'pollq_totalvoters');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpPollsq from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpPollsq::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpPollsq
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpPollsq object
			$objToReturn = new WpPollsq();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'pollq_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollqId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'pollq_question';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollqQuestion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollq_timestamp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollqTimestamp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollq_totalvotes';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollqTotalvotes = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'pollq_active';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnPollqActive = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'pollq_expiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollqExpiry = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollq_multiple';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollqMultiple = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'pollq_totalvoters';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollqTotalvoters = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->PollqId != $objPreviousItem->PollqId) {
						continue;
					}

					// complete match - all primary key columns are the same
					return null;
				}
			}

			// Instantiate Virtual Attributes
			$strVirtualPrefix = $strAliasPrefix . '__';
			$strVirtualPrefixLength = strlen($strVirtualPrefix);
			foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
				if (strncmp($strColumnName, $strVirtualPrefix, $strVirtualPrefixLength) == 0)
					$objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
			}

			// Prepare to Check for Early/Virtual Binding
			if (!$strAliasPrefix)
				$strAliasPrefix = 'wp_pollsq__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpPollsqs from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpPollsq[]
		 */
		public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
			$objToReturn = array();

			if (!$strColumnAliasArray)
				$strColumnAliasArray = array();

			// If blank resultset, then return empty array
			if (!$objDbResult)
				return $objToReturn;

			// Load up the return array with each row
			if ($strExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpPollsq::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpPollsq::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpPollsq object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpPollsq next row resulting from the query
		 */
		public static function InstantiateCursor(QDatabaseResultBase $objDbResult) {
			// If blank resultset, then return empty result
			if (!$objDbResult) return null;

			// If empty resultset, then return empty result
			$objDbRow = $objDbResult->GetNextRow();
			if (!$objDbRow) return null;

			// We need the Column Aliases
			$strColumnAliasArray = $objDbResult->QueryBuilder->ColumnAliasArray;
			if (!$strColumnAliasArray) $strColumnAliasArray = array();

			// Pull Expansions (if applicable)
			$strExpandAsArrayNodes = $objDbResult->QueryBuilder->ExpandAsArrayNodes;

			// Load up the return result with a row and return it
			return WpPollsq::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpPollsq object,
		 * by PollqId Index(es)
		 * @param integer $intPollqId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsq
		*/
		public static function LoadByPollqId($intPollqId, $objOptionalClauses = null) {
			return WpPollsq::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPollsq()->PollqId, $intPollqId)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpPollsq
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpPollsq::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_pollsq` (
							`pollq_question`,
							`pollq_timestamp`,
							`pollq_totalvotes`,
							`pollq_active`,
							`pollq_expiry`,
							`pollq_multiple`,
							`pollq_totalvoters`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strPollqQuestion) . ',
							' . $objDatabase->SqlVariable($this->strPollqTimestamp) . ',
							' . $objDatabase->SqlVariable($this->intPollqTotalvotes) . ',
							' . $objDatabase->SqlVariable($this->blnPollqActive) . ',
							' . $objDatabase->SqlVariable($this->strPollqExpiry) . ',
							' . $objDatabase->SqlVariable($this->intPollqMultiple) . ',
							' . $objDatabase->SqlVariable($this->intPollqTotalvoters) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intPollqId = $objDatabase->InsertId('wp_pollsq', 'pollq_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_pollsq`
						SET
							`pollq_question` = ' . $objDatabase->SqlVariable($this->strPollqQuestion) . ',
							`pollq_timestamp` = ' . $objDatabase->SqlVariable($this->strPollqTimestamp) . ',
							`pollq_totalvotes` = ' . $objDatabase->SqlVariable($this->intPollqTotalvotes) . ',
							`pollq_active` = ' . $objDatabase->SqlVariable($this->blnPollqActive) . ',
							`pollq_expiry` = ' . $objDatabase->SqlVariable($this->strPollqExpiry) . ',
							`pollq_multiple` = ' . $objDatabase->SqlVariable($this->intPollqMultiple) . ',
							`pollq_totalvoters` = ' . $objDatabase->SqlVariable($this->intPollqTotalvoters) . '
						WHERE
							`pollq_id` = ' . $objDatabase->SqlVariable($this->intPollqId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this WpPollsq
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intPollqId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpPollsq with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsq::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsq`
				WHERE
					`pollq_id` = ' . $objDatabase->SqlVariable($this->intPollqId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpPollsq ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPollsq', $this->intPollqId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpPollsqs
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpPollsq::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsq`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_pollsq table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpPollsq::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_pollsq`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpPollsq from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpPollsq object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpPollsq::Load($this->intPollqId);

			// Update $this's local variables to match
			$this->strPollqQuestion = $objReloaded->strPollqQuestion;
			$this->strPollqTimestamp = $objReloaded->strPollqTimestamp;
			$this->intPollqTotalvotes = $objReloaded->intPollqTotalvotes;
			$this->blnPollqActive = $objReloaded->blnPollqActive;
			$this->strPollqExpiry = $objReloaded->strPollqExpiry;
			$this->intPollqMultiple = $objReloaded->intPollqMultiple;
			$this->intPollqTotalvoters = $objReloaded->intPollqTotalvoters;
		}



		////////////////////
		// PUBLIC OVERRIDERS
		////////////////////

				/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'PollqId':
					/**
					 * Gets the value for intPollqId (Read-Only PK)
					 * @return integer
					 */
					return $this->intPollqId;

				case 'PollqQuestion':
					/**
					 * Gets the value for strPollqQuestion (Not Null)
					 * @return string
					 */
					return $this->strPollqQuestion;

				case 'PollqTimestamp':
					/**
					 * Gets the value for strPollqTimestamp (Not Null)
					 * @return string
					 */
					return $this->strPollqTimestamp;

				case 'PollqTotalvotes':
					/**
					 * Gets the value for intPollqTotalvotes (Not Null)
					 * @return integer
					 */
					return $this->intPollqTotalvotes;

				case 'PollqActive':
					/**
					 * Gets the value for blnPollqActive (Not Null)
					 * @return boolean
					 */
					return $this->blnPollqActive;

				case 'PollqExpiry':
					/**
					 * Gets the value for strPollqExpiry (Not Null)
					 * @return string
					 */
					return $this->strPollqExpiry;

				case 'PollqMultiple':
					/**
					 * Gets the value for intPollqMultiple (Not Null)
					 * @return integer
					 */
					return $this->intPollqMultiple;

				case 'PollqTotalvoters':
					/**
					 * Gets the value for intPollqTotalvoters (Not Null)
					 * @return integer
					 */
					return $this->intPollqTotalvoters;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


				case '__Restored':
					return $this->__blnRestored;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

				/**
		 * Override method to perform a property "Set"
		 * This will set the property $strName to be $mixValue
		 *
		 * @param string $strName Name of the property to set
		 * @param string $mixValue New value of the property
		 * @return mixed
		 */
		public function __set($strName, $mixValue) {
			switch ($strName) {
				///////////////////
				// Member Variables
				///////////////////
				case 'PollqQuestion':
					/**
					 * Sets the value for strPollqQuestion (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollqQuestion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollqTimestamp':
					/**
					 * Sets the value for strPollqTimestamp (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollqTimestamp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollqTotalvotes':
					/**
					 * Sets the value for intPollqTotalvotes (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPollqTotalvotes = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollqActive':
					/**
					 * Sets the value for blnPollqActive (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnPollqActive = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollqExpiry':
					/**
					 * Sets the value for strPollqExpiry (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollqExpiry = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollqMultiple':
					/**
					 * Sets the value for intPollqMultiple (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPollqMultiple = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollqTotalvoters':
					/**
					 * Sets the value for intPollqTotalvoters (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPollqTotalvoters = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				default:
					try {
						return parent::__set($strName, $mixValue);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}

		/**
		 * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
		 * @param string $strName
		 * @return string
		 */
		public function GetVirtualAttribute($strName) {
			if (array_key_exists($strName, $this->__strVirtualAttributeArray))
				return $this->__strVirtualAttributeArray[$strName];
			return null;
		}



		///////////////////////////////
		// ASSOCIATED OBJECTS' METHODS
		///////////////////////////////



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "wp_pollsq";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpPollsq::GetDatabaseIndex()]->Database;
		}

		/**
		 * Static method to retrieve the Database index in the configuration.inc.php file.
		 * This can be useful when there are two databases of the same name which create
		 * confusion for the developer. There are no internal uses of this function but are
		 * here to help retrieve info if need be!
		 * @return int position or index of the database in the config file.
		 */
		public static function GetDatabaseIndex() {
			return 2;
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="WpPollsq"><sequence>';
			$strToReturn .= '<element name="PollqId" type="xsd:int"/>';
			$strToReturn .= '<element name="PollqQuestion" type="xsd:string"/>';
			$strToReturn .= '<element name="PollqTimestamp" type="xsd:string"/>';
			$strToReturn .= '<element name="PollqTotalvotes" type="xsd:int"/>';
			$strToReturn .= '<element name="PollqActive" type="xsd:boolean"/>';
			$strToReturn .= '<element name="PollqExpiry" type="xsd:string"/>';
			$strToReturn .= '<element name="PollqMultiple" type="xsd:int"/>';
			$strToReturn .= '<element name="PollqTotalvoters" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpPollsq', $strComplexTypeArray)) {
				$strComplexTypeArray['WpPollsq'] = WpPollsq::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpPollsq::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpPollsq();
			if (property_exists($objSoapObject, 'PollqId'))
				$objToReturn->intPollqId = $objSoapObject->PollqId;
			if (property_exists($objSoapObject, 'PollqQuestion'))
				$objToReturn->strPollqQuestion = $objSoapObject->PollqQuestion;
			if (property_exists($objSoapObject, 'PollqTimestamp'))
				$objToReturn->strPollqTimestamp = $objSoapObject->PollqTimestamp;
			if (property_exists($objSoapObject, 'PollqTotalvotes'))
				$objToReturn->intPollqTotalvotes = $objSoapObject->PollqTotalvotes;
			if (property_exists($objSoapObject, 'PollqActive'))
				$objToReturn->blnPollqActive = $objSoapObject->PollqActive;
			if (property_exists($objSoapObject, 'PollqExpiry'))
				$objToReturn->strPollqExpiry = $objSoapObject->PollqExpiry;
			if (property_exists($objSoapObject, 'PollqMultiple'))
				$objToReturn->intPollqMultiple = $objSoapObject->PollqMultiple;
			if (property_exists($objSoapObject, 'PollqTotalvoters'))
				$objToReturn->intPollqTotalvoters = $objSoapObject->PollqTotalvoters;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpPollsq::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			return $objObject;
		}


		////////////////////////////////////////
		// METHODS for JSON Object Translation
		////////////////////////////////////////

		// this function is required for objects that implement the
		// IteratorAggregate interface
		public function getIterator() {
			///////////////////
			// Member Variables
			///////////////////
			$iArray['PollqId'] = $this->intPollqId;
			$iArray['PollqQuestion'] = $this->strPollqQuestion;
			$iArray['PollqTimestamp'] = $this->strPollqTimestamp;
			$iArray['PollqTotalvotes'] = $this->intPollqTotalvotes;
			$iArray['PollqActive'] = $this->blnPollqActive;
			$iArray['PollqExpiry'] = $this->strPollqExpiry;
			$iArray['PollqMultiple'] = $this->intPollqMultiple;
			$iArray['PollqTotalvoters'] = $this->intPollqTotalvoters;
			return new ArrayIterator($iArray);
		}

		// this function returns a Json formatted string using the
		// IteratorAggregate interface
		public function getJson() {
			return json_encode($this->getIterator());
		}

		/**
		 * Default "toJsObject" handler
		 * Specifies how the object should be displayed in JQuery UI lists and menus. Note that these lists use
		 * value and label differently.
		 *
		 * value 	= The short form of what to display in the list and selection.
		 * label 	= [optional] If defined, is what is displayed in the menu
		 * id 		= Primary key of object.
		 *
		 * @return an array that specifies how to display the object
		 */
		public function toJsObject () {
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intPollqId ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $PollqId
     * @property-read QQNode $PollqQuestion
     * @property-read QQNode $PollqTimestamp
     * @property-read QQNode $PollqTotalvotes
     * @property-read QQNode $PollqActive
     * @property-read QQNode $PollqExpiry
     * @property-read QQNode $PollqMultiple
     * @property-read QQNode $PollqTotalvoters
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpPollsq extends QQNode {
		protected $strTableName = 'wp_pollsq';
		protected $strPrimaryKey = 'pollq_id';
		protected $strClassName = 'WpPollsq';
		public function __get($strName) {
			switch ($strName) {
				case 'PollqId':
					return new QQNode('pollq_id', 'PollqId', 'Integer', $this);
				case 'PollqQuestion':
					return new QQNode('pollq_question', 'PollqQuestion', 'VarChar', $this);
				case 'PollqTimestamp':
					return new QQNode('pollq_timestamp', 'PollqTimestamp', 'VarChar', $this);
				case 'PollqTotalvotes':
					return new QQNode('pollq_totalvotes', 'PollqTotalvotes', 'Integer', $this);
				case 'PollqActive':
					return new QQNode('pollq_active', 'PollqActive', 'Bit', $this);
				case 'PollqExpiry':
					return new QQNode('pollq_expiry', 'PollqExpiry', 'VarChar', $this);
				case 'PollqMultiple':
					return new QQNode('pollq_multiple', 'PollqMultiple', 'Integer', $this);
				case 'PollqTotalvoters':
					return new QQNode('pollq_totalvoters', 'PollqTotalvoters', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('pollq_id', 'PollqId', 'Integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

    /**
     * @property-read QQNode $PollqId
     * @property-read QQNode $PollqQuestion
     * @property-read QQNode $PollqTimestamp
     * @property-read QQNode $PollqTotalvotes
     * @property-read QQNode $PollqActive
     * @property-read QQNode $PollqExpiry
     * @property-read QQNode $PollqMultiple
     * @property-read QQNode $PollqTotalvoters
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpPollsq extends QQReverseReferenceNode {
		protected $strTableName = 'wp_pollsq';
		protected $strPrimaryKey = 'pollq_id';
		protected $strClassName = 'WpPollsq';
		public function __get($strName) {
			switch ($strName) {
				case 'PollqId':
					return new QQNode('pollq_id', 'PollqId', 'integer', $this);
				case 'PollqQuestion':
					return new QQNode('pollq_question', 'PollqQuestion', 'string', $this);
				case 'PollqTimestamp':
					return new QQNode('pollq_timestamp', 'PollqTimestamp', 'string', $this);
				case 'PollqTotalvotes':
					return new QQNode('pollq_totalvotes', 'PollqTotalvotes', 'integer', $this);
				case 'PollqActive':
					return new QQNode('pollq_active', 'PollqActive', 'boolean', $this);
				case 'PollqExpiry':
					return new QQNode('pollq_expiry', 'PollqExpiry', 'string', $this);
				case 'PollqMultiple':
					return new QQNode('pollq_multiple', 'PollqMultiple', 'integer', $this);
				case 'PollqTotalvoters':
					return new QQNode('pollq_totalvoters', 'PollqTotalvoters', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('pollq_id', 'PollqId', 'integer', $this);
				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
