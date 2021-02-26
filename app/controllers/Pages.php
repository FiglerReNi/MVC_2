<?php


class Pages extends Controller
{

    public function __construct()
    {
        $this->postModel = $this->loadModel('Post');
    }

    public function index()
    {
        $this->loadView('pages/index', ['title' => 'Welcome']);
    }

    public function about($id = "")
    {
        //echo 'This is about' . $id;
        $this->loadView('pages/about', ['title' => 'About']);
    }
}