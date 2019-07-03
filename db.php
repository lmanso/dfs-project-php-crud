<?php
function getAllArticles(){
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT title, content, img, date, users.name as author, categories.name as category 
  FROM articles 
  LEFT JOIN users ON articles.user_id=users.id 
  LEFT JOIN categories ON articles.category_id=categories.id ;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCategories(){
    $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT name FROM categories;");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }

  function getAllUsers(){
    $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT * FROM users;");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }

function getOneUser($mail, $password) {
  $connec = new PDO('mysql:dbname=ublog; charset=utf8mb4', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT id, name FROM users WHERE mail = :mail AND password = :password;");
  $request->execute([
    ":mail" => $mail,
    ":password" => $$pass_hache,
  ]);
  return $request->fetch(PDO::FETCH_ASSOC);
}

function checkPassword($username) {
    $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT password FROM users WHERE name= :username;");
    $request->execute([
        ":username" => $username
    ]);
    return $request->fetchAll(PDO::FETCH_ASSOC)[0]["password"];
}

function checkRole($username) {
    $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $connec->prepare("SELECT role FROM users WHERE name= :username;");
    $request->execute([
        ":username" => $username
    ]);
    return intval($request->fetchAll(PDO::FETCH_ASSOC)[0]["role"]);
}

function insertArticle($title, $categories, $content, $image, $author){

  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO articles(title, categorie, content, image, author) VALUES (:title, :content, :image, :author);");
  $request->execute([
    ":title" => $title,
    ":content" => $content,
    ":categories" => $categories,
    ":image" => $image,
    ":author"=> $author,
  ]);
}
