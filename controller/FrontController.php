<?php

class FrontController extends Controller {
    
    /**
     * home
     * call the method getPosts() in $posts
     * call the home page
     */
    public function home() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/home.php');
    }
    
    /**
     * addComment
     * control that $idPost exists and is > 0
     * call the method createComment() in $newComment
     * @param int $idPost
     * @param string $author
     * @param string $comment
     */
    public function addComment($idPost, $author, $comment) {
        if (isset($idPost) && $idPost > 0) {            
            $newComment = $this->commentDAO->createComment($idPost, $author, $comment);                       
        }
        else {
            echo 'Erreur : aucun chapitre n\'a été identifié';
        }
    }
        
    /**
     * confirmReport
     * control that $idComment exists and is > 0
     * call the method getSingleComment to get author according to $idComment
     * call the page requiring confirmation to report the comment
     * @param int $idComment
     */
    public function confirmReport($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $oneComment = $this->commentDAO->getSingleComment($idComment);
            require('./view/frontend/confirm_report.php');
        }
        else {
            echo 'Erreur : aucun commentaire n\'a été identifié';
        }
    }
    
    /**
     * reportComment
     * control that $idComment exists and is > 0
     * call the method signalComment() in $newReport
     * @param int $idComment
     */
    public function reportComment($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $newReport = $this->commentDAO->signalComment($idComment);
            $oneComment = $this->commentDAO->getSingleComment($idComment);
            require('./view/frontend/report_done.php');
        }
        else {
            echo 'Erreur : aucun commentaire n\'a été identifié';
        }
    }
}