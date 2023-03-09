<?php
class model_shop extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function get_products($category_id)
    {
        $sql = 'select * from tbl_product where category = ?';
        $stmt = $this->doSelect($sql , [$category_id]);
        return $stmt;
    }
    public function get_all_products()
    {
        $sql = 'select * from tbl_product';
        $result = $this->doSelect($sql);
        return $result;
    }
    public static function category($category_id)
    {
        $sql = 'select * from tbl_category where id = ?';
        $result = self::doSelect($sql, [$category_id], false);
        return $result;
    }



}