@include('includes.head')
@include('includes.index_nav')
        <!-- Navigation -->
 @include('includes.menu')
        <!-- Divider -->
        <hr class="my-3">
       
    </div>
</div>
</nav>                
    <div class="main-content">
        <!-- Top navbar -->
        @include('includes.container') 
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                   
                        <div class="col-8">
                   @if (session('success'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>{{session('success')}}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
<!-- create the events details after the event must have beeen successfully created-->
                     <h3 class="mb-0">Create Church Program</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                <h5 class="mb-0"><span style="color:red;">***</span> Add Event details below</h5>
                 </div>

                <div class="table-responsive" style="padding:10px;">
                <form method="post" id="dynamic_form">
                 @csrf
                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
				  <thead style="font-size:25px;">
                   <tr>
                    <th width="10%"style="">Date</th>
                    <th width="30%"style="">Title</th>
                    <th width="20%"style="">Minister</th>
                    <th width="20%" style="">Venue</th>
                    <th width="10%"style="">Time(Start)<span style="color:red;"> (hh:mm)</span></th>
                    <th width="10%"style="">Time(End)<span style="color:red;"> (hh:mm)</span></th>
                  </tr>
                  </thead>
				 <tbody>

				 </tbody>
                 <tfoot>
                  <tr>
                     <td colspan="6" align="right"></td>
                     <td>
                    
                       <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                    </td>
                 </tr>
                </tfoot>
              </table>
             </form>
          </div>
<!-- event details end-->
               @else
                    @if (session('error'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <strong>{{session('error')}}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
         
                     @foreach ($errors->all() as $error)
                     <strong>{{ $error }}</strong> 
                     @endforeach
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                   <h3 class="mb-0">Create Church Program</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                 </div>

                <div class="table-responsive" style="padding:10px;">
                  <form method="post" action="{{ route('event.store') }}"  enctype="multipart/form-data" >
                   
                  @csrf
                    <label class="form-control-label" for="input-title">Theme</label> <br>
                    <input class="form-control" type="text" placeholder=""  name="theme" value="{{ old('theme') }}">
                     <label class="form-control-label" for="input-title">From:</label> <br>
                     <input type='date' class="form-control col-4" name="from" />
                     <label class="form-control-label" for="input-title">To:</label> <br>
                     <input type='date' class="form-control col-4" name="to"/><br>
                   
                      <input type="submit" class="btn btn-primary " value="Create">
                    </form>
             
                </div>
               @endif
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
        
    <footer class="footer">
<div class="row align-items-center justify-content-xl-between">

</div></footer>    </div>
    </div>

    
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
            
    <!-- Argon JS -->
    <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>

</html>


<script>

$(document).ready(function(){

 var count = 1;


 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="date" name="date[]" class="form-control" /></td></br>';
        html += '<td><input type="text" name="title[]" class="form-control" /></td>';
        html += '<td><input type="text" name="minister[]" class="form-control" /></td>';
        html += '<td><input type="text" name="venue[]"  class="form-control" /></td>';
        html += '<td><input type="number" name="hh_start[]"  style="width:50%;" placeholder="hh"/>:<input type="number" name="mm_start[]" placeholder="mm" style="width:50%;" /></td>';
        html += '<td><input type="number" name="hh_end[]"  style="width:50%;" placeholder="hh"/>:<input type="number" name="mm_end[]" placeholder="mm" style="width:50%;" /></td>';

        html += '<td><input type="hidden" name="event_id[]" value="{{session("event")}}" /></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("event_details.store") }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});
</script>