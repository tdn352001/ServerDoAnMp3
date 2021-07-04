<?php 
    require "connect.php";

   $idbaihat = $_POST['idalbum'];
    $query = "delete from album where IdAlbum = '$idbaihat'";
    $data =  mysqli_query($con, $query);
    if($data)
        echo json_encode("S");

?>