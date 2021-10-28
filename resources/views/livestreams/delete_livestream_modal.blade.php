
<!-- Modal -->
<div class="modal fade" id="b{{$livestream->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$livestream->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <form method="post" action="{{ route('livestream.destroy',$livestream->id) }}" >
      @csrf
      @method('delete')
       <div class="modal-body">  
       <label class="form-control-label" for="input-email">Are you sure that you want to delete this?</label> <br>
                
        <input type="hidden" value="{{$livestream->id}}" name="meeting"/>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input  type="submit" class="btn btn-danger" value="Delete">
      </div>
     </form>
    </div>
  </div>
</div>