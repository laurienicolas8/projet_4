<?php

class Comment {
    private $_id;
    private $_author;
    private $_creationDate;
    private $_idPost;
    private $_comment;
    private $_report;
}

//GETTERS
public function id() {return $this->_id;}
public function author() {return $this->_author;}
public function creationDate() {return $this->_creationDate;}
public function idPost() {return $this->_idPost;}
public function comment() {return $this->_comment;}
public function report() {return $this->_report;}

//SETTERS
public function setId($id) {
    $id = (int) $id;
    if ($id > 0) {
        $this->_id = $id;
    }
}

public function setAuthor($author) {
    if (is_string($auhtor)) {
        $this->_author = $author;
    }
}

public function setCreationDate($creationDate) {
    if ()) {
        $this->_creationDate = $creationDate;
    }
}

public function setIdPost($idPost) {
    $idPost = (int) $idPost;
    if ($idPost > 0) {
        $this->_idPost = $idPost;
    }
}

public function setComment($comment) {
    if (is_string($comment)) {
        $this->_comment = $comment;
    }
}

public function setReport($report) {
    
}

//HYDRATE
public function hydrate(array $comments) {
    foreach ($comments as $key => $value) {
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }
}

?>