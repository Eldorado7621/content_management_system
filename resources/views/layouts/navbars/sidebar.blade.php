<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('dashboard') }}">
            <img src="{{ asset('argon') }}/img/brand/rlogo.png" class="navbar-brand-img" alt="logo">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('argon') }}/img/brand/rlogo.png">
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
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-circle-08 " style="color: #808080;"></i>
                        <span class="nav-link-text" style="color: #808080;">{{ __('Users') }}</span>
                    </a>

                    <div class="collapse" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    {{ __('View Users') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('create_user') }}">
                                    {{ __('Create User') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#media" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-laptop" style="color: #808080;"></i>
                        <span class="nav-link-text" style="color: #808080;">{{ __('Media') }}</span>
                    </a>

                    <div class="collapse" id="media">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    {{ __('Livestream') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('create_user') }}">
                                    {{ __('') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#web" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-world-2" style="color: #808080;"></i>
                        <span class="nav-link-text" style="color: #808080;">{{ __('Website Management') }}</span>
                    </a>

                    <div class="collapse" id="web">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('banners.index') }}">
                                    {{ __('Banner') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about.index') }}">
                                    {{ __('About Us') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('monthly-theme.index') }}">
                                    {{ __('Monthly Theme') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('sermon.index') }}">
                                    {{ __('Sermons') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#event" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="event">
                               
                                 <span class="nav-link-text" style="color: #808080;">{{ __('Church Programs') }}</span>
                               </a> 
                               <div class="collapse" id="event">
                                  <ul class="nav nav-sm flex-column">
                                      
                                
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('event.create_event') }}">
                                    {{ __('Create Program') }}
                                     </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('event.index') }}">
                                    {{ __('View Events') }}
                                     </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('event_details.index') }}">
                                    {{ __('View Events Details') }}
                                     </a>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('church_program.index') }}">
                                    {{ __('View Church Program') }}
                                     </a>
                                  </li>
                               </ul>
                              </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('testimony.index') }}">
                                    {{ __('Testimony') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact.index') }}">
                                    {{ __('Church Contact') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('welfare.index') }}">
                                    {{ __('Church Welfare') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
