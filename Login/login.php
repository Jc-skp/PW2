<?php
require_once 'session.php';
require_once 'post.php';
require_once 'users.php';

$session = new Session();
$post = new Post();

if($post->get('email') != '' && $post->get('password') != '') {
    $email = $post->get('email');
    $pass = $post->get('password');
    if($email == $user->getEmail() && $pass == $user->getPassword()) {
        $session->set('user', $user->getEmail());
        include 'post.html';
    } else {
        echo 'USUÁRIO E/OU SENHA INCORRETA<br><br><a href="index.html">Volte para o login</a>';
    }
} else {
    echo "Acesso negado.";
}