<?php

class FrontController extends Controller {

    public function home() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/home.php');
    }

    public function addComment($idPost, $author, $comment) {
        if (isset($idPost) && $idPost > 0) {            
            $newComment = $this->commentDAO->createComment($idPost, $author, $comment);                       
        }
        else {
            echo 'Erreur : aucun chapitre n\'a été identifié';
        }
    }

    public function reportComment($idComment) {
        if (isset($idComment) && $idComment > 0) {
            $newReport = $this->commentDAO->signalComment($idComment);
        }
    }
}