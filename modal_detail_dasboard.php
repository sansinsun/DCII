<div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="dashboardModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UpdateModal">Update Component</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
            <label for="cuid" class="col-sm-2 col-form-label">Component Unique ID</label>
              <div class="col-sm-9">
                <input type="Text" class="form-control" id="cuid">
              </div>
          </div>	
          <div class="form-group row">
	        	<label for="loc" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="building" placeholder="Building">
            </div>
            <div class="col-sm-3">
              <select class="form-control" id="Floor" placeholder="Floor">
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
              <select class="form-control" id="Type">
                <option value="" selected disabled></option>
                <option>USB</option>
                <option>UDB</option>
                <option>DDP</option>
              </select>           
            </div>
            <label for="element" class="col-sm-1 col-form-label">Element</label>
            <div class="col-sm-4">
              <select class="form-control" id="Element">
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
            <div class="col-sm-5">
              <input type="date" class="form-control" id="date">
            </div>
          </div>
          <div class="form-group row">
            <label for="notes" class="col-sm-2 col-form-label">Notes</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="notes">
            </div>
          </div>
         
          <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal" style="float:right;  width:150px;">Save</button>
          <button type="reset" class="btn btn-danger btn-md" style="float:right; margin-right:20px; width:150px;">Reset</button>

        </form>
      </div>
     </div>
    </div>
  </div>
</div>