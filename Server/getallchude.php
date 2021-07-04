<?php 

require "connect.php";
require "chude.php";
$query = "SELECT * FROM chude";

$arrayyPL = array();

$data = mysqli_query($con, $query);

if($data)
{
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayyPL, new ChuDe($row['IdChuDe'], 
                                        $row['TenChuDe'], 
                                        $row['HinhChuDe']));
    }
}   

echo json_encode($arrayyPL);

?>