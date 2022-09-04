<div class="content-area">

    <div class="account-page">
        <div class="container">

          <div class="row">
            <div class="col-sm-3">
            <?php include 'sidebar.php' ?>
            </div>
            <div class="col-sm-9">
                <h2>Add products</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <form method="post" class="cmxform" action="add_products.php" enctype="multipart/form-data" id="signUpForm">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 form-control-label">Product Name : </label>
                                <div class="col-sm-8">
                                     <input class="form-control" id="name" name="name" type="text" placeholder=" enter the name of product" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="choose brand" class="col-sm-2 form-control-label">choose brand</label>
                                <div class="col-sm-8">
                                <select name = "brand" id ="brand" class="form-control" required>
                                    <option value="">--choose brand--</option>
                                    <?php 
                                    include 'connection.php';
                                    $query = "select * FROM brand";
                                    $result = mysqli_query($con,$query);
                                    
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <option value="<?php echo $row['b_id'];?>"><?php echo $row['name'];?></option>
                                    
                                    <?php } ?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Choose category" class="col-sm-2 form-control-label">Choose category: </label>
                                <div class="col-sm-8">
                                <select name = "category" id ="category" class="form-control" required>
                                    <option value="">--choose category--</option>
                                    <?php 
                                    $query = "select * FROM category";
                                    $result = mysqli_query($con,$query);
                                    
                                    while($row = mysqli_fetch_array($result)){
                                    ?>
                                        <option value="<?php echo $row['cat_id'];?>"><?php echo $row['name'];?></option>
                                        
                                        <?php } ?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Choose sub_category" class="col-sm-2 form-control-label">Choose sub_category : </label>
                                <div class="col-sm-8">
                                <select name = "sub_category" id ="sub_category" class="form-control" required> 
                                </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="size" class="col-sm-2 form-control-label">Size : </label>
                                <div class="col-sm-8">
                                <input name = "size" id ="size" class="form-control" required> 
                                </input>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Description" class="col-sm-2 form-control-label">Description : </label>
                                <div class="col-sm-8">
                                    <textarea name="description" id="" cols="20" rows="7" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Quantity" class="col-sm-2 form-control-label">Quantity :</label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="quantity" name="quantity" type="number" placeholder="write the number of amount" required/>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="Price" class="col-sm-2 form-control-label">Price :</label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="price" name="price" type="number" placeholder="write the price of products" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-sm-2 form-control-label">Image :</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="file" id="image" name="files[]" multiple  required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-8 ">
                                    <input type="submit" class="btn btn-yellow btn-lg" id="submitForm" name="submit" value="Add" />
                                </div>
                            </div>

                            <?php
                                if(isset($_POST['submit'])){
                                    $name =   $_POST['name'];
                                    $brand = $_POST['brand'];
                                    $category = $_POST['category'];
                                    $sub_category = $_POST['sub_category'];
                                    $description = $_POST['description'];
                                    $quantity =  $_POST['quantity']; 
                                    $price = $_POST['price'];
                                    $size = $_POST['size'];


                                    $query2 = "INSERT INTO products(name,b_id,sub_id,size,description,price,quantity,status)
                                    VALUES('$name','$brand','$sub_category','$size','$description','$price','$quantity',0)";
                                    if(mysqli_query($con,$query2)){
                                            echo '<span style= "color:green;">Successfully inserted';
                                    }
                                    else{
                                        echo '<span style= "color:red;">insertion failed';
                                    }


                                    
                                    $directory = 'images';
                                    $i=1;
                                    $pid=0;
                                    $query = "SELECT *  FROM Products where 1";
                                    $table = mysqli_query($con,$query);
                                    while( $row = mysqli_fetch_array($table)){
                                        $pid = $row['p_id'];
                                    }
                                    foreach($_FILES['files']['tmp_name'] as $key => $value){
                                        $tmpname = $_FILES['files']['tmp_name'][$key];
                                        $img = $_FILES['files']['name'][$key];
                                        $separetedimage = explode(".",$img);
                                        $ext = $separetedimage[1];
                                        $date = date("D:M:Y");
                                        $time = date("h:i:s");
                                        $image = md5($date.$time.$i);//MD5 function for encryption
                                        $image = $image.".".$ext;
                                        $i++;
                                        $query1 = "INSERT INTO images(p_id,image)
                                        VALUES('$pid','$image')";
                                        if(mysqli_query($con,$query1)){
                                                echo '<span style= "color:green;">Successfully inserted';
                                                if($image!=NULL){
                                                    move_uploaded_file($_FILES['files']['tmp_name'][$key],"../images/$image");
                                                }
                                        }
                                        else{
                                            echo '<span style= "color:red;">insertion failed';
                                        }
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        $("#category").change(function(){
            var cat =  $("#category").val();
            $.ajax({
                url:"find_subcategory.php",
                dataType:"json",
                data : {
                    "cat_id" : cat
                },
                success: function(res){
                    $("#sub_category").html("<option value=''>--choose sub_category--</option>");   
                    for(var i=0;i<res.length;i++){
                        var x = "<option value="+res[i].sub_id+">"+res[i].name+"</option>";
                        $("#sub_category").append(x);
                    }
                }
            });
        });
    });