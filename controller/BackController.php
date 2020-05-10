<?php

class BackController extends Controller {
    
    public function adminPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/backend/admin_posts.php');
    }

    public function adminPost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            require('./view/backend/admin_post.php');
        }
    }

    public function deletePost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $this->postDAO->supprPost($idPost);
            $posts = $this->postDAO->getPosts();
            require('./view/backend/admin_posts.php');
        }
    }

    public function editPost() {
        require('./view/backend/admin_new.php');
    }

    public function addPost($num, $title, $excerpt, $content) {
        $this->postDAO->createPost($num, $title, $excerpt, $content);
        require('./view/backend/addPost_done.php');
    }

    public function adminComments() {
        require('./view/backend/admin_comments.php');
    }

    public function login() {
        require('./view/backend/login.php');
    }

    public function access($password) {
        if (isset($password) && $password == 'ck87fe1S') {
            session_start();
            $posts = $this->postDAO->getPosts();
            require('./view/backend/admin_posts.php');
        }
        else {
            echo 'Mot de passe incorrect';
        }
    }
}