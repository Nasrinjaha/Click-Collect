<?php include 'customerauth.php' ?>
<!DOCTYPE php>
<php>
<head>
    <title>Account Page | Ecommerce Dynamic Web Template</title>
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
                <h2>Edit Account</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <form method="post" class="cmxform" action="" id="signUpForm">

                            <div class="form-group row">
                                <label for="firstname" class="col-sm-2 form-control-label">First Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="firstname" class="form-control" id="firstname" value="Maniruzzaman" name="name" minlength="2" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-2 form-control-label">Last Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="lastname" class="form-control" id="lastname" value="Akash">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 form-control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control email" id="email" value="manirujjamanakash@gmail.com">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-sm-2 form-control-label">Username:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="username" class="form-control" id="username" value="ManiruzzamanAkash">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 form-control-label">Current Email:</label>
                                <div class="col-sm-8">
                                    <p class="form-control-static">manirujjamanakash@gmail.com</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 form-control-label">New Email:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="email" class="form-control" id="email" value="ManiruzzamanAkash">
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="birthdate" class="col-sm-2 form-control-label">BirthDate:</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" name="birthdate" id="birthdate"value="1995-12-30" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <input type="submit" class="btn btn-yellow btn-lg" id="submitForm" value="Save" />
                                </div>
                            </div>
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
</php>