<?php


class Posts
{


    //url példa: app.com/index.php?url=posts
    public function __construct()
    {
        $this->postModel = $this->model('post');
    }

    public function index()
    {

    }

    //url példa: app.com/index.php?url=posts/add
    public function add()
    {

    }

    //url példa: app.com/index.php?url=posts/edit/1
    public function edit($id){
        //select egy adatbázisból
        $post = $this->postModel->fetchPost($id);
        //felületnek adatátadás
        $this->view('edit', ['post' => $post]);
    }
}