<?php 

    require "connect.php";

    $id = $_POST['id'];
    $idbaihat = $_POST['idbaihat'];
    $query = "insert into chitietchude values('$id', '$idbaihat')";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>