<?php
class aboutUs extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $this->viewUrl('aboutUs/index');
    }

}