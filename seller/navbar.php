   <div class="wrapper">
        <!-- Header part  -->
        <div class="header" id="top">
            <!-- Start Top Header -->
            <div class="top-header">
                <div class="top-header-left pull-left">
                    <a href="products.html">Upto 50% Discount today</a>
                </div>
                <div class="top-header-right pull-right">
                    <div class="container-fluid">
                        <ul>
                            <li class="top-header-list">
                                <div class="dropdown">
                                    <a href="account.html" class="link dropdown-toggle pointer" id="menu1" data-toggle="dropdown">
                                        <span class="icon"><i class="fa fa-user"></i></span>
                                        My Account
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="cart.php">My Orders</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="account.php">Wallets</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="../logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="top-header-list">
                                <a href="account.php">
                                    <span class="icon"><i class="fa fa-credit-card"></i></span>
                                    Credit Card
                                </a>
                            </li>
                            <li class="top-header-list"><a href="help.php">
                                <span class="icon"><i class="fa fa-question-circle"></i></span>
                                Helps
                            </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!-- End Top Header -->


            <!-- Start Header Main, logo, search bar,cart -->
            <div class="header-bottom">
                <div class="container">
                    <div class="header-logo pull-left">
                        <a href="index.php">
                            <img src="images/logo.png" alt="Your Shop Logo" class="img img-responsive">
                        </a>
                    </div>

                    <div class="header-search pull-left">
                        <form action="#" method="post">
                            <input type="search" name="Search" placeholder="Search for a Product..." required="">
                            <button type="submit" class="btn btn-default" aria-label="Left Align">
                                <i class="fa fa-search" aria-hidden="true"> </i>
                            </button>
                        </form>
                    </div>

                    <div class="header-cart">
                        <a href="cart.php" class="cart-link" data-toggle="modal" data-target="#cart-item"><i class="fa fa-cart-arrow-down"></i></a>
                        <span class="number-of-cart">20</span>
                    </div>

                    <!-- Cart Modal -->
                    <div id="cart-item" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                            <h6 class="modal-title">Cart Products</h6>
                        </div>
                        <div class="modal-body">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Name</th>
                                        <th>Item Image</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Digital Camera</td>
                                        <td><img src="images/product-slide/product2.png" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>3</td>
                                        <td>200$</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Samsung Galaxy 7</td>
                                        <td><img src="images/product-slide/product3.png" class="img img-responsive img-thumbnail" alt=""></td>
                                        <td>1</td>
                                        <td>500$</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="5">
                                            Total Price <span class="bold text-primary" style="margin-left: 73%">800$</span>
                                        </td>
                                    </tr>
                                    <div class="clearfix"></div>
                                </tbody>
                            </table>
                            <p class="text-right text-danger">There are <span style="font-weight: bold">2</span> more products in the cart. Click Checkout now to buy the items..</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel
                            </button>
                            <a href="cart.html" class="btn btn-yellow">Check Out</a>
                        </div>
                    </div>

                </div>
            </div> <!-- End Model -->

        </div>
    </div>
    <!-- End Header Main, logo, search bar,cart -->





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
                                        <li><a href="#"><?php echo $row['name']; ?></a> </li>

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
                                        <li><a href="#"><?php echo $row['name']; ?></a> </li>

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
                                        <li><a href="#"><?php echo $row['name']; ?></a> </li>

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
                <li><a href="#"><?php echo $row['name']; ?></a> </li>

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
                   <li><a href="#"><?php echo $row['name']; ?></a> </li>

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
                   <li><a href="#"><?php echo $row['name']; ?></a> </li>

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
                   <li><a href="#"><?php echo $row['name']; ?></a> </li>

      <?php } ?>
  </ul>
  <ul class="wstliststy02">
      <li class="wstheading">Kitchen Appliances</li>
       <?php 
            $query = "select * from sub_category where cat_id = '9'";
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table)){ 
            ?>
            <li><a href="#"><?php echo $row['name']; ?></a> </li>
      <?php } ?>
  </ul>
</div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-television"></i>Electronics Appliances</a>
  <div class="wstitemright clearfix" style="height: auto;">
    <ul class="wstliststy02">
      <li><img src="./Megamenu_files/ele-menu-img01.jpg" alt=" "></li>
      <li class="wstheading">TV &amp; Audio</li>
      <li><a href="#">6K Ultra HD TVs </a></li>
      <li><a href="#">Curved TVs </a></li>
      <li><a href="#">LED &amp; LCD TVs</a></li>
      <li><a href="#">OLED TVs</a> <span class="wstmenutag bluetag">Popular</span></li>
      <li><a href="#">Plasma TVs</a></li>
      <li><a href="#">Smart TVs</a></li>
      <li><a href="#">Home Theater</a></li>
      <li><a href="#">Wireless &amp; streaming</a></li>
      <li><a href="#">Stereo System</a></li>
  </ul>
  <ul class="wstliststy02">
      <li><img src="./Megamenu_files/ele-menu-img02.jpg" alt=" "></li>
      <li class="wstheading">Camera, Photo &amp; Video</li>
      <li><a href="#">Accessories <span class="wstcount">(1165)</span></a></li>
      <li><a href="#">Bags &amp; Cases <span class="wstcount">(665)</span></a></li>
      <li><a href="#">Binoculars &amp; Scopes <span class="wstcount">(65)</span></a></li>
      <li><a href="#">Digital Cameras <span class="wstcount">(865)</span></a> </li>
      <li><a href="#">Film Photography <span class="wstcount">(265)</span></a> <span class="wstmenutag bluetag">Popular</span></li>
      <li><a href="#">Flashes <span class="wstcount">(105)</span></a></li>
      <li><a href="#">Lenses <span class="wstcount">(665)</span></a></li>
      <li><a href="#">Lighting &amp; Studio <span class="wstcount">(225)</span></a></li>
      <li><a href="#">Video <span class="wstcount">(165)</span></a></li>
  </ul>
  <ul class="wstliststy02">
      <li><img src="./Megamenu_files/ele-menu-img03.jpg" alt=" "></li>
      <li class="wstheading">Cell Phones &amp; Accessories</li>
      <li><a href="#">Unlocked Cell Phones </a></li>
      <li><a href="#">Smartwatches </a></li>
      <li><a href="#">Carrier Phones</a></li>
      <li><a href="#">Cell Phone Cases</a> <span class="wstmenutag orangetag">Hot</span></li>
      <li><a href="#">Apple Cell Phones</a></li>
      <li><a href="#">Bluetooth Headsets</a></li>
      <li><a href="#">Cell Phone Accessories</a></li>
      <li><a href="#">Fashion Tech</a></li>
      <li><a href="#">Headphone</a></li>
  </ul>
  <ul class="wstliststy02">
      <li><img src="./Megamenu_files/ele-menu-img06.jpg" alt=" "></li>
      <li class="wstheading">Wearable Device</li>
      <li><a href="#">Activity Trackers </a></li>
      <li><a href="#">Sports &amp; GPS Watches</a></li>
      <li><a href="#">Smart Watches</a> <span class="wstmenutag greentag">New</span></li>
      <li><a href="#">Virtual Reality Headsets</a></li>
      <li><a href="#">Smart Tracking</a></li>
      <li><a href="#">Wearable Cameras</a></li>
      <li><a href="#">Smart Glasses</a></li>
      <li><a href="#">Kids &amp; Pets</a></li>
      <li><a href="#">Smart Sport Accessories</a></li>
  </ul>
</div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-laptop"></i>Computers &amp; Accessories</a>
  <div class="wstitemright clearfix computermenubg" style="height: auto;">
    <div class="wstmegamenucoll01 clearfix">
      <div class="wstheading">Monitors <a href="#" class="wstmorebtn">View All</a></div>
      <ul class="wstliststy03">
        <li><a href="#">50 Inches &amp; Above <span class="wstmenutag greentag">New</span></a></li>
        <li><a href="#">60 to 69.9 Inches </a></li>
        <li><a href="#">30 to 39.9 Inches</a></li>
        <li><a href="#">26 to 29.9 Inches</a></li>
        <li><a href="#">18 to 19.9 Inches</a></li>
        <li><a href="#">16 to 17.9 Inches</a></li>
    </ul>
    <div class="cl" style="height:8px;"></div>
    <div class="wstheading">Printers <a href="#" class="wstmorebtn">View All</a></div>
    <ul class="wstliststy03">
        <li><a href="#">All-In-One</a> </li>
        <li><a href="#">Copying </a> <span class="wstmenutag orangetag">Exclusive</span></li>
        <li><a href="#">Faxing </a> </li>
        <li><a href="#">Printing Photo Printing</a> </li>
        <li><a href="#">Printing Only</a> </li>
        <li><a href="#">Scanning </a> </li>
    </ul>
    <div class="cl" style="height:8px;"></div>
    <div class="wstheading">Software <a href="#" class="wstmorebtn">View All</a></div>
    <ul class="wstliststy03">
        <li><a href="#">Antivirus &amp; Security</a> </li>
        <li><a href="#">Business &amp; Office</a> <span class="wstmenutag orangetag">Exclusive</span></li>
        <li><a href="#">Web Design</a> </li>
        <li><a href="#">Digital Software</a> </li>
        <li><a href="#">Education &amp; Reference</a> </li>
        <li><a href="#">Lifestyle &amp; Hobbies</a> </li>
    </ul>
    <div class="cl" style="height:8px;"></div>
    <div class="wstheading">Accessories <a href="#" class="wstmorebtn">View All</a></div>
    <ul class="wstliststy03">
        <li><a href="#">Audio &amp; Video Accessories</a> </li>
        <li><a href="#">Cable Security Devices</a> </li>
        <li><a href="#">Input Devices </a> </li>
        <li><a href="#">Memory Cards</a> </li>
        <li><a href="#">Monitor Accessories</a> </li>
        <li><a href="#">USB Gadgets</a> </li>
    </ul>
</div>
</div>
</li>
<li class=""><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-car"></i>Auto accessories</a>
  <div class="wstitemright clearfix wstpngsml" style="height: auto;">
    <ul class="wstliststy06">
      <li><img src="images/product-slide/product1.png" alt=" "></li>
      <li class="wstheading"><a href="#">Interior</a></li>
  </ul>
  <ul class="wstliststy06">
      <li><img src="images/product-slide/product2.png" alt=" "></li>
      <li class="wstheading"><a href="#">Styling</a></li>
  </ul>
  <ul class="wstliststy06">
      <li><img src="images/product-slide/product3.png" alt=" "></li>
      <li class="wstheading"><a href="#">Utility</a></li>
  </ul>
  <ul class="wstliststy06">
      <li><img src="images/product-slide/product6.png" alt=" "></li>
      <li class="wstheading"><a href="#">Spare Parts</a></li>
  </ul>
  <ul class="wstliststy06">
      <li><img src="images/product-slide/product1.png" alt=" "></li>
      <li class="wstheading"><a href="#">Protection</a></li>
  </ul>
  <ul class="wstliststy06">
      <li><img src="images/product-slide/product3.png" alt=" "></li>
      <li class="wstheading"><a href="#">Cleaning</a></li>
  </ul>
  <ul class="wstliststy06">
      <li><img src="images/product-slide/product1.png" alt=" "></li>
      <li class="wstheading"><a href="#">Car Audio</a></li>
  </ul>
  <ul class="wstliststy06">
      <li><img src="images/product-slide/product2.png" alt=" "></li>
      <li class="wstheading"><a href="#">Gear &amp; Accessories</a></li>
  </ul>
</div>
</li>
<li class="wsshoplink-active"><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-heartbeat"></i>Health Care Products</a>
  <div class="wstitemright clearfix wstpngsml" style="height: auto;">
    <div class="wstmegamenucolr03 clearfix"> <img src="images/product-slide/product1.png" alt=""> </div>
    <div class="wstmegamenucoll06 clearfix">
      <ul class="wstliststy05 clearfix">
        <li><img src="images/product-slide/product2.png" alt=" "></li>
        <li class="wstheading">Health Care</li>
        <li><a href="#">Diabetes </a></li>
        <li><a href="#">Incontinence </a></li>
        <li><a href="#">Cough &amp; Cold</a></li>
        <li><a href="#">Baby &amp; Child Care</a> <span class="wstmenutag bluetag">Popular</span></li>
        <li><a href="#">Women's Health</a></li>
        <li><a href="#">First Aid</a></li>
        <li><a href="#">Smoking Cessation</a></li>
        <li><a href="#">Sleep &amp; Snoring</a></li>
    </ul>
    <ul class="wstliststy05 clearfix">
        <li><img src="images/product-slide/product3.png" alt=" "></li>
        <li class="wstheading">Personal Care</li>
        <li><a href="#">Shaving &amp; Hair Removal</a></li>
        <li><a href="#">Feminine Hygiene</a></li>
        <li><a href="#">Oral Care</a></li>
        <li><a href="#">Foot Care</a> <span class="wstmenutag bluetag">Popular</span></li>
        <li><a href="#">Hand Care</a></li>
        <li><a href="#">Personal Care Appliances</a></li>
        <li><a href="#">Shaving Foams &amp; Creams</a></li>
        <li><a href="#">Hair Removal Creams</a></li>
    </ul>
    <ul class="wstliststy05 clearfix">
        <li><img src="images/product-slide/product6.png" alt=" "></li>
        <li class="wstheading">Medical Equipment</li>
        <li><a href="#">Crepe Bandages, Tapes &amp; Supplies </a></li>
        <li><a href="#">Neck Supports</a></li>
        <li><a href="#">Arm Supports</a> <span class="wstmenutag bluetag">Popular</span></li>
        <li><a href="#">Elbow Braces</a></li>
        <li><a href="#">Knee &amp; Leg Braces</a></li>
        <li><a href="#">Ankle Braces</a></li>
        <li><a href="#">Foot Supports</a></li>
    </ul>
</div>
</div>
</li>
</ul>
</div>
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
                    $table = mysqli_query($con,$query);
                    while($row = mysqli_fetch_array($table) ){ 
                    ?>
                    <li><a href="#"><?php echo $row['name']; ?></a> </li>
                       
                <?php  } ?>
            </ul>
        </div>
    </li>
    <li><span class="wsmenu-click02"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#"><i class="fa fa-windows brandcolor02" aria-hidden="true"></i> Nike</a>
        <div class="wstbrandbottom clearfix">
          <ul class="wstliststy02">
            <li class="wstheading">Nike Products </li>
            <?php 
                $query = "select * from products where b_id = '2' ";
                $table = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($table) ){ 
            ?>
            <li><a href="#"><?php echo $row['name']; ?></a> </li>     
            <?php 
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
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) ){ 
            ?>
            <li><a href="#"><?php echo $row['name']; ?></a> </li>       
            <?php 
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
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) ){ 
        ?>
        <li><a href="#"><?php echo $row['name']; ?></a> </li>       
        <?php 
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
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) ){ 
        ?>
        <li><a href="#"><?php echo $row['name']; ?></a> </li>       
        <?php 
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
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) ){ 
        ?>
        <li><a href="#"><?php echo $row['name']; ?></a> </li>       
        <?php 
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
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) ){ 
        ?>
        <li><a href="#"><?php echo $row['name']; ?></a> </li>       
        <?php 
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
            $table = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($table) ){ 
        ?>
        <li><a href="#"><?php echo $row['name']; ?></a> </li>       
        <?php 
            $var = $row['p_id'];
        } ?>
    </ul>
</div>
</li>
</ul>
</div>
</div>
</li>

<li class="wssearchbar clearfix">
    <form class="topmenusearch">
      <input placeholder="Search Product By Name, Category...">
      <button class="btnstyle"><i class="searchicon fa fa-search" aria-hidden="true"></i></button>
  </form>
</li>

<!-- <li class="wscarticon clearfix"> <a href="#"><i class="fa fa-shopping-basket"></i> <em class="roundpoint">8</em><span class="mobiletext">Shopping Cart</span></a> </li> -->


<li class="wsshopmyaccount clearfix"><span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span><a href="#" class="wtxaccountlink"><i class="fa fa-align-justify"></i>My Account <i class="fa  fa-angle-down"></i></a>
    <ul class="wsmenu-submenu">

  <li><a href="account.php"><i class="fa fa-user"></i>View Profile</a></li>
  <li><a href="account.html#wishlist"><i class="fa fa-heart"></i>My Wishlist</a></li>
  <li><a href="../logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
  <li><a href="products.php"><i class="fa fa-sign-out"></i>customers view</a></li>
  </ul>
</li>
</ul>
</nav>
</div>
<!--Menu HTML Code--> 

</div>
</div>

</div>  <!-- End Navigation header -->

</div>
<!-- Header part  -->


<div class="content-area">

    <div class="login-page">
        
    </div> <!--End Registration page div-->

</div> <!-- End content Area class -->