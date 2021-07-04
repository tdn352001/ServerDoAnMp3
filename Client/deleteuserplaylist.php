<?php 

    require "connect.php";

    $iduser = $_POST['iduser'];
    $idplaylist = $_POST['idplaylist'];

    $query = "DELETE FROM userplaylist WHERE IdUser = '$iduser' and IdPlaylist = '$idplaylist'";
    $data = mysqli_query($con, $query);

    if($data){
        $query = "DELETE FROM userbaihatplaylist WHERE IdPlaylist = '$idplaylist'";
        $data = mysqli_query($con, $query);
        if($data){
            $rel = "S";
        }
        else
        $rel = "F";
    } else
    $rel = "F";


    echo json_encode($rel);
?>