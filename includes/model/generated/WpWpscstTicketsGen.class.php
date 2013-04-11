<?php
	/**
	 * The abstract WpWpscstTicketsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpWpscstTickets subclass which
	 * extends this WpWpscstTicketsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpWpscstTickets class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Primkey the value for intPrimkey (Read-Only PK)
	 * @property string $Title the value for strTitle (Not Null)
	 * @property string $InitialMessage the value for strInitialMessage (Not Null)
	 * @property integer $UserId the value for intUserId (Not Null)
	 * @property string $Email the value for strEmail (Not Null)
	 * @property integer $AssignedTo the value for intAssignedTo (Not Null)
	 * @property string $Severity the value for strSeverity (Not Null)
	 * @property string $Resolution the value for strResolution (Not Null)
	 * @property string $TimePosted the value for strTimePosted (Not Null)
	 * @property string $LastUpdated the value for strLastUpdated (Not Null)
	 * @property string $LastStaffReply the value for strLastStaffReply (Not Null)
	 * @property string $TargetResponseTime the value for strTargetResponseTime (Not Null)
	 * @property string $Type the value for strType (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpWpscstTicketsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_wpscst_tickets.primkey
		 * @var integer intPrimkey
		 */
		protected $intPrimkey;
		const PrimkeyDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.title
		 * @var string strTitle
		 */
		protected $strTitle;
		const TitleMaxLength = 512;
		const TitleDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.initial_message
		 * @var string strInitialMessage
		 */
		protected $strInitialMessage;
		const InitialMessageDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 256;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.assigned_to
		 * @var integer intAssignedTo
		 */
		protected $intAssignedTo;
		const AssignedToDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.severity
		 * @var string strSeverity
		 */
		protected $strSeverity;
		const SeverityMaxLength = 64;
		const SeverityDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.resolution
		 * @var string strResolution
		 */
		protected $strResolution;
		const ResolutionMaxLength = 64;
		const ResolutionDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.time_posted
		 * @var string strTimePosted
		 */
		protected $strTimePosted;
		const TimePostedMaxLength = 128;
		const TimePostedDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.last_updated
		 * @var string strLastUpdated
		 */
		protected $strLastUpdated;
		const LastUpdatedMaxLength = 128;
		const LastUpdatedDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.last_staff_reply
		 * @var string strLastStaffReply
		 */
		protected $strLastStaffReply;
		const LastStaffReplyMaxLength = 128;
		const LastStaffReplyDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.target_response_time
		 * @var string strTargetResponseTime
		 */
		protected $strTargetResponseTime;
		const TargetResponseTimeMaxLength = 128;
		const TargetResponseTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wpscst_tickets.type
		 * @var string strType
		 */
		protected $strType;
		const TypeMaxLength = 255;
		const TypeDefault = null;


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
			$this->intPrimkey = WpWpscstTickets::PrimkeyDefault;
			$this->strTitle = WpWpscstTickets::TitleDefault;
			$this->strInitialMessage = WpWpscstTickets::InitialMessageDefault;
			$this->intUserId = WpWpscstTickets::UserIdDefault;
			$this->strEmail = WpWpscstTickets::EmailDefault;
			$this->intAssignedTo = WpWpscstTickets::AssignedToDefault;
			$this->strSeverity = WpWpscstTickets::SeverityDefault;
			$this->strResolution = WpWpscstTickets::ResolutionDefault;
			$this->strTimePosted = WpWpscstTickets::TimePostedDefault;
			$this->strLastUpdated = WpWpscstTickets::LastUpdatedDefault;
			$this->strLastStaffReply = WpWpscstTickets::LastStaffReplyDefault;
			$this->strTargetResponseTime = WpWpscstTickets::TargetResponseTimeDefault;
			$this->strType = WpWpscstTickets::TypeDefault;
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
		 * Load a WpWpscstTickets from PK Info
		 * @param integer $intPrimkey
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWpscstTickets
		 */
		public static function Load($intPrimkey, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpWpscstTickets', $intPrimkey);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpWpscstTickets::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpWpscstTickets()->Primkey, $intPrimkey)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpWpscstTicketses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWpscstTickets[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpWpscstTickets::QueryArray to perform the LoadAll query
			try {
				return WpWpscstTickets::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpWpscstTicketses
		 * @return int
		 */
		public static function CountAll() {
			// Call WpWpscstTickets::QueryCount to perform the CountAll query
			return WpWpscstTickets::QueryCount(QQ::All());
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
			$objDatabase = WpWpscstTickets::GetDatabase();

			// Create/Build out the QueryBuilder object with WpWpscstTickets-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_wpscst_tickets');

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
				WpWpscstTickets::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_wpscst_tickets');

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
		 * Static Qcubed Query method to query for a single WpWpscstTickets object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpWpscstTickets the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpWpscstTickets::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpWpscstTickets object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpWpscstTickets::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpWpscstTickets::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpWpscstTickets objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpWpscstTickets[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpWpscstTickets::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpWpscstTickets::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpWpscstTickets::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpWpscstTickets objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpWpscstTickets::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpWpscstTickets::GetDatabase();

			$strQuery = WpWpscstTickets::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wpwpscsttickets', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpWpscstTickets::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpWpscstTickets
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_wpscst_tickets';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'primkey', $strAliasPrefix . 'primkey');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'primkey', $strAliasPrefix . 'primkey');
			    $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
			    $objBuilder->AddSelectItem($strTableName, 'initial_message', $strAliasPrefix . 'initial_message');
			    $objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			    $objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			    $objBuilder->AddSelectItem($strTableName, 'assigned_to', $strAliasPrefix . 'assigned_to');
			    $objBuilder->AddSelectItem($strTableName, 'severity', $strAliasPrefix . 'severity');
			    $objBuilder->AddSelectItem($strTableName, 'resolution', $strAliasPrefix . 'resolution');
			    $objBuilder->AddSelectItem($strTableName, 'time_posted', $strAliasPrefix . 'time_posted');
			    $objBuilder->AddSelectItem($strTableName, 'last_updated', $strAliasPrefix . 'last_updated');
			    $objBuilder->AddSelectItem($strTableName, 'last_staff_reply', $strAliasPrefix . 'last_staff_reply');
			    $objBuilder->AddSelectItem($strTableName, 'target_response_time', $strAliasPrefix . 'target_response_time');
			    $objBuilder->AddSelectItem($strTableName, 'type', $strAliasPrefix . 'type');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpWpscstTickets from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpWpscstTickets::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpWpscstTickets
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpWpscstTickets object
			$objToReturn = new WpWpscstTickets();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'primkey';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPrimkey = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTitle = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'initial_message';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strInitialMessage = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'email';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'assigned_to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAssignedTo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'severity';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSeverity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'resolution';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strResolution = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'time_posted';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTimePosted = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'last_updated';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLastUpdated = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'last_staff_reply';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLastStaffReply = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'target_response_time';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTargetResponseTime = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strType = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Primkey != $objPreviousItem->Primkey) {
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
				$strAliasPrefix = 'wp_wpscst_tickets__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpWpscstTicketses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpWpscstTickets[]
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
					$objItem = WpWpscstTickets::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpWpscstTickets::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpWpscstTickets object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpWpscstTickets next row resulting from the query
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
			return WpWpscstTickets::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpWpscstTickets object,
		 * by Primkey Index(es)
		 * @param integer $intPrimkey
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWpscstTickets
		*/
		public static function LoadByPrimkey($intPrimkey, $objOptionalClauses = null) {
			return WpWpscstTickets::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpWpscstTickets()->Primkey, $intPrimkey)
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
		 * Save this WpWpscstTickets
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpWpscstTickets::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_wpscst_tickets` (
							`title`,
							`initial_message`,
							`user_id`,
							`email`,
							`assigned_to`,
							`severity`,
							`resolution`,
							`time_posted`,
							`last_updated`,
							`last_staff_reply`,
							`target_response_time`,
							`type`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strTitle) . ',
							' . $objDatabase->SqlVariable($this->strInitialMessage) . ',
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->intAssignedTo) . ',
							' . $objDatabase->SqlVariable($this->strSeverity) . ',
							' . $objDatabase->SqlVariable($this->strResolution) . ',
							' . $objDatabase->SqlVariable($this->strTimePosted) . ',
							' . $objDatabase->SqlVariable($this->strLastUpdated) . ',
							' . $objDatabase->SqlVariable($this->strLastStaffReply) . ',
							' . $objDatabase->SqlVariable($this->strTargetResponseTime) . ',
							' . $objDatabase->SqlVariable($this->strType) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intPrimkey = $objDatabase->InsertId('wp_wpscst_tickets', 'primkey');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_wpscst_tickets`
						SET
							`title` = ' . $objDatabase->SqlVariable($this->strTitle) . ',
							`initial_message` = ' . $objDatabase->SqlVariable($this->strInitialMessage) . ',
							`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . ',
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`assigned_to` = ' . $objDatabase->SqlVariable($this->intAssignedTo) . ',
							`severity` = ' . $objDatabase->SqlVariable($this->strSeverity) . ',
							`resolution` = ' . $objDatabase->SqlVariable($this->strResolution) . ',
							`time_posted` = ' . $objDatabase->SqlVariable($this->strTimePosted) . ',
							`last_updated` = ' . $objDatabase->SqlVariable($this->strLastUpdated) . ',
							`last_staff_reply` = ' . $objDatabase->SqlVariable($this->strLastStaffReply) . ',
							`target_response_time` = ' . $objDatabase->SqlVariable($this->strTargetResponseTime) . ',
							`type` = ' . $objDatabase->SqlVariable($this->strType) . '
						WHERE
							`primkey` = ' . $objDatabase->SqlVariable($this->intPrimkey) . '
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
		 * Delete this WpWpscstTickets
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intPrimkey)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpWpscstTickets with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpWpscstTickets::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wpscst_tickets`
				WHERE
					`primkey` = ' . $objDatabase->SqlVariable($this->intPrimkey) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpWpscstTickets ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpWpscstTickets', $this->intPrimkey);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpWpscstTicketses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpWpscstTickets::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wpscst_tickets`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_wpscst_tickets table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpWpscstTickets::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_wpscst_tickets`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpWpscstTickets from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpWpscstTickets object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpWpscstTickets::Load($this->intPrimkey);

			// Update $this's local variables to match
			$this->strTitle = $objReloaded->strTitle;
			$this->strInitialMessage = $objReloaded->strInitialMessage;
			$this->intUserId = $objReloaded->intUserId;
			$this->strEmail = $objReloaded->strEmail;
			$this->intAssignedTo = $objReloaded->intAssignedTo;
			$this->strSeverity = $objReloaded->strSeverity;
			$this->strResolution = $objReloaded->strResolution;
			$this->strTimePosted = $objReloaded->strTimePosted;
			$this->strLastUpdated = $objReloaded->strLastUpdated;
			$this->strLastStaffReply = $objReloaded->strLastStaffReply;
			$this->strTargetResponseTime = $objReloaded->strTargetResponseTime;
			$this->strType = $objReloaded->strType;
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
				case 'Primkey':
					/**
					 * Gets the value for intPrimkey (Read-Only PK)
					 * @return integer
					 */
					return $this->intPrimkey;

				case 'Title':
					/**
					 * Gets the value for strTitle (Not Null)
					 * @return string
					 */
					return $this->strTitle;

				case 'InitialMessage':
					/**
					 * Gets the value for strInitialMessage (Not Null)
					 * @return string
					 */
					return $this->strInitialMessage;

				case 'UserId':
					/**
					 * Gets the value for intUserId (Not Null)
					 * @return integer
					 */
					return $this->intUserId;

				case 'Email':
					/**
					 * Gets the value for strEmail (Not Null)
					 * @return string
					 */
					return $this->strEmail;

				case 'AssignedTo':
					/**
					 * Gets the value for intAssignedTo (Not Null)
					 * @return integer
					 */
					return $this->intAssignedTo;

				case 'Severity':
					/**
					 * Gets the value for strSeverity (Not Null)
					 * @return string
					 */
					return $this->strSeverity;

				case 'Resolution':
					/**
					 * Gets the value for strResolution (Not Null)
					 * @return string
					 */
					return $this->strResolution;

				case 'TimePosted':
					/**
					 * Gets the value for strTimePosted (Not Null)
					 * @return string
					 */
					return $this->strTimePosted;

				case 'LastUpdated':
					/**
					 * Gets the value for strLastUpdated (Not Null)
					 * @return string
					 */
					return $this->strLastUpdated;

				case 'LastStaffReply':
					/**
					 * Gets the value for strLastStaffReply (Not Null)
					 * @return string
					 */
					return $this->strLastStaffReply;

				case 'TargetResponseTime':
					/**
					 * Gets the value for strTargetResponseTime (Not Null)
					 * @return string
					 */
					return $this->strTargetResponseTime;

				case 'Type':
					/**
					 * Gets the value for strType (Not Null)
					 * @return string
					 */
					return $this->strType;


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

				case 'InitialMessage':
					/**
					 * Sets the value for strInitialMessage (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInitialMessage = QType::Cast($mixValue, QType::String));
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
						return ($this->intUserId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email':
					/**
					 * Sets the value for strEmail (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AssignedTo':
					/**
					 * Sets the value for intAssignedTo (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intAssignedTo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Severity':
					/**
					 * Sets the value for strSeverity (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSeverity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Resolution':
					/**
					 * Sets the value for strResolution (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strResolution = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TimePosted':
					/**
					 * Sets the value for strTimePosted (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTimePosted = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastUpdated':
					/**
					 * Sets the value for strLastUpdated (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastUpdated = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastStaffReply':
					/**
					 * Sets the value for strLastStaffReply (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastStaffReply = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TargetResponseTime':
					/**
					 * Sets the value for strTargetResponseTime (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTargetResponseTime = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Type':
					/**
					 * Sets the value for strType (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strType = QType::Cast($mixValue, QType::String));
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
			return "wp_wpscst_tickets";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpWpscstTickets::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpWpscstTickets"><sequence>';
			$strToReturn .= '<element name="Primkey" type="xsd:int"/>';
			$strToReturn .= '<element name="Title" type="xsd:string"/>';
			$strToReturn .= '<element name="InitialMessage" type="xsd:string"/>';
			$strToReturn .= '<element name="UserId" type="xsd:int"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="AssignedTo" type="xsd:int"/>';
			$strToReturn .= '<element name="Severity" type="xsd:string"/>';
			$strToReturn .= '<element name="Resolution" type="xsd:string"/>';
			$strToReturn .= '<element name="TimePosted" type="xsd:string"/>';
			$strToReturn .= '<element name="LastUpdated" type="xsd:string"/>';
			$strToReturn .= '<element name="LastStaffReply" type="xsd:string"/>';
			$strToReturn .= '<element name="TargetResponseTime" type="xsd:string"/>';
			$strToReturn .= '<element name="Type" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpWpscstTickets', $strComplexTypeArray)) {
				$strComplexTypeArray['WpWpscstTickets'] = WpWpscstTickets::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpWpscstTickets::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpWpscstTickets();
			if (property_exists($objSoapObject, 'Primkey'))
				$objToReturn->intPrimkey = $objSoapObject->Primkey;
			if (property_exists($objSoapObject, 'Title'))
				$objToReturn->strTitle = $objSoapObject->Title;
			if (property_exists($objSoapObject, 'InitialMessage'))
				$objToReturn->strInitialMessage = $objSoapObject->InitialMessage;
			if (property_exists($objSoapObject, 'UserId'))
				$objToReturn->intUserId = $objSoapObject->UserId;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'AssignedTo'))
				$objToReturn->intAssignedTo = $objSoapObject->AssignedTo;
			if (property_exists($objSoapObject, 'Severity'))
				$objToReturn->strSeverity = $objSoapObject->Severity;
			if (property_exists($objSoapObject, 'Resolution'))
				$objToReturn->strResolution = $objSoapObject->Resolution;
			if (property_exists($objSoapObject, 'TimePosted'))
				$objToReturn->strTimePosted = $objSoapObject->TimePosted;
			if (property_exists($objSoapObject, 'LastUpdated'))
				$objToReturn->strLastUpdated = $objSoapObject->LastUpdated;
			if (property_exists($objSoapObject, 'LastStaffReply'))
				$objToReturn->strLastStaffReply = $objSoapObject->LastStaffReply;
			if (property_exists($objSoapObject, 'TargetResponseTime'))
				$objToReturn->strTargetResponseTime = $objSoapObject->TargetResponseTime;
			if (property_exists($objSoapObject, 'Type'))
				$objToReturn->strType = $objSoapObject->Type;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpWpscstTickets::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Primkey'] = $this->intPrimkey;
			$iArray['Title'] = $this->strTitle;
			$iArray['InitialMessage'] = $this->strInitialMessage;
			$iArray['UserId'] = $this->intUserId;
			$iArray['Email'] = $this->strEmail;
			$iArray['AssignedTo'] = $this->intAssignedTo;
			$iArray['Severity'] = $this->strSeverity;
			$iArray['Resolution'] = $this->strResolution;
			$iArray['TimePosted'] = $this->strTimePosted;
			$iArray['LastUpdated'] = $this->strLastUpdated;
			$iArray['LastStaffReply'] = $this->strLastStaffReply;
			$iArray['TargetResponseTime'] = $this->strTargetResponseTime;
			$iArray['Type'] = $this->strType;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intPrimkey ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Primkey
     * @property-read QQNode $Title
     * @property-read QQNode $InitialMessage
     * @property-read QQNode $UserId
     * @property-read QQNode $Email
     * @property-read QQNode $AssignedTo
     * @property-read QQNode $Severity
     * @property-read QQNode $Resolution
     * @property-read QQNode $TimePosted
     * @property-read QQNode $LastUpdated
     * @property-read QQNode $LastStaffReply
     * @property-read QQNode $TargetResponseTime
     * @property-read QQNode $Type
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpWpscstTickets extends QQNode {
		protected $strTableName = 'wp_wpscst_tickets';
		protected $strPrimaryKey = 'primkey';
		protected $strClassName = 'WpWpscstTickets';
		public function __get($strName) {
			switch ($strName) {
				case 'Primkey':
					return new QQNode('primkey', 'Primkey', 'Integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'VarChar', $this);
				case 'InitialMessage':
					return new QQNode('initial_message', 'InitialMessage', 'Blob', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'VarChar', $this);
				case 'AssignedTo':
					return new QQNode('assigned_to', 'AssignedTo', 'Integer', $this);
				case 'Severity':
					return new QQNode('severity', 'Severity', 'VarChar', $this);
				case 'Resolution':
					return new QQNode('resolution', 'Resolution', 'VarChar', $this);
				case 'TimePosted':
					return new QQNode('time_posted', 'TimePosted', 'VarChar', $this);
				case 'LastUpdated':
					return new QQNode('last_updated', 'LastUpdated', 'VarChar', $this);
				case 'LastStaffReply':
					return new QQNode('last_staff_reply', 'LastStaffReply', 'VarChar', $this);
				case 'TargetResponseTime':
					return new QQNode('target_response_time', 'TargetResponseTime', 'VarChar', $this);
				case 'Type':
					return new QQNode('type', 'Type', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNode('primkey', 'Primkey', 'Integer', $this);
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
     * @property-read QQNode $Primkey
     * @property-read QQNode $Title
     * @property-read QQNode $InitialMessage
     * @property-read QQNode $UserId
     * @property-read QQNode $Email
     * @property-read QQNode $AssignedTo
     * @property-read QQNode $Severity
     * @property-read QQNode $Resolution
     * @property-read QQNode $TimePosted
     * @property-read QQNode $LastUpdated
     * @property-read QQNode $LastStaffReply
     * @property-read QQNode $TargetResponseTime
     * @property-read QQNode $Type
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpWpscstTickets extends QQReverseReferenceNode {
		protected $strTableName = 'wp_wpscst_tickets';
		protected $strPrimaryKey = 'primkey';
		protected $strClassName = 'WpWpscstTickets';
		public function __get($strName) {
			switch ($strName) {
				case 'Primkey':
					return new QQNode('primkey', 'Primkey', 'integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'string', $this);
				case 'InitialMessage':
					return new QQNode('initial_message', 'InitialMessage', 'string', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'AssignedTo':
					return new QQNode('assigned_to', 'AssignedTo', 'integer', $this);
				case 'Severity':
					return new QQNode('severity', 'Severity', 'string', $this);
				case 'Resolution':
					return new QQNode('resolution', 'Resolution', 'string', $this);
				case 'TimePosted':
					return new QQNode('time_posted', 'TimePosted', 'string', $this);
				case 'LastUpdated':
					return new QQNode('last_updated', 'LastUpdated', 'string', $this);
				case 'LastStaffReply':
					return new QQNode('last_staff_reply', 'LastStaffReply', 'string', $this);
				case 'TargetResponseTime':
					return new QQNode('target_response_time', 'TargetResponseTime', 'string', $this);
				case 'Type':
					return new QQNode('type', 'Type', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('primkey', 'Primkey', 'integer', $this);
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
