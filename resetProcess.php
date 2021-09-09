<?php
include "db.php";
session_start();
if(isset($_POST['submit']))
{
    $new=$_POST['newPassword'];
    $confirm=$_POST['confirmPassword'];
    $code=$_POST['code'];
    if($new==$confirm)
    {
        $pass= password_hash($new, PASSWORD_DEFAULT);
        $query="update `users` set password='$pass' where email='admin_dashboard'";
        echo $query;
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query 1");
        $query="delete from `resetpassword` where code='$code';";
        echo $query;
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        $_SESSION['error_message']="Reset Password";
        $_SESSION['error']='Password SuccessFully Updated';
        $_SESSION['page']='login.php';
        header("Location:error.php");
    }
    else
    {
        echo "<script>alert('Password are not Same')</script>";
    }
}
?>