<?php
	/**
	 * The abstract WpTermRelationshipsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpTermRelationships subclass which
	 * extends this WpTermRelationshipsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpTermRelationships class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $ObjectId the value for intObjectId (PK)
	 * @property integer $TermTaxonomyId the value for intTermTaxonomyId (PK)
	 * @property integer $TermOrder the value for intTermOrder (Not Null)
	 * @property WpTermTaxonomy $TermTaxonomy the value for the WpTermTaxonomy object referenced by intTermTaxonomyId (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpTermRelationshipsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column wp_term_relationships.object_id
		 * @var integer intObjectId
		 */
		protected $intObjectId;
		const ObjectIdDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intObjectId;
		 */
		protected $__intObjectId;

		/**
		 * Protected member variable that maps to the database PK column wp_term_relationships.term_taxonomy_id
		 * @var integer intTermTaxonomyId
		 */
		protected $intTermTaxonomyId;
		const TermTaxonomyIdDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intTermTaxonomyId;
		 */
		protected $__intTermTaxonomyId;

		/**
		 * Protected member variable that maps to the database column wp_term_relationships.term_order
		 * @var integer intTermOrder
		 */
		protected $intTermOrder;
		const TermOrderDefault = null;


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
		 * in the database column wp_term_relationships.term_taxonomy_id.
		 *
		 * NOTE: Always use the TermTaxonomy property getter to correctly retrieve this WpTermTaxonomy object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpTermTaxonomy objTermTaxonomy
		 */
		protected $objTermTaxonomy;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intObjectId = WpTermRelationships::ObjectIdDefault;
			$this->intTermTaxonomyId = WpTermRelationships::TermTaxonomyIdDefault;
			$this->intTermOrder = WpTermRelationships::TermOrderDefault;
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
		 * Load a WpTermRelationships from PK Info
		 * @param integer $intObjectId		 * @param integer $intTermTaxonomyId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermRelationships
		 */
		public static function Load($intObjectId, $intTermTaxonomyId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpTermRelationships', $intObjectId, $intTermTaxonomyId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpTermRelationships::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpTermRelationships()->ObjectId, $intObjectId),
					QQ::Equal(QQN::WpTermRelationships()->TermTaxonomyId, $intTermTaxonomyId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpTermRelationshipses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermRelationships[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpTermRelationships::QueryArray to perform the LoadAll query
			try {
				return WpTermRelationships::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpTermRelationshipses
		 * @return int
		 */
		public static function CountAll() {
			// Call WpTermRelationships::QueryCount to perform the CountAll query
			return WpTermRelationships::QueryCount(QQ::All());
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
			$objDatabase = WpTermRelationships::GetDatabase();

			// Create/Build out the QueryBuilder object with WpTermRelationships-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_term_relationships');

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
				WpTermRelationships::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_term_relationships');

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
		 * Static Qcubed Query method to query for a single WpTermRelationships object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpTermRelationships the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpTermRelationships::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpTermRelationships object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpTermRelationships::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpTermRelationships::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpTermRelationships objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpTermRelationships[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpTermRelationships::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpTermRelationships::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpTermRelationships::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpTermRelationships objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpTermRelationships::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpTermRelationships::GetDatabase();

			$strQuery = WpTermRelationships::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wptermrelationships', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpTermRelationships::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpTermRelationships
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_term_relationships';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'object_id', $strAliasPrefix . 'object_id');
			    $objBuilder->AddSelectItem($strTableName, 'term_taxonomy_id', $strAliasPrefix . 'term_taxonomy_id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'object_id', $strAliasPrefix . 'object_id');
			    $objBuilder->AddSelectItem($strTableName, 'term_taxonomy_id', $strAliasPrefix . 'term_taxonomy_id');
			    $objBuilder->AddSelectItem($strTableName, 'term_order', $strAliasPrefix . 'term_order');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpTermRelationships from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpTermRelationships::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpTermRelationships
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpTermRelationships object
			$objToReturn = new WpTermRelationships();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'object_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intObjectId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intObjectId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'term_taxonomy_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTermTaxonomyId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intTermTaxonomyId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'term_order';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTermOrder = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->ObjectId != $objPreviousItem->ObjectId) {
						continue;
					}
					if ($objToReturn->TermTaxonomyId != $objPreviousItem->TermTaxonomyId) {
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
				$strAliasPrefix = 'wp_term_relationships__';

			// Check for TermTaxonomy Early Binding
			$strAlias = $strAliasPrefix . 'term_taxonomy_id__term_taxonomy_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTermTaxonomy = WpTermTaxonomy::InstantiateDbRow($objDbRow, $strAliasPrefix . 'term_taxonomy_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpTermRelationshipses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpTermRelationships[]
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
					$objItem = WpTermRelationships::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpTermRelationships::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpTermRelationships object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpTermRelationships next row resulting from the query
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
			return WpTermRelationships::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpTermRelationships object,
		 * by ObjectId, TermTaxonomyId Index(es)
		 * @param integer $intObjectId
		 * @param integer $intTermTaxonomyId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermRelationships
		*/
		public static function LoadByObjectIdTermTaxonomyId($intObjectId, $intTermTaxonomyId, $objOptionalClauses = null) {
			return WpTermRelationships::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpTermRelationships()->ObjectId, $intObjectId),
					QQ::Equal(QQN::WpTermRelationships()->TermTaxonomyId, $intTermTaxonomyId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpTermRelationships objects,
		 * by TermTaxonomyId Index(es)
		 * @param integer $intTermTaxonomyId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermRelationships[]
		*/
		public static function LoadArrayByTermTaxonomyId($intTermTaxonomyId, $objOptionalClauses = null) {
			// Call WpTermRelationships::QueryArray to perform the LoadArrayByTermTaxonomyId query
			try {
				return WpTermRelationships::QueryArray(
					QQ::Equal(QQN::WpTermRelationships()->TermTaxonomyId, $intTermTaxonomyId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpTermRelationshipses
		 * by TermTaxonomyId Index(es)
		 * @param integer $intTermTaxonomyId
		 * @return int
		*/
		public static function CountByTermTaxonomyId($intTermTaxonomyId) {
			// Call WpTermRelationships::QueryCount to perform the CountByTermTaxonomyId query
			return WpTermRelationships::QueryCount(
				QQ::Equal(QQN::WpTermRelationships()->TermTaxonomyId, $intTermTaxonomyId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpTermRelationships
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpTermRelationships::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_term_relationships` (
							`object_id`,
							`term_taxonomy_id`,
							`term_order`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intObjectId) . ',
							' . $objDatabase->SqlVariable($this->intTermTaxonomyId) . ',
							' . $objDatabase->SqlVariable($this->intTermOrder) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_term_relationships`
						SET
							`object_id` = ' . $objDatabase->SqlVariable($this->intObjectId) . ',
							`term_taxonomy_id` = ' . $objDatabase->SqlVariable($this->intTermTaxonomyId) . ',
							`term_order` = ' . $objDatabase->SqlVariable($this->intTermOrder) . '
						WHERE
							`object_id` = ' . $objDatabase->SqlVariable($this->__intObjectId) . ' AND 
							`term_taxonomy_id` = ' . $objDatabase->SqlVariable($this->__intTermTaxonomyId) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intObjectId = $this->intObjectId;
			$this->__intTermTaxonomyId = $this->intTermTaxonomyId;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this WpTermRelationships
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intObjectId)) || (is_null($this->intTermTaxonomyId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpTermRelationships with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpTermRelationships::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_term_relationships`
				WHERE
					`object_id` = ' . $objDatabase->SqlVariable($this->intObjectId) . ' AND
					`term_taxonomy_id` = ' . $objDatabase->SqlVariable($this->intTermTaxonomyId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpTermRelationships ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpTermRelationships', $this->intObjectId, $this->intTermTaxonomyId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpTermRelationshipses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpTermRelationships::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_term_relationships`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_term_relationships table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpTermRelationships::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_term_relationships`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpTermRelationships from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpTermRelationships object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpTermRelationships::Load($this->intObjectId, $this->intTermTaxonomyId);

			// Update $this's local variables to match
			$this->intObjectId = $objReloaded->intObjectId;
			$this->__intObjectId = $this->intObjectId;
			$this->TermTaxonomyId = $objReloaded->TermTaxonomyId;
			$this->__intTermTaxonomyId = $this->intTermTaxonomyId;
			$this->intTermOrder = $objReloaded->intTermOrder;
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
				case 'ObjectId':
					/**
					 * Gets the value for intObjectId (PK)
					 * @return integer
					 */
					return $this->intObjectId;

				case 'TermTaxonomyId':
					/**
					 * Gets the value for intTermTaxonomyId (PK)
					 * @return integer
					 */
					return $this->intTermTaxonomyId;

				case 'TermOrder':
					/**
					 * Gets the value for intTermOrder (Not Null)
					 * @return integer
					 */
					return $this->intTermOrder;


				///////////////////
				// Member Objects
				///////////////////
				case 'TermTaxonomy':
					/**
					 * Gets the value for the WpTermTaxonomy object referenced by intTermTaxonomyId (PK)
					 * @return WpTermTaxonomy
					 */
					try {
						if ((!$this->objTermTaxonomy) && (!is_null($this->intTermTaxonomyId)))
							$this->objTermTaxonomy = WpTermTaxonomy::Load($this->intTermTaxonomyId);
						return $this->objTermTaxonomy;
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
				case 'ObjectId':
					/**
					 * Sets the value for intObjectId (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intObjectId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TermTaxonomyId':
					/**
					 * Sets the value for intTermTaxonomyId (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTermTaxonomy = null;
						return ($this->intTermTaxonomyId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TermOrder':
					/**
					 * Sets the value for intTermOrder (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTermOrder = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'TermTaxonomy':
					/**
					 * Sets the value for the WpTermTaxonomy object referenced by intTermTaxonomyId (PK)
					 * @param WpTermTaxonomy $mixValue
					 * @return WpTermTaxonomy
					 */
					if (is_null($mixValue)) {
						$this->intTermTaxonomyId = null;
						$this->objTermTaxonomy = null;
						return null;
					} else {
						// Make sure $mixValue actually is a WpTermTaxonomy object
						try {
							$mixValue = QType::Cast($mixValue, 'WpTermTaxonomy');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED WpTermTaxonomy object
						if (is_null($mixValue->TermTaxonomyId))
							throw new QCallerException('Unable to set an unsaved TermTaxonomy for this WpTermRelationships');

						// Update Local Member Variables
						$this->objTermTaxonomy = $mixValue;
						$this->intTermTaxonomyId = $mixValue->TermTaxonomyId;

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
			return "wp_term_relationships";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpTermRelationships::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpTermRelationships"><sequence>';
			$strToReturn .= '<element name="ObjectId" type="xsd:int"/>';
			$strToReturn .= '<element name="TermTaxonomy" type="xsd1:WpTermTaxonomy"/>';
			$strToReturn .= '<element name="TermOrder" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpTermRelationships', $strComplexTypeArray)) {
				$strComplexTypeArray['WpTermRelationships'] = WpTermRelationships::GetSoapComplexTypeXml();
				WpTermTaxonomy::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpTermRelationships::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpTermRelationships();
			if (property_exists($objSoapObject, 'ObjectId'))
				$objToReturn->intObjectId = $objSoapObject->ObjectId;
			if ((property_exists($objSoapObject, 'TermTaxonomy')) &&
				($objSoapObject->TermTaxonomy))
				$objToReturn->TermTaxonomy = WpTermTaxonomy::GetObjectFromSoapObject($objSoapObject->TermTaxonomy);
			if (property_exists($objSoapObject, 'TermOrder'))
				$objToReturn->intTermOrder = $objSoapObject->TermOrder;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpTermRelationships::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objTermTaxonomy)
				$objObject->objTermTaxonomy = WpTermTaxonomy::GetSoapObjectFromObject($objObject->objTermTaxonomy, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTermTaxonomyId = null;
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
			$iArray['ObjectId'] = $this->intObjectId;
			$iArray['TermTaxonomyId'] = $this->intTermTaxonomyId;
			$iArray['TermOrder'] = $this->intTermOrder;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  array( $this->intObjectId,  $this->intTermTaxonomyId) ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $ObjectId
     * @property-read QQNode $TermTaxonomyId
     * @property-read QQNodeWpTermTaxonomy $TermTaxonomy
     * @property-read QQNode $TermOrder
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpTermRelationships extends QQNode {
		protected $strTableName = 'wp_term_relationships';
		protected $strPrimaryKey = 'object_id';
		protected $strClassName = 'WpTermRelationships';
		public function __get($strName) {
			switch ($strName) {
				case 'ObjectId':
					return new QQNode('object_id', 'ObjectId', 'Integer', $this);
				case 'TermTaxonomyId':
					return new QQNode('term_taxonomy_id', 'TermTaxonomyId', 'Integer', $this);
				case 'TermTaxonomy':
					return new QQNodeWpTermTaxonomy('term_taxonomy_id', 'TermTaxonomy', 'Integer', $this);
				case 'TermOrder':
					return new QQNode('term_order', 'TermOrder', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('object_id', 'ObjectId', 'Integer', $this);
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
     * @property-read QQNode $ObjectId
     * @property-read QQNode $TermTaxonomyId
     * @property-read QQNodeWpTermTaxonomy $TermTaxonomy
     * @property-read QQNode $TermOrder
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpTermRelationships extends QQReverseReferenceNode {
		protected $strTableName = 'wp_term_relationships';
		protected $strPrimaryKey = 'object_id';
		protected $strClassName = 'WpTermRelationships';
		public function __get($strName) {
			switch ($strName) {
				case 'ObjectId':
					return new QQNode('object_id', 'ObjectId', 'integer', $this);
				case 'TermTaxonomyId':
					return new QQNode('term_taxonomy_id', 'TermTaxonomyId', 'integer', $this);
				case 'TermTaxonomy':
					return new QQNodeWpTermTaxonomy('term_taxonomy_id', 'TermTaxonomy', 'integer', $this);
				case 'TermOrder':
					return new QQNode('term_order', 'TermOrder', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('object_id', 'ObjectId', 'integer', $this);
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
