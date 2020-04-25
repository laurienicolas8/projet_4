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

    public function post($idPost) {
        $onePost = $this->postDAO->getPost($idPost);
        $comments = $this->commentDAO->getComments($idPost);
        require('./view/frontend/singlePost.php');
    }

    public function home() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/home.php');
    }

    public function postComment($idPost, $author, $comment) {
        $newComment = $this->commentDAO->addComment($idPost, $author, $comment);
    }

    public function reportComment($idComment) {
        $newReport = $this->commentDAO->signalComment($idComment);
    }
}