<?php 
include "../db.php";
$response=array();

if(isset($_POST['otp'])){
    $res=mysqli_query($conn,"Select * from `verificationotp` where otp='".$_POST['otp']."'");
    if(!$res || mysqli_num_rows($res)==0){
        $response['status'][0]=false;
        $response['status'][1]="OTP not Found";    
    }else{
        mysqli_query($conn,"delete from `verificationotp` where otp='".$_POST['otp']."'");
        $response['status'][0]=true;
        $response['status'][1]="OTP found";
    }
}else{
    $response['status'][0]=false;
    $response['status'][1]="Provide OTP";
}

echo json_encode($response);
?>