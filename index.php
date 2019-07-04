<?php
session_start();
require_once('./controllers/db.php');

if (isset($_POST['username'])) {
  $_SESSION['username'] = $_POST['username'];
}

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Routes
switch ($request_uri[0]) {
    // Home page
  case '/':
    require 'public/views/home.php';
    break;
    // Login page
  case '/login':
    require 'public/views/login.php';
    break;
    // Profile page
  case '/profile':
    require 'public/views/profile.php';
    break;
    // Admin page
  case '/admin':
    require 'public/views/admin.php';
    break;
    // Register page
  case '/register':
    require 'public/views/register.php';
    break;
    // Articles page
  case '/articles':
    require 'public/views/articles.php';
    break;
    // Login Action
  case '/loginAction':
    require 'controllers/loginAction.php';
    break;
    // Logout Action
  case '/logoutAction':
    require 'controllers/logoutAction.php';
    break;
  case '/insertArticle':
    if (empty($_POST['image'])) {
      $image = 'https://picsum.photos/300/200';
    } else {
      $image = $_POST['image'];
    }
    $author = getUserId($_SESSION['username']);
    // var_dump($image);die;
    $category = intval($_POST['category']);
    insertArticle($_POST['title'], $_POST['content'], $image, $author, $category);
    header('Location: /');
    // require 'controllers/db.php';
    break;
    // Everything else
  default:
    header('HTTP/1.0 404 Not Found');
    require 'public/layouts/404.php';
    break;
}
