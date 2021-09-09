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
    
    .purchase-table thead th{
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
              <h2> In-App Purchases Management </h2>
            </div>
            <div class="row">
              <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Purchase Management</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table purchase-table">
                        <thead>
                          <tr>
                            <th>Items</th>
                            <th>Values</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Token Values</td>
                            <td>300</td>
                            <td><button class="btn btn-primary" id="token">Update</button></td>
                          </tr>
                          <tr>
                            <td>Weapons</td>
                            <td>1000</td>
                            <td><button class="btn btn-primary" id="weapons">Update</button></td>
                          </tr>
                          <tr>
                            <td>Hero Costumes</td>
                            <td>20</td>
                            <td><button class="btn btn-primary" id="Herocostumes">Update</button></td>
                          </tr>
                          <tr>
                          <td>Maps</td>
                            <td>9</td>
                            <td><button class="btn btn-primary" id="Maps">Update</button></td>
                          </tr>
                          <tr>
                            <td>Hero Talents</td>
                            <td>100</td>
                            <td><button class="btn btn-primary" id="herotalent">Update</button></td>
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
                      <h3 class="card-title" >Recent Purchases</h3>
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
        </div>
  
  <!--Model Box for Updation!-->
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
    <script>
      $(document).ready(function(){
        $("#herotalent").click(function(){
          $("#myModal").modal();
          $("#formType").val("herotalent");
          $("#updationType").text("Hero Talent");
        });

        $("#Maps").click(function(){
          $("#myModal").modal();
          $("#formType").val("maps");
          $("#updationType").text("Maps");
        });

        $("#Herocostumes").click(function(){
          $("#myModal").modal();
          $("#formType").val("heros");
          $("#updationType").text("Hero Costumes");
        });

        $("#weapons").click(function(){
          $("#myModal").modal();
          $("#formType").val("weapon");
          $("#updationType").text("Weapons");
        });

        $("#token").click(function(){
          $("#myModal").modal();
          $("#formType").val("token");
          $("#updationType").text("Token Value");
        });
      });
    </script>
    <!-- End custom js for this page -->
  </body>
</html>