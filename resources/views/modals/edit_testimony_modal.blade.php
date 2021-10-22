
<!-- Modal -->
<div class="modal fade" id="e{{$testimony->id}}" tabindex="-1" role="dialog" aria-labelledby="editAboutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAboutLabel">EDIT TESTIMONY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      
      <form method="post" action="{{ route('testimony.update',$testimony->id) }}" >
      @csrf
      @method('put')
      <div class="modal-body">
        
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder="" value="{{$testimony->name}}" name="name">
        <label class="form-control-label" for="input-title">Testimony</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="testimony">{{$testimony->testimony}}</textarea>
        <label class="form-control-label" for="input-title">Profession</label> <br>
        <input class="form-control" type="text" placeholder="" value="{{$testimony->proffession}}" name="proffession">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
     </form>
    
    </div>
  </div>
</div>