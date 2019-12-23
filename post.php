<html>
    <body>
    <?php
        include("config.php");
        $strSQL = "SELECT orders.OrderID FROM orders ORDER BY 'OrderID' DESC, 'UserID' DESC, 'ObjectID' DESC, 'LocationID' DESC";
        $objQuery = mysqli_query($objCon,$strSQL) ;
        for ($x = 0; $x <= 8; $x++) {
            $OK_NAKA[$x]= "";
        }
          $Zero = 0 ; 
          while($Result0 = mysqli_fetch_array($objQuery)) {    
            $OK_NAKA[$Zero] = $Result0[0]; 
            $Zero++;         
          }
        //$objQuery = mysqli_query($objCon,$strSQL) 
    ?>
    <div class="row top">
        <div class="col-twelve md-four tab-full popular">
            <h3>ประกาศล่าสุด</h3>
            <div class="block-1-3 block-m-full popular__posts">
            <!--  1  -->
            <?php 
                $strSQL0 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[0]"; 
                $objQuery0 = mysqli_query($objCon,$strSQL0) ;
                $Result0 = mysqli_fetch_array($objQuery0); 

                $strSQL1 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[1]"; 
                $objQuery1 = mysqli_query($objCon,$strSQL1) ;
                $Result1 = mysqli_fetch_array($objQuery1);

                $strSQL2 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[2]"; 
                $objQuery2 = mysqli_query($objCon,$strSQL2) ;
                $Result2 = mysqli_fetch_array($objQuery2); 

                $strSQL3 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[3]"; 
                $objQuery3 = mysqli_query($objCon,$strSQL3)  ;
                $Result3 = mysqli_fetch_array($objQuery3); 

                $strSQL4 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[4]"; 
                $objQuery4 = mysqli_query($objCon,$strSQL4)  ;
                $Result4 = mysqli_fetch_array($objQuery4); 

                $strSQL5 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[5]"; 
                $objQuery5 = mysqli_query($objCon,$strSQL5) ;
                $Result5 = mysqli_fetch_array($objQuery5);

                $strSQL6 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[6]"; 
                $objQuery6 = mysqli_query($objCon,$strSQL6)  ;
                $Result6 = mysqli_fetch_array($objQuery6); 

                $strSQL7 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[7]"; 
                $objQuery7 = mysqli_query($objCon,$strSQL7)  ;
                $Result7 = mysqli_fetch_array($objQuery7); 

                $strSQL8 = "SELECT orders.OrderID,member.Username,object.ObjectName,object.image,orders.Date,orders.Status FROM orders,member,object WHERE orders.UserID = member.UserID AND orders.ObjectID = object.ObjectID AND orders.Status IN('ANNOUNCE','FIND_OWNER') AND orders.OrderID = $OK_NAKA[8]"; 
                $objQuery8 = mysqli_query($objCon,$strSQL8);
                $Result8 = mysqli_fetch_array($objQuery8); 
            ?>
                <article class="col-block popular__post">
                    <a href="member_order.php?OrderID=<?php echo($OK_NAKA[0]);?>"class="popular__thumb">
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result0['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[0]);?>" ><?php echo($Result0['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[0]);?>">
                                    <?php echo($Result0['Username']); 
                                       ?> </a></span>
                                       <?php 
                if($Result0['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result0['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result0['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>         
                            <span class="popular__date"><span>on</span> <time><?php echo($Result0['Date']); ?></time></span>
                        </section>
                    </article>
                    <!--2-->
                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[1]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result1['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[1]);?>" ><?php echo($Result1['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[1]);?>">
                                    <?php echo($Result1['Username']); ?></a></span> 
                                                           <?php 
                if($Result1['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result1['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result1['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result1['Date']); ?></time></span>
                        </section>
                    </article>

                    <!--3-->

                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[2]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result2['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[2]);?>" ><?php echo($Result2['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[1]);?>">
                                    <?php echo($Result2['Username']); ?></a></span> 
                                                           <?php 
                if($Result2['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result2['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result2['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result2['Date']); ?></time></span>
                        </section>
                    </article>

                    <!--4-->

                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[3]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result3['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[3]);?>" ><?php echo($Result3['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[3]);?>">
                                    <?php echo($Result3['Username']); ?></a></span> 
                                                           <?php 
                if($Result3['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result3['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result3['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result3['Date']); ?></time></span>
                        </section>
                    </article>
                   
                    <!--5-->

                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[4]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result4['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[4]);?>" ><?php echo($Result4['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[4]);?>">
                                    <?php echo($Result4['Username']); ?></a></span> 
                                                           <?php 
                if($Result4['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result4['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result4['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result4['Date']); ?></time></span>
                        </section>
                    </article>

                    <!--6-->

                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[5]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result5['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[5]);?>" ><?php echo($Result5['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[5]);?>">
                                    <?php echo($Result5['Username']);  ?></a></span> 
                                                           <?php 
                if($Result5['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result5['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result5['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result5['Date']); ?></time></span>
                        </section>
                    </article>

                       <!--7-->

                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[6]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result6['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[6]);?>" ><?php echo($Result6['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[6]);?>">
                                    <?php echo($Result6['Username']); ?></a></span> 
                                                           <?php 
                if($Result6['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result6['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result6['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result6['Date']); ?></time></span>
                        </section>
                    </article>

                    
                       <!--8-->

                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[7]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result7['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[7]);?>" ><?php echo($Result7['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[7]);?>">
                                    <?php echo($Result7['Username']); ?></a></span> 
                                                           <?php 
                if($Result7['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result7['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result7['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result7['Date']); ?></time></span>
                        </section>
                    </article>

                     
                       <!--9-->

                    <article class="col-block popular__post">
                        <a href="member_order.php?OrderID=<?php echo($OK_NAKA[8]);?>"class="popular__thumb">
                          <!--  <img src="images/thumbs/small/wheel-150.jpg" alt=""> -->
                            <?php
                            echo "<div id='img_div'>";
                            echo "<img src='images/".$Result8['image']." ' >";
                            echo "</div>";
                            ?>
                        </a>
                        <h5><a href="member_order.php?OrderID=<?php echo($OK_NAKA[8]);?>" ><?php echo($Result8['ObjectName']); ?></a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span><a href="member_order.php?OrderID=<?php echo($OK_NAKA[8]);?>">
                                    <?php echo($Result8['Username']); ?></a></span> 
                                                           <?php 
                if($Result8['Status']=="FIND_OWNER") { 
                    echo('ตามหาเจ้าของ');   
                }
                if($Result8['Status']=="FOUNDED") {
                    echo('เจอเจ้าของแล้ว');
                }
                if($Result8['Status']=="ANNOUNCE") { 
                    echo('ประกาศตามหา');
                }
            ?><br>
                            <span class="popular__date"><span>on</span> <time><?php echo($Result8['Date']); ?></time></span>
                        </section>
                    </article>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
        </div> 
 

    </body>
</html>    