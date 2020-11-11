<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include 'head.php';
    ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <?php
            include 'nav.php';
        ?>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <?php
            include 'topbar.php';
        ?>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          

          <!-- Content Row -->
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Component Detail</h6>
                </div>
                <div class="card-body">
                <?php 
                  include 'list.php';
                ?>
                </div>
              </div>

          </div>
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">CURRENT BREAKDOWN BY COMPONENT TYPE AND RISK</h6>
                </div>
                <canvas id="RiskChart"></canvas>

               </div>
            </div>

            <div class="col-lg-6 mb-4">
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Historical Risk</h6>
                </div>
                <canvas id="HistoricalChart"></canvas>
               </div>
            </div>      
        </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="js/chartjs-plugin-datalabels.js"></script>
  <script src="js/chartjs-plugin-datalabels.min"></script>
  <script src="js/utils.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



  <script>
  var ctx = document.getElementById('RiskChart');

  var chart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: ['PDU', 'UDB', 'UDU', 'USB'], // responsible for how many bars are gonna show on the chart
      // create 12 datasets, since we have 12 items
      // data[0] = labels[0] (data for first bar - 'Standing costs') | data[1] = labels[1] (data for second bar - 'Running costs')
      // put 0, if there is no data for the particular bar
      datasets: [{
         label: 'Low',
         data: [20, 40,15,10],
         backgroundColor: '#00FF00'
      }, {
         label: 'Medium',
         data: [100, 70,60,75],
         backgroundColor: '#FF8C00'
      }, {
         label: 'High',
         data: [120, 140,125,130],
         backgroundColor: '#FF0000'
      },
      ]
   },
   options: {
      responsive: false,
      legend: {
         position: 'right' // place legend on the right side of chart
      },
      scales: {
         xAxes: [{
            stacked: true // this should be set to make the bars stacked
         }],
         yAxes: [{
            stacked: false // this also..
         }]
      }
   }
});


</script>

<script>
  var ctx = document.getElementById('HistoricalChart');

  var chart = new Chart(ctx, {
   type: 'bar',
   data: {
      labels: ['PDU', 'UDB', 'UDU', 'USB'], // responsible for how many bars are gonna show on the chart
      // create 12 datasets, since we have 12 items
      // data[0] = labels[0] (data for first bar - 'Standing costs') | data[1] = labels[1] (data for second bar - 'Running costs')
      // put 0, if there is no data for the particular bar
      datasets: [{
         label: 'Low',
         data: [20, 40,15,10],
         backgroundColor: '#00FF00'
      }, {
         label: 'Medium',
         data: [100, 70,60,75],
         backgroundColor: '#FF8C00'
      }, {
         label: 'High',
         data: [120, 140,125,130],
         backgroundColor: '#FF0000'
      },
      ]
   },
   options: {
      responsive: false,
      legend: {
         position: 'right' // place legend on the right side of chart
      },
      scales: {
         xAxes: [{
            stacked: true // this should be set to make the bars stacked
         }],
         yAxes: [{
            stacked: false // this also..
         }]
      }
   }
});


</script>

	

	
</body>

</html>
