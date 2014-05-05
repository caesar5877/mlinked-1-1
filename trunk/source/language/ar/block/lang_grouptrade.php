<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_grouptrade.php by Valery Votintsev at sources.ru
 *      Arabic by Khalid El-Nahhal, http://www.ar-discuz.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'grouptrade_fids'		=> 'مجموعات محددة',//'指定群组',
	'grouptrade_fids_comment'	=> 'إستخدام "," للفصل بين أرقام المجموعات',//'设置允许参与新帖调用的群组，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'grouptrade_gtids'		=> 'أقسام المجموعة',//'群组分类',
	'grouptrade_gtids_comment'		=> 'Set the category of group, use CTRL to select groups',//'设置群组所在分类，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'grouptrade_uids'		=> 'أرقام الأعضاء',//'用户UID',
	'grouptrade_uids_comment'	=> 'إستخدم الفاصلة للفصل بين المتعدد.',//'设置要指定显示的用户UID，多个UID请用半角逗号“,”隔开。',
	'grouptrade_startrow'		=> 'صف البدء',//'起始数据行数',
	'grouptrade_startrow_comment'	=> 'إذا كنت بحاجة لتعيين صف البدء,الرجاء إدخال الرقم, 0 هو الصف الأول',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'grouptrade_items'		=> 'الصفوف',//'显示数据条数',
	'grouptrade_items_comment'	=> 'حدد عدد الصفوف التي تريد عرضها , يجب أن تكون أكبر من 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'grouptrade_titlelength'	=> 'طول العنوان',//'标题最大字节数',
	'grouptrade_titlelength_comment'	=> 'حدد الحد الأقصى من طول العنوان , إذا كان العنوان أكبر من القيمة سيتم قصه تلقائي , ضع 0 لتعطيل الخاصية',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'grouptrade_fnamelength'		=> 'طول عنوان المنتدى',//'标题最大字节数包含版块名称',
	'grouptrade_fnamelength_comment'	=> 'تعيين الحد الأقصى من طول عنوان المنتدى',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'grouptrade_summarylength'		=> 'طول الملخص',//'主题简短内容文字数',
	'grouptrade_summarylength_comment'	=> 'تعيين مول عنوان الملخص , إستعمل القيمة 0 لإستخدام القيمة الافتراضية وهي (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'grouptrade_tids'		=> 'مواضيع محددة',//'指定主题',
	'grouptrade_tids_comment'		=> 'Set the specified threads tid you want to display, use "," to seperate tids',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'grouptrade_keyword'		=> 'الكلمات الدلالية',//'标题关键字',
	'grouptrade_keyword_comment'	=> 'تعيين الكلمات الدلالية المستخدمة.<br />يمكنك إستعمال "*"  في الكلمات الدلالية.<br />إذا كنت تريد أن تستخدم بعض الكلمات الدلالية في نفس الوقت, يمكنك إستعمال  "AND". مثال : win32 AND unix.<br />إذا كنت تريد أن تستخدم كلمة واحدة من الكلمات الدلالية يمكنك إستعمال "|" أو "OR".مثال : win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'grouptrade_typeids'		=> 'أنواع التجارة',//'主题分类',
	'grouptrade_typeids_comment'	=> 'حدد أنواع خاصة من المواضيع . ملاحظة : حدد الكل أو لا تحدد الكل لتعطيل التصفية',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_typeids_all'	=> 'كل أنواع المواضيع',//'全部的主题分类',
	'grouptrade_sortids'		=> 'أرقام الترتيب(الأقسام?)',//'分类信息',
	'grouptrade_sortids_comment'		=> 'Set the thread classification. Note: Select All or None for disable filtering',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_sortids_all'	=> 'كل الأقسام',//'全部的分类信息',
	'grouptrade_digest'		=> 'تصفية حسب التمييز',//'精华主题过滤',
	'grouptrade_digest_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_digest_0'		=> 'موضوع عادي',//'普通主题',
	'grouptrade_digest_1'		=> 'مميز 1',//'精华 I',
	'grouptrade_digest_2'		=> 'مميز 2',//'精华 II',
	'grouptrade_digest_3'		=> 'مميز 3',//'精华 III',
	'grouptrade_stick'		=> 'تصفية حسب التثبيت',//'置顶主题过滤',
	'grouptrade_stick_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_stick_0'		=> 'موضوع عادي',//'普通主题',
	'grouptrade_stick_1'		=> 'تثبيت 1',//'置顶 I',
	'grouptrade_stick_2'		=> 'تثبيت 2',//'置顶 II',
	'grouptrade_stick_3'		=> 'تثبيت 3',//'置顶 III',
	'grouptrade_special'		=> 'تصفية حسب المواضيع الخاصة',//'特殊主题过滤',
	'grouptrade_special_comment'		=> 'Select specific thread range. Note: Select All or None for disable filtering',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'grouptrade_special_1'		=> 'موضوع إستطلاع',//'投票主题',
	'grouptrade_special_2'		=> 'موضوع تجارة/منتج',//'商品主题',
	'grouptrade_special_3'		=> 'موضوع طلب',//'悬赏主题',
	'grouptrade_special_4'		=> 'موضوع فعالية',//'活动主题',
	'grouptrade_special_5'		=> 'موضوع تحدي',//'辩论主题',
	'grouptrade_special_0'		=> 'موضوع عادي',//'普通主题',
	'grouptrade_special_reward'	=> 'تصفية حسب الطلب',//'悬赏主题过滤',
	'grouptrade_special_reward_comment'	=> 'حدد حالة الطلب',//'设置特定类型的悬赏主题',
	'grouptrade_special_reward_0'	=> 'الكل',//'全部',
	'grouptrade_special_reward_1'	=> 'منتهي',//'已解决',
	'grouptrade_special_reward_2'	=> 'نشيط',//'未解决',
	'grouptrade_recommend'		=> 'تصفية حسب الإستحسان',//'推荐主题过滤',
	'grouptrade_recommend_comment'		=> 'Display only recommended threads',//'设置是否只显示推荐的主题',
	'grouptrade_orderby'		=> 'ترتيب حسب',//'主题排序方式',
	'grouptrade_orderby_comment'		=> 'Set the ordering of threads',//'设置以哪一字段或方式对主题进行排序',
	'grouptrade_orderby_lastpost'	=> 'آخر مشاركة',//'按最后回复时间倒序排序',
	'grouptrade_orderby_dateline'	=> 'وقت البدء',//'按发布时间倒序排序',
	'grouptrade_orderby_replies'	=> 'الردود',//'按回复数倒序排序',
	'grouptrade_orderby_views'	=> 'المشاهدات',//'按浏览次数倒序排序',
	'grouptrade_orderby_heats'	=> 'النشاط',//'按热度倒序排序',
	'grouptrade_orderby_recommends'	=> 'الإستحسان',//'按主题评价倒序排序',
	'grouptrade_orderby_hourviews'	=> 'المشاهدات مع الوقت المحدد',//'按指定时间内浏览次数倒序排序',
	'grouptrade_orderby_todayviews'	=> 'مشاهدات اليوم',//'按当天浏览次数倒序排序',
	'grouptrade_orderby_weekviews'	=> 'مشاهدات منذ أسبوع',//'按本周浏览次数倒序排序',
	'grouptrade_orderby_monthviews'	=> 'مشاهدات منذ شهر',//'按当月浏览次数倒序排序',
	'grouptrade_orderby_hours'		=> 'حدد الوقت (بالساعات)',//'指定时间(小时)',
	'grouptrade_orderby_hours_comment'	=> 'Set the specific time of views in',//'指定时间内浏览次数倒序排序的时间值',
	'grouptrade_orderby_todayhots'	=> 'نشيط اليوم',//'按当天累计售出数倒序排序',
	'grouptrade_orderby_weekhots'	=> 'نشيط منذ أسبوع',//'按本周累计售出数倒序排序',
	'grouptrade_orderby_monthhots'	=> 'نشيط منذ شهر',//'按当月累计售出数倒序排序',
	'grouptrade_price_add'		=> ' إضافي ',//' 附加 ',
	'grouptrade_place'		=> 'الامكنة',//'活动地点',
	'grouptrade_class'		=> 'النوع',//'活动类型',
	'grouptrade_gender'		=> 'الجنس',//'性别要求',
	'grouptrade_gender_0'		=> 'غير محدد',//'不限',
	'grouptrade_gender_1'		=> 'ذكر',//'男',
	'grouptrade_gender_2'		=> 'أنثى',//'女',
	'grouptrade_orderby_weekstart'	=> 'بدء منذ أسبوع',//'按一周内活动开始时间排序',
	'grouptrade_orderby_monthstart'	=> 'بدء منذ شهر',//'按一月内活动开始时间排序',
	'grouptrade_orderby_weekexp'	=> 'إنتهى منذ أسبوع',//'按一周内报名截止时间排序',
	'grouptrade_orderby_monthexp'	=> 'إنتهى منذ شهر',//'按一月内报名截止时间排序',
	'grouptrade_gviewperm'		=> 'عرض صلاحيات المجموعة',//'群组浏览权限',
	'grouptrade_gviewperm_nolimit'	=> 'غير محدد',
	'grouptrade_gviewperm_only_member'	=> 'الأعضاء فقط',//'仅成员',
	'grouptrade_gviewperm_all_member'	=> 'الكل',//'所有人',
	'grouptrade_highlight'		=> 'تسليط الضوء على القيمة التي تم الحصول عليها',
);

