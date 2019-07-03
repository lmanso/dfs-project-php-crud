<?php require_once 'public/layouts/header.php';

$categories = getAllCategories();
$user = getAllUsers();

if (isset($_SESSION['username'])) { ?>
    <!-- </br> -->
    <div class="container">
        <div class="row">
            <div class="col card border-secondary mb-3 shadow-2dp" style="max-width: 50rem;">
                <div class="card-header">Création d'un nouvel article</div>
                <div class="card-body">
                    <form>
                        <fieldset>
                            <h2>Formulaire de création</h2>
                            <div class="form-group">
                                <label for="">Titre</label>
                                <input type="input" class="form-control" id="title" aria-describedby="Donnez un titre à votre article" placeholder="Donnez un titre à votre article">
                            </div>
                            <div class="form-group">
                                <label for="categories">Catégories</label>
                                <select class="form-control" id="categories">
                                    <?php foreach ($categories as $key => $value) : ?>
                                        <option><?= $value["name"] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea">Contenu</label>
                                <textarea class="form-control" id="content" rows="3" placeholder="Ecrivez le contenu de votre article"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="input" class="form-control" id="image" aria-describedby="l'image illustrera votre article" placeholder="l'image illustrera votre article">
                            </div>
                            <fieldset class="form-group">
                            </fieldset>
                            <button type="submit" class="shadow-2dp btn btn-primary">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php } else {
    header('Location: /login');
}
require_once 'public/layouts/footer.php'; ?>