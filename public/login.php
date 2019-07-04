<?php require_once 'public/layouts/header.php'; ?>

<?php if (isset($_SESSION['username'])) {
    header('Location: /articles'); ?>
<?php } else { ?>
    <div class="container">
        <form class="form-signin login" action="/loginAction" method="post">
            <img class="mb-6 center" src="public/img/logo.png" alt="" width="102" height="102" >
            <h1 class="h3 mb-3 font-weight-normal">Connecte toi !</h1>
            <label for="username" class="sr-only">Pseudo</label>
            <input type="input" name="username" class="form-control" placeholder="Pseudo" required autofocus>
            <label for="password" class="sr-only">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" minlength="4" required>
            <div class="checkbox mb-3">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
<?php } ?>

<?php require_once 'public/layouts/footer.php'; ?>