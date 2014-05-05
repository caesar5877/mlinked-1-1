<?php

/**---
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_space.php by Valery Votintsev at sources.ru
 *	Translated to Korean by ionobgy
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'hour'			=> '시간',
	'before'		=> '이전',
	'minute'		=> '분',
	'second'		=> '초',
	'now'			=> '지금',
	'dot'			=> '、',
	'poll'			=> '투표',
	'blog'			=> '블로그6',
	'friend_group_default'	=> '기타',
	'friend_group_1'	=> '포럼에서 알게된 사용자',
	'friend_group_2'	=> '이벤트에서 알게된 사용자',
	'friend_group_3'	=> '친구통해서 알게된 사용자',
	'friend_group_4'	=> '친인',
	'friend_group_5'	=> '동료',
	'friend_group_6'	=> '동창',
	'friend_group_7'	=> '모르는 사람',
	'friend_group'		=> '맞춤 설정',
	'wall'			=> '남기기',
	'pic_comment'		=> '이미지 댓글',
	'blog_comment'		=> '블로그 댓글',
	'clickblog'		=> '블로그 순위',
	'clickpic'		=> '이미지 순위',
	'clickthread'		=> '덧글 순위',
	'share_comment'		=> '공유 댓글',
	'share_notice'		=> '공유',
	'doing_comment'		=> '토막글 댓글',
	'friend_notice'		=> '친구',
	'poll_comment'		=> '투표 댓글',
	'poll_invite'		=> '투표 초대',
	'default_albumname'	=> '기본 앨범',
	'credit'		=> '포인트',
	'credit_unit'		=> '개',
	'man'			=> '남자',
	'woman'			=> '여자',
	'gender_0'		=> '비밀',
	'gender_1'		=> '남자',
	'gender_2'		=> '여자',
	'year'			=> '년',
	'month'			=> '월',
	'day'			=> '일',
	'unmarried'		=> '미혼',
	'married'		=> '기혼',
	'hidden_username'	=> '익명',
	'gender'		=> '성별',
	'age'			=> '세',
	'comment'		=> '댓글',
	'reply'			=> '리필',
	'from'			=> 'From',//'来自',
	'anonymity'		=> '익명',
	'viewmore'		=> '더보기',
	'constellation_1'	=> '물병자리',//'水瓶座',
	'constellation_2'	=> '물고기자리',//'双鱼座',
	'constellation_3'	=> '양자리',//'白羊座',
	'constellation_4'	=> '황소자리',//'金牛座',
	'constellation_5'	=> '쌍둥이자리',//'双子座',
	'constellation_6'	=> '게자리',//'巨蟹座',
	'constellation_7'	=> '사자자리',//'狮子座',
	'constellation_8'	=> '처녀자리',//'处女座',
	'constellation_9'	=> '천칭자리',//'天秤座',
	'constellation_10'	=> '전갈자리',//'天蝎座',
	'constellation_11'	=> '궁수자리',//'射手座',
	'constellation_12'	=> '염소자리',//'摩羯座',
	'zodiac_1'		=> '쥐',//'鼠',
	'zodiac_2'		=> '소',//'牛',
	'zodiac_3'		=> '범',//'虎',
	'zodiac_4'		=> '토끼',//'兔',
	'zodiac_5'		=> '용',//'龙',
	'zodiac_6'		=> '뱀',//'蛇',
	'zodiac_7'		=> '말',//'马',
	'zodiac_8'		=> '양',//'羊',
	'zodiac_9'		=> '원숭이',//'猴',
	'zodiac_10'		=> '닭',//'鸡',
	'zodiac_11'		=> '개',//'狗',
	'zodiac_12'		=> '돼지',//'猪',

	'credits'		=> '포인트',
	'usergroup'		=> '회원 사용그룹',
	'friends'		=> '친구',
	'blogs'			=> '블로그7',
	'threads'		=> '덧글',
	'albums'		=> '앨범',
	'sharings'		=> '공유',
	'space_views'		=> '블로그 방문자 <strong class="xi1">{views}</strong> 명',
	'views'			=> '공간조회수',
	'block1'		=> '사용자 정의 모듈1',
	'block2'		=> '사용자 정의 모듈2',
	'block3'		=> '사용자 정의 모듈3',
	'block4'		=> '사용자 정의 모듈4',
	'block5'		=> '사용자 정의 모듈5',
/*vot*/	'blockdata'		=> array(
		'personalinfo'	=> '개인정보',
		'profile'	=> '프로필',
		'doing'		=> '토막글',
		'feed'		=> '활동',
		'blog'		=> '포스트',
		'stickblog'	=> '고정포스트',
		'album'		=> '앨범',
		'friend'	=> '친구',
		'visitor'	=> '최근방문자',
		'wall'		=> '방명록',
		'share'		=> '공유',
		'thread'	=> '덧글',
		'group'		=> $_G[setting][navs][3][navname],
		'music'		=> '뮤직 박스',
		'statistic'	=> '통계',
		'myapp'		=> '어플',
		'block1'	=> '자유 모듈1',
		'block2'	=> '자유 모듈2',
		'block3'	=> '자유 모듈3',
		'block4'	=> '자유 모듈4',
		'block5'	=> '자유 모듈5'
	),

	'block_title'		=> '<div class="blocktitle title"><span>{bname}</span>{more}</div>',
	'blog_li'		=> '<dl class="bbda cl"><dt><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a><span class="xg2 xw0"> {date}</span></dt>',
	'blog_li_img'		=> '<dd class="atc"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank"><img src="{src}" class="summaryimg" /></a></dd>',
	'blog_li_ext'		=> '<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">({viewnum})조회 수</a><span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">({replynum})댓글 수</a></dd>',
	'album_li'		=> '<li style="width:70px"><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 업데이트 {date}"><img src="{src}" alt="{albumname}" width="70" height="70" /></a></div><p><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 업데이트 {date}">{albumname}</a></p><span>이미지: {picnum} 개</span></li>',
	'doing_li'		=> '<li>{message}</li><br />{date} {from} 댓글({replynum})',
	'visitor_anonymity'	=> '<div class="avatar48"><img src="image/magic/hidden.gif" alt="익명"></div><p>익명</p>',
/*!*/	'visitor_list'		=> '<a href="home.php?mod=space&uid={uid}" target="_blank" class="avt"><em class="{class}"></em><em class="{self}" onclick="javascript:removeVisitor(event, {cuid});" title="Remove the visit"></em>{avatar}</a><p><a href="home.php?mod=space&uid={uid}" title="{username}">{username}</a></p>',
	'wall_form'		=> '<div class="space_wall_post">
					<form action="home.php?mod=spacecp&ac=comment" id="quickcommentform_{uid}" name="quickcommentform_{uid}" method="post" autocomplete="off" onsubmit="ajaxpost(\'quickcommentform_{uid}\', \'return_commentwall_{uid}\');doane(event);">
					'.($_G['uid'] ? '<span id="message_face" onclick="showFace(this.id, \'comment_message\');return false;" class="cur1"><img src="static/image/common/facelist.gif" alt="facelist" class="mbn vm" /></span>
					<br /><textarea name="message" id="comment_message" class="pt" rows="3" cols="60" onkeydown="ctrlEnter(event, \'commentsubmit_btn\');" style="width: 90%;"></textarea>
					<input type="hidden" name="refer" value="home.php?mod=space&uid={uid}" />
					<input type="hidden" name="id" value="{uid}" />
					<input type="hidden" name="idtype" value="uid" />
					<input type="hidden" name="commentsubmit" value="true" />' :
					($_G['connectguest'] ? '<div class="pt hm">당신이 필요 <a href="member.php?mod=connect" class="xi2">계정 정보를 향상</a> 또는 <a href="member.php?mod=connect&ac=bind" class="xi2">바인딩 기존 계정</a> 后才可以回帖</div>' : '<div class="pt hm">글을 작성하시려면 <a href="member.php?mod=logging&action=login" onclick="showWindow(\'login\', this.href)" class="xi2">로그인</a> | <a href="member.php?mod='.$_G['setting']['regname'].'" class="xi2">'.$_G['setting']['reglinkname'].'</a></div>')).'
					<p class="ptn"><button '.($_G['uid'] ? 'type="submit"' : 'type="button" onclick="showWindow(\'login\', \'member.php?mod=logging&action=login&guestmessage=yes\')"').' name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"><strong>포스트 쓰기</strong></button></p>
					<input type="hidden" name="handlekey" value="commentwall_{uid}" />
					<span id="return_commentwall_{uid}"></span>
					<input type="hidden" name="formhash" value="{FORMHASH}" />
					</form>'.
					($_G['uid'] ? '<script type="text/javascript">
						function succeedhandle_commentwall_{uid}(url, msg, values) {
							wall_add(values[\'cid\']);
						}
					</script>' : '').'
					</div>',
	'wall_li'		=> '<dl class="bbda cl" id="comment_{cid}_li">
					<dd class="m avt">
					{author_avatar}
					</dd>
					<dt>
					{author}
					<span class="y xw0">{op}</span>
					<span class="xg1 xw0">{date}</span>
					<span class="xgl">{moderated}</span>
					</dt>
					<dd id="comment_{cid}">{message}</dd>
					</dl>',
	'wall_more'		=> '<dl><dt><span class="y xw0"><a href="home.php?mod=space&uid={uid}&do=wall">전체 보기</a></span><dt></dl>',
	'wall_edit'		=> '<a href="home.php?mod=spacecp&ac=comment&op=edit&cid={cid}&handlekey=editcommenthk_{cid}" id="c_{cid}_edit" onclick="showWindow(this.id, this.href, \'get\', 0);">수정</a> ',
	'wall_del'		=> '<a href="home.php?mod=spacecp&ac=comment&op=delete&cid={cid}&handlekey=delcommenthk_{cid}" id="c_{cid}_delete" onclick="showWindow(this.id, this.href, \'get\', 0);">삭제</a> ',
	'wall_reply'		=> '<a href="home.php?mod=spacecp&ac=comment&op=reply&cid={cid}&handlekey=replycommenthk_{cid}" id="c_{cid}_reply" onclick="showWindow(this.id, this.href, \'get\', 0);">리필</a>',
	'group_li'		=> '<li><a href="forum.php?mod=group&fid={groupid}" target="_blank"><img src="{icon}" alt="{name}" /></a><p><a href="forum.php?mod=group&fid={groupid}" target="_blank">{name}</a></p></li>',
	'poll_li'		=> '<div class="c z"><img alt="poll" src="static/image/feed/poll.gif" alt="poll" class="t" /><h4 class="h"><a target="_blank" href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a></h4><div class="mtn xg1">작성 시간：{dateline}</div></div>',
	'myapp_li_icon'		=> '<li><img src="{icon}" onerror="this.onerror=null;this.src=\'http://appicon.manyou.com/icons/{appid}\'" alt="{appname}" class="vm" /> <a href="userapp.php?mod=app&id={appid}">{appname}</a></li>',
	'myapp_li_logo'		=> '<li><a href="userapp.php?mod=app&id={appid}"><img src="http://appicon.manyou.com/logos/{appid}" alt="{appname}" /><p><a href="userapp.php?mod=app&id={appid}">{appname}</a></p></li>',
	'music_no_content'	=> '뮤직 박스 정보가 없습니다.',
	'block_profile_diy'	=> '꾸미기',
	'block_profile_wall'	=> '방명록',
	'block_profile_avatar'	=> '아바타',
	'block_profile_update'	=> '프로필',
	'block_profile_follow'		=> '팔로우',//'查看广播',
	'block_profile_wall_to_me'	=> '방명록',
	'block_profile_friend_add'	=> '초대',
	'block_profile_friend_ignore'	=> '친구제거',
	'block_profile_poke'		=> '인사',
	'block_profile_sendmessage'	=> '글문',
	'block_doing_reply'		=> '리필',
	'block_doing_no_content'	=> '토막글이 없습니다',
	'block_doing_no_content_publish'	=> '，<a href ="home.php?mod=space&uid={uid}&do=doing&view=me&from=space">토막글 작성</a>',
	'block_blog_no_content'		=> '블로그 정보가 없습니다.',
	'block_blog_no_content_publish'	=> ', <a href ="home.php?mod=spacecp&ac=blog">포스팅</a>',
	'block_album_no_content'	=> '아직 앨범이 없습니다',
	'block_album_no_content_publish'	=> ', <a href ="home.php?mod=spacecp&ac=upload">업로드</a>',
	'block_feed_no_content'		=> '최근 소식이 없습니다.',
	'block_thread_no_content'	=> '덧글 정보가 없습니다.',
	'block_thread_no_content_publish'	=> ', <a href ="forum.php?mod=misc&action=nav&special=0&from=home" onclick="showWindow(\'nav\', this.href);return false;">작성</a>',
	'block_friend_no_content'	=> '친구 정보가 없습니다.',
	'block_friend_no_content_publish'	=> ', <a href ="home.php?mod=spacecp&ac=search">친구 찾기</a> 또는 <a href ="home.php?mod=spacecp&ac=invite">초대</a>',
	'block_visitor_no_content'	=> '최근 방문자 정보가 없습니다.',
	'block_visitor_no_content_publish'	=> ', <a href ="home.php?mod=space&do=friend&view=online&type=member">블로그 방문</a>',
	'block_share_no_content'	=> '공유 정보가 없습니다.',
	'block_wall_no_content'		=> '방명록 메시지가 없습니다.',
	'block_group_no_content'	=> '동호회 정보가 없습니다.',
	'block_group_no_content_publish'	=> ', <a href ="forum.php?mod=group&action=create">만들기</a> 또는 <a href ="group.php?mod=index">가입</a>',
	'block_group_no_content_join'	=> ', <a href ="group.php?mod=index">가입</a>',
	'block_myapp_no_content'	=> '어플 정보가 없습니다.',
	'block_myapp_no_content_publish'	=> ', <a href ="userapp.php?mod=manage&my_suffix=/app/list">어플보기</a>',
	'block_view_noperm'		=> '볼수 있는 권한이 없습니다.',
	'block_view_profileinfo_noperm'	=> '프로필을 볼수 있는 권한이 없습니다.',
	'click_play'		=> '재생',
	'click_view'		=> '보기',
	'feed_view_only'	=> '보기',

	'export_pm'		=> 'PM 내보내기',
	'pm_export_header'	=> '짧은 메세지',
	'pm_export_touser'	=> '보낼 대상: {touser}',
	'pm_export_subject'	=> '제목: {subject}',
	'all'			=> '전체',
	'manage_post'		=> '글 관리',
	'manage_album'		=> '앨범 관리',
	'manage_blog'		=> '블로그 관리',
	'manage_comment'	=> '댓글 관리',
	'manage_doing'		=> '토막글 관리',
	'manage_feed'		=> '소식 관리',
	'manage_group_prune'	=> '동호회 글 관리',
	'manage_group_threads'	=> '동호회 덧글 관리',
	'manage_share'		=> '공유 관리',
	'manage_pic'		=> '이미지 관리',

	'sb_blog'		=> '{who}님 블로그',
	'sb_album'		=> '{who}님 앨범',
	'sb_space'		=> '{who}님 홈',
	'sb_feed'		=> '{who}님 소식',
	'sb_doing'		=> '{who}님 토막글',
	'sb_sharing'		=> '{who}님 공유',
	'sb_friend'		=> '{who}님 친구',
	'sb_wall'		=> '{who}님 방명록',
	'sb_profile'		=> '{who}님 프로필',
	'sb_thread'		=> '{who}님 덧글',
	'doing_you_can'		=> '내용을 입력 하세요...',
	'block_profile_all'	=> '<p style="text-align: right;"><a href="home.php?mod=space&uid={uid}&do=profile">개인 프로필 전체 보기</a></p>',
	'block_profile_edit'	=> '<span class="y xw0"><a href="home.php?mod=spacecp&ac=profile">프로필 수정</a></span>',
	'sb_follow'		=> '{who}의 팔로우',//'{who}的广播',

	'viewthread_userinfo_hour'	=> '시간',
	'viewthread_userinfo_uid'	=> 'UID',
	'viewthread_userinfo_posts'	=> '게시글',
	'viewthread_userinfo_threads'	=> '덧글',
	'viewthread_userinfo_doings'	=> '토막글',
	'viewthread_userinfo_blogs'	=> '블로그9',
	'viewthread_userinfo_albums'	=> '앨범',
	'viewthread_userinfo_sharings'	=> '공유',
	'viewthread_userinfo_friends'	=> '친구',
	'viewthread_userinfo_digest'	=> '강추',
/*!*/	'viewthread_userinfo_digestposts'	=> 'Digests',//'精华',
	'viewthread_userinfo_credits'	=> '포인트',
	'viewthread_userinfo_readperm'	=> '읽기 권한',
	'viewthread_userinfo_regtime'	=> '접속 시간',
	'viewthread_userinfo_lastdate'	=> '접속',
	'viewthread_userinfo_oltime'	=> '온라인 시간',
	'viewthread_userinfo_sellercredit'	=> '판매자신용',//'卖家信用',
	'viewthread_userinfo_buyercredit'	=> '구매자신용',//'买家信用',
	'viewthread_userinfo_follower'		=> '팔로어',//'听众数',
	'viewthread_userinfo_following'		=> '팔로어',//'收听数',
/*!*/	'viewthread_userinfo_feeds'		=> 'Feeds',//'广播',
/*!*/	'viewthread_userinfo_privacy'		=> 'Privacy',//'保密',
	'follow_view_follow'			=> '나의 관심',//'我关注的',
	'follow_view_special'			=> '특별관심',//'特别关注',
	'follow_view_other'			=> '팔로우홀',//'广播大厅',
	'follow_view_feed'			=> '{who}\'의 팔로우',//'{who}的广播',
	'follow_view_thread'			=> '{who}\의 테마',//'{who}的主题',
	'follow_view_reply'			=> '{who}\의 답변',//'{who}的回复',
	'follow_view_profile'			=> '{who}\의 개인정보',//'{who}的个人资料',
	'follow_view_type_feed'			=> '팔로우',//'广播',
	'follow_view_type_thread'		=> '테마',//'主题',
	'follow_view_type_reply'		=> '답변',//'回帖',
	'follow_view_type_profile'		=> '개인정보',//'个人资料',
	'follow_view_type_follower'		=> '팔로어 목록',//'听众列表',
	'follow_view_type_following'		=> '청취자',//'收听用户',
	'follow_view_my_follower'		=> '나의 팔로어',//'我的听众',
	'follow_view_my_following'		=> '내가 청취하는 이',//'我收听的人',
	'follow_view_do_follower'		=> '그의 팔로어',//'他的听众',
	'follow_view_do_following'		=> '그가 청취하는 이',//'他收听的人',
	'follow_view_fulltext'			=> '... 전체보기',//'...查看全文',
	'follow_retract'			=> '접기',//'收起',
	'follow_click_play'			=> '클릭 방송',//'点击播放',
	'follow_cancle_follow'			=> '청취취소',//'取消收听',
	'follow_follow_ta'			=> '청취',//'收听TA',


);
