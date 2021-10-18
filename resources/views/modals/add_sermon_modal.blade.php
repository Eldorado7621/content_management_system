
<!-- Modal -->
<div class="modal fade" id="addSermon" tabindex="-1" role="dialog" aria-labelledby="addSermonLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSermon">UPLOAD FILE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('sermon.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder=""  name="title" value="{{ old('title') }}">
        <label class="form-control-label" for="input-title">Preacher</label> <br>
        <input class="form-control" type="text" placeholder=""  name="preacher" value="{{ old('preacher') }}">
        <label class="form-control-label" for="input-title">Thumbnail <span style="color:red;">Must be an image-size:500 X 500px</span></label> <br>
        <input type="file" name="thumbnail" />
        <label class="form-control-label" for="input-title">Audio File <span style="color:red;"> File type: .mp3</span></label> <br>
        <input type="file" name="file" />

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Save"></button>
      </div>
     </form>
    </div>
  </div>
</div>