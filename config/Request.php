<?php 

class Request {
    private $get;
    private $post;
    private $session;

    public function __construct() {
        require('ReqParameter.php');
        $this->get = new ReqParameter($_GET);
        $this->post = $_POST;
    }

    public function getGet() {
        return $this->get;
    }

    public function getPost() {
        return $this->post;
    }    
}