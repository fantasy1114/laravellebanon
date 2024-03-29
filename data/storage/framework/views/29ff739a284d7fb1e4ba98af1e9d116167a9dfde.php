<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/dashboard">
                    <span class="brand-logo">
                        <img src="<?php echo e(('app-assets/images/logo.png')); ?>">
                    </span>
                    <h2 class="brand-text"></h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
  
        <div class="main-menu-content">
            
            <?php if(Auth::user()->role == 'superadmin'): ?>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item <?php if(Request::path() == 'userrole'): ?> active <?php endif; ?>"><a class="d-flex align-items-center" href="userrole"><i data-feather='tool'></i><span class="menu-title text-truncate" data-i18n="User">User Role</span></a>
                    </li>
                </ul>
            <?php endif; ?>
            
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->users_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item <?php if(Request::path() == 'userlist'): ?> active <?php endif; ?>"><a class="d-flex align-items-center" href="userlist"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="User">Users</span></a>
                </li>
            </ul>
            
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->companies_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'companymanagement'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="companymanagement"><i data-feather='home'></i><span class="menu-title text-truncate" data-i18n="User">Companines</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->categories_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'category'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="category"><i data-feather='box'></i><span class="menu-title text-truncate" data-i18n="User">Categories</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->items_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'items'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="items"><i data-feather='x-circle'></i><span class="menu-title text-truncate" data-i18n="User">Items</span></a>
                </li>
            </ul>

            
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->siteinfo_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'siteinfo'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="siteinfo"><i data-feather='info'></i><span class="menu-title text-truncate" data-i18n="User">Site Info</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->staticinfo_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'staticinfo'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="staticinfo"><i data-feather='info'></i><span class="menu-title text-truncate" data-i18n="User">Static info</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->pricing_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'pricingslider'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="pricingslider"><i data-feather='info'></i><span class="menu-title text-truncate" data-i18n="User">Pricing Slider</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->currency_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'exchange'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="exchange"><i data-feather='zap'></i><span class="menu-title text-truncate" data-i18n="User">Currency Exchange</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->blog_view != 'on'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'blogs'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="blogs"><i data-feather='command'></i><span class="menu-title text-truncate" data-i18n="User">Blogs</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main <?php if(Auth::user()->rolefunction->shopping_list != 'View'): ?> data-page-close <?php endif; ?>" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'shopping'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="shopping"><i data-feather='shopping-cart'></i><span class="menu-title text-truncate" data-i18n="User">Shopping</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="<?php if(Request::path() == 'setting'): ?> active <?php endif; ?> nav-item"><a class="d-flex align-items-center" href="setting"><i data-feather='settings'></i><span class="menu-title text-truncate" data-i18n="User">Setting</span></a>
                </li>
            </ul>

        </div>
    </div><?php /**PATH D:\Lebanon\phpframe\data\resources\views/layouts/layout.blade.php ENDPATH**/ ?>