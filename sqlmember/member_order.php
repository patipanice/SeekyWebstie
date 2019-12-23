<?php   session_start();    error_reporting(E_ALL ^ E_NOTICE);  ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>รายการ</title>
        <?php include 'head_01.php' ?>
        <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        #table1 {
            border-collapse: collapse;
            width: 150%;
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
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    </style>
</head>

<body id="top">
      <?php 
       
        include("config.php");
        //เช็คว่าผู้ใช้สมัครเข้ามาหรือยังถ้ายังจะไปหน้า สมัครสมาชิก
        if($_SESSION['UserID'] == ""){
       ?> 
      <script type="text/javascript">
    if(confirm("กรุณาสมัครสมาชิกหรือเข้าสู๋ระบบก่อนใช้งาน!")) {
        window.location="login.php"; 
    } else{ 
        window.location="../index.php";  
    } 
</script>
        <?php  }
        $OrderID = $_GET['OrderID'];
        $UserID = $_SESSION['UserID'];
        $strSQL0 = "SELECT UserID FROM orders WHERE OrderID = $OrderID";
        $objQuery0 = mysqli_query($objCon,$strSQL0);
        $objResult0 = mysqli_fetch_array($objQuery0); //UserID
        $UserID1 = $objResult0[0]; //เก็บ UserID ที่ส่งมาจาก member หรือจากที่อื่น
        $strSQL2 = " SELECT * FROM member WHERE UserID = $UserID1";
        $objQuery10 = mysqli_query($objCon,$strSQL2);
        $objResult10 = mysqli_fetch_array($objQuery10); //ferch ค่าจากตาราง member มาั้งหมดเลย 

        $strSQL = "SELECT * FROM member WHERE UserID = $UserID";
        $objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
        
        $strSQL1 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.Username,orders.Status FROM catagory,location,member,object,orders WHERE orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND 
        orders.OrderID = $OrderID AND  orders.ObjectID = object.ObjectID AND object.CataID = catagory.CataID";
        $objQuery1 = mysqli_query($objCon,$strSQL1);
        if (isset($_POST['submit'])) {
            // Get image name
            $image = $_FILES['image']['name'];
            // image file directory
            $target = "images/".basename($image);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = "Image uploaded successfully";
         } else{
                $msg = "Failed to upload image";
            }
        }   
    ?>

    <!-- pageheader
    ================================================== -->
    <div>
<?php 
include 'Head.php';

 
 ?></div>

    <!-- s-content
    ================================================== -->
    <section class="s-content">

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
            <h4>รายละเอียดสมาชิก</h4>
                <table width="332" border="1" align="center" id="member_table">
                    <tbody>
                        <tr>
                            <td width="92" align="center" valign="middle" scope="col">
                            <strong>Username</strong>
                            <td width="224" scope="col"><?php echo $objResult10["Username"]; ?>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>Name</strong></td>
                            <td> <?php echo $objResult10["Name"]; ?></td>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>Gender</strong></td>
                            <td><?php echo $objResult10["Gender"]; ?></td>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>Telephone</strong></td>
                            <td><?php echo $objResult10["Telephone"]; ?></td>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>Email</strong></td>
                            <td><?php echo $objResult10["Email"]; ?></td>
                        </tr>
                       
                    </tbody>
                </table>
                    <h4>รายการ</h4>
<table align="center" width="811" height="80" border="1" id="table1">
  <tbody>
    <tr>
      <th width="100" scope="col">รหัสออเดอร์</th>
      <th width="146" scope="col">รูปภาพ</th>
      <th width="87" scope="col">หมวดหมู่</th>
      <th width="75" scope="col">ชื่อสิ่งของ</th>
      <th width="107" scope="col">สถานที่</th>
      <th width="100" scope="col">วันที่</th>
      <th width="87" scope="col">สถานะ</th>
     </tr>
<?php while($Result2 = mysqli_fetch_array($objQuery1)) {  ?>
    <tr>
      <td><?php echo($Result2['OrderID']);?></td>
      <td> <?php
          echo "<div id='img_div'>";
      echo "<img src='../images/".$Result2['image']." ' >";
      echo "</div>";
      ?>
     </td>
      <td><?php echo($Result2['CataName']);?></td>
      <td><?php echo($Result2['ObjectName']);?></td>
      <td><?php echo($Result2['LocationName']);?></td>
      <td><?php echo($Result2['Date']);?></td>
       <td><?php 
                if($Result2['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result2['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result2['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?>
       </td>
    </tr>
<?php 
    }
    ?>
    </tbody></table>
<a href="send_email.php?UserID=<?php echo($objResult0['UserID']); ?>&OrderID=<?php echo($OrderID); ?>">คลิ๊กเพื่อทำการส่งอีเมลล์ติดต่อไปยังเจ้าของประกาศ</a>
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