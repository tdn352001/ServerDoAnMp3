<?php 

    class User{
        function User($id, $ten, $mail, $password, $banner, $avatar){
            $this->IdUser = $id;
            $this->UserName= $ten;
            $this->Email = $mail;
            $this->Password = $password;
            $this->Banner = $banner;
            $this->Avatar = $avatar;
        }
    }

?>