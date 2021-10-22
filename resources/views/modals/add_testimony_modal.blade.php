
<!-- Modal -->
<div class="modal fade" id="addTestimony" tabindex="-1" role="dialog" aria-labelledby="addTestimony" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTestimony"> Testimony Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('testimony.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
      <label class="form-control-label" for="input-title">Name</label> <br>
     
        <input class="form-control" type="text" placeholder=""  name="name" value="{{ old('name') }}">
        <label class="form-control-label" for="input-title">Testimony</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="testimony" value="{{ old('testimony') }}"></textarea>
        <label class="form-control-label" for="input-title">Profession</label> <br>
     
        <input class="form-control" type="text" placeholder=""  name="proffession" value="{{ old('proffession') }}">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Save"></button>
      </div>
     </form>
    </div>
  </div>
</div>