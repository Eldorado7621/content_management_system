
<!-- Modal -->
<div class="modal fade" id="e{{$welfare->id}}" tabindex="-1" role="dialog" aria-labelledby="editAboutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAboutLabel">EDIT WELFARE DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      
      <form method="post" action="{{ route('welfare.update',$welfare->id) }}" enctype="multipart/form-data" >
      @csrf
      @method('put')
      <div class="modal-body">
        
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder="" value="{{$welfare->title}}" name="title">
        <label class="form-control-label" for="input-title">Details</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="details">{{$welfare->details}}</textarea>
        <label class="form-control-label" for="input-title">Date</label> <br>
        <input class="form-control" type="date" placeholder="" value="{{$welfare->date}}" name="date">
        <img src="{{$welfare->image}}" class="rounded-circle" width="100" height="100">
        <input class="form-control" type="file" placeholder=""  name="image">
                                  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
     </form>
    
    </div>
  </div>
</div>