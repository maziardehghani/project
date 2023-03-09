<?php
class admindashbord extends controller
{
    function __construct()
    {
        parent::__construct();
        model::access_check();

    }
    function index()
    {
        $orders = $this->model->getOrders();
        $data = ['orders' => $orders];
        $this->viewUrl('admin/dashbord/index' , $data);
    }

}