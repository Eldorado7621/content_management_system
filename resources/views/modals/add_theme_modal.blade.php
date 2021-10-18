
<!-- Modal -->
<div class="modal fade" id="addTheme" tabindex="-1" role="dialog" aria-labelledby="addThemeLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTheme"> Monthly Theme Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('monthly-theme.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder=""  name="title" value="{{ old('title') }}">
        <label class="form-control-label" for="input-title">Bible Reference</label> <br>
        <input class="form-control" type="text" placeholder=""  name="reference" value="{{ old('reference') }}">
        <label class="form-control-label" for="input-title">Details</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="message" value="{{ old('message') }}"></textarea>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Save"></button>
      </div>
     </form>
    </div>
  </div>
</div>