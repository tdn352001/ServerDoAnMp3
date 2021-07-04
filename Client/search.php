<?php 

    require 'connect.php';
    $iduser = $_POST['iduser'];
    $keyword  = $_POST['keyword'];
    $query = " insert into recentsearch values(null, '$iduser', '$keyword')";
    $data = mysqli_query($con, $query);

    if($data){
        $sql = "select IdSearch from recentsearch where IdUser = '$iduser' and KeyWord = '$keyword'";
        $datasql = mysqli_query($con, $sql);

        if($datasql){
            $id = mysqli_fetch_assoc($datasql);
            $result = $id['IdSearch'];
        }
        else{
            $result ="F";
        }
    }
    else
        $result ="F";
        
    $check = "select IdSearch from recentsearch where IdUser = '$iduser' order by IdSearch";
    $datacheck = mysqli_query($con, $check);
    if($datacheck->num_rows > 15){
        $row = mysqli_fetch_assoc($datacheck);
        $dl = $row['IdSearch'];
        $delete = "delete from recentsearch where IdSearch = '$dl";
        mysqli_query($con, $delete);
    }



    echo json_encode($result);

?>