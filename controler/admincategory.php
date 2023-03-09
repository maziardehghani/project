<?php
class adminCategory extends controller
{
    public function __construct()
    {
        parent::__construct();
        model::access_check();
    }

    public function index()
    {
        $categories = $this->model->getChildren();
        $data = ['categories' => $categories];
        $this->viewUrl('admin/category/index' , $data);
    }
    public function add()
    {
        $this->viewUrl('admin/category/addcategory');
    }

    public function addcategory()
    {
        if (empty($_POST['title']))
        {
            header("location:".URL.'/admincategory/add');
            die();
        }
        $title = $_POST['title'];
        $parent = $_POST['parent'];
        $this->model->addcategory($title ,$parent);

        header("location:".URL.'/admincategory');

    }
    public function deletecategory($category_id)
    {
        $this->model->deletecategory($category_id);
        header('location: '.URL. '/admincategory/index');
    }
}