<?php
class index extends controller
{
    function __construct()
    {

    }

    public function index()
    {
        $products = $this->model->get_products();

        $data= ['products' => $products];
        $this->viewUrl('index/index' , $data);
    }
    public function buy_product($product_id)
    {
        $product = $this->model->get_product($product_id);

        model::setbasketsession($product);

        header('location: '.URL.'/index');

    }
    public function deletebasket($shoppingCart)
    {
       model::session_init();

        unset($_SESSION['shoppingCart'][$shoppingCart]);

        header('location: '.URL.'/index');

    }
    public function logout()
    {
        $url = URL;
        model::session_init();
        model::set_session('userID' , '');
        header("location: $url/index");
    }
}