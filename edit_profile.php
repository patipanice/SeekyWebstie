<?php include 'session.php'; include 'session_check.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>จัดการผู้ใช้งาน</title>
    <?php include 'head_01.php'?>
    <style>
        #customers, strong{
            font-family: 'Mitr', sans-serif;
            border-collapse: collapse;
            width: 60%;
            color:black;
        }
        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        #customers tr:hover {
            background-color: #ddd;
        }
        input {
            width: 100%;
            margin-top:30px;

        }
        input[type=text]:focus, input[type=password]:focus {
            font-family: 'Mitr', sans-serif;
            background-color: lightblue;
        }
        input[type=submit],input[type=reset] {
            font-family: 'Mitr', sans-serif;
            background-color: lightblue;
            font-size: 12px;
        }
            </style>
</head>
<body id="top">
    <?php  include 'header.php'; include 'member_config.php'; include 'sqlmember/check_form.php' ?>
    <!-- s-content================================================== -->
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
            <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!--<form name="form1" method="post" action="sqlmember/save_profile.php"> -->
                <h3 style="margin-top:-20px">ข้อมูลผู้ใช้งาน</h3>
                <table id="customers" align="center">
                    <tr>
                        <td>ชื่อผู้ใช้งาน</td>
                        <td style="color:gray">
                            <input name="txtUsername" type="text" id="txtUsername" value="<?=$objResult["Username"];?>">
                            <span class="error" style="margin-left:-150px;"><?php echo $usernameErr; ?></span><br>
                        </td>
                    </tr>
                    <tr>
                        <td>ชื่อจริง</td>
                        <td style="color:gray">
                            <input name="txtName" type="text" id="txtName" value="<?=$objResult["Name"];?>">
                            <span class="error" style="margin-left:-150px;"><?php echo $nameErr; ?></span><br>
                        </td>
                    </tr>
                    <tr>
                        <td>รหัสผ่าน</td>
                        <td style="color:gray">
                            <input name="txtPassword" type="password" id="txtPassword" placeholder="รหัสผ่านอย่างน้อย 8 ตัว">
                            <span class="error" style="margin-left:-150px;"><?php echo $passErr; ?></span><br>
                        </td>
                    </tr>
                    <tr>
                        <td>ยืนยันรหัสผ่าน</td>
                        <td style="color:gray">
                            <input name="txtConPassword" type="password" id="txtConPassword" placeholder="ยืนยันรหัสผ่าน">
                            <span class="error" style="margin-left:-150px;"><?php echo $conpassErr; ?></span><br>
                        </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์</td>
                        <td style="color:gray">
                            <input name="txtTel" type="text" id="txtTel" value="<?=$objResult["Telephone"];?>">
                            <span class="error" style="margin-left:-150px;"><?php echo $telErr; ?></span><br>
                        </td>
                    </tr>
                    <tr>
                        <td>อีเมลล์</td>
                        <td style="color:gray">
                            <input name="txtEmail" type="text" id="txtEmail" value="<?=$objResult["Email"];?>">
                            <span class="error" style="margin-left:-150px;"><?php echo $emailErr; ?></span><br>
                        </td>
                    </tr>
                    <tr>
                        <td>บันทึกข้อมูล</td>
                        <td ><input type="submit" name="Summit" value="ยืนยัน" style="width: 40%;">
                             <input type="reset" name="Summit" value="รีเซ็ต" style="width: 40%;">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section> <!-- s-content -->
    <?php include 'update_profile.php'?>
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