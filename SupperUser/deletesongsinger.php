<?php 

    require "connect.php";
    $idbaihat = $_POST['idbaihat'];
    $query = "delete from baihatcasi where IdBaiHat = '$idbaihat'";
    $data = mysqli_query($con, $query);

    if($data){
        $rel = "S";
    }else
    $rel = "F";

    echo json_encode($rel);

?>