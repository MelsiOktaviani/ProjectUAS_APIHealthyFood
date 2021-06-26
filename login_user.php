<?php
include 'connection.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM tb_user WHERE username= '$username' AND password='$password'";

$result = $connect->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[]=$row;
    }
    echo json_encode (array(
        "succes"=>true,
        "data"=>$data[0],
    ));
} else {
    echo json_encode(array(
        "succes" => false,
   
    ));
}