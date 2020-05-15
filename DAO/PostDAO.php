<?php

class PostDAO extends DAO {
        
    /**
     * getPosts
     * get all posts of database
     * return the result of the query
     * @return mixed
     */
    public function getPosts() {
        $req = 'SELECT id, num, title, excerpt, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_post FROM post ORDER BY num';
        return $this->createQuery($req);
    }
    
    /**
     * getPost
     * get the post according to $idPost in database
     * return the result of the query
     * @param int $idPost
     * @return mixed
     */
    public function getPost($idPost) {
        $req = 'SELECT id, num, title, excerpt, content, DATE_FORMAT(creationDate, \'%d/%m/%Y\') AS date_post FROM post WHERE id = ?';
        return $this->createQuery($req, [$idPost]);
    }
    
    /**
     * createPost
     * create a post in database with all parameters
     * return the result of the query
     * @param int $num
     * @param string $title
     * @param string $excerpt
     * @param string $content
     * @return mixed
     */
    public function createPost($num, $title, $excerpt, $content) {
        $req = 'INSERT INTO post (num, title, excerpt, content, creationDate) VALUES (?, ?, ?, ?, NOW())';
        return $this->createQuery($req, [$num, $title, $excerpt, $content]);
    }
    
    /**
     * updatePost
     * update the post according to $idPost
     * replace data with new parameters
     * return the result of the query
     * @param int $idPost
     * @param int $num
     * @param string $title
     * @param string $excerpt
     * @param string $content
     * @return mixed
     */
    public function updatePost($idPost, $num, $title, $excerpt, $content) {
        $req = 'UPDATE post SET num=?, title=?, excerpt=?, content=? WHERE id=?';
        return $this->createQuery($req, [$num, $title, $excerpt, $content, $idPost]);
    }
    
    /**
     * supprPost
     * delete the post according to $idPost
     * return the result of the query
     * @param int $idPost
     * @return mixed
     */
    public function supprPost($idPost) {
        $req = $this->checkConnection()->prepare('DELETE FROM post WHERE id = ?');
        $req->execute([$idPost]);
        return $req;
    }
}