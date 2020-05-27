<?php

class BackController extends Controller {           
    
    /**
     * dashboardPosts
     * call the method getPosts() in $posts
     * call the dashboard for posts 
     */   
    public function dashboardPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/backend/dashboard_posts.php');
    }
    
    /**
     * infoPost
     * control that $idPost exists and is > 0
     * call the method getPost() in $onePost
     * call the page displaying post data
     * @param int $idPost
     */    
    public function infoPost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            require('./view/backend/info_post.php');
        }
    }

    /**
     * confirmDeletePost
     * control that $idPost exists and is > 0
     * call the method getPost() in $onePost
     * call the page requesting confirmation to delete the post
     * @param int $idPost
     */
    public function confirmDeletePost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            require('./view/backend/confirm_delete_post.php');
        }
    }

    /**
     * deletePost
     * control that $idPost exists and is > 0
     * call the method supprPost()
     * call the method getPosts() in $posts
     * call the dashboard for posts
     * @param int $idPost 
     */
    public function deletePost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $this->postDAO->supprPost($idPost);
            $posts = $this->postDAO->getPosts();
            require('./view/backend/dashboard_posts.php');
        }
    }
    
    /**
     * editPost
     * call the post editor
     */
    public function editPost() {
        require('./view/backend/edit_post.php');
    }
    
    /**
     * addPost
     * call the method createPost()
     * call the page informing that the post is created
     * @param int $num
     * @param string $title
     * @param string $excerpt
     * @param string $content
     */
    public function addPost($num, $title, $excerpt, $content) {
        $this->postDAO->createPost($num, $title, $excerpt, $content);
        require('./view/backend/added_post.php');
    }
    
    /**
     * accessModifPost
     * control that $idPost exists and is > 0
     * call the method getPost() in $onePost
     * call the post editor
     * @param int $idPost
     */
    public function accessModifPost($idPost) {
        if (isset($idPost) && $idPost > 0) {
            $onePost = $this->postDAO->getPost($idPost);
            require('./view/backend/modif_post.php');
        }
    }
    
    /**
     * modifPost
     * call the method updatePost
     * call the page informing that the changes are done
     * @param int $idPost
     * @param int $num
     * @param string $title
     * @param string $excerpt
     * @param string $content
     */
    public function modifPost($idPost, $num, $title, $excerpt, $content) {
        $this->postDAO->updatePost($idPost, $num, $title, $excerpt, $content);
        require('./view/backend/modif_done.php');
    }
    
    /**
     * dashboardComments
     * call the method getAllComments() in $comments
     * call the dashboard for comments
     */
    public function dashboardComments() {
        $comments = $this->commentDAO->getAllComments();
        require('./view/backend/dashboard_comments.php');
    }
    
    /**
     * reportedComments
     * call the method getReportedComments() in $reportedComments
     * call the dashboard for reported comments
     */
    public function reportedComments() {
        $reportedComments = $this->commentDAO->getReportedComments();
        require('./view/backend/reported_comments.php');
    }
    
    /**
     * confirmIgnore
     * control that $idComment exists and is > 0
     * call the method getSingleComment() in $oneComment
     * call the page requesting confirmation to ignore the reported comment
     * @param int $idComment
     */
    public function confirmIgnore($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $oneComment = $this->commentDAO->getSingleComment($idComment);
            require('./view/backend/confirm_ignore.php');
        }
    }
    
    /**
     * ignoreReport
     * control that $idComment exists and is > 0
     * call the method ignoreSignal() in $ignoredReport
     * call the method getReportedComments() in $reportedComments
     * call the dashboard for reported comments
     * @param int $idComment
     */
    public function ignoreReport($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $ignoredReport = $this->commentDAO->ignoreSignal($idComment);
            $reportedComments = $this->commentDAO->getReportedComments();
            require('./view/backend/reported_comments.php');
        }
    }
    
    /**
     * confirmDeleteComment
     * control that $idComment exists and is > 0
     * call the method getSingleComment() in $oneComment
     * call the page requesting confirmation to delete the comment
     * @param int $idComment
     */
    public function confirmDeleteComment($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $oneComment = $this->commentDAO->getSingleComment($idComment);
            require('./view/backend/confirm_delete_comment.php');
        }
    }
    
    /**
     * deleteComment
     * control that $idComment exists and is > 0
     * call the method supprComment()
     * call the method getAllComments() in $comments
     * call the dashboard for comments
     * @param int $idComment
     */
    public function deleteComment($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $this->commentDAO->supprComment($idComment);
            $comments = $this->commentDAO->getAllComments();
            require('./view/backend/dashboard_comments.php');
        }
    }
    
    /**
     * loginPage
     * call the page to login
     */
    public function loginPage() {
        require('./view/backend/login_page.php');
    }
    
    /**
     * accessDashboard
     * control that $password exists and matches with the true password
     * call the method getPosts() in $posts
     * call the dashboard for posts
     * @param string $password
     */
    public function accessDashboard($password) {
        if (isset($password) && $password == 'ck87fe1S') {  
              
            $posts = $this->postDAO->getPosts();
            require('./view/backend/dashboard_posts.php');
        }
        else {
            echo 'Mot de passe incorrect';
        }
    }
}