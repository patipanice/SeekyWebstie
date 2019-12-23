<?php include 'session.php' ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>WHERE IS IT GONE ? | เว็บไซต์ตามหาของหายในวิศวกรรมศาสตร์ใน KMITL. </title>
    <?php include 'head_01.php'?>
    <style>
        li,p {
            font-family: 'Mitr', sans-serif;
        }
        .title_name{
            font-family: 'Mitr', sans-serif;
            font-size: 25px;
            color: white;
            margin-bottom: -10px;
        }
        a {
            font-family: 'Mitr', sans-serif;
            color : white;
            margin-bottom: -10px;
        }
        p.page_section{
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>
<body id="top">
    <!-- pageheader ================================================== -->
    <section class="s-pageheader s-pageheader--home">
    <header class="header">
            <div class="header__content row">
                <div class="header__logo">
                    <img src="images/banner/logo.png" alt="Homepage">          
                </div> <!-- end header__logo -->
                <!-- end header__social -->
                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
                <nav class="header__nav-wrap">
                    <h2 class="header__nav-heading h6">Site Navigation</h2>
                    <ul class="header__nav">
                        <li><a href="index.php" style="color:white;" title="">หน้าแรก</a></li>
                        <li><a href="founding.php" style="color:white;" title="">ตามหาของหาย</a></li>
                        <li><a href="findout.php" style="color:white;" title="">พบเจอของหาย</a></li>
                        <li><a href="searching.php" style="color:white;" title="">AI ลงประกาศ</a></li>
                        <li><a href="howtouse.php" style="color:white;" title="">วิธีการใช้งาน</a></li>
                        <li><a href="contact.php" style="color:white;" title="">ติดต่อ</a></li>
                        <li><a href="chatbot.php" style="color:white;" title="">แชทบอท</a></li>
                        <?php if ($_SESSION['UserID'] == "") {?>
                        <li><a href="login1.php" title="">เข้าสู่ระบบ</a></li>
                        <?php }?>
                        <?php if ($_SESSION['UserID'] != "") {?>
                        <p align="right" style="color:#ffbf00 ;"> Username : <a style="color:white;"><?php echo $objResult["Username"]; ?></a> |
                            <a href="member.php" style="color:white;">จัดการข้อมูล</a> |
                            <a href="sqlmember/logout.php" style="color:white;">ออกจากระบบ</a>
                        </p>
                        <?php }?>
                    </ul> <!-- end header__nav -->
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
                </nav> <!-- end header__nav-wrap -->
            </div> <!-- header-content -->
        </header> <!-- header -->
        <div class="pageheader-content row">
            <div class="col-full">
                <div class="featured">
                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/banner/banner.jpg');">
                            <div class="entry__content">
                                <span class="entry__category"><a>WHERE IS IT GONE ? </a></span>
                                <p class ="title_name">"สื่อกลางตามหาของหายในวิศวกรรมศาสตร์ KMITL."</p>
                                Intermediary searching for lost items in the Faculty of Engineering KMITL.
                                <div class="entry__info">
                                </div>
                            </div> <!-- end entry__content -->
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->
                    <div class="featured__column featured__column--small">
                        <div class="entry" style="background-image:url('images/banner/findout.jpg');">
                            <div class="entry__content">
                            <p class ="title_name"><a href="findout.php" title="">ตามหาของหาย</a></p>
                            I'm looking for my lost things
                                <div class="entry__info">
                                    <a href="finding.html" class="entry__profile-pic">
                                        <img class="avatar" src="images/banner.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!-- end entry__content -->
                        </div> <!-- end entry -->
                        <div class="entry" style="background-image:url('images/banner/founding.jpg');">
                            <div class="entry__content">
                                <p class="title_name"><a href="founding.php" title="">พบเจอของหาย</a></p>
                                I found something wanted to find the owner
                                <div class="entry__info">
                                    <a href="founding.html" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!-- end entry__content -->
                        </div> <!-- end entry -->
                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->
            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->
    </section> <!-- end s-pageheader -->
    <!-- s-extra  ================================================== -->
    <section class="s-extra">
        <div class="text-center">
                <p class="page_section">" เว็บไซต์เพื่อตามหาของหายสำหรับคณะวิศวกรรมศาตร์ <br>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง "</p>
                <p class="page_section_0" style="margin-bottom:2px;">Matching system : เมื่อสิ่งของที่มีคนพบ กับ สิ่งของที่มีใครบางคนกำลังตามหานั้น มีความคล้ายกัน ระบบจะทำการแจ้งให้ผู้ใช้งานทราบผ่านหน้าเว็บและอีเมลล์</p>
                <p class="page_section_0">AI Machine Learning : เว็บได้มีการพัฒนานำโมเดล <a href="https://en.wikipedia.org/wiki/Neural_network" style="color:blue">Neural Network</a> มาทำนายจัดหมวดหมู่สิ่งของให้ผู้ใช้งานได้มีความสะดวกยิ่งขึ้น</p>        
        </div>
    <!-- ประกาศ ================================================== -->
    <?php include 'post.php';?> 
    </section> <!-- end s-extra -->
    <!-- s-footer================================================== -->
    <?php include 'footer.php';?>
    <?php include 'close_config.php'?>
    <!-- Java Script ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>