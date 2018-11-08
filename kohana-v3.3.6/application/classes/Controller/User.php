<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 11/8/2018
 * Time: 3:08 AM
 */

class Controller_User extends Controller{
    public function action_index()
    {
        $users = ORM::factory('User')->find_all();
        $view = View::factory('User/Index')->set('users', $users);
        $this->response->body($view);
    }
    public function action_create()
    {
        if(isset($_POST['btn_create']))
        {
            $user = ORM::factory('User');
            $user->name = $_POST['username'];
            $user->email = $_POST['email'];
            $user->save();
        }
        $view = View::factory('User/Create');
        $this->response->body($view);
    }
    public function action_update()
    {
        $id = $this->request->param('id');
        $user = ORM::factory('User', $id);
        if (isset($user)) {
            if(isset($_POST['btn_update']))
            {
                $user->name = $_POST['username'];
                $user->email = $_POST['email'];
                $user->save();
            }
            $view = View::factory('User/Update')->set('user', $user);
            $this->response->body($view);
        }
        else
        {
            if ( ! $user->loaded())
            {
                throw HTTP_Exception::factory(404, 'User not found!');
            }
        }
    }
}