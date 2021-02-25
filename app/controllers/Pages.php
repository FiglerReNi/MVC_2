<?php


class Pages
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
//        echo 'pages';
    }

    public function index(){

    }

    public function about($id = ""){
        echo 'This is about' . $id;
    }
}