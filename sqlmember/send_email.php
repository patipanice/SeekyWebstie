﻿<?php
session_start();error_reporting(E_ALL ^ E_NOTICE);    
include("../config.php");
$UserID = $_GET['UserID']; // รับ UserID 
$strSQL = "SELECT * FROM member WHERE UserID = $UserID";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery); 
$Email = $objResult['Email'];

$UserID1 = $_SESSION['UserID']; // รับ UserID ของ USER ที่มาหา
$OrderID = $_GET['OrderID'];
$strSQL1 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.Username,orders.Status 
			FROM catagory,location,member,object,orders 
			WHERE orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND 
        		 orders.OrderID = $OrderID AND  orders.ObjectID = object.ObjectID AND object.CataID = catagory.CataID";
$objQuery1 = mysqli_query($objCon,$strSQL1);
$Result2 = mysqli_fetch_array($objQuery1);
$ObjectName = $Result2['ObjectName'];
$Date  = $Result2['Date'];

$strTo = "$Email";
$strSubject = "Where is it gone?";
$strHeader = "From: Where is it gone?";
$strMessage = "รายการหมายเลข $OrderID | $ObjectName ที่คุณได้ลงไว้เมื่อวันที่ $Date ได้มีสมาชิกหมายเลขไอดี $UserID1 คาดว่ารายการหมายเลข $OrderID อาจจะเป็นของเขา
	และต้องการจะติดต่อกับคุณ ";
$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
if($flgSend == 1) {
	echo '; <script type="text/javascript">
           if(confirm("ส่งอีเมลล์สำเร็จ")) {
                window.location="member.php"; 
            }  
            else{ window.location="member.php";  } 

        </script>';
}
 mysqli_close($objCon);
 ?>

 header("location:member_order.php");