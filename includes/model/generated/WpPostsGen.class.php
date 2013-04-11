<?php
	/**
	 * The abstract WpPostsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpPosts subclass which
	 * extends this WpPostsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpPosts class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $PostAuthor the value for intPostAuthor (Not Null)
	 * @property QDateTime $PostDate the value for dttPostDate (Not Null)
	 * @property QDateTime $PostDateGmt the value for dttPostDateGmt (Not Null)
	 * @property string $PostContent the value for strPostContent (Not Null)
	 * @property string $PostTitle the value for strPostTitle (Not Null)
	 * @property string $PostExcerpt the value for strPostExcerpt (Not Null)
	 * @property string $PostStatus the value for strPostStatus (Not Null)
	 * @property string $CommentStatus the value for strCommentStatus (Not Null)
	 * @property string $PingStatus the value for strPingStatus (Not Null)
	 * @property string $PostPassword the value for strPostPassword (Not Null)
	 * @property string $PostName the value for strPostName (Not Null)
	 * @property string $ToPing the value for strToPing (Not Null)
	 * @property string $Pinged the value for strPinged (Not Null)
	 * @property QDateTime $PostModified the value for dttPostModified (Not Null)
	 * @property QDateTime $PostModifiedGmt the value for dttPostModifiedGmt (Not Null)
	 * @property string $PostContentFiltered the value for strPostContentFiltered (Not Null)
	 * @property integer $PostParent the value for intPostParent (Not Null)
	 * @property string $Guid the value for strGuid (Not Null)
	 * @property integer $MenuOrder the value for intMenuOrder (Not Null)
	 * @property string $PostType the value for strPostType (Not Null)
	 * @property string $PostMimeType the value for strPostMimeType (Not Null)
	 * @property integer $CommentCount the value for intCommentCount (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpPostsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_posts.ID
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_author
		 * @var integer intPostAuthor
		 */
		protected $intPostAuthor;
		const PostAuthorDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_date
		 * @var QDateTime dttPostDate
		 */
		protected $dttPostDate;
		const PostDateDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_date_gmt
		 * @var QDateTime dttPostDateGmt
		 */
		protected $dttPostDateGmt;
		const PostDateGmtDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_content
		 * @var string strPostContent
		 */
		protected $strPostContent;
		const PostContentDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_title
		 * @var string strPostTitle
		 */
		protected $strPostTitle;
		const PostTitleDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_excerpt
		 * @var string strPostExcerpt
		 */
		protected $strPostExcerpt;
		const PostExcerptDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_status
		 * @var string strPostStatus
		 */
		protected $strPostStatus;
		const PostStatusMaxLength = 20;
		const PostStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.comment_status
		 * @var string strCommentStatus
		 */
		protected $strCommentStatus;
		const CommentStatusMaxLength = 20;
		const CommentStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.ping_status
		 * @var string strPingStatus
		 */
		protected $strPingStatus;
		const PingStatusMaxLength = 20;
		const PingStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_password
		 * @var string strPostPassword
		 */
		protected $strPostPassword;
		const PostPasswordMaxLength = 20;
		const PostPasswordDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_name
		 * @var string strPostName
		 */
		protected $strPostName;
		const PostNameMaxLength = 200;
		const PostNameDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.to_ping
		 * @var string strToPing
		 */
		protected $strToPing;
		const ToPingDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.pinged
		 * @var string strPinged
		 */
		protected $strPinged;
		const PingedDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_modified
		 * @var QDateTime dttPostModified
		 */
		protected $dttPostModified;
		const PostModifiedDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_modified_gmt
		 * @var QDateTime dttPostModifiedGmt
		 */
		protected $dttPostModifiedGmt;
		const PostModifiedGmtDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_content_filtered
		 * @var string strPostContentFiltered
		 */
		protected $strPostContentFiltered;
		const PostContentFilteredDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_parent
		 * @var integer intPostParent
		 */
		protected $intPostParent;
		const PostParentDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.guid
		 * @var string strGuid
		 */
		protected $strGuid;
		const GuidMaxLength = 255;
		const GuidDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.menu_order
		 * @var integer intMenuOrder
		 */
		protected $intMenuOrder;
		const MenuOrderDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_type
		 * @var string strPostType
		 */
		protected $strPostType;
		const PostTypeMaxLength = 20;
		const PostTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.post_mime_type
		 * @var string strPostMimeType
		 */
		protected $strPostMimeType;
		const PostMimeTypeMaxLength = 100;
		const PostMimeTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_posts.comment_count
		 * @var integer intCommentCount
		 */
		protected $intCommentCount;
		const CommentCountDefault = null;


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
			$this->intId = WpPosts::IdDefault;
			$this->intPostAuthor = WpPosts::PostAuthorDefault;
			$this->dttPostDate = (WpPosts::PostDateDefault === null)?null:new QDateTime(WpPosts::PostDateDefault);
			$this->dttPostDateGmt = (WpPosts::PostDateGmtDefault === null)?null:new QDateTime(WpPosts::PostDateGmtDefault);
			$this->strPostContent = WpPosts::PostContentDefault;
			$this->strPostTitle = WpPosts::PostTitleDefault;
			$this->strPostExcerpt = WpPosts::PostExcerptDefault;
			$this->strPostStatus = WpPosts::PostStatusDefault;
			$this->strCommentStatus = WpPosts::CommentStatusDefault;
			$this->strPingStatus = WpPosts::PingStatusDefault;
			$this->strPostPassword = WpPosts::PostPasswordDefault;
			$this->strPostName = WpPosts::PostNameDefault;
			$this->strToPing = WpPosts::ToPingDefault;
			$this->strPinged = WpPosts::PingedDefault;
			$this->dttPostModified = (WpPosts::PostModifiedDefault === null)?null:new QDateTime(WpPosts::PostModifiedDefault);
			$this->dttPostModifiedGmt = (WpPosts::PostModifiedGmtDefault === null)?null:new QDateTime(WpPosts::PostModifiedGmtDefault);
			$this->strPostContentFiltered = WpPosts::PostContentFilteredDefault;
			$this->intPostParent = WpPosts::PostParentDefault;
			$this->strGuid = WpPosts::GuidDefault;
			$this->intMenuOrder = WpPosts::MenuOrderDefault;
			$this->strPostType = WpPosts::PostTypeDefault;
			$this->strPostMimeType = WpPosts::PostMimeTypeDefault;
			$this->intCommentCount = WpPosts::CommentCountDefault;
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
		 * Load a WpPosts from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPosts', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpPosts::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPosts()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpPostses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpPosts::QueryArray to perform the LoadAll query
			try {
				return WpPosts::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpPostses
		 * @return int
		 */
		public static function CountAll() {
			// Call WpPosts::QueryCount to perform the CountAll query
			return WpPosts::QueryCount(QQ::All());
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
			$objDatabase = WpPosts::GetDatabase();

			// Create/Build out the QueryBuilder object with WpPosts-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_posts');

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
				WpPosts::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_posts');

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
		 * Static Qcubed Query method to query for a single WpPosts object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPosts the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPosts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpPosts object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpPosts::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpPosts::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpPosts objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpPosts[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPosts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpPosts::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpPosts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpPosts objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpPosts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpPosts::GetDatabase();

			$strQuery = WpPosts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wpposts', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpPosts::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpPosts
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_posts';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'ID', $strAliasPrefix . 'ID');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'ID', $strAliasPrefix . 'ID');
			    $objBuilder->AddSelectItem($strTableName, 'post_author', $strAliasPrefix . 'post_author');
			    $objBuilder->AddSelectItem($strTableName, 'post_date', $strAliasPrefix . 'post_date');
			    $objBuilder->AddSelectItem($strTableName, 'post_date_gmt', $strAliasPrefix . 'post_date_gmt');
			    $objBuilder->AddSelectItem($strTableName, 'post_content', $strAliasPrefix . 'post_content');
			    $objBuilder->AddSelectItem($strTableName, 'post_title', $strAliasPrefix . 'post_title');
			    $objBuilder->AddSelectItem($strTableName, 'post_excerpt', $strAliasPrefix . 'post_excerpt');
			    $objBuilder->AddSelectItem($strTableName, 'post_status', $strAliasPrefix . 'post_status');
			    $objBuilder->AddSelectItem($strTableName, 'comment_status', $strAliasPrefix . 'comment_status');
			    $objBuilder->AddSelectItem($strTableName, 'ping_status', $strAliasPrefix . 'ping_status');
			    $objBuilder->AddSelectItem($strTableName, 'post_password', $strAliasPrefix . 'post_password');
			    $objBuilder->AddSelectItem($strTableName, 'post_name', $strAliasPrefix . 'post_name');
			    $objBuilder->AddSelectItem($strTableName, 'to_ping', $strAliasPrefix . 'to_ping');
			    $objBuilder->AddSelectItem($strTableName, 'pinged', $strAliasPrefix . 'pinged');
			    $objBuilder->AddSelectItem($strTableName, 'post_modified', $strAliasPrefix . 'post_modified');
			    $objBuilder->AddSelectItem($strTableName, 'post_modified_gmt', $strAliasPrefix . 'post_modified_gmt');
			    $objBuilder->AddSelectItem($strTableName, 'post_content_filtered', $strAliasPrefix . 'post_content_filtered');
			    $objBuilder->AddSelectItem($strTableName, 'post_parent', $strAliasPrefix . 'post_parent');
			    $objBuilder->AddSelectItem($strTableName, 'guid', $strAliasPrefix . 'guid');
			    $objBuilder->AddSelectItem($strTableName, 'menu_order', $strAliasPrefix . 'menu_order');
			    $objBuilder->AddSelectItem($strTableName, 'post_type', $strAliasPrefix . 'post_type');
			    $objBuilder->AddSelectItem($strTableName, 'post_mime_type', $strAliasPrefix . 'post_mime_type');
			    $objBuilder->AddSelectItem($strTableName, 'comment_count', $strAliasPrefix . 'comment_count');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpPosts from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpPosts::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpPosts
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpPosts object
			$objToReturn = new WpPosts();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'post_author';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPostAuthor = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'post_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPostDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'post_date_gmt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPostDateGmt = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'post_content';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostContent = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'post_title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostTitle = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'post_excerpt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostExcerpt = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'post_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'ping_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPingStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'post_password';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'post_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'to_ping';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strToPing = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'pinged';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPinged = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'post_modified';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPostModified = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'post_modified_gmt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPostModifiedGmt = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'post_content_filtered';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostContentFiltered = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'post_parent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPostParent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'guid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGuid = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'menu_order';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMenuOrder = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'post_type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostType = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'post_mime_type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPostMimeType = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_count';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCommentCount = $objDbRow->GetColumn($strAliasName, 'Integer');

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
				$strAliasPrefix = 'wp_posts__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpPostses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpPosts[]
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
					$objItem = WpPosts::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpPosts::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpPosts object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpPosts next row resulting from the query
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
			return WpPosts::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpPosts object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return WpPosts::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpPosts()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpPosts objects,
		 * by PostName Index(es)
		 * @param string $strPostName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts[]
		*/
		public static function LoadArrayByPostName($strPostName, $objOptionalClauses = null) {
			// Call WpPosts::QueryArray to perform the LoadArrayByPostName query
			try {
				return WpPosts::QueryArray(
					QQ::Equal(QQN::WpPosts()->PostName, $strPostName),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPostses
		 * by PostName Index(es)
		 * @param string $strPostName
		 * @return int
		*/
		public static function CountByPostName($strPostName) {
			// Call WpPosts::QueryCount to perform the CountByPostName query
			return WpPosts::QueryCount(
				QQ::Equal(QQN::WpPosts()->PostName, $strPostName)
			);
		}

		/**
		 * Load an array of WpPosts objects,
		 * by PostType, PostStatus, PostDate, Id Index(es)
		 * @param string $strPostType
		 * @param string $strPostStatus
		 * @param QDateTime $dttPostDate
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts[]
		*/
		public static function LoadArrayByPostTypePostStatusPostDateId($strPostType, $strPostStatus, $dttPostDate, $intId, $objOptionalClauses = null) {
			// Call WpPosts::QueryArray to perform the LoadArrayByPostTypePostStatusPostDateId query
			try {
				return WpPosts::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::WpPosts()->PostType, $strPostType),
					QQ::Equal(QQN::WpPosts()->PostStatus, $strPostStatus),
					QQ::Equal(QQN::WpPosts()->PostDate, $dttPostDate),
					QQ::Equal(QQN::WpPosts()->Id, $intId)					)
,
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPostses
		 * by PostType, PostStatus, PostDate, Id Index(es)
		 * @param string $strPostType
		 * @param string $strPostStatus
		 * @param QDateTime $dttPostDate
		 * @param integer $intId
		 * @return int
		*/
		public static function CountByPostTypePostStatusPostDateId($strPostType, $strPostStatus, $dttPostDate, $intId) {
			// Call WpPosts::QueryCount to perform the CountByPostTypePostStatusPostDateId query
			return WpPosts::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::WpPosts()->PostType, $strPostType),
				QQ::Equal(QQN::WpPosts()->PostStatus, $strPostStatus),
				QQ::Equal(QQN::WpPosts()->PostDate, $dttPostDate),
				QQ::Equal(QQN::WpPosts()->Id, $intId)				)

			);
		}

		/**
		 * Load an array of WpPosts objects,
		 * by PostParent Index(es)
		 * @param integer $intPostParent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts[]
		*/
		public static function LoadArrayByPostParent($intPostParent, $objOptionalClauses = null) {
			// Call WpPosts::QueryArray to perform the LoadArrayByPostParent query
			try {
				return WpPosts::QueryArray(
					QQ::Equal(QQN::WpPosts()->PostParent, $intPostParent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPostses
		 * by PostParent Index(es)
		 * @param integer $intPostParent
		 * @return int
		*/
		public static function CountByPostParent($intPostParent) {
			// Call WpPosts::QueryCount to perform the CountByPostParent query
			return WpPosts::QueryCount(
				QQ::Equal(QQN::WpPosts()->PostParent, $intPostParent)
			);
		}

		/**
		 * Load an array of WpPosts objects,
		 * by PostAuthor Index(es)
		 * @param integer $intPostAuthor
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts[]
		*/
		public static function LoadArrayByPostAuthor($intPostAuthor, $objOptionalClauses = null) {
			// Call WpPosts::QueryArray to perform the LoadArrayByPostAuthor query
			try {
				return WpPosts::QueryArray(
					QQ::Equal(QQN::WpPosts()->PostAuthor, $intPostAuthor),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpPostses
		 * by PostAuthor Index(es)
		 * @param integer $intPostAuthor
		 * @return int
		*/
		public static function CountByPostAuthor($intPostAuthor) {
			// Call WpPosts::QueryCount to perform the CountByPostAuthor query
			return WpPosts::QueryCount(
				QQ::Equal(QQN::WpPosts()->PostAuthor, $intPostAuthor)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpPosts
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_posts` (
							`post_author`,
							`post_date`,
							`post_date_gmt`,
							`post_content`,
							`post_title`,
							`post_excerpt`,
							`post_status`,
							`comment_status`,
							`ping_status`,
							`post_password`,
							`post_name`,
							`to_ping`,
							`pinged`,
							`post_modified`,
							`post_modified_gmt`,
							`post_content_filtered`,
							`post_parent`,
							`guid`,
							`menu_order`,
							`post_type`,
							`post_mime_type`,
							`comment_count`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intPostAuthor) . ',
							' . $objDatabase->SqlVariable($this->dttPostDate) . ',
							' . $objDatabase->SqlVariable($this->dttPostDateGmt) . ',
							' . $objDatabase->SqlVariable($this->strPostContent) . ',
							' . $objDatabase->SqlVariable($this->strPostTitle) . ',
							' . $objDatabase->SqlVariable($this->strPostExcerpt) . ',
							' . $objDatabase->SqlVariable($this->strPostStatus) . ',
							' . $objDatabase->SqlVariable($this->strCommentStatus) . ',
							' . $objDatabase->SqlVariable($this->strPingStatus) . ',
							' . $objDatabase->SqlVariable($this->strPostPassword) . ',
							' . $objDatabase->SqlVariable($this->strPostName) . ',
							' . $objDatabase->SqlVariable($this->strToPing) . ',
							' . $objDatabase->SqlVariable($this->strPinged) . ',
							' . $objDatabase->SqlVariable($this->dttPostModified) . ',
							' . $objDatabase->SqlVariable($this->dttPostModifiedGmt) . ',
							' . $objDatabase->SqlVariable($this->strPostContentFiltered) . ',
							' . $objDatabase->SqlVariable($this->intPostParent) . ',
							' . $objDatabase->SqlVariable($this->strGuid) . ',
							' . $objDatabase->SqlVariable($this->intMenuOrder) . ',
							' . $objDatabase->SqlVariable($this->strPostType) . ',
							' . $objDatabase->SqlVariable($this->strPostMimeType) . ',
							' . $objDatabase->SqlVariable($this->intCommentCount) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('wp_posts', 'ID');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_posts`
						SET
							`post_author` = ' . $objDatabase->SqlVariable($this->intPostAuthor) . ',
							`post_date` = ' . $objDatabase->SqlVariable($this->dttPostDate) . ',
							`post_date_gmt` = ' . $objDatabase->SqlVariable($this->dttPostDateGmt) . ',
							`post_content` = ' . $objDatabase->SqlVariable($this->strPostContent) . ',
							`post_title` = ' . $objDatabase->SqlVariable($this->strPostTitle) . ',
							`post_excerpt` = ' . $objDatabase->SqlVariable($this->strPostExcerpt) . ',
							`post_status` = ' . $objDatabase->SqlVariable($this->strPostStatus) . ',
							`comment_status` = ' . $objDatabase->SqlVariable($this->strCommentStatus) . ',
							`ping_status` = ' . $objDatabase->SqlVariable($this->strPingStatus) . ',
							`post_password` = ' . $objDatabase->SqlVariable($this->strPostPassword) . ',
							`post_name` = ' . $objDatabase->SqlVariable($this->strPostName) . ',
							`to_ping` = ' . $objDatabase->SqlVariable($this->strToPing) . ',
							`pinged` = ' . $objDatabase->SqlVariable($this->strPinged) . ',
							`post_modified` = ' . $objDatabase->SqlVariable($this->dttPostModified) . ',
							`post_modified_gmt` = ' . $objDatabase->SqlVariable($this->dttPostModifiedGmt) . ',
							`post_content_filtered` = ' . $objDatabase->SqlVariable($this->strPostContentFiltered) . ',
							`post_parent` = ' . $objDatabase->SqlVariable($this->intPostParent) . ',
							`guid` = ' . $objDatabase->SqlVariable($this->strGuid) . ',
							`menu_order` = ' . $objDatabase->SqlVariable($this->intMenuOrder) . ',
							`post_type` = ' . $objDatabase->SqlVariable($this->strPostType) . ',
							`post_mime_type` = ' . $objDatabase->SqlVariable($this->strPostMimeType) . ',
							`comment_count` = ' . $objDatabase->SqlVariable($this->intCommentCount) . '
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
		 * Delete this WpPosts
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpPosts with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_posts`
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpPosts ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpPosts', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpPostses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_posts`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_posts table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_posts`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpPosts from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpPosts object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpPosts::Load($this->intId);

			// Update $this's local variables to match
			$this->intPostAuthor = $objReloaded->intPostAuthor;
			$this->dttPostDate = $objReloaded->dttPostDate;
			$this->dttPostDateGmt = $objReloaded->dttPostDateGmt;
			$this->strPostContent = $objReloaded->strPostContent;
			$this->strPostTitle = $objReloaded->strPostTitle;
			$this->strPostExcerpt = $objReloaded->strPostExcerpt;
			$this->strPostStatus = $objReloaded->strPostStatus;
			$this->strCommentStatus = $objReloaded->strCommentStatus;
			$this->strPingStatus = $objReloaded->strPingStatus;
			$this->strPostPassword = $objReloaded->strPostPassword;
			$this->strPostName = $objReloaded->strPostName;
			$this->strToPing = $objReloaded->strToPing;
			$this->strPinged = $objReloaded->strPinged;
			$this->dttPostModified = $objReloaded->dttPostModified;
			$this->dttPostModifiedGmt = $objReloaded->dttPostModifiedGmt;
			$this->strPostContentFiltered = $objReloaded->strPostContentFiltered;
			$this->intPostParent = $objReloaded->intPostParent;
			$this->strGuid = $objReloaded->strGuid;
			$this->intMenuOrder = $objReloaded->intMenuOrder;
			$this->strPostType = $objReloaded->strPostType;
			$this->strPostMimeType = $objReloaded->strPostMimeType;
			$this->intCommentCount = $objReloaded->intCommentCount;
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

				case 'PostAuthor':
					/**
					 * Gets the value for intPostAuthor (Not Null)
					 * @return integer
					 */
					return $this->intPostAuthor;

				case 'PostDate':
					/**
					 * Gets the value for dttPostDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttPostDate;

				case 'PostDateGmt':
					/**
					 * Gets the value for dttPostDateGmt (Not Null)
					 * @return QDateTime
					 */
					return $this->dttPostDateGmt;

				case 'PostContent':
					/**
					 * Gets the value for strPostContent (Not Null)
					 * @return string
					 */
					return $this->strPostContent;

				case 'PostTitle':
					/**
					 * Gets the value for strPostTitle (Not Null)
					 * @return string
					 */
					return $this->strPostTitle;

				case 'PostExcerpt':
					/**
					 * Gets the value for strPostExcerpt (Not Null)
					 * @return string
					 */
					return $this->strPostExcerpt;

				case 'PostStatus':
					/**
					 * Gets the value for strPostStatus (Not Null)
					 * @return string
					 */
					return $this->strPostStatus;

				case 'CommentStatus':
					/**
					 * Gets the value for strCommentStatus (Not Null)
					 * @return string
					 */
					return $this->strCommentStatus;

				case 'PingStatus':
					/**
					 * Gets the value for strPingStatus (Not Null)
					 * @return string
					 */
					return $this->strPingStatus;

				case 'PostPassword':
					/**
					 * Gets the value for strPostPassword (Not Null)
					 * @return string
					 */
					return $this->strPostPassword;

				case 'PostName':
					/**
					 * Gets the value for strPostName (Not Null)
					 * @return string
					 */
					return $this->strPostName;

				case 'ToPing':
					/**
					 * Gets the value for strToPing (Not Null)
					 * @return string
					 */
					return $this->strToPing;

				case 'Pinged':
					/**
					 * Gets the value for strPinged (Not Null)
					 * @return string
					 */
					return $this->strPinged;

				case 'PostModified':
					/**
					 * Gets the value for dttPostModified (Not Null)
					 * @return QDateTime
					 */
					return $this->dttPostModified;

				case 'PostModifiedGmt':
					/**
					 * Gets the value for dttPostModifiedGmt (Not Null)
					 * @return QDateTime
					 */
					return $this->dttPostModifiedGmt;

				case 'PostContentFiltered':
					/**
					 * Gets the value for strPostContentFiltered (Not Null)
					 * @return string
					 */
					return $this->strPostContentFiltered;

				case 'PostParent':
					/**
					 * Gets the value for intPostParent (Not Null)
					 * @return integer
					 */
					return $this->intPostParent;

				case 'Guid':
					/**
					 * Gets the value for strGuid (Not Null)
					 * @return string
					 */
					return $this->strGuid;

				case 'MenuOrder':
					/**
					 * Gets the value for intMenuOrder (Not Null)
					 * @return integer
					 */
					return $this->intMenuOrder;

				case 'PostType':
					/**
					 * Gets the value for strPostType (Not Null)
					 * @return string
					 */
					return $this->strPostType;

				case 'PostMimeType':
					/**
					 * Gets the value for strPostMimeType (Not Null)
					 * @return string
					 */
					return $this->strPostMimeType;

				case 'CommentCount':
					/**
					 * Gets the value for intCommentCount (Not Null)
					 * @return integer
					 */
					return $this->intCommentCount;


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
				case 'PostAuthor':
					/**
					 * Sets the value for intPostAuthor (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPostAuthor = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostDate':
					/**
					 * Sets the value for dttPostDate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPostDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostDateGmt':
					/**
					 * Sets the value for dttPostDateGmt (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPostDateGmt = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostContent':
					/**
					 * Sets the value for strPostContent (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostContent = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostTitle':
					/**
					 * Sets the value for strPostTitle (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostTitle = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostExcerpt':
					/**
					 * Sets the value for strPostExcerpt (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostExcerpt = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostStatus':
					/**
					 * Sets the value for strPostStatus (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostStatus = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentStatus':
					/**
					 * Sets the value for strCommentStatus (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentStatus = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PingStatus':
					/**
					 * Sets the value for strPingStatus (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPingStatus = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostPassword':
					/**
					 * Sets the value for strPostPassword (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostPassword = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostName':
					/**
					 * Sets the value for strPostName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToPing':
					/**
					 * Sets the value for strToPing (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strToPing = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pinged':
					/**
					 * Sets the value for strPinged (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPinged = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostModified':
					/**
					 * Sets the value for dttPostModified (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPostModified = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostModifiedGmt':
					/**
					 * Sets the value for dttPostModifiedGmt (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPostModifiedGmt = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostContentFiltered':
					/**
					 * Sets the value for strPostContentFiltered (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostContentFiltered = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostParent':
					/**
					 * Sets the value for intPostParent (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPostParent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Guid':
					/**
					 * Sets the value for strGuid (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGuid = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MenuOrder':
					/**
					 * Sets the value for intMenuOrder (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMenuOrder = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostType':
					/**
					 * Sets the value for strPostType (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostType = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostMimeType':
					/**
					 * Sets the value for strPostMimeType (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPostMimeType = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentCount':
					/**
					 * Sets the value for intCommentCount (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCommentCount = QType::Cast($mixValue, QType::Integer));
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
			return "wp_posts";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpPosts::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpPosts"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="PostAuthor" type="xsd:int"/>';
			$strToReturn .= '<element name="PostDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="PostDateGmt" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="PostContent" type="xsd:string"/>';
			$strToReturn .= '<element name="PostTitle" type="xsd:string"/>';
			$strToReturn .= '<element name="PostExcerpt" type="xsd:string"/>';
			$strToReturn .= '<element name="PostStatus" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentStatus" type="xsd:string"/>';
			$strToReturn .= '<element name="PingStatus" type="xsd:string"/>';
			$strToReturn .= '<element name="PostPassword" type="xsd:string"/>';
			$strToReturn .= '<element name="PostName" type="xsd:string"/>';
			$strToReturn .= '<element name="ToPing" type="xsd:string"/>';
			$strToReturn .= '<element name="Pinged" type="xsd:string"/>';
			$strToReturn .= '<element name="PostModified" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="PostModifiedGmt" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="PostContentFiltered" type="xsd:string"/>';
			$strToReturn .= '<element name="PostParent" type="xsd:int"/>';
			$strToReturn .= '<element name="Guid" type="xsd:string"/>';
			$strToReturn .= '<element name="MenuOrder" type="xsd:int"/>';
			$strToReturn .= '<element name="PostType" type="xsd:string"/>';
			$strToReturn .= '<element name="PostMimeType" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentCount" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpPosts', $strComplexTypeArray)) {
				$strComplexTypeArray['WpPosts'] = WpPosts::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpPosts::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpPosts();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'PostAuthor'))
				$objToReturn->intPostAuthor = $objSoapObject->PostAuthor;
			if (property_exists($objSoapObject, 'PostDate'))
				$objToReturn->dttPostDate = new QDateTime($objSoapObject->PostDate);
			if (property_exists($objSoapObject, 'PostDateGmt'))
				$objToReturn->dttPostDateGmt = new QDateTime($objSoapObject->PostDateGmt);
			if (property_exists($objSoapObject, 'PostContent'))
				$objToReturn->strPostContent = $objSoapObject->PostContent;
			if (property_exists($objSoapObject, 'PostTitle'))
				$objToReturn->strPostTitle = $objSoapObject->PostTitle;
			if (property_exists($objSoapObject, 'PostExcerpt'))
				$objToReturn->strPostExcerpt = $objSoapObject->PostExcerpt;
			if (property_exists($objSoapObject, 'PostStatus'))
				$objToReturn->strPostStatus = $objSoapObject->PostStatus;
			if (property_exists($objSoapObject, 'CommentStatus'))
				$objToReturn->strCommentStatus = $objSoapObject->CommentStatus;
			if (property_exists($objSoapObject, 'PingStatus'))
				$objToReturn->strPingStatus = $objSoapObject->PingStatus;
			if (property_exists($objSoapObject, 'PostPassword'))
				$objToReturn->strPostPassword = $objSoapObject->PostPassword;
			if (property_exists($objSoapObject, 'PostName'))
				$objToReturn->strPostName = $objSoapObject->PostName;
			if (property_exists($objSoapObject, 'ToPing'))
				$objToReturn->strToPing = $objSoapObject->ToPing;
			if (property_exists($objSoapObject, 'Pinged'))
				$objToReturn->strPinged = $objSoapObject->Pinged;
			if (property_exists($objSoapObject, 'PostModified'))
				$objToReturn->dttPostModified = new QDateTime($objSoapObject->PostModified);
			if (property_exists($objSoapObject, 'PostModifiedGmt'))
				$objToReturn->dttPostModifiedGmt = new QDateTime($objSoapObject->PostModifiedGmt);
			if (property_exists($objSoapObject, 'PostContentFiltered'))
				$objToReturn->strPostContentFiltered = $objSoapObject->PostContentFiltered;
			if (property_exists($objSoapObject, 'PostParent'))
				$objToReturn->intPostParent = $objSoapObject->PostParent;
			if (property_exists($objSoapObject, 'Guid'))
				$objToReturn->strGuid = $objSoapObject->Guid;
			if (property_exists($objSoapObject, 'MenuOrder'))
				$objToReturn->intMenuOrder = $objSoapObject->MenuOrder;
			if (property_exists($objSoapObject, 'PostType'))
				$objToReturn->strPostType = $objSoapObject->PostType;
			if (property_exists($objSoapObject, 'PostMimeType'))
				$objToReturn->strPostMimeType = $objSoapObject->PostMimeType;
			if (property_exists($objSoapObject, 'CommentCount'))
				$objToReturn->intCommentCount = $objSoapObject->CommentCount;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpPosts::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttPostDate)
				$objObject->dttPostDate = $objObject->dttPostDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPostDateGmt)
				$objObject->dttPostDateGmt = $objObject->dttPostDateGmt->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPostModified)
				$objObject->dttPostModified = $objObject->dttPostModified->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPostModifiedGmt)
				$objObject->dttPostModifiedGmt = $objObject->dttPostModifiedGmt->qFormat(QDateTime::FormatSoap);
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
			$iArray['PostAuthor'] = $this->intPostAuthor;
			$iArray['PostDate'] = $this->dttPostDate;
			$iArray['PostDateGmt'] = $this->dttPostDateGmt;
			$iArray['PostContent'] = $this->strPostContent;
			$iArray['PostTitle'] = $this->strPostTitle;
			$iArray['PostExcerpt'] = $this->strPostExcerpt;
			$iArray['PostStatus'] = $this->strPostStatus;
			$iArray['CommentStatus'] = $this->strCommentStatus;
			$iArray['PingStatus'] = $this->strPingStatus;
			$iArray['PostPassword'] = $this->strPostPassword;
			$iArray['PostName'] = $this->strPostName;
			$iArray['ToPing'] = $this->strToPing;
			$iArray['Pinged'] = $this->strPinged;
			$iArray['PostModified'] = $this->dttPostModified;
			$iArray['PostModifiedGmt'] = $this->dttPostModifiedGmt;
			$iArray['PostContentFiltered'] = $this->strPostContentFiltered;
			$iArray['PostParent'] = $this->intPostParent;
			$iArray['Guid'] = $this->strGuid;
			$iArray['MenuOrder'] = $this->intMenuOrder;
			$iArray['PostType'] = $this->strPostType;
			$iArray['PostMimeType'] = $this->strPostMimeType;
			$iArray['CommentCount'] = $this->intCommentCount;
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
     * @property-read QQNode $PostAuthor
     * @property-read QQNode $PostDate
     * @property-read QQNode $PostDateGmt
     * @property-read QQNode $PostContent
     * @property-read QQNode $PostTitle
     * @property-read QQNode $PostExcerpt
     * @property-read QQNode $PostStatus
     * @property-read QQNode $CommentStatus
     * @property-read QQNode $PingStatus
     * @property-read QQNode $PostPassword
     * @property-read QQNode $PostName
     * @property-read QQNode $ToPing
     * @property-read QQNode $Pinged
     * @property-read QQNode $PostModified
     * @property-read QQNode $PostModifiedGmt
     * @property-read QQNode $PostContentFiltered
     * @property-read QQNode $PostParent
     * @property-read QQNode $Guid
     * @property-read QQNode $MenuOrder
     * @property-read QQNode $PostType
     * @property-read QQNode $PostMimeType
     * @property-read QQNode $CommentCount
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpPosts extends QQNode {
		protected $strTableName = 'wp_posts';
		protected $strPrimaryKey = 'ID';
		protected $strClassName = 'WpPosts';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('ID', 'Id', 'Integer', $this);
				case 'PostAuthor':
					return new QQNode('post_author', 'PostAuthor', 'Integer', $this);
				case 'PostDate':
					return new QQNode('post_date', 'PostDate', 'DateTime', $this);
				case 'PostDateGmt':
					return new QQNode('post_date_gmt', 'PostDateGmt', 'DateTime', $this);
				case 'PostContent':
					return new QQNode('post_content', 'PostContent', 'Blob', $this);
				case 'PostTitle':
					return new QQNode('post_title', 'PostTitle', 'Blob', $this);
				case 'PostExcerpt':
					return new QQNode('post_excerpt', 'PostExcerpt', 'Blob', $this);
				case 'PostStatus':
					return new QQNode('post_status', 'PostStatus', 'VarChar', $this);
				case 'CommentStatus':
					return new QQNode('comment_status', 'CommentStatus', 'VarChar', $this);
				case 'PingStatus':
					return new QQNode('ping_status', 'PingStatus', 'VarChar', $this);
				case 'PostPassword':
					return new QQNode('post_password', 'PostPassword', 'VarChar', $this);
				case 'PostName':
					return new QQNode('post_name', 'PostName', 'VarChar', $this);
				case 'ToPing':
					return new QQNode('to_ping', 'ToPing', 'Blob', $this);
				case 'Pinged':
					return new QQNode('pinged', 'Pinged', 'Blob', $this);
				case 'PostModified':
					return new QQNode('post_modified', 'PostModified', 'DateTime', $this);
				case 'PostModifiedGmt':
					return new QQNode('post_modified_gmt', 'PostModifiedGmt', 'DateTime', $this);
				case 'PostContentFiltered':
					return new QQNode('post_content_filtered', 'PostContentFiltered', 'Blob', $this);
				case 'PostParent':
					return new QQNode('post_parent', 'PostParent', 'Integer', $this);
				case 'Guid':
					return new QQNode('guid', 'Guid', 'VarChar', $this);
				case 'MenuOrder':
					return new QQNode('menu_order', 'MenuOrder', 'Integer', $this);
				case 'PostType':
					return new QQNode('post_type', 'PostType', 'VarChar', $this);
				case 'PostMimeType':
					return new QQNode('post_mime_type', 'PostMimeType', 'VarChar', $this);
				case 'CommentCount':
					return new QQNode('comment_count', 'CommentCount', 'Integer', $this);

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
     * @property-read QQNode $PostAuthor
     * @property-read QQNode $PostDate
     * @property-read QQNode $PostDateGmt
     * @property-read QQNode $PostContent
     * @property-read QQNode $PostTitle
     * @property-read QQNode $PostExcerpt
     * @property-read QQNode $PostStatus
     * @property-read QQNode $CommentStatus
     * @property-read QQNode $PingStatus
     * @property-read QQNode $PostPassword
     * @property-read QQNode $PostName
     * @property-read QQNode $ToPing
     * @property-read QQNode $Pinged
     * @property-read QQNode $PostModified
     * @property-read QQNode $PostModifiedGmt
     * @property-read QQNode $PostContentFiltered
     * @property-read QQNode $PostParent
     * @property-read QQNode $Guid
     * @property-read QQNode $MenuOrder
     * @property-read QQNode $PostType
     * @property-read QQNode $PostMimeType
     * @property-read QQNode $CommentCount
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpPosts extends QQReverseReferenceNode {
		protected $strTableName = 'wp_posts';
		protected $strPrimaryKey = 'ID';
		protected $strClassName = 'WpPosts';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('ID', 'Id', 'integer', $this);
				case 'PostAuthor':
					return new QQNode('post_author', 'PostAuthor', 'integer', $this);
				case 'PostDate':
					return new QQNode('post_date', 'PostDate', 'QDateTime', $this);
				case 'PostDateGmt':
					return new QQNode('post_date_gmt', 'PostDateGmt', 'QDateTime', $this);
				case 'PostContent':
					return new QQNode('post_content', 'PostContent', 'string', $this);
				case 'PostTitle':
					return new QQNode('post_title', 'PostTitle', 'string', $this);
				case 'PostExcerpt':
					return new QQNode('post_excerpt', 'PostExcerpt', 'string', $this);
				case 'PostStatus':
					return new QQNode('post_status', 'PostStatus', 'string', $this);
				case 'CommentStatus':
					return new QQNode('comment_status', 'CommentStatus', 'string', $this);
				case 'PingStatus':
					return new QQNode('ping_status', 'PingStatus', 'string', $this);
				case 'PostPassword':
					return new QQNode('post_password', 'PostPassword', 'string', $this);
				case 'PostName':
					return new QQNode('post_name', 'PostName', 'string', $this);
				case 'ToPing':
					return new QQNode('to_ping', 'ToPing', 'string', $this);
				case 'Pinged':
					return new QQNode('pinged', 'Pinged', 'string', $this);
				case 'PostModified':
					return new QQNode('post_modified', 'PostModified', 'QDateTime', $this);
				case 'PostModifiedGmt':
					return new QQNode('post_modified_gmt', 'PostModifiedGmt', 'QDateTime', $this);
				case 'PostContentFiltered':
					return new QQNode('post_content_filtered', 'PostContentFiltered', 'string', $this);
				case 'PostParent':
					return new QQNode('post_parent', 'PostParent', 'integer', $this);
				case 'Guid':
					return new QQNode('guid', 'Guid', 'string', $this);
				case 'MenuOrder':
					return new QQNode('menu_order', 'MenuOrder', 'integer', $this);
				case 'PostType':
					return new QQNode('post_type', 'PostType', 'string', $this);
				case 'PostMimeType':
					return new QQNode('post_mime_type', 'PostMimeType', 'string', $this);
				case 'CommentCount':
					return new QQNode('comment_count', 'CommentCount', 'integer', $this);

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
