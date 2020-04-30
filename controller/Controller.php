<?php

class Controller {
    protected $postDAO;
    protected $commentDAO;

    public function __construct() {
        require('./config/Autoloader.php');
        Autoloader::register();
        $this->postDAO = new PostDAO;
        $this->commentDAO = new CommentDAO;
    }
}