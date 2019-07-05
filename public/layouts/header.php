<!-- <?php
session_start();
require_once('./controllers/db.php');

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}
?> -->

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <title>Ublog</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow-4dp">
            <a class="navbar-brand" href="/">Ublog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/articles">Articles</a>
                    </li>
                    <!-- Profil -->
                    <li class="nav-item">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a class="nav-link" href="/profile">Profil</a>
                        <?php } ?>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php if (isset($_SESSION['username']) && checkRole($_SESSION['username']) === 1) { ?>
                            <a class="nav-link" href="/admin">Administration</a>
                        <?php } ?>
                    </li>
                    <!-- S'inscrire -->
                    <li class="nav-item">
                        <?php if (!isset($_SESSION['username'])) { ?>
                            <a class="nav-link" href="/register">S'inscrire</a>
                        <?php } ?>
                    </li>
                    <!-- Connexion/Deconnexion -->
                    <li class="nav-item">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a class="nav-link" href="/logoutAction">Deconnexion</a>
                        <?php } else { ?>
                            <a class="nav-link" href="/login">Connexion</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>