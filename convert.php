<?php
	require_once('./qcubed.inc.php');
	QApplication::CheckRemoteAdmin();
	
	$strErrorMessage = null;
	
	$intUserCount = 0;
	$intTermCount = 0;
	$intTermTaxonomyCount = 0;
	$intPostCount = 0;
	$intDleTermRelationshipsCount = 0;
	$intCommentsCount = 0;
	$intTermRelationshipsCount = 0;
	try {
		WpUsers::GetDatabase()->TransactionBegin();
		// 1. convert users
		$objDleUsersArray = DleUsers::LoadAll(QQ::Clause(QQ::OrderBy(QQN::DleUsers()->UserId)));
		if ($objDleUsersArray) foreach ($objDleUsersArray as $objDleUsers) {
			// wp: ID,      user_login, user_nicename, user_email, user_registered,           display_name
			// dl: user_id, name,       name,          email,      FROM_UNIXTIME( reg_date ), fullname
			$strEmail = $objDleUsers->Email;
			if ($strEmail && strlen($strEmail)) {
				// check if already copied
				if (!WpUsers::QueryCount(QQ::Equal(QQN::WpUsers()->UserEmail, $strEmail))) {
					$objWpUsers = new WpUsers;
					$objWpUsers->Initialize(); // set defaults
					$objWpUsers->UserLogin = $objDleUsers->Name;
					$objWpUsers->UserNicename = $objDleUsers->Name;
					$objWpUsers->UserEmail = $objDleUsers->Email;
					$objWpUsers->UserRegistered = QDateTime::FromTimestamp(intval($objDleUsers->RegDate));
					$objWpUsers->DisplayName = $objDleUsers->Fullname;
					$objWpUsers->UserPass = '';
					$objWpUsers->UserUrl = '';
					$objWpUsers->UserActivationKey = '';
					$objWpUsers->UserStatus = 0;
					$objWpUsers->Save();
					$intUserCount++;
				}
			}
		}
		
		// 2. convert terms
		$objDleCategoryArray = DleCategory::LoadAll(QQ::Clause(QQ::OrderBy(QQN::DleCategory()->Id)));
		if ($objDleCategoryArray) foreach ($objDleCategoryArray as $objDleCategory) {
			// wp: term_id, name, slug
			// dl: id,      name, alt_name
			$strAltName = $objDleCategory->AltName;
			if ($strAltName && strlen($strAltName)) {
				// check if already copied
				if (!WpTerms::LoadBySlug($strAltName)) {
					$objWpTerms = new WpTerms;
					$objWpTerms->Initialize(); // set defaults
					$objWpTerms->Name = $objDleCategory->Name;
					$objWpTerms->Slug = $objDleCategory->AltName;
					$objWpTerms->TermGroup = 0;
					$objWpTerms->Save();
					$intTermCount++;
				}
			}
		}
		
		// 3. convert term taxonomy
		if ($objDleCategoryArray) foreach ($objDleCategoryArray as $objDleCategory) {
			// wp: term_taxonomy_id, term_id, description, parent
			// dl: id,               id,      descr,       parentid
			$wpTerms = $objDleCategory->LoadWpTerms();
			if (!$wpTerms) {
				throw QCallerException(QApplication::Translate("Failed to find the WpTerm object for DleCategory."));
			}
			$wpTermsParent = null;
			if ($objDleCategory->ParentidObject) {
				$wpTermsParent = $objDleCategory->ParentidObject->LoadWpTerms();
			}
			$intWpTermsParentId = 0;
			if ($wpTermsParent) {
				$intWpTermsParentId = $wpTermsParent->TermId;
			}
			// check if already copied
			if (!WpTermTaxonomy::QueryCount(
					QQ::AndCondition(
						QQ::Equal(QQN::WpTermTaxonomy()->TermId, $wpTerms->TermId)
						, QQ::Equal(QQN::WpTermTaxonomy()->Parent, $intWpTermsParentId)
					)
				)
			) {
				$objWpTermTaxonomy = new WpTermTaxonomy;
				$objWpTermTaxonomy->Initialize(); // set defaults
				$objWpTermTaxonomy->TermId = $wpTerms->TermId;
				$objWpTermTaxonomy->Description = $objDleCategory->Descr;
				$objWpTermTaxonomy->Parent = $intWpTermsParentId;
				$objWpTermTaxonomy->Taxonomy = "category";
				$objWpTermTaxonomy->Count = 0;
				$objWpTermTaxonomy->Save();
				$intTermTaxonomyCount++;
			}
		}
		
		// 4. convert posts
		$objDlePostArray = DlePost::LoadAll(QQ::Clause(QQ::OrderBy(QQN::DlePost()->Id)));
		if ($objDlePostArray) foreach ($objDlePostArray as $objDlePost) {
			$objWpPosts = $objDlePost->LoadWpPosts();
			// check if already copied
			if (!$objWpPosts) {
				$objWpUsers = $objDlePost->LoadWpUser();
				if ($objWpUsers) {
					$objWpPosts = new WpPosts;
					$objWpPosts->Initialize(); // set defaults
					$objWpPosts->PostAuthor = $objWpUsers->Id;
					$objWpPosts->PostDate = $objDlePost->Date;
					$objWpPosts->PostModified = $objDlePost->Date;
					$objWpPosts->PostDateGmt = $objDlePost->Date;
					$objWpPosts->PostModifiedGmt = $objDlePost->Date;
					$objWpPosts->PostContent = str_replace('\»', '»', str_replace('\"', '"', $objDlePost->FullStory));
					$objWpPosts->PostContentFiltered = "";
					$objWpPosts->PostParent = 0;
					$objWpPosts->PostTitle = $objDlePost->Title;
					$objWpPosts->PostExcerpt = str_replace('\»', '»', str_replace('\"', '"', $objDlePost->ShortStory));
					$objWpPosts->CommentStatus = "open";
					$objWpPosts->PingStatus = "open";
					$objWpPosts->PostStatus = "publish";
					$objWpPosts->PostPassword = "";
					$objWpPosts->PostName = $objDlePost->AltName;
					$objWpPosts->ToPing = "";
					$objWpPosts->Pinged = "";
					$objWpPosts->Guid = "";
					$objWpPosts->MenuOrder = 0;
					$objWpPosts->PostType = "post";
					$objWpPosts->PostMimeType = "";
					$objWpPosts->CommentCount = 0;
					$objWpPosts->Save();
					$intPostCount++;
				}
			}
		}
		
		// 5. convert wp_term_relationships
		/**
		 * @var int The full relationships count in the DLE database.
		 */
		if ($objDlePostArray) foreach ($objDlePostArray as $objDlePost) {
			$objWpTermsArray = $objDlePost->LoadWpTermsArray();
			if ($objWpTermsArray) {
				$intDleTermRelationshipsCount += count($objWpTermsArray);
			}
			$objWpPosts = $objDlePost->LoadWpPosts();
			if (!$objWpPosts) {
				continue;
			}
			if ($objWpTermsArray) foreach ($objWpTermsArray as $objWpTerms) {
				$objWpTermTaxonomy = WpTermTaxonomy::LoadByTermIdTaxonomy($objWpTerms->TermId, "category");
				if (!$objWpTermTaxonomy) {
					continue;
				}
				$objWpTermRelationships = WpTermRelationships::LoadByObjectIdTermTaxonomyId($objWpPosts->Id, $objWpTermTaxonomy->TermTaxonomyId);
				// check if already copied
				if (!$objWpTermRelationships) {
					$objWpTermRelationships = new WpTermRelationships;
					$objWpTermRelationships->Initialize(); // set defaults
					$objWpTermRelationships->ObjectId = $objWpPosts->Id;
					$objWpTermRelationships->TermTaxonomyId = $objWpTermTaxonomy->TermTaxonomyId;
					$objWpTermRelationships->TermOrder = 0;
					$objWpTermRelationships->Save();
					$intTermRelationshipsCount++;
				}
			}
		}
		
		// 6. convert comments
		$objDleCommentsArray = DleComments::LoadAll(QQ::Clause(QQ::OrderBy(QQN::DleComments()->Id)));
		if ($objDleCommentsArray) foreach ($objDleCommentsArray as $objDleComments) {
			$objWpComments = $objDleComments->LoadWpComments();
			// check if already copied
			if (!$objWpComments) {
				$objWpPosts = $objDleComments->LoadWpPosts();
				if (!$objWpPosts) {
					continue;
				}
				$objWpUsers = $objDleComments->LoadWpUsers();
				$objWpComments = new WpComments;
				$objWpComments->Initialize(); // set defaults
				$objWpComments->CommentPostID = $objWpPosts->Id;
				$objWpComments->CommentAuthor = $objDleComments->Autor;
				$objWpComments->CommentAuthorEmail = $objDleComments->Email;
				$objWpComments->CommentAuthorUrl = "";
				$objWpComments->CommentAuthorIP = $objDleComments->Ip;
				$objWpComments->CommentDate = $objDleComments->Date;
				$objWpComments->CommentDateGmt = $objDleComments->Date;
				$objWpComments->CommentContent = str_replace('\»', '»', str_replace('\"', '"', $objDleComments->Text));
				$objWpComments->CommentKarma = 0;
				$objWpComments->CommentApproved = 1;
				$objWpComments->CommentAgent = "";
				$objWpComments->CommentType = "comment";
				$objWpComments->CommentParent = 0;
				$objWpComments->UserId = 0;
				if ($objWpUsers) {
					$objWpComments->UserId = $objWpUsers->Id;
				}
				$objWpComments->Save();
				$intCommentsCount++;
			}
		}
		
		// 7. convert tags
		$objDleTagsArray = DleTags::LoadAll(QQ::Clause(QQ::OrderBy(QQN::DleTags()->Id)));
		if ($objDleTagsArray) foreach ($objDleTagsArray as $objDleTags) {
			$objWpTerms = WpTerms::LoadBySlug($objDleTags->Tag);
			if (!$objWpTerms) {
				$strSlug = iconv(QApplication::$EncodingType, 'US-ASCII//TRANSLIT', $objDleTags->Tag);
				$objWpTerms = WpTerms::LoadBySlug($strSlug);
				if (!$objWpTerms) {
					// This tag was not copied yet.
					$objWpTerms = new WpTerms;
					$objWpTerms->Initialize(); // set defaults
					$objWpTerms->Name = $objDleTags->Tag;
					// DLE does not has url-compartible tag name version. it uses the urlencoded from cp1251 one.
					// We do a translit enstead.
					$objWpTerms->Slug = $strSlug;
					$objWpTerms->TermGroup = 0;
					$objWpTerms->Save();
					$intTermCount++;
				}
			}
			// check if already copied
			$objWpTermTaxonomy = WpTermTaxonomy::LoadByTermIdTaxonomy($objWpTerms->TermId, "post_tag");
			if (!$objWpTermTaxonomy) {
				$objWpTermTaxonomy = new WpTermTaxonomy;
				$objWpTermTaxonomy->Initialize(); // set defaults
				$objWpTermTaxonomy->TermId = $objWpTerms->TermId;
				$objWpTermTaxonomy->Description = $objWpTerms->Name;
				$objWpTermTaxonomy->Parent = 0;
				$objWpTermTaxonomy->Taxonomy = "post_tag";
				$objWpTermTaxonomy->Count = 0;
				$objWpTermTaxonomy->Save();
				$intTermTaxonomyCount++;
			}
			$objWpPosts = $objDleTags->News->LoadWpPosts();
			if (!$objWpPosts) {
				continue;
			}
			$objWpTermRelationships = WpTermRelationships::LoadByObjectIdTermTaxonomyId($objWpPosts->Id, $objWpTermTaxonomy->TermTaxonomyId);
			// check if already copied
			if (!$objWpTermRelationships) {
				$objWpTermRelationships = new WpTermRelationships;
				$objWpTermRelationships->Initialize(); // set defaults
				$objWpTermRelationships->ObjectId = $objWpPosts->Id;
				$objWpTermRelationships->TermTaxonomyId = $objWpTermTaxonomy->TermTaxonomyId;
				$objWpTermRelationships->TermOrder = 0;
				$objWpTermRelationships->Save();
				$intTermRelationshipsCount++;
			}
		}
		
		// TODO: 
		// 1. GMT рассчитать по честному
		// 2. guid для post#141: http://localhost/?p=141
		
		// 8. Calculate the wp_term_taxonomy.count field value
		$objWpTermTaxonomyArray = WpTermTaxonomy::LoadAll();
		if ($objWpTermTaxonomyArray) foreach ($objWpTermTaxonomyArray as $objWpTermTaxonomy) {
			$objWpTermTaxonomy->Count = WpTermRelationships::CountByTermTaxonomyId($objWpTermTaxonomy->TermTaxonomyId);
			$objWpTermTaxonomy->Save();
		}
		
		// 9. convert static pages
		$objDleStaticArray = DleStatic::LoadAll(QQ::Clause(QQ::OrderBy(QQN::DleStatic()->Id)));
		if ($objDleStaticArray) foreach ($objDleStaticArray as $objDleStatic) {
			$objWpPosts = $objDleStatic->LoadWpPost();
			if (!$objWpPosts) {
				$objWpUsers = WpUsers::LoadFirst();
				if ($objWpUsers) {
					$objWpPosts = new WpPosts;
					$objWpPosts->Initialize(); // set defaults
					$objWpPosts->PostAuthor = $objWpUsers->Id;
					$objWpPosts->PostDate = $objDleStatic->Date;
					$objWpPosts->PostModified = $objDleStatic->Date;
					$objWpPosts->PostDateGmt = $objDleStatic->Date;
					$objWpPosts->PostModifiedGmt = $objDleStatic->Date;
					$objWpPosts->PostContent = str_replace(
						'{ACCEPT-DECLINE}', '', str_replace(
							'\»', '»', str_replace(
								'\"', '"', $objDleStatic->Template)));
					$objWpPosts->PostContentFiltered = "";
					$objWpPosts->PostParent = 0;
					$objWpPosts->PostTitle = $objDleStatic->Descr;
					$objWpPosts->PostExcerpt = str_replace('\»', '»', str_replace('\"', '"', $objDleStatic->Metadescr));
					$objWpPosts->CommentStatus = "open";
					$objWpPosts->PingStatus = "open";
					$objWpPosts->PostStatus = "publish";
					$objWpPosts->PostPassword = "";
					$objWpPosts->PostName = $objDleStatic->Name;
					$objWpPosts->ToPing = "";
					$objWpPosts->Pinged = "";
					$objWpPosts->Guid = "";
					$objWpPosts->MenuOrder = 0;
					$objWpPosts->PostType = "page";
					$objWpPosts->PostMimeType = "";
					$objWpPosts->CommentCount = 0;
					$objWpPosts->Save();
					$intPostCount++;
				}
			}
		}
		
		// 3. calculate the comment_count
		$objWpPostsArray = WpPosts::LoadAll();
		if ($objWpPostsArray) foreach ($objWpPostsArray as $objWpPosts) {
			$objWpPosts->CommentCount = WpComments::CountByCommentPostID($objWpPosts->Id);
			$objWpPosts->Save();
		}
		
		// 7. copy the Postcount
		if ($objDlePostArray) foreach ($objDlePostArray as $objDlePost) {
			$objWpPosts = $objDlePost->LoadWpPosts();
			if ($objWpPosts) {
				$objWpPvcTotalArray = WpPvcTotal::LoadArrayByPostnum($objWpPosts->Id);
				if ($objWpPvcTotalArray && count($objWpPvcTotalArray)) foreach ($objWpPvcTotalArray as $objWpPvcTotal) {
					$objWpPvcTotal->Postcount = $objDlePost->NewsRead;
					$objWpPvcTotal->Save();
				} else {
					$objWpPvcTotal = new WpPvcTotal;
					$objWpPvcTotal->Initialize();
					$objWpPvcTotal->Postnum = $objWpPosts->Id;
					$objWpPvcTotal->Postcount = $objDlePost->NewsRead;
					$objWpPvcTotal->Save();
				}
			}
		}
		
		$intPollCount = 0;
		$objDlePollArray = DlePoll::LoadAll(QQ::Clause(QQ::OrderBy(QQN::DlePoll()->Id)));
		if ($objDlePollArray) foreach ($objDlePollArray as $objDlePoll) {
			$objWpPollsq = WpPollsq::QuerySingle(QQ::Equal(QQN::WpPollsq()->PollqQuestion, $objDlePoll->Frage), QQ::Clause(QQ::LimitInfo(1)));
			if (!$objWpPollsq) {
				$objWpPollsq = new WpPollsq;
				$objWpPollsq->PollqQuestion = $objDlePoll->Frage;
				$objWpPollsq->PollqTimestamp = $objDlePoll->News->Date->Timestamp;
				$objWpPollsq->PollqTotalvotes = $objDlePoll->Votes;
				$objWpPollsq->PollqActive = 1;
				$objWpPollsq->PollqExpiry = '';
				$objWpPollsq->PollqMultiple = intval($objDlePoll->Multiple);
				$objWpPollsq->PollqTotalvoters = $objDlePoll->Votes;
				$objWpPollsq->Save();
				$intPollCount++;
			}

			if ($objDlePoll->Answer && strlen($objDlePoll->Answer) && $objDlePoll->Body && strlen($objDlePoll->Body)) {
				$intA2VArray = array();
				$strAnswerVoteArray = explode("|", $objDlePoll->Answer);
				if ($strAnswerVoteArray) foreach ($strAnswerVoteArray as $strAnswerVote) {
					$intA2V = explode(":", $strAnswerVote);
					if (2 == count($intA2V)) {
						$intA2VArray[$intA2V[0]] = $intA2V[1];
					}
				}
				$strAnswerArray = explode("<br />", $objDlePoll->Body);
				$intAnswerCounter = 0;
				if ($strAnswerArray) foreach ($strAnswerArray as $strAnswer) {
					$objWpPollsa = WpPollsa::QuerySingle(
						QQ::AndCondition(
							QQ::Equal(QQN::WpPollsa()->PollaQid, $objWpPollsq->PollqId)
							, QQ::Equal(QQN::WpPollsa()->PollaAnswers, $strAnswer))
						, QQ::Clause(QQ::OrderBy(QQN::WpPollsa()->PollaAid), QQ::LimitInfo(1))
					);
					if (!$objWpPollsa) {
						$objWpPollsa = new WpPollsa;
						$objWpPollsa->PollaQid = $objWpPollsq->PollqId;
						$objWpPollsa->PollaAnswers = $strAnswer;
						$intVotes = 0;
						if (isset($intA2VArray[$intAnswerCounter])) {
							$intVotes = $intA2VArray[$intAnswerCounter];
						}
						$objWpPollsa->PollaVotes = $intVotes;
						$objWpPollsa->Save();
						$intAnswerCounter++;
					}
				}
			}

			$objDlePollLogArray = DlePollLog::LoadArrayByNewsId($objDlePoll->NewsId);
			if ($objDlePollLogArray) foreach ($objDlePollLogArray as $objDlePollLog) {
				$strPollipUser = '';
				$intPollipUserid = 0;
				$strPollipIp = '';
				if (false === strpos($objDlePollLog->Member, '.')) {
					// The userId saved in the field Member
					$objDleUsers = DleUsers::Load($objDlePollLog->Member);
					if ($objDleUsers) {
						$objWpUsers = $objDleUsers->LoadWpUsers();
						if ($objWpUsers) {
							$strPollipUser = $objWpUsers->UserLogin;
							$intPollipUserid = $objWpUsers->Id;
						}
					}
				} else {
					// The IP address is saved in the field Member
					$strPollipIp = $objDlePollLog->Member;
				}
				$objWpPollsip = WpPollsip::QuerySingle(
					QQ::AndCondition(
						QQ::Equal(QQN::WpPollsip()->PollipQid, $objWpPollsq->PollqId)
						, QQ::Equal(QQN::WpPollsip()->PollipIp, $strPollipIp)
						, QQ::Equal(QQN::WpPollsip()->PollipUser, $strPollipUser)
						, QQ::Equal(QQN::WpPollsip()->PollipUserid, $intPollipUserid)
					)
					, QQ::Clause(QQ::OrderBy(QQN::WpPollsip()->PollipId), QQ::LimitInfo(1))
				);
				if (!$objWpPollsip) {
					$objWpPollsip = new WpPollsip;
					$objWpPollsip->PollipQid = $objWpPollsq->PollqId;
					$objWpPollsip->PollipAid = '';
					$objWpPollsip->PollipIp = $strPollipIp;
					$objWpPollsip->PollipUser = $strPollipUser;
					$objWpPollsip->PollipUserid = $intPollipUserid;
					$objWpPollsip->PollipHost = '';
					$objWpPollsip->PollipTimestamp = '0';
					$objWpPollsip->Save();
				}
			}

			// Insert the poll into the corresponding WP post
			$objDlePost = $objDlePoll->News;
			$objWpPosts = $objDlePost->LoadWpPosts();
			$strText = $objWpPosts->PostContent;
			if (false === strpos($strText, "[poll id=")) {
				$objWpPosts->PostContent = sprintf('[poll id="%s"] %s', $objWpPollsq->PollqId, $strText);
				$objWpPosts->Save();
			}
		}
		
		
		WpUsers::GetDatabase()->TransactionCommit();
	} catch(QDatabaseExceptionBase $ex) {
		WpUsers::GetDatabase()->TransactionRollBack();
		$strErrorMessage = $ex->getMessage();
	} catch(QCallerException $ex) {
		WpUsers::GetDatabase()->TransactionRollBack();
		$strErrorMessage = $ex->getMessage();
	} catch(Exception $ex) {
		WpUsers::GetDatabase()->TransactionRollBack();
		$strErrorMessage = $ex->getMessage();
	}
	
	$strPageTitle = 'DLE to Wordpress conversion';
	require(__CONFIGURATION__ . '/header.inc.php');
?>
	<h1 class="page-title">DLE to Wordpress conversion</h1>
	
<?php
	if ($strErrorMessage) {
?>
	<p> <?php _p($strErrorMessage); ?> </p>
<?php
	}
?>
	<ul class="link-list">
		<li><strong><?php _p($intUserCount); ?></strong> users from <strong><?php _p(DleUsers::CountAll()) ?></strong> converted. The wordpress database already has <strong><?php _p(WpUsers::CountAll()) ?></strong> users.</li>
		<li><strong><?php _p($intTermCount); ?></strong> terms from <strong><?php _p(DleCategory::CountAll() + DleTags::QueryCount(QQ::All(), QQ::GroupBy(QQN::DleTags()->Tag))) ?></strong> converted. The wordpress database already has <strong><?php _p(WpTerms::CountAll()) ?></strong> terms.</li>
		<li><strong><?php _p($intTermTaxonomyCount); ?></strong> term taxonomies from <strong><?php _p(DleCategory::CountAll()) ?></strong> converted. The wordpress database already has <strong><?php _p(WpTermTaxonomy::CountAll()) ?></strong> taxonomies.</li>
		<li><strong><?php _p($intPostCount); ?></strong> term posts from <strong><?php _p(DlePost::CountAll()) ?></strong> converted. The wordpress database already has <strong><?php _p(WpPosts::CountAll()) ?></strong> posts.</li>
		<li><strong><?php _p($intTermRelationshipsCount); ?></strong> term relationships from <strong><?php _p($intDleTermRelationshipsCount) ?></strong> converted. The wordpress database already has <strong><?php _p(WpTermRelationships::CountAll()) ?></strong> term relationships.</li>
		<li><strong><?php _p($intCommentsCount); ?></strong> comments from <strong><?php _p(DleComments::CountAll()) ?></strong> converted. The wordpress database already has <strong><?php _p(WpComments::CountAll()) ?></strong> comments.</li>
		<li><strong><?php _p($intPollCount); ?></strong> polls from <strong><?php _p(DlePoll::CountAll()) ?></strong> converted. The wordpress database already has <strong><?php _p(WpPollsq::CountAll()) ?></strong> polls.</li>
	</ul>
	
<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>