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
                                        <th>Category Name</th>
                                        <th>Item Name</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Status</th>   
                                        <th>USD Price</th>
                                        <th>LBP Price</th>
                                        <th>Maker</th>
                                        <th>Quantity</th>                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="cursor:pointer;"><div class="rounded-circle justify-content-center text-center" style="width:34px;height:34px;background-color:#7367f0;color:white;line-height: 2.3;font-weight: 600;"><?php  echo $index++ ?></div></td>
                                        <td><?php echo e($item->categories->categoryname); ?><small>(<?php echo e($item->categories->companies->companyname); ?>)</small></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->description); ?></td>
                                        <td><img src="<?php echo e($item -> photo); ?>" style="width:48px; height:34px;"></td>
                                        <td>
                                            <div class="custom-control custom-switch custom-control-inline status-items-update" data-id="<?php echo e($item -> id); ?>" data-status="<?php echo e($item -> status); ?>">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch<?php echo e($item -> id); ?>" <?php if($item -> status == 'Active'): ?> checked <?php endif; ?> class="status-checked" >
                                            <label class="custom-control-label" for="customSwitch<?php echo e($item -> id); ?>"></label>
                                            </div>
                                        </td>
                                        <td><?php echo e($item -> usprice); ?></td>
                                        <td><?php echo e($item -> lbpprice); ?></td>
                                        <td><?php echo e($item -> marker); ?></td>
                                        <td><?php echo e($item -> quantity); ?></td>
                                        <td>
                                            <button class="dropdown-item userupdate_new"
                                                data-id="<?php echo e($item -> id); ?>" data-categoryname="<?php echo e($item->categories->categoryname); ?>(<?php echo e($item->categories->companies->companyname); ?>)"
                                                data-title="<?php echo e($item -> title); ?>"
                                                data-description="<?php echo e($item -> description); ?>"
                                                data-photo="<?php echo e($item -> photo); ?>"
                                                data-usprice="<?php echo e($item -> usprice); ?>"
                                                data-lbpprice="<?php echo e($item -> lbpprice); ?>"
                                                data-marker="<?php echo e($item -> marker); ?>"
                                                data-quantity="<?php echo e($item -> quantity); ?>"
                                                data-status="<?php echo e($item -> status); ?>"
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
                                        
                                            <button class="dropdown-item delete_data_item" data-id="<?php echo e($item->id); ?>" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="feather feather-trash mr-50">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                </svg>
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
                                <form class="add-new-user modal-content pt-0">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">New Item</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                       
                                        <div class="form-group">
                                            <label class="form-label" for="categoryname">Category Name</label>
                                            <select id="categoryname" aria-describedby="categoryname2" name="categoryname" class="form-control categoryname-change" >
                                                <option class="please-select">Please select</option>
                                                <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->categoryname); ?>(<?php echo e($category->companies->companyname); ?>)" data-exchange="<?php echo e($category->companies->exchange); ?>"><?php echo e($category->categoryname); ?>(<?php echo e($category->companies->companyname); ?>)</option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="title">Item Name</label>
                                            <input type="text" class="form-control dt-full-name" id="title"
                                                placeholder="title" name="title" aria-label="Name"
                                                aria-describedby="title2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="description">Description</label>
                                            <input type="text" class="form-control dt-full-name" id="description"
                                                placeholder="Description" name="description" aria-label="Name"
                                                aria-describedby="description2" />
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
                                            <label class="form-label" for="usprice">Price in USD</label>

                                            <div class="input-group input-group-merge">
                                                <input type="number" class="form-control usd_price" placeholder="10" name="usprice" aria-label="Name" data-price=""
                                                aria-describedby="usprice2" id="usprice" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="lbpprice">Price in LBP</label>
                                            <input type="text" class="lbp_price" name="lbp_price" disabled value="">
                                            <div class="input-group input-group-merge">
                                                
                                                <input type="number" class="form-control lbpprice" placeholder="20" name="lbpprice" aria-label="Name"
                                                aria-describedby="lbpprice2" id="lbpprice" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="marker">Maker</label>
                                            <input type="text" class="form-control dt-full-name" id="marker"
                                                placeholder="" name="marker" aria-label="marker"
                                                aria-describedby="marker2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="quantity">Quantity</label>
                                            <input type="text" class="form-control dt-full-name" id="quantity"
                                                placeholder="" name="quantity" aria-label="quantity"
                                                aria-describedby="quantity2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <select id="status" name="status" class="form-control">
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
                        </div>
                        <!-- Modal to add new user Ends-->

                        <!-- Modal to update new user starts-->
                        <div class="modal modal-slide-in update_user_modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="update-new-user modal-content pt-0">
                                    <?php echo e(csrf_field()); ?>

                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title">Update Item</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="ucategoryname">Category Name</label>
                                            <select id="ucategoryname" aria-describedby="ucategoryname2" name="ucategoryname"
                                            class="form-control ucategoryname-change">
                                            <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($category->categoryname); ?>(<?php echo e($category->companies->companyname); ?>)" data-exchange="<?php echo e($category->companies->exchange); ?>"><?php echo e($category->categoryname); ?>(<?php echo e($category->companies->companyname); ?>)</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="utitle">Item Name</label>
                                            <input type="text" class="form-control dt-full-name" id="utitle"
                                                placeholder="utitle" name="utitle" aria-label="Name"
                                                aria-describedby="utitle2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="udescription">Description</label>
                                            <input type="text" class="form-control dt-full-name" id="udescription"                                             placeholder="Description" name="udescription" aria-label="Name"
                                                aria-describedby="udescription2" />
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
                                            <label class="form-label" for="uusprice">Price in USD</label>
                                            <input type="number" class="form-control dt-full-name " id="uusprice" placeholder="$" name="uusprice" aria-label="Name"
                                                aria-describedby="uusprice2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="ulbpprice">Price in LBP </label>
                                            <input type="text" class="ulbp_price" name="ulbp_price" disabled value="">
                                            <input type="number" class="form-control dt-full-name" id="ulbpprice" placeholder="" name="ulbpprice" aria-label="Name"
                                                aria-describedby="ulbpprice2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="umarker">Marker</label>
                                            <input type="text" class="form-control dt-full-name" id="umarker"
                                                placeholder="" name="umarker" aria-label="umarker"
                                                aria-describedby="umarker2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uquantity">Quantity</label>
                                            <input type="text" class="form-control dt-full-name" id="uquantity"
                                                placeholder="" name="uquantity" aria-label="uquantity"
                                                aria-describedby="uquantity2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="ustatus">Status</label>
                                            <select id="ustatus" name="ustatus" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
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
                <button type="button" class="btn btn-outline-success toast-sucess-message" id="type-success" hidden>Success</button>
                <button type="button" class="btn btn-outline-danger toast-item-already-message" id="type-item-already-error" hidden>Error</button>
               
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
    
    <script src="../../../app-assets/js/scripts/pages/app-item-list.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="../../../app-assets/js/scripts/forms/form-input-mask.js"></script>
    <!-- END: Page JS-->

    <script>
    $(function() {
        $(".dt-buttons").last().addClass("<?php echo e(Auth::user()->role); ?>");
        $cateDatas = '';
        $ucateDatas = '';
        $(".categoryname-change").on("change", function(){
            $('.please-select').hide();
            $cateDatas = $(this).find(':selected').data('exchange');
            console.log($cateDatas);
        });
       
        $('.usd_price').on("change paste keyup", function(){
            $usd = $('.usd_price').val();
            $('.lbp_price').attr('value', $usd + '*' + $cateDatas + '=' + $usd * $cateDatas);
            $('#lbpprice').attr('value', $usd * $cateDatas);
        });

        $(".userupdate_new").on("click", function() {
            var $uallprice = '';
            $('.ulbp_price').attr('value', '');
            $('#ulbpprice').attr('value', $(this).data('lbpprice'));
            var $id = $(this).data('id');
            var $userid = 'itemsupdate/' + ($(this).data('id'));

            $("#ucategoryname").val($(this).data('categoryname'));
            $("#utitle").val($(this).data('title'));
            $("#udescription").val($(this).data('description'));
            $("#uaccount-upload-img").attr('src',($(this).data('photo')));
            
            $("#uusprice").val($(this).data('usprice'));
            // $("#ulbpprice").val($(this).data('lbpprice'));
            $("#umarker").val($(this).data('marker'));
            $("#uquantity").val($(this).data('quantity'));
            $("#ustatus").val($(this).data('status'));
            $(".update_user_modal").modal('show');
            $('.ucategoryname-change').on("change", function(){
                $ucateDatas = $(this).find(':selected').data('exchange');
                console.log($ucateDatas);
            })
            $('#uusprice').on("change paste keyup", function(){
                $uusd = $('#uusprice').val();
                $uallprice = $uusd * $ucateDatas;
                $('.ulbp_price').attr('value', $uusd + '*' + $ucateDatas + '=' + $uallprice);
                
                $('#ulbpprice').attr('value', $uallprice);
            });
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
                            $('.toast-item-already-message').click();
                        }
                    }
                });
            });
            
        });
        $('.status-items-update').on('change', function () {
            var $id = $(this).data('id');
            var $userid = 'itemsupdate/' + ($(this).data('id'));
            
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
        $('.categoryname-change option:eq(0)').attr('selected', 'selected')


        
   
        
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

</html><?php /**PATH D:\Lebanon\phpframe\data\resources\views//items.blade.php ENDPATH**/ ?>