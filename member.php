<?php  include 'session.php'; include 'session_check.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>จัดการผู้ใช้งาน</title>
    <?php include 'head_01.php'?>
    <style>
        #customers,
        strong {
            font-family: 'Mitr', sans-serif;
            border-collapse: collapse;
            width: 80%;
            color: black;
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

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #4CAF50;
            color: white;
        }
        .order{
            width: 150%;
            margin-left: -190px;
        }
        .img_div {
            padding: 5px;
            width: 80px;
        }
    </style>
</head>

<body id="top">
    <?php  include 'insert_image.php'; include 'header.php'; include 'member_config.php'?>
    <!-- s-content================================================== -->
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <div>
                    <!-- ข้อมูลผู้ใช้งาน -->
                    <h3 style="margin-top:-20px">ข้อมูลผู้ใช้งาน</h3>
                    <table id="customers" align="center">
                        <tr>
                            <td>ชื่อผู้ใช้งาน</td>
                            <td style="color:gray"><?php echo $objResult0["Username"]; ?></td>
                        </tr>
                        <tr>
                            <td>ชื่อจริง</td>
                            <td style="color:gray"><?php echo $objResult0["Name"]; ?></td>
                        </tr>
                        <tr>
                            <td>เบอร์โทรศัพท์</td>
                            <td style="color:gray"><?php echo $objResult0["Telephone"]; ?></td>
                        </tr>
                        <tr>
                            <td>อีเมลล์</td>
                            <td style="color:gray"><?php echo $objResult0["Email"]; ?></td>
                        </tr>
                        <tr>
                            <td>แก้ไขข้อมูล</td>
                            <td><a href="edit_profile.php"><strong style="color:darkgoldenrod">คลิ๊ก</strong></a></td>
                        </tr>
                    </table>
                </div>
                <div class="order">
                    <!-- รายการออเดอร์สิ่งของที่ผู้ใช้งานได้ทำการประกาศ -->
                    <br><br>
                    <h3 style="margin-top:-20px">รายการสิ่งของ</h3>
                    <table id="customers" align="center">
                        <tr>
                            <th>รหัส</th>
                            <th>รูปภาพ</th>
                            <th>หมวดหมู่</th>
                            <th>ชื่อสิ่งของ</th>
                            <th>สถานที่</th>
                            <th>วันที่</th>
                            <th>สถานะ</th>
                            <th>แก้ไข</th>
                            <th>พบ</th>
                        </tr>
                        <?php while ($Result2 = mysqli_fetch_array($objQuery1)) { ?>
                        <tr>
                            <td><?php echo ($Result2['OrderID']); ?></td>
                            <td>
                        <?php
                            echo "<div class='img_div'>";
                            echo "<img src='images/" . $Result2['image'] . " ' >";
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
                                $str3 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.UserName,orders.Status,orders.UserID,member.Email 
                                        FROM catagory,location,member,object,orders 
                                        WHERE orders.Status = 'ANNOUNCE' AND orders.ObjectID = object.ObjectID AND object.ObjectName LIKE '%$ObjectName%' AND orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND object.CataID = catagory.CataID AND orders.UserID = member.UserID";
                            }
                            if ($Result2['Status'] == "FOUNDED") {
                                echo ('เจอเจ้าของแล้ว');
                            }
                            if ($Result2['Status'] == "ANNOUNCE") {
                                echo ('ประกาศตามหา');
                                $str3 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.UserName,orders.Status,orders.UserID,member.Email 
                                        FROM catagory,location,member,object,orders
                                        WHERE orders.Status = 'FIND_OWNER' AND orders.ObjectID = object.ObjectID AND object.ObjectName LIKE '%$ObjectName%' AND orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND object.CataID = catagory.CataID AND orders.UserID = member.UserID";
                            }
                            $OrderID = $Result2['OrderID'];
                            $ObjectName1 = $Result2["ObjectName"];
                            $Date1 = $Result2["Date"];
                            ?>
                            </td>
                            <td><a href="edit_item.php?OrderID=<?php echo ($Result2['OrderID']); ?>" style="color:orange">คลิ๊ก</a></td>
                            <td><a href="sqlmember/change_order.php?OrderID=<?php echo ($Result2['OrderID']); ?>" style="color:orange">คลิ๊ก</a></td>
                            <?php  }   $objQuery3 = mysqli_query($objCon, $str3); ?>
                            </tr>
                    </table>
                </div>
                <div class="order">
                    <!-- รายการออเดอร์สิ่งของที่แมทกัน -->
                    <br><br>
                    <h3 style="margin-top:-20px">รายการสิ่งของที่คุณอาจกำลังตามหา</h3>
                    <table id="customers" align="center">
                        <tr>
                            <th>รหัส</th>
                            <th>รูปภาพ</th>
                            <th>หมวดหมู่</th>
                            <th>ชื่อสิ่งของ</th>
                            <th>สถานที่</th>
                            <th>วันที่</th>
                            <th>ผู้ลงประกาศ</th>
                            <th>สถานะ</th>
                            <th>เพิ่มเติม</th>
                        </tr>
                        <?php while ($Result3 = mysqli_fetch_array($objQuery3)) { ?>
                        <tr>
                            <td><?php echo ($Result3['OrderID']); ?></td>
                            <td>
                        <?php
                            echo "<div class='img_div'>";
                            echo "<img src='images/" . $Result3['image'] . " ' >";
                            echo "</div>";
                        ?>
                            </td>
                            <td><?php echo ($Result3['CataName']); ?></td>
                            <td><?php echo ($Result3['ObjectName']); ?></td>
                            <td><?php echo ($Result3['LocationName']); ?></td>
                            <td><?php echo ($Result3['Date']); ?></td>
                            <td><?php echo ($Result3['UserName']); ?></td>
                            <td>
                            <?php
                            $ObjectName = $Result3['ObjectName'];
                            if ($Result3['Status'] == "FIND_OWNER") {
                                echo ('ตามหาเจ้าของ');
                            }
                            if ($Result3['Status'] == "FOUNDED") {
                                echo ('เจอเจ้าของแล้ว');
                            }
                            if ($Result3['Status'] == "ANNOUNCE") {
                                echo ('ประกาศตามหา');
                            }
                            $OrderID = $Result3['OrderID'];
                            $ObjectName1 = $Result3["ObjectName"];
                            $Date1 = $Result3["Date"];
                            ?>
                            </td>
                            <td><a href="member_order.php?OrderID=<?php echo ($Result3['OrderID']);?> " style="color:orange">คลิ๊ก</a></td>
                            <?php } ?>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </section> <!-- s-content -->
    <?php include 'founding_insert.php'; ?>
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