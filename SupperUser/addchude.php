<?php 

    require "connect.php";

    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $query = "INSERT INTO chude VALUES(null, '$ten', '$hinh')";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "select IdChuDe from chude where TenChuDe = '$ten' and HinhChuDe = '$hinh' order by IdChuDe desc";
        $data = mysqli_query($con, $query);
        if($data){
            $row = mysqli_fetch_assoc($data);
            $idchude = $row['IdChuDe'];
            echo json_encode($idchude);
        }
    }

?>