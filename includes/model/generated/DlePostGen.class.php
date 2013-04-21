<?php
	/**
	 * The abstract DlePostGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DlePost subclass which
	 * extends this DlePostGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DlePost class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Autor the value for strAutor (Not Null)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property string $ShortStory the value for strShortStory (Not Null)
	 * @property string $FullStory the value for strFullStory (Not Null)
	 * @property string $Xfields the value for strXfields (Not Null)
	 * @property string $Title the value for strTitle (Not Null)
	 * @property string $Descr the value for strDescr (Not Null)
	 * @property string $Keywords the value for strKeywords (Not Null)
	 * @property string $Category the value for strCategory (Not Null)
	 * @property string $AltName the value for strAltName (Not Null)
	 * @property integer $CommNum the value for intCommNum (Not Null)
	 * @property boolean $AllowComm the value for blnAllowComm (Not Null)
	 * @property boolean $AllowMain the value for blnAllowMain (Not Null)
	 * @property boolean $AllowRate the value for blnAllowRate (Not Null)
	 * @property boolean $Approve the value for blnApprove (Not Null)
	 * @property boolean $Fixed the value for blnFixed (Not Null)
	 * @property integer $Rating the value for intRating (Not Null)
	 * @property boolean $AllowBr the value for blnAllowBr (Not Null)
	 * @property integer $VoteNum the value for intVoteNum (Not Null)
	 * @property integer $NewsRead the value for intNewsRead (Not Null)
	 * @property boolean $Votes the value for blnVotes (Not Null)
	 * @property string $Access the value for strAccess (Not Null)
	 * @property string $Symbol the value for strSymbol (Not Null)
	 * @property boolean $Flag the value for blnFlag (Not Null)
	 * @property string $Editdate the value for strEditdate (Not Null)
	 * @property string $Editor the value for strEditor (Not Null)
	 * @property string $Reason the value for strReason (Not Null)
	 * @property boolean $ViewEdit the value for blnViewEdit (Not Null)
	 * @property string $Tags the value for strTags (Not Null)
	 * @property string $Metatitle the value for strMetatitle (Not Null)
	 * @property-read DleComments $_DleCommentsAsPost the value for the private _objDleCommentsAsPost (Read-Only) if set due to an expansion on the dle_comments.post_id reverse relationship
	 * @property-read DleComments[] $_DleCommentsAsPostArray the value for the private _objDleCommentsAsPostArray (Read-Only) if set due to an ExpandAsArray on the dle_comments.post_id reverse relationship
	 * @property-read DleTags $_DleTagsAsNews the value for the private _objDleTagsAsNews (Read-Only) if set due to an expansion on the dle_tags.news_id reverse relationship
	 * @property-read DleTags[] $_DleTagsAsNewsArray the value for the private _objDleTagsAsNewsArray (Read-Only) if set due to an ExpandAsArray on the dle_tags.news_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DlePostGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_post.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.autor
		 * @var string strAutor
		 */
		protected $strAutor;
		const AutorMaxLength = 40;
		const AutorDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.short_story
		 * @var string strShortStory
		 */
		protected $strShortStory;
		const ShortStoryDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.full_story
		 * @var string strFullStory
		 */
		protected $strFullStory;
		const FullStoryDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.xfields
		 * @var string strXfields
		 */
		protected $strXfields;
		const XfieldsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.title
		 * @var string strTitle
		 */
		protected $strTitle;
		const TitleMaxLength = 255;
		const TitleDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.descr
		 * @var string strDescr
		 */
		protected $strDescr;
		const DescrMaxLength = 200;
		const DescrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.keywords
		 * @var string strKeywords
		 */
		protected $strKeywords;
		const KeywordsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.category
		 * @var string strCategory
		 */
		protected $strCategory;
		const CategoryMaxLength = 200;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.alt_name
		 * @var string strAltName
		 */
		protected $strAltName;
		const AltNameMaxLength = 200;
		const AltNameDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.comm_num
		 * @var integer intCommNum
		 */
		protected $intCommNum;
		const CommNumDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.allow_comm
		 * @var boolean blnAllowComm
		 */
		protected $blnAllowComm;
		const AllowCommDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.allow_main
		 * @var boolean blnAllowMain
		 */
		protected $blnAllowMain;
		const AllowMainDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.allow_rate
		 * @var boolean blnAllowRate
		 */
		protected $blnAllowRate;
		const AllowRateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.approve
		 * @var boolean blnApprove
		 */
		protected $blnApprove;
		const ApproveDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.fixed
		 * @var boolean blnFixed
		 */
		protected $blnFixed;
		const FixedDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.rating
		 * @var integer intRating
		 */
		protected $intRating;
		const RatingDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.allow_br
		 * @var boolean blnAllowBr
		 */
		protected $blnAllowBr;
		const AllowBrDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.vote_num
		 * @var integer intVoteNum
		 */
		protected $intVoteNum;
		const VoteNumDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.news_read
		 * @var integer intNewsRead
		 */
		protected $intNewsRead;
		const NewsReadDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.votes
		 * @var boolean blnVotes
		 */
		protected $blnVotes;
		const VotesDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.access
		 * @var string strAccess
		 */
		protected $strAccess;
		const AccessMaxLength = 150;
		const AccessDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.symbol
		 * @var string strSymbol
		 */
		protected $strSymbol;
		const SymbolMaxLength = 3;
		const SymbolDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.flag
		 * @var boolean blnFlag
		 */
		protected $blnFlag;
		const FlagDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.editdate
		 * @var string strEditdate
		 */
		protected $strEditdate;
		const EditdateMaxLength = 15;
		const EditdateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.editor
		 * @var string strEditor
		 */
		protected $strEditor;
		const EditorMaxLength = 40;
		const EditorDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.reason
		 * @var string strReason
		 */
		protected $strReason;
		const ReasonMaxLength = 255;
		const ReasonDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.view_edit
		 * @var boolean blnViewEdit
		 */
		protected $blnViewEdit;
		const ViewEditDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.tags
		 * @var string strTags
		 */
		protected $strTags;
		const TagsMaxLength = 255;
		const TagsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_post.metatitle
		 * @var string strMetatitle
		 */
		protected $strMetatitle;
		const MetatitleMaxLength = 255;
		const MetatitleDefault = null;


		/**
		 * Private member variable that stores a reference to a single DleCommentsAsPost object
		 * (of type DleComments), if this DlePost object was restored with
		 * an expansion on the dle_comments association table.
		 * @var DleComments _objDleCommentsAsPost;
		 */
		private $_objDleCommentsAsPost;

		/**
		 * Private member variable that stores a reference to an array of DleCommentsAsPost objects
		 * (of type DleComments[]), if this DlePost object was restored with
		 * an ExpandAsArray on the dle_comments association table.
		 * @var DleComments[] _objDleCommentsAsPostArray;
		 */
		private $_objDleCommentsAsPostArray = null;

		/**
		 * Private member variable that stores a reference to a single DleTagsAsNews object
		 * (of type DleTags), if this DlePost object was restored with
		 * an expansion on the dle_tags association table.
		 * @var DleTags _objDleTagsAsNews;
		 */
		private $_objDleTagsAsNews;

		/**
		 * Private member variable that stores a reference to an array of DleTagsAsNews objects
		 * (of type DleTags[]), if this DlePost object was restored with
		 * an ExpandAsArray on the dle_tags association table.
		 * @var DleTags[] _objDleTagsAsNewsArray;
		 */
		private $_objDleTagsAsNewsArray = null;

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
			$this->intId = DlePost::IdDefault;
			$this->strAutor = DlePost::AutorDefault;
			$this->dttDate = (DlePost::DateDefault === null)?null:new QDateTime(DlePost::DateDefault);
			$this->strShortStory = DlePost::ShortStoryDefault;
			$this->strFullStory = DlePost::FullStoryDefault;
			$this->strXfields = DlePost::XfieldsDefault;
			$this->strTitle = DlePost::TitleDefault;
			$this->strDescr = DlePost::DescrDefault;
			$this->strKeywords = DlePost::KeywordsDefault;
			$this->strCategory = DlePost::CategoryDefault;
			$this->strAltName = DlePost::AltNameDefault;
			$this->intCommNum = DlePost::CommNumDefault;
			$this->blnAllowComm = DlePost::AllowCommDefault;
			$this->blnAllowMain = DlePost::AllowMainDefault;
			$this->blnAllowRate = DlePost::AllowRateDefault;
			$this->blnApprove = DlePost::ApproveDefault;
			$this->blnFixed = DlePost::FixedDefault;
			$this->intRating = DlePost::RatingDefault;
			$this->blnAllowBr = DlePost::AllowBrDefault;
			$this->intVoteNum = DlePost::VoteNumDefault;
			$this->intNewsRead = DlePost::NewsReadDefault;
			$this->blnVotes = DlePost::VotesDefault;
			$this->strAccess = DlePost::AccessDefault;
			$this->strSymbol = DlePost::SymbolDefault;
			$this->blnFlag = DlePost::FlagDefault;
			$this->strEditdate = DlePost::EditdateDefault;
			$this->strEditor = DlePost::EditorDefault;
			$this->strReason = DlePost::ReasonDefault;
			$this->blnViewEdit = DlePost::ViewEditDefault;
			$this->strTags = DlePost::TagsDefault;
			$this->strMetatitle = DlePost::MetatitleDefault;
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
		 * Load a DlePost from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DlePost', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DlePost::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DlePost()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DlePosts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DlePost::QueryArray to perform the LoadAll query
			try {
				return DlePost::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DlePosts
		 * @return int
		 */
		public static function CountAll() {
			// Call DlePost::QueryCount to perform the CountAll query
			return DlePost::QueryCount(QQ::All());
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
			$objDatabase = DlePost::GetDatabase();

			// Create/Build out the QueryBuilder object with DlePost-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_post');

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
				DlePost::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_post');

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
		 * Static Qcubed Query method to query for a single DlePost object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DlePost the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DlePost::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DlePost object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DlePost::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DlePost::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DlePost objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DlePost[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DlePost::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DlePost::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DlePost::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DlePost objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DlePost::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DlePost::GetDatabase();

			$strQuery = DlePost::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dlepost', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DlePost::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DlePost
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_post';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'autor', $strAliasPrefix . 'autor');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'short_story', $strAliasPrefix . 'short_story');
			    $objBuilder->AddSelectItem($strTableName, 'full_story', $strAliasPrefix . 'full_story');
			    $objBuilder->AddSelectItem($strTableName, 'xfields', $strAliasPrefix . 'xfields');
			    $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
			    $objBuilder->AddSelectItem($strTableName, 'descr', $strAliasPrefix . 'descr');
			    $objBuilder->AddSelectItem($strTableName, 'keywords', $strAliasPrefix . 'keywords');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'alt_name', $strAliasPrefix . 'alt_name');
			    $objBuilder->AddSelectItem($strTableName, 'comm_num', $strAliasPrefix . 'comm_num');
			    $objBuilder->AddSelectItem($strTableName, 'allow_comm', $strAliasPrefix . 'allow_comm');
			    $objBuilder->AddSelectItem($strTableName, 'allow_main', $strAliasPrefix . 'allow_main');
			    $objBuilder->AddSelectItem($strTableName, 'allow_rate', $strAliasPrefix . 'allow_rate');
			    $objBuilder->AddSelectItem($strTableName, 'approve', $strAliasPrefix . 'approve');
			    $objBuilder->AddSelectItem($strTableName, 'fixed', $strAliasPrefix . 'fixed');
			    $objBuilder->AddSelectItem($strTableName, 'rating', $strAliasPrefix . 'rating');
			    $objBuilder->AddSelectItem($strTableName, 'allow_br', $strAliasPrefix . 'allow_br');
			    $objBuilder->AddSelectItem($strTableName, 'vote_num', $strAliasPrefix . 'vote_num');
			    $objBuilder->AddSelectItem($strTableName, 'news_read', $strAliasPrefix . 'news_read');
			    $objBuilder->AddSelectItem($strTableName, 'votes', $strAliasPrefix . 'votes');
			    $objBuilder->AddSelectItem($strTableName, 'access', $strAliasPrefix . 'access');
			    $objBuilder->AddSelectItem($strTableName, 'symbol', $strAliasPrefix . 'symbol');
			    $objBuilder->AddSelectItem($strTableName, 'flag', $strAliasPrefix . 'flag');
			    $objBuilder->AddSelectItem($strTableName, 'editdate', $strAliasPrefix . 'editdate');
			    $objBuilder->AddSelectItem($strTableName, 'editor', $strAliasPrefix . 'editor');
			    $objBuilder->AddSelectItem($strTableName, 'reason', $strAliasPrefix . 'reason');
			    $objBuilder->AddSelectItem($strTableName, 'view_edit', $strAliasPrefix . 'view_edit');
			    $objBuilder->AddSelectItem($strTableName, 'tags', $strAliasPrefix . 'tags');
			    $objBuilder->AddSelectItem($strTableName, 'metatitle', $strAliasPrefix . 'metatitle');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DlePost from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DlePost::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DlePost
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intId == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'dle_post__';


						// Expanding reverse references: DleCommentsAsPost
						$strAlias = $strAliasPrefix . 'dlecommentsaspost__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDleCommentsAsPostArray)
								$objPreviousItem->_objDleCommentsAsPostArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDleCommentsAsPostArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDleCommentsAsPostArray;
								$objChildItem = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsaspost__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDleCommentsAsPostArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDleCommentsAsPostArray[] = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: DleTagsAsNews
						$strAlias = $strAliasPrefix . 'dletagsasnews__id';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDleTagsAsNewsArray)
								$objPreviousItem->_objDleTagsAsNewsArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDleTagsAsNewsArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDleTagsAsNewsArray;
								$objChildItem = DleTags::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dletagsasnews__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDleTagsAsNewsArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDleTagsAsNewsArray[] = DleTags::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dletagsasnews__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'dle_post__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the DlePost object
			$objToReturn = new DlePost();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'autor';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAutor = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'short_story';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShortStory = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'full_story';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFullStory = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'xfields';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strXfields = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'descr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'keywords';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strKeywords = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCategory = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'alt_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAltName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'comm_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCommNum = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'allow_comm';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowComm = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_main';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowMain = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_rate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowRate = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'approve';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnApprove = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'fixed';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnFixed = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'rating';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRating = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'allow_br';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowBr = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'vote_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intVoteNum = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'news_read';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intNewsRead = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'votes';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnVotes = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'access';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAccess = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'symbol';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSymbol = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'flag';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnFlag = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'editdate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEditdate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'editor';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEditor = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'reason';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strReason = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'view_edit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnViewEdit = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'tags';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTags = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'metatitle';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMetatitle = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Id != $objPreviousItem->Id) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objDleCommentsAsPostArray);
					$cnt = count($objToReturn->_objDleCommentsAsPostArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDleCommentsAsPostArray, $objToReturn->_objDleCommentsAsPostArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objDleTagsAsNewsArray);
					$cnt = count($objToReturn->_objDleTagsAsNewsArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDleTagsAsNewsArray, $objToReturn->_objDleTagsAsNewsArray)) {
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
				$strAliasPrefix = 'dle_post__';




			// Check for DleCommentsAsPost Virtual Binding
			$strAlias = $strAliasPrefix . 'dlecommentsaspost__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDleCommentsAsPostArray)
				$objToReturn->_objDleCommentsAsPostArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDleCommentsAsPostArray[] = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDleCommentsAsPost = DleComments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dlecommentsaspost__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for DleTagsAsNews Virtual Binding
			$strAlias = $strAliasPrefix . 'dletagsasnews__id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDleTagsAsNewsArray)
				$objToReturn->_objDleTagsAsNewsArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDleTagsAsNewsArray[] = DleTags::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dletagsasnews__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDleTagsAsNews = DleTags::InstantiateDbRow($objDbRow, $strAliasPrefix . 'dletagsasnews__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of DlePosts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DlePost[]
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
					$objItem = DlePost::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DlePost::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DlePost object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DlePost next row resulting from the query
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
			return DlePost::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DlePost object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DlePost::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DlePost()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by Autor Index(es)
		 * @param string $strAutor
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByAutor($strAutor, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByAutor query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->Autor, $strAutor),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by Autor Index(es)
		 * @param string $strAutor
		 * @return int
		*/
		public static function CountByAutor($strAutor) {
			// Call DlePost::QueryCount to perform the CountByAutor query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->Autor, $strAutor)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by AltName Index(es)
		 * @param string $strAltName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByAltName($strAltName, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByAltName query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->AltName, $strAltName),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by AltName Index(es)
		 * @param string $strAltName
		 * @return int
		*/
		public static function CountByAltName($strAltName) {
			// Call DlePost::QueryCount to perform the CountByAltName query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->AltName, $strAltName)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by Category Index(es)
		 * @param string $strCategory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByCategory($strCategory, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByCategory query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->Category, $strCategory),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by Category Index(es)
		 * @param string $strCategory
		 * @return int
		*/
		public static function CountByCategory($strCategory) {
			// Call DlePost::QueryCount to perform the CountByCategory query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->Category, $strCategory)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by Approve Index(es)
		 * @param boolean $blnApprove
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByApprove($blnApprove, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByApprove query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->Approve, $blnApprove),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by Approve Index(es)
		 * @param boolean $blnApprove
		 * @return int
		*/
		public static function CountByApprove($blnApprove) {
			// Call DlePost::QueryCount to perform the CountByApprove query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->Approve, $blnApprove)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by AllowMain Index(es)
		 * @param boolean $blnAllowMain
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByAllowMain($blnAllowMain, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByAllowMain query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->AllowMain, $blnAllowMain),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by AllowMain Index(es)
		 * @param boolean $blnAllowMain
		 * @return int
		*/
		public static function CountByAllowMain($blnAllowMain) {
			// Call DlePost::QueryCount to perform the CountByAllowMain query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->AllowMain, $blnAllowMain)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by Date Index(es)
		 * @param QDateTime $dttDate
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByDate($dttDate, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByDate query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->Date, $dttDate),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by Date Index(es)
		 * @param QDateTime $dttDate
		 * @return int
		*/
		public static function CountByDate($dttDate) {
			// Call DlePost::QueryCount to perform the CountByDate query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->Date, $dttDate)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by Symbol Index(es)
		 * @param string $strSymbol
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayBySymbol($strSymbol, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayBySymbol query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->Symbol, $strSymbol),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by Symbol Index(es)
		 * @param string $strSymbol
		 * @return int
		*/
		public static function CountBySymbol($strSymbol) {
			// Call DlePost::QueryCount to perform the CountBySymbol query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->Symbol, $strSymbol)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by CommNum Index(es)
		 * @param integer $intCommNum
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByCommNum($intCommNum, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByCommNum query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->CommNum, $intCommNum),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by CommNum Index(es)
		 * @param integer $intCommNum
		 * @return int
		*/
		public static function CountByCommNum($intCommNum) {
			// Call DlePost::QueryCount to perform the CountByCommNum query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->CommNum, $intCommNum)
			);
		}

		/**
		 * Load an array of DlePost objects,
		 * by Tags Index(es)
		 * @param string $strTags
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePost[]
		*/
		public static function LoadArrayByTags($strTags, $objOptionalClauses = null) {
			// Call DlePost::QueryArray to perform the LoadArrayByTags query
			try {
				return DlePost::QueryArray(
					QQ::Equal(QQN::DlePost()->Tags, $strTags),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePosts
		 * by Tags Index(es)
		 * @param string $strTags
		 * @return int
		*/
		public static function CountByTags($strTags) {
			// Call DlePost::QueryCount to perform the CountByTags query
			return DlePost::QueryCount(
				QQ::Equal(QQN::DlePost()->Tags, $strTags)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DlePost
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_post` (
							`autor`,
							`date`,
							`short_story`,
							`full_story`,
							`xfields`,
							`title`,
							`descr`,
							`keywords`,
							`category`,
							`alt_name`,
							`comm_num`,
							`allow_comm`,
							`allow_main`,
							`allow_rate`,
							`approve`,
							`fixed`,
							`rating`,
							`allow_br`,
							`vote_num`,
							`news_read`,
							`votes`,
							`access`,
							`symbol`,
							`flag`,
							`editdate`,
							`editor`,
							`reason`,
							`view_edit`,
							`tags`,
							`metatitle`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strAutor) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->strShortStory) . ',
							' . $objDatabase->SqlVariable($this->strFullStory) . ',
							' . $objDatabase->SqlVariable($this->strXfields) . ',
							' . $objDatabase->SqlVariable($this->strTitle) . ',
							' . $objDatabase->SqlVariable($this->strDescr) . ',
							' . $objDatabase->SqlVariable($this->strKeywords) . ',
							' . $objDatabase->SqlVariable($this->strCategory) . ',
							' . $objDatabase->SqlVariable($this->strAltName) . ',
							' . $objDatabase->SqlVariable($this->intCommNum) . ',
							' . $objDatabase->SqlVariable($this->blnAllowComm) . ',
							' . $objDatabase->SqlVariable($this->blnAllowMain) . ',
							' . $objDatabase->SqlVariable($this->blnAllowRate) . ',
							' . $objDatabase->SqlVariable($this->blnApprove) . ',
							' . $objDatabase->SqlVariable($this->blnFixed) . ',
							' . $objDatabase->SqlVariable($this->intRating) . ',
							' . $objDatabase->SqlVariable($this->blnAllowBr) . ',
							' . $objDatabase->SqlVariable($this->intVoteNum) . ',
							' . $objDatabase->SqlVariable($this->intNewsRead) . ',
							' . $objDatabase->SqlVariable($this->blnVotes) . ',
							' . $objDatabase->SqlVariable($this->strAccess) . ',
							' . $objDatabase->SqlVariable($this->strSymbol) . ',
							' . $objDatabase->SqlVariable($this->blnFlag) . ',
							' . $objDatabase->SqlVariable($this->strEditdate) . ',
							' . $objDatabase->SqlVariable($this->strEditor) . ',
							' . $objDatabase->SqlVariable($this->strReason) . ',
							' . $objDatabase->SqlVariable($this->blnViewEdit) . ',
							' . $objDatabase->SqlVariable($this->strTags) . ',
							' . $objDatabase->SqlVariable($this->strMetatitle) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_post', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_post`
						SET
							`autor` = ' . $objDatabase->SqlVariable($this->strAutor) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`short_story` = ' . $objDatabase->SqlVariable($this->strShortStory) . ',
							`full_story` = ' . $objDatabase->SqlVariable($this->strFullStory) . ',
							`xfields` = ' . $objDatabase->SqlVariable($this->strXfields) . ',
							`title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
							`descr` = ' . $objDatabase->SqlVariable($this->strDescr) . ',
							`keywords` = ' . $objDatabase->SqlVariable($this->strKeywords) . ',
							`category` = ' . $objDatabase->SqlVariable($this->strCategory) . ',
							`alt_name` = ' . $objDatabase->SqlVariable($this->strAltName) . ',
							`comm_num` = ' . $objDatabase->SqlVariable($this->intCommNum) . ',
							`allow_comm` = ' . $objDatabase->SqlVariable($this->blnAllowComm) . ',
							`allow_main` = ' . $objDatabase->SqlVariable($this->blnAllowMain) . ',
							`allow_rate` = ' . $objDatabase->SqlVariable($this->blnAllowRate) . ',
							`approve` = ' . $objDatabase->SqlVariable($this->blnApprove) . ',
							`fixed` = ' . $objDatabase->SqlVariable($this->blnFixed) . ',
							`rating` = ' . $objDatabase->SqlVariable($this->intRating) . ',
							`allow_br` = ' . $objDatabase->SqlVariable($this->blnAllowBr) . ',
							`vote_num` = ' . $objDatabase->SqlVariable($this->intVoteNum) . ',
							`news_read` = ' . $objDatabase->SqlVariable($this->intNewsRead) . ',
							`votes` = ' . $objDatabase->SqlVariable($this->blnVotes) . ',
							`access` = ' . $objDatabase->SqlVariable($this->strAccess) . ',
							`symbol` = ' . $objDatabase->SqlVariable($this->strSymbol) . ',
							`flag` = ' . $objDatabase->SqlVariable($this->blnFlag) . ',
							`editdate` = ' . $objDatabase->SqlVariable($this->strEditdate) . ',
							`editor` = ' . $objDatabase->SqlVariable($this->strEditor) . ',
							`reason` = ' . $objDatabase->SqlVariable($this->strReason) . ',
							`view_edit` = ' . $objDatabase->SqlVariable($this->blnViewEdit) . ',
							`tags` = ' . $objDatabase->SqlVariable($this->strTags) . ',
							`metatitle` = ' . $objDatabase->SqlVariable($this->strMetatitle) . '
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
		 * Delete this DlePost
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DlePost with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_post`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DlePost ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DlePost', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DlePosts
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_post`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_post table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_post`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DlePost from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DlePost object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DlePost::Load($this->intId);

			// Update $this's local variables to match
			$this->strAutor = $objReloaded->strAutor;
			$this->dttDate = $objReloaded->dttDate;
			$this->strShortStory = $objReloaded->strShortStory;
			$this->strFullStory = $objReloaded->strFullStory;
			$this->strXfields = $objReloaded->strXfields;
			$this->strTitle = $objReloaded->strTitle;
			$this->strDescr = $objReloaded->strDescr;
			$this->strKeywords = $objReloaded->strKeywords;
			$this->strCategory = $objReloaded->strCategory;
			$this->strAltName = $objReloaded->strAltName;
			$this->intCommNum = $objReloaded->intCommNum;
			$this->blnAllowComm = $objReloaded->blnAllowComm;
			$this->blnAllowMain = $objReloaded->blnAllowMain;
			$this->blnAllowRate = $objReloaded->blnAllowRate;
			$this->blnApprove = $objReloaded->blnApprove;
			$this->blnFixed = $objReloaded->blnFixed;
			$this->intRating = $objReloaded->intRating;
			$this->blnAllowBr = $objReloaded->blnAllowBr;
			$this->intVoteNum = $objReloaded->intVoteNum;
			$this->intNewsRead = $objReloaded->intNewsRead;
			$this->blnVotes = $objReloaded->blnVotes;
			$this->strAccess = $objReloaded->strAccess;
			$this->strSymbol = $objReloaded->strSymbol;
			$this->blnFlag = $objReloaded->blnFlag;
			$this->strEditdate = $objReloaded->strEditdate;
			$this->strEditor = $objReloaded->strEditor;
			$this->strReason = $objReloaded->strReason;
			$this->blnViewEdit = $objReloaded->blnViewEdit;
			$this->strTags = $objReloaded->strTags;
			$this->strMetatitle = $objReloaded->strMetatitle;
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

				case 'Autor':
					/**
					 * Gets the value for strAutor (Not Null)
					 * @return string
					 */
					return $this->strAutor;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'ShortStory':
					/**
					 * Gets the value for strShortStory (Not Null)
					 * @return string
					 */
					return $this->strShortStory;

				case 'FullStory':
					/**
					 * Gets the value for strFullStory (Not Null)
					 * @return string
					 */
					return $this->strFullStory;

				case 'Xfields':
					/**
					 * Gets the value for strXfields (Not Null)
					 * @return string
					 */
					return $this->strXfields;

				case 'Title':
					/**
					 * Gets the value for strTitle (Not Null)
					 * @return string
					 */
					return $this->strTitle;

				case 'Descr':
					/**
					 * Gets the value for strDescr (Not Null)
					 * @return string
					 */
					return $this->strDescr;

				case 'Keywords':
					/**
					 * Gets the value for strKeywords (Not Null)
					 * @return string
					 */
					return $this->strKeywords;

				case 'Category':
					/**
					 * Gets the value for strCategory (Not Null)
					 * @return string
					 */
					return $this->strCategory;

				case 'AltName':
					/**
					 * Gets the value for strAltName (Not Null)
					 * @return string
					 */
					return $this->strAltName;

				case 'CommNum':
					/**
					 * Gets the value for intCommNum (Not Null)
					 * @return integer
					 */
					return $this->intCommNum;

				case 'AllowComm':
					/**
					 * Gets the value for blnAllowComm (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowComm;

				case 'AllowMain':
					/**
					 * Gets the value for blnAllowMain (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowMain;

				case 'AllowRate':
					/**
					 * Gets the value for blnAllowRate (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowRate;

				case 'Approve':
					/**
					 * Gets the value for blnApprove (Not Null)
					 * @return boolean
					 */
					return $this->blnApprove;

				case 'Fixed':
					/**
					 * Gets the value for blnFixed (Not Null)
					 * @return boolean
					 */
					return $this->blnFixed;

				case 'Rating':
					/**
					 * Gets the value for intRating (Not Null)
					 * @return integer
					 */
					return $this->intRating;

				case 'AllowBr':
					/**
					 * Gets the value for blnAllowBr (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowBr;

				case 'VoteNum':
					/**
					 * Gets the value for intVoteNum (Not Null)
					 * @return integer
					 */
					return $this->intVoteNum;

				case 'NewsRead':
					/**
					 * Gets the value for intNewsRead (Not Null)
					 * @return integer
					 */
					return $this->intNewsRead;

				case 'Votes':
					/**
					 * Gets the value for blnVotes (Not Null)
					 * @return boolean
					 */
					return $this->blnVotes;

				case 'Access':
					/**
					 * Gets the value for strAccess (Not Null)
					 * @return string
					 */
					return $this->strAccess;

				case 'Symbol':
					/**
					 * Gets the value for strSymbol (Not Null)
					 * @return string
					 */
					return $this->strSymbol;

				case 'Flag':
					/**
					 * Gets the value for blnFlag (Not Null)
					 * @return boolean
					 */
					return $this->blnFlag;

				case 'Editdate':
					/**
					 * Gets the value for strEditdate (Not Null)
					 * @return string
					 */
					return $this->strEditdate;

				case 'Editor':
					/**
					 * Gets the value for strEditor (Not Null)
					 * @return string
					 */
					return $this->strEditor;

				case 'Reason':
					/**
					 * Gets the value for strReason (Not Null)
					 * @return string
					 */
					return $this->strReason;

				case 'ViewEdit':
					/**
					 * Gets the value for blnViewEdit (Not Null)
					 * @return boolean
					 */
					return $this->blnViewEdit;

				case 'Tags':
					/**
					 * Gets the value for strTags (Not Null)
					 * @return string
					 */
					return $this->strTags;

				case 'Metatitle':
					/**
					 * Gets the value for strMetatitle (Not Null)
					 * @return string
					 */
					return $this->strMetatitle;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_DleCommentsAsPost':
					/**
					 * Gets the value for the private _objDleCommentsAsPost (Read-Only)
					 * if set due to an expansion on the dle_comments.post_id reverse relationship
					 * @return DleComments
					 */
					return $this->_objDleCommentsAsPost;

				case '_DleCommentsAsPostArray':
					/**
					 * Gets the value for the private _objDleCommentsAsPostArray (Read-Only)
					 * if set due to an ExpandAsArray on the dle_comments.post_id reverse relationship
					 * @return DleComments[]
					 */
					return $this->_objDleCommentsAsPostArray;

				case '_DleTagsAsNews':
					/**
					 * Gets the value for the private _objDleTagsAsNews (Read-Only)
					 * if set due to an expansion on the dle_tags.news_id reverse relationship
					 * @return DleTags
					 */
					return $this->_objDleTagsAsNews;

				case '_DleTagsAsNewsArray':
					/**
					 * Gets the value for the private _objDleTagsAsNewsArray (Read-Only)
					 * if set due to an ExpandAsArray on the dle_tags.news_id reverse relationship
					 * @return DleTags[]
					 */
					return $this->_objDleTagsAsNewsArray;


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
				case 'Autor':
					/**
					 * Sets the value for strAutor (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAutor = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					/**
					 * Sets the value for dttDate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShortStory':
					/**
					 * Sets the value for strShortStory (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShortStory = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FullStory':
					/**
					 * Sets the value for strFullStory (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFullStory = QType::Cast($mixValue, QType::String));
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

				case 'Keywords':
					/**
					 * Sets the value for strKeywords (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strKeywords = QType::Cast($mixValue, QType::String));
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

				case 'AltName':
					/**
					 * Sets the value for strAltName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAltName = QType::Cast($mixValue, QType::String));
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

				case 'AllowRate':
					/**
					 * Sets the value for blnAllowRate (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowRate = QType::Cast($mixValue, QType::Boolean));
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

				case 'Fixed':
					/**
					 * Sets the value for blnFixed (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnFixed = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Rating':
					/**
					 * Sets the value for intRating (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intRating = QType::Cast($mixValue, QType::Integer));
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

				case 'VoteNum':
					/**
					 * Sets the value for intVoteNum (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intVoteNum = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsRead':
					/**
					 * Sets the value for intNewsRead (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intNewsRead = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Votes':
					/**
					 * Sets the value for blnVotes (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnVotes = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Access':
					/**
					 * Sets the value for strAccess (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAccess = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Symbol':
					/**
					 * Sets the value for strSymbol (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSymbol = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Flag':
					/**
					 * Sets the value for blnFlag (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnFlag = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Editdate':
					/**
					 * Sets the value for strEditdate (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEditdate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Editor':
					/**
					 * Sets the value for strEditor (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEditor = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Reason':
					/**
					 * Sets the value for strReason (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReason = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ViewEdit':
					/**
					 * Sets the value for blnViewEdit (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnViewEdit = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tags':
					/**
					 * Sets the value for strTags (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTags = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for DleCommentsAsPost
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DleCommentsesAsPost as an array of DleComments objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleComments[]
		*/
		public function GetDleCommentsAsPostArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return DleComments::LoadArrayByPostId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DleCommentsesAsPost
		 * @return int
		*/
		public function CountDleCommentsesAsPost() {
			if ((is_null($this->intId)))
				return 0;

			return DleComments::CountByPostId($this->intId);
		}

		/**
		 * Associates a DleCommentsAsPost
		 * @param DleComments $objDleComments
		 * @return void
		*/
		public function AssociateDleCommentsAsPost(DleComments $objDleComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleCommentsAsPost on this unsaved DlePost.');
			if ((is_null($objDleComments->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleCommentsAsPost on this DlePost with an unsaved DleComments.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_comments`
				SET
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleComments->Id) . ' 
			');
		}

		/**
		 * Unassociates a DleCommentsAsPost
		 * @param DleComments $objDleComments
		 * @return void
		*/
		public function UnassociateDleCommentsAsPost(DleComments $objDleComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsPost on this unsaved DlePost.');
			if ((is_null($objDleComments->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsPost on this DlePost with an unsaved DleComments.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_comments`
				SET
					`post_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleComments->Id) . ' AND
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all DleCommentsesAsPost
		 * @return void
		*/
		public function UnassociateAllDleCommentsesAsPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsPost on this unsaved DlePost.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_comments`
				SET
					`post_id` = null
				WHERE
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated DleCommentsAsPost
		 * @param DleComments $objDleComments
		 * @return void
		*/
		public function DeleteAssociatedDleCommentsAsPost(DleComments $objDleComments) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsPost on this unsaved DlePost.');
			if ((is_null($objDleComments->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsPost on this DlePost with an unsaved DleComments.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_comments`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleComments->Id) . ' AND
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated DleCommentsesAsPost
		 * @return void
		*/
		public function DeleteAllDleCommentsesAsPost() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleCommentsAsPost on this unsaved DlePost.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_comments`
				WHERE
					`post_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}


		// Related Objects' Methods for DleTagsAsNews
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DleTagsesAsNews as an array of DleTags objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleTags[]
		*/
		public function GetDleTagsAsNewsArray($objOptionalClauses = null) {
			if ((is_null($this->intId)))
				return array();

			try {
				return DleTags::LoadArrayByNewsId($this->intId, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DleTagsesAsNews
		 * @return int
		*/
		public function CountDleTagsesAsNews() {
			if ((is_null($this->intId)))
				return 0;

			return DleTags::CountByNewsId($this->intId);
		}

		/**
		 * Associates a DleTagsAsNews
		 * @param DleTags $objDleTags
		 * @return void
		*/
		public function AssociateDleTagsAsNews(DleTags $objDleTags) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleTagsAsNews on this unsaved DlePost.');
			if ((is_null($objDleTags->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDleTagsAsNews on this DlePost with an unsaved DleTags.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_tags`
				SET
					`news_id` = ' . $objDatabase->SqlVariable($this->intId) . '
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleTags->Id) . ' 
			');
		}

		/**
		 * Unassociates a DleTagsAsNews
		 * @param DleTags $objDleTags
		 * @return void
		*/
		public function UnassociateDleTagsAsNews(DleTags $objDleTags) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleTagsAsNews on this unsaved DlePost.');
			if ((is_null($objDleTags->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleTagsAsNews on this DlePost with an unsaved DleTags.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_tags`
				SET
					`news_id` = null
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleTags->Id) . ' AND
					`news_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Unassociates all DleTagsesAsNews
		 * @return void
		*/
		public function UnassociateAllDleTagsesAsNews() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleTagsAsNews on this unsaved DlePost.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dle_tags`
				SET
					`news_id` = null
				WHERE
					`news_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes an associated DleTagsAsNews
		 * @param DleTags $objDleTags
		 * @return void
		*/
		public function DeleteAssociatedDleTagsAsNews(DleTags $objDleTags) {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleTagsAsNews on this unsaved DlePost.');
			if ((is_null($objDleTags->Id)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleTagsAsNews on this DlePost with an unsaved DleTags.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_tags`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($objDleTags->Id) . ' AND
					`news_id` = ' . $objDatabase->SqlVariable($this->intId) . '
			');
		}

		/**
		 * Deletes all associated DleTagsesAsNews
		 * @return void
		*/
		public function DeleteAllDleTagsesAsNews() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDleTagsAsNews on this unsaved DlePost.');

			// Get the Database Object for this Class
			$objDatabase = DlePost::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_tags`
				WHERE
					`news_id` = ' . $objDatabase->SqlVariable($this->intId) . '
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
			return "dle_post";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DlePost::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DlePost"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Autor" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ShortStory" type="xsd:string"/>';
			$strToReturn .= '<element name="FullStory" type="xsd:string"/>';
			$strToReturn .= '<element name="Xfields" type="xsd:string"/>';
			$strToReturn .= '<element name="Title" type="xsd:string"/>';
			$strToReturn .= '<element name="Descr" type="xsd:string"/>';
			$strToReturn .= '<element name="Keywords" type="xsd:string"/>';
			$strToReturn .= '<element name="Category" type="xsd:string"/>';
			$strToReturn .= '<element name="AltName" type="xsd:string"/>';
			$strToReturn .= '<element name="CommNum" type="xsd:int"/>';
			$strToReturn .= '<element name="AllowComm" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowMain" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowRate" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Approve" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Fixed" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Rating" type="xsd:int"/>';
			$strToReturn .= '<element name="AllowBr" type="xsd:boolean"/>';
			$strToReturn .= '<element name="VoteNum" type="xsd:int"/>';
			$strToReturn .= '<element name="NewsRead" type="xsd:int"/>';
			$strToReturn .= '<element name="Votes" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Access" type="xsd:string"/>';
			$strToReturn .= '<element name="Symbol" type="xsd:string"/>';
			$strToReturn .= '<element name="Flag" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Editdate" type="xsd:string"/>';
			$strToReturn .= '<element name="Editor" type="xsd:string"/>';
			$strToReturn .= '<element name="Reason" type="xsd:string"/>';
			$strToReturn .= '<element name="ViewEdit" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Tags" type="xsd:string"/>';
			$strToReturn .= '<element name="Metatitle" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DlePost', $strComplexTypeArray)) {
				$strComplexTypeArray['DlePost'] = DlePost::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DlePost::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DlePost();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Autor'))
				$objToReturn->strAutor = $objSoapObject->Autor;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'ShortStory'))
				$objToReturn->strShortStory = $objSoapObject->ShortStory;
			if (property_exists($objSoapObject, 'FullStory'))
				$objToReturn->strFullStory = $objSoapObject->FullStory;
			if (property_exists($objSoapObject, 'Xfields'))
				$objToReturn->strXfields = $objSoapObject->Xfields;
			if (property_exists($objSoapObject, 'Title'))
				$objToReturn->strTitle = $objSoapObject->Title;
			if (property_exists($objSoapObject, 'Descr'))
				$objToReturn->strDescr = $objSoapObject->Descr;
			if (property_exists($objSoapObject, 'Keywords'))
				$objToReturn->strKeywords = $objSoapObject->Keywords;
			if (property_exists($objSoapObject, 'Category'))
				$objToReturn->strCategory = $objSoapObject->Category;
			if (property_exists($objSoapObject, 'AltName'))
				$objToReturn->strAltName = $objSoapObject->AltName;
			if (property_exists($objSoapObject, 'CommNum'))
				$objToReturn->intCommNum = $objSoapObject->CommNum;
			if (property_exists($objSoapObject, 'AllowComm'))
				$objToReturn->blnAllowComm = $objSoapObject->AllowComm;
			if (property_exists($objSoapObject, 'AllowMain'))
				$objToReturn->blnAllowMain = $objSoapObject->AllowMain;
			if (property_exists($objSoapObject, 'AllowRate'))
				$objToReturn->blnAllowRate = $objSoapObject->AllowRate;
			if (property_exists($objSoapObject, 'Approve'))
				$objToReturn->blnApprove = $objSoapObject->Approve;
			if (property_exists($objSoapObject, 'Fixed'))
				$objToReturn->blnFixed = $objSoapObject->Fixed;
			if (property_exists($objSoapObject, 'Rating'))
				$objToReturn->intRating = $objSoapObject->Rating;
			if (property_exists($objSoapObject, 'AllowBr'))
				$objToReturn->blnAllowBr = $objSoapObject->AllowBr;
			if (property_exists($objSoapObject, 'VoteNum'))
				$objToReturn->intVoteNum = $objSoapObject->VoteNum;
			if (property_exists($objSoapObject, 'NewsRead'))
				$objToReturn->intNewsRead = $objSoapObject->NewsRead;
			if (property_exists($objSoapObject, 'Votes'))
				$objToReturn->blnVotes = $objSoapObject->Votes;
			if (property_exists($objSoapObject, 'Access'))
				$objToReturn->strAccess = $objSoapObject->Access;
			if (property_exists($objSoapObject, 'Symbol'))
				$objToReturn->strSymbol = $objSoapObject->Symbol;
			if (property_exists($objSoapObject, 'Flag'))
				$objToReturn->blnFlag = $objSoapObject->Flag;
			if (property_exists($objSoapObject, 'Editdate'))
				$objToReturn->strEditdate = $objSoapObject->Editdate;
			if (property_exists($objSoapObject, 'Editor'))
				$objToReturn->strEditor = $objSoapObject->Editor;
			if (property_exists($objSoapObject, 'Reason'))
				$objToReturn->strReason = $objSoapObject->Reason;
			if (property_exists($objSoapObject, 'ViewEdit'))
				$objToReturn->blnViewEdit = $objSoapObject->ViewEdit;
			if (property_exists($objSoapObject, 'Tags'))
				$objToReturn->strTags = $objSoapObject->Tags;
			if (property_exists($objSoapObject, 'Metatitle'))
				$objToReturn->strMetatitle = $objSoapObject->Metatitle;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DlePost::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['Autor'] = $this->strAutor;
			$iArray['Date'] = $this->dttDate;
			$iArray['ShortStory'] = $this->strShortStory;
			$iArray['FullStory'] = $this->strFullStory;
			$iArray['Xfields'] = $this->strXfields;
			$iArray['Title'] = $this->strTitle;
			$iArray['Descr'] = $this->strDescr;
			$iArray['Keywords'] = $this->strKeywords;
			$iArray['Category'] = $this->strCategory;
			$iArray['AltName'] = $this->strAltName;
			$iArray['CommNum'] = $this->intCommNum;
			$iArray['AllowComm'] = $this->blnAllowComm;
			$iArray['AllowMain'] = $this->blnAllowMain;
			$iArray['AllowRate'] = $this->blnAllowRate;
			$iArray['Approve'] = $this->blnApprove;
			$iArray['Fixed'] = $this->blnFixed;
			$iArray['Rating'] = $this->intRating;
			$iArray['AllowBr'] = $this->blnAllowBr;
			$iArray['VoteNum'] = $this->intVoteNum;
			$iArray['NewsRead'] = $this->intNewsRead;
			$iArray['Votes'] = $this->blnVotes;
			$iArray['Access'] = $this->strAccess;
			$iArray['Symbol'] = $this->strSymbol;
			$iArray['Flag'] = $this->blnFlag;
			$iArray['Editdate'] = $this->strEditdate;
			$iArray['Editor'] = $this->strEditor;
			$iArray['Reason'] = $this->strReason;
			$iArray['ViewEdit'] = $this->blnViewEdit;
			$iArray['Tags'] = $this->strTags;
			$iArray['Metatitle'] = $this->strMetatitle;
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
     * @property-read QQNode $Autor
     * @property-read QQNode $Date
     * @property-read QQNode $ShortStory
     * @property-read QQNode $FullStory
     * @property-read QQNode $Xfields
     * @property-read QQNode $Title
     * @property-read QQNode $Descr
     * @property-read QQNode $Keywords
     * @property-read QQNode $Category
     * @property-read QQNode $AltName
     * @property-read QQNode $CommNum
     * @property-read QQNode $AllowComm
     * @property-read QQNode $AllowMain
     * @property-read QQNode $AllowRate
     * @property-read QQNode $Approve
     * @property-read QQNode $Fixed
     * @property-read QQNode $Rating
     * @property-read QQNode $AllowBr
     * @property-read QQNode $VoteNum
     * @property-read QQNode $NewsRead
     * @property-read QQNode $Votes
     * @property-read QQNode $Access
     * @property-read QQNode $Symbol
     * @property-read QQNode $Flag
     * @property-read QQNode $Editdate
     * @property-read QQNode $Editor
     * @property-read QQNode $Reason
     * @property-read QQNode $ViewEdit
     * @property-read QQNode $Tags
     * @property-read QQNode $Metatitle
     *
     *
     * @property-read QQReverseReferenceNodeDleComments $DleCommentsAsPost
     * @property-read QQReverseReferenceNodeDleTags $DleTagsAsNews

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDlePost extends QQNode {
		protected $strTableName = 'dle_post';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DlePost';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'Autor':
					return new QQNode('autor', 'Autor', 'VarChar', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'ShortStory':
					return new QQNode('short_story', 'ShortStory', 'Blob', $this);
				case 'FullStory':
					return new QQNode('full_story', 'FullStory', 'Blob', $this);
				case 'Xfields':
					return new QQNode('xfields', 'Xfields', 'Blob', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'VarChar', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'VarChar', $this);
				case 'Keywords':
					return new QQNode('keywords', 'Keywords', 'Blob', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'VarChar', $this);
				case 'AltName':
					return new QQNode('alt_name', 'AltName', 'VarChar', $this);
				case 'CommNum':
					return new QQNode('comm_num', 'CommNum', 'Integer', $this);
				case 'AllowComm':
					return new QQNode('allow_comm', 'AllowComm', 'Bit', $this);
				case 'AllowMain':
					return new QQNode('allow_main', 'AllowMain', 'Bit', $this);
				case 'AllowRate':
					return new QQNode('allow_rate', 'AllowRate', 'Bit', $this);
				case 'Approve':
					return new QQNode('approve', 'Approve', 'Bit', $this);
				case 'Fixed':
					return new QQNode('fixed', 'Fixed', 'Bit', $this);
				case 'Rating':
					return new QQNode('rating', 'Rating', 'Integer', $this);
				case 'AllowBr':
					return new QQNode('allow_br', 'AllowBr', 'Bit', $this);
				case 'VoteNum':
					return new QQNode('vote_num', 'VoteNum', 'Integer', $this);
				case 'NewsRead':
					return new QQNode('news_read', 'NewsRead', 'Integer', $this);
				case 'Votes':
					return new QQNode('votes', 'Votes', 'Bit', $this);
				case 'Access':
					return new QQNode('access', 'Access', 'VarChar', $this);
				case 'Symbol':
					return new QQNode('symbol', 'Symbol', 'VarChar', $this);
				case 'Flag':
					return new QQNode('flag', 'Flag', 'Bit', $this);
				case 'Editdate':
					return new QQNode('editdate', 'Editdate', 'VarChar', $this);
				case 'Editor':
					return new QQNode('editor', 'Editor', 'VarChar', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'VarChar', $this);
				case 'ViewEdit':
					return new QQNode('view_edit', 'ViewEdit', 'Bit', $this);
				case 'Tags':
					return new QQNode('tags', 'Tags', 'VarChar', $this);
				case 'Metatitle':
					return new QQNode('metatitle', 'Metatitle', 'VarChar', $this);
				case 'DleCommentsAsPost':
					return new QQReverseReferenceNodeDleComments($this, 'dlecommentsaspost', 'reverse_reference', 'post_id');
				case 'DleTagsAsNews':
					return new QQReverseReferenceNodeDleTags($this, 'dletagsasnews', 'reverse_reference', 'news_id');

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
     * @property-read QQNode $Autor
     * @property-read QQNode $Date
     * @property-read QQNode $ShortStory
     * @property-read QQNode $FullStory
     * @property-read QQNode $Xfields
     * @property-read QQNode $Title
     * @property-read QQNode $Descr
     * @property-read QQNode $Keywords
     * @property-read QQNode $Category
     * @property-read QQNode $AltName
     * @property-read QQNode $CommNum
     * @property-read QQNode $AllowComm
     * @property-read QQNode $AllowMain
     * @property-read QQNode $AllowRate
     * @property-read QQNode $Approve
     * @property-read QQNode $Fixed
     * @property-read QQNode $Rating
     * @property-read QQNode $AllowBr
     * @property-read QQNode $VoteNum
     * @property-read QQNode $NewsRead
     * @property-read QQNode $Votes
     * @property-read QQNode $Access
     * @property-read QQNode $Symbol
     * @property-read QQNode $Flag
     * @property-read QQNode $Editdate
     * @property-read QQNode $Editor
     * @property-read QQNode $Reason
     * @property-read QQNode $ViewEdit
     * @property-read QQNode $Tags
     * @property-read QQNode $Metatitle
     *
     *
     * @property-read QQReverseReferenceNodeDleComments $DleCommentsAsPost
     * @property-read QQReverseReferenceNodeDleTags $DleTagsAsNews

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDlePost extends QQReverseReferenceNode {
		protected $strTableName = 'dle_post';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DlePost';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Autor':
					return new QQNode('autor', 'Autor', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'ShortStory':
					return new QQNode('short_story', 'ShortStory', 'string', $this);
				case 'FullStory':
					return new QQNode('full_story', 'FullStory', 'string', $this);
				case 'Xfields':
					return new QQNode('xfields', 'Xfields', 'string', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'Descr':
					return new QQNode('descr', 'Descr', 'string', $this);
				case 'Keywords':
					return new QQNode('keywords', 'Keywords', 'string', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'string', $this);
				case 'AltName':
					return new QQNode('alt_name', 'AltName', 'string', $this);
				case 'CommNum':
					return new QQNode('comm_num', 'CommNum', 'integer', $this);
				case 'AllowComm':
					return new QQNode('allow_comm', 'AllowComm', 'boolean', $this);
				case 'AllowMain':
					return new QQNode('allow_main', 'AllowMain', 'boolean', $this);
				case 'AllowRate':
					return new QQNode('allow_rate', 'AllowRate', 'boolean', $this);
				case 'Approve':
					return new QQNode('approve', 'Approve', 'boolean', $this);
				case 'Fixed':
					return new QQNode('fixed', 'Fixed', 'boolean', $this);
				case 'Rating':
					return new QQNode('rating', 'Rating', 'integer', $this);
				case 'AllowBr':
					return new QQNode('allow_br', 'AllowBr', 'boolean', $this);
				case 'VoteNum':
					return new QQNode('vote_num', 'VoteNum', 'integer', $this);
				case 'NewsRead':
					return new QQNode('news_read', 'NewsRead', 'integer', $this);
				case 'Votes':
					return new QQNode('votes', 'Votes', 'boolean', $this);
				case 'Access':
					return new QQNode('access', 'Access', 'string', $this);
				case 'Symbol':
					return new QQNode('symbol', 'Symbol', 'string', $this);
				case 'Flag':
					return new QQNode('flag', 'Flag', 'boolean', $this);
				case 'Editdate':
					return new QQNode('editdate', 'Editdate', 'string', $this);
				case 'Editor':
					return new QQNode('editor', 'Editor', 'string', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'string', $this);
				case 'ViewEdit':
					return new QQNode('view_edit', 'ViewEdit', 'boolean', $this);
				case 'Tags':
					return new QQNode('tags', 'Tags', 'string', $this);
				case 'Metatitle':
					return new QQNode('metatitle', 'Metatitle', 'string', $this);
				case 'DleCommentsAsPost':
					return new QQReverseReferenceNodeDleComments($this, 'dlecommentsaspost', 'reverse_reference', 'post_id');
				case 'DleTagsAsNews':
					return new QQReverseReferenceNodeDleTags($this, 'dletagsasnews', 'reverse_reference', 'news_id');

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
