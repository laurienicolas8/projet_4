<?php

class BackController extends Controller {
    
    public function dashboardPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/backend/dashboard_posts.php');
    }

    public function infoPost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            require('./view/backend/info_post.php');
        }
    }

    public function deletePost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $this->postDAO->supprPost($idPost);
            $posts = $this->postDAO->getPosts();
            require('./view/backend/dashboard_posts.php');
        }
    }

    public function editPost() {
        require('./view/backend/edit_post.php');
    }

    public function addPost($num, $title, $excerpt, $content) {
        $this->postDAO->createPost($num, $title, $excerpt, $content);
        require('./view/backend/added_post.php');
    }

    public function dashboardComments() {
        require('./view/backend/dashboard_comments.php');
    }

    public function loginPage() {
        require('./view/backend/login_page.php');
    }

    public function accessDashboard($password) {
        if (isset($password) && $password == 'ck87fe1S') {
            session_start();
            $posts = $this->postDAO->getPosts();
            require('./view/backend/dashboard_posts.php');
        }
        else {
            echo 'Mot de passe incorrect';
        }
    }
}