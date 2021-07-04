<?php 

    require "connect.php";

    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $query = "INSERT INTO playlist VALUES(null, '$ten', '$hinh')";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "select IdPlaylist from playlist where TenPlaylist = '$ten' and HinhNen = '$hinh' order by IdPlaylist desc";
        $data = mysqli_query($con, $query);
        if($data){
            $row = mysqli_fetch_assoc($data);
            $idchude = $row['IdPlaylist'];
            echo json_encode($idchude);
        }
    }

?>