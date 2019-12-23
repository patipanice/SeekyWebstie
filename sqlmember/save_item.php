<?php
session_start();
include "../config.php";
$tobeObjID = $_GET['OrderID'];
$tobeNewName = $_POST['txtObject'];
$strSQL = "UPDATE orders,object  SET LocationID='" . $_POST['txtLocation'] . "' , object.CataID='" . $_POST['txtCata'] . "'
    ,object.ObjectName ='" . $_POST['txtObject'] . "' , orders.Date = '" . $_POST['Date'] . "'
     WHERE OrderID = '" . $tobeObjID . "'AND orders.ObjectID = object.ObjectID ";
$objQuery = mysqli_query($objCon, $strSQL);
header('location:../member.php');
?>