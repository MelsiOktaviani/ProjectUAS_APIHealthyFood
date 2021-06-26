<?php

include 'connection.php';

$id = $_POST['id_user'];
$name = $_POST['name'];


$sql = "SELECT * FROM tb_wishlist WHERE id_user= '$id' AND name='$name'";
$result = $connect->query($sql);
if ($result->num_rows > 0) {
    
    echo json_encode (array(
        "succes"=>true,
        
    ));
} else {
    echo json_encode(array(
        "succes" => false,
   
    ));
}