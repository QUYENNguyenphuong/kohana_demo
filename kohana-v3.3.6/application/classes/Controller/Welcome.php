<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {
    public function action_index()
	{
	    $lang['allowed_lang'] = $this->request->param('language');
        $view = View::factory('Welcome/Index', $lang);
        $this->template->content = $view;
	}

} // End Welcome
