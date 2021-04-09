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


  <div class="container">
    <form action="" method="post" class="form-signin">
      <h1>Login</h1>
      
      <input type="text" name="username" id="" class="form-control" placeholder="Username" required>
      <input type="password" name="password" id="" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
    </form>
  </div>

  <?php
  session_start();
  require('connect.php');

  if ( isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE userName='$username' AND password='$password'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      $_SESSION['username'] = $username;
    } else {
      $fmsg = "Ошибка";
    }
  }

  if (isset($_SESSION['userName'])) {
    $username = $_SESSION['username'];
    echo "Hello, " . $username . ". ";
    echo "Вы вошли.";
    echo "<a href='logout.php' class='btn btn-lg btn-primary'> Logout </a>";
  }
?>
</body>
</html>