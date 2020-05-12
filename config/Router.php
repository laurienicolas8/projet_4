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
        $action = $this->request->reqGet()->getParam('action');
        $id = $this->request->reqGet()->getParam('id');
        $idPost = $this->request->reqGet()->getParam('idPost');
        $author = $this->request->reqPost()->getParam('author');
        $comment = $this->request->reqPost()->getParam('comment');
        $password = $this->request->reqPost()->getParam('password');
        $numPost = $this->request->reqPost()->getParam('num');
        $titlePost = $this->request->reqPost()->getParam('title');
        $excerptPost = $this->request->reqPost()->getParam('excerpt');
        $contentPost = $this->request->reqPost()->getParam('content');
        //$session = $this->request->reqSession()->get('admin');

        try {
            if (isset($action)) {
                switch ($action) {
                    case 'allPosts':
                        $this->frontController->allPosts(); 
                    break;

                    case 'singlePost':
                        $this->frontController->singlePost($id);
                    break;

                    case 'addComment':
                        if (!empty($author) && !empty($comment)) {
                            $this->frontController->addComment($idPost, $author, $comment);
                            $this->frontController->singlePost($idPost);  
                        }
                        else {
                            echo 'Erreur : champs vides';
                        }                       
                    break;

                    case 'reportComment':                        
                        $this->frontController->reportComment($id);
                        $this->frontController->singlePost($idPost);                        
                    break;

                    case 'loginPage':
                        if (isset($session)) {
                            $this->backController->dashboardPosts();
                        }
                        else {
                            $this->backController->loginPage();
                        }
                    break;

                    case 'accessDashboard':                        
                        $this->backController->accessDashboard($password);                        
                    break;

                    case 'dashboardPosts':
                        $this->backController->dashboardPosts();
                    break;

                    case 'infoPost':
                        $this->backController->infoPost($idPost);
                    break;

                    case 'confirmDelete':
                        $this->backController->confirmDelete($idPost);
                    break;

                    case 'deletePost':
                        $this->backController->deletePost($idPost);
                    break;

                    case 'editPost':
                        $this->backController->editPost();
                    break;

                    case 'addPost':
                        $this->backController->addPost($numPost, $titlePost, $excerptPost, $contentPost);
                    break;

                    case 'accessModifPost':
                        $this->backController->accessModifPost($idPost);
                    break;

                    case 'modifPost':
                        $this->backController->modifPost($idPost, $numPost, $titlePost, $excerptPost, $contentPost);
                    break;
                    
                    case 'dashboardComments':
                       $this->backController->dashboardComments();
                    break;

                    case 'reportedComments':
                        $this->backController->reportedComments();
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