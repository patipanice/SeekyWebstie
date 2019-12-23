<?php
//insert object to database
if ($txtObjectchk && $txtCatachk && $txtLocationchk && $Datechk) {
    $strSQL1 = "INSERT INTO object(ObjectName,CataID,image) VALUES('" . $_POST["txtObject"] . "','" . $_POST["txtCata"] . "','$image')";
    $objQuery1 = mysqli_query($objCon, $strSQL1);
    //select max of object
    $strSQL2 = "SELECT MAX(ObjectID) FROM object";
    $objQuery2 = mysqli_query($objCon, $strSQL2);
    $Result2 = mysqli_fetch_array($objQuery2);
    //insert max of objct id and all to dtabase
    $strSQL3 = "INSERT INTO orders(UserID,ObjectID,LocationID,Date,Status)
            VALUES ('" . $_SESSION['UserID'] . "','$Result2[0]','" . $_POST["txtLocation"] . "','" . $_POST["Date"] . "','FIND_OWNER')";
    $objQuery3 = mysqli_query($objCon, $strSQL3);
    $strSQL4 = "SELECT MAX(OrderID) FROM orders";
    $objQuery4 = mysqli_query($objCon, $strSQL4);
    $Result4 = mysqli_fetch_array($objQuery4);
    $strSQL5 = "SELECT orders.OrderID,member.Username,object.ObjectName,location.LocationName,orders.Date,orders.Status,object.image FROM member,object,orders,location WHERE orders.UserID = member.UserID and orders.ObjectID = object.ObjectID and orders.LocationID = location.LocationID and OrderID = $Result4[0]";
    $objQuery5 = mysqli_query($objCon, $strSQL5);
    ?>
                <script type="text/javascript">
                    if (confirm("ประกาศข้อมูลสำเร็จ")) {
                        window.location = "member.php";
                    } else {
                        window.location = "index.php";
                    }
                </script>
<?php } ?> 