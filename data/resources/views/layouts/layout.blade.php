<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/dashboard">
                    <span class="brand-logo">
                        <img src="{{('app-assets/images/logo.png')}}">
                    </span>
                    <h2 class="brand-text"></h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
  
        <div class="main-menu-content">
            
            @if (Auth::user()->role == 'admin')
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item @if(Request::path() == 'userlist') active @endif"><a class="d-flex align-items-center" href="userlist"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="User">Users</span></a>
                    </li>
                </ul>
            @endif
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="@if(Request::path() == 'companymanagement') active @endif nav-item"><a class="d-flex align-items-center" href="companymanagement"><i data-feather='home'></i><span class="menu-title text-truncate" data-i18n="User">Companines</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="@if(Request::path() == 'category') active @endif nav-item"><a class="d-flex align-items-center" href="category"><i data-feather='box'></i><span class="menu-title text-truncate" data-i18n="User">Categories</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="@if(Request::path() == 'items') active @endif nav-item"><a class="d-flex align-items-center" href="items"><i data-feather='x-circle'></i><span class="menu-title text-truncate" data-i18n="User">Items</span></a>
                </li>
            </ul>

            {{-- <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="@if(Request::path() == 'itemstatus') active @endif nav-item"><a class="d-flex align-items-center" href="itemstatus"><i data-feather='smile'></i><span class="menu-title text-truncate" data-i18n="User">Item Status</span></a>
                </li>
            </ul> --}}

            {{-- <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="@if(Request::path() == 'companysetting') active @endif nav-item"><a class="d-flex align-items-center" href="companysetting"><i data-feather='settings'></i><span class="menu-title text-truncate" data-i18n="User">Company Setting</span></a>
                </li>
            </ul> --}}
            @if (Auth::user()->role == 'admin')
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="@if(Request::path() == 'siteinfo') active @endif nav-item"><a class="d-flex align-items-center" href="siteinfo"><i data-feather='info'></i><span class="menu-title text-truncate" data-i18n="User">Site Info</span></a>
                    </li>
                </ul>
            
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="@if(Request::path() == 'exchange') active @endif nav-item"><a class="d-flex align-items-center" href="exchange"><i data-feather='zap'></i><span class="menu-title text-truncate" data-i18n="User">Currency Exchange</span></a>
                    </li>
                </ul>
            @endif

        </div>
    </div>