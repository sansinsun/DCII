<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "head.php";
    ?>
</head>
<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <?php
            include "nav.php";
        ?>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php
          include 'topbar.php';
        ?>
      <div class="container">
        <h1 class="text-center"><b>Add Event</b></h1>
        <form>
          <div class="form-group row">
            <label for="cuid" class="col-sm-2 col-form-label">Component Unique ID</label>
              <div class="col-sm-9">
                <input type="Text" class="form-control" id="cuid">
              </div>
          </div>	
          <div class="form-group row">
	        	<label for="loc" class="col-sm-2 col-form-label">Type Of Event</label>
            <div class="col-sm-4">
              <select class="form-control" id="event" placeholder="event">
                <option value="" selected disabled>Select Type of Event</option>
                <option>Repair</option>
                <option>Tighening</option>
                <option>Removal</option>
                <option>Failure</option>
                <option>Thermal Picture</option>
              </select>
            </div>
            <div class="input-group-prepend col-sm-1">
	        	<label for="loc" class="col-sm-2 col-form-label">Upload</label>
            </div>
            <div class="custom-file col-sm-4">
              <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Date Of Event</label>
            <div class="col-sm-4">
              <input type="date" class="form-control" id="date">
            </div>
          </div>
          
          <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#success" style="float:right; margin-right:90px; width:150px;">Submit</button>
          <button type="reset" class="btn btn-danger btn-md" style="float:right; margin-right:20px; width:150px;">Cancel</button>
        </form>
      </div>
     </div>
     <div id="success" class="modal fade">
        <div class="modal-dialog modal-confirm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
              <img src="img/complete.png" class="img-fluid"></img>
              <h1>Success!</h1>	
              <span>lorem ipsum sir dolor amet, consectetuer adipiscing elit.</span>
            </div>
          </div>
        </div>
      </div>   
      <div id="success" class="modal fade">
        <div class="modal-dialog modal-confirm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
              <img src="img/complete.png" class="img-fluid"></img>
              <h1>Success!</h1>	
              <span>lorem ipsum sir dolor amet, consectetuer adipiscing elit.</span>
            </div>
          </div>
        </div>
      </div>         
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
