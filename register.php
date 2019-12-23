<?php include 'session.php' ?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>สมัครสมาชิก</title>
    <?php include 'head_01.php'?>
    <style>
        .depth {
            display: block;
            transition: all 0.3s ease-out;
            padding: 5px;
            color: #F00;
            text-align: center;
            margin-top: -20px;
        }

        input[type=submit] {
            background-color: royalblue;
            margin-top: 20px;
            font-family: 'Mitr', sans-serif;
            font-size: 15px;
            color: white;
        }

        input[type=reset] {
            background-color: royalblue;
            margin-top: 20px;
            font-family: 'Mitr', sans-serif;
            font-size: 15px;
            color: white;
        }

        .error {
            color: red;
        }

        input[type=text]:focus {
            background-color: lightblue;
        }

        input[type=text] {
            margin-top: 8px;
        }

        input[type=password]:focus {
            background-color: lightblue;
        }

        input[type=password] {
            margin-top: 8px;
        }

        .title-form {
            margin-top: -30px;
        }
    </style>
</head>

<body id="top">
    <?php include 'header.php';  include 'sqlmember/check_form.php'; ?>
    <!-- s-content================================================== -->
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <h2 class="title-form">สมัครสมาชิก</h3>
                        ชื่อผู้ใช้งาน <br>
                        <input name="txtUsername" type="text" id="txtUsername" size="30"
                            placeholder="ตัวอักษรหรือตัวเลข อย่างน้อย 8 ตัว" class="depth">
                        <span class="error"><?php echo $usernameErr; ?></span><br>
                        รหัสผ่าน <br>
                        <input name="txtPassword" type="password" id="txtPassword" size="30"
                            placeholder="รหัสผ่านอย่างน้อย 8 ตัว" class="depth">
                        <span class="error"> <?php echo $passErr; ?></span><br>
                        ยืนยันรหัสผ่าน <br>
                        <input name="txtConPassword" type="password" id="txtConPassword" size="30"
                            placeholder="ยืนยันรหัสผ่าน" class="depth">
                        <span class="error"> <?php echo $conpassErr; ?></span><br>
                        ชื่อจริง<br>
                        <input name="txtName" type="text" id="txtName" size="30"
                            placeholder="ชื่อจริงภาษาอังกฤษหรือภาษาไทย" class="depth">
                        <span class="error"> <?php echo $nameErr; ?></span><br>
                        เบอร์โทรศัพท์ <br>
                        <input name="txtTel" type="text" id="txtTel" size="30" placeholder="เบอร์โทรศัพท์ตัวเลข10หลัก"
                            class="depth">
                        <span class="error"> <?php echo $telErr; ?></span><br>
                        อีเมลล์ <br>
                        <input name="txtEmail" type="text" id="txtEmail" size="30"
                            placeholder="อีเมลล์ outlook.com เท่านั้น" class="depth">
                        <span class="error"> <?php echo $emailErr; ?></span><br>
                        <input type="submit" name="submit" value="สมัครสมาชิก">
                        <input type="reset" name="reset" value="รีเซ็ต">
                        <br>
                        <a href='login1.php' style="color:firebrick">
                            <-- กลับไปหน้าเข้าสู่ระบบ</a> 
                        </form> </div> </div> </section> <!-- s-content -->
                                <!-- s-footer ================================================== -->
                                <div class="footer">
                                    <?php include 'sqlmember/insert_form.php'; include 'footer.php'; include 'close_config.php'; ?>
                                </div>
                                <!-- Java Script ================================================== -->
                                <script src="js/jquery-3.2.1.min.js"></script>
                                <script src="js/plugins.js"></script>
                                <script src="js/main.js"></script>
</body>

</html>