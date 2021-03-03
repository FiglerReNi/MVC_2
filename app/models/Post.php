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

}