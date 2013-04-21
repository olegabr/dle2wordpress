<?php
	/**
	 * The abstract DleUsersGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DleUsers subclass which
	 * extends this DleUsersGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DleUsers class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property string $Email the value for strEmail (Unique)
	 * @property string $Password the value for strPassword (Not Null)
	 * @property string $Name the value for strName (Unique)
	 * @property-read integer $UserId the value for intUserId (Read-Only PK)
	 * @property integer $NewsNum the value for intNewsNum (Not Null)
	 * @property integer $CommNum the value for intCommNum (Not Null)
	 * @property integer $UserGroup the value for intUserGroup (Not Null)
	 * @property string $Lastdate the value for strLastdate 
	 * @property string $RegDate the value for strRegDate 
	 * @property string $Banned the value for strBanned (Not Null)
	 * @property boolean $AllowMail the value for blnAllowMail (Not Null)
	 * @property string $Info the value for strInfo (Not Null)
	 * @property string $Signature the value for strSignature (Not Null)
	 * @property string $Foto the value for strFoto (Not Null)
	 * @property string $Fullname the value for strFullname (Not Null)
	 * @property string $Land the value for strLand (Not Null)
	 * @property string $Icq the value for strIcq (Not Null)
	 * @property string $Favorites the value for strFavorites (Not Null)
	 * @property integer $PmAll the value for intPmAll (Not Null)
	 * @property integer $PmUnread the value for intPmUnread (Not Null)
	 * @property string $TimeLimit the value for strTimeLimit (Not Null)
	 * @property string $Xfields the value for strXfields (Not Null)
	 * @property string $AllowedIp the value for strAllowedIp (Not Null)
	 * @property string $Hash the value for strHash (Not Null)
	 * @property string $LoggedIp the value for strLoggedIp (Not Null)
	 * @property boolean $Restricted the value for blnRestricted (Not Null)
	 * @property integer $RestrictedDays the value for intRestrictedDays (Not Null)
	 * @property string $RestrictedDate the value for strRestrictedDate (Not Null)
	 * @property-read DleComments $_DleCommentsAsUser the value for the private _objDleCommentsAsUser (Read-Only) if set due to an expansion on the dle_comments.user_id reverse relationship
	 * @property-read DleComments[] $_DleCommentsAsUserArray the value for the private _objDleCommentsAsUserArray (Read-Only) if set due to an ExpandAsArray on the dle_comments.user_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DleUsersGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database column dle_users.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 50;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.password
		 * @var string strPassword
		 */
		protected $strPassword;
		const PasswordMaxLength = 32;
		const PasswordDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 40;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database PK Identity column dle_users.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.news_num
		 * @var integer intNewsNum
		 */
		protected $intNewsNum;
		const NewsNumDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.comm_num
		 * @var integer intCommNum
		 */
		protected $intCommNum;
		const CommNumDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.user_group
		 * @var integer intUserGroup
		 */
		protected $intUserGroup;
		const UserGroupDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.lastdate
		 * @var string strLastdate
		 */
		protected $strLastdate;
		const LastdateMaxLength = 20;
		const LastdateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.reg_date
		 * @var string strRegDate
		 */
		protected $strRegDate;
		const RegDateMaxLength = 20;
		const RegDateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.banned
		 * @var string strBanned
		 */
		protected $strBanned;
		const BannedMaxLength = 5;
		const BannedDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.allow_mail
		 * @var boolean blnAllowMail
		 */
		protected $blnAllowMail;
		const AllowMailDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.info
		 * @var string strInfo
		 */
		protected $strInfo;
		const InfoDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.signature
		 * @var string strSignature
		 */
		protected $strSignature;
		const SignatureDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.foto
		 * @var string strFoto
		 */
		protected $strFoto;
		const FotoMaxLength = 30;
		const FotoDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.fullname
		 * @var string strFullname
		 */
		protected $strFullname;
		const FullnameMaxLength = 100;
		const FullnameDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.land
		 * @var string strLand
		 */
		protected $strLand;
		const LandMaxLength = 100;
		const LandDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.icq
		 * @var string strIcq
		 */
		protected $strIcq;
		const IcqMaxLength = 20;
		const IcqDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.favorites
		 * @var string strFavorites
		 */
		protected $strFavorites;
		const FavoritesDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.pm_all
		 * @var integer intPmAll
		 */
		protected $intPmAll;
		const PmAllDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.pm_unread
		 * @var integer intPmUnread
		 */
		protected $intPmUnread;
		const PmUnreadDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.time_limit
		 * @var string strTimeLimit
		 */
		protected $strTimeLimit;
		const TimeLimitMaxLength = 20;
		const TimeLimitDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.xfields
		 * @var string strXfields
		 */
		protected $strXfields;
		const XfieldsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.allowed_ip
		 * @var string strAllowedIp
		 */
		protected $strAllowedIp;
		const AllowedIpMaxLength = 255;
		const AllowedIpDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.hash
		 * @var string strHash
		 */
		protected $strHash;
		const HashMaxLength = 32;
		const HashDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.logged_ip
		 * @var string strLoggedIp
		 */
		protected $strLoggedIp;
		const LoggedIpMaxLength = 16;
		const LoggedIpDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.restricted
		 * @var boolean blnRestricted
		 */
		protected $blnRestricted;
		const RestrictedDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.restricted_days
		 * @var integer intRestrictedDays
		 */
		protected $intRestrictedDays;
		const RestrictedDaysDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_users.restricted_date
		 * @var string strRestrictedDate
		 */
		protected $strRestrictedDate;
		const RestrictedDateMaxLength = 15;
		const RestrictedDateDefault = null;


		/**
		 * Private member variable that stores a reference to a single DleCommentsAsUser object
		 * (of type DleComments), if this DleUsers object was restored with
		 * an expansion on the dle_comments association table.
		 * @var DleComments _objDleCommentsAsUser;
		 */
		private $_objDleCommentsAsUser;

		/**
		 * Private member variable that stores a reference to an array of DleCommentsAsUser objects
		 * (of type DleComments[]), if this DleUsers object was restored with
		 * an ExpandAsArray on the dle_comments association table.
		 * @var DleComments[] _objDleCommentsAsUserArray;
		 */
		private $_objDleCommentsAsUserArray = null;

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
			$this->strEmail = DleUsers::EmailDefault;
			$this->strPassword = DleUsers::PasswordDefault;
			$this->strName = DleUsers::NameDefault;
			$this->intUserId = DleUsers::UserIdDefault;
			$this->intNewsNum = DleUsers::NewsNumDefault;
			$this->intCommNum = DleUsers::CommNumDefault;
			$this->intUserGroup = DleUsers::UserGroupDefault;
			$this->strLastdate = DleUsers::LastdateDefault;
			$this->strRegDate = DleUsers::RegDateDefault;
			$this->strBanned = DleUsers::BannedDefault;
			$this->blnAllowMail = DleUsers::AllowMailDefault;
			$this->strInfo = DleUsers::InfoDefault;
			$this->strSignature = DleUsers::SignatureDefault;
			$this->strFoto = DleUsers::FotoDefault;
			$this->strFullname = DleUsers::FullnameDefault;
			$this->strLand = DleUsers::LandDefault;
			$this->strIcq = DleUsers::IcqDefault;
			$this->strFavorites = DleUsers::FavoritesDefault;
			$this->intPmAll = DleUsers::PmAllDefault;
			$this->intPmUnread = DleUsers::PmUnreadDefault;
			$this->strTimeLimit = DleUsers::TimeLimitDefault;
			$this->strXfields = DleUsers::XfieldsDefault;
			$this->strAllowedIp = DleUsers::AllowedIpDefault;
			$this->strHash = DleUsers::HashDefault;
			$this->strLoggedIp = DleUsers::LoggedIpDefault;
			$this->blnRestricted = DleUsers::RestrictedDefault;
			$this->intRestrictedDays = DleUsers::RestrictedDaysDefault;
			$this->strRestrictedDate = DleUsers::RestrictedDateDefault;
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
		 * Load a DleUsers from PK Info
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsers
		 */
		public static function Load($intUserId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleUsers', $intUserId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DleUsers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleUsers()->UserId, $intUserId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DleUserses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsers[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DleUsers::QueryArray to perform the LoadAll query
			try {
				return DleUsers::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DleUserses
		 * @return int
		 */
		public static function CountAll() {
			// Call DleUsers::QueryCount to perform the CountAll query
			return DleUsers::QueryCount(QQ::All());
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
			$objDatabase = DleUsers::GetDatabase();

			// Create/Build out the QueryBuilder object with DleUsers-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_users');

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
				DleUsers::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_users');

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
		 * Static Qcubed Query method to query for a single DleUsers object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleUsers the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DleUsers object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DleUsers::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DleUsers::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DleUsers objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleUsers[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DleUsers::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DleUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DleUsers objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DleUsers::GetDatabase();

			$strQuery = DleUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dleusers', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DleUsers::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DleUsers
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_users';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			    $objBuilder->AddSelectItem($strTableName, 'password', $strAliasPrefix . 'password');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			    $objBuilder->AddSelectItem($strTableName, 'news_num', $strAliasPrefix . 'news_num');
			    $objBuilder->AddSelectItem($strTableName, 'comm_num', $strAliasPrefix . 'comm_num');
			    $objBuilder->AddSelectItem($strTableName, 'user_group', $strAliasPrefix . 'user_group');
			    $objBuilder->AddSelectItem($strTableName, 'lastdate', $strAliasPrefix . 'lastdate');
			    $objBuilder->AddSelectItem($strTableName, 'reg_date', $strAliasPrefix . 'reg_date');
			    $objBuilder->AddSelectItem($strTableName, 'banned', $strAliasPrefix . 'banned');
			    $objBuilder->AddSelectItem($strTableName, 'allow_mail', $strAliasPrefix . 'allow_mail');
			    $objBuilder->AddSelectItem($strTableName, 'info', $strAliasPrefix . 'info');
			    $objBuilder->AddSelectItem($strTableName, 'signature', $strAliasPrefix . 'signature');
			    $objBuilder->AddSelectItem($strTableName, 'foto', $strAliasPrefix . 'foto');
			    $objBuilder->AddSelectItem($strTableName, 'fullname', $strAliasPrefix . 'fullname');
			    $objBuilder->AddSelectItem($strTableName, 'land', $strAliasPrefix . 'land');
			    $objBuilder->AddSelectItem($strTableName, 'icq', $strAliasPrefix . 'icq');
			    $objBuilder->AddSelectItem($strTableName, 'favorites', $strAliasPrefix . 'favorites');
			    $objBuilder->AddSelectItem($strTableName, 'pm_all', $strAliasPrefix . 'pm_all');
			    $objBuilder->AddSelectItem($strTableName, 'pm_unread', $strAliasPrefix . 'pm_unread');
			    $objBuilder->AddSelectItem($strTableName, 'time_limit', $strAliasPrefix . 'time_limit');
			    $objBuilder->AddSelectItem($strTableName, 'xfields', $strAliasPrefix . 'xfields');
			    $objBuilder->AddSelectItem($strTableName, 'allowed_ip', $strAliasPrefix . 'allowed_ip');
			    $objBuilder->AddSelectItem($strTableName, 'hash', $strAliasPrefix . 'hash');
			    $objBuilder->AddSelectItem($strTableName, 'logged_ip', $strAliasPrefix . 'logged_ip');
			    $objBuilder->AddSelectItem($strTableName, 'restricted', $strAliasPrefix . 'restricted');
			    $objBuilder->AddSelectItem($strTableName, 'restricted_days', $strAliasPrefix . 'restricted_days');
			    $objBuilder->AddSelectItem($strTableName, 'restricted_date', $strAliasPrefix . 'restricted_date');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DleUsers from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DleUsers::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DleUsers
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intUserId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'dle_users__';


						// Expanding reverse references: DleCommentsAsUser
						$strAlias = $strAliasPrefix . 'dlecommentsasuser__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDleCommentsAsUserArray)
								$objPreviousItem->_objDleCommentsAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDleCommentsAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDleCommentsAsUserArray;
								$objChildItem = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDleCommentsAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDleCommentsAsUserArray[] = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'dle_users__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the DleUsers object
			$objToReturn = new DleUsers();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'email';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'password';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'news_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intNewsNum = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'comm_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCommNum = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'user_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUserGroup = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'lastdate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLastdate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'reg_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRegDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'banned';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBanned = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'allow_mail';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowMail = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'info';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strInfo = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'signature';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSignature = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'foto';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFoto = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'fullname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFullname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'land';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLand = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'icq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strIcq = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'favorites';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFavorites = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'pm_all';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPmAll = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'pm_unread';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPmUnread = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'time_limit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTimeLimit = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'xfields';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strXfields = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'allowed_ip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAllowedIp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'hash';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strHash = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'logged_ip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLoggedIp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'restricted';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnRestricted = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'restricted_days';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRestrictedDays = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'restricted_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRestrictedDate = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->UserId != $objPreviousItem->UserId) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objDleCommentsAsUserArray);
					$cnt = count($objToReturn->_objDleCommentsAsUserArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDleCommentsAsUserArray, $objToReturn->_objDleCommentsAsUserArray)) {
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
				$strAliasPrefix = 'dle_users__';




			// Check for DleCommentsAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'dlecommentsasuser__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDleCommentsAsUserArray)
				$objToReturn->_objDleCommentsAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDleCommentsAsUserArray[] = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDleCommentsAsUser = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of DleUserses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DleUsers[]
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
					$objItem = DleUsers::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DleUsers::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DleUsers object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DleUsers next row resulting from the query
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
			return DleUsers::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DleUsers object,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsers
		*/
		public static function LoadByUserId($intUserId, $objOptionalClauses = null) {
			return DleUsers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleUsers()->UserId, $intUserId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single DleUsers object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsers
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return DleUsers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleUsers()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single DleUsers object,
		 * by Email Index(es)
		 * @param string $strEmail
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsers
		*/
		public static function LoadByEmail($strEmail, $objOptionalClauses = null) {
			return DleUsers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleUsers()->Email, $strEmail)
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
		 * Save this DleUsers
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_users` (
							`email`,
							`password`,
							`name`,
							`news_num`,
							`comm_num`,
							`user_group`,
							`lastdate`,
							`reg_date`,
							`banned`,
							`allow_mail`,
							`info`,
							`signature`,
							`foto`,
							`fullname`,
							`land`,
							`icq`,
							`favorites`,
							`pm_all`,
							`pm_unread`,
							`time_limit`,
							`xfields`,
							`allowed_ip`,
							`hash`,
							`logged_ip`,
							`restricted`,
							`restricted_days`,
							`restricted_date`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intNewsNum) . ',
							' . $objDatabase->SqlVariable($this->intCommNum) . ',
							' . $objDatabase->SqlVariable($this->intUserGroup) . ',
							' . $objDatabase->SqlVariable($this->strLastdate) . ',
							' . $objDatabase->SqlVariable($this->strRegDate) . ',
							' . $objDatabase->SqlVariable($this->strBanned) . ',
							' . $objDatabase->SqlVariable($this->blnAllowMail) . ',
							' . $objDatabase->SqlVariable($this->strInfo) . ',
							' . $objDatabase->SqlVariable($this->strSignature) . ',
							' . $objDatabase->SqlVariable($this->strFoto) . ',
							' . $objDatabase->SqlVariable($this->strFullname) . ',
							' . $objDatabase->SqlVariable($this->strLand) . ',
							' . $objDatabase->SqlVariable($this->strIcq) . ',
							' . $objDatabase->SqlVariable($this->strFavorites) . ',
							' . $objDatabase->SqlVariable($this->intPmAll) . ',
							' . $objDatabase->SqlVariable($this->intPmUnread) . ',
							' . $objDatabase->SqlVariable($this->strTimeLimit) . ',
							' . $objDatabase->SqlVariable($this->strXfields) . ',
							' . $objDatabase->SqlVariable($this->strAllowedIp) . ',
							' . $objDatabase->SqlVariable($this->strHash) . ',
							' . $objDatabase->SqlVariable($this->strLoggedIp) . ',
							' . $objDatabase->SqlVariable($this->blnRestricted) . ',
							' . $objDatabase->SqlVariable($this->intRestrictedDays) . ',
							' . $objDatabase->SqlVariable($this->strRestrictedDate) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intUserId = $objDatabase->InsertId('dle_users', 'user_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_users`
						SET
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`news_num` = ' . $objDatabase->SqlVariable($this->intNewsNum) . ',
							`comm_num` = ' . $objDatabase->SqlVariable($this->intCommNum) . ',
							`user_group` = ' . $objDatabase->SqlVariable($this->intUserGroup) . ',
							`lastdate` = ' . $objDatabase->SqlVariable($this->strLastdate) . ',
							`reg_date` = ' . $objDatabase->SqlVariable($this->strRegDate) . ',
							`banned` = ' . $objDatabase->SqlVariable($this->strBanned) . ',
							`allow_mail` = ' . $objDatabase->SqlVariable($this->blnAllowMail) . ',
							`info` = ' . $objDatabase->SqlVariable($this->strInfo) . ',
							`signature` = ' . $objDatabase->SqlVariable($this->strSignature) . ',
							`foto` = ' . $objDatabase->SqlVariable($this->strFoto) . ',
							`fullname` = ' . $objDatabase->SqlVariable($this->strFullname) . ',
							`land` = ' . $objDatabase->SqlVariable($this->strLand) . ',
							`icq` = ' . $objDatabase->SqlVariable($this->strIcq) . ',
							`favorites` = ' . $objDatabase->SqlVariable($this->strFavorites) . ',
							`pm_all` = ' . $objDatabase->SqlVariable($this->intPmAll) . ',
							`pm_unread` = ' . $objDatabase->SqlVariable($this->intPmUnread) . ',
							`time_limit` = ' . $objDatabase->SqlVariable($this->strTimeLimit) . ',
							`xfields` = ' . $objDatabase->SqlVariable($this->strXfields) . ',
							`allowed_ip` = ' . $objDatabase->SqlVariable($this->strAllowedIp) . ',
							`hash` = ' . $objDatabase->SqlVariable($this->strHash) . ',
							`logged_ip` = ' . $objDatabase->SqlVariable($this->strLoggedIp) . ',
							`restricted` = ' . $objDatabase->SqlVariable($this->blnRestricted) . ',
							`restricted_days` = ' . $objDatabase->SqlVariable($this->intRestrictedDays) . ',
							`restricted_date` = ' . $objDatabase->SqlVariable($this->strRestrictedDate) . '
						WHERE
							`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
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
		 * Delete this DleUsers
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DleUsers with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_users`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DleUsers ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleUsers', $this->intUserId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DleUserses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_users`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_users table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_users`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DleUsers from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DleUsers object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DleUsers::Load($this->intUserId);

			// Update $this's local variables to match
			$this->strEmail = $objReloaded->strEmail;
			$this->strPassword = $objReloaded->strPassword;
			$this->strName = $objReloaded->strName;
			$this->intNewsNum = $objReloaded->intNewsNum;
			$this->intCommNum = $objReloaded->intCommNum;
			$this->intUserGroup = $objReloaded->intUserGroup;
			$this->strLastdate = $objReloaded->strLastdate;
			$this->strRegDate = $objReloaded->strRegDate;
			$this->strBanned = $objReloaded->strBanned;
			$this->blnAllowMail = $objReloaded->blnAllowMail;
			$this->strInfo = $objReloaded->strInfo;
			$this->strSignature = $objReloaded->strSignature;
			$this->strFoto = $objReloaded->strFoto;
			$this->strFullname = $objReloaded->strFullname;
			$this->strLand = $objReloaded->strLand;
			$this->strIcq = $objReloaded->strIcq;
			$this->strFavorites = $objReloaded->strFavorites;
			$this->intPmAll = $objReloaded->intPmAll;
			$this->intPmUnread = $objReloaded->intPmUnread;
			$this->strTimeLimit = $objReloaded->strTimeLimit;
			$this->strXfields = $objReloaded->strXfields;
			$this->strAllowedIp = $objReloaded->strAllowedIp;
			$this->strHash = $objReloaded->strHash;
			$this->strLoggedIp = $objReloaded->strLoggedIp;
			$this->blnRestricted = $objReloaded->blnRestricted;
			$this->intRestrictedDays = $objReloaded->intRestrictedDays;
			$this->strRestrictedDate = $objReloaded->strRestrictedDate;
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
				case 'Email':
					/**
					 * Gets the value for strEmail (Unique)
					 * @return string
					 */
					return $this->strEmail;

				case 'Password':
					/**
					 * Gets the value for strPassword (Not Null)
					 * @return string
					 */
					return $this->strPassword;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'UserId':
					/**
					 * Gets the value for intUserId (Read-Only PK)
					 * @return integer
					 */
					return $this->intUserId;

				case 'NewsNum':
					/**
					 * Gets the value for intNewsNum (Not Null)
					 * @return integer
					 */
					return $this->intNewsNum;

				case 'CommNum':
					/**
					 * Gets the value for intCommNum (Not Null)
					 * @return integer
					 */
					return $this->intCommNum;

				case 'UserGroup':
					/**
					 * Gets the value for intUserGroup (Not Null)
					 * @return integer
					 */
					return $this->intUserGroup;

				case 'Lastdate':
					/**
					 * Gets the value for strLastdate 
					 * @return string
					 */
					return $this->strLastdate;

				case 'RegDate':
					/**
					 * Gets the value for strRegDate 
					 * @return string
					 */
					return $this->strRegDate;

				case 'Banned':
					/**
					 * Gets the value for strBanned (Not Null)
					 * @return string
					 */
					return $this->strBanned;

				case 'AllowMail':
					/**
					 * Gets the value for blnAllowMail (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowMail;

				case 'Info':
					/**
					 * Gets the value for strInfo (Not Null)
					 * @return string
					 */
					return $this->strInfo;

				case 'Signature':
					/**
					 * Gets the value for strSignature (Not Null)
					 * @return string
					 */
					return $this->strSignature;

				case 'Foto':
					/**
					 * Gets the value for strFoto (Not Null)
					 * @return string
					 */
					return $this->strFoto;

				case 'Fullname':
					/**
					 * Gets the value for strFullname (Not Null)
					 * @return string
					 */
					return $this->strFullname;

				case 'Land':
					/**
					 * Gets the value for strLand (Not Null)
					 * @return string
					 */
					return $this->strLand;

				case 'Icq':
					/**
					 * Gets the value for strIcq (Not Null)
					 * @return string
					 */
					return $this->strIcq;

				case 'Favorites':
					/**
					 * Gets the value for strFavorites (Not Null)
					 * @return string
					 */
					return $this->strFavorites;

				case 'PmAll':
					/**
					 * Gets the value for intPmAll (Not Null)
					 * @return integer
					 */
					return $this->intPmAll;

				case 'PmUnread':
					/**
					 * Gets the value for intPmUnread (Not Null)
					 * @return integer
					 */
					return $this->intPmUnread;

				case 'TimeLimit':
					/**
					 * Gets the value for strTimeLimit (Not Null)
					 * @return string
					 */
					return $this->strTimeLimit;

				case 'Xfields':
					/**
					 * Gets the value for strXfields (Not Null)
					 * @return string
					 */
					return $this->strXfields;

				case 'AllowedIp':
					/**
					 * Gets the value for strAllowedIp (Not Null)
					 * @return string
					 */
					return $this->strAllowedIp;

				case 'Hash':
					/**
					 * Gets the value for strHash (Not Null)
					 * @return string
					 */
					return $this->strHash;

				case 'LoggedIp':
					/**
					 * Gets the value for strLoggedIp (Not Null)
					 * @return string
					 */
					return $this->strLoggedIp;

				case 'Restricted':
					/**
					 * Gets the value for blnRestricted (Not Null)
					 * @return boolean
					 */
					return $this->blnRestricted;

				case 'RestrictedDays':
					/**
					 * Gets the value for intRestrictedDays (Not Null)
					 * @return integer
					 */
					return $this->intRestrictedDays;

				case 'RestrictedDate':
					/**
					 * Gets the value for strRestrictedDate (Not Null)
					 * @return string
					 */
					return $this->strRestrictedDate;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_DleCommentsAsUser':
					/**
					 * Gets the value for the private _objDleCommentsAsUser (Read-Only)
					 * if set due to an expansion on the dle_comments.user_id reverse relationship
					 * @return DleComments
					 */
					return $this->_objDleCommentsAsUser;

				case '_DleCommentsAsUserArray':
					/**
					 * Gets the value for the private _objDleCommentsAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the dle_comments.user_id reverse relationship
					 * @return DleComments[]
					 */
					return $this->_objDleCommentsAsUserArray;


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
				case 'Email':
					/**
					 * Sets the value for strEmail (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Password':
					/**
					 * Sets the value for strPassword (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassword = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					/**
					 * Sets the value for strName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsNum':
					/**
					 * Sets the value for intNewsNum (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intNewsNum = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommNum':
					/**
					 * Sets the value for intCommNum (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCommNum = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserGroup':
					/**
					 * Sets the value for intUserGroup (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intUserGroup = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Lastdate':
					/**
					 * Sets the value for strLastdate 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastdate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RegDate':
					/**
					 * Sets the value for strRegDate 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRegDate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Banned':
					/**
					 * Sets the value for strBanned (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBanned = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowMail':
					/**
					 * Sets the value for blnAllowMail (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowMail = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Info':
					/**
					 * Sets the value for strInfo (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInfo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Signature':
					/**
					 * Sets the value for strSignature (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSignature = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Foto':
					/**
					 * Sets the value for strFoto (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFoto = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fullname':
					/**
					 * Sets the value for strFullname (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFullname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Land':
					/**
					 * Sets the value for strLand (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLand = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Icq':
					/**
					 * Sets the value for strIcq (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIcq = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Favorites':
					/**
					 * Sets the value for strFavorites (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFavorites = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PmAll':
					/**
					 * Sets the value for intPmAll (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPmAll = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PmUnread':
					/**
					 * Sets the value for intPmUnread (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPmUnread = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TimeLimit':
					/**
					 * Sets the value for strTimeLimit (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTimeLimit = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Xfields':
					/**
					 * Sets the value for strXfields (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strXfields = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowedIp':
					/**
					 * Sets the value for strAllowedIp (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAllowedIp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Hash':
					/**
					 * Sets the value for strHash (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strHash = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LoggedIp':
					/**
					 * Sets the value for strLoggedIp (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLoggedIp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Restricted':
					/**
					 * Sets the value for blnRestricted (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnRestricted = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RestrictedDays':
					/**
					 * Sets the value for intRestrictedDays (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intRestrictedDays = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RestrictedDate':
					/**
					 * Sets the value for strRestrictedDate (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRestrictedDate = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for DleCommentsAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DleCommentsesAsUser as an array of DleComments objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleComments[]
		*/
		public function GetDleCommentsAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intUserId)))
				return array();

			try {
				return DleComments::LoadArrayByUserId($this->intUserId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DleCommentsesAsUser
		 * @return int
		*/
		public function CountDleCommentsesAsUser() {
			if ((is_null($this->intUserId)))
				return 0;

			return DleComments::CountByUserId($this->intUserId);
		}

		/**
		 * Associates a DleCommentsAsUser
		 * @param DleComments $objDleComments
		 * @return void
		*/
		public function AssociateDleCommentsAsUser(DleComments $objDleComments) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleCommentsAsUser on this unsaved DleUsers.');
			if ((is_null($objDleComments->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleCommentsAsUser on this DleUsers with an unsaved DleComments.');

			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_comments`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleComments->Id) . ' 
			');
		}

		/**
		 * Unassociates a DleCommentsAsUser
		 * @param DleComments $objDleComments
		 * @return void
		*/
		public function UnassociateDleCommentsAsUser(DleComments $objDleComments) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsUser on this unsaved DleUsers.');
			if ((is_null($objDleComments->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsUser on this DleUsers with an unsaved DleComments.');

			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_comments`
				SET
					`user_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleComments->Id) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Unassociates all DleCommentsesAsUser
		 * @return void
		*/
		public function UnassociateAllDleCommentsesAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsUser on this unsaved DleUsers.');

			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_comments`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes an associated DleCommentsAsUser
		 * @param DleComments $objDleComments
		 * @return void
		*/
		public function DeleteAssociatedDleCommentsAsUser(DleComments $objDleComments) {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsUser on this unsaved DleUsers.');
			if ((is_null($objDleComments->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsUser on this DleUsers with an unsaved DleComments.');

			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_comments`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleComments->Id) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
			');
		}

		/**
		 * Deletes all associated DleCommentsesAsUser
		 * @return void
		*/
		public function DeleteAllDleCommentsesAsUser() {
			if ((is_null($this->intUserId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsUser on this unsaved DleUsers.');

			// Get the Database Object for this Class
			$objDatabase = DleUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_comments`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
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
			return "dle_users";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DleUsers::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DleUsers"><sequence>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="UserId" type="xsd:int"/>';
			$strToReturn .= '<element name="NewsNum" type="xsd:int"/>';
			$strToReturn .= '<element name="CommNum" type="xsd:int"/>';
			$strToReturn .= '<element name="UserGroup" type="xsd:int"/>';
			$strToReturn .= '<element name="Lastdate" type="xsd:string"/>';
			$strToReturn .= '<element name="RegDate" type="xsd:string"/>';
			$strToReturn .= '<element name="Banned" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowMail" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Info" type="xsd:string"/>';
			$strToReturn .= '<element name="Signature" type="xsd:string"/>';
			$strToReturn .= '<element name="Foto" type="xsd:string"/>';
			$strToReturn .= '<element name="Fullname" type="xsd:string"/>';
			$strToReturn .= '<element name="Land" type="xsd:string"/>';
			$strToReturn .= '<element name="Icq" type="xsd:string"/>';
			$strToReturn .= '<element name="Favorites" type="xsd:string"/>';
			$strToReturn .= '<element name="PmAll" type="xsd:int"/>';
			$strToReturn .= '<element name="PmUnread" type="xsd:int"/>';
			$strToReturn .= '<element name="TimeLimit" type="xsd:string"/>';
			$strToReturn .= '<element name="Xfields" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowedIp" type="xsd:string"/>';
			$strToReturn .= '<element name="Hash" type="xsd:string"/>';
			$strToReturn .= '<element name="LoggedIp" type="xsd:string"/>';
			$strToReturn .= '<element name="Restricted" type="xsd:boolean"/>';
			$strToReturn .= '<element name="RestrictedDays" type="xsd:int"/>';
			$strToReturn .= '<element name="RestrictedDate" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DleUsers', $strComplexTypeArray)) {
				$strComplexTypeArray['DleUsers'] = DleUsers::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DleUsers::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DleUsers();
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'UserId'))
				$objToReturn->intUserId = $objSoapObject->UserId;
			if (property_exists($objSoapObject, 'NewsNum'))
				$objToReturn->intNewsNum = $objSoapObject->NewsNum;
			if (property_exists($objSoapObject, 'CommNum'))
				$objToReturn->intCommNum = $objSoapObject->CommNum;
			if (property_exists($objSoapObject, 'UserGroup'))
				$objToReturn->intUserGroup = $objSoapObject->UserGroup;
			if (property_exists($objSoapObject, 'Lastdate'))
				$objToReturn->strLastdate = $objSoapObject->Lastdate;
			if (property_exists($objSoapObject, 'RegDate'))
				$objToReturn->strRegDate = $objSoapObject->RegDate;
			if (property_exists($objSoapObject, 'Banned'))
				$objToReturn->strBanned = $objSoapObject->Banned;
			if (property_exists($objSoapObject, 'AllowMail'))
				$objToReturn->blnAllowMail = $objSoapObject->AllowMail;
			if (property_exists($objSoapObject, 'Info'))
				$objToReturn->strInfo = $objSoapObject->Info;
			if (property_exists($objSoapObject, 'Signature'))
				$objToReturn->strSignature = $objSoapObject->Signature;
			if (property_exists($objSoapObject, 'Foto'))
				$objToReturn->strFoto = $objSoapObject->Foto;
			if (property_exists($objSoapObject, 'Fullname'))
				$objToReturn->strFullname = $objSoapObject->Fullname;
			if (property_exists($objSoapObject, 'Land'))
				$objToReturn->strLand = $objSoapObject->Land;
			if (property_exists($objSoapObject, 'Icq'))
				$objToReturn->strIcq = $objSoapObject->Icq;
			if (property_exists($objSoapObject, 'Favorites'))
				$objToReturn->strFavorites = $objSoapObject->Favorites;
			if (property_exists($objSoapObject, 'PmAll'))
				$objToReturn->intPmAll = $objSoapObject->PmAll;
			if (property_exists($objSoapObject, 'PmUnread'))
				$objToReturn->intPmUnread = $objSoapObject->PmUnread;
			if (property_exists($objSoapObject, 'TimeLimit'))
				$objToReturn->strTimeLimit = $objSoapObject->TimeLimit;
			if (property_exists($objSoapObject, 'Xfields'))
				$objToReturn->strXfields = $objSoapObject->Xfields;
			if (property_exists($objSoapObject, 'AllowedIp'))
				$objToReturn->strAllowedIp = $objSoapObject->AllowedIp;
			if (property_exists($objSoapObject, 'Hash'))
				$objToReturn->strHash = $objSoapObject->Hash;
			if (property_exists($objSoapObject, 'LoggedIp'))
				$objToReturn->strLoggedIp = $objSoapObject->LoggedIp;
			if (property_exists($objSoapObject, 'Restricted'))
				$objToReturn->blnRestricted = $objSoapObject->Restricted;
			if (property_exists($objSoapObject, 'RestrictedDays'))
				$objToReturn->intRestrictedDays = $objSoapObject->RestrictedDays;
			if (property_exists($objSoapObject, 'RestrictedDate'))
				$objToReturn->strRestrictedDate = $objSoapObject->RestrictedDate;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DleUsers::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Email'] = $this->strEmail;
			$iArray['Password'] = $this->strPassword;
			$iArray['Name'] = $this->strName;
			$iArray['UserId'] = $this->intUserId;
			$iArray['NewsNum'] = $this->intNewsNum;
			$iArray['CommNum'] = $this->intCommNum;
			$iArray['UserGroup'] = $this->intUserGroup;
			$iArray['Lastdate'] = $this->strLastdate;
			$iArray['RegDate'] = $this->strRegDate;
			$iArray['Banned'] = $this->strBanned;
			$iArray['AllowMail'] = $this->blnAllowMail;
			$iArray['Info'] = $this->strInfo;
			$iArray['Signature'] = $this->strSignature;
			$iArray['Foto'] = $this->strFoto;
			$iArray['Fullname'] = $this->strFullname;
			$iArray['Land'] = $this->strLand;
			$iArray['Icq'] = $this->strIcq;
			$iArray['Favorites'] = $this->strFavorites;
			$iArray['PmAll'] = $this->intPmAll;
			$iArray['PmUnread'] = $this->intPmUnread;
			$iArray['TimeLimit'] = $this->strTimeLimit;
			$iArray['Xfields'] = $this->strXfields;
			$iArray['AllowedIp'] = $this->strAllowedIp;
			$iArray['Hash'] = $this->strHash;
			$iArray['LoggedIp'] = $this->strLoggedIp;
			$iArray['Restricted'] = $this->blnRestricted;
			$iArray['RestrictedDays'] = $this->intRestrictedDays;
			$iArray['RestrictedDate'] = $this->strRestrictedDate;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intUserId ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Email
     * @property-read QQNode $Password
     * @property-read QQNode $Name
     * @property-read QQNode $UserId
     * @property-read QQNode $NewsNum
     * @property-read QQNode $CommNum
     * @property-read QQNode $UserGroup
     * @property-read QQNode $Lastdate
     * @property-read QQNode $RegDate
     * @property-read QQNode $Banned
     * @property-read QQNode $AllowMail
     * @property-read QQNode $Info
     * @property-read QQNode $Signature
     * @property-read QQNode $Foto
     * @property-read QQNode $Fullname
     * @property-read QQNode $Land
     * @property-read QQNode $Icq
     * @property-read QQNode $Favorites
     * @property-read QQNode $PmAll
     * @property-read QQNode $PmUnread
     * @property-read QQNode $TimeLimit
     * @property-read QQNode $Xfields
     * @property-read QQNode $AllowedIp
     * @property-read QQNode $Hash
     * @property-read QQNode $LoggedIp
     * @property-read QQNode $Restricted
     * @property-read QQNode $RestrictedDays
     * @property-read QQNode $RestrictedDate
     *
     *
     * @property-read QQReverseReferenceNodeDleComments $DleCommentsAsUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDleUsers extends QQNode {
		protected $strTableName = 'dle_users';
		protected $strPrimaryKey = 'user_id';
		protected $strClassName = 'DleUsers';
		public function __get($strName) {
			switch ($strName) {
				case 'Email':
					return new QQNode('email', 'Email', 'VarChar', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'VarChar', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'NewsNum':
					return new QQNode('news_num', 'NewsNum', 'Integer', $this);
				case 'CommNum':
					return new QQNode('comm_num', 'CommNum', 'Integer', $this);
				case 'UserGroup':
					return new QQNode('user_group', 'UserGroup', 'Integer', $this);
				case 'Lastdate':
					return new QQNode('lastdate', 'Lastdate', 'VarChar', $this);
				case 'RegDate':
					return new QQNode('reg_date', 'RegDate', 'VarChar', $this);
				case 'Banned':
					return new QQNode('banned', 'Banned', 'VarChar', $this);
				case 'AllowMail':
					return new QQNode('allow_mail', 'AllowMail', 'Bit', $this);
				case 'Info':
					return new QQNode('info', 'Info', 'Blob', $this);
				case 'Signature':
					return new QQNode('signature', 'Signature', 'Blob', $this);
				case 'Foto':
					return new QQNode('foto', 'Foto', 'VarChar', $this);
				case 'Fullname':
					return new QQNode('fullname', 'Fullname', 'VarChar', $this);
				case 'Land':
					return new QQNode('land', 'Land', 'VarChar', $this);
				case 'Icq':
					return new QQNode('icq', 'Icq', 'VarChar', $this);
				case 'Favorites':
					return new QQNode('favorites', 'Favorites', 'Blob', $this);
				case 'PmAll':
					return new QQNode('pm_all', 'PmAll', 'Integer', $this);
				case 'PmUnread':
					return new QQNode('pm_unread', 'PmUnread', 'Integer', $this);
				case 'TimeLimit':
					return new QQNode('time_limit', 'TimeLimit', 'VarChar', $this);
				case 'Xfields':
					return new QQNode('xfields', 'Xfields', 'Blob', $this);
				case 'AllowedIp':
					return new QQNode('allowed_ip', 'AllowedIp', 'VarChar', $this);
				case 'Hash':
					return new QQNode('hash', 'Hash', 'VarChar', $this);
				case 'LoggedIp':
					return new QQNode('logged_ip', 'LoggedIp', 'VarChar', $this);
				case 'Restricted':
					return new QQNode('restricted', 'Restricted', 'Bit', $this);
				case 'RestrictedDays':
					return new QQNode('restricted_days', 'RestrictedDays', 'Integer', $this);
				case 'RestrictedDate':
					return new QQNode('restricted_date', 'RestrictedDate', 'VarChar', $this);
				case 'DleCommentsAsUser':
					return new QQReverseReferenceNodeDleComments($this, 'dlecommentsasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
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
     * @property-read QQNode $Email
     * @property-read QQNode $Password
     * @property-read QQNode $Name
     * @property-read QQNode $UserId
     * @property-read QQNode $NewsNum
     * @property-read QQNode $CommNum
     * @property-read QQNode $UserGroup
     * @property-read QQNode $Lastdate
     * @property-read QQNode $RegDate
     * @property-read QQNode $Banned
     * @property-read QQNode $AllowMail
     * @property-read QQNode $Info
     * @property-read QQNode $Signature
     * @property-read QQNode $Foto
     * @property-read QQNode $Fullname
     * @property-read QQNode $Land
     * @property-read QQNode $Icq
     * @property-read QQNode $Favorites
     * @property-read QQNode $PmAll
     * @property-read QQNode $PmUnread
     * @property-read QQNode $TimeLimit
     * @property-read QQNode $Xfields
     * @property-read QQNode $AllowedIp
     * @property-read QQNode $Hash
     * @property-read QQNode $LoggedIp
     * @property-read QQNode $Restricted
     * @property-read QQNode $RestrictedDays
     * @property-read QQNode $RestrictedDate
     *
     *
     * @property-read QQReverseReferenceNodeDleComments $DleCommentsAsUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDleUsers extends QQReverseReferenceNode {
		protected $strTableName = 'dle_users';
		protected $strPrimaryKey = 'user_id';
		protected $strClassName = 'DleUsers';
		public function __get($strName) {
			switch ($strName) {
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'string', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'NewsNum':
					return new QQNode('news_num', 'NewsNum', 'integer', $this);
				case 'CommNum':
					return new QQNode('comm_num', 'CommNum', 'integer', $this);
				case 'UserGroup':
					return new QQNode('user_group', 'UserGroup', 'integer', $this);
				case 'Lastdate':
					return new QQNode('lastdate', 'Lastdate', 'string', $this);
				case 'RegDate':
					return new QQNode('reg_date', 'RegDate', 'string', $this);
				case 'Banned':
					return new QQNode('banned', 'Banned', 'string', $this);
				case 'AllowMail':
					return new QQNode('allow_mail', 'AllowMail', 'boolean', $this);
				case 'Info':
					return new QQNode('info', 'Info', 'string', $this);
				case 'Signature':
					return new QQNode('signature', 'Signature', 'string', $this);
				case 'Foto':
					return new QQNode('foto', 'Foto', 'string', $this);
				case 'Fullname':
					return new QQNode('fullname', 'Fullname', 'string', $this);
				case 'Land':
					return new QQNode('land', 'Land', 'string', $this);
				case 'Icq':
					return new QQNode('icq', 'Icq', 'string', $this);
				case 'Favorites':
					return new QQNode('favorites', 'Favorites', 'string', $this);
				case 'PmAll':
					return new QQNode('pm_all', 'PmAll', 'integer', $this);
				case 'PmUnread':
					return new QQNode('pm_unread', 'PmUnread', 'integer', $this);
				case 'TimeLimit':
					return new QQNode('time_limit', 'TimeLimit', 'string', $this);
				case 'Xfields':
					return new QQNode('xfields', 'Xfields', 'string', $this);
				case 'AllowedIp':
					return new QQNode('allowed_ip', 'AllowedIp', 'string', $this);
				case 'Hash':
					return new QQNode('hash', 'Hash', 'string', $this);
				case 'LoggedIp':
					return new QQNode('logged_ip', 'LoggedIp', 'string', $this);
				case 'Restricted':
					return new QQNode('restricted', 'Restricted', 'boolean', $this);
				case 'RestrictedDays':
					return new QQNode('restricted_days', 'RestrictedDays', 'integer', $this);
				case 'RestrictedDate':
					return new QQNode('restricted_date', 'RestrictedDate', 'string', $this);
				case 'DleCommentsAsUser':
					return new QQReverseReferenceNodeDleComments($this, 'dlecommentsasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('user_id', 'UserId', 'integer', $this);
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
