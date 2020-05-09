<?php

class PostDAO extends DAO {
    
    public function getPosts() {
        $req = 'SELECT id, num, title, excerpt, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_post FROM post ORDER BY num';
        return $this->createQuery($req);
    }

    public function getPost($idPost) {
        $req = 'SELECT id, num, title, excerpt, content, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_post FROM post WHERE id = ?';
        return $this->createQuery($req, [$idPost]);
    }

    public function supprPost($idPost) {
        $req = $this->checkConnection()->prepare('DELETE FROM post WHERE id = ?');
        $req->execute([$idPost]);
        return $req;
    }
}