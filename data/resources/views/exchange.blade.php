<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts/header')
<!-- END: Head-->
<!-- BEGIN: Body-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">

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
                <section class="app-user-list {{Auth::user()->role}} @if(Auth::user()->role == 'editor') subscriber @endif">

                    <!-- list section start -->
                        <div class="row mt-4">
                            <div class="col-md-4 text-center">
                                <h3>Exchange Rate</h3>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    @foreach ($exchanges as $exchange)
                                        <input type="text" class="form-control" id="exchange" value="{{$exchange -> exchange}}" placeholder="Enter Exchange Rate" disabled/>
                                        
                                        <button type="button" class="btn btn-primary justofy-content-center d-flex mt-5 data-submit userupdate_new" data-id="{{$exchange -> id}}" data-exchange="{{$exchange -> exchange}}">Edit</button>
                                    @endforeach
                                </div>
                            </div>                            
                        </div>                       
                    
                        <!-- Modal to update new user starts-->
                        <div class="modal modal-slide-in update_user_modal fade" id="updateModal">
                            <div class="modal-dialog">
                                <form class="modal-content update-new-user pt-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="updateModalLabel">Update Exchange rate</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="uexchange">Exchange rate</label>
                                            <input type="text" class="form-control dt-full-name" id="uexchange"  name="uexchange" aria-label="uexchange" aria-describedby="uexchange" required/>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
                                        <button class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to update new user Ends-->
                    <!-- list section end -->
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
    
    <!-- END: Page JS-->

    <script>
        $(function(){
            $(".userupdate_new").on("click", function(){
                var $id = $(this).data('id');
                var $userid = 'exchangeupdate/' + ($(this).data('id'));
                // $("#uUserid").val($(this).data('id'));
                $("#uexchange").val($(this).data('exchange'));
                
                $(".update_user_modal").modal('show');
                
                $('.update_data_user').on("click", function(){
                    console.log($userid);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: $userid,
                        data: { id: $id, exchange: $("#uexchange").val()},
                        success: function(data) {
                            if(data['success']){
                                window.location.reload();
                            }
                        }
                    });
               
                    // window.location.reload();
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