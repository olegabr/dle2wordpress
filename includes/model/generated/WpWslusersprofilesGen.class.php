<?php
	/**
	 * The abstract WpWslusersprofilesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the WpWslusersprofiles subclass which
	 * extends this WpWslusersprofilesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the WpWslusersprofiles class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property integer $UserId the value for intUserId (Not Null)
	 * @property string $Provider the value for strProvider (Not Null)
	 * @property string $ObjectSha to check if hybridauth user profile object has changed from last time, if yes we update the user profile here  (Not Null)
	 * @property string $Identifier the value for strIdentifier (Not Null)
	 * @property string $Profileurl the value for strProfileurl (Not Null)
	 * @property string $Websiteurl the value for strWebsiteurl (Not Null)
	 * @property string $Photourl the value for strPhotourl (Not Null)
	 * @property string $Displayname the value for strDisplayname (Not Null)
	 * @property string $Description the value for strDescription (Not Null)
	 * @property string $Firstname the value for strFirstname (Not Null)
	 * @property string $Lastname the value for strLastname (Not Null)
	 * @property string $Gender the value for strGender (Not Null)
	 * @property string $Language the value for strLanguage (Not Null)
	 * @property string $Age the value for strAge (Not Null)
	 * @property string $Birthday the value for strBirthday (Not Null)
	 * @property string $Birthmonth the value for strBirthmonth (Not Null)
	 * @property string $Birthyear the value for strBirthyear (Not Null)
	 * @property string $Email the value for strEmail (Not Null)
	 * @property string $Emailverified the value for strEmailverified (Not Null)
	 * @property string $Phone the value for strPhone (Not Null)
	 * @property string $Address the value for strAddress (Not Null)
	 * @property string $Country the value for strCountry (Not Null)
	 * @property string $Region the value for strRegion (Not Null)
	 * @property string $City the value for strCity (Not Null)
	 * @property string $Zip the value for strZip (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class WpWslusersprofilesGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column wp_wslusersprofiles.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.user_id
		 * @var integer intUserId
		 */
		protected $intUserId;
		const UserIdDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.provider
		 * @var string strProvider
		 */
		protected $strProvider;
		const ProviderMaxLength = 255;
		const ProviderDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.object_sha
		 * to check if hybridauth user profile object has changed from last time, if yes we update the user profile here 		 * @var string strObjectSha
		 */
		protected $strObjectSha;
		const ObjectShaMaxLength = 255;
		const ObjectShaDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.identifier
		 * @var string strIdentifier
		 */
		protected $strIdentifier;
		const IdentifierMaxLength = 255;
		const IdentifierDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.profileurl
		 * @var string strProfileurl
		 */
		protected $strProfileurl;
		const ProfileurlMaxLength = 255;
		const ProfileurlDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.websiteurl
		 * @var string strWebsiteurl
		 */
		protected $strWebsiteurl;
		const WebsiteurlMaxLength = 255;
		const WebsiteurlDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.photourl
		 * @var string strPhotourl
		 */
		protected $strPhotourl;
		const PhotourlMaxLength = 255;
		const PhotourlDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.displayname
		 * @var string strDisplayname
		 */
		protected $strDisplayname;
		const DisplaynameMaxLength = 255;
		const DisplaynameDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionMaxLength = 255;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.firstname
		 * @var string strFirstname
		 */
		protected $strFirstname;
		const FirstnameMaxLength = 255;
		const FirstnameDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.lastname
		 * @var string strLastname
		 */
		protected $strLastname;
		const LastnameMaxLength = 255;
		const LastnameDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.gender
		 * @var string strGender
		 */
		protected $strGender;
		const GenderMaxLength = 255;
		const GenderDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.language
		 * @var string strLanguage
		 */
		protected $strLanguage;
		const LanguageMaxLength = 255;
		const LanguageDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.age
		 * @var string strAge
		 */
		protected $strAge;
		const AgeMaxLength = 255;
		const AgeDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.birthday
		 * @var string strBirthday
		 */
		protected $strBirthday;
		const BirthdayMaxLength = 255;
		const BirthdayDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.birthmonth
		 * @var string strBirthmonth
		 */
		protected $strBirthmonth;
		const BirthmonthMaxLength = 255;
		const BirthmonthDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.birthyear
		 * @var string strBirthyear
		 */
		protected $strBirthyear;
		const BirthyearMaxLength = 255;
		const BirthyearDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 255;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.emailverified
		 * @var string strEmailverified
		 */
		protected $strEmailverified;
		const EmailverifiedMaxLength = 255;
		const EmailverifiedDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.phone
		 * @var string strPhone
		 */
		protected $strPhone;
		const PhoneMaxLength = 255;
		const PhoneDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.address
		 * @var string strAddress
		 */
		protected $strAddress;
		const AddressMaxLength = 255;
		const AddressDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.country
		 * @var string strCountry
		 */
		protected $strCountry;
		const CountryMaxLength = 255;
		const CountryDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.region
		 * @var string strRegion
		 */
		protected $strRegion;
		const RegionMaxLength = 255;
		const RegionDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.city
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 255;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column wp_wslusersprofiles.zip
		 * @var string strZip
		 */
		protected $strZip;
		const ZipMaxLength = 255;
		const ZipDefault = null;


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
			$this->intId = WpWslusersprofiles::IdDefault;
			$this->intUserId = WpWslusersprofiles::UserIdDefault;
			$this->strProvider = WpWslusersprofiles::ProviderDefault;
			$this->strObjectSha = WpWslusersprofiles::ObjectShaDefault;
			$this->strIdentifier = WpWslusersprofiles::IdentifierDefault;
			$this->strProfileurl = WpWslusersprofiles::ProfileurlDefault;
			$this->strWebsiteurl = WpWslusersprofiles::WebsiteurlDefault;
			$this->strPhotourl = WpWslusersprofiles::PhotourlDefault;
			$this->strDisplayname = WpWslusersprofiles::DisplaynameDefault;
			$this->strDescription = WpWslusersprofiles::DescriptionDefault;
			$this->strFirstname = WpWslusersprofiles::FirstnameDefault;
			$this->strLastname = WpWslusersprofiles::LastnameDefault;
			$this->strGender = WpWslusersprofiles::GenderDefault;
			$this->strLanguage = WpWslusersprofiles::LanguageDefault;
			$this->strAge = WpWslusersprofiles::AgeDefault;
			$this->strBirthday = WpWslusersprofiles::BirthdayDefault;
			$this->strBirthmonth = WpWslusersprofiles::BirthmonthDefault;
			$this->strBirthyear = WpWslusersprofiles::BirthyearDefault;
			$this->strEmail = WpWslusersprofiles::EmailDefault;
			$this->strEmailverified = WpWslusersprofiles::EmailverifiedDefault;
			$this->strPhone = WpWslusersprofiles::PhoneDefault;
			$this->strAddress = WpWslusersprofiles::AddressDefault;
			$this->strCountry = WpWslusersprofiles::CountryDefault;
			$this->strRegion = WpWslusersprofiles::RegionDefault;
			$this->strCity = WpWslusersprofiles::CityDefault;
			$this->strZip = WpWslusersprofiles::ZipDefault;
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
		 * Load a WpWslusersprofiles from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWslusersprofiles
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpWslusersprofiles', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = WpWslusersprofiles::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpWslusersprofiles()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all WpWslusersprofileses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWslusersprofiles[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call WpWslusersprofiles::QueryArray to perform the LoadAll query
			try {
				return WpWslusersprofiles::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all WpWslusersprofileses
		 * @return int
		 */
		public static function CountAll() {
			// Call WpWslusersprofiles::QueryCount to perform the CountAll query
			return WpWslusersprofiles::QueryCount(QQ::All());
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
			$objDatabase = WpWslusersprofiles::GetDatabase();

			// Create/Build out the QueryBuilder object with WpWslusersprofiles-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'wp_wslusersprofiles');

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
				WpWslusersprofiles::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('wp_wslusersprofiles');

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
		 * Static Qcubed Query method to query for a single WpWslusersprofiles object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpWslusersprofiles the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpWslusersprofiles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new WpWslusersprofiles object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = WpWslusersprofiles::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return WpWslusersprofiles::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of WpWslusersprofiles objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return WpWslusersprofiles[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpWslusersprofiles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return WpWslusersprofiles::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = WpWslusersprofiles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of WpWslusersprofiles objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = WpWslusersprofiles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = WpWslusersprofiles::GetDatabase();

			$strQuery = WpWslusersprofiles::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/wpwslusersprofiles', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = WpWslusersprofiles::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this WpWslusersprofiles
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'wp_wslusersprofiles';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'user_id', $strAliasPrefix . 'user_id');
			    $objBuilder->AddSelectItem($strTableName, 'provider', $strAliasPrefix . 'provider');
			    $objBuilder->AddSelectItem($strTableName, 'object_sha', $strAliasPrefix . 'object_sha');
			    $objBuilder->AddSelectItem($strTableName, 'identifier', $strAliasPrefix . 'identifier');
			    $objBuilder->AddSelectItem($strTableName, 'profileurl', $strAliasPrefix . 'profileurl');
			    $objBuilder->AddSelectItem($strTableName, 'websiteurl', $strAliasPrefix . 'websiteurl');
			    $objBuilder->AddSelectItem($strTableName, 'photourl', $strAliasPrefix . 'photourl');
			    $objBuilder->AddSelectItem($strTableName, 'displayname', $strAliasPrefix . 'displayname');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'firstname', $strAliasPrefix . 'firstname');
			    $objBuilder->AddSelectItem($strTableName, 'lastname', $strAliasPrefix . 'lastname');
			    $objBuilder->AddSelectItem($strTableName, 'gender', $strAliasPrefix . 'gender');
			    $objBuilder->AddSelectItem($strTableName, 'language', $strAliasPrefix . 'language');
			    $objBuilder->AddSelectItem($strTableName, 'age', $strAliasPrefix . 'age');
			    $objBuilder->AddSelectItem($strTableName, 'birthday', $strAliasPrefix . 'birthday');
			    $objBuilder->AddSelectItem($strTableName, 'birthmonth', $strAliasPrefix . 'birthmonth');
			    $objBuilder->AddSelectItem($strTableName, 'birthyear', $strAliasPrefix . 'birthyear');
			    $objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			    $objBuilder->AddSelectItem($strTableName, 'emailverified', $strAliasPrefix . 'emailverified');
			    $objBuilder->AddSelectItem($strTableName, 'phone', $strAliasPrefix . 'phone');
			    $objBuilder->AddSelectItem($strTableName, 'address', $strAliasPrefix . 'address');
			    $objBuilder->AddSelectItem($strTableName, 'country', $strAliasPrefix . 'country');
			    $objBuilder->AddSelectItem($strTableName, 'region', $strAliasPrefix . 'region');
			    $objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
			    $objBuilder->AddSelectItem($strTableName, 'zip', $strAliasPrefix . 'zip');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a WpWslusersprofiles from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this WpWslusersprofiles::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return WpWslusersprofiles
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the WpWslusersprofiles object
			$objToReturn = new WpWslusersprofiles();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'user_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUserId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'provider';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strProvider = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'object_sha';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strObjectSha = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'identifier';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strIdentifier = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'profileurl';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strProfileurl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'websiteurl';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strWebsiteurl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'photourl';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPhotourl = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'displayname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDisplayname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'firstname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFirstname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'lastname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLastname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'gender';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGender = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'language';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLanguage = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'age';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAge = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'birthday';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBirthday = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'birthmonth';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBirthmonth = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'birthyear';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBirthyear = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'email';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'emailverified';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmailverified = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'phone';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPhone = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'address';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddress = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'country';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCountry = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'region';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRegion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'city';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'zip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strZip = $objDbRow->GetColumn($strAliasName, 'VarChar');

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
				$strAliasPrefix = 'wp_wslusersprofiles__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of WpWslusersprofileses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return WpWslusersprofiles[]
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
					$objItem = WpWslusersprofiles::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = WpWslusersprofiles::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single WpWslusersprofiles object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return WpWslusersprofiles next row resulting from the query
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
			return WpWslusersprofiles::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single WpWslusersprofiles object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return WpWslusersprofiles
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return WpWslusersprofiles::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::WpWslusersprofiles()->Id, $intId)
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
		 * Save this WpWslusersprofiles
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = WpWslusersprofiles::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `wp_wslusersprofiles` (
							`user_id`,
							`provider`,
							`object_sha`,
							`identifier`,
							`profileurl`,
							`websiteurl`,
							`photourl`,
							`displayname`,
							`description`,
							`firstname`,
							`lastname`,
							`gender`,
							`language`,
							`age`,
							`birthday`,
							`birthmonth`,
							`birthyear`,
							`email`,
							`emailverified`,
							`phone`,
							`address`,
							`country`,
							`region`,
							`city`,
							`zip`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intUserId) . ',
							' . $objDatabase->SqlVariable($this->strProvider) . ',
							' . $objDatabase->SqlVariable($this->strObjectSha) . ',
							' . $objDatabase->SqlVariable($this->strIdentifier) . ',
							' . $objDatabase->SqlVariable($this->strProfileurl) . ',
							' . $objDatabase->SqlVariable($this->strWebsiteurl) . ',
							' . $objDatabase->SqlVariable($this->strPhotourl) . ',
							' . $objDatabase->SqlVariable($this->strDisplayname) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->strFirstname) . ',
							' . $objDatabase->SqlVariable($this->strLastname) . ',
							' . $objDatabase->SqlVariable($this->strGender) . ',
							' . $objDatabase->SqlVariable($this->strLanguage) . ',
							' . $objDatabase->SqlVariable($this->strAge) . ',
							' . $objDatabase->SqlVariable($this->strBirthday) . ',
							' . $objDatabase->SqlVariable($this->strBirthmonth) . ',
							' . $objDatabase->SqlVariable($this->strBirthyear) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strEmailverified) . ',
							' . $objDatabase->SqlVariable($this->strPhone) . ',
							' . $objDatabase->SqlVariable($this->strAddress) . ',
							' . $objDatabase->SqlVariable($this->strCountry) . ',
							' . $objDatabase->SqlVariable($this->strRegion) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strZip) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('wp_wslusersprofiles', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`wp_wslusersprofiles`
						SET
							`user_id` = ' . $objDatabase->SqlVariable($this->intUserId) . ',
							`provider` = ' . $objDatabase->SqlVariable($this->strProvider) . ',
							`object_sha` = ' . $objDatabase->SqlVariable($this->strObjectSha) . ',
							`identifier` = ' . $objDatabase->SqlVariable($this->strIdentifier) . ',
							`profileurl` = ' . $objDatabase->SqlVariable($this->strProfileurl) . ',
							`websiteurl` = ' . $objDatabase->SqlVariable($this->strWebsiteurl) . ',
							`photourl` = ' . $objDatabase->SqlVariable($this->strPhotourl) . ',
							`displayname` = ' . $objDatabase->SqlVariable($this->strDisplayname) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`firstname` = ' . $objDatabase->SqlVariable($this->strFirstname) . ',
							`lastname` = ' . $objDatabase->SqlVariable($this->strLastname) . ',
							`gender` = ' . $objDatabase->SqlVariable($this->strGender) . ',
							`language` = ' . $objDatabase->SqlVariable($this->strLanguage) . ',
							`age` = ' . $objDatabase->SqlVariable($this->strAge) . ',
							`birthday` = ' . $objDatabase->SqlVariable($this->strBirthday) . ',
							`birthmonth` = ' . $objDatabase->SqlVariable($this->strBirthmonth) . ',
							`birthyear` = ' . $objDatabase->SqlVariable($this->strBirthyear) . ',
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`emailverified` = ' . $objDatabase->SqlVariable($this->strEmailverified) . ',
							`phone` = ' . $objDatabase->SqlVariable($this->strPhone) . ',
							`address` = ' . $objDatabase->SqlVariable($this->strAddress) . ',
							`country` = ' . $objDatabase->SqlVariable($this->strCountry) . ',
							`region` = ' . $objDatabase->SqlVariable($this->strRegion) . ',
							`city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`zip` = ' . $objDatabase->SqlVariable($this->strZip) . '
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
		 * Delete this WpWslusersprofiles
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this WpWslusersprofiles with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = WpWslusersprofiles::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wslusersprofiles`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this WpWslusersprofiles ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[2]->Database, 'WpWslusersprofiles', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all WpWslusersprofileses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = WpWslusersprofiles::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`wp_wslusersprofiles`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate wp_wslusersprofiles table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = WpWslusersprofiles::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `wp_wslusersprofiles`');

			if (QApplication::$objCacheProvider && QApplication::$Database[2]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this WpWslusersprofiles from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved WpWslusersprofiles object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = WpWslusersprofiles::Load($this->intId);

			// Update $this's local variables to match
			$this->intUserId = $objReloaded->intUserId;
			$this->strProvider = $objReloaded->strProvider;
			$this->strObjectSha = $objReloaded->strObjectSha;
			$this->strIdentifier = $objReloaded->strIdentifier;
			$this->strProfileurl = $objReloaded->strProfileurl;
			$this->strWebsiteurl = $objReloaded->strWebsiteurl;
			$this->strPhotourl = $objReloaded->strPhotourl;
			$this->strDisplayname = $objReloaded->strDisplayname;
			$this->strDescription = $objReloaded->strDescription;
			$this->strFirstname = $objReloaded->strFirstname;
			$this->strLastname = $objReloaded->strLastname;
			$this->strGender = $objReloaded->strGender;
			$this->strLanguage = $objReloaded->strLanguage;
			$this->strAge = $objReloaded->strAge;
			$this->strBirthday = $objReloaded->strBirthday;
			$this->strBirthmonth = $objReloaded->strBirthmonth;
			$this->strBirthyear = $objReloaded->strBirthyear;
			$this->strEmail = $objReloaded->strEmail;
			$this->strEmailverified = $objReloaded->strEmailverified;
			$this->strPhone = $objReloaded->strPhone;
			$this->strAddress = $objReloaded->strAddress;
			$this->strCountry = $objReloaded->strCountry;
			$this->strRegion = $objReloaded->strRegion;
			$this->strCity = $objReloaded->strCity;
			$this->strZip = $objReloaded->strZip;
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

				case 'UserId':
					/**
					 * Gets the value for intUserId (Not Null)
					 * @return integer
					 */
					return $this->intUserId;

				case 'Provider':
					/**
					 * Gets the value for strProvider (Not Null)
					 * @return string
					 */
					return $this->strProvider;

				case 'ObjectSha':
					/**
					 * Gets the value for strObjectSha (Not Null)
					 * @return string
					 */
					return $this->strObjectSha;

				case 'Identifier':
					/**
					 * Gets the value for strIdentifier (Not Null)
					 * @return string
					 */
					return $this->strIdentifier;

				case 'Profileurl':
					/**
					 * Gets the value for strProfileurl (Not Null)
					 * @return string
					 */
					return $this->strProfileurl;

				case 'Websiteurl':
					/**
					 * Gets the value for strWebsiteurl (Not Null)
					 * @return string
					 */
					return $this->strWebsiteurl;

				case 'Photourl':
					/**
					 * Gets the value for strPhotourl (Not Null)
					 * @return string
					 */
					return $this->strPhotourl;

				case 'Displayname':
					/**
					 * Gets the value for strDisplayname (Not Null)
					 * @return string
					 */
					return $this->strDisplayname;

				case 'Description':
					/**
					 * Gets the value for strDescription (Not Null)
					 * @return string
					 */
					return $this->strDescription;

				case 'Firstname':
					/**
					 * Gets the value for strFirstname (Not Null)
					 * @return string
					 */
					return $this->strFirstname;

				case 'Lastname':
					/**
					 * Gets the value for strLastname (Not Null)
					 * @return string
					 */
					return $this->strLastname;

				case 'Gender':
					/**
					 * Gets the value for strGender (Not Null)
					 * @return string
					 */
					return $this->strGender;

				case 'Language':
					/**
					 * Gets the value for strLanguage (Not Null)
					 * @return string
					 */
					return $this->strLanguage;

				case 'Age':
					/**
					 * Gets the value for strAge (Not Null)
					 * @return string
					 */
					return $this->strAge;

				case 'Birthday':
					/**
					 * Gets the value for strBirthday (Not Null)
					 * @return string
					 */
					return $this->strBirthday;

				case 'Birthmonth':
					/**
					 * Gets the value for strBirthmonth (Not Null)
					 * @return string
					 */
					return $this->strBirthmonth;

				case 'Birthyear':
					/**
					 * Gets the value for strBirthyear (Not Null)
					 * @return string
					 */
					return $this->strBirthyear;

				case 'Email':
					/**
					 * Gets the value for strEmail (Not Null)
					 * @return string
					 */
					return $this->strEmail;

				case 'Emailverified':
					/**
					 * Gets the value for strEmailverified (Not Null)
					 * @return string
					 */
					return $this->strEmailverified;

				case 'Phone':
					/**
					 * Gets the value for strPhone (Not Null)
					 * @return string
					 */
					return $this->strPhone;

				case 'Address':
					/**
					 * Gets the value for strAddress (Not Null)
					 * @return string
					 */
					return $this->strAddress;

				case 'Country':
					/**
					 * Gets the value for strCountry (Not Null)
					 * @return string
					 */
					return $this->strCountry;

				case 'Region':
					/**
					 * Gets the value for strRegion (Not Null)
					 * @return string
					 */
					return $this->strRegion;

				case 'City':
					/**
					 * Gets the value for strCity (Not Null)
					 * @return string
					 */
					return $this->strCity;

				case 'Zip':
					/**
					 * Gets the value for strZip (Not Null)
					 * @return string
					 */
					return $this->strZip;


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

				case 'Provider':
					/**
					 * Sets the value for strProvider (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strProvider = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ObjectSha':
					/**
					 * Sets the value for strObjectSha (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strObjectSha = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Identifier':
					/**
					 * Sets the value for strIdentifier (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIdentifier = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Profileurl':
					/**
					 * Sets the value for strProfileurl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strProfileurl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Websiteurl':
					/**
					 * Sets the value for strWebsiteurl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strWebsiteurl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Photourl':
					/**
					 * Sets the value for strPhotourl (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhotourl = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Displayname':
					/**
					 * Sets the value for strDisplayname (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDisplayname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					/**
					 * Sets the value for strDescription (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Firstname':
					/**
					 * Sets the value for strFirstname (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFirstname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Lastname':
					/**
					 * Sets the value for strLastname (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Gender':
					/**
					 * Sets the value for strGender (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGender = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Language':
					/**
					 * Sets the value for strLanguage (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLanguage = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Age':
					/**
					 * Sets the value for strAge (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAge = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Birthday':
					/**
					 * Sets the value for strBirthday (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBirthday = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Birthmonth':
					/**
					 * Sets the value for strBirthmonth (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBirthmonth = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Birthyear':
					/**
					 * Sets the value for strBirthyear (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBirthyear = QType::Cast($mixValue, QType::String));
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

				case 'Emailverified':
					/**
					 * Sets the value for strEmailverified (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmailverified = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Phone':
					/**
					 * Sets the value for strPhone (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhone = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address':
					/**
					 * Sets the value for strAddress (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddress = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Country':
					/**
					 * Sets the value for strCountry (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCountry = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Region':
					/**
					 * Sets the value for strRegion (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRegion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'City':
					/**
					 * Sets the value for strCity (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Zip':
					/**
					 * Sets the value for strZip (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strZip = QType::Cast($mixValue, QType::String));
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
			return "wp_wslusersprofiles";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[WpWslusersprofiles::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="WpWslusersprofiles"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="UserId" type="xsd:int"/>';
			$strToReturn .= '<element name="Provider" type="xsd:string"/>';
			$strToReturn .= '<element name="ObjectSha" type="xsd:string"/>';
			$strToReturn .= '<element name="Identifier" type="xsd:string"/>';
			$strToReturn .= '<element name="Profileurl" type="xsd:string"/>';
			$strToReturn .= '<element name="Websiteurl" type="xsd:string"/>';
			$strToReturn .= '<element name="Photourl" type="xsd:string"/>';
			$strToReturn .= '<element name="Displayname" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="Firstname" type="xsd:string"/>';
			$strToReturn .= '<element name="Lastname" type="xsd:string"/>';
			$strToReturn .= '<element name="Gender" type="xsd:string"/>';
			$strToReturn .= '<element name="Language" type="xsd:string"/>';
			$strToReturn .= '<element name="Age" type="xsd:string"/>';
			$strToReturn .= '<element name="Birthday" type="xsd:string"/>';
			$strToReturn .= '<element name="Birthmonth" type="xsd:string"/>';
			$strToReturn .= '<element name="Birthyear" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Emailverified" type="xsd:string"/>';
			$strToReturn .= '<element name="Phone" type="xsd:string"/>';
			$strToReturn .= '<element name="Address" type="xsd:string"/>';
			$strToReturn .= '<element name="Country" type="xsd:string"/>';
			$strToReturn .= '<element name="Region" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="Zip" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('WpWslusersprofiles', $strComplexTypeArray)) {
				$strComplexTypeArray['WpWslusersprofiles'] = WpWslusersprofiles::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, WpWslusersprofiles::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new WpWslusersprofiles();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'UserId'))
				$objToReturn->intUserId = $objSoapObject->UserId;
			if (property_exists($objSoapObject, 'Provider'))
				$objToReturn->strProvider = $objSoapObject->Provider;
			if (property_exists($objSoapObject, 'ObjectSha'))
				$objToReturn->strObjectSha = $objSoapObject->ObjectSha;
			if (property_exists($objSoapObject, 'Identifier'))
				$objToReturn->strIdentifier = $objSoapObject->Identifier;
			if (property_exists($objSoapObject, 'Profileurl'))
				$objToReturn->strProfileurl = $objSoapObject->Profileurl;
			if (property_exists($objSoapObject, 'Websiteurl'))
				$objToReturn->strWebsiteurl = $objSoapObject->Websiteurl;
			if (property_exists($objSoapObject, 'Photourl'))
				$objToReturn->strPhotourl = $objSoapObject->Photourl;
			if (property_exists($objSoapObject, 'Displayname'))
				$objToReturn->strDisplayname = $objSoapObject->Displayname;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'Firstname'))
				$objToReturn->strFirstname = $objSoapObject->Firstname;
			if (property_exists($objSoapObject, 'Lastname'))
				$objToReturn->strLastname = $objSoapObject->Lastname;
			if (property_exists($objSoapObject, 'Gender'))
				$objToReturn->strGender = $objSoapObject->Gender;
			if (property_exists($objSoapObject, 'Language'))
				$objToReturn->strLanguage = $objSoapObject->Language;
			if (property_exists($objSoapObject, 'Age'))
				$objToReturn->strAge = $objSoapObject->Age;
			if (property_exists($objSoapObject, 'Birthday'))
				$objToReturn->strBirthday = $objSoapObject->Birthday;
			if (property_exists($objSoapObject, 'Birthmonth'))
				$objToReturn->strBirthmonth = $objSoapObject->Birthmonth;
			if (property_exists($objSoapObject, 'Birthyear'))
				$objToReturn->strBirthyear = $objSoapObject->Birthyear;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Emailverified'))
				$objToReturn->strEmailverified = $objSoapObject->Emailverified;
			if (property_exists($objSoapObject, 'Phone'))
				$objToReturn->strPhone = $objSoapObject->Phone;
			if (property_exists($objSoapObject, 'Address'))
				$objToReturn->strAddress = $objSoapObject->Address;
			if (property_exists($objSoapObject, 'Country'))
				$objToReturn->strCountry = $objSoapObject->Country;
			if (property_exists($objSoapObject, 'Region'))
				$objToReturn->strRegion = $objSoapObject->Region;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'Zip'))
				$objToReturn->strZip = $objSoapObject->Zip;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, WpWslusersprofiles::GetSoapObjectFromObject($objObject, true));

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
			$iArray['UserId'] = $this->intUserId;
			$iArray['Provider'] = $this->strProvider;
			$iArray['ObjectSha'] = $this->strObjectSha;
			$iArray['Identifier'] = $this->strIdentifier;
			$iArray['Profileurl'] = $this->strProfileurl;
			$iArray['Websiteurl'] = $this->strWebsiteurl;
			$iArray['Photourl'] = $this->strPhotourl;
			$iArray['Displayname'] = $this->strDisplayname;
			$iArray['Description'] = $this->strDescription;
			$iArray['Firstname'] = $this->strFirstname;
			$iArray['Lastname'] = $this->strLastname;
			$iArray['Gender'] = $this->strGender;
			$iArray['Language'] = $this->strLanguage;
			$iArray['Age'] = $this->strAge;
			$iArray['Birthday'] = $this->strBirthday;
			$iArray['Birthmonth'] = $this->strBirthmonth;
			$iArray['Birthyear'] = $this->strBirthyear;
			$iArray['Email'] = $this->strEmail;
			$iArray['Emailverified'] = $this->strEmailverified;
			$iArray['Phone'] = $this->strPhone;
			$iArray['Address'] = $this->strAddress;
			$iArray['Country'] = $this->strCountry;
			$iArray['Region'] = $this->strRegion;
			$iArray['City'] = $this->strCity;
			$iArray['Zip'] = $this->strZip;
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
     * @property-read QQNode $UserId
     * @property-read QQNode $Provider
     * @property-read QQNode $ObjectSha
     * @property-read QQNode $Identifier
     * @property-read QQNode $Profileurl
     * @property-read QQNode $Websiteurl
     * @property-read QQNode $Photourl
     * @property-read QQNode $Displayname
     * @property-read QQNode $Description
     * @property-read QQNode $Firstname
     * @property-read QQNode $Lastname
     * @property-read QQNode $Gender
     * @property-read QQNode $Language
     * @property-read QQNode $Age
     * @property-read QQNode $Birthday
     * @property-read QQNode $Birthmonth
     * @property-read QQNode $Birthyear
     * @property-read QQNode $Email
     * @property-read QQNode $Emailverified
     * @property-read QQNode $Phone
     * @property-read QQNode $Address
     * @property-read QQNode $Country
     * @property-read QQNode $Region
     * @property-read QQNode $City
     * @property-read QQNode $Zip
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeWpWslusersprofiles extends QQNode {
		protected $strTableName = 'wp_wslusersprofiles';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'WpWslusersprofiles';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'Integer', $this);
				case 'Provider':
					return new QQNode('provider', 'Provider', 'VarChar', $this);
				case 'ObjectSha':
					return new QQNode('object_sha', 'ObjectSha', 'VarChar', $this);
				case 'Identifier':
					return new QQNode('identifier', 'Identifier', 'VarChar', $this);
				case 'Profileurl':
					return new QQNode('profileurl', 'Profileurl', 'VarChar', $this);
				case 'Websiteurl':
					return new QQNode('websiteurl', 'Websiteurl', 'VarChar', $this);
				case 'Photourl':
					return new QQNode('photourl', 'Photourl', 'VarChar', $this);
				case 'Displayname':
					return new QQNode('displayname', 'Displayname', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'VarChar', $this);
				case 'Firstname':
					return new QQNode('firstname', 'Firstname', 'VarChar', $this);
				case 'Lastname':
					return new QQNode('lastname', 'Lastname', 'VarChar', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'VarChar', $this);
				case 'Language':
					return new QQNode('language', 'Language', 'VarChar', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'VarChar', $this);
				case 'Birthday':
					return new QQNode('birthday', 'Birthday', 'VarChar', $this);
				case 'Birthmonth':
					return new QQNode('birthmonth', 'Birthmonth', 'VarChar', $this);
				case 'Birthyear':
					return new QQNode('birthyear', 'Birthyear', 'VarChar', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'VarChar', $this);
				case 'Emailverified':
					return new QQNode('emailverified', 'Emailverified', 'VarChar', $this);
				case 'Phone':
					return new QQNode('phone', 'Phone', 'VarChar', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'VarChar', $this);
				case 'Country':
					return new QQNode('country', 'Country', 'VarChar', $this);
				case 'Region':
					return new QQNode('region', 'Region', 'VarChar', $this);
				case 'City':
					return new QQNode('city', 'City', 'VarChar', $this);
				case 'Zip':
					return new QQNode('zip', 'Zip', 'VarChar', $this);

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
     * @property-read QQNode $UserId
     * @property-read QQNode $Provider
     * @property-read QQNode $ObjectSha
     * @property-read QQNode $Identifier
     * @property-read QQNode $Profileurl
     * @property-read QQNode $Websiteurl
     * @property-read QQNode $Photourl
     * @property-read QQNode $Displayname
     * @property-read QQNode $Description
     * @property-read QQNode $Firstname
     * @property-read QQNode $Lastname
     * @property-read QQNode $Gender
     * @property-read QQNode $Language
     * @property-read QQNode $Age
     * @property-read QQNode $Birthday
     * @property-read QQNode $Birthmonth
     * @property-read QQNode $Birthyear
     * @property-read QQNode $Email
     * @property-read QQNode $Emailverified
     * @property-read QQNode $Phone
     * @property-read QQNode $Address
     * @property-read QQNode $Country
     * @property-read QQNode $Region
     * @property-read QQNode $City
     * @property-read QQNode $Zip
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeWpWslusersprofiles extends QQReverseReferenceNode {
		protected $strTableName = 'wp_wslusersprofiles';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'WpWslusersprofiles';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'UserId':
					return new QQNode('user_id', 'UserId', 'integer', $this);
				case 'Provider':
					return new QQNode('provider', 'Provider', 'string', $this);
				case 'ObjectSha':
					return new QQNode('object_sha', 'ObjectSha', 'string', $this);
				case 'Identifier':
					return new QQNode('identifier', 'Identifier', 'string', $this);
				case 'Profileurl':
					return new QQNode('profileurl', 'Profileurl', 'string', $this);
				case 'Websiteurl':
					return new QQNode('websiteurl', 'Websiteurl', 'string', $this);
				case 'Photourl':
					return new QQNode('photourl', 'Photourl', 'string', $this);
				case 'Displayname':
					return new QQNode('displayname', 'Displayname', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Firstname':
					return new QQNode('firstname', 'Firstname', 'string', $this);
				case 'Lastname':
					return new QQNode('lastname', 'Lastname', 'string', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'string', $this);
				case 'Language':
					return new QQNode('language', 'Language', 'string', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'string', $this);
				case 'Birthday':
					return new QQNode('birthday', 'Birthday', 'string', $this);
				case 'Birthmonth':
					return new QQNode('birthmonth', 'Birthmonth', 'string', $this);
				case 'Birthyear':
					return new QQNode('birthyear', 'Birthyear', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'Emailverified':
					return new QQNode('emailverified', 'Emailverified', 'string', $this);
				case 'Phone':
					return new QQNode('phone', 'Phone', 'string', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'string', $this);
				case 'Country':
					return new QQNode('country', 'Country', 'string', $this);
				case 'Region':
					return new QQNode('region', 'Region', 'string', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'Zip':
					return new QQNode('zip', 'Zip', 'string', $this);

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
