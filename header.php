<section class="s-pageheader">
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
                        <li><a href="founding.php" style="color:white;" title="">พบเจอของหาย</a></li>
                        <li><a href="findout.php" style="color:white;" title="">ตามหาของหาย</a></li>
                        <li><a href="searching.php" style="color:white;" title="">AI ลงประกาศ</a></li>
                        <li><a href="howtouse.php" style="color:white;" title="">วิธีการใช้งาน</a></li>
                        <li><a href="contact.php" style="color:white;" title="">ติดต่อ</a></li>
                        <li><a href="chatbot.php" style="color:white;" title="">แชทบอท</a></li>
                        <?php if ($_SESSION['UserID'] == "") {?>
                        <li><a href="login1.php" title="">เข้าสู่ระบบ</a></li>
                        <?php }?>
                        <div class="user_session">
                        <?php if ($_SESSION['UserID'] != "") {?>
                        <p align="right" style="color:#ffbf00 ;"> Username : <a style="color:white;"><?php echo $objResult["Username"]; ?></a> |
                            <a href="member.php" style="color:white;">จัดการข้อมูล</a> |
                            <a href="sqlmember/logout.php" style="color:white;">ออกจากระบบ</a>
                        </p>
                        <?php }?>
                        </div>
                    </ul> <!-- end header__nav -->
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
                </nav> <!-- end header__nav-wrap -->
            </div> <!-- header-content -->
        </header> <!-- header -->
</section> <!-- end s-pageheader -->