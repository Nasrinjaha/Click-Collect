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
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Access </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <style>
    .bg-secondary {
        background-color: #054b898a!important;
    }
    body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #a8addf33;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    }
    .update {
        padding-left:40%;
        
      }
</style>
    
</head>
<body>
   

<?php include 'navbar.php' ?>
    <div class="container mt-3">
        <div class="mt-5 card">
            <div class="card bg-light text-dark">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mt-5 mb-5">
                        <h2 class="text-center">Edit Account</h2>
                        <br>
                        <form method="post" class="cmxform" action="" id="signUpForm">

                            <div class="mb-3 mt-3">
                                <label for="name"> Name:</label>
                                    <input type="text" name="name" class="form-control" id="name"  name="name"  value = '<?php echo $name?>'  minlength="2" >
                            </div>
                    
                            <div class="mb-3 mt-3">
                                <label for="email">Email:</label>
                               
                                    <input type="email" name="email" class="form-control email" id="email" value=<?php echo $email ?> >
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="address">Address</label>
                               
                                    <input type="text" name="address" class="form-control" id="address" value = '<?php echo $address ?>'>
                                
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="Address">Gender :</label>
                                <input class="form-control" id="gender" name="gender" type="text" value = <?php echo $gender ?>  />
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" class="form-control" id="contact" value = <?php echo  $contact ?> >
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="dob" class="col-sm-2 form-control-label">BirthDate:</label>
                                    <input type="date" name="dob" class="form-control"  id="dob"  value = <?php echo $dob ?>  >
                                
                            </div>

                            <div class="mb-3 mt-3 text-center">
                                <input type="submit" class="btn btn-primary" id="submitForm" name = "submit" value="update" />
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
                </div>
            </div>
        </div> 

    </div>
<?php include 'footer.php' ?>
</body>
</html>