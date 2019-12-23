<?php include 'session.php';?>
<?php
    $image = $_FILES['img'];
    
 	
    ini_set('max_execution_time', 300);
    $ch = curl_init();
    $url = "https://seeky-py.herokuapp.com/predict";
    $cfile = new CURLFile($image['tmp_name'], $image['type'], $image['name']);
    $data = array(
        'img' => $cfile
    );
	

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
    curl_close($ch);
    echo $res;
    
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>ทำนายข้อมูล</title>
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
<?php include 'session.php';include 'header.php';?>
<!-- s-content================================================== -->
            <section class="s-content">
                <div class="row narrow">
                    <div class="col-full s-content__header" data-aos="fade-up">
                        <h2 style="margin-top: -20px">สิ่งของที่คุณต้องการตามหาคือ</h2>
                        <?php echo '<p>'?>
                        <?php
                            switch ($res) {
                                case "hat":
                                       echo 'หมวก อยู่ในหมวดหมู่ เครื่องประดับ';
                                        $sqlSTR0 = "SELECT orders.OrderID,member.Username,object.image,object.ObjectName,location.LocationName,orders.Date,orders.Status
                                                    FROM member,orders,location,object
                                                    WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
                                                    object.CataID = '003'";
				
                                        break;
                                case "laptop":
                                        echo 'โน๊คบุ๊ค อยู่ในหมวดหมู่ อุปกรณ์อิเล็กทรอนิกส์';
                                        $sqlSTR0 = "SELECT orders.OrderID,member.Username,object.image,object.ObjectName,location.LocationName,orders.Date,orders.Status
                                                    FROM member,orders,location,object
                                                    WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
                                                    object.CataID = '001'";
					
                                        break;
                                case "handbag":
                                        echo 'กระเป๋าถือ อยู่ในหมวดหมู่ เครื่องประดับ';
                                        $sqlSTR0 = "SELECT orders.OrderID,member.Username,object.image,object.ObjectName,location.LocationName,orders.Date,orders.Status
                                                    FROM member,orders,location,object
                                                    WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
                                                    object.CataID = '003'";
					
                                        break;
                                case "bag":
                                        echo 'กระเป๋าสะพาย อยู่ในหมวดหมู่ เครื่องประดับ';
                                        $sqlSTR0 = "SELECT orders.OrderID,member.Username,object.image,object.ObjectName,location.LocationName,orders.Date,orders.Status
                                                    FROM member,orders,location,object
                                                    WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
                                                    object.CataID = '003'";
					
                                        break;
                                case "wallet":
                                    echo 'กระเป๋าตัง อยู่ในหมวดหมู่ ของใช้ทั่วไป';
                                    $sqlSTR0 = "SELECT orders.OrderID,member.Username,object.image,object.ObjectName,location.LocationName,orders.Date,orders.Status
                                                FROM member,orders,location,object
                                                WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
                                                object.CataID = '004'";
					
                                        break;
                                 case "watch":
                                     echo 'นาฬิกาข้อมือ อยู่ในหมวดหมู่ เครื่องประดับ';
                                        $sqlSTR0 = "SELECT orders.OrderID,member.Username,object.image,object.ObjectName,location.LocationName,orders.Date,orders.Status
                                                    FROM member,orders,location,object
                                                    WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
                                                    object.CataID = '003'";
					
                                        break;
                                case "headphone":
                                    echo 'หูฟัง อยู่ในหมวดหมู่ อุปกรณ์อิเล็กทรอนิกส์';
                                                $sqlSTR0 = "SELECT orders.OrderID,member.Username,object.image,object.ObjectName,location.LocationName,orders.Date,orders.Status
                                                    FROM member,orders,location,object
                                                    WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.LocationID = location.LocationID AND
                                                    object.CataID = '001'";
				
                                        break;
                                default:
                                echo "Can not find anything";
                            }
                            echo '</p>';
                            $objQuery3 = mysqli_query($objCon, $sqlSTR0);
 			
?>
                <div class="order">
                    <!-- รายการออเดอร์สิ่งของที่แมทกัน -->
                    <br><br>
                    <table id="customers" align="center">
                        <tr>
                            <th>ออเดอร์</th>
                            <th>ผู้ลงประกาศ</th>
                            <th>รูปภาพ </th>
                            <th>ชื่อสิ่งของ</th>
                            <th>สถานที่</th>
                            <th>วันที่ประกาศ</th>
                            <th>สถานะ</th>
                            <th>เพิ่มเติม</th>
                        </tr>
                        <?php while ($Result3 = mysqli_fetch_array($objQuery3)) { ?>
                        <tr>
                            <td><?php echo ($Result3['OrderID']); ?></td>
                            <td><?php echo ($Result3['Username']); ?></td>
                            <td>
                        <?php
                            echo "<div class='img_div'>";
                            echo "<img src='images/" . $Result3['image'] . " ' >";
                            echo "</div>";
                        ?>
                            </td>
                            <td><?php echo ($Result3['ObjectName']); ?></td>
                            <td><?php echo ($Result3['LocationName']); ?></td>
                            <td><?php echo ($Result3['Date']); ?></td>
                            <td>
                            <?php
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
                            <td><a href="member_order.php?OrderID=<?php echo ($Result3['OrderID']);?> " style="color:orange">คลิ๊ก</a></td>
                            <?php } ?>
                            </tr>
                    </table>

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
