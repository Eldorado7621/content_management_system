
<!-- Modal -->
<div class="modal fade" id="addWelfare" tabindex="-1" role="dialog" aria-labelledby="addWelfare" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addWelfare"> CHURCH WELFARE Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('welfare.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder=""  name="title" value="{{ old('title') }}">
        <label class="form-control-label" for="input-title">Details</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="details" value="{{ old('details') }}"></textarea>
        <label class="form-control-label" for="input-title">Date</label> <br>
        <input class="form-control" type="date" placeholder=""  name="date" value="{{ old('date') }}">
        <label for="image">Upload Image:<span style="color:red;">Must be an image-size:500 X 500px</span></label><br>
        <input type="file" id="image" name="image"><br>
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Save"></button>
      </div>
     </form>
    </div>
  </div>
</div>