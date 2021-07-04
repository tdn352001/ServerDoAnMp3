<?php 

    require "connect.php";
    require "song.php";
    $query = "SELECT DISTINCT * FROM baihat ORDER BY LuotThich DESC, IdBaiHat desc LIMIT 15";
    

    

    $mangbaihat = array();

    $databaihat = mysqli_query($con, $query);

    if($databaihat){
        while($row = mysqli_fetch_assoc($databaihat)){
            $mangcasi = array();
            $sql="SELECT TenCaSi FROM baihatcasi, casi
                  WHERE baihatcasi.IdCaSi = casi.IdCaSi and baihatcasi.IdBaiHat =".$row['IdBaiHat'];
            $datasql=mysqli_query($con, $sql);

            if($datasql){
                while($dong = mysqli_fetch_assoc($datasql)){
                    array_push($mangcasi, $dong['TenCaSi']);
                }
            }
            array_push($mangbaihat, new BaiHat($row['IdBaiHat'], $row['TenBaiHat'], $row['HinhBaiHat'], $row['LinkBaiHat'], $mangcasi, $row['LuotThich'] ));
            
        }
    }

    echo json_encode($mangbaihat);

?>