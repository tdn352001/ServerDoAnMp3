<?php

    require "connect.php";
    
    $idbaihat = $_POST['idbaihat'];
    $tenbaihat = $_POST['tenbaihat'];
    $hinhbaihat = $_POST['hinhbaihat'];
    $linkbaihat = $_POST['linkbaihat'];

    $query = "update baihat set TenBaiHat = '$tenbaihat', HinhBaiHat = '$hinhbaihat', LinkBaiHat = '$linkbaihat' where IdBaiHat = '$idbaihat'";
    $data = mysqli_query($con, $query);
    if($data){
        echo json_encode("S");
    }else
        echo json_encode("F");
?>