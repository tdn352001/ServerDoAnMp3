<?php 

    require 'connect.php';
    $idplaylist = $_POST['idplaylist'];
    $ten = $_POST['tenplaylist'];

    $query = "Update userplaylist set TenPlaylist = '$ten' where IdPlaylist = '$idplaylist'";
    $data = mysqli_query($con, $query);
    if($data){
        $result ="TC";
    }
    else
    $result = "TB";

    echo json_encode($result);

?>