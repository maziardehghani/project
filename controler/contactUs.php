<?php
class contactUs extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $this->viewUrl('contactUs/index');
    }

}