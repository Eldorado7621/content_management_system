
<!-- Modal -->
<div class="modal fade" id="editDept" tabindex="-1" role="dialog" aria-labelledby="editTheme" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editTheme">EDIT DEPARTMENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      
      <form method="post" action="{{ route('department.update',$dept->id) }}" >
      @csrf
      @method('put')
      <div class="modal-body">
        
        <label class="form-control-label" for="input-title">Name</label> <br>
        <input class="form-control" type="text" placeholder=""  name="name" value="{{$dept->name }}">
        <label class="form-control-label" for="input-title"><b>Reference:</b>Bible Book, Chapter and Verse</label>
        <input class="form-control" type="text" placeholder=""  name="reference" value="{{$dept->reference }}">
        <label class="form-control-label" for="input-title">Bible Passage</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea" rows="6" name="passage" value="{{$dept->bible }}"></textarea>
       
        <label class="form-control-label" for="input-title">Department Description</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="desc">{{$dept->description }}</textarea>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
     </form>
    
    </div>
  </div>
</div>