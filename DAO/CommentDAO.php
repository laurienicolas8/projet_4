<?php

class CommentDAO extends DAO {
    
    public function getComments($idPost) {
        $req = 'SELECT id, author, comment, idPost, reportMessage, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS creationDate FROM comment WHERE idPost = ?';
        return $this->createQuery($req, [$idPost]);
    }

    public function getSingleComment($idComment) {
        $req = 'SELECT id, author, comment, idPost, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS creationDate FROM comment WHERE id=?';
        return $this->createQuery($req, [$idComment]);
    }

    public function getAllComments() {
        $req = 'SELECT id, author, comment, idPost, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS creationDate FROM comment ORDER BY creationDate DESC';
        return $this->createQuery($req);
    }

    public function getReportedComments() {
        $req = 'SELECT id, author, comment, idPost, report, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS creationDate FROM comment WHERE report =true ORDER BY creationDate DESC';
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

    public function ignoreSignal($idComment) {
        $req = 'UPDATE comment SET report=false, reportMessage="Signaler ce commentaire" WHERE id=?';
        return $this->createQuery($req, [$idComment]);
    }

    public function supprComment($idComment) {
        $req = $this->checkConnection()->prepare('DELETE FROM comment WHERE id = ?');
        $req->execute([$idComment]);
        return $req;
    }
}