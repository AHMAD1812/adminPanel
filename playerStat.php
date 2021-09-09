<?php 
session_start();

if(!isset($_SESSION['name'])){
  header('Location:login.php');
}
$_SESSION['page']="playerStat.php";
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
        <?php include "navbar.php" ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2> Player Statics </h2>
            </div>
            <div class="row">
              <div class="col-10 mt-0">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ranks</h4>
                    <canvas id="barChart" height="100" ></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Players LeaderBoard</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Rank </th>
                            <th> User </th>
                            <th> Wining % </th>
                            <th> WidthDraws </th>
                            <th> Tokens </th>
                            <th> Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-0">
                              <img src="assets/images/character/1.png" alt="image" />
                            </td>
                            <td>
                                <img src="assets/images/faces/face9.jpg" alt="image" />
                                 Herman Beck </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> 20 </td>
                            <td><a href="playerProfile.php?playerId=33" class="btn btn-info">View More</a> </td>
                          </tr>
                          <tr>
                            <td class="py-0">
                              <img src="assets/images/character/2.png" alt="image" />
                            </td>
                            <td>
                                <img src="assets/images/faces/face7.jpg" alt="image" />
                                 Steve Fin </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 57.99 </td>
                            <td> 10 </td>
                            <td><a href="playerProfile.php?playerId=2" class="btn btn-info">View More</a> </td>
                          </tr>
                          <tr>
                            <td class="py-0">
                              <img src="assets/images/character/3.png" alt="image" />
                            </td>
                            <td>
                                <img src="assets/images/faces/face12.jpg" alt="image" />
                                 Holder </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> 20 </td>
                            <td><a href="" class="btn btn-info">View More</a> </td>
                          </tr>
                          <tr>
                            <td class="pl-4">
                              4
                            </td>
                            <td>
                                <img src="assets/images/faces/face14.jpg" alt="image" />
                                 Williamson </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 69%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 37.99 </td>
                            <td> 18 </td>
                            <td><a href="" class="btn btn-info">View More</a> </td>
                          </tr>
                          <tr>
                            <td class="pl-4">
                              5
                            </td>
                            <td>
                                <img src="assets/images/faces/face15.jpg" alt="image" />
                                 Robbinson </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> 20 </td>
                            <td><a href="" class="btn btn-info">View More</a> </td>
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
    <script>
        $(document).ready(function() {
  /* ChartJS
   * -------
   * Data and config for chartjs
   */
  'use strict';
  var data = {
    labels: ["Rank 1", "Rank 2", "Rank 3", "Rank 4", "Rank 5", "Rank 6","Rank 7", "Rank 8", "Rank 9"],
    datasets: [{
      label: '# of Player ',
      data: [10, 12, 11, 5, 8, 13, 8, 2, 4],
      backgroundColor: [
        'rgba(54, 162, 235, 0.8)',
        'rgba(75, 192, 192, 0.8)',
        'rgba(102, 115, 232, 0.8)',
        'rgba(191, 102, 250, 0.8)',
        'rgba(250, 102, 102, 0.8)',
        'rgba(119, 214, 24, 0.8)',
        'rgba(24, 214, 157, 0.8)',
        'rgba(143, 86, 166, 0.8)',
        'rgba(75, 192, 192, 0.8)'
      ],
      borderColor: [
        'rgba(54, 162, 235,1)',
        'rgba(75, 192, 192, 1)',
        'rgba(102, 115, 232, 1)',
        'rgba(191, 102, 250, 1)',
        'rgba(250, 102, 102, 1)',
        'rgba(119, 214, 24, 1)',
        'rgba(24, 214, 157, 1)',
        'rgba(143, 86, 166, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          max: 18,
          min: 0
        },
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }],
      xAxes: [{
        barPercentage: 0.5,
        gridLines: {
          color: "rgba(204, 204, 204,0.1)"
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 9
      }
    }
  };

  // Get context with jQuery - using jQuery's .get() method.
  if ($("#barChart").length) {
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: data,
      options: options
    });
  }
});
    </script>
    <!-- End custom js for this page -->
  </body>
</html>