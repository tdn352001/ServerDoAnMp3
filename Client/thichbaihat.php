<?php 
    require "connect.php";

    $iduser = $_POST['iduser'];
    $idbaihat = $_POST['idbaihat'];

    $sqlthich = "insert into userbaihat values('$iduser', '$idbaihat')";
    $sqlluotthich = "update baihat set LuotThich = LuotThich + 1  where IdBaiHat = '$idbaihat'";
    
    $actionthich = mysqli_query($con, $sqlthich);
    $actionluotthich = mysqli_query($con, $sqlluotthich);

    if($actionthich){
        if($actionluotthich)
            $result = "Thanh Cong";
        else
            $result = "That Bai";
    }
    else
    $result = "That Bai";

    echo json_encode($result);
?>