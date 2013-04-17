<?php
	/**
	 * The abstract DleCategoryGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DleCategory subclass which
	 * extends this DleCategoryGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DleCategory class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $Parentid the value for intParentid (Not Null)
	 * @property integer $Posi the value for intPosi (Not Null)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $AltName the value for strAltName (Not Null)
	 * @property string $Icon the value for strIcon (Not Null)
	 * @property string $Skin the value for strSkin (Not Null)
	 * @property string $Descr the value for strDescr (Not Null)
	 * @property string $Keywords the value for strKeywords (Not Null)
	 * @property string $NewsSort the value for strNewsSort (Not Null)
	 * @property string $NewsMsort the value for strNewsMsort (Not Null)
	 * @property integer $NewsNumber the value for intNewsNumber (Not Null)
	 * @property string $ShortTpl the value for strShortTpl (Not Null)
	 * @property string $FullTpl the value for strFullTpl (Not Null)
	 * @property string $Metatitle the value for strMetatitle (Not Null)
	 * @property DleCategory $ParentidObject the value for the DleCategory object referenced by intParentid (Not Null)
	 * @property-read DleCategory $_DleCategoryAsParentid the value for the private _objDleCategoryAsParentid (Read-Only) if set due to an expansion on the dle_category.parentid reverse relationship
	 * @property-read DleCategory[] $_DleCategoryAsParentidArray the value for the private _objDleCategoryAsParentidArray (Read-Only) if set due to an ExpandAsArray on the dle_category.parentid reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DleCategoryGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_category.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.parentid
		 * @var integer intParentid
		 */
		protected $intParentid;
		const ParentidDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.posi
		 * @var integer intPosi
		 */
		protected $intPosi;
		const PosiDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 50;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.alt_name
		 * @var string strAltName
		 */
		protected $strAltName;
		const AltNameMaxLength = 50;
		const AltNameDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.icon
		 * @var string strIcon
		 */
		protected $strIcon;
		const IconMaxLength = 200;
		const IconDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.skin
		 * @var string strSkin
		 */
		protected $strSkin;
		const SkinMaxLength = 50;
		const SkinDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.descr
		 * @var string strDescr
		 */
		protected $strDescr;
		const DescrMaxLength = 200;
		const DescrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.keywords
		 * @var string strKeywords
		 */
		protected $strKeywords;
		const KeywordsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.news_sort
		 * @var string strNewsSort
		 */
		protected $strNewsSort;
		const NewsSortMaxLength = 10;
		const NewsSortDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.news_msort
		 * @var string strNewsMsort
		 */
		protected $strNewsMsort;
		const NewsMsortMaxLength = 4;
		const NewsMsortDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.news_number
		 * @var integer intNewsNumber
		 */
		protected $intNewsNumber;
		const NewsNumberDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.short_tpl
		 * @var string strShortTpl
		 */
		protected $strShortTpl;
		const ShortTplMaxLength = 40;
		const ShortTplDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.full_tpl
		 * @var string strFullTpl
		 */
		protected $strFullTpl;
		const FullTplMaxLength = 40;
		const FullTplDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_category.metatitle
		 * @var string strMetatitle
		 */
		protected $strMetatitle;
		const MetatitleMaxLength = 255;
		const MetatitleDefault = null;


		/**
		 * Private member variable that stores a reference to a single DleCategoryAsParentid object
		 * (of type DleCategory), if this DleCategory object was restored with
		 * an expansion on the dle_category association table.
		 * @var DleCategory _objDleCategoryAsParentid;
		 */
		private $_objDleCategoryAsParentid;

		/**
		 * Private member variable that stores a reference to an array of DleCategoryAsParentid objects
		 * (of type DleCategory[]), if this DleCategory object was restored with
		 * an ExpandAsArray on the dle_category association table.
		 * @var DleCategory[] _objDleCategoryAsParentidArray;
		 */
		private $_objDleCategoryAsParentidArray = null;

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
		 * in the database column dle_category.parentid.
		 *
		 * NOTE: Always use the ParentidObject property getter to correctly retrieve this DleCategory object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DleCategory objParentidObject
		 */
		protected $objParentidObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intId = DleCategory::IdDefault;
			$this->intParentid = DleCategory::ParentidDefault;
			$this->intPosi = DleCategory::PosiDefault;
			$this->strName = DleCategory::NameDefault;
			$this->strAltName = DleCategory::AltNameDefault;
			$this->strIcon = DleCategory::IconDefault;
			$this->strSkin = DleCategory::SkinDefault;
			$this->strDescr = DleCategory::DescrDefault;
			$this->strKeywords = DleCategory::KeywordsDefault;
			$this->strNewsSort = DleCategory::NewsSortDefault;
			$this->strNewsMsort = DleCategory::NewsMsortDefault;
			$this->intNewsNumber = DleCategory::NewsNumberDefault;
			$this->strShortTpl = DleCategory::ShortTplDefault;
			$this->strFullTpl = DleCategory::FullTplDefault;
			$this->strMetatitle = DleCategory::MetatitleDefault;
		}


		///////////////////////////////
		// CLASS-WIDE LOAD AND COUNT METHODS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return QDatabaseBase reference to the Database object that can query this class
		 */
		public static function GetDatabase() {
			return QApplication::$Database[1];
		}

		/**
		 * Load a DleCategory from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleCategory
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleCategory', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DleCategory::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleCategory()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DleCategories
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleCategory[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DleCategory::QueryArray to perform the LoadAll query
			try {
				return DleCategory::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DleCategories
		 * @return int
		 */
		public static function CountAll() {
			// Call DleCategory::QueryCount to perform the CountAll query
			return DleCategory::QueryCount(QQ::All());
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
			$objDatabase = DleCategory::GetDatabase();

			// Create/Build out the QueryBuilder object with DleCategory-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_category');

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
				DleCategory::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_category');

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
		 * Static Qcubed Query method to query for a single DleCategory object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleCategory the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DleCategory object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DleCategory::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DleCategory::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DleCategory objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleCategory[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DleCategory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DleCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DleCategory objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DleCategory::GetDatabase();

			$strQuery = DleCategory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dlecategory', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DleCategory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DleCategory
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_category';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'parentid', $strAliasPrefix . 'parentid');
			    $objBuilder->AddSelectItem($strTableName, 'posi', $strAliasPrefix . 'posi');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'alt_name', $strAliasPrefix . 'alt_name');
			    $objBuilder->AddSelectItem($strTableName, 'icon', $strAliasPrefix . 'icon');
			    $objBuilder->AddSelectItem($strTableName, 'skin', $strAliasPrefix . 'skin');
			    $objBuilder->AddSelectItem($strTableName, 'descr', $strAliasPrefix . 'descr');
			    $objBuilder->AddSelectItem($strTableName, 'keywords', $strAliasPrefix . 'keywords');
			    $objBuilder->AddSelectItem($strTableName, 'news_sort', $strAliasPrefix . 'news_sort');
			    $objBuilder->AddSelectItem($strTableName, 'news_msort', $strAliasPrefix . 'news_msort');
			    $objBuilder->AddSelectItem($strTableName, 'news_number', $strAliasPrefix . 'news_number');
			    $objBuilder->AddSelectItem($strTableName, 'short_tpl', $strAliasPrefix . 'short_tpl');
			    $objBuilder->AddSelectItem($strTableName, 'full_tpl', $strAliasPrefix . 'full_tpl');
			    $objBuilder->AddSelectItem($strTableName, 'metatitle', $strAliasPrefix . 'metatitle');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DleCategory from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DleCategory::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DleCategory
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'dle_category__';


						// Expanding reverse references: DleCategoryAsParentid
						$strAlias = $strAliasPrefix . 'dlecategoryasparentid__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDleCategoryAsParentidArray)
								$objPreviousItem->_objDleCategoryAsParentidArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDleCategoryAsParentidArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDleCategoryAsParentidArray;
								$objChildItem = DleCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecategoryasparentid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDleCategoryAsParentidArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDleCategoryAsParentidArray[] = DleCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecategoryasparentid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'dle_category__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the DleCategory object
			$objToReturn = new DleCategory();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'parentid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParentid = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'posi';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPosi = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'alt_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAltName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'icon';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strIcon = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'skin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSkin = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'descr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'keywords';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strKeywords = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'news_sort';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNewsSort = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'news_msort';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNewsMsort = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'news_number';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intNewsNumber = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'short_tpl';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShortTpl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'full_tpl';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFullTpl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'metatitle';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMetatitle = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objDleCategoryAsParentidArray);
					$cnt = count($objToReturn->_objDleCategoryAsParentidArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDleCategoryAsParentidArray, $objToReturn->_objDleCategoryAsParentidArray)) {
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
				$strAliasPrefix = 'dle_category__';

			// Check for ParentidObject Early Binding
			$strAlias = $strAliasPrefix . 'parentid__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParentidObject = DleCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parentid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for DleCategoryAsParentid Virtual Binding
			$strAlias = $strAliasPrefix . 'dlecategoryasparentid__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDleCategoryAsParentidArray)
				$objToReturn->_objDleCategoryAsParentidArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDleCategoryAsParentidArray[] = DleCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecategoryasparentid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDleCategoryAsParentid = DleCategory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecategoryasparentid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of DleCategories from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DleCategory[]
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
					$objItem = DleCategory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DleCategory::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DleCategory object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DleCategory next row resulting from the query
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
			return DleCategory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DleCategory object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleCategory
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DleCategory::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleCategory()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of DleCategory objects,
		 * by Parentid Index(es)
		 * @param integer $intParentid
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleCategory[]
		*/
		public static function LoadArrayByParentid($intParentid, $objOptionalClauses = null) {
			// Call DleCategory::QueryArray to perform the LoadArrayByParentid query
			try {
				return DleCategory::QueryArray(
					QQ::Equal(QQN::DleCategory()->Parentid, $intParentid),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DleCategories
		 * by Parentid Index(es)
		 * @param integer $intParentid
		 * @return int
		*/
		public static function CountByParentid($intParentid) {
			// Call DleCategory::QueryCount to perform the CountByParentid query
			return DleCategory::QueryCount(
				QQ::Equal(QQN::DleCategory()->Parentid, $intParentid)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DleCategory
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_category` (
							`parentid`,
							`posi`,
							`name`,
							`alt_name`,
							`icon`,
							`skin`,
							`descr`,
							`keywords`,
							`news_sort`,
							`news_msort`,
							`news_number`,
							`short_tpl`,
							`full_tpl`,
							`metatitle`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intParentid) . ',
							' . $objDatabase->SqlVariable($this->intPosi) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strAltName) . ',
							' . $objDatabase->SqlVariable($this->strIcon) . ',
							' . $objDatabase->SqlVariable($this->strSkin) . ',
							' . $objDatabase->SqlVariable($this->strDescr) . ',
							' . $objDatabase->SqlVariable($this->strKeywords) . ',
							' . $objDatabase->SqlVariable($this->strNewsSort) . ',
							' . $objDatabase->SqlVariable($this->strNewsMsort) . ',
							' . $objDatabase->SqlVariable($this->intNewsNumber) . ',
							' . $objDatabase->SqlVariable($this->strShortTpl) . ',
							' . $objDatabase->SqlVariable($this->strFullTpl) . ',
							' . $objDatabase->SqlVariable($this->strMetatitle) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_category', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_category`
						SET
							`parentid` = ' . $objDatabase->SqlVariable($this->intParentid) . ',
							`posi` = ' . $objDatabase->SqlVariable($this->intPosi) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`alt_name` = ' . $objDatabase->SqlVariable($this->strAltName) . ',
							`icon` = ' . $objDatabase->SqlVariable($this->strIcon) . ',
							`skin` = ' . $objDatabase->SqlVariable($this->strSkin) . ',
							`descr` = ' . $objDatabase->SqlVariable($this->strDescr) . ',
							`keywords` = ' . $objDatabase->SqlVariable($this->strKeywords) . ',
							`news_sort` = ' . $objDatabase->SqlVariable($this->strNewsSort) . ',
							`news_msort` = ' . $objDatabase->SqlVariable($this->strNewsMsort) . ',
							`news_number` = ' . $objDatabase->SqlVariable($this->intNewsNumber) . ',
							`short_tpl` = ' . $objDatabase->SqlVariable($this->strShortTpl) . ',
							`full_tpl` = ' . $objDatabase->SqlVariable($this->strFullTpl) . ',
							`metatitle` = ' . $objDatabase->SqlVariable($this->strMetatitle) . '
						WHERE
							`id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
		 * Delete this DleCategory
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DleCategory with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_category`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DleCategory ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleCategory', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DleCategories
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_category`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_category table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_category`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DleCategory from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DleCategory object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DleCategory::Load($this->intId);

			// Update $this's local variables to match
			$this->Parentid = $objReloaded->Parentid;
			$this->intPosi = $objReloaded->intPosi;
			$this->strName = $objReloaded->strName;
			$this->strAltName = $objReloaded->strAltName;
			$this->strIcon = $objReloaded->strIcon;
			$this->strSkin = $objReloaded->strSkin;
			$this->strDescr = $objReloaded->strDescr;
			$this->strKeywords = $objReloaded->strKeywords;
			$this->strNewsSort = $objReloaded->strNewsSort;
			$this->strNewsMsort = $objReloaded->strNewsMsort;
			$this->intNewsNumber = $objReloaded->intNewsNumber;
			$this->strShortTpl = $objReloaded->strShortTpl;
			$this->strFullTpl = $objReloaded->strFullTpl;
			$this->strMetatitle = $objReloaded->strMetatitle;
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
				case 'Id':
					/**
					 * Gets the value for intId (Read-Only PK)
					 * @return integer
					 */
					return $this->intId;

				case 'Parentid':
					/**
					 * Gets the value for intParentid (Not Null)
					 * @return integer
					 */
					return $this->intParentid;

				case 'Posi':
					/**
					 * Gets the value for intPosi (Not Null)
					 * @return integer
					 */
					return $this->intPosi;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'AltName':
					/**
					 * Gets the value for strAltName (Not Null)
					 * @return string
					 */
					return $this->strAltName;

				case 'Icon':
					/**
					 * Gets the value for strIcon (Not Null)
					 * @return string
					 */
					return $this->strIcon;

				case 'Skin':
					/**
					 * Gets the value for strSkin (Not Null)
					 * @return string
					 */
					return $this->strSkin;

				case 'Descr':
					/**
					 * Gets the value for strDescr (Not Null)
					 * @return string
					 */
					return $this->strDescr;

				case 'Keywords':
					/**
					 * Gets the value for strKeywords (Not Null)
					 * @return string
					 */
					return $this->strKeywords;

				case 'NewsSort':
					/**
					 * Gets the value for strNewsSort (Not Null)
					 * @return string
					 */
					return $this->strNewsSort;

				case 'NewsMsort':
					/**
					 * Gets the value for strNewsMsort (Not Null)
					 * @return string
					 */
					return $this->strNewsMsort;

				case 'NewsNumber':
					/**
					 * Gets the value for intNewsNumber (Not Null)
					 * @return integer
					 */
					return $this->intNewsNumber;

				case 'ShortTpl':
					/**
					 * Gets the value for strShortTpl (Not Null)
					 * @return string
					 */
					return $this->strShortTpl;

				case 'FullTpl':
					/**
					 * Gets the value for strFullTpl (Not Null)
					 * @return string
					 */
					return $this->strFullTpl;

				case 'Metatitle':
					/**
					 * Gets the value for strMetatitle (Not Null)
					 * @return string
					 */
					return $this->strMetatitle;


				///////////////////
				// Member Objects
				///////////////////
				case 'ParentidObject':
					/**
					 * Gets the value for the DleCategory object referenced by intParentid (Not Null)
					 * @return DleCategory
					 */
					try {
						if ((!$this->objParentidObject) && (!is_null($this->intParentid)))
							$this->objParentidObject = DleCategory::Load($this->intParentid);
						return $this->objParentidObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_DleCategoryAsParentid':
					/**
					 * Gets the value for the private _objDleCategoryAsParentid (Read-Only)
					 * if set due to an expansion on the dle_category.parentid reverse relationship
					 * @return DleCategory
					 */
					return $this->_objDleCategoryAsParentid;

				case '_DleCategoryAsParentidArray':
					/**
					 * Gets the value for the private _objDleCategoryAsParentidArray (Read-Only)
					 * if set due to an ExpandAsArray on the dle_category.parentid reverse relationship
					 * @return DleCategory[]
					 */
					return $this->_objDleCategoryAsParentidArray;


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
				case 'Parentid':
					/**
					 * Sets the value for intParentid (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParentidObject = null;
						return ($this->intParentid = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Posi':
					/**
					 * Sets the value for intPosi (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPosi = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					/**
					 * Sets the value for strName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AltName':
					/**
					 * Sets the value for strAltName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAltName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Icon':
					/**
					 * Sets the value for strIcon (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIcon = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Skin':
					/**
					 * Sets the value for strSkin (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSkin = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Descr':
					/**
					 * Sets the value for strDescr (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescr = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Keywords':
					/**
					 * Sets the value for strKeywords (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strKeywords = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsSort':
					/**
					 * Sets the value for strNewsSort (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNewsSort = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsMsort':
					/**
					 * Sets the value for strNewsMsort (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNewsMsort = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsNumber':
					/**
					 * Sets the value for intNewsNumber (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intNewsNumber = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShortTpl':
					/**
					 * Sets the value for strShortTpl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShortTpl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FullTpl':
					/**
					 * Sets the value for strFullTpl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFullTpl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Metatitle':
					/**
					 * Sets the value for strMetatitle (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMetatitle = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ParentidObject':
					/**
					 * Sets the value for the DleCategory object referenced by intParentid (Not Null)
					 * @param DleCategory $mixValue
					 * @return DleCategory
					 */
					if (is_null($mixValue)) {
						$this->intParentid = null;
						$this->objParentidObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DleCategory object
						try {
							$mixValue = QType::Cast($mixValue, 'DleCategory');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DleCategory object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved ParentidObject for this DleCategory');

						// Update Local Member Variables
						$this->objParentidObject = $mixValue;
						$this->intParentid = $mixValue->Id;

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



		// Related Objects' Methods for DleCategoryAsParentid
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DleCategoriesAsParentid as an array of DleCategory objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleCategory[]
		*/
		public function GetDleCategoryAsParentidArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return DleCategory::LoadArrayByParentid($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DleCategoriesAsParentid
		 * @return int
		*/
		public function CountDleCategoriesAsParentid() {
			if ((is_null($this->intId)))
				return 0;

			return DleCategory::CountByParentid($this->intId);
		}

		/**
		 * Associates a DleCategoryAsParentid
		 * @param DleCategory $objDleCategory
		 * @return void
		*/
		public function AssociateDleCategoryAsParentid(DleCategory $objDleCategory) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleCategoryAsParentid on this unsaved DleCategory.');
			if ((is_null($objDleCategory->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleCategoryAsParentid on this DleCategory with an unsaved DleCategory.');

			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_category`
				SET
					`parentid` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleCategory->Id) . ' 
			');
		}

		/**
		 * Unassociates a DleCategoryAsParentid
		 * @param DleCategory $objDleCategory
		 * @return void
		*/
		public function UnassociateDleCategoryAsParentid(DleCategory $objDleCategory) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCategoryAsParentid on this unsaved DleCategory.');
			if ((is_null($objDleCategory->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCategoryAsParentid on this DleCategory with an unsaved DleCategory.');

			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_category`
				SET
					`parentid` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleCategory->Id) . ' AND
					`parentid` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all DleCategoriesAsParentid
		 * @return void
		*/
		public function UnassociateAllDleCategoriesAsParentid() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCategoryAsParentid on this unsaved DleCategory.');

			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_category`
				SET
					`parentid` = null
				WHERE
					`parentid` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated DleCategoryAsParentid
		 * @param DleCategory $objDleCategory
		 * @return void
		*/
		public function DeleteAssociatedDleCategoryAsParentid(DleCategory $objDleCategory) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCategoryAsParentid on this unsaved DleCategory.');
			if ((is_null($objDleCategory->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCategoryAsParentid on this DleCategory with an unsaved DleCategory.');

			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_category`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleCategory->Id) . ' AND
					`parentid` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated DleCategoriesAsParentid
		 * @return void
		*/
		public function DeleteAllDleCategoriesAsParentid() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCategoryAsParentid on this unsaved DleCategory.');

			// Get the Database Object for this Class
			$objDatabase = DleCategory::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_category`
				WHERE
					`parentid` = ' . $objDatabase->SqlVariable($this->intId) . '
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
			return "dle_category";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DleCategory::GetDatabaseIndex()]->Database;
		}

		/**
		 * Static method to retrieve the Database index in the configuration.inc.php file.
		 * This can be useful when there are two databases of the same name which create
		 * confusion for the developer. There are no internal uses of this function but are
		 * here to help retrieve info if need be!
		 * @return int position or index of the database in the config file.
		 */
		public static function GetDatabaseIndex() {
			return 1;
		}

		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="DleCategory"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="ParentidObject" type="xsd1:DleCategory"/>';
			$strToReturn .= '<element name="Posi" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="AltName" type="xsd:string"/>';
			$strToReturn .= '<element name="Icon" type="xsd:string"/>';
			$strToReturn .= '<element name="Skin" type="xsd:string"/>';
			$strToReturn .= '<element name="Descr" type="xsd:string"/>';
			$strToReturn .= '<element name="Keywords" type="xsd:string"/>';
			$strToReturn .= '<element name="NewsSort" type="xsd:string"/>';
			$strToReturn .= '<element name="NewsMsort" type="xsd:string"/>';
			$strToReturn .= '<element name="NewsNumber" type="xsd:int"/>';
			$strToReturn .= '<element name="ShortTpl" type="xsd:string"/>';
			$strToReturn .= '<element name="FullTpl" type="xsd:string"/>';
			$strToReturn .= '<element name="Metatitle" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DleCategory', $strComplexTypeArray)) {
				$strComplexTypeArray['DleCategory'] = DleCategory::GetSoapComplexTypeXml();
				DleCategory::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DleCategory::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DleCategory();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if ((property_exists($objSoapObject, 'ParentidObject')) &&
				($objSoapObject->ParentidObject))
				$objToReturn->ParentidObject = DleCategory::GetObjectFromSoapObject($objSoapObject->ParentidObject);
			if (property_exists($objSoapObject, 'Posi'))
				$objToReturn->intPosi = $objSoapObject->Posi;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'AltName'))
				$objToReturn->strAltName = $objSoapObject->AltName;
			if (property_exists($objSoapObject, 'Icon'))
				$objToReturn->strIcon = $objSoapObject->Icon;
			if (property_exists($objSoapObject, 'Skin'))
				$objToReturn->strSkin = $objSoapObject->Skin;
			if (property_exists($objSoapObject, 'Descr'))
				$objToReturn->strDescr = $objSoapObject->Descr;
			if (property_exists($objSoapObject, 'Keywords'))
				$objToReturn->strKeywords = $objSoapObject->Keywords;
			if (property_exists($objSoapObject, 'NewsSort'))
				$objToReturn->strNewsSort = $objSoapObject->NewsSort;
			if (property_exists($objSoapObject, 'NewsMsort'))
				$objToReturn->strNewsMsort = $objSoapObject->NewsMsort;
			if (property_exists($objSoapObject, 'NewsNumber'))
				$objToReturn->intNewsNumber = $objSoapObject->NewsNumber;
			if (property_exists($objSoapObject, 'ShortTpl'))
				$objToReturn->strShortTpl = $objSoapObject->ShortTpl;
			if (property_exists($objSoapObject, 'FullTpl'))
				$objToReturn->strFullTpl = $objSoapObject->FullTpl;
			if (property_exists($objSoapObject, 'Metatitle'))
				$objToReturn->strMetatitle = $objSoapObject->Metatitle;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DleCategory::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objParentidObject)
				$objObject->objParentidObject = DleCategory::GetSoapObjectFromObject($objObject->objParentidObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParentid = null;
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
			$iArray['Id'] = $this->intId;
			$iArray['Parentid'] = $this->intParentid;
			$iArray['Posi'] = $this->intPosi;
			$iArray['Name'] = $this->strName;
			$iArray['AltName'] = $this->strAltName;
			$iArray['Icon'] = $this->strIcon;
			$iArray['Skin'] = $this->strSkin;
			$iArray['Descr'] = $this->strDescr;
			$iArray['Keywords'] = $this->strKeywords;
			$iArray['NewsSort'] = $this->strNewsSort;
			$iArray['NewsMsort'] = $this->strNewsMsort;
			$iArray['NewsNumber'] = $this->intNewsNumber;
			$iArray['ShortTpl'] = $this->strShortTpl;
			$iArray['FullTpl'] = $this->strFullTpl;
			$iArray['Metatitle'] = $this->strMetatitle;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intId ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Id
     * @property-read QQNode $Parentid
     * @property-read QQNodeDleCategory $ParentidObject
     * @property-read QQNode $Posi
     * @property-read QQNode $Name
     * @property-read QQNode $AltName
     * @property-read QQNode $Icon
     * @property-read QQNode $Skin
     * @property-read QQNode $Descr
     * @property-read QQNode $Keywords
     * @property-read QQNode $NewsSort
     * @property-read QQNode $NewsMsort
     * @property-read QQNode $NewsNumber
     * @property-read QQNode $ShortTpl
     * @property-read QQNode $FullTpl
     * @property-read QQNode $Metatitle
     *
     *
     * @property-read QQReverseReferenceNodeDleCategory $DleCategoryAsParentid

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDleCategory extends QQNode {
		protected $strTableName = 'dle_category';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleCategory';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'Parentid':
					return new QQNode('parentid', 'Parentid', 'Integer', $this);
				case 'ParentidObject':
					return new QQNodeDleCategory('parentid', 'ParentidObject', 'Integer', $this);
				case 'Posi':
					return new QQNode('posi', 'Posi', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'AltName':
					return new QQNode('alt_name', 'AltName', 'VarChar', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'VarChar', $this);
				case 'Skin':
					return new QQNode('skin', 'Skin', 'VarChar', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'VarChar', $this);
				case 'Keywords':
					return new QQNode('keywords', 'Keywords', 'Blob', $this);
				case 'NewsSort':
					return new QQNode('news_sort', 'NewsSort', 'VarChar', $this);
				case 'NewsMsort':
					return new QQNode('news_msort', 'NewsMsort', 'VarChar', $this);
				case 'NewsNumber':
					return new QQNode('news_number', 'NewsNumber', 'Integer', $this);
				case 'ShortTpl':
					return new QQNode('short_tpl', 'ShortTpl', 'VarChar', $this);
				case 'FullTpl':
					return new QQNode('full_tpl', 'FullTpl', 'VarChar', $this);
				case 'Metatitle':
					return new QQNode('metatitle', 'Metatitle', 'VarChar', $this);
				case 'DleCategoryAsParentid':
					return new QQReverseReferenceNodeDleCategory($this, 'dlecategoryasparentid', 'reverse_reference', 'parentid');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'Integer', $this);
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
     * @property-read QQNode $Id
     * @property-read QQNode $Parentid
     * @property-read QQNodeDleCategory $ParentidObject
     * @property-read QQNode $Posi
     * @property-read QQNode $Name
     * @property-read QQNode $AltName
     * @property-read QQNode $Icon
     * @property-read QQNode $Skin
     * @property-read QQNode $Descr
     * @property-read QQNode $Keywords
     * @property-read QQNode $NewsSort
     * @property-read QQNode $NewsMsort
     * @property-read QQNode $NewsNumber
     * @property-read QQNode $ShortTpl
     * @property-read QQNode $FullTpl
     * @property-read QQNode $Metatitle
     *
     *
     * @property-read QQReverseReferenceNodeDleCategory $DleCategoryAsParentid

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDleCategory extends QQReverseReferenceNode {
		protected $strTableName = 'dle_category';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleCategory';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Parentid':
					return new QQNode('parentid', 'Parentid', 'integer', $this);
				case 'ParentidObject':
					return new QQNodeDleCategory('parentid', 'ParentidObject', 'integer', $this);
				case 'Posi':
					return new QQNode('posi', 'Posi', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'AltName':
					return new QQNode('alt_name', 'AltName', 'string', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'string', $this);
				case 'Skin':
					return new QQNode('skin', 'Skin', 'string', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'string', $this);
				case 'Keywords':
					return new QQNode('keywords', 'Keywords', 'string', $this);
				case 'NewsSort':
					return new QQNode('news_sort', 'NewsSort', 'string', $this);
				case 'NewsMsort':
					return new QQNode('news_msort', 'NewsMsort', 'string', $this);
				case 'NewsNumber':
					return new QQNode('news_number', 'NewsNumber', 'integer', $this);
				case 'ShortTpl':
					return new QQNode('short_tpl', 'ShortTpl', 'string', $this);
				case 'FullTpl':
					return new QQNode('full_tpl', 'FullTpl', 'string', $this);
				case 'Metatitle':
					return new QQNode('metatitle', 'Metatitle', 'string', $this);
				case 'DleCategoryAsParentid':
					return new QQReverseReferenceNodeDleCategory($this, 'dlecategoryasparentid', 'reverse_reference', 'parentid');

				case '_PrimaryKeyNode':
					return new QQNode('id', 'Id', 'integer', $this);
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
