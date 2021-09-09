<?php 
include "../db.php";
$response=array();

if(isset($_POST['email']) && isset($_POST['password'])){
    $res=mysqli_query($conn,"Select * from `users` where email='".$_POST['email']."'");
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){
            if(password_verify($_POST['password'],$row['password'])){
                $response['status'][0]=true;
                $response['status'][1]="User Found";
            }else{
                $response['status'][0]=true;
                $response['status'][1]="Password is not Correct";
            }
        }
    }else{
        $response['status'][0]=true;
        $response['status'][1]="User not Found";
    }
}else{
    $response['status'][0]=true;
    $response['status'][1]="Fill all the Fields";
}

echo json_encode($response);
?>