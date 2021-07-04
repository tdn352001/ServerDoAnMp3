<?php 

require "connect.php";
require "album.php";

if(isset($_POST['tukhoa'])){
$tukhoa=$_POST['tukhoa'];
$query = "SELECT album.IdAlbum, casi.TenCaSi, album.TenAlbum, album.HinhAlbum 
                  FROM album, casi 
                  WHERE album.IdCaSi = casi.IdCaSi and lower(TenAlbum) LIKE '%$tukhoa%'";  
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
}
?>