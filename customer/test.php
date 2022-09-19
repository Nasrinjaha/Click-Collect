<?php 
   session_start();
//    if(!empty($_SESSION['cart'])){
//       foreach($_SESSION['cart'])
//    }\
    var_dump($_SESSION['cart']);
    foreach($combinedArray as $value){
	    echo $value . "<br>";
	}
?>