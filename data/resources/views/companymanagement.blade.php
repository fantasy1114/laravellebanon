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
                                        <th>Status</th>
                                        <th>Sell Method</th>
                                        <th>Exchange Rate</th>
                                        <th>Delivery Time</th>
                                        <th class="{{Auth::user()->role}} ">Edit</th>
                                        <th class="{{Auth::user()->role}} ">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companys as $company)
                                        <tr>
                                            <td>{{$company -> companyname}}</td>
                                            <td>{{$company -> companyname}}</td>
                                            {{-- <td>{{$company -> status}}</td> --}}
                                            <td>
                                                <div class="custom-control custom-switch custom-control-inline status-update" data-id="{{$company -> id}}" data-status="{{$company -> status}}">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitch{{$company -> id}}" @if ($company -> status == 'Active') checked @endif class="status-checked" >
                                                    <label class="custom-control-label" for="customSwitch{{$company -> id}}"></label>
                                                </div>
                                            </td>
                                            <td>{{$company -> sellmethod}}</td>
                                            <td>{{$company -> exchange}}</td>
                                            <td>{{$company -> delivery}}</td>
                                            <td class="{{Auth::user()->role}}">
                                                <button class="dropdown-item userupdate_new" data-id="{{$company -> id}}" data-companyname="{{$company -> companyname}}" data-status="{{$company -> status}}" data-sellmethod="{{$company -> sellmethod}}" data-exchange="{{$company -> exchange}}" data-delivery="{{$company -> delivery}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    <span></span>
                                                </button>
                                            </td>
                                            <td class="{{Auth::user()->role}}">
                                                <button class="dropdown-item delete_data" data-id="{{$company->id}}" data-companyname="{{$company->companyname}}" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span></span>
                                                </button>
                                            </td>
                                            {{-- <td class="{{Auth::user()->role}} ">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                        <!-- <i data-feather="more-vertical"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item userupdate_new" data-id="{{$company -> id}}" data-companyname="{{$company -> companyname}}" data-status="{{$company -> status}}" data-sellmethod="{{$company -> sellmethod}}"
                                                            data-exchange="{{$company -> exchange}}" data-delivery="{{$company -> delivery}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            <span>Edit</span>
                                                        </button>
                                                        <button class="dropdown-item delete_data" data-id="{{$company->id}}" data-companyname="{{$company->companyname}}" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Delete</span>
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                            </td> --}}
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
                                            <label class="form-label" for="status">Status</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="sellmethod">Selling Method</label>
                                            <select id="sellmethod" name="sellmethod" class="form-control">
                                                <option value="Sell direct">Sell direct</option>
                                                <option value="Via dealers">Via dealers</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exchange">Exchange Rate</label>
                                            <input type="number" class="form-control dt-full-name" id="exchange"
                                                placeholder="Exchange" name="exchange" aria-label="Name"
                                                aria-describedby="exchange" />
                                        </div>
                                        <div class="custom-control custom-checkbox" checked="yes">
                                            <label class="form-label" for="exchange">Can Deliver</label>
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" mame="customCheck1" />
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="delivery">Delivery Time</label>
                                            <input type="text" class="form-control dt-full-name" id="delivery"
                                                placeholder="Delivery" name="delivery" aria-label="Name"
                                                aria-describedby="delivery" />
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary mr-1 data-submit {{Auth::user()->role}}">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary {{Auth::user()->role}}" data-dismiss="modal">Cancel</button>
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
                                            <input type="text" class="form-control dt-full-name" id="ucompanyname" placeholder="Google" name="ucompanyname" aria-label="Google" aria-describedby="ucompanyname" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <select id="ustatus" name="ustatus" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="usellmethod">Selling Method</label>
                                            <select id="usellmethod" name="usellmethod" class="form-control">
                                                <option value="Sell direct">Sell direct</option>
                                                <option value="Via dealers">Via dealers</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exchange">Exchange Rate</label>
                                            <input type="number" class="form-control dt-full-name" id="uexchange"
                                                placeholder="Exchange" name="uexchange" aria-label="Name"
                                                aria-describedby="uexchange" />
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="delivery">Delivery Time</label>
                                            <input type="text" class="form-control dt-full-name" id="udelivery"
                                                placeholder="Delivery" name="udelivery" aria-label="Name"
                                                aria-describedby="udelivery" />
                                        </div>

                                        <button type="button" class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
                                        <button class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to update new user Ends-->

                         <!-- Stacked Toast -->
                        <div aria-live="polite" aria-atomic="true" style="position: relative">
                        
                            <div style="position: fixed; top: 1rem; right: 1rem; margin-left: 1rem; z-index: 1030">
                                <div class="toast toast-stacked hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                                    <div class="toast-header">
                                        <i data-feather='alert-circle' class="text-danger"></i><strong class="mr-auto text-danger ml-1">Error</strong>
                                        <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body h5">You need to delete that category.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Stacked Toast End -->
                        <!-- list Repeat end -->
                        <div aria-live="polite" aria-atomic="true" style="position: relative">
                            
                            <div style="position: fixed; top: 1rem; right: 1rem; margin-left: 1rem; z-index: 1030">
                                <div class="toast toast-stacked-toggler-repeat hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
                                    <div class="toast-header">
                                        <i data-feather='alert-circle' class="text-success"></i><strong class="mr-auto text-success ml-1">Success</strong>
                                        <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body h5">Changed successfully.</div>
                                </div>
                            </div>
                        </div>
                        <!-- Stacked Toast End -->
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

    <!-- BEGIN: Page JS-->
    


    <script src="../../../app-assets/js/scripts/pages/app-company-list.js"></script>
    <script src="../../../app-assets/js/scripts/components/components-bs-toast.js"></script>
    
    <!-- END: Page JS-->

    <script>
        $(function(){
            $(".dt-buttons").last().addClass("{{Auth::user()->role}}");
            $(".userupdate_new").on("click", function(){
                var $id = $(this).data('id');
                var $userid = 'companymanagementupdate/' + ($(this).data('id'));
                // $("#uUserid").val($(this).data('id'));
                $("#ucompanyname").val($(this).data('companyname'));
                $("#ustatus").val($(this).data('status'));
                $("#usellmethod").val($(this).data('sellmethod'));
                $("#uexchange").val($(this).data('exchange'));
                $("#udelivery").val($(this).data('delivery'));
                $(".update_user_modal").modal('show');
                console.log('test');
                $('.update_data_user').on("click", function(){
                    console.log($userid);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: $userid,
                        data: { id: $id, companyname: $("#ucompanyname").val(), status: $("#ustatus").val(), sellmethod: $("#usellmethod").val(), exchange: $("#uexchange").val(), delivery: $("#udelivery").val()},
                        success: function(data) {
                            if(data['success']){
                                window.location.reload();
                            }
                        }
                    });
               
                    // window.location.reload();
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
                            $('.toast-stacked-toggler-repeat').toast('show');
                        }
                    }
                });
            });
                
            $(".delete_data").on("click", function(){
                var $id = $(this).data('id');
                var $company = $(this).data('companyname')
                var $userid = 'companymanagementdelete/' + $id + '/' + $company;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'get',
                    url: $userid,
                    success: function(data) {
                        if(data['success']){
                            window.location.reload();
                        }
                        else{
                            $(".toast-stacked-toggler").click();
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