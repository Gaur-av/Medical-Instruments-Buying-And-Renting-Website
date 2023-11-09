<?php  
session_start();
include './config/db.php';

    if(isset($_POST['uname']) && isset($_POST['password1'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }   
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password1']);

        if(empty($uname)){
            header("Location: index.php?error=User Name is Required");
            exit();
        }else if(empty($pass)){
            header("Location: index.php?error=Password is Required");
            exit();
        }else{
            $sql = "SELECT * FROM user where Email='$uname' AND Password='$pass'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);

                if ( $row['Email'] == $uname  && $row['Password'] == $pass ){
                    $_SESSION['Email'] = $row['Email'];
                    $_SESSION['Firstname'] = $row['Firstname'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    exit();
                }else{
                    header("Location: index.php?error=Incorrect user name or password");
                    exit();
                }

            }else{
                header("Location: index.php?error=Incorrect user name or password");
                exit();

            }
        }
    }else{
        header("Location: index.php");
        exit();
    }
?>