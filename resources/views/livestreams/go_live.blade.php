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
                    
</div>
<div class="container-fluid mt--12" >
@if($count==1)
        @include('livestreams.stream_on')
    @else
        @include('livestreams.stream_off')
    @endif 
    
  
  
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
            document.getElementById("program").setAttribute("readonly", "readonly");
            document.getElementById("js").remove();
              document.getElementById("transmission").style.display="block";
            document.getElementById("feedDisplayDiv").style.display="block";
            

        } else {
            outputtext.innerHTML = "OFF";
            document.getElementById("feed").removeAttribute("readonly");
            document.getElementById("preacher").removeAttribute("readonly");
            document.getElementById("title").removeAttribute("readonly"); 
            document.getElementById("program").removeAttribute("readonly");
            document.getElementById("list_sb").innerHTML = '<input type="submit" value="Publish" class="btn btn-success mt-4" id="js"/>';
          
            document.getElementById("transmission").style.display="none";
            
            document.getElementById("feedDisplayDiv").style.display="none";
            


            
        }
    });


    </script>




</body></html>
