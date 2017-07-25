<form id="dispatch_form_submit">
    <div class="form-group">
      <label for="docno">Document Number:</label>
      <input type="text" name="docno" id="docno" class="form-control" />
    </div>
    <div class="form-group">
      <label for="date" class="col-2 col-form-label">Date and time</label>
      <input type="text" value="" id="datetimepickerdispatch" class="form-control"  name="date"/>
    </div>
    <div class="form-group">
      <label for="title">Subject:</label>
      <input type="text" name="title" id="title" class="form-control" />
    </div>
    <div class="form-group">
      <label for="send">Received:</label>
      <select class="form-control" name="received" id="received">
          <?php echo getDepList($conn);?>
      </select>
    </div>
    <input type="button" name="dispatch" id="dispatch" class="btn btn-default" value="Save" />
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addNewDept">Add New Department</button>
</form>