<?php

class CommentDAO extends DAO {
    
    public function getComments($idPost) {
        $req = 'SELECT id, author, comment, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_comment FROM comment WHERE idPost = ?';
        return $this->createQuery($req, [$idPost]);
    }

    public function addComment($idPost, $author, $comment) {
        $req = 'INSERT INTO comment (author, creation_date, id_post, comment, report) VALUES (?, NOW(), ?, ?, false)';
        return $this->createQuery($req, [$idPost, $author, $comment]);
    }
}