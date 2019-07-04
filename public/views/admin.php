<?php 
require_once('public/layouts/header.php');
$users = getAllUsers();

if (checkRole($_SESSION['username']) === 1) {

    echo 'Bonjour ' . $_SESSION['username'] . ' !';
} else {
    header('Location: /login');
}

require_once 'public/layouts/footer.php';