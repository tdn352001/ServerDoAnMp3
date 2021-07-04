<?php 

require "connect.php";
require "theloai.php";
$query = "SELECT * FROM theloai";

$arrayyPL = array();

$data = mysqli_query($con, $query);

if($data)
{
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayyPL, new TheLoai($row['IdTheLoai'], 
                                        $row['TenTheLoai'], 
                                        $row['HinhTheLoai']));
    }
}   

echo json_encode($arrayyPL);

?>