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
          <form id="addComponent">
            <div class="form-group row">
              <label for="loc" class="col-sm-2 col-form-label">Location</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="building" placeholder="Building">
              </div>
              <div class="col-sm-3">
                <select class="form-control" id="floor" placeholder="Floor">
                  <option value="" selected disabled>Floor</option>
                  <option>F1</option>
                  <option>F2</option>
                  <option>F3</option>
                  <option>F4</option>
                </select>
              </div>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="cabinet" placeholder="Cabinet">
              </div>
            </div>

            <div class="form-group row">
              <label for="type" class="col-sm-2 col-form-label">Type</label>
              <div class="col-sm-4">
                <select class="form-control" id="c_type">
                  <option value="" selected disabled></option>
                  <option>USB</option>
                  <option>UDB</option>
                  <option>DDP</option>
                </select>           
              </div>
              <label for="element" class="col-sm-1 col-form-label">Element</label>
              <div class="col-sm-4">
                <select class="form-control" id="Element" id="element">
                  <option value="" selected disabled></option>
                  <option>Metering & Indicators</option>
                  <option>Control</option>
                  <option>ACB Wiring</option>
                  <option>MCCB Wiring / Termination</option>
                  <option>Busbar Termination</option>
                  <option>Backside Termination</option>
                  <option>Incoming Outgoing</option>
                  <option>CT & V Tapping</option>           
                </select>         
              </div>
            </div>
            <div class="form-group row">
              <label for="date" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-4">
                <input type="date" class="form-control" id="date">
              </div>
            </div>
            <div class="form-group row">
              <label for="notes" class="col-sm-2 col-form-label">Notes</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="notes">
              </div>
            </div>
            <a href="#" onclick="document.getElementById('addComponent').submit();" type="button" id="submitComponent" class="btn btn-primary btn-md" style="float:right; margin-right:90px; width:150px;">Save</a>
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
    window.addEventListener( 'load', function () {

      // These variables are used to store the form data
      const text = document.getElementById( "building" );
      const text = document.getElementById( "floor" );
      const text = document.getElementById( "cabinet" );
      const text = document.getElementById( "c_type" );
      const text = document.getElementById( "element" );
      const text = document.getElementById( "theText" );
      const text = document.getElementById( "date" );
      const text = document.getElementById( "notes" );




      // Use the FileReader API to access file content

      // sendData is our main function
      function sendData() {
        // If there is a selected file, wait it is read
        // If there is not, delay the execution of the function
        if( !file.binary && file.dom.files.length > 0 ) {
          setTimeout( sendData, 10 );
          return;
        }

        // To construct our multipart form data request,
        // We need an XMLHttpRequest instance
        const XHR = new XMLHttpRequest();

        // We need a separator to define each part of the request
        const boundary = "blob";

        // Store our body request in a string.
        let data = "";

        // So, if the user has selected a file
        // Text data is simpler
        // Start a new part in our body's request
        data += "--" + boundary + "\r\n";

        // Say it's form data, and name it
        data += 'content-disposition: form-data; name="' + text.name + '"\r\n';
        // There's a blank line between the metadata and the data
        data += '\r\n';

        // Append the text data to our body's request
        data += text.value + "\r\n";

        // Once we are done, "close" the body's request
        data += "--" + boundary + "--";

        // Define what happens on successful data submission
        XHR.addEventListener( 'load', function( event ) {
          alert( 'Yeah! Data sent and response loaded.' );
        } );

        // Define what happens in case of error
        XHR.addEventListener( 'error', function( event ) {
          alert( 'Oops! Something went wrong.' );
        } );

        // Set up our request
        XHR.open( 'POST', 'http://localhost:5000/api/registry' );

        // Add the required HTTP header to handle a multipart form data POST request
        XHR.setRequestHeader( 'Content-Type','multipart/form-data; boundary=' + boundary );

        // And finally, send our data.
        XHR.send( data );
      }

      // Access our form...
      const form = document.getElementById( "addComponent" );

      // ...to take over the submit event
      form.getElementById("submitComponent").addEventListener( 'submit', function ( event ) {
        event.preventDefault();
        sendData();
      } );
      } );


  </script>
</body>
</html>
