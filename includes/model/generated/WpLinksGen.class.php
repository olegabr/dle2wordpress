<?php
	/**
	 * The abstract WpLinksGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpLinks subclass which
	 * extends this WpLinksGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpLinks class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $LinkId the value for intLinkId (Read-Only PK)
	 * @property string $LinkUrl the value for strLinkUrl (Not Null)
	 * @property string $LinkName the value for strLinkName (Not Null)
	 * @property string $LinkImage the value for strLinkImage (Not Null)
	 * @property string $LinkTarget the value for strLinkTarget (Not Null)
	 * @property string $LinkDescription the value for strLinkDescription (Not Null)
	 * @property string $LinkVisible the value for strLinkVisible (Not Null)
	 * @property integer $LinkOwner the value for intLinkOwner (Not Null)
	 * @property integer $LinkRating the value for intLinkRating (Not Null)
	 * @property QDateTime $LinkUpdated the value for dttLinkUpdated (Not Null)
	 * @property string $LinkRel the value for strLinkRel (Not Null)
	 * @property string $LinkNotes the value for strLinkNotes (Not Null)
	 * @property string $LinkRss the value for strLinkRss (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpLinksGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_links.link_id
		 * @var integer intLinkId
		 */
		protected $intLinkId;
		const LinkIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_url
		 * @var string strLinkUrl
		 */
		protected $strLinkUrl;
		const LinkUrlMaxLength = 255;
		const LinkUrlDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_name
		 * @var string strLinkName
		 */
		protected $strLinkName;
		const LinkNameMaxLength = 255;
		const LinkNameDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_image
		 * @var string strLinkImage
		 */
		protected $strLinkImage;
		const LinkImageMaxLength = 255;
		const LinkImageDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_target
		 * @var string strLinkTarget
		 */
		protected $strLinkTarget;
		const LinkTargetMaxLength = 25;
		const LinkTargetDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_description
		 * @var string strLinkDescription
		 */
		protected $strLinkDescription;
		const LinkDescriptionMaxLength = 255;
		const LinkDescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_visible
		 * @var string strLinkVisible
		 */
		protected $strLinkVisible;
		const LinkVisibleMaxLength = 20;
		const LinkVisibleDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_owner
		 * @var integer intLinkOwner
		 */
		protected $intLinkOwner;
		const LinkOwnerDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_rating
		 * @var integer intLinkRating
		 */
		protected $intLinkRating;
		const LinkRatingDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_updated
		 * @var QDateTime dttLinkUpdated
		 */
		protected $dttLinkUpdated;
		const LinkUpdatedDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_rel
		 * @var string strLinkRel
		 */
		protected $strLinkRel;
		const LinkRelMaxLength = 255;
		const LinkRelDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_notes
		 * @var string strLinkNotes
		 */
		protected $strLinkNotes;
		const LinkNotesDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_links.link_rss
		 * @var string strLinkRss
		 */
		protected $strLinkRss;
		const LinkRssMaxLength = 255;
		const LinkRssDefault = null;


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
			$this->intLinkId = WpLinks::LinkIdDefault;
			$this->strLinkUrl = WpLinks::LinkUrlDefault;
			$this->strLinkName = WpLinks::LinkNameDefault;
			$this->strLinkImage = WpLinks::LinkImageDefault;
			$this->strLinkTarget = WpLinks::LinkTargetDefault;
			$this->strLinkDescription = WpLinks::LinkDescriptionDefault;
			$this->strLinkVisible = WpLinks::LinkVisibleDefault;
			$this->intLinkOwner = WpLinks::LinkOwnerDefault;
			$this->intLinkRating = WpLinks::LinkRatingDefault;
			$this->dttLinkUpdated = (WpLinks::LinkUpdatedDefault === null)?null:new QDateTime(WpLinks::LinkUpdatedDefault);
			$this->strLinkRel = WpLinks::LinkRelDefault;
			$this->strLinkNotes = WpLinks::LinkNotesDefault;
			$this->strLinkRss = WpLinks::LinkRssDefault;
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
		 * Load a WpLinks from PK Info
		 * @param integer $intLinkId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpLinks
		 */
		public static function Load($intLinkId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpLinks', $intLinkId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpLinks::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpLinks()->LinkId, $intLinkId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpLinkses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpLinks[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpLinks::QueryArray to perform the LoadAll query
			try {
				return WpLinks::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpLinkses
		 * @return int
		 */
		public static function CountAll() {
			// Call WpLinks::QueryCount to perform the CountAll query
			return WpLinks::QueryCount(QQ::All());
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
			$objDatabase = WpLinks::GetDatabase();

			// Create/Build out the QueryBuilder object with WpLinks-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_links');

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
				WpLinks::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_links');

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
		 * Static Qcubed Query method to query for a single WpLinks object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpLinks the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpLinks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpLinks object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpLinks::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpLinks::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpLinks objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpLinks[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpLinks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpLinks::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpLinks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpLinks objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpLinks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpLinks::GetDatabase();

			$strQuery = WpLinks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wplinks', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpLinks::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpLinks
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_links';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'link_id', $strAliasPrefix . 'link_id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'link_id', $strAliasPrefix . 'link_id');
			    $objBuilder->AddSelectItem($strTableName, 'link_url', $strAliasPrefix . 'link_url');
			    $objBuilder->AddSelectItem($strTableName, 'link_name', $strAliasPrefix . 'link_name');
			    $objBuilder->AddSelectItem($strTableName, 'link_image', $strAliasPrefix . 'link_image');
			    $objBuilder->AddSelectItem($strTableName, 'link_target', $strAliasPrefix . 'link_target');
			    $objBuilder->AddSelectItem($strTableName, 'link_description', $strAliasPrefix . 'link_description');
			    $objBuilder->AddSelectItem($strTableName, 'link_visible', $strAliasPrefix . 'link_visible');
			    $objBuilder->AddSelectItem($strTableName, 'link_owner', $strAliasPrefix . 'link_owner');
			    $objBuilder->AddSelectItem($strTableName, 'link_rating', $strAliasPrefix . 'link_rating');
			    $objBuilder->AddSelectItem($strTableName, 'link_updated', $strAliasPrefix . 'link_updated');
			    $objBuilder->AddSelectItem($strTableName, 'link_rel', $strAliasPrefix . 'link_rel');
			    $objBuilder->AddSelectItem($strTableName, 'link_notes', $strAliasPrefix . 'link_notes');
			    $objBuilder->AddSelectItem($strTableName, 'link_rss', $strAliasPrefix . 'link_rss');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpLinks from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpLinks::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpLinks
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpLinks object
			$objToReturn = new WpLinks();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'link_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLinkId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'link_url';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkUrl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link_image';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkImage = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link_target';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkTarget = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link_description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link_visible';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkVisible = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link_owner';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLinkOwner = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'link_rating';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLinkRating = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'link_updated';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttLinkUpdated = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'link_rel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkRel = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'link_notes';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkNotes = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'link_rss';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLinkRss = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LinkId != $objPreviousItem->LinkId) {
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
				$strAliasPrefix = 'wp_links__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpLinkses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpLinks[]
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
					$objItem = WpLinks::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpLinks::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpLinks object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpLinks next row resulting from the query
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
			return WpLinks::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpLinks object,
		 * by LinkId Index(es)
		 * @param integer $intLinkId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpLinks
		*/
		public static function LoadByLinkId($intLinkId, $objOptionalClauses = null) {
			return WpLinks::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpLinks()->LinkId, $intLinkId)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of WpLinks objects,
		 * by LinkVisible Index(es)
		 * @param string $strLinkVisible
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpLinks[]
		*/
		public static function LoadArrayByLinkVisible($strLinkVisible, $objOptionalClauses = null) {
			// Call WpLinks::QueryArray to perform the LoadArrayByLinkVisible query
			try {
				return WpLinks::QueryArray(
					QQ::Equal(QQN::WpLinks()->LinkVisible, $strLinkVisible),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count WpLinkses
		 * by LinkVisible Index(es)
		 * @param string $strLinkVisible
		 * @return int
		*/
		public static function CountByLinkVisible($strLinkVisible) {
			// Call WpLinks::QueryCount to perform the CountByLinkVisible query
			return WpLinks::QueryCount(
				QQ::Equal(QQN::WpLinks()->LinkVisible, $strLinkVisible)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this WpLinks
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpLinks::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_links` (
							`link_url`,
							`link_name`,
							`link_image`,
							`link_target`,
							`link_description`,
							`link_visible`,
							`link_owner`,
							`link_rating`,
							`link_updated`,
							`link_rel`,
							`link_notes`,
							`link_rss`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strLinkUrl) . ',
							' . $objDatabase->SqlVariable($this->strLinkName) . ',
							' . $objDatabase->SqlVariable($this->strLinkImage) . ',
							' . $objDatabase->SqlVariable($this->strLinkTarget) . ',
							' . $objDatabase->SqlVariable($this->strLinkDescription) . ',
							' . $objDatabase->SqlVariable($this->strLinkVisible) . ',
							' . $objDatabase->SqlVariable($this->intLinkOwner) . ',
							' . $objDatabase->SqlVariable($this->intLinkRating) . ',
							' . $objDatabase->SqlVariable($this->dttLinkUpdated) . ',
							' . $objDatabase->SqlVariable($this->strLinkRel) . ',
							' . $objDatabase->SqlVariable($this->strLinkNotes) . ',
							' . $objDatabase->SqlVariable($this->strLinkRss) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intLinkId = $objDatabase->InsertId('wp_links', 'link_id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_links`
						SET
							`link_url` = ' . $objDatabase->SqlVariable($this->strLinkUrl) . ',
							`link_name` = ' . $objDatabase->SqlVariable($this->strLinkName) . ',
							`link_image` = ' . $objDatabase->SqlVariable($this->strLinkImage) . ',
							`link_target` = ' . $objDatabase->SqlVariable($this->strLinkTarget) . ',
							`link_description` = ' . $objDatabase->SqlVariable($this->strLinkDescription) . ',
							`link_visible` = ' . $objDatabase->SqlVariable($this->strLinkVisible) . ',
							`link_owner` = ' . $objDatabase->SqlVariable($this->intLinkOwner) . ',
							`link_rating` = ' . $objDatabase->SqlVariable($this->intLinkRating) . ',
							`link_updated` = ' . $objDatabase->SqlVariable($this->dttLinkUpdated) . ',
							`link_rel` = ' . $objDatabase->SqlVariable($this->strLinkRel) . ',
							`link_notes` = ' . $objDatabase->SqlVariable($this->strLinkNotes) . ',
							`link_rss` = ' . $objDatabase->SqlVariable($this->strLinkRss) . '
						WHERE
							`link_id` = ' . $objDatabase->SqlVariable($this->intLinkId) . '
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
		 * Delete this WpLinks
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLinkId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpLinks with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpLinks::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_links`
				WHERE
					`link_id` = ' . $objDatabase->SqlVariable($this->intLinkId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpLinks ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpLinks', $this->intLinkId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpLinkses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpLinks::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_links`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_links table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpLinks::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_links`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpLinks from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpLinks object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpLinks::Load($this->intLinkId);

			// Update $this's local variables to match
			$this->strLinkUrl = $objReloaded->strLinkUrl;
			$this->strLinkName = $objReloaded->strLinkName;
			$this->strLinkImage = $objReloaded->strLinkImage;
			$this->strLinkTarget = $objReloaded->strLinkTarget;
			$this->strLinkDescription = $objReloaded->strLinkDescription;
			$this->strLinkVisible = $objReloaded->strLinkVisible;
			$this->intLinkOwner = $objReloaded->intLinkOwner;
			$this->intLinkRating = $objReloaded->intLinkRating;
			$this->dttLinkUpdated = $objReloaded->dttLinkUpdated;
			$this->strLinkRel = $objReloaded->strLinkRel;
			$this->strLinkNotes = $objReloaded->strLinkNotes;
			$this->strLinkRss = $objReloaded->strLinkRss;
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
				case 'LinkId':
					/**
					 * Gets the value for intLinkId (Read-Only PK)
					 * @return integer
					 */
					return $this->intLinkId;

				case 'LinkUrl':
					/**
					 * Gets the value for strLinkUrl (Not Null)
					 * @return string
					 */
					return $this->strLinkUrl;

				case 'LinkName':
					/**
					 * Gets the value for strLinkName (Not Null)
					 * @return string
					 */
					return $this->strLinkName;

				case 'LinkImage':
					/**
					 * Gets the value for strLinkImage (Not Null)
					 * @return string
					 */
					return $this->strLinkImage;

				case 'LinkTarget':
					/**
					 * Gets the value for strLinkTarget (Not Null)
					 * @return string
					 */
					return $this->strLinkTarget;

				case 'LinkDescription':
					/**
					 * Gets the value for strLinkDescription (Not Null)
					 * @return string
					 */
					return $this->strLinkDescription;

				case 'LinkVisible':
					/**
					 * Gets the value for strLinkVisible (Not Null)
					 * @return string
					 */
					return $this->strLinkVisible;

				case 'LinkOwner':
					/**
					 * Gets the value for intLinkOwner (Not Null)
					 * @return integer
					 */
					return $this->intLinkOwner;

				case 'LinkRating':
					/**
					 * Gets the value for intLinkRating (Not Null)
					 * @return integer
					 */
					return $this->intLinkRating;

				case 'LinkUpdated':
					/**
					 * Gets the value for dttLinkUpdated (Not Null)
					 * @return QDateTime
					 */
					return $this->dttLinkUpdated;

				case 'LinkRel':
					/**
					 * Gets the value for strLinkRel (Not Null)
					 * @return string
					 */
					return $this->strLinkRel;

				case 'LinkNotes':
					/**
					 * Gets the value for strLinkNotes (Not Null)
					 * @return string
					 */
					return $this->strLinkNotes;

				case 'LinkRss':
					/**
					 * Gets the value for strLinkRss (Not Null)
					 * @return string
					 */
					return $this->strLinkRss;


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
				case 'LinkUrl':
					/**
					 * Sets the value for strLinkUrl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkUrl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkName':
					/**
					 * Sets the value for strLinkName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkImage':
					/**
					 * Sets the value for strLinkImage (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkImage = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkTarget':
					/**
					 * Sets the value for strLinkTarget (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkTarget = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkDescription':
					/**
					 * Sets the value for strLinkDescription (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkVisible':
					/**
					 * Sets the value for strLinkVisible (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkVisible = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkOwner':
					/**
					 * Sets the value for intLinkOwner (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intLinkOwner = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkRating':
					/**
					 * Sets the value for intLinkRating (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intLinkRating = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkUpdated':
					/**
					 * Sets the value for dttLinkUpdated (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttLinkUpdated = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkRel':
					/**
					 * Sets the value for strLinkRel (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkRel = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkNotes':
					/**
					 * Sets the value for strLinkNotes (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkNotes = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LinkRss':
					/**
					 * Sets the value for strLinkRss (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLinkRss = QType::Cast($mixValue, QType::String));
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
			return "wp_links";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpLinks::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpLinks"><sequence>';
			$strToReturn .= '<element name="LinkId" type="xsd:int"/>';
			$strToReturn .= '<element name="LinkUrl" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkName" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkImage" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkTarget" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkDescription" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkVisible" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkOwner" type="xsd:int"/>';
			$strToReturn .= '<element name="LinkRating" type="xsd:int"/>';
			$strToReturn .= '<element name="LinkUpdated" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="LinkRel" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkNotes" type="xsd:string"/>';
			$strToReturn .= '<element name="LinkRss" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpLinks', $strComplexTypeArray)) {
				$strComplexTypeArray['WpLinks'] = WpLinks::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpLinks::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpLinks();
			if (property_exists($objSoapObject, 'LinkId'))
				$objToReturn->intLinkId = $objSoapObject->LinkId;
			if (property_exists($objSoapObject, 'LinkUrl'))
				$objToReturn->strLinkUrl = $objSoapObject->LinkUrl;
			if (property_exists($objSoapObject, 'LinkName'))
				$objToReturn->strLinkName = $objSoapObject->LinkName;
			if (property_exists($objSoapObject, 'LinkImage'))
				$objToReturn->strLinkImage = $objSoapObject->LinkImage;
			if (property_exists($objSoapObject, 'LinkTarget'))
				$objToReturn->strLinkTarget = $objSoapObject->LinkTarget;
			if (property_exists($objSoapObject, 'LinkDescription'))
				$objToReturn->strLinkDescription = $objSoapObject->LinkDescription;
			if (property_exists($objSoapObject, 'LinkVisible'))
				$objToReturn->strLinkVisible = $objSoapObject->LinkVisible;
			if (property_exists($objSoapObject, 'LinkOwner'))
				$objToReturn->intLinkOwner = $objSoapObject->LinkOwner;
			if (property_exists($objSoapObject, 'LinkRating'))
				$objToReturn->intLinkRating = $objSoapObject->LinkRating;
			if (property_exists($objSoapObject, 'LinkUpdated'))
				$objToReturn->dttLinkUpdated = new QDateTime($objSoapObject->LinkUpdated);
			if (property_exists($objSoapObject, 'LinkRel'))
				$objToReturn->strLinkRel = $objSoapObject->LinkRel;
			if (property_exists($objSoapObject, 'LinkNotes'))
				$objToReturn->strLinkNotes = $objSoapObject->LinkNotes;
			if (property_exists($objSoapObject, 'LinkRss'))
				$objToReturn->strLinkRss = $objSoapObject->LinkRss;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpLinks::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttLinkUpdated)
				$objObject->dttLinkUpdated = $objObject->dttLinkUpdated->qFormat(QDateTime::FormatSoap);
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
			$iArray['LinkId'] = $this->intLinkId;
			$iArray['LinkUrl'] = $this->strLinkUrl;
			$iArray['LinkName'] = $this->strLinkName;
			$iArray['LinkImage'] = $this->strLinkImage;
			$iArray['LinkTarget'] = $this->strLinkTarget;
			$iArray['LinkDescription'] = $this->strLinkDescription;
			$iArray['LinkVisible'] = $this->strLinkVisible;
			$iArray['LinkOwner'] = $this->intLinkOwner;
			$iArray['LinkRating'] = $this->intLinkRating;
			$iArray['LinkUpdated'] = $this->dttLinkUpdated;
			$iArray['LinkRel'] = $this->strLinkRel;
			$iArray['LinkNotes'] = $this->strLinkNotes;
			$iArray['LinkRss'] = $this->strLinkRss;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intLinkId ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $LinkId
     * @property-read QQNode $LinkUrl
     * @property-read QQNode $LinkName
     * @property-read QQNode $LinkImage
     * @property-read QQNode $LinkTarget
     * @property-read QQNode $LinkDescription
     * @property-read QQNode $LinkVisible
     * @property-read QQNode $LinkOwner
     * @property-read QQNode $LinkRating
     * @property-read QQNode $LinkUpdated
     * @property-read QQNode $LinkRel
     * @property-read QQNode $LinkNotes
     * @property-read QQNode $LinkRss
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpLinks extends QQNode {
		protected $strTableName = 'wp_links';
		protected $strPrimaryKey = 'link_id';
		protected $strClassName = 'WpLinks';
		public function __get($strName) {
			switch ($strName) {
				case 'LinkId':
					return new QQNode('link_id', 'LinkId', 'Integer', $this);
				case 'LinkUrl':
					return new QQNode('link_url', 'LinkUrl', 'VarChar', $this);
				case 'LinkName':
					return new QQNode('link_name', 'LinkName', 'VarChar', $this);
				case 'LinkImage':
					return new QQNode('link_image', 'LinkImage', 'VarChar', $this);
				case 'LinkTarget':
					return new QQNode('link_target', 'LinkTarget', 'VarChar', $this);
				case 'LinkDescription':
					return new QQNode('link_description', 'LinkDescription', 'VarChar', $this);
				case 'LinkVisible':
					return new QQNode('link_visible', 'LinkVisible', 'VarChar', $this);
				case 'LinkOwner':
					return new QQNode('link_owner', 'LinkOwner', 'Integer', $this);
				case 'LinkRating':
					return new QQNode('link_rating', 'LinkRating', 'Integer', $this);
				case 'LinkUpdated':
					return new QQNode('link_updated', 'LinkUpdated', 'DateTime', $this);
				case 'LinkRel':
					return new QQNode('link_rel', 'LinkRel', 'VarChar', $this);
				case 'LinkNotes':
					return new QQNode('link_notes', 'LinkNotes', 'Blob', $this);
				case 'LinkRss':
					return new QQNode('link_rss', 'LinkRss', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNode('link_id', 'LinkId', 'Integer', $this);
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
     * @property-read QQNode $LinkId
     * @property-read QQNode $LinkUrl
     * @property-read QQNode $LinkName
     * @property-read QQNode $LinkImage
     * @property-read QQNode $LinkTarget
     * @property-read QQNode $LinkDescription
     * @property-read QQNode $LinkVisible
     * @property-read QQNode $LinkOwner
     * @property-read QQNode $LinkRating
     * @property-read QQNode $LinkUpdated
     * @property-read QQNode $LinkRel
     * @property-read QQNode $LinkNotes
     * @property-read QQNode $LinkRss
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpLinks extends QQReverseReferenceNode {
		protected $strTableName = 'wp_links';
		protected $strPrimaryKey = 'link_id';
		protected $strClassName = 'WpLinks';
		public function __get($strName) {
			switch ($strName) {
				case 'LinkId':
					return new QQNode('link_id', 'LinkId', 'integer', $this);
				case 'LinkUrl':
					return new QQNode('link_url', 'LinkUrl', 'string', $this);
				case 'LinkName':
					return new QQNode('link_name', 'LinkName', 'string', $this);
				case 'LinkImage':
					return new QQNode('link_image', 'LinkImage', 'string', $this);
				case 'LinkTarget':
					return new QQNode('link_target', 'LinkTarget', 'string', $this);
				case 'LinkDescription':
					return new QQNode('link_description', 'LinkDescription', 'string', $this);
				case 'LinkVisible':
					return new QQNode('link_visible', 'LinkVisible', 'string', $this);
				case 'LinkOwner':
					return new QQNode('link_owner', 'LinkOwner', 'integer', $this);
				case 'LinkRating':
					return new QQNode('link_rating', 'LinkRating', 'integer', $this);
				case 'LinkUpdated':
					return new QQNode('link_updated', 'LinkUpdated', 'QDateTime', $this);
				case 'LinkRel':
					return new QQNode('link_rel', 'LinkRel', 'string', $this);
				case 'LinkNotes':
					return new QQNode('link_notes', 'LinkNotes', 'string', $this);
				case 'LinkRss':
					return new QQNode('link_rss', 'LinkRss', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('link_id', 'LinkId', 'integer', $this);
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
