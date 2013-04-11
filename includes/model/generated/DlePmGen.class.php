<?php
	/**
	 * The abstract DlePmGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DlePm subclass which
	 * extends this DlePmGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DlePm class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $Subj the value for strSubj (Not Null)
	 * @property string $Text the value for strText (Not Null)
	 * @property integer $User the value for intUser (Not Null)
	 * @property string $UserFrom the value for strUserFrom (Not Null)
	 * @property string $Date the value for strDate (Not Null)
	 * @property string $PmRead the value for strPmRead (Not Null)
	 * @property string $Folder the value for strFolder (Not Null)
	 * @property boolean $Reply the value for blnReply (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DlePmGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_pm.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.subj
		 * @var string strSubj
		 */
		protected $strSubj;
		const SubjMaxLength = 255;
		const SubjDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.text
		 * @var string strText
		 */
		protected $strText;
		const TextDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.user
		 * @var integer intUser
		 */
		protected $intUser;
		const UserDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.user_from
		 * @var string strUserFrom
		 */
		protected $strUserFrom;
		const UserFromMaxLength = 50;
		const UserFromDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.date
		 * @var string strDate
		 */
		protected $strDate;
		const DateMaxLength = 15;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.pm_read
		 * @var string strPmRead
		 */
		protected $strPmRead;
		const PmReadMaxLength = 3;
		const PmReadDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.folder
		 * @var string strFolder
		 */
		protected $strFolder;
		const FolderMaxLength = 10;
		const FolderDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_pm.reply
		 * @var boolean blnReply
		 */
		protected $blnReply;
		const ReplyDefault = null;


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
			$this->intId = DlePm::IdDefault;
			$this->strSubj = DlePm::SubjDefault;
			$this->strText = DlePm::TextDefault;
			$this->intUser = DlePm::UserDefault;
			$this->strUserFrom = DlePm::UserFromDefault;
			$this->strDate = DlePm::DateDefault;
			$this->strPmRead = DlePm::PmReadDefault;
			$this->strFolder = DlePm::FolderDefault;
			$this->blnReply = DlePm::ReplyDefault;
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
		 * Load a DlePm from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePm
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DlePm', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DlePm::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DlePm()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DlePms
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePm[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DlePm::QueryArray to perform the LoadAll query
			try {
				return DlePm::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DlePms
		 * @return int
		 */
		public static function CountAll() {
			// Call DlePm::QueryCount to perform the CountAll query
			return DlePm::QueryCount(QQ::All());
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
			$objDatabase = DlePm::GetDatabase();

			// Create/Build out the QueryBuilder object with DlePm-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_pm');

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
				DlePm::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_pm');

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
		 * Static Qcubed Query method to query for a single DlePm object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DlePm the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DlePm::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DlePm object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DlePm::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DlePm::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DlePm objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DlePm[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DlePm::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DlePm::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DlePm::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DlePm objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DlePm::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DlePm::GetDatabase();

			$strQuery = DlePm::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dlepm', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DlePm::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DlePm
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_pm';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'subj', $strAliasPrefix . 'subj');
			    $objBuilder->AddSelectItem($strTableName, 'text', $strAliasPrefix . 'text');
			    $objBuilder->AddSelectItem($strTableName, 'user', $strAliasPrefix . 'user');
			    $objBuilder->AddSelectItem($strTableName, 'user_from', $strAliasPrefix . 'user_from');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'pm_read', $strAliasPrefix . 'pm_read');
			    $objBuilder->AddSelectItem($strTableName, 'folder', $strAliasPrefix . 'folder');
			    $objBuilder->AddSelectItem($strTableName, 'reply', $strAliasPrefix . 'reply');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DlePm from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DlePm::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DlePm
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DlePm object
			$objToReturn = new DlePm();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subj';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSubj = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'text';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strText = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'user';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUser = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'user_from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUserFrom = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pm_read';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPmRead = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'folder';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFolder = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'reply';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnReply = $objDbRow->GetColumn($strAliasName, 'Bit');

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
				$strAliasPrefix = 'dle_pm__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DlePms from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DlePm[]
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
					$objItem = DlePm::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DlePm::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DlePm object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DlePm next row resulting from the query
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
			return DlePm::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DlePm object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePm
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DlePm::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DlePm()->Id, $intId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of DlePm objects,
		 * by Folder Index(es)
		 * @param string $strFolder
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePm[]
		*/
		public static function LoadArrayByFolder($strFolder, $objOptionalClauses = null) {
			// Call DlePm::QueryArray to perform the LoadArrayByFolder query
			try {
				return DlePm::QueryArray(
					QQ::Equal(QQN::DlePm()->Folder, $strFolder),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePms
		 * by Folder Index(es)
		 * @param string $strFolder
		 * @return int
		*/
		public static function CountByFolder($strFolder) {
			// Call DlePm::QueryCount to perform the CountByFolder query
			return DlePm::QueryCount(
				QQ::Equal(QQN::DlePm()->Folder, $strFolder)
			);
		}

		/**
		 * Load an array of DlePm objects,
		 * by User Index(es)
		 * @param integer $intUser
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePm[]
		*/
		public static function LoadArrayByUser($intUser, $objOptionalClauses = null) {
			// Call DlePm::QueryArray to perform the LoadArrayByUser query
			try {
				return DlePm::QueryArray(
					QQ::Equal(QQN::DlePm()->User, $intUser),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePms
		 * by User Index(es)
		 * @param integer $intUser
		 * @return int
		*/
		public static function CountByUser($intUser) {
			// Call DlePm::QueryCount to perform the CountByUser query
			return DlePm::QueryCount(
				QQ::Equal(QQN::DlePm()->User, $intUser)
			);
		}

		/**
		 * Load an array of DlePm objects,
		 * by UserFrom Index(es)
		 * @param string $strUserFrom
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DlePm[]
		*/
		public static function LoadArrayByUserFrom($strUserFrom, $objOptionalClauses = null) {
			// Call DlePm::QueryArray to perform the LoadArrayByUserFrom query
			try {
				return DlePm::QueryArray(
					QQ::Equal(QQN::DlePm()->UserFrom, $strUserFrom),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DlePms
		 * by UserFrom Index(es)
		 * @param string $strUserFrom
		 * @return int
		*/
		public static function CountByUserFrom($strUserFrom) {
			// Call DlePm::QueryCount to perform the CountByUserFrom query
			return DlePm::QueryCount(
				QQ::Equal(QQN::DlePm()->UserFrom, $strUserFrom)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DlePm
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DlePm::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_pm` (
							`subj`,
							`text`,
							`user`,
							`user_from`,
							`date`,
							`pm_read`,
							`folder`,
							`reply`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strSubj) . ',
							' . $objDatabase->SqlVariable($this->strText) . ',
							' . $objDatabase->SqlVariable($this->intUser) . ',
							' . $objDatabase->SqlVariable($this->strUserFrom) . ',
							' . $objDatabase->SqlVariable($this->strDate) . ',
							' . $objDatabase->SqlVariable($this->strPmRead) . ',
							' . $objDatabase->SqlVariable($this->strFolder) . ',
							' . $objDatabase->SqlVariable($this->blnReply) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_pm', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_pm`
						SET
							`subj` = ' . $objDatabase->SqlVariable($this->strSubj) . ',
							`text` = ' . $objDatabase->SqlVariable($this->strText) . ',
							`user` = ' . $objDatabase->SqlVariable($this->intUser) . ',
							`user_from` = ' . $objDatabase->SqlVariable($this->strUserFrom) . ',
							`date` = ' . $objDatabase->SqlVariable($this->strDate) . ',
							`pm_read` = ' . $objDatabase->SqlVariable($this->strPmRead) . ',
							`folder` = ' . $objDatabase->SqlVariable($this->strFolder) . ',
							`reply` = ' . $objDatabase->SqlVariable($this->blnReply) . '
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
		 * Delete this DlePm
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DlePm with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DlePm::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_pm`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DlePm ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DlePm', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DlePms
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DlePm::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_pm`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_pm table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DlePm::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_pm`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DlePm from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DlePm object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DlePm::Load($this->intId);

			// Update $this's local variables to match
			$this->strSubj = $objReloaded->strSubj;
			$this->strText = $objReloaded->strText;
			$this->intUser = $objReloaded->intUser;
			$this->strUserFrom = $objReloaded->strUserFrom;
			$this->strDate = $objReloaded->strDate;
			$this->strPmRead = $objReloaded->strPmRead;
			$this->strFolder = $objReloaded->strFolder;
			$this->blnReply = $objReloaded->blnReply;
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

				case 'Subj':
					/**
					 * Gets the value for strSubj (Not Null)
					 * @return string
					 */
					return $this->strSubj;

				case 'Text':
					/**
					 * Gets the value for strText (Not Null)
					 * @return string
					 */
					return $this->strText;

				case 'User':
					/**
					 * Gets the value for intUser (Not Null)
					 * @return integer
					 */
					return $this->intUser;

				case 'UserFrom':
					/**
					 * Gets the value for strUserFrom (Not Null)
					 * @return string
					 */
					return $this->strUserFrom;

				case 'Date':
					/**
					 * Gets the value for strDate (Not Null)
					 * @return string
					 */
					return $this->strDate;

				case 'PmRead':
					/**
					 * Gets the value for strPmRead (Not Null)
					 * @return string
					 */
					return $this->strPmRead;

				case 'Folder':
					/**
					 * Gets the value for strFolder (Not Null)
					 * @return string
					 */
					return $this->strFolder;

				case 'Reply':
					/**
					 * Gets the value for blnReply (Not Null)
					 * @return boolean
					 */
					return $this->blnReply;


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
				case 'Subj':
					/**
					 * Sets the value for strSubj (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSubj = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Text':
					/**
					 * Sets the value for strText (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strText = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'User':
					/**
					 * Sets the value for intUser (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intUser = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UserFrom':
					/**
					 * Sets the value for strUserFrom (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUserFrom = QType::Cast($mixValue, QType::String));
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

				case 'PmRead':
					/**
					 * Sets the value for strPmRead (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPmRead = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Folder':
					/**
					 * Sets the value for strFolder (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFolder = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Reply':
					/**
					 * Sets the value for blnReply (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnReply = QType::Cast($mixValue, QType::Boolean));
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
			return "dle_pm";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DlePm::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DlePm"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="Subj" type="xsd:string"/>';
			$strToReturn .= '<element name="Text" type="xsd:string"/>';
			$strToReturn .= '<element name="User" type="xsd:int"/>';
			$strToReturn .= '<element name="UserFrom" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:string"/>';
			$strToReturn .= '<element name="PmRead" type="xsd:string"/>';
			$strToReturn .= '<element name="Folder" type="xsd:string"/>';
			$strToReturn .= '<element name="Reply" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DlePm', $strComplexTypeArray)) {
				$strComplexTypeArray['DlePm'] = DlePm::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DlePm::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DlePm();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'Subj'))
				$objToReturn->strSubj = $objSoapObject->Subj;
			if (property_exists($objSoapObject, 'Text'))
				$objToReturn->strText = $objSoapObject->Text;
			if (property_exists($objSoapObject, 'User'))
				$objToReturn->intUser = $objSoapObject->User;
			if (property_exists($objSoapObject, 'UserFrom'))
				$objToReturn->strUserFrom = $objSoapObject->UserFrom;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->strDate = $objSoapObject->Date;
			if (property_exists($objSoapObject, 'PmRead'))
				$objToReturn->strPmRead = $objSoapObject->PmRead;
			if (property_exists($objSoapObject, 'Folder'))
				$objToReturn->strFolder = $objSoapObject->Folder;
			if (property_exists($objSoapObject, 'Reply'))
				$objToReturn->blnReply = $objSoapObject->Reply;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DlePm::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Subj'] = $this->strSubj;
			$iArray['Text'] = $this->strText;
			$iArray['User'] = $this->intUser;
			$iArray['UserFrom'] = $this->strUserFrom;
			$iArray['Date'] = $this->strDate;
			$iArray['PmRead'] = $this->strPmRead;
			$iArray['Folder'] = $this->strFolder;
			$iArray['Reply'] = $this->blnReply;
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
     * @property-read QQNode $Subj
     * @property-read QQNode $Text
     * @property-read QQNode $User
     * @property-read QQNode $UserFrom
     * @property-read QQNode $Date
     * @property-read QQNode $PmRead
     * @property-read QQNode $Folder
     * @property-read QQNode $Reply
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDlePm extends QQNode {
		protected $strTableName = 'dle_pm';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DlePm';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'Subj':
					return new QQNode('subj', 'Subj', 'VarChar', $this);
				case 'Text':
					return new QQNode('text', 'Text', 'Blob', $this);
				case 'User':
					return new QQNode('user', 'User', 'Integer', $this);
				case 'UserFrom':
					return new QQNode('user_from', 'UserFrom', 'VarChar', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'VarChar', $this);
				case 'PmRead':
					return new QQNode('pm_read', 'PmRead', 'VarChar', $this);
				case 'Folder':
					return new QQNode('folder', 'Folder', 'VarChar', $this);
				case 'Reply':
					return new QQNode('reply', 'Reply', 'Bit', $this);

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
     * @property-read QQNode $Subj
     * @property-read QQNode $Text
     * @property-read QQNode $User
     * @property-read QQNode $UserFrom
     * @property-read QQNode $Date
     * @property-read QQNode $PmRead
     * @property-read QQNode $Folder
     * @property-read QQNode $Reply
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDlePm extends QQReverseReferenceNode {
		protected $strTableName = 'dle_pm';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DlePm';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'Subj':
					return new QQNode('subj', 'Subj', 'string', $this);
				case 'Text':
					return new QQNode('text', 'Text', 'string', $this);
				case 'User':
					return new QQNode('user', 'User', 'integer', $this);
				case 'UserFrom':
					return new QQNode('user_from', 'UserFrom', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'string', $this);
				case 'PmRead':
					return new QQNode('pm_read', 'PmRead', 'string', $this);
				case 'Folder':
					return new QQNode('folder', 'Folder', 'string', $this);
				case 'Reply':
					return new QQNode('reply', 'Reply', 'boolean', $this);

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
