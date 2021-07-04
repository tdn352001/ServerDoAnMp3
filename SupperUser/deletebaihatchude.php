<?php 

    require "connect.php";

    $id = $_POST['id'];
    
    $sql = "delete from chitietchude where IdChuDe = '$id'";
    $data = mysqli_query($con, $sql);

    if($data){
            echo json_encode("S");
    }

?>