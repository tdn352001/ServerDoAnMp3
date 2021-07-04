<?php 

    require "connect.php";

    $iduser = $_POST['iduser'];
    $idbaihat = $_POST['idbaihat'];

    $query = "delete from userbaihatrecent where IdUser = '$iduser' and IdBaIHat = '$idbaihat'";
    $data = mysqli_query($con, $query);
    if($data){
        $query = "insert into userbaihatrecent values(null, '$iduser', '$idbaihat')";
        $data = mysqli_query($con, $query);
        if($data){
            $result = "S";
        }
        else
            $result ="F";
    }

    $sqlcheck = "SELECT IdRecent from userbaihatrecent where IdUser = '$iduser' order by IdRecent asc";
    $datasql = mysqli_query($con, $sqlcheck);

    if($datasql->num_rows > 15){
        $row = mysqli_fetch_assoc($datasql);
        $idrecent =$row['IdRecent'];
        $sqldelete = "delete from userbaihatrecent where IdUser = '$iduser' and IdRecent = '$idrecent'";
        $data = mysqli_query($con, $sqldelete);
    }
    echo json_encode($result);

?>