<?php
class model_index extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getslider()
    {
        $sql = 'select * from tbl_slider ';
        $result = $this->doSelect($sql);
        return $result;
    }
    function get_products()
    {
        $sql = 'select * from tbl_product order by id desc limit 8';
        $stmt = $this->doSelect($sql);
        return $stmt;
    }
    public function get_product($id)
    {
        $sql = 'select * from tbl_product where id = ?';
        $result = $this->doSelect($sql , [$id] , false);
        return $result;
    }
    public static function category($category_id)
    {
        $sql = 'select * from tbl_category where id = ?';
        $result = self::doSelect($sql, [$category_id], false);
        return $result;
    }




}