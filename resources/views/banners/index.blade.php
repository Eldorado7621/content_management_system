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
                    @if (session('banner_success'))
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <strong>{{session('banner_success')}}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                    @endif
                    @if (session('banner_error'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <strong>{{session('banner_error')}}</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                    @endif
                            <h3 class="mb-0">Banners for the Website</h3>
                        </div>
                      
                        <div class="col-4 text-right">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addBanner">Add</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                 </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Uploaded By</th>
                                <th scope="col">Caption</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($banners as $banner)
                                 <tr>
                                    <td>
                                         <img src="{{$banner->img}}" class="rounded-circle" width="100" height="100">
                                    </td>
                                    <td>
                                        
                                        {{$banner->user->first_name}}
                                    </td>
                                    <td>
                                    {{$banner->caption}}
                                    </td>
                                    <td>
                                       {{$banner->created_at}}
                                    </td>
                                   
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                               
                                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#b{{$banner->id}}">
                                                    Delete
                                                </button>
                                               
                                             </div>
                                        </div>
                                    </td>
                                </tr>
                                @include('modals.delete_banner_modal')
                                @endforeach
                         </tbody>
                    </table>

<!-----------------------------------------modal----------->

@include('modals.add_banner_modal')

@include('modals.delete_user_modal')
             
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
