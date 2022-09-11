

<div class="header-navigation">
        <div class="wsmenucontainer clearfix">
          <div class="overlapblackbg"></div>
          <div class="wsmobileheader clearfix"> <a href="#" id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="smallogo"><img src="images/logo.png" alt=""></a></div>


          <div class="headerfull"> 
            <!--Main Menu HTML Code-->
            <div class="wsmain">
              <!-- <div class="smllogo"><a href="#"><img src="images/logo.jpg" alt=""></a></div> -->
              <nav class="wsmenu clearfix">
                <ul class="mobile-sub wsmenu-list">
                  <li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Department</span></a>
                    <div class="wsshoptabing wtsdepartmentmenu clearfix">
                      <div class="wsshopwp clearfix" style="height: 621px;">
                          <ul class="wstabitem clearfix">
                            <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-male"></i> Women's Clothing &amp; Accessories</a>
                              <div class="wstitemright clearfix wstitemrightactive" style="height: auto;">
                                <div class="wstmegamenucoll clearfix">
                                  <div class="wstheading">Women's Clothing</div>
                                  <ul class="wstliststy01">   
                                   <?php 
                                        include 'connection.php';
                                        $query = "select * from sub_category where cat_id = '3'";
                                        $table = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_array($table)){ 
                                        ?>
                                        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>

                                    <?php } ?>
                                  </ul>
                                  <div class="cl" style="height:8px;"></div>
                                  <div class="wstheading">Handbags &amp; Wallets</div>
                                  <ul class="wstliststy01">
                                  <?php 
                                        $query = "select * from sub_category where cat_id = '5'";
                                        $table = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_array($table)){ 
                                        ?>
                                        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>

                                  <?php } ?>
                                </ul>
                                <div class="cl" style="height:8px;"></div>
                                <div class="wstheading">Accessories</div>
                                <ul class="wstliststy01">
                                     <?php 
                                        $query = "select * from sub_category where cat_id = '7'";
                                        $table = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_array($table)){ 
                                        ?>
                                        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>

                                  <?php } ?>
                                </ul>
                            </div>
                            <div class="wstmegamenucolr clearfix">
                              <div class="wstbootslider clearfix">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item"> <a href="#"><img src="./Megamenu_files/woman-ad-img.jpg" alt=""></a>
                                      <div class="carousel-caption">
                                        <h3>First slide label</h3>
                                    </div>
                                </div>
                                <div class="item active"> <a href="#"><img src="./Megamenu_files/woman-ad-img02.jpg" alt=""></a>
                                  <div class="carousel-caption">
                                    <h3>Second slide label</h3>
                                </div>
                            </div>
                        </div>

                        <!-- Controls --> 
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
                    </div>
                </div>
            </div>
        </li>
        <li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-female"></i> Men's Clothing &amp; Accessories</a>
          <div class="wstitemright clearfix" style="height: auto;">
            <div class="wstmegamenucoll clearfix">
              <div class="wstheading">Men's Clothing</div>
              <ul class="wstliststy01">
               <?php
                //include 'inlude/navbar.php';
              
                $query = "select * from sub_category where cat_id = '2'";
                $table = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($table)){                   
               ?>
                <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>

                 <?php }  ?>
            </ul>
            <div class="cl" style="height:8px;"></div>
            <div class="wstheading">Shoes &amp; Wallets</div>
            <ul class="wstliststy01">
                
                 <?php 
                  $query = "select * from sub_category where cat_id = '6'";
                  $table = mysqli_query($con,$query);
                  while($row = mysqli_fetch_array($table)){ 
                  ?>
                   <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>

                 <?php } ?>
            </ul>
            <div class="cl" style="height:8px;"></div>
            <div class="wstheading">Accessories</div>
            <ul class="wstliststy01">
                 <?php 
                  $query = "select * from sub_category where cat_id = '6'";
                  $table = mysqli_query($con,$query);
                  while($row = mysqli_fetch_array($table)){ 
                  ?>
                   <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>

                 <?php } ?>
            </ul>
        </div>
        <div class="wstmegamenucolr clearfix"><a href="#"><img src="./Megamenu_files/man-ad-img.jpg" alt=""></a></div>
    </div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-cutlery"></i>Home &amp; Kitchen</a>
  <div class="wstitemright clearfix kitchenmenuimg" style="height: auto;">
    <ul class="wstliststy02">
      <li class="wstheading">Home Appliances</li>
      <?php 
                  $query = "select * from sub_category where cat_id = '8'";
                  $table = mysqli_query($con,$query);
                  while($row = mysqli_fetch_array($table)){ 
                  ?>
                   <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>

      <?php } ?>
  </ul>
  <ul class="wstliststy02">
      <li class="wstheading">Kitchen Appliances</li>
       <?php 
            $query = "select * from sub_category where cat_id = '9'";
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table)){ 
            ?>
            <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>
      <?php } ?>
  </ul>
</div>
</li>


<li><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="navtext"><span>Shop By</span> <span>Brand</span></a>
    <div class="wsshoptabing wtsbrandmenu clearfix">
      <div class="wsshoptabingwp clearfix">
        <ul class="wstabitem02 clearfix">
          <li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-apple brandcolor01" aria-hidden="true"></i>Apple</a>
            <div class="wsshoptab-active wstbrandbottom clearfix">
              <ul class="wstliststy02">
                <li class="wstheading">Apple Products </li>
                <?php 
                    $query = "select * from products where b_id = '1'";
                    $cnt = 0;
                    $table = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($table) and $cnt<=6){ 
                    ?>
                    <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>
                       
                <?php $cnt =$cnt+1;
                   $var = $row['p_id'];
                } ?>
            </ul>
        </div>
    </li>
    <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-windows brandcolor02" aria-hidden="true"></i> Nike</a>
        <div class="wstbrandbottom clearfix">
          <ul class="wstliststy02">
            <li class="wstheading">Nike Products </li>
            <?php 
                $query = "select * from products where b_id = '2' ";
                $cnt = 0;
                $table = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($table) and $cnt<=6){ 
            ?>
            <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>     
            <?php $cnt =$cnt+1;
                   $var = $row['p_id'];
            } ?>
        </ul>
    </div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-skype brandcolor03" aria-hidden="true"></i> Barbie</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Barbie Products </li>
        <?php 
            $query = "select * from products where b_id = '3' ";
            $cnt = 0;
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) and $cnt<=6){ 
            ?>
            <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>       
            <?php $cnt =$cnt+1;
                   $var = $row['p_id'];
             } ?>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-paypal brandcolor06" aria-hidden="true"></i>Arong</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Arong Products </li>
        <?php 
            $query = "select * from products where b_id = '6' ";
            $cnt = 0;
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) and $cnt<=6){ 
        ?>
        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>       
        <?php $cnt =$cnt+1;
            $var = $row['p_id'];
        } ?>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-quora brandcolor05" aria-hidden="true"></i>Yellow</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Yellow Products </li>
        <?php 
            $query = "select * from products where b_id = '7'  ";
            $cnt = 0;
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) and $cnt<=6){ 
        ?>
        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>       
        <?php $cnt =$cnt+1;
            $var = $row['p_id'];
        } ?>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-soundcloud brandcolor06"></i>Cats Eye</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Cats Eye Products </li>
        <?php 
            $query = "select * from products where b_id = '8' ";
            $cnt = 0;
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) and $cnt<=6){ 
        ?>
        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>       
        <?php $cnt =$cnt+1;
            $var = $row['p_id'];
        } ?>
    </ul>
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-houzz brandcolor07"></i>Plus Point</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Plus Point Products </li>
        <?php 
            $query = "select * from products where b_id = '9' ";
            $cnt = 0;
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) and $cnt<=6){ 
        ?>
        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>       
        <?php $cnt =$cnt+1;
            $var = $row['p_id'];
        } ?>
    </ul>
    
</div>
</li>
<li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-get-pocket brandcolor08"></i>Get Pocket</a>
    <div class="wstbrandbottom clearfix">
      <ul class="wstliststy02">
        <li class="wstheading">Get Pocket Products </li>
        <?php 
            $query = "select * from products where b_id = '5' ";
            $cnt = 0;
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) and $cnt<=6){ 
        ?>
        <li><a href="index.php?sub_id=<?php echo $row['sub_id']?>"><?php echo $row['name']; ?></a> </li>       
        <?php $cnt =$cnt+1;
            $var = $row['p_id'];
        } ?>
    </ul>
</div>
</li>
</ul>
</div>
</div>
</li>
<ul class="wsmenu-submenu">

      <li><a href="register.php"><i class="fa fa-black-tie"></i>Sign Up</a></li>
      <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
  </ul> 
