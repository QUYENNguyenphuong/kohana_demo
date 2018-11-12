<?php defined('SYSPATH') or die('No direct script access.');
class Controller_User extends Controller_Base {
    public function action_index()
    {
        if(isset($_POST['btn_create']))
        {
            $user = ORM::factory('User');
            $user->name = $_POST['username'];
            $user->email = $_POST['email'];
            if(!empty($user->name) and !empty($user->email))
            {
                $user->save();
            }
            else
            {
                throw HTTP_Exception::factory(404, 'User information must provided!');
            }
        }
        $users = ORM::factory('User')->find_all();
        $view = View::factory('User/Index')->set('users', $users);
        $this->template->content = $view;
    }
    public function action_create()
    {
            $view = View::factory('User/Create');
            $this->template->content = $view;
    }
    public function action_update()
    {
        $data = array();
        $id = $this->request->param('id');
        $user = ORM::factory('User', $id);
        if ( ! $user->loaded())
        {
          throw HTTP_Exception::factory(404, 'User not found!');
        }
        else
        {
            if(isset($_POST['btn_update']))
            {
                $user->name = $_POST['username'];
                $user->email = $_POST['email'];
                $user->save();
            }
            if(isset($user->name))
            {
                $data['username'] = $user->name;
            }
            $view = View::factory('User/Update', $data)->set('user', $user);
            $this->template->content = $view;
        }
    }
}