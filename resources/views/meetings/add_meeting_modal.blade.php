
<!-- Modal -->
<div class="modal fade" id="addMeeting" tabindex="-1" role="dialog" aria-labelledby="addMeeting" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMeeting"> CHURCH WEEKLY AND MONTHLY PROGRAMS SECTION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('meeting.store') }}"  enctype="multipart/form-data" >
        @csrf
      <div class="modal-body">
     
        <label class="form-control-label" for="input-title">Title</label> <br>
        <input class="form-control" type="text" placeholder=""  name="title" value="{{ old('title') }}">
        <div class="form-group">
          <label for="sel1">Select Day:</label>
           <select class="form-control" id="sel1" name="day">
            <option value="1">Monday</option>
            <option  value="2"> Tuesday</option>
            <option  value="3">Wednesday</option>
             <option  value="4">Thursday</option>
            <option  value="5"> Friday</option>
            <option  value="6">Saturday</option>
             <option  value="7">Sunday</option>
           </select>
        </div>
        <div class="form-group">
         <label class="form-control-label" for="input-title">Time: <span style="color:red;">(*Time format-24 hrs-hh:mm)</span></label> <br>
         <input class="" type="number" placeholder="hh"  name="hh" value="{{ old('hh') }}">
         <input class="" type="number" placeholder="mm"  name="mm" value="{{ old('mm') }}">

        </div>
        <div class="form-group">
          <label for="sel1">Select Period:</label>
           <select class="form-control" id="sel1" name="type">
            <option value="1">Weekly</option>
            <option  value="2"> Monthly</option>
           </select>
        </div>
        <label class="form-control-label" for="input-title">Other Information</label> <br>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="other_info" value="{{ old('other_info') }}"></textarea>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary" value="Save"></button>
      </div>
     </form>
    </div>
  </div>
</div>