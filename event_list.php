<!DOCTYPE html>
  <html lang="en">

  <head>
      <?php
          include 'head.php';
      ?>
  </head>
  <?php  
  $sumber_event = 'http://188.166.221.219:5000/api/events';
  $konten_event = file_get_contents($sumber_event);
  $data_event = json_decode($konten_event, true);
  

    
  $sumber_detail = 'http://188.166.221.219:5000/api/registry';
  $konten_detail = file_get_contents($sumber_detail);
  $data_detail = json_decode($konten_detail, true);
  

    
  $sumber_predict = 'http://188.166.221.219:5000/api/predictions';
  $konten_predict = file_get_contents($sumber_predict);
  $data_predict = json_decode($konten_predict, true);
  

   
  // $sumber_kode = 'http://localhost:5000/api/predictions/{code}';
  // $konten_kode = file_get_contents($sumber_kode);
  // $data_kode = json_decode($konten_kode, true);
  ?>
  <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
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

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Event History</h1>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <!-- DataTales Example -->
            <div class="card shadow mb-8">
              <div class="card-header py-4">
                <h6 class="m-0 font-weight-bold text-primary">Event History</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered display responsive  desktop" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr id="event_detail">
                        <th>Unique ID</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Type</th>
                        <th>Element</th>
                        <th>Date</th>
                        <th>Type of Event</th>
                        <th>Action</th>                      
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Unique ID</th>
                        <th>Building</th>
                        <th>Floor</th>
                        <th>Type</th>
                        <th>Element</th>
                        <th>Date</th>
                        <th>Type of Event</th>
                        <th>Action</th>

                      </tr>
                    </tfoot>
                    <tbody>
                    <?php   
                        for( $a=0; ($a < count($data_event) && $a < count($data_detail) && $a <count($data_predict)); $a++)
                        {
                          print "<tr>";
                          print "<td>".$data_event[$a]['Code']."</td>";
                          print "<td>".$data_detail[$a]['Building']."</td>";
                          print "<td>".$data_detail[$a]['Floor']."</td>";
                          print "<td>".$data_detail[$a]['Type']."</td>";
                          print "<td>".$data_detail[$a]['Cubicle']."</td>";
                          print "<td>".$data_event[$a]['Date']."</td>";
                          print "<td>".$data_event[$a]['Event']."</td>";
                          print '<td><button href="" data-key="'.$a.'" data-picture="'.$data_predict[$a]['Picture'].'" type="button" class="btn btn-success btn-md" onclick="showModal(this)">Detail</button>';
                          

                        print"</tr>";
                        }
                    ?>                

                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->

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


    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="">
          <img src="" class="img-fluid text-center" alt="" id="modal-event-picture">
          <form>
              
            <div class="form-group row">
              <div class="col-md-12 col-sm-12">
          
                </div>
            </div>
          </form>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>,
    
    <script>
      function showModal(e) {
        var dataset = e.dataset;
        $('#eventModal').modal('show');
        $('#eventModal').on('shown.bs.modal', function(e) {console.log(dataset)

          var picture_url = 'http://188.166.221.219/DCII/' + dataset.picture;
          $('#eventModal #modal-event-picture').attr('src', picture_url);
        });
      }

    </script>
   

  </body>

  </html>
