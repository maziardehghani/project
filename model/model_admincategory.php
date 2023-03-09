<?php

class model_admincategory extends model
{
    public $all_children=[];
    function __construct()
    {
        parent::__construct();
    }
    public static function parent($category_id)
    {
        $sql = 'select title from tbl_category where id = ?';
        $result = self::doSelect($sql , [$category_id] , false);
        return $result;
    }

    public function getCategories()
    {
        $sql = 'select * from tbl_category where parent != 0';
        $result = $this->doSelect($sql);
        return $result;
    }
    function getChildren()
    {
        $sql = "select * from tbl_category where parent != 0";
        $result = $this->doSelect($sql);
        return $result;
    }
    public function categoryInfo($idcategory)
    {
        $sql = 'select * from tbl_category where id=?';
        $result = $this->doSelect($sql,[$idcategory] , false);
        return $result;
    }
    public function addcategory($title ,$parent)
    {
            $sql = 'insert into tbl_category (title , parent) value (? , ?)';
            $this->doQuery($sql , [$title , $parent]);
    }
    public function deletecategory($id)
    {
            $sql = 'delete from tbl_category where id = ?';
            $this->doQuery($sql , [$id]);
    }

}