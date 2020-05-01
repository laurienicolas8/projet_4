<?php 

class Router {
    private $frontController;
    private $backController;
    private $request;

    public function __construct() {
        require('./controller/FrontController.php');
        require('./controller/BackController.php');
        require('Request.php');
        $this->frontController = new FrontController;
        $this->backController = new BackController;
        $this->request = new Request;
    }

    public function run() {
        $action = $this->request->getGet()->get('action');
        $id = $this->request->getGet()->get('id');
        $idPost = $this->request->getGet()->get('idPost');

        try {
            if (isset($action)) {
                if ($action === 'listPosts') {
                    $this->frontController->listPosts();
                } 
                elseif ($action === 'post') {
                    if (isset($id) && $id > 0) {
                        $this->frontController->post($id);
                    }
                    else {
                        echo 'Erreur : aucun chapitre n\'a été identifié.';
                    }
                }
                elseif ($action === 'addComment') {
                    if (isset($idPost) && $idPost > 0) {
                        if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                            $this->frontController->postComment($idPost, $_POST['author'], $_POST['comment']);
                            $this->frontController->post($idPost);
                        }
                        else {
                            echo 'Erreur : champs vides';
                        }            
                    }
                    else {
                        echo 'Erreur : aucun chapitre n\'a été identifié';
                    }
                }
                elseif ($action === 'reportComment') {
                    if (isset($id) && $id > 0) {
                        $this->frontController->reportComment($id);
                        $this->frontController->post($idPost);
                    }
                }
                elseif ($action === 'login') {
                    if (isset($_POST['password']) && $_POST['password'] == 'ck87fe1S') {
                        $this->backController->login($_POST['password']);
                        $this->backController->admin();
                    }
                    else {
                        echo 'Mot de passe incorrect';
                    }
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