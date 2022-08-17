<?php 
    session_start();
    $_SESSION['isloggedin'] = 'no';
    $_SESSION['user'] = 'none';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
    <style>
        .fr{
            padding-left:30%;
        }
    </style>
    
</head>
<body>
<?php include 'navbar.php' ?>

<div class="content-area">

    <div class="login-page">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Sign In Your Account</h2>
                    <form method="post" class="cmxform" action="" id="loginForm">

                        <div class="form-group row">
                            <label for="username" class="col-sm-2 form-control-label">Username/Email:</label>
                            <div class="col-sm-8">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Write your email" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-2 form-control-label">Password:</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required />
                            </div>
                        </div>

                        <div class="form-group row col-sm-offset-2">

                            <input type="checkbox" id="remember" name="remember" />
                            <label for="remember" style="color:#093; font-weight: normal"><span style="opacity:.5"></span>Remember Me</label><br />
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <input type="submit" name = "login" class="btn btn-success btn-lg btn-block" id="submitForm" value="Sign In" />
                            </div>
                        </div>
                        <?php 
                            if(isset($_POST['login'])){
                                    $email=$_POST['username'];
                                    $pass = $_POST['password'];
                                    echo $email;
                                    echo '<br>';
                                    echo $pass;
                                    $query="SELECT * FROM admin WHERE email = '$email' AND pass='$pass'"; 
                                    $table=mysqli_query($con, $query);
                                    $row = mysqli_fetch_array($table);
                                    if($row){
                                        $_SESSION['isloggedin'] = 'yes';
                                        $_SESSION['user'] = 'admin'; 
                                        $_SESSION['id']=$row['a_id'];
                                        $_SESSION['name'] = $row['name'];
                                        $_SESSION['email'] = $row['email']; 
                                        $_SESSION['img'] = $row['img'];
                                        echo "<script>window.location.href='admin/account.php'</script>" ;
                                        //header('Location: admin/account.php');
                                    }
                                    else{
                                        $query = "select * FROM sellers WHERE email ='$email' AND  pass = '$pass' ";
                                        $table = mysqli_query($con,$query);
                                        $row = mysqli_fetch_array($table);
                                        if($row){
                                            $_SESSION['isloggedin'] = 'yes';
                                            $_SESSION['user'] = 'seller';
                                            $_SESSION['id']=$row['s_id'];
                                            $_SESSION['name'] = $row['name'];
                                            $_SESSION['email'] = $row['email']; 
                                            $_SESSION['img'] = $row['img'];
                                            echo "<script>window.location.href='seller/account.php'</script>" ;
                                            //header('Location: seller/account.php');
                                        }
                                        else{
                                            $query = "select * FROM customers WHERE email ='$email' AND  pass = '$pass' ";
                                            $table = mysqli_query($con,$query);
                                            $row = mysqli_fetch_array($table);
                                            
                                            if($row){
                                                $_SESSION['isloggedin'] = 'yes';
                                                $_SESSION['user'] = 'customer';
                                                $_SESSION['id']=$row['c_id']; 
                                                $_SESSION['name'] = $row['name'];
                                                $_SESSION['email'] = $row['email'];
                                                $_SESSION['img'] = $row['img'];
                                                echo "<script>window.location.href='customer/account.php'</script>" ;
                                               // header('Location: customer/account.php');
                                            }
                                            else{
                                                echo "<span style = 'color:red;'>Invalid mail or pass.Please try again";
                                            }                          
                                        }                    
                                    
                                }
                                    


                            }
                        ?>

                        <div class="forget">
                            <p class="pull-left">
                                <a href="registerseller.php">Create a new account as a seller</a>
                            </p>
                            <p class="pull-center fr">
                                <a href="register.php">Create a new account as a  customer </a>
                            </p>
                            <p class="pull-right">
                                <a href="forgot_password.html">Forgot Password</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>

                    </form>

                    


                </div>
            </div> <!--End Row-->

        </div>
    </div> <!--End Registration page div-->

</div> <!-- End content Area class -->


<?php include 'footer.php' ?>
</body>
</html>