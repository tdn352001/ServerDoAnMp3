<?php 

    require "connect.php";

    $ten = $_POST['tencasi'];
    $hinh = $_POST['hinhcasi'];
    $query = "INSERT INTO casi VALUES(null, '$ten', '$hinh')";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "select IdCaSi from casi where TenCaSi = '$ten' and HinhCaSi = '$hinh' order by IdCaSi desc";
        $data = mysqli_query($con, $query);
        if($data){
            $row = mysqli_fetch_assoc($data);
            $idchude = $row['IdCaSi'];
            echo json_encode($idchude);
        }
    }

?>