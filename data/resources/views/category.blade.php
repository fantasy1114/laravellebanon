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
    <div class="app-content content @if(Auth::user()->rolefunction->categories_view != 'on') data-page-close @endif">
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
                                        <th>Photo</th>
                                        <th>Company Name</th>
                                        <th>Status</th>
                                        <th class="@if(Auth::user()->rolefunction->categories_delete != 'on' && Auth::user()->rolefunction->categories_write != 'on') data-page-close @endif">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                    @foreach ($categorys as $category)
                                        <tr>
                                            <td style="cursor:pointer;"><div class="rounded-circle justify-content-center text-center" style="width:34px;height:34px;background-color:#7367f0;color:white;line-height: 2.3;font-weight: 600;"><?php  echo $index++ ?></div></td>
                                            <td>{{$category->categoryname}}<small style="font-size: 10px;">({{$category->companies->companyname}})</small></td>
                                            <td><img src="{{$category->logo}}" style="width:48px; height:34px;"></td>
                                            <td>
                                                {{$category->companies->companyname}}
                                            </td>
                                            <td>
                                                <div class="custom-control custom-switch custom-control-inline status-category-update" data-id="{{$category -> id}}" data-status="{{$category -> status}}">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch{{$category -> id}}" @if ($category -> status == 'on') checked @endif class="status-checked" >
                                                <label class="custom-control-label" for="customSwitch{{$category -> id}}"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="dropdown-item userupdate_new @if(Auth::user()->rolefunction->categories_write != 'on') data-page-close @endif"
                                                    data-id="{{$category->id}}" data-categoryname="{{$category->categoryname}}"
                                                    data-companyname="{{$category->companies->companyname}}" data-logo="{{$category->logo}}" data-status="{{$category -> status}}"
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
                                            
                                                <button class="dropdown-item delete_category_data @if(Auth::user()->rolefunction->categories_delete != 'on') data-page-close @endif" data-id="{{$category->id}}" data-categoryname="{{$category->categorycompany}}">
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
                                            <label class="form-label" for="photo">Photo</label>
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
                                            <label class="form-label" for="companyname">Comapny Name</label>
                                            <select id="companyname" aria-describedby="companyname2" name="companyname"
                                            class="form-control">
                                                @foreach ($companys as $company)
                                                    <option value="{{$company -> companyname}}">{{$company -> companyname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="status" class="status-checked" name="status">
                                                <label class="custom-control-label" for="status"></label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-1 data-submit ">Submit</button>
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
                                <form class="update-new-user modal-content pt-0">
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
                                                aria-describedby="ucategoryname2"/>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uphoto">Photo</label>
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
                                        <div class="form-group">
                                            <label class="form-label" for="ucompanyname">Company Name</label>
                                            <select id="ucompanyname" aria-describedby="ucompanyname2" name="ucompanyname" class="form-control">
                                                @foreach ($companys as $company)
                                                    <option value="{{$company -> companyname}}">{{$company -> companyname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <select id="ustatus" name="ustatus" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to update new user Ends-->
                    </div>
                    <button type="button" class="btn btn-outline-success toast-sucess-message" id="type-success" hidden>Success</button>
                    <button type="button" class="btn btn-outline-danger toast-category-error-message" id="type-category-error" hidden>Error</button>
                    <button type="button" class="btn btn-outline-danger toast-category-already-message" id="type-category-already-error" hidden>Error</button>
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
    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-category-list.js"></script>
    <script src="../../../app-assets/js/scripts/components/components-bs-toast.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
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
            $("#ustatus").val($(this).data('status'));
            $("#uaccount-upload-img").attr('src',($(this).data('logo')));
            $(".update_user_modal").modal('show');

            $('.update-new-user').on("submit", function(e) {
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
                            $('.toast-category-already-message').click();
                        }
                    }
                })
            });
        });
        $('.status-category-update').on('change', function () {
            var $id = $(this).data('id');
            var $userid = 'categoryupdate/' + ($(this).data('id'));
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