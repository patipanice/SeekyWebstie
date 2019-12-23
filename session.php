<?php error_reporting(0);
session_start();
include 'config.php';
$strSQL = "SELECT * FROM member WHERE UserID = '" . $_SESSION['UserID'] . "' ";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>