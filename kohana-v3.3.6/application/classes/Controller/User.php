<?php defined('SYSPATH') or die('No direct script access.');
class Controller_User extends Controller_Base {
    public function action_index()
    {
        $users = ORM::factory('User')->find_all();
        $view = View::factory('User/Index')->set('users', $users);
        $this->template->content = $view;
    }
    public function action_create()
    {
        $user = ORM::factory('User');
        $validation = Validation::factory($_POST)
                ->rule('username', 'not_empty')
                ->rule('email', 'not_empty')->rule('email', 'email')
                ->rule('phonenumber', 'not_empty');
        if (isset($_POST['btn_create']))
        {
            $user->name = $_POST['username'];
            $user->email = $_POST['email'];
            $user->phonenumber = $_POST['phonenumber'];
            $user->birthday = $_POST['date_birthday'];
            $user->hobby = $_POST['hobby'];
            if ($validation->check())
            {
                $user->save();
            }
        }
            $lang = $this->request->param('language');
            if(isset($lang) and $lang == 'vi')
            {
                $errors = $validation->errors('User');
                //$hobbies = Kohana::$config->load('setting.hobby');
                $hobbies = Kohana::message('hobby', 'hobby');
                I18n::lang('vi');
                $view = View::factory('User/Create')
                    ->set('hobbies', $hobbies)
                    ->set('errors', $errors);
                $this->template->content = $view;
                $this->template->lang = 'vi';
            }
            else {
                $errors = $validation->errors('User');
                $hobbies = Kohana::message('hobby', 'hobby');
                $view = View::factory('User/Create')
                    ->set('hobbies', $hobbies)
                    ->set('errors', $errors);
                $this->template->content = $view;
                $this->template->lang = 'en';
            }
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
                $user->phonenumber = $_POST['phonenumber'];
                $user->birthday = $_POST['date_birthday'];
                $user->hobby = $_POST['hobby'];
                $user->save();
            }
            if(isset($user->name))
            {
                $data['username'] = $user->name;
            }
            $hobbies = Kohana::$config->load('setting.hobby');
            $view = View::factory('User/Update', $data)->set('user', $user)->set('hobbies', $hobbies);
            $this->template->content = $view;
        }
    }
}