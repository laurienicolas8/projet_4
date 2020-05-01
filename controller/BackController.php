<?php

class BackController extends Controller {
    
    public function adminPosts() {
        $posts = $this->postDAO->getPosts();
        require('./view/backend/admin_posts.php');
    }

    public function adminComments() {
        require('./view/backend/admin_comments.php');
    }
}