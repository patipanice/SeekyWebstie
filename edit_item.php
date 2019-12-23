<?php include 'session.php'; include 'session_check.php';?>
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
            margin-left: -80px;
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
        .img_div {
            padding: 5px;
            width: 80px;
        }
    </style>
</head>
<?php 
$OrderID = $_GET['OrderID'];
$strSQL1 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,orders.Status
FROM orders,location,object,catagory
WHERE orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
orders.OrderID = '$OrderID' AND object.CataID = catagory.CataID";
$objQuery1 = mysqli_query($objCon,$strSQL1);
$Result = mysqli_fetch_array($objQuery1);
?>
<body id="top">
    <?php include 'insert_image.php';include 'header.php';include 'member_config.php'; ?>
    <!-- s-content================================================== -->
    <section class="s-content">
        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <div class="order">
                    <br><br>
                    <form name="form1" method="post"  action="sqlmember/save_item.php?OrderID=<?php echo ($Result['OrderID']); ?>">
                        <h3 style="margin-top:-20px">รายการสิ่งของ</h3>
                        <table id="customers">
                            <tr>
                                <th>รหัส</th>
                                <th>รูปภาพ</th>
                                <th>หมวดหมู่</th>
                                <th>ชื่อสิ่งของ</th>
                                <th>สถานที่</th>
                                <th>วันที่</th>
                                <th>สถานะ</th>
                            </tr>
                            <tr>
                                <td><?php echo ($Result['OrderID']); ?></td>
                                <td>
                                    <?php
                                        echo "<div class='img_div'>";
                                        echo "<img src='images/" . $Result['image'] . " ' >";
                                        echo "</div>";
                                    ?>
                                </td>
                                <td>
                                    <select name="txtCata" autofocus="autofocus" id="txtCata"
                                        value="<?php echo ($Result['CataName']); ?>">
                                        <option value="000">เลือกประเภท</option>
                                        <option value="001">อุปกรณ์อิเล็กทรอนิกส์</option>
                                        <option value="002">เครื่องดนตรี</option>
                                        <option value="003">เครื่องประดับ</option>
                                        <option value="004">ของใช้ทั่วไป</option>
                                        <option value="005">อื่นๆ</option>
                                    </select>
                                </td>
                                <td><input name="txtObject" type="text" id="txtObject"
                                        value="<?php echo ($Result['ObjectName']); ?>"></td>
                                <td>
                                    <select name="txtLocation" id="txtLocation" value="<?php echo ($Result['LocationName']); ?>" style="margin-top: 22px">
                                        <option value="000" selected="selected">เลือกสถานที่</option>
                                        <option value="001">ตึก A</option>
                                        <option value="002">หอประชุมวิศวะ</option>
                                        <option value="003">ตึกภาคโทรคมนาคม</option>
                                        <option value="004">ตึกภาคอิเล็คทรอนิกส์</option>
                                        <option value="005">ตึกกิจการนักศึกษา</option>
                                        <option value="006">สนามโภไคยอุดม</option>
                                        <option value="007">ตึกภาควัดคุม</option>
                                        <option value="008">ตึกภาคเครื่องกล</option>
                                        <option value="009">สนาม CCA</option>
                                        <option value="010">ตึกโหล</option>a
                                        <option value="011">โรงอาหาร C</option>
                                        <option value="012">ลานพระพุทธ</option>
                                    </select> <br>
                                </td>
                                <td><input name="Date" type="date" id="newdate"
                                        value="<?php echo ($Result['Date']); ?>"></td>
                                <td><a href="sqlmember/delete_item.php?OrderID=<?php echo ($Result['OrderID']); ?>" style="color:orange">ลบรายการ</a>
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="Summit" value="บันทึกข้อมูล" style="font-size: 15px">
                    </form>
                </div>
            </div>
        </div>
    </section> <!-- s-content -->
    <!-- s-footer ================================================== -->
    <div class="footer">
        <?php include 'footer.php';include 'close_config.php';?>
    </div>
    <!-- Java Script ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>