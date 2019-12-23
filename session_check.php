<?php 
        //เช็คว่าผู้ใช้สมัครเข้ามาหรือยังถ้ายังจะไปหน้า สมัครสมาชิก
        if($_SESSION['UserID'] == ""){
    ?> 
    <script type="text/javascript">
        if(confirm("กรุณาสมัครสมาชิกหรือเข้าสู๋ระบบก่อนใช้งาน!")) {
            window.location="login1.php"; 
        }else {
            window.location="index.php"; 
        } 
    </script>
    <?php  }
    ?>