<?php
class model_admindashbord extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getOrders()
    {
        $sql = 'select * from tbl_order ';
        $result = $this->doSelect($sql);
        return $result ;
    }



}