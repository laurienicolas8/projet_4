<?php
function getPosts() {
    $db = dbConnect();
    $req = $db->query('SELECT id, num, title, excerpt, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS date_post FROM post ORDER BY num');
    
    return $req;
}

function getPost($postId) {
    $db = dbConnect();
    $req = $db->prepare('SELECT id, num, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS date_post FROM post WHERE id = ?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId) {
    $db = dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS date_comment FROM comment WHERE id_post = ?');
    $comments->execute(array($postId));

    return $comments;
}

function dbConnect() {
    try {
        $db = new PDO('mysql:host=localhost;dbname=book', 'root', '');
        return $db;
    }
    catch (PDOException $e) {
        echo 'La connexion a échouée. <br/>'
        $e->getMessage();
    }
}