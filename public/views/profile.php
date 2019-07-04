<?php 
require_once('public/layouts/header.php');
$users = getAllUsers();

if (isset($_SESSION['username'])) {?>
    <?= 'Bonjour ' . $_SESSION['username'] . ' !'; ?>
    <div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
<?php } else {
    header('Location: /login');
}

require_once 'public/layouts/footer.php';?>