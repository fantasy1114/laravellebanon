<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts/header')
<!-- END: Head-->
<!-- BEGIN: Body-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

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
                <section class="app-user-list">
                    @foreach ($siteinfos as $siteinfo)
                        
                        <!-- list section start -->
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Title</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="title" value={{$siteinfo -> title}} placeholder="Enter Title" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Phone Number</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="phone" value={{$siteinfo -> phone}} placeholder="Enter Phone Number" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Email Address</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="email" class="form-control" id="email" value={{$siteinfo -> email}} placeholder="Enter Email Address" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Office Address</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="office" value="{{$siteinfo -> office}}" placeholder="Enter Office Address" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Whatapp Number</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="whatapp" value={{$siteinfo -> whatapp}} placeholder="Enter Whatapp Number" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Logo</h3>
                                </div>
                                <div class="col-md-8">
                                    
                                    <!-- header media -->
                                    <div class="media">
                                    
                                            <a href="javascript:void(0);" class="mr-25">
                                                <img src="{{$siteinfo -> logo}}" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                            </a>
                        
                                        
                                        <!-- upload and reset button -->
                                        {{-- <div class="media-body mt-75 ml-1">
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                            <input type="file" id="account-upload" hidden accept="image/*" />
                                        </div> --}}
                                        <!--/ upload and reset button -->
                                    </div>
                                    <!--/ header media -->
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="col-md-8">
                    
                                    <input type="text" class="form-control" id="title" value={{$siteinfo -> contacts}} placeholder="Enter Contacts" disabled/>
                        
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Location</h3>
                                    <h3 class="mt-2">Lat</h3>
                                    <input type="text" class="form-control" id="title" value={{$siteinfo -> lat}} disabled/>
                                    <h3 class="mt-2">Lng</h3>
                                    <input type="text" class="form-control" id="title" value={{$siteinfo -> lng}} disabled/>
                                </div>
                                <div class="col-md-8" style="height:300px; display:flex">
                                    {{-- @foreach ($siteinfos as $siteinfo)
                                    <td>{{$siteinfo -> location}}</td>
                                    @endforeach --}}
                                    <div id="map" style="">
                                    
                                    </div>
                                </div>
                            </div>
                        
                        <!-- list section end -->
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                    <button type="button" class="btn btn-primary justofy-content-center d-flex mt-5 data-submit userupdate_new" data-id="{{$siteinfo -> id}}" data-title="{{$siteinfo -> title}}" data-logo="{{$siteinfo -> logo}}" data-contacts="{{$siteinfo -> contacts}}" data-lat="{{$siteinfo -> lat}}" data-lng="{{$siteinfo -> lng}}" data-phone="{{$siteinfo -> phone}}" data-email="{{$siteinfo -> email}}" data-office="{{$siteinfo -> office}}" data-whatapp="{{$siteinfo -> whatapp}}">Edit</button>
                            </div>
                            
                        </div>
                    @endforeach
                    <!-- Modal to update new user starts-->
                    <div class="modal modal-slide-in update_user_modal fade" id="updateModal">
                        <div class="modal-dialog">
                            <form class="modal-content update-new-user pt-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="updateModalLabel">Update Info</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="utitle">Title</label>
                                        <input type="text" class="form-control dt-full-name" id="utitle"  name="utitle" aria-label="utitle" aria-describedby="utitle" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uphone">Phone Number</label>
                                        <input type="text" class="form-control dt-full-name" id="uphone"  name="uphone" aria-label="uphone" aria-describedby="uphone" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uemail">Email Address</label>
                                        <input type="email" class="form-control dt-full-name" id="uemail"  name="uemail" aria-label="uemail" aria-describedby="uemail" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uoffice">Office Address</label>
                                        <input type="text" class="form-control dt-full-name" id="uoffice"  name="uoffice" aria-label="uoffice" aria-describedby="uoffice" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uwhatapp">Whatapp Number</label>
                                        <input type="text" class="form-control dt-full-name" id="uwhatapp"  name="uwhatapp" aria-label="uwhatapp" aria-describedby="uwhatapp" required/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="utitle">Logo</label>
                                        <div class="media">
                                            <a href="javascript:void(0);" class="mr-25">
                                                <img  id="uaccount-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                            </a>
                                            <!-- upload and reset button -->
                                            <div class="media-body mt-75 ml-1">
                                                <label for="uaccount-upload" class="btn btn-sm btn-primary mb-75 mr-75">Change</label>
                                                <input type="file" id="uaccount-upload" name="uaccount-upload" hidden accept="image/*" />
                                            </div>
                                            <!--/ upload and reset button -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="ucontacts">Contact</label>
                                        <input type="text" class="form-control dt-full-name" id="ucontacts"  name="ucontacts" aria-label="ucontacts" aria-describedby="ucontacts" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="ulat">Lat</label>
                                        <input type="text" class="form-control dt-full-name" id="ulat"  name="ulat" aria-label="ulat" aria-describedby="ulat" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="ulng">Lng</label>
                                        <input type="text" class="form-control dt-full-name" id="ulng"  name="ulng" aria-label="ulng" aria-describedby="ulng" required/>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
                                    <button class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal to update new user Ends-->
                </section>
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

    <!-- BEGIN: Page JS-->
    @foreach ($siteinfos as $siteinfo)
        <script>
            var maplat = JSON.parse("{{$siteinfo -> lat}}");
            var maplng = JSON.parse("{{$siteinfo -> lng}}");
        </script>
    @endforeach
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0ddhKTA8ilSdtLJQcBMXoGe73aU3Hcro&callback=initMap&libraries=&v=weekly" async></script>
    <script src="{{('js/map.js')}}"></script>

    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    <!-- END: Page JS-->

    <script>
        $(function(){
            $(".userupdate_new").on("click", function(){
                var $id = $(this).data('id');
                var $userid = 'siteinfoupdate/' + ($(this).data('id'));
                // $("#uUserid").val($(this).data('id'));
                $("#utitle").val($(this).data('title'));
                $("#uaccount-upload-img").attr('src',($(this).data('logo')));
                $("#ucontacts").val($(this).data('contacts'));
                $("#ulat").val($(this).data('lat'));
                $("#ulng").val($(this).data('lng'));
                $("#uphone").val($(this).data('phone'));
                $("#uemail").val($(this).data('email'));
                $("#uoffice").val($(this).data('office'));
                $("#uwhatapp").val($(this).data('whatapp'));
                $(".update_user_modal").modal('show');
                
                $('.update-new-user').submit(function(e){
                    var formData = new FormData(this);
                    // console.log(formData)
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


                // $('.update_data_user').on("click", function(){
                //     console.log($userid);
                //     $.ajax({
                //         headers: {
                //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //         },
                //         type: 'post',
                //         url: $userid,
                //         data: { id: $id, companyname: $("#ucompanyname").val(), status: $("#ustatus").val()},
                //         success: function(data) {
                //             if(data['success']){
                //                 window.location.reload();
                //             }
                //         }
                //     });
               
                //     // window.location.reload();
                // });
               
            
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