<?php include 'adminauth.php' ?>
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


<?php 
   include 'navbar.php';
?>
<div class="content-area">

<div id="layoutSidenav_content">
               <div class="container">
               <div class= "mytable">
         <div class = "text-center d">
          <br> <h2><b> Bus Table</b> </h2>  </div>   <br>  
        <div class = "">
        <a class = "btn btn-primary" href ="createbus.php">Create</a>
        </div>      
        <table class="table table-striped">
            <thead>
            <tr>
                 <th></th>
                <th>Bus Id</th>
                <th>Bus Name</th>
                <th>Bus Number</th>
                <th>Type</th>
                <th>Make</th>
                <th>Model</th>
                <th>Total Seat</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <td></td>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>

                   
             </tr>
             <tr>
            <td></td>
                    <td>a</td>
                    <td>b</td>
                    <td>c</td>
                    <td>d</td>
                    <td>e</td>
                    <td>f</td>
                    <td>g</td>

                   
             </tr>
               
            </tbody>
        </table>
        </div>
               </div>               

</div> <!--End Account page div-->
<?php 
   include 'footer.php';
?>
</body>
</html>