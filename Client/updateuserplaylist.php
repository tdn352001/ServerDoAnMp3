<?php 

    require 'connect.php';
    $idplaylist = $_POST['idplaylist'];

    $query = "DELETE FROM userbaihatplaylist where IdPlaylist = '$idplaylist'";
    $data = mysqli_query($con, $query);
    if($data){
        $result ="TC";
    }
    else
    $result = "TB";

    echo json_encode($result);

?>