@include('includes.head')
<body class="clickup-chrome-ext_installed">

<style>



.ergebnis {
    font-size: 1rem;
    font-family: sans-serif;
    padding: 0.5rem 0 0.5rem 0.5rem;
    color: black;
}

.toggle {
    margin:0 0 0 0.5rem;
    position: relative;
    display: inline-block;
    width: 1.8rem;
    height: 0.8rem;
}

.toggle input {
    display: none;
}

.roundbutton {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    background-color: #33455e;
    display: block;
    transition: all 0.3s;
    border-radius: 0.8rem;
    cursor: pointer;
}

.roundbutton:before {
    position: absolute;
    content: "";
    height: 0.6rem;
    width: 0.8rem;
    border-radius: 100%;
    display: block;
    left: 0.1rem;
    bottom: 0.1rem;
    background-color: white;
    transition: all 0.3s;
}

input:checked + .roundbutton {
    background-color: #FF6E48;
}

input:checked + .roundbutton:before  {
    transform: translate(0.8rem, 0);
}


</style>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
<div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="{{ route('home') }}">
        <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
    </a>
    <!-- User -->
    @include('includes.topnav')
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
            <div class="row">
                <div class="col-6 collapse-brand">
                    <a  href="{{ route('home') }}">
                        <img src="{{ asset('argon') }}/img/brand/blue.png">
                    </a>
                </div>
                <div class="col-6 collapse-close">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fa fa-search"></span>
                    </div>
                </div>
            </div>
        </form>
        <!-- Navigation -->
        @include('includes.menu')
        <!-- Divider -->
        <hr class="my-3">
       
    </div>
</div>
</nav>                
    <div class="main-content">
        <!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
<div class="container-fluid">
    <!-- Brand -->
    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Livestream</a>
    <!-- Form -->
    <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
        <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
            </div>
        </div>
    </form>
    <!-- User -->
    <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">Admin Admin</span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{ route('profile.edit') }}" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                </a>
                <a href="#" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                </a>
            </div>
        </li>
    </ul>
</div>
</nav>    
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
<div class="container-fluid mt--7">
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
                        <div class="col-4 text-right">
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editFields">
                                Edit Fields
                         </button>
                           
                        </div>
                    </div>
                

                
                </div>
                @include('modals.edit_livestream_fields_modal')
                <div class="col-6">
                    <label class="form-control-label" for="input-name">{{ __('Youtube Link') }}</label>
                    <input type="text" name="feed" id="feed" class="form-control form-control-alternative{{ $errors->has('feed') ? ' is-invalid' : '' }}" placeholder="{{ __('Youtube Link') }}" value="{{ old('feed') }}"  >
                    <label class="form-control-label" for="input-name">{{ __('Title of Message') }}</label>
                    <input type="text" name="title" id="title" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Title of Message') }}" value="{{ old('title') }}"  >

                    <label class="form-control-label" for="input-name">{{ __('Preacher') }}</label>
                    <input type="text" name="preacher" id="preacher" class="form-control form-control-alternative{{ $errors->has('preacher') ? ' is-invalid' : '' }}" placeholder="{{ __('preacher') }}" value="{{ old('preacher') }}">

                    <div class="text-center">
                      <button type="submit" class="btn btn-success mt-4">{{ __('Publish') }}</button>
                      </div>
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

    <script>

var input = document.getElementById('toggleswitch');
    var outputtext = document.getElementById('status');

    input.addEventListener('change',function(){
        if(this.checked) {
            outputtext.innerHTML = "ON";
            document.getElementById("feed").setAttribute("readonly", "readonly");
            document.getElementById("preacher").setAttribute("readonly", "readonly");
            document.getElementById("title").setAttribute("readonly", "readonly");
        } else {
            outputtext.innerHTML = "OFF";
            document.getElementById("feed").removeAttribute("readonly");
            document.getElementById("preacher").removeAttribute("readonly");
            document.getElementById("title").removeAttribute("readonly");
        }
    });


    </script>




</body></html>
