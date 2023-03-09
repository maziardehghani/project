<?php
class model_register extends model
{
    function __construct()
    {
        parent::__construct();
    }
    public function create_user($data)
    {
        $sql = 'insert into tbl_user (email,password) values (?,?)';
        $this->doQuery($sql , [$data['email'] , $data['password']]);
    }

    public function user_exist($data)
    {
        $email = $data['email'];
        $sql = 'select *from tbl_user where email =?';
        $result = $this->doSelect($sql , [$email]);

        if (count($result) > 0)
        {
            return true;

        }else
        {
            return false;
        }
    }
}