<?php  
    include 'config.php';
    $OrderID = $_GET["OrderID"];
    $strSQL = "UPDATE orders SET Status = 'FOUNDED' WHERE orders.OrderID = $OrderID";
    $objQuery = mysqli_query($objCon, $strSQL);
    header("location:../member.php");
?>      
