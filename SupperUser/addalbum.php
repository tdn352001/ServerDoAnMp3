<?php 

    require "connect.php";

    $id = $_POST['idcasi'];
    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $query = "INSERT INTO album VALUES(null, '$id', '$ten', '$hinh')";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "select IdAlbum from album where TenAlbum = '$ten' and HinhAlbum = '$hinh' order by IdAlbum desc";
        $data = mysqli_query($con, $query);
        if($data){
            $row = mysqli_fetch_assoc($data);
            $idchude = $row['IdAlbum'];
            echo json_encode($idchude);
        }
    }

?>