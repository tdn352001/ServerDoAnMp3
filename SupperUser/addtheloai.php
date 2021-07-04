<?php 

    require "connect.php";

    $ten = $_POST['ten'];
    $hinh = $_POST['hinh'];
    $query = "INSERT INTO theloai VALUES(null, '$ten', '$hinh')";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "select IdTheLoai from theloai where TenTheLoai = '$ten' and HinhTheLoai = '$hinh' order by IdTheLoai desc";
        $data = mysqli_query($con, $query);
        if($data){
            $row = mysqli_fetch_assoc($data);
            $idchude = $row['IdTheLoai'];
            echo json_encode($idchude);
        }
    }

?>