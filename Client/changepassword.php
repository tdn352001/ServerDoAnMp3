<?php 
    require "connect.php";

    $password = md5($_POST['password']);
    $id = $_POST['iduser'];
    $query="UPDATE user set Password = '$password' where IdUser = '$id'";
    $data = mysqli_query($con, $query);
          
    if($data)
        $result="Thanh Cong";
    else
        $result="That Bai"; 
  
    echo json_encode($result);
?>