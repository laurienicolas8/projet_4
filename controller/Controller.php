<?php

class Controller {
    protected $postDAO;
    protected $commentDAO;

    public function __construct() {
        require('./config/Autoloader.php');
        Autoloader::register();
        $this->postDAO = new PostDAO;
        $this->commentDAO = new CommentDAO;
    }

    public function listPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/posts.php');
    }
    
    public function post($idPost) {
        $onePost = $this->postDAO->getPost($idPost);
        $comments = $this->commentDAO->getComments($idPost);
        require('./view/frontend/singlePost.php');
    }
}