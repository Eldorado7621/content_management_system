
<!-- Modal -->
<div class="modal fade" id="b{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$event->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <form method="post" action="{{ route('event.destroy',$event->id) }}" >
      @csrf
      @method('delete')
       <div class="modal-body">  
       <label class="form-control-label" for="input-email">Are you sure that you want to delete this Event?</label> <br>
        <input type="hidden" value="{{$event->id}}" name="event_id"/>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input  type="submit" class="btn btn-danger" value="Delete">
      </div>
     </form>
    </div>
  </div>
</div>