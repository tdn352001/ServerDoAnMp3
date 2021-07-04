<?php 

    require "connect.php";
    $idbaihat = $_POST['idbaihat'];
    $idcasi = $_POST['idcasi'];

    $query = "insert into baihatcasi values('$idbaihat', '$idcasi')";
    $data = mysqli_query($con, $query);
    if($data){
        $rel = "S";
    }else
        $rel = "F";

        echo json_encode($rel);

?>