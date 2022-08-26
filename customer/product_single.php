<?php 
   include 'customerauth.php';
   include 'connection.php';
   $id = $_REQUEST['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Access</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Language" content="en-US" />
    <meta name="description" content="Dynamic responsive Ecommerce free web template" />
    <meta name="keywords" content="Ecommerce template, Ecommerce free responsive template, free template" />
    <meta name="author" content="Maniruzzaman Akash">

    <!-- CSS links -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

    
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="css/animate.css" />

    <!-- Owl Carousel CSS-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- Single Page product show with zoom -->
    <link rel="stylesheet" type="text/css" href="css/flexslider.css">

    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/logo.png" />
    
</head>
<body>
          
<?php include 'navbar.php' ?>       

<div class="content-area prodcuts">

    <div class="container">
        <ol class="breadcrumb breadcrumb1">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li class="active">Digital Camera</li>
        </ol>

        <div class="single-product">
            <div class="row" id="">
                <div class="col-md-6 single-top-left">  
                    <div class="flexslider">
                        <ul class="slides">
                            <?php 
                                $query1 = "select * from products where p_id = $id ";
                                $table1=mysqli_query($con,$query1);
                                $row1 = mysqli_fetch_array($table1);
                                $query = "select * from images where p_id = $id ";
                                $table=mysqli_query($con,$query);
                                while($row = mysqli_fetch_array($table)){                   
                            ?>
                            <li data-thumb="../images/<?php echo $row['image'];  ?>">
                                <div class="thumb-image detail_images"> <img src="../images/<?php echo $row['image']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
                            </li>

                           <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 single-top-right">
                    <h3 class="item_name"><?php echo $row1['name'];?></h3>
                    <p>Processing Time: Item will be shipped out within 2-3 working days. </p>
                    <div class="single-rating">
                        <ul>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li class="rating">20 reviews</li>
                            <li><a href="#">Add your review</a></li>
                        </ul> 
                    </div>
                    <div class="single-price">
                        <ul>
                            <li class="product-price"><?php echo $row1['price'];?></li>  
                            <li><del>$600</del></li> 
                            <li><span class="off">10% OFF</span></li> 
                            <li>Ends on: June,5th</li>
                            <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
                        </ul>   
                    </div> 
                    <p class="single-price-text"><?php echo $row1['description'];?> </p>
                    <form action="#" method="post">
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" /> 
                        <input type="hidden" name="w3ls_item" value="Snow Blower" /> 
                        <input type="hidden" name="amount" value="540.00" /> 
                        <button type="submit" class="btn btn-red" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                        <button class="btn btn-primary"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>
                    </form>
                    
                </div>
                <div class="clearfix"> </div>  
            </div>
            <div class="single-page-icons social-icons"> 
                <ul>
                    <li><h4>Share on</h4></li>
                    <li><a href="#" class="fa fa-facebook-square icon facebook"> </a></li>
                    <li><a href="#" class="fa fa-twitter-square icon twitter"> </a></li>
                    <li><a href="#" class="fa fa-google-plus-square icon googleplus"> </a></li>
                    <li><a href="#" class="fa fa-rss-square icon rss"> </a></li> 
                </ul>
            </div>

            <div class="single-product-everything">

                <div class="single-extra-div">
                    <a data-toggle="collapse" class="pointer main" aria-expanded="true" data-target="#productDescriptionCollapse" aria-controls="#productDescriptionCollapse">
                        <span class="pull-left title-sidebar"><i class="fa fa-info-circle"></i> Product Description</span>

                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                        <span class="pull-right"><i class="fa fa-minus"></i></span>
                        <div class="clearfix"></div>
                    </a>
                    <div id="productDescriptionCollapse" class="collapse in collapseDiv">
                        <p><?php echo $row1['description'];?></p>
                    </div>
                </div> <!-- End single product extra div -->

                <div class="single-extra-div">
                    <a data-toggle="collapse" class="pointer main" aria-expanded="true" data-target="#productReviewCollapse" aria-controls="#productReviewCollapse">
                        <span class="pull-left title-sidebar"> <i class="fa fa-check-square-o"></i>
                            Product Reviews <span class="badge">2</span>
                        </span>

                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                        <span class="pull-right"><i class="fa fa-minus"></i></span>
                        <div class="clearfix"></div>
                    </a>
                    <div id="productReviewCollapse" class="collapse collapseDiv">
                        <div class="review">
                            <h4>Polash Rana :</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                        </div>
                        <div class="review">
                        <h4>Nur Ahmed :</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
                        </div>
                    </div>
                </div> <!-- End single product extra div -->

                <div class="single-extra-div">
                    <a data-toggle="collapse" class="pointer main" aria-expanded="true" data-target="#productHelpCollapse" aria-controls="#productHelpCollapse">
                        <span class="pull-left title-sidebar"> <i class="fa fa-question-circle"></i> Help </span>

                        <span class="pull-right"><i class="fa fa-plus"></i></span>
                        <span class="pull-right"><i class="fa fa-minus"></i></span>
                        <div class="clearfix"></div>
                    </a>
                    <div id="productHelpCollapse" class="collapse collapseDiv">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div> <!-- End single product extra div -->
                

            </div> <!--End Sidebar title div-->




        </div>  <!--End Single Product Div Everything-->


    </div>

    <div class="featured-products">
        <div class="container">
            <h2 class="title-div wow slideInLeft pull-left" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Top Recommended products</h2><div class="clearfix"></div>
            <div class="featured-navigation pull-right">
                <span class="">
                    <a class="owl-prev owl-navigaiton"><i class="fa fa-angle-double-right"></i></a>
                </span>
                <span class="stop">
                    <a class="owl-next owl-navigaiton">||</a>
                </span>
                <span class="">
                    <a class="owl-next owl-navigaiton"><i class="fa fa-angle-double-left"></i></a>
                </span>

            </div>
            <div class="clear"></div>
            <div class="featured-items">
                <!-- Set up your php -->
                <div class="owl-carousel">

                    <div class="item featured1">
                        <div class="item-full animated featured1-inner  width0">
                            <a href="products.php"><h4>Digital Camera</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            <h5>200$</h5>
                            <a href="products.php" class="btn btn-cart">
                                Add To Cart
                            </a>

                        </div>
                        <a href="products.php">
                            <img src="images/product-slide/product3.png" class="img img-responsive" alt="Product1">
                        </a>
                    </div> <!-- Single Featured Item -->            

                    <div class="item featured2">
                        <div class="item-full animated featured2-inner  width0">
                            <a href="products.php"><h4>Digital Camera</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            <h5>200$</h5>
                            <a href="products.php" class="btn btn-cart">
                                Add To Cart
                            </a>

                        </div>
                        <a href="products.php">
                            <img src="images/product-slide/product1.png" class="img img-responsive" alt="Product1">
                        </a>
                    </div> <!-- Single Featured Item -->                

                    <div class="item featured3">
                        <div class="item-full animated featured3-inner  width0">
                            <a href="products.php"><h4>Digital Camera</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            <h5>200$</h5>
                            <a href="products.php" class="btn btn-cart">
                                Add To Cart
                            </a>

                        </div>
                        <a href="products.php">
                            <img src="images/product-slide/product2.png" class="img img-responsive" alt="Product1">
                        </a>
                    </div> <!-- Single Featured Item -->                

                    <div class="item featured4">
                        <div class="item-full animated featured4-inner  width0">
                            <a href="products.php"><h4>Digital Camera</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            <h5>200$</h5>
                            <a href="products.php" class="btn btn-cart">
                                Add To Cart
                            </a>

                        </div>
                        <a href="products.php">
                            <img src="images/product-slide/product3.png" class="img img-responsive" alt="Product1">
                        </a>
                    </div> <!-- Single Featured Item -->                

                    <div class="item featured5">
                        <div class="item-full animated featured5-inner  width0">
                            <a href="products.php"><h4>Digital Camera</h4></a>
                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            <h5>200$</h5>
                            <a href="products.php" class="btn btn-cart">
                                Add To Cart
                            </a>

                        </div>
                        <a href="products.php">
                            <img src="images/product-slide/product4.png" class="img img-responsive" alt="Product1">
                        </a>
                    </div> <!-- Single Featured Item -->




                </div>
            </div>
        </div>
    </div>







</div> <!-- End content Area class -->


<?php include 'footer.php';?>

<!-- Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>

<script src="js/jquery.flexslider.js" type="text/javascript"></script>
<script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
  });
</script>
<!--flex slider-->
<script src="js/imagezoom.js" type="text/javascript"></script>

<script src="js/wow.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/webslidemenu.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>