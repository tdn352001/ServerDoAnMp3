<?php 
    require "connect.php";
    require "singer.php";
    $query = "SELECT * FROM casi";


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
?>