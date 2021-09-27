<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    <?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                                        <th>Comapny Name</th>
                                        <th>Sell</th>
                                        <th>Exchange</th>
                                        <th>Delivery</th>
                                        <th class="<?php echo e(Auth::user()->role); ?>">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="cursor:pointer;"><div class="rounded-circle justify-content-center text-center" style="width:34px;height:34px;background-color:#7367f0;color:white;line-height: 2.3;font-weight: 600;"><?php  echo $index++ ?></div></td>
                                        <td><?php echo e($company -> companyname); ?></td>
                                        <td><?php echo e($company -> sellmethod); ?></td>
                                        <td><?php echo e($company -> exchange); ?></td>
                                        <td><?php echo e($company -> delivery); ?></td>
                                        <td class="<?php echo e(Auth::user()->role); ?>">
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
                                                        data-id="<?php echo e($company -> id); ?>" data-companyname="<?php echo e($company -> companyname); ?>"
                                                        data-sellmethod="<?php echo e($company -> sellmethod); ?>"
                                                        data-exchange="<?php echo e($company -> exchange); ?>" data-delivery="<?php echo e($company -> delivery); ?>">
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
                                                    

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal to add new user starts-->
                        
                        <!-- Modal to add new user Ends-->

                        <!-- Modal to update new user starts-->
                        <div class="modal modal-slide-in update_user_modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title">Update Setting</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="companyname">Company Name</label>
                                            <input type="text" class="form-control dt-full-name" id="companyname"
                                                placeholder="Company" name="companyname" aria-label="Name"
                                                aria-describedby="companyname" disabled />
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="form-label" for="sellmethod">Sell</label>
                                            <select id="sellmethod" name="sellmethod" class="form-control">
                                                <option value="Sell direct">Sell direct</option>
                                                <option value="Via dealers">Via dealers</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="exchange">Exchange</label>
                                            <input type="text" class="form-control dt-full-name" id="exchange"
                                                placeholder="Exchange" name="exchange" aria-label="Name"
                                                aria-describedby="exchange" />
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="delivery">Delivery</label>
                                            <input type="text" class="form-control dt-full-name" id="delivery"
                                                placeholder="Delivery" name="delivery" aria-label="Name"
                                                aria-describedby="delivery" />
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
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Footer-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-companysetting-list.js"></script>
    <!-- END: Page JS-->

    <script>
    $(function() {
        $(".dt-buttons").last().addClass("<?php echo e(Auth::user()->role); ?>");
        $(".userupdate_new").on("click", function() {
            var $id = $(this).data('id');
            var $userid = 'companysettingupdate/' + ($(this).data('id'));
            $("#companyname").val($(this).data('companyname'));
            $("#sellmethod").val($(this).data('sellmethod'));
            $("#exchange").val($(this).data('exchange'));
            $("#delivery").val($(this).data('delivery'));
            $(".update_user_modal").modal('show');

            $('.update_data_user').on("click", function() {
                console.log($userid);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: $userid,
                    data: {
                        id: $id,
                        sellmethod: $("#sellmethod").val(),
                        exchange: $("#exchange").val(),
                        delivery: $("#delivery").val()
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

</html><?php /**PATH D:\Lebanon\phpframe\resources\views//companysetting.blade.php ENDPATH**/ ?>