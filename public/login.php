<?php require_once 'public/layouts/header.php'; ?>

<?php if (isset($_SESSION['username'])) { 
    header('Location: /articles'); ?>
    <?php } else { ?>
        <div class="container">
            <form class="form-login d-flex justify-content-center align-self-center" action="/loginAction" method="post">
                <h2 class="my-4">Connecte toi !</h2>
                <label for="username" class="sr-only">Pseudo</label>
                <input type="input" name="username" class="form-control" placeholder="Pseudo" required autofocus>
                <label for="password" class="sr-only">Mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" minlength="4" required>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Se rappeler de moi
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
            </form>
        </div>
<?php } ?>

<?php require_once 'public/layouts/footer.php'; ?>