<?php 

    require "connect.php";

    $id = $_POST['idalbum'];
    $idbaihat = $_POST['idbaihat'];
    $query = "insert into chitietalbum values('$id', '$idbaihat')";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>