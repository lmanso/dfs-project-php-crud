<?php
require_once('public/layouts/header.php');
$articles = getAllArticles();
$categories = getAllCategories();
//Redirection si l'utilisateur n'est pas Admin
if (checkRole($id) === 1) {
} else {
    header('Location: /login');
} ?>
<div class="container">
    <div>
        <table class="table table-hover shadow-2dp">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Url</th>
                    <th scope="col">Category</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <?php foreach ($articles as $key => $value) : ?>
                <tbody>
                    <tr>
                        <td><?= $value["title"] ?></td>
                        <td><?= substr($value["content"], 0, 140) ?></td>
                        <td><?= $value["img"] ?></td>
                        <td><?= $value["category"] ?></td>
                        <td><a href="/updateArtclAction?<?= $value["id_article"] ?>"><button type="button" class="btn btn-info shadow-2dp"><i class="fas fa-pen-square fa-lg"></i></button></a></td>
                        <td><a href="/deleteAction?<?= $value["id_article"] ?>"><button id="<?= $value["id"] ?>" type="button" class="btn btn-danger shadow-2dp"><i class="fas fa-eraser fa-lg"></i></button></a></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
</div>
<?php require_once 'public/layouts/footer.php';