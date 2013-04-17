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
	 * @property WpUsers $PostAuthorObject the value for the WpUsers object referenced by intPostAuthor (Not Null)
	 * @property WpPosts $PostParentObject the value for the WpPosts object referenced by intPostParent (Not Null)
	 * @property-read WpComments $_WpCommentsAsCommentPost the value for the private _objWpCommentsAsCommentPost (Read-Only) if set due to an expansion on the wp_comments.comment_post_id reverse relationship
	 * @property-read WpComments[] $_WpCommentsAsCommentPostArray the value for the private _objWpCommentsAsCommentPostArray (Read-Only) if set due to an ExpandAsArray on the wp_comments.comment_post_id reverse relationship
	 * @property-read WpPostmeta $_WpPostmetaAsPost the value for the private _objWpPostmetaAsPost (Read-Only) if set due to an expansion on the wp_postmeta.post_id reverse relationship
	 * @property-read WpPostmeta[] $_WpPostmetaAsPostArray the value for the private _objWpPostmetaAsPostArray (Read-Only) if set due to an ExpandAsArray on the wp_postmeta.post_id reverse relationship
	 * @property-read WpPosts $_WpPostsAsPostParent the value for the private _objWpPostsAsPostParent (Read-Only) if set due to an expansion on the wp_posts.post_parent reverse relationship
	 * @property-read WpPosts[] $_WpPostsAsPostParentArray the value for the private _objWpPostsAsPostParentArray (Read-Only) if set due to an ExpandAsArray on the wp_posts.post_parent reverse relationship
	 * @property-read WpPvcDaily $_WpPvcDailyAsPostnum the value for the private _objWpPvcDailyAsPostnum (Read-Only) if set due to an expansion on the wp_pvc_daily.postnum reverse relationship
	 * @property-read WpPvcDaily[] $_WpPvcDailyAsPostnumArray the value for the private _objWpPvcDailyAsPostnumArray (Read-Only) if set due to an ExpandAsArray on the wp_pvc_daily.postnum reverse relationship
	 * @property-read WpPvcTotal $_WpPvcTotalAsPostnum the value for the private _objWpPvcTotalAsPostnum (Read-Only) if set due to an expansion on the wp_pvc_total.postnum reverse relationship
	 * @property-read WpPvcTotal[] $_WpPvcTotalAsPostnumArray the value for the private _objWpPvcTotalAsPostnumArray (Read-Only) if set due to an ExpandAsArray on the wp_pvc_total.postnum reverse relationship
	 * @property-read WpWtiLikePost $_WpWtiLikePostAsPost the value for the private _objWpWtiLikePostAsPost (Read-Only) if set due to an expansion on the wp_wti_like_post.post_id reverse relationship
	 * @property-read WpWtiLikePost[] $_WpWtiLikePostAsPostArray the value for the private _objWpWtiLikePostAsPostArray (Read-Only) if set due to an ExpandAsArray on the wp_wti_like_post.post_id reverse relationship
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
		 * Private member variable that stores a reference to a single WpCommentsAsCommentPost object
		 * (of type WpComments), if this WpPosts object was restored with
		 * an expansion on the wp_comments association table.
		 * @var WpComments _objWpCommentsAsCommentPost;
		 */
		private $_objWpCommentsAsCommentPost;

		/**
		 * Private member variable that stores a reference to an array of WpCommentsAsCommentPost objects
		 * (of type WpComments[]), if this WpPosts object was restored with
		 * an ExpandAsArray on the wp_comments association table.
		 * @var WpComments[] _objWpCommentsAsCommentPostArray;
		 */
		private $_objWpCommentsAsCommentPostArray = null;

		/**
		 * Private member variable that stores a reference to a single WpPostmetaAsPost object
		 * (of type WpPostmeta), if this WpPosts object was restored with
		 * an expansion on the wp_postmeta association table.
		 * @var WpPostmeta _objWpPostmetaAsPost;
		 */
		private $_objWpPostmetaAsPost;

		/**
		 * Private member variable that stores a reference to an array of WpPostmetaAsPost objects
		 * (of type WpPostmeta[]), if this WpPosts object was restored with
		 * an ExpandAsArray on the wp_postmeta association table.
		 * @var WpPostmeta[] _objWpPostmetaAsPostArray;
		 */
		private $_objWpPostmetaAsPostArray = null;

		/**
		 * Private member variable that stores a reference to a single WpPostsAsPostParent object
		 * (of type WpPosts), if this WpPosts object was restored with
		 * an expansion on the wp_posts association table.
		 * @var WpPosts _objWpPostsAsPostParent;
		 */
		private $_objWpPostsAsPostParent;

		/**
		 * Private member variable that stores a reference to an array of WpPostsAsPostParent objects
		 * (of type WpPosts[]), if this WpPosts object was restored with
		 * an ExpandAsArray on the wp_posts association table.
		 * @var WpPosts[] _objWpPostsAsPostParentArray;
		 */
		private $_objWpPostsAsPostParentArray = null;

		/**
		 * Private member variable that stores a reference to a single WpPvcDailyAsPostnum object
		 * (of type WpPvcDaily), if this WpPosts object was restored with
		 * an expansion on the wp_pvc_daily association table.
		 * @var WpPvcDaily _objWpPvcDailyAsPostnum;
		 */
		private $_objWpPvcDailyAsPostnum;

		/**
		 * Private member variable that stores a reference to an array of WpPvcDailyAsPostnum objects
		 * (of type WpPvcDaily[]), if this WpPosts object was restored with
		 * an ExpandAsArray on the wp_pvc_daily association table.
		 * @var WpPvcDaily[] _objWpPvcDailyAsPostnumArray;
		 */
		private $_objWpPvcDailyAsPostnumArray = null;

		/**
		 * Private member variable that stores a reference to a single WpPvcTotalAsPostnum object
		 * (of type WpPvcTotal), if this WpPosts object was restored with
		 * an expansion on the wp_pvc_total association table.
		 * @var WpPvcTotal _objWpPvcTotalAsPostnum;
		 */
		private $_objWpPvcTotalAsPostnum;

		/**
		 * Private member variable that stores a reference to an array of WpPvcTotalAsPostnum objects
		 * (of type WpPvcTotal[]), if this WpPosts object was restored with
		 * an ExpandAsArray on the wp_pvc_total association table.
		 * @var WpPvcTotal[] _objWpPvcTotalAsPostnumArray;
		 */
		private $_objWpPvcTotalAsPostnumArray = null;

		/**
		 * Private member variable that stores a reference to a single WpWtiLikePostAsPost object
		 * (of type WpWtiLikePost), if this WpPosts object was restored with
		 * an expansion on the wp_wti_like_post association table.
		 * @var WpWtiLikePost _objWpWtiLikePostAsPost;
		 */
		private $_objWpWtiLikePostAsPost;

		/**
		 * Private member variable that stores a reference to an array of WpWtiLikePostAsPost objects
		 * (of type WpWtiLikePost[]), if this WpPosts object was restored with
		 * an ExpandAsArray on the wp_wti_like_post association table.
		 * @var WpWtiLikePost[] _objWpWtiLikePostAsPostArray;
		 */
		private $_objWpWtiLikePostAsPostArray = null;

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
		 * in the database column wp_posts.post_author.
		 *
		 * NOTE: Always use the PostAuthorObject property getter to correctly retrieve this WpUsers object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpUsers objPostAuthorObject
		 */
		protected $objPostAuthorObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column wp_posts.post_parent.
		 *
		 * NOTE: Always use the PostParentObject property getter to correctly retrieve this WpPosts object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpPosts objPostParentObject
		 */
		protected $objPostParentObject;



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
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'wp_posts__';


						// Expanding reverse references: WpCommentsAsCommentPost
						$strAlias = $strAliasPrefix . 'wpcommentsascommentpost__comment_ID';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpCommentsAsCommentPostArray)
								$objPreviousItem->_objWpCommentsAsCommentPostArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpCommentsAsCommentPostArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpCommentsAsCommentPostArray;
								$objChildItem = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentpost__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpCommentsAsCommentPostArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpCommentsAsCommentPostArray[] = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentpost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpPostmetaAsPost
						$strAlias = $strAliasPrefix . 'wppostmetaaspost__meta_id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpPostmetaAsPostArray)
								$objPreviousItem->_objWpPostmetaAsPostArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpPostmetaAsPostArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpPostmetaAsPostArray;
								$objChildItem = WpPostmeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostmetaaspost__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpPostmetaAsPostArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpPostmetaAsPostArray[] = WpPostmeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostmetaaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpPostsAsPostParent
						$strAlias = $strAliasPrefix . 'wppostsaspostparent__ID';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpPostsAsPostParentArray)
								$objPreviousItem->_objWpPostsAsPostParentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpPostsAsPostParentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpPostsAsPostParentArray;
								$objChildItem = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostparent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpPostsAsPostParentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpPostsAsPostParentArray[] = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpPvcDailyAsPostnum
						$strAlias = $strAliasPrefix . 'wppvcdailyaspostnum__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpPvcDailyAsPostnumArray)
								$objPreviousItem->_objWpPvcDailyAsPostnumArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpPvcDailyAsPostnumArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpPvcDailyAsPostnumArray;
								$objChildItem = WpPvcDaily::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvcdailyaspostnum__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpPvcDailyAsPostnumArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpPvcDailyAsPostnumArray[] = WpPvcDaily::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvcdailyaspostnum__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpPvcTotalAsPostnum
						$strAlias = $strAliasPrefix . 'wppvctotalaspostnum__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpPvcTotalAsPostnumArray)
								$objPreviousItem->_objWpPvcTotalAsPostnumArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpPvcTotalAsPostnumArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpPvcTotalAsPostnumArray;
								$objChildItem = WpPvcTotal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvctotalaspostnum__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpPvcTotalAsPostnumArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpPvcTotalAsPostnumArray[] = WpPvcTotal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvctotalaspostnum__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: WpWtiLikePostAsPost
						$strAlias = $strAliasPrefix . 'wpwtilikepostaspost__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpWtiLikePostAsPostArray)
								$objPreviousItem->_objWpWtiLikePostAsPostArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpWtiLikePostAsPostArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpWtiLikePostAsPostArray;
								$objChildItem = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostaspost__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpWtiLikePostAsPostArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpWtiLikePostAsPostArray[] = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'wp_posts__') {
							$strAliasPrefix = null;
						}
					}
				}
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
					$prevCnt = count($objPreviousItem->_objWpCommentsAsCommentPostArray);
					$cnt = count($objToReturn->_objWpCommentsAsCommentPostArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpCommentsAsCommentPostArray, $objToReturn->_objWpCommentsAsCommentPostArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpPostmetaAsPostArray);
					$cnt = count($objToReturn->_objWpPostmetaAsPostArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpPostmetaAsPostArray, $objToReturn->_objWpPostmetaAsPostArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpPostsAsPostParentArray);
					$cnt = count($objToReturn->_objWpPostsAsPostParentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpPostsAsPostParentArray, $objToReturn->_objWpPostsAsPostParentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpPvcDailyAsPostnumArray);
					$cnt = count($objToReturn->_objWpPvcDailyAsPostnumArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpPvcDailyAsPostnumArray, $objToReturn->_objWpPvcDailyAsPostnumArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpPvcTotalAsPostnumArray);
					$cnt = count($objToReturn->_objWpPvcTotalAsPostnumArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpPvcTotalAsPostnumArray, $objToReturn->_objWpPvcTotalAsPostnumArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objWpWtiLikePostAsPostArray);
					$cnt = count($objToReturn->_objWpWtiLikePostAsPostArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpWtiLikePostAsPostArray, $objToReturn->_objWpWtiLikePostAsPostArray)) {
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

			// Check for PostAuthorObject Early Binding
			$strAlias = $strAliasPrefix . 'post_author__ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPostAuthorObject = WpUsers::InstantiateDbRow($objDbRow, $strAliasPrefix . 'post_author__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PostParentObject Early Binding
			$strAlias = $strAliasPrefix . 'post_parent__ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPostParentObject = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'post_parent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for WpCommentsAsCommentPost Virtual Binding
			$strAlias = $strAliasPrefix . 'wpcommentsascommentpost__comment_ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpCommentsAsCommentPostArray)
				$objToReturn->_objWpCommentsAsCommentPostArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpCommentsAsCommentPostArray[] = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentpost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpCommentsAsCommentPost = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentpost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpPostmetaAsPost Virtual Binding
			$strAlias = $strAliasPrefix . 'wppostmetaaspost__meta_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpPostmetaAsPostArray)
				$objToReturn->_objWpPostmetaAsPostArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpPostmetaAsPostArray[] = WpPostmeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostmetaaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpPostmetaAsPost = WpPostmeta::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostmetaaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpPostsAsPostParent Virtual Binding
			$strAlias = $strAliasPrefix . 'wppostsaspostparent__ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpPostsAsPostParentArray)
				$objToReturn->_objWpPostsAsPostParentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpPostsAsPostParentArray[] = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpPostsAsPostParent = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppostsaspostparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpPvcDailyAsPostnum Virtual Binding
			$strAlias = $strAliasPrefix . 'wppvcdailyaspostnum__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpPvcDailyAsPostnumArray)
				$objToReturn->_objWpPvcDailyAsPostnumArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpPvcDailyAsPostnumArray[] = WpPvcDaily::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvcdailyaspostnum__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpPvcDailyAsPostnum = WpPvcDaily::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvcdailyaspostnum__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpPvcTotalAsPostnum Virtual Binding
			$strAlias = $strAliasPrefix . 'wppvctotalaspostnum__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpPvcTotalAsPostnumArray)
				$objToReturn->_objWpPvcTotalAsPostnumArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpPvcTotalAsPostnumArray[] = WpPvcTotal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvctotalaspostnum__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpPvcTotalAsPostnum = WpPvcTotal::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wppvctotalaspostnum__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for WpWtiLikePostAsPost Virtual Binding
			$strAlias = $strAliasPrefix . 'wpwtilikepostaspost__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpWtiLikePostAsPostArray)
				$objToReturn->_objWpWtiLikePostAsPostArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpWtiLikePostAsPostArray[] = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpWtiLikePostAsPost = WpWtiLikePost::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpwtilikepostaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

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
			$this->PostAuthor = $objReloaded->PostAuthor;
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
			$this->PostParent = $objReloaded->PostParent;
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
				case 'PostAuthorObject':
					/**
					 * Gets the value for the WpUsers object referenced by intPostAuthor (Not Null)
					 * @return WpUsers
					 */
					try {
						if ((!$this->objPostAuthorObject) && (!is_null($this->intPostAuthor)))
							$this->objPostAuthorObject = WpUsers::Load($this->intPostAuthor);
						return $this->objPostAuthorObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostParentObject':
					/**
					 * Gets the value for the WpPosts object referenced by intPostParent (Not Null)
					 * @return WpPosts
					 */
					try {
						if ((!$this->objPostParentObject) && (!is_null($this->intPostParent)))
							$this->objPostParentObject = WpPosts::Load($this->intPostParent);
						return $this->objPostParentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_WpCommentsAsCommentPost':
					/**
					 * Gets the value for the private _objWpCommentsAsCommentPost (Read-Only)
					 * if set due to an expansion on the wp_comments.comment_post_id reverse relationship
					 * @return WpComments
					 */
					return $this->_objWpCommentsAsCommentPost;

				case '_WpCommentsAsCommentPostArray':
					/**
					 * Gets the value for the private _objWpCommentsAsCommentPostArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_comments.comment_post_id reverse relationship
					 * @return WpComments[]
					 */
					return $this->_objWpCommentsAsCommentPostArray;

				case '_WpPostmetaAsPost':
					/**
					 * Gets the value for the private _objWpPostmetaAsPost (Read-Only)
					 * if set due to an expansion on the wp_postmeta.post_id reverse relationship
					 * @return WpPostmeta
					 */
					return $this->_objWpPostmetaAsPost;

				case '_WpPostmetaAsPostArray':
					/**
					 * Gets the value for the private _objWpPostmetaAsPostArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_postmeta.post_id reverse relationship
					 * @return WpPostmeta[]
					 */
					return $this->_objWpPostmetaAsPostArray;

				case '_WpPostsAsPostParent':
					/**
					 * Gets the value for the private _objWpPostsAsPostParent (Read-Only)
					 * if set due to an expansion on the wp_posts.post_parent reverse relationship
					 * @return WpPosts
					 */
					return $this->_objWpPostsAsPostParent;

				case '_WpPostsAsPostParentArray':
					/**
					 * Gets the value for the private _objWpPostsAsPostParentArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_posts.post_parent reverse relationship
					 * @return WpPosts[]
					 */
					return $this->_objWpPostsAsPostParentArray;

				case '_WpPvcDailyAsPostnum':
					/**
					 * Gets the value for the private _objWpPvcDailyAsPostnum (Read-Only)
					 * if set due to an expansion on the wp_pvc_daily.postnum reverse relationship
					 * @return WpPvcDaily
					 */
					return $this->_objWpPvcDailyAsPostnum;

				case '_WpPvcDailyAsPostnumArray':
					/**
					 * Gets the value for the private _objWpPvcDailyAsPostnumArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_pvc_daily.postnum reverse relationship
					 * @return WpPvcDaily[]
					 */
					return $this->_objWpPvcDailyAsPostnumArray;

				case '_WpPvcTotalAsPostnum':
					/**
					 * Gets the value for the private _objWpPvcTotalAsPostnum (Read-Only)
					 * if set due to an expansion on the wp_pvc_total.postnum reverse relationship
					 * @return WpPvcTotal
					 */
					return $this->_objWpPvcTotalAsPostnum;

				case '_WpPvcTotalAsPostnumArray':
					/**
					 * Gets the value for the private _objWpPvcTotalAsPostnumArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_pvc_total.postnum reverse relationship
					 * @return WpPvcTotal[]
					 */
					return $this->_objWpPvcTotalAsPostnumArray;

				case '_WpWtiLikePostAsPost':
					/**
					 * Gets the value for the private _objWpWtiLikePostAsPost (Read-Only)
					 * if set due to an expansion on the wp_wti_like_post.post_id reverse relationship
					 * @return WpWtiLikePost
					 */
					return $this->_objWpWtiLikePostAsPost;

				case '_WpWtiLikePostAsPostArray':
					/**
					 * Gets the value for the private _objWpWtiLikePostAsPostArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_wti_like_post.post_id reverse relationship
					 * @return WpWtiLikePost[]
					 */
					return $this->_objWpWtiLikePostAsPostArray;


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
						$this->objPostAuthorObject = null;
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
						$this->objPostParentObject = null;
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
				case 'PostAuthorObject':
					/**
					 * Sets the value for the WpUsers object referenced by intPostAuthor (Not Null)
					 * @param WpUsers $mixValue
					 * @return WpUsers
					 */
					if (is_null($mixValue)) {
						$this->intPostAuthor = null;
						$this->objPostAuthorObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a WpUsers object
						try {
							$mixValue = QType::Cast($mixValue, 'WpUsers');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED WpUsers object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved PostAuthorObject for this WpPosts');

						// Update Local Member Variables
						$this->objPostAuthorObject = $mixValue;
						$this->intPostAuthor = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PostParentObject':
					/**
					 * Sets the value for the WpPosts object referenced by intPostParent (Not Null)
					 * @param WpPosts $mixValue
					 * @return WpPosts
					 */
					if (is_null($mixValue)) {
						$this->intPostParent = null;
						$this->objPostParentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a WpPosts object
						try {
							$mixValue = QType::Cast($mixValue, 'WpPosts');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED WpPosts object
						if (is_null($mixValue->Id))
							throw new QCallerException('Unable to set an unsaved PostParentObject for this WpPosts');

						// Update Local Member Variables
						$this->objPostParentObject = $mixValue;
						$this->intPostParent = $mixValue->Id;

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



		// Related Objects' Methods for WpCommentsAsCommentPost
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpCommentsesAsCommentPost as an array of WpComments objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public function GetWpCommentsAsCommentPostArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpComments::LoadArrayByCommentPostID($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpCommentsesAsCommentPost
		 * @return int
		*/
		public function CountWpCommentsesAsCommentPost() {
			if ((is_null($this->intId)))
				return 0;

			return WpComments::CountByCommentPostID($this->intId);
		}

		/**
		 * Associates a WpCommentsAsCommentPost
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function AssociateWpCommentsAsCommentPost(WpComments $objWpComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpCommentsAsCommentPost on this unsaved WpPosts.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpCommentsAsCommentPost on this WpPosts with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`comment_post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' 
			');
		}

		/**
		 * Unassociates a WpCommentsAsCommentPost
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function UnassociateWpCommentsAsCommentPost(WpComments $objWpComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentPost on this unsaved WpPosts.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentPost on this WpPosts with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`comment_post_id` = null
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' AND
					`comment_post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpCommentsesAsCommentPost
		 * @return void
		*/
		public function UnassociateAllWpCommentsesAsCommentPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentPost on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`comment_post_id` = null
				WHERE
					`comment_post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpCommentsAsCommentPost
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function DeleteAssociatedWpCommentsAsCommentPost(WpComments $objWpComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentPost on this unsaved WpPosts.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentPost on this WpPosts with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' AND
					`comment_post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpCommentsesAsCommentPost
		 * @return void
		*/
		public function DeleteAllWpCommentsesAsCommentPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentPost on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`
				WHERE
					`comment_post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpPostmetaAsPost
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpPostmetasAsPost as an array of WpPostmeta objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPostmeta[]
		*/
		public function GetWpPostmetaAsPostArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpPostmeta::LoadArrayByPostId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpPostmetasAsPost
		 * @return int
		*/
		public function CountWpPostmetasAsPost() {
			if ((is_null($this->intId)))
				return 0;

			return WpPostmeta::CountByPostId($this->intId);
		}

		/**
		 * Associates a WpPostmetaAsPost
		 * @param WpPostmeta $objWpPostmeta
		 * @return void
		*/
		public function AssociateWpPostmetaAsPost(WpPostmeta $objWpPostmeta) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPostmetaAsPost on this unsaved WpPosts.');
			if ((is_null($objWpPostmeta->MetaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPostmetaAsPost on this WpPosts with an unsaved WpPostmeta.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_postmeta`
				SET
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`meta_id` = ' . $objDatabase->SqlVariable($objWpPostmeta->MetaId) . ' 
			');
		}

		/**
		 * Unassociates a WpPostmetaAsPost
		 * @param WpPostmeta $objWpPostmeta
		 * @return void
		*/
		public function UnassociateWpPostmetaAsPost(WpPostmeta $objWpPostmeta) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostmetaAsPost on this unsaved WpPosts.');
			if ((is_null($objWpPostmeta->MetaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostmetaAsPost on this WpPosts with an unsaved WpPostmeta.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_postmeta`
				SET
					`post_id` = null
				WHERE
					`meta_id` = ' . $objDatabase->SqlVariable($objWpPostmeta->MetaId) . ' AND
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpPostmetasAsPost
		 * @return void
		*/
		public function UnassociateAllWpPostmetasAsPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostmetaAsPost on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_postmeta`
				SET
					`post_id` = null
				WHERE
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpPostmetaAsPost
		 * @param WpPostmeta $objWpPostmeta
		 * @return void
		*/
		public function DeleteAssociatedWpPostmetaAsPost(WpPostmeta $objWpPostmeta) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostmetaAsPost on this unsaved WpPosts.');
			if ((is_null($objWpPostmeta->MetaId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostmetaAsPost on this WpPosts with an unsaved WpPostmeta.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_postmeta`
				WHERE
					`meta_id` = ' . $objDatabase->SqlVariable($objWpPostmeta->MetaId) . ' AND
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpPostmetasAsPost
		 * @return void
		*/
		public function DeleteAllWpPostmetasAsPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostmetaAsPost on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_postmeta`
				WHERE
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpPostsAsPostParent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpPostsesAsPostParent as an array of WpPosts objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPosts[]
		*/
		public function GetWpPostsAsPostParentArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpPosts::LoadArrayByPostParent($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpPostsesAsPostParent
		 * @return int
		*/
		public function CountWpPostsesAsPostParent() {
			if ((is_null($this->intId)))
				return 0;

			return WpPosts::CountByPostParent($this->intId);
		}

		/**
		 * Associates a WpPostsAsPostParent
		 * @param WpPosts $objWpPosts
		 * @return void
		*/
		public function AssociateWpPostsAsPostParent(WpPosts $objWpPosts) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPostsAsPostParent on this unsaved WpPosts.');
			if ((is_null($objWpPosts->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPostsAsPostParent on this WpPosts with an unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_posts`
				SET
					`post_parent` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($objWpPosts->Id) . ' 
			');
		}

		/**
		 * Unassociates a WpPostsAsPostParent
		 * @param WpPosts $objWpPosts
		 * @return void
		*/
		public function UnassociateWpPostsAsPostParent(WpPosts $objWpPosts) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostParent on this unsaved WpPosts.');
			if ((is_null($objWpPosts->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostParent on this WpPosts with an unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_posts`
				SET
					`post_parent` = null
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($objWpPosts->Id) . ' AND
					`post_parent` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpPostsesAsPostParent
		 * @return void
		*/
		public function UnassociateAllWpPostsesAsPostParent() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostParent on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_posts`
				SET
					`post_parent` = null
				WHERE
					`post_parent` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpPostsAsPostParent
		 * @param WpPosts $objWpPosts
		 * @return void
		*/
		public function DeleteAssociatedWpPostsAsPostParent(WpPosts $objWpPosts) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostParent on this unsaved WpPosts.');
			if ((is_null($objWpPosts->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostParent on this WpPosts with an unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_posts`
				WHERE
					`ID` = ' . $objDatabase->SqlVariable($objWpPosts->Id) . ' AND
					`post_parent` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpPostsesAsPostParent
		 * @return void
		*/
		public function DeleteAllWpPostsesAsPostParent() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPostsAsPostParent on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_posts`
				WHERE
					`post_parent` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpPvcDailyAsPostnum
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpPvcDailiesAsPostnum as an array of WpPvcDaily objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPvcDaily[]
		*/
		public function GetWpPvcDailyAsPostnumArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpPvcDaily::LoadArrayByPostnum($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpPvcDailiesAsPostnum
		 * @return int
		*/
		public function CountWpPvcDailiesAsPostnum() {
			if ((is_null($this->intId)))
				return 0;

			return WpPvcDaily::CountByPostnum($this->intId);
		}

		/**
		 * Associates a WpPvcDailyAsPostnum
		 * @param WpPvcDaily $objWpPvcDaily
		 * @return void
		*/
		public function AssociateWpPvcDailyAsPostnum(WpPvcDaily $objWpPvcDaily) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPvcDailyAsPostnum on this unsaved WpPosts.');
			if ((is_null($objWpPvcDaily->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPvcDailyAsPostnum on this WpPosts with an unsaved WpPvcDaily.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pvc_daily`
				SET
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpPvcDaily->Id) . ' 
			');
		}

		/**
		 * Unassociates a WpPvcDailyAsPostnum
		 * @param WpPvcDaily $objWpPvcDaily
		 * @return void
		*/
		public function UnassociateWpPvcDailyAsPostnum(WpPvcDaily $objWpPvcDaily) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcDailyAsPostnum on this unsaved WpPosts.');
			if ((is_null($objWpPvcDaily->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcDailyAsPostnum on this WpPosts with an unsaved WpPvcDaily.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pvc_daily`
				SET
					`postnum` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpPvcDaily->Id) . ' AND
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpPvcDailiesAsPostnum
		 * @return void
		*/
		public function UnassociateAllWpPvcDailiesAsPostnum() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcDailyAsPostnum on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pvc_daily`
				SET
					`postnum` = null
				WHERE
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpPvcDailyAsPostnum
		 * @param WpPvcDaily $objWpPvcDaily
		 * @return void
		*/
		public function DeleteAssociatedWpPvcDailyAsPostnum(WpPvcDaily $objWpPvcDaily) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcDailyAsPostnum on this unsaved WpPosts.');
			if ((is_null($objWpPvcDaily->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcDailyAsPostnum on this WpPosts with an unsaved WpPvcDaily.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pvc_daily`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpPvcDaily->Id) . ' AND
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpPvcDailiesAsPostnum
		 * @return void
		*/
		public function DeleteAllWpPvcDailiesAsPostnum() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcDailyAsPostnum on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pvc_daily`
				WHERE
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpPvcTotalAsPostnum
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpPvcTotalsAsPostnum as an array of WpPvcTotal objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpPvcTotal[]
		*/
		public function GetWpPvcTotalAsPostnumArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpPvcTotal::LoadArrayByPostnum($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpPvcTotalsAsPostnum
		 * @return int
		*/
		public function CountWpPvcTotalsAsPostnum() {
			if ((is_null($this->intId)))
				return 0;

			return WpPvcTotal::CountByPostnum($this->intId);
		}

		/**
		 * Associates a WpPvcTotalAsPostnum
		 * @param WpPvcTotal $objWpPvcTotal
		 * @return void
		*/
		public function AssociateWpPvcTotalAsPostnum(WpPvcTotal $objWpPvcTotal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPvcTotalAsPostnum on this unsaved WpPosts.');
			if ((is_null($objWpPvcTotal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpPvcTotalAsPostnum on this WpPosts with an unsaved WpPvcTotal.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pvc_total`
				SET
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpPvcTotal->Id) . ' 
			');
		}

		/**
		 * Unassociates a WpPvcTotalAsPostnum
		 * @param WpPvcTotal $objWpPvcTotal
		 * @return void
		*/
		public function UnassociateWpPvcTotalAsPostnum(WpPvcTotal $objWpPvcTotal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcTotalAsPostnum on this unsaved WpPosts.');
			if ((is_null($objWpPvcTotal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcTotalAsPostnum on this WpPosts with an unsaved WpPvcTotal.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pvc_total`
				SET
					`postnum` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpPvcTotal->Id) . ' AND
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpPvcTotalsAsPostnum
		 * @return void
		*/
		public function UnassociateAllWpPvcTotalsAsPostnum() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcTotalAsPostnum on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_pvc_total`
				SET
					`postnum` = null
				WHERE
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpPvcTotalAsPostnum
		 * @param WpPvcTotal $objWpPvcTotal
		 * @return void
		*/
		public function DeleteAssociatedWpPvcTotalAsPostnum(WpPvcTotal $objWpPvcTotal) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcTotalAsPostnum on this unsaved WpPosts.');
			if ((is_null($objWpPvcTotal->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcTotalAsPostnum on this WpPosts with an unsaved WpPvcTotal.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pvc_total`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpPvcTotal->Id) . ' AND
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpPvcTotalsAsPostnum
		 * @return void
		*/
		public function DeleteAllWpPvcTotalsAsPostnum() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpPvcTotalAsPostnum on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_pvc_total`
				WHERE
					`postnum` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for WpWtiLikePostAsPost
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpWtiLikePostsAsPost as an array of WpWtiLikePost objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWtiLikePost[]
		*/
		public function GetWpWtiLikePostAsPostArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return WpWtiLikePost::LoadArrayByPostId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpWtiLikePostsAsPost
		 * @return int
		*/
		public function CountWpWtiLikePostsAsPost() {
			if ((is_null($this->intId)))
				return 0;

			return WpWtiLikePost::CountByPostId($this->intId);
		}

		/**
		 * Associates a WpWtiLikePostAsPost
		 * @param WpWtiLikePost $objWpWtiLikePost
		 * @return void
		*/
		public function AssociateWpWtiLikePostAsPost(WpWtiLikePost $objWpWtiLikePost) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpWtiLikePostAsPost on this unsaved WpPosts.');
			if ((is_null($objWpWtiLikePost->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpWtiLikePostAsPost on this WpPosts with an unsaved WpWtiLikePost.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_wti_like_post`
				SET
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpWtiLikePost->Id) . ' 
			');
		}

		/**
		 * Unassociates a WpWtiLikePostAsPost
		 * @param WpWtiLikePost $objWpWtiLikePost
		 * @return void
		*/
		public function UnassociateWpWtiLikePostAsPost(WpWtiLikePost $objWpWtiLikePost) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsPost on this unsaved WpPosts.');
			if ((is_null($objWpWtiLikePost->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsPost on this WpPosts with an unsaved WpWtiLikePost.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_wti_like_post`
				SET
					`post_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpWtiLikePost->Id) . ' AND
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all WpWtiLikePostsAsPost
		 * @return void
		*/
		public function UnassociateAllWpWtiLikePostsAsPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsPost on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_wti_like_post`
				SET
					`post_id` = null
				WHERE
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated WpWtiLikePostAsPost
		 * @param WpWtiLikePost $objWpWtiLikePost
		 * @return void
		*/
		public function DeleteAssociatedWpWtiLikePostAsPost(WpWtiLikePost $objWpWtiLikePost) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsPost on this unsaved WpPosts.');
			if ((is_null($objWpWtiLikePost->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsPost on this WpPosts with an unsaved WpWtiLikePost.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wti_like_post`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objWpWtiLikePost->Id) . ' AND
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated WpWtiLikePostsAsPost
		 * @return void
		*/
		public function DeleteAllWpWtiLikePostsAsPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpWtiLikePostAsPost on this unsaved WpPosts.');

			// Get the Database Object for this Class
			$objDatabase = WpPosts::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wti_like_post`
				WHERE
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
			$strToReturn .= '<element name="PostAuthorObject" type="xsd1:WpUsers"/>';
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
			$strToReturn .= '<element name="PostParentObject" type="xsd1:WpPosts"/>';
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
				WpUsers::AlterSoapComplexTypeArray($strComplexTypeArray);
				WpPosts::AlterSoapComplexTypeArray($strComplexTypeArray);
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
			if ((property_exists($objSoapObject, 'PostAuthorObject')) &&
				($objSoapObject->PostAuthorObject))
				$objToReturn->PostAuthorObject = WpUsers::GetObjectFromSoapObject($objSoapObject->PostAuthorObject);
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
			if ((property_exists($objSoapObject, 'PostParentObject')) &&
				($objSoapObject->PostParentObject))
				$objToReturn->PostParentObject = WpPosts::GetObjectFromSoapObject($objSoapObject->PostParentObject);
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
			if ($objObject->objPostAuthorObject)
				$objObject->objPostAuthorObject = WpUsers::GetSoapObjectFromObject($objObject->objPostAuthorObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPostAuthor = null;
			if ($objObject->dttPostDate)
				$objObject->dttPostDate = $objObject->dttPostDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPostDateGmt)
				$objObject->dttPostDateGmt = $objObject->dttPostDateGmt->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPostModified)
				$objObject->dttPostModified = $objObject->dttPostModified->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPostModifiedGmt)
				$objObject->dttPostModifiedGmt = $objObject->dttPostModifiedGmt->qFormat(QDateTime::FormatSoap);
			if ($objObject->objPostParentObject)
				$objObject->objPostParentObject = WpPosts::GetSoapObjectFromObject($objObject->objPostParentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPostParent = null;
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
     * @property-read QQNodeWpUsers $PostAuthorObject
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
     * @property-read QQNodeWpPosts $PostParentObject
     * @property-read QQNode $Guid
     * @property-read QQNode $MenuOrder
     * @property-read QQNode $PostType
     * @property-read QQNode $PostMimeType
     * @property-read QQNode $CommentCount
     *
     *
     * @property-read QQReverseReferenceNodeWpComments $WpCommentsAsCommentPost
     * @property-read QQReverseReferenceNodeWpPostmeta $WpPostmetaAsPost
     * @property-read QQReverseReferenceNodeWpPosts $WpPostsAsPostParent
     * @property-read QQReverseReferenceNodeWpPvcDaily $WpPvcDailyAsPostnum
     * @property-read QQReverseReferenceNodeWpPvcTotal $WpPvcTotalAsPostnum
     * @property-read QQReverseReferenceNodeWpWtiLikePost $WpWtiLikePostAsPost

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
				case 'PostAuthorObject':
					return new QQNodeWpUsers('post_author', 'PostAuthorObject', 'Integer', $this);
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
				case 'PostParentObject':
					return new QQNodeWpPosts('post_parent', 'PostParentObject', 'Integer', $this);
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
				case 'WpCommentsAsCommentPost':
					return new QQReverseReferenceNodeWpComments($this, 'wpcommentsascommentpost', 'reverse_reference', 'comment_post_id');
				case 'WpPostmetaAsPost':
					return new QQReverseReferenceNodeWpPostmeta($this, 'wppostmetaaspost', 'reverse_reference', 'post_id');
				case 'WpPostsAsPostParent':
					return new QQReverseReferenceNodeWpPosts($this, 'wppostsaspostparent', 'reverse_reference', 'post_parent');
				case 'WpPvcDailyAsPostnum':
					return new QQReverseReferenceNodeWpPvcDaily($this, 'wppvcdailyaspostnum', 'reverse_reference', 'postnum');
				case 'WpPvcTotalAsPostnum':
					return new QQReverseReferenceNodeWpPvcTotal($this, 'wppvctotalaspostnum', 'reverse_reference', 'postnum');
				case 'WpWtiLikePostAsPost':
					return new QQReverseReferenceNodeWpWtiLikePost($this, 'wpwtilikepostaspost', 'reverse_reference', 'post_id');

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
     * @property-read QQNodeWpUsers $PostAuthorObject
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
     * @property-read QQNodeWpPosts $PostParentObject
     * @property-read QQNode $Guid
     * @property-read QQNode $MenuOrder
     * @property-read QQNode $PostType
     * @property-read QQNode $PostMimeType
     * @property-read QQNode $CommentCount
     *
     *
     * @property-read QQReverseReferenceNodeWpComments $WpCommentsAsCommentPost
     * @property-read QQReverseReferenceNodeWpPostmeta $WpPostmetaAsPost
     * @property-read QQReverseReferenceNodeWpPosts $WpPostsAsPostParent
     * @property-read QQReverseReferenceNodeWpPvcDaily $WpPvcDailyAsPostnum
     * @property-read QQReverseReferenceNodeWpPvcTotal $WpPvcTotalAsPostnum
     * @property-read QQReverseReferenceNodeWpWtiLikePost $WpWtiLikePostAsPost

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
				case 'PostAuthorObject':
					return new QQNodeWpUsers('post_author', 'PostAuthorObject', 'integer', $this);
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
				case 'PostParentObject':
					return new QQNodeWpPosts('post_parent', 'PostParentObject', 'integer', $this);
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
				case 'WpCommentsAsCommentPost':
					return new QQReverseReferenceNodeWpComments($this, 'wpcommentsascommentpost', 'reverse_reference', 'comment_post_id');
				case 'WpPostmetaAsPost':
					return new QQReverseReferenceNodeWpPostmeta($this, 'wppostmetaaspost', 'reverse_reference', 'post_id');
				case 'WpPostsAsPostParent':
					return new QQReverseReferenceNodeWpPosts($this, 'wppostsaspostparent', 'reverse_reference', 'post_parent');
				case 'WpPvcDailyAsPostnum':
					return new QQReverseReferenceNodeWpPvcDaily($this, 'wppvcdailyaspostnum', 'reverse_reference', 'postnum');
				case 'WpPvcTotalAsPostnum':
					return new QQReverseReferenceNodeWpPvcTotal($this, 'wppvctotalaspostnum', 'reverse_reference', 'postnum');
				case 'WpWtiLikePostAsPost':
					return new QQReverseReferenceNodeWpWtiLikePost($this, 'wpwtilikepostaspost', 'reverse_reference', 'post_id');

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
