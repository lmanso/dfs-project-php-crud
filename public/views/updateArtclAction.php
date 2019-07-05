<?php
require_once('public/layouts/header.php');
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
$article_id = ($request_uri[1]);
$articles = getOneArticle($article_id);
$categories = getAllCategories();
if (checkRole($id) === 1) { } else {
    header('Location: /login');
}
?>
<div class="container">
    <h1>update article</h1>
    <form class="" action="/updateAAction" method="post">
        <input type="hidden" class="btn" name="id" value="<?= $article_id  ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input required type="text" class="form-control" name="title" placeholder="Modifier le nom de l'articles">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="text" class="form-control" name="image" placeholder="Modifier l'image">
        </div>
        <div class="form-group">
            <label for="role">Category</label>
            <select required type="select" class="form-control" name="category">
                <?php foreach ($categories as $key => $value) : ?>
                    <option value="<?= $value["id"]?>"><?= $value["name"] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="content">Le contenu de votre article</label>
            <textarea class="form-control" name="content" rows="3"></textarea>
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
    </form>
</div>
<?php require_once 'public/layouts/footer.php';
