<?php 

    require "connect.php";

    $id = $_POST['idcasi'];
    $ten = $_POST['tencasi'];
    $hinh = $_POST['hinhcasi'];
    $query = "update casi set TenCaSi = '$ten', HinhCaSi = '$hinh' where IdCaSi = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>