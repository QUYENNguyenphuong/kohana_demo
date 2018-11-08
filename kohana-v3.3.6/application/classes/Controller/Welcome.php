<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	public function action_echo()
    {
        $msg = $this->request->param('id');
        $this->response->body("You said: " .$msg);
    }

} // End Welcome
