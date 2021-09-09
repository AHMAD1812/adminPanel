<?php 
session_start();

include "db.php";

function loginAttempt($conn){
    $ip_address=getIPAdress();
    mysqli_query($conn,"insert into `loginlogs`(`iPaddress`) values('$ip_address')");
}

function getIPAdress(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else{
        $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
        return $ipAddr;
}
function checkAttempts($conn){
    $ip_address=getIPAdress();
    $query=mysqli_query($conn,"select count(*) as total_count from loginlogs where iPaddress='$ip_address'");
    $check_login_row=mysqli_fetch_assoc($query);
    $total_count=$check_login_row['total_count'];
    $_SESSION['count']=$total_count;
    //Checking if the attempt 3, or youcan set the no of attempt her. For now we taking only 3 fail attempted
    if($total_count==2){
    return true;
    }else{
        return false;
    }
}

if(isset($_REQUEST['submit'])){
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $sql="SELECT * FROM `users` WHERE email='".$email."'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                if(password_verify($password,$row['password'])){
                    $_SESSION['name']=$row['name'];
                    header("Location:index.php");
                }else{
                    $attempts= checkAttempts($conn);
                    if($attempts==true)
                    {
                        header("Location:forcedResetPassword.php");
                    }else{
                    loginAttempt($conn);
                    
                    if($_SESSION['count']==0){
                        $_SESSION['countAttempt']=2;
                    }else if($_SESSION['count']==1){
                        $_SESSION['countAttempt']=1;
                    }

                    $_SESSION['error_message']="Login Failed";
                    $_SESSION['error']="Password is not Correct (Remaining Attempts ". $_SESSION['countAttempt'].")";
                    $_SESSION['page']='login.php';
                    header("Location:error.php");
                    }
                }
            
            }
        }else{
            $attempts= checkAttempts($conn);
                    if($attempts==true)
                    {
                        header("Location:forcedResetPassword.php");
                    }else{
                    loginAttempt($conn);
                    
                    if($_SESSION['count']==0){
                        $_SESSION['countAttempt']=2;
                    }else if($_SESSION['count']==1){
                        $_SESSION['countAttempt']=1;
                    }

                    $_SESSION['error_message']="Login Failed";
                    $_SESSION['error']="Username is not Correct (Remaining Attempts ". $_SESSION['countAttempt'].")";
                    $_SESSION['page']='login.php';
                    header("Location:error.php");
            }
        }   
    }


?>