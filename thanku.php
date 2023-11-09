<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Email'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="stylesssscart.css">
</head>
<header>
    <a href="home.php"><img class="z" src="images/Your paragraph text.png" alt=""></a>
	<a href="allorders.php"><img class="ga" src="images/pngwing.com.png" alt=""></a>
    <a href="cart.php"><img class="g" src="images/clipart1185597.png"></a>
    <a href="logout.php"><img class="g" src="images/pngfind.com-logout-png-5199103.png" alt=""></a>
</header>
<body class="x">
	<h1 align= "center" style="margin-top: 20%;background-color: aqua;">THANK YOU FOR SHOPPING WITH US.</h1>
</body>
</html>
<?php
include './config/db.php';
        if(isset($_SESSION['id'])){
                function validate($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                }
		$id = $_SESSION['id'];
		$sql = "insert into all_orders(id,Product_name,Price,Preference) select id, Product_name, Price, Preference from cart where id = $id ";
		$result = mysqli_query($conn,$sql);
		$sql = "delete from cart where id = $id";
		$result = mysqli_query($conn,$sql);
}
