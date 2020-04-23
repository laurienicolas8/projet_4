<?php

class FrontController {

    private $postDAO;
    private $commentDAO;

    public function __construct() {
        require('./DAO/DAO.php');
        require('./DAO/PostDAO.php');
        require('./DAO/CommentDAO.php');
        $this->postDAO = new PostDAO;
        $this->commentDAO = new CommentDAO;
    }

    public function listPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/posts.php');
    }

    public function post() {
        $onePost = $this->postDAO->getPost($_GET['id']);
        $comments = $this->commentDAO->getComments($_GET['idPost']);
        require('./view/frontend/singlePost.php');
    }

    public function home() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/home.php');
    }

    public function postComment($idPost, $author, $comment) {
        $newComment = $this->commentDAO->addComment($idPost, $author, $comment);
        $onePost = $this->postDAO->getPost($idPost);
        require('./view/frontend/singlePost.php');
    }
}