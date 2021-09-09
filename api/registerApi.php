<?php

include "../db.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


$response=array();

if(!$conn){
    echo "DataBase Connection Failed";
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])){
    $query="select * from `users` where email='".$_POST['email']."'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res) > 0){
        $response['status'][0]=false;
        $response['status'][1]="Data Not Inserted User Exits";
    }
    else{
        if($_POST['new_password'] == $_POST['confirm_password']){
            $password=password_hash($_POST['new_password'],PASSWORD_DEFAULT);
            $query="INSERT INTO `users`(`name`, `email`,`phone`, `password`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$password."')";
            if(mysqli_query($conn,$query)){
                $mail = new PHPMailer(true);
                $code=substr(str_shuffle("0123456789"), 0, 6);;
                $email=$_POST['email'];
                mysqli_query($conn,"INSERT INTO `verificationotp`(`otp`, `email`) VALUES ('$code','$email')");
                try {
                    //Server setting      
                    $mail->IsSMTP();                                         //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'ahmadimran.zamstudios@gmail.com';                     //SMTP username
                    $mail->Password   = 'ahmadimran277';                               //SMTP password
                    $mail->SMTPSecure ='ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                
                    //Recipients
                    $mail->setFrom('ahmadimran.zamstudios@gmail.com', 'OTP');
                    $mail->addAddress('ahmadimran.zamstudios@gmail.com', 'Admin');     //Add a recipient     
                    $mail->addReplyTo('no-replay@gmail.com', 'No-replay');
                
                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Your verification OTP';
                    $mail->Body    = "<h1>Don't Share your OTP number</h1>
                                    <h3>Your OTP is <b>$code<b><h3>";
                    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";
                    $mail->send();
                    $response['status'][0]=true;
                    $response['status'][1]="Data Inserted Successfully";
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                
            }else{
                $response['status'][0]=false;
                $response['status'][1]="Data Not Inserted Database Error";
            }
        }else{
            $response['status'][0]=true;
            $response['status'][1]="Data Not Inserted Password are not Same";
        }
    }
    
}else{
    $response['status'][0]=true;
    $response['status'][1]="Data Not Inserted Please Fill all Fields 1";
}
echo json_encode($response);
?>