<?php 

    require "connect.php";

    $id = $_POST['id'];
    
    $query = "delete from theloai where IdTheLoai = '$id'";
    $sql = "delete from chitiettheloai where IdTheLoai = '$id'";
    $data = mysqli_query($con, $query);
    mysqli_query($con, $sql);
    if($data){
            echo json_encode("S");
    }

?>