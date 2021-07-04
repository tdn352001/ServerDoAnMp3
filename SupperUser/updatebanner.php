<?php

    require "connect.php";
    $idbanner = $_POST['idbanner'];
    $poster = $_POST['poster'];
    $noidung = $_POST['noidung'];
    $idbaihat = $_POST['idbaihat'];
    
    $query = "UPDATE  quangcao SET HinhAnh = '$poster', NoiDung = '$noidung', IdBaiHat = '$idbaihat' where IdQuangCao = '$idbanner'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }else
        echo json_encode("F");

?>