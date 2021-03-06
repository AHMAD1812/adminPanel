<?php 
session_start();

if(isset($_SESSION['name'])){
  header('Location:index.php');
}
require_once('db.php');
$_SESSION['page']="login.php";
if(!isset($_GET['code']))
{
    $_SESSION['error_message']="404";
    $_SESSION['error']='Wrong Path';
    $_SESSION['page']='login.php';
    header("Location:error.php");
}
$code=$_GET['code'];
$sql=mysqli_query($conn,"SELECT * FROM `resetpassword` where code='$code'");
if(mysqli_num_rows($sql)==0)
{
    $_SESSION['error_message']="Reset Password";
    $_SESSION['error']='Code is not Correct';
    $_SESSION['page']='login.php';
    header("Location:error.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Reset Password</h3>
                <form method="post" action="resetProcess.php">
                  <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="newPassword" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="confirmPassword" class="form-control p_input"  required>
                    <input type="hidden" value="<?php echo $_GET['code'];?>" name="code" class="form-control p_input"  required>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block enter-btn">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>