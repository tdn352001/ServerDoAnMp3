<?php 

require "connect.php";
require "playlist.php";
$query = "SELECT * FROM playlist";

$arrayyPL = array();

$data = mysqli_query($con, $query);

if($data)
{
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayyPL, new Playlist($row['IdPlaylist'], 
                                        $row['TenPlaylist'], 
                                        $row['HinhNen']));
    }
}   

echo json_encode($arrayyPL);

?>