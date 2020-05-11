<?php

class CommentDAO extends DAO {
    
    public function getComments($idPost) {
        $req = 'SELECT id, author, comment, idPost, reportMessage, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS creationDate FROM comment WHERE idPost = ?';
        return $this->createQuery($req, [$idPost]);
    }

    public function getAllComments() {
        $req = 'SELECT id, author, comment, idPost, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS creationDate FROM comment';
        return $this->createQuery($req);
    }

    public function getReportedComments() {
        $req = 'SELECT id, author, comment, idPost, report DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS creationDate FROM comment WHERE report = "true"';
        return $this->createQuery($req);
    }

    public function createComment($idPost, $author, $comment) {
        $req = 'INSERT INTO comment (idPost, author, comment, creationDate, report, reportMessage) VALUES (?, ?, ?, NOW(), false, "Signaler ce commentaire")';
        return $this->createQuery($req, [$idPost, $author, $comment]);
    }

    public function signalComment($idComment) {
        $req = 'UPDATE comment SET report=true, reportMessage="Commentaire signalé" WHERE id=?';
        return $this->createQuery($req, [$idComment]);
    }
}