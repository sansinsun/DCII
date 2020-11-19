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
        <h1 class="text-center"><b>Add new Component</b></h1>
          <form  method="POST" action="post_component.php">
            <div class="form-group row">
              <label for="loc" class="col-sm-2 col-form-label">Location</label>
              <div class="col-sm-2">
              <select class="form-control"  name="gedung" placeholder="Building" required>
                  <option value="" selected disabled>Building</option>
                  <option>OFFICE</option>
                  <option>JK1</option>
                  <option>JK2</option>
                  <option>JK3</option>
                </select>                
              </div>
              <div class="col-sm-2">
                <select class="form-control"  name="lantai" placeholder="Floor" required>
                  <option value="" selected disabled>Floor</option>
                  <option>F1</option>
                  <option>F2</option>
                  <option>F3</option>
                  <option>F4</option>
                </select>
              </div>
              <div class="col-sm-3">
                <select class="form-control"  name="room" placeholder="Room" required>
                  <option value="" selected disabled>Room</option>
                  <option>F1</option>
                  <option>F2</option>
                  <option>F3</option>
                  <option>F4</option>
                </select>
              </div>
              <div class="col-sm-2">
              <select class="form-control"  name="cabinet" placeholder="Cabinet" required>
              <option value="" selected disabled>Cubicle</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                </select>              
              </div>
            </div>

            <div class="form-group row">
              <label for="type" class="col-sm-2 col-form-label" >Type</label>
              <div class="col-sm-4">
                <select class="form-control" name="c_type" required>
                  <option value="" selected disabled></option>
                  <option>USB</option>
                  <option>UDB</option>
                  <option>DDP</option>
                </select>           
              </div>
              <label for="element" class="col-sm-1 col-form-label">Element</label>
              <div class="col-sm-4">
                <select class="form-control"  name="element" required>
                  <option value="" selected disabled></option>
                  <option>Metering</option>
                  <option>Indicators</option>
                  <option>Control</option>
                  <option>ACB Wiring</option>
                  <option>MCBB Wiring / Termination</option>
                  <option>Busbar Termination</option>
                  <option>Incoming & Outgoing Cable Termination</option>
                  <option>CT & VT Tapping</option>           
                  <option>MCB Termination</option>
                  <option>Contactor</option>
                  <option>Termination</option>
                  <option>Cable & Connection</option>
                </select>           
              </div>
            </div>
            <div class="form-group row">
              <label for="date" class="col-sm-2 col-form-label" name="installDate" required>Installation Date</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" name="date">
              </div>
            </div>
            <div class="form-group row">
              <label for="notes" class="col-sm-2 col-form-label">Notes</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="notes">
              </div>
            </div>

            <button type="submit" data-toggle="modal" data-target="#success" class="btn btn-primary btn-md"  style="float:right; margin-right:90px; width:150px;">Save</a>
            <button type="reset" class="btn btn-danger btn-md" style="float:right; margin-right:20px; width:150px;">Reset</button>
          
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
