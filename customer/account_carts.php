<?php include 'include/customerauth.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Access</title>
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



    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/logo.png" />
    
</head>
<body>
   
<?php include 'navbar.php'?>
<div class="content-area">

    <div class="account-page">
        <div class="container">

          <div class="row">
            <div class="col-sm-3">
                 <?php include 'sidebar.php' ?>
            </div>
            <div class="col-sm-9">
                <h2>Account Carts</h2>
                <div class="cart-page">
                    <form action="checkout.php" method="post">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="50%">Item</th>
                                    <th width="10%">Quantity</th>
                                    <th width="20%">Unit Price</th>
                                    <th width="20%">Total Price</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <img src="images/product-slide/product2.png" width="50" alt="" class="img img-thumbnail pull-left">
                                        <span class="pull-left cart-product-option">

                                            <strong>Digital Camera</strong><br />
                                            <form action="cart_remove.php" method="get" accept-charset="utf-8">
                                                <input type="hidden" name="product_id" value="1">
                                                <input type="submit" class="btn btn-red btn-sm" name="" value="Remove Item">
                                            </form>

                                        </span>
                                        <div class="clearfix"></div>
                                    </td>
                                    <td><input type="number" min="1" name="product_quantity_p1" value="2" class="form-control product_quantity_p1" /></td>
                                    <td>200$</td>
                                    <td><p class="total_ammount_p1">400$</p></td>
                                </tr>                
                                <tr>
                                    <td>
                                        <img src="images/product-slide/product1.png" width="50" alt="" class="img img-thumbnail pull-left">
                                        <span class="pull-left cart-product-option">

                                            <strong>Samsung Galaxy J7</strong><br />
                                            <form action="cart_remove.php" method="get" accept-charset="utf-8">
                                                <input type="hidden" name="product_id" value="1">
                                                <input type="submit" class="btn btn-red btn-sm" name="" value="Remove Item">
                                            </form>

                                        </span>
                                        <div class="clearfix"></div>
                                    </td>
                                    <td><input type="number" min="1" name="product_quantity_p2" value="4" class="form-control product_quantity_p2" /></td>
                                    <td>300$</td>
                                    <td><p class="total_ammount_p2">1200$</p></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td colspan="1"><strong>Total:</strong></td>
                                    <td></td>
                                    <td>
                                        <p><span class="total_product_sum">1600$</span></p>
                                    </td>
                                    <div class="clearfix"></div>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <input type="submit" class="btn btn-yellow btn-lg pull-right margin-bottom-20" name="" value="Continue to Checkout" />
                                        <a href="products.php" class="btn btn-success btn-lg pull-right margin-right-20">
                                            <i class="fa fa-plus"></i> Add More Products</a>

                                            <div class="clearfix"></div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </form>
                    </div> <!--End Cart page-->

                </div>
            </div> <!--End Row-->



        </div>
    </div> <!--End Account page div-->

</div> <!-- End content Area class -->


<?php include 'footer.php'?>
</body>
</html>