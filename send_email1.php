<?php
$strTo = $_GET['Email'];
$strSubject = "Where is it gone?";
$strHeader = "From: Where is it gone?"; 
$strMessage = "มีรายการสิ่งของบางอย่างที่คุณได้ประกาศไว้ในเว็บ WHERE IS IT GONE? ระบบแมทชิ่งได้ทำการตรวจพบสิ่งของอย่างของผู้ใช้บางคนได้ทำการแมทกัน กรุณาเช็คเว็บไซต์ Where is it gone?";
$flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
if($flgSend) {
    echo '; <script type="text/javascript">
           if(confirm("ส่งอีเมลล์สำเร็จ")) {
                window.location="member_order.php"; 
           }
        </script>';
}else{
    echo '; <script type="text/javascript">
    if(confirm("ส่งอีเมลล์ไม่สำเร็จ กรุณาเช็คที่อยู่อีเมลล์หรือการเชื่อมต่ออินเตอร์เน็ตใหม่ แล้วทำการกดส่งอีกครั้ง")) {
         window.location="member_order.php"; 
    }
 </script>';
}
?>
<?php 
#define('servername', 'localhost');
#define('username', 'id9426747_patipanice');
#define('password', '0868679509');
#define('dbname', 'id9426747_project_db');
#$objCon = mysqli_connect(servername, username, password, dbname);
#mysqli_set_charset($objCon,"utf8");
?>