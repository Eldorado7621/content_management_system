
<!-- Modal -->
<div class="modal fade" id="e{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="editAboutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAboutLabel">EDIT CONTACT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      
      <form method="post" action="{{ route('contact.update',$contact->id) }}" >
      @csrf
      @method('put')
      <div class="modal-body">
        
        <label class="form-control-label" for="input-title">Phone Number</label> <br>
        <input class="form-control" type="number" placeholder="" value="{{$contact->phn_no}}" name="phn_no">
        <label class="form-control-label" for="input-title">Address</label> <br>
        <input class="form-control" type="text" placeholder="" value="{{$contact->address}}" name="address"> 
        <label class="form-control-label" for="input-title">Email Address</label> <br>
        <input class="form-control" type="email" placeholder="" value="{{$contact->email}}" name="email">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
     </form>
    
    </div>
  </div>
</div>