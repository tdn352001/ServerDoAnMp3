<?php 

    require "connect.php";
    require 'playlist.php';

    $iduser = $_POST['iduser'];

    $query = "select * from userplaylist where IdUser = '$iduser'";
    $data = mysqli_query($con, $query);
    $mang = array();

    if($data){
        while($row = mysqli_fetch_assoc($data))
            array_push($mang, new Playlist($row['IdPlaylist'], $row['TenPlaylist'], "https://tiendung352001.000webhostapp.com/Client/image/ic_user_playlist.png"));
    }

    echo json_encode($mang);

?>