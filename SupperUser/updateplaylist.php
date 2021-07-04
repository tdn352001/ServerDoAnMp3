<?php 

    require "connect.php";

    $id = $_POST['id'];
    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $query = "update playlist set TenPlaylist = '$ten', HinhNen = '$hinh' where IdPlaylist = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>