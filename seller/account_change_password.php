<?php   include 'sellerauth.php' ;
        include 'connection.php';
        $id =  $_SESSION['id'];
        // $sname = $_SESSION['name'];
        //$semail = $_SESSION['email'];
        $query = "select * from sellers where s_id = $id";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result);      
        $pass = $row['pass'];
        //echo $pass;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up </title>
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
                        <h2 class="text-center">Reser Password</h2>
                        <br>
                        <form method="post" class="cmxform" action="" id="ReserPassword">
                            <div class="mb-3 mt-3">
                                <label for="oldpass">Old Pass</label>
                                    <input type="text" name="oldpass" class="form-control" id="oldpass" minlength="2" >
                            </div> 

                            <div class="mb-3 mt-3">
                                <label for="newpass">New Pass</label>
                                    <input type="text" name="newpass" class="form-control" id="newpass" minlength="2" >
                            </div> 

                            <div class="mb-3 mt-3">
                                <label for="confirmpass">Confirm Pass</label>
                                    <input type="text" name="confirmpass" class="form-control" id="confirmpass" minlength="2" >
                            </div> 

                            <div class="mb-3 mt-3 text-center">
                                    <input type="submit" class="btn btn-primary" name = "submit" id="submitForm" value="Reset" />
                            </div>
                            <?php
                                if(isset($_POST['submit'])){
                                    
                                    $Opass = $_POST['oldpass'];
                                    $pass1 =   $_POST['newpass'];
                                    $pass2 =   $_POST['confirmpass'];
                                                    //echo $Opass;
                                    if($Opass == $pass){
                                        if($pass1 == $pass2){
                                            $query1 = "update sellers set pass = '$pass1' where s_id = $id";
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
               </div>
          </div>
      </div>
  </div>
<?php include 'footer.php' ?>
</body>
</html>