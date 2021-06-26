<?php

include 'connection.php';

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$image = $_POST['image'];
$star = $_POST['star'];
$jumlah = $_POST['jumlah'];
$idUser = $_POST['id_user'];


$sql = "INSERT INTO tb_wishlist (name, description, price, image,star,jumlah,id_user) 
VALUES ('".$name."', '".$description."', '".$price."', '".$image."', '".$star."', '".$jumlah."', '".$idUser."')";


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
?>