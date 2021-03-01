<?php


class Pages extends Controller
{
    public function __construct()
    {}

    public function index()
    {
        $this->loadView('pages/index', ['title' => 'SharePosts', 'description' => 'Simple Social Network']);
    }

    public function about($id = "")
    {
        $this->loadView('pages/about', ['title' => 'About Us', 'description' => 'App to share posts with other users']);
    }
}