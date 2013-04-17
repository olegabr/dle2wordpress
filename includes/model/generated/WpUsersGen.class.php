<?php
	/**
	 * The abstract WpUsersGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpUsers subclass which
	 * extends this WpUsersGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpUsers class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $UserLogin the value for strUserLogin (Not Null)
	 * @property string $UserPass the value for strUserPass (Not Null)
	 * @property string $UserNicename the value for strUserNicename (Not Null)
	 * @property string $UserEmail the value for strUserEmail (Not Null)
	 * @property string $UserUrl the value for strUserUrl (Not Null)
	 * @property QDateTime $UserRegistered the value for dttUserRegistered (Not Null)
	 * @property string $UserActivationKey the value for strUserActivationKey (Not Null)
	 * @property integer $UserStatus the value for intUserStatus (Not Null)
	 * @property string $DisplayName the value for strDisplayName (Not Null)
	 * @property-read WpComments $_WpCommentsAsUser the value for the private _objWpCommentsAsUser (Read-Only) if set due to an expansion on the wp_comments.user_id reverse relationship
	 * @property-read WpComments[] $_WpCommentsAsUserArray the value for the private _objWpCommentsAsUserArray (Read-Only) if set due to an ExpandAsArray on the wp_comments.user_id reverse relationship
	 * @property-read WpPollsip $_WpPollsipAsPollipUserid the value for the private _objWpPollsipAsPollipUserid (Read-Only) if set due to an expansion on the wp_pollsip.pollip_userid reverse relationship
	 * @property-read WpPollsip[] $_WpPollsipAsPollipUseridArray the value for the private _objWpPollsipAsPollipUseridArray (Read-Only) if set due to an ExpandAsArray on the wp_pollsip.pollip_userid reverse relationship
	 * @property-read WpPosts $_WpPostsAsPostAuthor the value for the private _objWpPostsAsPostAuthor (Read-Only) if set due to an expansion on the wp_posts.post_author reverse relationship
	 * @property-read WpPosts[] $_WpPostsAsPostAuthorArray the value for the private _objWpPostsAsPostAuthorArray (Read-Only) if set due to an ExpandAsArray on the wp_posts.post_author reverse relationship
	 * @property-read WpUsermeta $_WpUsermetaAsUser the value for the private _objWpUsermetaAsUser (Read-Only) if set due to an expansion on the wp_usermeta.user_id reverse relationship
	 * @property-read WpUsermeta[] $_WpUsermetaAsUserArray the value for the private _objWpUsermetaAsUserArray (Read-Only) if set due to an ExpandAsArray on the wp_usermeta.user_id reverse relationship
	 * @property-read WpWtiLikePost $_WpWtiLikePostAsUser the value for the private _objWpWtiLikePostAsUser (Read-Only) if set due to an expansion on the wp_wti_like_post.user_id reverse relationship
	 * @property-read WpWtiLikePost[] $_WpWtiLikePostAsUserArray the value for the private _objWpWtiLikePostAsUserArray (Read-Only) if set due to an ExpandAsArray on the wp_wti_like_post.user_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpUsersGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_users.ID
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_login
		 * @var string strUserLogin
		 */
		protected $strUserLogin;
		const UserLoginMaxLength = 60;
		const UserLoginDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_pass
		 * @var string strUserPass
		 */
		protected $strUserPass;
		const UserPassMaxLength = 64;
		const UserPassDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_nicename
		 * @var string strUserNicename
		 */
		protected $strUserNicename;
		const UserNicenameMaxLength = 50;
		const UserNicenameDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_email
		 * @var string strUserEmail
		 */
		protected $strUserEmail;
		const UserEmailMaxLength = 100;
		const UserEmailDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_url
		 * @var string strUserUrl
		 */
		protected $strUserUrl;
		const UserUrlMaxLength = 100;
		const UserUrlDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_registered
		 * @var QDateTime dttUserRegistered
		 */
		protected $dttUserRegistered;
		const UserRegisteredDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_activation_key
		 * @var string strUserActivationKey
		 */
		protected $strUserActivationKey;
		const UserActivationKeyMaxLength = 60;
		const UserActivationKeyDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.user_status
		 * @var integer intUserStatus
		 */
		protected $intUserStatus;
		const UserStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_users.display_name
		 * @var string strDisplayName
		 */
		protected $strDisplayName;
		const DisplayNameMaxLength = 250;
		const DisplayNameDefault = null;


		/**
		 * Private member variable that stores a reference to a single WpCommentsAsUser object
		 * (of type WpComments), if this WpUsers object was restored with
		 * an expansion on the wp_comments association table.
		 * @var WpComments _objWpCommentsAsUser;
		 */
		private $_objWpCommentsAsUser;

		/**
		 * Private member variable that stores a reference to an array of WpCommentsAsUser objects
		 * (of type WpComments[]), if this WpUsers object was restored with
		 * an ExpandAsArray on the wp_comments association table.
		 * @var WpComments[] _objWpCommentsAsUserArray;
		 */
		private $_objWpCommentsAsUserArray = null;

		/**
		 * Private member variable that stores a reference to a single WpPollsipAsPollipUserid object
		 * (of type WpPollsip), if this WpUsers object was restored with
		 * an expansion on the wp_pollsip association table.
		 * @var WpPollsip _objWpPollsipAsPollipUserid;
		 */
		private $_objWpPollsipAsPollipUserid;

		/**
		 * Private member variable that stores a reference to an array of WpPollsipAsPollipUserid objects
		 * (of type WpPollsip[]), if this WpUsers object was restored with
		 * an ExpandAsArray on the wp_pollsip association table.
		 * @var WpPollsip[] _objWpPollsipAsPollipUseridArray;
		 */
		private $_objWpPollsipAsPollipUseridArray = null;

		/**
		 * Private member variable that stores a reference to a single WpPostsAsPostAuthor object
		 * (of type WpPosts), if this WpUsers object was restored with
		 * an expansion on the wp_posts association table.
		 * @var WpPosts _objWpPostsAsPostAuthor;
		 */
		private $_objWpPostsAsPostAuthor;

		/**
		 * Private member variable that stores a reference to an array of WpPostsAsPostAuthor objects
		 * (of type WpPosts[]), if this WpUsers object was restored with
		 * an ExpandAsArray on the wp_posts association table.
		 * @var WpPosts[] _objWpPostsAsPostAuthorArray;
		 */
		private $_objWpPostsAsPostAuthorArray = null;

		/**
		 * Private member variable that stores a reference to a single WpUsermetaAsUser object
		 * (of type WpUsermeta), if this WpUsers object was restored with
		 * an expansion on the wp_usermeta association table.
		 * @var WpUsermeta _objWpUsermetaAsUser;
		 */
		private $_objWpUsermetaAsUser;

		/**
		 * Private member variable that stores a reference to an array of WpUsermetaAsUser objects
		 * (of type WpUsermeta[]), if this WpUsers object was restored with
		 * an ExpandAsArray on the wp_usermeta association table.
		 * @var WpUsermeta[] _objWpUsermetaAsUserArray;
		 */
		private $_objWpUsermetaAsUserArray = null;

		/**
		 * Private member variable that stores a reference to a single WpWtiLikePostAsUser object
		 * (of type WpWtiLikePost), if this WpUsers object was restored with
		 * an expansion on the wp_wti_like_post association table.
		 * @var WpWtiLikePost _objWpWtiLikePostAsUser;
		 */
		private $_objWpWtiLikePostAsUser;

		/**
		 * Private member variable that stores a reference to an array of WpWtiLikePostAsUser objects
		 * (of type WpWtiLikePost[]), if this WpUsers object was restored with
		 * an ExpandAsArray on the wp_wti_like_post association table.
		 * @var WpWtiLikePost[] _objWpWtiLikePostAsUserArray;
		 */
		private $_objWpWtiLikePostAsUserArray = null;

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
			$this->intId = WpUsers::IdDefault;
			$this->strUserLogin = WpUsers::UserLoginDefault;
			$this->strUserPass = WpUsers::UserPassDefault;
			$this->strUserNicename = WpUsers::UserNicenameDefault;
			$this->strUserEmail = WpUsers::UserEmailDefault;
			$this->strUserUrl = WpUsers::UserUrlDefault;
			$this->dttUserRegistered = (WpUsers::UserRegisteredDefault === null)?null:new QDateTime(WpUsers::UserRegisteredDefault);
			$this->strUserActivationKey = WpUsers::UserActivationKeyDefault;
			$this->intUserStatus = WpUsers::UserStatusDefault;
			$this->strDisplayName = WpUsers::DisplayNameDefault;
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
		 * Load a WpUsers from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpUsers
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpUsers', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpUsers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpUsers()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpUserses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpUsers[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpUsers::QueryArray to perform the LoadAll query
			try {
				return WpUsers::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpUserses
		 * @return int
		 */
		public static function CountAll() {
			// Call WpUsers::QueryCount to perform the CountAll query
			return WpUsers::QueryCount(QQ::All());
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
			$objDatabase = WpUsers::GetDatabase();

			// Create/Build out the QueryBuilder object with WpUsers-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_users');

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
				WpUsers::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_users');

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
		 * Static Qcubed Query method to query for a single WpUsers object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpUsers the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpUsers object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpUsers::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpUsers::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpUsers objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpUsers[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpUsers::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpUsers objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpUsers::GetDatabase();

			$strQuery = WpUsers::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wpusers', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpUsers::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpUsers
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_users';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'ID', $strAliasPrefix . 'ID');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'ID', $strAliasPrefix . 'ID');
			    $objBuilder->AddSelectItem($strTableName, 'user_login', $strAliasPrefix . 'user_login');
			    $objBuilder->AddSelectItem($strTableName, 'user_pass', $strAliasPrefix . 'user_pass');
			    $objBuilder->AddSelectItem($strTableName, 'user_nicename', $strAliasPrefix . 'user_nicename');
			    $objBuilder->AddSelectItem($strTableName, 'user_email', $strAliasPrefix . 'user_email');
			    $objBuilder->AddSelectItem($strTableName, 'user_url', $strAliasPrefix . 'user_url');
			    $objBuilder->AddSelectItem($strTableName, 'user_registered', $strAliasPrefix . 'user_registered');
			    $objBuilder->AddSelectItem($strTableName, 'user_activation_key', $strAliasPrefix . 'user_activation_key');
			    $objBuilder->AddSelectItem($strTableName, 'user_status', $strAliasPrefix . 'user_status');
			    $objBuilder->AddSelectItem($strTableName, 'display_name', $strAliasPrefix . 'display_name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpUsers from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpUsers::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpUsers
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'wp_users__';


						// Expanding reverse references: WpCommentsAsUser
						$strAlias = $strAliasPrefix . 'wpcommentsasuser__comment_ID';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpCommentsAsUserArray)
								$objPreviousItem->_objWpCommentsAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpCommentsAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpCommentsAsUserArray;
								$objChildItem = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpCommentsAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpCommentsAsUserArray[] = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpPollsipAsPollipUserid
						$strAlias = $strAliasPrefix . 'wppollsipaspollipuserid__pollip_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpPollsipAsPollipUseridArray)
								$objPreviousItem->_objWpPollsipAsPollipUseridArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpPollsipAsPollipUseridArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpPollsipAsPollipUseridArray;
								$objChildItem = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipuserid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpPollsipAsPollipUseridArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpPollsipAsPollipUseridArray[] = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipuserid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpPostsAsPostAuthor
						$strAlias = $strAliasPrefix . 'wppostsaspostauthor__ID';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpPostsAsPostAuthorArray)
								$objPreviousItem->_objWpPostsAsPostAuthorArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpPostsAsPostAuthorArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpPostsAsPostAuthorArray;
								$objChildItem = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostauthor__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpPostsAsPostAuthorArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpPostsAsPostAuthorArray[] = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostauthor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpUsermetaAsUser
						$strAlias = $strAliasPrefix . 'wpusermetaasuser__umeta_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpUsermetaAsUserArray)
								$objPreviousItem->_objWpUsermetaAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpUsermetaAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpUsermetaAsUserArray;
								$objChildItem = WpUsermeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpusermetaasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpUsermetaAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpUsermetaAsUserArray[] = WpUsermeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpusermetaasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpWtiLikePostAsUser
						$strAlias = $strAliasPrefix . 'wpwtilikepostasuser__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpWtiLikePostAsUserArray)
								$objPreviousItem->_objWpWtiLikePostAsUserArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpWtiLikePostAsUserArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpWtiLikePostAsUserArray;
								$objChildItem = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostasuser__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpWtiLikePostAsUserArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpWtiLikePostAsUserArray[] = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'wp_users__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the WpUsers object
			$objToReturn = new WpUsers();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'user_login';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUserLogin = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'user_pass';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUserPass = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'user_nicename';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUserNicename = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'user_email';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUserEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'user_url';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUserUrl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'user_registered';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttUserRegistered = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'user_activation_key';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUserActivationKey = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'user_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUserStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'display_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDisplayName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objWpCommentsAsUserArray);
					$cnt = count($objToReturn->_objWpCommentsAsUserArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpCommentsAsUserArray, $objToReturn->_objWpCommentsAsUserArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpPollsipAsPollipUseridArray);
					$cnt = count($objToReturn->_objWpPollsipAsPollipUseridArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpPollsipAsPollipUseridArray, $objToReturn->_objWpPollsipAsPollipUseridArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpPostsAsPostAuthorArray);
					$cnt = count($objToReturn->_objWpPostsAsPostAuthorArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpPostsAsPostAuthorArray, $objToReturn->_objWpPostsAsPostAuthorArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpUsermetaAsUserArray);
					$cnt = count($objToReturn->_objWpUsermetaAsUserArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpUsermetaAsUserArray, $objToReturn->_objWpUsermetaAsUserArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpWtiLikePostAsUserArray);
					$cnt = count($objToReturn->_objWpWtiLikePostAsUserArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpWtiLikePostAsUserArray, $objToReturn->_objWpWtiLikePostAsUserArray)) {
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
				$strAliasPrefix = 'wp_users__';




			// Check for WpCommentsAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'wpcommentsasuser__comment_ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpCommentsAsUserArray)
				$objToReturn->_objWpCommentsAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpCommentsAsUserArray[] = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpCommentsAsUser = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpPollsipAsPollipUserid Virtual Binding
			$strAlias = $strAliasPrefix . 'wppollsipaspollipuserid__pollip_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpPollsipAsPollipUseridArray)
				$objToReturn->_objWpPollsipAsPollipUseridArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpPollsipAsPollipUseridArray[] = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipuserid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpPollsipAsPollipUserid = WpPollsip::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppollsipaspollipuserid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpPostsAsPostAuthor Virtual Binding
			$strAlias = $strAliasPrefix . 'wppostsaspostauthor__ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpPostsAsPostAuthorArray)
				$objToReturn->_objWpPostsAsPostAuthorArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpPostsAsPostAuthorArray[] = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostauthor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpPostsAsPostAuthor = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostauthor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpUsermetaAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'wpusermetaasuser__umeta_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpUsermetaAsUserArray)
				$objToReturn->_objWpUsermetaAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpUsermetaAsUserArray[] = WpUsermeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpusermetaasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpUsermetaAsUser = WpUsermeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpusermetaasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpWtiLikePostAsUser Virtual Binding
			$strAlias = $strAliasPrefix . 'wpwtilikepostasuser__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpWtiLikePostAsUserArray)
				$objToReturn->_objWpWtiLikePostAsUserArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpWtiLikePostAsUserArray[] = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpWtiLikePostAsUser = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostasuser__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpUserses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpUsers[]
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
					$objItem = WpUsers::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpUsers::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpUsers object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpUsers next row resulting from the query
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
			return WpUsers::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpUsers object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpUsers
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return WpUsers::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpUsers()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpUsers objects,
		 * by UserLogin Index(es)
		 * @param string $strUserLogin
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpUsers[]
		*/
		public static function LoadArrayByUserLogin($strUserLogin, $objOptionalClauses = null) {
			// Call WpUsers::QueryArray to perform the LoadArrayByUserLogin query
			try {
				return WpUsers::QueryArray(
					QQ::Equal(QQN::WpUsers()->UserLogin, $strUserLogin),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpUserses
		 * by UserLogin Index(es)
		 * @param string $strUserLogin
		 * @return int
		*/
		public static function CountByUserLogin($strUserLogin) {
			// Call WpUsers::QueryCount to perform the CountByUserLogin query
			return WpUsers::QueryCount(
				QQ::Equal(QQN::WpUsers()->UserLogin, $strUserLogin)
			);
		}

		/**
		 * Load an array of WpUsers objects,
		 * by UserNicename Index(es)
		 * @param string $strUserNicename
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpUsers[]
		*/
		public static function LoadArrayByUserNicename($strUserNicename, $objOptionalClauses = null) {
			// Call WpUsers::QueryArray to perform the LoadArrayByUserNicename query
			try {
				return WpUsers::QueryArray(
					QQ::Equal(QQN::WpUsers()->UserNicename, $strUserNicename),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpUserses
		 * by UserNicename Index(es)
		 * @param string $strUserNicename
		 * @return int
		*/
		public static function CountByUserNicename($strUserNicename) {
			// Call WpUsers::QueryCount to perform the CountByUserNicename query
			return WpUsers::QueryCount(
				QQ::Equal(QQN::WpUsers()->UserNicename, $strUserNicename)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpUsers
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_users` (
							`user_login`,
							`user_pass`,
							`user_nicename`,
							`user_email`,
							`user_url`,
							`user_registered`,
							`user_activation_key`,
							`user_status`,
							`display_name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strUserLogin) . ',
							' . $objDatabase->SqlVariable($this->strUserPass) . ',
							' . $objDatabase->SqlVariable($this->strUserNicename) . ',
							' . $objDatabase->SqlVariable($this->strUserEmail) . ',
							' . $objDatabase->SqlVariable($this->strUserUrl) . ',
							' . $objDatabase->SqlVariable($this->dttUserRegistered) . ',
							' . $objDatabase->SqlVariable($this->strUserActivationKey) . ',
							' . $objDatabase->SqlVariable($this->intUserStatus) . ',
							' . $objDatabase->SqlVariable($this->strDisplayName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('wp_users', 'ID');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_users`
						SET
							`user_login` = ' . $objDatabase->SqlVariable($this->strUserLogin) . ',
							`user_pass` = ' . $objDatabase->SqlVariable($this->strUserPass) . ',
							`user_nicename` = ' . $objDatabase->SqlVariable($this->strUserNicename) . ',
							`user_email` = ' . $objDatabase->SqlVariable($this->strUserEmail) . ',
							`user_url` = ' . $objDatabase->SqlVariable($this->strUserUrl) . ',
							`user_registered` = ' . $objDatabase->SqlVariable($this->dttUserRegistered) . ',
							`user_activation_key` = ' . $objDatabase->SqlVariable($this->strUserActivationKey) . ',
							`user_status` = ' . $objDatabase->SqlVariable($this->intUserStatus) . ',
							`display_name` = ' . $objDatabase->SqlVariable($this->strDisplayName) . '
						WHERE
							`ID` = ' . $objDatabase->SqlVariable($this->intId) . '
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
		 * Delete this WpUsers
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpUsers with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_users`
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpUsers ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpUsers', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpUserses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_users`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_users table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_users`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpUsers from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpUsers object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpUsers::Load($this->intId);

			// Update $this's local variables to match
			$this->strUserLogin = $objReloaded->strUserLogin;
			$this->strUserPass = $objReloaded->strUserPass;
			$this->strUserNicename = $objReloaded->strUserNicename;
			$this->strUserEmail = $objReloaded->strUserEmail;
			$this->strUserUrl = $objReloaded->strUserUrl;
			$this->dttUserRegistered = $objReloaded->dttUserRegistered;
			$this->strUserActivationKey = $objReloaded->strUserActivationKey;
			$this->intUserStatus = $objReloaded->intUserStatus;
			$this->strDisplayName = $objReloaded->strDisplayName;
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

				case 'UserLogin':
					/**
					 * Gets the value for strUserLogin (Not Null)
					 * @return string
					 */
					return $this->strUserLogin;

				case 'UserPass':
					/**
					 * Gets the value for strUserPass (Not Null)
					 * @return string
					 */
					return $this->strUserPass;

				case 'UserNicename':
					/**
					 * Gets the value for strUserNicename (Not Null)
					 * @return string
					 */
					return $this->strUserNicename;

				case 'UserEmail':
					/**
					 * Gets the value for strUserEmail (Not Null)
					 * @return string
					 */
					return $this->strUserEmail;

				case 'UserUrl':
					/**
					 * Gets the value for strUserUrl (Not Null)
					 * @return string
					 */
					return $this->strUserUrl;

				case 'UserRegistered':
					/**
					 * Gets the value for dttUserRegistered (Not Null)
					 * @return QDateTime
					 */
					return $this->dttUserRegistered;

				case 'UserActivationKey':
					/**
					 * Gets the value for strUserActivationKey (Not Null)
					 * @return string
					 */
					return $this->strUserActivationKey;

				case 'UserStatus':
					/**
					 * Gets the value for intUserStatus (Not Null)
					 * @return integer
					 */
					return $this->intUserStatus;

				case 'DisplayName':
					/**
					 * Gets the value for strDisplayName (Not Null)
					 * @return string
					 */
					return $this->strDisplayName;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_WpCommentsAsUser':
					/**
					 * Gets the value for the private _objWpCommentsAsUser (Read-Only)
					 * if set due to an expansion on the wp_comments.user_id reverse relationship
					 * @return WpComments
					 */
					return $this->_objWpCommentsAsUser;

				case '_WpCommentsAsUserArray':
					/**
					 * Gets the value for the private _objWpCommentsAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_comments.user_id reverse relationship
					 * @return WpComments[]
					 */
					return $this->_objWpCommentsAsUserArray;

				case '_WpPollsipAsPollipUserid':
					/**
					 * Gets the value for the private _objWpPollsipAsPollipUserid (Read-Only)
					 * if set due to an expansion on the wp_pollsip.pollip_userid reverse relationship
					 * @return WpPollsip
					 */
					return $this->_objWpPollsipAsPollipUserid;

				case '_WpPollsipAsPollipUseridArray':
					/**
					 * Gets the value for the private _objWpPollsipAsPollipUseridArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_pollsip.pollip_userid reverse relationship
					 * @return WpPollsip[]
					 */
					return $this->_objWpPollsipAsPollipUseridArray;

				case '_WpPostsAsPostAuthor':
					/**
					 * Gets the value for the private _objWpPostsAsPostAuthor (Read-Only)
					 * if set due to an expansion on the wp_posts.post_author reverse relationship
					 * @return WpPosts
					 */
					return $this->_objWpPostsAsPostAuthor;

				case '_WpPostsAsPostAuthorArray':
					/**
					 * Gets the value for the private _objWpPostsAsPostAuthorArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_posts.post_author reverse relationship
					 * @return WpPosts[]
					 */
					return $this->_objWpPostsAsPostAuthorArray;

				case '_WpUsermetaAsUser':
					/**
					 * Gets the value for the private _objWpUsermetaAsUser (Read-Only)
					 * if set due to an expansion on the wp_usermeta.user_id reverse relationship
					 * @return WpUsermeta
					 */
					return $this->_objWpUsermetaAsUser;

				case '_WpUsermetaAsUserArray':
					/**
					 * Gets the value for the private _objWpUsermetaAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_usermeta.user_id reverse relationship
					 * @return WpUsermeta[]
					 */
					return $this->_objWpUsermetaAsUserArray;

				case '_WpWtiLikePostAsUser':
					/**
					 * Gets the value for the private _objWpWtiLikePostAsUser (Read-Only)
					 * if set due to an expansion on the wp_wti_like_post.user_id reverse relationship
					 * @return WpWtiLikePost
					 */
					return $this->_objWpWtiLikePostAsUser;

				case '_WpWtiLikePostAsUserArray':
					/**
					 * Gets the value for the private _objWpWtiLikePostAsUserArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_wti_like_post.user_id reverse relationship
					 * @return WpWtiLikePost[]
					 */
					return $this->_objWpWtiLikePostAsUserArray;


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
				case 'UserLogin':
					/**
					 * Sets the value for strUserLogin (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUserLogin = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserPass':
					/**
					 * Sets the value for strUserPass (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUserPass = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserNicename':
					/**
					 * Sets the value for strUserNicename (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUserNicename = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserEmail':
					/**
					 * Sets the value for strUserEmail (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUserEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserUrl':
					/**
					 * Sets the value for strUserUrl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUserUrl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserRegistered':
					/**
					 * Sets the value for dttUserRegistered (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttUserRegistered = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserActivationKey':
					/**
					 * Sets the value for strUserActivationKey (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUserActivationKey = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserStatus':
					/**
					 * Sets the value for intUserStatus (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intUserStatus = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DisplayName':
					/**
					 * Sets the value for strDisplayName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDisplayName = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for WpCommentsAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpCommentsesAsUser as an array of WpComments objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public function GetWpCommentsAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpComments::LoadArrayByUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpCommentsesAsUser
		 * @return int
		*/
		public function CountWpCommentsesAsUser() {
			if ((is_null($this->intId)))
				return 0;

			return WpComments::CountByUserId($this->intId);
		}

		/**
		 * Associates a WpCommentsAsUser
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function AssociateWpCommentsAsUser(WpComments $objWpComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpCommentsAsUser on this unsaved WpUsers.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpCommentsAsUser on this WpUsers with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' 
			');
		}

		/**
		 * Unassociates a WpCommentsAsUser
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function UnassociateWpCommentsAsUser(WpComments $objWpComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsUser on this unsaved WpUsers.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsUser on this WpUsers with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`user_id` = null
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpCommentsesAsUser
		 * @return void
		*/
		public function UnassociateAllWpCommentsesAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsUser on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpCommentsAsUser
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function DeleteAssociatedWpCommentsAsUser(WpComments $objWpComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsUser on this unsaved WpUsers.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsUser on this WpUsers with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpCommentsesAsUser
		 * @return void
		*/
		public function DeleteAllWpCommentsesAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsUser on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpPollsipAsPollipUserid
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpPollsipsAsPollipUserid as an array of WpPollsip objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPollsip[]
		*/
		public function GetWpPollsipAsPollipUseridArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpPollsip::LoadArrayByPollipUserid($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpPollsipsAsPollipUserid
		 * @return int
		*/
		public function CountWpPollsipsAsPollipUserid() {
			if ((is_null($this->intId)))
				return 0;

			return WpPollsip::CountByPollipUserid($this->intId);
		}

		/**
		 * Associates a WpPollsipAsPollipUserid
		 * @param WpPollsip $objWpPollsip
		 * @return void
		*/
		public function AssociateWpPollsipAsPollipUserid(WpPollsip $objWpPollsip) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPollsipAsPollipUserid on this unsaved WpUsers.');
			if ((is_null($objWpPollsip->PollipId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPollsipAsPollipUserid on this WpUsers with an unsaved WpPollsip.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pollsip`
				SET
					`pollip_userid` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`pollip_id` = ' . $objDatabase->SqlVariable($objWpPollsip->PollipId) . ' 
			');
		}

		/**
		 * Unassociates a WpPollsipAsPollipUserid
		 * @param WpPollsip $objWpPollsip
		 * @return void
		*/
		public function UnassociateWpPollsipAsPollipUserid(WpPollsip $objWpPollsip) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipUserid on this unsaved WpUsers.');
			if ((is_null($objWpPollsip->PollipId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipUserid on this WpUsers with an unsaved WpPollsip.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pollsip`
				SET
					`pollip_userid` = null
				WHERE
					`pollip_id` = ' . $objDatabase->SqlVariable($objWpPollsip->PollipId) . ' AND
					`pollip_userid` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpPollsipsAsPollipUserid
		 * @return void
		*/
		public function UnassociateAllWpPollsipsAsPollipUserid() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipUserid on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pollsip`
				SET
					`pollip_userid` = null
				WHERE
					`pollip_userid` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpPollsipAsPollipUserid
		 * @param WpPollsip $objWpPollsip
		 * @return void
		*/
		public function DeleteAssociatedWpPollsipAsPollipUserid(WpPollsip $objWpPollsip) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipUserid on this unsaved WpUsers.');
			if ((is_null($objWpPollsip->PollipId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipUserid on this WpUsers with an unsaved WpPollsip.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsip`
				WHERE
					`pollip_id` = ' . $objDatabase->SqlVariable($objWpPollsip->PollipId) . ' AND
					`pollip_userid` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpPollsipsAsPollipUserid
		 * @return void
		*/
		public function DeleteAllWpPollsipsAsPollipUserid() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPollsipAsPollipUserid on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pollsip`
				WHERE
					`pollip_userid` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpPostsAsPostAuthor
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpPostsesAsPostAuthor as an array of WpPosts objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts[]
		*/
		public function GetWpPostsAsPostAuthorArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpPosts::LoadArrayByPostAuthor($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpPostsesAsPostAuthor
		 * @return int
		*/
		public function CountWpPostsesAsPostAuthor() {
			if ((is_null($this->intId)))
				return 0;

			return WpPosts::CountByPostAuthor($this->intId);
		}

		/**
		 * Associates a WpPostsAsPostAuthor
		 * @param WpPosts $objWpPosts
		 * @return void
		*/
		public function AssociateWpPostsAsPostAuthor(WpPosts $objWpPosts) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPostsAsPostAuthor on this unsaved WpUsers.');
			if ((is_null($objWpPosts->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPostsAsPostAuthor on this WpUsers with an unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_posts`
				SET
					`post_author` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($objWpPosts->Id) . ' 
			');
		}

		/**
		 * Unassociates a WpPostsAsPostAuthor
		 * @param WpPosts $objWpPosts
		 * @return void
		*/
		public function UnassociateWpPostsAsPostAuthor(WpPosts $objWpPosts) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostAuthor on this unsaved WpUsers.');
			if ((is_null($objWpPosts->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostAuthor on this WpUsers with an unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_posts`
				SET
					`post_author` = null
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($objWpPosts->Id) . ' AND
					`post_author` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpPostsesAsPostAuthor
		 * @return void
		*/
		public function UnassociateAllWpPostsesAsPostAuthor() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostAuthor on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_posts`
				SET
					`post_author` = null
				WHERE
					`post_author` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpPostsAsPostAuthor
		 * @param WpPosts $objWpPosts
		 * @return void
		*/
		public function DeleteAssociatedWpPostsAsPostAuthor(WpPosts $objWpPosts) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostAuthor on this unsaved WpUsers.');
			if ((is_null($objWpPosts->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostAuthor on this WpUsers with an unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_posts`
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($objWpPosts->Id) . ' AND
					`post_author` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpPostsesAsPostAuthor
		 * @return void
		*/
		public function DeleteAllWpPostsesAsPostAuthor() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostAuthor on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_posts`
				WHERE
					`post_author` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpUsermetaAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpUsermetasAsUser as an array of WpUsermeta objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpUsermeta[]
		*/
		public function GetWpUsermetaAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpUsermeta::LoadArrayByUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpUsermetasAsUser
		 * @return int
		*/
		public function CountWpUsermetasAsUser() {
			if ((is_null($this->intId)))
				return 0;

			return WpUsermeta::CountByUserId($this->intId);
		}

		/**
		 * Associates a WpUsermetaAsUser
		 * @param WpUsermeta $objWpUsermeta
		 * @return void
		*/
		public function AssociateWpUsermetaAsUser(WpUsermeta $objWpUsermeta) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpUsermetaAsUser on this unsaved WpUsers.');
			if ((is_null($objWpUsermeta->UmetaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpUsermetaAsUser on this WpUsers with an unsaved WpUsermeta.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_usermeta`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`umeta_id` = ' . $objDatabase->SqlVariable($objWpUsermeta->UmetaId) . ' 
			');
		}

		/**
		 * Unassociates a WpUsermetaAsUser
		 * @param WpUsermeta $objWpUsermeta
		 * @return void
		*/
		public function UnassociateWpUsermetaAsUser(WpUsermeta $objWpUsermeta) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpUsermetaAsUser on this unsaved WpUsers.');
			if ((is_null($objWpUsermeta->UmetaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpUsermetaAsUser on this WpUsers with an unsaved WpUsermeta.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_usermeta`
				SET
					`user_id` = null
				WHERE
					`umeta_id` = ' . $objDatabase->SqlVariable($objWpUsermeta->UmetaId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpUsermetasAsUser
		 * @return void
		*/
		public function UnassociateAllWpUsermetasAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpUsermetaAsUser on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_usermeta`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpUsermetaAsUser
		 * @param WpUsermeta $objWpUsermeta
		 * @return void
		*/
		public function DeleteAssociatedWpUsermetaAsUser(WpUsermeta $objWpUsermeta) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpUsermetaAsUser on this unsaved WpUsers.');
			if ((is_null($objWpUsermeta->UmetaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpUsermetaAsUser on this WpUsers with an unsaved WpUsermeta.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_usermeta`
				WHERE
					`umeta_id` = ' . $objDatabase->SqlVariable($objWpUsermeta->UmetaId) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpUsermetasAsUser
		 * @return void
		*/
		public function DeleteAllWpUsermetasAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpUsermetaAsUser on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_usermeta`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpWtiLikePostAsUser
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpWtiLikePostsAsUser as an array of WpWtiLikePost objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWtiLikePost[]
		*/
		public function GetWpWtiLikePostAsUserArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpWtiLikePost::LoadArrayByUserId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpWtiLikePostsAsUser
		 * @return int
		*/
		public function CountWpWtiLikePostsAsUser() {
			if ((is_null($this->intId)))
				return 0;

			return WpWtiLikePost::CountByUserId($this->intId);
		}

		/**
		 * Associates a WpWtiLikePostAsUser
		 * @param WpWtiLikePost $objWpWtiLikePost
		 * @return void
		*/
		public function AssociateWpWtiLikePostAsUser(WpWtiLikePost $objWpWtiLikePost) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpWtiLikePostAsUser on this unsaved WpUsers.');
			if ((is_null($objWpWtiLikePost->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpWtiLikePostAsUser on this WpUsers with an unsaved WpWtiLikePost.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_wti_like_post`
				SET
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpWtiLikePost->Id) . ' 
			');
		}

		/**
		 * Unassociates a WpWtiLikePostAsUser
		 * @param WpWtiLikePost $objWpWtiLikePost
		 * @return void
		*/
		public function UnassociateWpWtiLikePostAsUser(WpWtiLikePost $objWpWtiLikePost) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsUser on this unsaved WpUsers.');
			if ((is_null($objWpWtiLikePost->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsUser on this WpUsers with an unsaved WpWtiLikePost.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_wti_like_post`
				SET
					`user_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpWtiLikePost->Id) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpWtiLikePostsAsUser
		 * @return void
		*/
		public function UnassociateAllWpWtiLikePostsAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsUser on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_wti_like_post`
				SET
					`user_id` = null
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpWtiLikePostAsUser
		 * @param WpWtiLikePost $objWpWtiLikePost
		 * @return void
		*/
		public function DeleteAssociatedWpWtiLikePostAsUser(WpWtiLikePost $objWpWtiLikePost) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsUser on this unsaved WpUsers.');
			if ((is_null($objWpWtiLikePost->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsUser on this WpUsers with an unsaved WpWtiLikePost.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wti_like_post`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpWtiLikePost->Id) . ' AND
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpWtiLikePostsAsUser
		 * @return void
		*/
		public function DeleteAllWpWtiLikePostsAsUser() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsUser on this unsaved WpUsers.');

			// Get the Database Object for this Class
			$objDatabase = WpUsers::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wti_like_post`
				WHERE
					`user_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
			return "wp_users";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpUsers::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpUsers"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="UserLogin" type="xsd:string"/>';
			$strToReturn .= '<element name="UserPass" type="xsd:string"/>';
			$strToReturn .= '<element name="UserNicename" type="xsd:string"/>';
			$strToReturn .= '<element name="UserEmail" type="xsd:string"/>';
			$strToReturn .= '<element name="UserUrl" type="xsd:string"/>';
			$strToReturn .= '<element name="UserRegistered" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="UserActivationKey" type="xsd:string"/>';
			$strToReturn .= '<element name="UserStatus" type="xsd:int"/>';
			$strToReturn .= '<element name="DisplayName" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpUsers', $strComplexTypeArray)) {
				$strComplexTypeArray['WpUsers'] = WpUsers::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpUsers::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpUsers();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'UserLogin'))
				$objToReturn->strUserLogin = $objSoapObject->UserLogin;
			if (property_exists($objSoapObject, 'UserPass'))
				$objToReturn->strUserPass = $objSoapObject->UserPass;
			if (property_exists($objSoapObject, 'UserNicename'))
				$objToReturn->strUserNicename = $objSoapObject->UserNicename;
			if (property_exists($objSoapObject, 'UserEmail'))
				$objToReturn->strUserEmail = $objSoapObject->UserEmail;
			if (property_exists($objSoapObject, 'UserUrl'))
				$objToReturn->strUserUrl = $objSoapObject->UserUrl;
			if (property_exists($objSoapObject, 'UserRegistered'))
				$objToReturn->dttUserRegistered = new QDateTime($objSoapObject->UserRegistered);
			if (property_exists($objSoapObject, 'UserActivationKey'))
				$objToReturn->strUserActivationKey = $objSoapObject->UserActivationKey;
			if (property_exists($objSoapObject, 'UserStatus'))
				$objToReturn->intUserStatus = $objSoapObject->UserStatus;
			if (property_exists($objSoapObject, 'DisplayName'))
				$objToReturn->strDisplayName = $objSoapObject->DisplayName;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpUsers::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttUserRegistered)
				$objObject->dttUserRegistered = $objObject->dttUserRegistered->qFormat(QDateTime::FormatSoap);
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
			$iArray['UserLogin'] = $this->strUserLogin;
			$iArray['UserPass'] = $this->strUserPass;
			$iArray['UserNicename'] = $this->strUserNicename;
			$iArray['UserEmail'] = $this->strUserEmail;
			$iArray['UserUrl'] = $this->strUserUrl;
			$iArray['UserRegistered'] = $this->dttUserRegistered;
			$iArray['UserActivationKey'] = $this->strUserActivationKey;
			$iArray['UserStatus'] = $this->intUserStatus;
			$iArray['DisplayName'] = $this->strDisplayName;
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
     * @property-read QQNode $UserLogin
     * @property-read QQNode $UserPass
     * @property-read QQNode $UserNicename
     * @property-read QQNode $UserEmail
     * @property-read QQNode $UserUrl
     * @property-read QQNode $UserRegistered
     * @property-read QQNode $UserActivationKey
     * @property-read QQNode $UserStatus
     * @property-read QQNode $DisplayName
     *
     *
     * @property-read QQReverseReferenceNodeWpComments $WpCommentsAsUser
     * @property-read QQReverseReferenceNodeWpPollsip $WpPollsipAsPollipUserid
     * @property-read QQReverseReferenceNodeWpPosts $WpPostsAsPostAuthor
     * @property-read QQReverseReferenceNodeWpUsermeta $WpUsermetaAsUser
     * @property-read QQReverseReferenceNodeWpWtiLikePost $WpWtiLikePostAsUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpUsers extends QQNode {
		protected $strTableName = 'wp_users';
		protected $strPrimaryKey = 'ID';
		protected $strClassName = 'WpUsers';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('ID', 'Id', 'Integer', $this);
				case 'UserLogin':
					return new QQNode('user_login', 'UserLogin', 'VarChar', $this);
				case 'UserPass':
					return new QQNode('user_pass', 'UserPass', 'VarChar', $this);
				case 'UserNicename':
					return new QQNode('user_nicename', 'UserNicename', 'VarChar', $this);
				case 'UserEmail':
					return new QQNode('user_email', 'UserEmail', 'VarChar', $this);
				case 'UserUrl':
					return new QQNode('user_url', 'UserUrl', 'VarChar', $this);
				case 'UserRegistered':
					return new QQNode('user_registered', 'UserRegistered', 'DateTime', $this);
				case 'UserActivationKey':
					return new QQNode('user_activation_key', 'UserActivationKey', 'VarChar', $this);
				case 'UserStatus':
					return new QQNode('user_status', 'UserStatus', 'Integer', $this);
				case 'DisplayName':
					return new QQNode('display_name', 'DisplayName', 'VarChar', $this);
				case 'WpCommentsAsUser':
					return new QQReverseReferenceNodeWpComments($this, 'wpcommentsasuser', 'reverse_reference', 'user_id');
				case 'WpPollsipAsPollipUserid':
					return new QQReverseReferenceNodeWpPollsip($this, 'wppollsipaspollipuserid', 'reverse_reference', 'pollip_userid');
				case 'WpPostsAsPostAuthor':
					return new QQReverseReferenceNodeWpPosts($this, 'wppostsaspostauthor', 'reverse_reference', 'post_author');
				case 'WpUsermetaAsUser':
					return new QQReverseReferenceNodeWpUsermeta($this, 'wpusermetaasuser', 'reverse_reference', 'user_id');
				case 'WpWtiLikePostAsUser':
					return new QQReverseReferenceNodeWpWtiLikePost($this, 'wpwtilikepostasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('ID', 'Id', 'Integer', $this);
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
     * @property-read QQNode $UserLogin
     * @property-read QQNode $UserPass
     * @property-read QQNode $UserNicename
     * @property-read QQNode $UserEmail
     * @property-read QQNode $UserUrl
     * @property-read QQNode $UserRegistered
     * @property-read QQNode $UserActivationKey
     * @property-read QQNode $UserStatus
     * @property-read QQNode $DisplayName
     *
     *
     * @property-read QQReverseReferenceNodeWpComments $WpCommentsAsUser
     * @property-read QQReverseReferenceNodeWpPollsip $WpPollsipAsPollipUserid
     * @property-read QQReverseReferenceNodeWpPosts $WpPostsAsPostAuthor
     * @property-read QQReverseReferenceNodeWpUsermeta $WpUsermetaAsUser
     * @property-read QQReverseReferenceNodeWpWtiLikePost $WpWtiLikePostAsUser

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpUsers extends QQReverseReferenceNode {
		protected $strTableName = 'wp_users';
		protected $strPrimaryKey = 'ID';
		protected $strClassName = 'WpUsers';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('ID', 'Id', 'integer', $this);
				case 'UserLogin':
					return new QQNode('user_login', 'UserLogin', 'string', $this);
				case 'UserPass':
					return new QQNode('user_pass', 'UserPass', 'string', $this);
				case 'UserNicename':
					return new QQNode('user_nicename', 'UserNicename', 'string', $this);
				case 'UserEmail':
					return new QQNode('user_email', 'UserEmail', 'string', $this);
				case 'UserUrl':
					return new QQNode('user_url', 'UserUrl', 'string', $this);
				case 'UserRegistered':
					return new QQNode('user_registered', 'UserRegistered', 'QDateTime', $this);
				case 'UserActivationKey':
					return new QQNode('user_activation_key', 'UserActivationKey', 'string', $this);
				case 'UserStatus':
					return new QQNode('user_status', 'UserStatus', 'integer', $this);
				case 'DisplayName':
					return new QQNode('display_name', 'DisplayName', 'string', $this);
				case 'WpCommentsAsUser':
					return new QQReverseReferenceNodeWpComments($this, 'wpcommentsasuser', 'reverse_reference', 'user_id');
				case 'WpPollsipAsPollipUserid':
					return new QQReverseReferenceNodeWpPollsip($this, 'wppollsipaspollipuserid', 'reverse_reference', 'pollip_userid');
				case 'WpPostsAsPostAuthor':
					return new QQReverseReferenceNodeWpPosts($this, 'wppostsaspostauthor', 'reverse_reference', 'post_author');
				case 'WpUsermetaAsUser':
					return new QQReverseReferenceNodeWpUsermeta($this, 'wpusermetaasuser', 'reverse_reference', 'user_id');
				case 'WpWtiLikePostAsUser':
					return new QQReverseReferenceNodeWpWtiLikePost($this, 'wpwtilikepostasuser', 'reverse_reference', 'user_id');

				case '_PrimaryKeyNode':
					return new QQNode('ID', 'Id', 'integer', $this);
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
