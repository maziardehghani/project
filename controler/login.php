<?php
class login extends controller
{
    function __construct()
    {
        parent::__construct();
        model::session_init();
    }

    function index()
    {

        $this->viewUrl('login/index');
    }
    public function login()
    {
        $url = URL;
        if(!$this->model->user_exist($_POST))
        {
            header("location: $url/login/index");
            die();
        }
        model::set_session('userID' , $_POST['email']);
        header("location: $url/index");
    }

    function checkuser()
    {
        $this->model->checkuser($_POST);
        model::session_init();
        $check = model::get_session('userID');
        if ($check == false)
        {
            header('location: '.URL.'/login');
        }else
        {
            header('location: '.URL.'/index');
        }
    }
}