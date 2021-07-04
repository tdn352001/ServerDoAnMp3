<?php 
    require "connect.php";

    $email= $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE Email = '$email' AND Password = '$password'";
    $data = mysqli_query($con, $query);
    if($data){
        $row = mysqli_fetch_assoc($data);
    }

    echo json_encode($row);
?>