<?php require_once 'public/layouts/header.php'; ?>

<?php if (isset($_SESSION['username'])) {
    header('Location: /articles'); ?>
<?php } else { ?>
    <div class="container">
        <form class="form-login d-flex justify-content-center align-self-center" action="/loginAction" method="post">
            <h2 class="my-4">Inscrit toi !</h2>
            <label for="inputEmail" class="sr-only">Adresse email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required autofocus>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" minlength="4" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se rappeler de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">S'inscrire</button>
        </form>
    </div>
<?php } ?>

<?php require_once 'public/layouts/footer.php'; ?>