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
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body mb-5">
                <!-- users list start -->
                <section class="app-user-list <?php echo e(Auth::user()->role); ?> <?php if(Auth::user()->role == 'editor'): ?> subscriber <?php endif; ?>">

                    <!-- list section start -->
                        <div class="row mt-4">
                            <div class="col-md-4 text-center">
                                <h3>Exchange Rate</h3>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <?php $__currentLoopData = $exchanges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exchange): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" class="form-control" id="exchange" value="<?php echo e($exchange -> exchange); ?>" placeholder="Enter Exchange Rate" disabled/>
                                        
                                        <button type="button" class="btn btn-primary justofy-content-center d-flex mt-5 data-submit userupdate_new" data-id="<?php echo e($exchange -> id); ?>" data-exchange="<?php echo e($exchange -> exchange); ?>">Edit</button>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <button type="button" class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
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
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

</html><?php /**PATH D:\Lebanon\phpframe\resources\views//exchange.blade.php ENDPATH**/ ?>