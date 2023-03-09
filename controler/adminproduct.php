<?php
error_reporting(E_ERROR | E_WARNING|E_PARSE);
class adminproduct extends controller
{
    public function __construct()
    {
        parent::__construct();
        model::access_check();


    }
    function index()
    {
        $products = $this->model->get_products();
        $data=['products' => $products];
        $this->viewUrl('admin/product/index',$data);
    }
    public function add()
    {
        $categories = $this->model->getcategory();
        $data=['categories' => $categories];
        $this->viewUrl('admin/product/addproduct' ,$data);

    }
    function addproduct()
    {

        if (isset($_POST['title']))
        {

            $file =$_FILES['image'];
            $this->model->addproduct($_POST , $file);
            header('location: '.URL.'/adminproduct/index');
            die();
        }
        $this->viewUrl('admin/product/addproduct',true , true);
    }
    function deleteproduct($product_id)
    {
        $this->model->deleteproduct($product_id);
        header('location: '.URL.'/adminproduct/index');
    }
}