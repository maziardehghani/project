<?php
error_reporting(E_ERROR | E_WARNING|E_PARSE);
class model_adminproduct extends model
{
    function __construct()
    {
        parent::__construct();
    }

    public static function category($category_id)
    {
        $sql = 'select * from tbl_category where id = ?';
        $result = self::doSelect($sql, [$category_id], false);
        return $result;
    }

    public function get_products()
    {
        $sql = 'select * from tbl_product';
        $result = $this->doSelect($sql);
        return $result;
    }

    public function get_product($id)
    {
        $sql = 'select * from tbl_product where id = ?';
        $result = $this->doSelect($sql , [$id] , false);
        return $result;
    }

    public function getcategory()
    {

        $sql = 'select * from tbl_category where parent !=0 ';
        $result = $this->doSelect($sql);
        return $result;
    }

    public function addproduct($product, $file = [])
    {



        $title = $product['title'];
        $price = $product['price'];
        $categoryID = $product['category'];

            $sql = 'insert into tbl_product (title,price,category,image)values(?,?,?,?)';
            $this->doQuery($sql , [$title,$price,$categoryID,$file['name']]);
            move_uploaded_file($file['tmp_name'] , 'files/'.$file['name']);
    }

        public function deleteproduct($product_id)
        {
            $sql = 'delete from tbl_product where id = ?';
            $this->doQuery($sql , [$product_id]);
        }
}