<?php 

    require "connect.php";

    $id = $_POST['id'];
    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $query = "update chude set TenChuDe = '$ten', HinhChuDe = '$hinh' where IdChuDe = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>