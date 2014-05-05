<?php

/**---
 *	  [Discuz!] (C)2001-2099 Comsenz Inc.
 *	  This is NOT a freeware, use is subject to license terms
 *
 *	  $Id: lang_admincp_cloud.php by Valery Votintsev at sources.ru
 *	Translated to Korean by ionobgy
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
$extend_lang = array
(
	'header_cloud'		=> '클라우드',
	'header_navcloud'	=> 'Discuz!클라우드',
	'nav_cloud'		=> 'Discuz!클라우드',

	'menu_cloud_open'	=> 'Discuz!클라우드 열기',
	'menu_cloud_upgrade'	=> 'Discuz!클라우드 열기',
	'menu_cloud_applist'	=> '클라우드 메인',
	'menu_cloud_siteinfo'	=> '사이트 정보',
	'menu_cloud_doctor'	=> '진단도구',//'诊断工具',

	'menu_setting_manyou'		=> '만유설치',
	'menu_setting_qqconnect'	=> 'QQ 연결설정',

	'menu_cloud_manyou'	=> '만유',
	'menu_cloud_connect'	=> 'QQ 연결',
	'menu_cloud_search'	=> '가로검색',//'纵横搜索',
	'menu_cloud_stats'	=> 'Tencent분석',//'腾讯分析',
	'menu_cloud_security'	=> '클라우드보안',//'防水墙',
	'menu_cloud_smilies'	=> 'SOSO이모티콘',//'SOSO表情',
	'menu_cloud_qqgroup'	=> '커뮤니티 QQ그룹',//'社区QQ群',
	'menu_cloud_union'	=> 'Discuz연맹',//'Discuz!联盟',
	'menu_cloud_storage'	=> 'Cloud 저장',//'旋风存储',
	'menu_cloud_mobile'	=> 'Mobile클라이언트',//'手机客户端',

	'close'			=> '끄기',//'关闭',
	'continue'		=> '계속',//'继续',
	'message_title'		=> '메시지',//'提示信息',
	'jump_to_cloud'		=> ' Discuz!클라우드 플렛폼 (http://cp.discuz.qq.com) 로 이동되여 개통과정을 완성합니다.',//'您即将转向Discuz!云平台（http://cp.discuz.qq.com）完成开通流程',
	'cloud_waiting'		=> '잠시만 기다려 주세요...',//'请稍候...',

	'cloud_status_error'	=> '에러발생.사이트 정보 분실. 의문점 있을시 방문 <a href="http://www.discuz.net/forum-3926-1.html" target="_blank">Official Forum</a> for help.',//'出了点小错，可能由于站点信息丢失导致Discuz!云平台服务出现异常，如果有疑问请访问<a href="http://www.discuz.net/forum-3926-1.html" target="_blank">官方论坛</a>寻求帮助',

	'cloud_timecheck'	=> '서버타임체크',//'服务器时间检查',
	'cloud_introduction'	=> '설명보기',//'查看介绍',
	'cloud_confirm_open'	=> '개통확인',//'确认开通',
	'cloud_confirm_upgrade'	=> '업그레이드 확인',//'确认升级',
	'cloud_page_loading'	=> '페이지 로딩중 ...',//'页面加载中...',
	'cloud_time_out'	=> ' Discuz! cloud platform 방문할수 없음<a href="javascript:;" onclick="location.reload()">새로고침</a>.',//'您无法访问Discuz!云平台，请尝试<a href="javascript:;" onclick="location.reload()">刷新</a>。',
	'cloud_unknown_dns'	=> '귀하의 사이트는 지금 Discuz! cloud platform 연결이 안됩니다, 서버네트워크 설정을 확인해주세요, <a href="http://cp.discuz.qq.com/faq?fId=1305690058" target="_blank">도움말 보기</a>. 문제점 해결이 안되면 <a href="http://www.discuz.net/forum-3926-1.html" target="_blank">공식포럼</a> 을 방문하셔서 도움을 요청하세요.',//'您的站点目前无法连接Discuz!云平台，请检查您服务器网络设置，<a href="http://cp.discuz.qq.com/faq?fId=1305690058" target="_blank">查看帮助</a>。如果有疑问，请访问<a href="http://www.discuz.net/forum-3926-1.html" target="_blank">官方论坛</a>求助',

	'cloud_category'	=> '사이트 카테고리 설정',//'设置站点分类',
	'cloud_site_name'	=> '사이트 명',//'站点名称',
	'cloud_site_url'	=> '사이트 URL',//'站点URL',
	'cloud_site_category'	=> '사이트 카테고리',//'站点分类',
	'cloud_select'		=> '선택',//'请选择',
	'cloud_agree_protocal'	=> '동의',//'我已仔细阅读并同意',
	'read_protocal'		=> 'Discuz! cloud platform service using protocol',//'《Discuz!云平台服务使用协议》',
	'cloud_will_open'	=> '개통',//'我要开通',
	'cloud_will_upgrade'	=> '업그레이드',//'我要升级',
	'cloud_protocal'	=> 'Discuz! cloud platform service agreement',//'Discuz!云平台服务协议',
	'cloud_select_category'	=> '사이트의 카테고리를 선택해 주세요',//'请选择站点分类',
	'cloud_select_sub_category'	=> '하위 카테고리를 선택해 주세요.',//'请选择二级分类',
	'cloud_select_return'	=> '사이트 카테고리를 선택해주세요, 돌아가기',//'请选择站点分类，返回',
	'cloud_open_success'	=> 'Discuz! cloud platform 개통 성공',//'Discuz!云平台开通成功',
	'cloud_upgrade_success'	=> 'Discuz! cloud platform 업그레이드 성공',//'Discuz!云平台升级成功',
	'cloud_network_busy'	=> '네트워크 사용중이오니 잠시후 다시 시도해주세요, 원인:<br />{errorMessage}<br />(ERRCODE: {errorCode})',//'网络繁忙，稍后请重新操作，原因：<br />{errorMessage} (ERRCODE:{errorCode})',
	'cloud_turnto_applist'	=> '귀하의 사이트는 이미 Discuz!클라우드 플랫폼 개통되였으며, 플랫폼 홈으로 이동됩니다.',//'您的站点已开通Discuz!云平台，现跳转到平台首页',
	'cloud_site_id'		=> '사이트 ID',//'站点ID',
	'cloud_api_ip_btn'	=> '클라우드 플랫폼 인터페이스ip 설정',//'设置云平台接口IP',
	'cloud_api_ip'		=> '클라우드 플랫폼 인터페이스ip',//'云平台接口IP',
	'cloud_api_ip_comment'	=> 'DNS확인 문제로 사이트 서버가 클라우드 플랫폼 인터페이스에 연결할 수없을 경우, api.discuz.qq.com의 IP주소를 입력해주세요, <a href="http://cp.discuz.qq.com/faq?fId=1304068911" target="_blank">도움말 보기</a>',//'若站点服务器由于DNS解析问题无法连接到云平台接口，请填写api.discuz.qq.com的IP地址，<a href="http://cp.discuz.qq.com/faq?fId=1304068911" target="_blank">查看帮助</a>',
	'cloud_manyou_ip'	=> '응용프로그램 인터페이스IP',//'漫游接口IP',
	'cloud_manyou_ip_comment'	=> 'DNS확인 문제로 사이트 서버가 응용프로그램 인터페이스에 연결할 수없을 경우, api.manyou.com의 IP주소를 입력하시고, <a href="admin.php?action=cloud&operation=doctor">진단도구</a> 로 검사해주세요, <a href="http://faq.comsenz.com/viewnews-400" target="_blank">도움말 보기</a>',//'若站点服务器由于DNS解析问题无法连接到漫游接口，请填写api.manyou.com的IP地址，使用<a href="admin.php?action=cloud&operation=doctor">诊断工具</a>检测，<a href="http://faq.comsenz.com/viewnews-400" target="_blank">查看帮助</a>',
	'cloud_connect_api_ip'		=> 'QQ 인터넷 인터페이스 IP',//'QQ互联接口IP',
	'cloud_connect_api_ip_comment'	=> '사이트 서버 DNS리졸브 문제로 QQ 인터넷 인터페이스에 연결이 안될데 openapi.qzone.qq.com의 IP 주소를 입력하여 주세요. <a href="admin.php?action=cloud&operation=doctor">진단도구</a>로 검사, <a href="http://cp.discuz.qq.com/faq?fId=1316571929&ADTAG=CP.CLOUD.FAQ.FID" target="_blank">도움말</a>',//'若站点服务器由于DNS解析问题无法连接到QQ互联接口，请填写openapi.qzone.qq.com的IP地址，使用<a href="admin.php?action=cloud&operation=doctor">诊断工具</a>检测，<a href="http://cp.discuz.qq.com/faq?fId=1322796393&ADTAG=CP.CLOUD.FAQ.FID" target="_blank">查看帮助</a>',
	'cloud_ipsetting_success'	=> '클라우드 플렛폼 인터넷 인터페이스 IP 설정 완성',//'云平台接口IP设置成功',
	'cloud_open_first'	=> '우선 Discuz! 클라우드 폼플렛을 개통하세요.',//'请先开通Discuz!云平台',
	'cloud_sync'		=> '사이트 정보 동기화',//'同步站点信息',
	'cloud_sync_success'	=> '사이트 정보 동기화 성공',//'站点信息同步成功',
	'cloud_sync_failure'	=> '사이트 정보 동기화 실패. 원인:<br />{errorMessage}<br />(ERRCODE: {errorCode})<br /><br />의문점 있을시 <a href="http://www.discuz.net/forum-3926-1.html" target="_blank">공식포럼</a>방문하시기 바랍니다.',//'站点信息同步失败，原因：<br />{errorMessage} (ERRCODE:{errorCode})<br /><br />如有疑问，请访问<a href="http://www.discuz.net/forum-3926-1.html" target="_blank">官方论坛</a>寻求帮助',
	'cloud_resetkey'	=> '사이트 KEY 교체',//'更换站点Key',
	'cloud_reset_success'	=> '사이트 KEY 교체 성공',//'站点Key更换成功',

	'cloud_siteinfo_tips'	=> '<li>사이트 이름 혹은 URL 변동이 있을시 "사이트 정보 동기화"를 클릭하여 주세요.</li><li>Site Key is the site to communicate with the cloud platform, authentication key, If the recent leakage of dangerous operation site Key and other information, Please click the "Replace Site Key " button. <span style="color:red;">Use this feature with caution.</span></li>',//'<li>如果站点名称或者站点URL有变动，请点击“同步站点信息”按钮。</li><li>站点Key是站点与云平台通信的验证密钥，若近期有危险操作泄漏站点Key等信息，请点击“更换站点Key”按钮。<span style="color:red;">请谨慎使用此功能。</span></li>',

	'cloud_doctor_normal'	=> '정상',//'正常',
	'cloud_doctor_tips'	=> '<li>Discuz! 클라우드 플랫폼 진단 공고는 사이트 상태분석용으로 클라우드 플랫폼과의 정상 통신등 체할수 있습니다.</li><li>사이트 아이디는 귀하의 사이트가 클라우드 플랫폼에서의 유일한 표식으로 기타 사이트와 같은세트의 아이디와 사이트 통신 키를 사용하지 말아 주세요.</li>',//'<li>Discuz!云平台诊断工具是帮助您分析站点上的状况，是否能与云平台正常通信等功能。</li><li>站点ID是您的站点在云平台的唯一标识，请勿和其他站点共用一套站点ID和站点通信KEY</li>',

	'cloud_doctor_setidkey'		=> 'Discuz! 사이트 ID 와 KEY를 수정',//'修改Discuz!上的站点ID和KEY',
	'cloud_doctor_connect_fix'	=> '<a href="./admin.php?action=cloud&operation=doctor&op=fixGuest">수정</a>',//'<a href="./admin.php?action=cloud&operation=doctor&op=fixGuest">点击修复</a>',
	'cloud_doctor_setidkey_tips'	=> '<li style="color:red">Discuz! 사이트 ID, KEY를 수정하시면 통신,서명등 에러 혹은 기타 문제가 발생할수 있음으로 공식엔지니어의 협조하에 수정작업을 진행하여 주세요.</li><li style="color:red">ID, KEY 수정전 common_setting테이블을 백업하세요.</li>',//'<li style="color:red">修改Discuz!上的站点ID和KEY，可能会导致通信错误、签名错误以及其他的故障，请勿在没有官方人员指导的情况下修改。</li><li style="color:red">修改ID、KEY和状态前，请先备份论坛的common_setting表。</li>',
	'cloud_site_key'		=> '사이트 통신 KEY',//'站点通信KEY',
	'cloud_site_key_safetips'	=> '(보안문제로 전부 숨김처리)',//'(出于安全考虑，部分隐藏)',
	'cloud_site_key_comment'	=> '사이트 키를 공개하지 말아 주세요.',//'站点通信KEY请勿对外公布',
	'cloud_site_status'		=> '상태',//'状态',
	'cloud_idkeysetting_success'	=> '사이트 ID / KEY 상태 설정 성공 ',//'站点ID/KEY状态设置成功 ',
	'cloud_idkeysetting_siteid_failure'	=> '사이트 아이디는 필히 수자여야 하며 임의로 수정하시 말아 주세요.',//'站点ID必须为纯数字，请勿随意修改。如有必要，请在客服人员协助下修改。',
	'cloud_idkeysetting_sitekey_failure'	=> 'Site communication KEY must be 32 characters in length, do not be modified. If necessary, changes in customer service assistance.',//'站点通信KEY必须为32位，请勿随意修改。如有必要，请在客服人员协助下修改。',

	'cloud_doctor_result_success'	=> '<img align="absmiddle" src="static/image/admincp/cloud/right.gif" />',
	'cloud_doctor_result_failure'	=> '<img align="absmiddle" src="static/image/admincp/cloud/wrong.gif" /> ',

	'cloud_doctor_api_test_other'	=> '클라우드 폼플렛의 기타 인터페이스를 테스트',//'测试云平台其他接口IP',
	'cloud_doctor_manyou_test_other'	=> '게임 기타 인터페이스 IP 테스트 IP',//'测试漫游其他接口IP',
	'cloud_doctor_qzone_test_other'	=> 'QQ 인터넷 기타 인터페이스 IP 테스트',//'测试QQ互联其他接口IP',
	'cloud_doctor_api_test_success'	=> 'Interface requests: %s, successfully: %s, Took %01.3f seconds %s',//'%s 请求接口 %s 成功，耗时 %01.3f 秒 %s',
	'cloud_doctor_api_test_failure'	=> 'Interface requests: %s, failed: %s, Please consult the space provider %s',//'%s 请求接口 %s 失败，请咨询空间商 %s',
	'cloud_doctor_status_0'		=> '클라우드 폼플렛 아직 개통 안함',//'尚未开通云平台',
	'cloud_doctor_status_1'		=> '클라우드 폼플렛 이미 개통',//'已开通云平台',
	'cloud_doctor_status_2'		=> '클라우드 폼플렛 등록, 기다림 완성',//'注册云平台，等待完成',

	'cloud_doctor_title_status'	=> '시스템 상태',//'系统状态',
	'cloud_doctor_modify_siteidkey'	=> '수동으로 사이트 ID 수정/KEY',//'手动修改站点ID/KEY',
	'cloud_doctor_close_yes'	=> 'Is ON (front Connect will not be displayed)',//'是 (前台Connect将不显示)',

	'cloud_site_version'		=> '제품버전',//'产品版本',
	'cloud_site_release'		=> '제품발포일자',//'产品发布日期',

	'cloud_doctor_title_result'	=> '검사결과 (<a href="#" onClick="self.location.reload();">재검사</a>)',//'检测结果(<a href="#" onClick="self.location.reload();">重新检测</a>)',

	'cloud_doctor_fsockopen_function'	=> 'fsockopen 함수',//'fsockopen函数',
	'cloud_doctor_gethostbyname_function'	=> 'DNS 네님 이졸브 함수',//'DNS解析函数',
	'cloud_doctor_function_disable'		=> '함수 금지됨. 공간상 연락 바람.',//'函数被禁用，请联系空间商',

	'cloud_doctor_dns_api'			=> '클라우드 플랫폼 도매인 네임 리즐브',//'云平台域名解析',
	'cloud_doctor_dns_api_test'		=> '클라우드 플랫폼 주 인터페이스 테스트',//'云平台主接口测试',
	'cloud_doctor_other_api_test'		=> '클라우드 플랫폼 기타 인터페이스 테스트',//'云平台其他接口测试',
	'cloud_doctor_dns_manyou'		=> '어플 도매인 네임 리졸브',//'漫游域名解析',
	'cloud_doctor_dns_manyou_test'		=> '게임 주 인터페이스 테스트',//'漫游主接口测试',
	'cloud_doctor_other_manyou_test'	=> '게임 기타 인터페이스 테스트',//'漫游其他接口测试',
	'cloud_doctor_dns_qzone'		=> 'QQ 인터넷 인터페이스 도매인 네임 리졸브',//'QQ互联域名解析',
	'cloud_doctor_dns_qzone_test'		=> 'QQ 인너텟 주 인터페이스 테스트',//'QQ互联主接口测试',
	'cloud_doctor_other_qzone_test' 	=> 'QQ 인터넷 기타 인터페이스 테스트',//'QQ互联其他接口测试',
	'cloud_doctor_site_test'		=> '클라우드 플랫폼에서 사이트까지 테스트',//'云平台到站点测试',
	'cloud_doctor_time_check'		=> '<img src="{imgdir}/loading.gif" class="vm"> 잠시만 기다려 주세요...',//'<img src="{imgdir}/loading.gif" class="vm"> 请稍候...',
	'cloud_doctor_site_test_result'		=> '<div id="cloud_doctor_site_test_result_div"><img src="{imgdir}/loading.gif" class="vm"> 잠시만 기다려 주세요...</div>',//'<div id="cloud_doctor_site_test_result_div"><img src="{imgdir}/loading.gif" class="vm"> 请稍候...</div>',

	'cloud_doctor_setting_ip'		=> '수동 IP 설정:',//'手动设置的IP：',

	'cloud_doctor_dns_success'		=> '%s DNS resolution IP: %s %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">Sets the interface IP</a>',//'%s DNS解析的IP：%s %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">设置接口IP</a>',
	'cloud_doctor_dns_failure'		=> '<img align="absmiddle" src="static/image/admincp/cloud/wrong.gif" /> %s DNS resolution failure %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">Sets the interface IP</a>',//'<img align="absmiddle" src="static/image/admincp/cloud/wrong.gif" /> %s DNS解析失败 %s <a href="javascript:;" onClick="showWindow(\'cloudApiIpWin\', \'%s?action=cloud&operation=siteinfo&anchor=cloud_ip&callback=doctor\'); return false;">设置接口IP</a>',

	'cloud_doctor_title_plugin'		=> 'Plugin detection system',//'系统插件检测',
	'cloud_doctor_system_plugin_status'	=> 'System plug-in status',//'系统插件状态',
	'cloud_doctor_system_plugin_list'	=> '<a href="admin.php?action=plugins">View the list of plugins and version</a>',//'<a href="admin.php?action=plugins">查看插件列表和版本</a>',
	'cloud_doctor_system_plugin_status_false'	=> ' System plugin is not initialized (left menu is not displayed) <a href="misc.php?mod=initsys&formhash={formhash}" target="_doctor_initframe" onClick="$(\'_doctor_initframe\').onload = function () {self.location.reload();};">Click for Repair</a><iframe id="_doctor_initframe" name="_doctor_initframe" src="" width="0" height="0" style="display:none;"></iframe>',//' 系统插件未初始化 <a href="misc.php?mod=initsys&formhash={formhash}" target="_doctor_initframe" onClick="$(\'_doctor_initframe\').onload = function () {self.location.reload();};">点击修复</a><iframe id="_doctor_initframe" name="_doctor_initframe" src="" width="0" height="0" style="display:none;"></iframe>',
	'cloud_doctor_plugin_module_error'	=> 'The modules field value in common_plugin table is not correct',//'common_plugin表modules字段值不正确',

	'cloud_doctor_title_connect'		=> 'QQ connection testing',//'QQ互联检测',
	'cloud_doctor_connect_app_id'		=> 'QQ connection appid',//'QQ互联appid',
	'cloud_doctor_connect_guestgroup'	=> 'QQ Internet visitors user group',//'QQ互联游客用户组',
	'cloud_doctor_connect_app_key'		=> 'QQ connection appkey',//'QQ互联appkey',
	'cloud_doctor_connect_reopen'		=> 'The current site appid/appkey lost, please <a href="admin.php?action=cloud&operation=applist">Re-open</a> the QQ connection',//'当前站点appid/appkey丢失，请<a href="admin.php?action=cloud&operation=applist">重新开通</a>QQ互联',

	'cloud_application_close'	=> 'Your site is not turned on the cloud services, please Discuz! background cloud platform, open label',//'您的站点未开启此项云服务，请到Discuz!后台云平台标签下开启',
	'cloud_application_disable'	=> 'Your site has been disabled to use the cloud platform, if you have questions, please visit <a href="http://www.discuz.net/forum.php?gid=3923" target="_blank">Official Forum</a> for help',//'您的站点已被禁止使用此项云服务，如果有疑问请访问<a href="http://www.discuz.net/forum.php?gid=3923" target="_blank">官方论坛</a>寻求帮助',

	'cloud_search_tips'		=> '<li>If open the roaming search feature, users can use the search function on roaming.</li>',//'<li>开启漫游搜索功能后，用户可以使用基于漫游的搜索功能。</li>',

	'cloud_stats'			=> 'Tencent analysis',//'腾讯分析',
	'cloud_stats_tips'		=> '<li>Tencent analysis - the most professional community analysis, community development to provide data for your support.</li><li>When opening Tencent analysis, at the next day you can view the previous day statistics.</li><li><a href="http://stats.discuz.qq.com/" target="_blank"><font color="blue">View detailed data</font></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cp.discuz.qq.com/faq?fcId=4" target="_blank"><font color="blue">Understanding Tencent analysis</font></a></li>',//'<li>腾讯分析－最专业的社区分析，为您的社区发展提供数据支持。</li><li>开通腾讯分析后，次日可以查看到前一日的数据。</li><li><a href="http://stats.discuz.qq.com/" target="_blank"><font color="blue">查看详细数据</font></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cp.discuz.qq.com/faq?fcId=4" target="_blank"><font color="blue">了解腾讯分析</font></a></li>',
	'cloud_stats_status'		=> 'Enable Tencent analysis',//'启用腾讯分析',
	'cloud_stats_icon_set'		=> 'Select the style (icon or text displayed in the forum lower right part)',//'选择样式（图标或文字将显示在论坛右下角）',
	'cloud_stats_icon_none'		=> 'Do not display icons and text',//'不显示图标和文字',
	'cloud_stats_icon_word9'	=> 'Tencent analysis',//'腾讯分析',
	'cloud_stats_icon_word10'	=> 'Site statistics',//'网站统计',
	'cloud_stats_setting'		=> 'Settings',//'设置',
	'cloud_stats_summary'		=> 'Site Overview',//'网站概况',

	'cloud_smilies'			=> 'SOSO smiles',//'SOSO表情',
	'cloud_smilies_tips'		=> '<li>Search to make the world look for the site brings a lot of fun and experience.</li><li>Omit the tedious process of uploading smiles, seamless "illegal"QQ expression to your website, forum expression is no longer monotonous.</li>',//'<li>搜尽天下表情，为网站带来无穷的乐趣与体验。</li><li>省略繁琐的上传表情流程，无缝“偷渡”QQ表情到您的网站，论坛表情变得不再单调无味。</li>',

	'cloud_smilies_status'		=> 'Enable SOSO smiles',//'启用SOSO 表情',
	'cloud_storage'			=> 'Cloud storage',//'旋风存储',
	'cloud_storage_tips'		=> 'For saving your sitee space and bandwidth, you can allow your users to enjoy the high-speed Cloud storage for large files</li><li>Cloud storage supports for high-speed upload and download. Single file attachment upload size is up to 2GB. The cloud attachment is permanently effective and enable to reduce the cost of your Forum hosting.</li><li>为网站节省空间带宽，让用户享受超大文件的高速存储，上传下载尽在云端。</li><li>体验高速上传下载，支持单个文件高达2GB的附件上传，附件永久有效，为论坛降低成本。</li>',

	'setting_manyou'			=> 'Roaming application settings',//'漫游应用设置',
	'setting_manyou_tips'			=> '<li>If open roaming applications, the user can choose a variety of applications (such as Texas Hold\'em, Bouncing Church, ten years at the station sword ...) for use.</li><li>Roaming applications provided by <a target="_blank" href="http://www.manyou.com/www/">MYOP open platform</a>, Manyou Open Platform (Manyou open platform / MYOP) Service is provided by Comsenz company provides open application development platform, enable the roaming service before, <a href="http://wiki.developer.manyou.com/wiki/index.php?title=MYOP%E7%BD%91%E7%AB%99%E6%9C%8D%E5%8A%A1%E5%8D%8F%E8%AE%AE&printable=yes" target="_blank">Read MYOP site service agreement</a></li>',//'<li>开启漫游应用功能后，用户可以自由选择各种不同的应用(诸如德克萨斯扑克、弹弹堂、十年一剑......)在站内进行使用。</li><li>漫游应用功能由 <a target="_blank" href="http://www.manyou.com/www/">MYOP开放平台</a> 提供， Manyou Open Platform(Manyou开放平台/MYOP)服务是由 Comsenz 公司为应用开发者提供的开放平台，启用漫游服务前，<a href="http://wiki.developer.manyou.com/wiki/index.php?title=MYOP%E7%BD%91%E7%AB%99%E6%9C%8D%E5%8A%A1%E5%8D%8F%E8%AE%AE&printable=yes" target="_blank">请先阅读MYOP网站服务协议</a></li>',
	'setting_manyou_base'			=> 'Basic settings',//'基本设置',
	'setting_manyou_base_status'		=> 'Enable roaming applications',//'启用漫游应用',
	'setting_manyou_base_status_comment'	=> 'Choose whether to open roaming applications. If you turn off roaming application, your site users will not use any roaming-based application',//'选择是否开启漫游应用。如果关闭漫游应用，您的网站用户将不能使用任何基于漫游的应用',
	'setting_manyou_search_status'		=> 'Enable Roaming search',//'启用漫游搜索',
	'setting_manyou_search_status_comment'	=> 'Roaming search is designed for Discuz! products and tailored to the efficient, full-text search service, does not used the site MySQL resources',//'漫游搜索是专为 Discuz! 产品量身定做的高效、全文搜索服务，无须网站的 MySQL 资源',
	'setting_manyou_search_invite'		=> 'Roaming search invitation code',//'漫游搜索邀请码',
	'setting_manyou_search_invite_comment'	=> 'This is currently in beta version, need only open roaming invitation code search, <a href="http://www.discuz.net/thread-1669366-1-1.html" target="_blank">Click here to apply for an invitation code</a>',//'目前处于测试阶段，需要输入邀请码方可开通漫游搜索，<a href="http://www.discuz.net/thread-1669366-1-1.html" target="_blank">点击这里申请邀请码</a>',
	'setting_manyou_base_status_no'		=> 'It is not on roaming, can not be managed.',//'尚未开启漫游功能，不能进行此管理。',
	'setting_manyou_base_ip'		=> 'Roaming applications IP',//'漫游应用的 IP',
	'setting_manyou_base_ip_comment'	=> 'Default is empty. If your server can not be used roaming application services because of DNS resolution problems, please fill out the application roaming IP address. <a href="http://faq.comsenz.com/viewnews-400" target="_blank">View roaming application IP</a>',//'默认为空。如果您的服务器因 DNS 解析问题无法使用漫游应用服务，请填写漫游应用的 IP 地址。<a href="http://faq.comsenz.com/viewnews-400" target="_blank">查看漫游应用的 IP</a>',
	'setting_manyou_base_close_prompt'	=> 'Close the roaming application update notification',//'关闭漫游应用的更新提示',
	'setting_manyou_base_close_prompt_comment'	=> 'If your site opened a roaming application of multi-application services, then the roaming application platform will automatically prompt to the administrator with new information. Turning off this feature, you will not get renewal reminders.',//'您的站点开启了漫游应用多应用服务后，当平台有了新的信息的时候漫游应用会自动提示给管理员。关闭本功能后，您将不再获取更新提示。',
	'setting_manyou_base_open_app_prompt'		=> 'Open Roaming Application Notice',//'开启漫游应用公告',
	'setting_manyou_base_open_app_prompt_comment'	=> 'When a new application platform is announced, then the user browser opens a pop-up window with a prompt similar to the roaming application update notifications',//'当平台有了新的应用公告时，用户打开浏览器的时候会弹出窗口提示，类似漫游应用更新提示',
	'setting_manyou_base_refresh'		=> 'Refresh roaming information',//'同步漫游信息',
	'setting_manyou_base_refresh_comment'	=> 'If you change the navigation name, or search settings, then you have to synchronize the roaming information.',//'如果更改了导航名称、搜索设置等，请同步漫游信息。',
	'setting_manyou_base_showgift_comment'	=> 'If you open the roaming application platform GIFT applications, you can display the page "Recommended gifts."',//'如果您开启了漫游应用平台的礼物应用后，可以在首页显示“推荐礼物”。',
	'setting_manyou_manage'			=> 'Roaming Application Management',//'漫游应用管理',
	'setting_manyou_search_manage'		=> 'Roaming Search Management',//'漫游搜索管理',

	'connect_menu_setting'			=> '기본설정',//'基本设置',
	'connect_menu_service'			=> '기타',//'其他',
	'connect_menu_stat'			=> '데이터 통계',//'数据统计',
	'connect_setting_allow'			=> 'Allow QQ Registration/Binding/Login Service',//'开启QQ注册/绑定/登录服务',
	'connect_setting_allow_comment'		=> 'If turned on, the user can use QQ account for login to the site, as well as do more related operations',//'开启后，用户可以通过QQ帐号登录站点，以及进行更多和QQ相关的操作',
	'connect_setting_siteid'		=> 'QQ binding site ID',//'QQ绑定站点ID',
	'connect_setting_sitekey'		=> 'QQ binding site key',//'QQ绑定站点密钥',
	'connect_setting_feed_allow'		=> 'Allow post synchronous push to the QQ space feed',//'开启发帖同步推送到QQ空间动态',
	'connect_setting_feed_allow_comment'	=> 'If enabled, users can synchronous push post to the QQ space feed, for show to the user friends in QQ space',//'开启后，用户发帖可以同步推送到QQ空间动态，展现给用户的QQ空间好友',
	'connect_setting_feed_fids'		=> 'Allow Push the forum IDs',//'允许推送的论坛版块',
	'connect_setting_feed_group'		=> 'Group are allowed to push',//'群组是否允许推送',
	'connect_setting_feed_group_comment'	=> 'Set the groups that can push published threads to QQ space feed',//'设置在群组发表的主题是否可以推送到QQ空间动态',
	'connect_setting_t_allow'		=> 'Allow synchronous push the post to Tencent microblogging',//'开启发帖同步推送到腾讯微博',
	'connect_setting_t_allow_comment'	=> 'If enabled, users can synchronously push posts to Tencent, and present it to the user microblogging listeners',//'开启后，用户发帖可以同步推送到腾讯微博，展现给用户的微博听众',
	'connect_setting_t_fids'		=> 'Allow Push the forum boards',//'允许推送的论坛版块',
	'connect_setting_t_group'		=> 'Allowed groups to push',//'群组是否允许推送',
	'connect_setting_t_group_comment'	=> 'Set the groups that can push threads published to Tencent microblogging',//'设置在群组发表的主题是否可以推送到腾讯微博',
	'connect_setting_t_reply_showauthor'		=> 'Display comments or broadcast link microblogging users',//'显示评论或转播的微博用户链接',
	'connect_setting_t_reply_showauthor_comment'	=> 'If set "Yes", Backflow will be marked in the content below comments or broadcast microblogging users nickname and microblogging address',//'设置"是"，回流时会在内容下方标注评论或转播的微博用户昵称和微博地址',
	'connect_setting_t_reply'		=> 'Allows microblogging comments and broadcast content reply',//'允许微博评论和转播内容回流',
	'connect_setting_t_reply_comment'	=> 'Tencent미니블로그로 덧글 푸시 혹은 공유 후 ',//'推送主题或分享主题到腾讯微博后，是否允许微博评论和转播内容回流',
	'connect_setting_like_allow'		=> '사이트 QQ 인증공간의 즐기는 링크 표시하기',//'显示本站QQ认证空间喜欢的链接',
	'connect_setting_like_allow_comment'	=> '사용자가 사이트 QQ 인증공간 링크를 클릭하면 즉시 팬이 되여 실시간 공간 피드를 확인할수 있습니다.',//'用户点击本站QQ认证空间喜欢的链接，将立即成为本站QQ认证空间的粉丝，随时收取认证空间的动态',
	'connect_setting_like_url'		=> '인증공간 QQ 넘버',//'认证空间QQ号码',
	'connect_setting_like_url_comment'	=> '인증 공간의 QQ넘버를 설정,인증요청 제출하시려면 <a href="http://opensns.qq.com/" target="_blank">클릭</a>',//'设置认证空间的 QQ 号码，提交认证申请请<a href="http://opensns.qq.com/" target="_blank">点击这里</a>',
	'connect_setting_turl_allow'		=> '사이트 공식 미니블로그 팔로잉 버튼 표시하기',//'显示本站官方微博快速收听按钮',
	'connect_setting_turl_allow_comment'	=> '사용자가 사이트 공식미니블로그 팔로잉 버튼을 클릭사면 설정하신 Tencent미니블로그 계정의 팔로어가 되여 실시간 미니블로그의 피드를 확인할수 있습니다.',//'用户点击本站官方微博快速收听按钮，将立即成为您所设置的腾讯微博帐号听众，随时收取微博的动态',
	'connect_setting_turl_qq'		=> '공식미니블로그 QQ 넘버',//'官方微博QQ号码',
	'connect_setting_turl_qq_comment'	=> '공식미니블로그 QQ 설정',//'设置官方微博的QQ号码',
	'connect_setting_turl_qq_failed'	=> '공식미니블로그 QQ 세팅 실패. QQ 요효성을 확인하시세요,',//'官方微博QQ号码设置失败，请确保该QQ号的有效性',
	'connect_setting_qshare_allow'		=> ' Q-Share 기능 오픈',//'开启Q-Share功能',
	'connect_setting_qshare_allow_comment'	=> '사용자가 임의로 선택한 게시물 내용의 글 혹은 이미지를 빠르고 쉽게 Tencent미니블로그로 이동 할수 있습니다.',//'用户选中帖子内容中的任何一段文本时，可方便快捷的将选中的文本内容和区域内图片转播到腾讯微博',
	'connect_setting_weibo_appkey'		=> 'Tencent open microblogging platform AppKey',//'腾讯微博开放平台AppKey',
	'connect_setting_weibo_appkey_comment'	=> 'Fill AppKey Tencent microblogging in the source field in the display settings information, it is a time to fill out. How to apply AppKey? Visit Tencent open microblogging platform, <a href="http://open.t.qq.com/apps_welcome.php" target="_blank">AppKey만들기</a>',//'填写AppKey将在腾讯微博中显示设置的来源字段信息，可不填写。怎样申请AppKey？请访问腾讯微博开放平台，<a href="http://open.t.qq.com/apps_welcome.php" target="_blank">创建应用获取AppKey</a>',
	'connect_member_info'			=> '사용자 정보',//'用户信息',
	'connect_member_bindlog'		=> 'QQ 바인딩 포스트',//'QQ绑定日志',
	'connect_member_bindlog_type'		=> '조작',//'操作',
	'connect_member_bindlog_username'	=> '사용자 명',//'用户名',
	'connect_member_bindlog_date'		=> '일자',//'日期',
	'connect_member_bindlog_type_1'		=> '바인딩',//'绑定',
	'connect_member_bindlog_type_2'		=> '바인딩 해제',//'解除绑定',
	'connect_member_bindlog_uin'		=> 'QQ계정 바인딩 포스트',//'QQ帐号绑定日志',
	'connect_member_bindlog_uid'		=> '사용자계정 바인딩 포스트',//'用户帐号绑定日志',
	'connect_guest_group_name'		=> 'QQ 방문자',//'QQ游客',

	'qqgroup_menu_list'		=> '바인딩관리',//'绑定管理',
	'qqgroup_menu_manager'		=> '설정이름',//'设置名称',
	'qqgroup_menu_setting'		=> '푸시 설정',//'推送设置',
	'qqgroup_menu_block'		=> '푸시 정보',//'推送信息',
	'qqgroup_menu_history'		=> '푸시내역',//'推送历史',

	'qqgroup_msg_deficiency'	=> '최소 한개의 톱 덧글 혹은 리스트덧글를 푸시 해 주세요.',//'请至少推送一条头条主题和一条列表主题',
	'qqgroup_msg_save_succeed'	=> '축하합니다. 정보를 QQ군으로 푸시 성공 했습니다.',//'恭喜，信息成功推送到QQ群',
	'qqgroup_msg_upload_succeed'	=> '이미지 업로드 성공',//'图片上传成功',
	'qqgroup_msg_upload_failure'	=> '이미지 로드 실패. 사이즈 75*75인 JPG, GIF, PNG 유형의 5M이하 이미지를 선택하시고 서버가 GD뱅크 사용허용 체크.',//'图片上传失败，请选择长宽为75*75的图片，支持JPG、GIF、PNG格式，文件小于5M，并检查服务器是否开启GD库',
	'qqgroup_msg_remote_exception'	=> '죄송합니다. 작은 에러 발생. 에러: {errmsg}, 에러코드: {errno}',//'抱歉，出了点小错。错误原因：{errmsg} 错误代号：{errno}',
	'qqgroup_msg_unknown_dns'	=> '죄송합니다. 미지 에러 발생. 서버와 클라우드 폼플렛 연결을 체크해 주세요.',//'抱歉，出现未知错误，请检查您的服务器与Discuz!云平台连接',
	'qqgroup_msg_remote_error'	=> '죄송합니다. 서버에러 발생. 잠시후 재시도 하세요.',//'抱歉，服务器出错了。请稍后再试',

	'qqgroup_search_order_views'	=> '조회수 역순',//'浏览数倒序',
	'qqgroup_search_order_replies'	=> '리필수 역순',//'回复数倒序',
	'qqgroup_search_order_heats'	=> '인기 역순',//'热度倒序',
	'qqgroup_search_order_dateline'	=> '발포 시간 역순',//'发布时间倒序',
	'qqgroup_search_order_lastpost'	=> '마지막 리필 역순',//'最后回复倒序',
	'qqgroup_search_order_recommends'	=> '덧글 평가 역순',//'主题评价倒序',

	'qqgroup_search_dateline_1'	=> '1시간내 덧글',//'1小时内发布的主题',
	'qqgroup_search_dateline_2'	=> '24시간내 덧글',//'24小时内发布的主题',
	'qqgroup_search_dateline_3'	=> '7일내 덧글',//'7天内发布的主题',
	'qqgroup_search_dateline_4'	=> '한달내 덧글',//'1个月内发布的主题',
	'qqgroup_search_dateline_0'	=> '제한 없음',//'不限制',

	'qqgroup_search_tid'		=> '덧글 ID:',//'主题ID:',
	'qqgroup_search_button'		=> '검색',//'搜索',
	'qqgroup_search_threadslist'	=> '덧글리스트',//'主题列表',
	'qqgroup_search_inforum'	=> '소재 토론장',//'所在版块',
	'qqgroup_search_operation'	=> '조작',//'操作',

	'qqgroup_search_loading'	=> '로딩중 ...',//'加载中...',
	'qqgroup_search_nothreads'	=> '지정 조건의 덧글를 찾지 못했음. 기타 조건으로 재 검색 추천 합니다.',//'未找到指定条件的主题，请尝试更换筛选条件重新搜索',

	'qqgroup_ctrl_add_miniportal_topic'	=> '헤드라인에 푸시',//'推送到头条',
	'qqgroup_ctrl_add_miniportal_normal'	=> '리스트로 푸시',//'推送到列表',
	'qqgroup_ctrl_up'			=> '위로',//'向上移动',
	'qqgroup_ctrl_down'			=> '아래로',//'向下移动',
	'qqgroup_ctrl_edit'			=> '편집',//'编辑',
	'qqgroup_ctrl_remove'			=> '삭제',//'移出',
	'qqgroup_ctrl_upload_image'		=> '이미지 업로드',//'上传图片',
	'qqgroup_ctrl_choose_image'		=> '이미지 선택: ',//'选择图片：',
	'qqgroup_ctrl_choose_image_tips'	=> '길이넓이가 75 * 75 인 이미지를 선택. JPG, GIF, PNG 유형 지원, 5M이하.',//'请选择长宽为75*75的图片，支持JPG、GIF、PNG格式，文件小于5M。',
	'qqgroup_ctrl_close'			=> '닫기',//'关闭',

	'qqgroup_preview_tips_topic'	=> '좌측 클릭 <img src="static/image/admincp/cloud/qun_op_top.png" align="absmiddle" /> 정보를 헤드라인으로 푸시',//'点击左侧 <img src="static/image/admincp/cloud/qun_op_top.png" align="absmiddle" /> 将信息推送到头条',
	'qqgroup_preview_tips_normal'	=> '좌측 클릭 <img src="static/image/admincp/cloud/qun_op_list.png" align="absmiddle" />  정보를 리스트로 푸시',//'点击左侧 <img src="static/image/admincp/cloud/qun_op_list.png" align="absmiddle" /> 将信息推送到列表',
	'qqgroup_preview_more'		=> 'More',//'更多',
	'qqgroup_preview_shortname'	=> '페이지 카드 제목',//'页卡标题',
	'qqgroup_preview_button'	=> '정보 푸시',//'推送信息',
	'attach_img'			=> '이미지 첨부파일',//'图片附件',

	'qqgroup_feed_setting'			=> '푸시설정',//'推送设置',
	'qqgroup_usergroup_feed_list'		=> '푸시가능한 사용그룹',//'允许推送的用户组',
	'qqgroup_usergroup_feed_list_comment'	=> '선택한 사용그룹은 푸시 권한이 있음 CTRL로 다량선택 가능. ',//'所选用户组拥有推送权限，可以按住 CTRL 多选',
	'qqgroup_setting_tips'			=> '<li>덧글보기 페이이지의 "QQ그룹 푸시"기능은 게시글을 QQ그룹 채팅 박스로 실시간 푸시 가능.</li><li><img src="static/image/admincp/cloud/feed.png" align="left"></li>',//'<li>主题查看页的“推送到QQ群”功能，可将帖子即时推送到QQ群聊天框。</li><li><img src="static/image/admincp/cloud/feed.png" align="left"></li>',

	'security_member_list'		=> '반칙 사용자',//'违规用户',
	'security_member_tips'		=> '<li>The offending user from waterproof wall posting users identified as spam, does not contain a whitelist users.</li><li>"Ignore this" Operation from the violation omitted from the list specified user, If the user again violation will still be added to the list of illegal users.</li>',//'<li>违规用户来自于防水墙识别为垃圾帖的发帖用户，不包含白名单用户。</li><li>“忽略本次”操作将从违规列表中忽略指定用户，如果用户再次违规仍将会被加入违规用户列表。</li>',
	'security_member_ignore_this'	=> 'Ignore this',//'忽略本次',
	'security_thread_list'		=> '반칙 덧글',//'违规主题',
	'security_post_list'		=> '반칙 리필',//'违规回帖',
	'security_members_name'		=> '사용자 명',//'用户名',
	'security_members_eviltype'	=> '악성 유형',//'恶意类型',
	'security_post_eviltype'	=> '악성 유형',//'恶意类型',
	'security_thread_eviltype'	=> '악성 유형',//'恶意类型',
	'security_isreported'		=> '이미 보고됨 여부.',//'是否已经上报过',
	'security_admin_operate'	=> '상태',//'状态',
	'security_isreported_yes'	=> 'Yes',//'是',
	'security_isreported_no'	=> 'No',//'否',
	'security_type_1'		=> '정치',//'政治',
	'security_type_2'		=> '포르노',//'色情',
	'security_type_3'		=> 'Hacking',//'灌水',
	'security_type_4'		=> '트로잔바이러스',//'挂马',
	'security_type_5'		=> '광고',//'广告',
	'security_type_6'		=> '기타',//'其他',
	'security_opreateresult_0'	=> '휴지통',//'回收站',
	'security_opreateresult_1'	=> '정상',//'正常',
	'security_opreateresult_2'	=> '이미 삭제',//'已删除',
	'security_opreateresult_3'	=> '무시',//'忽略',
	'security_subject'		=> '제목',//'标题',
	'security_forum'		=> '토론장',//'版块',
	'security_author'		=> '작성자/시간',//'作者/发帖时间',
	'security_view'			=> '보기',//'查看',
	'security_view_thread'		=> '덧글 보기.',//'查看主题',
	'security_clicktotoggle'	=> '접기/펼치기 상세내역 클릭.',//'点击折叠/展开详细内容',
	'security_foldall'		=> '전부 접기.',//'全部折叠',
	'security_exfoldall'		=> '전부 펼치기.',//'全部展开',
	'security_userdeleted'		=> '사용자는 이미 관리자에 의해 삭제 되였습니다.',//'该用户已被管理人员删除',
	'security_postdeleted'		=> '게시물은 이미 관리자에 의해 삭제 되였습니다.',//'该帖子已被管理人员删除',
	'security_modreason'		=> '스팸보안 자동 처리.',//'防水墙自动处理',
	'security_restore_user'		=> '사용자 복원.',//'恢复该用户',
	'security_change_usergroup'	=> '사용자 그룹 변경.',//'更改用户组',

	'recyclebin_search_security_thread'	=> '스팸보안에 처리된 덧글만 포함.',//'仅包含防水墙处理的主题',
	'recyclebin_search_security_post'	=> '스팸보안에 처리된 리필만 포함.',//'仅包含防水墙处理的回帖',

	'security_index'			=> '홈',//'首页',
	'security_index_list'			=> '홈',//'首页',
	'security_setting'			=> '설정',//'设置',
	'security_blanklist'			=> '화이트 리스트 설정',//'白名单设置',
	'security_setting_list'			=> '설정',//'设置',
	'security_tips'				=> '테크닉',//'小技巧',
	'security_tips_1'			=> '<li><p>Recognized Violation threads: <a href="admin.php?action=cloud&operation=security&anchor=thread" style="font-size:14px; text-decoration:none; color:#0000FF;">%d</a>, Violations Replies: <a href="admin.php?action=cloud&operation=security&anchor=post" style="font-size:14px; text-decoration:none; color:#0000FF;">%d</a>, Violation users: <a href="admin.php?action=cloud&operation=security&anchor=member" style="font-size:14px; text-decoration:none; color:#0000FF;">%d</a></p></li><li><p>, System recognition Violation themes and Violation replies, Automatically into the threads and replies <a href="admin.php?action=recyclebin" style="text-decoration:none; color:#0000FF;">Recycle Bin</a></p></li><li><p>System recognized the violation user. The user is banned automatically.</p></li>',//'<li><p>累计识别违规主题：<a href="admin.php?action=cloud&operation=security&anchor=thread" style="font-size:14px; text-decoration:none; color:#0000FF;">%d</a>，违规回帖：<a href="admin.php?action=cloud&operation=security&anchor=post" style="font-size:14px; text-decoration:none; color:#0000FF;">%d</a>，违规用户：<a href="admin.php?action=cloud&operation=security&anchor=member" style="font-size:14px; text-decoration:none; color:#0000FF;">%d</a></p></li><li><p>系统识别到违规主题和违规回帖后，自动将主题和回帖放入<a href="admin.php?action=recyclebin" style="text-decoration:none; color:#0000FF;">回收站</a></p></li><li><p>系统识别到违规用户后，自动将用户禁言</p></li>',
	'security_white_list_setting'		=> '화이트 리스트 설정',//'白名单设置',
	'security_usergroup_white_list'		=> '사용자 그룹 화이트 리스트',//'用户组白名单',
	'security_usergroup_white_list_comment' => '선택하신 사용자 그룹내 사용자에 대해서 클라우드보안 작동하지 않습니다, CTRL버튼으로 복수 선택 가능. ',//'所选用户组内用户的操作，防水墙不做处理，可以按住 CTRL 多选',
	'security_forum_white_list'		=> 'Forum white list',//'版块白名单',
	'security_forum_white_list_comment'	=> '선택한 토론장내의 덧글 와 리필, 클라우드보안 진행 안합. CTRL로 다수 선택가능. ',//'所选版块内的主题和回复，防水墙不做处理，可以按住 CTRL 多选',
	'security_recyclebin_thread'		=> '휴지통으로 이동하여 테마 처리',//'到回收站处理主题',
	'security_recyclebin_post'		=> '휴지통으로 이동하여 리필 처리',//'到回收站处理回帖',
	'security_thread_status'		=> '테마상태',//'主题状态',
	'security_post_status'			=> '리필 상태',//'回帖状态',
	'security_thread_member'		=> '사용자 상태',//'用户状态',
	'security_thread_member_group'		=> 'User group',//'用户组',
	'security_cron_lastpost'		=> 'Update Forums Last Post (Waterproof wall related)',//'更新版块最后发表(防水墙相关)',
	'security_cron_daily'			=> 'Waterproof wall daily optimization',//'防水墙每日优化',
	'setting_update_succeed'		=> '현재 설정이 성공적으로 업데이트되었습니다',//'当前设置更新成功',
	'security_createtime'			=> 'Create time',//'违规日期',
/**/	'security_safe_list'			=> 'Security Settings',//'安全设置',
/**/	'security_safe_login_open'		=> 'Enable safe login',//'开启安全登陆功能',
/**/	'security_safe_login_open_comment'	=> 'Effectively prevent malicious registration! If select Yes, users must bind the forum account and QQ account before post/reply anything at the forum',//'有效防止恶意注册！选择是，用户必须将论坛帐号与QQ帐号绑定后，才能在论坛发帖，回复',
/**/	'security_qq_login_alone_open'		=> 'Enable QQ separate login',//'开启QQ独立登录',
/**/	'security_qq_login_alone_open_comment'	=> 'Effectively prevent hacking! After the enabling to login with QQ number, even if your forum account is stolen, the hacker can not log on and post with your name.',//'有效防止盗号！开启后只能使用QQ号登录，即便盗取了论坛帐号也无法登录发帖',

	'search_menu_setting'			=> '설정',//'设置',
	'search_menu_service'			=> '기능설정',//'功能配置',
	'search_setting_allow_hot_topic'	=> '히트 덧글 허용',//'开启热门话题',
	'search_setting_allow_forum_recommend'	=> '토론장 추천 사 허용',//'开启板块推荐词',
	'search_setting_allow_thread_related'	=> '덧글 관련 게시물 허용',//'开启主题相关帖',
/**/	'search_setting_allow_thread_related_comment'	=> 'Related threads block will be shown below the thread posts. The relation is calculated by the system according to the post content, mining similar theme, so the user have more volume to read.',//'展示在主题帖下方，根据帖子内容计算出站内相关的帖子，挖掘相似主题，拓展用户阅读深度。',
/**/	'search_setting_allow_recommend_related'	=> 'Enable to recommend related',//'开启相关推荐',
/**/	'search_setting_allow_recommend_related_comment' => 'When a user point over a search result, the floating recommend page block will be generated at the lower left corner of the page. This feature help visitors to discover more related content.',//'当用户通过搜索引擎点到站内帖子页时，会在页面左下角产生一个浮动的推荐页面，帮助访客发现更多站内相关内容。',
	'search_setting_allow_forum_related'	=> '토론장 관련 게시물 허용',//'开启板块相关帖',
	'search_setting_allow_collection_related'	=> '파트리 관련 게시물 허용',//'开启淘帖相关帖',
/**/	'search_menu_settingsearch'	=> 'Search Settings',//'搜索设置',
/**/	'search_menu_basicsetting'	=> 'Basic Settings',//'基本设置',
/**/	'search_menu_modulesetting'	=> 'Module Settings',//'模块设置',
/**/	'search_modulesetting_tips'	=> 'If aspect search provide the referral service, without occupying the site resources under the premise, through cloud computing capabilities for site users to enhance access depth.',//'纵横搜索提供的推荐服务，在不占用网站资源的前提下，通过云计算能力为网站用户提升访问深度。',
);

$GLOBALS['admincp_actions_normal'][] = 'cloud';

