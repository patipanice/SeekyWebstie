<?php
if ($usernamechk && $passchk && $conpasschk && $namechk && $telchk && $emailchk) {
	$strSQL = "UPDATE member SET
		 Username = '" . $_POST['txtUsername'] . "'
	 	,Password = '" . $_POST['txtPassword'] . "'
		,Name = '" . $_POST['txtName'] . "'
		,Telephone = '" . $_POST['txtTel'] . "'
		,Email = '" . $_POST['txtEmail'] . "'
		WHERE UserID = '" . $_SESSION["UserID"] . "' ";
	
?>
    <script type="text/javascript">
        if(confirm("ทำการแก้ไขข้อมูลเสร็จสิ้นกด 'OK' เพื่อกลับไปที่หน้าจัดการข้อมูลหรือ 'Cancle' เพื่อกลับไปที่หน้าแก้ไข")) {
            window.location="member.php";
        } else{
            window.location="edit_profile.php";
        }
    </script> 
<?php 
$objQuery = mysqli_query($objCon, $strSQL); 
} ?>

