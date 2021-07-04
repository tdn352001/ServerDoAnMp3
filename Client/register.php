<?php 
    require "connect.php";
    require "user.php";

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password= md5($_POST['password']);
        $query="SELECT * FROM user WHERE Email = '$email'";
        $data = mysqli_query($con, $query);
        $avatar = "https://tiendung352001.000webhostapp.com/Client/image/".$email ."Avatar.jpg";
        $banner = "https://tiendung352001.000webhostapp.com/Client/image/".$email ."Banner.jpg";


        if($data->num_rows > 0){
            $row = mysqli_fetch_assoc($data);
            $user = new User('-1', 'error','error', 'error', 'error', 'error');
            
        }
        else{
            $sql = "insert into user values(null, '$username', '$email', '$password', '$banner', '$avatar')";
            $insert = mysqli_query($con, $sql);
            $data = mysqli_query($con, $query);
            if($data)
                $user = mysqli_fetch_assoc($data);
            
            
        }

        echo json_encode($user);

    }
?>