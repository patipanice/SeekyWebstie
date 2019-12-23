<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>เกี่ยวกับเรา</title>
    <?php include 'head_01.php'?>
</head>
<body id="top">
<?php include 'session.php'; include 'header.php'; ?>
<!-- s-content================================================== -->
            <section class="s-content">
                <div class="row narrow">
                    <div class="col-full s-content__header" data-aos="fade-up">
                        <h2 style="margin-bottom: -5px; margin-top:-20px">AI ช่วยในการค้นหาของ</h2>
                        <p style="color:lightsteelblue;">Let the AI help you find your lost items</p>
                        <hr style="margin-top: -15px">
                        <form action="searching.php" method="post" enctype="multipart/form-data">
                            <!--<input type="hidden" name="size" value="1000000"> -->
                            <p style="font-size: 19px">เลือกรูปภาพสิ่งของที่คุณทำหายหรือใกล้เคียง</p>
                            <input name="image" type="file" id="picture"><br>
                            <input type="submit" name="submit" value="ค้นหา" style="font-size: 15px; font-family : 'Mitr', sans-serif;">
                            <input type="reset" value="รีเซ็ต" style="font-size: 15px; font-family : 'Mitr', sans-serif;">
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