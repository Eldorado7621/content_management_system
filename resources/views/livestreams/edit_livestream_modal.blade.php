
<!-- Modal -->
<div class="modal fade" id="e{{$livestream->id}}" tabindex="-1" role="dialog" aria-labelledby="editAboutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAboutLabel"> EDIT FIELDS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      
      <form method="post" action="{{ route('livestream.update',$livestream->id) }}" enctype="multipart/form-data" >
      @csrf
      @method('put')
      <div class="modal-body">
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder=""  name="title" value="{{$livestream->title}}">
       
        <div class="form-group">
         <label class="form-control-label" for="input-title">Link: </label> <br>
         <input class="form-control" type="text" placeholder=""  name="link" value="{{$livestream->link}}">
        </div>
        
        <label class="form-control-label" for="input-title">Program </label> <br>
        <input class="form-control" type="text" placeholder=""  name="program" value="{{$livestream->program}}">
        <label class="form-control-label" for="input-title">Preacher </label> <br>
        <input class="form-control" type="text" placeholder=""  name="preacher" value="{{$livestream->preacher}}">
                                   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
     </form>
    
    </div>
  </div>
</div>