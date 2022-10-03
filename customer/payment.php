<?php   
        include 'include/customerauth.php' ;
        include 'include/connection.php';
        if(!isset($_SESSION['cart'])){
           header('Location: products.php'); 
        }
        $idcus = $_SESSION['id'];
        $date=date("Y-m-d");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up </title>
  <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="include/style.css" rel="stylesheet" />
  <style>
   .pad{
   padding-right :5%;
   } 
   .bot{
    padding-top:22%;
   }
   .up{
    padding-left:260px;
   }
</style>
    
</head>
<body>
<div class="b">
    <?php include 'include/navbar.php' ?>
</div>
<div class="account-page">   
 <div class="container-fluid">
    <div class="row">
  
        <div class="col-sm-3 mt-0 pad">
            <?php include 'include/sidebar.php' ?>
        </div>
    <div class="col-sm-9">
        <div class="mt-0 card">  
            <div class="card bg-light text-dark">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mt-5 mb-5">
                        <h2 class="text-center">Payment</h2>
                        <br>
                        <form method="post" class="cmxform" action="" id="ReserPassword">
                            <div class="mb-3">
                                <label for="address">Enter Your Address</label>
                                <textarea type="text"  name="address" class="form-control" id="password" required></textarea>
                            </div>
                            
                            <div class = "row">
                                <div class= "col-sm-6 up">
                                    <!-- <a href="payment.php" class="btn btn-success">Cash on delivery</a> -->
                                    <button class="btn btn-success" name="cash" value="cash">Cash on delivery</button>
                                </div>
                                <div class="col-sm-6">
                                    <!-- <a href="payment/index.php" class="btn btn-primary">Card Payment</a> -->
                                    <button class="btn btn-primary" name="card" value="card">Card Payment</button>
                                </div>
                            </div>
                        </form>
                        <?php 
                          if(isset($_POST['cash'])){

                            $address = $_POST['address'];
                            $_SESSION['cart']['address']=$address;
                            $sql = "insert into customer_order(c_id,Delivery_address,order_date) values($idcus,'$address','$date')";
									$result = mysqli_query($con,$sql);
									if($result){
										//echo "data succefully inserted into customer_order table";
									}
									else{
										echo "error".mysqli_error($con);
									}

									$last_o_id = mysqli_insert_id($con);
                                    if(isset($_SESSION['cart'])){
										foreach($_SESSION['cart'] as $key=>$value){ 
											$pid=$value['id']; 
											$quantity=$value['quantity']; 
											$sql1 = "insert into order_line(o_id,p_id,quantity) values($last_o_id,$pid,$quantity)";
											$result1 = mysqli_query($con,$sql1);
											if($result1){
												
											}
											else{
												//echo "error".mysqli_error($con);
											}            
										}
									} 

									$sql = "insert into invoice(o_id) values($last_o_id)";
									$result = mysqli_query($con, $sql);
									if(!$result){
                                        echo "error".mysqli_error($con);
									}
                                    else{
                                        if(isset($_SESSION['cart'])){
                                            unset($_SESSION['cart']);
                                        }
                                      
                                   }
                          }
                          else if(isset($_POST['card'])){

                            $address = $_POST['address'];
                            $_SESSION['cart']['address']=$address;
                            echo "<script>window.location.href='payment/index.php'</script>" ;
                          }
                        
                        ?>
                    </div>
                </div> 
            </div>
        </div> 

    </div>
</div>  

</div>

</div>
<div class="bot">
<?php include 'include/footer.php' ?>
</div>
</body>
</html>