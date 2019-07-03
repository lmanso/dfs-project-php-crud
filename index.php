<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Routes
switch ($request_uri[0]) {
    // Home page
  case '/':
    require 'public/home.php';
    break;
    // Login page
  case '/login':
    require 'public/login.php';
    break;
    // Profile page
  case '/profile':
    require 'public/profile.php';
    break;
    // Admin page
  case '/admin':
    require 'public/admin.php';
    break;
    // Register page
  case '/register':
    require 'public/register.php';
    break;
    // Articles page
  case '/articles':
    require 'public/articles.php';
    break;
    // Login Action
  case '/loginAction':
    require 'controllers/loginAction.php';
    break;
    // Logout Action
  case '/logoutAction':
    require 'controllers/logoutAction.php';
    break;
    // Everything else
  default:
    header('HTTP/1.0 404 Not Found');
    require 'public/layouts/404.php';
    break;
}
