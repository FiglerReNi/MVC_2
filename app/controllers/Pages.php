<?php


class Pages extends Controller
{

    private $postModel;

    public function __construct()
    {
        $this->postModel = $this->loadModel('Post');
    }

    public function index()
    {
        $posts = $this->postModel->getPosts();
        $this->loadView('pages/index', ['title' => 'Welcome', 'posts' => $posts]);
    }

    public function about($id = "")
    {
        //echo 'This is about' . $id;
        $this->loadView('pages/about', ['title' => 'About']);
    }
}