<?php
class shop extends controller
{
    function __construct()
    {

    }

    public function index($category_id = null)
    {
            $products = $this->model->get_products($category_id);

        if (!isset($category_id))
        {
            $products = $this->model->get_all_products();
        }
        $data= ['products' => $products];
        $this->viewUrl('shop/index' , $data);
    }
    public function logout()
    {
        $url = URL;
        model::session_init();
        model::set_session('userID' , '');
        header("location: $url/index");
    }
}