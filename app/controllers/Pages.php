<?php


class Pages extends Controller
{
    public function __construct()
    {}

    public function index()
    {
        $this->loadView('pages/index', ['title' => 'SharePosts']);
    }

    public function about($id = "")
    {
        $this->loadView('pages/about', ['title' => 'About Us']);
    }
}