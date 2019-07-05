<?php
require_once('public/layouts/header.php');

$users = getAllUsers();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];


if (checkPassword($id) === $_POST['password']) {

    header('Location: /profile');
} else {
    header('Location: /login');
}

