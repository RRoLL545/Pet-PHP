<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Форма регистрации</title>
</head>
<body>
  <div class="container mt-4">
    <?php
      if( !isset($_COOKIE['user']) ):
    ?>
    <div class="col">
      <form action="check.php" method="post">
        <h1>Форма регистрации</h1>
  
        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"> <br>
        <input type="text" class="form-control" name="name" id="name" placeholder="Имя"> <br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"> <br>
  
        <button class="btn btn-success" type="submit">Регистрация</button>
      </form>
    </div>
    <div class="col">
      <form action="auth.php" method="post">
        <h1>Форма авторизации</h1>
  
        <input type="text" class="form-control" name="login" id="login" placeholder="Логин"> <br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"> <br>
  
        <button class="btn btn-success" type="submit">Авторизация</button>
      </form>
    </div>
    <?php else:?>
      <p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a></p>
    <?php endif;?>
  </div>
</body>
</html>