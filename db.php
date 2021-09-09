<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$conn=mysqli_connect("localhost:3308","root","","admin_panel");

if(!$conn){
    echo "Connection Error";
}

?>