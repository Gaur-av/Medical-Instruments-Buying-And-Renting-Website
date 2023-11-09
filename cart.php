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
	<title>Cart</title>
        <link rel="stylesheet" href="stylesssscart.css">
</head>
<header>
    <a href="home.php"><img class="z" src="images/Your paragraph text.png" alt=""></a>
    <a href="allorders.php"><img class="ga" src="images/pngwing.com.png" alt=""></a>
    <a href="cart.php"><img class="g" src="images/clipart1185597.png"></a>
    <a href="logout.php"><img class="g" src="images/pngfind.com-logout-png-5199103.png" alt=""></a>
</header>
<body style="background-image :url(images/pngtree-vector-design-background-medical-instruments-for-vaccine-picture-image_1204718.jpg)">
        
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
		$sql = "Select * from cart where id = $id";
                $result = mysqli_query( $conn , $sql );
                $sum = 0;
                if($result){
                        echo "<div class=all_orders>CART</div><div><table><tr><th>PRODUCT NAME</th>&nbsp&nbsp<th>PRICE</th></tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr><td>&nbsp&nbsp".$row["Product_name"]."</td>&nbsp&nbsp&nbsp<td>".$row["Price"]."<br>/".$row["Preference"]."</td><td><form action=remove.php method=post>
                                <input type=hidden name=delete value=$row[Ord_id]>
                                <input type=submit value=Delete></form></td></tr>";
                                $sum = $sum + $row["Price"];
    			}
			echo "</table></div>";
                        echo "<div class=a>";
                        echo "<p>";
                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGrand Total<br>";
                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&#8377;$sum";
                        echo "</p>";
                        echo "<div>";
                        echo "<form action=thanku.php method=post>";
                        echo "<input type=submit value=BUY>";
                        echo "</form>";
                        if( $sum == 0){
                                echo "<body><div class=error >Your cart  is Empty.Go Shopping.</div></body>";
                        }
		}else{
                        echo "<body><div class=error >Your cart  is Empty.Go Shopping.</div></body>";
                }
        }
