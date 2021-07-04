<?php 

    require 'connect.php';

    $email = $_POST['email'];
    $query = "select IdAdmin from admin where Email = '$email'";
    $data = mysqli_query($con, $query);

    if($data){
        $row = mysqli_fetch_assoc($data);
        $id = $row['IdAdmin'];
    }
    else{
        $id="-1";
    }

    echo json_encode($id);
    
?>

