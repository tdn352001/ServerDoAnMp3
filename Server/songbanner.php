<?php 

    require "connect.php";

    $sql = "SELECT quangcao.IdQuangCao, quangcao.HinhAnh, quangcao.NoiDung, quangcao.IdBaiHat, baihat.TenBaiHat, baihat.HinhBaiHat FROM quangcao INNER JOIN baihat ON quangcao.IdBaiHat = baihat.IdBaiHat WHERE quangcao.IdBaiHat = baihat.IdBaiHat";
    $data =  mysqli_query($con, $sql);


    class QuangCao{
        function QuangCao($IdQuangCao, $HinhAnh, $NoiDung, $IdBaiHat, $TenBaiHat, $HinhBaiHat){
            $this->IdQuangCao = $IdQuangCao;
            $this->HinhAnh = $HinhAnh;
            $this->NoiDung = $NoiDung;
            $this->IdBaiHat = $IdBaiHat;
            $this->TenBaiHat = $TenBaiHat;
            $this->HinhBaiHat = $HinhBaiHat;
        }
    }
    $mang= array();
    if($data){
        while($row = mysqli_fetch_assoc($data)){
            array_push($mang, new QuangCao($row['IdQuangCao'], $row['HinhAnh'], $row['NoiDung'], $row['IdBaiHat'], $row['TenBaiHat'], $row['HinhBaiHat']));
        }
    }
   
    
    echo json_encode($mang);

   
?>