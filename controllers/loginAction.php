<?php
require_once('public/layouts/header.php');

$users = getAllUsers();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if (checkPassword($_POST['username']) === $_POST['password']) {

    header('Location: /articles');
} else {
    header('Location: /login');
}

