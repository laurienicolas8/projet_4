<?php 

class Router {
    private $frontController;
    private $backController;
    private $request;

    public function __construct() {
        require('./config/Autoloader.php');
        Autoloader::register();
        require('./controller/Controller.php');
        require('./controller/FrontController.php');
        require('./controller/BackController.php');
        require('Request.php');

        $this->frontController = new FrontController;
        $this->backController = new BackController;
        $this->request = new Request;
    }

    public function run() {
        $action = $this->request->getGet()->getParam('action');
        $id = $this->request->getGet()->getParam('id');
        $idPost = $this->request->getGet()->getParam('idPost');
        $author = $this->request->getPost()->getParam('author');
        $comment = $this->request->getPost()->getParam('comment');
        $password = $this->request->getPost()->getParam('password');
        $session = $this->request->getSession()->get('admin');

        try {
            if (isset($action)) {
                switch ($action) {
                    case 'listPosts':
                        $this->frontController->listPosts(); 
                    break;

                    case 'post':
                        $this->frontController->post($id);
                    break;

                    case 'addComment':
                        if (!empty($author) && !empty($comment)) {
                            $this->frontController->postComment($idPost, $author, $comment);
                            $this->frontController->post($idPost);  
                        }
                        else {
                            echo 'Erreur : champs vides';
                        }                       
                    break;

                    case 'reportComment':                        
                        $this->frontController->reportComment($id);
                        $this->frontController->post($idPost);                        
                    break;

                    case 'login':
                        if (isset($session)) {
                            $this->backController->adminPosts();
                        }
                        else {
                            $this->backController->login();
                        }
                    break;

                    case 'accessAdmin':                        
                        $this->backController->access($password);                        
                    break;

                    case 'adminPosts':
                        $this->backController->adminPosts();
                    break;
                    
                    case 'adminComments':
                       $this->backController->adminComments();
                    break;
                }
            }
            else {
                $this->frontController->home();
            }
        }
        catch (Exception $e) {
            echo 'Erreur Router';
        }
    }
}