<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
@include('layouts/header')
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

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
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">

                    <!-- list section start -->
                    <div class="card">
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Item Name</th>
                                        <th>Status</th>
                                        <th class="{{Auth::user()->role}}">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                    @foreach ($items as $item)
                                    <tr>
                                        <td style="cursor:pointer;"><div class="rounded-circle justify-content-center text-center" style="width:34px;height:34px;background-color:#7367f0;color:white;line-height: 2.3;font-weight: 600;"><?php  echo $index++ ?></div></td>
                                        <td>{{$item -> title}}</td>
                                        <td>{{$item -> status}}</td>
                                        <td class="{{Auth::user()->role}}">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow"
                                                    data-toggle="dropdown">
                                                    <!-- <i data-feather="more-vertical"></i> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item userupdate_new"
                                                        data-id="{{$item -> id}}" data-title="{{$item -> title}}"
                                                        data-status="{{$item -> status}}"
                                                        >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 mr-50">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    {{-- <a class="dropdown-item" href="categorydelete/{{$category->id}}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash mr-50">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                        </svg>
                                                        <span>Delete</span>
                                                    </a> --}}

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal to add new user starts-->
                        {{-- <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0">
                                    {{csrf_field()}}
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">Item Status</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="title">Item Name</label>
                                            <input type="text" class="form-control dt-full-name" id="title"
                                                placeholder="Item" name="title" aria-label="Name"
                                                aria-describedby="title" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <select id="ustatus" name="ustatus" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <!-- Modal to add new user Ends-->

                        <!-- Modal to update new user starts-->
                        <div class="modal modal-slide-in update_user_modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0">
                                    {{csrf_field()}}
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title">Update Item</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="utitle">Item Name</label>
                                            <input type="text" class="form-control dt-full-name" id="utitle"
                                                placeholder="Item" name="utitle" aria-label="Name"
                                                aria-describedby="utitle" disabled />
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="form-label" for="ustatus">Status</label>
                                            <select id="ustatus" name="ustatus" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to update new user Ends-->
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
    <script src="../../../app-assets/js/scripts/pages/app-itemstatus-list.js"></script>
    <!-- END: Page JS-->

    <script>
    $(function() {
        $(".dt-buttons").last().addClass("{{Auth::user()->role}}");
        $(".userupdate_new").on("click", function() {
            var $id = $(this).data('id');
            var $userid = 'itemstatusupdate/' + ($(this).data('id'));
            $("#utitle").val($(this).data('title'));
            $("#ustatus").val($(this).data('status'));
            $(".update_user_modal").modal('show');

            $('.update_data_user').on("click", function() {
                console.log($userid);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'post',
                    url: $userid,
                    data: {
                        id: $id,
                        title: $("#utitle").val(),
                        status: $("#ustatus").val()
                    },
                    success: function(data) {
                        if(data['success']){
                            window.location.reload();
                        }
                    }
                })
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