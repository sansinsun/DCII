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
              <label for="notes" class="col-sm-2 col-form-label">Unique ID</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="code">
              </div>
            </div>
            <div class="form-group row">
              
              <label for="loc" class="col-sm-2 col-form-label">Location</label>
              <div class="col-sm-2">
              <select class="form-control"  name="gedung"  id="gedung" placeholder="Building" required>
                  <option value="" selected disabled>Building</option>
                  <option value="OFFICE">OFFICE</option>
                  <option value="JK1">JK1</option>
                  <option>JK2</option>
                  <option>JK3</option>
                </select>                
              </div>
              <div class="col-sm-2">
                <select class="form-control"  name="lantai" id="lantai" placeholder="Floor" required>
                  <option value="" selected disabled>Floor</option>
                  <option data-value="OFFICE">Basement</option>
                  <option data-value="OFFICE">Ground Floor</option>
                  <option data-value="OFFICE">First Floor</option>
                  <option data-value="OFFICE">Second Floor</option>
                  <option data-value="OFFICE">Third Floor</option>
                  <option data-value="OFFICE">Roof Floor</option>

                  <option data-value="JK1">Ground Floor (JK1)</option>
                  <option data-value="JK1">Mezzanine Floor (JK1)</option>
                  <option data-value="JK1">First Floor (JK1)</option>
                  <option data-value="JK1">Second Floor (JK1)</option>
                  <option data-value="JK1">Third Floor (JK1)</option>
                  <option data-value="JK1">Roof Floor (JK1)</option>

                  
                  <option data-value="JK2">Ground Floor (JK2)</option>
                  <option data-value="JK2">Mezzanine Floor (JK2)</option>
                  <option data-value="JK2">First Floor (JK2)</option>
                  <option data-value="JK2">Second Floor (JK2)</option>
                  <option data-value="JK2">Third Floor (JK2)</option>
                  <option data-value="JK2">Roof Floor (JK2)</option>

                  <option data-value="JK3">Basement (JK3)</option>
                  <option data-value="JK3">Ground Floor (JK3)</option>
                  <option data-value="JK3">Mezzanine Floor (JK3)</option>
                  <option data-value="JK3">First Floor (JK3)</option>
                  <option data-value="JK3">Second Floor (JK3)</option>
                  <option data-value="JK3">Third Floor (JK3)</option>
                  <option data-value="JK3">Fourth Floor (JK3)</option>
                  <option data-value="JK3">Roof Floor (JK3)</option>


                </select>
              </div>
              <div class="col-sm-3">
                <select class="form-control"  name="room"  id="room"placeholder="Room" required>
                  <option data-value="Basement">Genset Room</option>
                  <option data-value="Basement">Warehouse</option>
                  <option data-value="Basement">NOC Room</option>
                  <option data-value="Basement">Storage B3</option>

                  <option data-value="Ground Floor">CSI Room</option>
                  <option data-value="Ground Floor">UPS Room Ground Floor</option>
                  <option data-value="Ground Floor">Enterprise Room</option>
                  <option data-value="Ground Floor">Operation Room</option>

                  <option data-value="First Floor">UPS Room Office 1st Floor</option>

                  <option data-value="Ground Floor (JK1)">Genset A Room</option>
                  <option data-value="Ground Floor (JK1)">JK1 Battery A Room</option>
                  <option data-value="Ground Floor (JK1)">JK1 Battery B Room</option>
                  <option data-value="Ground Floor (JK1)">Transformer A Room</option>
                  <option data-value="Ground Floor (JK1)">Transformer B Room</option>
                  <option data-value="Ground Floor (JK1)">Internal Network Room</option>
                  <option data-value="Ground Floor (JK1)">Old LOCC Room</option>

                  <option data-value="Mezzanine Floor (JK1)">Gas Suppresion System A Room</option>
                  <option data-value="Mezzanine Floor (JK1)">Gas Suppresion System B Room</option>
                  <option data-value="Mezzanine Floor (JK1)">UPS A Room</option>
                  <option data-value="Mezzanine Floor (JK1)">UPS B Room</option>
                  <option data-value="Mezzanine Floor (JK1)">MDF A Room</option>
                  <option data-value="Mezzanine Floor (JK1)">MDF B Room</option>

                  <option data-value="First Floor (JK1)">Data Hall 1A</option>
                  <option data-value="First Floor (JK1)">Data Hall 1B</option>
                  <option data-value="First Floor (JK1)">IDF 1A Room</option>
                  <option data-value="First Floor (JK1)">IDF 1B Room</option>

                  <option data-value="Second Floor (JK1)">Data Hall 2A</option>
                  <option data-value="Second Floor (JK1)">Data Hall 2B</option>
                  <option data-value="Second Floor (JK1)">IDF 2A Room</option>
                  <option data-value="Second Floor (JK1)">IDF 2B Room</option>

                  <option data-value="Third Floor (JK1)">Data Hall 3A</option>
                  <option data-value="Third Floor (JK1)">Data Hall 3B</option>
                  <option data-value="Third Floor (JK1)">IDF 3A Room</option>
                  <option data-value="Third Floor (JK1)">IDF 3B Room</option>

                  <option data-value="Ground Floor (JK2)">Genset A Room</option>
                  <option data-value="Ground Floor (JK2)">Genset B Room</option>
                  <option data-value="Ground Floor (JK2)">JK2 Battery A Room</option>
                  <option data-value="Ground Floor (JK2)">JK2 Battery B Room</option>
                  <option data-value="Ground Floor (JK2)">JK2 Corridor A</option>
                  <option data-value="Ground Floor (JK2)">JK2 Corridor B</option>

                  <option data-value="Ground Floor (JK2)">MDF A Room</option>
                  <option data-value="Ground Floor (JK2)">MDF B Room</option>
                  <option data-value="Ground Floor (JK2)">MV A Room</option>
                  <option data-value="Ground Floor (JK2)">MV B Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer A01 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer A02 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer A03 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer A04 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer A05 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer B01 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer B02 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer B03 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer B04 Room</option>
                  <option data-value="Ground Floor (JK2)">Transformer B05 Room</option>
                  <option data-value="Ground Floor (JK2)">LOCC Room</option>

                  <option data-value="Mezzanine Floor (JK2)">CRAC Corridor A</option>
                  <option data-value="Mezzanine Floor (JK2)">CRAC Corridor B</option>
                  <option data-value="Mezzanine Floor (JK2)">UPS-A Room</option>
                  <option data-value="Mezzanine Floor (JK2)">UPS-B Room</option>
                  <option data-value="Mezzanine Floor (JK2)">Gas Suppression System A Room</option>
                  <option data-value="Mezzanine Floor (JK2)">Gas Suppression System B Room</option>

                  <option data-value="First Floor (JK2)">Corridor 1D</option>
                  <option data-value="First Floor (JK2)">Data Hall 1D</option>

                  <option data-value="Second Floor (JK2)">Corridor 2D</option>
                  <option data-value="Second Floor (JK2)">Data Hall 2D</option>

                  <option data-value="Third Floor (JK2)">Corridor 3D</option>
                  <option data-value="Third Floor (JK2)">Data Hall 3D</option>

                  <option data-value="Ground Floor (JK3)">Corridor A</option>
                  <option data-value="Ground Floor (JK3)">Corridor B</option>
                  <option data-value="Ground Floor (JK3)">LVMDP Room A</option>
                  <option data-value="Ground Floor (JK3)">LVMDP Room B</option>
                  <option data-value="Ground Floor (JK3)">MDF Room A</option>
                  <option data-value="Ground Floor (JK3)">MDF Room B</option>
                  <option data-value="Ground Floor (JK3)">MVP A</option>
                  <option data-value="Ground Floor (JK3)">MVP B</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room A01</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room A02</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room A03</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room A04</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room B01</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room B02</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room B03</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room B04</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room CH1</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room CH2</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room CH3</option>
                  <option data-value="Ground Floor (JK3)">Transformer Room CH4</option>
                  <option data-value="Ground Floor (JK3)">Chiller Room</option>
                  <option data-value="Ground Floor (JK3)">MCC Panel Room</option>
                  <option data-value="Ground Floor (JK3)">Staging Room</option>
                  <option data-value="Ground Floor (JK3)">Storrage Room 1</option>
                  <option data-value="Ground Floor (JK3)">Storrage Room 2</option>
                  <option data-value="Ground Floor (JK3)">LOCC</option>

                  <option data-value="Mezzanine Floor (JK3)">Battery Room A (JK3)</option>
                  <option data-value="Mezzanine Floor (JK3)">Battery Room B (JK3)</option>
                  <option data-value="Mezzanine Floor (JK3)">UPS-A Room</option>
                  <option data-value="Mezzanine Floor (JK3)">UPS-B Room</option>

                  <option data-value="Basement (JK3)"> Fuel Storage 1</option>
                  <option data-value="Basement (JK3)"> Fuel Storage 2</option>
                  <option data-value="Basement (JK3)"> Fuel Storage 3</option>
                  <option data-value="Basement (JK3)"> Fuel Storage 4</option>
                  <option data-value="Basement (JK3)">Fire Pump Room</option>
                  <option data-value="Basement (JK3)">Gas Suppression Room</option>
                  <option data-value="Basement (JK3)">MUWP Room</option>

                  <option data-value="First Floor (JK3)">Corridor AHU (1st Floor)</option>
                  <option data-value="First Floor (JK3)">Data Hall (1st Floor)</option>

                  <option data-value="Second Floor (JK3)">Corridor AHU (2nd Floor)</option>
                  <option data-value="Second Floor (JK3)">Data Hall (2nd Floor)</option>

                  <option data-value="Fourth Floor (JK3)">Corridor AHU (4th Floor)</option>
                  <option data-value="Fourth Floor (JK3)">Data Hall (4th Floor)</option>

                  <option data-value="Roof (JK3)">CPG Room (JK3)</option>







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
                  <option>CRAC</option>
                  <option>Panel</option>
                  <option>Genset</option>
                  <option>Battery</option>
                  <option>Transformer</option>
                  <option>UPS</option>
                  <option>Chiller</option>
                  <option>Pump</option>
                  <option>Cooling Tower</option>
                  <option>Dehumidifier</option>
                  <option>Elevator</option>
                  <option>AHU</option>
                  <option>Equipment</option>
                  <option>USB</option>
                  <option>UDB</option>
                  <option>PDU</option>
                  <option>UDU</option>
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
  <script>
   $("#gedung").change(function() {
  if ($(this).data('options') == undefined) {
    $(this).data('options', $('#lantai option').clone());
  }
  var id = $(this).val();
  var options = $(this).data('options').filter('[data-value="' + id + '"]');
  $('#lantai').html(options).show();
});


$("#lantai").change(function() {
  if ($(this).data('options') == undefined) {
    $(this).data('options', $('#room option').clone());
  }
  var id = $(this).val();
  var options = $(this).data('options').filter('[data-value="' + id + '"]');
  $('#room').html(options).show();
});

  </script>
</body>
</html>
