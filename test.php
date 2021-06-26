<?php

include 'connection.php';

$name = $_POST['name'];
$image = $_POST['image'];
$price = $_POST['price'];


$sql = "INSERT INTO tbl_wishlist set 
        name='$name', 
        image='$email', 
        price='$total'";
$result = $connect->query($sql);

if($result){
    echo json_encode(array(
        "succes" => true,
      
    ));
}else{
    echo json_encode(array(
        "succes" => false,
   
    ));
}