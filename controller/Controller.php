<?php

class Controller {
    protected $postDAO;
    protected $commentDAO;

    public function __construct() {
        $this->postDAO = new PostDAO;
        $this->commentDAO = new CommentDAO;
    }
    
    /**
     * allPosts
     * call the method getPosts() in PostDAO
     * call the front page that displays posts
     */
    public function allPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/posts.php');
    }
    
    /**
     * singlePost
     * control that $idPost exists and is > 0
     * call the method getPost() in PostDAO
     * call the method getComments() in CommentDAO
     * call the front page that display post data
     * @param int $idPost
     */
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