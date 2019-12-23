<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>เข้าสู่ระบบ</title>
    <?php include 'head_01.php'; ?>
  
    
	<style>
			table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
	</style>
</head>

<body id="top">
     

    <!-- pageheader
    ================================================== -->
    <div class="s-pageheader">

        <header class="header">
            <div class="header__content row">
                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="../images/logo.png" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

               


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>
                     <ul class="header__nav">
                        <li><a href="../index.php" style="color:white;"title="">หน้าแรก</a></li>
                        <li><a href="../founding.php"style="color:white;" title="">เจอของ</a></li>
                        <li><a href="../findout.php"style="color:white;" title="">ของฉันหาย</a></li>
                        <li><a href="../searching.php"style="color:white;" title="">AI ลงประกาศ</a></li>
                        <li><a href="../howtouse.php"style="color:white;" title="">วิธีการใช้งาน</a></li>
                        <li><a href="../about.php"style="color:white;" title="">เกี่ยวกับเรา</a></li>
                        <li><a href="../contact.php"style="color:white;" title="">ติดต่อ</a></li>
                        <li><a href="chatbot.php"style="color:white;"style="color:white;" title="">แชทบอท</a></li>   
                        <li><a href="login.php" style="color:white;"title="">เข้าสู่ระบบ</a></li> <br><br>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

    </div> <!-- end s-pageheader -->

    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
<center><font size = "3" color="red">สมัครสมาชิกก่อนเข้าสู่ระบบ = = > <a href = "register.php">สมัครสมาชิก</a></font></center>
<form name="form1" method="post" action="check_login.php">
<center><font size = "5">เข้าสู่ระบบ</font size></center>
<center><table border="1" style="width: 300px"></center>
<tbody>
<tr>
<td> &nbsp;ชื่อผู้ใช้งาน</td>
<td>
<input name="txtUsername" type="text" id="txtUsername">
</tr>
<tr>
<td> &nbsp;รหัสผ่าน</td>
<td><input name="txtPassword" type="password" id="txtPassword">
</td>
</tr>
</tbody>
</table>
<br>
<input type="submit" name="Submit" value="เข้าสู่ระบบ"> &nbsp;
<input type="reset" name="Submit2" value="รีเซ็ต">
</form>
            </div>
        </div>
        
		    
    </section>

    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row narrow section-intro add-bottom text-center">
            <div class="col-twelve tab-full">

                <h3>Innovation</h3>

                <p class="lead" >ระบบพิเศษ : เมื่อของที่พบ และ ของที่หายนั้น มีความตรงกันระบบจะแจ้งเตือนไปที่ email ของทั้ง 2 ฝ่าย ให้มาเช็คว่าของที่หาตรงกับของที่พบหรือไม่</p>

            </div>
    </div>

     <!-- ประกาศ ================================================== -->
     <div class="post"><?php include 'post.php';?>
    </div>
        

    </section> <!-- end s-extra -->


    <!-- s-footer
    ================================================== -->
    <div class="footer">
<?php include 'footer.php';
?>
</div>


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
<?php mysqli_close($objCon);   ?>

    <!-- Java Script
    ================================================== -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>