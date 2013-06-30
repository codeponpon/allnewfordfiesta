<?php
// Version: 2.0; PersonalMessage

global $context;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['pm_inbox'] = 'ดัชนีข้อความส่วนตัว';
$txt['send_message'] = 'ส่งข้อความ';
$txt['pm_add'] = 'Add';
$txt['make_bcc'] = 'Add BCC';
$txt['pm_to'] = 'ถึงชื่อผู้ใช้งาน';
$txt['pm_bcc'] = 'สำเนาซ่อน (Bcc)';
$txt['inbox'] = 'ตู้รับข้อความ';
$txt['conversation'] = 'Conversation';
$txt['messages'] = 'Messages';
$txt['sent_items'] = 'Sent Items';
$txt['new_message'] = 'ข้อความใหม่';
$txt['delete_message'] = 'ลบข้อความ';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'ลบข้อความในตู้รับข้อความส่วนตัวทั้งหมด';
$txt['delete_all_confirm'] = 'คุณแน่ใจหรือไม่ ที่ต้องการจะลบข้อความทั้งหมด?';
$txt['recipient'] = 'ผู้รับ';
// Don't translate the word "SUBJECT" here, as it is used to format the message - use numeric entities as well.
$txt['new_pm_subject'] = 'New Personal Message: SUBJECT';
// Don't translate SENDER or MESSAGE in this language string; they are replaced with the corresponding text - use numeric entities too.
$txt['pm_email'] = 'You have just been sent a personal message by SENDER on ' . $context['forum_name'] . '.' . "\n\n" . 'IMPORTANT: Remember, this is just a notification. Please do not reply to this email.' . "\n\n" . 'The message they sent you was:' . "\n\n" . 'MESSAGE';
$txt['pm_multiple'] = '(ตัวอย่างผู้รับหลายคน: \'name1, name2\')';
// Use numeric entities in the below string.
$txt['instant_reply'] = 'ตอบกลับไปที่ข้อความส่วนตัว:';

$txt['delete_selected_confirm'] = 'คุณแน่ใจหรือไม่ ที่จะลบข้อความทั้งหมดที่คุณเลือก?';

$txt['sent_to'] = 'ส่งให้';
$txt['reply_to_all'] = 'ตอบกลับทั้งหมด';
$txt['delete_conversation'] = 'Delete Conversation';

$txt['pm_capacity'] = 'ความสามารถ';
$txt['pm_currently_using'] = '%s ข้อความ, %s%% เต็ม';
$txt['pm_sent'] = 'Your message has been sent successfully.';

$txt['pm_error_user_not_found'] = 'ไม่พบผู้ใช้งาน \'%s\'';
$txt['pm_error_ignored_by_user'] = 'ผู้ใช้งาน \'%s\' ได้ทำการบล็อคข้อความส่วนตัวของคุณ';
$txt['pm_error_data_limit_reached'] = 'ไม่สามารถส่งข้อความส่วนตัวไปยัง \'%s\' ได้เนื่องจากข้อความเต็ม';
$txt['pm_error_user_cannot_read'] = 'User \'%1$s\' can not receive personal messages.';
$txt['pm_successfully_sent'] = 'ข้อความส่วนตัวได้ถูกส่งให้ %s เรียบร้อยแล้ว';
$txt['pm_send_report'] = 'รายงานการส่ง';
$txt['pm_save_outbox'] = 'บันทึกข้อความเก็บไว้ในถาดออก';
$txt['pm_undisclosed_recipients'] = 'ผู้ใช้งานไม่ทราบชื่อ';
$txt['pm_too_many_recipients'] = 'คุณไม่สามารถส่งข้อความส่วนตัวมากกว่า %d ผู้รับ ในครั้งเดียว';

$txt['pm_read'] = 'อ่าน';
$txt['pm_replied'] = 'ตอบกลับถึง';

// Message Pruning.
$txt['pm_prune'] = 'ลบข้อความ';
$txt['pm_prune_desc1'] = 'ลบข้อความส่วนตัวทั้งหมดที่เก่ากว่า';
$txt['pm_prune_desc2'] = 'วัน';
$txt['pm_prune_warning'] = 'คุณแน่ใจหรือไม่ คุณต้องการลบข้อความส่วนตัวของคุณ?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'การะกระทำที่ไกลกว่า';
$txt['pm_actions_delete_selected'] = 'ลบข้อความที่เลือก';
$txt['pm_actions_filter_by_label'] = 'กรองโดยป้ายชื่อ';
$txt['pm_actions_go'] = 'ไป';

// Manage Labels Screen.
$txt['pm_apply'] = 'ใช้';
$txt['pm_manage_labels'] = 'จัดการป้ายชื่อ';
$txt['pm_labels_delete'] = 'คุณแน่ใจหรือไม่ คุณต้องการลบป้ายที่เลือก?';
$txt['pm_labels_desc'] = 'จากที่นี่ คุณสามารถเพิ่ม, แก้ไขและลบป้ายที่ใช้ในดัชนีข้อความส่วนตัว';
$txt['pm_label_add_new'] = 'เพิ่มป้ายชื่อใหม่';
$txt['pm_label_name'] = 'ชื่อป้าย';
$txt['pm_labels_no_exist'] = 'คุณยังไม่ได้ติดตั้งป้ายชื่อ!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'ป้ายชื่อ';
$txt['pm_msg_label_title'] = 'ข้อความป้ายชื่อ';
$txt['pm_msg_label_apply'] = 'เพิ่มป้ายชื่อ';
$txt['pm_msg_label_remove'] = 'ลบป้ายชื่อ';
$txt['pm_msg_label_inbox'] = 'กล้องข้อความเข้า';
$txt['pm_sel_label_title'] = 'เลือกป้ายชื่อ';

// Sidebar Headings.
$txt['pm_labels'] = 'ป้ายชื่อ';
$txt['pm_messages'] = 'ข้อความ';
$txt['pm_actions'] = 'Actions';
$txt['pm_preferences'] = 'ดูเลือกเพิ่มเติม';

$txt['pm_is_replied_to'] = 'คุณได้ตอบส่งต่อหรือตอบข้อความนี้';

// Reporting messages.
$txt['pm_report_to_admin'] = 'รายงานให้กับผู้ดูแลระบบ';
$txt['pm_report_title'] = 'รายงานสู่ข้อความส่วนตัว';
$txt['pm_report_desc'] = 'จากหน้านี้คุณสามารถรายงานข้อความส่วนตัวที่คุณได้รับถึงผู้ดูแลระบบฟอรั่ม กรุณาใส่รายละเอียดถึงเหตุผลของรายงานข้อความนี้ เนื้อหาดั้งเดิมจะส่งถูกส่งไปด้วย';
$txt['pm_report_admins'] = 'ผู้ดูแลระบบส่งรายงานให้';
$txt['pm_report_all_admins'] = 'ส่งรายงานถึงผู้ดูแลระบบฟอรั่มทั้งหมด';
$txt['pm_report_reason'] = 'เหตุผลทำไมถึงรายงานข้อความนี้';
$txt['pm_report_message'] = 'ข้อความรายงาน';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[REPORT] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} ได้รายงานข้อความส่วนบุคคลข้างล่างนี้ ส่งโดย {SENDER}, สำหรับเหตุผลดังต่อไปนี้:';
$txt['pm_report_pm_other_recipients'] = 'รวมถึงข้อความอื่นๆ ของผู้ได้รับ:';
$txt['pm_report_pm_hidden'] = '%d ซ่อนชื่อผู้รับ';
$txt['pm_report_pm_unedited_below'] = 'ข้างล่างนี้คือเนื้อหาดั้งเดิมของข้อความส่วนตัวที่ถูกรายงาน:';
$txt['pm_report_pm_sent'] = 'ส่ง:';

$txt['pm_report_done'] = 'ขอบคุณสำหรับการส่งรายงานข้อความฉบับนี้ คุณจะได้รับการตอบรับจากผู้ดูแลระบบอีกไม่นาน';
$txt['pm_report_return'] = 'กลับสู่กล่องข้อความเข้า';

$txt['pm_search_title'] = 'ค้นหาข้อความส่วนตัว';
$txt['pm_search_bar_title'] = 'ค้นหาข้อความ';
$txt['pm_search_text'] = 'ค้นหาเพื่อ';
$txt['pm_search_go'] = 'ค้นหา';
$txt['pm_search_advanced'] = 'การค้นหาขั้นสูง';
$txt['pm_search_user'] = 'โดยชื่อผู้ใช้งาน';
$txt['pm_search_match_all'] = 'เหมือนกันทุกตัวคำ';
$txt['pm_search_match_any'] = 'เหมือนกันบางคำ';
$txt['pm_search_options'] = 'ตัวเลือก';
$txt['pm_search_post_age'] = 'อายุ';
$txt['pm_search_show_complete'] = 'แสดงข้อความเต็มในผลการค้นหา';
$txt['pm_search_subject_only'] = 'ค้นหาโดยหัวข้อและผู้ส่งเท่านั้น';
$txt['pm_search_between'] = 'ระหว่าง';
$txt['pm_search_between_and'] = 'และ';
$txt['pm_search_between_days'] = 'วัน';
$txt['pm_search_order'] = 'เรียงผลการค้นหาโดย';
$txt['pm_search_choose_label'] = 'เลือกป้ายชื่อเพื่อค้นหา, หรือค้นหาทั้งหมด';

$txt['pm_search_results'] = 'ผลการค้นหา';
$txt['pm_search_none_found'] = 'ไม่มีข้อความที่ค้นพบ';

$txt['pm_search_orderby_relevant_first'] = 'ผลการค้นหาตรงประเด็นอยู่ข้างบน';
$txt['pm_search_orderby_recent_first'] = 'หัวข้อเมื่อเร็วๆ นี้อยู่ข้างบน';
$txt['pm_search_orderby_old_first'] = 'หัวข้อเก่าอยู่ข้างบน';

$txt['pm_visual_verification_label'] = 'การตรวจสอบ';
$txt['pm_visual_verification_desc'] = 'กรุณาใส่รหัสในรูปข้างบนนี้เพื่อส่ง pm';

$txt['pm_settings'] = 'Change Settings';
$txt['pm_change_view'] = 'Change View';

$txt['pm_manage_rules'] = 'Manage Rules';
$txt['pm_manage_rules_desc'] = 'Message rules allow you to automatically sort incoming messages dependant on a set of criteria you define. Below are all the rules you currently have setup. To edit a rule simply click the rule name.';
$txt['pm_rules_none'] = 'You have not yet setup any message rules.';
$txt['pm_rule_title'] = 'Rule';
$txt['pm_add_rule'] = 'Add New Rule';
$txt['pm_apply_rules'] = 'Apply Rules Now';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = 'Are you sure you wish to apply the current rules to all personal messages?';
$txt['pm_edit_rule'] = 'Edit Rule';
$txt['pm_rule_save'] = 'Save Rule';
$txt['pm_delete_selected_rule'] = 'Delete Selected Rules';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = 'Are you sure you wish to delete the selected rules?';
$txt['pm_rule_name'] = 'Name';
$txt['pm_rule_name_desc'] = 'Name to remember this rule by';
$txt['pm_rule_name_default'] = '[NAME]';
$txt['pm_rule_description'] = 'Description';
$txt['pm_rule_not_defined'] = 'Add some criteria to begin building this rule description.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><strong>Note:</strong> You appear to have javascript disabled. We highly recommend you enable javascript to use this feature.</span>';
$txt['pm_rule_criteria'] = 'Criteria';
$txt['pm_rule_criteria_add'] = 'Add Criteria';
$txt['pm_rule_criteria_pick'] = 'Choose Criteria';
$txt['pm_rule_mid'] = 'Sender Name';
$txt['pm_rule_gid'] = 'Sender\'s Group';
$txt['pm_rule_sub'] = 'Message Subject Contains';
$txt['pm_rule_msg'] = 'Message Body Contains';
$txt['pm_rule_bud'] = 'Sender is Buddy';
$txt['pm_rule_sel_group'] = 'Select Group';
$txt['pm_rule_logic'] = 'When Checking Criteria';
$txt['pm_rule_logic_and'] = 'All criteria must be met';
$txt['pm_rule_logic_or'] = 'Any criteria can be met';
$txt['pm_rule_actions'] = 'Actions';
$txt['pm_rule_sel_action'] = 'Select an Action';
$txt['pm_rule_add_action'] = 'Add Action';
$txt['pm_rule_label'] = 'Label message with';
$txt['pm_rule_sel_label'] = 'Select Label';
$txt['pm_rule_delete'] = 'Delete Message';
$txt['pm_rule_no_name'] = 'You forgot to enter a name for the rule.';
$txt['pm_rule_no_criteria'] = 'A rule must have at least one criteria and one action set.';
$txt['pm_rule_too_complex'] = 'The rule you are creating is too long for SMF to store. Try breaking it up into smaller rules.';

$txt['pm_readable_and'] = '<em>and</em>';
$txt['pm_readable_or'] = '<em>or</em>';
$txt['pm_readable_start'] = 'If ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'message is from &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'sender is from the &quot;{GROUP}&quot; group';
$txt['pm_readable_subject'] = 'message subject contains &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'message body contains &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'sender is a buddy';
$txt['pm_readable_label'] = 'apply label &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'delete the message';
$txt['pm_readable_then'] = '<strong>then</strong>';

?>