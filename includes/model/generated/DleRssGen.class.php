<?php
	/**
	 * The abstract DleRssGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DleRss subclass which
	 * extends this DleRssGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DleRss class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Url the value for strUrl (Not Null)
	 * @property string $Description the value for strDescription (Not Null)
	 * @property boolean $AllowMain the value for blnAllowMain (Not Null)
	 * @property boolean $AllowRating the value for blnAllowRating (Not Null)
	 * @property boolean $AllowComm the value for blnAllowComm (Not Null)
	 * @property boolean $TextType the value for blnTextType (Not Null)
	 * @property boolean $Date the value for blnDate (Not Null)
	 * @property string $Search the value for strSearch (Not Null)
	 * @property integer $MaxNews the value for intMaxNews (Not Null)
	 * @property string $Cookie the value for strCookie (Not Null)
	 * @property integer $Category the value for intCategory (Not Null)
	 * @property string $Lastdate the value for strLastdate (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DleRssGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_rss.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.url
		 * @var string strUrl
		 */
		protected $strUrl;
		const UrlMaxLength = 255;
		const UrlDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.allow_main
		 * @var boolean blnAllowMain
		 */
		protected $blnAllowMain;
		const AllowMainDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.allow_rating
		 * @var boolean blnAllowRating
		 */
		protected $blnAllowRating;
		const AllowRatingDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.allow_comm
		 * @var boolean blnAllowComm
		 */
		protected $blnAllowComm;
		const AllowCommDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.text_type
		 * @var boolean blnTextType
		 */
		protected $blnTextType;
		const TextTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.date
		 * @var boolean blnDate
		 */
		protected $blnDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.search
		 * @var string strSearch
		 */
		protected $strSearch;
		const SearchDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.max_news
		 * @var integer intMaxNews
		 */
		protected $intMaxNews;
		const MaxNewsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.cookie
		 * @var string strCookie
		 */
		protected $strCookie;
		const CookieDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.category
		 * @var integer intCategory
		 */
		protected $intCategory;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rss.lastdate
		 * @var string strLastdate
		 */
		protected $strLastdate;
		const LastdateMaxLength = 20;
		const LastdateDefault = null;


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
			$this->intId = DleRss::IdDefault;
			$this->strUrl = DleRss::UrlDefault;
			$this->strDescription = DleRss::DescriptionDefault;
			$this->blnAllowMain = DleRss::AllowMainDefault;
			$this->blnAllowRating = DleRss::AllowRatingDefault;
			$this->blnAllowComm = DleRss::AllowCommDefault;
			$this->blnTextType = DleRss::TextTypeDefault;
			$this->blnDate = DleRss::DateDefault;
			$this->strSearch = DleRss::SearchDefault;
			$this->intMaxNews = DleRss::MaxNewsDefault;
			$this->strCookie = DleRss::CookieDefault;
			$this->intCategory = DleRss::CategoryDefault;
			$this->strLastdate = DleRss::LastdateDefault;
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
		 * Load a DleRss from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleRss
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleRss', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DleRss::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleRss()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DleRsses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleRss[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DleRss::QueryArray to perform the LoadAll query
			try {
				return DleRss::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DleRsses
		 * @return int
		 */
		public static function CountAll() {
			// Call DleRss::QueryCount to perform the CountAll query
			return DleRss::QueryCount(QQ::All());
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
			$objDatabase = DleRss::GetDatabase();

			// Create/Build out the QueryBuilder object with DleRss-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_rss');

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
				DleRss::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_rss');

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
		 * Static Qcubed Query method to query for a single DleRss object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleRss the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleRss::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DleRss object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DleRss::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DleRss::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DleRss objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleRss[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleRss::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DleRss::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DleRss::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DleRss objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleRss::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DleRss::GetDatabase();

			$strQuery = DleRss::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dlerss', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DleRss::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DleRss
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_rss';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'url', $strAliasPrefix . 'url');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'allow_main', $strAliasPrefix . 'allow_main');
			    $objBuilder->AddSelectItem($strTableName, 'allow_rating', $strAliasPrefix . 'allow_rating');
			    $objBuilder->AddSelectItem($strTableName, 'allow_comm', $strAliasPrefix . 'allow_comm');
			    $objBuilder->AddSelectItem($strTableName, 'text_type', $strAliasPrefix . 'text_type');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'search', $strAliasPrefix . 'search');
			    $objBuilder->AddSelectItem($strTableName, 'max_news', $strAliasPrefix . 'max_news');
			    $objBuilder->AddSelectItem($strTableName, 'cookie', $strAliasPrefix . 'cookie');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'lastdate', $strAliasPrefix . 'lastdate');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DleRss from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DleRss::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DleRss
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DleRss object
			$objToReturn = new DleRss();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'url';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUrl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'allow_main';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowMain = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_rating';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowRating = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_comm';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowComm = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'text_type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnTextType = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnDate = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'search';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSearch = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'max_news';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxNews = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'cookie';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCookie = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCategory = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'lastdate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLastdate = $objDbRow->GetColumn($strAliasName, 'VarChar');

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
				$strAliasPrefix = 'dle_rss__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DleRsses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DleRss[]
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
					$objItem = DleRss::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DleRss::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DleRss object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DleRss next row resulting from the query
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
			return DleRss::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DleRss object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleRss
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DleRss::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleRss()->Id, $intId)
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
		 * Save this DleRss
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DleRss::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_rss` (
							`url`,
							`description`,
							`allow_main`,
							`allow_rating`,
							`allow_comm`,
							`text_type`,
							`date`,
							`search`,
							`max_news`,
							`cookie`,
							`category`,
							`lastdate`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strUrl) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->blnAllowMain) . ',
							' . $objDatabase->SqlVariable($this->blnAllowRating) . ',
							' . $objDatabase->SqlVariable($this->blnAllowComm) . ',
							' . $objDatabase->SqlVariable($this->blnTextType) . ',
							' . $objDatabase->SqlVariable($this->blnDate) . ',
							' . $objDatabase->SqlVariable($this->strSearch) . ',
							' . $objDatabase->SqlVariable($this->intMaxNews) . ',
							' . $objDatabase->SqlVariable($this->strCookie) . ',
							' . $objDatabase->SqlVariable($this->intCategory) . ',
							' . $objDatabase->SqlVariable($this->strLastdate) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_rss', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_rss`
						SET
							`url` = ' . $objDatabase->SqlVariable($this->strUrl) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`allow_main` = ' . $objDatabase->SqlVariable($this->blnAllowMain) . ',
							`allow_rating` = ' . $objDatabase->SqlVariable($this->blnAllowRating) . ',
							`allow_comm` = ' . $objDatabase->SqlVariable($this->blnAllowComm) . ',
							`text_type` = ' . $objDatabase->SqlVariable($this->blnTextType) . ',
							`date` = ' . $objDatabase->SqlVariable($this->blnDate) . ',
							`search` = ' . $objDatabase->SqlVariable($this->strSearch) . ',
							`max_news` = ' . $objDatabase->SqlVariable($this->intMaxNews) . ',
							`cookie` = ' . $objDatabase->SqlVariable($this->strCookie) . ',
							`category` = ' . $objDatabase->SqlVariable($this->intCategory) . ',
							`lastdate` = ' . $objDatabase->SqlVariable($this->strLastdate) . '
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
		 * Delete this DleRss
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DleRss with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DleRss::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_rss`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DleRss ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleRss', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DleRsses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DleRss::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_rss`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_rss table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DleRss::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_rss`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DleRss from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DleRss object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DleRss::Load($this->intId);

			// Update $this's local variables to match
			$this->strUrl = $objReloaded->strUrl;
			$this->strDescription = $objReloaded->strDescription;
			$this->blnAllowMain = $objReloaded->blnAllowMain;
			$this->blnAllowRating = $objReloaded->blnAllowRating;
			$this->blnAllowComm = $objReloaded->blnAllowComm;
			$this->blnTextType = $objReloaded->blnTextType;
			$this->blnDate = $objReloaded->blnDate;
			$this->strSearch = $objReloaded->strSearch;
			$this->intMaxNews = $objReloaded->intMaxNews;
			$this->strCookie = $objReloaded->strCookie;
			$this->intCategory = $objReloaded->intCategory;
			$this->strLastdate = $objReloaded->strLastdate;
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

				case 'Url':
					/**
					 * Gets the value for strUrl (Not Null)
					 * @return string
					 */
					return $this->strUrl;

				case 'Description':
					/**
					 * Gets the value for strDescription (Not Null)
					 * @return string
					 */
					return $this->strDescription;

				case 'AllowMain':
					/**
					 * Gets the value for blnAllowMain (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowMain;

				case 'AllowRating':
					/**
					 * Gets the value for blnAllowRating (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowRating;

				case 'AllowComm':
					/**
					 * Gets the value for blnAllowComm (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowComm;

				case 'TextType':
					/**
					 * Gets the value for blnTextType (Not Null)
					 * @return boolean
					 */
					return $this->blnTextType;

				case 'Date':
					/**
					 * Gets the value for blnDate (Not Null)
					 * @return boolean
					 */
					return $this->blnDate;

				case 'Search':
					/**
					 * Gets the value for strSearch (Not Null)
					 * @return string
					 */
					return $this->strSearch;

				case 'MaxNews':
					/**
					 * Gets the value for intMaxNews (Not Null)
					 * @return integer
					 */
					return $this->intMaxNews;

				case 'Cookie':
					/**
					 * Gets the value for strCookie (Not Null)
					 * @return string
					 */
					return $this->strCookie;

				case 'Category':
					/**
					 * Gets the value for intCategory (Not Null)
					 * @return integer
					 */
					return $this->intCategory;

				case 'Lastdate':
					/**
					 * Gets the value for strLastdate (Not Null)
					 * @return string
					 */
					return $this->strLastdate;


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
				case 'Url':
					/**
					 * Sets the value for strUrl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUrl = QType::Cast($mixValue, QType::String));
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

				case 'AllowMain':
					/**
					 * Sets the value for blnAllowMain (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowMain = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowRating':
					/**
					 * Sets the value for blnAllowRating (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowRating = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowComm':
					/**
					 * Sets the value for blnAllowComm (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowComm = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TextType':
					/**
					 * Sets the value for blnTextType (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnTextType = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					/**
					 * Sets the value for blnDate (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnDate = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Search':
					/**
					 * Sets the value for strSearch (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSearch = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxNews':
					/**
					 * Sets the value for intMaxNews (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxNews = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cookie':
					/**
					 * Sets the value for strCookie (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCookie = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Category':
					/**
					 * Sets the value for intCategory (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCategory = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Lastdate':
					/**
					 * Sets the value for strLastdate (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastdate = QType::Cast($mixValue, QType::String));
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
			return "dle_rss";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DleRss::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DleRss"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Url" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowMain" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowRating" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowComm" type="xsd:boolean"/>';
			$strToReturn .= '<element name="TextType" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Date" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Search" type="xsd:string"/>';
			$strToReturn .= '<element name="MaxNews" type="xsd:int"/>';
			$strToReturn .= '<element name="Cookie" type="xsd:string"/>';
			$strToReturn .= '<element name="Category" type="xsd:int"/>';
			$strToReturn .= '<element name="Lastdate" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DleRss', $strComplexTypeArray)) {
				$strComplexTypeArray['DleRss'] = DleRss::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DleRss::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DleRss();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Url'))
				$objToReturn->strUrl = $objSoapObject->Url;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'AllowMain'))
				$objToReturn->blnAllowMain = $objSoapObject->AllowMain;
			if (property_exists($objSoapObject, 'AllowRating'))
				$objToReturn->blnAllowRating = $objSoapObject->AllowRating;
			if (property_exists($objSoapObject, 'AllowComm'))
				$objToReturn->blnAllowComm = $objSoapObject->AllowComm;
			if (property_exists($objSoapObject, 'TextType'))
				$objToReturn->blnTextType = $objSoapObject->TextType;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->blnDate = $objSoapObject->Date;
			if (property_exists($objSoapObject, 'Search'))
				$objToReturn->strSearch = $objSoapObject->Search;
			if (property_exists($objSoapObject, 'MaxNews'))
				$objToReturn->intMaxNews = $objSoapObject->MaxNews;
			if (property_exists($objSoapObject, 'Cookie'))
				$objToReturn->strCookie = $objSoapObject->Cookie;
			if (property_exists($objSoapObject, 'Category'))
				$objToReturn->intCategory = $objSoapObject->Category;
			if (property_exists($objSoapObject, 'Lastdate'))
				$objToReturn->strLastdate = $objSoapObject->Lastdate;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DleRss::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Url'] = $this->strUrl;
			$iArray['Description'] = $this->strDescription;
			$iArray['AllowMain'] = $this->blnAllowMain;
			$iArray['AllowRating'] = $this->blnAllowRating;
			$iArray['AllowComm'] = $this->blnAllowComm;
			$iArray['TextType'] = $this->blnTextType;
			$iArray['Date'] = $this->blnDate;
			$iArray['Search'] = $this->strSearch;
			$iArray['MaxNews'] = $this->intMaxNews;
			$iArray['Cookie'] = $this->strCookie;
			$iArray['Category'] = $this->intCategory;
			$iArray['Lastdate'] = $this->strLastdate;
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
     * @property-read QQNode $Url
     * @property-read QQNode $Description
     * @property-read QQNode $AllowMain
     * @property-read QQNode $AllowRating
     * @property-read QQNode $AllowComm
     * @property-read QQNode $TextType
     * @property-read QQNode $Date
     * @property-read QQNode $Search
     * @property-read QQNode $MaxNews
     * @property-read QQNode $Cookie
     * @property-read QQNode $Category
     * @property-read QQNode $Lastdate
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDleRss extends QQNode {
		protected $strTableName = 'dle_rss';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleRss';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'Url':
					return new QQNode('url', 'Url', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'AllowMain':
					return new QQNode('allow_main', 'AllowMain', 'Bit', $this);
				case 'AllowRating':
					return new QQNode('allow_rating', 'AllowRating', 'Bit', $this);
				case 'AllowComm':
					return new QQNode('allow_comm', 'AllowComm', 'Bit', $this);
				case 'TextType':
					return new QQNode('text_type', 'TextType', 'Bit', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'Bit', $this);
				case 'Search':
					return new QQNode('search', 'Search', 'Blob', $this);
				case 'MaxNews':
					return new QQNode('max_news', 'MaxNews', 'Integer', $this);
				case 'Cookie':
					return new QQNode('cookie', 'Cookie', 'Blob', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'Integer', $this);
				case 'Lastdate':
					return new QQNode('lastdate', 'Lastdate', 'VarChar', $this);

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
     * @property-read QQNode $Url
     * @property-read QQNode $Description
     * @property-read QQNode $AllowMain
     * @property-read QQNode $AllowRating
     * @property-read QQNode $AllowComm
     * @property-read QQNode $TextType
     * @property-read QQNode $Date
     * @property-read QQNode $Search
     * @property-read QQNode $MaxNews
     * @property-read QQNode $Cookie
     * @property-read QQNode $Category
     * @property-read QQNode $Lastdate
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDleRss extends QQReverseReferenceNode {
		protected $strTableName = 'dle_rss';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleRss';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Url':
					return new QQNode('url', 'Url', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'AllowMain':
					return new QQNode('allow_main', 'AllowMain', 'boolean', $this);
				case 'AllowRating':
					return new QQNode('allow_rating', 'AllowRating', 'boolean', $this);
				case 'AllowComm':
					return new QQNode('allow_comm', 'AllowComm', 'boolean', $this);
				case 'TextType':
					return new QQNode('text_type', 'TextType', 'boolean', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'boolean', $this);
				case 'Search':
					return new QQNode('search', 'Search', 'string', $this);
				case 'MaxNews':
					return new QQNode('max_news', 'MaxNews', 'integer', $this);
				case 'Cookie':
					return new QQNode('cookie', 'Cookie', 'string', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'integer', $this);
				case 'Lastdate':
					return new QQNode('lastdate', 'Lastdate', 'string', $this);

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
