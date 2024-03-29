<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php by Valery Votintsev at sources.ru
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'discuz_lang'		=> 'misc',
	'contact'		=> 'Rehber:',//'联系方式:',
	'anonymous'		=> 'Anonim',
	'anonymoususer'		=> 'Anonim',
	'guestuser'		=> 'Guest',//'游客',
	'has_expired'		=> 'Süresi dolmuş bilgiler.',
	'click_view'		=> 'Göster',
	'never_expired'		=> 'Limitsiz',
	'sort_update'		=> 'Güncel',
	'sort_upload'		=> 'Ekleme',
	'view_noperm'		=> 'Gizli içerik',
	'post_hidden'		=> '**** Gizli mesaj ****',
	'post_banned'		=> '**** Yasaklanmış mesaj  ****',
	'post_single_banned'	=> '**** Engelli mesaj ****',
	'message_ishidden_hiddenreplies'	=> 'Cevaplama engelli',
	'post_reply_quote'		=> '{author} cevapladı: {time}',
	'post_edit'			=> "[i=s] Son düzeltme: {editor} Tarih: {edittime} [/i]\n\n",
	'post_edit_regexp'		=> '/^\[i=s\] Son düzeltme .*? Tarih .*? \[\/i\]\n\n/s',
	'post_edithtml'			=> '[i=s] Mesaj {editor} tarafından düzeltildi.Tarih: {edittime} [/i]<br /><br />',
	'post_edithtml_regexp'		=> '/^\[i=s\] Mesaj düzenleyen .*? at .*? \[\/i\]&lt;br \/&gt;&lt;br \/&gt;/s',
	'post_editnobbcode'		=> '[Mesaj {editor} tarafından düzenlendi.Tarih: {edittime} ]\n\n',
	'post_editnobbcode_regexp'	=> '/^\[  Mesaj düzenleyen .*? Tarih .*?  \]\n\n/s',
	'post_reply'			=> 'Cevap',
	'post_thread'			=> 'Mesaj',

	'price'				=> 'Fiyat',
	'pay_view'			=> 'Ödemeler',
	'attachment_buy'		=> 'Satın Al',

	'post_trade_yuan'		=> 'TL',
	'post_trade_seller'		=> 'Satıcı',
	'post_trade_name'		=> 'Adı',
	'post_trade_price'		=> 'Fiyat',
	'post_trade_quality'		=> 'Kalite',
	'post_trade_locus'		=> 'Yer',
	'post_trade_transport_type'	=> 'Kargo',
	'post_trade_transport_seller'	=> 'Satıcı',
	'post_trade_transport_buyer'	=> 'Alıcı',
	'post_trade_transport_mail'	=> 'Posta',
	'post_trade_transport_express'	=> 'Expres',
	'post_trade_transport_virtual'	=> 'Hiçbiri',
	'post_trade_transport_physical'	=> 'Ödemeli',//cash on delivery
//vot	'post_trade_locus'		=> 'Yer',
	'post_trade_description'	=> 'Açıklama',
	'post_trade_pm_subject'		=> '[Pazarlık]',
	'post_trade_pm_buynum'		=> 'Miktar',
	'post_trade_pm_wishprice'	=> 'Fiyat',
	'post_trade_pm_reason'		=> 'Neden',
	'postappend_content'		=> 'Içerik ekleyin',
	'payment_unit'			=> '€',

	'attach'			=> 'Dosya',
	'attach_pay'			=> 'Dosya Ödeme', //Modify
	'attach_credits_policy'		=> 'Kredi Polikası',
	'attach_img'			=> 'Resim Ekler',
	'attach_readperm'		=> 'Okumak İzni',
	'attach_img_zoom'		=> 'Yeni Pencere\\nCTRL+Mouse ile zoom',
	'attach_img_thumb'		=> 'Yeni Pencere',
	'attach_downloads'		=> 'Yüklemeler',

	'post_trade_transport'		=> 'Kargo Ücret',
//vot	'post_trade_transport_mail'	=> 'Mail',
	'post_trade_quality'		=> 'Kalite',//Modify
	'post_trade_quality_new'	=> 'Yeni',
	'post_trade_quality_secondhand'	=> '2.El',

	'trade_unstart'			=> '<font color="gray">İşlemde</font>',
	'trade_waitbuyerpay'		=> 'Ödeme bekleniyor',
	'trade_waitsellerconfirm'	=> 'Satıcı onayı bekleniyor',
	'trade_sysconfirmpay'		=> 'Onay bekleniyor,henüz mal göndemeyiniz',
	'trade_waitsellersend'		=> 'Satıcının mal göndermesi bekleniyor',
	'trade_waitbuyerconfirm'	=> 'Alıcı onayı bekleniyor',
	'trade_syspayseller'		=> 'Satıcıya sistem ödemesi bekleniyor ',
	'trade_finished'		=> '<font color="green">Ticaret başarıyla tamamlandı.</font>',
	'trade_closed'			=> '<font color="gray">Ticaret kapalı</font>',
	'trade_waitselleragree'		=> 'Satıcı iade onayı bekleniyor.',
	'trade_sellerrefusebuyer'	=> 'Satıcı reddetti, alıcı şartları değiştirmesi için bekleniyor',
	'trade_waitbuyerreturn'		=> 'Seller approved refund, waiting for return products to buyer',//'卖家同意退款，等待买家退货',
	'trade_waitsellerconfirmgoods'	=> 'Wait for the seller receiving refunded products',//'等待卖家收货',
	'trade_waitalipayrefund'	=> 'Both sides have agreed, wait for the money refund from payment system',//'双方已经一致，等待支付宝退款',
	'trade_alipaycheck'		=> 'Wait for payment system processed refund',//'支付宝处理中',
	'trade_overedrefund'		=> 'Refund overed',//'结束的退款',
	'trade_refundsuccess'		=> '<font color="green">Başarıyla iade edildi.</font>',
	'trade_refundclosed'		=> '<font color="green">Iade kapalı</font>',

	'trade_offline_1'	=> 'Etkili işlem.',
	'trade_offline_4'	=> 'Ödemeyi yaptım,teslimat bekliyorum.',
	'trade_offline_5'	=> 'Teslim ettim.',
	'trade_offline_7'		=> 'I have received products, the transaction successfully concluded',//'我收到货，交易成功结束',
	'trade_offline_8'	=> 'Ticaret Iptal',
	'trade_offline_10'		=> 'I want to return, waiting for the seller agreed to refund.',//'我要退货，等待卖家同意退款',
	'trade_offline_11'	=> 'Satıcı iade\'yi kabul etmedi.',
	'trade_offline_12'		=> 'Seller agreed to refund.',//'卖家同意退款',
	'trade_offline_13'		=> 'Geri gönderdim alıcının esyayı almasını bekliyorum.',//'我已退货，等待卖家收货',
	'trade_offline_17'		=> 'Seller received returned products, refunded.',//'卖家收到退货，已退款',

	'trade_message_4'		=> 'Enter the payment method and bank account info',//'可输入付款方式、银行账号等信息',
	'trade_message_5'		=> 'Enter shipping company, invoices, and other information',//'可输入发货公司、发货单号等信息',
	'trade_message_13'		=> 'Enter shipping company, invoices, and other information',//'可输入发货公司、发货单号等信息',

	'credit_payment'		=> 'Recharge Points',//'积分充值',
	'credit_forum_payment'		=> 'Recharge forum points',//'论坛积分充值',
	'credit_forum_royalty'		=> 'Transaction fee',//'交易手续费',

	'credit_total'			=> 'Toplam puan',//'总积分',

	'invite_payment'		=> 'Davet kodu satınalma',
	'invite_forum_payment'		=> 'Davet kodu satınalma',
	'invite_forum_payment_unit'	=> ' puan',
	'invite_forum_royalty'		=> 'İşlem ücreti',

	'formulaperm_regdate'		=> 'Katıldı',
	'formulaperm_regday'		=> 'Kaydolduktan sonraki dün',//'注册天数',
	'formulaperm_regip'		=> 'Kayıt IP',
	'formulaperm_lastip'		=> 'Son IP',
	'formulaperm_buyercredit'	=> 'Alıcı Kredisi',
	'formulaperm_sellercredit'	=> 'Satıcı Kredisi',
	'formulaperm_digestposts'	=> 'Derlemeler',
	'formulaperm_posts'		=> 'Mesajlar',
	'formulaperm_threads'		=> 'Konular',
	'formulaperm_oltime'		=> 'Online süre(saat)',
	'formulaperm_pageviews'		=> 'Sayfa görünüm',
	'formulaperm_and'		=> 've',
	'formulaperm_or'		=> 'veya',
	'formulaperm_extcredits'	=> 'Özel Puanlar',

	'login_normal_mode'		=> 'Online',//'在线',
	'login_switch_invisible_mode'	=> 'Gizli Modu',
	'login_switch_normal_mode'	=> 'Online Modu',
	'login_invisible_mode'		=> 'Gizli',

	'eccredit_explain'		=> 'Açıklama',

	'google_site_0'			=> 'Web Arama',
	'google_site_1'			=> 'Site Arama',
	'google_sa'			=> 'Arama',

	'modcp_logs_action_home'	=> 'CP home',//'内部留言',
	'modcp_logs_action_moderate'	=> 'Audit',
	'modcp_logs_action_member'	=> 'Üyeler',
	'modcp_logs_action_forumaccess'	=> 'Izinler',
	'modcp_logs_action_thread'	=> 'Konular',
	'modcp_logs_action_forum'	=> 'Ayarlar',
	'modcp_logs_action_announcement'	=> 'Duyuru',
	'modcp_logs_action_log'		=> 'Blog',
	'modcp_logs_action_stat'	=> 'Stats',

	'modcp_logs_action_login'	=> 'Login',//'登录',

	'uch_selectalbum'	=> 'Lütfen Albüm Seçin',
	'uch_noalbum'		=> 'Henüz bir albümünüz bulunmuyor, ',
	'click_here'		=> 'tıklayınız',
	'uch_createalbum'	=> ' albüm yarat!',

	'pm_from'		=> 'Gönderen',
	'pm_to'			=> 'To',//'收件人',
	'pm_date'		=> 'Tarih',

	'share_message'		=> 'Hello! I saw this thread at {$_G[setting][bbname]}, I think it is valuable, so I recommend it to you.\\n\\nTitle: $thread[subject]\\nURL: [url={$threadurl}]{$threadurl}[/url]\\n\\nHope you like it.',//'您好！我在 {$_G[setting][bbname]} 看到了这篇帖子，认为很有价值，特推荐给您。\\n\\n$thread[subject]\\n地址 [url={$threadurl}]{$threadurl}[/url]\\n\\n希望您能喜欢',

	'week_0'	=> 'Paz',
	'week_1'	=> 'Pzt',
	'week_2'	=> 'Sal',
	'week_3'	=> 'Çar',
	'week_4'	=> 'Per',
	'week_5'	=> 'Cum',
	'week_6'	=> 'Cmt',

/*!*/	'y_m_d'		=> 'Y-m-d',//'Y年m月d日',

	'notice_actor'		=> ', and so on. Toplam: $actorcount person(s)',

	'perms_allowvisit'		=> 'Forum Erişim',
	'perms_readaccess'		=> 'O.I.',
	'perms_allowviewpro'		=> 'Profil',
	'perms_allowinvisible'		=> 'Gizli',
	'perms_allowsearch'		=> 'Arama',
	'perms_allownickname'		=> 'Nick Name',
	'perms_allowcstatus'		=> 'Özelleştir',
	'perms_allowpost'		=> 'Konu',
	'perms_allowreply'		=> 'Cevap',
	'perms_allowpostpoll'		=> 'Anket',
	'perms_allowvote'		=> 'Anket',
	'perms_allowpostreward'		=> 'Ödül',
	'perms_allowpostactivity'	=> 'Etkinlik',
	'perms_allowpostdebate'		=> 'Tartışma',
	'perms_allowposttrade'		=> 'Ticaret',
	'perms_maxsigsize'		=> 'Imza Max Uzunluk',
	'perms_allowsigbbcode'		=> 'BBCode Imza',
	'perms_allowsigimgcode'		=> '[img] Imza',
	'perms_maxbiosize'		=> 'Profil Maksimum Uzunluk',
	'perms_allowrecommend'		=> 'Thread Rate Weight',//Modify
	'perms_allowbiobbcode'		=> 'BBcode Profil',
	'perms_allowbioimgcode'		=> '[img] Profil',
	'perms_allowgetattach'		=> 'Yükle/Izle',
	'perms_allowgetimage'		=> 'View image',//'查看图片',
	'perms_allowpostattach'		=> 'Dosya Ekleme',
	'perms_allowpostimage'		=> 'Upload image',//'上传图片',
	'perms_allowsetattachperm'	=> '[img] Dosya',
	'perms_maxspacesize'		=> 'Ortam Size',
	'perms_maxattachsize'		=> 'Max attach size',//'单个最大附件尺寸',
	'perms_maxsizeperday'		=> 'Toplam Dosya/Gün',
	'perms_maxattachnum'		=> 'Toplam Dosya Sayı/Gün',
//vot	'perms_allowbioimgcode'		=> '[img] Profil',
	'perms_attachextensions'	=> 'Dosya Tür',
	'perms_allowstickthread'	=> 'Stick',
	'perms_allowdigestthread'	=> 'Derleme',
	'perms_allowstickthread_value'	=> 'Stick',
	'perms_allowdigestthread_value'	=> 'Derleme',
	'perms_allowbumpthread'		=> 'Bump',
	'perms_allowhighlightthread'	=> 'Vurgu',
	'perms_allowrecommendthread'	=> 'Tavsiye',
	'perms_allowstampthread'	=> 'Damga',
	'perms_allowclosethread'	=> 'Kitle',
	'perms_allowmovethread'		=> 'Taşı',
	'perms_allowedittypethread'	=> 'Edit Type',//'编辑主题分类',
	'perms_allowcopythread'		=> 'Kopya',
	'perms_allowmergethread'	=> 'Merge',//'主题合并',
	'perms_allowsplitthread'	=> 'Split',//'主题分割',
	'perms_allowrepairthread'	=> 'Tamir',
	'perms_allowrefund'		=> 'Refund',//'强制退款',
	'perms_alloweditpoll'		=> 'Anket ayar',
	'perms_allowremovereward'	=> 'Ödül kaldır',
	'perms_alloweditactivity'	=> 'Manage Activity',
	'perms_allowedittrade'		=> 'Ticaret ayar',
	'perms_alloweditpost'		=> 'Mesaj ayar',
	'perms_allowwarnpost'		=> 'Mesaj uyar',
	'perms_allowbanpost'		=> 'Mesaj yasaklama',
	'perms_allowdelpost'		=> 'Mesaj silme',
	'perms_allowviewreport'		=> 'Uyarı görme',
	'perms_allowmodpost'		=> 'Konu onaylama',
	'perms_allowmoduser'		=> 'Üye onaylama',
	'perms_allowbanuser'		=> 'Üye yasaklama',
	'perms_allowbanip'		=> 'IP yasaklama',
	'perms_allowedituser'		=> 'Üye düzenleme',
	'perms_allowmassprune'		=> 'Toplu silme',
	'perms_allowpostannounce'	=> 'Duyuru yazma',
	'perms_disablepostctrl'		=> 'Disable Post Control',//Modify
	'perms_allowviewip'		=> 'IP görme',
	'perms_viewperm'		=> 'Forum erişim',
	'perms_postperm'		=> 'Konu yazma',
	'perms_replyperm'		=> 'Cevaplama',
	'perms_getattachperm'		=> 'Yükleme/Görme',
	'perms_postattachperm'		=> 'Dosya yükleme',
	'perms_postimageperm'		=> 'Resim yükleme',
	'perms_allowblog'		=> 'Blog yazma',
	'perms_allowdoing'		=> 'Durum yazma',
	'perms_allowupload'		=> 'Resim Ekleme',
	'perms_allowshare'		=> 'Paylaşma',
	'perms_allowpoke'		=> '"Selam" söyleme',//Modify
	'perms_allowfriend'		=> 'Arkadaş Ekle',
	'perms_allowclick'		=> 'Rating',//Modify
	'perms_allowmyop'		=> 'Use apps',//'允许使用应用',
	'perms_allowcomment'		=> 'Yorum yazma',
	'perms_allowstatdata'		=> 'Istatistikler data',
	'perms_allowstat'		=> 'Istatistikler',
	'perms_allowpostarticle'	=> 'Makale yazma',
	'perms_raterange'		=> 'Rating yapma',
	'perms_allowcommentpost'	=> 'Yorumlara katılma',
	'perms_allowat'			=> 'Kişi @ sayısı izni!',
	'perms_allowreplycredit'	=> 'Teşvik cevaplama',
	'perms_allowposttag'		=> 'Etiket kullanımı',
	'perms_allowcreatecollection'	=> 'Albüm sayısı',
	'perms_allowsendpm'		=> 'ÖM izni',
	'perms_maximagesize'		=> 'Resim maximum boyutu',
	'perms_allowmediacode'		=> 'Multimedya kullanımı',

	'join_topic'		=> 'Konu kat',
	'join_poll'		=> 'Anket kat',
	'buy_trade'		=> 'Ticaret kat',
	'join_reward'		=> 'Ödül kat',
	'join_activity'		=> 'Etkinlik kat',
	'join_debate'		=> 'Tartışma kat',
	'at_invite'		=> '@arkadaşlarım',

	'lower'			=> 'Daha az',
	'higher'		=> 'Daha yüksek',
	'report_msg_your'	=> 'Sizin',
	'report_noreward'	=> 'ödül yapmaz',
	'activity_viewimg'	=> 'Bakınız',
	
	'crime_postreason'	=> '{reason} &nbsp; <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">ayrıntılar</a>',
	'crime_reason'		=> '{reason}',

	'connectguest_message_search'	=> array('Giriş yapmadınız', 'Bağlı'),
	'connectguest_message_replace'	=> array('Bilgilerinizi <a href="member.php?mod=connect" target="_blank">geliştirin</a> veya<a href="member.php?mod=connect&ac=bind" target="_blank"> hesabı ile bağlanın</a>', 've <a href="member.php?mod=connect" target="_blank">bilgi geliştirin</a>»ò<a href="member.php?mod=connect&ac=bind" target="_blank"> hesabı ile bağlanın</a>'),
	'connectguest_message_mobile_search'	=> array('Not logged in', 'Logged'),//array('尚未登录', '先登录'),
	'connectguest_message_mobile_replace'	=> 'Provide your account information or Bind existing account, ',//'在电脑版完善资料或绑定已有帐号，',

	'avatar'		=> 'Avatar',
	'signature'		=> 'İmza',
	'custom_title'		=> 'Özel başlık',

	'forum_guide'		=> 'Rehber',

	'patch_site_have'	=> 'Siteniz',
	'patch_is_fixed'	=> 'Güvenlik açıkları, sabit olmuştur',
	'patch_need_fix'	=> 'Güvenlik açıkları, düzeltiniz lütfen',
	'patch_fixed_status'	=> 'Giderilmiştir',
	'patch_unfix_status'	=> 'Onarılamadı',
	'patch_fix_failed_status'	=> 'Onarılma başarısız',
	'patch_fix_right_now'	=> 'Acil onarılması gerekir',
	'patch_view_fix_detail'	=> 'Ayrıntılar',
	'patch_name'		=> 'Güvenlik açığı',
	'patch_dateline'	=> 'Tarih',
	'patch_status'		=> 'Mevcut durum',
	'patch_close'		=> 'Kapat',

	'plugin_title'		=> 'Güncelleme hatırlatma uygula',
	'plugin_memo'		=> 'Do you have <span class="xi1">{number}</span>  lines of application of available updates',
	'plugin_link'		=> 'Şimdi güncelleştir',

// Added by Valery Votintsev, codersclub.org
	'poll_reply_no_perms'	=> 'Bu anketi cevaplayamazsın',//'您不能对自己的回帖进行投票',
	'poll_replyed_already'	=> 'Bu anketi daha önce  cevapladınız',//'您已经对此回帖投过票了',
	'poll_voted_ok'		=> 'Oyalama başarılı',//'投票成功',
);

