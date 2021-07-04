<?php 

    require "connect.php";

    $id = $_POST['idalbum'];
    
    $query = "delete from chitietalbum where IdAlbum = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>