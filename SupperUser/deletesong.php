<?php 
    require "connect.php";
    $idbaihat = $_POST['idbaihat'];
    $query = "delete from baihat where IdBaiHat = '$idbaihat'";
    mysqli_query($con, $query);

    echo json_encode("S");

?>