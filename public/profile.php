<?php 
require_once('public/layouts/header.php');
$users = getAllUsers();

if (isset($_SESSION['username'])) {
    echo 'Bonjour ' . $_SESSION['username'] . ' !';
} else {
    header('Location: /login');
}

require_once 'public/layouts/footer.php';