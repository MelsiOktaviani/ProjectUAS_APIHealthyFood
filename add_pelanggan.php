<?php

include 'connection.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$total = $_POST['total'];
$gender = $_POST['gender'];
$foto = $_POST['foto'];

$sql = "INSERT INTO tb_pelanggan set 
        nama='$nama', 
        email='$email', 
        total='$total', 
        foto='$foto',
        gender='$gender'";
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