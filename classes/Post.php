<?php

class Post {
    private $_id;
    private $_num;
    private $_title;
    private $_excerpt;
    private $_content;
    private $_creationDate;
}

//GETTERS
public function id() {return $this->_id;}
public function num() {return $this->_num;}
public function title() {return $this->_title;}
public function excerpt() {return $this->_excerpt;}
public function content() {return $this->_content;}
public function creationDate() {return $this->_creationDate;}

//SETTERS
public function setId($id) {
    $id = (int) $id;
    if ($id > 0) {
        $this->_id = $id;
    }
}

public function setNum($num) {
    $num = (int) $num;
    if ($num > 0) {
        $this->_num = $num;
    }
}

public function setTitle($title) {
    if (is_string($title)) {
        $this->_title = $title;
    }
}

public function setExcerpt($excerpt) {
    if (is_string($excerpt)) {
        $this->_excerpt = $excerpt;
    }
}

public function setContent($content) {
    if (is_string($content)) {
        $this->_content = $content;
    }
}

public function setCreationDate($creationDate) {
    if ()) {
        $this->_creationDate = $creationDate;
    }
}

//HYDRATE
public function hydrate(array $posts) {
    foreach ($posts as $key => $value) {
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }
}



?>