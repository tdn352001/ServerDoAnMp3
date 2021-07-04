<?php

    require "chude.php";
    require "theloai.php";
    require "connect.php";

    $sqlchude = " SELECT DISTINCT * FROM chude ORDER BY rand(" .date("Ymd") .") LIMIT 3";
    $sqltheloai = " SELECT DISTINCT * FROM theloai ORDER BY rand(" .date("Ymd") .") LIMIT 3";

    $datachude = mysqli_query($con, $sqlchude);
    $datatheloai = mysqli_query($con, $sqltheloai);

    $mangchudetheloai = array();


    if($datachude){
        while( $row = mysqli_fetch_assoc($datachude)){
            array_push($mangchudetheloai, new ChuDe($row['IdChuDe'], $row['TenChuDe'], $row['HinhChuDe']));
        }
    }

    if($datatheloai){
        while( $row = mysqli_fetch_assoc($datatheloai)){
            array_push($mangchudetheloai, new TheLoai($row['IdTheLoai'], $row['TenTheLoai'], $row['HinhTheLoai']));
        }
    }


    echo json_encode($mangchudetheloai);

?>