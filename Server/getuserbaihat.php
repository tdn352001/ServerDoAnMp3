<?php 
    require "connect.php";
    require "song.php";

    
    $id = $_POST['iduser'];
    $query ="SELECT * from baihat where IdBaiHat in (SELECT IdBaiHat from userbaihat where IdUser ='$id')";
    $data = mysqli_query($con, $query);
    $mangbaihat = array();

    if($data){
        while($row = mysqli_fetch_assoc($data)){

            // Lấy danh sách ca sĩ của bài hát
            $mangcasi = array();
            $sql="SELECT TenCaSi FROM baihatcasi, casi
                  WHERE baihatcasi.IdCaSi = casi.IdCaSi and baihatcasi.IdBaiHat =".$row['IdBaiHat'];
            $datasql=mysqli_query($con, $sql);
            if($datasql){
                while($dong = mysqli_fetch_assoc($datasql)){
                    array_push($mangcasi, $dong['TenCaSi']);
                }
            }

            // Thêm bài hát vào mảng

            array_push($mangbaihat,new BaiHat($row['IdBaiHat'], $row['TenBaiHat'], 
                                                $row['HinhBaiHat'], $row['LinkBaiHat'], 
                                                $mangcasi, $row['LuotThich'] ));
        }
    }
    echo json_encode($mangbaihat);

    
?>