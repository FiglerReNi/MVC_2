<?php


class Pages extends Controller
{
    public function __construct()
    {}

    public function index()
    {
        $this->loadView('pages/index', ['title' => 'Welcome']);
    }

    public function about($id = "")
    {
        $this->loadView('pages/about', ['title' => 'About Us']);
    }
}