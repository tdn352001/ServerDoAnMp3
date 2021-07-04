<?php 
    require 'connect.php';
    require 'song.php';
    require 'playlist.php';

    $mangbaihat = array();
    
 
    if(isset($_POST['IdAlbum'])){
        $idalbum = $_POST['IdAlbum'];
        $query = "SELECT distinct * FROM baihat
                     WHERE IdBaiHat IN 
                     (SELECT baihat.IdBaiHat FROM baihat, chitietalbum 
                     WHERE baihat.IdBaiHat = chitietalbum.IdBaiHat
                     AND chitietalbum.IdAlbum = '$idalbum' )";
    }
     if(isset($_POST['IdCaSi'])){
        $idcasi = $_POST['IdCaSi'];
        $query="SELECT * FROM baihat WHERE IdBaiHat IN
                                    ( SELECT IdBaiHat FROM baihatcasi
                                      WHERE baihatcasi.IdCaSi = '$idcasi')";
    }
    if(isset($_POST['IdPlaylist'])){
        $idplaylist = $_POST['IdPlaylist'];
        $query = "SELECT * FROM baihat WHERE baihat.IdBaiHat IN (SELECT baihat.IdBaiHat FROM baihat, chitietplaylist WHERE baihat.IdBaiHat = chitietplaylist.IdBaiHat AND chitietplaylist.Idplaylist = '$idplaylist')";
    }


    if(isset($_POST['IdQuangCao']))
    {
        $idquangcao = $_POST['IdQuangCao'];
        $query = "SELECT * FROM baihat 
                  WHERE IdBaiHat = 
                                (SELECT IdBaiHat from quangcao 
                                 WHERE IdQuangCao = '$idquangcao')";
    }
    
    if(isset($_POST['IdChuDe'])){
        $idchude= $_POST['IdChuDe'];
        $query ="SELECT * FROM baihat WHERE IdBaiHat IN 
                (SELECT IdBaiHat FROM chitietchude WHERE  chitietchude.IdChuDe = '$idchude')";
    }
    
    if(isset($_POST['IdTheLoai'])){
        $idtheloai= $_POST['IdTheLoai'];
        $query ="SELECT * FROM baihat WHERE IdBaiHat IN 
                (SELECT IdBaiHat FROM chitiettheloai WHERE  chitiettheloai.IdTheLoai = '$idtheloai')";
    }

    
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