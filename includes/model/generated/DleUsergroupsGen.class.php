<?php
	/**
	 * The abstract DleUsergroupsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DleUsergroups subclass which
	 * extends this DleUsergroupsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DleUsergroups class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Id the value for intId (Read-Only PK)
	 * @property string $GroupName the value for strGroupName (Not Null)
	 * @property string $AllowCats the value for strAllowCats (Not Null)
	 * @property boolean $AllowAdds the value for blnAllowAdds (Not Null)
	 * @property string $CatAdd the value for strCatAdd (Not Null)
	 * @property boolean $AllowAdmin the value for blnAllowAdmin (Not Null)
	 * @property boolean $AllowAddc the value for blnAllowAddc (Not Null)
	 * @property boolean $AllowEditc the value for blnAllowEditc (Not Null)
	 * @property boolean $AllowDelc the value for blnAllowDelc (Not Null)
	 * @property boolean $EditAllc the value for blnEditAllc (Not Null)
	 * @property boolean $DelAllc the value for blnDelAllc (Not Null)
	 * @property boolean $Moderation the value for blnModeration (Not Null)
	 * @property boolean $AllowAllEdit the value for blnAllowAllEdit (Not Null)
	 * @property boolean $AllowEdit the value for blnAllowEdit (Not Null)
	 * @property boolean $AllowPm the value for blnAllowPm (Not Null)
	 * @property integer $MaxPm the value for intMaxPm (Not Null)
	 * @property string $MaxFoto the value for strMaxFoto (Not Null)
	 * @property boolean $AllowFiles the value for blnAllowFiles (Not Null)
	 * @property boolean $AllowHide the value for blnAllowHide (Not Null)
	 * @property boolean $AllowShort the value for blnAllowShort (Not Null)
	 * @property boolean $TimeLimit the value for blnTimeLimit (Not Null)
	 * @property integer $Rid the value for intRid (Not Null)
	 * @property boolean $AllowFixed the value for blnAllowFixed (Not Null)
	 * @property boolean $AllowFeed the value for blnAllowFeed (Not Null)
	 * @property boolean $AllowSearch the value for blnAllowSearch (Not Null)
	 * @property boolean $AllowPoll the value for blnAllowPoll (Not Null)
	 * @property boolean $AllowMain the value for blnAllowMain (Not Null)
	 * @property boolean $Captcha the value for blnCaptcha (Not Null)
	 * @property string $Icon the value for strIcon (Not Null)
	 * @property boolean $AllowModc the value for blnAllowModc (Not Null)
	 * @property boolean $AllowRating the value for blnAllowRating (Not Null)
	 * @property boolean $AllowOffline the value for blnAllowOffline (Not Null)
	 * @property boolean $AllowImageUpload the value for blnAllowImageUpload (Not Null)
	 * @property boolean $AllowFileUpload the value for blnAllowFileUpload (Not Null)
	 * @property boolean $AllowSignature the value for blnAllowSignature (Not Null)
	 * @property boolean $AllowUrl the value for blnAllowUrl (Not Null)
	 * @property boolean $NewsSecCode the value for blnNewsSecCode (Not Null)
	 * @property boolean $AllowImage the value for blnAllowImage (Not Null)
	 * @property integer $MaxSignature the value for intMaxSignature (Not Null)
	 * @property integer $MaxInfo the value for intMaxInfo (Not Null)
	 * @property boolean $AdminAddnews the value for blnAdminAddnews (Not Null)
	 * @property boolean $AdminEditnews the value for blnAdminEditnews (Not Null)
	 * @property boolean $AdminComments the value for blnAdminComments (Not Null)
	 * @property boolean $AdminCategories the value for blnAdminCategories (Not Null)
	 * @property boolean $AdminEditusers the value for blnAdminEditusers (Not Null)
	 * @property boolean $AdminWordfilter the value for blnAdminWordfilter (Not Null)
	 * @property boolean $AdminXfields the value for blnAdminXfields (Not Null)
	 * @property boolean $AdminUserfields the value for blnAdminUserfields (Not Null)
	 * @property boolean $AdminStatic the value for blnAdminStatic (Not Null)
	 * @property boolean $AdminEditvote the value for blnAdminEditvote (Not Null)
	 * @property boolean $AdminNewsletter the value for blnAdminNewsletter (Not Null)
	 * @property boolean $AdminBlockip the value for blnAdminBlockip (Not Null)
	 * @property boolean $AdminBanners the value for blnAdminBanners (Not Null)
	 * @property boolean $AdminRss the value for blnAdminRss (Not Null)
	 * @property boolean $AdminIptools the value for blnAdminIptools (Not Null)
	 * @property boolean $AdminRssinform the value for blnAdminRssinform (Not Null)
	 * @property boolean $AdminGooglemap the value for blnAdminGooglemap (Not Null)
	 * @property boolean $AllowHtml the value for blnAllowHtml (Not Null)
	 * @property string $GroupPrefix the value for strGroupPrefix (Not Null)
	 * @property string $GroupSuffix the value for strGroupSuffix (Not Null)
	 * @property boolean $AllowSubscribe the value for blnAllowSubscribe (Not Null)
	 * @property boolean $AllowImageSize the value for blnAllowImageSize (Not Null)
	 * @property string $CatAllowAddnews the value for strCatAllowAddnews (Not Null)
	 * @property integer $FloodNews the value for intFloodNews (Not Null)
	 * @property integer $MaxDayNews the value for intMaxDayNews (Not Null)
	 * @property boolean $ForceLeech the value for blnForceLeech (Not Null)
	 * @property integer $EditLimit the value for intEditLimit (Not Null)
	 * @property boolean $CaptchaPm the value for blnCaptchaPm (Not Null)
	 * @property integer $MaxPmDay the value for intMaxPmDay (Not Null)
	 * @property integer $MaxMailDay the value for intMaxMailDay (Not Null)
	 * @property boolean $AdminTagscloud the value for blnAdminTagscloud (Not Null)
	 * @property boolean $AllowVote the value for blnAllowVote (Not Null)
	 * @property boolean $AdminComplaint the value for blnAdminComplaint (Not Null)
	 * @property boolean $NewsQuestion the value for blnNewsQuestion (Not Null)
	 * @property boolean $CommentsQuestion the value for blnCommentsQuestion (Not Null)
	 * @property integer $MaxCommentDay the value for intMaxCommentDay (Not Null)
	 * @property integer $MaxImages the value for intMaxImages (Not Null)
	 * @property integer $MaxFiles the value for intMaxFiles (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DleUsergroupsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dle_usergroups.id
		 * @var integer intId
		 */
		protected $intId;
		const IdDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.group_name
		 * @var string strGroupName
		 */
		protected $strGroupName;
		const GroupNameMaxLength = 32;
		const GroupNameDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_cats
		 * @var string strAllowCats
		 */
		protected $strAllowCats;
		const AllowCatsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_adds
		 * @var boolean blnAllowAdds
		 */
		protected $blnAllowAdds;
		const AllowAddsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.cat_add
		 * @var string strCatAdd
		 */
		protected $strCatAdd;
		const CatAddDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_admin
		 * @var boolean blnAllowAdmin
		 */
		protected $blnAllowAdmin;
		const AllowAdminDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_addc
		 * @var boolean blnAllowAddc
		 */
		protected $blnAllowAddc;
		const AllowAddcDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_editc
		 * @var boolean blnAllowEditc
		 */
		protected $blnAllowEditc;
		const AllowEditcDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_delc
		 * @var boolean blnAllowDelc
		 */
		protected $blnAllowDelc;
		const AllowDelcDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.edit_allc
		 * @var boolean blnEditAllc
		 */
		protected $blnEditAllc;
		const EditAllcDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.del_allc
		 * @var boolean blnDelAllc
		 */
		protected $blnDelAllc;
		const DelAllcDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.moderation
		 * @var boolean blnModeration
		 */
		protected $blnModeration;
		const ModerationDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_all_edit
		 * @var boolean blnAllowAllEdit
		 */
		protected $blnAllowAllEdit;
		const AllowAllEditDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_edit
		 * @var boolean blnAllowEdit
		 */
		protected $blnAllowEdit;
		const AllowEditDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_pm
		 * @var boolean blnAllowPm
		 */
		protected $blnAllowPm;
		const AllowPmDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_pm
		 * @var integer intMaxPm
		 */
		protected $intMaxPm;
		const MaxPmDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_foto
		 * @var string strMaxFoto
		 */
		protected $strMaxFoto;
		const MaxFotoMaxLength = 10;
		const MaxFotoDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_files
		 * @var boolean blnAllowFiles
		 */
		protected $blnAllowFiles;
		const AllowFilesDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_hide
		 * @var boolean blnAllowHide
		 */
		protected $blnAllowHide;
		const AllowHideDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_short
		 * @var boolean blnAllowShort
		 */
		protected $blnAllowShort;
		const AllowShortDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.time_limit
		 * @var boolean blnTimeLimit
		 */
		protected $blnTimeLimit;
		const TimeLimitDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.rid
		 * @var integer intRid
		 */
		protected $intRid;
		const RidDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_fixed
		 * @var boolean blnAllowFixed
		 */
		protected $blnAllowFixed;
		const AllowFixedDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_feed
		 * @var boolean blnAllowFeed
		 */
		protected $blnAllowFeed;
		const AllowFeedDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_search
		 * @var boolean blnAllowSearch
		 */
		protected $blnAllowSearch;
		const AllowSearchDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_poll
		 * @var boolean blnAllowPoll
		 */
		protected $blnAllowPoll;
		const AllowPollDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_main
		 * @var boolean blnAllowMain
		 */
		protected $blnAllowMain;
		const AllowMainDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.captcha
		 * @var boolean blnCaptcha
		 */
		protected $blnCaptcha;
		const CaptchaDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.icon
		 * @var string strIcon
		 */
		protected $strIcon;
		const IconMaxLength = 200;
		const IconDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_modc
		 * @var boolean blnAllowModc
		 */
		protected $blnAllowModc;
		const AllowModcDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_rating
		 * @var boolean blnAllowRating
		 */
		protected $blnAllowRating;
		const AllowRatingDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_offline
		 * @var boolean blnAllowOffline
		 */
		protected $blnAllowOffline;
		const AllowOfflineDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_image_upload
		 * @var boolean blnAllowImageUpload
		 */
		protected $blnAllowImageUpload;
		const AllowImageUploadDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_file_upload
		 * @var boolean blnAllowFileUpload
		 */
		protected $blnAllowFileUpload;
		const AllowFileUploadDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_signature
		 * @var boolean blnAllowSignature
		 */
		protected $blnAllowSignature;
		const AllowSignatureDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_url
		 * @var boolean blnAllowUrl
		 */
		protected $blnAllowUrl;
		const AllowUrlDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.news_sec_code
		 * @var boolean blnNewsSecCode
		 */
		protected $blnNewsSecCode;
		const NewsSecCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_image
		 * @var boolean blnAllowImage
		 */
		protected $blnAllowImage;
		const AllowImageDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_signature
		 * @var integer intMaxSignature
		 */
		protected $intMaxSignature;
		const MaxSignatureDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_info
		 * @var integer intMaxInfo
		 */
		protected $intMaxInfo;
		const MaxInfoDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_addnews
		 * @var boolean blnAdminAddnews
		 */
		protected $blnAdminAddnews;
		const AdminAddnewsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_editnews
		 * @var boolean blnAdminEditnews
		 */
		protected $blnAdminEditnews;
		const AdminEditnewsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_comments
		 * @var boolean blnAdminComments
		 */
		protected $blnAdminComments;
		const AdminCommentsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_categories
		 * @var boolean blnAdminCategories
		 */
		protected $blnAdminCategories;
		const AdminCategoriesDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_editusers
		 * @var boolean blnAdminEditusers
		 */
		protected $blnAdminEditusers;
		const AdminEditusersDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_wordfilter
		 * @var boolean blnAdminWordfilter
		 */
		protected $blnAdminWordfilter;
		const AdminWordfilterDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_xfields
		 * @var boolean blnAdminXfields
		 */
		protected $blnAdminXfields;
		const AdminXfieldsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_userfields
		 * @var boolean blnAdminUserfields
		 */
		protected $blnAdminUserfields;
		const AdminUserfieldsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_static
		 * @var boolean blnAdminStatic
		 */
		protected $blnAdminStatic;
		const AdminStaticDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_editvote
		 * @var boolean blnAdminEditvote
		 */
		protected $blnAdminEditvote;
		const AdminEditvoteDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_newsletter
		 * @var boolean blnAdminNewsletter
		 */
		protected $blnAdminNewsletter;
		const AdminNewsletterDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_blockip
		 * @var boolean blnAdminBlockip
		 */
		protected $blnAdminBlockip;
		const AdminBlockipDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_banners
		 * @var boolean blnAdminBanners
		 */
		protected $blnAdminBanners;
		const AdminBannersDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_rss
		 * @var boolean blnAdminRss
		 */
		protected $blnAdminRss;
		const AdminRssDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_iptools
		 * @var boolean blnAdminIptools
		 */
		protected $blnAdminIptools;
		const AdminIptoolsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_rssinform
		 * @var boolean blnAdminRssinform
		 */
		protected $blnAdminRssinform;
		const AdminRssinformDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_googlemap
		 * @var boolean blnAdminGooglemap
		 */
		protected $blnAdminGooglemap;
		const AdminGooglemapDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_html
		 * @var boolean blnAllowHtml
		 */
		protected $blnAllowHtml;
		const AllowHtmlDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.group_prefix
		 * @var string strGroupPrefix
		 */
		protected $strGroupPrefix;
		const GroupPrefixDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.group_suffix
		 * @var string strGroupSuffix
		 */
		protected $strGroupSuffix;
		const GroupSuffixDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_subscribe
		 * @var boolean blnAllowSubscribe
		 */
		protected $blnAllowSubscribe;
		const AllowSubscribeDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_image_size
		 * @var boolean blnAllowImageSize
		 */
		protected $blnAllowImageSize;
		const AllowImageSizeDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.cat_allow_addnews
		 * @var string strCatAllowAddnews
		 */
		protected $strCatAllowAddnews;
		const CatAllowAddnewsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.flood_news
		 * @var integer intFloodNews
		 */
		protected $intFloodNews;
		const FloodNewsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_day_news
		 * @var integer intMaxDayNews
		 */
		protected $intMaxDayNews;
		const MaxDayNewsDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.force_leech
		 * @var boolean blnForceLeech
		 */
		protected $blnForceLeech;
		const ForceLeechDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.edit_limit
		 * @var integer intEditLimit
		 */
		protected $intEditLimit;
		const EditLimitDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.captcha_pm
		 * @var boolean blnCaptchaPm
		 */
		protected $blnCaptchaPm;
		const CaptchaPmDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_pm_day
		 * @var integer intMaxPmDay
		 */
		protected $intMaxPmDay;
		const MaxPmDayDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_mail_day
		 * @var integer intMaxMailDay
		 */
		protected $intMaxMailDay;
		const MaxMailDayDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_tagscloud
		 * @var boolean blnAdminTagscloud
		 */
		protected $blnAdminTagscloud;
		const AdminTagscloudDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.allow_vote
		 * @var boolean blnAllowVote
		 */
		protected $blnAllowVote;
		const AllowVoteDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.admin_complaint
		 * @var boolean blnAdminComplaint
		 */
		protected $blnAdminComplaint;
		const AdminComplaintDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.news_question
		 * @var boolean blnNewsQuestion
		 */
		protected $blnNewsQuestion;
		const NewsQuestionDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.comments_question
		 * @var boolean blnCommentsQuestion
		 */
		protected $blnCommentsQuestion;
		const CommentsQuestionDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_comment_day
		 * @var integer intMaxCommentDay
		 */
		protected $intMaxCommentDay;
		const MaxCommentDayDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_images
		 * @var integer intMaxImages
		 */
		protected $intMaxImages;
		const MaxImagesDefault = null;


		/**
		 * Protected member variable that maps to the database column dle_usergroups.max_files
		 * @var integer intMaxFiles
		 */
		protected $intMaxFiles;
		const MaxFilesDefault = null;


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
			$this->intId = DleUsergroups::IdDefault;
			$this->strGroupName = DleUsergroups::GroupNameDefault;
			$this->strAllowCats = DleUsergroups::AllowCatsDefault;
			$this->blnAllowAdds = DleUsergroups::AllowAddsDefault;
			$this->strCatAdd = DleUsergroups::CatAddDefault;
			$this->blnAllowAdmin = DleUsergroups::AllowAdminDefault;
			$this->blnAllowAddc = DleUsergroups::AllowAddcDefault;
			$this->blnAllowEditc = DleUsergroups::AllowEditcDefault;
			$this->blnAllowDelc = DleUsergroups::AllowDelcDefault;
			$this->blnEditAllc = DleUsergroups::EditAllcDefault;
			$this->blnDelAllc = DleUsergroups::DelAllcDefault;
			$this->blnModeration = DleUsergroups::ModerationDefault;
			$this->blnAllowAllEdit = DleUsergroups::AllowAllEditDefault;
			$this->blnAllowEdit = DleUsergroups::AllowEditDefault;
			$this->blnAllowPm = DleUsergroups::AllowPmDefault;
			$this->intMaxPm = DleUsergroups::MaxPmDefault;
			$this->strMaxFoto = DleUsergroups::MaxFotoDefault;
			$this->blnAllowFiles = DleUsergroups::AllowFilesDefault;
			$this->blnAllowHide = DleUsergroups::AllowHideDefault;
			$this->blnAllowShort = DleUsergroups::AllowShortDefault;
			$this->blnTimeLimit = DleUsergroups::TimeLimitDefault;
			$this->intRid = DleUsergroups::RidDefault;
			$this->blnAllowFixed = DleUsergroups::AllowFixedDefault;
			$this->blnAllowFeed = DleUsergroups::AllowFeedDefault;
			$this->blnAllowSearch = DleUsergroups::AllowSearchDefault;
			$this->blnAllowPoll = DleUsergroups::AllowPollDefault;
			$this->blnAllowMain = DleUsergroups::AllowMainDefault;
			$this->blnCaptcha = DleUsergroups::CaptchaDefault;
			$this->strIcon = DleUsergroups::IconDefault;
			$this->blnAllowModc = DleUsergroups::AllowModcDefault;
			$this->blnAllowRating = DleUsergroups::AllowRatingDefault;
			$this->blnAllowOffline = DleUsergroups::AllowOfflineDefault;
			$this->blnAllowImageUpload = DleUsergroups::AllowImageUploadDefault;
			$this->blnAllowFileUpload = DleUsergroups::AllowFileUploadDefault;
			$this->blnAllowSignature = DleUsergroups::AllowSignatureDefault;
			$this->blnAllowUrl = DleUsergroups::AllowUrlDefault;
			$this->blnNewsSecCode = DleUsergroups::NewsSecCodeDefault;
			$this->blnAllowImage = DleUsergroups::AllowImageDefault;
			$this->intMaxSignature = DleUsergroups::MaxSignatureDefault;
			$this->intMaxInfo = DleUsergroups::MaxInfoDefault;
			$this->blnAdminAddnews = DleUsergroups::AdminAddnewsDefault;
			$this->blnAdminEditnews = DleUsergroups::AdminEditnewsDefault;
			$this->blnAdminComments = DleUsergroups::AdminCommentsDefault;
			$this->blnAdminCategories = DleUsergroups::AdminCategoriesDefault;
			$this->blnAdminEditusers = DleUsergroups::AdminEditusersDefault;
			$this->blnAdminWordfilter = DleUsergroups::AdminWordfilterDefault;
			$this->blnAdminXfields = DleUsergroups::AdminXfieldsDefault;
			$this->blnAdminUserfields = DleUsergroups::AdminUserfieldsDefault;
			$this->blnAdminStatic = DleUsergroups::AdminStaticDefault;
			$this->blnAdminEditvote = DleUsergroups::AdminEditvoteDefault;
			$this->blnAdminNewsletter = DleUsergroups::AdminNewsletterDefault;
			$this->blnAdminBlockip = DleUsergroups::AdminBlockipDefault;
			$this->blnAdminBanners = DleUsergroups::AdminBannersDefault;
			$this->blnAdminRss = DleUsergroups::AdminRssDefault;
			$this->blnAdminIptools = DleUsergroups::AdminIptoolsDefault;
			$this->blnAdminRssinform = DleUsergroups::AdminRssinformDefault;
			$this->blnAdminGooglemap = DleUsergroups::AdminGooglemapDefault;
			$this->blnAllowHtml = DleUsergroups::AllowHtmlDefault;
			$this->strGroupPrefix = DleUsergroups::GroupPrefixDefault;
			$this->strGroupSuffix = DleUsergroups::GroupSuffixDefault;
			$this->blnAllowSubscribe = DleUsergroups::AllowSubscribeDefault;
			$this->blnAllowImageSize = DleUsergroups::AllowImageSizeDefault;
			$this->strCatAllowAddnews = DleUsergroups::CatAllowAddnewsDefault;
			$this->intFloodNews = DleUsergroups::FloodNewsDefault;
			$this->intMaxDayNews = DleUsergroups::MaxDayNewsDefault;
			$this->blnForceLeech = DleUsergroups::ForceLeechDefault;
			$this->intEditLimit = DleUsergroups::EditLimitDefault;
			$this->blnCaptchaPm = DleUsergroups::CaptchaPmDefault;
			$this->intMaxPmDay = DleUsergroups::MaxPmDayDefault;
			$this->intMaxMailDay = DleUsergroups::MaxMailDayDefault;
			$this->blnAdminTagscloud = DleUsergroups::AdminTagscloudDefault;
			$this->blnAllowVote = DleUsergroups::AllowVoteDefault;
			$this->blnAdminComplaint = DleUsergroups::AdminComplaintDefault;
			$this->blnNewsQuestion = DleUsergroups::NewsQuestionDefault;
			$this->blnCommentsQuestion = DleUsergroups::CommentsQuestionDefault;
			$this->intMaxCommentDay = DleUsergroups::MaxCommentDayDefault;
			$this->intMaxImages = DleUsergroups::MaxImagesDefault;
			$this->intMaxFiles = DleUsergroups::MaxFilesDefault;
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
		 * Load a DleUsergroups from PK Info
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsergroups
		 */
		public static function Load($intId, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleUsergroups', $intId);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DleUsergroups::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleUsergroups()->Id, $intId)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DleUsergroupses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsergroups[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DleUsergroups::QueryArray to perform the LoadAll query
			try {
				return DleUsergroups::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DleUsergroupses
		 * @return int
		 */
		public static function CountAll() {
			// Call DleUsergroups::QueryCount to perform the CountAll query
			return DleUsergroups::QueryCount(QQ::All());
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
			$objDatabase = DleUsergroups::GetDatabase();

			// Create/Build out the QueryBuilder object with DleUsergroups-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dle_usergroups');

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
				DleUsergroups::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dle_usergroups');

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
		 * Static Qcubed Query method to query for a single DleUsergroups object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleUsergroups the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleUsergroups::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DleUsergroups object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DleUsergroups::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DleUsergroups::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DleUsergroups objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DleUsergroups[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleUsergroups::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DleUsergroups::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DleUsergroups::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DleUsergroups objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DleUsergroups::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DleUsergroups::GetDatabase();

			$strQuery = DleUsergroups::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/dleusergroups', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DleUsergroups::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DleUsergroups
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dle_usergroups';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'id', $strAliasPrefix . 'id');
			    $objBuilder->AddSelectItem($strTableName, 'group_name', $strAliasPrefix . 'group_name');
			    $objBuilder->AddSelectItem($strTableName, 'allow_cats', $strAliasPrefix . 'allow_cats');
			    $objBuilder->AddSelectItem($strTableName, 'allow_adds', $strAliasPrefix . 'allow_adds');
			    $objBuilder->AddSelectItem($strTableName, 'cat_add', $strAliasPrefix . 'cat_add');
			    $objBuilder->AddSelectItem($strTableName, 'allow_admin', $strAliasPrefix . 'allow_admin');
			    $objBuilder->AddSelectItem($strTableName, 'allow_addc', $strAliasPrefix . 'allow_addc');
			    $objBuilder->AddSelectItem($strTableName, 'allow_editc', $strAliasPrefix . 'allow_editc');
			    $objBuilder->AddSelectItem($strTableName, 'allow_delc', $strAliasPrefix . 'allow_delc');
			    $objBuilder->AddSelectItem($strTableName, 'edit_allc', $strAliasPrefix . 'edit_allc');
			    $objBuilder->AddSelectItem($strTableName, 'del_allc', $strAliasPrefix . 'del_allc');
			    $objBuilder->AddSelectItem($strTableName, 'moderation', $strAliasPrefix . 'moderation');
			    $objBuilder->AddSelectItem($strTableName, 'allow_all_edit', $strAliasPrefix . 'allow_all_edit');
			    $objBuilder->AddSelectItem($strTableName, 'allow_edit', $strAliasPrefix . 'allow_edit');
			    $objBuilder->AddSelectItem($strTableName, 'allow_pm', $strAliasPrefix . 'allow_pm');
			    $objBuilder->AddSelectItem($strTableName, 'max_pm', $strAliasPrefix . 'max_pm');
			    $objBuilder->AddSelectItem($strTableName, 'max_foto', $strAliasPrefix . 'max_foto');
			    $objBuilder->AddSelectItem($strTableName, 'allow_files', $strAliasPrefix . 'allow_files');
			    $objBuilder->AddSelectItem($strTableName, 'allow_hide', $strAliasPrefix . 'allow_hide');
			    $objBuilder->AddSelectItem($strTableName, 'allow_short', $strAliasPrefix . 'allow_short');
			    $objBuilder->AddSelectItem($strTableName, 'time_limit', $strAliasPrefix . 'time_limit');
			    $objBuilder->AddSelectItem($strTableName, 'rid', $strAliasPrefix . 'rid');
			    $objBuilder->AddSelectItem($strTableName, 'allow_fixed', $strAliasPrefix . 'allow_fixed');
			    $objBuilder->AddSelectItem($strTableName, 'allow_feed', $strAliasPrefix . 'allow_feed');
			    $objBuilder->AddSelectItem($strTableName, 'allow_search', $strAliasPrefix . 'allow_search');
			    $objBuilder->AddSelectItem($strTableName, 'allow_poll', $strAliasPrefix . 'allow_poll');
			    $objBuilder->AddSelectItem($strTableName, 'allow_main', $strAliasPrefix . 'allow_main');
			    $objBuilder->AddSelectItem($strTableName, 'captcha', $strAliasPrefix . 'captcha');
			    $objBuilder->AddSelectItem($strTableName, 'icon', $strAliasPrefix . 'icon');
			    $objBuilder->AddSelectItem($strTableName, 'allow_modc', $strAliasPrefix . 'allow_modc');
			    $objBuilder->AddSelectItem($strTableName, 'allow_rating', $strAliasPrefix . 'allow_rating');
			    $objBuilder->AddSelectItem($strTableName, 'allow_offline', $strAliasPrefix . 'allow_offline');
			    $objBuilder->AddSelectItem($strTableName, 'allow_image_upload', $strAliasPrefix . 'allow_image_upload');
			    $objBuilder->AddSelectItem($strTableName, 'allow_file_upload', $strAliasPrefix . 'allow_file_upload');
			    $objBuilder->AddSelectItem($strTableName, 'allow_signature', $strAliasPrefix . 'allow_signature');
			    $objBuilder->AddSelectItem($strTableName, 'allow_url', $strAliasPrefix . 'allow_url');
			    $objBuilder->AddSelectItem($strTableName, 'news_sec_code', $strAliasPrefix . 'news_sec_code');
			    $objBuilder->AddSelectItem($strTableName, 'allow_image', $strAliasPrefix . 'allow_image');
			    $objBuilder->AddSelectItem($strTableName, 'max_signature', $strAliasPrefix . 'max_signature');
			    $objBuilder->AddSelectItem($strTableName, 'max_info', $strAliasPrefix . 'max_info');
			    $objBuilder->AddSelectItem($strTableName, 'admin_addnews', $strAliasPrefix . 'admin_addnews');
			    $objBuilder->AddSelectItem($strTableName, 'admin_editnews', $strAliasPrefix . 'admin_editnews');
			    $objBuilder->AddSelectItem($strTableName, 'admin_comments', $strAliasPrefix . 'admin_comments');
			    $objBuilder->AddSelectItem($strTableName, 'admin_categories', $strAliasPrefix . 'admin_categories');
			    $objBuilder->AddSelectItem($strTableName, 'admin_editusers', $strAliasPrefix . 'admin_editusers');
			    $objBuilder->AddSelectItem($strTableName, 'admin_wordfilter', $strAliasPrefix . 'admin_wordfilter');
			    $objBuilder->AddSelectItem($strTableName, 'admin_xfields', $strAliasPrefix . 'admin_xfields');
			    $objBuilder->AddSelectItem($strTableName, 'admin_userfields', $strAliasPrefix . 'admin_userfields');
			    $objBuilder->AddSelectItem($strTableName, 'admin_static', $strAliasPrefix . 'admin_static');
			    $objBuilder->AddSelectItem($strTableName, 'admin_editvote', $strAliasPrefix . 'admin_editvote');
			    $objBuilder->AddSelectItem($strTableName, 'admin_newsletter', $strAliasPrefix . 'admin_newsletter');
			    $objBuilder->AddSelectItem($strTableName, 'admin_blockip', $strAliasPrefix . 'admin_blockip');
			    $objBuilder->AddSelectItem($strTableName, 'admin_banners', $strAliasPrefix . 'admin_banners');
			    $objBuilder->AddSelectItem($strTableName, 'admin_rss', $strAliasPrefix . 'admin_rss');
			    $objBuilder->AddSelectItem($strTableName, 'admin_iptools', $strAliasPrefix . 'admin_iptools');
			    $objBuilder->AddSelectItem($strTableName, 'admin_rssinform', $strAliasPrefix . 'admin_rssinform');
			    $objBuilder->AddSelectItem($strTableName, 'admin_googlemap', $strAliasPrefix . 'admin_googlemap');
			    $objBuilder->AddSelectItem($strTableName, 'allow_html', $strAliasPrefix . 'allow_html');
			    $objBuilder->AddSelectItem($strTableName, 'group_prefix', $strAliasPrefix . 'group_prefix');
			    $objBuilder->AddSelectItem($strTableName, 'group_suffix', $strAliasPrefix . 'group_suffix');
			    $objBuilder->AddSelectItem($strTableName, 'allow_subscribe', $strAliasPrefix . 'allow_subscribe');
			    $objBuilder->AddSelectItem($strTableName, 'allow_image_size', $strAliasPrefix . 'allow_image_size');
			    $objBuilder->AddSelectItem($strTableName, 'cat_allow_addnews', $strAliasPrefix . 'cat_allow_addnews');
			    $objBuilder->AddSelectItem($strTableName, 'flood_news', $strAliasPrefix . 'flood_news');
			    $objBuilder->AddSelectItem($strTableName, 'max_day_news', $strAliasPrefix . 'max_day_news');
			    $objBuilder->AddSelectItem($strTableName, 'force_leech', $strAliasPrefix . 'force_leech');
			    $objBuilder->AddSelectItem($strTableName, 'edit_limit', $strAliasPrefix . 'edit_limit');
			    $objBuilder->AddSelectItem($strTableName, 'captcha_pm', $strAliasPrefix . 'captcha_pm');
			    $objBuilder->AddSelectItem($strTableName, 'max_pm_day', $strAliasPrefix . 'max_pm_day');
			    $objBuilder->AddSelectItem($strTableName, 'max_mail_day', $strAliasPrefix . 'max_mail_day');
			    $objBuilder->AddSelectItem($strTableName, 'admin_tagscloud', $strAliasPrefix . 'admin_tagscloud');
			    $objBuilder->AddSelectItem($strTableName, 'allow_vote', $strAliasPrefix . 'allow_vote');
			    $objBuilder->AddSelectItem($strTableName, 'admin_complaint', $strAliasPrefix . 'admin_complaint');
			    $objBuilder->AddSelectItem($strTableName, 'news_question', $strAliasPrefix . 'news_question');
			    $objBuilder->AddSelectItem($strTableName, 'comments_question', $strAliasPrefix . 'comments_question');
			    $objBuilder->AddSelectItem($strTableName, 'max_comment_day', $strAliasPrefix . 'max_comment_day');
			    $objBuilder->AddSelectItem($strTableName, 'max_images', $strAliasPrefix . 'max_images');
			    $objBuilder->AddSelectItem($strTableName, 'max_files', $strAliasPrefix . 'max_files');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DleUsergroups from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DleUsergroups::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DleUsergroups
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the DleUsergroups object
			$objToReturn = new DleUsergroups();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'group_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGroupName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'allow_cats';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAllowCats = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'allow_adds';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowAdds = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'cat_add';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCatAdd = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'allow_admin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowAdmin = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_addc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowAddc = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_editc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowEditc = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_delc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowDelc = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'edit_allc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnEditAllc = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'del_allc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnDelAllc = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'moderation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnModeration = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_all_edit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowAllEdit = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_edit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowEdit = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_pm';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowPm = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'max_pm';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxPm = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'max_foto';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMaxFoto = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'allow_files';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowFiles = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_hide';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowHide = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_short';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowShort = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'time_limit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnTimeLimit = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'rid';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRid = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'allow_fixed';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowFixed = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_feed';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowFeed = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_search';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowSearch = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_poll';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowPoll = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_main';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowMain = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'captcha';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCaptcha = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'icon';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strIcon = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'allow_modc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowModc = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_rating';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowRating = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_offline';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowOffline = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_image_upload';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowImageUpload = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_file_upload';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowFileUpload = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_signature';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowSignature = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_url';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowUrl = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'news_sec_code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnNewsSecCode = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_image';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowImage = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'max_signature';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxSignature = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'max_info';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxInfo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'admin_addnews';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminAddnews = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_editnews';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminEditnews = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_comments';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminComments = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_categories';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminCategories = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_editusers';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminEditusers = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_wordfilter';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminWordfilter = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_xfields';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminXfields = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_userfields';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminUserfields = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_static';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminStatic = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_editvote';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminEditvote = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_newsletter';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminNewsletter = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_blockip';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminBlockip = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_banners';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminBanners = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_rss';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminRss = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_iptools';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminIptools = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_rssinform';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminRssinform = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_googlemap';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminGooglemap = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_html';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowHtml = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'group_prefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGroupPrefix = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'group_suffix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGroupSuffix = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'allow_subscribe';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowSubscribe = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_image_size';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowImageSize = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'cat_allow_addnews';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCatAllowAddnews = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'flood_news';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFloodNews = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'max_day_news';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxDayNews = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'force_leech';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnForceLeech = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'edit_limit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intEditLimit = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'captcha_pm';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCaptchaPm = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'max_pm_day';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxPmDay = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'max_mail_day';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxMailDay = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'admin_tagscloud';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminTagscloud = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'allow_vote';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAllowVote = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admin_complaint';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdminComplaint = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'news_question';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnNewsQuestion = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'comments_question';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCommentsQuestion = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'max_comment_day';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxCommentDay = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'max_images';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxImages = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'max_files';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMaxFiles = $objDbRow->GetColumn($strAliasName, 'Integer');

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
				$strAliasPrefix = 'dle_usergroups__';




			return $objToReturn;
		}

		/**
		 * Instantiate an array of DleUsergroupses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DleUsergroups[]
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
					$objItem = DleUsergroups::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DleUsergroups::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DleUsergroups object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DleUsergroups next row resulting from the query
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
			return DleUsergroups::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DleUsergroups object,
		 * by Id Index(es)
		 * @param integer $intId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DleUsergroups
		*/
		public static function LoadById($intId, $objOptionalClauses = null) {
			return DleUsergroups::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DleUsergroups()->Id, $intId)
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
		 * Save this DleUsergroups
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DleUsergroups::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dle_usergroups` (
							`group_name`,
							`allow_cats`,
							`allow_adds`,
							`cat_add`,
							`allow_admin`,
							`allow_addc`,
							`allow_editc`,
							`allow_delc`,
							`edit_allc`,
							`del_allc`,
							`moderation`,
							`allow_all_edit`,
							`allow_edit`,
							`allow_pm`,
							`max_pm`,
							`max_foto`,
							`allow_files`,
							`allow_hide`,
							`allow_short`,
							`time_limit`,
							`rid`,
							`allow_fixed`,
							`allow_feed`,
							`allow_search`,
							`allow_poll`,
							`allow_main`,
							`captcha`,
							`icon`,
							`allow_modc`,
							`allow_rating`,
							`allow_offline`,
							`allow_image_upload`,
							`allow_file_upload`,
							`allow_signature`,
							`allow_url`,
							`news_sec_code`,
							`allow_image`,
							`max_signature`,
							`max_info`,
							`admin_addnews`,
							`admin_editnews`,
							`admin_comments`,
							`admin_categories`,
							`admin_editusers`,
							`admin_wordfilter`,
							`admin_xfields`,
							`admin_userfields`,
							`admin_static`,
							`admin_editvote`,
							`admin_newsletter`,
							`admin_blockip`,
							`admin_banners`,
							`admin_rss`,
							`admin_iptools`,
							`admin_rssinform`,
							`admin_googlemap`,
							`allow_html`,
							`group_prefix`,
							`group_suffix`,
							`allow_subscribe`,
							`allow_image_size`,
							`cat_allow_addnews`,
							`flood_news`,
							`max_day_news`,
							`force_leech`,
							`edit_limit`,
							`captcha_pm`,
							`max_pm_day`,
							`max_mail_day`,
							`admin_tagscloud`,
							`allow_vote`,
							`admin_complaint`,
							`news_question`,
							`comments_question`,
							`max_comment_day`,
							`max_images`,
							`max_files`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strGroupName) . ',
							' . $objDatabase->SqlVariable($this->strAllowCats) . ',
							' . $objDatabase->SqlVariable($this->blnAllowAdds) . ',
							' . $objDatabase->SqlVariable($this->strCatAdd) . ',
							' . $objDatabase->SqlVariable($this->blnAllowAdmin) . ',
							' . $objDatabase->SqlVariable($this->blnAllowAddc) . ',
							' . $objDatabase->SqlVariable($this->blnAllowEditc) . ',
							' . $objDatabase->SqlVariable($this->blnAllowDelc) . ',
							' . $objDatabase->SqlVariable($this->blnEditAllc) . ',
							' . $objDatabase->SqlVariable($this->blnDelAllc) . ',
							' . $objDatabase->SqlVariable($this->blnModeration) . ',
							' . $objDatabase->SqlVariable($this->blnAllowAllEdit) . ',
							' . $objDatabase->SqlVariable($this->blnAllowEdit) . ',
							' . $objDatabase->SqlVariable($this->blnAllowPm) . ',
							' . $objDatabase->SqlVariable($this->intMaxPm) . ',
							' . $objDatabase->SqlVariable($this->strMaxFoto) . ',
							' . $objDatabase->SqlVariable($this->blnAllowFiles) . ',
							' . $objDatabase->SqlVariable($this->blnAllowHide) . ',
							' . $objDatabase->SqlVariable($this->blnAllowShort) . ',
							' . $objDatabase->SqlVariable($this->blnTimeLimit) . ',
							' . $objDatabase->SqlVariable($this->intRid) . ',
							' . $objDatabase->SqlVariable($this->blnAllowFixed) . ',
							' . $objDatabase->SqlVariable($this->blnAllowFeed) . ',
							' . $objDatabase->SqlVariable($this->blnAllowSearch) . ',
							' . $objDatabase->SqlVariable($this->blnAllowPoll) . ',
							' . $objDatabase->SqlVariable($this->blnAllowMain) . ',
							' . $objDatabase->SqlVariable($this->blnCaptcha) . ',
							' . $objDatabase->SqlVariable($this->strIcon) . ',
							' . $objDatabase->SqlVariable($this->blnAllowModc) . ',
							' . $objDatabase->SqlVariable($this->blnAllowRating) . ',
							' . $objDatabase->SqlVariable($this->blnAllowOffline) . ',
							' . $objDatabase->SqlVariable($this->blnAllowImageUpload) . ',
							' . $objDatabase->SqlVariable($this->blnAllowFileUpload) . ',
							' . $objDatabase->SqlVariable($this->blnAllowSignature) . ',
							' . $objDatabase->SqlVariable($this->blnAllowUrl) . ',
							' . $objDatabase->SqlVariable($this->blnNewsSecCode) . ',
							' . $objDatabase->SqlVariable($this->blnAllowImage) . ',
							' . $objDatabase->SqlVariable($this->intMaxSignature) . ',
							' . $objDatabase->SqlVariable($this->intMaxInfo) . ',
							' . $objDatabase->SqlVariable($this->blnAdminAddnews) . ',
							' . $objDatabase->SqlVariable($this->blnAdminEditnews) . ',
							' . $objDatabase->SqlVariable($this->blnAdminComments) . ',
							' . $objDatabase->SqlVariable($this->blnAdminCategories) . ',
							' . $objDatabase->SqlVariable($this->blnAdminEditusers) . ',
							' . $objDatabase->SqlVariable($this->blnAdminWordfilter) . ',
							' . $objDatabase->SqlVariable($this->blnAdminXfields) . ',
							' . $objDatabase->SqlVariable($this->blnAdminUserfields) . ',
							' . $objDatabase->SqlVariable($this->blnAdminStatic) . ',
							' . $objDatabase->SqlVariable($this->blnAdminEditvote) . ',
							' . $objDatabase->SqlVariable($this->blnAdminNewsletter) . ',
							' . $objDatabase->SqlVariable($this->blnAdminBlockip) . ',
							' . $objDatabase->SqlVariable($this->blnAdminBanners) . ',
							' . $objDatabase->SqlVariable($this->blnAdminRss) . ',
							' . $objDatabase->SqlVariable($this->blnAdminIptools) . ',
							' . $objDatabase->SqlVariable($this->blnAdminRssinform) . ',
							' . $objDatabase->SqlVariable($this->blnAdminGooglemap) . ',
							' . $objDatabase->SqlVariable($this->blnAllowHtml) . ',
							' . $objDatabase->SqlVariable($this->strGroupPrefix) . ',
							' . $objDatabase->SqlVariable($this->strGroupSuffix) . ',
							' . $objDatabase->SqlVariable($this->blnAllowSubscribe) . ',
							' . $objDatabase->SqlVariable($this->blnAllowImageSize) . ',
							' . $objDatabase->SqlVariable($this->strCatAllowAddnews) . ',
							' . $objDatabase->SqlVariable($this->intFloodNews) . ',
							' . $objDatabase->SqlVariable($this->intMaxDayNews) . ',
							' . $objDatabase->SqlVariable($this->blnForceLeech) . ',
							' . $objDatabase->SqlVariable($this->intEditLimit) . ',
							' . $objDatabase->SqlVariable($this->blnCaptchaPm) . ',
							' . $objDatabase->SqlVariable($this->intMaxPmDay) . ',
							' . $objDatabase->SqlVariable($this->intMaxMailDay) . ',
							' . $objDatabase->SqlVariable($this->blnAdminTagscloud) . ',
							' . $objDatabase->SqlVariable($this->blnAllowVote) . ',
							' . $objDatabase->SqlVariable($this->blnAdminComplaint) . ',
							' . $objDatabase->SqlVariable($this->blnNewsQuestion) . ',
							' . $objDatabase->SqlVariable($this->blnCommentsQuestion) . ',
							' . $objDatabase->SqlVariable($this->intMaxCommentDay) . ',
							' . $objDatabase->SqlVariable($this->intMaxImages) . ',
							' . $objDatabase->SqlVariable($this->intMaxFiles) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intId = $objDatabase->InsertId('dle_usergroups', 'id');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dle_usergroups`
						SET
							`group_name` = ' . $objDatabase->SqlVariable($this->strGroupName) . ',
							`allow_cats` = ' . $objDatabase->SqlVariable($this->strAllowCats) . ',
							`allow_adds` = ' . $objDatabase->SqlVariable($this->blnAllowAdds) . ',
							`cat_add` = ' . $objDatabase->SqlVariable($this->strCatAdd) . ',
							`allow_admin` = ' . $objDatabase->SqlVariable($this->blnAllowAdmin) . ',
							`allow_addc` = ' . $objDatabase->SqlVariable($this->blnAllowAddc) . ',
							`allow_editc` = ' . $objDatabase->SqlVariable($this->blnAllowEditc) . ',
							`allow_delc` = ' . $objDatabase->SqlVariable($this->blnAllowDelc) . ',
							`edit_allc` = ' . $objDatabase->SqlVariable($this->blnEditAllc) . ',
							`del_allc` = ' . $objDatabase->SqlVariable($this->blnDelAllc) . ',
							`moderation` = ' . $objDatabase->SqlVariable($this->blnModeration) . ',
							`allow_all_edit` = ' . $objDatabase->SqlVariable($this->blnAllowAllEdit) . ',
							`allow_edit` = ' . $objDatabase->SqlVariable($this->blnAllowEdit) . ',
							`allow_pm` = ' . $objDatabase->SqlVariable($this->blnAllowPm) . ',
							`max_pm` = ' . $objDatabase->SqlVariable($this->intMaxPm) . ',
							`max_foto` = ' . $objDatabase->SqlVariable($this->strMaxFoto) . ',
							`allow_files` = ' . $objDatabase->SqlVariable($this->blnAllowFiles) . ',
							`allow_hide` = ' . $objDatabase->SqlVariable($this->blnAllowHide) . ',
							`allow_short` = ' . $objDatabase->SqlVariable($this->blnAllowShort) . ',
							`time_limit` = ' . $objDatabase->SqlVariable($this->blnTimeLimit) . ',
							`rid` = ' . $objDatabase->SqlVariable($this->intRid) . ',
							`allow_fixed` = ' . $objDatabase->SqlVariable($this->blnAllowFixed) . ',
							`allow_feed` = ' . $objDatabase->SqlVariable($this->blnAllowFeed) . ',
							`allow_search` = ' . $objDatabase->SqlVariable($this->blnAllowSearch) . ',
							`allow_poll` = ' . $objDatabase->SqlVariable($this->blnAllowPoll) . ',
							`allow_main` = ' . $objDatabase->SqlVariable($this->blnAllowMain) . ',
							`captcha` = ' . $objDatabase->SqlVariable($this->blnCaptcha) . ',
							`icon` = ' . $objDatabase->SqlVariable($this->strIcon) . ',
							`allow_modc` = ' . $objDatabase->SqlVariable($this->blnAllowModc) . ',
							`allow_rating` = ' . $objDatabase->SqlVariable($this->blnAllowRating) . ',
							`allow_offline` = ' . $objDatabase->SqlVariable($this->blnAllowOffline) . ',
							`allow_image_upload` = ' . $objDatabase->SqlVariable($this->blnAllowImageUpload) . ',
							`allow_file_upload` = ' . $objDatabase->SqlVariable($this->blnAllowFileUpload) . ',
							`allow_signature` = ' . $objDatabase->SqlVariable($this->blnAllowSignature) . ',
							`allow_url` = ' . $objDatabase->SqlVariable($this->blnAllowUrl) . ',
							`news_sec_code` = ' . $objDatabase->SqlVariable($this->blnNewsSecCode) . ',
							`allow_image` = ' . $objDatabase->SqlVariable($this->blnAllowImage) . ',
							`max_signature` = ' . $objDatabase->SqlVariable($this->intMaxSignature) . ',
							`max_info` = ' . $objDatabase->SqlVariable($this->intMaxInfo) . ',
							`admin_addnews` = ' . $objDatabase->SqlVariable($this->blnAdminAddnews) . ',
							`admin_editnews` = ' . $objDatabase->SqlVariable($this->blnAdminEditnews) . ',
							`admin_comments` = ' . $objDatabase->SqlVariable($this->blnAdminComments) . ',
							`admin_categories` = ' . $objDatabase->SqlVariable($this->blnAdminCategories) . ',
							`admin_editusers` = ' . $objDatabase->SqlVariable($this->blnAdminEditusers) . ',
							`admin_wordfilter` = ' . $objDatabase->SqlVariable($this->blnAdminWordfilter) . ',
							`admin_xfields` = ' . $objDatabase->SqlVariable($this->blnAdminXfields) . ',
							`admin_userfields` = ' . $objDatabase->SqlVariable($this->blnAdminUserfields) . ',
							`admin_static` = ' . $objDatabase->SqlVariable($this->blnAdminStatic) . ',
							`admin_editvote` = ' . $objDatabase->SqlVariable($this->blnAdminEditvote) . ',
							`admin_newsletter` = ' . $objDatabase->SqlVariable($this->blnAdminNewsletter) . ',
							`admin_blockip` = ' . $objDatabase->SqlVariable($this->blnAdminBlockip) . ',
							`admin_banners` = ' . $objDatabase->SqlVariable($this->blnAdminBanners) . ',
							`admin_rss` = ' . $objDatabase->SqlVariable($this->blnAdminRss) . ',
							`admin_iptools` = ' . $objDatabase->SqlVariable($this->blnAdminIptools) . ',
							`admin_rssinform` = ' . $objDatabase->SqlVariable($this->blnAdminRssinform) . ',
							`admin_googlemap` = ' . $objDatabase->SqlVariable($this->blnAdminGooglemap) . ',
							`allow_html` = ' . $objDatabase->SqlVariable($this->blnAllowHtml) . ',
							`group_prefix` = ' . $objDatabase->SqlVariable($this->strGroupPrefix) . ',
							`group_suffix` = ' . $objDatabase->SqlVariable($this->strGroupSuffix) . ',
							`allow_subscribe` = ' . $objDatabase->SqlVariable($this->blnAllowSubscribe) . ',
							`allow_image_size` = ' . $objDatabase->SqlVariable($this->blnAllowImageSize) . ',
							`cat_allow_addnews` = ' . $objDatabase->SqlVariable($this->strCatAllowAddnews) . ',
							`flood_news` = ' . $objDatabase->SqlVariable($this->intFloodNews) . ',
							`max_day_news` = ' . $objDatabase->SqlVariable($this->intMaxDayNews) . ',
							`force_leech` = ' . $objDatabase->SqlVariable($this->blnForceLeech) . ',
							`edit_limit` = ' . $objDatabase->SqlVariable($this->intEditLimit) . ',
							`captcha_pm` = ' . $objDatabase->SqlVariable($this->blnCaptchaPm) . ',
							`max_pm_day` = ' . $objDatabase->SqlVariable($this->intMaxPmDay) . ',
							`max_mail_day` = ' . $objDatabase->SqlVariable($this->intMaxMailDay) . ',
							`admin_tagscloud` = ' . $objDatabase->SqlVariable($this->blnAdminTagscloud) . ',
							`allow_vote` = ' . $objDatabase->SqlVariable($this->blnAllowVote) . ',
							`admin_complaint` = ' . $objDatabase->SqlVariable($this->blnAdminComplaint) . ',
							`news_question` = ' . $objDatabase->SqlVariable($this->blnNewsQuestion) . ',
							`comments_question` = ' . $objDatabase->SqlVariable($this->blnCommentsQuestion) . ',
							`max_comment_day` = ' . $objDatabase->SqlVariable($this->intMaxCommentDay) . ',
							`max_images` = ' . $objDatabase->SqlVariable($this->intMaxImages) . ',
							`max_files` = ' . $objDatabase->SqlVariable($this->intMaxFiles) . '
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
		 * Delete this DleUsergroups
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intId)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DleUsergroups with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DleUsergroups::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_usergroups`
				WHERE
					`id` = ' . $objDatabase->SqlVariable($this->intId) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DleUsergroups ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DleUsergroups', $this->intId);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DleUsergroupses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DleUsergroups::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dle_usergroups`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dle_usergroups table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DleUsergroups::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dle_usergroups`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DleUsergroups from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DleUsergroups object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DleUsergroups::Load($this->intId);

			// Update $this's local variables to match
			$this->strGroupName = $objReloaded->strGroupName;
			$this->strAllowCats = $objReloaded->strAllowCats;
			$this->blnAllowAdds = $objReloaded->blnAllowAdds;
			$this->strCatAdd = $objReloaded->strCatAdd;
			$this->blnAllowAdmin = $objReloaded->blnAllowAdmin;
			$this->blnAllowAddc = $objReloaded->blnAllowAddc;
			$this->blnAllowEditc = $objReloaded->blnAllowEditc;
			$this->blnAllowDelc = $objReloaded->blnAllowDelc;
			$this->blnEditAllc = $objReloaded->blnEditAllc;
			$this->blnDelAllc = $objReloaded->blnDelAllc;
			$this->blnModeration = $objReloaded->blnModeration;
			$this->blnAllowAllEdit = $objReloaded->blnAllowAllEdit;
			$this->blnAllowEdit = $objReloaded->blnAllowEdit;
			$this->blnAllowPm = $objReloaded->blnAllowPm;
			$this->intMaxPm = $objReloaded->intMaxPm;
			$this->strMaxFoto = $objReloaded->strMaxFoto;
			$this->blnAllowFiles = $objReloaded->blnAllowFiles;
			$this->blnAllowHide = $objReloaded->blnAllowHide;
			$this->blnAllowShort = $objReloaded->blnAllowShort;
			$this->blnTimeLimit = $objReloaded->blnTimeLimit;
			$this->intRid = $objReloaded->intRid;
			$this->blnAllowFixed = $objReloaded->blnAllowFixed;
			$this->blnAllowFeed = $objReloaded->blnAllowFeed;
			$this->blnAllowSearch = $objReloaded->blnAllowSearch;
			$this->blnAllowPoll = $objReloaded->blnAllowPoll;
			$this->blnAllowMain = $objReloaded->blnAllowMain;
			$this->blnCaptcha = $objReloaded->blnCaptcha;
			$this->strIcon = $objReloaded->strIcon;
			$this->blnAllowModc = $objReloaded->blnAllowModc;
			$this->blnAllowRating = $objReloaded->blnAllowRating;
			$this->blnAllowOffline = $objReloaded->blnAllowOffline;
			$this->blnAllowImageUpload = $objReloaded->blnAllowImageUpload;
			$this->blnAllowFileUpload = $objReloaded->blnAllowFileUpload;
			$this->blnAllowSignature = $objReloaded->blnAllowSignature;
			$this->blnAllowUrl = $objReloaded->blnAllowUrl;
			$this->blnNewsSecCode = $objReloaded->blnNewsSecCode;
			$this->blnAllowImage = $objReloaded->blnAllowImage;
			$this->intMaxSignature = $objReloaded->intMaxSignature;
			$this->intMaxInfo = $objReloaded->intMaxInfo;
			$this->blnAdminAddnews = $objReloaded->blnAdminAddnews;
			$this->blnAdminEditnews = $objReloaded->blnAdminEditnews;
			$this->blnAdminComments = $objReloaded->blnAdminComments;
			$this->blnAdminCategories = $objReloaded->blnAdminCategories;
			$this->blnAdminEditusers = $objReloaded->blnAdminEditusers;
			$this->blnAdminWordfilter = $objReloaded->blnAdminWordfilter;
			$this->blnAdminXfields = $objReloaded->blnAdminXfields;
			$this->blnAdminUserfields = $objReloaded->blnAdminUserfields;
			$this->blnAdminStatic = $objReloaded->blnAdminStatic;
			$this->blnAdminEditvote = $objReloaded->blnAdminEditvote;
			$this->blnAdminNewsletter = $objReloaded->blnAdminNewsletter;
			$this->blnAdminBlockip = $objReloaded->blnAdminBlockip;
			$this->blnAdminBanners = $objReloaded->blnAdminBanners;
			$this->blnAdminRss = $objReloaded->blnAdminRss;
			$this->blnAdminIptools = $objReloaded->blnAdminIptools;
			$this->blnAdminRssinform = $objReloaded->blnAdminRssinform;
			$this->blnAdminGooglemap = $objReloaded->blnAdminGooglemap;
			$this->blnAllowHtml = $objReloaded->blnAllowHtml;
			$this->strGroupPrefix = $objReloaded->strGroupPrefix;
			$this->strGroupSuffix = $objReloaded->strGroupSuffix;
			$this->blnAllowSubscribe = $objReloaded->blnAllowSubscribe;
			$this->blnAllowImageSize = $objReloaded->blnAllowImageSize;
			$this->strCatAllowAddnews = $objReloaded->strCatAllowAddnews;
			$this->intFloodNews = $objReloaded->intFloodNews;
			$this->intMaxDayNews = $objReloaded->intMaxDayNews;
			$this->blnForceLeech = $objReloaded->blnForceLeech;
			$this->intEditLimit = $objReloaded->intEditLimit;
			$this->blnCaptchaPm = $objReloaded->blnCaptchaPm;
			$this->intMaxPmDay = $objReloaded->intMaxPmDay;
			$this->intMaxMailDay = $objReloaded->intMaxMailDay;
			$this->blnAdminTagscloud = $objReloaded->blnAdminTagscloud;
			$this->blnAllowVote = $objReloaded->blnAllowVote;
			$this->blnAdminComplaint = $objReloaded->blnAdminComplaint;
			$this->blnNewsQuestion = $objReloaded->blnNewsQuestion;
			$this->blnCommentsQuestion = $objReloaded->blnCommentsQuestion;
			$this->intMaxCommentDay = $objReloaded->intMaxCommentDay;
			$this->intMaxImages = $objReloaded->intMaxImages;
			$this->intMaxFiles = $objReloaded->intMaxFiles;
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

				case 'GroupName':
					/**
					 * Gets the value for strGroupName (Not Null)
					 * @return string
					 */
					return $this->strGroupName;

				case 'AllowCats':
					/**
					 * Gets the value for strAllowCats (Not Null)
					 * @return string
					 */
					return $this->strAllowCats;

				case 'AllowAdds':
					/**
					 * Gets the value for blnAllowAdds (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowAdds;

				case 'CatAdd':
					/**
					 * Gets the value for strCatAdd (Not Null)
					 * @return string
					 */
					return $this->strCatAdd;

				case 'AllowAdmin':
					/**
					 * Gets the value for blnAllowAdmin (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowAdmin;

				case 'AllowAddc':
					/**
					 * Gets the value for blnAllowAddc (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowAddc;

				case 'AllowEditc':
					/**
					 * Gets the value for blnAllowEditc (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowEditc;

				case 'AllowDelc':
					/**
					 * Gets the value for blnAllowDelc (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowDelc;

				case 'EditAllc':
					/**
					 * Gets the value for blnEditAllc (Not Null)
					 * @return boolean
					 */
					return $this->blnEditAllc;

				case 'DelAllc':
					/**
					 * Gets the value for blnDelAllc (Not Null)
					 * @return boolean
					 */
					return $this->blnDelAllc;

				case 'Moderation':
					/**
					 * Gets the value for blnModeration (Not Null)
					 * @return boolean
					 */
					return $this->blnModeration;

				case 'AllowAllEdit':
					/**
					 * Gets the value for blnAllowAllEdit (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowAllEdit;

				case 'AllowEdit':
					/**
					 * Gets the value for blnAllowEdit (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowEdit;

				case 'AllowPm':
					/**
					 * Gets the value for blnAllowPm (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowPm;

				case 'MaxPm':
					/**
					 * Gets the value for intMaxPm (Not Null)
					 * @return integer
					 */
					return $this->intMaxPm;

				case 'MaxFoto':
					/**
					 * Gets the value for strMaxFoto (Not Null)
					 * @return string
					 */
					return $this->strMaxFoto;

				case 'AllowFiles':
					/**
					 * Gets the value for blnAllowFiles (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowFiles;

				case 'AllowHide':
					/**
					 * Gets the value for blnAllowHide (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowHide;

				case 'AllowShort':
					/**
					 * Gets the value for blnAllowShort (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowShort;

				case 'TimeLimit':
					/**
					 * Gets the value for blnTimeLimit (Not Null)
					 * @return boolean
					 */
					return $this->blnTimeLimit;

				case 'Rid':
					/**
					 * Gets the value for intRid (Not Null)
					 * @return integer
					 */
					return $this->intRid;

				case 'AllowFixed':
					/**
					 * Gets the value for blnAllowFixed (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowFixed;

				case 'AllowFeed':
					/**
					 * Gets the value for blnAllowFeed (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowFeed;

				case 'AllowSearch':
					/**
					 * Gets the value for blnAllowSearch (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowSearch;

				case 'AllowPoll':
					/**
					 * Gets the value for blnAllowPoll (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowPoll;

				case 'AllowMain':
					/**
					 * Gets the value for blnAllowMain (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowMain;

				case 'Captcha':
					/**
					 * Gets the value for blnCaptcha (Not Null)
					 * @return boolean
					 */
					return $this->blnCaptcha;

				case 'Icon':
					/**
					 * Gets the value for strIcon (Not Null)
					 * @return string
					 */
					return $this->strIcon;

				case 'AllowModc':
					/**
					 * Gets the value for blnAllowModc (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowModc;

				case 'AllowRating':
					/**
					 * Gets the value for blnAllowRating (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowRating;

				case 'AllowOffline':
					/**
					 * Gets the value for blnAllowOffline (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowOffline;

				case 'AllowImageUpload':
					/**
					 * Gets the value for blnAllowImageUpload (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowImageUpload;

				case 'AllowFileUpload':
					/**
					 * Gets the value for blnAllowFileUpload (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowFileUpload;

				case 'AllowSignature':
					/**
					 * Gets the value for blnAllowSignature (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowSignature;

				case 'AllowUrl':
					/**
					 * Gets the value for blnAllowUrl (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowUrl;

				case 'NewsSecCode':
					/**
					 * Gets the value for blnNewsSecCode (Not Null)
					 * @return boolean
					 */
					return $this->blnNewsSecCode;

				case 'AllowImage':
					/**
					 * Gets the value for blnAllowImage (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowImage;

				case 'MaxSignature':
					/**
					 * Gets the value for intMaxSignature (Not Null)
					 * @return integer
					 */
					return $this->intMaxSignature;

				case 'MaxInfo':
					/**
					 * Gets the value for intMaxInfo (Not Null)
					 * @return integer
					 */
					return $this->intMaxInfo;

				case 'AdminAddnews':
					/**
					 * Gets the value for blnAdminAddnews (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminAddnews;

				case 'AdminEditnews':
					/**
					 * Gets the value for blnAdminEditnews (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminEditnews;

				case 'AdminComments':
					/**
					 * Gets the value for blnAdminComments (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminComments;

				case 'AdminCategories':
					/**
					 * Gets the value for blnAdminCategories (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminCategories;

				case 'AdminEditusers':
					/**
					 * Gets the value for blnAdminEditusers (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminEditusers;

				case 'AdminWordfilter':
					/**
					 * Gets the value for blnAdminWordfilter (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminWordfilter;

				case 'AdminXfields':
					/**
					 * Gets the value for blnAdminXfields (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminXfields;

				case 'AdminUserfields':
					/**
					 * Gets the value for blnAdminUserfields (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminUserfields;

				case 'AdminStatic':
					/**
					 * Gets the value for blnAdminStatic (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminStatic;

				case 'AdminEditvote':
					/**
					 * Gets the value for blnAdminEditvote (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminEditvote;

				case 'AdminNewsletter':
					/**
					 * Gets the value for blnAdminNewsletter (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminNewsletter;

				case 'AdminBlockip':
					/**
					 * Gets the value for blnAdminBlockip (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminBlockip;

				case 'AdminBanners':
					/**
					 * Gets the value for blnAdminBanners (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminBanners;

				case 'AdminRss':
					/**
					 * Gets the value for blnAdminRss (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminRss;

				case 'AdminIptools':
					/**
					 * Gets the value for blnAdminIptools (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminIptools;

				case 'AdminRssinform':
					/**
					 * Gets the value for blnAdminRssinform (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminRssinform;

				case 'AdminGooglemap':
					/**
					 * Gets the value for blnAdminGooglemap (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminGooglemap;

				case 'AllowHtml':
					/**
					 * Gets the value for blnAllowHtml (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowHtml;

				case 'GroupPrefix':
					/**
					 * Gets the value for strGroupPrefix (Not Null)
					 * @return string
					 */
					return $this->strGroupPrefix;

				case 'GroupSuffix':
					/**
					 * Gets the value for strGroupSuffix (Not Null)
					 * @return string
					 */
					return $this->strGroupSuffix;

				case 'AllowSubscribe':
					/**
					 * Gets the value for blnAllowSubscribe (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowSubscribe;

				case 'AllowImageSize':
					/**
					 * Gets the value for blnAllowImageSize (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowImageSize;

				case 'CatAllowAddnews':
					/**
					 * Gets the value for strCatAllowAddnews (Not Null)
					 * @return string
					 */
					return $this->strCatAllowAddnews;

				case 'FloodNews':
					/**
					 * Gets the value for intFloodNews (Not Null)
					 * @return integer
					 */
					return $this->intFloodNews;

				case 'MaxDayNews':
					/**
					 * Gets the value for intMaxDayNews (Not Null)
					 * @return integer
					 */
					return $this->intMaxDayNews;

				case 'ForceLeech':
					/**
					 * Gets the value for blnForceLeech (Not Null)
					 * @return boolean
					 */
					return $this->blnForceLeech;

				case 'EditLimit':
					/**
					 * Gets the value for intEditLimit (Not Null)
					 * @return integer
					 */
					return $this->intEditLimit;

				case 'CaptchaPm':
					/**
					 * Gets the value for blnCaptchaPm (Not Null)
					 * @return boolean
					 */
					return $this->blnCaptchaPm;

				case 'MaxPmDay':
					/**
					 * Gets the value for intMaxPmDay (Not Null)
					 * @return integer
					 */
					return $this->intMaxPmDay;

				case 'MaxMailDay':
					/**
					 * Gets the value for intMaxMailDay (Not Null)
					 * @return integer
					 */
					return $this->intMaxMailDay;

				case 'AdminTagscloud':
					/**
					 * Gets the value for blnAdminTagscloud (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminTagscloud;

				case 'AllowVote':
					/**
					 * Gets the value for blnAllowVote (Not Null)
					 * @return boolean
					 */
					return $this->blnAllowVote;

				case 'AdminComplaint':
					/**
					 * Gets the value for blnAdminComplaint (Not Null)
					 * @return boolean
					 */
					return $this->blnAdminComplaint;

				case 'NewsQuestion':
					/**
					 * Gets the value for blnNewsQuestion (Not Null)
					 * @return boolean
					 */
					return $this->blnNewsQuestion;

				case 'CommentsQuestion':
					/**
					 * Gets the value for blnCommentsQuestion (Not Null)
					 * @return boolean
					 */
					return $this->blnCommentsQuestion;

				case 'MaxCommentDay':
					/**
					 * Gets the value for intMaxCommentDay (Not Null)
					 * @return integer
					 */
					return $this->intMaxCommentDay;

				case 'MaxImages':
					/**
					 * Gets the value for intMaxImages (Not Null)
					 * @return integer
					 */
					return $this->intMaxImages;

				case 'MaxFiles':
					/**
					 * Gets the value for intMaxFiles (Not Null)
					 * @return integer
					 */
					return $this->intMaxFiles;


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
				case 'GroupName':
					/**
					 * Sets the value for strGroupName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGroupName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowCats':
					/**
					 * Sets the value for strAllowCats (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAllowCats = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowAdds':
					/**
					 * Sets the value for blnAllowAdds (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowAdds = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CatAdd':
					/**
					 * Sets the value for strCatAdd (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCatAdd = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowAdmin':
					/**
					 * Sets the value for blnAllowAdmin (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowAdmin = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowAddc':
					/**
					 * Sets the value for blnAllowAddc (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowAddc = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowEditc':
					/**
					 * Sets the value for blnAllowEditc (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowEditc = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowDelc':
					/**
					 * Sets the value for blnAllowDelc (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowDelc = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EditAllc':
					/**
					 * Sets the value for blnEditAllc (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnEditAllc = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DelAllc':
					/**
					 * Sets the value for blnDelAllc (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnDelAllc = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Moderation':
					/**
					 * Sets the value for blnModeration (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnModeration = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowAllEdit':
					/**
					 * Sets the value for blnAllowAllEdit (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowAllEdit = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowEdit':
					/**
					 * Sets the value for blnAllowEdit (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowEdit = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowPm':
					/**
					 * Sets the value for blnAllowPm (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowPm = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxPm':
					/**
					 * Sets the value for intMaxPm (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxPm = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxFoto':
					/**
					 * Sets the value for strMaxFoto (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMaxFoto = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowFiles':
					/**
					 * Sets the value for blnAllowFiles (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowFiles = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowHide':
					/**
					 * Sets the value for blnAllowHide (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowHide = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowShort':
					/**
					 * Sets the value for blnAllowShort (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowShort = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TimeLimit':
					/**
					 * Sets the value for blnTimeLimit (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnTimeLimit = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Rid':
					/**
					 * Sets the value for intRid (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intRid = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowFixed':
					/**
					 * Sets the value for blnAllowFixed (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowFixed = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowFeed':
					/**
					 * Sets the value for blnAllowFeed (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowFeed = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowSearch':
					/**
					 * Sets the value for blnAllowSearch (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowSearch = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowPoll':
					/**
					 * Sets the value for blnAllowPoll (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowPoll = QType::Cast($mixValue, QType::Boolean));
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

				case 'Captcha':
					/**
					 * Sets the value for blnCaptcha (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCaptcha = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Icon':
					/**
					 * Sets the value for strIcon (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIcon = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowModc':
					/**
					 * Sets the value for blnAllowModc (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowModc = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowRating':
					/**
					 * Sets the value for blnAllowRating (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowRating = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowOffline':
					/**
					 * Sets the value for blnAllowOffline (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowOffline = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowImageUpload':
					/**
					 * Sets the value for blnAllowImageUpload (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowImageUpload = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowFileUpload':
					/**
					 * Sets the value for blnAllowFileUpload (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowFileUpload = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowSignature':
					/**
					 * Sets the value for blnAllowSignature (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowSignature = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowUrl':
					/**
					 * Sets the value for blnAllowUrl (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowUrl = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsSecCode':
					/**
					 * Sets the value for blnNewsSecCode (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnNewsSecCode = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowImage':
					/**
					 * Sets the value for blnAllowImage (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowImage = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxSignature':
					/**
					 * Sets the value for intMaxSignature (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxSignature = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxInfo':
					/**
					 * Sets the value for intMaxInfo (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxInfo = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminAddnews':
					/**
					 * Sets the value for blnAdminAddnews (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminAddnews = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminEditnews':
					/**
					 * Sets the value for blnAdminEditnews (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminEditnews = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminComments':
					/**
					 * Sets the value for blnAdminComments (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminComments = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminCategories':
					/**
					 * Sets the value for blnAdminCategories (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminCategories = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminEditusers':
					/**
					 * Sets the value for blnAdminEditusers (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminEditusers = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminWordfilter':
					/**
					 * Sets the value for blnAdminWordfilter (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminWordfilter = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminXfields':
					/**
					 * Sets the value for blnAdminXfields (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminXfields = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminUserfields':
					/**
					 * Sets the value for blnAdminUserfields (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminUserfields = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminStatic':
					/**
					 * Sets the value for blnAdminStatic (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminStatic = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminEditvote':
					/**
					 * Sets the value for blnAdminEditvote (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminEditvote = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminNewsletter':
					/**
					 * Sets the value for blnAdminNewsletter (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminNewsletter = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminBlockip':
					/**
					 * Sets the value for blnAdminBlockip (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminBlockip = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminBanners':
					/**
					 * Sets the value for blnAdminBanners (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminBanners = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminRss':
					/**
					 * Sets the value for blnAdminRss (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminRss = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminIptools':
					/**
					 * Sets the value for blnAdminIptools (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminIptools = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminRssinform':
					/**
					 * Sets the value for blnAdminRssinform (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminRssinform = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminGooglemap':
					/**
					 * Sets the value for blnAdminGooglemap (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminGooglemap = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowHtml':
					/**
					 * Sets the value for blnAllowHtml (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowHtml = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GroupPrefix':
					/**
					 * Sets the value for strGroupPrefix (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGroupPrefix = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GroupSuffix':
					/**
					 * Sets the value for strGroupSuffix (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGroupSuffix = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowSubscribe':
					/**
					 * Sets the value for blnAllowSubscribe (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowSubscribe = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowImageSize':
					/**
					 * Sets the value for blnAllowImageSize (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowImageSize = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CatAllowAddnews':
					/**
					 * Sets the value for strCatAllowAddnews (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCatAllowAddnews = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FloodNews':
					/**
					 * Sets the value for intFloodNews (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intFloodNews = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxDayNews':
					/**
					 * Sets the value for intMaxDayNews (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxDayNews = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ForceLeech':
					/**
					 * Sets the value for blnForceLeech (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnForceLeech = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EditLimit':
					/**
					 * Sets the value for intEditLimit (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intEditLimit = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CaptchaPm':
					/**
					 * Sets the value for blnCaptchaPm (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCaptchaPm = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxPmDay':
					/**
					 * Sets the value for intMaxPmDay (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxPmDay = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxMailDay':
					/**
					 * Sets the value for intMaxMailDay (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxMailDay = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminTagscloud':
					/**
					 * Sets the value for blnAdminTagscloud (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminTagscloud = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AllowVote':
					/**
					 * Sets the value for blnAllowVote (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAllowVote = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdminComplaint':
					/**
					 * Sets the value for blnAdminComplaint (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdminComplaint = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NewsQuestion':
					/**
					 * Sets the value for blnNewsQuestion (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnNewsQuestion = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommentsQuestion':
					/**
					 * Sets the value for blnCommentsQuestion (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCommentsQuestion = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxCommentDay':
					/**
					 * Sets the value for intMaxCommentDay (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxCommentDay = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxImages':
					/**
					 * Sets the value for intMaxImages (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxImages = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MaxFiles':
					/**
					 * Sets the value for intMaxFiles (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intMaxFiles = QType::Cast($mixValue, QType::Integer));
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
			return "dle_usergroups";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DleUsergroups::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DleUsergroups"><sequence>';
			$strToReturn .= '<element name="Id" type="xsd:int"/>';
			$strToReturn .= '<element name="GroupName" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowCats" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowAdds" type="xsd:boolean"/>';
			$strToReturn .= '<element name="CatAdd" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowAdmin" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowAddc" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowEditc" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowDelc" type="xsd:boolean"/>';
			$strToReturn .= '<element name="EditAllc" type="xsd:boolean"/>';
			$strToReturn .= '<element name="DelAllc" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Moderation" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowAllEdit" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowEdit" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowPm" type="xsd:boolean"/>';
			$strToReturn .= '<element name="MaxPm" type="xsd:int"/>';
			$strToReturn .= '<element name="MaxFoto" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowFiles" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowHide" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowShort" type="xsd:boolean"/>';
			$strToReturn .= '<element name="TimeLimit" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Rid" type="xsd:int"/>';
			$strToReturn .= '<element name="AllowFixed" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowFeed" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowSearch" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowPoll" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowMain" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Captcha" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Icon" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowModc" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowRating" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowOffline" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowImageUpload" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowFileUpload" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowSignature" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowUrl" type="xsd:boolean"/>';
			$strToReturn .= '<element name="NewsSecCode" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowImage" type="xsd:boolean"/>';
			$strToReturn .= '<element name="MaxSignature" type="xsd:int"/>';
			$strToReturn .= '<element name="MaxInfo" type="xsd:int"/>';
			$strToReturn .= '<element name="AdminAddnews" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminEditnews" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminComments" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminCategories" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminEditusers" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminWordfilter" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminXfields" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminUserfields" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminStatic" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminEditvote" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminNewsletter" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminBlockip" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminBanners" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminRss" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminIptools" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminRssinform" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminGooglemap" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowHtml" type="xsd:boolean"/>';
			$strToReturn .= '<element name="GroupPrefix" type="xsd:string"/>';
			$strToReturn .= '<element name="GroupSuffix" type="xsd:string"/>';
			$strToReturn .= '<element name="AllowSubscribe" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowImageSize" type="xsd:boolean"/>';
			$strToReturn .= '<element name="CatAllowAddnews" type="xsd:string"/>';
			$strToReturn .= '<element name="FloodNews" type="xsd:int"/>';
			$strToReturn .= '<element name="MaxDayNews" type="xsd:int"/>';
			$strToReturn .= '<element name="ForceLeech" type="xsd:boolean"/>';
			$strToReturn .= '<element name="EditLimit" type="xsd:int"/>';
			$strToReturn .= '<element name="CaptchaPm" type="xsd:boolean"/>';
			$strToReturn .= '<element name="MaxPmDay" type="xsd:int"/>';
			$strToReturn .= '<element name="MaxMailDay" type="xsd:int"/>';
			$strToReturn .= '<element name="AdminTagscloud" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AllowVote" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdminComplaint" type="xsd:boolean"/>';
			$strToReturn .= '<element name="NewsQuestion" type="xsd:boolean"/>';
			$strToReturn .= '<element name="CommentsQuestion" type="xsd:boolean"/>';
			$strToReturn .= '<element name="MaxCommentDay" type="xsd:int"/>';
			$strToReturn .= '<element name="MaxImages" type="xsd:int"/>';
			$strToReturn .= '<element name="MaxFiles" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DleUsergroups', $strComplexTypeArray)) {
				$strComplexTypeArray['DleUsergroups'] = DleUsergroups::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DleUsergroups::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DleUsergroups();
			if (property_exists($objSoapObject, 'Id'))
				$objToReturn->intId = $objSoapObject->Id;
			if (property_exists($objSoapObject, 'GroupName'))
				$objToReturn->strGroupName = $objSoapObject->GroupName;
			if (property_exists($objSoapObject, 'AllowCats'))
				$objToReturn->strAllowCats = $objSoapObject->AllowCats;
			if (property_exists($objSoapObject, 'AllowAdds'))
				$objToReturn->blnAllowAdds = $objSoapObject->AllowAdds;
			if (property_exists($objSoapObject, 'CatAdd'))
				$objToReturn->strCatAdd = $objSoapObject->CatAdd;
			if (property_exists($objSoapObject, 'AllowAdmin'))
				$objToReturn->blnAllowAdmin = $objSoapObject->AllowAdmin;
			if (property_exists($objSoapObject, 'AllowAddc'))
				$objToReturn->blnAllowAddc = $objSoapObject->AllowAddc;
			if (property_exists($objSoapObject, 'AllowEditc'))
				$objToReturn->blnAllowEditc = $objSoapObject->AllowEditc;
			if (property_exists($objSoapObject, 'AllowDelc'))
				$objToReturn->blnAllowDelc = $objSoapObject->AllowDelc;
			if (property_exists($objSoapObject, 'EditAllc'))
				$objToReturn->blnEditAllc = $objSoapObject->EditAllc;
			if (property_exists($objSoapObject, 'DelAllc'))
				$objToReturn->blnDelAllc = $objSoapObject->DelAllc;
			if (property_exists($objSoapObject, 'Moderation'))
				$objToReturn->blnModeration = $objSoapObject->Moderation;
			if (property_exists($objSoapObject, 'AllowAllEdit'))
				$objToReturn->blnAllowAllEdit = $objSoapObject->AllowAllEdit;
			if (property_exists($objSoapObject, 'AllowEdit'))
				$objToReturn->blnAllowEdit = $objSoapObject->AllowEdit;
			if (property_exists($objSoapObject, 'AllowPm'))
				$objToReturn->blnAllowPm = $objSoapObject->AllowPm;
			if (property_exists($objSoapObject, 'MaxPm'))
				$objToReturn->intMaxPm = $objSoapObject->MaxPm;
			if (property_exists($objSoapObject, 'MaxFoto'))
				$objToReturn->strMaxFoto = $objSoapObject->MaxFoto;
			if (property_exists($objSoapObject, 'AllowFiles'))
				$objToReturn->blnAllowFiles = $objSoapObject->AllowFiles;
			if (property_exists($objSoapObject, 'AllowHide'))
				$objToReturn->blnAllowHide = $objSoapObject->AllowHide;
			if (property_exists($objSoapObject, 'AllowShort'))
				$objToReturn->blnAllowShort = $objSoapObject->AllowShort;
			if (property_exists($objSoapObject, 'TimeLimit'))
				$objToReturn->blnTimeLimit = $objSoapObject->TimeLimit;
			if (property_exists($objSoapObject, 'Rid'))
				$objToReturn->intRid = $objSoapObject->Rid;
			if (property_exists($objSoapObject, 'AllowFixed'))
				$objToReturn->blnAllowFixed = $objSoapObject->AllowFixed;
			if (property_exists($objSoapObject, 'AllowFeed'))
				$objToReturn->blnAllowFeed = $objSoapObject->AllowFeed;
			if (property_exists($objSoapObject, 'AllowSearch'))
				$objToReturn->blnAllowSearch = $objSoapObject->AllowSearch;
			if (property_exists($objSoapObject, 'AllowPoll'))
				$objToReturn->blnAllowPoll = $objSoapObject->AllowPoll;
			if (property_exists($objSoapObject, 'AllowMain'))
				$objToReturn->blnAllowMain = $objSoapObject->AllowMain;
			if (property_exists($objSoapObject, 'Captcha'))
				$objToReturn->blnCaptcha = $objSoapObject->Captcha;
			if (property_exists($objSoapObject, 'Icon'))
				$objToReturn->strIcon = $objSoapObject->Icon;
			if (property_exists($objSoapObject, 'AllowModc'))
				$objToReturn->blnAllowModc = $objSoapObject->AllowModc;
			if (property_exists($objSoapObject, 'AllowRating'))
				$objToReturn->blnAllowRating = $objSoapObject->AllowRating;
			if (property_exists($objSoapObject, 'AllowOffline'))
				$objToReturn->blnAllowOffline = $objSoapObject->AllowOffline;
			if (property_exists($objSoapObject, 'AllowImageUpload'))
				$objToReturn->blnAllowImageUpload = $objSoapObject->AllowImageUpload;
			if (property_exists($objSoapObject, 'AllowFileUpload'))
				$objToReturn->blnAllowFileUpload = $objSoapObject->AllowFileUpload;
			if (property_exists($objSoapObject, 'AllowSignature'))
				$objToReturn->blnAllowSignature = $objSoapObject->AllowSignature;
			if (property_exists($objSoapObject, 'AllowUrl'))
				$objToReturn->blnAllowUrl = $objSoapObject->AllowUrl;
			if (property_exists($objSoapObject, 'NewsSecCode'))
				$objToReturn->blnNewsSecCode = $objSoapObject->NewsSecCode;
			if (property_exists($objSoapObject, 'AllowImage'))
				$objToReturn->blnAllowImage = $objSoapObject->AllowImage;
			if (property_exists($objSoapObject, 'MaxSignature'))
				$objToReturn->intMaxSignature = $objSoapObject->MaxSignature;
			if (property_exists($objSoapObject, 'MaxInfo'))
				$objToReturn->intMaxInfo = $objSoapObject->MaxInfo;
			if (property_exists($objSoapObject, 'AdminAddnews'))
				$objToReturn->blnAdminAddnews = $objSoapObject->AdminAddnews;
			if (property_exists($objSoapObject, 'AdminEditnews'))
				$objToReturn->blnAdminEditnews = $objSoapObject->AdminEditnews;
			if (property_exists($objSoapObject, 'AdminComments'))
				$objToReturn->blnAdminComments = $objSoapObject->AdminComments;
			if (property_exists($objSoapObject, 'AdminCategories'))
				$objToReturn->blnAdminCategories = $objSoapObject->AdminCategories;
			if (property_exists($objSoapObject, 'AdminEditusers'))
				$objToReturn->blnAdminEditusers = $objSoapObject->AdminEditusers;
			if (property_exists($objSoapObject, 'AdminWordfilter'))
				$objToReturn->blnAdminWordfilter = $objSoapObject->AdminWordfilter;
			if (property_exists($objSoapObject, 'AdminXfields'))
				$objToReturn->blnAdminXfields = $objSoapObject->AdminXfields;
			if (property_exists($objSoapObject, 'AdminUserfields'))
				$objToReturn->blnAdminUserfields = $objSoapObject->AdminUserfields;
			if (property_exists($objSoapObject, 'AdminStatic'))
				$objToReturn->blnAdminStatic = $objSoapObject->AdminStatic;
			if (property_exists($objSoapObject, 'AdminEditvote'))
				$objToReturn->blnAdminEditvote = $objSoapObject->AdminEditvote;
			if (property_exists($objSoapObject, 'AdminNewsletter'))
				$objToReturn->blnAdminNewsletter = $objSoapObject->AdminNewsletter;
			if (property_exists($objSoapObject, 'AdminBlockip'))
				$objToReturn->blnAdminBlockip = $objSoapObject->AdminBlockip;
			if (property_exists($objSoapObject, 'AdminBanners'))
				$objToReturn->blnAdminBanners = $objSoapObject->AdminBanners;
			if (property_exists($objSoapObject, 'AdminRss'))
				$objToReturn->blnAdminRss = $objSoapObject->AdminRss;
			if (property_exists($objSoapObject, 'AdminIptools'))
				$objToReturn->blnAdminIptools = $objSoapObject->AdminIptools;
			if (property_exists($objSoapObject, 'AdminRssinform'))
				$objToReturn->blnAdminRssinform = $objSoapObject->AdminRssinform;
			if (property_exists($objSoapObject, 'AdminGooglemap'))
				$objToReturn->blnAdminGooglemap = $objSoapObject->AdminGooglemap;
			if (property_exists($objSoapObject, 'AllowHtml'))
				$objToReturn->blnAllowHtml = $objSoapObject->AllowHtml;
			if (property_exists($objSoapObject, 'GroupPrefix'))
				$objToReturn->strGroupPrefix = $objSoapObject->GroupPrefix;
			if (property_exists($objSoapObject, 'GroupSuffix'))
				$objToReturn->strGroupSuffix = $objSoapObject->GroupSuffix;
			if (property_exists($objSoapObject, 'AllowSubscribe'))
				$objToReturn->blnAllowSubscribe = $objSoapObject->AllowSubscribe;
			if (property_exists($objSoapObject, 'AllowImageSize'))
				$objToReturn->blnAllowImageSize = $objSoapObject->AllowImageSize;
			if (property_exists($objSoapObject, 'CatAllowAddnews'))
				$objToReturn->strCatAllowAddnews = $objSoapObject->CatAllowAddnews;
			if (property_exists($objSoapObject, 'FloodNews'))
				$objToReturn->intFloodNews = $objSoapObject->FloodNews;
			if (property_exists($objSoapObject, 'MaxDayNews'))
				$objToReturn->intMaxDayNews = $objSoapObject->MaxDayNews;
			if (property_exists($objSoapObject, 'ForceLeech'))
				$objToReturn->blnForceLeech = $objSoapObject->ForceLeech;
			if (property_exists($objSoapObject, 'EditLimit'))
				$objToReturn->intEditLimit = $objSoapObject->EditLimit;
			if (property_exists($objSoapObject, 'CaptchaPm'))
				$objToReturn->blnCaptchaPm = $objSoapObject->CaptchaPm;
			if (property_exists($objSoapObject, 'MaxPmDay'))
				$objToReturn->intMaxPmDay = $objSoapObject->MaxPmDay;
			if (property_exists($objSoapObject, 'MaxMailDay'))
				$objToReturn->intMaxMailDay = $objSoapObject->MaxMailDay;
			if (property_exists($objSoapObject, 'AdminTagscloud'))
				$objToReturn->blnAdminTagscloud = $objSoapObject->AdminTagscloud;
			if (property_exists($objSoapObject, 'AllowVote'))
				$objToReturn->blnAllowVote = $objSoapObject->AllowVote;
			if (property_exists($objSoapObject, 'AdminComplaint'))
				$objToReturn->blnAdminComplaint = $objSoapObject->AdminComplaint;
			if (property_exists($objSoapObject, 'NewsQuestion'))
				$objToReturn->blnNewsQuestion = $objSoapObject->NewsQuestion;
			if (property_exists($objSoapObject, 'CommentsQuestion'))
				$objToReturn->blnCommentsQuestion = $objSoapObject->CommentsQuestion;
			if (property_exists($objSoapObject, 'MaxCommentDay'))
				$objToReturn->intMaxCommentDay = $objSoapObject->MaxCommentDay;
			if (property_exists($objSoapObject, 'MaxImages'))
				$objToReturn->intMaxImages = $objSoapObject->MaxImages;
			if (property_exists($objSoapObject, 'MaxFiles'))
				$objToReturn->intMaxFiles = $objSoapObject->MaxFiles;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DleUsergroups::GetSoapObjectFromObject($objObject, true));

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
			$iArray['GroupName'] = $this->strGroupName;
			$iArray['AllowCats'] = $this->strAllowCats;
			$iArray['AllowAdds'] = $this->blnAllowAdds;
			$iArray['CatAdd'] = $this->strCatAdd;
			$iArray['AllowAdmin'] = $this->blnAllowAdmin;
			$iArray['AllowAddc'] = $this->blnAllowAddc;
			$iArray['AllowEditc'] = $this->blnAllowEditc;
			$iArray['AllowDelc'] = $this->blnAllowDelc;
			$iArray['EditAllc'] = $this->blnEditAllc;
			$iArray['DelAllc'] = $this->blnDelAllc;
			$iArray['Moderation'] = $this->blnModeration;
			$iArray['AllowAllEdit'] = $this->blnAllowAllEdit;
			$iArray['AllowEdit'] = $this->blnAllowEdit;
			$iArray['AllowPm'] = $this->blnAllowPm;
			$iArray['MaxPm'] = $this->intMaxPm;
			$iArray['MaxFoto'] = $this->strMaxFoto;
			$iArray['AllowFiles'] = $this->blnAllowFiles;
			$iArray['AllowHide'] = $this->blnAllowHide;
			$iArray['AllowShort'] = $this->blnAllowShort;
			$iArray['TimeLimit'] = $this->blnTimeLimit;
			$iArray['Rid'] = $this->intRid;
			$iArray['AllowFixed'] = $this->blnAllowFixed;
			$iArray['AllowFeed'] = $this->blnAllowFeed;
			$iArray['AllowSearch'] = $this->blnAllowSearch;
			$iArray['AllowPoll'] = $this->blnAllowPoll;
			$iArray['AllowMain'] = $this->blnAllowMain;
			$iArray['Captcha'] = $this->blnCaptcha;
			$iArray['Icon'] = $this->strIcon;
			$iArray['AllowModc'] = $this->blnAllowModc;
			$iArray['AllowRating'] = $this->blnAllowRating;
			$iArray['AllowOffline'] = $this->blnAllowOffline;
			$iArray['AllowImageUpload'] = $this->blnAllowImageUpload;
			$iArray['AllowFileUpload'] = $this->blnAllowFileUpload;
			$iArray['AllowSignature'] = $this->blnAllowSignature;
			$iArray['AllowUrl'] = $this->blnAllowUrl;
			$iArray['NewsSecCode'] = $this->blnNewsSecCode;
			$iArray['AllowImage'] = $this->blnAllowImage;
			$iArray['MaxSignature'] = $this->intMaxSignature;
			$iArray['MaxInfo'] = $this->intMaxInfo;
			$iArray['AdminAddnews'] = $this->blnAdminAddnews;
			$iArray['AdminEditnews'] = $this->blnAdminEditnews;
			$iArray['AdminComments'] = $this->blnAdminComments;
			$iArray['AdminCategories'] = $this->blnAdminCategories;
			$iArray['AdminEditusers'] = $this->blnAdminEditusers;
			$iArray['AdminWordfilter'] = $this->blnAdminWordfilter;
			$iArray['AdminXfields'] = $this->blnAdminXfields;
			$iArray['AdminUserfields'] = $this->blnAdminUserfields;
			$iArray['AdminStatic'] = $this->blnAdminStatic;
			$iArray['AdminEditvote'] = $this->blnAdminEditvote;
			$iArray['AdminNewsletter'] = $this->blnAdminNewsletter;
			$iArray['AdminBlockip'] = $this->blnAdminBlockip;
			$iArray['AdminBanners'] = $this->blnAdminBanners;
			$iArray['AdminRss'] = $this->blnAdminRss;
			$iArray['AdminIptools'] = $this->blnAdminIptools;
			$iArray['AdminRssinform'] = $this->blnAdminRssinform;
			$iArray['AdminGooglemap'] = $this->blnAdminGooglemap;
			$iArray['AllowHtml'] = $this->blnAllowHtml;
			$iArray['GroupPrefix'] = $this->strGroupPrefix;
			$iArray['GroupSuffix'] = $this->strGroupSuffix;
			$iArray['AllowSubscribe'] = $this->blnAllowSubscribe;
			$iArray['AllowImageSize'] = $this->blnAllowImageSize;
			$iArray['CatAllowAddnews'] = $this->strCatAllowAddnews;
			$iArray['FloodNews'] = $this->intFloodNews;
			$iArray['MaxDayNews'] = $this->intMaxDayNews;
			$iArray['ForceLeech'] = $this->blnForceLeech;
			$iArray['EditLimit'] = $this->intEditLimit;
			$iArray['CaptchaPm'] = $this->blnCaptchaPm;
			$iArray['MaxPmDay'] = $this->intMaxPmDay;
			$iArray['MaxMailDay'] = $this->intMaxMailDay;
			$iArray['AdminTagscloud'] = $this->blnAdminTagscloud;
			$iArray['AllowVote'] = $this->blnAllowVote;
			$iArray['AdminComplaint'] = $this->blnAdminComplaint;
			$iArray['NewsQuestion'] = $this->blnNewsQuestion;
			$iArray['CommentsQuestion'] = $this->blnCommentsQuestion;
			$iArray['MaxCommentDay'] = $this->intMaxCommentDay;
			$iArray['MaxImages'] = $this->intMaxImages;
			$iArray['MaxFiles'] = $this->intMaxFiles;
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
     * @property-read QQNode $GroupName
     * @property-read QQNode $AllowCats
     * @property-read QQNode $AllowAdds
     * @property-read QQNode $CatAdd
     * @property-read QQNode $AllowAdmin
     * @property-read QQNode $AllowAddc
     * @property-read QQNode $AllowEditc
     * @property-read QQNode $AllowDelc
     * @property-read QQNode $EditAllc
     * @property-read QQNode $DelAllc
     * @property-read QQNode $Moderation
     * @property-read QQNode $AllowAllEdit
     * @property-read QQNode $AllowEdit
     * @property-read QQNode $AllowPm
     * @property-read QQNode $MaxPm
     * @property-read QQNode $MaxFoto
     * @property-read QQNode $AllowFiles
     * @property-read QQNode $AllowHide
     * @property-read QQNode $AllowShort
     * @property-read QQNode $TimeLimit
     * @property-read QQNode $Rid
     * @property-read QQNode $AllowFixed
     * @property-read QQNode $AllowFeed
     * @property-read QQNode $AllowSearch
     * @property-read QQNode $AllowPoll
     * @property-read QQNode $AllowMain
     * @property-read QQNode $Captcha
     * @property-read QQNode $Icon
     * @property-read QQNode $AllowModc
     * @property-read QQNode $AllowRating
     * @property-read QQNode $AllowOffline
     * @property-read QQNode $AllowImageUpload
     * @property-read QQNode $AllowFileUpload
     * @property-read QQNode $AllowSignature
     * @property-read QQNode $AllowUrl
     * @property-read QQNode $NewsSecCode
     * @property-read QQNode $AllowImage
     * @property-read QQNode $MaxSignature
     * @property-read QQNode $MaxInfo
     * @property-read QQNode $AdminAddnews
     * @property-read QQNode $AdminEditnews
     * @property-read QQNode $AdminComments
     * @property-read QQNode $AdminCategories
     * @property-read QQNode $AdminEditusers
     * @property-read QQNode $AdminWordfilter
     * @property-read QQNode $AdminXfields
     * @property-read QQNode $AdminUserfields
     * @property-read QQNode $AdminStatic
     * @property-read QQNode $AdminEditvote
     * @property-read QQNode $AdminNewsletter
     * @property-read QQNode $AdminBlockip
     * @property-read QQNode $AdminBanners
     * @property-read QQNode $AdminRss
     * @property-read QQNode $AdminIptools
     * @property-read QQNode $AdminRssinform
     * @property-read QQNode $AdminGooglemap
     * @property-read QQNode $AllowHtml
     * @property-read QQNode $GroupPrefix
     * @property-read QQNode $GroupSuffix
     * @property-read QQNode $AllowSubscribe
     * @property-read QQNode $AllowImageSize
     * @property-read QQNode $CatAllowAddnews
     * @property-read QQNode $FloodNews
     * @property-read QQNode $MaxDayNews
     * @property-read QQNode $ForceLeech
     * @property-read QQNode $EditLimit
     * @property-read QQNode $CaptchaPm
     * @property-read QQNode $MaxPmDay
     * @property-read QQNode $MaxMailDay
     * @property-read QQNode $AdminTagscloud
     * @property-read QQNode $AllowVote
     * @property-read QQNode $AdminComplaint
     * @property-read QQNode $NewsQuestion
     * @property-read QQNode $CommentsQuestion
     * @property-read QQNode $MaxCommentDay
     * @property-read QQNode $MaxImages
     * @property-read QQNode $MaxFiles
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDleUsergroups extends QQNode {
		protected $strTableName = 'dle_usergroups';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleUsergroups';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'Integer', $this);
				case 'GroupName':
					return new QQNode('group_name', 'GroupName', 'VarChar', $this);
				case 'AllowCats':
					return new QQNode('allow_cats', 'AllowCats', 'Blob', $this);
				case 'AllowAdds':
					return new QQNode('allow_adds', 'AllowAdds', 'Bit', $this);
				case 'CatAdd':
					return new QQNode('cat_add', 'CatAdd', 'Blob', $this);
				case 'AllowAdmin':
					return new QQNode('allow_admin', 'AllowAdmin', 'Bit', $this);
				case 'AllowAddc':
					return new QQNode('allow_addc', 'AllowAddc', 'Bit', $this);
				case 'AllowEditc':
					return new QQNode('allow_editc', 'AllowEditc', 'Bit', $this);
				case 'AllowDelc':
					return new QQNode('allow_delc', 'AllowDelc', 'Bit', $this);
				case 'EditAllc':
					return new QQNode('edit_allc', 'EditAllc', 'Bit', $this);
				case 'DelAllc':
					return new QQNode('del_allc', 'DelAllc', 'Bit', $this);
				case 'Moderation':
					return new QQNode('moderation', 'Moderation', 'Bit', $this);
				case 'AllowAllEdit':
					return new QQNode('allow_all_edit', 'AllowAllEdit', 'Bit', $this);
				case 'AllowEdit':
					return new QQNode('allow_edit', 'AllowEdit', 'Bit', $this);
				case 'AllowPm':
					return new QQNode('allow_pm', 'AllowPm', 'Bit', $this);
				case 'MaxPm':
					return new QQNode('max_pm', 'MaxPm', 'Integer', $this);
				case 'MaxFoto':
					return new QQNode('max_foto', 'MaxFoto', 'VarChar', $this);
				case 'AllowFiles':
					return new QQNode('allow_files', 'AllowFiles', 'Bit', $this);
				case 'AllowHide':
					return new QQNode('allow_hide', 'AllowHide', 'Bit', $this);
				case 'AllowShort':
					return new QQNode('allow_short', 'AllowShort', 'Bit', $this);
				case 'TimeLimit':
					return new QQNode('time_limit', 'TimeLimit', 'Bit', $this);
				case 'Rid':
					return new QQNode('rid', 'Rid', 'Integer', $this);
				case 'AllowFixed':
					return new QQNode('allow_fixed', 'AllowFixed', 'Bit', $this);
				case 'AllowFeed':
					return new QQNode('allow_feed', 'AllowFeed', 'Bit', $this);
				case 'AllowSearch':
					return new QQNode('allow_search', 'AllowSearch', 'Bit', $this);
				case 'AllowPoll':
					return new QQNode('allow_poll', 'AllowPoll', 'Bit', $this);
				case 'AllowMain':
					return new QQNode('allow_main', 'AllowMain', 'Bit', $this);
				case 'Captcha':
					return new QQNode('captcha', 'Captcha', 'Bit', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'VarChar', $this);
				case 'AllowModc':
					return new QQNode('allow_modc', 'AllowModc', 'Bit', $this);
				case 'AllowRating':
					return new QQNode('allow_rating', 'AllowRating', 'Bit', $this);
				case 'AllowOffline':
					return new QQNode('allow_offline', 'AllowOffline', 'Bit', $this);
				case 'AllowImageUpload':
					return new QQNode('allow_image_upload', 'AllowImageUpload', 'Bit', $this);
				case 'AllowFileUpload':
					return new QQNode('allow_file_upload', 'AllowFileUpload', 'Bit', $this);
				case 'AllowSignature':
					return new QQNode('allow_signature', 'AllowSignature', 'Bit', $this);
				case 'AllowUrl':
					return new QQNode('allow_url', 'AllowUrl', 'Bit', $this);
				case 'NewsSecCode':
					return new QQNode('news_sec_code', 'NewsSecCode', 'Bit', $this);
				case 'AllowImage':
					return new QQNode('allow_image', 'AllowImage', 'Bit', $this);
				case 'MaxSignature':
					return new QQNode('max_signature', 'MaxSignature', 'Integer', $this);
				case 'MaxInfo':
					return new QQNode('max_info', 'MaxInfo', 'Integer', $this);
				case 'AdminAddnews':
					return new QQNode('admin_addnews', 'AdminAddnews', 'Bit', $this);
				case 'AdminEditnews':
					return new QQNode('admin_editnews', 'AdminEditnews', 'Bit', $this);
				case 'AdminComments':
					return new QQNode('admin_comments', 'AdminComments', 'Bit', $this);
				case 'AdminCategories':
					return new QQNode('admin_categories', 'AdminCategories', 'Bit', $this);
				case 'AdminEditusers':
					return new QQNode('admin_editusers', 'AdminEditusers', 'Bit', $this);
				case 'AdminWordfilter':
					return new QQNode('admin_wordfilter', 'AdminWordfilter', 'Bit', $this);
				case 'AdminXfields':
					return new QQNode('admin_xfields', 'AdminXfields', 'Bit', $this);
				case 'AdminUserfields':
					return new QQNode('admin_userfields', 'AdminUserfields', 'Bit', $this);
				case 'AdminStatic':
					return new QQNode('admin_static', 'AdminStatic', 'Bit', $this);
				case 'AdminEditvote':
					return new QQNode('admin_editvote', 'AdminEditvote', 'Bit', $this);
				case 'AdminNewsletter':
					return new QQNode('admin_newsletter', 'AdminNewsletter', 'Bit', $this);
				case 'AdminBlockip':
					return new QQNode('admin_blockip', 'AdminBlockip', 'Bit', $this);
				case 'AdminBanners':
					return new QQNode('admin_banners', 'AdminBanners', 'Bit', $this);
				case 'AdminRss':
					return new QQNode('admin_rss', 'AdminRss', 'Bit', $this);
				case 'AdminIptools':
					return new QQNode('admin_iptools', 'AdminIptools', 'Bit', $this);
				case 'AdminRssinform':
					return new QQNode('admin_rssinform', 'AdminRssinform', 'Bit', $this);
				case 'AdminGooglemap':
					return new QQNode('admin_googlemap', 'AdminGooglemap', 'Bit', $this);
				case 'AllowHtml':
					return new QQNode('allow_html', 'AllowHtml', 'Bit', $this);
				case 'GroupPrefix':
					return new QQNode('group_prefix', 'GroupPrefix', 'Blob', $this);
				case 'GroupSuffix':
					return new QQNode('group_suffix', 'GroupSuffix', 'Blob', $this);
				case 'AllowSubscribe':
					return new QQNode('allow_subscribe', 'AllowSubscribe', 'Bit', $this);
				case 'AllowImageSize':
					return new QQNode('allow_image_size', 'AllowImageSize', 'Bit', $this);
				case 'CatAllowAddnews':
					return new QQNode('cat_allow_addnews', 'CatAllowAddnews', 'Blob', $this);
				case 'FloodNews':
					return new QQNode('flood_news', 'FloodNews', 'Integer', $this);
				case 'MaxDayNews':
					return new QQNode('max_day_news', 'MaxDayNews', 'Integer', $this);
				case 'ForceLeech':
					return new QQNode('force_leech', 'ForceLeech', 'Bit', $this);
				case 'EditLimit':
					return new QQNode('edit_limit', 'EditLimit', 'Integer', $this);
				case 'CaptchaPm':
					return new QQNode('captcha_pm', 'CaptchaPm', 'Bit', $this);
				case 'MaxPmDay':
					return new QQNode('max_pm_day', 'MaxPmDay', 'Integer', $this);
				case 'MaxMailDay':
					return new QQNode('max_mail_day', 'MaxMailDay', 'Integer', $this);
				case 'AdminTagscloud':
					return new QQNode('admin_tagscloud', 'AdminTagscloud', 'Bit', $this);
				case 'AllowVote':
					return new QQNode('allow_vote', 'AllowVote', 'Bit', $this);
				case 'AdminComplaint':
					return new QQNode('admin_complaint', 'AdminComplaint', 'Bit', $this);
				case 'NewsQuestion':
					return new QQNode('news_question', 'NewsQuestion', 'Bit', $this);
				case 'CommentsQuestion':
					return new QQNode('comments_question', 'CommentsQuestion', 'Bit', $this);
				case 'MaxCommentDay':
					return new QQNode('max_comment_day', 'MaxCommentDay', 'Integer', $this);
				case 'MaxImages':
					return new QQNode('max_images', 'MaxImages', 'Integer', $this);
				case 'MaxFiles':
					return new QQNode('max_files', 'MaxFiles', 'Integer', $this);

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
     * @property-read QQNode $GroupName
     * @property-read QQNode $AllowCats
     * @property-read QQNode $AllowAdds
     * @property-read QQNode $CatAdd
     * @property-read QQNode $AllowAdmin
     * @property-read QQNode $AllowAddc
     * @property-read QQNode $AllowEditc
     * @property-read QQNode $AllowDelc
     * @property-read QQNode $EditAllc
     * @property-read QQNode $DelAllc
     * @property-read QQNode $Moderation
     * @property-read QQNode $AllowAllEdit
     * @property-read QQNode $AllowEdit
     * @property-read QQNode $AllowPm
     * @property-read QQNode $MaxPm
     * @property-read QQNode $MaxFoto
     * @property-read QQNode $AllowFiles
     * @property-read QQNode $AllowHide
     * @property-read QQNode $AllowShort
     * @property-read QQNode $TimeLimit
     * @property-read QQNode $Rid
     * @property-read QQNode $AllowFixed
     * @property-read QQNode $AllowFeed
     * @property-read QQNode $AllowSearch
     * @property-read QQNode $AllowPoll
     * @property-read QQNode $AllowMain
     * @property-read QQNode $Captcha
     * @property-read QQNode $Icon
     * @property-read QQNode $AllowModc
     * @property-read QQNode $AllowRating
     * @property-read QQNode $AllowOffline
     * @property-read QQNode $AllowImageUpload
     * @property-read QQNode $AllowFileUpload
     * @property-read QQNode $AllowSignature
     * @property-read QQNode $AllowUrl
     * @property-read QQNode $NewsSecCode
     * @property-read QQNode $AllowImage
     * @property-read QQNode $MaxSignature
     * @property-read QQNode $MaxInfo
     * @property-read QQNode $AdminAddnews
     * @property-read QQNode $AdminEditnews
     * @property-read QQNode $AdminComments
     * @property-read QQNode $AdminCategories
     * @property-read QQNode $AdminEditusers
     * @property-read QQNode $AdminWordfilter
     * @property-read QQNode $AdminXfields
     * @property-read QQNode $AdminUserfields
     * @property-read QQNode $AdminStatic
     * @property-read QQNode $AdminEditvote
     * @property-read QQNode $AdminNewsletter
     * @property-read QQNode $AdminBlockip
     * @property-read QQNode $AdminBanners
     * @property-read QQNode $AdminRss
     * @property-read QQNode $AdminIptools
     * @property-read QQNode $AdminRssinform
     * @property-read QQNode $AdminGooglemap
     * @property-read QQNode $AllowHtml
     * @property-read QQNode $GroupPrefix
     * @property-read QQNode $GroupSuffix
     * @property-read QQNode $AllowSubscribe
     * @property-read QQNode $AllowImageSize
     * @property-read QQNode $CatAllowAddnews
     * @property-read QQNode $FloodNews
     * @property-read QQNode $MaxDayNews
     * @property-read QQNode $ForceLeech
     * @property-read QQNode $EditLimit
     * @property-read QQNode $CaptchaPm
     * @property-read QQNode $MaxPmDay
     * @property-read QQNode $MaxMailDay
     * @property-read QQNode $AdminTagscloud
     * @property-read QQNode $AllowVote
     * @property-read QQNode $AdminComplaint
     * @property-read QQNode $NewsQuestion
     * @property-read QQNode $CommentsQuestion
     * @property-read QQNode $MaxCommentDay
     * @property-read QQNode $MaxImages
     * @property-read QQNode $MaxFiles
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDleUsergroups extends QQReverseReferenceNode {
		protected $strTableName = 'dle_usergroups';
		protected $strPrimaryKey = 'id';
		protected $strClassName = 'DleUsergroups';
		public function __get($strName) {
			switch ($strName) {
				case 'Id':
					return new QQNode('id', 'Id', 'integer', $this);
				case 'GroupName':
					return new QQNode('group_name', 'GroupName', 'string', $this);
				case 'AllowCats':
					return new QQNode('allow_cats', 'AllowCats', 'string', $this);
				case 'AllowAdds':
					return new QQNode('allow_adds', 'AllowAdds', 'boolean', $this);
				case 'CatAdd':
					return new QQNode('cat_add', 'CatAdd', 'string', $this);
				case 'AllowAdmin':
					return new QQNode('allow_admin', 'AllowAdmin', 'boolean', $this);
				case 'AllowAddc':
					return new QQNode('allow_addc', 'AllowAddc', 'boolean', $this);
				case 'AllowEditc':
					return new QQNode('allow_editc', 'AllowEditc', 'boolean', $this);
				case 'AllowDelc':
					return new QQNode('allow_delc', 'AllowDelc', 'boolean', $this);
				case 'EditAllc':
					return new QQNode('edit_allc', 'EditAllc', 'boolean', $this);
				case 'DelAllc':
					return new QQNode('del_allc', 'DelAllc', 'boolean', $this);
				case 'Moderation':
					return new QQNode('moderation', 'Moderation', 'boolean', $this);
				case 'AllowAllEdit':
					return new QQNode('allow_all_edit', 'AllowAllEdit', 'boolean', $this);
				case 'AllowEdit':
					return new QQNode('allow_edit', 'AllowEdit', 'boolean', $this);
				case 'AllowPm':
					return new QQNode('allow_pm', 'AllowPm', 'boolean', $this);
				case 'MaxPm':
					return new QQNode('max_pm', 'MaxPm', 'integer', $this);
				case 'MaxFoto':
					return new QQNode('max_foto', 'MaxFoto', 'string', $this);
				case 'AllowFiles':
					return new QQNode('allow_files', 'AllowFiles', 'boolean', $this);
				case 'AllowHide':
					return new QQNode('allow_hide', 'AllowHide', 'boolean', $this);
				case 'AllowShort':
					return new QQNode('allow_short', 'AllowShort', 'boolean', $this);
				case 'TimeLimit':
					return new QQNode('time_limit', 'TimeLimit', 'boolean', $this);
				case 'Rid':
					return new QQNode('rid', 'Rid', 'integer', $this);
				case 'AllowFixed':
					return new QQNode('allow_fixed', 'AllowFixed', 'boolean', $this);
				case 'AllowFeed':
					return new QQNode('allow_feed', 'AllowFeed', 'boolean', $this);
				case 'AllowSearch':
					return new QQNode('allow_search', 'AllowSearch', 'boolean', $this);
				case 'AllowPoll':
					return new QQNode('allow_poll', 'AllowPoll', 'boolean', $this);
				case 'AllowMain':
					return new QQNode('allow_main', 'AllowMain', 'boolean', $this);
				case 'Captcha':
					return new QQNode('captcha', 'Captcha', 'boolean', $this);
				case 'Icon':
					return new QQNode('icon', 'Icon', 'string', $this);
				case 'AllowModc':
					return new QQNode('allow_modc', 'AllowModc', 'boolean', $this);
				case 'AllowRating':
					return new QQNode('allow_rating', 'AllowRating', 'boolean', $this);
				case 'AllowOffline':
					return new QQNode('allow_offline', 'AllowOffline', 'boolean', $this);
				case 'AllowImageUpload':
					return new QQNode('allow_image_upload', 'AllowImageUpload', 'boolean', $this);
				case 'AllowFileUpload':
					return new QQNode('allow_file_upload', 'AllowFileUpload', 'boolean', $this);
				case 'AllowSignature':
					return new QQNode('allow_signature', 'AllowSignature', 'boolean', $this);
				case 'AllowUrl':
					return new QQNode('allow_url', 'AllowUrl', 'boolean', $this);
				case 'NewsSecCode':
					return new QQNode('news_sec_code', 'NewsSecCode', 'boolean', $this);
				case 'AllowImage':
					return new QQNode('allow_image', 'AllowImage', 'boolean', $this);
				case 'MaxSignature':
					return new QQNode('max_signature', 'MaxSignature', 'integer', $this);
				case 'MaxInfo':
					return new QQNode('max_info', 'MaxInfo', 'integer', $this);
				case 'AdminAddnews':
					return new QQNode('admin_addnews', 'AdminAddnews', 'boolean', $this);
				case 'AdminEditnews':
					return new QQNode('admin_editnews', 'AdminEditnews', 'boolean', $this);
				case 'AdminComments':
					return new QQNode('admin_comments', 'AdminComments', 'boolean', $this);
				case 'AdminCategories':
					return new QQNode('admin_categories', 'AdminCategories', 'boolean', $this);
				case 'AdminEditusers':
					return new QQNode('admin_editusers', 'AdminEditusers', 'boolean', $this);
				case 'AdminWordfilter':
					return new QQNode('admin_wordfilter', 'AdminWordfilter', 'boolean', $this);
				case 'AdminXfields':
					return new QQNode('admin_xfields', 'AdminXfields', 'boolean', $this);
				case 'AdminUserfields':
					return new QQNode('admin_userfields', 'AdminUserfields', 'boolean', $this);
				case 'AdminStatic':
					return new QQNode('admin_static', 'AdminStatic', 'boolean', $this);
				case 'AdminEditvote':
					return new QQNode('admin_editvote', 'AdminEditvote', 'boolean', $this);
				case 'AdminNewsletter':
					return new QQNode('admin_newsletter', 'AdminNewsletter', 'boolean', $this);
				case 'AdminBlockip':
					return new QQNode('admin_blockip', 'AdminBlockip', 'boolean', $this);
				case 'AdminBanners':
					return new QQNode('admin_banners', 'AdminBanners', 'boolean', $this);
				case 'AdminRss':
					return new QQNode('admin_rss', 'AdminRss', 'boolean', $this);
				case 'AdminIptools':
					return new QQNode('admin_iptools', 'AdminIptools', 'boolean', $this);
				case 'AdminRssinform':
					return new QQNode('admin_rssinform', 'AdminRssinform', 'boolean', $this);
				case 'AdminGooglemap':
					return new QQNode('admin_googlemap', 'AdminGooglemap', 'boolean', $this);
				case 'AllowHtml':
					return new QQNode('allow_html', 'AllowHtml', 'boolean', $this);
				case 'GroupPrefix':
					return new QQNode('group_prefix', 'GroupPrefix', 'string', $this);
				case 'GroupSuffix':
					return new QQNode('group_suffix', 'GroupSuffix', 'string', $this);
				case 'AllowSubscribe':
					return new QQNode('allow_subscribe', 'AllowSubscribe', 'boolean', $this);
				case 'AllowImageSize':
					return new QQNode('allow_image_size', 'AllowImageSize', 'boolean', $this);
				case 'CatAllowAddnews':
					return new QQNode('cat_allow_addnews', 'CatAllowAddnews', 'string', $this);
				case 'FloodNews':
					return new QQNode('flood_news', 'FloodNews', 'integer', $this);
				case 'MaxDayNews':
					return new QQNode('max_day_news', 'MaxDayNews', 'integer', $this);
				case 'ForceLeech':
					return new QQNode('force_leech', 'ForceLeech', 'boolean', $this);
				case 'EditLimit':
					return new QQNode('edit_limit', 'EditLimit', 'integer', $this);
				case 'CaptchaPm':
					return new QQNode('captcha_pm', 'CaptchaPm', 'boolean', $this);
				case 'MaxPmDay':
					return new QQNode('max_pm_day', 'MaxPmDay', 'integer', $this);
				case 'MaxMailDay':
					return new QQNode('max_mail_day', 'MaxMailDay', 'integer', $this);
				case 'AdminTagscloud':
					return new QQNode('admin_tagscloud', 'AdminTagscloud', 'boolean', $this);
				case 'AllowVote':
					return new QQNode('allow_vote', 'AllowVote', 'boolean', $this);
				case 'AdminComplaint':
					return new QQNode('admin_complaint', 'AdminComplaint', 'boolean', $this);
				case 'NewsQuestion':
					return new QQNode('news_question', 'NewsQuestion', 'boolean', $this);
				case 'CommentsQuestion':
					return new QQNode('comments_question', 'CommentsQuestion', 'boolean', $this);
				case 'MaxCommentDay':
					return new QQNode('max_comment_day', 'MaxCommentDay', 'integer', $this);
				case 'MaxImages':
					return new QQNode('max_images', 'MaxImages', 'integer', $this);
				case 'MaxFiles':
					return new QQNode('max_files', 'MaxFiles', 'integer', $this);

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
