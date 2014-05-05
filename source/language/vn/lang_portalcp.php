<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *		Translate by DCV team - http://www.discuz.vn
 *      $Id: lang_portalcp.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'block_diy_nopreview' => '<p>Module này chứa mã js, không xem được ngay, nhấn Save và sau đó xem</p>',
	'block_diy_summary_html_tag' => 'Tùy chỉnh nội dung lỗi, HTML tags: ',
	'block_diy_summary_not_closed' => ' Không phù hợp',
	'block_all_category' => 'Tất cả hạng mục',
	'block_first_category' => 'Mục đầu',
	'block_all_forum' => 'Tất cả diễn đàn',
	'block_all_group' => 'Tất cả các nhóm',
	'block_all_type' => 'Tất cả các thể loại',
	'file_size_limit' => 'Tập tin không thể lớn hơn {size} KB, Xin vui lòng quay trở lại.',
	'set_to_conver' => 'Đặt bìa',
	'small_image' => 'Hình thu nhỏ',
	'insert_small_image' => 'Chèn ảnh nhỏ',
	'insert_large_image' => 'Chèn ảnh lớn',
	'insert_file' => 'Chèn tập tin',
	'delete' => 'Xóa',
	'upload_error' => 'Upload lỗi',
	'upload_remote_failed' => 'Xóa tải lên lỗi',
	'article_noexist' => 'Điều quy định không tồn tại, kiểm tra',
	'article_noallowed' => 'Bạn không được phép hoạt động theo quy định bài viết',
	'article_publish_noallowed' => 'Bạn không có quyền để xuất bài hoạt động',
	'article_category_empty'	=> 'Sorry, the category can not be empty',//'抱歉，栏目不能为空',
	'article_edit_nopermission'	=> 'Sorry, you do not have permission to edit current article',//'抱歉，您没有权限进行当前文章操作',
	'article_publish' => 'Được đăng bài viết',
	'article_manage' => 'Quản lý bài viết',
	'article_tag'			=> 'Tags',//'标签',
	'select_category' => 'Chọn một loại',
	'blockstyle_diy' => 'Tùy chỉnh mẫu',

	'article_pushplus_info' => '<p><center><i><a href="{url}" class="xg1 xs1">Nội dung do {author} cung cấp</a></i></center></p>',

	'diytemplate_name_null' => '[Không điền]',
	'portal_view_name' => ' Posts by Page',
	'forum_viewthread_name'		=> ' Posts View Page',//' 帖子查看页',
	'portal/index' => 'Portal trang chủ',
	'portal/list' => 'Danh sách bài viết (công cộng)',
	'portal/view' => 'Trang chủ đề (công cộng)',
	'portal/comment' => 'Trang bình luận',
	'forum/discuz' => 'Diễn đàn chính',
	'forum/viewthread' => 'Danh sách chủ đề (công cộng)',
	'forum/forumdisplay' => 'Danh sách bài viết (công cộng)',
	'group/index' => $_G['setting']['navs'][3]['navname'],
	'group/group_my' => 'My '.$_G['setting']['navs'][3]['navname'].' của tôi',
	'group/group' => $_G['setting']['navs'][3]['navname'].' dung',
	'home/space_home' => 'Trang chủ',
	'home/space_trade' => 'Buôn bán',
	'home/space_top'		=> 'Top space list',//'空间排行榜',
	'home/space_thread' => 'Bài viết',
	'home/space_reward' => 'Bài thưởng',
	'home/space_share_list' => 'Danh sách chia sẻ',
	'home/space_share_view' => 'Xem trang và chia sẻ',
	'space_share_view' => 'Xem trang và chia sẻ',
	'home/space_poll' => 'Khảo sát trang cá nhân',
	'home/space_pm' => 'Tin nhắn trang cá nhân',
	'home/space_notice' => 'Nhắc nhở trang cá nhân',
	'home/space_group' => $_G['setting']['navs'][3]['navname'].' không gian',
	'home/space_friend' => 'Bạn bè',
	'home/space_favorite' => 'Yêu thích',
	'home/space_doing' => 'Status',
	'home/space_debate' => 'Tranh luận',
	'home/space_blog_view' => 'Lượt xem blog',
	'home/space_blog_list' => 'Danh sách blog',
	'home/space_album_view' => 'Lượt xem ảnh',
	'home/space_album_pic' => 'Xem ảnh',
	'home/space_album_list' => 'Danh sách album',
	'home/space_activity' => 'Hoạt động',
	'ranklist/ranklist' => 'Xếp hạng',
	'ranklist/blog' => 'Blog',
	'ranklist/poll' => 'Bình chọn',
	'ranklist/activity' => 'Hoạt động',
	'ranklist/forum' => 'Diễn đàn',
	'ranklist/picture' => 'Ảnh',
	'ranklist/group' => 'Nhóm',
	'ranklist/thread' => 'Chủ đề',
	'ranklist/member' => 'Thành viên',
	'other_page' => 'Không có Module DIY',
	'upload' => 'Tải lên',
	'remote' => 'Từ xa',
	'portal_index' => 'Portal Home',
	'portal_topic_blue' => 'Xanh dương',
	'portal_topic_green' => 'Xanh lá',
	'portal_topic_grey' => 'Xám',
	'portal_topic_red' => 'Đỏ',

	'itemtypename0'			=> 'Auto',//'自动',
	'itemtypename1'			=> '<span style="color: #FF0000">Fixed</span>',//'<span style="color: #FF0000">固定</span>',
	'itemtypename2'			=> '<span style="color: #00BFFF">Edit</span>',//'<span style="color: #00BFFF">编辑</span>',
	'itemtypename3'			=> '<span style="color: #0000FF">Push</span>',//'<span style="color: #0000FF">推送</span>',

);