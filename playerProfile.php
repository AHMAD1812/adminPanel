<?php 
session_start();

if(!isset($_SESSION['name'])){
  header('Location:login.php');
}

if(isset($_GET['playerId'])){
  $url="http://localhost:8090/intenship/admin_panel/api/playerApi.php?playerId=".$_GET['playerId'];
  $ch=curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
  $result=curl_exec($ch);
  curl_close($ch);
  $result=json_decode($result,true);
  if(isset($result['result'])){
      if($result['result']=='Found'){
          

          



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
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/playerStyle.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
          .scroll{
    max-height: 400px; 
    overflow-y: scroll;
  }
      .scroll::-webkit-scrollbar {
      width: 12px;               /* width of the entire scrollbar */
    }

    .scroll::-webkit-scrollbar-track {
       background: black;        /* color of the tracking area */
    }

    .scroll::-webkit-scrollbar-thumb {
      background-color: #5E50F9;    /* color of the scroll thumb */
      border-radius: 20px;       /* roundness of the scroll thumb */
      border: 3px solid black;  /* creates padding around scroll thumb */
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     <?php include "menu.php"?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <?php include "navbar.php" ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2> Player Profile</h2>
            </div>
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="profileCard pb-4">
                <div class="profileCard-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php print_r($result['data']['pic'])?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php print_r($result['data']['name'])?></h4>
                      <p class="text-info mb-1">Ranks: 
                      <?php 
                      foreach($result['data']['rank'] as $key=>$value)
                      {
                        echo $key."   ";
                      }
                      ?>
                      </p>
                      <p class="text-primary font-size-sm mt-3">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Update</button>
                      <button class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0 text-dark">Rank Level</h6>
                    <span class="text-dark text-right">
                      <?php
                      foreach($result['data']['rank'] as $key=>$value)
                      {
                        echo $key."   ";
                      }
                      ?>
                    </span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0 text-dark">Rank Power</h6>
                    <span class=" text-dark"><?php print_r($result['data']['rankPower'])?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0  text-dark">Avaliable Token</h6>
                    <span class="text-dark"><?php print_r($result['data']['tokens'])?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0 text-dark">Total Wins Percentage</h6>
                    <span class="text-dark"><?php print_r(round($result['data']['wins'],2))?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="profileCard mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-info">
                    <?php print_r($result['data']['name'])?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-info">
                    <?php print_r($result['data']['email'])?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-info">
                    <?php print_r($result['data']['phone'])?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-info">
                      <?php print_r($result['data']['address']);?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Media Links</h6>
                    </div>
                    <div class="col-sm-9 text-info">
                    <?php
                      foreach($result['data']['mediaLinks'] as $value)
                      {
                        echo $value['mediaType']." : ".$value['link']."<br>";
                      }
                      ?>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-2">
                  <div class="profileCard h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Player Game Stats</h6>
                      <small>Rank Power</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($result['data']['rankPower'])?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Combo Damage</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($result['data']['comboDamage'])?>%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Weapons Demage</small>
                      <div class="progress mb-1" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($result['data']['weaponDamage'])?>%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-2">
                  <div class="profileCard h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Game Stats</h6>
                      <small>Winning Percentage</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width:<?php print_r($result['data']['wins'])?>%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Losing Percentage</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width:<?php print_r($result['data']['lose'])?>%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Drawing Percentage</small>
                      <div class="progress mb-1" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?php print_r($result['data']['draw'])?>%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
          </div>

            <div class="row">
              <div class="col-md-4 grid-margin stretch-card scroll mt-5">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h2 class="card-title" style="margin-top:-30px;">Recent Matches</h2>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <img class="rounded-circle" src="assets/images/faces/face2.jpg" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Game Played</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Game Played</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Game Played</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Game Played</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Game Played</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card scroll mt-5">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h2 class="card-title" style="margin-top:-30px;">Game WithDraws</h2>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <?php 
                          foreach($result['data']['withdraw'] as $value)
                          {
                          ?>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <img class="rounded-circle" src="<?php echo $result['data']['pic'];?>" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject"><?php echo $result['data']['name'];?></h6>
                                <p class="text-muted mb-0"><?php echo $value['amount']?></p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted"><?php echo $value['time']?></p>
                              </div> 
                            </div>
                          </div>
                          <?php
                        }
                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card scroll mt-5">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h2 class="card-title" style="margin-top:-30px;">In-App Purchases</h2>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <img class="rounded-circle" src="assets/images/faces/face2.jpg" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Item Purchased</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Item Purchased</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Item Purchased</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Item Purchased</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Item Purchased</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


       <?php
              
              }else{
                $_SESSION['error_message']="404";
                $_SESSION['error']="Player Profile Doesn't exit";
                header("Location:error.php");
              }
          }else{
            $_SESSION['error']="Player Profile Doesn't exit";
            $_SESSION['error_message']="404";
            header("Location:error.php");
          }
        }else{
          $_SESSION['error']="Please Provide Enter Correct Data";
          $_SESSION['error_message']="404";
          header("Location:error.php");
        }
       ?>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">By Zam Studios</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>