<?php

class CommentDAO extends DAO {
        
    /**
     * getComments
     * get comments attached to the post according to $idPost
     * return the result of the query
     * @param int $idPost
     * @return mixed
     */
    public function getComments($idPost) {
        $req = 'SELECT id, author, comment, idPost, reportMessage, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_comment FROM comment WHERE idPost = ? ORDER BY creationDate DESC';
        return $this->createQuery($req, [$idPost]);
    }
    
    /**
     * getSingleComment
     * get the comment according to $idComment
     * return the result of the query
     * @param int $idComment
     * @return mixed
     */
    public function getSingleComment($idComment) {
        $req = 'SELECT id, author, comment, idPost, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_comment FROM comment WHERE id=?';
        return $this->createQuery($req, [$idComment]);
    }
    
    /**
     * getAllComments
     * get all comments of database
     * return the result of the query
     * @return mixed
     */
    public function getAllComments() {
        $req = 'SELECT comment.id, comment.author, comment.comment, comment.idPost, DATE_FORMAT(comment.creationDate, \'%d/%m/%Y\') AS date_comment, post.title FROM comment INNER JOIN post ON comment.idPost=post.id ORDER BY comment.creationDate DESC';
        return $this->createQuery($req);
    }
    
    /**
     * getReportedComments
     * get all comments of database where report=true (reported comments)
     * return the result of the query
     * @return mixed
     */
    public function getReportedComments() {
        $req = 'SELECT id, author, comment, idPost, report, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_comment FROM comment WHERE report =true ORDER BY creationDate DESC';
        return $this->createQuery($req);
    }
    
    /**
     * createComment
     * create a comment in database with all parameters
     * return the result of the query
     * @param int $idPost
     * @param string $author
     * @param string $comment
     * @return mixed
     */
    public function createComment($idPost, $author, $comment) {
        $req = 'INSERT INTO comment (idPost, author, comment, creationDate, report, reportMessage) VALUES (?, ?, ?, NOW(), false, "Signaler ce commentaire")';
        return $this->createQuery($req, [$idPost, $author, $comment]);
    }
    
    /**
     * signalComment
     * update the comment according to $idComment
     * replace the value report and reportMessage in database to report the comment
     * return the result of the query
     * @param int $idComment
     * @return mixed
     */
    public function signalComment($idComment) {
        $req = 'UPDATE comment SET report=true, reportMessage="Commentaire signalé" WHERE id=?';
        return $this->createQuery($req, [$idComment]);
    }
    
    /**
     * ignoreSignal
     * update the comment according to $idComment
     * replace the value report and reportMessage in database to delete the report
     * return the result of the query
     * @param int $idComment
     * @return mixed
     */
    public function ignoreSignal($idComment) {
        $req = 'UPDATE comment SET report=false, reportMessage="Signaler ce commentaire" WHERE id=?';
        return $this->createQuery($req, [$idComment]);
    }
    
    /**
     * supprComment
     * delete the comment according to $idComment
     * return the result of the query
     * @param int $idComment
     * @return mixed
     */
    public function supprComment($idComment) {
        $req = $this->checkConnection()->prepare('DELETE FROM comment WHERE id = ?');
        $req->execute([$idComment]);
        return $req;
    }
}