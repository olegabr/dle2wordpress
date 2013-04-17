<?php
	/**
	 * The abstract WpPollsaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpPollsa subclass which
	 * extends this WpPollsaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpPollsa class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $PollaAid the value for intPollaAid (Read-Only PK)
	 * @property integer $PollaQid the value for intPollaQid (Not Null)
	 * @property string $PollaAnswers the value for strPollaAnswers (Not Null)
	 * @property integer $PollaVotes the value for intPollaVotes (Not Null)
	 * @property WpPollsq $PollaQidObject the value for the WpPollsq object referenced by intPollaQid (Not Null)
	 * @property-read WpPollsip $_WpPollsipAsPollipAid the value for the private _objWpPollsipAsPollipAid (Read-Only) if set due to an expansion on the wp_pollsip.pollip_aid reverse relationship
	 * @property-read WpPollsip[] $_WpPollsipAsPollipAidArray the value for the private _objWpPollsipAsPollipAidArray (Read-Only) if set due to an ExpandAsArray on the wp_pollsip.pollip_aid reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpPollsaGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_pollsa.polla_aid
		 * @var integer intPollaAid
		 */
		protected $intPollaAid;
		const PollaAidDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsa.polla_qid
		 * @var integer intPollaQid
		 */
		protected $intPollaQid;
		const PollaQidDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsa.polla_answers
		 * @var string strPollaAnswers
		 */
		protected $strPollaAnswers;
		const PollaAnswersMaxLength = 200;
		const PollaAnswersDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_pollsa.polla_votes
		 * @var integer intPollaVotes
		 */
		protected $intPollaVotes;
		const PollaVotesDefault = null;


		/**
		 * Private member variable that stores a reference to a single WpPollsipAsPollipAid object
		 * (of type WpPollsip), if this WpPollsa object was restored with
		 * an expansion on the wp_pollsip association table.
		 * @var WpPollsip _objWpPollsipAsPollipAid;
		 */
		private $_objWpPollsipAsPollipAid;

		/**
		 * Private member variable that stores a reference to an array of WpPollsipAsPollipAid objects
		 * (of type WpPollsip[]), if this WpPollsa object was restored with
		 * an ExpandAsArray on the wp_pollsip association table.
		 * @var WpPollsip[] _objWpPollsipAsPollipAidArray;
		 */
		private $_objWpPollsipAsPollipAidArray = null;

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
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column wp_pollsa.polla_qid.
		 *
		 * NOTE: Always use the PollaQidObject property getter to correctly retrieve this WpPollsq object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpPollsq objPollaQidObject
		 */
		protected $objPollaQidObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intPollaAid = WpPollsa::PollaAidDefault;
			$this->intPollaQid = WpPollsa::PollaQidDefault;
			$this->strPollaAnswers = WpPollsa::PollaAnswersDefault;
			$this->intPollaVotes = WpPollsa::PollaVotesDefault;
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
		 * Load a WpPollsa from PK Info
		 * @param integer $intPollaAid
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsa
		 */
		public static function Load($intPollaAid, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPollsa', $intPollaAid);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpPollsa::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPollsa()->PollaAid, $intPollaAid)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpPollsas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsa[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpPollsa::QueryArray to perform the LoadAll query
			try {
				return WpPollsa::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpPollsas
		 * @return int
		 */
		public static function CountAll() {
			// Call WpPollsa::QueryCount to perform the CountAll query
			return WpPollsa::QueryCount(QQ::All());
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
			$objDatabase = WpPollsa::GetDatabase();

			// Create/Build out the QueryBuilder object with WpPollsa-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_pollsa');

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
				WpPollsa::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_pollsa');

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
		 * Static Qcubed Query method to query for a single WpPollsa object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPollsa the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpPollsa object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpPollsa::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpPollsa::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpPollsa objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPollsa[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpPollsa::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpPollsa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpPollsa objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPollsa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpPollsa::GetDatabase();

			$strQuery = WpPollsa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wppollsa', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpPollsa::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpPollsa
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_pollsa';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'polla_aid', $strAliasPrefix . 'polla_aid');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'polla_aid', $strAliasPrefix . 'polla_aid');
			    $objBuilder->AddSelectItem($strTableName, 'polla_qid', $strAliasPrefix . 'polla_qid');
			    $objBuilder->AddSelectItem($strTableName, 'polla_answers', $strAliasPrefix . 'polla_answers');
			    $objBuilder->AddSelectItem($strTableName, 'polla_votes', $strAliasPrefix . 'polla_votes');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpPollsa from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpPollsa::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpPollsa
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'polla_aid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intPollaAid == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'wp_pollsa__';


						// Expanding reverse references: WpPollsipAsPollipAid
						$strAlias = $strAliasPrefix . 'wppollsipaspollipaid__pollip_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpPollsipAsPollipAidArray)
								$objPreviousItem->_objWpPollsipAsPollipAidArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpPollsipAsPollipAidArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpPollsipAsPollipAidArray;
								$objChildItem = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipaid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpPollsipAsPollipAidArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpPollsipAsPollipAidArray[] = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipaid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'wp_pollsa__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the WpPollsa object
			$objToReturn = new WpPollsa();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'polla_aid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollaAid = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'polla_qid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollaQid = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'polla_answers';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPollaAnswers = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'polla_votes';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPollaVotes = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->PollaAid != $objPreviousItem->PollaAid) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objWpPollsipAsPollipAidArray);
					$cnt = count($objToReturn->_objWpPollsipAsPollipAidArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpPollsipAsPollipAidArray, $objToReturn->_objWpPollsipAsPollipAidArray)) {
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
				$strAliasPrefix = 'wp_pollsa__';

			// Check for PollaQidObject Early Binding
			$strAlias = $strAliasPrefix . 'polla_qid__pollq_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPollaQidObject = WpPollsq::InstantiateDbRow($objDbRow, $strAliasPrefix . 'polla_qid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for WpPollsipAsPollipAid Virtual Binding
			$strAlias = $strAliasPrefix . 'wppollsipaspollipaid__pollip_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpPollsipAsPollipAidArray)
				$objToReturn->_objWpPollsipAsPollipAidArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpPollsipAsPollipAidArray[] = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipaid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpPollsipAsPollipAid = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipaid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpPollsas from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpPollsa[]
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
					$objItem = WpPollsa::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpPollsa::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpPollsa object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpPollsa next row resulting from the query
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
			return WpPollsa::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpPollsa object,
		 * by PollaAid Index(es)
		 * @param integer $intPollaAid
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsa
		*/
		public static function LoadByPollaAid($intPollaAid, $objOptionalClauses = null) {
			return WpPollsa::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPollsa()->PollaAid, $intPollaAid)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpPollsa objects,
		 * by PollaQid Index(es)
		 * @param integer $intPollaQid
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsa[]
		*/
		public static function LoadArrayByPollaQid($intPollaQid, $objOptionalClauses = null) {
			// Call WpPollsa::QueryArray to perform the LoadArrayByPollaQid query
			try {
				return WpPollsa::QueryArray(
					QQ::Equal(QQN::WpPollsa()->PollaQid, $intPollaQid),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPollsas
		 * by PollaQid Index(es)
		 * @param integer $intPollaQid
		 * @return int
		*/
		public static function CountByPollaQid($intPollaQid) {
			// Call WpPollsa::QueryCount to perform the CountByPollaQid query
			return WpPollsa::QueryCount(
				QQ::Equal(QQN::WpPollsa()->PollaQid, $intPollaQid)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpPollsa
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_pollsa` (
							`polla_qid`,
							`polla_answers`,
							`polla_votes`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intPollaQid) . ',
							' . $objDatabase->SqlVariable($this->strPollaAnswers) . ',
							' . $objDatabase->SqlVariable($this->intPollaVotes) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intPollaAid = $objDatabase->InsertId('wp_pollsa', 'polla_aid');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_pollsa`
						SET
							`polla_qid` = ' . $objDatabase->SqlVariable($this->intPollaQid) . ',
							`polla_answers` = ' . $objDatabase->SqlVariable($this->strPollaAnswers) . ',
							`polla_votes` = ' . $objDatabase->SqlVariable($this->intPollaVotes) . '
						WHERE
							`polla_aid` = ' . $objDatabase->SqlVariable($this->intPollaAid) . '
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
		 * Delete this WpPollsa
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intPollaAid)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpPollsa with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsa`
				WHERE
					`polla_aid` = ' . $objDatabase->SqlVariable($this->intPollaAid) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpPollsa ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPollsa', $this->intPollaAid);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpPollsas
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsa`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_pollsa table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_pollsa`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpPollsa from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpPollsa object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpPollsa::Load($this->intPollaAid);

			// Update $this's local variables to match
			$this->PollaQid = $objReloaded->PollaQid;
			$this->strPollaAnswers = $objReloaded->strPollaAnswers;
			$this->intPollaVotes = $objReloaded->intPollaVotes;
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
				case 'PollaAid':
					/**
					 * Gets the value for intPollaAid (Read-Only PK)
					 * @return integer
					 */
					return $this->intPollaAid;

				case 'PollaQid':
					/**
					 * Gets the value for intPollaQid (Not Null)
					 * @return integer
					 */
					return $this->intPollaQid;

				case 'PollaAnswers':
					/**
					 * Gets the value for strPollaAnswers (Not Null)
					 * @return string
					 */
					return $this->strPollaAnswers;

				case 'PollaVotes':
					/**
					 * Gets the value for intPollaVotes (Not Null)
					 * @return integer
					 */
					return $this->intPollaVotes;


				///////////////////
				// Member Objects
				///////////////////
				case 'PollaQidObject':
					/**
					 * Gets the value for the WpPollsq object referenced by intPollaQid (Not Null)
					 * @return WpPollsq
					 */
					try {
						if ((!$this->objPollaQidObject) && (!is_null($this->intPollaQid)))
							$this->objPollaQidObject = WpPollsq::Load($this->intPollaQid);
						return $this->objPollaQidObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_WpPollsipAsPollipAid':
					/**
					 * Gets the value for the private _objWpPollsipAsPollipAid (Read-Only)
					 * if set due to an expansion on the wp_pollsip.pollip_aid reverse relationship
					 * @return WpPollsip
					 */
					return $this->_objWpPollsipAsPollipAid;

				case '_WpPollsipAsPollipAidArray':
					/**
					 * Gets the value for the private _objWpPollsipAsPollipAidArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_pollsip.pollip_aid reverse relationship
					 * @return WpPollsip[]
					 */
					return $this->_objWpPollsipAsPollipAidArray;


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
				case 'PollaQid':
					/**
					 * Sets the value for intPollaQid (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPollaQidObject = null;
						return ($this->intPollaQid = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollaAnswers':
					/**
					 * Sets the value for strPollaAnswers (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPollaAnswers = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PollaVotes':
					/**
					 * Sets the value for intPollaVotes (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPollaVotes = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'PollaQidObject':
					/**
					 * Sets the value for the WpPollsq object referenced by intPollaQid (Not Null)
					 * @param WpPollsq $mixValue
					 * @return WpPollsq
					 */
					if (is_null($mixValue)) {
						$this->intPollaQid = null;
						$this->objPollaQidObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a WpPollsq object
						try {
							$mixValue = QType::Cast($mixValue, 'WpPollsq');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED WpPollsq object
						if (is_null($mixValue->PollqId))
							throw new QCallerException('Unable to set an unsaved PollaQidObject for this WpPollsa');

						// Update Local Member Variables
						$this->objPollaQidObject = $mixValue;
						$this->intPollaQid = $mixValue->PollqId;

						// Return $mixValue
						return $mixValue;
					}
					break;

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



		// Related Objects' Methods for WpPollsipAsPollipAid
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpPollsipsAsPollipAid as an array of WpPollsip objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsip[]
		*/
		public function GetWpPollsipAsPollipAidArray($objOptionalClauses = null) {
			if ((is_null($this->intPollaAid)))
				return array();

			try {
				return WpPollsip::LoadArrayByPollipAid($this->intPollaAid, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpPollsipsAsPollipAid
		 * @return int
		*/
		public function CountWpPollsipsAsPollipAid() {
			if ((is_null($this->intPollaAid)))
				return 0;

			return WpPollsip::CountByPollipAid($this->intPollaAid);
		}

		/**
		 * Associates a WpPollsipAsPollipAid
		 * @param WpPollsip $objWpPollsip
		 * @return void
		*/
		public function AssociateWpPollsipAsPollipAid(WpPollsip $objWpPollsip) {
			if ((is_null($this->intPollaAid)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPollsipAsPollipAid on this unsaved WpPollsa.');
			if ((is_null($objWpPollsip->PollipId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPollsipAsPollipAid on this WpPollsa with an unsaved WpPollsip.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pollsip`
				SET
					`pollip_aid` = ' . $objDatabase->SqlVariable($this->intPollaAid) . '
				WHERE
					`pollip_id` = ' . $objDatabase->SqlVariable($objWpPollsip->PollipId) . ' 
			');
		}

		/**
		 * Unassociates a WpPollsipAsPollipAid
		 * @param WpPollsip $objWpPollsip
		 * @return void
		*/
		public function UnassociateWpPollsipAsPollipAid(WpPollsip $objWpPollsip) {
			if ((is_null($this->intPollaAid)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipAid on this unsaved WpPollsa.');
			if ((is_null($objWpPollsip->PollipId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipAid on this WpPollsa with an unsaved WpPollsip.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pollsip`
				SET
					`pollip_aid` = null
				WHERE
					`pollip_id` = ' . $objDatabase->SqlVariable($objWpPollsip->PollipId) . ' AND
					`pollip_aid` = ' . $objDatabase->SqlVariable($this->intPollaAid) . '
			');
		}

		/**
		 * Unassociates all WpPollsipsAsPollipAid
		 * @return void
		*/
		public function UnassociateAllWpPollsipsAsPollipAid() {
			if ((is_null($this->intPollaAid)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipAid on this unsaved WpPollsa.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pollsip`
				SET
					`pollip_aid` = null
				WHERE
					`pollip_aid` = ' . $objDatabase->SqlVariable($this->intPollaAid) . '
			');
		}

		/**
		 * Deletes an associated WpPollsipAsPollipAid
		 * @param WpPollsip $objWpPollsip
		 * @return void
		*/
		public function DeleteAssociatedWpPollsipAsPollipAid(WpPollsip $objWpPollsip) {
			if ((is_null($this->intPollaAid)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipAid on this unsaved WpPollsa.');
			if ((is_null($objWpPollsip->PollipId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipAid on this WpPollsa with an unsaved WpPollsip.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsip`
				WHERE
					`pollip_id` = ' . $objDatabase->SqlVariable($objWpPollsip->PollipId) . ' AND
					`pollip_aid` = ' . $objDatabase->SqlVariable($this->intPollaAid) . '
			');
		}

		/**
		 * Deletes all associated WpPollsipsAsPollipAid
		 * @return void
		*/
		public function DeleteAllWpPollsipsAsPollipAid() {
			if ((is_null($this->intPollaAid)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipAid on this unsaved WpPollsa.');

			// Get the Database Object for this Class
			$objDatabase = WpPollsa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsip`
				WHERE
					`pollip_aid` = ' . $objDatabase->SqlVariable($this->intPollaAid) . '
			');
		}


		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "wp_pollsa";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpPollsa::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpPollsa"><sequence>';
			$strToReturn .= '<element name="PollaAid" type="xsd:int"/>';
			$strToReturn .= '<element name="PollaQidObject" type="xsd1:WpPollsq"/>';
			$strToReturn .= '<element name="PollaAnswers" type="xsd:string"/>';
			$strToReturn .= '<element name="PollaVotes" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpPollsa', $strComplexTypeArray)) {
				$strComplexTypeArray['WpPollsa'] = WpPollsa::GetSoapComplexTypeXml();
				WpPollsq::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpPollsa::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpPollsa();
			if (property_exists($objSoapObject, 'PollaAid'))
				$objToReturn->intPollaAid = $objSoapObject->PollaAid;
			if ((property_exists($objSoapObject, 'PollaQidObject')) &&
				($objSoapObject->PollaQidObject))
				$objToReturn->PollaQidObject = WpPollsq::GetObjectFromSoapObject($objSoapObject->PollaQidObject);
			if (property_exists($objSoapObject, 'PollaAnswers'))
				$objToReturn->strPollaAnswers = $objSoapObject->PollaAnswers;
			if (property_exists($objSoapObject, 'PollaVotes'))
				$objToReturn->intPollaVotes = $objSoapObject->PollaVotes;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpPollsa::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPollaQidObject)
				$objObject->objPollaQidObject = WpPollsq::GetSoapObjectFromObject($objObject->objPollaQidObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPollaQid = null;
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
			$iArray['PollaAid'] = $this->intPollaAid;
			$iArray['PollaQid'] = $this->intPollaQid;
			$iArray['PollaAnswers'] = $this->strPollaAnswers;
			$iArray['PollaVotes'] = $this->intPollaVotes;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intPollaAid ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $PollaAid
     * @property-read QQNode $PollaQid
     * @property-read QQNodeWpPollsq $PollaQidObject
     * @property-read QQNode $PollaAnswers
     * @property-read QQNode $PollaVotes
     *
     *
     * @property-read QQReverseReferenceNodeWpPollsip $WpPollsipAsPollipAid

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpPollsa extends QQNode {
		protected $strTableName = 'wp_pollsa';
		protected $strPrimaryKey = 'polla_aid';
		protected $strClassName = 'WpPollsa';
		public function __get($strName) {
			switch ($strName) {
				case 'PollaAid':
					return new QQNode('polla_aid', 'PollaAid', 'Integer', $this);
				case 'PollaQid':
					return new QQNode('polla_qid', 'PollaQid', 'Integer', $this);
				case 'PollaQidObject':
					return new QQNodeWpPollsq('polla_qid', 'PollaQidObject', 'Integer', $this);
				case 'PollaAnswers':
					return new QQNode('polla_answers', 'PollaAnswers', 'VarChar', $this);
				case 'PollaVotes':
					return new QQNode('polla_votes', 'PollaVotes', 'Integer', $this);
				case 'WpPollsipAsPollipAid':
					return new QQReverseReferenceNodeWpPollsip($this, 'wppollsipaspollipaid', 'reverse_reference', 'pollip_aid');

				case '_PrimaryKeyNode':
					return new QQNode('polla_aid', 'PollaAid', 'Integer', $this);
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
     * @property-read QQNode $PollaAid
     * @property-read QQNode $PollaQid
     * @property-read QQNodeWpPollsq $PollaQidObject
     * @property-read QQNode $PollaAnswers
     * @property-read QQNode $PollaVotes
     *
     *
     * @property-read QQReverseReferenceNodeWpPollsip $WpPollsipAsPollipAid

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpPollsa extends QQReverseReferenceNode {
		protected $strTableName = 'wp_pollsa';
		protected $strPrimaryKey = 'polla_aid';
		protected $strClassName = 'WpPollsa';
		public function __get($strName) {
			switch ($strName) {
				case 'PollaAid':
					return new QQNode('polla_aid', 'PollaAid', 'integer', $this);
				case 'PollaQid':
					return new QQNode('polla_qid', 'PollaQid', 'integer', $this);
				case 'PollaQidObject':
					return new QQNodeWpPollsq('polla_qid', 'PollaQidObject', 'integer', $this);
				case 'PollaAnswers':
					return new QQNode('polla_answers', 'PollaAnswers', 'string', $this);
				case 'PollaVotes':
					return new QQNode('polla_votes', 'PollaVotes', 'integer', $this);
				case 'WpPollsipAsPollipAid':
					return new QQReverseReferenceNodeWpPollsip($this, 'wppollsipaspollipaid', 'reverse_reference', 'pollip_aid');

				case '_PrimaryKeyNode':
					return new QQNode('polla_aid', 'PollaAid', 'integer', $this);
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
