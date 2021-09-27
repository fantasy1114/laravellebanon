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
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Company Name</th>
                                        <th class="{{Auth::user()->role}}">Edit</th>
                                        <th class="{{Auth::user()->role}}">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                    @foreach ($categorys as $category)
                                    <tr>
                                        <td style="cursor:pointer;"><div class="rounded-circle justify-content-center text-center" style="width:34px;height:34px;background-color:#7367f0;color:white;line-height: 2.3;font-weight: 600;"><?php  echo $index++ ?></div></td>
                                        <td>{{$category -> categoryname}}<small style="font-size: 10px;">({{$category -> companyname}})</small></td>
                                        <td>{{$category -> companyname}}</td>
                                        <td class="{{Auth::user()->role}}">
                                            <button class="dropdown-item userupdate_new"
                                                data-id="{{$category -> id}}" data-categoryname="{{$category -> categoryname}}"
                                                data-companyname="{{$category -> companyname}}"
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
                                                <span></span>
                                            </button>
                                        </td>
                                        <td class="{{Auth::user()->role}}">
                                            <button class="dropdown-item delete_data" data-id="{{$category->id}}" data-categoryname="{{$category->categoryname}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-trash mr-50">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg>
                                                <span></span>
                                            </button>
                                        </td>
                                        {{-- <td class="{{Auth::user()->role}}">
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
                                                        data-id="{{$category -> id}}" data-categoryname="{{$category -> categoryname}}"
                                                        data-companyname="{{$category -> companyname}}"
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
                                                    <button class="dropdown-item delete_data" data-id="{{$category->id}}" data-categoryname="{{$category->categoryname}}">
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
                                <form class="add-new-user modal-content pt-0">
                                    {{csrf_field()}}
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="categoryname">Category Name</label>
                                            <input type="text" class="form-control dt-full-name" id="categoryname"
                                                placeholder="Category" name="categoryname" aria-label="Name"
                                                aria-describedby="categoryname2" />
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="form-label" for="companyname">Comapny Name</label>
                                            <select id="companyname" aria-describedby="companyname2" name="companyname"
                                            class="form-control">
                                                @foreach ($companys as $company)
                                                    <option value="{{$company -> companyname}}">{{$company -> companyname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary"
                                            data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->

                        <!-- Modal to update new user starts-->
                        <div class="modal modal-slide-in update_user_modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0">
                                    {{csrf_field()}}
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title">Update Category</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="ucategoryname">Category Name</label>
                                            <input type="text" class="form-control dt-full-name" id="ucategoryname"
                                                placeholder="Name" name="ucategoryname" aria-label="Name"
                                                aria-describedby="ucategoryname2" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="ucompanyname">Company Name</label>
                                            <select id="ucompanyname" aria-describedby="ucompanyname2" name="ucompanyname" class="form-control">
                                                @foreach ($companys as $company)
                                                    <option value="{{$company -> companyname}}">{{$company -> companyname}}</option>
                                                @endforeach
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
                    <div aria-live="polite" aria-atomic="true" style="position: relative">
                        
                        <div style="position: fixed; top: 1rem; right: 1rem; margin-left: 1rem; z-index: 1030">
                            <div class="toast toast-stacked hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                                <div class="toast-header">
                                    <i data-feather='alert-circle' class="text-danger"></i><strong class="mr-auto text-danger ml-1">Error</strong>
                                    <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body h5">You need to delete that item.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Stacked Toast End -->
                    <!-- list Repeat end -->
                    <div aria-live="polite" aria-atomic="true" style="position: relative">
                        
                        <div style="position: fixed; top: 1rem; right: 1rem; margin-left: 1rem; z-index: 1030">
                            <div class="toast toast-stacked-toggler-repeat hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
                                <div class="toast-header">
                                    <i data-feather='alert-circle' class="text-danger"></i><strong class="mr-auto text-danger ml-1">Error</strong>
                                    <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body h5">The category already exists.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Stacked Toast End -->
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
    <script src="../../../app-assets/js/scripts/pages/app-category-list.js"></script>
    <script src="../../../app-assets/js/scripts/components/components-bs-toast.js"></script>
    <!-- END: Page JS-->

    <script>
    $(function() {
        $(".dt-buttons").last().addClass("{{Auth::user()->role}}");
        $(".userupdate_new").on("click", function() {
            var $id = $(this).data('id');
            var $userid = 'categoryupdate/' + ($(this).data('id'));
            // $("#uUserid").val($(this).data('id'));
            $("#ucategoryname").val($(this).data('categoryname'));
            $("#ucompanyname").val($(this).data('companyname'));
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
                        categoryname: $("#ucategoryname").val(),
                        companyname: $("#ucompanyname").val()
                    },
                    success: function(data) {
                        if(data['success']){
                            window.location.reload();
                        }
                        else{
                            $('.btn-outline-secondary').click();
                            $('.toast-stacked-toggler-repeat').toast('show');
                        }
                    }
                })
            });
        });
        $(".delete_data").on("click", function(){
                var $id = $(this).data('id');
                var $category = $(this).data('categoryname')
                
                var $userid = 'categorydelete/' + $id + '/' + $category;
                
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