<?php include '../session.php' ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!--- basic page needs ================================================== -->
    <title>สมัครสมาชิก</title>
    <?php include '../head_01.php'?>
    <style>
        .body-content {
            background-color: white;
            text-align: center;
            padding: 10px;
        }
        .depth {
            display: block;
            border: 1px solid rgba(255,255,255,0.6);
            background: linear-gradient(#eee, #fff);
            transition: all 0.3s ease-out;
            box-shadow: inset 0 1px 4px rgba(0,0,0,0.4);
            padding: 5px;
            color: #F00;
	        text-align: center;
	        font-family:customfont;
            margin: 0 auto;
        }
        .error {
            color: red;
        }
        input[type=text]:focus {
            background-color: lightblue;
        }
        input[type=password]:focus {
            background-color: lightblue;
        }
    </style>
</head>
<body id="top">
    <!-- pageheader ================================================== -->
    <?php include '../header.php'; ?>
	<?php include 'check_form.php'?>
	<div class="body-content">
    	<form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        	<h2 class="title-form">สมัครสมาชิก</h3>
        	ชื่อผู้ใช้งาน <br>
            <input name="txtUsername" type="text" id="txtUsername" size="30" placeholder="ตัวอักษรหรือตัวเลข อย่างน้อย 8 ตัว" class="depth">
            <span class="error"><?php echo $usernameErr; ?></span><br>
        	รหัสผ่าน <br>
        	<input name="txtPassword" type="password" id="txtPassword" size="30" placeholder="รหัสผ่านอย่างน้อย 8 ตัว" class="depth">
        	<span class="error"> <?php echo $passErr; ?></span><br>
        	ยืนยันรหัสผ่าน <br>
        	<input name="txtConPassword" type="password" id="txtConPassword" size="30" placeholder="ยืนยันรหัสผ่าน" class="depth">
        	<span class="error"> <?php echo $conpassErr; ?></span><br>
       	 	ชื่อจริง<br>
     	   	<input name="txtName" type="text" id="txtName" size="30" placeholder="ชื่อจริงภาษาอังกฤษหรือภาษาไทย" class="depth">
        	<span class="error"> <?php echo $nameErr; ?></span><br>
            เบอร์โทรศัพท์ <br>
     	   	<input name="txtTel" type="text" id="txtTel" size="30" placeholder="เบอร์โทรศัพท์ตัวเลข10หลัก" class="depth">
        	<span class="error"> <?php echo $telErr; ?></span><br>
        	อีเมลล์ <br>
     	   	<input name="txtEmail" type="text" id="txtEmail" size="30" placeholder="อีเมลล์ outlook.com เท่านั้น" class="depth">
        	<span class="error"> <?php echo $emailErr; ?></span><br>
               <input type="submit" name="submit" value="สมัครสมาชิก"> <br>
               <a href='../login1.php'> <-- กลับสู่หน้าเข้าสู่ระบบ</a>
    	</form>
    </div>
<?php include 'insert_form.php'?>
    <!-- s-footer================================================== -->
<?php  include '../footer.php'; include '../close_config.php';?>
    <!-- Java Script================================================== -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>