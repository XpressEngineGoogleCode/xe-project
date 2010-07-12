<?php
require_once(_XE_PATH_.'modules/project/project.view.php');

class projectMobile extends projectView {

	function init() {
		$template_path = sprintf("%sm.skins/%s/",$this->module_path, $this->module_info->mskin);

		if(!is_dir($template_path)||!$this->module_info->mskin) {
			$this->module_info->mskin = 'default';
			$template_path = sprintf("%sm.skins/%s/",$this->module_path, $this->module_info->skin);
		}

		$this->setTemplatePath($template_path);

		if(Context::get('is_logged')) {
			$logged_info = Context::get('logged_info');
			$margs->member_srl = $logged_info->member_srl;
			$output = executeQueryArray('project.getMyProjects', $margs);
			if(!$output->data) $output->data = array();
			$this->my_projects = $output->data;
			Context::set('my_projects', $output->data);
		}
	}

	function dispProjectIndex() {
		$site_module_info = Context::get('site_module_info');
		if(!$site_module_info->site_srl) $this->dispProjectMain();
		else $this->dispProject();
	}

    function dispProjectSummary() {
		$oProjectModel =& getModel('project');
        $page = Context::get('news_page');
        if(!$page) {
            $page = 1;
            Context::set('news_page', $page);
        }

        $output = $oProjectModel->getNewItems($page);
        if(count($output->sites) > 0)
        {
            Context::set('projects', $oProjectModel->getProjects(implode(",", $output->sites)));
        }

        Context::set('modules', $output->modules);
        Context::set('news_page_navigation', $output->page_navigation);
        Context::set('news_list', $output->data);

        $this->setTemplateFile('project_summary');
    }

	function dispProjectMySummary() {
		$oProjectModel =& getModel('project');
		$logged_info = Context::get('logged_info');
		if(!$logged_info) return $this->dispProjectSummary();
		$args->member_srl = $logged_info->member_srl;
		
		$page = Context::get('news_page');
		if(!$page) {
			$page = 1;
			Context::set('news_page', $page);
		}

		$site_srls = array();
		foreach($this->my_projects as $key=>$project)
		{
			$this->my_projects[$key]->point = $apoints[$project->site_srl]?$apoints[$project->site_srl]:0;
			$site_srls[] = $project->site_srl;
		}

		$output = $oProjectModel->getNewItems($page, implode(",", $site_srls));
		if(count($output->sites) > 0)
		{
			Context::set('projects', $oProjectModel->getProjects(implode(",", $output->sites)));
		}

		Context::set('modules', $output->modules);
		Context::set('news_page_navigation', $output->page_navigation);
		Context::set('news_list', $output->data);

		$this->setTemplateFile('mysummary');
	}


}

?>
