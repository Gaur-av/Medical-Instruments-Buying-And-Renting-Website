<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MEDEQUIP|Login</title>
</head>
<body>
    <form align='center' action="login.php" method='post'>
    <h1>LOGIN</h1>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET[ 'error' ]; ?></p>
    <?php } ?>
    <div class='a'>E-mail</div>
    <div><input type="email" name='uname'></div>
    <div class='a'>Password</div>
    <div><input type="password" name='password1'></div>
    <div><input type="submit" value="Login"></div>   
    <div class='b'>New To MEDEUQIP?</div>
    <p><a href="signup.php">Create Account</a></p>
    </form>
</body>
</html>