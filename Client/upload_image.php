<?php
    require "connect.php";
	$iduser = '22';

    $sqlcheck = "SELECT IdRecent from userbaihatrecent where IdUser = '$iduser' order by IdRecent asc";
    $datasql = mysqli_query($con, $sqlcheck);

    if($datasql->num_rows > 15){
        $row = mysqli_fetch_assoc($datasql);
        $idrecent =$row['IdRecent'];
        $sqldelete = "delete from userbaihatrecent where and IdRecent = '$idrecent'";
        $data = mysqli_query($con, $sqldelete);
    }
    echo $idrecent;

?>