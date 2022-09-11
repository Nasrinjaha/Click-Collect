<?php include 'include/adminauth.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Access </title>
  <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<div class="container mt-3">
<div class="row">
<div class="col-sm-3 mt-0 pad">
    <?php include 'include/sidebar.php' ?>
</div>
    <div class="col-sm-9">
        <div class="mt-0 card">  
            <div class="card bg-light text-dark">
                <div class="row">
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-12 mt-0 mb-5">
                    <h2 class="text-center">Sellers Request</h2>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Licence</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                            <tbody>
                            <?php
                            include 'include/connection.php';
                            $query = "select * from sellers where status='0'";
                            $table = mysqli_query($con,$query);
                            while($row = mysqli_fetch_array($table)){                   
                        ?>
                        <tr>
                        <td></td>
                                <td><?php echo $row['s_id'];?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['dob'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['trade_licence'];?></td>
                                    <td>
                                        <!-- Trigger the modal with a button -->
                                        <a class = "btn btn-success" data-toggle="modal" data-target="#myModal1<?php  echo $row['s_id'];?>">Approve</a>
                                        <!-- Modal  -->
                                    
                                        <div class="modal" id="myModal1<?php  echo $row['s_id'];?>">
                                        <div class="modal-dialog">
                                        
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Approval Confirmation!!!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure to approve <?php  echo $row['name'];?>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class = "btn btn-success" href ="approve_seller_request.php?id=<?php  echo $row['s_id']?>">yes</a>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">no</button>
                                            </div>
                                            </div>
                                            
                                        </div>
                                        </div>

                                    </td>

                                    <td>
                                        <a class = "btn btn-danger" data-toggle="modal" data-target="#myModal<?php  echo $row['s_id'];?>">Delete</a>
                                        <!-- Modal -->
                                        <div class="modal" id="myModal<?php  echo $row['s_id'];?>">
                                        <div class="modal-dialog">
                                        
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Delete Confirmation!!!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure to delete <?php  echo $row['name'];?>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a class = "btn btn-success" href ="delete_seller_request.php?id=<?php  echo $row['s_id']?>">yes</a>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">no</button>
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="bot">
   <?php include 'include/footer.php' ?>
</div>

</body>
</html>