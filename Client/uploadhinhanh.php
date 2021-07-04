<?php 

    require "connect.php";

    $encodedImage = $_POST['hinhanh'];
    $tenfile = $_POST['filename'];
    $imageLocation = "image/$tenfile.jpg";
    
    if(file_put_contents($imageLocation, base64_decode($encodedImage))){
        $result = "thanh cong";
    }
    else
        $result = "that bai";



    echo json_encode($result);

?>