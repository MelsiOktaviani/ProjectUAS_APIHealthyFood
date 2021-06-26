
<?php

include 'connection.php';

$id = $_POST['id_user'];
$name=$_POST['name'];


$sql = "DELETE FROM tb_wishlist WHERE id_user='$id' and name='$name'";
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