<?php 

require "connect.php";
require "singer.php";

if(isset($_POST['tukhoa'])){
$tukhoa=$_POST['tukhoa'];
$query="SELECT*FROM casi WHERE lower(TenCaSi) LIKE '%$tukhoa%'";

$arrayyPL = array();

$data = mysqli_query($con, $query);

if($data)
{
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayyPL, new Casi($row['IdCaSi'], 
                                            $row['TenCaSi'], 
                                            $row['HinhCaSi']));
    }
}   

echo json_encode($arrayyPL);
}
?>