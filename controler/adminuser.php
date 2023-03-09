<?php

class adminuser extends controller
{
    function __construct()
    {
        parent::__construct();
        model::access_check();
    }
    function index()
    {
        $users = $this->model->get_users();
        $data=['users' => $users];
        $this->viewUrl("admin/user/index" , $data);
    }
    function deleteuser($user_id)
    {
        $this->model->deleteUser($user_id);
        header("location:".URL."/adminuser/index");
    }

}

