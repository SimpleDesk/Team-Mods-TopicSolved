<?php
// Version: 2.1; Topic solved mod
global $helptxt;

$txt['topic_solved_title'] = 'Topic Solved mod';
$txt['solve_topic'] = '<strong style="color: green">Mark topic solved</strong>';
$txt['unsolve_topic'] = '<strong style="color: red">Mark topic not solved</strong>';
$txt['modlog_ac_solve'] = 'Solved &quot;{topic}&quot; by {member}';
$txt['modlog_ac_unsolve'] = 'Unsolved &quot;{topic}&quot; by {member}';
$txt['modlog_solve_log'] = 'Topic solved log';
$txt['modlog_solve_log_desc'] = 'Below is a list of all topics that have been solved or unsolved by your users.<br /><strong>Please note:</strong> Entries cannot be removed from this log until they are at least twenty-four hours old.';
$txt['modlog_solve_log_no_entries_found'] = 'There are currently no entries in the topic solved log.';
$txt['solve_log_help'] = '<strong>Topic solved log</strong><br />This section allows members of the moderation team to track all usage of the topic solved/not solved feature. To ensure that moderators cannot remove references to the actions they have performed, entries may not be deleted until 24 hours after the action was taken.';
$helptxt['solve_log'] = $txt['solve_log_help'];

$txt['permissionname_solve_topic'] = 'Mark topics solved/not solved';
$txt['permissionhelp_solve_topic'] = 'This permission will allow the user to mark topics as solved and not solved.';
$txt['permissionname_solve_topic_any'] = 'Any topic';
$txt['permissionname_solve_topic_own'] = 'Own topic';
$txt['permissionname_simple_solve_topic_own'] = 'Mark their own topics solved';
$txt['permissionname_simple_solve_topic_any'] = 'Mark any topics solved';

$txt['cannot_solve_topic_any'] = 'You do not have permission to mark topics solved.';
$txt['cannot_solve_topic_own'] = 'You do not have permission to mark topics solved.';
$txt['enable_solved_log'] = 'Enable logging of topic solving (Requires moderation logging to be enabled)';
$txt['topicsolved_board_desc'] = '<span class="smalltext">Please select the boards you wish to enable the topic solved feature in.</span>';
$txt['topicsolved_highlight'] = 'Highlight solved topics on the message index';
$txt['topicsolved_highlight_col1'] = 'Color for highlighted solved topics (lighter columns, such as replies/view)';
$txt['topicsolved_highlight_col2'] = 'Color for highlighted solved topics (darker columns, such as subject/started by)';
$txt['topicsolved_display_notice'] = 'Display a notice inside of solved topics';
$txt['topicsolved_is_solved'] = '<strong style="color: green;">Topic solved</strong><br />This topic is marked as solved and as such require no attention unless you want to bump this issue.';
$txt['topicsolved_not_enabled'] = 'Topic solved is not enabled on this board.';
$txt['cannot_solve_own'] = 'You can not mark your own topics as solved';
$txt['cannot_solve_any'] = 'You can not mark just any topic as solved';