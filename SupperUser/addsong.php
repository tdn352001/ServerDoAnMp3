<?php

    require "connect.php";
    
    $tenbaihat = $_POST['tenbaihat'];
    $hinhbaihat = $_POST['hinhbaihat'];
    $linkbaihat = $_POST['linkbaihat'];

    $query = "insert into baihat values(null,'$tenbaihat', '$hinhbaihat', '$linkbaihat', '0')";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "select IdBaiHat from baihat where TenBaiHat = '$tenbaihat' and HinhBaiHat = '$hinhbaihat' order by IdBaiHat desc";
        $data = mysqli_query($con, $query);
        if($data){
            $row = mysqli_fetch_assoc($data);
            $id = $row['IdBaiHat'];
            echo json_encode($id);
        }
    }else
        echo json_encode("F");
?>