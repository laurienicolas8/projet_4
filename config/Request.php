<?php 

class Request {
    private $get;
    private $post;
    //private $session;

    public function __construct() {
        require('ReqParameter.php');
        //require('Session.php');
        $this->get = new ReqParameter($_GET);
        $this->post = new ReqParameter($_POST);
        //$this->session = new Session($_SESSION);
    }

    public function getGet() {
        return $this->get;
    }   

    public function getPost() {
        return $this->post;
    }

    /*public function getSession() {
        return $this->session;
    }*/
}