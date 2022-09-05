<?php include 'include/customerauth.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Access</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
  <link href="include/style.css" rel="stylesheet" />
  <style>
  </style>
    
</head>
<body>
<?php include 'include/navbar.php' ?>
        <div class="container">
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="all-products">
                    <div class="">
                        <h2 class="title-div wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Latest Products available</h2>
                        <div class="products">
                            <div class="row">
                                 <?php 
                                 include 'include/connection.php';
                                 if(isset($_REQUEST['sub_id'])){
                                    $sid = $_REQUEST['sub_id'];
                                 echo $sid;
                                $query = "select * FROM products where sub_id = $sid ";
                                }
                                else if(isset($_REQUEST['b_id'])){
                                    $bid = $_REQUEST['b_id'];
                                 echo $bid;
                                $query = "select * FROM products where sub_id = $bid ";
                                }
                                else{
                                    $query = "select * FROM products";
                                }
                                 $result = mysqli_query($con,$query);
                                 $i= 1;
                                 while($row = mysqli_fetch_array($result)){
                                    $id = $row['p_id'];
                                 ?>
                                      <div class="col-md-3">
                                        <div class="product-item">
                                            <div class="product-borde-inner">
                                                <a href="product_single.php?id=<?php echo $id;?>">
                                                <?php $query1 = "SELECT * FROM images where p_id = $id";
                                                 $result1 = mysqli_query($con,$query1); 
                                                 $row1 = mysqli_fetch_array($result1)  ?>
                                                    <img src="../images/<?php echo $row1['image']; ?>" width="150" height="150" class="img img-responsive"/>
                                                </a> 
                                                <div class="product-price">
                                                    <a href="product_single.php?id=<?php echo $id;?>"><?php echo $row['name'];?></a><br />
                                                    <span class="prev-price">
                                                        <del>200$</del>
                                                    </span>
                                                    <span class="current-price">
                                                          <?php echo $row['price'];?>
                                                    </span>
                                                </div>

                                                <a href="cart.php"  class="btn btn-cart text-center add-to-cart pull-right">
                                                    <i class="fa fa-cart-plus"></i>
                                                    Add to cart
                                                </a>
                                                <div class="clear"></div>
                                            </div>
                                        </div> 
                                    </div>
                                    <!-- <option value="<?php echo $row['b_id'];?>"><?php echo $row['name'];?></option> -->
                                 
                                 <?php $i++; } ?>
                               <!-- End Latest products[single] -->  
                            </div> <!-- End Latest products row-->
                            <a class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
                                <span>See More products.. </span>
                            </a>
                            <div class="clear"></div>
                        </div> <!-- End products div-->
                    </div> <!-- End container latest products-->
                </div>  <!-- End Latest products -->
            </div>
        </div>

    </div>

</div> <!-- End content Area class -->

<?php include 'include/footer.php' ?>

</body>
</html>