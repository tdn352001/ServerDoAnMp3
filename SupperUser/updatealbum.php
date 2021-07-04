<?php 

    require "connect.php";

    $id = $_POST['idalbum'];
    $idcasi = $_POST['idcasi'];
    $ten = $_POST['ten'];
    $anh =$_POST['hinh'];

    $query = "update album set HinhAlbum = '$anh', IdCaSi = '$idcasi', TenAlbum = '$ten' where IdAlbum = '$id'";
    $data=   mysqli_query($con, $query);
    if($data){
        echo json_encode("S");
    }
?>