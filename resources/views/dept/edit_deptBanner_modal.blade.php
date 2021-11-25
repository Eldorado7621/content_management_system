
<!-- Modal -->
<div class="modal fade" id="editDeptBanner" tabindex="-1" role="dialog" aria-labelledby="editTheme" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editTheme">EDIT DEPARTMENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      
      <form method="post" action="{{ route('department.updateBanner') }}"  enctype="multipart/form-data" >
      @csrf
     
      <div class="modal-body">
        <input type="hidden" id="id" name="id" value="{{$dept->id}}"><br>
        <label for="myfile">Upload Banner</label><br>
        <input type="file" id="deptBanner" name="deptBanner"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
     </form>
    
    </div>
  </div>
</div>