<?php 

    require "connect.php";

    $id = $_POST['id'];
    
    $query = "delete from chude where IdChuDe = '$id'";
    $sql = "delete from chitietchude where IdChuDe = '$id'";
    $data = mysqli_query($con, $query);
    mysqli_query($con, $sql);
    if($data){
            echo json_encode("S");
    }

?>