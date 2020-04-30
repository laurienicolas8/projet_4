<?php 

class Request {
    private $get;
    private $post;

    public function __construct() {
        require('ReqParameter.php');
        $this->get = new ReqParameter($_GET);
        $this->post = new ReqParameter($_POST);
    }

    public function getGet() {
        return $this->get;
    }   

    public function getPost() {
        return $this->post;
    }
}