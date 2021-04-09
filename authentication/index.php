<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Authentication form</title>
</head>
<body>
<?php
  require('connect.php');

  if ( isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(userName, email, password) VALUES('$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);

    if ($result) {
      $smsg = 'Регистрация завершена успешно';
    } else {
      $fmsg = 'Ошибка';
    }
  }
?>

  <div class="container">
    <form action="" method="post" class="form-signin">
      <h1>Registration</h1>
      <?php if ( isset($smsg)) {?><div class="alert alert-success" role="alert"><?php print_r($smsg)?></div><?php }?>
      <?php if ( isset($fmsg)) {?><div class="alert alert-danger" role="alert"><?php print_r($fmsg)?></div><?php }?>
      <input type="text" name="username" id="" class="form-control" placeholder="Username" required>
      <input type="email" name="email" id="" class="form-control" placeholder="E-mail" required>
      <input type="password" name="password" id="" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
  </div>
</body>
</html>