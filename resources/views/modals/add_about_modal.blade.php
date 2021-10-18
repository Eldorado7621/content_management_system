
<!-- Modal -->
<div class="modal fade" id="addAbout" tabindex="-1" role="dialog" aria-labelledby="addAboutLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAbout"> About Us Section</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('about.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
      <label class="form-control-label" for="input-title">Title</label> <br>
      <input type="hidden" value="0" name="id"/>
        <input class="form-control" type="text" placeholder=""  name="title" value="{{ old('title') }}">
        <label class="form-control-label" for="input-title">Message</label> <br>
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