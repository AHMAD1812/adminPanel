<?php 
session_start();
include "db.php";
if(!isset($_SESSION['name'])){
  header('Location:login.php');
}
$ip_address=getIPAdress();
mysqli_query($conn,"delete from `loginlogs` where `iPaddress`='$ip_address'");

$_SESSION['errorPage']="main";
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
        <?php include "navbar.php"; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Active Users</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">120</h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"></h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-account-check text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Total Live Loot Matches</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">90</h2>
                          <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"></h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-gamepad-variant text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h5>Ready to Loot Players</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0">30</h2>
                          <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                        </div>
                        <h6 class="text-muted font-weight-normal"></h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-read text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="padding-left:0px;">
              <div class="col-md-8">
                <h2 class="text-center pb-4" >TOP AGENTS/PLAYERS</h2>
              <div class="row">
              <div class="card" style="width: 14rem;">
                <img class="card-img-top" src="assets/images/character/ch2.png" alt="Card image cap">
                <div class="card-body">
                  <h3 class="text-center">Name</h3>
                  <p class="card-text">No of Games</p>
                </div>
              </div>
              <div class="card" style="width:14rem;">
                <img class="card-img-top" src="assets/images/character/ch1.png" alt="Card image cap">
                <div class="card-body">
                <h3 class="text-center">Name</h3>
                  <p class="card-text">No of Games</p>
                </div>
              </div>
              <div class="card" style="width: 14rem;">
                <img class="card-img-top" src="assets/images/character/ch3.png" alt="Card image cap">
                <div class="card-body">
                <h3 class="text-center">Name</h3>
                  <p class="card-text">No of Games</p>
                </div>
              </div>
             </div>
             <div class="row">
               <div class="col text-center">
                  <button type="button" class="btn btn-info btn-rounded btn-fw">More <i class="mdi mdi-arrow-right-bold"></i></button>
               </div>
             </div>
            </div>
              <div class="col-md-4 grid-margin stretch-card scroll">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h2 class="card-title" style="margin-top:-30px;">Live Players</h2>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <img class="rounded-circle" src="assets/images/faces/face2.jpg" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Rank</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <img class="rounded-circle" src="assets/images/faces/face2.jpg" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Rank</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <img class="rounded-circle" src="assets/images/faces/face2.jpg" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Rank</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                               <img class="rounded-circle" src="assets/images/faces/face2.jpg" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Rank</p>
                              </div>
                              <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted">time</p>
                              </div> 
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary" style="border-radius:20px;">
                                <img class="rounded-circle" src="assets/images/faces/face2.jpg" >
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Name</h6>
                                <p class="text-muted mb-0">Rank</p>
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
           </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Players</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Pic </th>
                            <th> Name </th>
                            <th> Rank Level </th>
                            <th> Rank Power % </th>
                            <th> Winning % </th>
                            <th> Total Withdraw</th>
                            <th> Tokens  </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" alt="image" />
                            </td>
                            <td>
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td> Level 2 </td>
                            <td> 30% </td>
                            <td> 50%</td>
                            <td> 70% </td>
                            <td> 12 </td>
                            <td>
                            <a href="playerProfile.php?playerId=1"><button type="button" class="btn btn-outline-info">Details</button></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                               <img src="assets/images/faces/face2.jpg" alt="image" />
                            </td>
                            <td>
                              <span class="pl-2">Estella Bryan</span>
                            </td>
                            <td> Level 1 </td>
                            <td> 40% </td>
                            <td> 54%</td>
                            <td> 71% </td>
                            <td> 15 </td>
                            <td>
                            <a href="playerProfile.php?playerId=1"><button type="button" class="btn btn-outline-info">Details</button></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                               <img src="assets/images/faces/face5.jpg" alt="image" />
                            </td>
                            <td> 
                              <span class="pl-2">Lucy Abbott</span>
                            </td>
                            <td> Level 3 </td>
                            <td> 60% </td>
                            <td> 53%</td>
                            <td> 62% </td>
                            <td> 22 </td>
                            <td>
                            <a href="playerProfile.php?playerId=1"><button type="button" class="btn btn-outline-info">Details</button></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face3.jpg" alt="image" />
                            </td>
                            <td>
                              <span class="pl-2">Peter Gill</span>
                            </td>
                            <td> Level 2 </td>
                            <td> 32% </td>
                            <td> 56%</td>
                            <td> 60% </td>
                            <td> 13 </td>
                            <td>
                            <a href="playerProfile.php?playerId=1"><button type="button" class="btn btn-outline-info">Details</button></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face4.jpg" alt="image" />
                            </td>
                            <td>
                              
                              <span class="pl-2">Sallie Reyes</span>
                            </td>
                            <td> Level 1 </td>
                            <td> 32% </td>
                            <td> 34%</td>
                            <td> 55% </td>
                            <td> 19 </td>
                            <td>
                            <a href="playerProfile.php?playerId=1"><button type="button" class="btn btn-outline-info">Details</button></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
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
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>