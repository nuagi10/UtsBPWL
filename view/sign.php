<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>FLORIST || Sign in</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="responsif.css">

</head>

<body class="data">
    <form action="../controller/proses.php?aksi=tambah" method="POST">
        <div class="login-box">
            <h1>Sign In</h1>
            <div class="textbox">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Email" name="email">
            </div>

            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="name">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
            </div>

            <input type="submit" class="btn" value="Sign in">
        </div>
    </form>
</body>

</html>