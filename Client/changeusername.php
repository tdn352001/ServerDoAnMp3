<?php 
    require "connect.php";

    $username = $_POST['username'];
    $id = $_POST['iduser'];
    $query="UPDATE user set UserName = '$username' where IdUser = '$id'";
    $data = mysqli_query($con, $query);
          
    if($data)
        $result="Thanh Cong";
    else
        $result="That Bai" ;
  
    echo json_encode($result);
?>