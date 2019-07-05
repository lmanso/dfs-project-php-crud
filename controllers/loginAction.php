<?php
require_once('public/layouts/header.php');

$users = getAllUsers();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
$id = getUserId( $_POST['username']);

if (checkPassword($id) === $_POST['password']) {

    header('Location: /articles');
} else {
    header('Location: /login');
}

