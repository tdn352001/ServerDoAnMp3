<?php 
    require "connect.php";

    $email = $_POST['email'];
    $id = $_POST['iduser'];
    $query="SELECT * FROM user WHERE Email = '$email'";
    $data = mysqli_query($con, $query);
    if($data->num_rows > 0){
        $row = mysqli_fetch_assoc($data);
        $result = "Ton Tai";
    }
    else{
       $query = "update user set Email = '$email' where IdUser = '$id'";
       $data=mysqli_query($con, $query);
       if($data)
            $result="Thanh Cong";
        else
            $result="That Bai" ;
    }
    
    

    echo json_encode($result);
?>