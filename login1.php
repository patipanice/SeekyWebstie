<?php include 'session.php' ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>เข้าสู่ระบบ</title>
    <?php include 'head_01.php'?>
    <style>
        .depth {
            display: block;
            transition: all 0.3s ease-out;
            padding: 5px;
            color: #F00;
	        text-align: center;
	        font-family:customfont;
            margin-top: -20px;
        }
        input[type=submit] {
            background-color: lightblue;
            margin-top: 20px;
            font-family: 'Mitr', sans-serif;
            font-size: 15px;
        }
        input[type=reset] {
            background-color: lightblue;
            font-family: 'Mitr', sans-serif;
            font-size: 15px;
        }
        </style>
</head>
<body id="top">
<?php include 'header.php'; ?>
<!-- s-content================================================== -->
            <section class="s-content">
                <div class="row narrow">
                    <div class="col-full s-content__header" data-aos="fade-up">
                         <!-- LOGIN  -->
                         <p style="color:tomato">กรุณาสมัครสมาชิกก่อนเข้าสู่ระบบ --> <a href = "register.php" style="color:darkred">สมัครสมาชิก</a></p> 
                         <form name="form1" method="post" action="sqlmember/check_login.php">
                         <p>ชื่อผู้ใช้งาน</p>
                         <input name="txtUsername" type="text" id="txtUsername" class="depth">
                         <p>รหัสผ่าน</p>
                         <input name="txtPassword" type="password" id="txtPassword" class="depth">
                         <input type="submit" name="Submit" value="เข้าสู่ระบบ">
                         <input type="reset" name="Submit2" value="รีเซ็ต">
                         </form>
                    </div>
                </div>
            </section> <!-- s-content -->               
 <!-- s-footer ================================================== -->
<div class="footer">
<?php include 'footer.php'; include 'close_config.php'; ?>
</div>
<!-- Java Script ================================================== -->
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>
</body>
</html>