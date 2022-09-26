<?php include 'include/adminauth.php';
      include 'include/connection.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Access</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <link href="include/style.css" rel="stylesheet" /> 
        <style>
            .pad{
                padding-right :5%;
            } 
            .bot{
                padding-top:8%;
            }
            .add{
                padding-left:2.5%;
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
<div class="col-sm-2 mt-0 pad">
    <?php include 'include/sidebar.php' ?>
</div>
    <div class="col-sm-10">
        <div class="mt-1 card">  
            <div class="card bg-light text-dark">
                <div class="row">
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-12 mt-0 mb-5 ml-1">
                        <h2 class="text-center">All  Products List</h2>
                        <br>
                        <div class="row">
                            <div class="col-sm-3 add">
                                <a class="btn btn-primary" href="add_products.php" >Add</a>
                            </div>
                            <br>
                            <br>
                        </div>
                        <table class="table table-striped" id = "allproducts">
                        <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Produscts Name</th>
                            <th>Brand</th>
                            <th>Sub_Category</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Qunatiy</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            //include 'inlude/navbar.php';
                            include 'include/connection.php';
                            $query = "select * from products where status='1'";
                            $table = mysqli_query($con,$query);
                            while($row = mysqli_fetch_array($table)){                   
                        ?>
                        <tr>
                        <td></td>
                                <td><?php echo $row['p_id'];?></td>
                                <td><?php echo $row['name']; ?></td>
                                <?php 
                                    $id =  $row['b_id'];
                                    $query1 = "select * from brand where b_id= $id";
                                    $table1 = mysqli_query($con,$query1);
                                    $row1 = mysqli_fetch_array($table1)
                                ?>
                                <td><?php echo $row1['name'];?></td>
                                <?php 
                                    $id =  $row['sub_id'];
                                    $query3 = "select * from sub_category where sub_id= $id";
                                    $table3 = mysqli_query($con,$query3);
                                    $row3 = mysqli_fetch_array($table3);
                                ?>
                                <td><?php echo $row3['name'];?></td>
                                <td><?php echo $row['size'];?></td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td>                                
                                    <a class = "btn btn-primary" href ="update_product.php?id=<?php  echo $row['p_id']?>">Edit</a>
                                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $row['p_id'];?>">Block</a>
                                <div class="modal" id="myModal<?php echo $row['p_id'];?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Block Confermation!</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                       Do you want to Block <b><?php echo $row['name'];?></b>?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a class = "btn btn-primary" href ="block_seller.php?id=<?php  echo $row['p_id']?>">yes</a>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                    </div>

                                    </div>
                                    </div>
                                    </div>
                                </td>
                                                       
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div> 
            </div>
        </div> 

    </div>
</div> 

</div>
</div>
<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
<script src = "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready(function(){
            $("#allproducts").DataTable({
                'columnDefs': [ {
                    'targets': [0,8], 
                    'orderable': false, 
                }]
            });
        })
</script>
<div class="bot">
   <?php include 'include/footer.php' ?>
</div>
</body>
</html>