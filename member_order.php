<?php include 'session.php'; ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>รายการ</title>
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
    <?php include 'insert_image.php'; include 'header.php'; include 'member_config.php'?>
    <?php 
            $OrderID = $_GET['OrderID'];
            $strSQL0 = "SELECT UserID FROM orders WHERE OrderID = $OrderID";
            $objQuery0 = mysqli_query($objCon,$strSQL0);
            $objResult0 = mysqli_fetch_array($objQuery0); //UserID
            $UserID1 = $objResult0[0]; //เก็บ UserID ที่ส่งมาจาก member หรือจากที่อื่น
            $strSQL2 = " SELECT * FROM member WHERE UserID = $UserID1";
            $objQuery10 = mysqli_query($objCon,$strSQL2);
            $objResult10 = mysqli_fetch_array($objQuery10); //ferch ค่าจากตาราง member มาั้งหมดเลย 

            $strSQL1 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.Username,orders.Status FROM catagory,location,member,object,orders WHERE orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND 
            orders.OrderID = $OrderID AND  orders.ObjectID = object.ObjectID AND object.CataID = catagory.CataID";
            $objQuery1 = mysqli_query($objCon,$strSQL1);
    ?>
    <!-- s-content================================================== -->
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <div>
                    <!-- ข้อมูลผู้ใช้งาน -->
                    <h3 style="margin-top:-20px">รายละเอียดผู้โพส</h3>
                    <table id="customers" align="center">
                        <tr>
                            <td>ชื่อผู้ใช้งาน</td>
                            <td style="color:gray"><?php echo $objResult10["Username"]; ?></td>
                        </tr>
                        <tr>
                            <td>ชื่อจริง</td>
                            <td style="color:gray"><?php echo $objResult10["Name"]; ?></td>
                        </tr>
                        <tr>
                            <td>เบอร์โทรศัพท์</td>
                            <td style="color:gray"><?php echo $objResult10["Telephone"]; ?></td>
                        </tr>
                        <tr>
                            <td>อีเมลล์</td>
                            <td style="color:gray"><?php echo $objResult10["Email"]; ?></td>
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
                            }
                            if ($Result2['Status'] == "FOUNDED") {
                                echo ('เจอเจ้าของแล้ว');
                            }
                            if ($Result2['Status'] == "ANNOUNCE") {
                                echo ('ประกาศตามหา');
                            }
                            ?>
                            </td>
                            <?php } ?>
                            </tr> 
                    </table>
                </div> 
                <a href="send_email1.php?Email=<?php echo($objResult10['Email']); ?>&OrderID=<?php echo($OrderID); ?>" style="color: orangered">คลิ๊กเพื่อทำการส่งอีเมลล์ติดต่อไปยังเจ้าของประกาศ</a>
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