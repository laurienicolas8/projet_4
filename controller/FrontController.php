<?php

class FrontController extends Controller {

    public function home() {
        $posts = $this->postDAO->getPosts();
        require('./view/frontend/home.php');
    }

    public function postComment($idPost, $author, $comment) {
        if (isset($idPost) && $idPost > 0) {            
            $newComment = $this->commentDAO->addComment($idPost, $author, $comment);                       
        }
        else {
            echo 'Erreur : aucun chapitre n\'a été identifié';
        }
    }

    public function reportComment($idComment) {
        if (isset($id) && $id > 0) {
            $newReport = $this->commentDAO->signalComment($idComment);
        }
    }
}