<?php 

class Router {

    private $frontController;

    public function __construct() {
        require('controller/FrontController.php');
        $this->frontController = new FrontController;
    }

    public function run() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'listPosts') {
                    $this->frontController->listPosts();
                } 
                elseif ($_GET['action'] == 'post') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $this->frontController->post($_GET['id']);
                    }
                    else {
                        echo 'Erreur : aucun chapitre n\'a été identifié.';
                    }
                }
                elseif ($_GET['action'] == 'addComment') {
                    if (isset($_GET['idPost']) && $_GET['idPost'] > 0) {
                        if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                            $this->frontController->postComment($_GET['idPost'], $_POST['author'], $_POST['comment']);
                            $this->frontController->post($_GET['idPost']);
                        }
                        else {
                            echo 'Erreur : champs vides';
                        }            
                    }
                    else {
                        echo 'Erreur : aucun chapitre n\'a été identifié';
                    }
                }
                elseif ($_GET['action'] == 'reportComment') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $this->frontController->reportComment($_GET['id']);
                        $this->frontController->post($_GET['idPost']);
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