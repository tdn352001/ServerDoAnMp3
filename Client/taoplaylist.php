<?php 

    require "connect.php";
    $iduser = $_POST['iduser'];
    $tenplaylist = $_POST['tenplaylist'];
    $hinhmacdinh = "aaa";
    $query = "insert into userplaylist values(null, '$iduser', '$tenplaylist')";
    $data = mysqli_query($con, $query);
    $playlist = "SELECT * from userplaylist WHERE IdUser = '$iduser' order by IdPlaylist DESC";
    $dataplaylist = mysqli_query($con, $playlist);

    if($data){
        if($dataplaylist){
            $row = mysqli_fetch_assoc($dataplaylist);
            $result = $row['IdPlaylist'];
        }
    }
    else
        $result = 'That Bai';

    echo json_encode($result);

?>