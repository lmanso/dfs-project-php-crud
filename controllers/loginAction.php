<?php 
require_once('public/layouts/header.php');
// require_once('./db.php');
$users = getAllUsers();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
// foreach ($users as $key => $user) {
// var_dump(checkPassword($_POST['username']));die;
// var_dump(checkPassword($_POST['username'])[0]['password']);die;
// var_dump($_POST['username']);
// var_dump($_POST['username']);
// var_dump($_POST['password']);die;
    if (checkPassword($_POST['username']) === $_POST['password'] ) {
    // if (($user['name'] === $_POST['username']) && ( $user['password'] === $_POST['password'])) {
        // $_SESSION['username'] = $_POST['username'];
        // var_dump($_POST['username']);
        header('Location: /articles');
    } else {
        header('Location: /login');
    }
// }