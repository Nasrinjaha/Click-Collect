<?php   include 'customerauth.php' ;
        include 'connection.php';
        $id =  $_SESSION['id'];
        // $sname = $_SESSION['name'];
        //$semail = $_SESSION['email'];
        $query = "select * from customers where c_id = $id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);      
        $pass = $row['pass'];
        //echo $pass;
?>
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
   

<?php include 'navbar.php' ?>
<div class="content-area">

    <div class="account-page">
        <div class="container">

          <div class="row">
            <div class="col-sm-3">
                 <?php include 'sidebar.php' ?>
            </div>
            <div class="col-sm-9">
                <h2>Reset Password</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <form method="post" class="cmxform" action="" id="signUpForm">
                            <div class="form-group row">
                                <label for="oldpass" class="col-sm-2 form-control-label">Old Pass</label>
                                <div class="col-sm-8">
                                    <input type="text" name="oldpass" class="form-control" id="oldpass" minlength="2" >
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="newpass" class="col-sm-2 form-control-label">New Pass</label>
                                <div class="col-sm-8">
                                    <input type="text" name="newpass" class="form-control" id="newpass" minlength="2" >
                                </div>
                            </div> 

                            <div class="form-group row">
                                <label for="confirmpass" class="col-sm-2 form-control-label">Confirm Pass</label>
                                <div class="col-sm-8">
                                    <input type="text" name="confirmpass" class="form-control" id="confirmpass" minlength="2" >
                                </div>
                            </div> 

                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <input type="submit" class="btn btn-yellow btn-lg" name = "submit" id="submitForm" value="Add" />
                                </div>
                            </div>
                            <?php
                                if(isset($_POST['submit'])){
                                    
                                    $Opass = $_POST['oldpass'];
                                    $pass1 =   $_POST['newpass'];
                                    $pass2 =   $_POST['confirmpass'];
                                                    //echo $Opass;
                                    if($Opass == $pass){
                                        if($pass1 == $pass2){
                                            $query1 = "update customers set pass = '$pass1' where c_id = $id";
                                                if(mysqli_query($con,$query1)){
                                                    echo '<span style= "color:green;">Successfully updated';
                                                }
                                                else{
                                                echo '<span style= "color:red;"> updated failed!!!';
                                                }
                                        }
                                        else{
                                        echo '<span style= "color:red;"> password doesnt match!!!';
                                        }
                                    }
                                    else{
                                        echo '<span style= "color:red;"> wrong old password!!!';
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