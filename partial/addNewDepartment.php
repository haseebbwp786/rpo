<div class="modal-dialog">

       <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Add New Department</h4>
         </div>
        <div class="modal-body">
           <form id="add_new_dept">
             <div class="form-group">
               <label for="deptName">Department Name</label>
               <input type="text" class="form-control" id="deptName" placeholder="Enter Department Name" name="deptName">
             </div>
               <button type="button" id="new_dept" name="addDept" class="btn btn-default">Save</button>
           </form>
            <div id="addDeptResponse"></div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>
