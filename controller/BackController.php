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

    public function confirmDeletePost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            require('./view/backend/confirm_delete_post.php');
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

    public function accessModifPost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            require('./view/backend/modif_post.php');
        }
    }

    public function modifPost($idPost, $num, $title, $excerpt, $content) {
        $this->postDAO->updatePost($idPost, $num, $title, $excerpt, $content);
        require('./view/backend/modif_done.php');
    }

    public function dashboardComments() {
        $comments = $this->commentDAO->getAllComments();
        require('./view/backend/dashboard_comments.php');
    }

    public function reportedComments() {
        $reportedComments = $this->commentDAO->getReportedComments();
        require('./view/backend/reported_comments.php');
    }

    public function infoComment($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $oneComment = $this->commentDAO->getSingleComment($idComment);
            require('./view/backend/info_comment.php');
        }
    }

    public function confirmIgnore($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $oneComment = $this->commentDAO->getSingleComment($idComment);
            require('./view/backend/confirm_ignore.php');
        }
    }

    public function ignoreReport($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $ignoredReport = $this->commentDAO->ignoreSignal($idComment);
            require('./view/backend/reported_comments.php');
        }
    }

    public function confirmDeleteComment($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $oneComment = $this->commentDAO->getSingleComment($idComment);
            require('./view/backend/confirm_delete_comment.php');
        }
    }

    public function deleteComment($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $this->commentDAO->supprComment($idComment);
            $comments = $this->postDAO->getPosts();
            require('./view/backend/dashboard_posts.php');
        }
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