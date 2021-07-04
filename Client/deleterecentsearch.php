<?php 

    require "connect.php";
    $iduser = $_POST['iduser'];

    $query = "delete from recentsearch where IdUser = '$iduser'";
    $data = mysqli_query($con, $query);
    if($data){
        $rel = "S";
    } else
        $rel = "F";
    
    echo json_encode($rel);

?>