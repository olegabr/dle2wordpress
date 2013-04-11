<?php
	/**
	 * The abstract WpFormmakerGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpFormmaker subclass which
	 * extends this WpFormmakerGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpFormmaker class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Title the value for strTitle (Not Null)
	 * @property string $Mail the value for strMail (Not Null)
	 * @property string $Form the value for strForm (Not Null)
	 * @property string $FormFront the value for strFormFront (Not Null)
	 * @property integer $Theme the value for intTheme (Not Null)
	 * @property string $Javascript the value for strJavascript (Not Null)
	 * @property string $SubmitText the value for strSubmitText (Not Null)
	 * @property string $Url the value for strUrl (Not Null)
	 * @property integer $SubmitTextType the value for intSubmitTextType (Not Null)
	 * @property string $Script1 the value for strScript1 (Not Null)
	 * @property string $Script2 the value for strScript2 (Not Null)
	 * @property string $ScriptUser1 the value for strScriptUser1 (Not Null)
	 * @property string $ScriptUser2 the value for strScriptUser2 (Not Null)
	 * @property integer $Counter the value for intCounter (Not Null)
	 * @property string $LabelOrder the value for strLabelOrder (Not Null)
	 * @property string $ArticleId the value for strArticleId (Not Null)
	 * @property string $Pagination the value for strPagination (Not Null)
	 * @property string $ShowTitle the value for strShowTitle (Not Null)
	 * @property string $ShowNumbers the value for strShowNumbers (Not Null)
	 * @property string $PublicKey the value for strPublicKey (Not Null)
	 * @property string $PrivateKey the value for strPrivateKey (Not Null)
	 * @property string $RecaptchaTheme the value for strRecaptchaTheme (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpFormmakerGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_formmaker.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.title
		 * @var string strTitle
		 */
		protected $strTitle;
		const TitleMaxLength = 127;
		const TitleDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.mail
		 * @var string strMail
		 */
		protected $strMail;
		const MailMaxLength = 128;
		const MailDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.form
		 * @var string strForm
		 */
		protected $strForm;
		const FormDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.form_front
		 * @var string strFormFront
		 */
		protected $strFormFront;
		const FormFrontDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.theme
		 * @var integer intTheme
		 */
		protected $intTheme;
		const ThemeDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.javascript
		 * @var string strJavascript
		 */
		protected $strJavascript;
		const JavascriptDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.submit_text
		 * @var string strSubmitText
		 */
		protected $strSubmitText;
		const SubmitTextDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.url
		 * @var string strUrl
		 */
		protected $strUrl;
		const UrlMaxLength = 200;
		const UrlDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.submit_text_type
		 * @var integer intSubmitTextType
		 */
		protected $intSubmitTextType;
		const SubmitTextTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.script1
		 * @var string strScript1
		 */
		protected $strScript1;
		const Script1Default = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.script2
		 * @var string strScript2
		 */
		protected $strScript2;
		const Script2Default = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.script_user1
		 * @var string strScriptUser1
		 */
		protected $strScriptUser1;
		const ScriptUser1Default = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.script_user2
		 * @var string strScriptUser2
		 */
		protected $strScriptUser2;
		const ScriptUser2Default = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.counter
		 * @var integer intCounter
		 */
		protected $intCounter;
		const CounterDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.label_order
		 * @var string strLabelOrder
		 */
		protected $strLabelOrder;
		const LabelOrderDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.article_id
		 * @var string strArticleId
		 */
		protected $strArticleId;
		const ArticleIdMaxLength = 512;
		const ArticleIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.pagination
		 * @var string strPagination
		 */
		protected $strPagination;
		const PaginationMaxLength = 128;
		const PaginationDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.show_title
		 * @var string strShowTitle
		 */
		protected $strShowTitle;
		const ShowTitleMaxLength = 128;
		const ShowTitleDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.show_numbers
		 * @var string strShowNumbers
		 */
		protected $strShowNumbers;
		const ShowNumbersMaxLength = 128;
		const ShowNumbersDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.public_key
		 * @var string strPublicKey
		 */
		protected $strPublicKey;
		const PublicKeyMaxLength = 50;
		const PublicKeyDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.private_key
		 * @var string strPrivateKey
		 */
		protected $strPrivateKey;
		const PrivateKeyMaxLength = 50;
		const PrivateKeyDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_formmaker.recaptcha_theme
		 * @var string strRecaptchaTheme
		 */
		protected $strRecaptchaTheme;
		const RecaptchaThemeMaxLength = 20;
		const RecaptchaThemeDefault = null;


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
			$this->intId = WpFormmaker::IdDefault;
			$this->strTitle = WpFormmaker::TitleDefault;
			$this->strMail = WpFormmaker::MailDefault;
			$this->strForm = WpFormmaker::FormDefault;
			$this->strFormFront = WpFormmaker::FormFrontDefault;
			$this->intTheme = WpFormmaker::ThemeDefault;
			$this->strJavascript = WpFormmaker::JavascriptDefault;
			$this->strSubmitText = WpFormmaker::SubmitTextDefault;
			$this->strUrl = WpFormmaker::UrlDefault;
			$this->intSubmitTextType = WpFormmaker::SubmitTextTypeDefault;
			$this->strScript1 = WpFormmaker::Script1Default;
			$this->strScript2 = WpFormmaker::Script2Default;
			$this->strScriptUser1 = WpFormmaker::ScriptUser1Default;
			$this->strScriptUser2 = WpFormmaker::ScriptUser2Default;
			$this->intCounter = WpFormmaker::CounterDefault;
			$this->strLabelOrder = WpFormmaker::LabelOrderDefault;
			$this->strArticleId = WpFormmaker::ArticleIdDefault;
			$this->strPagination = WpFormmaker::PaginationDefault;
			$this->strShowTitle = WpFormmaker::ShowTitleDefault;
			$this->strShowNumbers = WpFormmaker::ShowNumbersDefault;
			$this->strPublicKey = WpFormmaker::PublicKeyDefault;
			$this->strPrivateKey = WpFormmaker::PrivateKeyDefault;
			$this->strRecaptchaTheme = WpFormmaker::RecaptchaThemeDefault;
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
		 * Load a WpFormmaker from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpFormmaker
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpFormmaker', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpFormmaker::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpFormmaker()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpFormmakers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpFormmaker[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpFormmaker::QueryArray to perform the LoadAll query
			try {
				return WpFormmaker::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpFormmakers
		 * @return int
		 */
		public static function CountAll() {
			// Call WpFormmaker::QueryCount to perform the CountAll query
			return WpFormmaker::QueryCount(QQ::All());
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
			$objDatabase = WpFormmaker::GetDatabase();

			// Create/Build out the QueryBuilder object with WpFormmaker-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_formmaker');

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
				WpFormmaker::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_formmaker');

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
		 * Static Qcubed Query method to query for a single WpFormmaker object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpFormmaker the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpFormmaker::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpFormmaker object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpFormmaker::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpFormmaker::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpFormmaker objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpFormmaker[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpFormmaker::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpFormmaker::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpFormmaker::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpFormmaker objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpFormmaker::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpFormmaker::GetDatabase();

			$strQuery = WpFormmaker::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wpformmaker', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpFormmaker::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpFormmaker
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_formmaker';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
			    $objBuilder->AddSelectItem($strTableName, 'mail', $strAliasPrefix . 'mail');
			    $objBuilder->AddSelectItem($strTableName, 'form', $strAliasPrefix . 'form');
			    $objBuilder->AddSelectItem($strTableName, 'form_front', $strAliasPrefix . 'form_front');
			    $objBuilder->AddSelectItem($strTableName, 'theme', $strAliasPrefix . 'theme');
			    $objBuilder->AddSelectItem($strTableName, 'javascript', $strAliasPrefix . 'javascript');
			    $objBuilder->AddSelectItem($strTableName, 'submit_text', $strAliasPrefix . 'submit_text');
			    $objBuilder->AddSelectItem($strTableName, 'url', $strAliasPrefix . 'url');
			    $objBuilder->AddSelectItem($strTableName, 'submit_text_type', $strAliasPrefix . 'submit_text_type');
			    $objBuilder->AddSelectItem($strTableName, 'script1', $strAliasPrefix . 'script1');
			    $objBuilder->AddSelectItem($strTableName, 'script2', $strAliasPrefix . 'script2');
			    $objBuilder->AddSelectItem($strTableName, 'script_user1', $strAliasPrefix . 'script_user1');
			    $objBuilder->AddSelectItem($strTableName, 'script_user2', $strAliasPrefix . 'script_user2');
			    $objBuilder->AddSelectItem($strTableName, 'counter', $strAliasPrefix . 'counter');
			    $objBuilder->AddSelectItem($strTableName, 'label_order', $strAliasPrefix . 'label_order');
			    $objBuilder->AddSelectItem($strTableName, 'article_id', $strAliasPrefix . 'article_id');
			    $objBuilder->AddSelectItem($strTableName, 'pagination', $strAliasPrefix . 'pagination');
			    $objBuilder->AddSelectItem($strTableName, 'show_title', $strAliasPrefix . 'show_title');
			    $objBuilder->AddSelectItem($strTableName, 'show_numbers', $strAliasPrefix . 'show_numbers');
			    $objBuilder->AddSelectItem($strTableName, 'public_key', $strAliasPrefix . 'public_key');
			    $objBuilder->AddSelectItem($strTableName, 'private_key', $strAliasPrefix . 'private_key');
			    $objBuilder->AddSelectItem($strTableName, 'recaptcha_theme', $strAliasPrefix . 'recaptcha_theme');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpFormmaker from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpFormmaker::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpFormmaker
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpFormmaker object
			$objToReturn = new WpFormmaker();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mail';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'form';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strForm = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'form_front';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFormFront = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'theme';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTheme = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'javascript';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strJavascript = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'submit_text';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSubmitText = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'url';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUrl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'submit_text_type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubmitTextType = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'script1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strScript1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'script2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strScript2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'script_user1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strScriptUser1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'script_user2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strScriptUser2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'counter';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCounter = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'label_order';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLabelOrder = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'article_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strArticleId = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pagination';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPagination = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'show_title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShowTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'show_numbers';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShowNumbers = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'public_key';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPublicKey = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'private_key';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPrivateKey = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'recaptcha_theme';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRecaptchaTheme = $objDbRow->GetColumn($strAliasName, 'VarChar');

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
				$strAliasPrefix = 'wp_formmaker__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpFormmakers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpFormmaker[]
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
					$objItem = WpFormmaker::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpFormmaker::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpFormmaker object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpFormmaker next row resulting from the query
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
			return WpFormmaker::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpFormmaker object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpFormmaker
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return WpFormmaker::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpFormmaker()->Id, $intId)
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
		 * Save this WpFormmaker
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpFormmaker::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_formmaker` (
							`title`,
							`mail`,
							`form`,
							`form_front`,
							`theme`,
							`javascript`,
							`submit_text`,
							`url`,
							`submit_text_type`,
							`script1`,
							`script2`,
							`script_user1`,
							`script_user2`,
							`counter`,
							`label_order`,
							`article_id`,
							`pagination`,
							`show_title`,
							`show_numbers`,
							`public_key`,
							`private_key`,
							`recaptcha_theme`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTitle) . ',
							' . $objDatabase->SqlVariable($this->strMail) . ',
							' . $objDatabase->SqlVariable($this->strForm) . ',
							' . $objDatabase->SqlVariable($this->strFormFront) . ',
							' . $objDatabase->SqlVariable($this->intTheme) . ',
							' . $objDatabase->SqlVariable($this->strJavascript) . ',
							' . $objDatabase->SqlVariable($this->strSubmitText) . ',
							' . $objDatabase->SqlVariable($this->strUrl) . ',
							' . $objDatabase->SqlVariable($this->intSubmitTextType) . ',
							' . $objDatabase->SqlVariable($this->strScript1) . ',
							' . $objDatabase->SqlVariable($this->strScript2) . ',
							' . $objDatabase->SqlVariable($this->strScriptUser1) . ',
							' . $objDatabase->SqlVariable($this->strScriptUser2) . ',
							' . $objDatabase->SqlVariable($this->intCounter) . ',
							' . $objDatabase->SqlVariable($this->strLabelOrder) . ',
							' . $objDatabase->SqlVariable($this->strArticleId) . ',
							' . $objDatabase->SqlVariable($this->strPagination) . ',
							' . $objDatabase->SqlVariable($this->strShowTitle) . ',
							' . $objDatabase->SqlVariable($this->strShowNumbers) . ',
							' . $objDatabase->SqlVariable($this->strPublicKey) . ',
							' . $objDatabase->SqlVariable($this->strPrivateKey) . ',
							' . $objDatabase->SqlVariable($this->strRecaptchaTheme) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('wp_formmaker', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_formmaker`
						SET
							`title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
							`mail` = ' . $objDatabase->SqlVariable($this->strMail) . ',
							`form` = ' . $objDatabase->SqlVariable($this->strForm) . ',
							`form_front` = ' . $objDatabase->SqlVariable($this->strFormFront) . ',
							`theme` = ' . $objDatabase->SqlVariable($this->intTheme) . ',
							`javascript` = ' . $objDatabase->SqlVariable($this->strJavascript) . ',
							`submit_text` = ' . $objDatabase->SqlVariable($this->strSubmitText) . ',
							`url` = ' . $objDatabase->SqlVariable($this->strUrl) . ',
							`submit_text_type` = ' . $objDatabase->SqlVariable($this->intSubmitTextType) . ',
							`script1` = ' . $objDatabase->SqlVariable($this->strScript1) . ',
							`script2` = ' . $objDatabase->SqlVariable($this->strScript2) . ',
							`script_user1` = ' . $objDatabase->SqlVariable($this->strScriptUser1) . ',
							`script_user2` = ' . $objDatabase->SqlVariable($this->strScriptUser2) . ',
							`counter` = ' . $objDatabase->SqlVariable($this->intCounter) . ',
							`label_order` = ' . $objDatabase->SqlVariable($this->strLabelOrder) . ',
							`article_id` = ' . $objDatabase->SqlVariable($this->strArticleId) . ',
							`pagination` = ' . $objDatabase->SqlVariable($this->strPagination) . ',
							`show_title` = ' . $objDatabase->SqlVariable($this->strShowTitle) . ',
							`show_numbers` = ' . $objDatabase->SqlVariable($this->strShowNumbers) . ',
							`public_key` = ' . $objDatabase->SqlVariable($this->strPublicKey) . ',
							`private_key` = ' . $objDatabase->SqlVariable($this->strPrivateKey) . ',
							`recaptcha_theme` = ' . $objDatabase->SqlVariable($this->strRecaptchaTheme) . '
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
		 * Delete this WpFormmaker
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpFormmaker with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpFormmaker::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_formmaker`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpFormmaker ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpFormmaker', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpFormmakers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpFormmaker::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_formmaker`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_formmaker table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpFormmaker::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_formmaker`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpFormmaker from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpFormmaker object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpFormmaker::Load($this->intId);

			// Update $this's local variables to match
			$this->strTitle = $objReloaded->strTitle;
			$this->strMail = $objReloaded->strMail;
			$this->strForm = $objReloaded->strForm;
			$this->strFormFront = $objReloaded->strFormFront;
			$this->intTheme = $objReloaded->intTheme;
			$this->strJavascript = $objReloaded->strJavascript;
			$this->strSubmitText = $objReloaded->strSubmitText;
			$this->strUrl = $objReloaded->strUrl;
			$this->intSubmitTextType = $objReloaded->intSubmitTextType;
			$this->strScript1 = $objReloaded->strScript1;
			$this->strScript2 = $objReloaded->strScript2;
			$this->strScriptUser1 = $objReloaded->strScriptUser1;
			$this->strScriptUser2 = $objReloaded->strScriptUser2;
			$this->intCounter = $objReloaded->intCounter;
			$this->strLabelOrder = $objReloaded->strLabelOrder;
			$this->strArticleId = $objReloaded->strArticleId;
			$this->strPagination = $objReloaded->strPagination;
			$this->strShowTitle = $objReloaded->strShowTitle;
			$this->strShowNumbers = $objReloaded->strShowNumbers;
			$this->strPublicKey = $objReloaded->strPublicKey;
			$this->strPrivateKey = $objReloaded->strPrivateKey;
			$this->strRecaptchaTheme = $objReloaded->strRecaptchaTheme;
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

				case 'Title':
					/**
					 * Gets the value for strTitle (Not Null)
					 * @return string
					 */
					return $this->strTitle;

				case 'Mail':
					/**
					 * Gets the value for strMail (Not Null)
					 * @return string
					 */
					return $this->strMail;

				case 'Form':
					/**
					 * Gets the value for strForm (Not Null)
					 * @return string
					 */
					return $this->strForm;

				case 'FormFront':
					/**
					 * Gets the value for strFormFront (Not Null)
					 * @return string
					 */
					return $this->strFormFront;

				case 'Theme':
					/**
					 * Gets the value for intTheme (Not Null)
					 * @return integer
					 */
					return $this->intTheme;

				case 'Javascript':
					/**
					 * Gets the value for strJavascript (Not Null)
					 * @return string
					 */
					return $this->strJavascript;

				case 'SubmitText':
					/**
					 * Gets the value for strSubmitText (Not Null)
					 * @return string
					 */
					return $this->strSubmitText;

				case 'Url':
					/**
					 * Gets the value for strUrl (Not Null)
					 * @return string
					 */
					return $this->strUrl;

				case 'SubmitTextType':
					/**
					 * Gets the value for intSubmitTextType (Not Null)
					 * @return integer
					 */
					return $this->intSubmitTextType;

				case 'Script1':
					/**
					 * Gets the value for strScript1 (Not Null)
					 * @return string
					 */
					return $this->strScript1;

				case 'Script2':
					/**
					 * Gets the value for strScript2 (Not Null)
					 * @return string
					 */
					return $this->strScript2;

				case 'ScriptUser1':
					/**
					 * Gets the value for strScriptUser1 (Not Null)
					 * @return string
					 */
					return $this->strScriptUser1;

				case 'ScriptUser2':
					/**
					 * Gets the value for strScriptUser2 (Not Null)
					 * @return string
					 */
					return $this->strScriptUser2;

				case 'Counter':
					/**
					 * Gets the value for intCounter (Not Null)
					 * @return integer
					 */
					return $this->intCounter;

				case 'LabelOrder':
					/**
					 * Gets the value for strLabelOrder (Not Null)
					 * @return string
					 */
					return $this->strLabelOrder;

				case 'ArticleId':
					/**
					 * Gets the value for strArticleId (Not Null)
					 * @return string
					 */
					return $this->strArticleId;

				case 'Pagination':
					/**
					 * Gets the value for strPagination (Not Null)
					 * @return string
					 */
					return $this->strPagination;

				case 'ShowTitle':
					/**
					 * Gets the value for strShowTitle (Not Null)
					 * @return string
					 */
					return $this->strShowTitle;

				case 'ShowNumbers':
					/**
					 * Gets the value for strShowNumbers (Not Null)
					 * @return string
					 */
					return $this->strShowNumbers;

				case 'PublicKey':
					/**
					 * Gets the value for strPublicKey (Not Null)
					 * @return string
					 */
					return $this->strPublicKey;

				case 'PrivateKey':
					/**
					 * Gets the value for strPrivateKey (Not Null)
					 * @return string
					 */
					return $this->strPrivateKey;

				case 'RecaptchaTheme':
					/**
					 * Gets the value for strRecaptchaTheme (Not Null)
					 * @return string
					 */
					return $this->strRecaptchaTheme;


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
				case 'Title':
					/**
					 * Sets the value for strTitle (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTitle = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Mail':
					/**
					 * Sets the value for strMail (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Form':
					/**
					 * Sets the value for strForm (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strForm = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FormFront':
					/**
					 * Sets the value for strFormFront (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFormFront = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Theme':
					/**
					 * Sets the value for intTheme (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTheme = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Javascript':
					/**
					 * Sets the value for strJavascript (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strJavascript = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubmitText':
					/**
					 * Sets the value for strSubmitText (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSubmitText = QType::Cast($mixValue, QType::String));
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

				case 'SubmitTextType':
					/**
					 * Sets the value for intSubmitTextType (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSubmitTextType = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Script1':
					/**
					 * Sets the value for strScript1 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strScript1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Script2':
					/**
					 * Sets the value for strScript2 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strScript2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScriptUser1':
					/**
					 * Sets the value for strScriptUser1 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strScriptUser1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScriptUser2':
					/**
					 * Sets the value for strScriptUser2 (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strScriptUser2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Counter':
					/**
					 * Sets the value for intCounter (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCounter = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LabelOrder':
					/**
					 * Sets the value for strLabelOrder (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLabelOrder = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ArticleId':
					/**
					 * Sets the value for strArticleId (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strArticleId = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pagination':
					/**
					 * Sets the value for strPagination (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPagination = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShowTitle':
					/**
					 * Sets the value for strShowTitle (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShowTitle = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShowNumbers':
					/**
					 * Sets the value for strShowNumbers (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShowNumbers = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PublicKey':
					/**
					 * Sets the value for strPublicKey (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPublicKey = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrivateKey':
					/**
					 * Sets the value for strPrivateKey (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrivateKey = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RecaptchaTheme':
					/**
					 * Sets the value for strRecaptchaTheme (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRecaptchaTheme = QType::Cast($mixValue, QType::String));
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
			return "wp_formmaker";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpFormmaker::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpFormmaker"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Title" type="xsd:string"/>';
			$strToReturn .= '<element name="Mail" type="xsd:string"/>';
			$strToReturn .= '<element name="Form" type="xsd:string"/>';
			$strToReturn .= '<element name="FormFront" type="xsd:string"/>';
			$strToReturn .= '<element name="Theme" type="xsd:int"/>';
			$strToReturn .= '<element name="Javascript" type="xsd:string"/>';
			$strToReturn .= '<element name="SubmitText" type="xsd:string"/>';
			$strToReturn .= '<element name="Url" type="xsd:string"/>';
			$strToReturn .= '<element name="SubmitTextType" type="xsd:int"/>';
			$strToReturn .= '<element name="Script1" type="xsd:string"/>';
			$strToReturn .= '<element name="Script2" type="xsd:string"/>';
			$strToReturn .= '<element name="ScriptUser1" type="xsd:string"/>';
			$strToReturn .= '<element name="ScriptUser2" type="xsd:string"/>';
			$strToReturn .= '<element name="Counter" type="xsd:int"/>';
			$strToReturn .= '<element name="LabelOrder" type="xsd:string"/>';
			$strToReturn .= '<element name="ArticleId" type="xsd:string"/>';
			$strToReturn .= '<element name="Pagination" type="xsd:string"/>';
			$strToReturn .= '<element name="ShowTitle" type="xsd:string"/>';
			$strToReturn .= '<element name="ShowNumbers" type="xsd:string"/>';
			$strToReturn .= '<element name="PublicKey" type="xsd:string"/>';
			$strToReturn .= '<element name="PrivateKey" type="xsd:string"/>';
			$strToReturn .= '<element name="RecaptchaTheme" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpFormmaker', $strComplexTypeArray)) {
				$strComplexTypeArray['WpFormmaker'] = WpFormmaker::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpFormmaker::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpFormmaker();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Title'))
				$objToReturn->strTitle = $objSoapObject->Title;
			if (property_exists($objSoapObject, 'Mail'))
				$objToReturn->strMail = $objSoapObject->Mail;
			if (property_exists($objSoapObject, 'Form'))
				$objToReturn->strForm = $objSoapObject->Form;
			if (property_exists($objSoapObject, 'FormFront'))
				$objToReturn->strFormFront = $objSoapObject->FormFront;
			if (property_exists($objSoapObject, 'Theme'))
				$objToReturn->intTheme = $objSoapObject->Theme;
			if (property_exists($objSoapObject, 'Javascript'))
				$objToReturn->strJavascript = $objSoapObject->Javascript;
			if (property_exists($objSoapObject, 'SubmitText'))
				$objToReturn->strSubmitText = $objSoapObject->SubmitText;
			if (property_exists($objSoapObject, 'Url'))
				$objToReturn->strUrl = $objSoapObject->Url;
			if (property_exists($objSoapObject, 'SubmitTextType'))
				$objToReturn->intSubmitTextType = $objSoapObject->SubmitTextType;
			if (property_exists($objSoapObject, 'Script1'))
				$objToReturn->strScript1 = $objSoapObject->Script1;
			if (property_exists($objSoapObject, 'Script2'))
				$objToReturn->strScript2 = $objSoapObject->Script2;
			if (property_exists($objSoapObject, 'ScriptUser1'))
				$objToReturn->strScriptUser1 = $objSoapObject->ScriptUser1;
			if (property_exists($objSoapObject, 'ScriptUser2'))
				$objToReturn->strScriptUser2 = $objSoapObject->ScriptUser2;
			if (property_exists($objSoapObject, 'Counter'))
				$objToReturn->intCounter = $objSoapObject->Counter;
			if (property_exists($objSoapObject, 'LabelOrder'))
				$objToReturn->strLabelOrder = $objSoapObject->LabelOrder;
			if (property_exists($objSoapObject, 'ArticleId'))
				$objToReturn->strArticleId = $objSoapObject->ArticleId;
			if (property_exists($objSoapObject, 'Pagination'))
				$objToReturn->strPagination = $objSoapObject->Pagination;
			if (property_exists($objSoapObject, 'ShowTitle'))
				$objToReturn->strShowTitle = $objSoapObject->ShowTitle;
			if (property_exists($objSoapObject, 'ShowNumbers'))
				$objToReturn->strShowNumbers = $objSoapObject->ShowNumbers;
			if (property_exists($objSoapObject, 'PublicKey'))
				$objToReturn->strPublicKey = $objSoapObject->PublicKey;
			if (property_exists($objSoapObject, 'PrivateKey'))
				$objToReturn->strPrivateKey = $objSoapObject->PrivateKey;
			if (property_exists($objSoapObject, 'RecaptchaTheme'))
				$objToReturn->strRecaptchaTheme = $objSoapObject->RecaptchaTheme;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpFormmaker::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Title'] = $this->strTitle;
			$iArray['Mail'] = $this->strMail;
			$iArray['Form'] = $this->strForm;
			$iArray['FormFront'] = $this->strFormFront;
			$iArray['Theme'] = $this->intTheme;
			$iArray['Javascript'] = $this->strJavascript;
			$iArray['SubmitText'] = $this->strSubmitText;
			$iArray['Url'] = $this->strUrl;
			$iArray['SubmitTextType'] = $this->intSubmitTextType;
			$iArray['Script1'] = $this->strScript1;
			$iArray['Script2'] = $this->strScript2;
			$iArray['ScriptUser1'] = $this->strScriptUser1;
			$iArray['ScriptUser2'] = $this->strScriptUser2;
			$iArray['Counter'] = $this->intCounter;
			$iArray['LabelOrder'] = $this->strLabelOrder;
			$iArray['ArticleId'] = $this->strArticleId;
			$iArray['Pagination'] = $this->strPagination;
			$iArray['ShowTitle'] = $this->strShowTitle;
			$iArray['ShowNumbers'] = $this->strShowNumbers;
			$iArray['PublicKey'] = $this->strPublicKey;
			$iArray['PrivateKey'] = $this->strPrivateKey;
			$iArray['RecaptchaTheme'] = $this->strRecaptchaTheme;
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
     * @property-read QQNode $Title
     * @property-read QQNode $Mail
     * @property-read QQNode $Form
     * @property-read QQNode $FormFront
     * @property-read QQNode $Theme
     * @property-read QQNode $Javascript
     * @property-read QQNode $SubmitText
     * @property-read QQNode $Url
     * @property-read QQNode $SubmitTextType
     * @property-read QQNode $Script1
     * @property-read QQNode $Script2
     * @property-read QQNode $ScriptUser1
     * @property-read QQNode $ScriptUser2
     * @property-read QQNode $Counter
     * @property-read QQNode $LabelOrder
     * @property-read QQNode $ArticleId
     * @property-read QQNode $Pagination
     * @property-read QQNode $ShowTitle
     * @property-read QQNode $ShowNumbers
     * @property-read QQNode $PublicKey
     * @property-read QQNode $PrivateKey
     * @property-read QQNode $RecaptchaTheme
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpFormmaker extends QQNode {
		protected $strTableName = 'wp_formmaker';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'WpFormmaker';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'VarChar', $this);
				case 'Mail':
					return new QQNode('mail', 'Mail', 'VarChar', $this);
				case 'Form':
					return new QQNode('form', 'Form', 'Blob', $this);
				case 'FormFront':
					return new QQNode('form_front', 'FormFront', 'Blob', $this);
				case 'Theme':
					return new QQNode('theme', 'Theme', 'Integer', $this);
				case 'Javascript':
					return new QQNode('javascript', 'Javascript', 'Blob', $this);
				case 'SubmitText':
					return new QQNode('submit_text', 'SubmitText', 'Blob', $this);
				case 'Url':
					return new QQNode('url', 'Url', 'VarChar', $this);
				case 'SubmitTextType':
					return new QQNode('submit_text_type', 'SubmitTextType', 'Integer', $this);
				case 'Script1':
					return new QQNode('script1', 'Script1', 'Blob', $this);
				case 'Script2':
					return new QQNode('script2', 'Script2', 'Blob', $this);
				case 'ScriptUser1':
					return new QQNode('script_user1', 'ScriptUser1', 'Blob', $this);
				case 'ScriptUser2':
					return new QQNode('script_user2', 'ScriptUser2', 'Blob', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'Integer', $this);
				case 'LabelOrder':
					return new QQNode('label_order', 'LabelOrder', 'Blob', $this);
				case 'ArticleId':
					return new QQNode('article_id', 'ArticleId', 'VarChar', $this);
				case 'Pagination':
					return new QQNode('pagination', 'Pagination', 'VarChar', $this);
				case 'ShowTitle':
					return new QQNode('show_title', 'ShowTitle', 'VarChar', $this);
				case 'ShowNumbers':
					return new QQNode('show_numbers', 'ShowNumbers', 'VarChar', $this);
				case 'PublicKey':
					return new QQNode('public_key', 'PublicKey', 'VarChar', $this);
				case 'PrivateKey':
					return new QQNode('private_key', 'PrivateKey', 'VarChar', $this);
				case 'RecaptchaTheme':
					return new QQNode('recaptcha_theme', 'RecaptchaTheme', 'VarChar', $this);

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
     * @property-read QQNode $Title
     * @property-read QQNode $Mail
     * @property-read QQNode $Form
     * @property-read QQNode $FormFront
     * @property-read QQNode $Theme
     * @property-read QQNode $Javascript
     * @property-read QQNode $SubmitText
     * @property-read QQNode $Url
     * @property-read QQNode $SubmitTextType
     * @property-read QQNode $Script1
     * @property-read QQNode $Script2
     * @property-read QQNode $ScriptUser1
     * @property-read QQNode $ScriptUser2
     * @property-read QQNode $Counter
     * @property-read QQNode $LabelOrder
     * @property-read QQNode $ArticleId
     * @property-read QQNode $Pagination
     * @property-read QQNode $ShowTitle
     * @property-read QQNode $ShowNumbers
     * @property-read QQNode $PublicKey
     * @property-read QQNode $PrivateKey
     * @property-read QQNode $RecaptchaTheme
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpFormmaker extends QQReverseReferenceNode {
		protected $strTableName = 'wp_formmaker';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'WpFormmaker';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'Mail':
					return new QQNode('mail', 'Mail', 'string', $this);
				case 'Form':
					return new QQNode('form', 'Form', 'string', $this);
				case 'FormFront':
					return new QQNode('form_front', 'FormFront', 'string', $this);
				case 'Theme':
					return new QQNode('theme', 'Theme', 'integer', $this);
				case 'Javascript':
					return new QQNode('javascript', 'Javascript', 'string', $this);
				case 'SubmitText':
					return new QQNode('submit_text', 'SubmitText', 'string', $this);
				case 'Url':
					return new QQNode('url', 'Url', 'string', $this);
				case 'SubmitTextType':
					return new QQNode('submit_text_type', 'SubmitTextType', 'integer', $this);
				case 'Script1':
					return new QQNode('script1', 'Script1', 'string', $this);
				case 'Script2':
					return new QQNode('script2', 'Script2', 'string', $this);
				case 'ScriptUser1':
					return new QQNode('script_user1', 'ScriptUser1', 'string', $this);
				case 'ScriptUser2':
					return new QQNode('script_user2', 'ScriptUser2', 'string', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'integer', $this);
				case 'LabelOrder':
					return new QQNode('label_order', 'LabelOrder', 'string', $this);
				case 'ArticleId':
					return new QQNode('article_id', 'ArticleId', 'string', $this);
				case 'Pagination':
					return new QQNode('pagination', 'Pagination', 'string', $this);
				case 'ShowTitle':
					return new QQNode('show_title', 'ShowTitle', 'string', $this);
				case 'ShowNumbers':
					return new QQNode('show_numbers', 'ShowNumbers', 'string', $this);
				case 'PublicKey':
					return new QQNode('public_key', 'PublicKey', 'string', $this);
				case 'PrivateKey':
					return new QQNode('private_key', 'PrivateKey', 'string', $this);
				case 'RecaptchaTheme':
					return new QQNode('recaptcha_theme', 'RecaptchaTheme', 'string', $this);

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
