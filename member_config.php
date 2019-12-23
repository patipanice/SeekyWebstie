<?php  
            $strSQL0 = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
            $objQuery0 = mysqli_query($objCon,$strSQL0);
            $objResult0 = mysqli_fetch_array($objQuery0);
            $Email0 = $objResult0["Email"]; //email ของ session ที่เชื่อมต่อเข้ามา
            $UserID0 = $_SESSION['UserID'];
            $strSQL1 = "SELECT orders.OrderID,object.image,catagory.CataName,object.ObjectName,location.LocationName,orders.Date,member.Username,orders.Status
                FROM catagory,location,member,object,orders WHERE orders.UserID = member.UserID  AND orders.LocationID = location.LocationID AND 
                orders.UserID = $_SESSION[UserID] AND  orders.ObjectID = object.ObjectID AND object.CataID = catagory.CataID";
            $objQuery1 = mysqli_query($objCon,$strSQL1); 
        ?>