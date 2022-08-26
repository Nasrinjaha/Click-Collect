<?php include 'adminauth.php';
    include 'connection.php';
    $id =  $_SESSION['id'];
    $query = "select * from admin where a_id = $id";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $contact = $row['mobile'];
    $email = $row['email'];
    $address = $row['address'];
    $dob = $row['dob'];
    $gender = $row['gender'];      
    $pass = $row['pass']; 
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
                                <label for="name" class="col-sm-2 form-control-label"> Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" id="name"  name="name"  value = '<?php echo $name?>'  minlength="2" >
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 form-control-label">Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control email" id="email" value=<?php echo $email ?> >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-sm-2 form-control-label">Address</label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" class="form-control" id="address" value = '<?php echo $address ?>'>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Address" class="col-sm-2 form-control-label">Gender :</label>
                                <div class="col-sm-8">
                                <input class="form-control" id="gender" name="gender" type="text" value = <?php echo $gender ?>  />
                            </div>
                            </div>
                            <div class="form-group row">
                                <label for="contact" class="col-sm-2 form-control-label">Contact</label>
                                <div class="col-sm-8">
                                    <input type="text" name="contact" class="form-control" id="contact" value = <?php echo  $contact ?> >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dob" class="col-sm-2 form-control-label">BirthDate:</label>
                                <div class="col-sm-8">
                                    <input type="date" name="dob" class="form-control"  id="dob"  value = <?php echo $dob ?>  >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <input type="submit" class="btn btn-yellow btn-lg text-center" id="submitForm" name = "submit" value="update" />
                                </div>
                            </div>

                            <?php                
                                if(isset($_POST['submit'])){
                                $name =   $_POST['name'];
                                $mail = $_POST['email'];
                                $dob = $_POST['dob'];
                                $address = $_POST['address'];
                                $contact = $_POST['contact']; 
                                $gender = $_POST['gender'];
                                $query1 = "update admin set name = '$name',  email='$mail' ,address= '$address',dob= '$dob', gender='$gender',mobile='$contact' where a_id = $id";
                                        if(mysqli_query($con,$query1)){
                                            $var = 'account_information.php';
                                            echo "<script>window.location.href='".$var."'</script>"; 
                                            echo '<span style= "color:green;">Successfully updated';
                                        }
                                        else{
                                            echo '<span style= "color:red;"> updated failed!!!';
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