<?php
session_start();
require_once('./controllers/db.php');

if (isset($_POST['username'])) {
  $_SESSION['username'] = $_POST['username'];
}

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Routes
switch ($request_uri[0]) {
    // VIEW
  case '/':
    require 'public/views/home.php';
    break;

  case '/login':
    require 'public/views/login.php';
    break;

  case '/profile':
    require 'public/views/profile.php';
    break;

  case '/admin':
    require 'public/views/admin.php';
    break;

  case '/update':
    require 'public/views/update.php';
    break;

  case '/register':
    require 'public/views/register.php';
    break;

  case '/articles':
    require 'public/views/articles.php';
    break;

    // ACTION
  case '/loginAction':
    require 'controllers/loginAction.php';
    break;

  case '/logoutAction':
    require 'controllers/logoutAction.php';
    break;

  case '/deleteAction':
    // Recupere l'id de l'utilisateur dans l'uri
    deleteUser($request_uri[1]);
    header('Location: /admin');
    break;

    //INSERT
  case '/insertArticle':
    // Permet de mettre une image par defaut
    if (empty($_POST['image'])) {
      $image = 'https://picsum.photos/300/200';
    } else {
      $image = $_POST['image'];
    }
    //Recupere le username et l'id de la categorie 
    $author = getUserId($_SESSION['username']);
    $category = intval($_POST['category']);
    //Recupere les donnees du post et passe le reste des params en variable
    insertArticle($_POST['title'], $_POST['content'], $image, $author, $category);
    header('Location: /');
    break;

    case '/insertUser';
    insertUser($_POST['name'], $_POST['password']);
    header('Location: /');
    break;

    //DEFAULT
  default:
    header('HTTP/1.0 404 Not Found');
    require 'public/layouts/404.php';
    break;
}
