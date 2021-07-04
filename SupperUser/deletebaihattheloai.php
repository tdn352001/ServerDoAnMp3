<?php 

    require "connect.php";

    $id = $_POST['id'];
    
    $query = "delete from chitiettheloai where IdTheLoai = '$id'";
    $data = mysqli_query($con, $query);
    if($data){
            echo json_encode("S");
    }

?>