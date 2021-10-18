
<!-- Modal -->
<div class="modal fade" id="editTheme" tabindex="-1" role="dialog" aria-labelledby="editTheme" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editTheme">EDIT MONTHLY THEME</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      
      <form method="post" action="{{ route('monthly-theme.update',$theme->id) }}" >
      @csrf
      @method('put')
      <div class="modal-body">
        
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder="" value="{{$theme->title}}" name="title">
          <label class="form-control-label" for="input-title">Bible Reference</label> <br>
        <input class="form-control" type="text" placeholder=""  name="reference" value="{{ $theme->reference}}">
        <label class="form-control-label" for="input-title">Details</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="message">{{ $theme->message}}</textarea>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
     </form>
    
    </div>
  </div>
</div>