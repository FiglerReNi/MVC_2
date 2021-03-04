<?php


class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPosts()
    {
        $this->db->query('SELECT *, users.id as userId, posts.id as postId, users.created_at as createdDate1, posts.created_at as createdDate2 FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.created_at');
        $result = $this->db->getResultSet();
        return $result;

    }

    public function addPost($data){
        $this->db->query('INSERT INTO posts SET title =:title, user_id =:user_id, body =:body');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id',  $data['user_id']);
        $this->db->bind(':body',  $data['body']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}