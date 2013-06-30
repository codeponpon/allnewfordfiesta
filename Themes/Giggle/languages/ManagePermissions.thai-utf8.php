<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'จัดการ การอนุญาต';
$txt['permissions_modify'] = 'ขั้นสูง';
$txt['permissions_view'] = 'View';
$txt['permissions_allowed'] = 'อนุญาต';
$txt['permissions_denied'] = 'ปฎิเสธ';
$txt['permission_cannot_edit'] = '<strong>Note:</strong> You cannot edit this permission profile as it is a predefined profile included within the forum software by default. If you wish to change the permissions of this profile you must first create a duplicate profile. You can carry out this task by clicking <a href="%1$s">here</a>.';

$txt['permissions_for_profile'] = 'Permissions for Profile';
$txt['permissions_boards_desc'] = 'The list below shows which set of permissions has been assigned to each board on your forum. You may edit the assigned permission profile by either clicking the board name or select &quot;edit all&quot; from the bottom of the page. To edit the profile itself simply click the profile name.';
$txt['permissions_board_all'] = 'Edit All';
$txt['permission_profile'] = 'Permission Profile';
$txt['permission_profile_desc'] = 'Which <a href="%1$s">permission set</a> the board should use.';
$txt['permission_profile_inherit'] = 'Inherit from parent board';

$txt['permissions_profile'] = 'Profile';
$txt['permissions_profiles_desc'] = 'Permission profiles are assigned to individual boards to allow you to easily manage your security settings. From this area you can create, edit and delete permission profiles.';
$txt['permissions_profiles_change_for_board'] = 'Edit Permission Profile For: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'Default';
$txt['permissions_profile_no_polls'] = 'No Polls';
$txt['permissions_profile_reply_only'] = 'Reply Only';
$txt['permissions_profile_read_only'] = 'Read Only';

$txt['permissions_profile_rename'] = 'Rename';
$txt['permissions_profile_edit'] = 'Edit Profiles';
$txt['permissions_profile_new'] = 'New Profile';
$txt['permissions_profile_new_create'] = 'Create';
$txt['permissions_profile_name'] = 'Profile Name';
$txt['permissions_profile_used_by'] = 'Used By';
$txt['permissions_profile_used_by_one'] = '1 Board';
$txt['permissions_profile_used_by_many'] = '%1$d Boards';
$txt['permissions_profile_used_by_none'] = 'No Boards';
$txt['permissions_profile_do_edit'] = 'Edit';
$txt['permissions_profile_do_delete'] = 'Delete';
$txt['permissions_profile_copy_from'] = 'Copy Permissions From';

$txt['permissions_includes_inherited'] = 'Inherited Groups';

$txt['permissions_all'] = 'ทั้งหมด';
$txt['permissions_none'] = 'ไม่มี';
$txt['permissions_set_permissions'] = 'ตั้งค่าการอนุญาต';

$txt['permissions_advanced_options'] = 'Advanced Options';
$txt['permissions_with_selection'] = 'กับที่เลือกไว้';
$txt['permissions_apply_pre_defined'] = 'ใช้งานโปรไฟล์การอนุญาตที่กำหนดไว้แล้ว';
$txt['permissions_select_pre_defined'] = 'เลือกโปรไฟล์ที่กำหนดไว้แล้ว';
$txt['permissions_copy_from_board'] = 'คัดลอกการอนุญาตจากบอร์ดนี้';
$txt['permissions_select_board'] = 'เลือกบอร์ด';
$txt['permissions_like_group'] = 'ตั้งการอนุญาตให้เหมือนกลุ่มนี้';
$txt['permissions_select_membergroup'] = 'เลือกกลุ่มสมาชิก';
$txt['permissions_add'] = 'เพิ่มการอนุญาต';
$txt['permissions_remove'] = 'ลบการอนุญาต';
$txt['permissions_deny'] = 'ปฎิเสธการอนุญาต';
$txt['permissions_select_permission'] = 'เลือกการอนุญาต';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'คุณสามารถเลือกได้แค่การกระทำเดียวสำหรับการแก้ไขการอนุญาต';
$txt['permissions_no_action'] = 'ยังไม่ได้เลือกการกระทำ';
$txt['permissions_deny_dangerous'] = 'คุณกำลังจะปฎิเสธการอนุญาตมากกว่าหนึ่ง\\nสิ่งนี้เต็มไปด้วยความไม่ปลอดภัย\\n\\nคุณต้องการจะดำเนินการทำต่อหรือไม่?';

$txt['permissions_modify_group'] = 'แก้ไขกลุ่ม';
$txt['permissions_general'] = 'การอนุญาตทั่วไป';
$txt['permissions_board'] = 'การอนุญาตผู้ดูแล';
$txt['permissions_board_desc'] = '<strong>Note</strong>: changing these board permissions will affect all boards currently assigned the &quot;Default&quot; permissions profile. Boards not using the &quot;Default&quot; profile will not be affected by changes to this page.';
$txt['permissions_commit'] = 'บันทึกการเปลี่ยนแปลง';
$txt['permissions_on'] = 'ในบอร์ด';
$txt['permissions_local_for'] = 'การอนุญาตสำหรับกลุ่มในส่วนนี้';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'สำหรับแต่ละการอนุญาตคุณสามารถเลือกอันใดอันหนึ่ง \'อนุญาต\' (A), \'ไม่อนุญาต\' (X), or <span style="color: red;">\'ปฎิเสธ\' (D)</span>.<br /><br />จำไว้ ถ้าคุณปฎิเสธ การอนุญาต, สมาชิกใดๆ - ไม่ว่าผู้ดูแลหรืออีกนัยหนึ่ง - ตำแหน่งสมาชิกนั้นอยู่ในกลุ่มนั้นจะถูกปฎิเสธไปด้วย<br />ด้วยเหตุนี้, คุณควรใช้การปฎิเสธอย่างระมัดระวัง <b>ใช้เท่าที่จำเป็น</b>เท่านั้น. ไม่อนุญาต, อีกนัยหนึ่ง, ปฎิเสธถ้ามิใช่ มิฉะนั้นจะอนุญาต';
$txt['permissions_change_view'] = 'Change View';
$txt['permissions_view_simple'] = 'Simple';
$txt['permissions_view_classic'] = 'Classic';

$txt['permissiongroup_general'] = 'ทั่วไป';
$txt['permissionname_view_stats'] = 'ให้ดูสถิติของฟอรั่ม';
$txt['permissionhelp_view_stats'] = 'สถิติของฟอรั่มคือหน้าที่สรุปสถิติทั้งหมดของฟอรั่ม เช่นจำนวนนับของสมาชิก จำนวนกระทู้ของวัน และสถิติ 10 อันดับแรกหลายๆอัน การเปิดการอนุญาตนี้จะเพิ่มลิ๊งค์ในส่วนล่างของบอร์ดดัชนี (\'[สถิติอื่น]\').';
$txt['permissionname_view_mlist'] = 'ให้ดูรายชื่อสมาชิก';
$txt['permissionhelp_view_mlist'] = 'รายชื่อสมาชิก จะแสดงสมาชิกที่ได้ลงทะเบียนไว้กับฟอรั่ม โดยรายชื่อนี้สามารถเรียงหรือทำการค้นหาได้ โดยรายชื่อสมาชิกจะเชื่อมอยู่ทั้งกับบอร์ดดัชนีและหน้าสถิติ โดยการคลิกที่จำนวนของสมาชิก';
$txt['permissionname_who_view'] = 'ให้ดูรายชื่อผู้ที่ออนไลน์';
$txt['permissionhelp_who_view'] = 'รายชื่อผู้ที่ออนไลน์ แสดงสมาชิกทั้งหมดที่กำลังออนไลน์และกิจกรรมที่สมาชิกกำลังทำอยู่ในขณะนั้น การอนุญาตนี้จะทำงานก็ต่อเมื่อคุณเปิดการทำงานใน \'ส่วนปรับแต่งค่าการใช้งาน\'. คุณสามารถเข้าสู่หน้า \'รายชื่อผู้ที่ออนไลน์\' ได้โดยคลิกลิ๊งค์ในส่วนของ \'ผู้ใช้งานขณะนี้\' ในหน้าดัชนีบอร์ด';
$txt['permissionname_search_posts'] = 'ค้นหากระทู้และหัวข้อ';
$txt['permissionhelp_search_posts'] = 'The Search permission allows to search into all boards the user is allowed to access. When the search permission is enabled, a \'Search\' button will be added to the forum button bar.';
$txt['permissionname_karma_edit'] = 'ให้เปลี่ยนการ์ม่าของผู้อื่น';
$txt['permissionhelp_karma_edit'] = 'Karma is a feature that shows the popularity of a member. In order to use this feature, you need to have it enabled in \'Features and Options\'. This permission will allow a membergroup to cast a vote. This permissions has no effect on guests.';

$txt['permissiongroup_pm'] = 'ให้ใช้การส่งข้อความส่วนตัว';
$txt['permissionname_pm_read'] = 'ให้อ่านข้อความส่วนตัว';
$txt['permissionhelp_pm_read'] = 'This permission allows users to access the Personal Messages section and read their Personal Messages. Without this permission a user is unable to send Personal Messages.';
$txt['permissionname_pm_send'] = 'ให้ส่งข้อความส่วนตัว';
$txt['permissionhelp_pm_send'] = 'Send personal messages to other registered members. Requires the \'Read personal messages\' permission.';

$txt['permissiongroup_calendar'] = 'ให้ใช้ปฏิทินและเพิ่มกิจกรรม';
$txt['permissionname_calendar_view'] = 'ให้ดูปฏิทิน';
$txt['permissionhelp_calendar_view'] = 'The calendar shows for each month the birthdays, events and holidays. This permission allows access to this calendar. When this permission is enabled, a button will be added to the top button bar and a list will be shown at the bottom of the board index with current and upcomming birthdays, events and holidays. The calendar needs be enabled from \'Edit Features and Options\'.';
$txt['permissionname_calendar_post'] = 'ให้สร้างเหตุการณ์ในปฏิทิน';
$txt['permissionhelp_calendar_post'] = 'An Event is a topic linked to a certain date or date range. Creating events can be done from the calendar. An event can only be created if the user that creates the event is allowed to post new topics.';
$txt['permissionname_calendar_edit'] = 'แก้ไขกิจกรรมในปฎิทิน';
$txt['permissionhelp_calendar_edit'] = 'An Event is a topic linked to a certain date or date range. Event can be edited by clicking the red asterix (*) next to the event in the calendar view. In order to be able to edit an event, a user must have sufficient permissions to edit the first message of the topic that is linked to the event.';
$txt['permissionname_calendar_edit_own'] = 'ให้แก้ไขเหตุการณ์ของตัวเองในปฏิทิน';
$txt['permissionname_calendar_edit_any'] = 'ให้แก้ไขเหตุการณ์ทุกอย่างในปฏิทิน';

$txt['permissiongroup_maintenance'] = 'ผู้บริหารฟอรั่ม';
$txt['permissionname_admin_forum'] = 'ผู้ดำเนินการฟอรั่ม และฐานข้อมูล';
$txt['permissionhelp_admin_forum'] = 'This permission allows a user to:<ul class="normallist"><li>change forum, database and theme settings</li><li>manage packages</li><li>use the forum and database maintenance tools</li><li>view the error and mod logs</li></ul> Use this permission with caution, as it is very powerful.';
$txt['permissionname_manage_boards'] = 'จัดการบอร์ดและหมวดหมู่';
$txt['permissionhelp_manage_boards'] = 'การอนุญาตนี้ยอมเพื่อสร้าง, แก้ไข หรือ ลบบอร์ดและหมวดหมู่ออก';
$txt['permissionname_manage_attachments'] = 'จัดการไฟล์แนบและรูปส่วนตัว';
$txt['permissionhelp_manage_attachments'] = 'This permission allows access to the attachment center, where all forum attachments and avatars are listed and can be removed.';
$txt['permissionname_manage_smileys'] = 'จัดการสัญลักษณ์แสดงอารมณ์';
$txt['permissionhelp_manage_smileys'] = 'This allows access to the smiley center. In the smiley center you can add, edit and remove smileys and smiley sets. If you\'ve enabled customized message icons you are also able to add and edit message icons with this permission.';
$txt['permissionname_edit_news'] = 'แก้ไขข่าว';
$txt['permissionhelp_edit_news'] = 'The news function allows a random news line to appear on each screen. In order to use the news function, enabled it in the forum settings.';
$txt['permissionname_access_mod_center'] = 'Access the moderation center';
$txt['permissionhelp_access_mod_center'] = 'With this permission any members of this group can access the moderation center from where they will have access to functionality to ease moderation. Note that this does not in itself grant any moderation privileges.';

$txt['permissiongroup_member_admin'] = 'ผู้บริหารงานสมาชิก';
$txt['permissionname_moderate_forum'] = 'ผู้ดำเนินการฟอรั่ม และสมาชิก';
$txt['permissionhelp_moderate_forum'] = 'This permission includes all important member moderation functions:<ul class="normallist"><li>access to registration management</li><li>access to the view/delete members screen</li><li>extensive profile info, including track IP/user and (hidden) online status</li><li>activate accounts</li><li>get approval notifications and approve accounts</li><li>immune to ignore PM</li><li>several small things</li></ul>';
$txt['permissionname_manage_membergroups'] = 'จัดการและกำหนดกลุ่มสมาชิก';
$txt['permissionhelp_manage_membergroups'] = 'This permission allows a user to edit membergroups and assign membergroups to other members.';
$txt['permissionname_manage_permissions'] = 'จัดการ การอนุญาต';
$txt['permissionhelp_manage_permissions'] = 'This permission allows a user to edit all permissions of a membergroup, globally or for individual boards.';
$txt['permissionname_manage_bans'] = 'จัดการรายการแบน';
$txt['permissionhelp_manage_bans'] = 'This permission allows a user to add or remove usernames, IP addresses, hostnames and email addresses to a list of banned users. It also allows to view and remove log entries of banned users that attempted to login.';
$txt['permissionname_send_mail'] = 'ส่งอีเมล์จากฟอรั่มให้สมาชิก';
$txt['permissionhelp_send_mail'] = 'Mass mail all forum members, or just a few membergroups by email or personal message (the latter requires \'Send Personal Message\' permission).';
$txt['permissionname_issue_warning'] = 'Issue warnings to members';
$txt['permissionhelp_issue_warning'] = 'Issue a warning to members of the forum and change that members\' warning level. Requires the warning system to be enabled.';

$txt['permissiongroup_profile'] = 'ข้อมูลสมาชิก';
$txt['permissionname_profile_view'] = 'ให้ดูข้อมูลสมาชิกและสถิติของผู้อื่น';
$txt['permissionhelp_profile_view'] = 'This permission allows users clicking on a username to see a summary of profile settings, some statistics and all posts of the user.';
$txt['permissionname_profile_view_own'] = 'ให้ดูข้อมูลสมาชิกของตัวเอง';
$txt['permissionname_profile_view_any'] = 'ให้ดูข้อมูลสมาชิกของทุกคน';
$txt['permissionname_profile_identity'] = 'ปรับแต่งแก้ไขข้อมูลสมาชิก';
$txt['permissionhelp_profile_identity'] = 'Account settings are the basic settings of a profile, like password, e-mail address, membergroup and preferred language.';
$txt['permissionname_profile_identity_own'] = 'โปรไฟล์ตัวเอง';
$txt['permissionname_profile_identity_any'] = 'โปรไฟล์ทุกคน';
$txt['permissionname_profile_extra'] = 'ปรับแต่งแก้ไขตัวเลือกเพิ่มเติม';
$txt['permissionhelp_profile_extra'] = 'Additional profile settings include settings for avatars, theme preferrences, notifications and Personal Messages.';
$txt['permissionname_profile_extra_own'] = 'โปรไฟล์ตัวเอง';
$txt['permissionname_profile_extra_any'] = 'โปรไฟล์ทุกคน';
$txt['permissionname_profile_title'] = 'แก้ไขไตเติ้ลส่วนตัว';
$txt['permissionhelp_profile_title'] = 'The custom title is shown on the topic display page, under the profile of each user that has a custom title.';
$txt['permissionname_profile_title_own'] = 'โปรไฟล์ตัวเอง';
$txt['permissionname_profile_title_any'] = 'โปรไฟล์ทุกคน';
$txt['permissionname_profile_remove'] = 'ลบสมาชิก';
$txt['permissionhelp_profile_remove'] = 'This permission allows a user to delete his account, when set to \'Own Account\'.';
$txt['permissionname_profile_remove_own'] = 'ข้อมูลสมาชิกตัวเอง';
$txt['permissionname_profile_remove_any'] = 'ข้อมูลสมาชิกทุกคน';
$txt['permissionname_profile_server_avatar'] = 'เลือกรูปส่วนตัวจากเครื่องเซิร์ฟเวอร์';
$txt['permissionhelp_profile_server_avatar'] = 'ถ้าเปิดการใช้งาน จะอนุญาตให้ผู้ใช้งานเลือกรูปส่วนตัวที่มีอยู่บนเครื่องเซิร์ฟเวอร์';
$txt['permissionname_profile_upload_avatar'] = 'อัพโหลดรูปส่วนตัวเข้าเครื่องเซิร์ฟเวอร์';
$txt['permissionhelp_profile_upload_avatar'] = 'การอนุญาตนี้จะยอมให้ผู้ใช้งานอัพโหลดรูปส่วนตัวเข้าเครื่องเซิร์ฟเวอร์';
$txt['permissionname_profile_remote_avatar'] = 'ให้เลือกใช้สัญลักษณ์แสดงอารมณ์ที่อยู่ที่อื่น';
$txt['permissionhelp_profile_remote_avatar'] = 'Because avatars might influence the page creation time negatively, it is possible to disallow certain membergroups to use avatars from external servers. ';

$txt['permissiongroup_general_board'] = 'ทั่วไป';
$txt['permissionname_moderate_board'] = 'ผู้ดูแลบอร์ด';
$txt['permissionhelp_moderate_board'] = 'The moderate board permission adds a few small permissions that make a moderator a real moderator. Permissions include replying to locked topics, changing the poll expire time and viewing poll results eventhough ';

$txt['permissiongroup_topic'] = 'หัวข้อ';
$txt['permissionname_post_new'] = 'ให้เริ่มหัวข้อใหม่';
$txt['permissionhelp_post_new'] = 'This permission allows users to post new topics. It doesn\'t allow to post replies to topics.';
$txt['permissionname_merge_any'] = 'รวมหัวข้อใดๆ';
$txt['permissionhelp_merge_any'] = 'Merge two or more topic into one. The order of messages within the merged topic will be based on the time the messages were created. A user can only merge topics on those boards a user is allowed to merge. In order to merge multiple topics at once, a user has to enable quickmoderation in their profile settings.';
$txt['permissionname_split_any'] = 'แยกหัวข้อใดๆ';
$txt['permissionhelp_split_any'] = 'Split a topic into two seperate topics.';
$txt['permissionname_send_topic'] = 'ส่งหัวข้อให้เพื่อน';
$txt['permissionhelp_send_topic'] = 'This permission allows a user to mail a topic to a friend, by entering their e-mail address and allows adding a message.';
$txt['permissionname_make_sticky'] = 'ติดหมุดหัวข้อ';
$txt['permissionhelp_make_sticky'] = 'Sticky topics are topics that always remain on top of a board. They can be useful for announcements or other important messages.';
$txt['permissionname_move'] = 'ย้ายหัวข้อใดๆ';
$txt['permissionhelp_move'] = 'Move a topic from one board to the other. Users can only select target boards they are allowed to access.';
$txt['permissionname_move_own'] = 'หัวข้อตัวเอง';
$txt['permissionname_move_any'] = 'ทุกหัวข้อ';
$txt['permissionname_lock'] = 'ล็อคหัวข้อ';
$txt['permissionhelp_lock'] = 'This permission allows a user to lock a topic. This can be done in order to make sure noone can reply to a topic. Only uses with a \'Moderate board\' permission can still post in locked topics.';
$txt['permissionname_lock_own'] = 'หัวข้อตัวเอง';
$txt['permissionname_lock_any'] = 'ทุกหัวข้อ';
$txt['permissionname_remove'] = 'ลบหัวข้อ';
$txt['permissionhelp_remove'] = 'Delete topics as a whole. Note that this permission doesn\'t allow to delete specific messages within the topic!';
$txt['permissionname_remove_own'] = 'หัวข้อตัวเอง';
$txt['permissionname_remove_any'] = 'ทุกหัวข้อ';
$txt['permissionname_post_reply'] = 'ตอบกระทู้';
$txt['permissionhelp_post_reply'] = 'This permission allows replying to topics.';
$txt['permissionname_post_reply_own'] = 'หัวข้อตัวเอง';
$txt['permissionname_post_reply_any'] = 'ทุกหัวข้อ';
$txt['permissionname_modify_replies'] = 'แก้ไขกระทู้ตอบของหัวข้อตัวเอง';
$txt['permissionhelp_modify_replies'] = 'This permission allows a user that started a topic to modify all replies to their topic.';
$txt['permissionname_delete_replies'] = 'ลบกระทู้ตอบของหัวข้อตัวเอง';
$txt['permissionhelp_delete_replies'] = 'This permission allows a user that started a topic to remove all replies to their topic.';
$txt['permissionname_announce_topic'] = 'หัวข้อประกาศ';
$txt['permissionhelp_announce_topic'] = 'ยอมให้ส่งอีเมล์เกี่ยวกับหัวข้อประกาศให้สมาชิกทั้งหมดหรือเฉพาะกลุ่มสมาชิก';

$txt['permissiongroup_post'] = 'กระทู้';
$txt['permissionname_delete'] = 'ลบกระทู้';
$txt['permissionhelp_delete'] = 'Remove posts. This does not allow a user to delete the first post of a topic.';
$txt['permissionname_delete_own'] = 'กระทู้ตัวเอง';
$txt['permissionname_delete_any'] = 'ทุกกระทู้';
$txt['permissionname_modify'] = 'แก้ไขกระทู้';
$txt['permissionhelp_modify'] = 'แก้ไขกระทู้';
$txt['permissionname_modify_own'] = 'กระทู้ตัวเอง';
$txt['permissionname_modify_any'] = 'ทุกกระทู้';
$txt['permissionname_report_any'] = 'แจ้งลบกระทู้หรือติดต่อผู้ดูแล';
$txt['permissionhelp_report_any'] = 'This permission adds a link to each message, allowing a user to report a post to a moderator. On reporting, all moderators on that board will receive an e-mail with a link to the reported post and a description of the problem (as given by the reporting user).';

$txt['permissiongroup_poll'] = 'โพลล์';
$txt['permissionname_poll_view'] = 'ดูโพลล์';
$txt['permissionhelp_poll_view'] = 'This permission allows a user to view a poll. Without this permission, the user will only see the topic.';
$txt['permissionname_poll_vote'] = 'โหวตโพลล์';
$txt['permissionhelp_poll_vote'] = 'This permission allows a (registered) user to cast one vote. It doesn\'t apply to guests.';
$txt['permissionname_poll_post'] = 'ตั้งกระทู้โพลล์';
$txt['permissionhelp_poll_post'] = 'This permission allows a user to post a new poll. As polls are special cases of topics, you cannot use this permission without the \'Post new topic\' permission.';
$txt['permissionname_poll_add'] = 'เพิ่มโพลล์ในหัวข้อ';
$txt['permissionhelp_poll_add'] = 'Add poll to topics allows a user to add a poll after the topic has been created. This permission requires sufficent rights to edit the first post of a topic.';
$txt['permissionname_poll_add_own'] = 'หัวข้อตัวเอง';
$txt['permissionname_poll_add_any'] = 'ทุกหัวข้อ';
$txt['permissionname_poll_edit'] = 'แก้ไขโพลล์';
$txt['permissionhelp_poll_edit'] = 'This permission allows to edit the options of a poll and to reset the poll. In order to edit the maximum number of votes and the expiration time, a user needs to have the \'Moderate board\' permission.';
$txt['permissionname_poll_edit_own'] = 'โพลล์ตัวเอง';
$txt['permissionname_poll_edit_any'] = 'ทุกโพลล์';
$txt['permissionname_poll_lock'] = 'ล็อคโพลล์';
$txt['permissionhelp_poll_lock'] = 'Locking polls prevents the poll from accepting any more votes.';
$txt['permissionname_poll_lock_own'] = 'โพลล์ตัวเอง';
$txt['permissionname_poll_lock_any'] = 'ทุกโพลล์';
$txt['permissionname_poll_remove'] = 'ลบโพลล์';
$txt['permissionhelp_poll_remove'] = 'This permission allows removal of polls.';
$txt['permissionname_poll_remove_own'] = 'โพลล์ตัวเอง';
$txt['permissionname_poll_remove_any'] = 'ทุกโพลล์';

$txt['permissiongroup_approval'] = 'Post Moderation';
$txt['permissionname_approve_posts'] = 'Approve items awaiting moderation';
$txt['permissionhelp_approve_posts'] = 'This permission allows a user to approve all unapproved items on a board.';
$txt['permissionname_post_unapproved_replies'] = 'Post unapproved replies';
$txt['permissionhelp_post_unapproved_replies'] = 'This permission allows a user to post replies to a topic. The replies will not be shown until approved by a moderator.';
$txt['permissionname_post_unapproved_replies_own'] = 'Own topic';
$txt['permissionname_post_unapproved_replies_any'] = 'Any topic';
$txt['permissionname_post_unapproved_topics'] = 'Post unapproved topics';
$txt['permissionhelp_post_unapproved_topics'] = 'This permission allows a user to post a new topic which will require approval before being shown.';
$txt['permissionname_post_unapproved_attachments'] = 'Post unapproved attachments';
$txt['permissionhelp_post_unapproved_attachments'] = 'This permission allows a user to attach files to their posts. The attached files will then require approval before being shown to other users.';

$txt['permissiongroup_notification'] = 'แจ้งเตือน';
$txt['permissionname_mark_any_notify'] = 'แจ้งเตือนเมื่อมีคนตอบกระทู้';
$txt['permissionhelp_mark_any_notify'] = 'This feature allows users to receive a notification whenever someone replies to a topic they subscribed to.';
$txt['permissionname_mark_notify'] = 'แจ้งเตือนเมื่อมีกระทู้มาใหม่';
$txt['permissionhelp_mark_notify'] = 'Notification on new topics is a feature that allows a user to receive an e-mail every time a new topic is created on the board they subscribe to.';

$txt['permissiongroup_attachment'] = 'แนบไฟล์';
$txt['permissionname_view_attachments'] = 'ดูไฟล์แนบ';
$txt['permissionhelp_view_attachments'] = 'Attachments are files that are attached to posted messages. This feature can be enabled and configured in \'Attachments and avatars\'. Since attachments are not directly accessed, you can protect them from being downloaded by users that don\'t have this permission.';
$txt['permissionname_post_attachment'] = 'ตั้งกระทู้แนบไฟล์';
$txt['permissionhelp_post_attachment'] = 'Attachments are files that are attached to posted messages. One message can contain multiple attachments.';

$txt['permissiongroup_simple_view_basic_info'] = 'Use basic forum functionality';
$txt['permissiongroup_simple_use_pm_system'] = 'Contact members using the personal messaging system';
$txt['permissiongroup_simple_post_calendar'] = 'Post events onto the calendar';
$txt['permissiongroup_simple_edit_profile'] = 'Personalize their profile';
$txt['permissiongroup_simple_delete_account'] = 'Delete their account';
$txt['permissiongroup_simple_use_avatar'] = 'Select or upload an avatar';
$txt['permissiongroup_simple_moderate_general'] = 'Moderate the entire forum';
$txt['permissiongroup_simple_administrate'] = 'Carry out administrative duties';

$txt['permissionname_simple_calendar_edit_own'] = 'Edit their own calendar events';
$txt['permissionname_simple_calendar_edit_any'] = 'Edit other people\'s calendar events';
$txt['permissionname_simple_profile_view_own'] = 'View their own profile';
$txt['permissionname_simple_profile_view_any'] = 'View other people\'s profiles';
$txt['permissionname_simple_profile_identity_own'] = 'Edit their account settings';
$txt['permissionname_simple_profile_identity_any'] = 'Edit other people\'s account settings';
$txt['permissionname_simple_profile_extra_own'] = 'Edit their additional profile options';
$txt['permissionname_simple_profile_extra_any'] = 'Edit other people\'s profile options';
$txt['permissionname_simple_profile_title_own'] = 'Choose a custom title for themselves';
$txt['permissionname_simple_profile_title_any'] = 'Edit other people\'s custom titles';
$txt['permissionname_simple_profile_remove_own'] = 'Delete their own account';
$txt['permissionname_simple_profile_remove_any'] = 'Delete other user\'s accounts';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Post topics and replies to the board <span style="text-decoration: underline">only</span> after they have been approved';
$txt['permissiongroup_simple_make_posts'] = 'Post topics and replies to the board';
$txt['permissiongroup_simple_post_polls'] = 'Make new polls';
$txt['permissiongroup_simple_participate'] = 'View additional board content';
$txt['permissiongroup_simple_modify'] = 'Modify their posts';
$txt['permissiongroup_simple_notification'] = 'Request notifications';
$txt['permissiongroup_simple_attach'] = 'Post attachments';
$txt['permissiongroup_simple_moderate'] = 'Moderate the board';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Post replies to a topic - but require approval';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Post replies to any topic - but require approval';
$txt['permissionname_simple_post_reply_own'] = 'Post replies to a topic they started';
$txt['permissionname_simple_post_reply_any'] = 'Post replies to any topic';
$txt['permissionname_simple_move_own'] = 'Move their own topics';
$txt['permissionname_simple_move_any'] = 'Move anyone\'s topic';
$txt['permissionname_simple_lock_own'] = 'Lock their own topic';
$txt['permissionname_simple_lock_any'] = 'Lock anyone\'s topic';
$txt['permissionname_simple_remove_own'] = 'Remove their own topic';
$txt['permissionname_simple_remove_any'] = 'Remove anyone\'s topic';
$txt['permissionname_simple_delete_own'] = 'Delete a post that they made';
$txt['permissionname_simple_delete_any'] = 'Delete a post made by anyone';
$txt['permissionname_simple_modify_own'] = 'Modify their own post';
$txt['permissionname_simple_modify_any'] = 'Modify someone else\'s post';
$txt['permissionname_simple_poll_add_own'] = 'Add a poll to a topic they created';
$txt['permissionname_simple_poll_add_any'] = 'Add a poll to any topic';
$txt['permissionname_simple_poll_edit_own'] = 'Edit a poll they created';
$txt['permissionname_simple_poll_edit_any'] = 'Edit anyone\'s poll';
$txt['permissionname_simple_poll_lock_own'] = 'Lock their own poll';
$txt['permissionname_simple_poll_lock_any'] = 'Lock anyone\'s poll';
$txt['permissionname_simple_poll_remove_own'] = 'Remove a poll they created';
$txt['permissionname_simple_poll_remove_any'] = 'Remove anyone\'s poll';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'ตั้งค่าการอนุญาต';
$txt['groups_manage_permissions'] = 'กลุ่มสมาชิกที่ให้อนุญาต';
$txt['permission_settings_submit'] = 'บันทึก';
$txt['permission_settings_enable_deny'] = 'ใช้งานตัวเลือกปฏิเสธการอนุญาต';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'การปิดตัวเลือกนี้จะปรับปรุง \\\'ปฏิเสธ\\\'-อนุญาตเพื่อ \\\'ไม่อนุญาต\\\'.';
$txt['permission_by_board_desc'] = 'ที่นี่คุณสามารถตั้งการอนุญาตเจาะจงเฉพาะบอร์ด สำหรับทุกกลุ่มสมาชิก แต่จะไม่เกี่ยวข้องกับการอนุญาตทั่วไปทุกบอร์ด';
$txt['permission_settings_desc'] = 'ที่นี่คุณสามารถคั้งการอนุญาตให้เปลี่ยนการอนุญาต ได้เหมือนกับระบบการอนุญาตที่ควรจะเป็น';
$txt['permission_settings_enable_postgroups'] = 'ใช้งานการอนุญาตสำหรับนับกระทู้สำหรับกลุ่มพื้นฐาน';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'ปิดใช้งานการตั้งค่าแล้วเอาการอนุญาตออก ขณะนี้มีการนับกระทู้สำหรับกลุ่มพื้นฐาน';

$txt['permissions_post_moderation_desc'] = 'From this page you can easily change which groups have their posts moderated for a particular permissions profile.';
$txt['permissions_post_moderation_deny_note'] = 'Note that while you have advanced permissions enabled you cannot apply the &quot;deny&quot; permission from this page. Please edit the permissions directly if you wish to apply a deny permission.';
$txt['permissions_post_moderation_select'] = 'Select Profile';
$txt['permissions_post_moderation_new_topics'] = 'New Topics';
$txt['permissions_post_moderation_replies_own'] = 'Own Replies';
$txt['permissions_post_moderation_replies_any'] = 'Any Replies';
$txt['permissions_post_moderation_attachments'] = 'Attachments';
$txt['permissions_post_moderation_legend'] = 'Legend';
$txt['permissions_post_moderation_allow'] = 'Can create';
$txt['permissions_post_moderation_moderate'] = 'Can create but requires approval';
$txt['permissions_post_moderation_disallow'] = 'Cannot create';
$txt['permissions_post_moderation_group'] = 'Group';

$txt['auto_approve_topics'] = 'Post new topics, without requiring approval';
$txt['auto_approve_replies'] = 'Post replies to topics, without requiring approval';
$txt['auto_approve_attachments'] = 'Post attachments, without requiring approval';

?>