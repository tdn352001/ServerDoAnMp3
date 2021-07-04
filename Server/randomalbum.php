<?php 

    require "connect.php";
    require "album.php";

    $query = "SELECT DISTINCT album.IdAlbum, casi.TenCaSi, album.TenAlbum, album.HinhAlbum FROM album, casi WHERE album.IdCaSi = casi.IdCaSi ORDER BY rand(" .date("Ymd") .") LIMIT 5";


    $arrayyPL = array();

    $data = mysqli_query($con, $query);

    if($data)
    {
        while($row = mysqli_fetch_assoc($data)){
            array_push($arrayyPL, new Album($row['IdAlbum'], 
                                            $row['TenCaSi'], 
                                            $row['TenAlbum'], $row['HinhAlbum']));
        }
    }   

    echo json_encode($arrayyPL);

?>