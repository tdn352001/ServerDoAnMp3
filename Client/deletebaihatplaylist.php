<?php 

    require "connect.php";

    $idplaylist = $_POST['idplaylist'];
    $idbaihat = $_POST['idbaihat'];

    $query = "DELETE FROM userbaihatplaylist where IdPlaylist = '$idplaylist' and IdBaiHat = '$idbaihat'";
    $data = mysqli_query($con, $query);
    if($data)
        {$result = "Thanh Cong";}
    else
        {$result = "That Bai";
        }
    echo json_encode($result);
?>