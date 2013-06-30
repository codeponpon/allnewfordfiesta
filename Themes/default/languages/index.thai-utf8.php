<?php
// Version: 2.0.4; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'th_TH.utf8';
$txt['lang_dictionary'] = 'th';
$txt['lang_spelling'] = 'american';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;

$txt['days'] = array('อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์');
$txt['days_short'] = array('อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
$txt['months_titles'] = array(1 => 'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
$txt['months_short'] = array(1 => 'ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.');

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

$txt['newmessages0'] = 'เป็นข้อความใหม่';
$txt['newmessages1'] = 'ข้อความใหม่';
$txt['newmessages3'] = 'ข้อความใหม่';
$txt['newmessages4'] = ',';

$txt['admin'] = 'ผู้ดูแล';
$txt['moderate'] = 'Moderate';

$txt['save'] = 'บันทึก';

$txt['modify'] = 'แก้ไข';
$txt['forum_index'] = '%1$s - Index';
$txt['members'] = 'สมาชิก';
$txt['board_name'] = 'รายชื่อบอร์ด';
$txt['posts'] = 'กระทู้';

$txt['member_postcount'] = 'กระทู้';
$txt['no_subject'] = '(ไม่มีหัวข้อ)';
$txt['view_profile'] = 'ดูรายละเอียด';
$txt['guest_title'] = 'บุคคลทั่วไป';
$txt['author'] = 'ผู้เขียน';
$txt['on'] = 'เมื่อ';
$txt['remove'] = 'ลบทิ้ง';
$txt['start_new_topic'] = 'เริ่มหัวข้อใหม่';

$txt['login'] = 'เข้าสู่ระบบ';
// Use numeric entities in the below string.
$txt['username'] = 'ชื่อผู้ใช้งาน';
$txt['password'] = 'รหัสผ่าน';

$txt['username_no_exist'] = 'ไม่พบชื่อผู้ใช้งานนี้';
$txt['no_user_with_email'] = 'There are no usernames associated with that email.';

$txt['board_moderator'] = 'ผู้ดูแลบอร์ด';
$txt['remove_topic'] = 'ลบหัวข้อ';
$txt['topics'] = 'หัวข้อ';
$txt['modify_msg'] = 'แก้ไขข้อความ';
$txt['name'] = 'ชื่อ';
$txt['email'] = 'อีเมล์';
$txt['subject'] = 'หัวข้อ';
$txt['message'] = 'ข้อความ';
$txt['redirects'] = 'Redirects';
$txt['quick_modify'] = 'Modify Inline';

$txt['choose_pass'] = 'กรุณาเลือกรหัสผ่าน';
$txt['verify_pass'] = 'ยืนยันรหัสผ่านอีกครั้ง';
$txt['position'] = 'ตำแหน่ง';

$txt['profile_of'] = 'ดูรายละเอียดของ';
$txt['total'] = 'รวม';
$txt['posts_made'] = 'กระทู้';
$txt['website'] = 'เว็บไซต์';
$txt['register'] = 'สมัครสมาชิก';
$txt['warning_status'] = 'สถานะการแจ้งเตือน';
$txt['user_warn_watch'] = 'User is on moderator watch list';
$txt['user_warn_moderate'] = 'User posts join approval queue';
$txt['user_warn_mute'] = 'User is banned from posting';
$txt['warn_watch'] = 'Watched';
$txt['warn_moderate'] = 'Moderated';
$txt['warn_mute'] = 'Muted';

$txt['message_index'] = 'ดัชนีข้อความ';
$txt['news'] = 'ข่าว';
$txt['home'] = 'หน้าแรก';

$txt['lock_unlock'] = 'ใส่/ปลดกุญแจหัวข้อ';
$txt['post'] = 'ตั้งกระทู้';
$txt['error_occured'] = 'เกิดข้อผิดพลาด!';
$txt['at'] = 'เวลา';
$txt['logout'] = 'ออกจากระบบ';
$txt['started_by'] = 'เริ่มโดย';
$txt['replies'] = 'ตอบ';
$txt['last_post'] = 'กระทู้ล่าสุด';
$txt['admin_login'] = 'ผู้ดำเนินการเข้าสู่ระบบ';
// Use numeric entities in the below string.
$txt['topic'] = 'หัวข้อ';
$txt['help'] = 'ช่วยเหลือ';
$txt['notify'] = 'แจ้งเตือน';
$txt['unnotify'] = 'Unnotify';
$txt['notify_request'] = 'เมื่อมีคนตอบกระทู้นี้ คุณต้องการให้แจ้งเตือนทางอีเมล์?';
// Use numeric entities in the below string.
$txt['regards_team'] = 'Regards,' . "\n" . 'The ' . $context['forum_name'] . ' Team.';
$txt['notify_replies'] = 'แจ้งเตือนเมื่อมีผู้ตอบ';
$txt['move_topic'] = 'ย้ายข้อความ';
$txt['move_to'] = 'ย้ายไป';
$txt['pages'] = 'หน้า';
$txt['users_active'] = 'ผู้ใช้เมื่อ %s นาทีที่ผ่านมา';
$txt['personal_messages'] = 'ข้อความส่วนตัว';
$txt['reply_quote'] = 'ตอบโดยอ้างถึงข้อความ';
$txt['reply'] = 'ตอบ';
$txt['reply_noun'] = 'ตอบกลับ';
$txt['approve'] = 'Approve';
$txt['approve_all'] = 'approve all';
$txt['awaiting_approval'] = 'รอการอนุมัติ';
$txt['attach_awaiting_approve'] = 'Attachments awaiting approval';
$txt['post_awaiting_approval'] = 'Note: This message is awaiting approval by a moderator.';
$txt['there_are_unapproved_topics'] = 'There are %1$s topics and %2$s posts awaiting approval in this board. Click <a href="%3$s">here</a> to view them all.';

$txt['msg_alert_none'] = 'ไม่มีข้อความ';
$txt['msg_alert_you_have'] = 'คุณมี';
$txt['msg_alert_messages'] = 'ข้อความ ';
$txt['remove_message'] = 'ลบข้อความ';

$txt['online_users'] = 'ผู้ใช้งานขณะนี้';
$txt['personal_message'] = 'ข้อความส่วนตัว';
$txt['jump_to'] = 'กระโดดไป';
$txt['go'] = 'go';
$txt['are_sure_remove_topic'] = 'คุณต้องการจะลบหัวข้อนี้?';
$txt['yes'] = 'ใช่';
$txt['no'] = 'ไม่ใช่';

$txt['search_end_results'] = 'จบรายงานการค้นหา';
$txt['search_on'] = 'ที่';

$txt['search'] = 'ค้นหา';
$txt['all'] = 'ทั้งหมด';

$txt['back'] = 'กลับไปหน้าที่แล้ว';
$txt['password_reminder'] = 'เตือน';
$txt['topic_started'] = 'ข้อความที่เริ่มโดย';
$txt['title'] = 'หัวข้อ';
$txt['post_by'] = 'เริ่มหัวข้อโดย';
$txt['memberlist_searchable'] = 'ค้นหาจากรายชื่อสมาชิกทั้งหมด';
$txt['welcome_member'] = 'กรุณาต้อนรับสมาชิกใหม่';
$txt['admin_center'] = 'ศูนย์ดำเนินการระบบ';
$txt['last_edit'] = 'แก้ไขครั้งสุดท้าย';
$txt['notify_deactivate'] = 'คุณต้องการยกเลิกการแจ้งเตือนสำหรับข้อความนี้?';

$txt['recent_posts'] = 'กระทู้เมื่อเร็วๆ นี้';

$txt['location'] = 'ที่อยู่';
$txt['gender'] = 'เพศ';
$txt['date_registered'] = 'วันที่สมัครสมาชิก';

$txt['recent_view'] = 'ดูกระทู้ล่าสุดบนฟอรั่ม';
$txt['recent_updated'] = 'เป็นหัวข้อปรับปรุงเมื่อไม่นาน';

$txt['male'] = 'ชาย';
$txt['female'] = 'หญิง';

$txt['error_invalid_characters_username'] = 'รูปแบบตัวอักษรผิดในช่องชื่อผู้ใช้งาน กรุณาใช้ชื่อผู้ใช้งานภาษาอังกฤษ<br />คุณจะสามารถใช้ตัวอักษรพิเศษและภาษาไทยได้หลังจากเข้าสู่ระบบโดยเปลี่ยนในรายละเอียดส่วนตัวของคุณ';

$txt['welcome_guest'] = 'ยินดีต้อนรับคุณ, <b>%s</b> กรุณา <a href="' . $scripturl . '?action=login">เข้าสู่ระบบ</a> หรือ <a href="' . $scripturl . '?action=register">ลงทะเบียน</a>';
$txt['login_or_register'] = 'กรุณา <a href="' . $scripturl . '?action=login">เข้าสู่ระบบ</a> หรือ <a href="' . $scripturl . '?action=register">สมัครสมาชิก</a>.';
$txt['welcome_guest_activate'] = '<br /><a href="' . $scripturl . '?action=activate">ส่งอีเมล์ยืนยันการใช้งาน?</a>';
$txt['hello_member'] = 'สวัสดี,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'ยินดีต้อนรับ,';
$txt['welmsg_hey'] = 'สวัสดีคุณ';
$txt['welmsg_welcome'] = 'ยินดีต้อนรับคุณ';
$txt['welmsg_please'] = 'กรุณา';
$txt['select_destination'] = 'เลือกหัวข้อ';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'ข้อความโดย';

$txt['icon_smiley'] = 'ยิ้ม';
$txt['icon_angry'] = 'โกรธ';
$txt['icon_cheesy'] = 'ยิ้มกว้างๆ';
$txt['icon_laugh'] = 'ขำขัน';
$txt['icon_sad'] = 'เศร้า';
$txt['icon_wink'] = 'ยิ้มเท่ห์';
$txt['icon_grin'] = 'ยิงฟันยิ้ม';
$txt['icon_shocked'] = 'ตกใจ';
$txt['icon_cool'] = 'เจ๋ง';
$txt['icon_huh'] = 'ฮืม';
$txt['icon_rolleyes'] = 'ขยิบตา';
$txt['icon_tongue'] = 'แลบลิ้น';
$txt['icon_embarrassed'] = 'อายจัง';
$txt['icon_lips'] = 'รูดซิบปาก';
$txt['icon_undecided'] = 'ลังเล';
$txt['icon_kiss'] = 'จุมพิต';
$txt['icon_cry'] = 'ร้องไห้';

$txt['moderator'] = 'ผู้ดูแล';
$txt['moderators'] = 'ผู้ดูแล';

$txt['mark_board_read'] = 'มาร์คบอร์ดนี้ว่าอ่านหมดแล้ว';
$txt['views'] = 'อ่าน';
$txt['new'] = 'ใหม่';

$txt['view_all_members'] = 'แสดงผู้ใช้งานทั้งหมด';
$txt['view'] = 'แสดง';

$txt['viewing_members'] = 'กำลังดูสมาชิก %1$s ถึง %2$s ';
$txt['of_total_members'] = 'of %1$s total members';

$txt['forgot_your_password'] = 'ลืมรหัสผ่าน?';

$txt['date'] = 'วันที่';
// Use numeric entities in the below string.
$txt['from'] = 'จาก';
$txt['check_new_messages'] = 'ได้รับข้อความใหม่';
$txt['to'] = 'ถึง';

$txt['board_topics'] = 'หัวข้อ';
$txt['members_title'] = 'สมาชิก';
$txt['members_list'] = 'รายชื่อสมาชิก';
$txt['new_posts'] = 'กระทู้ใหม่';
$txt['old_posts'] = 'ไม่มีกระทู้ใหม่';
$txt['redirect_board'] = 'Redirect Board';

$txt['sendtopic_send'] = 'ส่ง';
$txt['report_sent'] = 'Your report has been sent successfully.';

$txt['time_offset'] = 'ส่วนต่างของเวลาระหว่าง เวลาท้องถิ่นกับเวลาในระบบ';
$txt['or'] = 'หรือ';

$txt['no_matches'] = 'ไม่พบสิ่งที่ต้องการค้นหา';

$txt['notification'] = 'การแจ้งเตือน';

$txt['your_ban'] = 'ขออภัย, %s คุณถูกแบนจากการใช้บอร์ดนี้';
$txt['your_ban_expires'] = 'Your ban is set to expire %s';
$txt['your_ban_expires_never'] = 'This ban is not set to expire.';
$txt['ban_continue_browse'] = 'You may continue to browse the forum as a guest.';

$txt['mark_as_read'] = 'มาร์คข้อความทั้งหมดว่าอ่านแล้ว';

$txt['hot_topics'] = 'Hot Topic (More than %1$d replies)';
$txt['very_hot_topics'] = 'Very Hot Topic (More than %1$d replies)';
$txt['locked_topic'] = 'หัวข้อที่ถูกใส่กุญแจ';
$txt['normal_topic'] = 'หัวข้อปกติ';
$txt['participation_caption'] = 'ข้อความของคุณอยู่ในหัวข้อนี้';

$txt['go_caps'] = 'ดำเนินการ';

$txt['print'] = 'พิมพ์';
$txt['profile'] = 'ข้อมูลส่วนตัว';
$txt['topic_summary'] = 'สรุปหัวข้อ';
$txt['not_applicable'] = 'ยังไม่มีข้อความ';
$txt['message_lowercase'] = 'ข้อความ';
$txt['name_in_use'] = 'ชื่อนี้มีสมาชิกอื่นใช้แล้ว';

$txt['total_members'] = 'จำนวนสมาชิกทั้งหมด';
$txt['total_posts'] = 'จำนวนตอบกระทู้ทั้งหมด';
$txt['total_topics'] = 'จำนวนหัวข้อทั้งหมด';

$txt['mins_logged_in'] = 'ระยะเวลาที่จะอยู่ในระบบ (นาที)';

$txt['preview'] = 'แสดงตัวอย่าง';
$txt['always_logged_in'] = 'คงสถานะการเข้าระบบไว้ตลอด';

$txt['logged'] = 'บันทึกการเข้า';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'เว็บไซต์';

$txt['by'] = 'โดย';

$txt['hours'] = 'ชั่วโมง';
$txt['days_word'] = 'วัน';

$txt['newest_member'] = ', คือผู้ใช้คนใหม่';

$txt['search_for'] = 'ค้นหาสำหรับ';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hi.+Are+you+there?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'โปรดทราบ ขณะนี้ระบบกำลังอยู่ในโหมด \'บำรุงรักษา\'';

$txt['read'] = 'อ่าน';
$txt['times'] = 'ครั้ง';

$txt['forum_stats'] = 'สถิติการใช้งานฟอรั่ม';
$txt['latest_member'] = 'สมาชิกล่าสุด';
$txt['total_cats'] = 'จำนวนหมวดหมู่ทั้งหมด';
$txt['latest_post'] = 'กระทู้ล่าสุด';

$txt['you_have'] = 'คุณได้รับ';
$txt['click'] = 'คลิก';
$txt['here'] = 'ที่นี่';
$txt['to_view'] = 'เพื่อแสดง';

$txt['total_boards'] = 'จำนวนบอร์ดทั้งหมด';

$txt['print_page'] = 'พิมพ์หน้านี้';

$txt['valid_email'] = 'ส่วนนี้จะต้องเป็นอีเมล์ที่ถูกต้อง';

$txt['geek'] = 'มากเกินบรรยาย';
$txt['info_center_title'] = '%s - Info Center';

$txt['send_topic'] = 'ส่งหัวข้อนี้';

$txt['sendtopic_title'] = 'ส่งหัวข้อ &quot;%s&quot; ถึงเพื่อน';
$txt['sendtopic_sender_name'] = 'ชื่อของคุณ';
$txt['sendtopic_sender_email'] = 'ที่อยู่อีเมล์ของคุณ';
$txt['sendtopic_receiver_name'] = 'ชื่อผู้รับ';
$txt['sendtopic_receiver_email'] = 'ที่อยู่อีเมล์ของผู้รับ';
$txt['sendtopic_comment'] = 'ใส่ข้อความ';

$txt['allow_user_email'] = 'Allow users to email me';

$txt['check_all'] = 'เลือกทั้งหมด';

// Use numeric entities in the below string.
$txt['database_error'] = 'ฐานข้อมูลผิดพลาด';
$txt['try_again'] = 'ลองอีกครั้ง ถ้าเกิดการผิดพลาดอีกครั้ง ให้แจ้งผู้ดูแลระบบด้วย';
$txt['file'] = 'ไฟล์';
$txt['line'] = 'บรรทัด';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF ได้ตรวจพบและซ่อมแซมข้อผิดพลาดในฐานข้อมูล ถ้าคุณดำเนินต่อไปเพื่อมีปัญหาหรือดำเนินต่อไปเพื่อรับอีเมล์เหล่านี้, โปรดติดต่อเว็บโฮสติ้งของคุณ';
$txt['database_error_versions'] = '<b>บันทึก:</b> ฐานข้อมูลคุณต้องการอัพเกรดใหม่ ฟอรั่มของคุณในขณะนี้เป็นเวอร์ชั่น %s, ด้วยเหตุนี้ SMF ของคุณ %s. มันถูกแนะนำกับเวอร์ชั่นล่าสุดในไฟล์ upgrade.php.';
$txt['template_parse_error'] = 'Template เกิดข้อผิดพลาด!';
$txt['template_parse_error_message'] = 'It seems something has gone sour on the forum with the template system.  This problem should only be temporary, so please come back later and try again.  If you continue to see this message, please contact the administrator.<br /><br />คุณยังสามารถ <a href="javascript:location.reload();">รีเฟรชหน้านี้</a>.';
$txt['template_parse_error_details'] = 'There was a problem loading the <tt><b>%1$s</b></tt> template or language file.  Please check the syntax and try again - remember, single quotes (<tt>\'</tt>) often have to be escaped with a slash (<tt>\\</tt>).  To see more specific error information from PHP, try <a href="' . $boardurl . '%1$s">accessing the file directly</a>.<br /><br />คุณอาจจะต้องการพยายาม <a href="javascript:location.reload();">รีเฟรชหน้านี้</a> หรือ <a href="' . $scripturl . '?theme=1">ใช้ธีมมาตรฐาน</a>.';

$txt['today'] = '<b>วันนี้</b> เวลา ';
$txt['yesterday'] = '<b>เมื่อวานนี้</b> เวลา ';
$txt['new_poll'] = 'สำรวจความคิดเห็น (โพลล์)';
$txt['poll_question'] = 'คำถาม';
$txt['poll_vote'] = 'โหวต';
$txt['poll_total_voters'] = 'จำนวนผู้โหวตทั้งหมด';
$txt['shortcuts'] = 'shortcut: กด alt+s เพื่อตั้งกระทู้ หรือ alt+p แสดงตัวอย่าง';
$txt['shortcuts_firefox'] = 'shortcuts: hit shift+alt+s to submit/post or shift+alt+p to preview';
$txt['poll_results'] = 'ดูผลโหวต';
$txt['poll_lock'] = 'ใส่กุญแจสำหรับโหวต';
$txt['poll_unlock'] = 'ปลดกุญแจสำหรับโหวต';
$txt['poll_edit'] = 'แก้ไขโพลล์';
$txt['poll'] = 'โพลล์';
$txt['one_day'] = '1 วัน';
$txt['one_week'] = '1 สัปดาห์';
$txt['one_month'] = '1 เดือน';
$txt['forever'] = 'ตลอดกาล';
$txt['quick_login_dec'] = 'เข้าสู่ระบบด้วยชื่อผู้ใช้ รหัสผ่าน และระยะเวลาในเซสชั่น';
$txt['one_hour'] = '1 ชั่วโมง';
$txt['moved'] = 'ย้ายแล้ว';
$txt['moved_why'] = 'โปรดใส่คำอธิบายอย่างย่อเพื่อระบุ<br />ว่าทำไมถึงถูกย้าย';
$txt['board'] = 'บอร์ด';
$txt['in'] = 'ใน';
$txt['sticky_topic'] = 'หัวข้อติดหมุด';

$txt['delete'] = 'ลบ';

$txt['your_pms'] = 'ข้อความส่วนตัวของคุณ';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[สถิติอื่นๆ]';

// Use numeric entities in the below three strings.
$txt['code'] = 'โค๊ด';
$txt['code_select'] = '[Select]';
$txt['quote_from'] = 'อ้างจาก';
$txt['quote'] = 'อ้างถึง';

$txt['merge_to_topic_id'] = 'ID of target topic';
$txt['split'] = 'แยกหัวข้อ';
$txt['merge'] = 'รวมหัวข้อ';
$txt['subject_new_topic'] = 'ชื่อสำหรับหัวข้อใหม่';
$txt['split_this_post'] = 'แยกเฉพาะกระทู้นี้';
$txt['split_after_and_this_post'] = 'แยกหัวข้อนี้และรวมกระทู้นี้ด้วย';
$txt['select_split_posts'] = 'เลือกคำตอบที่จะแยก';
$txt['new_topic'] = 'เริ่มหัวข้อใหม่';
$txt['split_successful'] = 'หัวข้อถูกแยกออกเรียบร้อยแล้ว';
$txt['origin_topic'] = 'ที่อยู่ของหัวข้อเก่า';
$txt['please_select_split'] = 'กรุณาเลือกกระทู้ที่ต้องการแยก';
$txt['merge_successful'] = 'หัวข้อถูกรวมเรียบร้อยแล้ว';
$txt['new_merged_topic'] = 'หัวข้อเพิ่งถูกรวม';
$txt['topic_to_merge'] = 'หัวข้อที่จะถูกรวม';
$txt['target_board'] = 'บอร์ดเป้าหมาย';
$txt['target_topic'] = 'หัวข้อเป้าหมาย';
$txt['merge_confirm'] = 'คุณแน่ใจหรือไม่ที่จะรวม';
$txt['with'] = 'กับ';
$txt['merge_desc'] = 'ฟังค์ชั่นนี้จะรวมข้อความสองข้อความจากสองหัวข้อเข้าด้วยกัน ข้อความจะถูกจัดเรียงตามวันเวลาที่กระทู้โดยข้อความที่กระทู้ก่อนจะอยู่บนสุด';

$txt['set_sticky'] = 'ติดหมุดให้หัวข้อนี้อยู่ด้านบน';
$txt['set_nonsticky'] = 'ยกเลิกการติดหมุด';
$txt['set_lock'] = 'ล็อกหัวข้อ';
$txt['set_unlock'] = 'ยกเลิกการล็อกหัวข้อ';

$txt['search_advanced'] = 'การค้นหาขั้นสูง';

$txt['security_risk'] = 'เรื่องความปลอดภัยขั้นสูง:';
$txt['not_removed'] = 'คุณยังไม่ถูกลบ ';
$txt['not_removed_extra'] = '%1$s is a backup of %2$s that was not generated by SMF. It can be accessed directly and used to gain unauthorised access to your forum. You should delete it immediately.';

$txt['cache_writable_head'] = 'Performance Warning';
$txt['cache_writable'] = 'The cache directory is not writable - this will adversely affect the performance of your forum.';

$txt['page_created'] = 'หน้านี้ถูกสร้างขึ้นภายในเวลา ';
$txt['seconds_with'] = ' วินาที กับ ';
$txt['queries'] = ' คำสั่ง';

$txt['report_to_mod_func'] = 'ใช้ฟังค์ชั่นนี้เพื่อแจ้งผู้ดูแลเกี่ยวกับข้อความที่กระทู้ผิด';

$txt['online'] = 'ออนไลน์';
$txt['offline'] = 'ออฟไลน์';
$txt['pm_online'] = 'ข้อความส่วนตัว (ออนไลน์)';
$txt['pm_offline'] = 'ข้อความส่วนตัว (ออฟไลน์)';
$txt['status'] = 'สถานะ';

$txt['go_up'] = 'ขึ้นบน';
$txt['go_down'] = 'ลงล่าง';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
 <a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">SMF &copy; 2011</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'วันเกิด:';
$txt['events'] = 'กิจกรรม:';
$txt['birthdays_upcoming'] = 'วันเกิดเร็วๆ นี้:';
$txt['events_upcoming'] = 'กิจกรรมเร็วๆ นี้:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'เดือน:';
$txt['calendar_year'] = 'ปี:';
$txt['calendar_day'] = 'วัน:';
$txt['calendar_event_title'] = 'หัวข้อกิจกรรม:';
$txt['calendar_event_options'] = 'Event Options';
$txt['calendar_post_in'] = 'เพิ่มในนี้:';
$txt['calendar_edit'] = 'แก้ไขกิจกรรม';
$txt['event_delete_confirm'] = 'ลบกิจกรรมนี้?';
$txt['event_delete'] = 'ลบกิจกรรม';
$txt['calendar_post_event'] = 'เพิ่มกิจกรรม';
$txt['calendar'] = 'ปฏิทิน';
$txt['calendar_link'] = 'ลิ้งค์ไปยังปฏิทิน';
$txt['calendar_upcoming'] = 'ปฏิทินเร็วๆ นี้';
$txt['calendar_today'] = 'ปฏิทินวันนี้';
$txt['calendar_week'] = 'สัปดาห์';
$txt['calendar_week_title'] = 'Week %1$d of %2$d';
$txt['calendar_numb_days'] = 'จำนวนวัน:';
$txt['calendar_how_edit'] = 'คุณแก้ไขกิจกรรมเหล่านี้อย่างไร?';
$txt['calendar_link_event'] = 'เชื่อมสู่กิจกรรม';
$txt['calendar_confirm_delete'] = 'คุณแน่ใจหรือไม่ที่ต้องการลบกิจกรรมนี้?';
$txt['calendar_linked_events'] = 'กิจกรรมที่ลิ้งค์';
$txt['calendar_click_all'] = 'click to see all %1$s';

$txt['moveTopic1'] = 'สร้างลิงค์ไปที่หัวข้อที่ถูกย้าย';
$txt['moveTopic2'] = 'เปลี่ยนชื่อของหัวข้อนี้';
$txt['moveTopic3'] = 'หัวข้อใหม่';
$txt['moveTopic4'] = 'เปลี่ยนชื่อของหัวข้อนี้ทุกๆ คำตอบ';
$txt['move_topic_unapproved_js'] = 'Warning! This topic has not yet been approved.\\n\\nIt is not recommended that you create a redirection topic unless you intend to approve the post immediately following the move.';

$txt['theme_template_error'] = 'ไม่สามารถโหลด template \'%s\' ได้';
$txt['theme_language_error'] = 'ไม่สามารถโหลดไฟล์ภาษา \'%s\' ได้';

$txt['parent_boards'] = 'บอร์ดย่อย';

$txt['smtp_no_connect'] = 'ไม่สามารถเชื่อมต่อ SMTP ได้';
$txt['smtp_port_ssl'] = 'การตั้งค่าพอร์ต SMTP ไม่ถูกต้อง; มันควรจะเป็น 465 สำหรับเซิร์ฟเวอร์ SSL';
$txt['smtp_bad_response'] = 'ไม่สามารถดึงโค๊ดจากเซิร์ฟเวอร์อีเมล์ได้';
$txt['smtp_error'] = 'การส่งอีเมล์ผิดพลาด: ';
$txt['mail_send_unable'] = 'ไม่สามารถส่งอีเมล์ \'%s\' ได้';

$txt['mlist_search'] = 'ค้นหาผู้ใช้';
$txt['mlist_search_again'] = 'ค้นหาอีกครั้ง';
$txt['mlist_search_email'] = 'ค้นหาอีเมล์';
$txt['mlist_search_messenger'] = 'ค้นหาชื่อเล่น';
$txt['mlist_search_group'] = 'ค้นหาตำแหน่ง';
$txt['mlist_search_name'] = 'ค้นหาชื่อ';
$txt['mlist_search_website'] = 'ค้นหาเว็บไซต์';
$txt['mlist_search_results'] = 'ผลการค้นหาสำหรับ';
$txt['mlist_search_by'] = 'Search by %1$s';
$txt['mlist_menu_view'] = 'View the memberlist';

$txt['attach_downloaded'] = 'ดาวน์โหลด';
$txt['attach_viewed'] = 'ดู';
$txt['attach_times'] = 'ครั้ง';

$txt['settings'] = 'การตั้งค่า';
$txt['never'] = 'ไม่มีเลย';
$txt['more'] = 'มากกว่า';

$txt['hostname'] = 'ชื่อโฮส';
$txt['you_are_post_banned'] = '%s, คุณถูกห้ามตั้งกระทู้หรือส่งข้อความส่วนตัวในฟอรั่มนี้';
$txt['ban_reason'] = 'เหตุผล';

$txt['tables_optimized'] = 'เพิ่มประสิทธิภาพให้กับฐานข้อมูล';

$txt['add_poll'] = 'เพิ่มสำรวจความคิดเห็น (โพลล์)';
$txt['poll_options6'] = 'คุณสามารถเลือกได้แค่ %s ตัวเลือก';
$txt['poll_remove'] = 'ลบสำรวจความคิดเห็น (โพลล์)';
$txt['poll_remove_warn'] = 'คุณแน่ใจหรือไม่ที่จะลบสำรวจความคิดเห็น?';
$txt['poll_results_expire'] = 'ผลลัพธ์จะถูกแสดงเมื่อได้ปิดการโหวต';
$txt['poll_expires_on'] = 'ปิดการโหวต';
$txt['poll_expired_on'] = 'ปิดการโหวต';
$txt['poll_change_vote'] = 'ลบโหวต';
$txt['poll_return_vote'] = 'ตัวเลือกโหวต';
$txt['poll_cannot_see'] = 'You cannot see the results of this poll at the moment.';

$txt['quick_mod_approve'] = 'Approve selected';
$txt['quick_mod_remove'] = 'ลบหัวข้อที่เลือก';
$txt['quick_mod_lock'] = 'ล็อคหัวข้อที่เลือก';
$txt['quick_mod_sticky'] = 'ติดหมุดหัวข้อที่เลือก';
$txt['quick_mod_move'] = 'ย้ายหัวข้อที่เลือกไป';
$txt['quick_mod_merge'] = 'รวมหัวข้อที่เลือก';
$txt['quick_mod_markread'] = 'มาร์คว่าได้อ่านแล้ว';
$txt['quick_mod_go'] = 'Go!';
$txt['quickmod_confirm'] = 'คุณแน่ใจหรือไม่?';

$txt['spell_check'] = 'ตรวจสอบคำสะกด';

$txt['quick_reply'] = 'ตอบด่วน';
$txt['quick_reply_desc'] = 'ด้วยฟังค์ชั่น <u>ตอบด่วน</u> คุณสามารถใช้โค๊ดและ เครื่องหมายแสดงอารมณ์ได้ เหมือนการตั้งกระทู้ธรรมดา แต่สามารถทำได้สะดวกกว่า';
$txt['quick_reply_warning'] = 'คำเตือน: หัวข้อนี้ถูกล็อค!<br />ผู้ดูแลเท่านั้นที่สามารถตอบกระทู้นี้ได้';
$txt['quick_reply_verification'] = 'After submitting your post you will be directed to the regular post page to verify your post %1$s.';
$txt['quick_reply_verification_guests'] = '(required for all guests)';
$txt['quick_reply_verification_posts'] = '(required for all users with less than %1$d posts)';
$txt['wait_for_approval'] = 'Note: this post will not display until it\'s been approved by a moderator.';

$txt['notification_enable_board'] = 'คุณแน่ใจหรือไม่ที่จะเปิดการเตือนเมื่อมีหัวข้อใหม่ในบอร์ดนี้?';
$txt['notification_disable_board'] = 'คุณแน่ใจหรือไม่ที่จะปิดการเตือนเมื่อมีหัวข้อใหม่ในบอร์ดนี้?';
$txt['notification_enable_topic'] = 'คุณแน่ใจหรือไม่ที่จะเปิดการเตือนเมื่อมีการตอบกระทู้ในหัวข้อนี้?';
$txt['notification_disable_topic'] = 'คุณแน่ใจหรือไม่ที่จะปิดการเตือนเมื่อมีการตอบกระทู้ในหัวข้อนี้?';

$txt['report_to_mod'] = 'แจ้งลบกระทู้นี้หรือติดต่อผู้ดูแล';
$txt['issue_warning_post'] = 'Issue a warning because of this message';

$txt['unread_topics_visit'] = 'หัวข้อเมื่อเร็วๆ นี้ที่ยังไม่ได้อ่าน';
$txt['unread_topics_visit_none'] = 'ไม่มีหัวข้อที่ยังไม่ได้อ่าน ตั้งแต่อยู่ในระบบครั้งล่าสุด <a href="' . $scripturl . '?action=unread;all">คลิกที่นี่ เพื่อลองดูหัวข้อที่ยังไม่ได้อ่านทั้งหมด</a>';
$txt['unread_topics_all'] = 'หัวข้อที่ยังไม่ได้อ่านทั้งหมด';
$txt['unread_replies'] = 'หัวข้ออัพเดท';

$txt['who_title'] = 'มีใครบ้างที่ออนไลน์';
$txt['who_and'] = ' และ ';
$txt['who_viewing_topic'] = ' กำลังดูหัวข้อนี้';
$txt['who_viewing_board'] = ' กำลังดูบอร์ดนี้';
$txt['who_member'] = 'สมาชิก';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS!';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 4.01!';
$txt['valid_xhtml'] = 'Valid XHTML 1.0!';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'บุคคลทั่วไป';
$txt['guests'] = 'บุคคลทั่วไป';
$txt['user'] = 'สมาชิก';
$txt['users'] = 'สมาชิก';
$txt['hidden'] = 'ซ่อนตัว';
$txt['buddy'] = 'เพื่อน';
$txt['buddies'] = 'เพื่อน';
$txt['most_online_ever'] = 'ออนไลน์มากที่สุด';
$txt['most_online_today'] = 'วันนี้ออนไลน์มากที่สุด';

$txt['merge_select_target_board'] = 'เลือกบอร์ดเป้าหมายสำหรับหัวข้อที่จะรวมกัน';
$txt['merge_select_poll'] = 'เลือกโพลล์ที่จะอยู่ในหัวข้อที่รวมกัน';
$txt['merge_topic_list'] = 'เลือกหัวข้อที่จะรวมกัน';
$txt['merge_select_subject'] = 'เลือกหัวข้อของกระทู้ที่จะรวมกัน';
$txt['merge_custom_subject'] = 'ชื่อหัวข้อใหม่';
$txt['merge_enforce_subject'] = 'เปลี่ยนหัวข้อของทุกข้อความให้ตรงกัน';
$txt['merge_include_notifications'] = 'รวมการแจ้งเตือนด้วยหรือไม่?';
$txt['merge_check'] = 'รวมกันหรือไม่?';
$txt['merge_no_poll'] = 'ไม่มีโพลล์';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'ไอค่อนขณะนี้';
$txt['message_icon'] = 'Message Icon';

$txt['smileys_current'] = 'ชุดสัญลักษณ์แสดงอารมณ์ขณะนี้';
$txt['smileys_none'] = 'ไม่มีสัญลักษณ์แสดงอารมณ์';
$txt['smileys_forum_board_default'] = 'ฟอรั่ม/บอร์ดมาตรฐาน';

$txt['search_results'] = 'ผลการค้นหา';
$txt['search_no_results'] = 'ไม่พบคำที่ต้องการ';

$txt['totalTimeLogged1'] = 'รวมเวลาที่อยู่ในระบบ: ';
$txt['totalTimeLogged2'] = ' วัน, ';
$txt['totalTimeLogged3'] = ' ชั่วโมงและ ';
$txt['totalTimeLogged4'] = ' นาที ';
$txt['totalTimeLogged5'] = 'วัน ';
$txt['totalTimeLogged6'] = 'ชั่วโมง ';
$txt['totalTimeLogged7'] = 'นาที';

$txt['approve_thereis'] = 'ตอนนี้มี';
$txt['approve_thereare'] = 'ตอนนี้มี';
$txt['approve_member'] = 'สมาชิกหนึ่งคน';
$txt['approve_members'] = 'สมาชิกหลายคน';
$txt['approve_members_waiting'] = 'กำลังรอการอนุมัติ';

$txt['notifyboard_turnon'] = 'คุณต้องการให้มีการแจ้งเตือนเมื่อมีผู้ตั้งหัวข้อใหม่ในบอร์ดนี้หรือไม่?';
$txt['notifyboard_turnoff'] = 'คุณแน่ใจหรือไม่ ที่จะไม่ต้องการให้มีการแจ้งเตือนเมื่อมีหัวข้อใหม่ภายในบอร์ดนี้?';

$txt['activate_code'] = 'รหัสเปิดการทำงานของคุณคือ';

$txt['find_members'] = 'ค้นหาสมาชิก';
$txt['find_username'] = 'ชื่อ, ชื่อผู้ใช้, หรือ อีเมล์';
$txt['find_buddies'] = 'แสดงเพื่อนเท่านั้น?';
$txt['find_wildcards'] = 'ใช้อักษรพิเศษ: *, ?';
$txt['find_no_results'] = 'ไม่พบ';
$txt['find_results'] = 'ผลการค้นหา';
$txt['find_close'] = 'ปิด';

$txt['unread_since_visit'] = 'แสดงกระทู้ที่ยังไม่ได้อ่าน';
$txt['show_unread_replies'] = 'แสดงกระทู้ที่ตอบกลับหัวข้อของคุณ';

$txt['change_color'] = 'เปลี่ยนสี';

$txt['quickmod_delete_selected'] = 'ลบกระทู้ที่เลือก';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'คุณได้รับข้อความส่วนตัวใหม่\\nเปิดอ่านเดี่ยวนี้?';

$txt['previous_next_back'] = '&laquo; หน้าที่แล้ว';
$txt['previous_next_forward'] = 'ต่อไป &raquo;';

$txt['movetopic_auto_board'] = '[บอร์ด]';
$txt['movetopic_auto_topic'] = '[ลิ้งค์หัวข้อ]';
$txt['movetopic_default'] = 'หัวข้อนี้ได้ถูกย้ายไปบอร์ด ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'หดหรือขยายหัวข้อ';

$txt['mark_unread'] = 'มาร์คหัวข้อยังไม่ได้อ่าน';

$txt['ssi_not_direct'] = 'เข้าไม่ถึง SSI.php โดย URL โดยตรง; คุณอาจจะต้องใช้พาท (%s) หรือเพิ่ม ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php ไม่สามารถโหลด session ได้! นี่อาจทำให้คุณมีปัญหากับการออกจากระบบและฟังก์ชั่นอื่นๆ - กรุณาตรวจสอบว่าคุณได้ include ไฟล์ SSI.php ในบรรทัดแรกของ script เว็บไซต์ของคุณ';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'แสดงตัวอย่างกระทู้';
$txt['preview_fetch'] = 'แสดงตัวอย่างเป็นที่น่าพอใจ...';
$txt['preview_new'] = 'ข้อความใหม่';
$txt['error_while_submitting'] = 'ปรากฎข้อผิดพลาดตังต่อไปนี้ขณะส่งข้อความนี้:';
$txt['error_old_topic'] = 'Warning: this topic has not been posted in for at least %1$d days.<br />Unless you\'re sure you want to reply, please consider starting a new topic.';

$txt['split_selected_posts'] = 'กระทู้ที่เลือก';
$txt['split_selected_posts_desc'] = 'กระทู้ข้างล่างจะเริ่มหัวข้อใหม่หลังจากแบ่ง';
$txt['split_reset_selection'] = 'คืนค่าตัวเลือก';

$txt['modify_cancel'] = 'ยกเลิก';
$txt['mark_read_short'] = 'มาร์คว่าอ่านแล้ว';

$txt['pm_short'] = 'ข้อความส่วนตัว';
$txt['pm_menu_read'] = 'Read your messages';
$txt['pm_menu_send'] = 'Send a message';

$txt['hello_member_ndt'] = 'สวัสดี';

$txt['unapproved_posts'] = 'Unapproved Posts (Topics: %1$d, Posts: %2$d)';

$txt['ajax_in_progress'] = 'กำลังโหลด...';

$txt['mod_reports_waiting'] = 'There are currently %1$d moderator reports open.';

$txt['view_unread_category'] = 'Unread Posts';
$txt['verification'] = 'Verification';
$txt['visual_verification_description'] = 'Type the letters shown in the picture';
$txt['visual_verification_sound'] = 'Listen to the letters';
$txt['visual_verification_request_new'] = 'Request another image';

// Sub menu labels
$txt['summary'] = 'Summary';
$txt['account'] = 'Account Settings';
$txt['forumprofile'] = 'Forum Profile';

$txt['modSettings_title'] = 'Features and Options';
$txt['package'] = 'Package Manager';
$txt['errlog'] = 'Error Log';
$txt['edit_permissions'] = 'Permissions';
$txt['mc_unapproved_attachments'] = 'Unapproved Attachments';
$txt['mc_unapproved_poststopics'] = 'Unapproved Posts and Topics';
$txt['mc_reported_posts'] = 'Reported Posts';
$txt['modlog_view'] = 'Moderation Log';
$txt['calendar_menu'] = 'View Calendar';

//!!! Send email strings - should move?
$txt['send_email'] = 'Send Email';
$txt['send_email_disclosed'] = 'Note this will be visible to the recipient.';
$txt['send_email_subject'] = 'Email Subject';

$txt['ignoring_user'] = 'You are ignoring this user.';
$txt['show_ignore_user_post'] = 'Show me the post.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Filesize';
$txt['subscribe_webslice'] = 'Subscribe to Webslice';

// Restore topic
$txt['restore_topic'] = 'Restore Topic';
$txt['restore_message'] = 'Restore';
$txt['quick_mod_restore'] = 'Restore Selected';

// Editor prompt.
$txt['prompt_text_email'] = 'Please enter the email address.';
$txt['prompt_text_ftp'] = 'Please enter the ftp address.';
$txt['prompt_text_url'] = 'Please enter the URL you wish to link to.';
$txt['prompt_text_img'] = 'Enter image location';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Delete Item';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_subtemplates'] = 'Sub templates: ';
$txt['debug_language_files'] = 'Language files: ';
$txt['debug_stylesheets'] = 'Style sheets: ';
$txt['debug_files_included'] = 'Files included: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'show';
$txt['debug_cache_hits'] = 'Cache hits: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Queries used: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Queries used: %1$d, %2$d warnings.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> line <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'which took %1$s seconds.';
$txt['debug_query_which_took_at'] = 'which took %1$s seconds at %2$s into request.';
$txt['debug_show_queries'] = '[Show Queries]';
$txt['debug_hide_queries'] = '[Hide Queries]';

?>