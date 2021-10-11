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
    <div class="app-content content @if(Auth::user()->rolefunction->blog_view != 'on') data-page-close @endif">
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
                                        <th>title</th>
                                        <th>photo</th>
                                        <th>text</th>
                                        <th>date</th>                   
                                        <th class="@if(Auth::user()->rolefunction->blog_delete != 'on' && Auth::user()->rolefunction->blog_write != 'on') data-page-close @endif">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td style="cursor:pointer;"><div class="rounded-circle justify-content-center text-center" style="width:34px;height:34px;background-color:#7367f0;color:white;line-height: 2.3;font-weight: 600;"><?php  echo $index++ ?></div></td>
                                            <td>{{$blog->title}}</td>
                                            <td><img src="{{$blog->photo}}" style="width:48px; height:34px;"></td>
                                            <td>
                                                {{$blog->blog_text}}
                                            </td>
                                            <td>
                                                {{$blog->blog_date}}
                                            </td>
                                            <td>
                                                <button class="dropdown-item userupdate_new @if(Auth::user()->rolefunction->blog_write != 'on') data-page-close @endif"
                                                    data-id="{{$blog->id}}" data-title="{{$blog->title}}"
                                                    data-photo="{{$blog->photo}}" data-blog_text="{{$blog->blog_text}}" @if(Auth::user()->status == '') disabled @endif
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
                                            
                                                <button class="dropdown-item delete_blog_data @if(Auth::user()->rolefunction->blog_delete != 'on') data-page-close @endif" data-id="{{$blog->id}}" @if(Auth::user()->status == '') disabled @endif>
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
                    </div>
                    <!-- list section end -->
                    <!-- Modal to add new user starts-->
                    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                        <div class="modal-dialog">
                            <form class="add-new-user modal-content pt-0">
                                {{csrf_field()}}
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Blog</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control dt-full-name" id="title"
                                            placeholder="Title" name="title" aria-label="title"
                                            aria-describedby="title" />
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
                                        <input type="text" class="form-control" id="blog_text"
                                        placeholder="Text" name="blog_text" aria-label="blog_text"
                                        aria-describedby="blog_text" />
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="form-label" for="status">Status</label>
                                        <div class="custom-control custom-switch custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="status" class="status-checked" name="status">
                                            <label class="custom-control-label" for="status"></label>
                                        </div>
                                    </div> --}}
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
                                    <h5 class="modal-title">Update Blog</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="utitle">Title</label>
                                        <input type="text" class="form-control dt-full-name" id="utitle"
                                            placeholder="Title" name="utitle" aria-label="Name"
                                            aria-describedby="utitle2"/>
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
                                        <label class="form-label" for="ublog_text">Text</label>
                                        <input type="text" class="form-control" id="ublog_text"
                                            placeholder="Text" name="ublog_text" aria-label="Name"
                                            aria-describedby="ublog_text2"/>
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
                </section>
                <!-- users list ends -->
                <button type="button" class="btn btn-outline-success toast-sucess-message" id="type-success" hidden>Success</button>
                <button type="button" class="btn btn-outline-danger toast-blog-already-message" id="type-blog-already-error" hidden>Error</button>
               
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

        
    @if(Auth::user()->rolefunction->blog_create != "on")
        <script>
            var $createdata = "data-page-close";
        </script>

    @elseif (Auth::user()->status == '')
        <script>
            var $createdata = "data-page-close";
        </script>

    @else
        <script>
            var $createdata = "123";
        </script>
    @endif
    <!-- BEGIN: Footer-->
    @include('layouts/footer')
    <!-- END: Footer-->


    <!-- BEGIN: Page JS-->
    {{-- <script src="../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script> --}}
    <script src="../../../app-assets/js/scripts/pages/app-blog-view.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    <!-- END: Page JS-->

    <script>
    $(function() {

        $(".userupdate_new").on("click", function() {
            var $id = $(this).data('id');
            var $userid = 'blogsupdate/' + ($(this).data('id'));

            $("#utitle").val($(this).data('title'));
            $("#ublog_text").val($(this).data('blog_text'));
            $("#uaccount-upload-img").attr('src',($(this).data('photo')));
            
            $(".update_user_modal").modal('show');
           
            $('.update-new-user').submit(function(e){
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
                            $('.toast-blog-already-message').click();
                        }
                    }
                });
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