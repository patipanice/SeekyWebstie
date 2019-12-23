<?php 
include '../config.php';
$OrderID = $_GET['OrderID'];
$strSQL = "DELETE FROM orders WHERE OrderID = $OrderID";
$objQuery = mysqli_query($objCon,$strSQL);
echo '; <script type="text/javascript">
           if(confirm("ลบข้อมูลเสร็จสิ้น")) {
                window.location="../member.php"; 
            }  
            else{ window.location="../member.php";  } 
        </script>';
?>
