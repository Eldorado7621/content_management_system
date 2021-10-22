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
                    @endif
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
                     <h3 class="mb-0">View Events Details</h3>
                    </div>
                    </div>
                </div>
                
                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Minister</th>
                                <th scope="col">Venue</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time-Start</th>
                                <th scope="col">Time-End</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($events_details as $event_detail)
                                 <tr>
                                    <td>{{$event_detail->title}}</td>
                                    <td>{{$event_detail->minister}}</td>
                                    <td>{{$event_detail->venue}}</td>
                                    <td>{{$event_detail->date}}</td>
                                    <td>
                                    {{$event_detail->time_from}}
                                    </td>
                                    <td>
                                    {{$event_detail->time_to}}
                                    </td>
                                   
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                               
                                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#b{{$event_detail->id}}">
                                                    Delete
                                                </button>
                                                
                                             </div>
                                        </div>
                                    </td>
                                </tr>
                                @include('modals.delete_event_details_modal')
                            @endforeach
                         </tbody>
                    </table>


             
                </div>
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
</body></html>
