<?php defined('SYSPATH') or die('No direct script access.');
abstract class Controller_Base extends Controller_Template {

    public $template = 'layout';
    public $action_template;
    public function init_action_template()
    {
        if(! $this->action_template)
        {
            $this->action_template = [
                $this->request->controller(),
                $this->request->action()
            ];
            if($this->request->directory())
            {
                array_unshift($this->action_template, $this->request->directory());
            }
            $this->action_template = implode(DIRECTORY_SEPARATOR, $this->action_template);
        }
        // Create View action template
        $this->action_template = View::factory($this->action_template);
        $this->template->content = $this->action_template;
        $this->template->title = 'Kohana_demo';
    }
    public function  before()
    {

        parent::before(); // TODO: Change the autogenerated stub
        if($this->auto_render)
        {
            $this->init_action_template();
        }
    }

}
