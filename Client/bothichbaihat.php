<?php 
    require "connect.php";

    $iduser = $_POST['iduser'];
    $idbaihat = $_POST['idbaihat'];

    $query = "select * from userbaihat where IdUser = '$iduser' and IdBaiHat ='$idbaihat'";
    $data = mysqli_query($con, $query);

        if($data->num_rows > 0){
            $sqlxoathich = "delete from userbaihat where IdUser = '$iduser' and IdBaiHat ='$idbaihat'";
            $sqlgiamluotthich = "update baihat set LuotThich = LuotThich - 1 where IdBaiHat = '$idbaihat'";

            $dataxoathich = mysqli_query($con, $sqlxoathich);
            $datagiamluotthich = mysqli_query($con, $sqlgiamluotthich);
            if($dataxoathich){            
                if($datagiamluotthich){
                    $result = "Thanh Cong";
                }
                else
                    $result = "That Bai";
            }
            else
                $result = "That Bai";             
        }
        else
            $result = "Thanh Cong";


    echo json_encode($result);
?>