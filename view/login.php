<?php
include('../config/config.php');
$logingoogle = $google_client->createAuthUrl();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <title>FLORIST || Login</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="responsif.css">
</head>

<body class="data">

  <form action="../controller/proses.php?aksi=user" method="POST">
    <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="name">
      </div>
      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password" name="password">
      </div>
      <input type="submit" class="btn" value="Login">
      <center>
        <div class="p">
          <p>Or</p>
        </div>
      </center>
      <button class="btn"><a href='<?php echo $logingoogle?>' style="color:white; text-decoration: none;">With Google Account</a></button>
      <center>
        <p>
          if you don't have that, you can
          <a href="sign.php">Sign in</a>
        </p>
      </center>
    </div>
  </form>

</body>

</html>