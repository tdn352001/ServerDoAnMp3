<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    require "PHPMailer/PHPMailer.php";
    require "PHPMailer/SMTP.php";
    require "PHPMailer/Exception.php";


    $mail= new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "tdn352001@gmail.com";
    $mail->Password = "simond352001";
    $mail->Post = 465;
    $mail->SMTPSecure = 'ssl';
    
   
    $mail->isHTML(true);
    $mail->setFrom('dungvoyeu03@gmail.com', "dung");
    $mail->Subject = "LO";
    $mail->Body =" chao ban";
    $mail->AddAddress("tdn352001@gmail.com");

    if($mail->Send())
    echo "alo";
    else
    echo "ola";

?>