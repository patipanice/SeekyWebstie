<?php session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>จัดการสมาชิก</title>
    <?php include 'head_01.php'?>
    <style>
        #customers {
            font-family: ;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
    </style>
</head>

<body id="top">
    <?php
include "config.php";
//เช็คว่าผู้ใช้สมัครเข้ามาหรือยังถ้ายังจะไปหน้า สมัครสมาชิก
if ($_SESSION['UserID'] == "") {
    ?>
    <script type="text/javascript">
        if (confirm("กรุณาสมัครสมาชิกหรือเข้าสู่ระบบก่อนใช้งาน")) {
            window.location = "login.php";
        } else {
            window.location = "../index.php";
        }
    </script>
    <?php
}
$strSQL0 = "SELECT * FROM member WHERE UserID = '" . $_SESSION['UserID'] . "' ";
$objQuery0 = mysqli_query($objCon, $strSQL0);
$objResult0 = mysqli_fetch_array($objQuery0);
$Email0 = $objResult0["Email"]; //email ของ session ที่เชื่อมต่อเข้ามา
$UserID0 = $_SESSION['UserID'];
$strSQL1 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.Username,orders.Status
                FROM catagory,location,member,object,orders WHERE orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND
                orders.UserID = $_SESSION[UserID] AND  orders.ObjectID = object.ObjectID AND object.CataID = catagory.CataID";
$objQuery1 = mysqli_query($objCon, $strSQL1);
?>

    <!-- pageheader ================================================== -->
    <div>
        <?php include 'Head.php';?>
    </div>
    <!-- s-content ================================================== -->
    <section id="styles" class="s-styles">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h4>ระบบสมาชิก</h4>
                <table width="332" border="1" align="center" id="member_table">
                    <tbody>
                        <tr>
                            <td width="92" align="center" valign="middle" scope="col">
                                <strong>ชื่อผู้ใช้งาน</strong>
                            <td width="224" scope="col"><?php echo $objResult0["Username"]; ?>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>ชื่อ</strong></td>
                            <td> <?php echo $objResult0["Name"]; ?></td>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>เพศ</strong></td>
                            <td><?php echo $objResult0["Gender"]; ?></td>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>เบอร์โทรศัพท์</strong></td>
                            <td><?php echo $objResult0["Telephone"]; ?></td>
                        </tr>
                        <tr>
                            <td align="center" valign="middle"><strong>อีเมลล์</strong></td>
                            <td><?php echo $objResult0["Email"]; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <a href="edit_profile.php"><strong>แก้ไขข้อมูล</strong></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h4>รายการ</h4>
                <table align="center" width="811" height="80" border="1" id="table1">
                    <tr>
                        <th width="100" scope="col">รหัสออเดอร์</th>
                        <th width="146" scope="col">รูปภาพ</th>
                        <th width="87" scope="col">หมวดหมู่</th>
                        <th width="75" scope="col">ชื่อสิ่งของ</th>
                        <th width="107" scope="col">สถานที่</th>
                        <th width="100" scope="col">วันที่</th>
                        <th width="87" scope="col">สถานะ</th>
                        <th width="87" scope="col">แก้ไข</th>
                        <th width="87" scope="col">พบแล้ว</th>
                    </tr>
                    <?php while ($Result2 = mysqli_fetch_array($objQuery1)) {?>
                    <tr>
                        <td><?php echo ($Result2['OrderID']); ?></td>
                        <td> 
                    <?php
                        echo "<div id='img_div'>";
                        echo "<img src='../images/" . $Result2['image'] . " ' >";
                        echo "</div>";
                    ?>
                        </td>
                        <td><?php echo ($Result2['CataName']); ?></td>
                        <td><?php echo ($Result2['ObjectName']); ?></td>
                        <td><?php echo ($Result2['LocationName']); ?></td>
                        <td><?php echo ($Result2['Date']); ?></td>
                        <td>
                        <?php
                            $ObjectName = $Result2['ObjectName'];
                            if ($Result2['Status'] == "FIND_OWNER") {
                                echo ('ตามหาเจ้าของ');
                                $str3 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.UserName,orders.Status,orders.UserID,member.Email FROM catagory,location,member,object,orders WHERE orders.Status = 'ANNOUNCE' AND orders.ObjectID = object.ObjectID AND object.ObjectName LIKE '%$ObjectName%' AND orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND object.CataID = catagory.CataID AND orders.UserID = member.UserID";
    }
    if ($Result2['Status'] == "FOUNDED") {
        echo ('เจอเจ้าของแล้ว');
    }
    if ($Result2['Status'] == "ANNOUNCE") {
        echo ('ประกาศตามหา');
        $str3 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.UserName,orders.Status
                         ,orders.UserID,member.Email FROM catagory,location,member,object,orders
                         WHERE orders.Status = 'FIND_OWNER' AND orders.ObjectID = object.ObjectID AND object.ObjectName LIKE '%$ObjectName%' AND orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND object.CataID = catagory.CataID AND orders.UserID = member.UserID";
    }
    $OrderID = $Result2['OrderID'];
    $ObjectName1 = $Result2["ObjectName"];
    $Date1 = $Result2["Date"];
    ?>
                        </td>
                        <td><a href="edit_item.php?OrderID=<?php echo ($Result2['OrderID']); ?>">คลิ๊ก</a></td>
                        <td><a href="change_order.php?OrderID=<?php echo ($Result2['OrderID']); ?>">คลิ๊ก</a></td>
                        <?php }
$objQuery3 = mysqli_query($objCon, $str3);?>
                    </tr>
                </table>
                
                <hr>
                <h4>อาจเป็นของที่คุณตามหา</h4>
                <table align="center" width="811" height="80" border="1" id="table1">
                    <tr>
                        <th width="100" scope="col">รหัสออเดอร์</th>
                        <th width="146" scope="col">รูปภาพ</th>
                        <th width="87" scope="col">หมวดหมู่</th>
                        <th width="75" scope="col">ชื่อสิ่งของ</th>
                        <th width="107" scope="col">สถานที่</th>
                        <th width="100" scope="col">วันที่</th>
                        <th width="100" scope="col">ผู้ลงประกาศ</th>
                        <th width="87" scope="col">สถานะ</th>
                        <th width="87" scope="col">เพิ่มเติม</th>
                    </tr>
                    <?php while ($Result3 = mysqli_fetch_array($objQuery3)) {?>
                    <tr>
                        <td><?php echo ($Result3['OrderID']); ?></td>
                        <td> <?php
echo "<div id='img_div'>";
    echo "<img src='../images/" . $Result3['image'] . " ' >";
    echo "</div>";
    ?>
                        </td>
                        <td><?php echo ($Result3['CataName']); ?></td>
                        <td><?php echo ($Result3['ObjectName']); ?></td>
                        <td><?php echo ($Result3['LocationName']); ?></td>
                        <td><?php echo ($Result3['Date']); ?></td>
                        <td><?php echo ($Result3['UserName']); ?></td>
                        <td><?php
if ($Result3['Status'] == "FIND_OWNER") {
        echo ('ตามหาเจ้าของ');
    }
    if ($Result3['Status'] == "FOUNDED") {
        echo ('เจอเจ้าของแล้ว');
    }
    if ($Result3['Status'] == "ANNOUNCE") {
        echo ('ประกาศตามหา');
    }
    ?>
                        </td>
                        <td><a href="member_order.php?OrderID=<?php echo ($Result3['OrderID']); ?>">คลิ๊ก</a></td>
                    </tr>
                    <?php
// $UserID = $Result3['UserID'];
    $OrderID1 = $Result3['OrderID'];
    $Email1 = $Result3['Email'];
    $Date = $Result3['Date'];
} //ส่งเมลล์ไปเตือนว่ามีการแมทกันเกิดขึ้น
$strTo = "$Email1";
$strSubject = "WHERE IS IT GONE ?";
$strHeader = "From : WHERE IS IT GONE ?";
$strMessage = "รายการหมายเลข $OrderID1 | $ObjectName ที่คุณได้ลงไว้เมื่อวันที่ $Date ได้มีสมาชิกหมายเลขไอดี $UserID0 คาดว่ารายการหมายเลข $OrderID ของคุณ อาจจะเป็นของเขา
                    และต้องการที่จะติดต่อกับคุณ ";

$flgSend = @mail($strTo, $strSubject, $strMessage, $strHeader); // @ = No Show Error //

$strTo1 = "$Email0";
$strSubject1 = "WHERE IS IT GONE ?";
$strHeader1 = "From : WHERE IS IT GONE ?";
$strMessage1 = "รายการหมายเลข $OrderID | $ObjectName1 ที่คุณได้ประกาศตามหาไว้เมื่อวันที่ $Date1 ได้มีสมาชิกหมายเลขไอดี $UserID0 คาดว่ารายการหมายเลข $OrderID ของคุณ อาจจะเป็นของที่คุณตามหา
                    และต้องการที่จะติดต่อกับคุณ  ";
$flgSend1 = @mail($strTo1, $strSubject1, $strMessage1, $strHeader1); // @ = No Show Error //
if ($flgSend && $flgSend1) {
    echo ("ระบบได้ทำการส่งอิเมลล์ไปยังทั่งสองฝ่ายเพื่อให้เข้ามาเช็คที่ตัวระบบว่ามีการแมทของรายการของเกิดขึ้่น");
}
?>
                </table>
            </div>
        </div>
    </section>
    <!-- s-extr================================================== -->
    <section class="s-extra">



        <div class="row narrow section-intro add-bottom text-center">

            <div class="col-twelve tab-full">



                <h3>Innovation</h3>



                <p class="lead">ระบบพิเศษ : เมื่อของที่พบ และ ของที่หายนั้น มีความตรงกันระบบจะแจ้งเตือนไปที่ email
                    ของทั้ง 2 ฝ่าย ให้มาเช็คว่าของที่หาตรงกับของที่พบหรือไม่</p>



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

    <?php mysqli_close($objCon);?>



    <!-- Java Script

    ================================================== -->

    <script src="../js/jquery-3.2.1.min.js"></script>

    <script src="../js/plugins.js"></script>

    <script src="../js/main.js"></script>



</body>



</html>