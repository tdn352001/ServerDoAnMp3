<?php 

    require "connect.php";

    $id = $_POST['idbanner'];
    $query = "delete from quangcao where IdQuangCao = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
        echo json_encode("S");
    }else
        echo json_encode("F");

?>