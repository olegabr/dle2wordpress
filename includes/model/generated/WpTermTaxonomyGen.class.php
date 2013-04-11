<?php
	/**
	 * The abstract WpTermTaxonomyGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpTermTaxonomy subclass which
	 * extends this WpTermTaxonomyGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpTermTaxonomy class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $TermTaxonomyId the value for intTermTaxonomyId (Read-Only PK)
	 * @property integer $TermId the value for intTermId (Not Null)
	 * @property string $Taxonomy the value for strTaxonomy (Not Null)
	 * @property string $Description the value for strDescription (Not Null)
	 * @property integer $Parent the value for intParent (Not Null)
	 * @property integer $Count the value for intCount (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpTermTaxonomyGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_term_taxonomy.term_taxonomy_id
		 * @var integer intTermTaxonomyId
		 */
		protected $intTermTaxonomyId;
		const TermTaxonomyIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_term_taxonomy.term_id
		 * @var integer intTermId
		 */
		protected $intTermId;
		const TermIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_term_taxonomy.taxonomy
		 * @var string strTaxonomy
		 */
		protected $strTaxonomy;
		const TaxonomyMaxLength = 32;
		const TaxonomyDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_term_taxonomy.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_term_taxonomy.parent
		 * @var integer intParent
		 */
		protected $intParent;
		const ParentDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_term_taxonomy.count
		 * @var integer intCount
		 */
		protected $intCount;
		const CountDefault = null;


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
			$this->intTermTaxonomyId = WpTermTaxonomy::TermTaxonomyIdDefault;
			$this->intTermId = WpTermTaxonomy::TermIdDefault;
			$this->strTaxonomy = WpTermTaxonomy::TaxonomyDefault;
			$this->strDescription = WpTermTaxonomy::DescriptionDefault;
			$this->intParent = WpTermTaxonomy::ParentDefault;
			$this->intCount = WpTermTaxonomy::CountDefault;
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
		 * Load a WpTermTaxonomy from PK Info
		 * @param integer $intTermTaxonomyId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermTaxonomy
		 */
		public static function Load($intTermTaxonomyId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpTermTaxonomy', $intTermTaxonomyId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpTermTaxonomy::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpTermTaxonomy()->TermTaxonomyId, $intTermTaxonomyId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpTermTaxonomies
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermTaxonomy[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpTermTaxonomy::QueryArray to perform the LoadAll query
			try {
				return WpTermTaxonomy::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpTermTaxonomies
		 * @return int
		 */
		public static function CountAll() {
			// Call WpTermTaxonomy::QueryCount to perform the CountAll query
			return WpTermTaxonomy::QueryCount(QQ::All());
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
			$objDatabase = WpTermTaxonomy::GetDatabase();

			// Create/Build out the QueryBuilder object with WpTermTaxonomy-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_term_taxonomy');

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
				WpTermTaxonomy::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_term_taxonomy');

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
		 * Static Qcubed Query method to query for a single WpTermTaxonomy object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpTermTaxonomy the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpTermTaxonomy::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpTermTaxonomy object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpTermTaxonomy::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpTermTaxonomy::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpTermTaxonomy objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpTermTaxonomy[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpTermTaxonomy::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpTermTaxonomy::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpTermTaxonomy::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpTermTaxonomy objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpTermTaxonomy::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpTermTaxonomy::GetDatabase();

			$strQuery = WpTermTaxonomy::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wptermtaxonomy', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpTermTaxonomy::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpTermTaxonomy
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_term_taxonomy';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'term_taxonomy_id', $strAliasPrefix . 'term_taxonomy_id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'term_taxonomy_id', $strAliasPrefix . 'term_taxonomy_id');
			    $objBuilder->AddSelectItem($strTableName, 'term_id', $strAliasPrefix . 'term_id');
			    $objBuilder->AddSelectItem($strTableName, 'taxonomy', $strAliasPrefix . 'taxonomy');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'parent', $strAliasPrefix . 'parent');
			    $objBuilder->AddSelectItem($strTableName, 'count', $strAliasPrefix . 'count');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpTermTaxonomy from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpTermTaxonomy::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpTermTaxonomy
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpTermTaxonomy object
			$objToReturn = new WpTermTaxonomy();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'term_taxonomy_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTermTaxonomyId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'term_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTermId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'taxonomy';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTaxonomy = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'parent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'count';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCount = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
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
				$strAliasPrefix = 'wp_term_taxonomy__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpTermTaxonomies from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpTermTaxonomy[]
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
					$objItem = WpTermTaxonomy::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpTermTaxonomy::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpTermTaxonomy object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpTermTaxonomy next row resulting from the query
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
			return WpTermTaxonomy::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpTermTaxonomy object,
		 * by TermTaxonomyId Index(es)
		 * @param integer $intTermTaxonomyId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermTaxonomy
		*/
		public static function LoadByTermTaxonomyId($intTermTaxonomyId, $objOptionalClauses = null) {
			return WpTermTaxonomy::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpTermTaxonomy()->TermTaxonomyId, $intTermTaxonomyId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single WpTermTaxonomy object,
		 * by TermId, Taxonomy Index(es)
		 * @param integer $intTermId
		 * @param string $strTaxonomy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermTaxonomy
		*/
		public static function LoadByTermIdTaxonomy($intTermId, $strTaxonomy, $objOptionalClauses = null) {
			return WpTermTaxonomy::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpTermTaxonomy()->TermId, $intTermId),
					QQ::Equal(QQN::WpTermTaxonomy()->Taxonomy, $strTaxonomy)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpTermTaxonomy objects,
		 * by Taxonomy Index(es)
		 * @param string $strTaxonomy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpTermTaxonomy[]
		*/
		public static function LoadArrayByTaxonomy($strTaxonomy, $objOptionalClauses = null) {
			// Call WpTermTaxonomy::QueryArray to perform the LoadArrayByTaxonomy query
			try {
				return WpTermTaxonomy::QueryArray(
					QQ::Equal(QQN::WpTermTaxonomy()->Taxonomy, $strTaxonomy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpTermTaxonomies
		 * by Taxonomy Index(es)
		 * @param string $strTaxonomy
		 * @return int
		*/
		public static function CountByTaxonomy($strTaxonomy) {
			// Call WpTermTaxonomy::QueryCount to perform the CountByTaxonomy query
			return WpTermTaxonomy::QueryCount(
				QQ::Equal(QQN::WpTermTaxonomy()->Taxonomy, $strTaxonomy)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpTermTaxonomy
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpTermTaxonomy::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_term_taxonomy` (
							`term_id`,
							`taxonomy`,
							`description`,
							`parent`,
							`count`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intTermId) . ',
							' . $objDatabase->SqlVariable($this->strTaxonomy) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intParent) . ',
							' . $objDatabase->SqlVariable($this->intCount) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intTermTaxonomyId = $objDatabase->InsertId('wp_term_taxonomy', 'term_taxonomy_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_term_taxonomy`
						SET
							`term_id` = ' . $objDatabase->SqlVariable($this->intTermId) . ',
							`taxonomy` = ' . $objDatabase->SqlVariable($this->strTaxonomy) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`parent` = ' . $objDatabase->SqlVariable($this->intParent) . ',
							`count` = ' . $objDatabase->SqlVariable($this->intCount) . '
						WHERE
							`term_taxonomy_id` = ' . $objDatabase->SqlVariable($this->intTermTaxonomyId) . '
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
		 * Delete this WpTermTaxonomy
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intTermTaxonomyId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpTermTaxonomy with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpTermTaxonomy::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_term_taxonomy`
				WHERE
					`term_taxonomy_id` = ' . $objDatabase->SqlVariable($this->intTermTaxonomyId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpTermTaxonomy ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpTermTaxonomy', $this->intTermTaxonomyId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpTermTaxonomies
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpTermTaxonomy::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_term_taxonomy`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_term_taxonomy table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpTermTaxonomy::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_term_taxonomy`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpTermTaxonomy from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpTermTaxonomy object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpTermTaxonomy::Load($this->intTermTaxonomyId);

			// Update $this's local variables to match
			$this->intTermId = $objReloaded->intTermId;
			$this->strTaxonomy = $objReloaded->strTaxonomy;
			$this->strDescription = $objReloaded->strDescription;
			$this->intParent = $objReloaded->intParent;
			$this->intCount = $objReloaded->intCount;
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
				case 'TermTaxonomyId':
					/**
					 * Gets the value for intTermTaxonomyId (Read-Only PK)
					 * @return integer
					 */
					return $this->intTermTaxonomyId;

				case 'TermId':
					/**
					 * Gets the value for intTermId (Not Null)
					 * @return integer
					 */
					return $this->intTermId;

				case 'Taxonomy':
					/**
					 * Gets the value for strTaxonomy (Not Null)
					 * @return string
					 */
					return $this->strTaxonomy;

				case 'Description':
					/**
					 * Gets the value for strDescription (Not Null)
					 * @return string
					 */
					return $this->strDescription;

				case 'Parent':
					/**
					 * Gets the value for intParent (Not Null)
					 * @return integer
					 */
					return $this->intParent;

				case 'Count':
					/**
					 * Gets the value for intCount (Not Null)
					 * @return integer
					 */
					return $this->intCount;


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
				case 'TermId':
					/**
					 * Sets the value for intTermId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTermId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Taxonomy':
					/**
					 * Sets the value for strTaxonomy (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTaxonomy = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					/**
					 * Sets the value for strDescription (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Parent':
					/**
					 * Sets the value for intParent (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intParent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Count':
					/**
					 * Sets the value for intCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCount = QType::Cast($mixValue, QType::Integer));
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
			return "wp_term_taxonomy";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpTermTaxonomy::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpTermTaxonomy"><sequence>';
			$strToReturn .= '<element name="TermTaxonomyId" type="xsd:int"/>';
			$strToReturn .= '<element name="TermId" type="xsd:int"/>';
			$strToReturn .= '<element name="Taxonomy" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="Parent" type="xsd:int"/>';
			$strToReturn .= '<element name="Count" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpTermTaxonomy', $strComplexTypeArray)) {
				$strComplexTypeArray['WpTermTaxonomy'] = WpTermTaxonomy::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpTermTaxonomy::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpTermTaxonomy();
			if (property_exists($objSoapObject, 'TermTaxonomyId'))
				$objToReturn->intTermTaxonomyId = $objSoapObject->TermTaxonomyId;
			if (property_exists($objSoapObject, 'TermId'))
				$objToReturn->intTermId = $objSoapObject->TermId;
			if (property_exists($objSoapObject, 'Taxonomy'))
				$objToReturn->strTaxonomy = $objSoapObject->Taxonomy;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'Parent'))
				$objToReturn->intParent = $objSoapObject->Parent;
			if (property_exists($objSoapObject, 'Count'))
				$objToReturn->intCount = $objSoapObject->Count;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpTermTaxonomy::GetSoapObjectFromObject($objObject, true));

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
			$iArray['TermTaxonomyId'] = $this->intTermTaxonomyId;
			$iArray['TermId'] = $this->intTermId;
			$iArray['Taxonomy'] = $this->strTaxonomy;
			$iArray['Description'] = $this->strDescription;
			$iArray['Parent'] = $this->intParent;
			$iArray['Count'] = $this->intCount;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intTermTaxonomyId ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $TermTaxonomyId
     * @property-read QQNode $TermId
     * @property-read QQNode $Taxonomy
     * @property-read QQNode $Description
     * @property-read QQNode $Parent
     * @property-read QQNode $Count
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpTermTaxonomy extends QQNode {
		protected $strTableName = 'wp_term_taxonomy';
		protected $strPrimaryKey = 'term_taxonomy_id';
		protected $strClassName = 'WpTermTaxonomy';
		public function __get($strName) {
			switch ($strName) {
				case 'TermTaxonomyId':
					return new QQNode('term_taxonomy_id', 'TermTaxonomyId', 'Integer', $this);
				case 'TermId':
					return new QQNode('term_id', 'TermId', 'Integer', $this);
				case 'Taxonomy':
					return new QQNode('taxonomy', 'Taxonomy', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'Parent':
					return new QQNode('parent', 'Parent', 'Integer', $this);
				case 'Count':
					return new QQNode('count', 'Count', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('term_taxonomy_id', 'TermTaxonomyId', 'Integer', $this);
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
     * @property-read QQNode $TermTaxonomyId
     * @property-read QQNode $TermId
     * @property-read QQNode $Taxonomy
     * @property-read QQNode $Description
     * @property-read QQNode $Parent
     * @property-read QQNode $Count
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpTermTaxonomy extends QQReverseReferenceNode {
		protected $strTableName = 'wp_term_taxonomy';
		protected $strPrimaryKey = 'term_taxonomy_id';
		protected $strClassName = 'WpTermTaxonomy';
		public function __get($strName) {
			switch ($strName) {
				case 'TermTaxonomyId':
					return new QQNode('term_taxonomy_id', 'TermTaxonomyId', 'integer', $this);
				case 'TermId':
					return new QQNode('term_id', 'TermId', 'integer', $this);
				case 'Taxonomy':
					return new QQNode('taxonomy', 'Taxonomy', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Parent':
					return new QQNode('parent', 'Parent', 'integer', $this);
				case 'Count':
					return new QQNode('count', 'Count', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('term_taxonomy_id', 'TermTaxonomyId', 'integer', $this);
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
