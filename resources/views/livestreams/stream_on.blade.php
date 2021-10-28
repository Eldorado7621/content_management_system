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
                            <h3 class="mb-0"> LIVESTREAM</h3>
                            <div id="ergebnis" class="ergebnis">
                             Live-streaming is <span id="status">ON</span>.
                            </div>
                             <label class="toggle">
                              <input id="toggleswitch" type="checkbox" checked>
                              <span class="roundbutton"></span>
                            </label>
                        </div>
                      
                        <div class="col-4 text-right">
                         <div id="transmission">
                           <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#s{{$livestream->id}}">Stop Transmission</a>
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#e{{$livestream->id}}">Edit Fields</a>
                         </div>
                        </div>
                        <div class="col-6">
                   <form method="post" action="{{ route('livestream.store') }}" enctype="multipart/form-data" >
                     @csrf
                    <label class="form-control-label" for="input-name">{{ __('Youtube Link') }}</label>
                    <input type="text" readonly name="link" id="feed" class="form-control form-control-alternative{{ $errors->has('feed') ? ' is-invalid' : '' }}" placeholder="" value="{{ $livestream->link }}"  >
                    <label class="form-control-label" for="input-name">{{ __('Title of Message') }}</label>
                    <input type="text" readonly name="title" id="title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title of Message') }}" value="{{ $livestream->title }}"  >
                    <label class="form-control-label" for="input-name">{{ __('Program') }}</label>
                    <input type="text" readonly name="program" id="program" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Program') }}" value="{{ $livestream->program }}"  >

                    <label class="form-control-label" for="input-name">{{ __('Preacher') }}</label>
                    <input type="text" readonly name="preacher" id="preacher" class="form-control form-control-alternative{{ $errors->has('preacher') ? ' is-invalid' : '' }}" placeholder="{{ __('preacher') }}" value="{{ $livestream->preacher }}">
                    <div id="list_sb">
                 
                   </div>   
                </form>
                  </div>
                  @include('livestreams.edit_livestream_modal')
                  @include('livestreams.stop_transmission_modal')               
   
                  <div class="col-4 text-right"  id="feedDisplayDiv">
                    <div class="responsive-iframe" style="width:400px; height:400px;" id="feedDisplay">
                         <iframe src=" {{$livestream->link}}"></iframe>
                      </div>

                  </div>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>