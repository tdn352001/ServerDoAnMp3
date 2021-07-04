<?php 

    require "connect.php";
    require "song.php";
    $query = "SELECT DISTINCT * FROM baihat order by IdBaiHat desc";
    $mangbaihat = array();
    $databaihat = mysqli_query($con, $query);
    if($databaihat){
        while($row = mysqli_fetch_assoc($databaihat)){
            $mangcasi = array();
            $mangidcasi = array();
            $idbaihat = $row['IdBaiHat'];
            $sql="SELECT casi.IdCaSi, TenCaSi FROM baihatcasi, casi
                  WHERE baihatcasi.IdCaSi = casi.IdCaSi and baihatcasi.IdBaiHat = '$idbaihat'";
            $datasql=mysqli_query($con, $sql);

            if($datasql){
                while($dong = mysqli_fetch_assoc($datasql)){
                    array_push($mangcasi, $dong['TenCaSi']);
                    array_push($mangidcasi, $dong['IdCaSi']);
                }
            }
            array_push($mangbaihat, new BaiHat($row['IdBaiHat'], $row['TenBaiHat'], $row['HinhBaiHat'], $row['LinkBaiHat'],$mangidcasi, $mangcasi, $row['LuotThich']));
            
        }
    }

    echo json_encode($mangbaihat);

?>