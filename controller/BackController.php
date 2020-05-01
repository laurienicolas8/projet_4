<?php
require('Controller.php');

class BackController extends Controller {
    
    public function login($password) {
        require('./view/backend/admin_posts.php');
    }

    public function adminHome() {
        $this->listPosts();
        require('../view/backend/admin_posts.php');
    }
}