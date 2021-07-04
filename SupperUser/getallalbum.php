<?php 

require "connect.php";
require "album.php";
$query = "SELECT album.IdAlbum, album.IdCaSi, casi.TenCaSi, album.TenAlbum, album.HinhAlbum FROM album, casi WHERE album.IdCaSi = casi.IdCaSi";

$arrayyPL = array();

$data = mysqli_query($con, $query);

if($data)
{
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayyPL, $row);
    }
}   

echo json_encode($arrayyPL);

?>