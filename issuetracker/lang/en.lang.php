<?php
    /**
     * @file   ko.lang.php
     * @author NHN (developers@xpressengine.com)
     * @brief  Default Language Pack of Issuetracker
     **/

     $lang->issuetracker = 'Issue Tracker';
	 $lang->about_issuetracker = 'Issue Tracker manages milestones, codes, issues and releases';

     $lang->cmd_project_list = 'Project List';
     $lang->cmd_view_info = 'Project Info';
     $lang->cmd_project_setting = 'Project Setting';
     $lang->cmd_release_setting = 'Release Setting';
     $lang->cmd_insert_package = 'Add Package';
     $lang->cmd_insert_release = 'Add Release';
     $lang->cmd_attach_file = 'Attach File';
     $lang->cmd_display_item = 'Display Item';

     $lang->cmd_resolve_as = 'Modify Status';
     $lang->cmd_reassign = 'Modify Assignee';
     $lang->cmd_accept = 'Accept';

     $lang->svn_url = 'SVN URL';
     $lang->about_svn_url = "Please input SVN URL where project's version is managed";
     $lang->svn_cmd = 'SVN Command Location';
     $lang->about_svn_cmd = 'Please input the location of svn client to link with SVN. (ex: /usr/bin/svn)';
     $lang->diff_cmd = 'DIFF Command Location';
     $lang->about_diff_cmd = 'Please input the location of diff to compare SVN revisions. (ex: /usr/bin/diff)';
     $lang->svn_userid = 'SVN ID';
     $lang->about_svn_userid = 'If authentication is necessary, input userid for accessing the SVN repository';
     $lang->svn_passwd = 'SVN password';
     $lang->about_svn_passwd = 'If authentication is necessary, input password for accessing the SVN repository';

     $lang->issue = 'Issue';
     $lang->total_issue = 'All Issues';
     $lang->milestone = $lang->milestone_srl = 'Milestone';
     $lang->priority = $lang->priority_srl = 'Priority';
     $lang->type = $lang->type_srl = 'Type';
     $lang->component = $lang->component_srl = 'Components';
     $lang->assignee = 'Assignee';
     $lang->status = 'Status';
     $lang->action = 'Action';
     $lang->display_option = 'Display Option';

     $lang->history_format_not_source = '<span class="key">[key]</span> is changed to <span class="target">[target]</span>';
     $lang->history_format = '<span class="key">[key]</span> is changed from <span class="source">[source]</span> to <span class="target">[target]</span>';

     $lang->project = 'Project';

     $lang->deadline = 'Deadline';
     $lang->name = 'Name';
     $lang->complete = 'Complete';
     $lang->completed_date = 'Completed';
     $lang->order = 'Order';
     $lang->package = $lang->package_srl = 'Package';
     $lang->release = $lang->release_srl = 'Release';
     $lang->release_note = 'Release Note';
     $lang->release_changes = 'Release Changes';
     $lang->occured_version = $lang->occured_version_srl = 'Occured Version';
     $lang->attached_file = 'Attached File';
     $lang->filename = 'File Name';
     $lang->filesize = 'File Size';

     $lang->status_list = array(
             'new' => 'New',
             'reviewing' => 'Reviewing',
             'assign' => 'Assigned',
             'resolve' => 'Resolved',
             'reopen' => 'Reopened',
             'postponed' => 'Postponed',
             'duplicated' => 'Duplicated',
             'invalid' => 'Invalid',
    );

     $lang->about_milestone = 'This sets milestones.';
     $lang->about_priority = 'This sets priority.';
     $lang->about_type = 'This selects type of issues (ex. issue, development)';
     $lang->about_component = 'This sets components of issues';

     $lang->project_menus = array(
             'dispIssuetrackerViewIssue' => 'View Issue',
             'dispIssuetrackerNewIssue' => 'New Issue',
             'dispIssuetrackerViewMilestone' => 'Milestone',
             'dispIssuetrackerTimeline' => 'Timeline',
             'dispIssuetrackerViewSource' => 'View Source',
             'dispIssuetrackerDownload' => 'Download',
             'dispIssuetrackerAdminProjectSetting' => 'Settings',
    );

    $lang->msg_not_attched = 'No file is attached';
    $lang->msg_attached = 'File has been attached';
    $lang->msg_no_releases = 'No release is registered';

    $lang->cmd_document_do = 'You would...';
    $lang->not_assigned = 'Unassigned';
    $lang->not_assigned_description = 'List of unassigned issues.';
    $lang->timeline_msg = array(
        'changed' => 'changed',
        'created' => 'created'
    );
    $lang->cmd_manage_issue = 'Manage issues';
    $lang->msg_changes_from = 'View changes from';
    $lang->duration = 'Duration';
    $lang->target_list = array(
        'issue_created' => 'Created',
        'issue_changed' => 'Changed',
        'commit' => 'Commit'
        );

	$lang->not_using_repository = 'This project is not using repository.';
	$lang->revision = "Revision";
	$lang->repos_path = "Repository path";
	$lang->view_log = "View logs";
	$lang->compare_with_previous = "Compare with prev. version";
	$lang->issue_id = "ID";
	$lang->cmd_detailed_search = "Advanced Search";
	$lang->about_total_count = "There exist <em>%s</em> issues.";

	$lang->new_project_menus = array(
		'Milestone' => array('dispIssuetrackerViewMilestone'),
		'Issues' => array('dispIssuetrackerViewIssue', array(
			'Issue List' => array('dispIssuetrackerViewIssue'),
			'New Issue' => array('dispIssuetrackerNewIssue'))),
		'Source' => array('dispIssuetrackerViewSource', array(
			'View Source' => array('dispIssuetrackerViewSource'))),
		'Timeline' => array('dispIssuetrackerTimeline'),
		'Download' => array('dispIssuetrackerDownload'));
	$lang->startdate = "Start Date";
	$lang->contributor = "Contributor";
	$lang->time = "Time";
	$lang->condition = "Condition";
	$lang->parent_directory = "Parent Directory";
	$lang->cmd_compare = "Compare";
	$lang->progress = "Progress";
	$lang->noissue = "There is no issue.";
	$lang->cmd_new_issue = "New Issue";
	$lang->more = "More";
    $lang->cmd_openclose = 'open / close';
    $lang->released_date = 'released date';
    $lang->cmd_show_all_version = 'show all versions';
    $lang->cmd_hide_all_version = 'hide all versions';

    $lang->issue_admin_mail = '관리자 메일';
    $lang->about_issue_admin_mail = '이슈 등록이나 상태등 이 변결될때 등록된 메일주소로 메일이 발송됩니다<br /> ,(콤마)로 연결시 다수의 메일주소로 발송할 수 있습니다.';
	$lang->view_issue = '이슈보기';
?>
