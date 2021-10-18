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
                     <h3 class="mb-0">Sermon</h3>
                        </div>
                        <div class="col-4 text-right">
                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addSermon">Upload Sermon</a>
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
                                <th scope="col">Thumbnail</th>
                                <th scope="col">File</th>
                                <th scope="col">Preacher</th>
                                <th scope="col">uploaded by </th>
                                <th scope="col">Date </th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($sermon as $sermon)
                                 <tr>
                                    <td>{{$sermon->title}}</td>
                                    <td>
                                        <img src="{{$sermon->thumbnail}}" class="rounded-circle" width="100" height="100"> 
                                    </td>
                                    <td>
                                    
                                     <audio controls>
                                        
                                       <source src="{{$sermon->file}}" type="audio/mpeg">
                                    </audio>
                                    </td>
                                    <td>
                                    {{$sermon->preacher}}
                                    </td>
                                    <td>
                                    {{$sermon->user->first_name}}
                                    </td>  
                                    <td>{{$sermon->created_at}}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                               
                                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#b{{$sermon->id}}">
                                                    Delete
                                                </button>
                                                
                                             </div>
                                        </div>
                                    </td>
                                </tr>
                                @include('modals.delete_sermon_modal')
                            @endforeach
                         </tbody>
                    </table>

<!-----------------------------------------modal----------->
@include('modals.add_sermon_modal')
             
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
