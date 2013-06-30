<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'แก้ไขบอร์ด';
$txt['admin_users'] = 'ดู/ลบ ข้อมูลสมาชิก';
$txt['admin_newsletters'] = 'ส่งอีเมล์ถึงสมาชิก';
$txt['admin_edit_news'] = 'แก้ไขข่าว';
$txt['admin_groups'] = 'แก้ไขกลุ่มของสมาชิก';
$txt['admin_members'] = 'รายชื่อสมาชิกทั้งหมด';
$txt['admin_members_list'] = 'ข้างล่างนี้คือรายชื่อสมาชิกที่ลงทะเบียนอยู่ในฟอรั่มของคุณ';
$txt['admin_next'] = 'ถัดไป';
$txt['admin_censored_words'] = 'ตั้งคำเซนเซอร์';
$txt['admin_censored_where'] = 'หนึ่งคำต่อหนึ่งบรรทัดดังตัวอย่าง: มึง=...';
$txt['admin_censored_desc'] = 'ตามปกติของฟอรั่มสาธารณะ คุณอาจจะต้องการจำกัดคำบางคำที่โพสต์โดยผู้ใช้งานในฟอรั่มของของคุณไว้ คุณสามารถใส่คำที่คุณต้องการให้มีการเซนเซอร์ เมื่อใดที่มีผู้ใช้งานโพสต์คำนั้นๆลงในบอร์ด ลงในช่องข้างล่างนี้';
$txt['admin_reserved_names'] = 'กำหนดชื่อที่สงวนไว้';
$txt['admin_template_edit'] = 'แก้ไขเทมเพลต์ของบอร์ด';
$txt['admin_modifications'] = 'Modifications';
$txt['admin_security_moderation'] = 'Security and Moderation';
$txt['admin_server_settings'] = 'ค่าต่างๆของระบบ';
$txt['admin_reserved_set'] = 'กำหนดชื่อสงวน';
$txt['admin_reserved_line'] = 'หนึ่งคำต่อหนึ่งบรรทัด';
$txt['admin_basic_settings'] = 'หน้านี้สำหรับตั้งค่าระบบฟอรั่มของคุณ โปรดใช้ความระมัดระวังในการปรับเปลี่ยน เพราะมันอาจก่อปัญหาได้ กรุณาสังเกตุว่าค่าบางอย่างในนี้เป็นค่าเพียงแรกเริ่มสำหรับผู้มาเยือน แต่สมาชิกอาจเปลี่ยนแปลงได้เฉพาะของตัวเอง (เช่นรูปแบบการแสดงเวลา)';
$txt['admin_maintain'] = 'เข้าโหมดบำรุงรักษา?';
$txt['admin_title'] = 'ชื่อบอร์ด';
$txt['admin_url'] = 'URL ของฟอรั่ม';
$txt['cookie_name'] = 'ชื่อคุ๊กกี้';
$txt['admin_webmaster_email'] = 'อีเมล์ของเว็บมาสเตอร์';
$txt['boarddir'] = 'ไดเร็กทอรี่ของฟอรั่ม';
$txt['sourcesdir'] = 'ไดเร็กทอรี่ของคำสั่งโปรแกรม';
$txt['cachedir'] = 'Cache Directory';
$txt['admin_news'] = 'ใช้งานข่าว?';
$txt['admin_guest_post'] = 'ไม่จำเป็นต้องเป็นสมาชิกก็ตั้งกระทู้ได้?';
$txt['admin_manage_members'] = 'ควบคุมสมาชิก';
$txt['admin_main'] = 'ควบคุมบอร์ด';
$txt['admin_config'] = 'ปรับแต่งบอร์ด';
$txt['admin_version_check'] = 'เช็ครายละเอียดเวอร์ชั่น';
$txt['admin_smffile'] = 'ไฟล์ SMF';
$txt['admin_smfpackage'] = 'แพ็คเกจ SMF';
$txt['admin_maintenance'] = 'Maintenance';
$txt['admin_image_text'] = 'ใช้ข้อความเมนูแทนภาพเมนู';
$txt['admin_credits'] = 'ผู้ร่วมงาน';
$txt['admin_agreement'] = 'ให้แสดงข้อความยืนยัน (กฏระเบียบ) เมื่อทำการสมัครสมาชิกด้วย';
$txt['admin_agreement_default'] = 'Default';
$txt['admin_agreement_select_language'] = 'Language to edit';
$txt['admin_agreement_select_language_change'] = 'Change';
$txt['admin_delete_members'] = 'ลบสมาชิกที่เลือก';
$txt['admin_repair'] = 'ซ่อมแซมบอร์ดและหัวข้อทั้งหมด';
$txt['admin_main_welcome'] = 'This is your "%1$s". From here, you can edit settings, maintain your forum, view logs, install packages, manage themes, and many other things.<div style="margin-top: 1ex;">If you have any trouble, please look at the "Support & Credits" page. If the information there doesn\'t help you, feel free to <a href="http://www.simplemachines.org/community/index.php" target="_blank" class="new_win">look to us for help</a> with the problem.</div>You may also find answers to your questions or problems by clicking the <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" border="0" /> symbols for more information on the related functions.';
$txt['admin_news_desc'] = 'กรุณาใส่ข่าวหนึ่งข่าวต่อหนึ่งช่อง รหัสบางอย่างอนุญาตให้ใช้งานได้เช่น <span title="ตัวหนา">[b]</span>, <span title="ตัวเอียง">[i]</span> และ <span title="ขีดเส้นใต้">[u]</span> เช่นเดียวกันกับสัญลักษณ์แสดงอารมณ์ และ HTML';
$txt['administrators'] = 'บอร์ดผู้ดำเนินการ';
$txt['admin_reserved_desc'] = 'ชื่อสงวนมีไว้เพื่อป้องกันผู้ใช้จากการสมัครสมาชิก หรือเลือกแสดงผลด้วยชื่อที่มีคำเหล่านี้ เลือกตัวเลือกที่คุณต้องการข้างล่างก่อนกดปุ่ม';
$txt['admin_activation_email'] = 'ส่งรหัสผ่านที่สร้างจากระบบไปยังอีเมล์ ในขั้นตอนการสมัครสมาชิก?';
$txt['admin_match_whole'] = 'เหมือนกันทั้งชื่ออย่างเดียว ถ้าไม่เลือกจะค้นหาสำหรับคำที่สงวนไว้ที่เหมือนชื่อนั่น';
$txt['admin_match_case'] = 'เหมือนกันทุกตัวอักษร ถ้าไม่เลือกการค้นหาจะไม่สนใจตัวอักษรใหญ่เล็ก';
$txt['admin_check_user'] = 'ตรวจสอบชื่อผู้ใช้';
$txt['admin_check_display'] = 'ตรวจสอบชื่อที่ไว้แสดงผล';
$txt['admin_newsletter_send'] = 'คุณสามารถส่งอีเมล์ถึงสมาชิกทุกคนจากหน้านี้ โดยที่ใช้ที่อยู่ในช่องด้านล่าง และคุณสามารถที่จะลบหรือเพิ่มที่อยู่อีเมล์ได้ตามต้องการด้วย โปรดระวังว่า แต่ละที่อยู่ต้องคั่น ตัวอย่าง: \'address1; address2\'';
$txt['admin_fader_delay'] = 'เวลาเป็นเสี้ยววินาทีที่จะแสดงผลข่าวแต่ละบรรทัดใน news fader';
$txt['admin_bbc'] = 'แสดงผลปุ่ม บนหน้าส่งกระทู้และข้อความส่วนตัว?';

$txt['admin_backup_fail'] = 'ไม่สามารถสำรอง Settings.php - ตรวจสอบไฟล์ Settings_bak.php ว่ามันสามารถเขียนทับได้หรือไม่';
$txt['modSettings_info'] = 'เปลี่ยนหรือเลือกข้อกำหนดส่วนควบคุมฟอรั่ม';
$txt['database_server'] = 'เซิร์ฟเวอร์ที่ระบบฐานข้อมูลทำงาน:';
$txt['database_user'] = 'ชื่อผู้ใช้งานสำหรับระบบฐานข้อมูล:';
$txt['database_password'] = 'รหัสผ่านสำหรับระบบฐานข้อมูล:';
$txt['database_name'] = 'ชื่อระบบฐานข้อมูล:';
$txt['registration_agreement'] = 'แก้ไขข้อตกลงในการสมัครสมาชิก';
$txt['registration_agreement_desc'] = 'ข้อตกลงนี้จะถูกแสดงผลก็ต่อเมื่อคุณได้กำหนดไว้ในส่วน ค่าต่างๆของระบบ';
$txt['database_prefix'] = 'Database Tables Prefix';
$txt['errors_list'] = 'รายการความผิดพลาดของระบบ';
$txt['errors_found'] = 'ข้อผิดพลาดด้านล่างทำลายระบบของคุณ (ว่างเปล่า ถ้าไม่มี)';
$txt['errors_fix'] = 'คุณต้องการจะซ่อมข้อผิดพลาดนี้หรือไม่';
$txt['errors_do_recount'] = 'All errors fixed - a salvage area has been created! Please click the button below to recount some key statistics.';
$txt['errors_recount_now'] = 'Recount Statistics';
$txt['errors_fixing'] = 'กำลังซ่อมข้อผิดพลาดในระบบ';
$txt['errors_fixed'] = 'ข้อผิดพลาดทั้งหมดถูกแก้ไขแล้ว! คุณอาจต้องการที่จะทำการตรวจสอบโดยการสร้างหมวดหมู่ บอร์ด หรือหัวข้อ เพื่อที่จะตัดสินใจว่าจะทำอย่างไรต่อไป';
$txt['attachments_avatars'] = 'ผู้จัดการระบบไฟล์แนบ';
$txt['attachments_desc'] = 'ที่นี่คุณจะจัดการกับไฟล์แนบในระบบของคุณ คุณสามารถกำหนดให้ลบไฟล์แนบตามขนาดหรือวันที่ที่ระบุ';
$txt['attachment_stats'] = 'สถิติของไฟล์แนบ';
$txt['attachment_integrity_check'] = 'Attachment Integrity Check';
$txt['attachment_integrity_check_desc'] = 'This function will check the integrity and sizes of attachments and filenames listed in the database and, if necessary, fix errors it encounters.';
$txt['attachment_check_now'] = 'Run check now';
$txt['attachment_pruning'] = 'Attachment Pruning';
$txt['attachment_pruning_message'] = 'Message to add to post';
$txt['attachment_pruning_warning'] = 'Are you sure you want to delete these attachments?\\nThis cannot be undone!';
$txt['attachment_total'] = 'จำนวนไฟล์แนบทั้งหมด';
$txt['attachmentdir_size'] = 'ขนาดของไดเร็กทอรี่ไฟล์แนบ';
$txt['attachmentdir_size_current'] = 'Total Size of Current Attachment Directory';
$txt['attachment_space'] = 'ขนาดที่เหลืออยู่ของไดเร็กทอรี่ไฟล์แนบ';
$txt['attachment_space_current'] = 'Total Space Available in Current Attachment Directory';
$txt['attachment_options'] = 'ตั้งค่าระบบไฟล์แนบ';
$txt['attachment_log'] = 'บันทึกระบบการแนบไฟล์';
$txt['attachment_remove_old'] = 'ลบไฟล์แนบที่เก่ากว่า';
$txt['attachment_remove_size'] = 'ลบไฟล์แนบที่ใหญ่กว่า';
$txt['attachment_name'] = 'ชื่อไฟล์แนบ';
$txt['attachment_file_size'] = 'ขนาดไฟล์';
$txt['attachmentdir_size_not_set'] = 'ไดเร็กทอรี่ไฟล์แนบไม่ได้ถูกกำหนดขนาดสูงสุดไว้';
$txt['attachment_delete_admin'] = '[ไฟล์แนบถูกลบโดยผู้ดำเนินการ]';
$txt['live'] = 'สดจาก www.simplemachines.org...';
$txt['remove_all'] = 'ลบทั้งหมด';
$txt['approve_new_members'] = 'ผู้ดูแลจะต้องทำการอนุมัติสมาชิกใหม่ทั้งหมด';
$txt['agreement_not_writable'] = 'คำเตือน - ไม่สามารถเขียนไฟล์ agreement.txt ได้ การแก้ไขใดๆ จะไม่ถูกบันทึกไว้';

$txt['version_check_desc'] = 'This shows you the versions of your installation\'s files versus those of the latest version. If any of these files are out of date, you should download and upgrade to the latest version at <a href="http://www.simplemachines.org/" target="_blank" class="new_win">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(รายละเอียดอื่นๆ)';

$txt['lfyi'] = 'คุณไม่สามารถติดต่อไฟล์ XML ข่าวจาก simplemachines.org';

$txt['manage_calendar'] = 'ปฏิทิน';
$txt['manage_search'] = 'ค้นหา';

$txt['smileys_manage'] = 'ชุดสัญลักษณ์แสดงอารมณ์';
$txt['smileys_manage_info'] = 'ติดตั้งสัญลักษณ์แสดงอารมณ์หรือเพิ่มสัญลักษณ์แสดงอารมณ์จากที่มีอยู่';
$txt['package_info'] = 'ติดตั้งความสามารถใหม่หรือแก้ไขแพ็คเกจที่มีอยู่';
$txt['theme_admin'] = 'ปรับแต่งธีมและการวางรูปแบบ';
$txt['theme_admin_info'] = 'ติดตั้งหรือแก้ไขธีมที่มีอยู่และคืนค่ากำหนดเดิม';
$txt['registration_center'] = 'ศูนย์จัดการลงทะเบียน';
$txt['member_center_info'] = 'ดูรายชื่อสมาชิก, ค้นหาและจัดการสมาชิก';

$txt['viewmembers_name'] = 'ชื่อผู้ใช้งาน (ชื่อที่ใช้แสดงผล)';
$txt['viewmembers_online'] = 'ออนไลน์ล่าสุด';
$txt['viewmembers_today'] = 'วันนี้';
$txt['viewmembers_day_ago'] = 'วัน';
$txt['viewmembers_days_ago'] = 'วัน';

$txt['display_name'] = 'ชื่อที่ใช้แสดงผล';
$txt['email_address'] = 'Email Address';
$txt['ip_address'] = 'IP address';
$txt['member_id'] = '';

$txt['unknown'] = 'unknown';
$txt['security_wrong'] = 'Administration login attempt!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'ส่งในรูปแบบ HTML (สามารถใส่โค้ด HTML ในอีเมล์ได้)';
$txt['email_parsed_html'] = 'ใส่ &lt;br /&gt;s and &amp;nbsp;s สำหรับข้อความนี้';
$txt['email_variables'] = 'ในข้อความนี้ คุณสามารถใช้ &quot;ตัวแปร&quot;บางตัว คลิก <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">ที่นี่</a> ถ้าต้องการข้อมูลเพิ่มเติม';
$txt['email_force'] = 'ส่งให้สมาชิกทุกคนแม้ว่าสมาชิกเลือกที่จะไม่รับข่าวสารก็ตาม';
$txt['email_as_pms'] = 'ส่งสิ่งนี้ ให้กลุ่มเหล่านี้ที่ใช้ข้อความส่วนตัว';
$txt['email_continue'] = 'ทำต่อไป';
$txt['email_done'] = 'ทำ';

$txt['ban_title'] = 'สมาชิกที่ถูกแบน';
$txt['ban_ip'] = 'การแบน IP: (ตัวอย่าง 192.168.12.213 or 128.0.*.*) - หมายเลขละหนึ่งบรรทัด';
$txt['ban_email'] = 'การแบนอีเมล์: (ตัวอย่าง badguy@somewhere.com) - อีเมล์ละหนึ่งบรรทัด';
$txt['ban_username'] = 'การแบนชื่อผู้ใช้: (ตัวอย่าง l33tuser) - ชื่อละหนึ่งบรรทัด';

$txt['ban_description'] = 'คุณสามารถแบนคนที่ก่อปัญหาได้โดย IP ชื่อผู้ให้บริการ ชื่อสมาชิก หรือ อีเมล์';
$txt['ban_add_new'] = 'เพิ่มใหม่';
$txt['ban_banned_entity'] = 'ประกาศห้ามสิ่งที่มีตัวตน';
$txt['ban_on_ip'] = 'Ban โดยใช้ IP (e.g. 192.168.10-20.*) ';
$txt['ban_on_hostname'] = 'แบนโดยชื่อโฮส (e.g. *.mil)';
$txt['ban_on_email'] = 'แบนโดยอีเมล์ (e.g. *@badsite.com)';
$txt['ban_on_username'] = 'แบนโดยชื่อสมาชิก';
$txt['ban_notes'] = 'บันทึก';
$txt['ban_restriction'] = 'ข้อห้าม';
$txt['ban_full_ban'] = 'แบนทุกอย่าง';
$txt['ban_partial_ban'] = 'แบนเป็นบางส่วน';
$txt['ban_cannot_post'] = 'ไม่สามารถ&nbsp;โพสต์กระทู้';
$txt['ban_cannot_register'] = 'ไม่สามารถ&nbsp;ลงทะเบียน';
$txt['ban_cannot_login'] = 'ไม่สามารถเข้าสู่ระบบ';
$txt['ban_add'] = 'เพิ่ม';
$txt['ban_edit_list'] = 'แก้ไขรายชื่อแบน';
$txt['ban_type'] = 'ชนิดของการแบน';
$txt['ban_days'] = 'วัน';
$txt['ban_will_expire_within'] = 'การแบนสิ้นสุดภายใน';
$txt['ban_added'] = 'เพิ่ม';
$txt['ban_expires'] = 'หมดอายุ';
$txt['ban_hits'] = 'ครั้ง';
$txt['ban_actions'] = 'การกระทำ';
$txt['ban_expiration'] = 'หมดอายุ';
$txt['ban_reason_desc'] = 'เหตุผลสำหรับแบน เพื่อแสดงให้สมาชิกที่ถูกแบน';
$txt['ban_notes_desc'] = 'บันทึกว่าอาจจะช่วยเหลือสมาชิกกลุ่มอื่นๆ';
$txt['ban_remove_selected'] = 'ลบแบนที่เลือก';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'คุณแน่ใจหรือไม่ที่ต้องการเอาแบนที่เลือกออก?';
$txt['ban_modify'] = 'แก้ไข';
$txt['ban_name'] = 'ชื่อแบน';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'แก้ไขแบน';
$txt['ban_add_notes'] = '<b>บันทึก</b>: หลังจากสร้างแบนข้างบน คุณสามารถเพิ่มรายการเพิ่มเติมได้อีก เช่น แบน IP, ชื่อโฮส, อีเมล์ เป็นต้น';
$txt['ban_expired'] = 'หมดอายุ / ไม่ทำงาน';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'ไม่มีการจำกัดที่เลือก';

$txt['ban_triggers'] = 'ลั่นไกปืน';
$txt['ban_add_trigger'] = 'เพิ่มแบนไกปืน';
$txt['ban_add_trigger_submit'] = 'เพิ่ม';
$txt['ban_edit_trigger'] = 'แก้ไข';
$txt['ban_edit_trigger_title'] = 'แก้ไขแบนไกปืน';
$txt['ban_edit_trigger_submit'] = 'แก้ไข';
$txt['ban_remove_selected_triggers'] = 'เอาแบนไกปืนที่เลือกออก';
$txt['ban_no_entries'] = 'There are currently no bans in effect.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'คุณแน่ใจหรือไม่ที่จะเลือกเอาแบนไกปืนออก?';
$txt['ban_trigger_browse'] = 'ค้นหาแบนไกปืน';
$txt['ban_trigger_browse_description'] = 'แสดงผลกลุ่มแบนที่มีตัวตนทั้งหมด โดย IP, ชื่อโฮส, อีเมล์และชื่อผู้ใช้งาน';

$txt['ban_log'] = 'ค่ารายงานของแบน';
$txt['ban_log_description'] = 'แสดงรายการแบนในฟอรั่มทั้งหมด โดย ชื่อผู้ใช้ที่ถูกแบน (\'แบนทุกอย่าง\' และ \'ไม่สามารถลงทะเบียน\')';
$txt['ban_log_no_entries'] = 'ไม่มีรายงานของแบน';
$txt['ban_log_ip'] = '';
$txt['ban_log_email'] = 'อีเมล์';
$txt['ban_log_member'] = 'สมาชิก';
$txt['ban_log_date'] = 'วันที่';
$txt['ban_log_remove_all'] = 'ลบทั้งหมด';
$txt['ban_log_remove_all_confirm'] = 'คุณแน่ใจหรือไม่ที่ต้องการลบค่ารายงานแบนทั้งหมด?';
$txt['ban_log_remove_selected'] = 'ลบค่ารายงานที่เลือก';
$txt['ban_log_remove_selected_confirm'] = 'คุณแน่ใจหรือไม่ที่ต้องการลบค่ารายงานแบนที่เลือกทั้งหมด?';
$txt['ban_no_triggers'] = 'ไม่มีแบนไกปืน';

$txt['settings_not_writable'] = 'ไม่สามารถแก้ไขค่าได้เนื่องจากไฟล์ Settings.php สามารถอ่านได้อย่างเดียว';

$txt['maintain_title'] = 'บำรุงรักษา';
$txt['maintain_info'] = 'เพิ่มประสิทธิภาพให้กับตาราง, ทำการสำรองข้อมูล, ตรวจสอบข้อผิดพลาดและชำระล้างบอร์ดด้วยเครื่องมือเหล่านี้';
$txt['maintain_sub_database'] = 'ฐานข้อมูล';
$txt['maintain_sub_routine'] = 'Routine';
$txt['maintain_sub_members'] = 'สมาชิก';
$txt['maintain_sub_topics'] = 'กระทู้';
$txt['maintain_done'] = 'บำรุงรักษาเสร็จแล้ว';
$txt['maintain_no_errors'] = 'ขอแสดงความยินดี, ไม่มีข้อผิดพลาดที่ค้นหา';

$txt['maintain_tasks'] = 'Scheduled Tasks';
$txt['maintain_tasks_desc'] = 'Manage all the tasks scheduled by SMF.';

$txt['scheduled_log'] = 'Task Log';
$txt['scheduled_log_desc'] = 'Lists logs of the tasks that have be ran.';
$txt['admin_log'] = 'Administration Log';
$txt['admin_log_desc'] = 'Lists administrative tasks that have been performed by admins of your forum.';
$txt['moderation_log'] = 'Moderation Log';
$txt['moderation_log_desc'] = 'Lists moderation activities that have been performed by moderators on your forum.';
$txt['spider_log_desc'] = 'Review the entries related to search engine spider activity on your forum.';
$txt['pruning_log_desc'] = 'Use these tools to prune older entries in the various logs.';

$txt['mailqueue_title'] = 'Mail';

$txt['db_error_send'] = 'ส่งอีเมล์แจ้งเมื่อ MySQL เกิดข้อผิดพลาด';
$txt['db_persist'] = 'ใช้การเชื่อมต่อค้างไว้';
$txt['ssi_db_user'] = 'Database username to use in SSI mode';
$txt['ssi_db_passwd'] = 'Database password to use in SSI mode';

$txt['default_language'] = 'ภาษามาตรฐาน';

$txt['maintenance_subject'] = 'หัวข้อสำหรับแสดงผล:';
$txt['maintenance_message'] = 'ข้อความสำหรับแสดงผล:';

$txt['errlog_desc'] = 'บันทึกข้อผิดพลาดจะบันทึกข้อผิดพลาดทั้งหมดที่เกิดขึ้นภายในฟอรั่ม รายชื่อนี้จะเรียงตามวันเวลาที่เกิดข้อผิดพลาด หากต้องการลบออกจากฐานข้อมูลเลือกเช็คบล็อคและคลิกปุ่ม %s ที่อยู่ข้างล่างสุดของหน้า';
$txt['errlog_no_entries'] = 'There are currently no error log entries.';

$txt['theme_settings'] = 'ตั้งค่าธีม';
$txt['theme_current_settings'] = 'ตั้งค่าธีมปัจจุบัน';

$txt['dvc_your'] = 'เวอร์ชั่นของคุณ';
$txt['dvc_current'] = 'เวอร์ชั่นปัจจุบัน';
$txt['dvc_sources'] = 'Sources';
$txt['dvc_default'] = 'Templates ปกติ';
$txt['dvc_templates'] = 'Templates ปัจจุบัน';
$txt['dvc_languages'] = 'ไฟล์ภาษา';

$txt['smileys_default_set_for_theme'] = 'เลือกชุดเครื่องหมายแสดงอารมณ์ปกติสำหรับธีมนี้';
$txt['smileys_no_default'] = '(ใช้ชุดเครื่องหมายแสดงอารมณ์ปกติ)';

$txt['censor_test'] = 'ทดสอบคำเซนเซอร์';
$txt['censor_test_save'] = 'ทดสอบ';
$txt['censor_case'] = 'ไม่สนใจตัวอักษรใหญ่เล็ก';
$txt['censor_whole_words'] = 'คำเซนเซอร์จะถูกตรวจสอบจากทั้งคำ';

$txt['admin_confirm_password'] = '(ยืนยัน)';
$txt['admin_incorrect_password'] = 'Incorrect Password';

$txt['date_format'] = '(19XX-12-31)';
$txt['undefined_gender'] = 'ไม่แน่ใจ';
$txt['age'] = 'อายุ ผู้ใช้งาน';
$txt['activation_status'] = 'สถานะการทำงาน';
$txt['activated'] = 'ทำงานอยู่';
$txt['not_activated'] = 'ไม่ทำงาน';
$txt['primary'] = 'หลัก';
$txt['additional'] = 'เพิ่มเติม';
$txt['messenger_address'] = 'Messenger Address';
$txt['wild_cards_allowed'] = 'สามารถใช้อักษรพิเศษได้ เช่น * , ?';
$txt['search_for'] = 'ค้นหา';
$txt['member_part_of_these_membergroups'] = 'สมาชิกเป็นส่วนหนึ่งของกลุ่มสมาชิกเหล่านี้';
$txt['membergroups'] = 'กลุ่มสมาชิก';
$txt['confirm_delete_members'] = 'ต้องการลบสมาชิกคนนี้?';

$txt['support_credits_title'] = 'การสนับสนุนและผู้ร่วมงาน';
$txt['support_credits_info'] = 'รับการสนับสนุนปัญหาทั่วไปและคำแนะนำเมื่อคุณมีปัญหา';
$txt['support_title'] = 'คำแนะนำการสนับสนุน';
$txt['support_versions_current'] = 'SMF เวอร์ชั่นปัจจุบัน';
$txt['support_versions_forum'] = 'ฟอรั่มเวอร์ชั่น';
$txt['support_versions_php'] = 'PHP เวอร์ชั่น';
$txt['support_versions_db'] = '%1$s version';
$txt['support_versions_server'] = 'Server เวอร์ชั่น';
$txt['support_versions_gd'] = 'GD เวอร์ชั่น';
$txt['support_versions'] = 'คำแนะนำเวอร์ชั่น';
$txt['support_resources'] = 'Support Resources';
$txt['support_resources_p1'] = 'Our <a href="%1$s">Online Manual</a> provides the main documentation for SMF. The SMF Online Manual has many documents to help answer support questions and explain <a href="%2$s">Features</a>, <a href="%3$s">Settings</a>, <a href="%4$s">Themes</a>, <a href="%5$s">Packages</a>, etc. The Online Manual documents each area of SMF thoroughly and should answer most questions quickly.';
$txt['support_resources_p2'] = 'If you can\'t find the answers to your questions in the Online Manual, you may want to search our <a href="%1$s">Support Community</a> or ask for assistance in either our <a href="%2$s">English</a> or one of our many <a href="%3$s">international support boards</a>. The SMF Support Community can be used for <a href="%4$s">support</a>, <a href="%5$s">customization</a>, and many other things such as discussing SMF, finding a host, and discussing administrative issues with other forum administrators.';

$txt['support_latest'] = 'ปัญหาและการสนับสนุนทั่วไป';
$txt['support_latest_fetch'] = 'คำแนะนำการกู้คืน...';

$txt['edit_permissions_info'] = 'เปลี่ยนแปลงการจำกัดและความสามารถที่มีให้ทั้งหมด หรือเฉพาะบอร์ด';
$txt['membergroups_members'] = 'สมาชิกที่ไม่มีกลุ่ม';
$txt['membergroups_guests'] = 'บุคคลทั่วไปไม่ได้ลงทะเบียน';
$txt['membergroups_guests_na'] = 'n/a';
$txt['membergroups_add_group'] = 'เพิ่มกลุ่ม';
$txt['membergroups_permissions'] = 'การอนุญาต';

$txt['permitgroups_restrict'] = 'จำกัด';
$txt['permitgroups_standard'] = 'มาตรฐาน';
$txt['permitgroups_moderator'] = 'ผู้ดูแล';
$txt['permitgroups_maintenance'] = 'บำรุงรักษา';
$txt['permitgroups_inherit'] = 'ผลกระทบ';

$txt['confirm_delete_attachments_all'] = 'คุณแน่ใจหรือไม่ที่จะลบไฟล์แนบทั้งหมด?';
$txt['confirm_delete_attachments'] = 'คุณแน่ใจหรือไม่ที่จะลบไฟล์แนบที่เลือกไว้?';
$txt['attachment_manager_browse_files'] = 'ค้นหาไฟล์';
$txt['attachment_manager_repair'] = 'รักษา';
$txt['attachment_manager_avatars'] = 'รูปส่วนตัว';
$txt['attachment_manager_attachments'] = 'แนบไฟล์';
$txt['attachment_manager_thumbs'] = 'รูปย่อ';
$txt['attachment_manager_last_active'] = 'กระทำครั้งล่าสุด';
$txt['attachment_manager_member'] = 'สมาชิก';
$txt['attachment_manager_avatars_older'] = 'ลบรูปส่วนตัวของสมาชิกที่ไม่ได้ใช้งานมากกว่า';
$txt['attachment_manager_total_avatars'] = 'รูปส่วนตัวทั้งหมด';

$txt['attachment_manager_avatars_no_entries'] = 'There are currently no avatars.';
$txt['attachment_manager_attachments_no_entries'] = 'There are currently no attachments.';
$txt['attachment_manager_thumbs_no_entries'] = 'There are currently no thumbnails.';

$txt['attachment_manager_settings'] = 'ตั้งค่าไฟล์แนบ';
$txt['attachment_manager_avatar_settings'] = 'ตั้งค่ารูปส่วนตัว';
$txt['attachment_manager_browse'] = 'ค้นหาไฟล์';
$txt['attachment_manager_maintenance'] = 'บำรุงรักษาไฟล์';
$txt['attachment_manager_save'] = 'บันทึก';

$txt['attachmentEnable'] = 'Attachments mode';
$txt['attachmentEnable_deactivate'] = 'ปิดระบบแนบไฟล์';
$txt['attachmentEnable_enable_all'] = 'เปิดระบบแนบไฟล์ทั้งหมด';
$txt['attachmentEnable_disable_new'] = 'ปิดการแนบไฟล์ใหม่';
$txt['attachmentCheckExtensions'] = 'ตรวจสอบนามสกุลของไฟล์แนบ';
$txt['attachmentExtensions'] = 'นามสกุลของไฟล์แนบที่อนุญาต';
$txt['attachmentRecodeLineEndings'] = 'Recode line endings in textual attachments';
$txt['attachmentShowImages'] = 'แสดงไฟล์แนบด้วยรูปภาพใต้กระทู้';
$txt['attachmentEncryptFilenames'] = 'เข้ารหัสเก็บไฟล์แนบ';
$txt['attachmentUploadDir'] = 'Attachments directory<div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Configure multiple attachment directories</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Attachments directory';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Configure multiple attachment directories]</a>';
$txt['attachmentDirSizeLimit'] = 'Max attachment folder space<div class="smalltext">(0 for no limit)</div>';
$txt['attachmentPostLimit'] = 'Max attachment size per post<div class="smalltext">(0 for no limit)</div>';
$txt['attachmentSizeLimit'] = 'Max size per attachment<div class="smalltext">(0 for no limit)</div>';
$txt['attachmentNumPerPostLimit'] = 'Max number of attachments per post<div class="smalltext">(0 for no limit)</div>';
$txt['attachment_gd_warning'] = 'The GD module is currently not installed. Image re-encoding is not possible.';
$txt['attachment_image_reencode'] = 'Re-encode potentially dangerous image attachments';
$txt['attachment_image_reencode_note'] = '(requires GD module)';
$txt['attachment_image_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected attachments.';
$txt['attachment_image_paranoid'] = 'Perform extensive security checks on uploaded image attachments';
$txt['attachmentThumbnails'] = 'เปลี่ยนขนาดรูปภาพเมื่อแสดงใต้กระทู้';
$txt['attachment_thumb_png'] = 'Save thumbnails as PNG';
$txt['attachmentThumbWidth'] = 'ความกว้างสุดของรูปย่อ';
$txt['attachmentThumbHeight'] = 'ความสูงสุดของรูปย่อ';

$txt['attach_dir_does_not_exist'] = 'Does Not Exist';
$txt['attach_dir_not_writable'] = 'Not Writable';
$txt['attach_dir_files_missing'] = 'Files Missing (<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Repair</a>)';
$txt['attach_dir_unused'] = 'Unused';
$txt['attach_dir_ok'] = 'OK';

$txt['attach_path_manage'] = 'Manage Attachment Paths';
$txt['attach_paths'] = 'Attachment Paths';
$txt['attach_current_dir'] = 'Current Directory';
$txt['attach_path'] = 'Path';
$txt['attach_current_size'] = 'Current Size (KB)';
$txt['attach_num_files'] = 'Files';
$txt['attach_dir_status'] = 'Status';
$txt['attach_add_path'] = 'Add Path';
$txt['attach_path_current_bad'] = 'Invalid current attachment path.';

$txt['mods_cat_avatars'] = 'รูปส่วนตัว';
$txt['avatar_directory'] = 'ไดเรอทอรี่รูปส่วนตัว';
$txt['avatar_url'] = 'URL รูปส่วนตัว';
$txt['avatar_dimension_note'] = '(0 = ไม่จำกัด)';
$txt['avatar_max_width_external'] = 'ความกว้างสุดของรูปส่วนตัวจากที่อื่น';
$txt['avatar_max_height_external'] = 'ความสูงสุดของรูปส่วนตัวจากที่อื่น';
$txt['avatar_action_too_large'] = 'ถ้าขนาดของรูปส่วนตัวใหญ่เกินไป...';
$txt['option_refuse'] = 'ยกเลิก';
$txt['option_html_resize'] = 'ให้ HTML เปลี่ยนขนาดให้';
$txt['option_js_resize'] = 'เปลี่ยนขนาดโดยใช้ จาวาสคริปต์';
$txt['option_download_and_resize'] = 'ดาวน์โหลดและเปลี่ยนขนาด (ต้องการ GD module)';
$txt['avatar_max_width_upload'] = 'Maximum width of uploaded avatar<div class="smalltext">(0 for no limit)</div>';
$txt['avatar_max_height_upload'] = 'ความสูงสุดของรูปส่วนตัวที่อัพโหลด';
$txt['avatar_resize_upload'] = 'เปลี่ยนขนาดรูปส่วนตัวที่ใหญ่เกินไป';
$txt['avatar_resize_upload_note'] = '(ต้องการ GD module)';
$txt['avatar_download_png'] = 'ใช้ PNG สำหรับรูปส่วนตัวที่เปลี่ยนขนาด?';
$txt['avatar_gd_warning'] = 'GD module ไม่ได้ติดตั้งในขณะนี้ ความสามารถของรูปส่วนตัวบางอย่างจะไม่ทำงาน';
$txt['avatar_external'] = 'รูปส่วนตัวภายนอก';
$txt['avatar_upload'] = 'อัพโหลดรูปส่วนตัว';
$txt['avatar_server_stored'] = 'รูปส่วนตัวที่เก็บไว้ในเซิร์ฟเวอร์';
$txt['avatar_server_stored_groups'] = 'กลุ่มสมาชิกที่อนุญาตให้เลือกรูปส่วนตัวที่เก็บไว้ในเครื่องเซิร์ฟเวอร์';
$txt['avatar_upload_groups'] = 'กลุ่มสมาชิกที่อนุญาตให้อัพโหลดรูปส่วนตัว';
$txt['avatar_external_url_groups'] = 'กลุ่มสมาชิกที่อนุญาตให้ใช้รูปส่วนตัวภายนอก';
$txt['avatar_select_permission'] = 'เลือกการอนุญาตสำหรับแต่ละกลุ่ม';
$txt['avatar_download_external'] = 'ดาวน์โหลดรูปส่วนตัวจาก URL ที่ให้มา';
$txt['custom_avatar_enabled'] = 'อัพโหลดรูปส่วนตัวสู่...';
$txt['option_attachment_dir'] = 'ไดเรคทอรี่ไฟล์แนบ';
$txt['option_specified_dir'] = 'ไดเรคทอรี่ที่เจาะจง...';
$txt['custom_avatar_dir'] = 'ไดเรคทอรี่อัพโหลด';
$txt['custom_avatar_dir_desc'] = 'ที่นี่ไม่ควรเหมือนกับที่เก็บไดเรคทอรี่บนเซิร์ฟเวอร์';
$txt['custom_avatar_url'] = 'URL อัพโหลด';
$txt['custom_avatar_check_empty'] = 'The custom avatar directory you have specified may be empty or invalid. Please ensure these settings are correct.';
$txt['avatar_reencode'] = 'Re-encode potentially dangerous avatars';
$txt['avatar_reencode_note'] = '(requires GD module)';
$txt['avatar_paranoid_warning'] = 'The extensive security checks can result in a large number of rejected avatars.';
$txt['avatar_paranoid'] = 'Perform extensive security checks on uploaded avatars';

$txt['repair_attachments'] = 'รักษาไฟล์แนบ';
$txt['repair_attachments_complete'] = 'บำรุงรักษาเสร็จสิ้น';
$txt['repair_attachments_complete_desc'] = 'ข้อผิดพลาดที่เลือกทั้งหมดตอนนี้ได้ถูกแก้ไข';
$txt['repair_attachments_no_errors'] = 'ไม่มีข้อผิดพลาดที่ค้นหา!';
$txt['repair_attachments_error_desc'] = 'ข้อผิดพลาดถูกค้นพบระหว่างการบำรุงรักษา ตรวจสอบในกล่องถัดไปเพื่อซ่อมและดำเนินต่อไป';
$txt['repair_attachments_continue'] = 'ทำต่อไป';
$txt['repair_attachments_cancel'] = 'ยกเลิก';
$txt['attach_repair_missing_thumbnail_parent'] = '%d รูปย่อสูญหายจากไฟล์แนบหลัก';
$txt['attach_repair_parent_missing_thumbnail'] = '%d รูปหลักสูญหายแต่รูปย่อยังอยู่';
$txt['attach_repair_file_missing_on_disk'] = '%d ไฟล์แนบ/รูปส่วนตัว มีรายการแต่ไม่มีอยู่บนดิสก์';
$txt['attach_repair_file_wrong_size'] = '%d ไฟล์แนบ/รูปส่วนตัว ถูกรายงานผิดขนาดไฟล์';
$txt['attach_repair_file_size_of_zero'] = '%d ไฟล์แนบ/รูปส่วนตัว มีขนาดศูนย์บนดิสก์ (เหล่านี้จะถูกลบ)';
$txt['attach_repair_attachment_no_msg'] = '%d ไฟล์แนบไม่มีข้อความที่เกี่ยวข้อง';
$txt['attach_repair_avatar_no_member'] = '%d รูปส่วนตัวไม่มีสมาชิกใช้งาน';
$txt['attach_repair_wrong_folder'] = '%1$d attachments are in the wrong folder';

$txt['news_title'] = 'ข่าวและจดหมายข่าว';
$txt['news_settings_desc'] = 'ที่นี่คุณสามารถเปลี่ยนการตั้งค่าและการอนุญาตเกี่ยวกับข่าวและจดหมายข่าว';
$txt['news_settings_submit'] = 'บันทึก';
$txt['news_mailing_desc'] = 'จากเมนูนี้คุณสามารถส่งข้อความให้กับสมาชิกทั้งหมด ซึ่งได้ลงทะเบียนและกรอกที่อยู่อีเมล์ของพวกเขา';
$txt['groups_edit_news'] = 'กลุ่มที่อนุญาตให้แก้ไขข่าว';
$txt['groups_send_mail'] = 'กลุ่มที่อนุญาตส่งจดหมายข่าว';
$txt['xmlnews_enable'] = 'ใช้งานข่าว XML/RSS';
$txt['xmlnews_maxlen'] = 'ความยาวสูงสุดของข่าว:<div class="smalltext">(0 ไม่กำหนด, แต่ไม่แนะนำ)</div>';
$txt['editnews_clickadd'] = 'คลิกที่นี่ เพื่อเพิ่มข่าว';
$txt['editnews_remove_selected'] = 'ลบข่าวที่เลือก';
$txt['editnews_remove_confirm'] = 'คุณแน่ใจหรือไม่ที่ต้องการลบข่าวที่เลือก?';
$txt['censor_clickadd'] = 'คลิกที่นี่ เพื่อเพิ่มคำอื่นๆ';

$txt['layout_controls'] = 'ควบคุมการวางรูปแบบฟอรั่ม';
$txt['logs'] = 'Logs';
$txt['generate_reports'] = 'สร้างรายงาน';

$txt['update_available'] = 'มีอัพเดทใหม่!';
$txt['update_message'] = 'เวอร์ชั่นของ SMF ที่คุณใช้มา กำลังล้าสมัย ซึ่งมีจุดบกพร่องจำนวนหนึ่ง
	แนะนำให้คุณ <a href="" id="update-link">ปรับปรุงฟอรั่ม</a> ให้เป็นเวอร์ชั่นล่าสุดทันทีที่เป็นไปได้!';

$txt['manageposts'] = 'กระทู้และหัวข้อ';
$txt['manageposts_title'] = 'จัดการกระทู้และหัวข้อ';
$txt['manageposts_description'] = 'ที่นี่คุณสามารถจัดการการตั้งค่าทั้งหมดเกี่ยวกับหัวข้อและกระทู้';

$txt['manageposts_seconds'] = 'วินาที';
$txt['manageposts_minutes'] = 'นาที';
$txt['manageposts_characters'] = 'ตัวอักษร';
$txt['manageposts_days'] = 'วัน';
$txt['manageposts_posts'] = 'กระทู้';
$txt['manageposts_topics'] = 'หัวข้อ';

$txt['manageposts_settings'] = 'ตั้งค่ากระทู้';
$txt['manageposts_settings_description'] = 'ที่นี่คุณสามารถตั้งค่าทุกสิ่งเกี่ยวกับกระทู้และตั้งกระทู้';
$txt['manageposts_settings_submit'] = 'บันทึก';

$txt['manageposts_bbc_settings'] = 'รหัสบอร์ดประกาศทั่วไป (BBC)';
$txt['manageposts_bbc_settings_description'] = 'รหัสบอร์ดประกาศทั่วไป สามารถใช้เพื่อเพิ่มข้อความในฟอรั่ม ตัวอย่างเช่น ถ้าคุณต้องการเน้นตัวหนาความว่า \'บ้าน\' คุณสามารถพิมพ์ [b]บ้าน[/b] รหัสบอร์ดประกาศทั่วไปทั้งหมด แท็ก จะอยู่ในวงเล็บสี่เหลี่ยม (\'[\' และ \']\').';
$txt['manageposts_bbc_settings_title'] = 'ตั้งค่ารหัสบอร์ดประกาศทั่วไป';
$txt['manageposts_bbc_settings_submit'] = 'บันทึก';

$txt['manageposts_topic_settings'] = 'ตั้งค่าหัวข้อ';
$txt['manageposts_topic_settings_description'] = 'ที่นี่คุณสามารถตั้งค่าทั้งหมดที่เกี่ยวกับหัวข้อ';
$txt['manageposts_topic_settings_submit'] = 'บันทึก';

$txt['removeNestedQuotes'] = 'ลบกลุ่มอ้างถึงเมื่อมีการตั้งกระทู้';
$txt['enableEmbeddedFlash'] = 'แสดงผลไฟล์ flash ในกระทู้';
$txt['enableEmbeddedFlash_warning'] = 'อาจจะเสี่ยงกับความปลอดภัย!';
$txt['enableSpellChecking'] = 'ตรวจสอบคำสะกด';
$txt['enableSpellChecking_warning'] = 'ไม่สามารถทำงานได้ทุกเซิร์ฟเวอร์!';
$txt['disable_wysiwyg'] = 'Disable WYSIWYG editor';
$txt['max_messageLength'] = 'จำนวนอักษรมากที่สุดที่ยินยอมให้ตั้งกระทู้';
$txt['max_messageLength_zero'] = '0 ไม่จำกัด';
$txt['fixLongWords'] = 'ยุติคำที่มีตัวอักษรมากกว่า';
$txt['fixLongWords_zero'] = '0 ไม่ทำงาน';
$txt['fixLongWords_warning'] = 'this does not work on all servers!';
$txt['topicSummaryPosts'] = 'แสดงจำนวนสรุปหัวข้อ';
$txt['spamWaitTime'] = 'ระยะเวลาต่ำสุดระหว่างการตั้งกระทู้จาก IP เดียวกัน';
$txt['edit_wait_time'] = 'กำหนดเวลาแก้ไขข้อความ';
$txt['edit_disable_time'] = 'ระยะเวลาสูงสุดอนุญาตให้แก้ไขกระทู้';
$txt['edit_disable_time_zero'] = '0 ไม่ทำงาน';

$txt['enableBBC'] = 'ใช้งานรหัสบอร์ดประกาศทั่วไป (BBC)';
$txt['enablePostHTML'] = 'ใช้งาน HTML <i>พื้นฐาน</i> ในกระทู้';
$txt['autoLinkUrls'] = 'เปลี่ยนข้อความ URL เป็นลิ้งค์';
$txt['disabledBBC'] = 'Enabled BBC tags';
$txt['bbcTagsToUse'] = 'ใช้งานแท็ก BBC';
$txt['bbcTagsToUse_select'] = 'เลือกแท็กที่อนุญาตให้ใช้';
$txt['bbcTagsToUse_select_all'] = 'เลือกแท็กทั้งหมด';

$txt['enableStickyTopics'] = 'ใช้งานหัวข้อแบบติดหมุด (sticky)';
$txt['enableParticipation'] = 'ใช้งานไอค่อนหัวข้อ';
$txt['oldTopicDays'] = 'จำนวนเวลาก่อนถูกเตือนอายุหัวข้อบนตอบกลับ';
$txt['oldTopicDays_zero'] = '0 ไม่ทำงาน';
$txt['defaultMaxTopics'] = 'จำนวนหัวข้อสูงสุดที่แสดงในแต่ละหน้ารวมหัวข้อ (message index)';
$txt['defaultMaxMessages'] = 'จำนวนข้อความสูงสุดที่แสดงในหน้าข้อความ (topic page)';
$txt['hotTopicPosts'] = 'จำนวนกระทู้ของหัวข้อน่าสนใจ';
$txt['hotTopicVeryPosts'] = 'จำนวนกระทู้ของหัวข้อน่าสนใจมาก';
$txt['enableAllMessages'] = 'จำนวนหัวข้อสูงสุดที่จะแสดง &quot;ทั้งหมด&quot;';
$txt['enableAllMessages_zero'] = '0 ไม่แสดง &quot;ทั้งหมด&quot;';
$txt['disableCustomPerPage'] = 'Disable user defined topic/message count per page';
$txt['enablePreviousNext'] = 'เปิดใช้งานลิ้งค์ ก่อนหน้า/ต่อไป';

$txt['not_done_title'] = 'มันไม่ทำงาน!';
$txt['not_done_reason'] = 'เพื่อหลีกเลี่ยงการทำงานหนักของเซิร์ฟเวอร์ กระบวนการได้ถูกค้างชั่วคราว มันควรดำเนินต่อไปโดยอัตโนมัติในวินาทีต่อไป ถ้ามันไม่ กรุณาคลิกดำเนินการต่อไปข้างล่างนี้';
$txt['not_done_continue'] = 'ดำเนินการต่อไป';

$txt['general_settings'] = 'General';
$txt['database_paths_settings'] = 'Database and Paths';
$txt['cookies_sessions_settings'] = 'Cookies and Sessions';
$txt['caching_settings'] = 'Caching';
$txt['load_balancing_settings'] = 'Load Balancing';

$txt['language_configuration'] = 'Languages';
$txt['language_description'] = 'This section allows you to edit languages installed on your forum, download new ones from the Simple Machines website. You may also edit language-related settings here.';
$txt['language_edit'] = 'Edit Languages';
$txt['language_add'] = 'Add Language';
$txt['language_settings'] = 'Settings';

$txt['advanced'] = 'Advanced';
$txt['simple'] = 'Simple';

$txt['admin_news_select_recipients'] = 'Please select who should receive a copy of the newsletter';
$txt['admin_news_select_group'] = 'Membergroups';
$txt['admin_news_select_group_desc'] = 'Select the groups to receive this newsletter.';
$txt['admin_news_select_members'] = 'Members';
$txt['admin_news_select_members_desc'] = 'Additional members to receive newsletter.';
$txt['admin_news_select_excluded_members'] = 'Excluded Members';
$txt['admin_news_select_excluded_members_desc'] = 'Members who should not receive newsletter.';
$txt['admin_news_select_excluded_groups'] = 'Excluded Groups';
$txt['admin_news_select_excluded_groups_desc'] = 'Select groups who should definitely not receive the newsletter.';
$txt['admin_news_select_email'] = 'Email Addresses';
$txt['admin_news_select_email_desc'] = 'A semi-colon separated list of email addresses which should be sent newsletter. (i.e. address1; address2)';
$txt['admin_news_select_override_notify'] = 'Override Notification Settings';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'You cannot send a personal message to an email address. If you continue all entered email addresses will be ignored.\\n\\nAre you sure you wish to do this?';

$txt['mailqueue_browse'] = 'Browse Queue';
$txt['mailqueue_settings'] = 'Mail Settings';

$txt['admin_search'] = 'ค้นหาอย่างรวดเร็ว';
$txt['admin_search_type_internal'] = 'การตั้งค่า/การทำงาน';
$txt['admin_search_type_member'] = 'สมาชิก';
$txt['admin_search_type_online'] = 'คู่มือออนไลน์';
$txt['admin_search_go'] = 'ไป';
$txt['admin_search_results'] = 'ผลการค้นหา';
$txt['admin_search_results_desc'] = 'ผลการค้นหาสำหรับ: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'ค้นหาอีกครั้ง';
$txt['admin_search_results_none'] = 'ไม่พบผลการค้นหา!';

$txt['admin_search_section_sections'] = 'Section';
$txt['admin_search_section_settings'] = 'การตั้งค่า';

$txt['core_settings_title'] = 'คุณสมบัติหลัก';
$txt['mods_cat_features'] = 'ทั่วไป';
$txt['mods_cat_security_general'] = 'ทั่วไป';
$txt['antispam_title'] = 'Anti-Spam';
$txt['mods_cat_modifications_misc'] = 'คุณสมบัติเพิ่มเติม';
$txt['mods_cat_layout'] = 'การแสดงผล';
$txt['karma'] = 'การ์มา';
$txt['moderation_settings_short'] = 'Moderation';
$txt['signature_settings_short'] = 'ลายเซ็นต์';
$txt['custom_profile_shorttitle'] = 'ช่องข้อมูลส่วนตัว';
$txt['pruning_title'] = 'Log Pruning';

$txt['boardsEdit'] = 'แก้ไขเว็บบอร์ด';
$txt['mboards_new_cat'] = 'สร้างหมวดหมู่ใหม่';
$txt['manage_holidays'] = 'จัดการวันหยุด';
$txt['calendar_settings'] = 'ตั้งค่าปฎิทิน';
$txt['search_weights'] = 'น้ำหนัก';
$txt['search_method'] = 'ค้นหาโดย';

$txt['smiley_sets'] = 'Smiley Sets';
$txt['smileys_add'] = 'Add Smiley';
$txt['smileys_edit'] = 'Edit Smileys';
$txt['smileys_set_order'] = 'Set smiley order';
$txt['icons_edit_message_icons'] = 'Edit Message Icons';

$txt['membergroups_new_group'] = 'Add Membergroup';
$txt['membergroups_edit_groups'] = 'Edit Membergroups';
$txt['permissions_groups'] = 'Permissions by Membergroup';
$txt['permissions_boards'] = 'Permissions by Board';
$txt['permissions_profiles'] = 'Edit Profiles';
$txt['permissions_post_moderation'] = 'Post Moderation';

$txt['browse_packages'] = 'Browse Packages';
$txt['download_packages'] = 'Download Packages';
$txt['installed_packages'] = 'Installed Packages';
$txt['package_file_perms'] = 'File Permissions';
$txt['package_settings'] = 'Options';
$txt['themeadmin_admin_title'] = 'Manage and Install';
$txt['themeadmin_list_title'] = 'Themes Settings';
$txt['themeadmin_reset_title'] = 'Member Options';
$txt['themeadmin_edit_title'] = 'Modify Themes';
$txt['admin_browse_register_new'] = 'Register new member';

$txt['search_engines'] = 'Search Engines';
$txt['spiders'] = 'Spiders';
$txt['spider_logs'] = 'Logs';
$txt['spider_stats'] = 'Stats';

$txt['paid_subscriptions'] = 'การลงทะเบียนสมาชิกแบบชำระเงิน';
$txt['paid_subs_view'] = 'ดูสถานะการเป็นสมาชิกที่สมัคร';

?>