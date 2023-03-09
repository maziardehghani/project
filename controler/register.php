<?php

class Register extends Controller{
    
    
    function __construct()
    {
        model::session_init();
    }
    
    function index(){
        $this->viewUrl('register/index');
    }

    public function register()
    {
        $url = URL;
        if (empty($_POST['email']) || empty($_POST['password'] || empty($_POST['password_confirm'])))
        {
            header("location: $url/register/index");
            die();
        }
        if ($_POST['password'] != $_POST['password_confirm'])
        {
            header("location: $url/register/index");
             die();
        }
        if ($this->model->user_exist($_POST))
        {
            header("location: $url/register/index");
            die();
        }
        $this->model->create_user(['email' => $_POST['email'] , 'password'=>$_POST['password']]);
        model::set_session('userID' , $_POST['email']);

        header("location: $url/index/index");

    }

}


?>