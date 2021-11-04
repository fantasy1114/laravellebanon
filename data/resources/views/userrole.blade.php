
<!-- BEGIN: Head-->
@include('layouts/header')
<!-- END: Head-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
     <!-- BEGIN: navbar-->
     @include('layouts/navbar')
     <!-- END navbar -->
 
     <!-- BEGIN LAYOUT -->
     @include('layouts/layout')
     <!-- END LAYOUT -->

    <!-- BEGIN: Content-->
    <div class="app-content content @if(Auth::user()->rolefunction->userrole != 'superadmin') data-page-close @endif">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="app-user-edit">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-="true">
                                        <i data-feather="user"></i><span class="d-none d-sm-block">SuperAdmin</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-="false">
                                        <i data-feather='edit-3'></i><span class="d-none d-sm-block">Admin</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-="false">
                                        <i data-feather='shopping-bag'></i><span class="d-none d-sm-block">Subscriber</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Account Tab starts -->
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    
                                    <!-- superusers edit account form start -->
                                    <form class="form-validate superadmin-data-save">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive border rounded mt-1">
                                                    <h6 class="py-1 mx-1 mb-0 font-medium-2">
                                                        <i data-feather="lock" class="font-medium-3 mr-25"></i>
                                                        <span class="align-middle">Permission</span>
                                                    </h6>
                                                    <table class="table table-striped table-borderless">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Table</th>
                                                                <th>View</th>
                                                                <th>Write</th>
                                                                <th>Create</th>
                                                                <th>Delete</th>
                                                                <th>List</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($superadmins as $superadmin)
                                                                <tr>
                                                                    <td>Users</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-users-read" name="superadmin-users-read"
                                                                            @if ($superadmin->users_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-users-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-users-write" name="superadmin-users-write" @if ($superadmin->users_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-users-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-users-create" name="superadmin-users-create" @if ($superadmin->users_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-users-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-users-delete" name="superadmin-users-delete" @if ($superadmin->users_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-users-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="superadmin-users-list" class="form-control" name="superadmin-users-list">
                                                                            <option value="All" {{$superadmin->users_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$superadmin->users_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$superadmin->users_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Companies</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-compaines-read" name="superadmin-compaines-read" @if ($superadmin->companies_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-compaines-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-compaines-write" name="superadmin-compaines-write" @if ($superadmin->companies_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-compaines-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-compaines-create" name="superadmin-compaines-create" @if ($superadmin->companies_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-compaines-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-compaines-delete" name="superadmin-compaines-delete" @if ($superadmin->companies_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-compaines-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="superadmin-compaines-list" class="form-control" name="superadmin-compaines-list">
                                                                            <option value="All" {{$superadmin->companies_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$superadmin->companies_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$superadmin->companies_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Categories</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-categories-read" name="superadmin-categories-read" @if ($superadmin->categories_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-categories-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-categories-write" name="superadmin-categories-write" @if ($superadmin->categories_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-categories-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-categories-create" name="superadmin-categories-create" @if ($superadmin->categories_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-categories-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-categories-delete" name="superadmin-categories-delete" @if ($superadmin->categories_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-categories-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="superadmin-categories-list" class="form-control" name="superadmin-categories-list">
                                                                            <option value="All" {{$superadmin->categories_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$superadmin->categories_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$superadmin->categories_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Items</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-items-read" name="superadmin-items-read" @if ($superadmin->items_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-items-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-items-write" name="superadmin-items-write" @if ($superadmin->items_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-items-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-items-create" name="superadmin-items-create" @if ($superadmin->items_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-items-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-items-delete" name="superadmin-items-delete" @if ($superadmin->items_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-items-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="superadmin-items-list" class="form-control" name="superadmin-items-list" >
                                                                            <option value="All" {{$superadmin->items_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$superadmin->items_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$superadmin->items_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Site info</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-siteinfo-read" name="superadmin-siteinfo-read" @if ($superadmin->siteinfo_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-siteinfo-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-siteinfo-write" name="superadmin-siteinfo-write" @if ($superadmin->siteinfo_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-siteinfo-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-siteinfo-create" name="superadmin-siteinfo-create" @if ($superadmin->siteinfo_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-siteinfo-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-siteinfo-delete" name="superadmin-siteinfo-delete" @if ($superadmin->siteinfo_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-siteinfo-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="superadmin-siteinfo-list" class="form-control" name="superadmin-siteinfo-list">
                                                                            <option value="All" {{$superadmin->siteinfo_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$superadmin->siteinfo_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$superadmin->siteinfo_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Static Info</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-staticinfo-read" name="superadmin-staticinfo-read" @if ($superadmin->staticinfo_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-staticinfo-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-staticinfo-write" name="superadmin-staticinfo-write" @if ($superadmin->staticinfo_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-staticinfo-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-staticinfo-create" name="superadmin-staticinfo-create" @if ($superadmin->staticinfo_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-staticinfo-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-staticinfo-delete" name="superadmin-staticinfo-delete" @if ($superadmin->staticinfo_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-staticinfo-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="superadmin-staticinfo-list" class="form-control" name="superadmin-staticinfo-list">
                                                                            <option value="All" {{$superadmin->staticinfo_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$superadmin->staticinfo_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$superadmin->staticinfo_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pricing Slider</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-pricing-read" name="superadmin-pricing-read" @if ($superadmin->pricing_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-pricing-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-pricing-write" name="superadmin-pricing-write" @if ($superadmin->pricing_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-pricing-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-pricing-create" name="superadmin-pricing-create" @if ($superadmin->pricing_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-pricing-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-pricing-delete" name="superadmin-pricing-delete" @if ($superadmin->pricing_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-pricing-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="superadmin-pricing-list" class="form-control" name="superadmin-pricing-list">
                                                                            <option value="All" {{$superadmin->pricing_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$superadmin->pricing_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$superadmin->pricing_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Currency Exchange</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-currency-read" name="superadmin-currency-read" @if ($superadmin->currency_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-currency-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-currency-write" name="superadmin-currency-write" @if ($superadmin->currency_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-currency-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-currency-create" name="superadmin-currency-create" @if ($superadmin->currency_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-currency-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-currency-delete" name="superadmin-currency-delete" @if ($superadmin->currency_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-currency-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="superadmin-currency-list" class="form-control" name="superadmin-currency-list" >
                                                                                <option value="All" {{$superadmin->currency_list== "All" ? "selected" : ""}}>All</option>
                                                                                <option value="Only his" {{$superadmin->currency_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                                <option value="No" {{$superadmin->currency_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Blogs</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-blog-read" name="superadmin-blog-read" @if ($superadmin->blog_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-blog-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-blog-write" name="superadmin-blog-write" @if ($superadmin->blog_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-blog-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-blog-create" name="superadmin-blog-create" @if ($superadmin->blog_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-blog-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="superadmin-blog-delete" name="superadmin-blog-delete" @if ($superadmin->blog_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="superadmin-blog-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="superadmin-blog-list" class="form-control" name="superadmin-blog-list" >
                                                                                <option value="All" {{$superadmin->blog_list== "All" ? "selected" : ""}}>All</option>
                                                                                <option value="Only his" {{$superadmin->blog_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                                <option value="No" {{$superadmin->blog_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shopping</td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="superadmin-shopping-list" class="form-control" name="superadmin-shopping-list" >
                                                                                <option value="View" {{$superadmin->shopping_list== "View" ? "selected" : ""}}>View</option>
                                                                                <option value="None" {{$superadmin->shopping_list== "None" ? "selected" : ""}}>None</option>
                                                                            
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>


                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- superusers edit account form ends -->
                                </div>
                                <!-- Account Tab ends -->

                                <!-- Information Tab starts -->
                                <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                    <!-- Adminusers edit Info form start -->
                                    <form class="form-validate admin-data-save">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive border rounded mt-1">
                                                    <h6 class="py-1 mx-1 mb-0 font-medium-2">
                                                        <i data-feather="lock" class="font-medium-3 mr-25"></i>
                                                        <span class="align-middle">Permission</span>
                                                    </h6>
                                                    <table class="table table-striped table-borderless">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Table</th>
                                                                <th>View</th>
                                                                <th>Write</th>
                                                                <th>Create</th>
                                                                <th>Delete</th>
                                                                <th>List</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($admins as $admin)
                                                                <tr>
                                                                    <td>Users</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="admin-users-read" name="admin-users-read" @if ($admin->users_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="admin-users-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->users_write == 'on') checked @endif id="admin-users-write" name="admin-users-write"/>
                                                                            <label class="custom-control-label" for="admin-users-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->users_create == 'on') checked @endif id="admin-users-create" name="admin-users-create"/>
                                                                            <label class="custom-control-label" for="admin-users-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->users_delete == 'on') checked @endif id="admin-users-delete" name="admin-users-delete"/>
                                                                            <label class="custom-control-label" for="admin-users-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="admin-users-list" class="form-control" name="admin-users-list">
                                                                            <option value="All" {{$admin->users_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$admin->users_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$admin->users_list== "No" ? "selected" : ""}}>No</option>" : ""}}>All</option>
                                                                           
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Companies</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->companies_view == 'on') checked @endif id="admin-compaines-read" name="admin-compaines-read"/>
                                                                            <label class="custom-control-label" for="admin-compaines-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->companies_write == 'on') checked @endif id="admin-compaines-write" name="admin-compaines-write"/>
                                                                            <label class="custom-control-label" for="admin-compaines-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->companies_create == 'on') checked @endif id="admin-compaines-create" name="admin-compaines-create"/>
                                                                            <label class="custom-control-label" for="admin-compaines-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->companies_delete == 'on') checked @endif id="admin-compaines-delete" name="admin-compaines-delete"/>
                                                                            <label class="custom-control-label" for="admin-compaines-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="admin-compaines-list" class="form-control" name="admin-compaines-list">
                                                                            <option value="All" {{$admin->companies_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$admin->companies_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$admin->companies_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Categories</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->categories_view == 'on') checked @endif id="admin-categories-read" name="admin-categories-read" />
                                                                            <label class="custom-control-label" for="admin-categories-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->categories_write == 'on') checked @endif id="admin-categories-write" name="admin-categories-write"/>
                                                                            <label class="custom-control-label" for="admin-categories-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->categories_create == 'on') checked @endif id="admin-categories-create" name="admin-categories-create"/>
                                                                            <label class="custom-control-label" for="admin-categories-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->categories_delete == 'on') checked @endif id="admin-categories-delete" name="admin-categories-delete"/>
                                                                            <label class="custom-control-label" for="admin-categories-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="admin-categories-list" class="form-control" name="admin-categories-list">
                                                                            <option value="All" {{$admin->categories_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$admin->categories_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$admin->categories_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Items</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->items_view == 'on') checked @endif id="admin-items-read" name="admin-items-read"/>
                                                                            <label class="custom-control-label" for="admin-items-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->items_write == 'on') checked @endif id="admin-items-write" name="admin-items-write"/>
                                                                            <label class="custom-control-label" for="admin-items-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->items_create == 'on') checked @endif id="admin-items-create" name="admin-items-create"/>
                                                                            <label class="custom-control-label" for="admin-items-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->items_delete == 'on') checked @endif id="admin-items-delete" name="admin-items-delete"/>
                                                                            <label class="custom-control-label" for="admin-items-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="admin-items-list" class="form-control" name="admin-items-list">
                                                                            <option value="All" {{$admin->items_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$admin->items_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$admin->items_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Site info</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->siteinfo_view == 'on') checked @endif id="admin-siteinfo-read" name="admin-siteinfo-read"/>
                                                                            <label class="custom-control-label" for="admin-siteinfo-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->siteinfo_write == 'on') checked @endif id="admin-siteinfo-write" name="admin-siteinfo-write"/>
                                                                            <label class="custom-control-label" for="admin-siteinfo-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->siteinfo_create == 'on') checked @endif id="admin-siteinfo-create" name="admin-siteinfo-create"/>
                                                                            <label class="custom-control-label" for="admin-siteinfo-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->siteinfo_delete == 'on') checked @endif id="admin-siteinfo-delete" name="admin-siteinfo-delete"/>
                                                                            <label class="custom-control-label" for="admin-siteinfo-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="admin-siteinfo-list" class="form-control" name="admin-siteinfo-list">
                                                                            <option value="All" {{$admin->siteinfo_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$admin->siteinfo_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$admin->siteinfo_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Static info</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->staticinfo_view == 'on') checked @endif id="admin-staticinfo-read" name="admin-staticinfo-read"/>
                                                                            <label class="custom-control-label" for="admin-staticinfo-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->staticinfo_write == 'on') checked @endif id="admin-staticinfo-write" name="admin-staticinfo-write"/>
                                                                            <label class="custom-control-label" for="admin-staticinfo-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->staticinfo_create == 'on') checked @endif id="admin-staticinfo-create" name="admin-staticinfo-create"/>
                                                                            <label class="custom-control-label" for="admin-staticinfo-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->staticinfo_delete == 'on') checked @endif id="admin-staticinfo-delete" name="admin-staticinfo-delete"/>
                                                                            <label class="custom-control-label" for="admin-staticinfo-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="admin-staticinfo-list" class="form-control" name="admin-staticinfo-list">
                                                                            <option value="All" {{$admin->staticinfo_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$admin->staticinfo_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$admin->staticinfo_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pricing Slider</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->pricing_view == 'on') checked @endif id="admin-pricing-read" name="admin-pricing-read"/>
                                                                            <label class="custom-control-label" for="admin-pricing-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->pricing_write == 'on') checked @endif id="admin-pricing-write" name="admin-pricing-write"/>
                                                                            <label class="custom-control-label" for="admin-pricing-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->pricing_create == 'on') checked @endif id="admin-pricing-create" name="admin-pricing-create"/>
                                                                            <label class="custom-control-label" for="admin-pricing-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->pricing_delete == 'on') checked @endif id="admin-pricing-delete" name="admin-pricing-delete"/>
                                                                            <label class="custom-control-label" for="admin-pricing-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="admin-pricing-list" class="form-control" name="admin-pricing-list">
                                                                            <option value="All" {{$admin->pricing_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$admin->pricing_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$admin->pricing_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Currency Exchange</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->currency_view == 'on') checked @endif id="admin-currency-read" name="admin-currency-read" />
                                                                            <label class="custom-control-label" for="admin-currency-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->currency_write == 'on') checked @endif id="admin-currency-write" name="admin-currency-write"/>
                                                                            <label class="custom-control-label" for="admin-currency-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->currency_create == 'on') checked @endif id="admin-currency-create" name="admin-currency-create"/>
                                                                            <label class="custom-control-label" for="admin-currency-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->currency_delete == 'on') checked @endif id="admin-currency-delete" name="admin-currency-delete"/>
                                                                            <label class="custom-control-label" for="admin-currency-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="admin-currency-list" class="form-control" name="admin-currency-list">
                                                                                <option value="All" {{$admin->currency_list== "All" ? "selected" : ""}}>All</option>
                                                                                <option value="Only his" {{$admin->currency_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                                <option value="No" {{$admin->currency_list== "No" ? "selected" : ""}}>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Blogs</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->blog_view == 'on') checked @endif id="admin-blog-read" name="admin-blog-read" />
                                                                            <label class="custom-control-label" for="admin-blog-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->blog_write == 'on') checked @endif id="admin-blog-write" name="admin-blog-write"/>
                                                                            <label class="custom-control-label" for="admin-blog-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->blog_create == 'on') checked @endif id="admin-blog-create" name="admin-blog-create"/>
                                                                            <label class="custom-control-label" for="admin-blog-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" @if ($admin->blog_delete == 'on') checked @endif id="admin-blog-delete" name="admin-blog-delete"/>
                                                                            <label class="custom-control-label" for="admin-blog-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="admin-blog-list" class="form-control" name="admin-blog-list">
                                                                                <option value="All" {{$admin->blog_list== "All" ? "selected" : ""}}>All</option>
                                                                                <option value="Only his" {{$admin->blog_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                                <option value="No" {{$admin->blog_list== "No" ? "selected" : ""}}>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shopping</td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="admin-shopping-list" class="form-control" name="admin-shopping-list" >
                                                                                <option value="View" {{$admin->shopping_list== "View" ? "selected" : ""}}>View</option>
                                                                                <option value="None" {{$admin->shopping_list== "None" ? "selected" : ""}}>None</option>
                                                                            
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Adminusers edit Info form ends -->
                                </div>
                                <!-- Information Tab ends -->

                                <!-- Social Tab starts -->
                                <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                                    <!-- users edit subscriber form start -->
                                    <form class="form-validate subscriber-data-save">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive border rounded mt-1">
                                                    <h6 class="py-1 mx-1 mb-0 font-medium-2">
                                                        <i data-feather="lock" class="font-medium-3 mr-25"></i>
                                                        <span class="align-middle">Permission</span>
                                                    </h6>
                                                    <table class="table table-striped table-borderless">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Table</th>
                                                                <th>View</th>
                                                                <th>Write</th>
                                                                <th>Create</th>
                                                                <th>Delete</th>
                                                                <th>List</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($subscribers as $subscriber)
                                                                <tr>
                                                                    <td>Users</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-users-read" name="subscriber-users-read" @if ($subscriber->users_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-users-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-users-write" name="subscriber-users-write" @if ($subscriber->users_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-users-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-users-create" name="subscriber-users-create" @if ($subscriber->users_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-users-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-users-delete" name="subscriber-users-delete" @if ($subscriber->users_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-users-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="subscribe-users-list" class="form-control" name="subscriber-users-list">
                                                                            <option value="All" {{$subscriber->users_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$subscriber->users_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$subscriber->users_list== "No" ? "selected" : ""}}>No</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Companies</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-compaines-read" name="subscriber-compaines-read" @if ($subscriber->companies_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-compaines-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-compaines-write" name="subscriber-compaines-write" @if ($subscriber->companies_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-compaines-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-compaines-create" name="subscriber-compaines-create" @if ($subscriber->companies_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-compaines-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-compaines-delete" name="subscriber-compaines-delete" @if ($subscriber->companies_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-compaines-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="subscribe-compaines-list" class="form-control" name="subscriber-compaines-list">
                                                                            <option value="All" {{$subscriber->companies_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$subscriber->companies_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$subscriber->companies_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Categories</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-categories-read" name="subscriber-categories-read" @if ($subscriber->categories_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-categories-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-categories-write" name="subscriber-categories-write" @if ($subscriber->categories_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-categories-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-categories-create" name="subscriber-categories-create" @if ($subscriber->categories_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-categories-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-categories-delete" name="subscriber-categories-delete" @if ($subscriber->categories_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-categories-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="subscribe-categories-list" class="form-control" name="subscriber-categories-list">
                                                                            <option value="All" {{$subscriber->categories_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$subscriber->categories_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$subscriber->categories_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Items</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-items-read" name="subscriber-items-read" @if ($subscriber->items_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-items-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-items-write" name="subscriber-items-write" @if ($subscriber->items_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-items-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-items-create" name="subscriber-items-create" @if ($subscriber->items_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-items-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-items-delete" name="subscriber-items-delete" @if ($subscriber->items_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-items-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="subscribe-items-list" class="form-control" name="subscriber-items-list">
                                                                            <option value="All" {{$subscriber->items_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$subscriber->items_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$subscriber->items_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Site info</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-siteinfo-read" name="subscriber-siteinfo-read" @if ($subscriber->siteinfo_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-siteinfo-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-siteinfo-write" name="subscriber-siteinfo-write" @if ($subscriber->siteinfo_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-siteinfo-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-siteinfo-create" name="subscriber-siteinfo-create" @if ($subscriber->siteinfo_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-siteinfo-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-siteinfo-delete" name="subscriber-siteinfo-delete" @if ($subscriber->siteinfo_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-siteinfo-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="subscribe-siteinfo-list" class="form-control" name="subscriber-siteinfo-list">
                                                                            <option value="All" {{$subscriber->siteinfo_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$subscriber->siteinfo_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$subscriber->siteinfo_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Static info</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-staticinfo-read" name="subscriber-staticinfo-read" @if ($subscriber->staticinfo_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-staticinfo-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-staticinfo-write" name="subscriber-staticinfo-write" @if ($subscriber->staticinfo_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-staticinfo-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-staticinfo-create" name="subscriber-staticinfo-create" @if ($subscriber->staticinfo_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-staticinfo-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-staticinfo-delete" name="subscriber-staticinfo-delete" @if ($subscriber->staticinfo_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-staticinfo-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="subscribe-staticinfo-list" class="form-control" name="subscriber-staticinfo-list">
                                                                            <option value="All" {{$subscriber->staticinfo_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$subscriber->staticinfo_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$subscriber->staticinfo_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pricing Slider</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-pricing-read" name="subscriber-pricing-read" @if ($subscriber->pricing_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-pricing-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-pricing-write" name="subscriber-pricing-write" @if ($subscriber->pricing_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-pricing-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-pricing-create" name="subscriber-pricing-create" @if ($subscriber->pricing_create == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-pricing-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-pricing-delete" name="subscriber-pricing-delete" @if ($subscriber->pricing_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-pricing-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <select id="subscribe-pricing-list" class="form-control" name="subscriber-pricing-list">
                                                                            <option value="All" {{$subscriber->pricing_list== "All" ? "selected" : ""}}>All</option>
                                                                            <option value="Only his" {{$subscriber->pricing_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                            <option value="No" {{$subscriber->pricing_list== "No" ? "selected" : ""}}>No</option>
                                                                            
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Currency Exchange</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-currency-read" name="subscriber-currency-read" @if ($subscriber->currency_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-currency-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-currency-write" name="subscriber-currency-write" @if ($subscriber->currency_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-currency-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-currency-create" name="subscriber-currency-create" @if ($subscriber->currency_create == 'on') checked @endif />
                                                                            <label class="custom-control-label" for="subscribe-currency-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-currency-delete" name="subscriber-currency-delete" @if ($subscriber->currency_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-currency-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="subscribe-currency-list" class="form-control" name="subscriber-currency-list">
                                                                                <option value="All" {{$subscriber->currency_list== "All" ? "selected" : ""}}>All</option>
                                                                                <option value="Only his" {{$subscriber->currency_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                                <option value="No" {{$subscriber->currency_list== "No" ? "selected" : ""}}>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Blogs</td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-blog-read" name="subscriber-blog-read" @if ($subscriber->blog_view == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-blog-read"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-blog-write" name="subscriber-blog-write" @if ($subscriber->blog_write == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-blog-write"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-blog-create" name="subscriber-blog-create" @if ($subscriber->blog_create == 'on') checked @endif />
                                                                            <label class="custom-control-label" for="subscribe-blog-create"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="subscribe-blog-delete" name="subscriber-blog-delete" @if ($subscriber->blog_delete == 'on') checked @endif/>
                                                                            <label class="custom-control-label" for="subscribe-blog-delete"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="subscribe-blog-list" class="form-control" name="subscriber-blog-list">
                                                                                <option value="All" {{$subscriber->blog_list== "All" ? "selected" : ""}}>All</option>
                                                                                <option value="Only his" {{$subscriber->blog_list== "Only his" ? "selected" : ""}}>Only his</option>
                                                                                <option value="No" {{$subscriber->blog_list== "No" ? "selected" : ""}}>No</option>
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Shopping</td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-group">
                                                                            <select id="subscribe-shopping-list" class="form-control" name="subscriber-shopping-list" >
                                                                                <option value="View" {{$subscriber->shopping_list== "View" ? "selected" : ""}}>View</option>
                                                                                <option value="None" {{$subscriber->shopping_list== "None" ? "selected" : ""}}>None</option>
                                                                            
                                                                            </select>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit social form ends -->
                                </div>
                                <!-- Social Tab ends -->
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-success toast-sucess-message" id="type-success" hidden>Success</button>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts/footer')
    <!-- END: Footer-->

    <script>
        $(function(){
            $(".superadmin-data-save").submit(function(e){
                var formData = new FormData(this);
                $userid = 'roleupdateone/1';
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: $userid,
                    cache:false,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if(data['success']){
                            $('.toast-sucess-message').click();
                            window.location.reload();
                        }
                    }
                });
            });
            $(".admin-data-save").submit(function(e){
                var formData = new FormData(this);
                $userid = 'roleupdatetwo/2';
                e.preventDefault();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: $userid,
                    cache:false,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if(data['success']){
                            $('.toast-sucess-message').click();
                            window.location.reload();
                        }
                    }
                });
            });
        })
        $(".subscriber-data-save").submit(function(e){
            var formData = new FormData(this);
            $userid = 'roleupdatethree/3';
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: $userid,
                cache:false,
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if(data['success']){
                        $('.toast-sucess-message').click();
                        window.location.reload();
                    }
                }
            });
        });
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>