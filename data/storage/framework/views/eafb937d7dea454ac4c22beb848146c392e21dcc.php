<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Head-->
<!-- BEGIN: Body-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    <?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END LAYOUT -->

    <!-- BEGIN: Content-->
    <div class="app-content content <?php if(Auth::user()->rolefunction->users_view != 'on'): ?> data-page-close <?php endif; ?>">
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
                                        <!-- <th></th> -->
                                        <th>User</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>StartData</th>
                                        <th>EndData</th>
                                        <th class="<?php if(Auth::user()->rolefunction->users_delete != 'on' && Auth::user()->rolefunction->users_write != 'on'): ?> data-page-close <?php endif; ?>">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $userlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userlist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($userlist->name); ?></td>
                                            <td><?php echo e($userlist->name); ?></td>
                                            <td><?php echo e($userlist->email); ?></td>
                                            <td><img src="<?php echo e($userlist -> profile_photo_path); ?>" style="width: 48px;height:36px;"></td>
                                            <td><?php echo e($userlist -> role); ?></td>
                                            <td>
                                                <div class="custom-control custom-switch custom-control-inline status-userlist-update" data-id="<?php echo e($userlist -> id); ?>" data-status="<?php echo e($userlist -> status); ?>">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($userlist -> id); ?>" <?php if($userlist -> status == 'on'): ?> checked <?php endif; ?> class="status-checked"  <?php if($userlist->id == 1 || Auth::user()->rolefunction->users_write != 'on' || Auth::user()->status == ''): ?> disabled <?php endif; ?>>
                                                <label class="custom-control-label" for="customSwitch<?php echo e($userlist -> id); ?>"></label>
                                                </div>
                                            </td>
                                            <td><?php echo e($userlist->startdata); ?></td>
                                            <td><?php echo e($userlist->enddata); ?></td>
                                            <td>
                                                <button class="dropdown-item userupdate_new <?php if(Auth::user()->rolefunction->users_write != 'on'): ?> data-page-close <?php endif; ?>" data-id="<?php echo e($userlist -> id); ?>" data-name="<?php echo e($userlist->name); ?>" data-email="<?php echo e($userlist -> email); ?>" data-photo="<?php echo e($userlist -> profile_photo_path); ?>" data-role="<?php echo e($userlist -> role); ?>" data-status="<?php echo e($userlist -> status); ?>" data-startdata="<?php echo e($userlist -> startdata); ?>" data-enddata="<?php echo e($userlist -> enddata); ?>"  <?php if($userlist->id == 1 || Auth::user()->status == ''): ?> disabled <?php endif; ?>>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    <span></span>
                                                </button>
                                                <button type="button" data-id="<?php echo e($userlist -> id); ?>" class="dropdown-item userlist-delete <?php if(Auth::user()->rolefunction->users_delete != 'on'): ?> data-page-close <?php endif; ?>"  <?php if($userlist->id == 1 || Auth::user()->status == ''): ?> disabled <?php endif; ?>>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span></span>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        
                        
                        
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0" >
                                    <?php echo e(csrf_field()); ?>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-fullname">User Name</label>
                                            <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="user_fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-email">Email</label>
                                            <input type="email" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="basic-icon-default-email2" name="user_email" />
                                            <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="photo">Photo</label>
                                            <!-- header media -->
                                                <div class="media">
                                                    <a href="javascript:void(0);" class="mr-25">
                                                        <img src="uploads/users/default.png" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
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
                                            <label class="form-label" for="basic-icon-default-email">Password</label>
                                            
                                            
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" id="account-old-password" name="user_password" placeholder="Password" required/>
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <small class="form-text text-muted"> password </small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="user-role">User Role</label>
                                            <select id="user-role" name="user_role" class="form-control">
                                                <option value="subscriber">Subscriber</option>
                                                <option value="admin">Admin</option>
                                                <option value="superadmin">Superadmin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="user-role">Status</label>
                                            <div class="custom-control custom-switch custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="status" class="status-checked" name="status">
                                                <label class="custom-control-label" for="status"></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">StartDate</label>
                                            <input type="text" name='startdata' id="startdata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">EndData</label>
                                            <input type="text" name='enddata' id="enddata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                    
                                        <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
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
                                        <h5 class="modal-title" id="updateModalLabel">Update User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="uUsername">User Name</label>
                                            <input type="text" class="form-control dt-full-name" id="uUsername" placeholder="John Doe" name="uUsername" aria-label="John Doe" aria-describedby="uUsername" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uUseremail">Email</label>
                                            <input type="email" id="uUseremail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="uUseremail2" name="uUseremail" required/>
                                            <small class="form-text text-muted"> You can use letters, numbers & periods </small>
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
                                        <!--/ header media -->

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-email">Password</label>
                                            
                                            
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" id="account-new-password" name="uuser_password" placeholder="Password" required/>
                                                <div class="input-group-append">
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <small class="form-text text-muted"> password </small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uUserrole">User Role</label>
                                            <select id="uUserrole" name="uUserrole" class="form-control">
                                                <option value="subscriber">Subscriber</option>
                                                <option value="admin">Admin</option>
                                                <option value="superadmin">Superadmin</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">StartDate</label>
                                            <input type="text" name='uUserstartdata' id="uUserstartdata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">EndData</label>
                                            <input type="text" name='uUserenddata' id="uUserenddata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        
                                        <button class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
                                        <button class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to update new user Ends-->
                    </div>
                    <!-- list section end -->
                </section>
                <button type="button" class="btn btn-outline-success toast-sucess-message" id="type-success" hidden>Success</button>
                <button type="button" class="btn btn-outline-success toast-userlist-error-message" id="type-already-data-success" hidden>error</button>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php if(Auth::user()->rolefunction->users_create != "on"): ?>
        <script>
            var $createdata = "data-page-close";
        </script>
    <?php elseif(Auth::user()->status == ''): ?>
        <script>
            var $createdata = "data-page-close";
        </script>
    <?php else: ?>
        <script>
            var $createdata = "123";
        </script>
    <?php endif; ?>
    <!-- BEGIN: Footer-->
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Footer-->
    
    <script src="../../../app-assets/js/scripts/pages/app-user-list.js"></script>
    <script src="../../../app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    
    <!-- END: Page JS-->

    <script>
        $(function(){
            
            $(".userupdate_new").on("click", function(){
                var $id = $(this).data('id');
                var $userid = 'userupdate/' + ($(this).data('id'));
                // $("#uUserid").val($(this).data('id'));
                $("#uUsername").val($(this).data('name'));
                $("#uUseremail").val($(this).data('email'));
                $("#uaccount-upload-img").attr('src',($(this).data('photo')));
                $("#uUserrole").val($(this).data('role'));
                $("#uUserstatus").val($(this).data('status'));
                $("#uUserstartdata").val($(this).data('startdata'));
                $("#uUserenddata").val($(this).data('enddata'));
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
                        }
                    });
                });
            });

            $('.status-userlist-update').on('change', function () {
            var $id = $(this).data('id');
            var $userid = 'userliststatusupdate/' + ($(this).data('id'));
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
        });
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

</html><?php /**PATH D:\Lebanon\phpframe\data\resources\views//userlist.blade.php ENDPATH**/ ?>