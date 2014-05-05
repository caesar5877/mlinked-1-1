<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_update.php by Valery Votintsev at sources.ru
 */

$lang = array(

//===========================
// Main Update Procedure
//---------------------------
//utility/update.php

	'del_update_lock'		=> 'FTP서버 로그인후 ./data/update.lock 수동 삭제하시고 재차 본 파일을 실행 합니다.',//'请您先登录服务器ftp,手工删除 ./data/update.lock 文件,再次运行本文件进行升级.',
	'sql_file'			=> 'SQL 파일 ',//'SQL文件 '
	'does_not_exist'		=> '존재하지 않습니다.',//' 不存在',
	'table_delete_completed'	=> '테이블,필드 삭제 삭제 조작 완료',//'删除表和字段操作完成了',
	'close_before_update'		=> '사이트를 정지 시킨후 다시 업그레이드 진행해 주세요.',//'请先关闭站点再执行此升级操作',
	'ucenter160update'		=> 'UCenter를 1.6.0 이상 버전으로 업그레이드 해주세요.<br>If you use the Discuz!X comes with UCenter, please upgrade UCenter by running the uc_server/upgrade/upgrade3.php',//'请先升级UCenter到1.6.0以上版本。<br>如果使用为Discuz! X自带UCenter，请先运行uc_server/upgrade/upgrade3.php进行升级',
	'db_will_upgrade'		=> '<b>설명:</b><br>&nbsp;&nbsp;&nbsp;이 업그레이드 프로그램은 최신SQL파일을 참고로 데이터베이스를 동기화 업그레이드 합니다.<br>',//'说明：<br>本升级程序会参照最新的SQL文件,对数据库进行同步升级.',
	'check_latest_version'		=> '현재 디렉토리 ./data/install.sql 파일이 최신버전임을 확인 하세요!',//'请确保当前目录下 ./data/install.sql 文件为最新版本.',
	'check_plugins'			=> '업그레이드 완성후 모든 플러그인이 정지 됩니다.웹마스터 분께서 하나씩 오픈하면서 최신 버전에 적용되는지 확인하세요.',//'升级完成后会关闭所有插件以确保正常运行，请站长逐个开启每一个插件检测是否兼容新版本。',
	'upgade_start'			=> '준비완료.업그레이드 시작.',//'准备完毕,升级开始',
	'contacts'			=> '연락방식: ',//' 联系方式:',
	'ready_to_db_upgrade'		=> '준비완료:다음단계 데이터베이스 구조 업그레이드 진행.',//'准备完毕,进入下一步数据库结构升级',
	'sql_empty'			=> 'SQL파일 내용이 없음. 확인 하세요.',//'SQL文件内容为空,请确认',
	'db_structure_upgraded'		=> '데이터베이스 구조 업그레이드 완료, 다음 데이터를 업데이트 조작 진행.',//'数据库结构升级完毕,进入下一步数据升级操作',
	'add_table'			=> '테이블 추가',//'添加表 ',
	'sql_error'			=> ' 오류발생. 수동으로 다음 SQL어구를 실행 한 다음 업그레이드 프로그램에게 다시 실행 해주십시오',//' 出错,请手工执行以下SQL语句后,再重新运行本升级程序',
//	'sql_error'			=> ' Error. Please perform the following update statement by hand, then re-run the upgrade program',//'出错,请手工执行以下升级语句后,再重新运行本升级程序',
	'completed'			=> ' 완성',//'完成',
	'upgrade_table'			=> '테이블 업그레이드 ',//'升级表 ',
	'table_rename'			=> '테이블 명칭 ',//'表改名 ',
	'sql_statement'			=> 'SQL어구 업그레이드',//'升级SQL语句',
	'check_table'			=> '테이블 체크',//'检查表 ',
	'skip_table'			=> '완성,업그에이드 없음.넘어가기.',//' 完成,不需升级,跳过',
	'real_names_updated'		=> '실명기능 업그레이드 완성.',//'实名功能升级完毕',
	'real_name'			=> '실명',//'真实姓名',
	'real_name_progress'		=> '실명기능 업그레이드 중:',//'实名功能升级中',
	'users_updated'			=> '사용자 섹션 업그레이드 완료',//'用户栏目升级完毕',
	'recommended_webmaster'		=> '웹 마스터 추천',//'站长推荐',
	'article_tags'			=>  array (
					    1 => '오리지널',//'原创',
					    2 => '히트',//'热点',
					    3 => '사진',//'组图',
					    4 => '속보',//'爆料',
					    5 => 'Headline',//'头条',
					    6 => '환등',//'幻灯',
					    7 => '스크롤',//'滚动',
					    8 => '추천',//'推荐',
					    ),
	'anonymous'			=> '익명',//'匿名',
	'politics'			=> '정치',//'政治',
	'advertising'			=> '광고',//'广告',
	'userreasons'			=> 'Powerfull!\r\nUsefull\r\n아주 좋아!\r\nThe best!\r\n진정!',//'很给力!\r\n神马都是浮云\r\n赞一个!\r\n山寨\r\n淡定'
	'plugin_center'			=> 'Discuz! 확장센터',//'Discuz! 扩展中心',
	'plugin_forum'			=> 'Discuz! Plugin Forum',//'Discuz! 扩展中心最新的论坛插件',
	'settings_updated'		=> '구성설정 업그레이드 완료.',//'配置项升级完成',
	'group_setting_updated'		=> '관리그룹세팅 업그레이드 완료',//'管理组设置升级完成',
	'clean_feeds'			=> '만기 피드 정리.',//'清理过期动态',
	'cron_completed'		=> '예약작업 업그레이드 완료.',//'计划任务升级完成',
	'color_card'			=> '칼라카드',//'变色卡',
	'color_card_descr'		=> '게시물 혹은 포스트의 제목 칼라를 변경 강조 표시 가능.',//'可以将帖子或日志的标题高亮，变更颜色',
	'visitor_card'			=> '나타남 카드',//'显身卡',
	'visitor_card_descr'		=> '익명사용자의 진실 신분 1회 확인 가능.',//'可以查看一次匿名用户的真实身份。',
	'anonymous_card'		=> '익명카드',//'匿名卡',
	'anonymous_card_descr'		=> '지정한 곳에서 자신의 이름을 익명으로 나타나게 함.',//'在指定的地方，让自己的名字显示为匿名。',
	'apps_completed'		=> '어플 통계 업그레이드 완성',//'漫游应用统计升级完成',
	'navigation_completed'		=> '네비게시션 데이터 업그레이드 완성',//'导航数据升级完成',
	'group_status_completed'	=> '토론장 상태 업그레이드 완성.',//'版块状态升级完毕',
	'recommendations_completed'	=> '리필추천 업그레이드 완성',//'回帖推荐升级完毕',
	'users_completed'		=> '사용자 업그레이드 완성',//'用户升级完毕',
	'daylogin'			=> '매일 등록',//'每天登录',
	'portalcomment'			=> '문서 평론.',//'文章评论',
	'points_rules_completed'	=> '포인트 규칙 업그레이드 완료.',//'积分规则升级完毕',
	'custom_bbcode_completed'	=> '사용자 정의 코드 권한 업그레이드 완료.',//'自定义代码权限升级完毕',
	'edited_by'			=> '편집',//'编辑采用',
	'stamps_completed'		=> '감정도장 업그레이드 완료.',//'鉴定图章升级完毕',
	'perms_updated'			=> '모듈썸네일 권한 업그레이드 완료.',//'模块缩略图权限升级完毕',
	'block_permissions_completed'	=> '모듈 권한 업그레이드 완료.',//'模块权限升级完毕',
	'portal_completed'		=> '포털체널 권한 업그레이드 완료.',//'门户频道权限升级完毕',
	'articles_updated'		=> '문서 평론 업그레이드 완료.',//'文章评论升级完毕',
	'article_comments_completed'	=> '문서 표지 이미지 업그레이드 완료.',//'文章封面图升级完毕',
	'blocks_completed'		=> '모듈템플릿 업그레이드 완료.',//'模块模板升级完毕',
	'scripts_completed'		=> '모듈 스크립트 업그레이드 완료.',//'模块脚本升级完毕',
	'group_permissions_completed'	=> '사용자 권한 업그레이드 완료.',//'用户组权限升级完毕',
	'group_home_completed'		=> '그룹 홈페이지 업그레이드 완료.',//'群组首页升级完毕',
	'domains_completed'		=> '도메인 세팅 업그레이드 완료.',//'域名设置升级完毕',
	'new_pm_completed'		=> '새 글문 상태 재설정 완료.',//'新短消息状态重置完毕',
	'view_img_completed'		=> '이미지 보기 권한 업그레이드 완료',//'查看图片权限升级完毕',
	'realname_verify'		=> '실명인증 업그레이드 중',//'实名认证升级中',
	'video_verify'			=> '동영상 인증',//'视频认证',
	'real_name_verification'	=> '실명인증 업그레이드 중.',//'实名认证升级中',
	'real_name_verification_completed'	=> '인증 데이터 업그레이드 완료.',//'认证数据升级完毕',
	'attachment_upgrade'		=> '포럼 첨부 테이블 업그레이드 중 ... ',//'论坛附件表升级中 ... ',
	'attachment_upgraded'		=> '포럼 첨부 테이블 업그레이드 완료.',//'论坛附件表升级完毕',
	'topic_image_skip'		=> '스레드 이미지 처리 할수없음.넘어가기.',//'主题图片表无法处理，跳过',
	'topic_image_upgraded'		=> '스레드 이미지 처리 완료.',//'主题图片表处理完毕',
	'topic_image_upgrade'		=> '스레드 이미지 처리중 ... ',//'主题图片表处理中 ... ',
	'verify_updated'		=> '심사 데이터 업그레이드 완료.',//'审核数据升级完毕',
	'founder_updated'		=> '창립자 데이터 업그레이드 완료.',//'创始人数据升级完毕',
	'plugins_updated'		=> '플러그인 언어 팩 데이터 업그레이드 완료.',//'插件语言包数据升级完毕',
	'config_default_lost'		=> 'config_global_default.php was not found, please reupload this file.',//'config_global_default.php was lost, please reupload this file.',
	'data_processing_completed'	=> '데이터 처리 완성',//'数据处理完成',
	'config_not_writable'		=> '"config/config_global.php" 파일 업데이트 완료,  "config/" 디렉토리는 쓰기 권한이 없음으로 ,업데이트한 파일을 "data/"디렉토리에 저장했음.FTP프로그램으로  "config/" 디렉토리로 이동하셔서 원 파일을 교체 하세요.',//'"config/config_global.php" 文件已更新,由于 "config/" 目录不可写入,我们已将更新的文件保存到 "data/" 目录下,请通过 FTP 软件将其转移到 "config/" 目录下覆盖源文件.',
	'config_continue'		=> '위 조작을 완성후 클릭하여 계속진행.',//'当您完成上述操作后点击这里继续',
	'data_delete_next'		=> '데이터 삭제 처리 안함. 다음으로 이동.',//'数据删除不处理,进入下一步',
	'tables_unused'			=> '다음<strong>데이터 테이블</strong> 은 표준 데이터베이스와 비교시 많은 부분임.:<br>필요에 따라 삭제여부 확인.',//'以下 <strong>数据表</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',
	'index'				=> '인덱스',//'索引',
	'field'				=> '필드',//'字段',
	'fields_unused'			=> '다음<strong>필드</strong> 는 표준 데이터베이스와 비교시 필요없는 여분 입니다.수요에 따라 삭제하실수 있습니다.',//'以下 <strong>字段</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',
	'tables_fields_no_unused'	=> '표준 데이터베이스와 비교시 삭제할 데이블과 필드가 없습니다.',//'与标准数据库相比,没有需要删除的数据表和字段',
	'click_next_step'		=> '클릭하셔서 다음단계로 넘어 가세요',//'请点击进入下一步',
	'submit_delete'			=> '삭제제출',//'提交删除',
	'ignore_unused'			=> '여분의 테이블과 필드를 삭제 하실수 있습니다.',//'您也可以忽略多余的表和字段',
	'next_step_directly'		=> '다음 단계로 직접 넘어가기',//'直接进入下一步',
	'default_style_restore_sure'	=> '기본 스타일로 복원 하시겠습니까?',//'请确认是否要恢复默认风格？',
	'yes'				=> 'Yes',//'是',
	'no'				=> 'No',//'否',
	'default_style_restored'	=> '기본 스타일 복원 완료. 다음 단계로 진행됩니다.',//'默认风格已恢复,进入下一步',
	'cache_update'			=> '캐시 업데이트 중 ...',//'缓存更新中，请稍候 ...',
	'database_updated'		=> '축하합니다! 데이터베이스 구조 업데이트 완료.<br>데이터 안전을 위해 파일 update.php을 삭제해 주세요! !.',//'恭喜，数据库结构升级完成！为了数据安全，请删除本文件。',
	'jump_to'			=> '이동중 ...',//'跳转中...',
	'database_update'		=> '데이터베이스 업데이트 프로그램',//'数据库升级程序',
	'database_update_tool'		=> '데이터뱅크 업데이트 공구',//'数据库升级工具',
	'update_start'			=> '업데이트 시작',//'升级开始',
	'database_update_structure'	=> '데이터뱅크 구조 추가와 업데이트',//'数据库结构添加与更新',
	'data_update'			=> '데이터 업데이트',//'数据更新',
	'database_delete_structure'	=> '데이터뱅크구조 삭제',//'数据库结构删除',
	'update_completed'		=> '업데이트 완료',//'升级完成',
	'reports_completed'		=> '신고 업데이트 완료',//'举报升级完成',
	'magics_updated'		=> '아이템 업데이트 완료',//'道具升级完成',
	'birthday'			=> '출생일자',//'出生日期',
//-----------------------------------------------------------------------------
// Added in X2.5:
	'table_optimize'	=> '테이블 최적화',//'优化数据表',
	'close_wait'		=> '사이트 미 정지 상태.정지 중...',//'您的站点未关闭，正在关闭，请稍后...',
	'length'		=> '[길이]',//'[时长]',
	'status'		=> '[상태]',//'[状态]',
	'info'			=> '[정보]',//'[信息]',
	'next_step_wait'	=> '다음 순서 준비중...',//'准备进入下一步操作，请稍后...',
	'upgrade_wait'		=> '데이터 업데이트 중...',//'正在升级数据，请稍后...',
//	'ready_to_db_upgrade'	=> '준비완료:다음 데이터뱅크 구조 업데이트 준비...',//'准备完毕，进入下一步数据库结构升级',
	'patches_dayly'		=> '매일 보안패치 얻기',//'每日获取安全补丁',
	'regular_publish'	=> '정시 덧글 발포',//'定时发布主题',
	'archive_weekly'	=> '매주 팔로우 아카이브',//'每周广播归档',
	'updates_daily'		=> '매일 보기수 업데이트',//'更新每日查看数',
	'users_daily'		=> '매일 사용자 표 최적화',//'每日用户表优化',
	'collection_follow'	=> '파트리 구독되였음 (Taobao album subscription)',//'淘专辑被订阅',
	'new_post'		=> '신인글',//'新人帖',
	'moderated_completed'	=> '심사 데이터 전환 완료',//'审核数据转换完毕',
	'medal_completed'	=> '사용자 훈장 데이터 업데이트 완료',//'用户勋章数据升级完毕',
	'data_update_completed'	=> '데이터 업데이트 완료',//'数据升级结束',
	'group_stat_completed'	=> '토론장 통계 테이터 업데이트 완료',//'论坛版块统计数据升级完毕',
//-----------------------------------------------------------------------------
// Added in X3.0:
/*!*/	'cron_todayheats_daily'	=> 'Count today hot posts daily',//'统计今日热帖',
/*!*/	'hot_posts_completed'	=> 'Hot posts updated',//'热帖处理完毕',
/*!*/	'reminder_update_completed'	=> 'Remind data upgrade finished',//'提醒数据升级完毕',
/*!*/	'layout_update_completed'	=> 'Layout settings upgrade finished',//'布局方案设置升级完毕',
/*!*/	'processed_from'	=> 'Being processed from ',//'正在处理从 ',
/*!*/	'starting_from'		=> ' starting from ',//' 开始 ',
/*!*/	'popular_posts'		=> 'popular posts',//'的热帖',
//To lang_template:
/*!*/	'default_layout'	=> 'Default layout',//'默认方案',
/*!*/	'qq_bbcode_description'	=> 'QQ online status, points icon and his/her chat',//'显示 QQ 在线状态，点这个图标可以和他（她）聊天',
/*!*/	'qq_enter'		=> 'Please enter the QQ number',//'请输入 QQ 号码',
/*!*/	'qq_onlne_status'	=> 'Set QQ online status',//'设置QQ在线状态',
/*!*/	'open_soso'		=> '<br><br>Tips:<br>In order to reduce the forum loading, this upgrade will help you to use our website Geo-location search service.<br>You can go to',//'<br><br>友情提示：<br>为更好的降低论坛搜索时的数据压力，本次升级已经帮本站开通纵横搜索服务。<br>你可以在',
/*!*/	'open_soso_link'	=> 'AdminCP -&gt; Cloud platform -&gt; Geo-location search Management',//'站点后台-&gt;云平台-&gt;纵横搜索 进行管理',

);