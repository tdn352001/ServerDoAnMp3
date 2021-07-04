<?php

    require "connect.php";
    $poster = $_POST['poster'];
    $noidung = $_POST['noidung'];
    $idbaihat = $_POST['idbaihat'];
    

    $query = "insert into quangcao values(null, '$poster', '$noidung', '$idbaihat')";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "select IdQuangCao from quangcao where HinhAnh = '$poster' and NoiDung = '$noidung' and IdBaiHat = '$idbaihat'";
        $data = mysqli_query($con, $query);
        if($data){
            $row = mysqli_fetch_assoc($data);
            $idquangcao = $row['IdQuangCao'];
            echo json_encode($idquangcao);
        }else
            echo json_encode("F");
    }else
        echo json_encode("F");

?>