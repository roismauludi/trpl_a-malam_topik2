<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated Login Form</title>
  <link rel="stylesheet" href="style_login.css">
</head>

<body>
  <div class="box">
    <form action="cek_login.php" method="POST">
      <div class="form">
        <h2>IF MAIL</h2>
        <div class="inputBox">
          <input type="text" name="username" required="required">
          <span>Username</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="password" name="password" required="required">
          <span>password</span>
          <i></i>
        </div>
        </br>
        <input type="submit" value="Login">
      </div>
    </form>
  </div>

</body>

</html>