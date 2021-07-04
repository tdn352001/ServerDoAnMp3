<?php 

    require "connect.php";

    $id = $_POST['idcasi'];
    
    $query = "delete from casi where IdPlaylist = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>