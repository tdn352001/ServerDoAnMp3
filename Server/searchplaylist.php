<?php 

require "connect.php";
require "playlist.php";

if(isset($_POST['tukhoa'])){
$tukhoa=$_POST['tukhoa'];
$query="SELECT*FROM playlist WHERE lower(TenPlaylist) LIKE '%$tukhoa%'";

$arrayyPL = array();

$data = mysqli_query($con, $query);

if($data)
{
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayyPL, new PLaylist($row['IdPlaylist'], 
                                            $row['TenPlaylist'], 
                                            $row['HinhNen']));
    }
}   

echo json_encode($arrayyPL);
}
?>