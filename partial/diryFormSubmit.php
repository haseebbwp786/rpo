<form id="diry_form_submit">
    <div class="form-group">
       <label for="docno">Document Number:</label>
       <input type="text" name="docno" id="docno" class="form-control" />
    </div>
    <div class="form-group">
       <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
       <input type="text" value="" id="datetimepickerdiry" class="form-control"  name="date"/>
    </div>
    <div class="form-group">
       <label for="title">Subject:</label>
       <input type="text" name="title" id="title" class="form-control" />
    </div>
    <div class="form-group">
       <label for="send">Send to:</label>
       <select class="form-control" name="send" id="send">
           <?php echo getDepList($conn);?>
       </select>
    </div>
    <input type="button" name="diry" id="diry" class="btn btn-default" value="Save" />
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#addNewDept">Add New Department</button>
</form>