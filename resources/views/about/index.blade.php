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
                            <h3 class="mb-0">About Us Section</h3>
                        </div>
                      
                        <div class="col-4 text-right">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addAbout">Add</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                 </div>

                <div class="table-responsive">
                @foreach($about as $about)
                    <div>
                        Title: <i class="ni education_hat mr-2"></i>{{ $about->title }}
                    </div>
                            <hr class="my-4" />
                            <p>{{$about->message }}</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editAbout">
                          Edit
                    </button>
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#replaceAbout">
                         Replace
                    </button>
                    @include('modals.edit_about_modal')

                    @include('modals.replace_about_modal')
             @endforeach

<!-----------------------------------------modal----------->
@include('modals.add_about_modal')

                <hr>
                <label>
                    video  
                </label>
                <div class="col-4 text-right">
                     <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addAbout">Add Video</a>
                </div>
                <br>
                @foreach($video as $video)
                
                    <div class="embed-responsive embed-responsive-4by3" style="width:400px;height:400px;">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" ></iframe>
                    </div>

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAbout">
                         Delete
                    </button>
                    @include('modals.delete_video_modal')
                @endforeach
                    
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
