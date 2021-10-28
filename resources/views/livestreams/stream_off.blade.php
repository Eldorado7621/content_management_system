<div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                <div class="row align-items-center">
                        <div class="col-8">
                           <div id="ergebnis" class="ergebnis">
                             Live-streaming is <span id="status">OFF</span>.
                            </div>
                             <label class="toggle">
                              <input id="toggleswitch" type="checkbox">
                              <span class="roundbutton"></span>
                            </label>
                        </div>
                       
                    </div>
                </div>
              
                <div class="col-6">
                <form method="post" action="{{ route('livestream.store') }}" enctype="multipart/form-data" >
                     @csrf
                  
                    <label class="form-control-label" for="input-name">{{ __('Youtube Link') }}</label>
                    <input type="text" name="link" id="feed" class="form-control form-control-alternative{{ $errors->has('feed') ? ' is-invalid' : '' }}" placeholder="{{ __('Youtube Link') }}" value="{{ old('link') }}"  >
                    <label class="form-control-label" for="input-name">{{ __('Title of Message') }}</label>
                    <input type="text" name="title" id="title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title of Message') }}" value="{{ old('title') }}"  >
                    <label class="form-control-label" for="input-name">{{ __('Program') }}</label>
                    <input type="text" name="program" id="title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Program') }}" value="{{ old('program') }}"  >

                    <label class="form-control-label" for="input-name">{{ __('Preacher') }}</label>
                    <input type="text" name="preacher" id="preacher" class="form-control form-control-alternative{{ $errors->has('preacher') ? ' is-invalid' : '' }}" placeholder="{{ __('preacher') }}" value="{{ old('preacher') }}">
                    <div id="list_sb">
                         <input type="submit" value="Publish" class="btn btn-success mt-4" id="js">
                    </div>   
                </form>
                   