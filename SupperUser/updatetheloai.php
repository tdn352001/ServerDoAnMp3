<?php 

    require "connect.php";

    $id = $_POST['id'];
    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $query = "update theloai set TenTheLoai = '$ten', HinhTheLoai = '$hinh' where IdTheLoai = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>