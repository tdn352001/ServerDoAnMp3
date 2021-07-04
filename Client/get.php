<?php 
    require "connect.php";
    require "user.php";

    

        $user = array();

        $query= "select * from user";

        $data = mysqli_query($con, $query);

        if($data){
            while ($row = mysqli_fetch_assoc($data)){
                array_push($user, new User($row['IdUser'], $row['UserName'], $row['Email'], $row['Password']));
            }
        }

        echo json_encode($user);

   
?>