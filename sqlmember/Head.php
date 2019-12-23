<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
        include("config.php");    
        $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
        $objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
        $msg = "";
      
    ?> 
    
<!-- pageheader
================================================== -->
<div class="s-pageheader">
        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="../index.html">
                        <img src="../images/logo.png" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->
            
             <!-- end header__social -->
                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">
                    <h2 class="header__nav-heading h6">Site Navigation</h2>
      <ul class="header__nav">
                        <li><a href="../index.php" style="color:white;" title="">หน้าแรก</a></li>
                        <li><a href="../founding.php"style="color:white;" title="">เจอของ</a></li>
                        <li><a href="../findout.php"style="color:white;" title="">ของฉันหาย</a></li>
                        <li><a href="../searching.php"style="color:white;" title="">AI ลงประกาศ</a></li>                         
                        <li><a href="../howtouse.php"style="color:white;" title="">วิธีการใช้งาน</a></li>
                        <li><a href="../about.php"style="color:white;" title="">เกี่ยวกับเรา</a></li>
                        <li><a href="../contact.php"style="color:white;" title="">ติดต่อ</a></li>  
                        <li><a href="../chatbot.php"style="color:white;" title="">แชทบอท</a></li>          
                        <?php  if($_SESSION['UserID'] == ""){ ?>       
                        <li><a href="login.php" title="">เข้าสู่ระบบ</a></li> 
                        <?php } ?>
                        <br><br>
                     <div>
                        <?php  if($_SESSION['UserID'] != ""){ ?>
                        <p align ="right" style="color:black ;"> Username : <?php echo $objResult["Username"]; ?> | 
                            <a href="member.php"style="color:black;" ><strong>จัดการข้อมูล</strong></a> |  
                            <a href="logout.php" style="color:black;"><strong>ออกจากระบบ</strong></a> 
                        </p> 
                        <?php } ?>
                        </div>
                        
                    </ul> <!-- end header__nav -->
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->
        
</div>


                
    <?php mysqli_close($objCon);   ?>
</body>
</html>

