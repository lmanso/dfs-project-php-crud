<?php
session_start();
require_once('./controllers/db.php');

if (isset($_POST['username'])) {
  $_SESSION['username'] = $_POST['username'];
}
if (isset($_SESSION['username'])) {
  $id = getUserId($_SESSION['username']);
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

  case '/updateArtcl':
    require 'public/views/updateArtcl.php';
    break;

  case '/updateArtclAction':
    require 'public/views/updateArtclAction.php';
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

  case '/updateAction':
    // Recupere l'id de l'utilisateur dans l'uri
    // var_dump($request_uri[1]);die;
    updateUser($_POST['id'], $_POST['name'], $_POST['role'], $_POST['password']);
    header('Location: /admin');
    break;

  case '/updateAAction':
    if (empty($_POST['image'])) {
      $image = 'https://picsum.photos/300/200';
    } else {
      $image = $_POST['image'];
    }
    updateArtcl($_POST['id'], $_POST['title'], $_POST['content'], $image, $_POST['category']);
    header('Location: /updateArtcl');
    break;

    //DELETE
  case '/deleteAction':
    // Recupere l'id de l'utilisateur dans l'uri
    deleteUser($request_uri[1]);
    header('Location: /admin');
    break;

  case '/deleteArtcAction':
    // Recupere l'id de l'utilisateur dans l'uri
    deleteArticle($request_uri[1]);
    header('Location: /updateArtcl');
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
