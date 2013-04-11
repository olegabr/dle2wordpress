<?php
	/**
	 * The abstract DleStaticGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DleStatic subclass which
	 * extends this DleStaticGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DleStatic class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $Descr the value for strDescr (Not Null)
	 * @property string $Template the value for strTemplate (Not Null)
	 * @property boolean $AllowBr the value for blnAllowBr (Not Null)
	 * @property boolean $AllowTemplate the value for blnAllowTemplate (Not Null)
	 * @property string $Grouplevel the value for strGrouplevel (Not Null)
	 * @property string $Tpl the value for strTpl (Not Null)
	 * @property string $Metadescr the value for strMetadescr (Not Null)
	 * @property string $Metakeys the value for strMetakeys (Not Null)
	 * @property integer $Views the value for intViews (Not Null)
	 * @property string $TemplateFolder the value for strTemplateFolder (Not Null)
	 * @property string $Date the value for strDate (Not Null)
	 * @property string $Metatitle the value for strMetatitle (Not Null)
	 * @property boolean $AllowCount the value for blnAllowCount (Not Null)
	 * @property boolean $Sitemap the value for blnSitemap (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DleStaticGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_static.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 100;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.descr
		 * @var string strDescr
		 */
		protected $strDescr;
		const DescrMaxLength = 255;
		const DescrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.template
		 * @var string strTemplate
		 */
		protected $strTemplate;
		const TemplateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.allow_br
		 * @var boolean blnAllowBr
		 */
		protected $blnAllowBr;
		const AllowBrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.allow_template
		 * @var boolean blnAllowTemplate
		 */
		protected $blnAllowTemplate;
		const AllowTemplateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.grouplevel
		 * @var string strGrouplevel
		 */
		protected $strGrouplevel;
		const GrouplevelMaxLength = 100;
		const GrouplevelDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.tpl
		 * @var string strTpl
		 */
		protected $strTpl;
		const TplMaxLength = 40;
		const TplDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.metadescr
		 * @var string strMetadescr
		 */
		protected $strMetadescr;
		const MetadescrMaxLength = 200;
		const MetadescrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.metakeys
		 * @var string strMetakeys
		 */
		protected $strMetakeys;
		const MetakeysDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.views
		 * @var integer intViews
		 */
		protected $intViews;
		const ViewsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.template_folder
		 * @var string strTemplateFolder
		 */
		protected $strTemplateFolder;
		const TemplateFolderMaxLength = 50;
		const TemplateFolderDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.date
		 * @var string strDate
		 */
		protected $strDate;
		const DateMaxLength = 15;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.metatitle
		 * @var string strMetatitle
		 */
		protected $strMetatitle;
		const MetatitleMaxLength = 255;
		const MetatitleDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.allow_count
		 * @var boolean blnAllowCount
		 */
		protected $blnAllowCount;
		const AllowCountDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_static.sitemap
		 * @var boolean blnSitemap
		 */
		protected $blnSitemap;
		const SitemapDefault = null;


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
			$this->intId = DleStatic::IdDefault;
			$this->strName = DleStatic::NameDefault;
			$this->strDescr = DleStatic::DescrDefault;
			$this->strTemplate = DleStatic::TemplateDefault;
			$this->blnAllowBr = DleStatic::AllowBrDefault;
			$this->blnAllowTemplate = DleStatic::AllowTemplateDefault;
			$this->strGrouplevel = DleStatic::GrouplevelDefault;
			$this->strTpl = DleStatic::TplDefault;
			$this->strMetadescr = DleStatic::MetadescrDefault;
			$this->strMetakeys = DleStatic::MetakeysDefault;
			$this->intViews = DleStatic::ViewsDefault;
			$this->strTemplateFolder = DleStatic::TemplateFolderDefault;
			$this->strDate = DleStatic::DateDefault;
			$this->strMetatitle = DleStatic::MetatitleDefault;
			$this->blnAllowCount = DleStatic::AllowCountDefault;
			$this->blnSitemap = DleStatic::SitemapDefault;
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
		 * Load a DleStatic from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleStatic
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleStatic', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DleStatic::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleStatic()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DleStatics
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleStatic[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DleStatic::QueryArray to perform the LoadAll query
			try {
				return DleStatic::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DleStatics
		 * @return int
		 */
		public static function CountAll() {
			// Call DleStatic::QueryCount to perform the CountAll query
			return DleStatic::QueryCount(QQ::All());
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
			$objDatabase = DleStatic::GetDatabase();

			// Create/Build out the QueryBuilder object with DleStatic-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_static');

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
				DleStatic::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_static');

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
		 * Static Qcubed Query method to query for a single DleStatic object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleStatic the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleStatic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DleStatic object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DleStatic::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DleStatic::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DleStatic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleStatic[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleStatic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DleStatic::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DleStatic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DleStatic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleStatic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DleStatic::GetDatabase();

			$strQuery = DleStatic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dlestatic', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DleStatic::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DleStatic
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_static';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'descr', $strAliasPrefix . 'descr');
			    $objBuilder->AddSelectItem($strTableName, 'template', $strAliasPrefix . 'template');
			    $objBuilder->AddSelectItem($strTableName, 'allow_br', $strAliasPrefix . 'allow_br');
			    $objBuilder->AddSelectItem($strTableName, 'allow_template', $strAliasPrefix . 'allow_template');
			    $objBuilder->AddSelectItem($strTableName, 'grouplevel', $strAliasPrefix . 'grouplevel');
			    $objBuilder->AddSelectItem($strTableName, 'tpl', $strAliasPrefix . 'tpl');
			    $objBuilder->AddSelectItem($strTableName, 'metadescr', $strAliasPrefix . 'metadescr');
			    $objBuilder->AddSelectItem($strTableName, 'metakeys', $strAliasPrefix . 'metakeys');
			    $objBuilder->AddSelectItem($strTableName, 'views', $strAliasPrefix . 'views');
			    $objBuilder->AddSelectItem($strTableName, 'template_folder', $strAliasPrefix . 'template_folder');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'metatitle', $strAliasPrefix . 'metatitle');
			    $objBuilder->AddSelectItem($strTableName, 'allow_count', $strAliasPrefix . 'allow_count');
			    $objBuilder->AddSelectItem($strTableName, 'sitemap', $strAliasPrefix . 'sitemap');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DleStatic from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DleStatic::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DleStatic
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DleStatic object
			$objToReturn = new DleStatic();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'descr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'template';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTemplate = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'allow_br';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowBr = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_template';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowTemplate = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'grouplevel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGrouplevel = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'tpl';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTpl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'metadescr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMetadescr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'metakeys';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMetakeys = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'views';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intViews = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'template_folder';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTemplateFolder = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'metatitle';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMetatitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'allow_count';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowCount = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'sitemap';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnSitemap = $objDbRow->GetColumn($strAliasName, 'Bit');

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
				$strAliasPrefix = 'dle_static__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DleStatics from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DleStatic[]
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
					$objItem = DleStatic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DleStatic::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DleStatic object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DleStatic next row resulting from the query
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
			return DleStatic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DleStatic object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleStatic
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DleStatic::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleStatic()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of DleStatic objects,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleStatic[]
		*/
		public static function LoadArrayByName($strName, $objOptionalClauses = null) {
			// Call DleStatic::QueryArray to perform the LoadArrayByName query
			try {
				return DleStatic::QueryArray(
					QQ::Equal(QQN::DleStatic()->Name, $strName),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DleStatics
		 * by Name Index(es)
		 * @param string $strName
		 * @return int
		*/
		public static function CountByName($strName) {
			// Call DleStatic::QueryCount to perform the CountByName query
			return DleStatic::QueryCount(
				QQ::Equal(QQN::DleStatic()->Name, $strName)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DleStatic
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DleStatic::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_static` (
							`name`,
							`descr`,
							`template`,
							`allow_br`,
							`allow_template`,
							`grouplevel`,
							`tpl`,
							`metadescr`,
							`metakeys`,
							`views`,
							`template_folder`,
							`date`,
							`metatitle`,
							`allow_count`,
							`sitemap`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescr) . ',
							' . $objDatabase->SqlVariable($this->strTemplate) . ',
							' . $objDatabase->SqlVariable($this->blnAllowBr) . ',
							' . $objDatabase->SqlVariable($this->blnAllowTemplate) . ',
							' . $objDatabase->SqlVariable($this->strGrouplevel) . ',
							' . $objDatabase->SqlVariable($this->strTpl) . ',
							' . $objDatabase->SqlVariable($this->strMetadescr) . ',
							' . $objDatabase->SqlVariable($this->strMetakeys) . ',
							' . $objDatabase->SqlVariable($this->intViews) . ',
							' . $objDatabase->SqlVariable($this->strTemplateFolder) . ',
							' . $objDatabase->SqlVariable($this->strDate) . ',
							' . $objDatabase->SqlVariable($this->strMetatitle) . ',
							' . $objDatabase->SqlVariable($this->blnAllowCount) . ',
							' . $objDatabase->SqlVariable($this->blnSitemap) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_static', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_static`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`descr` = ' . $objDatabase->SqlVariable($this->strDescr) . ',
							`template` = ' . $objDatabase->SqlVariable($this->strTemplate) . ',
							`allow_br` = ' . $objDatabase->SqlVariable($this->blnAllowBr) . ',
							`allow_template` = ' . $objDatabase->SqlVariable($this->blnAllowTemplate) . ',
							`grouplevel` = ' . $objDatabase->SqlVariable($this->strGrouplevel) . ',
							`tpl` = ' . $objDatabase->SqlVariable($this->strTpl) . ',
							`metadescr` = ' . $objDatabase->SqlVariable($this->strMetadescr) . ',
							`metakeys` = ' . $objDatabase->SqlVariable($this->strMetakeys) . ',
							`views` = ' . $objDatabase->SqlVariable($this->intViews) . ',
							`template_folder` = ' . $objDatabase->SqlVariable($this->strTemplateFolder) . ',
							`date` = ' . $objDatabase->SqlVariable($this->strDate) . ',
							`metatitle` = ' . $objDatabase->SqlVariable($this->strMetatitle) . ',
							`allow_count` = ' . $objDatabase->SqlVariable($this->blnAllowCount) . ',
							`sitemap` = ' . $objDatabase->SqlVariable($this->blnSitemap) . '
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
		 * Delete this DleStatic
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DleStatic with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DleStatic::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_static`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DleStatic ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleStatic', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DleStatics
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DleStatic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_static`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_static table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DleStatic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_static`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DleStatic from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DleStatic object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DleStatic::Load($this->intId);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strDescr = $objReloaded->strDescr;
			$this->strTemplate = $objReloaded->strTemplate;
			$this->blnAllowBr = $objReloaded->blnAllowBr;
			$this->blnAllowTemplate = $objReloaded->blnAllowTemplate;
			$this->strGrouplevel = $objReloaded->strGrouplevel;
			$this->strTpl = $objReloaded->strTpl;
			$this->strMetadescr = $objReloaded->strMetadescr;
			$this->strMetakeys = $objReloaded->strMetakeys;
			$this->intViews = $objReloaded->intViews;
			$this->strTemplateFolder = $objReloaded->strTemplateFolder;
			$this->strDate = $objReloaded->strDate;
			$this->strMetatitle = $objReloaded->strMetatitle;
			$this->blnAllowCount = $objReloaded->blnAllowCount;
			$this->blnSitemap = $objReloaded->blnSitemap;
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

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'Descr':
					/**
					 * Gets the value for strDescr (Not Null)
					 * @return string
					 */
					return $this->strDescr;

				case 'Template':
					/**
					 * Gets the value for strTemplate (Not Null)
					 * @return string
					 */
					return $this->strTemplate;

				case 'AllowBr':
					/**
					 * Gets the value for blnAllowBr (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowBr;

				case 'AllowTemplate':
					/**
					 * Gets the value for blnAllowTemplate (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowTemplate;

				case 'Grouplevel':
					/**
					 * Gets the value for strGrouplevel (Not Null)
					 * @return string
					 */
					return $this->strGrouplevel;

				case 'Tpl':
					/**
					 * Gets the value for strTpl (Not Null)
					 * @return string
					 */
					return $this->strTpl;

				case 'Metadescr':
					/**
					 * Gets the value for strMetadescr (Not Null)
					 * @return string
					 */
					return $this->strMetadescr;

				case 'Metakeys':
					/**
					 * Gets the value for strMetakeys (Not Null)
					 * @return string
					 */
					return $this->strMetakeys;

				case 'Views':
					/**
					 * Gets the value for intViews (Not Null)
					 * @return integer
					 */
					return $this->intViews;

				case 'TemplateFolder':
					/**
					 * Gets the value for strTemplateFolder (Not Null)
					 * @return string
					 */
					return $this->strTemplateFolder;

				case 'Date':
					/**
					 * Gets the value for strDate (Not Null)
					 * @return string
					 */
					return $this->strDate;

				case 'Metatitle':
					/**
					 * Gets the value for strMetatitle (Not Null)
					 * @return string
					 */
					return $this->strMetatitle;

				case 'AllowCount':
					/**
					 * Gets the value for blnAllowCount (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowCount;

				case 'Sitemap':
					/**
					 * Gets the value for blnSitemap (Not Null)
					 * @return boolean
					 */
					return $this->blnSitemap;


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

				case 'AllowBr':
					/**
					 * Sets the value for blnAllowBr (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowBr = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowTemplate':
					/**
					 * Sets the value for blnAllowTemplate (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowTemplate = QType::Cast($mixValue, QType::Boolean));
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

				case 'Tpl':
					/**
					 * Sets the value for strTpl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTpl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Metadescr':
					/**
					 * Sets the value for strMetadescr (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMetadescr = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Metakeys':
					/**
					 * Sets the value for strMetakeys (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMetakeys = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Views':
					/**
					 * Sets the value for intViews (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intViews = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TemplateFolder':
					/**
					 * Sets the value for strTemplateFolder (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTemplateFolder = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					/**
					 * Sets the value for strDate (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDate = QType::Cast($mixValue, QType::String));
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

				case 'AllowCount':
					/**
					 * Sets the value for blnAllowCount (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowCount = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Sitemap':
					/**
					 * Sets the value for blnSitemap (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnSitemap = QType::Cast($mixValue, QType::Boolean));
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
			return "dle_static";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DleStatic::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DleStatic"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Descr" type="xsd:string"/>';
			$strToReturn .= '<element name="Template" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowBr" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowTemplate" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Grouplevel" type="xsd:string"/>';
			$strToReturn .= '<element name="Tpl" type="xsd:string"/>';
			$strToReturn .= '<element name="Metadescr" type="xsd:string"/>';
			$strToReturn .= '<element name="Metakeys" type="xsd:string"/>';
			$strToReturn .= '<element name="Views" type="xsd:int"/>';
			$strToReturn .= '<element name="TemplateFolder" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:string"/>';
			$strToReturn .= '<element name="Metatitle" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowCount" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Sitemap" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DleStatic', $strComplexTypeArray)) {
				$strComplexTypeArray['DleStatic'] = DleStatic::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DleStatic::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DleStatic();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Descr'))
				$objToReturn->strDescr = $objSoapObject->Descr;
			if (property_exists($objSoapObject, 'Template'))
				$objToReturn->strTemplate = $objSoapObject->Template;
			if (property_exists($objSoapObject, 'AllowBr'))
				$objToReturn->blnAllowBr = $objSoapObject->AllowBr;
			if (property_exists($objSoapObject, 'AllowTemplate'))
				$objToReturn->blnAllowTemplate = $objSoapObject->AllowTemplate;
			if (property_exists($objSoapObject, 'Grouplevel'))
				$objToReturn->strGrouplevel = $objSoapObject->Grouplevel;
			if (property_exists($objSoapObject, 'Tpl'))
				$objToReturn->strTpl = $objSoapObject->Tpl;
			if (property_exists($objSoapObject, 'Metadescr'))
				$objToReturn->strMetadescr = $objSoapObject->Metadescr;
			if (property_exists($objSoapObject, 'Metakeys'))
				$objToReturn->strMetakeys = $objSoapObject->Metakeys;
			if (property_exists($objSoapObject, 'Views'))
				$objToReturn->intViews = $objSoapObject->Views;
			if (property_exists($objSoapObject, 'TemplateFolder'))
				$objToReturn->strTemplateFolder = $objSoapObject->TemplateFolder;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->strDate = $objSoapObject->Date;
			if (property_exists($objSoapObject, 'Metatitle'))
				$objToReturn->strMetatitle = $objSoapObject->Metatitle;
			if (property_exists($objSoapObject, 'AllowCount'))
				$objToReturn->blnAllowCount = $objSoapObject->AllowCount;
			if (property_exists($objSoapObject, 'Sitemap'))
				$objToReturn->blnSitemap = $objSoapObject->Sitemap;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DleStatic::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Name'] = $this->strName;
			$iArray['Descr'] = $this->strDescr;
			$iArray['Template'] = $this->strTemplate;
			$iArray['AllowBr'] = $this->blnAllowBr;
			$iArray['AllowTemplate'] = $this->blnAllowTemplate;
			$iArray['Grouplevel'] = $this->strGrouplevel;
			$iArray['Tpl'] = $this->strTpl;
			$iArray['Metadescr'] = $this->strMetadescr;
			$iArray['Metakeys'] = $this->strMetakeys;
			$iArray['Views'] = $this->intViews;
			$iArray['TemplateFolder'] = $this->strTemplateFolder;
			$iArray['Date'] = $this->strDate;
			$iArray['Metatitle'] = $this->strMetatitle;
			$iArray['AllowCount'] = $this->blnAllowCount;
			$iArray['Sitemap'] = $this->blnSitemap;
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
     * @property-read QQNode $Name
     * @property-read QQNode $Descr
     * @property-read QQNode $Template
     * @property-read QQNode $AllowBr
     * @property-read QQNode $AllowTemplate
     * @property-read QQNode $Grouplevel
     * @property-read QQNode $Tpl
     * @property-read QQNode $Metadescr
     * @property-read QQNode $Metakeys
     * @property-read QQNode $Views
     * @property-read QQNode $TemplateFolder
     * @property-read QQNode $Date
     * @property-read QQNode $Metatitle
     * @property-read QQNode $AllowCount
     * @property-read QQNode $Sitemap
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDleStatic extends QQNode {
		protected $strTableName = 'dle_static';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleStatic';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'VarChar', $this);
				case 'Template':
					return new QQNode('template', 'Template', 'Blob', $this);
				case 'AllowBr':
					return new QQNode('allow_br', 'AllowBr', 'Bit', $this);
				case 'AllowTemplate':
					return new QQNode('allow_template', 'AllowTemplate', 'Bit', $this);
				case 'Grouplevel':
					return new QQNode('grouplevel', 'Grouplevel', 'VarChar', $this);
				case 'Tpl':
					return new QQNode('tpl', 'Tpl', 'VarChar', $this);
				case 'Metadescr':
					return new QQNode('metadescr', 'Metadescr', 'VarChar', $this);
				case 'Metakeys':
					return new QQNode('metakeys', 'Metakeys', 'Blob', $this);
				case 'Views':
					return new QQNode('views', 'Views', 'Integer', $this);
				case 'TemplateFolder':
					return new QQNode('template_folder', 'TemplateFolder', 'VarChar', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'VarChar', $this);
				case 'Metatitle':
					return new QQNode('metatitle', 'Metatitle', 'VarChar', $this);
				case 'AllowCount':
					return new QQNode('allow_count', 'AllowCount', 'Bit', $this);
				case 'Sitemap':
					return new QQNode('sitemap', 'Sitemap', 'Bit', $this);

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
     * @property-read QQNode $Name
     * @property-read QQNode $Descr
     * @property-read QQNode $Template
     * @property-read QQNode $AllowBr
     * @property-read QQNode $AllowTemplate
     * @property-read QQNode $Grouplevel
     * @property-read QQNode $Tpl
     * @property-read QQNode $Metadescr
     * @property-read QQNode $Metakeys
     * @property-read QQNode $Views
     * @property-read QQNode $TemplateFolder
     * @property-read QQNode $Date
     * @property-read QQNode $Metatitle
     * @property-read QQNode $AllowCount
     * @property-read QQNode $Sitemap
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDleStatic extends QQReverseReferenceNode {
		protected $strTableName = 'dle_static';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleStatic';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'string', $this);
				case 'Template':
					return new QQNode('template', 'Template', 'string', $this);
				case 'AllowBr':
					return new QQNode('allow_br', 'AllowBr', 'boolean', $this);
				case 'AllowTemplate':
					return new QQNode('allow_template', 'AllowTemplate', 'boolean', $this);
				case 'Grouplevel':
					return new QQNode('grouplevel', 'Grouplevel', 'string', $this);
				case 'Tpl':
					return new QQNode('tpl', 'Tpl', 'string', $this);
				case 'Metadescr':
					return new QQNode('metadescr', 'Metadescr', 'string', $this);
				case 'Metakeys':
					return new QQNode('metakeys', 'Metakeys', 'string', $this);
				case 'Views':
					return new QQNode('views', 'Views', 'integer', $this);
				case 'TemplateFolder':
					return new QQNode('template_folder', 'TemplateFolder', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'string', $this);
				case 'Metatitle':
					return new QQNode('metatitle', 'Metatitle', 'string', $this);
				case 'AllowCount':
					return new QQNode('allow_count', 'AllowCount', 'boolean', $this);
				case 'Sitemap':
					return new QQNode('sitemap', 'Sitemap', 'boolean', $this);

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
