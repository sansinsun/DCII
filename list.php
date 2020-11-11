<div class="container-fluid">
  <div class="col-sm-3" style="margin-bottom:15px;">
    <select class="form-control" id="Floor" placeholder="Floor">
      <option value="" selected disabled>Component By Risk</option>
      <option>High</option>
      <option>Medium</option>
      <option>Low</option>
    </select>
  </div>
<div>
<div class="table-responsive">
  <table class="table table-bordered display responsive  desktop" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>  
        <th>Building</th>
        <th>Floor</th>
        <th>Cubicle</th>
        <th>Type</th>
        <th>Code</th>
        <th>Element</th>
        <th>Recommended Action</th>
        <th>Risk</th>
        <th>Action</th>           
        </tr>
    </thead>
    <tfoot>
      <tr>
        <th>Building</th>
        <th>Floor</th>
        <th>Cubicle</th>
        <th>Type</th>
        <th>Code</th>
        <th>Element</th>
        <th>Recommended Action</th>
        <th>Risk</th>
        <th>Action</th>     
      </tr>
    </tfoot>
    <tbody>
      <tr>
        <td>JK2</td>
        <td>F3</td>
        <td>CU16</td>
        <td>PDU</td>
        <td>PDU-C16-F3-JK2</td>
        <td>Control</td>
        <td>Maintenance</td>
        <td class="text-warning"><b>Medium</b></td>
        <td><button type="submit" class="btn btn-primary">Detail</button></td>
      </tr>
      <tr>
        <td>JK2</td>
        <td>F3</td>
        <td>CU16</td>
        <td>PDU</td>
        <td>PDU-C16-F3-JK2</td>
        <td>Control</td>
        <td>Maintenance</td>
        <td class="text-danger"><b>High</b></td>
        <td>
          <button type="submit" class="btn btn-primary">Detail</button>
        </td>
      </tr>
      <tr>
        <td>JK2</td>
        <td>F3</td>
        <td>CU16</td>
        <td>PDU</td>
        <td>PDU-C16-F3-JK2</td>
        <td>Control</td>
        <td>Maintenance</td>
        <td class="text-success"><b>Low</b></td>
        <td>
          <button type="submit" class="btn btn-primary">Detail</button>
        </td>

      </tr>
      <tr>
        <td>JK2</td>
        <td>F3</td>
        <td>CU16</td>
        <td>PDU</td>
        <td>PDU-C16-F3-JK2</td>
        <td>Control</td>
        <td>Maintenance</td>
        <td class="text-warning"><b>Medium</b></td>
        <td>
           <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#dashboardModal">Detail</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div class="modal fade" id="dashboardModal" tabindex="-1" role="dialog" aria-labelledby="dashboardModal" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UpdateModal">Detail Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group row">
              <div class="col-sm-5">
              <select class="form-control" id="action" placeholder="action">
                <option value="" selected disabled>Recommended Action</option>
                <option>Action 1</option>
                <option>Action 2</option>
                <option>Action 3</option>
                <option>Action 4</option>
              </select>
            </div>
          </div>	
          <div class="form-group row">
            <div class="col-md-7 col-sm-12">
              <img src="img/detail_example.jpg"></img>
            </div>
            <div class="col-md-5 col-sm-12">
            <h2 class="modal-title">Mininum Temperature :</h2>
            <h2 class="modal-title">xxx-xxx &#8451;</h2>
            <h2 class="modal-title">Maximum Temperature :</h2>
            <h2 class="modal-title">xxx-xxx &#8451;</h2>
            <h2 class="modal-title">Average Temperature :</h2>
            <h2 class="modal-title">xxx-xxx &#8451;</h2>

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