<?php 

    require "connect.php";

    $id = $_POST['id'];
    
    $query = "delete from chitietplaylist where IdPlaylist = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>