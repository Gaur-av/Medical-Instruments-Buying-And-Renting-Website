<?php
include './config/db.php';

    if(isset($_POST['fname']) && isset($_POST['lname']) &&
        isset($_POST['email']) && isset($_POST['mob']) &&
        isset($_POST['password']) && isset($_POST['re_password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }   
        $fname = validate($_POST['fname']);
        $lname = validate($_POST['lname']);
        $email = validate($_POST['email']);
        $mob = validate($_POST['mob']);
        $pass = validate($_POST['password']);
        $re_pass = validate($_POST['re_password']);

        if(empty($fname)){
            header("Location: signup.php?error=First Name is Required");
            exit();
        }else if(empty($email)){
            header("Location: signup.php?error=Email is Required");
            exit();
        }else if(empty($mob)){
            header("Location: signup.php?error= Mobile Number is Required");
            exit();
        }else if(strlen($mob) !== 10){
            header("Location: signup.php?error=Mobile number must be 10 digits");
            exit();
        }else if(empty($pass)){
            header("Location: signup.php?error=Password is Required");
            exit();
        }else if (strlen($pass) < 8) {
            header("Location: signup.php?error=Password must have at least 8 characters");
            exit();
        } else if (!preg_match('/[A-Z]/', $pass)) {
            header("Location: signup.php?error=Password must have at least one uppercase letter");
            exit();
        } else if (!preg_match('/\d/', $pass)) {
            header("Location: signup.php?error=Password must have at least one digit");
            exit();
        } else if (!preg_match('/[^a-zA-Z\d]/', $pass)) {
            header("Location: signup.php?error=Password must have at least one symbol");
            exit();
        }else if(empty($re_pass)){
            header("Location: signup.php?error=Confirm Password");
            exit();
        }else if ($pass != $re_pass) {
            header("Location: signup.php?error=Enter Correct Password");
            exit();
        }else{
            $sql = "INSERT Into user(Firstname,Lastname,Email,Mobile_Number,Password) values('$fname','$lname','$email','$mob','$pass')";
            $result =  mysqli_query($conn,  $sql);
            if ($result) {
                header("Location: signup.php?success=Your account is created Successfully");
                exit();
            }else{
                header("Location:signup.php?error=Unknown error occured");
                exit();
            }

        }
    }else{
        header("Location: signup.php");
        exit();
    }
    
?>