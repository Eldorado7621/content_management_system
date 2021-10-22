
<!-- Modal -->
<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addContact" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTestimony"> Contact Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('contact.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
      <label class="form-control-label" for="input-title">Phone Number</label> <br>
     
        <input class="form-control" type="number" placeholder=""  name="phn_no" value="{{ old('phn_no') }}">
        <label class="form-control-label" for="input-title">Testimony</label> <br>
        <label class="form-control-label" for="input-title">Address</label> <br>
     
        <input class="form-control" type="text" placeholder=""  name="address" value="{{ old('address') }}">

        <label class="form-control-label" for="input-title">Email Address</label> <br>
     
       <input class="form-control" type="email" placeholder=""  name="email" value="{{ old('email') }}">
 
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Save"></button>
      </div>
     </form>
    </div>
  </div>
</div>