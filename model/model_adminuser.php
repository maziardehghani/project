<?php

class model_adminuser extends model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_users()
    {
        $sql = 'select * from tbl_user';
        $result = $this->doSelect($sql);
        return $result;
    }
    public function deleteuser($user_id)
    {
        $sql = 'delete from tbl_user where id = ?';
        $this->doQuery($sql , [$user_id]);
    }

}

