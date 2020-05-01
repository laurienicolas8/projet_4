<?php
require('Controller.php');

class FrontController extends Controller {

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