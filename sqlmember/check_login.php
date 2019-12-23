<?php
session_start();
include("config.php");
$strSQL = "SELECT * FROM member WHERE Username =
'".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."'
and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
if(!$objResult) {
echo '; <script type="text/javascript">
           if(confirm("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง")) {
                window.location="../login1.php"; 
            }  
            else{ window.location="../login.php";  } 
        </script>';
}
else
{
$_SESSION["UserID"] = $objResult["UserID"];
$_SESSION["Status"] = $objResult["Status"];
session_write_close();
if($objResult["Status"] == "ADMIN")
{
header("location:admin_page.php");
}
else
{
	header("location:../index.php");
}
}
?>