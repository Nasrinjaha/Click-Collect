<form method="post" class="cmxform" action="" id="signUpForm">
                            

                            <div class="mb-3 mt-3">
                                <label for="brand">Add New Sub Brand</label>
                                    <input type="text" name="brand" class="form-control" id="brand"  required>
                            </div> 
                            <div class="mb-3 mt-3 text-center">
                                    <input type="submit" class="btn btn-primary" name = "submit" id="submitForm" value="Add" />
                            </div>
                            <?php
                                if(isset($_POST['submit'])){
                                    include 'connection.php';
                                    $brand = $_POST['brand'];
                                    $query2 = "INSERT INTO `brand` (`name`) 
                                    VALUES('$brand')";
                                    if(mysqli_query($con,$query2)){
                                            echo '<span style= "color:green;">Successfully inserted';
                                    }
                                    else{
                                        echo '<span style= "color:red;">insertion failed';
                                    }
                                }
                            ?>
                        </form>