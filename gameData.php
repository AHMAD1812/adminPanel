<?php 
session_start();

if(!isset($_SESSION['name'])){
  header('Location:login.php');
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
    /* .purchase-table{
      border:1px solid #8f5fe8 !important;
    } */
    .purchase-table-game td{
      font-weight: 300;
      color: white !important;
    }
    .purchase-table-game th{
      font-weight: 500;
      color:  #8f5fe8 !important;
    }
    .purchase-table thead th{
        font-size:15px;
    }

    .purchase-table-game thead th{
        font-size:20px;
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
        <?php include "navbar.php"?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2> Game Data </h2>
            </div>
          <div class="row" style="margin-top:-30px;">
            <div class="col-md-12 mt-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-2 item">
                          <i class="mdi mdi-login mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted" style="font-size:20px;">Active User</small>
                            <h5 class="mr-2 mb-0">$577545</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-wifi mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted" style="font-size:20px;">Live Matches</small>
                            <h5 class="mr-2 mb-0">9833550</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted" style="font-size:20px;">Active Lobby User</small>
                            <h5 class="mr-2 mb-0">3497843</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted" style="font-size:20px;">Downloads</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Withdraw Requests</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table purchase-table">
                        <thead>
                          <tr>
                            <th>UserName</th>
                            <th>WithDraw Amount</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" alt="image" />
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <a href="" class="btn btn-info">Message</a>
                              <a href="" class="btn btn-success">Accept</a>
                              <a href="" class="btn btn-danger">Deny</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" alt="image" />
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <a href="" class="btn btn-info">Message</a>
                              <a href="" class="btn btn-success">Accept</a>
                              <a href="" class="btn btn-danger">Deny</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" alt="image" />
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <a href="" class="btn btn-info">Message</a>
                              <a href="" class="btn btn-success">Accept</a>
                              <a href="" class="btn btn-danger">Deny</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" alt="image" />
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <a href="" class="btn btn-info">Message</a>
                              <a href="" class="btn btn-success">Accept</a>
                              <a href="" class="btn btn-danger">Deny</a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="assets/images/faces/face1.jpg" alt="image" />
                              <span class="pl-2">Henry Klein</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <a href="" class="btn btn-info">Message</a>
                              <a href="" class="btn btn-success">Accept</a>
                              <a href="" class="btn btn-danger">Deny</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>              
              <div class="col-lg-4 grid-margin stretch-card scroll">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h3 class="card-title" >Promotion Purchases</h3>
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
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage GamePlay Data</h4>
                    </p>
                    <div class="row">
                    <div class="col-6 table-responsive">
                      <table class="table purchase-table-game">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Value</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <span class="pl-1">Rank Values</span>
                            </td>
                            <td>1, 2, 3, 4, 5 ,6</td>
                            <td class="pf2">
                              <button class="btn btn-info" id="rankValue">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank Powers %</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info" id="rankPercentage">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank Weapon Damage %</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info rankWeapon">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank Effects Colors</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info" id="rankColor">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank UI</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info rankUI">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank Belt Icon</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info rankBelt">Update</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-6 table-responsive">
                      <table class="table purchase-table-game">
                        <thead style="font-size:35px !important; ">
                          <tr>
                            <th>Name</th>
                            <th>Value</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <span class="pl-1">Combo Damage %,</span>
                            </td>
                            <td>20%</td>
                            <td class="pf2">
                              <button class="btn btn-info" id="comboDamage">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Combo Mana Recharge</span>
                            </td>
                            <td>200</td>
                            <td class="pf2">
                              <button class="btn btn-info" id="comboRecharge">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank Weapon Damage %</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info rankWeapon" >Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">User Winning Price %</span>
                            </td>
                            <td>300</td>
                            <td class="pf2">
                              <button class="btn btn-info" id="userWinning">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank UI</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info rankUI">Update</button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <span class="pl-1">Rank Belt Icon</span>
                            </td>
                            <td>53275531</td>
                            <td class="pf2">
                              <button class="btn btn-info rankBelt">Update</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  </div>
                </div>
              </div>              
            </div>
           </div>
         
           <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
          <div class="modal-content">
            <div class="modal-header">	
              <h4 class="modal-title">Update Value</h4>	
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="mdi mdi-close-circle-outline text-primary"></i>
                  </button>
            </div>
            <div class="modal-body">
              <form action="updateInApp.php" method="post">
                <div class="form-group">
                  <label id="updationType"></label>
                  <input type="text" class="form-control" name="update" placeholder="Enter value" required="required">	
                  <input type="hidden" class="form-control" name="updationType" id="formType">			
                </div>       
                <div class="form-group">
                  <button type="submit" class="btn btn-info btn-lg btn-block login-btn">Update</button>
                </div>
              </form>
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
          
        <!-- main-panel ends -->
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
    <script>
      $(document).ready(function(){
        $("#rankValue").click(function(){
          $("#myModal").modal();
          $("#formType").val("rankValue");
          $("#updationType").text("Rank Value");
        });

        $("#rankPercentage").click(function(){
          $("#myModal").modal();
          $("#formType").val("rankPercentage");
          $("#updationType").text("Rank Power Percentage");
        });

        $(".rankWeapon").click(function(){
          $("#myModal").modal();
          $("#formType").val("rankWeapon");
          $("#updationType").text("Rank Weapon Damage");
        });

        $("#rankColor").click(function(){
          $("#myModal").modal();
          $("#formType").val("rankColor");
          $("#updationType").text("Rank Color");
        });

        $(".rankUI").click(function(){
          $("#myModal").modal();
          $("#formType").val("rankUI");
          $("#updationType").text("Rank UI");
        });

        $(".rankBelt").click(function(){
          $("#myModal").modal();
          $("#formType").val("rankBelt");
          $("#updationType").text("Rank Belt");
        });

        $("#comboRecharge").click(function(){
          $("#myModal").modal();
          $("#formType").val("comboRecharge");
          $("#updationType").text("Combo Damge Recharge");
        });

        $("#userWinning").click(function(){
          $("#myModal").modal();
          $("#formType").val("userWinning");
          $("#updationType").text("User Winnig Price Values");
        });

        $("#comboDamage").click(function(){
          $("#myModal").modal();
          $("#formType").val("comboDamage");
          $("#updationType").text("Combo Damge");
        });
      });
    </script>
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>