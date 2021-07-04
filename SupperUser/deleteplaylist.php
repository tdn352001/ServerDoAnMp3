<?php 

    require "connect.php";

    $id = $_POST['id'];
    
    $query = "delete from playlist where IdPlaylist = '$id'";
    $sql = "delete from chitietplaylist where IdPlaylist = '$id'";
    $data = mysqli_query($con, $query);
    mysqli_query($con, $sql);
    if($data){
            echo json_encode("S");
    }

?>