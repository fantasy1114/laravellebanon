<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            <span class="user-name font-weight-bolder rounded-pill px-2 justify-content-center text-center" style="background-color:#7367f0;color:white;line-height: 2.3;">
                                {{ Auth::user()->name }}
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="#">
                            <a class="dropdown-item" href="#"></a>
                        
                            <span class="dropdown-item"><form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <i class="mr-50" data-feather="power"></i>

                                <a class="p-0" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </span>
                    </div>
                </li>
              
            </ul>
        </div>
    </nav> 