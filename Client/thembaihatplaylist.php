<?php 

    require "connect.php";

    $idplaylist = $_POST['idplaylist'];
    $idbaihat = $_POST['idbaihat'];
    

    $query = "INSERT INTO userbaihatplaylist values('$idplaylist', '$idbaihat')";
    $data = mysqli_query($con, $query);
    if($data){
        $result ="Thanh Cong";
    }
    else
        $result = "That Baiiii";
    
    echo json_encode($result);

?>