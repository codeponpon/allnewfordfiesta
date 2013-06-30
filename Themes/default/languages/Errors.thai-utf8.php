<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'คุณไม่ได้รับอนุญาตให้เข้าไปในส่วนนี้ หรือ บอร์ดที่คุณเลือกไม่มีอยู่ในระบบ';
$txt['wireless_error_notyet'] = 'Sorry, this section isn\'t available for wireless users at this time.';

$txt['mods_only'] = 'เฉพาะผู้ดูแลเท่านั้นที่สามารถลบโดยตรง โปรดลบข้อความนี้โดยอาศัยคำสั่งในการแก้ไข';
$txt['no_name'] = 'กรุณาระบุชื่อ';
$txt['no_email'] = 'กรุณาระบุอีเมล์';
$txt['topic_locked'] = 'หัวข้อนี้ถูกใส่กุญแจไว้ คุณไม่สามารถแก้ไขหรือตอบข้อความนี้';
$txt['no_password'] = 'ช่องรหัสผ่านว่างเปล่า';
$txt['already_a_user'] = 'ชื่อผู้ใช้มีผู้อื่นสมัครไว้แล้ว';
$txt['cant_move'] = 'คุณไม่สามารถย้ายข้อความนี้ได้';
$txt['login_to_post'] = 'กรุณาเข้าสู่ระบบก่อนที่จะเริ่มหัวข้อใหม่ หรือตอบกระทู้ หากคุณยังไม่มีบัญชีผู้ใช้งาน กรุณาสมัครสมาชิกก่อน <a href="' . $scripturl . '?action=register">ลงทะเบียน</a>';
$txt['passwords_dont_match'] = 'รหัสผ่านไม่เหมือนกัน';
$txt['register_to_use'] = 'คุณจะต้องสมัครสมาชิกก่อนถึงจะใช้คำสั่งดังกล่าวได้';
$txt['password_invalid_character'] = 'รูปแบบตัวอักษรผิดในช่องรหัสผ่าน';
$txt['name_invalid_character'] = 'รูปแบบตัวอักษรผิดในชื่อของคุณ';
$txt['email_invalid_character'] = 'รูปแบบตัวอักษรผิดในช่องชื่ออีเมล์';
$txt['username_reserved'] = 'ชื่อผู้ใช้งานที่คุณเลือกมีคำที่สงวนไว้ \'%s\' กรุณาเลือกชื่ออื่น';
$txt['numbers_one_to_nine'] = 'ช่องนี้อนุญาตเพียงตัวเลข 0-9';
$txt['not_a_user'] = 'The user whose profile you are trying to view does not exist.';
$txt['not_a_topic'] = 'ไม่มีหัวข้อนี้บนบอร์ด';
$txt['not_approved_topic'] = 'หัวข้อนี้ยังไม่ได้รับการอนุมัติ';
$txt['email_in_use'] = 'That email address (%1$s) is being used by a registered member already. If you feel this is a mistake, go to the login page and use the password reminder with that address.';

$txt['didnt_select_vote'] = 'คุณยังไม่ได้เลือกตัวเลือกสำหรับโหวต';
$txt['poll_error'] = 'โพลล์ดังล่าวไม่มีในระบบ หรือโพลล์นั้นถูกล็อกแล้ว หรือคุณพยายามจะโหวตเป็นครั้งสองครั้ง';
$txt['members_only'] = 'บริการนี้สำหรับสมาชิกเท่านั้น';
$txt['locked_by_admin'] = 'ผู้ดำเนินการเป็นผู้ใส่กุญแจไว้ คุณไม่สามารถปลดกุญแจได้';
$txt['not_enough_posts_karma'] = 'ขออภัย คุณไม่สามารถแก้ไขการ์มาได้เนื่องจากมีจำนวนโพสน้อยไป - คุณต้องมีอย่างน้อย %1$d.';
$txt['cant_change_own_karma'] = 'ขออภัย คุณไม่ได้รับอนุญาตให้แก้ไขการ์มาของคุณเอง';
$txt['karma_wait_time'] = 'Sorry, you can\'t repeat a karma action without waiting %1$s %2$s.';
$txt['feature_disabled'] = 'ขออภัย ตัวเลือกนี้ถูกปิดไว้';
$txt['cant_access_upload_path'] = 'พาทนี้ไม่สามารถแนบไฟล์ได้!';
$txt['file_too_big'] = 'ไฟล์ของคุณใหญ่เกินไป ขนาดสูงสุดที่อนุญาตคือ %d KB';
$txt['attach_timeout'] = 'เกิดข้อผิดพลาดในการบันทึกไฟล์แนบของคุณ อาจจะเกิดจากไฟล์ขนาดใหญ่เกินไป ทำให้ใช้ระยะเวลาในการแนบไฟล์ยาวนาน โปรดลองอีกครั้ง หรือปรึกษาผู้ดูแลระบบ';
$txt['filename_exists'] = 'gเสียใจ !อัพโหลดไฟล์นี้ไปแล้ว กรุณาเปลี่ยนชื่อ หรือตรวจสอบอีกครั้ง';
$txt['bad_attachment'] = 'Your attachment has failed security checks and cannot be uploaded. Please consult the forum administrator.';
$txt['ran_out_of_space'] = 'โฟล์เดอร์ที่ใช้เก็บไฟล์แนบเต็ม โปรดลองด้วยไฟล์ที่เล็กกว่า หรือติดต่อ ผู้ดำเนินการ';
$txt['couldnt_connect'] = 'ไม่สามารถติดต่อผู้บริการหรือไม่พบไฟล์นี้';
$txt['no_board'] = 'บอร์ดที่คุณเลือกไม่มีอยู่ในระบบ';
$txt['cant_split'] = 'ไม่อนุญาตให้คุณแยกหัวข้อ';
$txt['cant_merge'] = 'ไม่อนุญาตให้คุณรวมหัวข้อ';
$txt['no_topic_id'] = 'คุณระบุ ID ของหัวข้อที่ผิด';
$txt['split_first_post'] = 'คุณไม่สามารถแยกหัวข้อที่ข้อความแรกได้';
$txt['topic_one_post'] = 'หัวข้อนี้มีแค่ข้อความเดียวไม่สามารถแยกได้';
$txt['no_posts_selected'] = 'ไม่มีข้อความที่ถูกเลือก';
$txt['selected_all_posts'] = 'ไม่สามารถแยกข้อความ เนื่องจากข้อความทั้งหมดถูกเลือก';
$txt['cant_find_messages'] = 'ไม่สามารถค้นหาข้อความได้';
$txt['cant_find_user_email'] = 'ไม่สามารถหา User หรือ  email address';
$txt['cant_insert_topic'] = 'ไม่สามารถเพิ่มหัวข้อ';
$txt['already_a_mod'] = 'ชื่อนี้ถูกใช้ไปแล้ว กรุณาเลือกชื่ออื่น';
$txt['session_timeout'] = 'ไม่สามารถตั้งกระทู้ได้เนื่องจากหมดเวลาเสียก่อน กรุณาลองอีกครั้ง';
$txt['session_verify_fail'] = 'การตรวจสอบผิดพลาด กรุณา Login และตรวจสอบอีกครั้ง';
$txt['verify_url_fail'] = 'url ที่เชื่อมโยงผิดพลาด กรุณาลองอีกครั้ง';
$txt['guest_vote_disabled'] = 'ไม่ใช่สสมาชิก ไม่สามารถโหวตได้';

$txt['cannot_access_mod_center'] = 'คุณไม่มีสิทธิ์ใช้งานในส่วนของ moderation center.';
$txt['cannot_admin_forum'] = 'คุณไม่ได้รับอนุญาตให้ดูแลฟอรั่มนี้';
$txt['cannot_announce_topic'] = 'คุณไม่ได้รับอนุญาตเริ่มหัวข้อประกาศบนบอร์ดนี้';
$txt['cannot_approve_posts'] = 'คุณไม่มีสิทธิ์ใช้งานในส่วนของ  approve items.';
$txt['cannot_post_unapproved_attachments'] = 'คุณไม่มีสิทธิ์ใช้งานในส่วนของ  post unapproved attachments.';
$txt['cannot_post_unapproved_topics'] = 'คุณไม่มีสิทธิ์ใช้งานในส่วนของ post unapproved topics.';
$txt['cannot_post_unapproved_replies_own'] = 'คุณไม่มีสิทธิ์ใช้งานในส่วนของ post unapproved replies to your topics.';
$txt['cannot_post_unapproved_replies_any'] = 'คุณไม่มีสิทธิ์ใช้งานในส่วนของ post unapproved replies to other users\' topics.';
$txt['cannot_calendar_edit_any'] = 'คุณไม่สามารถแก้ไขกิจกรรมในปฏิทินได้';
$txt['cannot_calendar_edit_own'] = 'คุณไม่ได้รับอนุญาตในการแก้ไขกิจกรรมของคุณเอง';
$txt['cannot_calendar_post'] = 'ไม่อนุญาตให้ตั้งกระทู้กิจกรรม ขออภัย';
$txt['cannot_calendar_view'] = 'ขออภัย คุณไม่ได้รับไม่อนุญาตให้ดูปฏิทิน';
$txt['cannot_remove_any'] = 'คุณไม่ได้รับอนุญาตให้ลบหัวข้อใดๆ';
$txt['cannot_remove_own'] = 'คุณไม่สามารถลบหัวข้อของคุณเองในบอร์ดนี้';
$txt['cannot_edit_news'] = 'คุณไม่ได้รับอนุญาตให้แก้ไขรายการข่าวในฟอรั่มนี้';
$txt['cannot_pm_read'] = 'คุณไม่สามารถเข้าไปอ่านข้อความนี้';
$txt['cannot_pm_send'] = 'คุณไม่ได้รับอนุญาตให้ส่งข้อความ';
$txt['cannot_karma_edit'] = 'คุณไม่สามารถแก้ไขการ์ม่าของผู้ใช้งานอื่นได้';
$txt['cannot_lock_any'] = 'คุณไม่ได้รับอนุญาตให้สามารถล็อคหัวข้อใดๆ';
$txt['cannot_lock_own'] = 'คุณไม่สามารถล็อคหัวข้อของคุณเอง';
$txt['cannot_make_sticky'] = 'คุณไม่ได้รับอนุญาตให้ติดหมุดกับหัวข้อนี้';
$txt['cannot_manage_attachments'] = 'คุณไม่ได้รับอนุญาตให้จัดการไฟล์แนบหรือรูปส่วนตัว';
$txt['cannot_manage_bans'] = 'คุณไม่ได้รับอนุญาตให้เปลี่ยนรายการแบน';
$txt['cannot_manage_boards'] = 'คุณไม่ได้รับอนุญาตให้จัดการบอร์ดและหมวดหมู่';
$txt['cannot_manage_membergroups'] = 'คุณไม่ได้รับอนุญาตให้แก้ไขหรือกำหนดกลุ่มสมาชิก';
$txt['cannot_manage_permissions'] = 'คุณไม่ได้รับอนุญาตให้จัดการการอนุญาต';
$txt['cannot_manage_smileys'] = 'คุณไม่ได้รับอนุญาตให้จัดการสัญลักษณ์แสดงอารมณ์';
$txt['cannot_mark_any_notify'] = 'คุณไม่ได้รับอนุญาตให้ได้รับข้อความแจ้งเตือนจากหัวข้อนี้';
$txt['cannot_mark_notify'] = 'ระบบแจ้งเตือนของบอร์ดนี้ ไม่สามารถส่งข้อความแจ้งเตือนคุณได้';
$txt['cannot_merge_any'] = 'คุณไม่ได้รับอนุญาตให้รวมหัวข้อในบอร์ดนี้';
$txt['cannot_moderate_forum'] = 'คุณไม่ได้รับอนุญาตให้เปลี่ยนแปลง/แก้ไขในฟอรั่มนี้';
$txt['cannot_moderate_board'] = 'You are not allowed to moderate this board.';
$txt['cannot_modify_any'] = 'คุณไม่ได้รับอนุญาตให้เปลี่ยนแปลง/แก้ไขข้อความใดๆ';
$txt['cannot_modify_own'] = 'คุณไม่ได้รับอนุญาตให้เปลี่ยนแปลง/แก้ไขในข้อความที่คุณส่งไปแล้ว';
$txt['cannot_modify_replies'] = 'แม้ว่าข้อความนี้จะตอบกระทู้ของคุณ แต่คุณไม่สามารถแก้ไขข้อความนี้ได้';
$txt['cannot_move_own'] = 'คุณไม่ได้รับอนุญาตให้ย้ายหัวข้อของคุณในบอร์ดนี้';
$txt['cannot_move_any'] = 'คุณไม่ได้รับอนุญาตให้ย้ายหัวข้อในบอร์ดนี้';
$txt['cannot_poll_add_own'] = 'คุณไม่ได้รับอนุญาตให้สร้างโพลล์สำรวจในหัวข้อที่คุณสร้างในบอร์ดนี้';
$txt['cannot_poll_add_any'] = 'คุณไม่ได้รับอนุญาตให้สร้างโพลล์สำหรับหัวข้อนี้';
$txt['cannot_poll_edit_own'] = 'คุณไม่สามารถแก้ไขโพลล์ได้ ถึงแม้ว่าคุณจะเป็นเจ้าของโพลล์นี้';
$txt['cannot_poll_edit_any'] = 'คุณไม่ได้รับอนุญาตให้เข้าไปแก้ไขโพลล์ในบอร์ดนี้';
$txt['cannot_poll_lock_own'] = 'คุณไม่ได้รับอนุญาตให้ล็อคโพลล์ในบอร์ดนี้';
$txt['cannot_poll_lock_any'] = 'คุณไม่ได้รับอนุญาตให้ล็อคโพลล์';
$txt['cannot_poll_post'] = 'คุณไม่ได้รับอนุญาตให้สร้างโพลล์ในบอร์ดนี้';
$txt['cannot_poll_remove_own'] = 'คุณไม่ได้รับอนุญาตให้ลบโพลล์จากหัวข้อของคุณ';
$txt['cannot_poll_remove_any'] = 'คุณไม่สามารถลบโพลล์ใดๆ ในบอร์ดนี้ได้';
$txt['cannot_poll_view'] = 'คุณไม่ได้รับอนุญาตให้ดูโพลล์ในบอร์ดนี้';
$txt['cannot_poll_vote'] = 'คุณไม่สามารถโหวตโพลล์ในบอร์ดนี้ได้';
$txt['cannot_post_attachment'] = 'คุณไม่ได้รับอนุญาตให้แนบไฟล์ตรงนี้';
$txt['cannot_post_new'] = 'คุณไม่สามารถเริ่มหัวข้อใหม่ในบอร์ดนี้ได้';
$txt['cannot_post_reply_any'] = 'คุณไม่สามารถตอบกระทู้ในบอร์ดนี้ได้';
$txt['cannot_post_reply_own'] = 'คุณไม่สามารถตอบกระทู้ในบอร์ดนี้ได้ ถึงแม้ว่ากระทู้นั้นคุณจะเป็นคนสร้างก็ตาม';
$txt['cannot_profile_remove_own'] = 'ขออภัย, แต่คุณไม่ยอมลบบัญชีผู้ใช้งานของคุณ';
$txt['cannot_profile_remove_any'] = 'คุณไม่ได้รับอนุญาต ให้ลบชื่อผู้ใช้งานคนอื่น!';
$txt['cannot_profile_extra_any'] = 'คุณไม่ได้รับอนุญาตให้เปลี่ยนแปลงการตั้งค่าในข้อมูลส่วนตัว';
$txt['cannot_profile_identity_any'] = 'คุณไม่ได้รับอนุญาตให้แก้ไขบัญชีผู้ใช้';
$txt['cannot_profile_title_any'] = 'คุณไม่สามารถแก้ไขไตเติ้ลส่วนตัวของผู้อื่นได้';
$txt['cannot_profile_extra_own'] = 'ขออภัย, คุณไม่ได้รับอนุญาตให้แก้ไขข้อมูลส่วนตัวของคุณ';
$txt['cannot_profile_identity_own'] = 'คุณไม่สามารถเปลี่ยนชื่อผู้ใช้งานได้ในขณะนี้';
$txt['cannot_profile_title_own'] = 'คุณไม่ได้รับอนุญาตให้เปลี่ยนไตเติ้ลส่วนตัวของคุณ';
$txt['cannot_profile_server_avatar'] = 'คุณไม่ได้รับอนุญาตให้ใช้รูปส่วนตัวที่อยู่ในเซิร์ฟเวอร์';
$txt['cannot_profile_upload_avatar'] = 'คุณไม่ได้รับอนุญาตให้อัพโหลดรูปส่วนตัว';
$txt['cannot_profile_remote_avatar'] = 'คุณไม่สามารถใช้สัญลักษณ์แสดงอารมณ์จากที่อื่นได้';
$txt['cannot_profile_view_own'] = 'ขออภัยเป็นอย่างสูง คุณไม่สามารถดูข้อมูลส่วนตัวของคุณเองได้';
$txt['cannot_profile_view_any'] = 'ขออภัยเป็นอย่างสูง คุณไม่สามารถดูข้อมูลส่วนตัวใดๆ ของคุณได้';
$txt['cannot_delete_own'] = 'คุณไม่สามารถลบกระทู้ของคุณเองในบอร์ดนี้';
$txt['cannot_delete_replies'] = 'ขออภัย คุณไม่สามารถลบกระทู้เหล่านี้ได้ แม้ว่าจะเป็นกระทู้ตอบภายใต้หัวข้อของคุณ';
$txt['cannot_delete_any'] = 'ไม่อนุญาตให้ลบกระทู้ใดๆ ในบอร์ดนี้';
$txt['cannot_report_any'] = 'คุณไม่ได้รับอนุญาตให้รายงานกระทู้ในบอร์ดนี้';
$txt['cannot_search_posts'] = 'คุณไม่ได้รับอนุญาตให้ค้นหากระทู้ในฟอรั่มนี้';
$txt['cannot_send_mail'] = 'คุณไม่ได้รับอนุญาตให้ส่งอีเมล์ถึงทุกคนได้';
$txt['cannot_issue_warning'] = 'Sorry, you do not have permission to issue warnings to members.';
$txt['cannot_send_topic'] = 'ขออภัย ผู้ดูแลไม่อนุญาตให้ส่งหัวข้อในบอร์ดนี้';
$txt['cannot_split_any'] = 'ไม่อนุญาตให้แยกหัวข้อใดๆในบอร์ดนี้';
$txt['cannot_view_attachments'] = 'ดูเหมือนว่าคุณจะไม่ได้รับอนุญาตให้ดาวน์โหลดหรือดูไฟล์แนบในบอร์ดนี้';
$txt['cannot_view_mlist'] = 'คุณไม่ได้รับอนุญาตให้เรียกดูรายชื่อสมาชิกได้';
$txt['cannot_view_stats'] = 'คุณไม่ได้รับอนุญาตให้ดูสถิติของฟอรั่ม';
$txt['cannot_who_view'] = 'ขออภัย - คุณไม่ได้รับอนุญาตให้ดูรายชื่อผู้ที่ออนไลน์';

$txt['no_theme'] = 'ไม่พบธีม';
$txt['theme_dir_wrong'] = 'ไดเรคทอรี่ของธีมมาตรฐานผิด ถ้าคุณต้องการแก้ไขคลิกที่ข้อความนี้';
$txt['registration_disabled'] = 'ขออภัย ปิดรับการลงทะเบียน ชั่วคราว';
$txt['registration_no_secret_question'] = 'ไม่มีคำถามลับสำหรับสมาชิกนี้';
$txt['poll_range_error'] = 'ขออภัย, โพลล์จะต้องถูกเปิดไว้มากกว่า 0 วัน';
$txt['delFirstPost'] = 'คุณไม่ได้รับอนุญาตให้ลบกระทู้แรกของหัวข้อ<p>ถ้าคุณต้องการจะลบหัวข้อนี้ กดปุ่ม ลบลิ้งค์หัวข้อ หรือให้ผู้ดูแลเป็นผู้ทำให้แทน</p>';
$txt['parent_error'] = 'ไม่สามารถสร้างบอร์ดได้!';
$txt['login_cookie_error'] = 'คุณไม่สามารถเข้าสู่ระบบ กรุณาตรวจสอบค่าคุ๊กกี้';
$txt['incorrect_answer'] = 'ขออภัย แต่คุณตอบคำถามไม่ถูกต้อง กรุณากดปุ่มย้อนกลับเพื่อลองใหม่ หรือ กดปุ่มย้อนกลับสองครั้งเพื่อใช้วิธีปกติในการรับรหัสผ่าน';
$txt['no_mods'] = 'ไม่พบผู้ดูแลบอร์ด';
$txt['parent_not_found'] = 'โครงสร้างบอร์ดล้มเหลว: ไม่สามารถหาบอร์ดหลัก';
$txt['modify_post_time_passed'] = 'คุณอาจจะไม่สามารถแก้ไขกระทู้ได้ เนื่องจากกำหนดเวลาอนุญาตให้แก้ไขได้ผ่านไปแล้ว';

$txt['calendar_off'] = 'คุณไม่สามารถชมปฏิทินได้ขณะนี้เนื่องจากปฏิทินถูกระงับไว้';
$txt['invalid_month'] = 'ค่าเดือนผิดพลาด';
$txt['invalid_year'] = 'ค่าปีผิดพลาด';
$txt['invalid_day'] = 'Invalid day value.';
$txt['event_month_missing'] = 'กิจกรรมเดือนหายไป';
$txt['event_year_missing'] = 'กิจกรรมปีหายไป';
$txt['event_day_missing'] = 'กิจกรรมวันหายไป';
$txt['event_title_missing'] = 'หัวข้อกิจกรรมหายไป';
$txt['invalid_date'] = 'วันผิดพลาด';
$txt['no_event_title'] = 'ไม่ได้ใส่หัวข้อกิจกรรม';
$txt['missing_event_id'] = 'ID กิจกรรมหายไป';
$txt['cant_edit_event'] = 'คุณไม่ได้รับอนุญาตให้แก้ไขกิจกรรมได้';
$txt['missing_board_id'] = 'ID ของบอร์ดนี้หายไป';
$txt['missing_topic_id'] = 'ID ของหัวข้อนี้หายไป';
$txt['topic_doesnt_exist'] = 'ไม่มีหัวข้อนี้';
$txt['not_your_topic'] = 'คุณไม่ใช่ผู้ตั้งกระทู้นี้';
$txt['board_doesnt_exist'] = 'ไม่มีบอร์ดนี้';
$txt['no_span'] = 'การยุบรวมถูกปิด';
$txt['invalid_days_numb'] = 'เลขที่ใส่ไม่ถูกต้อง';

$txt['moveto_noboards'] = 'ไม่พบบอร์ดสำหรับการย้ายหัวข้อ!';

$txt['already_activated'] = 'รหัสไม่ถูกต้อง';
$txt['still_awaiting_approval'] = 'ชื่อผู้ใช้งานของคุณกำลังรออนุมัติจากผู้ดูแลระบบ';

$txt['invalid_email'] = 'อีเมล์ไม่ถูกต้อง / ผิดโดเมน.<br />ตัวอย่างอีเมล์ที่ถูกต้อง: evil.user@badsite.com.<br />ตัวอย่างโดเมนที่ถูกต้อง: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'วันที่หมดอายุไม่ถูกต้อง';
$txt['invalid_hostname'] = 'ชื่อโฮสไม่ถูกต้อง / ผิดโดเมน<br />ตัวอย่างชื่อโฮสที่ถูกต้อง: proxy4.badhost.com<br />ตัวอย่างโดเมนที่ถูกต้อง: *.badhost.com';
$txt['invalid_ip'] = 'IP ไม่ถูกต้อง/ ผิดโดเมน<br />ตัวอย่าง IP ที่ถูกต้อง: 127.0.0.1<br />ตัวอย่างโดเมนที่ถูกต้อง: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'IP address หรือขอบเขต IP ไม่ถูกต้อง.<br />ตัวอย่าง IP address: 127.0.0.1<br />ตัวอย่างของขอบเขต IP: 127.0.0.*';
$txt['invalid_username'] = 'ไม่พบสมาชิก';
$txt['no_ban_admin'] = 'คุณไม่สามารถแบนผู้ดูแลได้ - คุณต้องลดตำแหน่งลงก่อน!';
$txt['no_bantype_selected'] = 'ยังไม่ได้เลือกวิธีการแบน';
$txt['ban_not_found'] = 'ไม่ค้นพบแบน';
$txt['ban_unknown_restriction_type'] = 'ชนิดการจำกัดที่ไม่รู้';
$txt['ban_name_empty'] = 'The name of the ban was left empty';
$txt['ban_name_exists'] = 'The name of this ban (%1$s) already exists. Please choose a different name.';
$txt['ban_trigger_already_exists'] = 'This ban trigger (%1$s) already exists in %2$s.';

$txt['recycle_no_valid_board'] = 'ไม่ได้เลือกบอร์ดสำหรับหัวข้อรีไซเคิล';

$txt['login_threshold_fail'] = 'ขออภัย ไม่สามารถพยายามเข้าสู่ระบบได้อีก กรุณากลับมาลองในครั้งหน้า';
$txt['login_threshold_brute_fail'] = 'Sorry, but you\'ve reached your login attempts threshold.  Please wait 30 seconds and try again later.';

$txt['who_off'] = 'คุณไม่สามารถชมรายชื่อผู้ที่ออนไลน์ได้ในขณะนี้เนื่องจากถูกระงับอยู่';

$txt['merge_create_topic_failed'] = 'เกิดข้อผิดพลาดในการสร้างหัวข้อใหม่';
$txt['merge_need_more_topics'] = 'ต้องการอย่างน้อยสองหัวข้อในการรวม';

$txt['postWaitTime_broken'] = 'The last posting from your IP was less than %1$d seconds ago. Please try again later.';
$txt['registerWaitTime_broken'] = 'คุณเพิ่งลงทะเบียนไปเมื่อ %d วินาทีที่ผ่านมา!';
$txt['loginWaitTime_broken'] = 'คุณจะต้องรออีกประมาณ %d วินาทีก่อนจะเข้าสู่ระบบอีกครั้ง ขออภัย';
$txt['pmWaitTime_broken'] = 'The last personal message from your IP was less than %1$d seconds ago. Please try again later.';
$txt['reporttmWaitTime_broken'] = 'The last topic report from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendtopcWaitTime_broken'] = 'The last topic sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendmailWaitTime_broken'] = 'The last email sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['searchWaitTime_broken'] = 'You last search was less than %d seconds ago. Please try again later.';

$txt['email_missing_data'] = 'You must enter something in both the subject and message boxes.';

$txt['topic_gone'] = 'หัวข้อที่คุณต้องการค้นหาได้หายไป หรือคุณไม่ได้รับอนุญาต';
$txt['theme_edit_missing'] = 'หาไฟล์ที่คุณต้องการจะแก้ไขไม่พบ!';

$txt['attachments_no_write'] = 'ไม่สามารถเขียนไฟล์ลงในไดเรคทอรี่สำหรับไฟล์แนบได้ ไฟล์แนบหรือรูปส่วนตัวของคุณไม่ได้ถูกบันทึกไว้';
$txt['attachments_limit_per_post'] = 'คุณไม่สามารถแนบไฟล์ได้มากกว่า %d ไฟล์ต่อกระทู้';

$txt['no_dump_database'] = 'ผู้ดูแลระบบเท่านั้นที่สามารถทำการสำรองฐานข้อมูลได้!';
$txt['pm_not_yours'] = 'คุณกำลังส่งข้อความส่วนตัว ที่ไม่ใช่ของคุณ หรือไม่มีชื่อผู้ใช้งาน กรุณาลองใหม่อีกครั้ง';
$txt['mangled_post'] = 'แบบฟอร์มข้อมูลเสียหาย กรุณาลองใหม่อีกครั้ง';
$txt['quoted_post_deleted'] = 'คุณกำลังตอบกระทู้อ้างถึง กระทู้ที่ไม่มีอยู่, ถูกลบ, หรือคุณไม่สามารถดูได้';
$txt['pm_too_many_per_hour'] = 'You have exceeded the limit of %1$d personal messages per hour.';
$txt['labels_too_many'] = 'Sorry, %1$s messages already had the maximum amount of labels allowed!';

$txt['register_only_once'] = 'ขออภัย, ไม่อนุญาตให้ลงทะเบียนหลายๆ ชื่อในเวลาเดียวกันจากคอมพิวเตอร์เครื่องเดียวกัน';
$txt['admin_setting_coppa_require_contact'] = 'You must enter either a postal or fax contact if parent/guardian approval is required.';

$txt['error_long_name'] = 'ชื่อคุณยาวเกินไป';
$txt['error_no_name'] = 'ไม่มีชื่อ';
$txt['error_bad_name'] = 'คุณไม่สามารถใช้งานชื่อนี้ได้ หรือชื่อนี้เป็นชื่อที่สงวนไว้';
$txt['error_no_email'] = 'ไม่มีอีเมล์';
$txt['error_bad_email'] = 'อีเมล์ไม่สมบูรณ์';
$txt['error_no_event'] = 'ไม่มีชื่อในกิจกรรม';
$txt['error_no_subject'] = 'ไม่มีหัวข้อ';
$txt['error_no_question'] = 'ไม่มีคำถามสำหรับสำรวจความนิยมนี้';
$txt['error_no_message'] = 'ไม่มีข้อความ';
$txt['error_long_message'] = 'ข้อความยาวเกินกว่าที่อนุญาต (%1$d ตัวอักษร).';
$txt['error_no_comment'] = 'The comment field was left empty.';
$txt['error_session_timeout'] = 'หมดเวลาส่งข้อความ กรุณาส่งข้อความใหม่อีกครั้ง';
$txt['error_no_to'] = 'ไม่มีผู้รับที่เจาะจง';
$txt['error_bad_to'] = 'ไม่สามารถค้นพบผู้รับ \'to\' หนึ่งหรือมากกว่า';
$txt['error_bad_bcc'] = 'ไม่สามารถค้นพบผู้รับ \'bcc\' หนึ่งหรือมากกว่า';
$txt['error_form_already_submitted'] = 'ข้อความนี้ส่งไปแล้ว คุณอาจจะบังเอิญคลิกสองครั้งหรือพยายามรีเฟรช';
$txt['error_poll_few'] = 'ต้องมีอย่างน้อย 2 ตัวเลือก!';
$txt['error_need_qr_verification'] = 'Please complete the verification section below to complete your post.';
$txt['error_wrong_verification_code'] = 'The letters you typed don\'t match the letters that were shown in the picture.';
$txt['error_wrong_verification_answer'] = 'You did not answer the verification questions correctly.';
$txt['error_need_verification_code'] = 'Please enter the verification code below to continue to the results.';
$txt['error_bad_file'] = 'Sorry but the file specified could not be opened: %1$s';
$txt['error_bad_line'] = 'The line you specified is invalid.';

$txt['smiley_not_found'] = 'ไม่พบสัญลักษณ์แสดงอารมณ์';
$txt['smiley_has_no_code'] = 'ไม่มีโค๊ดสำหรับสัญลักษณ์แสดงอารมณ์นี้';
$txt['smiley_has_no_filename'] = 'ไม่มีชื่อไฟล์สำหรับสัญลักษณ์แสดงอารมณ์นี้';
$txt['smiley_not_unique'] = 'สัญลักษณ์แสดงอารมณ์กับรหัสนั้นมีอยู่แล้ว';
$txt['smiley_set_already_exists'] = 'สัญลักษณ์แสดงอารมณ์กับ URL นั้นมีอยู่แล้ว';
$txt['smiley_set_not_found'] = 'ไม่พบชุดสัญลักษณ์แสดงอารมณ์';
$txt['smiley_set_path_already_used'] = 'URL ของชุดสัญลักษณ์แสดงอารมณ์ กำลังถูกใช้โดยชุดสัญลักษณ์แสดงอารมณ์อื่น';
$txt['smiley_set_unable_to_import'] = 'ไม่สามารถนำเข้าชุดสัญลักษณ์แสดงอารมณ์ได้ ไดเรคทอรี่ไม่สมบูรณ์หรือไม่สามารถเข้าถึงได้';

$txt['smileys_upload_error'] = 'อัพโหลดไม่สำเร็จ';
$txt['smileys_upload_error_blank'] = 'สัญลักษณ์แสดงอารมณ์ทั้งหมดต้องเป็นรูปภาพ!';
$txt['smileys_upload_error_name'] = 'สัญลักษณ์แสดงอารมณ์ทั้งหมดต้องเป็นไฟล์เดียวกัน!';
$txt['smileys_upload_error_illegal'] = 'ชนิดไม่ถูกต้อง';

$txt['search_invalid_weights'] = 'นํ้าหนักค้นหาถูกแก้ไขอย่างไม่เหมาะสม อย่างน้อยหนึ่งนํ้าหนัก ไม่ควรถูกแก้ไข เพื่อไม่มีศูนย์ กรุณารายงานข้อผิดพลาดนี้ให้กับผู้ดูแลระบบ';
$txt['unable_to_create_temporary'] = 'ไม่สามารถสร้างตารางชั่วคราวเพื่อค้นหา กรุณารายงานข้อผิดพลาดนี้ให้กับผู้ดูแลระบบ';

$txt['package_no_file'] = 'ไม่สามารถค้นหาไฟล์เพ็คเกจได้!';
$txt['packageget_unable'] = 'ไม่สามารถติดต่อเชิร์ฟเวอร์ได้ กรุณาทดลองใช้ <a href="%s" target="_blank">url นี้</a> แทน';
$txt['not_on_simplemachines'] = 'ขออภัย, แพ็คเกจอย่างนี้สามารถดาวน์โหลดได้จาก เครื่องเซิร์ฟเวอร์ simplemachines.org เท่านั้น';
$txt['package_cant_uninstall'] = 'แพ็คเกจนี้ไม่เคยติดตั้งหรือถูกถอดออกไปแล้ว คุณไม่สามารถถอดออกได้';
$txt['package_cant_download'] = 'คุณไม่สามารถดาวน์โหลดหรือติดตั้งแพ็คเกจใหม่ได้ เพราะว่าไดเรคทอรี่แพ็คเกจไม่สามารถเขียนได้!';
$txt['package_upload_error_nofile'] = 'You did not select a package to upload.';
$txt['package_upload_error_failed'] = 'Could not upload package, please check directory permissions!';
$txt['package_upload_error_exists'] = 'ไฟล์ที่คุณกำลังอัพโหลดมีอยู่แล้วบนเซิร์ฟเวอร์ กรุณาลบมันก่อนแล้วพยายามอีกครั้ง';
$txt['package_upload_error_supports'] = 'The package manager currently allows only these file types: %1$s.';
$txt['package_upload_error_broken'] = 'Package upload failed due to the following error:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'The package you are trying to install cannot be located. You may want to manually upload the package to your Packages directory.';
$txt['package_get_error_missing_xml'] = 'The package you are attempting to install is missing the package-info.xml that must be in the root package directory.';
$txt['package_get_error_is_zero'] = 'Although the package was downloaded to the server it appears to be empty. Please check the Packages directory, and the &quot;temp&quot; sub-directory are both writable. If you continue to experience this problem you should try extracting the package on your PC and uploading the extracted files into a subdirectory in your Packages directory and try again. For example, if the package was called shout.tar.gz you should:<br />1) Download the package to your local PC and extract it into files.<br />2) Using an FTP client create a new directory in your &quot;Packages&quot; folder, in this example you may call it "shout".<br />3) Upload all the files from the extracted package to this directory.<br />4) Go back to the package manager browse page and the package will be automatically found by SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF was unable to find any valid information within the package-info.xml file included within the Package. There may be an error with the modification, or the package may be corrupt.';

$txt['no_membergroup_selected'] = 'ไม่มีกลุ่มสมาชิกที่เลือก';
$txt['membergroup_does_not_exist'] = 'ไม่มีกลุ่มสมาชิกหรือไม่สมบูรณ์';

$txt['at_least_one_admin'] = 'อย่างน้อยต้องมีผู้ดำเนินการฟอรั่มหนึ่งคน!';

$txt['error_functionality_not_windows'] = 'Sorry, this functionality is currently not available for servers running Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'ไม่พบไฟล์แนบ';

$txt['error_no_boards_selected'] = 'ไม่มีบอร์ดที่ถูกเลือก!';
$txt['error_invalid_search_string'] = 'คุณลืมใส่บางสิ่งเพื่อจะค้นหา?';
$txt['error_invalid_search_string_blacklist'] = 'Your search query contained too trivial words. Please try again with a different query.';
$txt['error_search_string_small_words'] = 'Each word must be at least two characters long.';
$txt['error_query_not_specific_enough'] = 'ปรัศนีที่เจาะจงไม่เพียงพอ พยายามใช้คำใหญ่กว่า';
$txt['error_no_messages_in_time_frame'] = 'ไม่มีข้อความที่ค้นพบในเฟรมเวลาที่เลือก';
$txt['error_no_labels_selected'] = 'ไม่มีป้ายที่เลือก!';
$txt['error_no_search_daemon'] = 'Unable to access the search daemon';

$txt['profile_errors_occurred'] = 'พบข้อผิดพลาดขณะบันทึกโปรไฟล์ของคุณดังนี้';
$txt['profile_error_bad_offset'] = 'ส่วนต่างของเวลาไม่ถูกต้อง';
$txt['profile_error_no_name'] = 'ช่องใส่ชื่อว่างเปล่า';
$txt['profile_error_name_taken'] = 'มีผู้ใช้ชื่อที่เลือกไว้แล้ว';
$txt['profile_error_name_too_long'] = 'ชื่อที่เลือกยาวเกินไป ไม่ควรมีความยาวเกินกว่า 60 ตัวอักษร';
$txt['profile_error_no_email'] = 'ช่องใส่อีเมล์ว่างเปล่า';
$txt['profile_error_bad_email'] = 'คุณยังไม่ได้กรอกอีเมล์ที่สมบูรณ์';
$txt['profile_error_email_taken'] = 'มีผู้ลงทะเบียนด้วยอีเมล์นั้นแล้ว';
$txt['profile_error_no_password'] = 'คุณยังไม่ได้กรอกรหัสผ่าน';
$txt['profile_error_bad_new_password'] = 'รหัสผ่านใหม่ทั้งสองไม่เหมือนกัน';
$txt['profile_error_bad_password'] = 'คุณกรอกรหัสผ่านไม่ถูกต้อง';
$txt['profile_error_bad_avatar'] = 'รูปส่วนตัวที่คุณเลือกใช้ ใหญ่เกินไป';
$txt['profile_error_password_short'] = 'คุณต้องมีรหัสผ่านอย่างน้อย ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' ตัวอักษร';
$txt['profile_error_password_restricted_words'] = 'รหัสผ่านของคุณต้องไม่ซํ้ากับชื่อหรืออีเมล์ที่คุณใช้งาน';
$txt['profile_error_password_chars'] = 'รหัสผ่านของคุณต้องผสมกันระหว่างตัวอักษรเล็กใหญ่กับตัวเลข';
$txt['profile_error_already_requested_group'] = 'You already have an outstanding request for this group!';
$txt['profile_error_openid_in_use'] = 'Another user is already using that OpenID authentication URL';

$txt['mysql_error_space'] = ' - ติดต่อผู้ดูแลเครื่องเซิร์ฟเวอร์เพื่อตรวจสอบพื้นที่ว่างของฐานข้อมูล';

$txt['icon_not_found'] = 'รูปภาพไอค่อนไม่สามารถค้นพบในธีมมาตรฐาน - ลองอัพโหลดรูปภาพขึ้นไปใหม่อีกครั้ง';
$txt['icon_after_itself'] = 'ไม่สามารถวางไอค่อนหลังตำแหน่งตัวเอง!';
$txt['icon_name_too_long'] = 'ชื่อไฟล์ไอค่อนไม่สามารถยาวเกินกว่า 16 ตัวอักษร';

$txt['name_censored'] = 'ขออภัย, ชื่อที่คุณพยายามใช้, %s, ถูกเซ็นเซอร์ กรุณาใช้ชื่ออื่น';

$txt['poll_already_exists'] = 'สามารถใส่โพลล์ให้กับหัวข้อได้หนึ่งโพลล์เท่านั้น!';
$txt['poll_not_found'] = 'ไม่มีการสำรวจความนิยมเกี่ยวข้องกับหัวข้อนี้!';

$txt['error_while_adding_poll'] = 'ปรากฎข้อผิดพลาดดังต่อไปนี้ เมื่อเพิ่มสำรวจความนิยมนี้';
$txt['error_while_editing_poll'] = 'ปรากฎข้อผิดพลาดดังต่อไปนี้ เมื่อแก้ไขสำรวจความนิยมนี้';

$txt['loadavg_search_disabled'] = 'เมื่อเครื่องเซิร์ฟเวอร์ทำงานหนัก ฟังค์ชั่นค้นหาจะถูกระงับใช้เพียงชั่วคราว';
$txt['loadavg_generic_disabled'] = 'ขออภัย, เมื่อเครื่องเซิร์ฟเวอร์ทำงานหนัก ความสามารถนี้ ไม่ทำงานในขณะนี้';
$txt['loadavg_allunread_disabled'] = 'เครื่องเซิร์ฟเวอร์ได้ถูกใช้ทรัพยากรไปอย่างมาก การค้นหาหัวข้อทั้งหมดที่คุณยังไม่ได้อ่านถูกระงับเพียงชั่วคราว';
$txt['loadavg_unreadreplies_disabled'] = 'เครื่องเซิร์ฟเวอร์ทำงานหนัก กรุณารอซักครู่เพื่อลองใหม่';
$txt['loadavg_show_posts_disabled'] = 'กรุณาลองใหม่อีกครั้ง ขณะนี้เครื่องเซิร์ฟเวอร์กำลังทำงานหนัก ไม่สามารถให้บริการได้';
$txt['loadavg_unread_disabled'] = 'The server\'s resources are temporarily under too high a demand to list out the topics you have not read.';

$txt['cannot_edit_permissions_inherited'] = 'You can not edit inherited permissions directly, you must either edit the parent group or edit the membergroup inheritance.';

$txt['mc_no_modreport_specified'] = 'You need to specify which report you wish to view.';
$txt['mc_no_modreport_found'] = 'The specified report either doesn\'t exist or is off limits to you';

$txt['st_cannot_retrieve_file'] = 'Could not retrieve the file %1$s.';
$txt['admin_file_not_found'] = 'Could not load the requested file: %1$s.';

$txt['themes_none_selectable'] = 'At least one theme must be selectable.';
$txt['themes_default_selectable'] = 'The overall forum default theme must be a selectable theme.';
$txt['ignoreboards_disallowed'] = 'The option to ignore boards has not been enabled.';

$txt['mboards_delete_error'] = 'No category selected!';
$txt['mboards_delete_board_error'] = 'No board selected!';

$txt['mboards_parent_own_child_error'] = 'Unable to make a parent its own child!';
$txt['mboards_board_own_child_error'] = 'Unable to make a board its own child!';

$txt['smileys_upload_error_notwritable'] = 'The following smiley directories are not writable: %1$s';
$txt['smileys_upload_error_types'] = 'Image can only have the following extensions: %1$s.';

$txt['change_email_success'] = 'Your email address has been changed, and a new activation email has been sent to it.';
$txt['resend_email_success'] = 'A new activation email has successfully been sent.';

$txt['custom_option_need_name'] = 'The profile option must have a name!';
$txt['custom_option_not_unique'] = 'Field name is not unique!';

$txt['warning_no_reason'] = 'You must enter a reason for altering the warning state of a member.';
$txt['warning_notify_blank'] = 'You selected to notify the user but did not fill in the subject/message fields.';

$txt['cannot_connect_doc_site'] = 'Could not connect to the Simple Machines Online Manual. Please check your server configuration allows external internet connections and try again later.';

$txt['movetopic_no_reason'] = 'You must enter a reason for moving the topic, or uncheck the option to \'post a redirection topic\'.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'The requested identifier did not return the proper information.';
$txt['openid_return_no_mode'] = 'The identity provider did not respond with the Open ID mode.';
$txt['openid_not_resolved'] = 'The identity provider did not approve your request.';
$txt['openid_no_assoc'] = 'Could not find the requested association with the identity provider.';
$txt['openid_sig_invalid'] = 'The signature from the identity provider is invalid.';
$txt['openid_load_data'] = 'Could not load the data from your login request.  Please try again.';
$txt['openid_not_verified'] = 'The OpenID address given has not been verified yet.  Please log in to verify.';

$txt['error_custom_field_too_long'] = 'The &quot;%1$s&quot; field cannot be greater than %2$d characters in length.';
$txt['error_custom_field_invalid_email'] = 'The &quot;%1$s&quot; field must be a valid email address.';
$txt['error_custom_field_not_number'] = 'The &quot;%1$s&quot; field must be numeric.';
$txt['error_custom_field_inproper_format'] = 'The &quot;%1$s&quot; field is an invalid format.';
$txt['error_custom_field_empty'] = 'The &quot;%1$s&quot; field cannot be left blank.';

$txt['email_no_template'] = 'The email template &quot;%1$s&quot; could not be found.';

$txt['search_api_missing'] = 'The search API could not be found! Please contact the admin to check they have uploaded the correct files.';
$txt['search_api_not_compatible'] = 'The selected search API the forum is using is out of date - falling back to standard search. Please check file %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'You cannot restore the first post in a topic.';
$txt['parent_topic_missing'] = 'The parent topic of the post you are trying to restore has been deleted.';
$txt['restored_disabled'] = 'The restoration of topics has been disabled.';
$txt['restore_not_found'] = 'The following messages could not be restored; the original topic may have been removed:<ul style="margin-top: 0px;">%1$s</ul>You will need to move these manually.';

$txt['error_invalid_dir'] = 'The directory you entered is invalid.';

$txt['error_sqlite_optimizing'] = 'Sqlite is optimizing the database, the forum can not be accessed until it has finished.  Please try refreshing this page momentarily.';

?>