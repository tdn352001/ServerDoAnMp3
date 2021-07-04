<?php 
    require "connect.php";
    require "user.php";

        if(isset($_POST['Email']) && isset($_POST['Password'])){
        $Email=$_POST['Email'];
        $Password = md5($_POST['Password']);

        $query="SELECT * FROM user WHERE Email = '$Email' AND Password = '$Password'";
        $data = mysqli_query($con, $query);

        if($data->num_rows <= 0){
            $row = mysqli_fetch_assoc($data);
            $user = new User(-1, 'error','error', 'error', 'error', 'error');            
        }
        else{
            $user = mysqli_fetch_assoc($data);
            
        }
        echo json_encode($user);
    }


?>