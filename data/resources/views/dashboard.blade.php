<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts/header')

<link rel="stylesheet" type="text/css" href="./app-assets/css/pages/page-profile.css">
    <!-- END: Page CSS-->
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
            <div class="content-body">
                <div id="user-profile">
                    <!-- profile header -->
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
                                <!-- profile cover photo -->
                                <img class="card-img-top" src="./app-assets/images/profile.jpg" alt="User Profile Image" style="max-width: 40%; max-height:300px;" />
                                <!--/ profile cover photo -->

                                <div class="position-relative">
                                    <!-- profile picture -->
                                    <div class="profile-img-container d-flex align-items-center">
                                        <div class="profile-img" style="opacity:0">
                                            <h2 class="text-white"> {{Auth::user()->name}}</h2>
                                        </div>
                                        <!-- profile title -->
                                        <div class="profile-title ml-3">
                                            <h2 class="text-white">{{Auth::user()->name}}</h2>
                                            <p class="text-white">{{Auth::user()->role}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ profile header -->
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts/footer')
    <!-- END: Footer-->

    <!-- BEGIN: Page JS-->
    <script src="./app-assets/js/scripts/pages/page-profile.js"></script>
    <!-- END: Page JS-->

    <script>
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