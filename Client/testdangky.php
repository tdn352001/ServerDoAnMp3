<?php 
    require "connect.php";
    class Casi{
        function Casi($IdCaSi, $TenCaSi, $HinhCaSi){
            $this->IdCaSi= $IdCaSi;
            $this->TenCaSi= $TenCaSi;
            $this->HinhCaSi= $HinhCaSi;
        }
    }
    
    $query = "SELECT * FROM casi";


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