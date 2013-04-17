<?php
	/**
	 * The abstract WpCommentsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpComments subclass which
	 * extends this WpCommentsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpComments class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $CommentID the value for intCommentID (Read-Only PK)
	 * @property integer $CommentPostID the value for intCommentPostID (Not Null)
	 * @property string $CommentAuthor the value for strCommentAuthor (Not Null)
	 * @property string $CommentAuthorEmail the value for strCommentAuthorEmail (Not Null)
	 * @property string $CommentAuthorUrl the value for strCommentAuthorUrl (Not Null)
	 * @property string $CommentAuthorIP the value for strCommentAuthorIP (Not Null)
	 * @property QDateTime $CommentDate the value for dttCommentDate (Not Null)
	 * @property QDateTime $CommentDateGmt the value for dttCommentDateGmt (Not Null)
	 * @property string $CommentContent the value for strCommentContent (Not Null)
	 * @property integer $CommentKarma the value for intCommentKarma (Not Null)
	 * @property string $CommentApproved the value for strCommentApproved (Not Null)
	 * @property string $CommentAgent the value for strCommentAgent (Not Null)
	 * @property string $CommentType the value for strCommentType (Not Null)
	 * @property integer $CommentParent the value for intCommentParent (Not Null)
	 * @property integer $UserId the value for intUserId (Not Null)
	 * @property WpPosts $CommentPostIDObject the value for the WpPosts object referenced by intCommentPostID (Not Null)
	 * @property WpComments $CommentParentObject the value for the WpComments object referenced by intCommentParent (Not Null)
	 * @property WpUsers $User the value for the WpUsers object referenced by intUserId (Not Null)
	 * @property-read WpComments $_WpCommentsAsCommentParent the value for the private _objWpCommentsAsCommentParent (Read-Only) if set due to an expansion on the wp_comments.comment_parent reverse relationship
	 * @property-read WpComments[] $_WpCommentsAsCommentParentArray the value for the private _objWpCommentsAsCommentParentArray (Read-Only) if set due to an ExpandAsArray on the wp_comments.comment_parent reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpCommentsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_comments.comment_ID
		 * @var integer intCommentID
		 */
		protected $intCommentID;
		const CommentIDDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_post_ID
		 * @var integer intCommentPostID
		 */
		protected $intCommentPostID;
		const CommentPostIDDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_author
		 * @var string strCommentAuthor
		 */
		protected $strCommentAuthor;
		const CommentAuthorDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_author_email
		 * @var string strCommentAuthorEmail
		 */
		protected $strCommentAuthorEmail;
		const CommentAuthorEmailMaxLength = 100;
		const CommentAuthorEmailDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_author_url
		 * @var string strCommentAuthorUrl
		 */
		protected $strCommentAuthorUrl;
		const CommentAuthorUrlMaxLength = 200;
		const CommentAuthorUrlDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_author_IP
		 * @var string strCommentAuthorIP
		 */
		protected $strCommentAuthorIP;
		const CommentAuthorIPMaxLength = 100;
		const CommentAuthorIPDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_date
		 * @var QDateTime dttCommentDate
		 */
		protected $dttCommentDate;
		const CommentDateDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_date_gmt
		 * @var QDateTime dttCommentDateGmt
		 */
		protected $dttCommentDateGmt;
		const CommentDateGmtDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_content
		 * @var string strCommentContent
		 */
		protected $strCommentContent;
		const CommentContentDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_karma
		 * @var integer intCommentKarma
		 */
		protected $intCommentKarma;
		const CommentKarmaDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_approved
		 * @var string strCommentApproved
		 */
		protected $strCommentApproved;
		const CommentApprovedMaxLength = 20;
		const CommentApprovedDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_agent
		 * @var string strCommentAgent
		 */
		protected $strCommentAgent;
		const CommentAgentMaxLength = 255;
		const CommentAgentDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_type
		 * @var string strCommentType
		 */
		protected $strCommentType;
		const CommentTypeMaxLength = 20;
		const CommentTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.comment_parent
		 * @var integer intCommentParent
		 */
		protected $intCommentParent;
		const CommentParentDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_comments.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Private member variable that stores a reference to a single WpCommentsAsCommentParent object
		 * (of type WpComments), if this WpComments object was restored with
		 * an expansion on the wp_comments association table.
		 * @var WpComments _objWpCommentsAsCommentParent;
		 */
		private $_objWpCommentsAsCommentParent;

		/**
		 * Private member variable that stores a reference to an array of WpCommentsAsCommentParent objects
		 * (of type WpComments[]), if this WpComments object was restored with
		 * an ExpandAsArray on the wp_comments association table.
		 * @var WpComments[] _objWpCommentsAsCommentParentArray;
		 */
		private $_objWpCommentsAsCommentParentArray = null;

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
		 * in the database column wp_comments.comment_post_ID.
		 *
		 * NOTE: Always use the CommentPostIDObject property getter to correctly retrieve this WpPosts object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpPosts objCommentPostIDObject
		 */
		protected $objCommentPostIDObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column wp_comments.comment_parent.
		 *
		 * NOTE: Always use the CommentParentObject property getter to correctly retrieve this WpComments object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpComments objCommentParentObject
		 */
		protected $objCommentParentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column wp_comments.user_id.
		 *
		 * NOTE: Always use the User property getter to correctly retrieve this WpUsers object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var WpUsers objUser
		 */
		protected $objUser;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intCommentID = WpComments::CommentIDDefault;
			$this->intCommentPostID = WpComments::CommentPostIDDefault;
			$this->strCommentAuthor = WpComments::CommentAuthorDefault;
			$this->strCommentAuthorEmail = WpComments::CommentAuthorEmailDefault;
			$this->strCommentAuthorUrl = WpComments::CommentAuthorUrlDefault;
			$this->strCommentAuthorIP = WpComments::CommentAuthorIPDefault;
			$this->dttCommentDate = (WpComments::CommentDateDefault === null)?null:new QDateTime(WpComments::CommentDateDefault);
			$this->dttCommentDateGmt = (WpComments::CommentDateGmtDefault === null)?null:new QDateTime(WpComments::CommentDateGmtDefault);
			$this->strCommentContent = WpComments::CommentContentDefault;
			$this->intCommentKarma = WpComments::CommentKarmaDefault;
			$this->strCommentApproved = WpComments::CommentApprovedDefault;
			$this->strCommentAgent = WpComments::CommentAgentDefault;
			$this->strCommentType = WpComments::CommentTypeDefault;
			$this->intCommentParent = WpComments::CommentParentDefault;
			$this->intUserId = WpComments::UserIdDefault;
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
		 * Load a WpComments from PK Info
		 * @param integer $intCommentID
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments
		 */
		public static function Load($intCommentID, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpComments', $intCommentID);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpComments::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpComments()->CommentID, $intCommentID)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpCommentses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpComments::QueryArray to perform the LoadAll query
			try {
				return WpComments::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpCommentses
		 * @return int
		 */
		public static function CountAll() {
			// Call WpComments::QueryCount to perform the CountAll query
			return WpComments::QueryCount(QQ::All());
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
			$objDatabase = WpComments::GetDatabase();

			// Create/Build out the QueryBuilder object with WpComments-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_comments');

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
				WpComments::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_comments');

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
		 * Static Qcubed Query method to query for a single WpComments object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpComments the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpComments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpComments object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpComments::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpComments::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpComments objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpComments[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpComments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpComments::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpComments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpComments objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpComments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpComments::GetDatabase();

			$strQuery = WpComments::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wpcomments', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpComments::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpComments
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_comments';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'comment_ID', $strAliasPrefix . 'comment_ID');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'comment_ID', $strAliasPrefix . 'comment_ID');
			    $objBuilder->AddSelectItem($strTableName, 'comment_post_ID', $strAliasPrefix . 'comment_post_ID');
			    $objBuilder->AddSelectItem($strTableName, 'comment_author', $strAliasPrefix . 'comment_author');
			    $objBuilder->AddSelectItem($strTableName, 'comment_author_email', $strAliasPrefix . 'comment_author_email');
			    $objBuilder->AddSelectItem($strTableName, 'comment_author_url', $strAliasPrefix . 'comment_author_url');
			    $objBuilder->AddSelectItem($strTableName, 'comment_author_IP', $strAliasPrefix . 'comment_author_IP');
			    $objBuilder->AddSelectItem($strTableName, 'comment_date', $strAliasPrefix . 'comment_date');
			    $objBuilder->AddSelectItem($strTableName, 'comment_date_gmt', $strAliasPrefix . 'comment_date_gmt');
			    $objBuilder->AddSelectItem($strTableName, 'comment_content', $strAliasPrefix . 'comment_content');
			    $objBuilder->AddSelectItem($strTableName, 'comment_karma', $strAliasPrefix . 'comment_karma');
			    $objBuilder->AddSelectItem($strTableName, 'comment_approved', $strAliasPrefix . 'comment_approved');
			    $objBuilder->AddSelectItem($strTableName, 'comment_agent', $strAliasPrefix . 'comment_agent');
			    $objBuilder->AddSelectItem($strTableName, 'comment_type', $strAliasPrefix . 'comment_type');
			    $objBuilder->AddSelectItem($strTableName, 'comment_parent', $strAliasPrefix . 'comment_parent');
			    $objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpComments from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpComments::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpComments
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'comment_ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intCommentID == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'wp_comments__';


						// Expanding reverse references: WpCommentsAsCommentParent
						$strAlias = $strAliasPrefix . 'wpcommentsascommentparent__comment_ID';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objWpCommentsAsCommentParentArray)
								$objPreviousItem->_objWpCommentsAsCommentParentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objWpCommentsAsCommentParentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objWpCommentsAsCommentParentArray;
								$objChildItem = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentparent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objWpCommentsAsCommentParentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objWpCommentsAsCommentParentArray[] = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'wp_comments__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the WpComments object
			$objToReturn = new WpComments();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'comment_ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCommentID = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'comment_post_ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCommentPostID = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'comment_author';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentAuthor = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'comment_author_email';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentAuthorEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_author_url';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentAuthorUrl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_author_IP';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentAuthorIP = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttCommentDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'comment_date_gmt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttCommentDateGmt = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'comment_content';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentContent = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'comment_karma';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCommentKarma = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'comment_approved';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentApproved = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_agent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentAgent = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommentType = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comment_parent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCommentParent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->CommentID != $objPreviousItem->CommentID) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objWpCommentsAsCommentParentArray);
					$cnt = count($objToReturn->_objWpCommentsAsCommentParentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objWpCommentsAsCommentParentArray, $objToReturn->_objWpCommentsAsCommentParentArray)) {
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
				$strAliasPrefix = 'wp_comments__';

			// Check for CommentPostIDObject Early Binding
			$strAlias = $strAliasPrefix . 'comment_post_ID__ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCommentPostIDObject = WpPosts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comment_post_ID__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CommentParentObject Early Binding
			$strAlias = $strAliasPrefix . 'comment_parent__comment_ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCommentParentObject = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'comment_parent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for User Early Binding
			$strAlias = $strAliasPrefix . 'user_id__ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUser = WpUsers::InstantiateDbRow($objDbRow, $strAliasPrefix . 'user_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for WpCommentsAsCommentParent Virtual Binding
			$strAlias = $strAliasPrefix . 'wpcommentsascommentparent__comment_ID';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objWpCommentsAsCommentParentArray)
				$objToReturn->_objWpCommentsAsCommentParentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objWpCommentsAsCommentParentArray[] = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objWpCommentsAsCommentParent = WpComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'wpcommentsascommentparent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpCommentses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpComments[]
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
					$objItem = WpComments::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpComments::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpComments object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpComments next row resulting from the query
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
			return WpComments::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpComments object,
		 * by CommentID Index(es)
		 * @param integer $intCommentID
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments
		*/
		public static function LoadByCommentID($intCommentID, $objOptionalClauses = null) {
			return WpComments::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpComments()->CommentID, $intCommentID)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpComments objects,
		 * by CommentPostID Index(es)
		 * @param integer $intCommentPostID
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public static function LoadArrayByCommentPostID($intCommentPostID, $objOptionalClauses = null) {
			// Call WpComments::QueryArray to perform the LoadArrayByCommentPostID query
			try {
				return WpComments::QueryArray(
					QQ::Equal(QQN::WpComments()->CommentPostID, $intCommentPostID),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpCommentses
		 * by CommentPostID Index(es)
		 * @param integer $intCommentPostID
		 * @return int
		*/
		public static function CountByCommentPostID($intCommentPostID) {
			// Call WpComments::QueryCount to perform the CountByCommentPostID query
			return WpComments::QueryCount(
				QQ::Equal(QQN::WpComments()->CommentPostID, $intCommentPostID)
			);
		}

		/**
		 * Load an array of WpComments objects,
		 * by CommentApproved, CommentDateGmt Index(es)
		 * @param string $strCommentApproved
		 * @param QDateTime $dttCommentDateGmt
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public static function LoadArrayByCommentApprovedCommentDateGmt($strCommentApproved, $dttCommentDateGmt, $objOptionalClauses = null) {
			// Call WpComments::QueryArray to perform the LoadArrayByCommentApprovedCommentDateGmt query
			try {
				return WpComments::QueryArray(
					QQ::AndCondition(
					QQ::Equal(QQN::WpComments()->CommentApproved, $strCommentApproved),
					QQ::Equal(QQN::WpComments()->CommentDateGmt, $dttCommentDateGmt)					)
,
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpCommentses
		 * by CommentApproved, CommentDateGmt Index(es)
		 * @param string $strCommentApproved
		 * @param QDateTime $dttCommentDateGmt
		 * @return int
		*/
		public static function CountByCommentApprovedCommentDateGmt($strCommentApproved, $dttCommentDateGmt) {
			// Call WpComments::QueryCount to perform the CountByCommentApprovedCommentDateGmt query
			return WpComments::QueryCount(
				QQ::AndCondition(
				QQ::Equal(QQN::WpComments()->CommentApproved, $strCommentApproved),
				QQ::Equal(QQN::WpComments()->CommentDateGmt, $dttCommentDateGmt)				)

			);
		}

		/**
		 * Load an array of WpComments objects,
		 * by CommentDateGmt Index(es)
		 * @param QDateTime $dttCommentDateGmt
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public static function LoadArrayByCommentDateGmt($dttCommentDateGmt, $objOptionalClauses = null) {
			// Call WpComments::QueryArray to perform the LoadArrayByCommentDateGmt query
			try {
				return WpComments::QueryArray(
					QQ::Equal(QQN::WpComments()->CommentDateGmt, $dttCommentDateGmt),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpCommentses
		 * by CommentDateGmt Index(es)
		 * @param QDateTime $dttCommentDateGmt
		 * @return int
		*/
		public static function CountByCommentDateGmt($dttCommentDateGmt) {
			// Call WpComments::QueryCount to perform the CountByCommentDateGmt query
			return WpComments::QueryCount(
				QQ::Equal(QQN::WpComments()->CommentDateGmt, $dttCommentDateGmt)
			);
		}

		/**
		 * Load an array of WpComments objects,
		 * by CommentParent Index(es)
		 * @param integer $intCommentParent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public static function LoadArrayByCommentParent($intCommentParent, $objOptionalClauses = null) {
			// Call WpComments::QueryArray to perform the LoadArrayByCommentParent query
			try {
				return WpComments::QueryArray(
					QQ::Equal(QQN::WpComments()->CommentParent, $intCommentParent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpCommentses
		 * by CommentParent Index(es)
		 * @param integer $intCommentParent
		 * @return int
		*/
		public static function CountByCommentParent($intCommentParent) {
			// Call WpComments::QueryCount to perform the CountByCommentParent query
			return WpComments::QueryCount(
				QQ::Equal(QQN::WpComments()->CommentParent, $intCommentParent)
			);
		}

		/**
		 * Load an array of WpComments objects,
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public static function LoadArrayByUserId($intUserId, $objOptionalClauses = null) {
			// Call WpComments::QueryArray to perform the LoadArrayByUserId query
			try {
				return WpComments::QueryArray(
					QQ::Equal(QQN::WpComments()->UserId, $intUserId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpCommentses
		 * by UserId Index(es)
		 * @param integer $intUserId
		 * @return int
		*/
		public static function CountByUserId($intUserId) {
			// Call WpComments::QueryCount to perform the CountByUserId query
			return WpComments::QueryCount(
				QQ::Equal(QQN::WpComments()->UserId, $intUserId)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpComments
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_comments` (
							`comment_post_ID`,
							`comment_author`,
							`comment_author_email`,
							`comment_author_url`,
							`comment_author_IP`,
							`comment_date`,
							`comment_date_gmt`,
							`comment_content`,
							`comment_karma`,
							`comment_approved`,
							`comment_agent`,
							`comment_type`,
							`comment_parent`,
							`user_id`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCommentPostID) . ',
							' . $objDatabase->SqlVariable($this->strCommentAuthor) . ',
							' . $objDatabase->SqlVariable($this->strCommentAuthorEmail) . ',
							' . $objDatabase->SqlVariable($this->strCommentAuthorUrl) . ',
							' . $objDatabase->SqlVariable($this->strCommentAuthorIP) . ',
							' . $objDatabase->SqlVariable($this->dttCommentDate) . ',
							' . $objDatabase->SqlVariable($this->dttCommentDateGmt) . ',
							' . $objDatabase->SqlVariable($this->strCommentContent) . ',
							' . $objDatabase->SqlVariable($this->intCommentKarma) . ',
							' . $objDatabase->SqlVariable($this->strCommentApproved) . ',
							' . $objDatabase->SqlVariable($this->strCommentAgent) . ',
							' . $objDatabase->SqlVariable($this->strCommentType) . ',
							' . $objDatabase->SqlVariable($this->intCommentParent) . ',
							' . $objDatabase->SqlVariable($this->intUserId) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intCommentID = $objDatabase->InsertId('wp_comments', 'comment_ID');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_comments`
						SET
							`comment_post_ID` = ' . $objDatabase->SqlVariable($this->intCommentPostID) . ',
							`comment_author` = ' . $objDatabase->SqlVariable($this->strCommentAuthor) . ',
							`comment_author_email` = ' . $objDatabase->SqlVariable($this->strCommentAuthorEmail) . ',
							`comment_author_url` = ' . $objDatabase->SqlVariable($this->strCommentAuthorUrl) . ',
							`comment_author_IP` = ' . $objDatabase->SqlVariable($this->strCommentAuthorIP) . ',
							`comment_date` = ' . $objDatabase->SqlVariable($this->dttCommentDate) . ',
							`comment_date_gmt` = ' . $objDatabase->SqlVariable($this->dttCommentDateGmt) . ',
							`comment_content` = ' . $objDatabase->SqlVariable($this->strCommentContent) . ',
							`comment_karma` = ' . $objDatabase->SqlVariable($this->intCommentKarma) . ',
							`comment_approved` = ' . $objDatabase->SqlVariable($this->strCommentApproved) . ',
							`comment_agent` = ' . $objDatabase->SqlVariable($this->strCommentAgent) . ',
							`comment_type` = ' . $objDatabase->SqlVariable($this->strCommentType) . ',
							`comment_parent` = ' . $objDatabase->SqlVariable($this->intCommentParent) . ',
							`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . '
						WHERE
							`comment_ID` = ' . $objDatabase->SqlVariable($this->intCommentID) . '
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
		 * Delete this WpComments
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intCommentID)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpComments with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($this->intCommentID) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpComments ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpComments', $this->intCommentID);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpCommentses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_comments table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_comments`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpComments from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpComments object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpComments::Load($this->intCommentID);

			// Update $this's local variables to match
			$this->CommentPostID = $objReloaded->CommentPostID;
			$this->strCommentAuthor = $objReloaded->strCommentAuthor;
			$this->strCommentAuthorEmail = $objReloaded->strCommentAuthorEmail;
			$this->strCommentAuthorUrl = $objReloaded->strCommentAuthorUrl;
			$this->strCommentAuthorIP = $objReloaded->strCommentAuthorIP;
			$this->dttCommentDate = $objReloaded->dttCommentDate;
			$this->dttCommentDateGmt = $objReloaded->dttCommentDateGmt;
			$this->strCommentContent = $objReloaded->strCommentContent;
			$this->intCommentKarma = $objReloaded->intCommentKarma;
			$this->strCommentApproved = $objReloaded->strCommentApproved;
			$this->strCommentAgent = $objReloaded->strCommentAgent;
			$this->strCommentType = $objReloaded->strCommentType;
			$this->CommentParent = $objReloaded->CommentParent;
			$this->UserId = $objReloaded->UserId;
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
				case 'CommentID':
					/**
					 * Gets the value for intCommentID (Read-Only PK)
					 * @return integer
					 */
					return $this->intCommentID;

				case 'CommentPostID':
					/**
					 * Gets the value for intCommentPostID (Not Null)
					 * @return integer
					 */
					return $this->intCommentPostID;

				case 'CommentAuthor':
					/**
					 * Gets the value for strCommentAuthor (Not Null)
					 * @return string
					 */
					return $this->strCommentAuthor;

				case 'CommentAuthorEmail':
					/**
					 * Gets the value for strCommentAuthorEmail (Not Null)
					 * @return string
					 */
					return $this->strCommentAuthorEmail;

				case 'CommentAuthorUrl':
					/**
					 * Gets the value for strCommentAuthorUrl (Not Null)
					 * @return string
					 */
					return $this->strCommentAuthorUrl;

				case 'CommentAuthorIP':
					/**
					 * Gets the value for strCommentAuthorIP (Not Null)
					 * @return string
					 */
					return $this->strCommentAuthorIP;

				case 'CommentDate':
					/**
					 * Gets the value for dttCommentDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttCommentDate;

				case 'CommentDateGmt':
					/**
					 * Gets the value for dttCommentDateGmt (Not Null)
					 * @return QDateTime
					 */
					return $this->dttCommentDateGmt;

				case 'CommentContent':
					/**
					 * Gets the value for strCommentContent (Not Null)
					 * @return string
					 */
					return $this->strCommentContent;

				case 'CommentKarma':
					/**
					 * Gets the value for intCommentKarma (Not Null)
					 * @return integer
					 */
					return $this->intCommentKarma;

				case 'CommentApproved':
					/**
					 * Gets the value for strCommentApproved (Not Null)
					 * @return string
					 */
					return $this->strCommentApproved;

				case 'CommentAgent':
					/**
					 * Gets the value for strCommentAgent (Not Null)
					 * @return string
					 */
					return $this->strCommentAgent;

				case 'CommentType':
					/**
					 * Gets the value for strCommentType (Not Null)
					 * @return string
					 */
					return $this->strCommentType;

				case 'CommentParent':
					/**
					 * Gets the value for intCommentParent (Not Null)
					 * @return integer
					 */
					return $this->intCommentParent;

				case 'UserId':
					/**
					 * Gets the value for intUserId (Not Null)
					 * @return integer
					 */
					return $this->intUserId;


				///////////////////
				// Member Objects
				///////////////////
				case 'CommentPostIDObject':
					/**
					 * Gets the value for the WpPosts object referenced by intCommentPostID (Not Null)
					 * @return WpPosts
					 */
					try {
						if ((!$this->objCommentPostIDObject) && (!is_null($this->intCommentPostID)))
							$this->objCommentPostIDObject = WpPosts::Load($this->intCommentPostID);
						return $this->objCommentPostIDObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentParentObject':
					/**
					 * Gets the value for the WpComments object referenced by intCommentParent (Not Null)
					 * @return WpComments
					 */
					try {
						if ((!$this->objCommentParentObject) && (!is_null($this->intCommentParent)))
							$this->objCommentParentObject = WpComments::Load($this->intCommentParent);
						return $this->objCommentParentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'User':
					/**
					 * Gets the value for the WpUsers object referenced by intUserId (Not Null)
					 * @return WpUsers
					 */
					try {
						if ((!$this->objUser) && (!is_null($this->intUserId)))
							$this->objUser = WpUsers::Load($this->intUserId);
						return $this->objUser;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_WpCommentsAsCommentParent':
					/**
					 * Gets the value for the private _objWpCommentsAsCommentParent (Read-Only)
					 * if set due to an expansion on the wp_comments.comment_parent reverse relationship
					 * @return WpComments
					 */
					return $this->_objWpCommentsAsCommentParent;

				case '_WpCommentsAsCommentParentArray':
					/**
					 * Gets the value for the private _objWpCommentsAsCommentParentArray (Read-Only)
					 * if set due to an ExpandAsArray on the wp_comments.comment_parent reverse relationship
					 * @return WpComments[]
					 */
					return $this->_objWpCommentsAsCommentParentArray;


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
				case 'CommentPostID':
					/**
					 * Sets the value for intCommentPostID (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCommentPostIDObject = null;
						return ($this->intCommentPostID = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentAuthor':
					/**
					 * Sets the value for strCommentAuthor (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentAuthor = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentAuthorEmail':
					/**
					 * Sets the value for strCommentAuthorEmail (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentAuthorEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentAuthorUrl':
					/**
					 * Sets the value for strCommentAuthorUrl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentAuthorUrl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentAuthorIP':
					/**
					 * Sets the value for strCommentAuthorIP (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentAuthorIP = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentDate':
					/**
					 * Sets the value for dttCommentDate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttCommentDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentDateGmt':
					/**
					 * Sets the value for dttCommentDateGmt (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttCommentDateGmt = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentContent':
					/**
					 * Sets the value for strCommentContent (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentContent = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentKarma':
					/**
					 * Sets the value for intCommentKarma (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCommentKarma = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentApproved':
					/**
					 * Sets the value for strCommentApproved (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentApproved = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentAgent':
					/**
					 * Sets the value for strCommentAgent (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentAgent = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentType':
					/**
					 * Sets the value for strCommentType (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommentType = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentParent':
					/**
					 * Sets the value for intCommentParent (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCommentParentObject = null;
						return ($this->intCommentParent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserId':
					/**
					 * Sets the value for intUserId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUser = null;
						return ($this->intUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'CommentPostIDObject':
					/**
					 * Sets the value for the WpPosts object referenced by intCommentPostID (Not Null)
					 * @param WpPosts $mixValue
					 * @return WpPosts
					 */
					if (is_null($mixValue)) {
						$this->intCommentPostID = null;
						$this->objCommentPostIDObject = null;
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
							throw new QCallerException('Unable to set an unsaved CommentPostIDObject for this WpComments');

						// Update Local Member Variables
						$this->objCommentPostIDObject = $mixValue;
						$this->intCommentPostID = $mixValue->Id;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CommentParentObject':
					/**
					 * Sets the value for the WpComments object referenced by intCommentParent (Not Null)
					 * @param WpComments $mixValue
					 * @return WpComments
					 */
					if (is_null($mixValue)) {
						$this->intCommentParent = null;
						$this->objCommentParentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a WpComments object
						try {
							$mixValue = QType::Cast($mixValue, 'WpComments');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED WpComments object
						if (is_null($mixValue->CommentID))
							throw new QCallerException('Unable to set an unsaved CommentParentObject for this WpComments');

						// Update Local Member Variables
						$this->objCommentParentObject = $mixValue;
						$this->intCommentParent = $mixValue->CommentID;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'User':
					/**
					 * Sets the value for the WpUsers object referenced by intUserId (Not Null)
					 * @param WpUsers $mixValue
					 * @return WpUsers
					 */
					if (is_null($mixValue)) {
						$this->intUserId = null;
						$this->objUser = null;
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
							throw new QCallerException('Unable to set an unsaved User for this WpComments');

						// Update Local Member Variables
						$this->objUser = $mixValue;
						$this->intUserId = $mixValue->Id;

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



		// Related Objects' Methods for WpCommentsAsCommentParent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated WpCommentsesAsCommentParent as an array of WpComments objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpComments[]
		*/
		public function GetWpCommentsAsCommentParentArray($objOptionalClauses = null) {
			if ((is_null($this->intCommentID)))
				return array();

			try {
				return WpComments::LoadArrayByCommentParent($this->intCommentID, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated WpCommentsesAsCommentParent
		 * @return int
		*/
		public function CountWpCommentsesAsCommentParent() {
			if ((is_null($this->intCommentID)))
				return 0;

			return WpComments::CountByCommentParent($this->intCommentID);
		}

		/**
		 * Associates a WpCommentsAsCommentParent
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function AssociateWpCommentsAsCommentParent(WpComments $objWpComments) {
			if ((is_null($this->intCommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpCommentsAsCommentParent on this unsaved WpComments.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateWpCommentsAsCommentParent on this WpComments with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`comment_parent` = ' . $objDatabase->SqlVariable($this->intCommentID) . '
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' 
			');
		}

		/**
		 * Unassociates a WpCommentsAsCommentParent
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function UnassociateWpCommentsAsCommentParent(WpComments $objWpComments) {
			if ((is_null($this->intCommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentParent on this unsaved WpComments.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentParent on this WpComments with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`comment_parent` = null
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' AND
					`comment_parent` = ' . $objDatabase->SqlVariable($this->intCommentID) . '
			');
		}

		/**
		 * Unassociates all WpCommentsesAsCommentParent
		 * @return void
		*/
		public function UnassociateAllWpCommentsesAsCommentParent() {
			if ((is_null($this->intCommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentParent on this unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`wp_comments`
				SET
					`comment_parent` = null
				WHERE
					`comment_parent` = ' . $objDatabase->SqlVariable($this->intCommentID) . '
			');
		}

		/**
		 * Deletes an associated WpCommentsAsCommentParent
		 * @param WpComments $objWpComments
		 * @return void
		*/
		public function DeleteAssociatedWpCommentsAsCommentParent(WpComments $objWpComments) {
			if ((is_null($this->intCommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentParent on this unsaved WpComments.');
			if ((is_null($objWpComments->CommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentParent on this WpComments with an unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`
				WHERE
					`comment_ID` = ' . $objDatabase->SqlVariable($objWpComments->CommentID) . ' AND
					`comment_parent` = ' . $objDatabase->SqlVariable($this->intCommentID) . '
			');
		}

		/**
		 * Deletes all associated WpCommentsesAsCommentParent
		 * @return void
		*/
		public function DeleteAllWpCommentsesAsCommentParent() {
			if ((is_null($this->intCommentID)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateWpCommentsAsCommentParent on this unsaved WpComments.');

			// Get the Database Object for this Class
			$objDatabase = WpComments::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_comments`
				WHERE
					`comment_parent` = ' . $objDatabase->SqlVariable($this->intCommentID) . '
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
			return "wp_comments";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpComments::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpComments"><sequence>';
			$strToReturn .= '<element name="CommentID" type="xsd:int"/>';
			$strToReturn .= '<element name="CommentPostIDObject" type="xsd1:WpPosts"/>';
			$strToReturn .= '<element name="CommentAuthor" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentAuthorEmail" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentAuthorUrl" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentAuthorIP" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="CommentDateGmt" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="CommentContent" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentKarma" type="xsd:int"/>';
			$strToReturn .= '<element name="CommentApproved" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentAgent" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentType" type="xsd:string"/>';
			$strToReturn .= '<element name="CommentParentObject" type="xsd1:WpComments"/>';
			$strToReturn .= '<element name="User" type="xsd1:WpUsers"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpComments', $strComplexTypeArray)) {
				$strComplexTypeArray['WpComments'] = WpComments::GetSoapComplexTypeXml();
				WpPosts::AlterSoapComplexTypeArray($strComplexTypeArray);
				WpComments::AlterSoapComplexTypeArray($strComplexTypeArray);
				WpUsers::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpComments::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpComments();
			if (property_exists($objSoapObject, 'CommentID'))
				$objToReturn->intCommentID = $objSoapObject->CommentID;
			if ((property_exists($objSoapObject, 'CommentPostIDObject')) &&
				($objSoapObject->CommentPostIDObject))
				$objToReturn->CommentPostIDObject = WpPosts::GetObjectFromSoapObject($objSoapObject->CommentPostIDObject);
			if (property_exists($objSoapObject, 'CommentAuthor'))
				$objToReturn->strCommentAuthor = $objSoapObject->CommentAuthor;
			if (property_exists($objSoapObject, 'CommentAuthorEmail'))
				$objToReturn->strCommentAuthorEmail = $objSoapObject->CommentAuthorEmail;
			if (property_exists($objSoapObject, 'CommentAuthorUrl'))
				$objToReturn->strCommentAuthorUrl = $objSoapObject->CommentAuthorUrl;
			if (property_exists($objSoapObject, 'CommentAuthorIP'))
				$objToReturn->strCommentAuthorIP = $objSoapObject->CommentAuthorIP;
			if (property_exists($objSoapObject, 'CommentDate'))
				$objToReturn->dttCommentDate = new QDateTime($objSoapObject->CommentDate);
			if (property_exists($objSoapObject, 'CommentDateGmt'))
				$objToReturn->dttCommentDateGmt = new QDateTime($objSoapObject->CommentDateGmt);
			if (property_exists($objSoapObject, 'CommentContent'))
				$objToReturn->strCommentContent = $objSoapObject->CommentContent;
			if (property_exists($objSoapObject, 'CommentKarma'))
				$objToReturn->intCommentKarma = $objSoapObject->CommentKarma;
			if (property_exists($objSoapObject, 'CommentApproved'))
				$objToReturn->strCommentApproved = $objSoapObject->CommentApproved;
			if (property_exists($objSoapObject, 'CommentAgent'))
				$objToReturn->strCommentAgent = $objSoapObject->CommentAgent;
			if (property_exists($objSoapObject, 'CommentType'))
				$objToReturn->strCommentType = $objSoapObject->CommentType;
			if ((property_exists($objSoapObject, 'CommentParentObject')) &&
				($objSoapObject->CommentParentObject))
				$objToReturn->CommentParentObject = WpComments::GetObjectFromSoapObject($objSoapObject->CommentParentObject);
			if ((property_exists($objSoapObject, 'User')) &&
				($objSoapObject->User))
				$objToReturn->User = WpUsers::GetObjectFromSoapObject($objSoapObject->User);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpComments::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCommentPostIDObject)
				$objObject->objCommentPostIDObject = WpPosts::GetSoapObjectFromObject($objObject->objCommentPostIDObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCommentPostID = null;
			if ($objObject->dttCommentDate)
				$objObject->dttCommentDate = $objObject->dttCommentDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttCommentDateGmt)
				$objObject->dttCommentDateGmt = $objObject->dttCommentDateGmt->qFormat(QDateTime::FormatSoap);
			if ($objObject->objCommentParentObject)
				$objObject->objCommentParentObject = WpComments::GetSoapObjectFromObject($objObject->objCommentParentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCommentParent = null;
			if ($objObject->objUser)
				$objObject->objUser = WpUsers::GetSoapObjectFromObject($objObject->objUser, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUserId = null;
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
			$iArray['CommentID'] = $this->intCommentID;
			$iArray['CommentPostID'] = $this->intCommentPostID;
			$iArray['CommentAuthor'] = $this->strCommentAuthor;
			$iArray['CommentAuthorEmail'] = $this->strCommentAuthorEmail;
			$iArray['CommentAuthorUrl'] = $this->strCommentAuthorUrl;
			$iArray['CommentAuthorIP'] = $this->strCommentAuthorIP;
			$iArray['CommentDate'] = $this->dttCommentDate;
			$iArray['CommentDateGmt'] = $this->dttCommentDateGmt;
			$iArray['CommentContent'] = $this->strCommentContent;
			$iArray['CommentKarma'] = $this->intCommentKarma;
			$iArray['CommentApproved'] = $this->strCommentApproved;
			$iArray['CommentAgent'] = $this->strCommentAgent;
			$iArray['CommentType'] = $this->strCommentType;
			$iArray['CommentParent'] = $this->intCommentParent;
			$iArray['UserId'] = $this->intUserId;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intCommentID ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $CommentID
     * @property-read QQNode $CommentPostID
     * @property-read QQNodeWpPosts $CommentPostIDObject
     * @property-read QQNode $CommentAuthor
     * @property-read QQNode $CommentAuthorEmail
     * @property-read QQNode $CommentAuthorUrl
     * @property-read QQNode $CommentAuthorIP
     * @property-read QQNode $CommentDate
     * @property-read QQNode $CommentDateGmt
     * @property-read QQNode $CommentContent
     * @property-read QQNode $CommentKarma
     * @property-read QQNode $CommentApproved
     * @property-read QQNode $CommentAgent
     * @property-read QQNode $CommentType
     * @property-read QQNode $CommentParent
     * @property-read QQNodeWpComments $CommentParentObject
     * @property-read QQNode $UserId
     * @property-read QQNodeWpUsers $User
     *
     *
     * @property-read QQReverseReferenceNodeWpComments $WpCommentsAsCommentParent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpComments extends QQNode {
		protected $strTableName = 'wp_comments';
		protected $strPrimaryKey = 'comment_ID';
		protected $strClassName = 'WpComments';
		public function __get($strName) {
			switch ($strName) {
				case 'CommentID':
					return new QQNode('comment_ID', 'CommentID', 'Integer', $this);
				case 'CommentPostID':
					return new QQNode('comment_post_ID', 'CommentPostID', 'Integer', $this);
				case 'CommentPostIDObject':
					return new QQNodeWpPosts('comment_post_ID', 'CommentPostIDObject', 'Integer', $this);
				case 'CommentAuthor':
					return new QQNode('comment_author', 'CommentAuthor', 'Blob', $this);
				case 'CommentAuthorEmail':
					return new QQNode('comment_author_email', 'CommentAuthorEmail', 'VarChar', $this);
				case 'CommentAuthorUrl':
					return new QQNode('comment_author_url', 'CommentAuthorUrl', 'VarChar', $this);
				case 'CommentAuthorIP':
					return new QQNode('comment_author_IP', 'CommentAuthorIP', 'VarChar', $this);
				case 'CommentDate':
					return new QQNode('comment_date', 'CommentDate', 'DateTime', $this);
				case 'CommentDateGmt':
					return new QQNode('comment_date_gmt', 'CommentDateGmt', 'DateTime', $this);
				case 'CommentContent':
					return new QQNode('comment_content', 'CommentContent', 'Blob', $this);
				case 'CommentKarma':
					return new QQNode('comment_karma', 'CommentKarma', 'Integer', $this);
				case 'CommentApproved':
					return new QQNode('comment_approved', 'CommentApproved', 'VarChar', $this);
				case 'CommentAgent':
					return new QQNode('comment_agent', 'CommentAgent', 'VarChar', $this);
				case 'CommentType':
					return new QQNode('comment_type', 'CommentType', 'VarChar', $this);
				case 'CommentParent':
					return new QQNode('comment_parent', 'CommentParent', 'Integer', $this);
				case 'CommentParentObject':
					return new QQNodeWpComments('comment_parent', 'CommentParentObject', 'Integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'User':
					return new QQNodeWpUsers('user_id', 'User', 'Integer', $this);
				case 'WpCommentsAsCommentParent':
					return new QQReverseReferenceNodeWpComments($this, 'wpcommentsascommentparent', 'reverse_reference', 'comment_parent');

				case '_PrimaryKeyNode':
					return new QQNode('comment_ID', 'CommentID', 'Integer', $this);
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
     * @property-read QQNode $CommentID
     * @property-read QQNode $CommentPostID
     * @property-read QQNodeWpPosts $CommentPostIDObject
     * @property-read QQNode $CommentAuthor
     * @property-read QQNode $CommentAuthorEmail
     * @property-read QQNode $CommentAuthorUrl
     * @property-read QQNode $CommentAuthorIP
     * @property-read QQNode $CommentDate
     * @property-read QQNode $CommentDateGmt
     * @property-read QQNode $CommentContent
     * @property-read QQNode $CommentKarma
     * @property-read QQNode $CommentApproved
     * @property-read QQNode $CommentAgent
     * @property-read QQNode $CommentType
     * @property-read QQNode $CommentParent
     * @property-read QQNodeWpComments $CommentParentObject
     * @property-read QQNode $UserId
     * @property-read QQNodeWpUsers $User
     *
     *
     * @property-read QQReverseReferenceNodeWpComments $WpCommentsAsCommentParent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpComments extends QQReverseReferenceNode {
		protected $strTableName = 'wp_comments';
		protected $strPrimaryKey = 'comment_ID';
		protected $strClassName = 'WpComments';
		public function __get($strName) {
			switch ($strName) {
				case 'CommentID':
					return new QQNode('comment_ID', 'CommentID', 'integer', $this);
				case 'CommentPostID':
					return new QQNode('comment_post_ID', 'CommentPostID', 'integer', $this);
				case 'CommentPostIDObject':
					return new QQNodeWpPosts('comment_post_ID', 'CommentPostIDObject', 'integer', $this);
				case 'CommentAuthor':
					return new QQNode('comment_author', 'CommentAuthor', 'string', $this);
				case 'CommentAuthorEmail':
					return new QQNode('comment_author_email', 'CommentAuthorEmail', 'string', $this);
				case 'CommentAuthorUrl':
					return new QQNode('comment_author_url', 'CommentAuthorUrl', 'string', $this);
				case 'CommentAuthorIP':
					return new QQNode('comment_author_IP', 'CommentAuthorIP', 'string', $this);
				case 'CommentDate':
					return new QQNode('comment_date', 'CommentDate', 'QDateTime', $this);
				case 'CommentDateGmt':
					return new QQNode('comment_date_gmt', 'CommentDateGmt', 'QDateTime', $this);
				case 'CommentContent':
					return new QQNode('comment_content', 'CommentContent', 'string', $this);
				case 'CommentKarma':
					return new QQNode('comment_karma', 'CommentKarma', 'integer', $this);
				case 'CommentApproved':
					return new QQNode('comment_approved', 'CommentApproved', 'string', $this);
				case 'CommentAgent':
					return new QQNode('comment_agent', 'CommentAgent', 'string', $this);
				case 'CommentType':
					return new QQNode('comment_type', 'CommentType', 'string', $this);
				case 'CommentParent':
					return new QQNode('comment_parent', 'CommentParent', 'integer', $this);
				case 'CommentParentObject':
					return new QQNodeWpComments('comment_parent', 'CommentParentObject', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'User':
					return new QQNodeWpUsers('user_id', 'User', 'integer', $this);
				case 'WpCommentsAsCommentParent':
					return new QQReverseReferenceNodeWpComments($this, 'wpcommentsascommentparent', 'reverse_reference', 'comment_parent');

				case '_PrimaryKeyNode':
					return new QQNode('comment_ID', 'CommentID', 'integer', $this);
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
