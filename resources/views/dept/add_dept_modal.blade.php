
<!-- Modal -->
<div class="modal fade" id="addDept" tabindex="-1" role="dialog" aria-labelledby="addDeptLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTheme">Create Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('department.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
        <label class="form-control-label" for="input-title">Name</label> <br>
        <input class="form-control" type="text" placeholder=""  name="name" value="{{ old('name') }}">
        <label class="form-control-label" for="input-title"><b>Reference:</b>Bible Book, Chapter and Verse</label>
        <input class="form-control" type="text" placeholder=""  name="reference" value="{{ old('reference') }}">
        <label class="form-control-label" for="input-title">Bible Passage</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea" rows="6" name="passage" value="{{ old('passage') }}"></textarea>
       

        <label class="form-control-label" for="input-title">Department Description</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="desc" value="{{ old('desc') }}"></textarea>
       
        <label for="myfile">Upload Banner</label><br>
        <input type="file" id="deptBanner" name="deptBanner"><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Save"></button>
      </div>
     </form>
    </div>
  </div>
</div>