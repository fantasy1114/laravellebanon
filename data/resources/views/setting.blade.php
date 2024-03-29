<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts/header')
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    @include('layouts/navbar')
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    @include('layouts/layout')
    <!-- END LAYOUT -->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body mb-5">
                <!-- users list start -->
                <div class="content-body">
                    <!-- account setting page -->
                    <section id="page-account-settings">
                        <div class="row">
                            <!-- left menu section -->
                            <div class="col-md-3 mb-2 mb-md-0">
                                <ul class="nav nav-pills flex-column nav-left">
                                    <!-- general -->
                                    <li class="nav-item">
                                        <a class="nav-link active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                            <i data-feather="user" class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">General</span>
                                        </a>
                                    </li>
                                    <!-- change password -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                            <i data-feather="lock" class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Change Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ left menu section -->
    
                            <!-- right content section -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <!-- general tab -->
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
    
                                                <!-- form -->
                                                <form class="validate-form update-setting-page mt-2">
                                                 
                                                        <!-- header media -->
                                                        <div class="media">
                                                            <a href="javascript:void(0);" class="mr-25">
                                                                <img src="{{Auth::user()->profile_photo_path}}" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                            </a>
                                                            <!-- upload and reset button -->
                                                            <div class="media-body mt-75 ml-1">
                                                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                                <input type="file" id="account-upload" hidden accept="image/*" name="uaccount-upload" />
                                                            </div>
                                                            <!--/ upload and reset button -->
                                                        </div>
                                                        <!--/ header media -->
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-username">Username</label>
                                                                    <input type="text" class="form-control" id="account-username" name="username" placeholder="Username" value="{{Auth::user()->name}}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="account-e-mail">E-mail</label>
                                                                    <input type="email" class="form-control" id="account-e-mail" name="email" placeholder="Email" value="{{Auth::user()->email}}" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                            </div>
                                                        </div>
                                                  
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ general tab -->
    
                                            <!-- change password -->
                                            <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <!-- form -->
                                                <form class="validate-form update-password-page">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-old-password">Old Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-old-password" name="password" placeholder="Old Password" required/>
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text cursor-pointer">
                                                                            <i data-feather="eye"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-new-password">New Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" id="account-new-password" name="new-password" class="form-control" placeholder="New Password" required/>
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text cursor-pointer">
                                                                            <i data-feather="eye"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="account-retype-new-password">Retype New Password</label>
                                                                <div class="input-group form-password-toggle input-group-merge">
                                                                    <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="New Password" required/>
                                                                    <div class="input-group-append">
                                                                        <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mr-1 mt-1">Save changes</button>
                                                            
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--/ form -->
                                            </div>
                                            <!--/ change password -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ right content section -->
                        </div>
                        <button type="button" class="btn btn-outline-danger toast-userpass-already-message" id="type-userpass-already-error" hidden>Error</button>
                    </section>
                    <!-- / account setting page -->
    
                </div>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts/footer')
    <!-- END: Footer-->

    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    <!-- END: Page JS-->

    <script>
        $(function(){                
            $('.update-setting-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'settingupdate/' + {{Auth::user()->id}}
                console.log(formData);
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
                            window.location.reload();
                        }
                    }
                });
            });   
            $('.update-password-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'settingpasswordupdate/' + {{Auth::user()->id}}
                
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
                            window.location.reload();
                        }
                        else{
                            $('.toast-userpass-already-message').click();
                        }
                    }
                });
            });            
        })
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
        
       
    </script>
</body>
<!-- END: Body-->

</html>