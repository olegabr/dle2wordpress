<?php
	/**
	 * The abstract DleRssinformGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DleRssinform subclass which
	 * extends this DleRssinformGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DleRssinform class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Tag the value for strTag (Not Null)
	 * @property string $Descr the value for strDescr (Not Null)
	 * @property string $Category the value for strCategory (Not Null)
	 * @property string $Url the value for strUrl (Not Null)
	 * @property string $Template the value for strTemplate (Not Null)
	 * @property integer $NewsMax the value for intNewsMax (Not Null)
	 * @property integer $Tmax the value for intTmax (Not Null)
	 * @property integer $Dmax the value for intDmax (Not Null)
	 * @property boolean $Approve the value for blnApprove (Not Null)
	 * @property string $RssDateFormat the value for strRssDateFormat (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DleRssinformGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_rssinform.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.tag
		 * @var string strTag
		 */
		protected $strTag;
		const TagMaxLength = 40;
		const TagDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.descr
		 * @var string strDescr
		 */
		protected $strDescr;
		const DescrMaxLength = 255;
		const DescrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.category
		 * @var string strCategory
		 */
		protected $strCategory;
		const CategoryMaxLength = 200;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.url
		 * @var string strUrl
		 */
		protected $strUrl;
		const UrlMaxLength = 255;
		const UrlDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.template
		 * @var string strTemplate
		 */
		protected $strTemplate;
		const TemplateMaxLength = 40;
		const TemplateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.news_max
		 * @var integer intNewsMax
		 */
		protected $intNewsMax;
		const NewsMaxDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.tmax
		 * @var integer intTmax
		 */
		protected $intTmax;
		const TmaxDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.dmax
		 * @var integer intDmax
		 */
		protected $intDmax;
		const DmaxDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.approve
		 * @var boolean blnApprove
		 */
		protected $blnApprove;
		const ApproveDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_rssinform.rss_date_format
		 * @var string strRssDateFormat
		 */
		protected $strRssDateFormat;
		const RssDateFormatMaxLength = 20;
		const RssDateFormatDefault = null;


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
			$this->intId = DleRssinform::IdDefault;
			$this->strTag = DleRssinform::TagDefault;
			$this->strDescr = DleRssinform::DescrDefault;
			$this->strCategory = DleRssinform::CategoryDefault;
			$this->strUrl = DleRssinform::UrlDefault;
			$this->strTemplate = DleRssinform::TemplateDefault;
			$this->intNewsMax = DleRssinform::NewsMaxDefault;
			$this->intTmax = DleRssinform::TmaxDefault;
			$this->intDmax = DleRssinform::DmaxDefault;
			$this->blnApprove = DleRssinform::ApproveDefault;
			$this->strRssDateFormat = DleRssinform::RssDateFormatDefault;
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
		 * Load a DleRssinform from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleRssinform
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleRssinform', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DleRssinform::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleRssinform()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DleRssinforms
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleRssinform[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DleRssinform::QueryArray to perform the LoadAll query
			try {
				return DleRssinform::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DleRssinforms
		 * @return int
		 */
		public static function CountAll() {
			// Call DleRssinform::QueryCount to perform the CountAll query
			return DleRssinform::QueryCount(QQ::All());
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
			$objDatabase = DleRssinform::GetDatabase();

			// Create/Build out the QueryBuilder object with DleRssinform-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_rssinform');

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
				DleRssinform::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_rssinform');

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
		 * Static Qcubed Query method to query for a single DleRssinform object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleRssinform the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleRssinform::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DleRssinform object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DleRssinform::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DleRssinform::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DleRssinform objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleRssinform[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleRssinform::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DleRssinform::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DleRssinform::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DleRssinform objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleRssinform::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DleRssinform::GetDatabase();

			$strQuery = DleRssinform::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dlerssinform', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DleRssinform::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DleRssinform
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_rssinform';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'tag', $strAliasPrefix . 'tag');
			    $objBuilder->AddSelectItem($strTableName, 'descr', $strAliasPrefix . 'descr');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'url', $strAliasPrefix . 'url');
			    $objBuilder->AddSelectItem($strTableName, 'template', $strAliasPrefix . 'template');
			    $objBuilder->AddSelectItem($strTableName, 'news_max', $strAliasPrefix . 'news_max');
			    $objBuilder->AddSelectItem($strTableName, 'tmax', $strAliasPrefix . 'tmax');
			    $objBuilder->AddSelectItem($strTableName, 'dmax', $strAliasPrefix . 'dmax');
			    $objBuilder->AddSelectItem($strTableName, 'approve', $strAliasPrefix . 'approve');
			    $objBuilder->AddSelectItem($strTableName, 'rss_date_format', $strAliasPrefix . 'rss_date_format');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DleRssinform from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DleRssinform::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DleRssinform
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DleRssinform object
			$objToReturn = new DleRssinform();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'tag';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTag = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'descr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCategory = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'url';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUrl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'template';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTemplate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'news_max';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intNewsMax = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'tmax';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTmax = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'dmax';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDmax = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'approve';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnApprove = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'rss_date_format';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRssDateFormat = $objDbRow->GetColumn($strAliasName, 'VarChar');

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
				$strAliasPrefix = 'dle_rssinform__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DleRssinforms from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DleRssinform[]
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
					$objItem = DleRssinform::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DleRssinform::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DleRssinform object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DleRssinform next row resulting from the query
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
			return DleRssinform::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DleRssinform object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleRssinform
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DleRssinform::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleRssinform()->Id, $intId)
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
		 * Save this DleRssinform
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DleRssinform::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_rssinform` (
							`tag`,
							`descr`,
							`category`,
							`url`,
							`template`,
							`news_max`,
							`tmax`,
							`dmax`,
							`approve`,
							`rss_date_format`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTag) . ',
							' . $objDatabase->SqlVariable($this->strDescr) . ',
							' . $objDatabase->SqlVariable($this->strCategory) . ',
							' . $objDatabase->SqlVariable($this->strUrl) . ',
							' . $objDatabase->SqlVariable($this->strTemplate) . ',
							' . $objDatabase->SqlVariable($this->intNewsMax) . ',
							' . $objDatabase->SqlVariable($this->intTmax) . ',
							' . $objDatabase->SqlVariable($this->intDmax) . ',
							' . $objDatabase->SqlVariable($this->blnApprove) . ',
							' . $objDatabase->SqlVariable($this->strRssDateFormat) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_rssinform', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_rssinform`
						SET
							`tag` = ' . $objDatabase->SqlVariable($this->strTag) . ',
							`descr` = ' . $objDatabase->SqlVariable($this->strDescr) . ',
							`category` = ' . $objDatabase->SqlVariable($this->strCategory) . ',
							`url` = ' . $objDatabase->SqlVariable($this->strUrl) . ',
							`template` = ' . $objDatabase->SqlVariable($this->strTemplate) . ',
							`news_max` = ' . $objDatabase->SqlVariable($this->intNewsMax) . ',
							`tmax` = ' . $objDatabase->SqlVariable($this->intTmax) . ',
							`dmax` = ' . $objDatabase->SqlVariable($this->intDmax) . ',
							`approve` = ' . $objDatabase->SqlVariable($this->blnApprove) . ',
							`rss_date_format` = ' . $objDatabase->SqlVariable($this->strRssDateFormat) . '
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
		 * Delete this DleRssinform
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DleRssinform with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DleRssinform::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_rssinform`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DleRssinform ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleRssinform', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DleRssinforms
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DleRssinform::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_rssinform`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_rssinform table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DleRssinform::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_rssinform`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DleRssinform from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DleRssinform object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DleRssinform::Load($this->intId);

			// Update $this's local variables to match
			$this->strTag = $objReloaded->strTag;
			$this->strDescr = $objReloaded->strDescr;
			$this->strCategory = $objReloaded->strCategory;
			$this->strUrl = $objReloaded->strUrl;
			$this->strTemplate = $objReloaded->strTemplate;
			$this->intNewsMax = $objReloaded->intNewsMax;
			$this->intTmax = $objReloaded->intTmax;
			$this->intDmax = $objReloaded->intDmax;
			$this->blnApprove = $objReloaded->blnApprove;
			$this->strRssDateFormat = $objReloaded->strRssDateFormat;
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

				case 'Tag':
					/**
					 * Gets the value for strTag (Not Null)
					 * @return string
					 */
					return $this->strTag;

				case 'Descr':
					/**
					 * Gets the value for strDescr (Not Null)
					 * @return string
					 */
					return $this->strDescr;

				case 'Category':
					/**
					 * Gets the value for strCategory (Not Null)
					 * @return string
					 */
					return $this->strCategory;

				case 'Url':
					/**
					 * Gets the value for strUrl (Not Null)
					 * @return string
					 */
					return $this->strUrl;

				case 'Template':
					/**
					 * Gets the value for strTemplate (Not Null)
					 * @return string
					 */
					return $this->strTemplate;

				case 'NewsMax':
					/**
					 * Gets the value for intNewsMax (Not Null)
					 * @return integer
					 */
					return $this->intNewsMax;

				case 'Tmax':
					/**
					 * Gets the value for intTmax (Not Null)
					 * @return integer
					 */
					return $this->intTmax;

				case 'Dmax':
					/**
					 * Gets the value for intDmax (Not Null)
					 * @return integer
					 */
					return $this->intDmax;

				case 'Approve':
					/**
					 * Gets the value for blnApprove (Not Null)
					 * @return boolean
					 */
					return $this->blnApprove;

				case 'RssDateFormat':
					/**
					 * Gets the value for strRssDateFormat (Not Null)
					 * @return string
					 */
					return $this->strRssDateFormat;


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
				case 'Tag':
					/**
					 * Sets the value for strTag (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTag = QType::Cast($mixValue, QType::String));
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

				case 'Template':
					/**
					 * Sets the value for strTemplate (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTemplate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsMax':
					/**
					 * Sets the value for intNewsMax (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intNewsMax = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tmax':
					/**
					 * Sets the value for intTmax (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTmax = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Dmax':
					/**
					 * Sets the value for intDmax (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intDmax = QType::Cast($mixValue, QType::Integer));
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

				case 'RssDateFormat':
					/**
					 * Sets the value for strRssDateFormat (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRssDateFormat = QType::Cast($mixValue, QType::String));
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
			return "dle_rssinform";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DleRssinform::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DleRssinform"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Tag" type="xsd:string"/>';
			$strToReturn .= '<element name="Descr" type="xsd:string"/>';
			$strToReturn .= '<element name="Category" type="xsd:string"/>';
			$strToReturn .= '<element name="Url" type="xsd:string"/>';
			$strToReturn .= '<element name="Template" type="xsd:string"/>';
			$strToReturn .= '<element name="NewsMax" type="xsd:int"/>';
			$strToReturn .= '<element name="Tmax" type="xsd:int"/>';
			$strToReturn .= '<element name="Dmax" type="xsd:int"/>';
			$strToReturn .= '<element name="Approve" type="xsd:boolean"/>';
			$strToReturn .= '<element name="RssDateFormat" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DleRssinform', $strComplexTypeArray)) {
				$strComplexTypeArray['DleRssinform'] = DleRssinform::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DleRssinform::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DleRssinform();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Tag'))
				$objToReturn->strTag = $objSoapObject->Tag;
			if (property_exists($objSoapObject, 'Descr'))
				$objToReturn->strDescr = $objSoapObject->Descr;
			if (property_exists($objSoapObject, 'Category'))
				$objToReturn->strCategory = $objSoapObject->Category;
			if (property_exists($objSoapObject, 'Url'))
				$objToReturn->strUrl = $objSoapObject->Url;
			if (property_exists($objSoapObject, 'Template'))
				$objToReturn->strTemplate = $objSoapObject->Template;
			if (property_exists($objSoapObject, 'NewsMax'))
				$objToReturn->intNewsMax = $objSoapObject->NewsMax;
			if (property_exists($objSoapObject, 'Tmax'))
				$objToReturn->intTmax = $objSoapObject->Tmax;
			if (property_exists($objSoapObject, 'Dmax'))
				$objToReturn->intDmax = $objSoapObject->Dmax;
			if (property_exists($objSoapObject, 'Approve'))
				$objToReturn->blnApprove = $objSoapObject->Approve;
			if (property_exists($objSoapObject, 'RssDateFormat'))
				$objToReturn->strRssDateFormat = $objSoapObject->RssDateFormat;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DleRssinform::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Tag'] = $this->strTag;
			$iArray['Descr'] = $this->strDescr;
			$iArray['Category'] = $this->strCategory;
			$iArray['Url'] = $this->strUrl;
			$iArray['Template'] = $this->strTemplate;
			$iArray['NewsMax'] = $this->intNewsMax;
			$iArray['Tmax'] = $this->intTmax;
			$iArray['Dmax'] = $this->intDmax;
			$iArray['Approve'] = $this->blnApprove;
			$iArray['RssDateFormat'] = $this->strRssDateFormat;
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
     * @property-read QQNode $Tag
     * @property-read QQNode $Descr
     * @property-read QQNode $Category
     * @property-read QQNode $Url
     * @property-read QQNode $Template
     * @property-read QQNode $NewsMax
     * @property-read QQNode $Tmax
     * @property-read QQNode $Dmax
     * @property-read QQNode $Approve
     * @property-read QQNode $RssDateFormat
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDleRssinform extends QQNode {
		protected $strTableName = 'dle_rssinform';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleRssinform';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'Tag':
					return new QQNode('tag', 'Tag', 'VarChar', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'VarChar', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'VarChar', $this);
				case 'Url':
					return new QQNode('url', 'Url', 'VarChar', $this);
				case 'Template':
					return new QQNode('template', 'Template', 'VarChar', $this);
				case 'NewsMax':
					return new QQNode('news_max', 'NewsMax', 'Integer', $this);
				case 'Tmax':
					return new QQNode('tmax', 'Tmax', 'Integer', $this);
				case 'Dmax':
					return new QQNode('dmax', 'Dmax', 'Integer', $this);
				case 'Approve':
					return new QQNode('approve', 'Approve', 'Bit', $this);
				case 'RssDateFormat':
					return new QQNode('rss_date_format', 'RssDateFormat', 'VarChar', $this);

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
     * @property-read QQNode $Tag
     * @property-read QQNode $Descr
     * @property-read QQNode $Category
     * @property-read QQNode $Url
     * @property-read QQNode $Template
     * @property-read QQNode $NewsMax
     * @property-read QQNode $Tmax
     * @property-read QQNode $Dmax
     * @property-read QQNode $Approve
     * @property-read QQNode $RssDateFormat
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDleRssinform extends QQReverseReferenceNode {
		protected $strTableName = 'dle_rssinform';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleRssinform';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Tag':
					return new QQNode('tag', 'Tag', 'string', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'string', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'string', $this);
				case 'Url':
					return new QQNode('url', 'Url', 'string', $this);
				case 'Template':
					return new QQNode('template', 'Template', 'string', $this);
				case 'NewsMax':
					return new QQNode('news_max', 'NewsMax', 'integer', $this);
				case 'Tmax':
					return new QQNode('tmax', 'Tmax', 'integer', $this);
				case 'Dmax':
					return new QQNode('dmax', 'Dmax', 'integer', $this);
				case 'Approve':
					return new QQNode('approve', 'Approve', 'boolean', $this);
				case 'RssDateFormat':
					return new QQNode('rss_date_format', 'RssDateFormat', 'string', $this);

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
