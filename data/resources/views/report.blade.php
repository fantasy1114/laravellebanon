<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts/header')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
<!-- END: Vendor CSS-->

<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-file-uploader.css">
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
                <!-- Dropzone section start -->
                <section id="dropzone-examples">

                    <!-- remove all thumbnails file upload starts -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <button id="clear-dropzone" class="btn btn-outline-primary mb-1">
                                        <i data-feather="trash" class="mr-25"></i>
                                        <span class="align-middle">Clear File</span>
                                    </button>
                                    <form action="#" class="dropzone dropzone-area" id="dpz-remove-all-thumb">
                                        <div class="dz-message">Excel files here or click to upload.</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- remove all thumbnails file upload ends -->
                </section>
                <!-- Dropzone section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <!-- BEGIN: Footer-->
    @include('layouts/footer')
    <!-- END: Footer-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/form-file-uploader.js"></script>
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