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
    <title>OXYGEN CONCENTRATOR</title>
    <link rel="stylesheet" href="styleproducts.css">
</head>
<header>
<a href="home.php"><img class="z" src="images/Your paragraph text.png" alt=""></a>
<a href="allorders.php"><img class="ga" src="images/pngwing.com.png" alt=""></a>
    <a href="cart.php"><img class="g" src="images/clipart1185597.png"></a>
    <a href="logout.php"><img class="g" src="images/pngfind.com-logout-png-5199103.png" alt=""></a>
</header>
<body>
    <div style=" width:30%;margin-top:5%; display: inline-block; background-color:rgb(248, 219, 169); border-radius:50px;"><img class="d" src="images/OxygenConcentrator.jpg" alt="Oxygen Concentrator"></div>
    <div  class="inner"style=" width:60%;padding-left:5%">
        <h1>OXYGEN CONCENTRATOR</h1>
        <p>An oxygen concentrator is a device that concentrates the oxygen from a gas supply (typically ambient air)<br> by selectively removing nitrogen to supply an oxygen-enriched product gas stream.<br>
        <b>You need to get your doctor's Consultation before you buy or use an Oxygen Concentrator.<br> Using one without Doctor"s guidance or a prescription can be dangerous.</b></p>
        <form action="Oxygen_Concentrator.php" method="post">
            <input type="hidden" name="product" value="1000"><br>
            <input type="radio" value="1MonthRent" name="preference" ><span>  &#8377; 5000/ 1 Month</span> <br>
            <input type="radio" value="2MonthRent" name="preference" ><span>  &#8377; 9500 / 2 Months</span> <br>
            <input type="radio" value="3MonthRent" name="preference" ><span>  &#8377; 14000 / 3 Months</span> <br>
            <input type="radio" value="BuyingPrice" name="preference" id="1000"><span>  &#8377; 90000 / Buy</span> <br>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET[ 'error' ]; ?></p>
            <?php } ?>
            <?php if(isset($_GET['success'])){?>
            <p class="error"><?php echo $_GET[ 'success' ]; ?></p>
            <?php } ?>
            <input type="submit" value="BUY/RENT">
        </form>
    </div>       
</body>
</html>
<?php
include './config/db.php';
        if(isset($_POST['preference']) && isset($_POST['product']) && isset($_SESSION['id'])){
                function validate($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                }
                $preference = validate($_POST['preference']);
                $product = validate($_POST['product']);
                $sql = " select * from product where product_id= $product";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $product_name = $row['Product_name'];
                $price = $row["$preference"];
                $id = $_SESSION['id'];
                $sql = "INSERT Into cart(id,Product_name,Price,Preference) values('$id','$product_name','$price','$preference')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "<div id='flash-message' style='font-weight: bold; font-size: 40px; color: red;'>Item Successfully Added to cart</div>";
                    echo "<script>
                        setTimeout(function () {
                            document.getElementById('flash-message').style.display = 'none';
                        }, 3000);
                    </script>";
                    exit();
                }else{
                    header("Location: Oxygen_Concentrator.php?error=Unknown Error Occured");
                    exit();
              }
            }
?>
