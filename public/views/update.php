<?php
require_once('public/layouts/header.php');
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
$user_id = ($request_uri[1]);
if (checkRole($_SESSION['username']) === 1) { 
} else {
    header('Location: /login');
}
?>
<div class="container">
    <h1>update</h1>
    <form class="" action="/updateAction" method="post">
    <input type="hidden" class="btn"  name="id" value="<?= $user_id ?>">
        <div class="form-group">
            <label for="Name">Name User</label>
            <input required type="text" class="form-control" name="name" placeholder="Modifier le nom utilisateur">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <select required type="select" class="form-control" name="role">
                    <option value="1">Admin</option>
                    <option value="0">User</option>
            </select>
        </div>
        <label for="password">Password</label>
        <input required type="text" class="form-control" name="password"  placeholder="Modifier le password">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Modifier</button>
    </form>
</div>
<?php require_once 'public/layouts/footer.php';
