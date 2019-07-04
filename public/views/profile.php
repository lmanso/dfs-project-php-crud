<?php
require_once('public/layouts/header.php');
// $users = getAllUsers();
$user_id = getUserId($_SESSION['username']);
$articles = getUserArticles($user_id);

if (isset($_SESSION['username'])) { ?>
  <div class="container">
    <div class="jumbotron">
      <h1><?= $_SESSION['username']; ?></h1>
      <img class="" src="img_avatar1.png" alt="Card image">
      <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
    </div>
  </div>
<?php } else {
  header('Location: /login');
} ?>

<div class="container">
  <div class="row">
    <div class="col-9 overflow">
      <h1 class="">Liste des articles :</h1>
      <?php foreach ($articles as $key => $value) : ?>
        <div class="" style="max-height: 90vh; max-width: 45vh">
          <div class="card-content align-center shadow-2dp card text-white bg-dark mb-3">
            <div class="center-text card-header"> <?= $value["title"] ?> </div>
            <div class="card-body">
              <img class="img-home" src="<?= $value['img'] ?>?random=<?= $key ?>" alt="Card image <?= ++$key ?>">
              <h4 class="card-title"></h4>
              <p class="card-text"> <?= substr($value["content"], 0, 140) ?></p>
            </div>
            <div class="card-footer text-muted ">
              <h5 class="mb-2 text-white"><?= $value["category"] ?> </h5>
              <h6 class="mb-2 text-white"> <?= $value["date"] ?> - <?= $value["author"] ?></h6>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php require_once 'public/layouts/footer.php'; ?>