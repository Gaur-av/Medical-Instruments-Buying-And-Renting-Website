<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['Email'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<header>
    <a href="home.php"><img class="z" src="images/Your paragraph text.png" alt=""></a>
    <a href="allorders.php"><img class="ga" src="images/pngwing.com.png" alt=""></a>
    <a href="cart.php"><img class="g" src="images/clipart1185597.png"></a>
    <a href="logout.php"><img class="g" src="images/pngfind.com-logout-png-5199103.png" alt=""></a>
</header>
<body>
<section><video src="images/Your paragraph text.mp4" autoplay muted width="100%" ></video></section>
<section>
    <div class="outmost">
    <div class="outer">
        <p class="image"><a href="Oxygen_Concentrator.php"><img src="images/OxygenConcentrator.jpg" alt="" align="center"></a></p>
        <p class="name"><a href="Oxygen_Concentrator.php" ><h1>Oxygen Concentrator</h1></a></p>
        <p><a href="Oxygen_Concentrator.php" id="button" ><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href="Multi_Para_Patient_Monitor.php"><img src="images/multiparapatientmonitor.webp" alt="" align="center"></a></p>
        <p class="name"><a href="Multi_Para_Patient_Monitor.php"><h1>Multi-Para-Patient-Monitor</h1></a></p>
        <p><a href="Multi_Para_Patient_Monitor.php" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/defibrilattor.jpg" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>Defibrilattor</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/BiPAP.webp" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>BiPAP</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
</section>
<section>
    <div class="outmost">
    <div class="outer">
        <p class="image"><a href=""><img src="images/Suctionmachine.png" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>Suction Machine</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/ventilator.png" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>Ventilator</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/syringe-infusion-pump.webp" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>Syringe Infusion Pump</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/ECG.jpeg" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>ECG</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
</section>
<section class="f">
    <div class="outmost">
    <div class="outer">
        <p class="image"><a href=""><img src="images/Enternal-feeding-pump.webp" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>Enternal Feeding Pump</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/BMDMachine.webp" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>BMD Machine</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/wheel.jpg" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>Wheel Chair</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
    <div class="outer">
        <p class="image"><a href=""><img src="images/cpm.jpg" alt="" align="center"></a></p>
        <p class="name"><a href=""><h1>CPM Machine</h1></a></p>
        <p><a href="" id="button"><h2>BUY/RENT</h2></a></p>
    </div>
</section>
<footer>
    
    <div style="width:20%;margin-left:20%" class="h">
    <p>OUR ADDRESS:</p><br>
    MEDEQUIP Private Limited<br>
    Buildings Alyssa, Begonia &<br>
    Clove Embassy Tech Village,<br>
    Outer Ring Road, Devarabeesanahalli Village,<br>
    Bengaluru, 560103,<br>
    Karnataka, India<br>
    CIN : U51109KA2012PTC066107<br>
    Telephone: 044-45614700
    </div>
    <div class="h" style="width:20%;margin-left:20%">
        <p>CONTACT US:</p><br>
        Phone :6265382141<br>
        Office:9880470760<br>
        E-mail:medequip@gmail.com<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;medequip_enquiry@gmail.com<br>
        &nbsp<br>
        &nbsp<br>
        &nbsp<br>
        &nbsp<br>
        &nbsp<br>

    </div>
</footer>

</body>
</html>

<?php
}else{
    header("Location: home.php");
    exit();

}
?>