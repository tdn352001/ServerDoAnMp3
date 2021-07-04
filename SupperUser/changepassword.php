<?php 
    require "connect.php";

    $password = $_POST['password'];
    $id = $_POST['idadmin'];
    $query="UPDATE admin set Password = '$password' where IdAdmin = '$id'";
    $data = mysqli_query($con, $query);
          
    if($data)
        $result="Thanh Cong";
    else
        $result="That Bai"; 
  
    echo json_encode($result);
?>