<?php 

    require "connect.php";
    require "song.php";

    $iduser = $_POST['iduser'];
    $idplaylist = $_POST['idplaylist'];

    $query= "SELECT * from baihat WHERE IdBaiHat in 
            (SELECT IdBaiHat from userbaihatplaylist, userplaylist 
            where userbaihatplaylist.IdPlaylist = userplaylist.IdPlaylist 
                    and IdUser = '$iduser' 
                    and userbaihatplaylist.IdPlaylist = '$idplaylist')";
    $mangbaihat = array();

    $data = mysqli_query($con, $query);
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
                                                $mangcasi, $row['LuotThich']  ));
        }
    }
    
    echo json_encode($mangbaihat);

?>