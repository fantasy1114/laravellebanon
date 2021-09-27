
<head>
    @include('layouts/header')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-file-uploader.css">
    <!-- END: Page CSS-->
</head>
<style>
    .item .item-content {
    padding: 30px 35px
}

.image-upload {
    width: 100%;
    height: 300px;
    border: 1px dashed #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
    position: relative;
    text-align: center;
    background: #f8f8f9;
    color: #666;
    overflow: hidden
}

.item-wrapper form img {
    margin-bottom: 20px;
    width: auto;
    height: auto;
    max-height: 400px;
    width: auto;
    border-radius: 5px;
    overflow: hidden
}

.image-upload img {
    height: 100% !important;
    width: auto !important;
    border-radius: 0px;
    margin: 0 auto
}

.image-upload i {
    font-size: 6em;
    color: #ccc
}

.image-upload input {
    cursor: pointer;
    opacity: 0;
    height: 100%;
    width: 100%;
    z-index: 10;
    position: absolute;
    top: 0;
    left: 0
}

.item-wrapper input {
    height: 43px;
    line-height: 43px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 20px
}
</style>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    @include('layouts/navbar')
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    @include('layouts/layout')
   
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body {{ Auth::user()->role }}">
                
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <input type="file" name="file" class="form-control dropzone dropzone-area">
                    </div>
                    <br>
                    <input type="text" value="{{Auth::user()->name}}" name="usernamesave" hidden>
                    <div class="text-center">
                        <button class="btn btn-success">Import Data</button>
                        <a class="btn btn-warning" href="export/{{Auth::user()->name}}">Export Data</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
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