<?php include 'adminauth.php' ?>
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
    
        <div class="row">
            <div class="col-sm-3">
               <?php include 'sidebar.php' ?>
            </div>
        <div class="mt-5 card">
            <div class="card bg-light text-dark">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 mt-5 mb-5">
                        <h2 class="text-center">Add Subcategory</h2>
                        <br>
                        <form method="post" class="cmxform" action="" id="addsubcaregory">
                            <div class="mb-3 mt-3">
                                <label for="Choose category">Choose category: </label>
                                <select name = "category" id ="category" class="form-control" required>
                                    <option value="">--choose category--</option>
                                    <?php 
                                    include 'connection.php';
                                    $query = "select * FROM category";
                                    $result = mysqli_query($con,$query);
                                    
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <option value="<?php echo $row['cat_id'];?>"><?php echo $row['name'];?></option>
                                        
                                        <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3 mt-3">
                                    <label for="subcat">Add New Sub Category</label>
                                    <input type="text" name="subcat" class="form-control" id="subcat" minlength="2" required>
                            </div> 
                            <div class="mb-3 mt-3 text-center">
                                    <input type="submit" class="btn btn-primary" name = "submit" id="submitForm" value="Add" />
                            </div>
                            <?php
                                if(isset($_POST['submit'])){
                                    
                                    $category = $_POST['category'];
                                    $sub_category = $_POST['subcat'];

                                    $query2 = "INSERT INTO `sub_category` (`name`, `cat_id`) 
                                    VALUES('$sub_category', $category)";
                                    if(mysqli_query($con,$query2)){
                                            echo '<span style= "color:green;">Successfully inserted';
                                    }
                                    else{
                                        echo '<span style= "color:red;">insertion failed';
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