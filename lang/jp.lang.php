<?php
    /**
     * @file   modules/issuetracker/lang/jp.lang.php
     * @author NHN (developers@xpressengine.com) 翻訳：ミニミ
     * @brief  イシュートラッカー(Issuetracker)モジュールの日本語言語パッケージ（基本的な内容のみ）
     **/

     $lang->issuetracker = 'イシュートラッカー';
     $lang->about_issuetracker = 'プロジェクト管理のための計画、ソースコードの閲覧、イシュー管理、リリース管理が出来るモジュールです。';

     $lang->cmd_project_list = 'プロジェクトリスト';
     $lang->cmd_view_info = 'プロジェクト情報';
     $lang->cmd_project_setting = 'プロジェクト設定';
     $lang->cmd_release_setting = 'リリース設定';
     $lang->cmd_insert_package = 'パッケージ追加';
     $lang->cmd_insert_release = 'リリース追加';
     $lang->cmd_attach_file = 'ファイル添付';
     $lang->cmd_display_item = 'コンポーネントアイテム表示';

     $lang->cmd_resolve_as = 'ステータス変更';
     $lang->cmd_reassign = 'アサイン変更';
     $lang->cmd_accept = '承諾する';

     $lang->svn_url = 'SVNリポジトリーのURL';
     $lang->about_svn_url = 'プロジェクトのバージョン管理されるSVNリポジトリーのURLお入力して下さい。';
     $lang->svn_cmd = 'SVNファイルの場所';
     $lang->about_svn_cmd = 'SVN連動のためのsvn clientファイルがある場所（絶対経路）を入力して下さい。 (ex: /usr/bin/svn)';
     $lang->diff_cmd = 'DIFFファイルの場所';
     $lang->about_diff_cmd = 'SVNリビジョン（revision）間の比較のためのdiffファイルがある場所（絶対経路）を入力して下さい。(ex: /usr/bin/diff)';
     $lang->svn_userid = 'SVNアクセス用ID';
     $lang->about_svn_userid = 'SVNリポジトリへのアクセス認証が必要な場合、IDを入力して下さい。';
     $lang->svn_passwd = 'SVNアクセス用パスワード';
     $lang->about_svn_passwd = 'SVNリポジトリへのアクセス認証が必要な場合、パスワードを入力して下さい。';

     $lang->issue = 'イシュー';
     $lang->total_issue = 'イシュー全体';
     $lang->milestone = $lang->milestone_srl = 'マイルストーン';
     $lang->priority = $lang->priority_srl = '優先度';
     $lang->type = $lang->type_srl = 'タイプ （種類）';
     $lang->component = $lang->component_srl = 'コンポーネント';
     $lang->assignee = '担当者';
     $lang->status = 'ステータス';
     $lang->action = '動作';
     $lang->display_option = '表示オプション';

     $lang->history_format_not_source = '<span class="target">[target]</span> へ <span class="key">[key]</span> 変更';
     $lang->history_format = '<span class="source">[source]</span> から <span class="target">[target]</span> へ <span class="key">[key]</span> 変更';

     $lang->project = 'プロジェクト';

     $lang->deadline = '完了期限';
     $lang->name = '名前';
     $lang->complete = '完了';
     $lang->completed_date = '完了日';
     $lang->order = '順番';
     $lang->package = $lang->package_srl = 'パッケージ';
     $lang->release = $lang->release_srl = 'リリース';
     $lang->release_note = 'リリース記録';
     $lang->release_changes = '変更内容';
     $lang->occured_version = $lang->occured_version_srl = '発生リリース';
     $lang->attached_file = '添付ファイル';
     $lang->filename = 'ファイル名';
     $lang->filesize = 'ファイル容量';

     $lang->status_list = array(
             'new' => '新規',
             'reviewing' => '検討中',
             'assign' => 'アサイン',
             'resolve' => '解決',
             'reopen' => '再発',
             'postponed' => '保留',
             'duplicated' => '重複',
             'invalid' => 'イシューではない',
    );

     $lang->about_milestone = 'マイルストーンを設定します。';
     $lang->about_priority = '優先度を設定します。';
     $lang->about_type = 'イシューのタイプを設定します。 (ex. バッグ, 改善)';
     $lang->about_component = 'イシューのコンポーネントを設定します。';

     $lang->project_menus = array(
             'dispIssuetrackerViewMilestone' => 'マイルストーン',
             'dispIssuetrackerViewIssue' => 'イシュー閲覧',
             'dispIssuetrackerNewIssue' => 'イシュー登録',
             'dispIssuetrackerTimeline' => 'マイルストーン',
             'dispIssuetrackerViewSource' => 'ソースコード閲覧',
             'dispIssuetrackerDownload' => 'ダウンロード',
             'dispIssuetrackerAdminProjectSetting' => '設定',
    );

    $lang->msg_not_attched = '添付ファイルを登録して下さい。';
    $lang->msg_attached = '添付ファイルが登録されました。';
    $lang->msg_no_releases = '登録されたリリースがありません。';

    $lang->cmd_document_do = 'このイシューを・・・ ';
    $lang->not_assigned = 'アサイン無し';
    $lang->not_assigned_description = 'アサインされてないイシューのリストです。';
    $lang->timeline_msg = array(
        'changed' => '変更',
        'created' => '作成'
    );

    $lang->cmd_manage_issue = 'イシューの管理';
    $lang->msg_changes_from = '開始日付';
    $lang->duration = '期間';
    $lang->target_list = array(
        'issue_created' => '生成されたイシュー',
        'issue_changed' => '変更されたイシュー',
        'commit' => 'リポジトリのソース変更(checkin)'
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
    $lang->governance = 'ガバナンス結果';
    $lang->release_note2 = 'リリースノート';
?>
