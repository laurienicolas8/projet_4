<?php
require('./model/frontend.php');

function listPosts() {
    $posts = getPosts();
    require('./view/frontend/posts.php')
}

function post() {
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);
    require('./view/frontend/singlePost.php');
}