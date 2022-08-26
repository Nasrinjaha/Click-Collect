<?php 
    include 'sellerauth.php' ;
    include 'connection.php';
    $id=$_SESSION['id'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $query= "select * from sellers where s_id=$id";
    $table = mysqli_query($con,$query);
    $row = mysqli_fetch_array($table);
    $mobile =$row["mobile"];
    $address = $row["address"];
    $gender=$row["gender"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Seller Access</title>
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


<?php 
   include 'navbar.php';
?>
<div class="content-area">

    <div class="account-page">
        <div class="container">

          <div class="row">
            <div class="col-sm-3">
               <?php include 'sidebar.php' ?>
            </div>
            <div class="col-sm-9">
                <h2>Account Control Panel</h2>
                <strong>Hello<?php echo "    ";
                            echo $name;?></strong><br />
                <p>From your account control panel, you can access all of your recent activites, orders, save products and you can edit your personal information and other details.</p>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                            <h3>Contact Information</h3>
                            <p>Name : <?php echo $name?></p>
                            <p>Email : <?php echo $email?></p>
                            <p><a href="account_change_email.php">Change Email</a> | <a href="account_change_password.php">Change Password</a></p>
                            <p class="pull-right"><a href="account_information.php"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                            <h3>News Letters</h3>
                            <p>Do you want to get the latest product news and promotion offers then make it on otherwise off it.</p>
                            <p class="pull-right"><a href="account_newsletter.php"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                            <h3>Default Billing Address</h3>
                            <address class="address">
                                <strong>Name:</strong>  <?php echo $name?> <br />
                                <strong>Email:</strong>  <?php echo $email?> <br />
                                <strong>Contact No:</strong>  <?php echo $mobile?><br />
                            </address>
                            <p class="pull-right"><a href="#"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="well">
                        <h3>Default Delivery Address Address</h3>
                            <address class="address">
                                <strong>Name:</strong>  <?php echo $name?> <br />
                                <strong>Email:</strong>  <?php echo $email?> <br />
                                <strong>Contact No:</strong>  <?php echo $mobile?><br />
                            </address>
                            <p class="pull-right"><a href="#"><i class="fa fa-edit"></i> Edit</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div> <!--End Row-->

    </div>
</div> <!--End Account page div-->
<?php 
   include 'footer.php';
?>
</body>
</html>