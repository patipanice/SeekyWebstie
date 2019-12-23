<?php include 'session.php'; include 'session_check.php';?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>ตามหาของหาย</title>
    <?php include 'head_01.php'?>
</head>
<body id="top">
<?php include 'insert_image.php'; include 'header.php'; include 'founding_check_form.php';?>
<!-- s-content================================================== -->
            <section class="s-content">
                <div class="row narrow">
                    <div class="col-full s-content__header" data-aos="fade-up">
                        <h2 style="margin-bottom: -5px; margin-top:-20px">ตามหาของหาย</h2>
                        <p style="color:lightsteelblue;">I found something wanted to find the owner</p>
                        <hr style="margin-top: -15px">
                        <form action="findout.php" method="post" enctype="multipart/form-data">
                            <!--<input type="hidden" name="size" value="1000000"> -->
                            <p style="font-size: 20px">ทำอะไรหาย ?</p>
                            <input name="txtObject" type="text" id="txtObject" placeholder="ใช้ภาษาไทยเท่านั้น" class="depth"
                                style="margin-left: auto; margin-right: auto; margin-top:-30px">
                                <span class="error"><?php echo ($txtObjecterr); ?></span>
                            <br>
                            <p style="font-size: 20px">ประเภทสิ่งของ</p>
                            <select name="txtCata" autofocus="autofocus" id="txtCata" style="margin-left: auto; margin-right: auto; margin-top:-30px">
                                <option value="000">เลือกประเภท</option>
                                <option value="001">อุปกรณ์อิเล็กทรอนิกส์</option>
                                <option value="002">เครื่องดนตรี</option>
                                <option value="003">เครื่องประดับ</option>
                                <option value="004">ของใช้ทั่วไป</option>
                                <option value="005">อื่นๆ</option>
                            </select>
                            <span class="error"><?php echo ($txtCataerr); ?></span>
                            <br>
                            <p style="font-size: 20px">สถานที่คาดว่าทำหาย</p>
                            <select name="txtLocation" id="txtLocation" style="margin-left: auto; margin-right: auto; margin-top:-30px">
                                <option value="000" selected="selected">เลือกสถานที่</option>
                                <option value="001">ตึก A</option>
                                <option value="002">หอประชุมวิศวะ</option>
                                <option value="003">ตึกภาคโทรคมนาคม</option>
                                <option value="004">ตึกภาคอิเล็คทรอนิกส์</option>
                                <option value="005">ตึกกิจการนักศึกษา</option>
                                <option value="006">สนามโภไคยอุดม</option>
                                <option value="007">ตึกภาควัดคุม</option>
                                <option value="008">ตึกภาคเครื่องกล</option>
                                <option value="009">สนาม CCA</option>
                                <option value="010">ตึกโหล</option>a
                                <option value="011">โรงอาหาร C</option>
                                <option value="012">ลานพระพุทธ</option>
                            </select> 
                            <span class="error"><?php echo ($txtLocationerr); ?></span>
                            <br>
                            <p style="font-size: 20px">วันที่คาดว่าทำหาย</p>
                            <input name="Date" type="date" style="margin-left: auto; margin-right: auto; margin-top:-30px">
                            <span class="error"><?php echo ($Dateerr); ?></span>
                            <br>
                            <p style="font-size: 20px">แนบรูปภาพ (ถ้ามี)</p>
                            <input name="image" type="file" id="picture"><br>
                            <input type="submit" name="submit" value="ประกาศ" style="font-size: 15px; font-family : 'Mitr', sans-serif;">
                            <input type="reset" value="รีเซ็ต" style="font-size: 15px; font-family : 'Mitr', sans-serif;">
                        </form>
                    </div>
                </div>
            </section> <!-- s-content -->
 <?php include 'findout_insert.php';?>                  
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