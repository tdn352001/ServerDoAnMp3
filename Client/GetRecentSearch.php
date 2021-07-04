<?php 

    require "connect.php";
    $iduser =$_POST['iduser'];

    $query = "SELECT recentsearch.IdSearch, recentsearch.KeyWord from recentsearch where recentsearch.IdUser = '$iduser' ORDER by IdSearch DESC";
    $data = mysqli_query($con, $query);
    $mangketqua = array();

    if($data){
        while($row = mysqli_fetch_assoc($data)){
            array_push($mangketqua, $row);
        }
    }

    echo json_encode($mangketqua);

?>