<?php
session_start();
include './config/db.php';
        if(isset($_SESSION['id']) && isset($_POST["delete"])){
                function validate($data){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                }
				$ord_id = validate($_POST["delete"]);
				$sql = "delete  from cart where Ord_id = $ord_id";
                $result = mysqli_query( $conn , $sql );
				if($result){
					echo "<script>
  						location.href = 'cart.php';
					</script>";

				}
		}
?>
