<?php
if ($usernamechk && $passchk && $conpasschk && $namechk && $telchk && $emailchk) {
    $strSQL = "INSERT INTO member(Username,Password,Name,Telephone,Email,Status) 
    VALUES ('" . $_POST["txtUsername"] . "','" . $_POST["txtPassword"] . "','" . $_POST["txtName"] . "','" . $_POST["txtTel"] . "','" . $_POST["txtEmail"] . "','USER')";
?>
    <script type="text/javascript">
        if(confirm("สมัครสมาชิกสำเร็จ กด 'OK' เพื่อไปที่หน้า เข้าสู่ระบบ กด 'Cancel' เพื่อไปที่หน้าหลัก")) {
            window.location="login1.php";
        } else{
            window.location="index.php";
        }
    </script>
<?php 
$objQuery = mysqli_query($objCon, $strSQL);
}
?>