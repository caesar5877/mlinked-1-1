<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php by Valery Votintsev at sources.ru
 *      German Discuz!X Translation (2011-08-14) by Coldcut - http://www.cybertipps.com
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'discuz_lang'		=> 'misc',
	'contact'		=> 'Contacts:',//'联系方式:',
	'anonymous'		=> 'Anonym',
	'anonymoususer'		=> 'Anonym',
	'guestuser'		=> 'Gast',
	'has_expired'		=> 'Information ist abgelaufen',
	'click_view'		=> 'Klicken f&uuml;r Bild',
	'never_expired'		=> 'L&auml;uft nie ab',
	'sort_update'		=> 'Aktualisierung',
	'sort_upload'		=> 'Laden',
	'view_noperm'		=> 'Inhalt ausblenden',
	'post_hidden'		=> '**** Die Nachricht wurde vom Autor versteckt *****',
	'post_banned'		=> '*** Der Autor wurde gesperrt oder gel&ouml;scht ***',
	'post_single_banned'	=> '*** Thema gesperrt ***',
	'message_ishidden_hiddenreplies'	=> 'Dieser Beitrag ist nur f&uuml;r den Autor sichtbar.',
	'post_reply_quote'		=> 'Original geschrieben von {author} um {time}',
	'post_edit'			=> "[i=s] Zuletzt bearbeitet von {editor} um {edittime} [/i]\n\n",
	'post_edit_regexp'		=> '/^\[i=s\] Zuletzt bearbeitet von .*? um .*? \[\/i\]\n\n/s',
	'post_edithtml'			=> '[i=s] Edited by {editor} at {edittime} [/i]<br /><br />',//'[i=s] 本帖最后由 {editor} 于 {edittime} 编辑 [/i]<br /><br />',
	'post_edithtml_regexp'		=> '/^\[i=s\] Edited by .*? at .*? \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',//'/^\[i=s\] 本帖最后由 .*? 于 .*? 编辑 \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',
	'post_editnobbcode'		=> '[ Beitr&auml;ge von {editor} am {edittime} bearbeitet ]\n\n',
	'post_editnobbcode_regexp'	=> '/^\[ Beitr&auml;ge von .*? am .*? bearbeitet \]\n\n/s',
	'post_reply'			=> 'Antworten',
	'post_thread'			=> 'Add Thema',//'???',

	'price'				=> 'Preis',
	'pay_view'			=> 'Payments Log',//'记录',
	'attachment_buy'		=> 'Kaufen',

	'post_trade_yuan'		=> 'Euro',
	'post_trade_seller'		=> 'Verk&auml;ufer',
	'post_trade_name'		=> 'Name',
	'post_trade_price'		=> 'Preis',
	'post_trade_quality'		=> 'Qualit&auml;t',
	'post_trade_locus'		=> 'Ort',
	'post_trade_transport_type'	=> 'Transport',
	'post_trade_transport_seller'	=> 'Der Verk&auml;ufer zahlt die Geb&uuml;hren',
	'post_trade_transport_buyer'	=> 'Der K&auml;ufer zahlt die Geb&uuml;hren',
	'post_trade_transport_mail'	=> 'Post',
	'post_trade_transport_express'	=> 'Express Post',
	'post_trade_transport_virtual'	=> 'Virtuell oder keine Lieferung notwendig',
	'post_trade_transport_physical'	=> 'Durchf&uuml;hrung durch ein Logistikunternehmen',
//vot	'post_trade_locus'		=> 'Ort',
	'post_trade_description'	=> 'Beschreibung',
	'post_trade_pm_subject'		=> '[Betreff]',
	'post_trade_pm_buynum'		=> 'Anzahl',
	'post_trade_pm_wishprice'	=> 'Zu erwartender Preis',
	'post_trade_pm_reason'		=> 'Begr&uuml;ndung',
	'postappend_content'		=> 'Hinzuf&uuml;gen von Inhalten',
	'payment_unit'			=> 'Euro',

	'attach'			=> 'Anhang',
	'attach_pay'			=> 'Verkaufsanhang',
	'attach_credits_policy'		=> 'Punktekurs anzeigen',
	'attach_img'			=> 'Grafik',
	'attach_readperm'		=> 'Berechtigung',
	'attach_img_zoom'		=> 'Klicke hier, um ein neues Fenster zu &ouml;ffnen\\nCTRL + Mausrad um ein- und auszuzoomen',
	'attach_img_thumb'		=> 'Klicke hier, um das komplette Bild anzuzeigen',
	'attach_downloads'		=> 'Anzahl der Downloads',

	'post_trade_transport'		=> 'Transportsteuer',
//vot	'post_trade_transport_mail'	=> 'Post',
	'post_trade_quality'		=> 'Qualit&auml;t',
	'post_trade_quality_new'	=> 'Neu',
	'post_trade_quality_secondhand'	=> 'Alt',

	'trade_unstart'			=> '<font color="gray">Warte auf Ausf&uuml;hrung</font>',
	'trade_waitbuyerpay'		=> 'Warte auf Zahlung des K&auml;ufers',
	'trade_waitsellerconfirm'	=> 'Warte auf Best&auml;tigung des Verk&auml;ufers',
	'trade_sysconfirmpay'		=> 'Warte auf das System, bitte versende jetzt keine Waren',
	'trade_waitsellersend'		=> 'Warte auf Versand des Verk&auml;ufers',
	'trade_waitbuyerconfirm'	=> 'Warte auf Best&auml;tigung des Verk&auml;ufers',
	'trade_syspayseller'		=> 'Warte auf die Bezahlung des Verk&auml;ufers durch das System',
	'trade_finished'		=> '<font color="green">Handel erfolgreich beendet</font>',
	'trade_closed'			=> '<font color="gray">Handel geschlossen (Nicht beendet)</font>',
	'trade_waitselleragree'		=> 'Warte auf Best&auml;tigung der R&uuml;ckerstattung durch den Verk&auml;ufer',
	'trade_sellerrefusebuyer'	=> 'Der Verk&auml;ufer hat abgelehnt. Warte auf K&auml;ufer, um die Bedingungen zu &auml;ndern',
	'trade_waitbuyerreturn'		=> 'Der Verk&auml;ufer hat best&auml;tigt. Warte auf K&auml;ufer, um die Ware zur&uuml;ckzusenden',
	'trade_waitsellerconfirmgoods'	=> 'Warte auf Best&auml;tigung des Verk&auml;ufers',
	'trade_waitalipayrefund'	=> 'Warte auf die R&uuml;ckerstattung durch das System',
	'trade_alipaycheck'		=> 'Warte auf Durchf&uuml;hrung durch das System',
	'trade_overedrefund'		=> 'R&uuml;ckerstattung abgelaufen',
	'trade_refundsuccess'		=> '<font color="green">Erfolgreich r&uuml;ckerstattet</font>',
	'trade_refundclosed'		=> '<font color="green">R&uuml;ckerstattung geschlossen</font>',

	'trade_offline_1'		=> 'Effektive Transaktion',
	'trade_offline_4'		=> 'Ich habe bezahlt und warte auf die Lieferung der Ware.',
	'trade_offline_5'		=> 'Ich habe die Ware versandt.',
	'trade_offline_7'		=> 'Ich habe die Ware erhalten, Transaktion erfolgreich.',
	'trade_offline_8'		=> 'Die Transaktion abbrechen',
	'trade_offline_10'		=> 'Ich m&ouml;chte die Ware zur&uuml;ckgeben und warte auf die Best&auml;tigung der R&uuml;ckerstattung durch den Verk&auml;ufer.',
	'trade_offline_11'		=> 'Der Verk&auml;ufer hat die R&uuml;ckerstattung abgelehnt.',
	'trade_offline_12'		=> 'Der Verk&auml;ufer hat die R&uuml;ckerstattung best&auml;tigt.',
	'trade_offline_13'		=> 'Ich habe die Ware zur&uuml;ckgegeben und warte auf den Erhalt durch den Verk&auml;ufer.',
	'trade_offline_17'		=> 'Der Verk&auml;ufer hat die Ware erhalten, erfolgreich r&uuml;ckerstattet.',

	'trade_message_4'		=> 'Zahlungs- und Bank-Informationen eingeben',
	'trade_message_5'		=> 'Versand und sonstige Informationen eingeben',
	'trade_message_13'		=> 'Versand und sonstige Informationen eingeben',

	'credit_payment'		=> 'Punkte aufladen',
	'credit_forum_payment'		=> 'Foren-Punkte aufladen',
	'credit_forum_royalty'		=> 'Transaktionsgeb&uuml;hr',

	'credit_total'			=> 'Total Points',//'总积分',

	'invite_payment'		=> 'Buy an invitation code',//'购买邀请码',
	'invite_forum_payment'		=> 'Buy an invitation code',//'购买邀请码',
	'invite_forum_payment_unit'	=> 'payment unit',//'个',
	'invite_forum_royalty'		=> 'Transaction fee',//'交易手续费',

	'formulaperm_regdate'		=> 'Reg. Zeit',
	'formulaperm_regday'		=> 'Reg. Tage',
	'formulaperm_regip'		=> 'Reg. IP',
	'formulaperm_lastip'		=> 'Letzte IP',
	'formulaperm_buyercredit'	=> 'Kaufe Credits',
	'formulaperm_sellercredit'	=> 'Verkaufe Credits',
	'formulaperm_digestposts'	=> 'Highlights',
	'formulaperm_posts'		=> 'Beitr&auml;ge',
	'formulaperm_threads'		=> 'Themen',
	'formulaperm_oltime'		=> 'Online-Stunden',
	'formulaperm_pageviews'		=> 'Views',
	'formulaperm_and'		=> 'und',
	'formulaperm_or'		=> 'oder',
	'formulaperm_extcredits'	=> 'Benutzerdefinierte Punkte',

	'login_normal_mode'		=> 'Sichtbar',
	'login_switch_invisible_mode'	=> 'In Unsichtbarkeitsmodus wechseln',
	'login_switch_normal_mode'	=> 'In normalen Modus wechseln',
	'login_invisible_mode'		=> 'Unsichtbar',

	'eccredit_explain'		=> 'Erkl&auml;ren',

	'google_site_0'			=> 'Web durchsuchen',
	'google_site_1'			=> 'Forum durchsuchen',
	'google_sa'			=> 'Suchen',

	'modcp_logs_action_home'	=> 'Startseite',
	'modcp_logs_action_moderate'	=> 'Moderiert',
	'modcp_logs_action_member'	=> 'Mitglieder',
	'modcp_logs_action_forumaccess'	=> 'Berechtigungen',
	'modcp_logs_action_thread'	=> 'Thema Management',
	'modcp_logs_action_forum'	=> 'Foren',
	'modcp_logs_action_announcement'	=> 'Bulletin',
	'modcp_logs_action_log'		=> 'Management Blog',
	'modcp_logs_action_stat'	=> 'Management-Statistik',

	'modcp_logs_action_login'	=> 'Login',

	'uch_selectalbum'		=> 'Bitte w&auml;hle ein Album',
	'uch_noalbum'			=> 'Du hast kein Album ',
	'click_here'			=> 'Klick Hier',
	'uch_createalbum'		=> ' um dein Album zu erstellen!',

	'pm_from'		=> 'Von',
	'pm_to'			=> 'An',
	'pm_date'		=> 'Datum',

	'share_message'		=> 'Hallo! Ich habe den Thread in {$_G[setting][bbname]} gesehen, Ich glaube, er ist wertvoll. \\n\\n$thread[subject]\\nURL [url={$threadurl}]{$threadurl}[/url]\\n\\nHoffentlich magst du ihn.',
	
	'week_0'	=> 'Son',
	'week_1'	=> 'Mon',
	'week_2'	=> 'Die',
	'week_3'	=> 'Mi',
	'week_4'	=> 'Do',
	'week_5'	=> 'Fr',
	'week_6'	=> 'Sa',

/*!*/	'y_m_d'		=> 'Y-m-d',//'Y年m月d日',

	'notice_actor'		=> 'und so weiter. Insgesammt: $actorcount Person(en)',

	'perms_allowvisit'		=> 'Besuche Forum',
	'perms_readaccess'		=> 'Read permissions',//'阅读权限',
	'perms_allowviewpro'		=> 'Zeige User\' Profil',
	'perms_allowinvisible'		=> 'Unsichtbar',
	'perms_allowsearch'		=> 'Suche',
	'perms_allownickname'		=> 'Allow to use nickname',//'使用昵称',
	'perms_allowcstatus'		=> 'Status anpassen',
	'perms_allowpost'		=> 'Thread posten',
	'perms_allowreply'		=> 'Antworten',
	'perms_allowpostpoll'		=> 'Umfrage posten',
	'perms_allowvote'		=> 'Bewerten',
	'perms_allowpostreward'		=> 'Add award thread',//'发表悬赏',
	'perms_allowpostactivity'	=> 'Add event',//'发表活动',
	'perms_allowpostdebate'		=> 'Add debate',//'发表辩论',
	'perms_allowposttrade'		=> 'Add product',//'发表交易',
	'perms_maxsigsize'		=> 'Max. L&auml;nge der Signatur',
	'perms_allowsigbbcode'		=> 'Verwende Discuz! Code',
	'perms_allowsigimgcode'		=> 'Verwende [img] Code',
	'perms_maxbiosize'		=> 'Max. L&auml;nge der Selbstbeschreibung',
	'perms_allowrecommend'		=> 'Allow to recomend topic',//'主题评价影响值',
	'perms_allowbiobbcode'		=> 'Verwende Discuz! Code',
	'perms_allowbioimgcode'		=> 'Verwende [img] Code',
	'perms_allowgetattach'		=> 'Download/Anhang',
	'perms_allowgetimage'		=> 'View image',//'查看图片',
	'perms_allowpostattach'		=> 'Anhang hochladen',
	'perms_allowpostimage'		=> 'Upload image',//'上传图片',
	'perms_allowsetattachperm'	=> 'Verwende [img] Code',
	'perms_maxspacesize'		=> 'Max Space Size',//'空间大小',
	'perms_maxattachsize'		=> 'MMaximum Size',
	'perms_maxsizeperday'		=> 'Upload Gr&ouml;sse pro Tag',
	'perms_maxattachnum'		=> 'Max number of attachments per day',//'每天最大附件数量',
//vot	'perms_allowbioimgcode'		=> 'Verwende [img] Code',
	'perms_attachextensions'	=> 'Anhang Typ',
	'perms_allowstickthread'	=> 'Wichtig',
	'perms_allowdigestthread'	=> 'Digest thread',//'主题精华',
	'perms_allowstickthread_value'	=> 'Stick',//'置顶',
	'perms_allowdigestthread_value'	=> 'Digest',//'精华',
	'perms_allowbumpthread'		=> 'Bump',//'提升主题',
	'perms_allowhighlightthread'	=> 'Hightlight',//'主题高亮',
	'perms_allowrecommendthread'	=> 'Empfohlen',
	'perms_allowstampthread'	=> 'Evaluate',
	'perms_allowclosethread'	=> 'Schliessen',
	'perms_allowmovethread'		=> 'Verschieben',
	'perms_allowedittypethread'	=> 'Bearbeite Thread Typ',
	'perms_allowcopythread'		=> 'Kopieren',
	'perms_allowmergethread'	=> 'Zusammenf&uuml;gen',
	'perms_allowsplitthread'	=> 'Teilen',
	'perms_allowrepairthread'	=> 'Reparieren',
	'perms_allowrefund'		=> 'Refund',//'强制退款',
	'perms_alloweditpoll'		=> 'Umfrage bearbeiten',
	'perms_allowremovereward'	=> 'Remove Reward',//'移除悬赏',
	'perms_alloweditactivity'	=> 'Aktivit&auml;ten verwalten',
	'perms_allowedittrade'		=> 'Product edit',//'管理商品',
	'perms_alloweditpost'		=> 'Posts bearbeiten',
	'perms_allowwarnpost'		=> 'Warn Posts',//'警告帖子',
	'perms_allowbanpost'		=> 'Ban posts',//'屏蔽帖子',
	'perms_allowdelpost'		=> 'Posts l&ouml;schen',
	'perms_allowviewreport'		=> 'Report anzeigen',
	'perms_allowmodpost'		=> 'Posts Moderation',//'审核帖子',
	'perms_allowmoduser'		=> 'User moderation',//'审核用户',
	'perms_allowbanuser'		=> 'Ban user',//'禁止用户',
	'perms_allowbanip'		=> 'Ban IP',//'禁止 IP',
	'perms_allowedituser'		=> 'User bearbeiten',
	'perms_allowmassprune'		=> 'Bulk post delete',//'批量删帖',
	'perms_allowpostannounce'	=> 'Ank&uuml;ndigung schreiben',
	'perms_disablepostctrl'		=> 'Post Kontrolle abschalten',
	'perms_allowviewip'		=> 'Zeige IP',
	'perms_viewperm'		=> 'Im Forum st&ouml;bern',
	'perms_postperm'		=> 'Add thread',//'发新话题',
	'perms_replyperm'		=> 'Reply post',//'发表回复',
	'perms_getattachperm'		=> 'Download/View Attachment',//'下载附件',
	'perms_postattachperm'		=> 'Attach files',//'上传附件',
	'perms_postimageperm'		=> 'Attach images',//'上传图片',
	'perms_allowblog'		=> 'Publish blog',//'发表日志',
	'perms_allowdoing'		=> 'Write Twit',//'发表记录',
	'perms_allowupload'		=> 'Upload image',//'上传图片',
	'perms_allowshare'		=> 'Share',//'发布分享',
	'perms_allowpoke'		=> 'Send Greeting',//'允许打招呼',
	'perms_allowfriend'		=> 'Add friend',//'允许加好友',
	'perms_allowclick'		=> 'Rate',//'允许表态',
	'perms_allowmyop'		=> 'Use apps',//'允许使用应用',
	'perms_allowcomment'		=> 'Post Comment',//'发表留言/评论',
	'perms_allowstatdata'		=> 'Statistikdaten anzeigen',
	'perms_allowstat'		=> 'View statistics',//'允许查看趋势统计',
	'perms_allowpostarticle'	=> 'Post article',//'发表文章',
	'perms_raterange'		=> 'Allow to rate by range',//'允许参与评分',
	'perms_allowcommentpost'	=> 'Allow to comment',//'允许参与点评',
	'perms_allowat'			=> 'Allow the number of @name',//'允许 @ 的人数',
	'perms_allowreplycredit'	=> 'Allow to set replies reward',//'允许设置回帖奖励',
	'perms_allowposttag'		=> 'Allow to use tags',//'允许使用标签',
	'perms_allowcreatecollection'	=> 'Allow to create collections',//'允许创建淘专辑的数量',
	'perms_allowsendpm'		=> 'Allow to Send PM',//'允许发短消息',
	'perms_maximagesize'		=> 'Maximum single image size',//'单张图片最大尺寸',
	'perms_allowmediacode'		=> 'Allow to use multimedia code',//'允许使用多媒体代码',

	'join_topic'		=> 'Join Topic',//'参与话题',
	'join_poll'		=> 'Vote poll',//'参与投票',
	'buy_trade'		=> 'Buy Product',//'购买商品',
	'join_reward'		=> 'Join Reward',//'参与悬赏',
	'join_activity'		=> 'Join Event',//'参与活动',
	'join_debate'		=> 'Join Debate',//'参与辩论',
	'at_invite'		=> '@name for friends',//'@我的好友',

	'lower'			=> 'Weniger als',
	'higher'		=> 'Mehr als',
	'report_msg_your'	=> 'Your ',//'您的 ',
	'report_noreward'	=> 'no reward',//'不奖惩',
	'activity_viewimg'	=> 'Click to view',//'点击查看',

	'crime_postreason'	=> '{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">Details</a>',//'{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">查看详情</a>',
	'crime_reason'		=> '{reason}',

	'connectguest_message_search'	=> array('Not logged in', 'Logged'),//array('尚未登录', '先登录'),
	'connectguest_message_replace'	=> array('Not yet <a href="member.php?mod=connect">Improve current account</a> or <a href="member.php?mod=connect&ac=bind">Bind existing account</a>', 'You need to <a href="member.php?mod=connect">Improve account information</a> or <a href="member.php?mod=connect&ac=bind">Bind existing account</a> '),//array('尚未 <a href="member.php?mod=connect">完善帐号信息</a> 或 <a href="member.php?mod=connect&ac=bind">绑定已有帐号</a> ', '您需要先 <a href="member.php?mod=connect">完善帐号信息</a> 或 <a href="member.php?mod=connect&ac=bind">绑定已有帐号</a> '),
	'connectguest_message_mobile_search'	=> array('Not logged in', 'Logged'),//array('尚未登录', '先登录'),
	'connectguest_message_mobile_replace'	=> 'Provide your account information or Bind existing account, ',//'在电脑版完善资料或绑定已有帐号，',

	'avatar'		=> 'Avatar',//'头像',
	'signature'		=> 'Signature',//'签名',
	'custom_title'		=> 'Custom Title',//'自定义头衔',

	'forum_guide'		=> 'Guide',//'导读',

	'patch_site_have'	=> 'Your site have',//'您的网站有',
	'patch_is_fixed'	=> 'Security vulnerabilities, has been fixed',//'个安全漏洞，已修复',
	'patch_need_fix'	=> 'Security vulnerabilities',//'个安全漏洞，请尽快修复',
	'patch_fixed_status'	=> 'Fixed',//'已修复',
	'patch_unfix_status'	=> 'NOT fixed',//'未修复',
	'patch_fix_failed_status'	=> 'Repair failed',//'修复失败',
	'patch_fix_right_now'	=> 'Repair right now',//'立即修复',
	'patch_view_fix_detail'	=> 'Details',//'查看详情',
	'patch_name'		=> 'Vulnerability',//'漏洞名称',
	'patch_dateline'	=> 'Date',//'发布日期',
	'patch_status'		=> 'Status',//'当前状态',
	'patch_close'		=> 'Close',//'关闭',

	'plugin_title'		=> 'Application update reminder',//'应用更新提醒',
	'plugin_memo'		=> 'Updates available: <span class="xi1">{number}</span>',//'您有 <span class="xi1">{number}</span> 款应用有可用更新',
	'plugin_link'		=> 'Update Now',//'现在更新',

// Added by Valery Votintsev, codersclub.org
	'poll_reply_no_perms'	=> 'You can not reply the poll',//'您不能对自己的回帖进行投票',
	'poll_replyed_already'	=> 'You have already replied this poll',//'您已经对此回帖投过票了',
	'poll_voted_ok'		=> 'You have voted successfully',//'投票成功',
);

