<?php
	/**
	 * The abstract WpPostmetaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpPostmeta subclass which
	 * extends this WpPostmetaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpPostmeta class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $MetaId the value for intMetaId (Read-Only PK)
	 * @property integer $PostId the value for intPostId (Not Null)
	 * @property string $MetaKey the value for strMetaKey 
	 * @property string $MetaValue the value for strMetaValue 
	 * @property WpPosts $Post the value for the WpPosts object referenced by intPostId (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpPostmetaGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_postmeta.meta_id
		 * @var integer intMetaId
		 */
		protected $intMetaId;
		const MetaIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_postmeta.post_id
		 * @var integer intPostId
		 */
		protected $intPostId;
		const PostIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_postmeta.meta_key
		 * @var string strMetaKey
		 */
		protected $strMetaKey;
		const MetaKeyMaxLength = 255;
		const MetaKeyDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_postmeta.meta_value
		 * @var string strMetaValue
		 */
		protected $strMetaValue;
		const MetaValueDefault = null;


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
		 * in the database column wp_postmeta.post_id.
		 *
		 * NOTE: Always use the Post property getter to correctly retrieve this WpPosts object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpPosts objPost
		 */
		protected $objPost;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intMetaId = WpPostmeta::MetaIdDefault;
			$this->intPostId = WpPostmeta::PostIdDefault;
			$this->strMetaKey = WpPostmeta::MetaKeyDefault;
			$this->strMetaValue = WpPostmeta::MetaValueDefault;
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
		 * Load a WpPostmeta from PK Info
		 * @param integer $intMetaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPostmeta
		 */
		public static function Load($intMetaId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPostmeta', $intMetaId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpPostmeta::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPostmeta()->MetaId, $intMetaId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpPostmetas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPostmeta[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpPostmeta::QueryArray to perform the LoadAll query
			try {
				return WpPostmeta::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpPostmetas
		 * @return int
		 */
		public static function CountAll() {
			// Call WpPostmeta::QueryCount to perform the CountAll query
			return WpPostmeta::QueryCount(QQ::All());
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
			$objDatabase = WpPostmeta::GetDatabase();

			// Create/Build out the QueryBuilder object with WpPostmeta-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_postmeta');

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
				WpPostmeta::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_postmeta');

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
		 * Static Qcubed Query method to query for a single WpPostmeta object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPostmeta the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPostmeta::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpPostmeta object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpPostmeta::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpPostmeta::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpPostmeta objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPostmeta[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPostmeta::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpPostmeta::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpPostmeta::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpPostmeta objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPostmeta::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpPostmeta::GetDatabase();

			$strQuery = WpPostmeta::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wppostmeta', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpPostmeta::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpPostmeta
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_postmeta';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'meta_id', $strAliasPrefix . 'meta_id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'meta_id', $strAliasPrefix . 'meta_id');
			    $objBuilder->AddSelectItem($strTableName, 'post_id', $strAliasPrefix . 'post_id');
			    $objBuilder->AddSelectItem($strTableName, 'meta_key', $strAliasPrefix . 'meta_key');
			    $objBuilder->AddSelectItem($strTableName, 'meta_value', $strAliasPrefix . 'meta_value');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpPostmeta from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpPostmeta::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpPostmeta
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpPostmeta object
			$objToReturn = new WpPostmeta();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'meta_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMetaId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'post_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPostId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'meta_key';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMetaKey = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'meta_value';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMetaValue = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->MetaId != $objPreviousItem->MetaId) {
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
				$strAliasPrefix = 'wp_postmeta__';

			// Check for Post Early Binding
			$strAlias = $strAliasPrefix . 'post_id__ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPost = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'post_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpPostmetas from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpPostmeta[]
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
					$objItem = WpPostmeta::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpPostmeta::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpPostmeta object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpPostmeta next row resulting from the query
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
			return WpPostmeta::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpPostmeta object,
		 * by MetaId Index(es)
		 * @param integer $intMetaId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPostmeta
		*/
		public static function LoadByMetaId($intMetaId, $objOptionalClauses = null) {
			return WpPostmeta::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPostmeta()->MetaId, $intMetaId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpPostmeta objects,
		 * by PostId Index(es)
		 * @param integer $intPostId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPostmeta[]
		*/
		public static function LoadArrayByPostId($intPostId, $objOptionalClauses = null) {
			// Call WpPostmeta::QueryArray to perform the LoadArrayByPostId query
			try {
				return WpPostmeta::QueryArray(
					QQ::Equal(QQN::WpPostmeta()->PostId, $intPostId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPostmetas
		 * by PostId Index(es)
		 * @param integer $intPostId
		 * @return int
		*/
		public static function CountByPostId($intPostId) {
			// Call WpPostmeta::QueryCount to perform the CountByPostId query
			return WpPostmeta::QueryCount(
				QQ::Equal(QQN::WpPostmeta()->PostId, $intPostId)
			);
		}

		/**
		 * Load an array of WpPostmeta objects,
		 * by MetaKey Index(es)
		 * @param string $strMetaKey
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPostmeta[]
		*/
		public static function LoadArrayByMetaKey($strMetaKey, $objOptionalClauses = null) {
			// Call WpPostmeta::QueryArray to perform the LoadArrayByMetaKey query
			try {
				return WpPostmeta::QueryArray(
					QQ::Equal(QQN::WpPostmeta()->MetaKey, $strMetaKey),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPostmetas
		 * by MetaKey Index(es)
		 * @param string $strMetaKey
		 * @return int
		*/
		public static function CountByMetaKey($strMetaKey) {
			// Call WpPostmeta::QueryCount to perform the CountByMetaKey query
			return WpPostmeta::QueryCount(
				QQ::Equal(QQN::WpPostmeta()->MetaKey, $strMetaKey)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpPostmeta
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpPostmeta::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_postmeta` (
							`post_id`,
							`meta_key`,
							`meta_value`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intPostId) . ',
							' . $objDatabase->SqlVariable($this->strMetaKey) . ',
							' . $objDatabase->SqlVariable($this->strMetaValue) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intMetaId = $objDatabase->InsertId('wp_postmeta', 'meta_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_postmeta`
						SET
							`post_id` = ' . $objDatabase->SqlVariable($this->intPostId) . ',
							`meta_key` = ' . $objDatabase->SqlVariable($this->strMetaKey) . ',
							`meta_value` = ' . $objDatabase->SqlVariable($this->strMetaValue) . '
						WHERE
							`meta_id` = ' . $objDatabase->SqlVariable($this->intMetaId) . '
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
		 * Delete this WpPostmeta
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intMetaId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpPostmeta with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpPostmeta::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_postmeta`
				WHERE
					`meta_id` = ' . $objDatabase->SqlVariable($this->intMetaId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpPostmeta ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPostmeta', $this->intMetaId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpPostmetas
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpPostmeta::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_postmeta`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_postmeta table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpPostmeta::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_postmeta`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpPostmeta from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpPostmeta object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpPostmeta::Load($this->intMetaId);

			// Update $this's local variables to match
			$this->PostId = $objReloaded->PostId;
			$this->strMetaKey = $objReloaded->strMetaKey;
			$this->strMetaValue = $objReloaded->strMetaValue;
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
				case 'MetaId':
					/**
					 * Gets the value for intMetaId (Read-Only PK)
					 * @return integer
					 */
					return $this->intMetaId;

				case 'PostId':
					/**
					 * Gets the value for intPostId (Not Null)
					 * @return integer
					 */
					return $this->intPostId;

				case 'MetaKey':
					/**
					 * Gets the value for strMetaKey 
					 * @return string
					 */
					return $this->strMetaKey;

				case 'MetaValue':
					/**
					 * Gets the value for strMetaValue 
					 * @return string
					 */
					return $this->strMetaValue;


				///////////////////
				// Member Objects
				///////////////////
				case 'Post':
					/**
					 * Gets the value for the WpPosts object referenced by intPostId (Not Null)
					 * @return WpPosts
					 */
					try {
						if ((!$this->objPost) && (!is_null($this->intPostId)))
							$this->objPost = WpPosts::Load($this->intPostId);
						return $this->objPost;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


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
				case 'PostId':
					/**
					 * Sets the value for intPostId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPost = null;
						return ($this->intPostId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MetaKey':
					/**
					 * Sets the value for strMetaKey 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMetaKey = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MetaValue':
					/**
					 * Sets the value for strMetaValue 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMetaValue = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'Post':
					/**
					 * Sets the value for the WpPosts object referenced by intPostId (Not Null)
					 * @param WpPosts $mixValue
					 * @return WpPosts
					 */
					if (is_null($mixValue)) {
						$this->intPostId = null;
						$this->objPost = null;
						return null;
					} else {
						// Make sure $mixValue actually is a WpPosts object
						try {
							$mixValue = QType::Cast($mixValue, 'WpPosts');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED WpPosts object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved Post for this WpPostmeta');

						// Update Local Member Variables
						$this->objPost = $mixValue;
						$this->intPostId = $mixValue->Id;

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



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "wp_postmeta";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpPostmeta::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpPostmeta"><sequence>';
			$strToReturn .= '<element name="MetaId" type="xsd:int"/>';
			$strToReturn .= '<element name="Post" type="xsd1:WpPosts"/>';
			$strToReturn .= '<element name="MetaKey" type="xsd:string"/>';
			$strToReturn .= '<element name="MetaValue" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpPostmeta', $strComplexTypeArray)) {
				$strComplexTypeArray['WpPostmeta'] = WpPostmeta::GetSoapComplexTypeXml();
				WpPosts::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpPostmeta::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpPostmeta();
			if (property_exists($objSoapObject, 'MetaId'))
				$objToReturn->intMetaId = $objSoapObject->MetaId;
			if ((property_exists($objSoapObject, 'Post')) &&
				($objSoapObject->Post))
				$objToReturn->Post = WpPosts::GetObjectFromSoapObject($objSoapObject->Post);
			if (property_exists($objSoapObject, 'MetaKey'))
				$objToReturn->strMetaKey = $objSoapObject->MetaKey;
			if (property_exists($objSoapObject, 'MetaValue'))
				$objToReturn->strMetaValue = $objSoapObject->MetaValue;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpPostmeta::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPost)
				$objObject->objPost = WpPosts::GetSoapObjectFromObject($objObject->objPost, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPostId = null;
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
			$iArray['MetaId'] = $this->intMetaId;
			$iArray['PostId'] = $this->intPostId;
			$iArray['MetaKey'] = $this->strMetaKey;
			$iArray['MetaValue'] = $this->strMetaValue;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intMetaId ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $MetaId
     * @property-read QQNode $PostId
     * @property-read QQNodeWpPosts $Post
     * @property-read QQNode $MetaKey
     * @property-read QQNode $MetaValue
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpPostmeta extends QQNode {
		protected $strTableName = 'wp_postmeta';
		protected $strPrimaryKey = 'meta_id';
		protected $strClassName = 'WpPostmeta';
		public function __get($strName) {
			switch ($strName) {
				case 'MetaId':
					return new QQNode('meta_id', 'MetaId', 'Integer', $this);
				case 'PostId':
					return new QQNode('post_id', 'PostId', 'Integer', $this);
				case 'Post':
					return new QQNodeWpPosts('post_id', 'Post', 'Integer', $this);
				case 'MetaKey':
					return new QQNode('meta_key', 'MetaKey', 'VarChar', $this);
				case 'MetaValue':
					return new QQNode('meta_value', 'MetaValue', 'Blob', $this);

				case '_PrimaryKeyNode':
					return new QQNode('meta_id', 'MetaId', 'Integer', $this);
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
     * @property-read QQNode $MetaId
     * @property-read QQNode $PostId
     * @property-read QQNodeWpPosts $Post
     * @property-read QQNode $MetaKey
     * @property-read QQNode $MetaValue
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpPostmeta extends QQReverseReferenceNode {
		protected $strTableName = 'wp_postmeta';
		protected $strPrimaryKey = 'meta_id';
		protected $strClassName = 'WpPostmeta';
		public function __get($strName) {
			switch ($strName) {
				case 'MetaId':
					return new QQNode('meta_id', 'MetaId', 'integer', $this);
				case 'PostId':
					return new QQNode('post_id', 'PostId', 'integer', $this);
				case 'Post':
					return new QQNodeWpPosts('post_id', 'Post', 'integer', $this);
				case 'MetaKey':
					return new QQNode('meta_key', 'MetaKey', 'string', $this);
				case 'MetaValue':
					return new QQNode('meta_value', 'MetaValue', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('meta_id', 'MetaId', 'integer', $this);
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
