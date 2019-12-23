<?php include 'session.php'; include 'session_check.php';?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>ติดต่อเรา</title>
    <?php include 'head_01.php'?>
</head>
<body id="top">
<?php include 'header.php'; ?>
<!-- s-content================================================== -->
<section class="s-content s-content--narrow">
        <div class="row contact">
            <div class="s-content__header col-full">
                <h2 style="margin-top: -20px"> ติดต่อเรา </h3>
            </div> <!-- end s-content__header -->
                <div class="row ">
                    <div class="col-six tab-full">
                        <h3>Where is it gone?</h3>
                        <p>
                        เมื่อคุณพบของหายบริเวณคณะวิศวกรรมศาสตร์<br>
                        สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br>
                        สามารถลงประกาศและส่งคืนเจ้าของได้ที่เว็บเรา<br>
                        อีกทั้งเว็บนี้เรายังจัดเก็บข้อมูลของที่ค้นพบแล้วและ<br>
                        ยังไม่พบ มาจัดเก็บไว้เพื่อให้ผู้มาหาของดูรายละเอียด<br>
                        เข้าใจได้ง่ายขึ้น
                        </p>
                    </div>
                    <div class="col-six tab-full">
                        <h3>ผู้จัดทำเว็บไซต์</h3>
                        <p>Patipan Roungsuwan [Project Manager]<br> <a href="#" style="color:chocolate">60010565@kmitl.ac.th</a><br>
                        Papawin Sremuang [AI&Model developer]<br> <a href="#" style="color:chocolate">60010576@kmitl.ac.th</a><br>
                        Pakjira Pumsri [UI/UX]<br> <a href="#"style="color:chocolate">60010759@kmitl.ac.th</a><br>
                        Suparkorn Kobsuttipoonchai[Backed developer]<br> <a href="#" style="color:chocolate">60010988@kmitl.ac.th</a><br>
                         Supakitt Thawornchat[Chatbot developer]<br> <a href="#" style="color:chocolate">60010993@kmitl.ac.th</a>
                        </p>
                    </div>
                </div> <!-- end row -->

                <h3>ติดต่อแจ้งปัญหาหรือพบบัค</h3>
                <form name="cForm" id="cForm" method="post" action="contact.php">
                    <fieldset>
                        <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="ข้อความ" ></textarea>
                        </div>
                        <input type="submit" name="submit" value="ส่งอีเมลล์ถึงผู้พัฒนา" style="font-size: 15px;" >
                    </fieldset>
                </form> <!-- end form -->
            </div> <!-- end s-content__main -->
        </div> <!-- end row -->
    </section> <!-- s-content -->            
<?php include 'contact_sendmail.php'?>
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