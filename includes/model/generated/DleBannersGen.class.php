<?php
	/**
	 * The abstract DleBannersGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DleBanners subclass which
	 * extends this DleBannersGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DleBanners class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $BannerTag the value for strBannerTag (Not Null)
	 * @property string $Descr the value for strDescr (Not Null)
	 * @property string $Code the value for strCode (Not Null)
	 * @property boolean $Approve the value for blnApprove (Not Null)
	 * @property boolean $ShortPlace the value for blnShortPlace (Not Null)
	 * @property boolean $Bstick the value for blnBstick (Not Null)
	 * @property boolean $Main the value for blnMain (Not Null)
	 * @property string $Category the value for strCategory (Not Null)
	 * @property string $Grouplevel the value for strGrouplevel (Not Null)
	 * @property string $Start the value for strStart (Not Null)
	 * @property string $End the value for strEnd (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DleBannersGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_banners.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.banner_tag
		 * @var string strBannerTag
		 */
		protected $strBannerTag;
		const BannerTagMaxLength = 40;
		const BannerTagDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.descr
		 * @var string strDescr
		 */
		protected $strDescr;
		const DescrMaxLength = 200;
		const DescrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.approve
		 * @var boolean blnApprove
		 */
		protected $blnApprove;
		const ApproveDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.short_place
		 * @var boolean blnShortPlace
		 */
		protected $blnShortPlace;
		const ShortPlaceDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.bstick
		 * @var boolean blnBstick
		 */
		protected $blnBstick;
		const BstickDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.main
		 * @var boolean blnMain
		 */
		protected $blnMain;
		const MainDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.category
		 * @var string strCategory
		 */
		protected $strCategory;
		const CategoryMaxLength = 255;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.grouplevel
		 * @var string strGrouplevel
		 */
		protected $strGrouplevel;
		const GrouplevelMaxLength = 100;
		const GrouplevelDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.start
		 * @var string strStart
		 */
		protected $strStart;
		const StartMaxLength = 15;
		const StartDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_banners.end
		 * @var string strEnd
		 */
		protected $strEnd;
		const EndMaxLength = 15;
		const EndDefault = null;


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
			$this->intId = DleBanners::IdDefault;
			$this->strBannerTag = DleBanners::BannerTagDefault;
			$this->strDescr = DleBanners::DescrDefault;
			$this->strCode = DleBanners::CodeDefault;
			$this->blnApprove = DleBanners::ApproveDefault;
			$this->blnShortPlace = DleBanners::ShortPlaceDefault;
			$this->blnBstick = DleBanners::BstickDefault;
			$this->blnMain = DleBanners::MainDefault;
			$this->strCategory = DleBanners::CategoryDefault;
			$this->strGrouplevel = DleBanners::GrouplevelDefault;
			$this->strStart = DleBanners::StartDefault;
			$this->strEnd = DleBanners::EndDefault;
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
		 * Load a DleBanners from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleBanners
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleBanners', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DleBanners::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleBanners()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DleBannerses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleBanners[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DleBanners::QueryArray to perform the LoadAll query
			try {
				return DleBanners::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DleBannerses
		 * @return int
		 */
		public static function CountAll() {
			// Call DleBanners::QueryCount to perform the CountAll query
			return DleBanners::QueryCount(QQ::All());
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
			$objDatabase = DleBanners::GetDatabase();

			// Create/Build out the QueryBuilder object with DleBanners-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_banners');

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
				DleBanners::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_banners');

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
		 * Static Qcubed Query method to query for a single DleBanners object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleBanners the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleBanners::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DleBanners object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DleBanners::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DleBanners::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DleBanners objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleBanners[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleBanners::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DleBanners::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DleBanners::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DleBanners objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleBanners::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DleBanners::GetDatabase();

			$strQuery = DleBanners::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dlebanners', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DleBanners::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DleBanners
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_banners';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'banner_tag', $strAliasPrefix . 'banner_tag');
			    $objBuilder->AddSelectItem($strTableName, 'descr', $strAliasPrefix . 'descr');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'approve', $strAliasPrefix . 'approve');
			    $objBuilder->AddSelectItem($strTableName, 'short_place', $strAliasPrefix . 'short_place');
			    $objBuilder->AddSelectItem($strTableName, 'bstick', $strAliasPrefix . 'bstick');
			    $objBuilder->AddSelectItem($strTableName, 'main', $strAliasPrefix . 'main');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'grouplevel', $strAliasPrefix . 'grouplevel');
			    $objBuilder->AddSelectItem($strTableName, 'start', $strAliasPrefix . 'start');
			    $objBuilder->AddSelectItem($strTableName, 'end', $strAliasPrefix . 'end');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DleBanners from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DleBanners::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DleBanners
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DleBanners object
			$objToReturn = new DleBanners();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'banner_tag';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBannerTag = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'descr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'approve';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnApprove = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'short_place';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnShortPlace = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'bstick';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnBstick = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'main';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnMain = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCategory = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'grouplevel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGrouplevel = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'start';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strStart = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'end';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEnd = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
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
				$strAliasPrefix = 'dle_banners__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DleBannerses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DleBanners[]
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
					$objItem = DleBanners::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DleBanners::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DleBanners object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DleBanners next row resulting from the query
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
			return DleBanners::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DleBanners object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleBanners
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DleBanners::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleBanners()->Id, $intId)
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
		 * Save this DleBanners
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DleBanners::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_banners` (
							`banner_tag`,
							`descr`,
							`code`,
							`approve`,
							`short_place`,
							`bstick`,
							`main`,
							`category`,
							`grouplevel`,
							`start`,
							`end`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strBannerTag) . ',
							' . $objDatabase->SqlVariable($this->strDescr) . ',
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->blnApprove) . ',
							' . $objDatabase->SqlVariable($this->blnShortPlace) . ',
							' . $objDatabase->SqlVariable($this->blnBstick) . ',
							' . $objDatabase->SqlVariable($this->blnMain) . ',
							' . $objDatabase->SqlVariable($this->strCategory) . ',
							' . $objDatabase->SqlVariable($this->strGrouplevel) . ',
							' . $objDatabase->SqlVariable($this->strStart) . ',
							' . $objDatabase->SqlVariable($this->strEnd) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_banners', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_banners`
						SET
							`banner_tag` = ' . $objDatabase->SqlVariable($this->strBannerTag) . ',
							`descr` = ' . $objDatabase->SqlVariable($this->strDescr) . ',
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`approve` = ' . $objDatabase->SqlVariable($this->blnApprove) . ',
							`short_place` = ' . $objDatabase->SqlVariable($this->blnShortPlace) . ',
							`bstick` = ' . $objDatabase->SqlVariable($this->blnBstick) . ',
							`main` = ' . $objDatabase->SqlVariable($this->blnMain) . ',
							`category` = ' . $objDatabase->SqlVariable($this->strCategory) . ',
							`grouplevel` = ' . $objDatabase->SqlVariable($this->strGrouplevel) . ',
							`start` = ' . $objDatabase->SqlVariable($this->strStart) . ',
							`end` = ' . $objDatabase->SqlVariable($this->strEnd) . '
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
		 * Delete this DleBanners
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DleBanners with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DleBanners::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_banners`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DleBanners ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleBanners', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DleBannerses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DleBanners::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_banners`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_banners table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DleBanners::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_banners`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DleBanners from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DleBanners object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DleBanners::Load($this->intId);

			// Update $this's local variables to match
			$this->strBannerTag = $objReloaded->strBannerTag;
			$this->strDescr = $objReloaded->strDescr;
			$this->strCode = $objReloaded->strCode;
			$this->blnApprove = $objReloaded->blnApprove;
			$this->blnShortPlace = $objReloaded->blnShortPlace;
			$this->blnBstick = $objReloaded->blnBstick;
			$this->blnMain = $objReloaded->blnMain;
			$this->strCategory = $objReloaded->strCategory;
			$this->strGrouplevel = $objReloaded->strGrouplevel;
			$this->strStart = $objReloaded->strStart;
			$this->strEnd = $objReloaded->strEnd;
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

				case 'BannerTag':
					/**
					 * Gets the value for strBannerTag (Not Null)
					 * @return string
					 */
					return $this->strBannerTag;

				case 'Descr':
					/**
					 * Gets the value for strDescr (Not Null)
					 * @return string
					 */
					return $this->strDescr;

				case 'Code':
					/**
					 * Gets the value for strCode (Not Null)
					 * @return string
					 */
					return $this->strCode;

				case 'Approve':
					/**
					 * Gets the value for blnApprove (Not Null)
					 * @return boolean
					 */
					return $this->blnApprove;

				case 'ShortPlace':
					/**
					 * Gets the value for blnShortPlace (Not Null)
					 * @return boolean
					 */
					return $this->blnShortPlace;

				case 'Bstick':
					/**
					 * Gets the value for blnBstick (Not Null)
					 * @return boolean
					 */
					return $this->blnBstick;

				case 'Main':
					/**
					 * Gets the value for blnMain (Not Null)
					 * @return boolean
					 */
					return $this->blnMain;

				case 'Category':
					/**
					 * Gets the value for strCategory (Not Null)
					 * @return string
					 */
					return $this->strCategory;

				case 'Grouplevel':
					/**
					 * Gets the value for strGrouplevel (Not Null)
					 * @return string
					 */
					return $this->strGrouplevel;

				case 'Start':
					/**
					 * Gets the value for strStart (Not Null)
					 * @return string
					 */
					return $this->strStart;

				case 'End':
					/**
					 * Gets the value for strEnd (Not Null)
					 * @return string
					 */
					return $this->strEnd;


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
				case 'BannerTag':
					/**
					 * Sets the value for strBannerTag (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBannerTag = QType::Cast($mixValue, QType::String));
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

				case 'Code':
					/**
					 * Sets the value for strCode (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Approve':
					/**
					 * Sets the value for blnApprove (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnApprove = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShortPlace':
					/**
					 * Sets the value for blnShortPlace (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnShortPlace = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Bstick':
					/**
					 * Sets the value for blnBstick (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnBstick = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Main':
					/**
					 * Sets the value for blnMain (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnMain = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Category':
					/**
					 * Sets the value for strCategory (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCategory = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Grouplevel':
					/**
					 * Sets the value for strGrouplevel (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGrouplevel = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Start':
					/**
					 * Sets the value for strStart (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strStart = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'End':
					/**
					 * Sets the value for strEnd (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEnd = QType::Cast($mixValue, QType::String));
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
			return "dle_banners";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DleBanners::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DleBanners"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="BannerTag" type="xsd:string"/>';
			$strToReturn .= '<element name="Descr" type="xsd:string"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="Approve" type="xsd:boolean"/>';
			$strToReturn .= '<element name="ShortPlace" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Bstick" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Main" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Category" type="xsd:string"/>';
			$strToReturn .= '<element name="Grouplevel" type="xsd:string"/>';
			$strToReturn .= '<element name="Start" type="xsd:string"/>';
			$strToReturn .= '<element name="End" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DleBanners', $strComplexTypeArray)) {
				$strComplexTypeArray['DleBanners'] = DleBanners::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DleBanners::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DleBanners();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'BannerTag'))
				$objToReturn->strBannerTag = $objSoapObject->BannerTag;
			if (property_exists($objSoapObject, 'Descr'))
				$objToReturn->strDescr = $objSoapObject->Descr;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Approve'))
				$objToReturn->blnApprove = $objSoapObject->Approve;
			if (property_exists($objSoapObject, 'ShortPlace'))
				$objToReturn->blnShortPlace = $objSoapObject->ShortPlace;
			if (property_exists($objSoapObject, 'Bstick'))
				$objToReturn->blnBstick = $objSoapObject->Bstick;
			if (property_exists($objSoapObject, 'Main'))
				$objToReturn->blnMain = $objSoapObject->Main;
			if (property_exists($objSoapObject, 'Category'))
				$objToReturn->strCategory = $objSoapObject->Category;
			if (property_exists($objSoapObject, 'Grouplevel'))
				$objToReturn->strGrouplevel = $objSoapObject->Grouplevel;
			if (property_exists($objSoapObject, 'Start'))
				$objToReturn->strStart = $objSoapObject->Start;
			if (property_exists($objSoapObject, 'End'))
				$objToReturn->strEnd = $objSoapObject->End;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DleBanners::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Id'] = $this->intId;
			$iArray['BannerTag'] = $this->strBannerTag;
			$iArray['Descr'] = $this->strDescr;
			$iArray['Code'] = $this->strCode;
			$iArray['Approve'] = $this->blnApprove;
			$iArray['ShortPlace'] = $this->blnShortPlace;
			$iArray['Bstick'] = $this->blnBstick;
			$iArray['Main'] = $this->blnMain;
			$iArray['Category'] = $this->strCategory;
			$iArray['Grouplevel'] = $this->strGrouplevel;
			$iArray['Start'] = $this->strStart;
			$iArray['End'] = $this->strEnd;
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
     * @property-read QQNode $BannerTag
     * @property-read QQNode $Descr
     * @property-read QQNode $Code
     * @property-read QQNode $Approve
     * @property-read QQNode $ShortPlace
     * @property-read QQNode $Bstick
     * @property-read QQNode $Main
     * @property-read QQNode $Category
     * @property-read QQNode $Grouplevel
     * @property-read QQNode $Start
     * @property-read QQNode $End
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDleBanners extends QQNode {
		protected $strTableName = 'dle_banners';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleBanners';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'BannerTag':
					return new QQNode('banner_tag', 'BannerTag', 'VarChar', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'VarChar', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Blob', $this);
				case 'Approve':
					return new QQNode('approve', 'Approve', 'Bit', $this);
				case 'ShortPlace':
					return new QQNode('short_place', 'ShortPlace', 'Bit', $this);
				case 'Bstick':
					return new QQNode('bstick', 'Bstick', 'Bit', $this);
				case 'Main':
					return new QQNode('main', 'Main', 'Bit', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'VarChar', $this);
				case 'Grouplevel':
					return new QQNode('grouplevel', 'Grouplevel', 'VarChar', $this);
				case 'Start':
					return new QQNode('start', 'Start', 'VarChar', $this);
				case 'End':
					return new QQNode('end', 'End', 'VarChar', $this);

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
     * @property-read QQNode $BannerTag
     * @property-read QQNode $Descr
     * @property-read QQNode $Code
     * @property-read QQNode $Approve
     * @property-read QQNode $ShortPlace
     * @property-read QQNode $Bstick
     * @property-read QQNode $Main
     * @property-read QQNode $Category
     * @property-read QQNode $Grouplevel
     * @property-read QQNode $Start
     * @property-read QQNode $End
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDleBanners extends QQReverseReferenceNode {
		protected $strTableName = 'dle_banners';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleBanners';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'BannerTag':
					return new QQNode('banner_tag', 'BannerTag', 'string', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'string', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Approve':
					return new QQNode('approve', 'Approve', 'boolean', $this);
				case 'ShortPlace':
					return new QQNode('short_place', 'ShortPlace', 'boolean', $this);
				case 'Bstick':
					return new QQNode('bstick', 'Bstick', 'boolean', $this);
				case 'Main':
					return new QQNode('main', 'Main', 'boolean', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'string', $this);
				case 'Grouplevel':
					return new QQNode('grouplevel', 'Grouplevel', 'string', $this);
				case 'Start':
					return new QQNode('start', 'Start', 'string', $this);
				case 'End':
					return new QQNode('end', 'End', 'string', $this);

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
