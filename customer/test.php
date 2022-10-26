<?php
            include 'include/connection.php';
            $pid = 31;
            $sql2 = "select * from products where p_id = $pid";
            $result2 = mysqli_query($con,$sql2);
            $row2 = mysqli_fetch_array($result2);
            $stored = $row2['quantity'];
            echo $stored;
?>