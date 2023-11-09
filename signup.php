<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>MEDEQUIP|SIGN UP</title>
</head>
<body>
    <form align='center' action="signup_check.php" method="post">
    <h1>SIGNUP</h1>
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET[ 'error' ]; ?></p>
    <?php } ?>
    <?php if(isset($_GET['success'])){?>
        <p class="error"><?php echo $_GET[ 'success' ]; ?></p>
    <?php } ?>

    <span class='d'>First Name</span><span class='e'>Last Name</span><br>
    <?php if(isset($_GET[ 'fname' ])) { ?>
        <span><input class='a' 
                    type="text" 
                    placeholder='Gaurav' 
                    name="fname" 
                    value=" <?php echo $_GET[ 'fname' ]; ?> "></span>
    <?php }else{ ?>
        <span><input class='a' 
                        type="text"
                         placeholder='Gaurav' 
                         name="fname" ></span>
    <?php } ?>

        <span><input class='a' type="text" placeholder='Singh'  name='lname'></span>
        <div class='b'>E-mail</div> 
        <div><input type="email" name="email" placeholder='gauravs2340@gmail.com'></div>
        <div class='b'>Mobile Number</div>
        <div><input class='c' type="text" name="mob" placeholder='6265382141'></div>
        <div class='b'>Password</div>
        <div><input type="password" name="password"></div>
        <div class='b'>Confirm Password</div>
        <div><input type="password" name="re_password"></div>
        <div><input type="submit" value="Sign up"></div>
        <div class='z'>Already Signed-up?</div>
        <div class='y'><a href="login.php">LogIN</a>
    </form>
</body>
</html>