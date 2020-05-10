<?php

class Controller {
    protected $postDAO;
    protected $commentDAO;

    public function __construct() {
        $this->postDAO = new PostDAO;
        $this->commentDAO = new CommentDAO;
    }

    public function allPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/posts.php');
    }

    public function singlePost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            $comments = $this->commentDAO->getComments($idPost);
            require('./view/frontend/singlePost.php');
        }
        else {
            echo 'Erreur : aucun chapitre n\'a été identifié.';
        }
    }
}