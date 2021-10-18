
<!-- Modal -->
<div class="modal fade" id="addBanner" tabindex="-1" role="dialog" aria-labelledby="addBannerLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBanner">Upload Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('banners.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
       <label for="myfile">Select a file:</label><br>
        <input type="file" id="myfile" name="myfile"><br>
        <label for="myfile">Caption</label><br>
        <input type="text" id="caption" name="caption">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary"></button>
      </div>
     </form>
    </div>
  </div>
</div>