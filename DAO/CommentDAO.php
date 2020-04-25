<?php

class CommentDAO extends DAO {
    
    public function getComments($idPost) {
        $req = 'SELECT id, author, comment, idPost, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_comment FROM comment WHERE idPost = ?';
        return $this->createQuery($req, [$idPost]);
    }

    public function addComment($idPost, $author, $comment) {
        $req = 'INSERT INTO comment (idPost, author, comment, creationDate, report) VALUES (?, ?, ?, NOW(), false)';
        return $this->createQuery($req, [$idPost, $author, $comment]);
    }

    public function signalComment($idComment) {
        $req = 'UPDATE comment SET report=true WHERE id=?';
        return $this->createQuery($req, [$idComment]);
    }
}