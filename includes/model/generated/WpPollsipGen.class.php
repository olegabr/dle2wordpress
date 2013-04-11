<?php
	/**
	 * The abstract WpPollsipGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpPollsip subclass which
	 * extends this WpPollsipGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpPollsip class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $PollipId the value for intPollipId (Read-Only PK)
	 * @property string $PollipQid the value for strPollipQid (Not Null)
	 * @property string $PollipAid the value for strPollipAid (Not Null)
	 * @property string $PollipIp the value for strPollipIp (Not Null)
	 * @property string $PollipHost the value for strPollipHost (Not Null)
	 * @property string $PollipTimestamp the value for strPollipTimestamp (Not Null)
	 * @property string $PollipUser the value for strPollipUser (Not Null)
	 * @property integer $PollipUserid the value for intPollipUserid (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpPollsipGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_pollsip.pollip_id
		 * @var integer intPollipId
		 */
		protected $intPollipId;
		const PollipIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsip.pollip_qid
		 * @var string strPollipQid
		 */
		protected $strPollipQid;
		const PollipQidMaxLength = 10;
		const PollipQidDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsip.pollip_aid
		 * @var string strPollipAid
		 */
		protected $strPollipAid;
		const PollipAidMaxLength = 10;
		const PollipAidDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsip.pollip_ip
		 * @var string strPollipIp
		 */
		protected $strPollipIp;
		const PollipIpMaxLength = 100;
		const PollipIpDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsip.pollip_host
		 * @var string strPollipHost
		 */
		protected $strPollipHost;
		const PollipHostMaxLength = 200;
		const PollipHostDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsip.pollip_timestamp
		 * @var string strPollipTimestamp
		 */
		protected $strPollipTimestamp;
		const PollipTimestampMaxLength = 20;
		const PollipTimestampDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsip.pollip_user
		 * @var string strPollipUser
		 */
		protected $strPollipUser;
		const PollipUserDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsip.pollip_userid
		 * @var integer intPollipUserid
		 */
		protected $intPollipUserid;
		const PollipUseridDefault = null;


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
			$this->intPollipId = WpPollsip::PollipIdDefault;
			$this->strPollipQid = WpPollsip::PollipQidDefault;
			$this->strPollipAid = WpPollsip::PollipAidDefault;
			$this->strPollipIp = WpPollsip::PollipIpDefault;
			$this->strPollipHost = WpPollsip::PollipHostDefault;
			$this->strPollipTimestamp = WpPollsip::PollipTimestampDefault;
			$this->strPollipUser = WpPollsip::PollipUserDefault;
			$this->intPollipUserid = WpPollsip::PollipUseridDefault;
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
		 * Load a WpPollsip from PK Info
		 * @param integer $intPollipId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsip
		 */
		public static function Load($intPollipId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPollsip', $intPollipId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpPollsip::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPollsip()->PollipId, $intPollipId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpPollsips
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsip[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpPollsip::QueryArray to perform the LoadAll query
			try {
				return WpPollsip::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpPollsips
		 * @return int
		 */
		public static function CountAll() {
			// Call WpPollsip::QueryCount to perform the CountAll query
			return WpPollsip::QueryCount(QQ::All());
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
			$objDatabase = WpPollsip::GetDatabase();

			// Create/Build out the QueryBuilder object with WpPollsip-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_pollsip');

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
				WpPollsip::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_pollsip');

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
		 * Static Qcubed Query method to query for a single WpPollsip object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPollsip the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsip::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpPollsip object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpPollsip::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpPollsip::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpPollsip objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPollsip[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsip::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpPollsip::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpPollsip::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpPollsip objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsip::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpPollsip::GetDatabase();

			$strQuery = WpPollsip::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wppollsip', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpPollsip::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpPollsip
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_pollsip';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'pollip_id', $strAliasPrefix . 'pollip_id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'pollip_id', $strAliasPrefix . 'pollip_id');
			    $objBuilder->AddSelectItem($strTableName, 'pollip_qid', $strAliasPrefix . 'pollip_qid');
			    $objBuilder->AddSelectItem($strTableName, 'pollip_aid', $strAliasPrefix . 'pollip_aid');
			    $objBuilder->AddSelectItem($strTableName, 'pollip_ip', $strAliasPrefix . 'pollip_ip');
			    $objBuilder->AddSelectItem($strTableName, 'pollip_host', $strAliasPrefix . 'pollip_host');
			    $objBuilder->AddSelectItem($strTableName, 'pollip_timestamp', $strAliasPrefix . 'pollip_timestamp');
			    $objBuilder->AddSelectItem($strTableName, 'pollip_user', $strAliasPrefix . 'pollip_user');
			    $objBuilder->AddSelectItem($strTableName, 'pollip_userid', $strAliasPrefix . 'pollip_userid');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpPollsip from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpPollsip::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpPollsip
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpPollsip object
			$objToReturn = new WpPollsip();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'pollip_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollipId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'pollip_qid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollipQid = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollip_aid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollipAid = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollip_ip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollipIp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollip_host';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollipHost = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollip_timestamp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollipTimestamp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pollip_user';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollipUser = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'pollip_userid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollipUserid = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->PollipId != $objPreviousItem->PollipId) {
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
				$strAliasPrefix = 'wp_pollsip__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpPollsips from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpPollsip[]
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
					$objItem = WpPollsip::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpPollsip::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpPollsip object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpPollsip next row resulting from the query
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
			return WpPollsip::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpPollsip object,
		 * by PollipId Index(es)
		 * @param integer $intPollipId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsip
		*/
		public static function LoadByPollipId($intPollipId, $objOptionalClauses = null) {
			return WpPollsip::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPollsip()->PollipId, $intPollipId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpPollsip objects,
		 * by PollipQid Index(es)
		 * @param string $strPollipQid
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsip[]
		*/
		public static function LoadArrayByPollipQid($strPollipQid, $objOptionalClauses = null) {
			// Call WpPollsip::QueryArray to perform the LoadArrayByPollipQid query
			try {
				return WpPollsip::QueryArray(
					QQ::Equal(QQN::WpPollsip()->PollipQid, $strPollipQid),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPollsips
		 * by PollipQid Index(es)
		 * @param string $strPollipQid
		 * @return int
		*/
		public static function CountByPollipQid($strPollipQid) {
			// Call WpPollsip::QueryCount to perform the CountByPollipQid query
			return WpPollsip::QueryCount(
				QQ::Equal(QQN::WpPollsip()->PollipQid, $strPollipQid)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpPollsip
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpPollsip::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_pollsip` (
							`pollip_qid`,
							`pollip_aid`,
							`pollip_ip`,
							`pollip_host`,
							`pollip_timestamp`,
							`pollip_user`,
							`pollip_userid`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strPollipQid) . ',
							' . $objDatabase->SqlVariable($this->strPollipAid) . ',
							' . $objDatabase->SqlVariable($this->strPollipIp) . ',
							' . $objDatabase->SqlVariable($this->strPollipHost) . ',
							' . $objDatabase->SqlVariable($this->strPollipTimestamp) . ',
							' . $objDatabase->SqlVariable($this->strPollipUser) . ',
							' . $objDatabase->SqlVariable($this->intPollipUserid) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intPollipId = $objDatabase->InsertId('wp_pollsip', 'pollip_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_pollsip`
						SET
							`pollip_qid` = ' . $objDatabase->SqlVariable($this->strPollipQid) . ',
							`pollip_aid` = ' . $objDatabase->SqlVariable($this->strPollipAid) . ',
							`pollip_ip` = ' . $objDatabase->SqlVariable($this->strPollipIp) . ',
							`pollip_host` = ' . $objDatabase->SqlVariable($this->strPollipHost) . ',
							`pollip_timestamp` = ' . $objDatabase->SqlVariable($this->strPollipTimestamp) . ',
							`pollip_user` = ' . $objDatabase->SqlVariable($this->strPollipUser) . ',
							`pollip_userid` = ' . $objDatabase->SqlVariable($this->intPollipUserid) . '
						WHERE
							`pollip_id` = ' . $objDatabase->SqlVariable($this->intPollipId) . '
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
		 * Delete this WpPollsip
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intPollipId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpPollsip with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsip::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsip`
				WHERE
					`pollip_id` = ' . $objDatabase->SqlVariable($this->intPollipId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpPollsip ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPollsip', $this->intPollipId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpPollsips
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpPollsip::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsip`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_pollsip table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpPollsip::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_pollsip`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpPollsip from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpPollsip object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpPollsip::Load($this->intPollipId);

			// Update $this's local variables to match
			$this->strPollipQid = $objReloaded->strPollipQid;
			$this->strPollipAid = $objReloaded->strPollipAid;
			$this->strPollipIp = $objReloaded->strPollipIp;
			$this->strPollipHost = $objReloaded->strPollipHost;
			$this->strPollipTimestamp = $objReloaded->strPollipTimestamp;
			$this->strPollipUser = $objReloaded->strPollipUser;
			$this->intPollipUserid = $objReloaded->intPollipUserid;
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
				case 'PollipId':
					/**
					 * Gets the value for intPollipId (Read-Only PK)
					 * @return integer
					 */
					return $this->intPollipId;

				case 'PollipQid':
					/**
					 * Gets the value for strPollipQid (Not Null)
					 * @return string
					 */
					return $this->strPollipQid;

				case 'PollipAid':
					/**
					 * Gets the value for strPollipAid (Not Null)
					 * @return string
					 */
					return $this->strPollipAid;

				case 'PollipIp':
					/**
					 * Gets the value for strPollipIp (Not Null)
					 * @return string
					 */
					return $this->strPollipIp;

				case 'PollipHost':
					/**
					 * Gets the value for strPollipHost (Not Null)
					 * @return string
					 */
					return $this->strPollipHost;

				case 'PollipTimestamp':
					/**
					 * Gets the value for strPollipTimestamp (Not Null)
					 * @return string
					 */
					return $this->strPollipTimestamp;

				case 'PollipUser':
					/**
					 * Gets the value for strPollipUser (Not Null)
					 * @return string
					 */
					return $this->strPollipUser;

				case 'PollipUserid':
					/**
					 * Gets the value for intPollipUserid (Not Null)
					 * @return integer
					 */
					return $this->intPollipUserid;


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
				case 'PollipQid':
					/**
					 * Sets the value for strPollipQid (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollipQid = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollipAid':
					/**
					 * Sets the value for strPollipAid (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollipAid = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollipIp':
					/**
					 * Sets the value for strPollipIp (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollipIp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollipHost':
					/**
					 * Sets the value for strPollipHost (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollipHost = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollipTimestamp':
					/**
					 * Sets the value for strPollipTimestamp (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollipTimestamp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollipUser':
					/**
					 * Sets the value for strPollipUser (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollipUser = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollipUserid':
					/**
					 * Sets the value for intPollipUserid (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPollipUserid = QType::Cast($mixValue, QType::Integer));
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
			return "wp_pollsip";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpPollsip::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpPollsip"><sequence>';
			$strToReturn .= '<element name="PollipId" type="xsd:int"/>';
			$strToReturn .= '<element name="PollipQid" type="xsd:string"/>';
			$strToReturn .= '<element name="PollipAid" type="xsd:string"/>';
			$strToReturn .= '<element name="PollipIp" type="xsd:string"/>';
			$strToReturn .= '<element name="PollipHost" type="xsd:string"/>';
			$strToReturn .= '<element name="PollipTimestamp" type="xsd:string"/>';
			$strToReturn .= '<element name="PollipUser" type="xsd:string"/>';
			$strToReturn .= '<element name="PollipUserid" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpPollsip', $strComplexTypeArray)) {
				$strComplexTypeArray['WpPollsip'] = WpPollsip::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpPollsip::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpPollsip();
			if (property_exists($objSoapObject, 'PollipId'))
				$objToReturn->intPollipId = $objSoapObject->PollipId;
			if (property_exists($objSoapObject, 'PollipQid'))
				$objToReturn->strPollipQid = $objSoapObject->PollipQid;
			if (property_exists($objSoapObject, 'PollipAid'))
				$objToReturn->strPollipAid = $objSoapObject->PollipAid;
			if (property_exists($objSoapObject, 'PollipIp'))
				$objToReturn->strPollipIp = $objSoapObject->PollipIp;
			if (property_exists($objSoapObject, 'PollipHost'))
				$objToReturn->strPollipHost = $objSoapObject->PollipHost;
			if (property_exists($objSoapObject, 'PollipTimestamp'))
				$objToReturn->strPollipTimestamp = $objSoapObject->PollipTimestamp;
			if (property_exists($objSoapObject, 'PollipUser'))
				$objToReturn->strPollipUser = $objSoapObject->PollipUser;
			if (property_exists($objSoapObject, 'PollipUserid'))
				$objToReturn->intPollipUserid = $objSoapObject->PollipUserid;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpPollsip::GetSoapObjectFromObject($objObject, true));

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
			$iArray['PollipId'] = $this->intPollipId;
			$iArray['PollipQid'] = $this->strPollipQid;
			$iArray['PollipAid'] = $this->strPollipAid;
			$iArray['PollipIp'] = $this->strPollipIp;
			$iArray['PollipHost'] = $this->strPollipHost;
			$iArray['PollipTimestamp'] = $this->strPollipTimestamp;
			$iArray['PollipUser'] = $this->strPollipUser;
			$iArray['PollipUserid'] = $this->intPollipUserid;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intPollipId ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $PollipId
     * @property-read QQNode $PollipQid
     * @property-read QQNode $PollipAid
     * @property-read QQNode $PollipIp
     * @property-read QQNode $PollipHost
     * @property-read QQNode $PollipTimestamp
     * @property-read QQNode $PollipUser
     * @property-read QQNode $PollipUserid
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpPollsip extends QQNode {
		protected $strTableName = 'wp_pollsip';
		protected $strPrimaryKey = 'pollip_id';
		protected $strClassName = 'WpPollsip';
		public function __get($strName) {
			switch ($strName) {
				case 'PollipId':
					return new QQNode('pollip_id', 'PollipId', 'Integer', $this);
				case 'PollipQid':
					return new QQNode('pollip_qid', 'PollipQid', 'VarChar', $this);
				case 'PollipAid':
					return new QQNode('pollip_aid', 'PollipAid', 'VarChar', $this);
				case 'PollipIp':
					return new QQNode('pollip_ip', 'PollipIp', 'VarChar', $this);
				case 'PollipHost':
					return new QQNode('pollip_host', 'PollipHost', 'VarChar', $this);
				case 'PollipTimestamp':
					return new QQNode('pollip_timestamp', 'PollipTimestamp', 'VarChar', $this);
				case 'PollipUser':
					return new QQNode('pollip_user', 'PollipUser', 'Blob', $this);
				case 'PollipUserid':
					return new QQNode('pollip_userid', 'PollipUserid', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('pollip_id', 'PollipId', 'Integer', $this);
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
     * @property-read QQNode $PollipId
     * @property-read QQNode $PollipQid
     * @property-read QQNode $PollipAid
     * @property-read QQNode $PollipIp
     * @property-read QQNode $PollipHost
     * @property-read QQNode $PollipTimestamp
     * @property-read QQNode $PollipUser
     * @property-read QQNode $PollipUserid
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpPollsip extends QQReverseReferenceNode {
		protected $strTableName = 'wp_pollsip';
		protected $strPrimaryKey = 'pollip_id';
		protected $strClassName = 'WpPollsip';
		public function __get($strName) {
			switch ($strName) {
				case 'PollipId':
					return new QQNode('pollip_id', 'PollipId', 'integer', $this);
				case 'PollipQid':
					return new QQNode('pollip_qid', 'PollipQid', 'string', $this);
				case 'PollipAid':
					return new QQNode('pollip_aid', 'PollipAid', 'string', $this);
				case 'PollipIp':
					return new QQNode('pollip_ip', 'PollipIp', 'string', $this);
				case 'PollipHost':
					return new QQNode('pollip_host', 'PollipHost', 'string', $this);
				case 'PollipTimestamp':
					return new QQNode('pollip_timestamp', 'PollipTimestamp', 'string', $this);
				case 'PollipUser':
					return new QQNode('pollip_user', 'PollipUser', 'string', $this);
				case 'PollipUserid':
					return new QQNode('pollip_userid', 'PollipUserid', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('pollip_id', 'PollipId', 'integer', $this);
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
