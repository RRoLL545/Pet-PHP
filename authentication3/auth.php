<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

  $pass = md5($pass."oil545");

  require('bdConnection.php');
  
  $result = $mysql -> query("SELECT * FROM users1 WHERE login = '$login' AND pass = '$pass'");
  $user = $result -> fetch_assoc();
  if (count($user) == 0) {
    echo "Нет такого пользователя";
    exit();
  }

  setcookie('user', $user['name'], time() + 3600, "/");

  $mysql -> close();

  header('Location: https://rrollexx.000webhostapp.com/authentication3/');