<?php include 'adminauth.php' ?>
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



    <!-- Mega navigation bar -->
    <link rel="stylesheet" type="text/css" media="all" href="css/webslidemenu.css" />

    <!-- Main css link -->
    <link type="text/css" rel="stylesheet" href="css/main.css" />
    <link rel="icon" href="images/logo.png" />
    
</head>
<body>
   

<?php include 'navbar.php' ?>
<div class="content-area">

    <div class="account-page">
        <div class="container">

          <div class="row">
            <div class="col-sm-3">
                 <?php include 'sidebar.php' ?>
            </div>
            <div class="col-sm-9">
                <h2>Add Brand</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <form method="post" class="cmxform" action="" id="signUpForm">
                            

                            <div class="form-group row">
                                <label for="brand" class="col-sm-2 form-control-label">Add New Sub Brand</label>
                                <div class="col-sm-8">
                                    <input type="text" name="brand" class="form-control" id="brand"  required>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <input type="submit" class="btn btn-yellow btn-lg" name = "submit" id="submitForm" value="Add" />
                                </div>
                            </div>
                            <?php
                                if(isset($_POST['submit'])){
                                    
                                    $brand = $_POST['brand'];
                                    $query2 = "INSERT INTO `brand` (`name`) 
                                    VALUES('$brand')";
                                    if(mysqli_query($con,$query2)){
                                            echo '<span style= "color:green;">Successfully inserted';
                                    }
                                    else{
                                        echo '<span style= "color:red;">insertion failed';
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div> <!--End Row-->
            </div>
        </div> <!--End Row-->

    </div>
</div> <!--End Account page div-->

</div> <!-- End content Area class -->
<?php include 'footer.php' ?>
</body>
</html>