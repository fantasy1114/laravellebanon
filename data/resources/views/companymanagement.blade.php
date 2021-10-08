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
    <div class="app-content content @if(Auth::user()->rolefunction->companies_view != 'on') data-page-close @endif" >
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <button class="btn btn-outline-primary toast-stacked-toggler" hidden>Staked Toast</button>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
              
                    <!-- list section start -->
                    <div class="card">
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="thead-light">
                                    <tr>
                                        <!-- <th></th> -->
                                        <th>Company</th>
                                        <th>Company Name</th>
                                        <th>Logo</th>
                                        <th>Status</th>
                                        <th>Sell Method</th>
                                        <th>Exchange Rate</th>
                                        <th>Can Deliver</th>
                                        <th>Delivery Time</th>
                                        <th class="@if(Auth::user()->rolefunction->companies_write != 'on' && Auth::user()->rolefunction->companies_delete != 'on') data-page-close @endif">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companys as $company)
                                        <tr>
                                            <td>{{$company -> companyname}}</td>
                                            <td>{{$company -> companyname}}</td>
                                            <td><img src="{{$company -> logo}}" style="width:48px; height:34px;"></td>
                                            <td>
                                                <div class="custom-control custom-switch custom-control-inline status-update" data-id="{{$company -> id}}" data-status="{{$company -> status}}">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch{{$company -> id}}" @if ($company -> status == 'on') checked @endif class="status-checked" >
                                                    <label class="custom-control-label" for="customSwitch{{$company -> id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$company -> sellmethod}}</td>
                                            <td>{{$company -> exchange}}</td>
                                            <td> <input type="checkbox" class="" @if ($company -> can == 'on') checked @endif disabled>
                                                </td>
                                            <td>{{$company -> delivery}}</td>
                                            <td>
                                                <button class="dropdown-item userupdate_new @if(Auth::user()->rolefunction->companies_write != 'on') data-page-close @endif" data-id="{{$company -> id}}" data-companyname="{{$company -> companyname}}" data-status="{{$company -> status}}" data-sellmethod="{{$company -> sellmethod}}" data-exchange="{{$company -> exchange}}" data-delivery="{{$company -> delivery}}" data-can="{{$company -> can}}" data-logo="{{$company -> logo}}" class="@if(Auth::user()->rolefunction->companies_write != 'on') data-page-close @endif">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    <span></span>
                                                </button>
                                                <button data-id="{{$company->id}}" data-companyname="{{$company->companyname}}"  class="dropdown-item delete_company_data @if(Auth::user()->rolefunction->companies_delete != 'on') data-page-close @endif" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                </button>

                                            </td>
                                          
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0" >
                                    {{csrf_field()}}
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">New Company</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-companyname">Company Name</label>
                                            <input type="text" class="form-control dt-full-name" id="basic-icon-default-companyname" placeholder="Google" name="companyname" aria-label="Google" aria-describedby="basic-icon-default-companyname2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="photo">Logo</label>
                                            <!-- header media -->
                                                <div class="media">
                                                    <a href="javascript:void(0);" class="mr-25">
                                                        <img src="./uploads/default.png" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                    </a>
                                                    <!-- upload and reset button -->
                                                    <div class="media-body mt-75 ml-1">
                                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                        <input type="file" id="account-upload" name="account-upload" hidden accept="image/*" />
                                                    </div>
                                                    <!--/ upload and reset button -->
                                                </div>
                                            <!--/ header media -->
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="status">Status</label>

                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="status" class="status-checked" name="status">
                                                <label class="custom-control-label" for="status"></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="sellmethod">Selling Method</label>
                                            <select id="sellmethod" name="sellmethod" class="form-control">
                                                <option value="Sell direct">Sell direct</option>
                                                <option value="Via dealers">Via dealers</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exchange">Company Rate</label>
                                            <div class="custom-control custom-switch custom-control-inline ml-1">
                                                <input type="checkbox" class="custom-control-input" id="exchange_status" class="status-checked">
                                                <label class="custom-control-label" for="exchange_status"></label>
                                            </div>
                                            <label class="form-label" for="exchange">Site Rate</label>
                                            <input type="number" class="form-control dt-full-name" id="exchange" placeholder="Exchange" name="exchange" aria-label="Name" aria-describedby="exchange" />
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <label class="form-label" for="exchange">Can Deliver</label>
                                            <input type="checkbox" class="custom-control-input" id="can" name="can" />
                                            <label class="custom-control-label" name='can' for="can"></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="delivery">Delivery Time</label>
                                            <input type="text" class="form-control dt-full-name" id="delivery"
                                                placeholder="Delivery" name="delivery" aria-label="Name"
                                                aria-describedby="delivery" />
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary mr-1 data-submit @if(Auth::user()->rolefunction->companies_delete != 'on') data-page-close @endif">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary @if(Auth::user()->rolefunction->companies_delete != 'on') data-page-close @endif" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->

                        <!-- Modal to update new user starts-->
                        <div class="modal modal-slide-in update_user_modal fade" id="updateModal">
                            <div class="modal-dialog">
                                <form class="modal-content update-new-user pt-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="updateModalLabel">Update Company</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="ucompanyname">Company Name</label>
                                            <input type="text" class="form-control dt-full-name" id="ucompanyname" placeholder="Google" name="ucompanyname" aria-label="Google" aria-describedby="ucompanyname" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uphoto">Logo</label>
                                            <!-- header media -->
                                            <div class="media">
                                                <a href="javascript:void(0);" class="mr-25">
                                                    <img id="uaccount-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                </a>
                                                <!-- upload and reset button -->
                                                <div class="media-body mt-75 ml-1">
                                                    <label for="uaccount-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                    <input type="file" id="uaccount-upload" name="uaccount-upload" hidden accept="image/*" />
                                                </div>
                                                <!--/ upload and reset button -->
                                            </div>
                                     
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="ustatus" class="status-checked" name="ustatus">
                                                <label class="custom-control-label" for="ustatus"></label>
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <label class="form-label" for="usellmethod">Selling Method</label>
                                            <select id="usellmethod" name="usellmethod" class="form-control">
                                                <option value="Sell direct">Sell direct</option>
                                                <option value="Via dealers">Via dealers</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exchange">Exchange Rate</label>
                                            <input type="number" step="any" class="form-control dt-full-name" id="uexchange" placeholder="Exchange" name="uexchange" aria-label="Name" aria-describedby="uexchange" />
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <label class="form-label" for="exchange">Can Deliver</label>
                                            <input type="checkbox" class="custom-control-input" id="ucan" name="ucan" />
                                            <label class="custom-control-label" for="ucan"></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="delivery">Delivery Time</label>
                                            <input type="text" class="form-control dt-full-name" id="udelivery"
                                                placeholder="Delivery" name="udelivery" aria-label="Name"
                                                aria-describedby="udelivery" />
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                        <button class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to update new user Ends-->

                        <button type="button" class="btn btn-outline-success toast-sucess-message" id="type-success" hidden>Success</button>
                        <button type="button" class="btn btn-outline-danger toast-company-error-message" id="type-error" hidden>Error</button>
                        <button type="button" class="btn btn-outline-danger toast-company-update-message" id="type-company-update-error" hidden>Error</button>
                    </div>
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
    <script>
         var $userinfo = {{Auth::user()->id}}
    </script>

    <script>
        $(function(){
            $("#exchange_status").on("change", function(){
                if($("#exchange_status").prop( "checked" )){
                    $('#exchange').val({{$exchange_value}});
                }
                else {

                    $('#exchange').val('');
                }
            });
        });
    </script>

    <!-- BEGIN: Page JS-->

    <script src="../../../app-assets/js/scripts/pages/app-company-list.js"></script>
    <script src="../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    <!-- END: Page JS-->

    <script>
        $(function(){
            // $(".dt-buttons").last().addClass("{{Auth::user()->role}}");
            $(".userupdate_new").on("click", function(){
                var $checkstatus = ($(this).data('status'))
                var $id = $(this).data('id');
                var $userid = 'companymanagementupdate/' + ($(this).data('id'));
                // $("#uUserid").val($(this).data('id'));
                $("#ucompanyname").val($(this).data('companyname'));
                // if($checkstatus == 'on'){
                //     $("#ustatus").prop('checked', true);
                // }
                // else{
                //     $("#ustatus").prop('checked', false);
                // }
                $("#usellmethod").val($(this).data('sellmethod'));
                $("#uexchange").val($(this).data('exchange'));
                $("#uaccount-upload-img").attr('src',($(this).data('logo')));
                if($(this).data('can') == 'on'){
                    $("#ucan").prop('checked', true);
                }
                else{
                    $("#ucan").prop('checked', false);
                }
                $("#udelivery").val($(this).data('delivery'));
                $(".update_user_modal").modal('show');
              
                $('.update-new-user').on("submit", function(e){
                    var formData = new FormData(this);
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
                                $('.btn-outline-secondary').click();
                                $('.toast-company-update-message').click();
                            }
                        }
                    });
                });
            });
           
            $('.status-update').on('change', function () {
                var $id = $(this).data('id');
                var $userid = 'companymanagementupdate/' + ($(this).data('id'));
                console.log($id);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: $userid,
                    data: {status: 'change'},
                    success: function(data) {
                        if(data['success']){
                            $('.toast-sucess-message').click();
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