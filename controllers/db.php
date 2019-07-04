<?php
function getAllArticles()
{
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT title, content, img, date, users.name as author, categories.name as category 
  FROM articles 
  LEFT JOIN users ON articles.user_id=users.id 
  LEFT JOIN categories ON articles.category_id=categories.id ;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}
function getUserArticles($user_id)
{
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT title, content, img, date, users.name as author, categories.name as category 
  FROM articles 
  LEFT JOIN users ON articles.user_id=users.id 
  LEFT JOIN categories ON articles.category_id=categories.id WHERE user_id = $user_id ;");
  $request->execute();
  // var_dump($request->execute());die;
  return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCategories()
{
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT name FROM categories;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getAllUsers()
{
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT * FROM users;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getOneUser($mail, $password)
{
  $connec = new PDO('mysql:dbname=ublog; charset=utf8mb4', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT id, name FROM users WHERE mail = :mail AND password = :password;");
  $request->execute([
    ":mail" => $mail,
    ":password" => $$pass_hache,
  ]);
  return $request->fetch(PDO::FETCH_ASSOC);
}

function getUserId($username)
{
  $connec = new PDO('mysql:dbname=ublog; charset=utf8mb4', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT id FROM users WHERE name= :username;");
  $request->execute([
    ":username" => $username
  ]);
  // var_dump(intval($request->fetchAll(PDO::FETCH_ASSOC)[0]["id"]));die;
  // return $request->fetchAll(PDO::FETCH_ASSOC)[0]["id"];
  return intval($request->fetch(PDO::FETCH_ASSOC)["id"]);
}

function getUserName($username)
{
  $connec = new PDO('mysql:dbname=ublog; charset=utf8mb4', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT name FROM users WHERE name= :username;");
  $request->execute([
    ":username" => $username
  ]);
  return $request->fetch(PDO::FETCH_ASSOC)["name"];
}
function checkPassword($username)
{
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT password FROM users WHERE name= :username;");
  $request->execute([
    ":username" => $username
  ]);
  return $request->fetch(PDO::FETCH_ASSOC)["password"];
}

function checkRole($username)
{
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT role FROM users WHERE name= :username;");
  $request->execute([
    ":username" => $username
  ]);
  return intval($request->fetch(PDO::FETCH_ASSOC)["role"]);
}

function insertArticle($title, $content, $image, $author, $category)
{
  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $request = $connec->prepare("INSERT INTO articles (title, content, img, date, user_id, category_id) VALUES (:title, :content, :img, now(), :author, :category);");
  $request->bindParam(':title', $title);
  $request->bindParam(':content', $content);
  $request->bindParam(':img', $image);
  $request->bindParam(':author', $author);
  $request->bindParam(':category', $category);
  $request->execute();
}

function insertUser($name, $email, $password, $image)
{

  $connec = new PDO("mysql:dbname=ublog; charset=utf8mb4", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO user(name, email, password, image) VALUES (:name, :email, :password, :image);");
  $request->execute([
    ":name" => $name,
    ":email" => $email,
    ":password" => $password,
    ":image" => $image,
  ]);
}
