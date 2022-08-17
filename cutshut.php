<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cutshut.php" method = "POST" enctype="multipart/form-data">
      <input type="file" name="files[]" multiple>
      <br>
      <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $directory = 'images';
        $i=1;
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
            if($image!=NULL){
                move_uploaded_file($_FILES['files']['tmp_name'][$key],"images/$image");
            }

        }
    }
?>