<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<style>
    table{
       font-size: 10px;
    }
    div.table-responsive>div.dataTables_wrapper>div.row{
        display: none!important ;
    }
</style>
<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">


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
            <div class="content-body row">
                <!-- users list start -->
                <div class="col-md-5">
                    <section id="basic-datatable">
                        <div class="row">
                            
                            
                            <div class="card-datatable table-responsive pt-2">
                                <table class="w-100 datatables-basic datatables-basic-shopping" id="vorschlaege">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>price</th>
                                            <th>qty</th>             
                                            <th>subtotal</th>
                                            <th>
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row" style="font-size: 10px;bottom:0;">
                            <div class="col-md-4 col-12">All Product:<span id="allproduct"></span></div>
                            <div class="col-md-4 col-12">All Qty:<span id="allqty"></span></div>
                            <div class="col-md-4 col-12">All Subtotal:<span id="allsubtotal"></span></div>
                        </div>
                    </section>
                </div>
                <div class="col-md-7 h-100" style="border-left: dashed #7367f0;">

                    <div class="content-detached">
                            <form class="shopping-filter" action="shopping" method="GET">
                                
                                <div class="content-body">
                                    <div class="demo-inline-spacing mb-1">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="query" class="custom-control-input" value="all" />
                                            <label class="custom-control-label" for="customRadio1">All</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="query" class="custom-control-input" value="company"/>
                                            <label class="custom-control-label" for="customRadio2">Company</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="query" class="custom-control-input" value="category"/>
                                            <label class="custom-control-label" for="customRadio3">Category</label>
                                        </div>
                                        <button type="submit" class="btn btn-outline-success">Filter</button>
                                    </div>
                            </form>
                            <!-- E-commerce Products Starts -->
                            <section id="ecommerce-products" class="grid-view row">
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card ecommerce-card col-md-4 col-12">
                                        <div class="item-wrapper mt-1">
                                            <div class="float-left">
                                                <h6 class="item-price">$<?php echo e($item->usprice); ?></h6>
                                            </div>
                                            <div class="float-right">
                                                <h6 class="item-price">LBP<?php echo e($item->lbpprice); ?></h6>
                                            </div>
                                        </div>
                                        <div class="item-img text-center">
                                            <img class="img-fluid card-img-top" src="<?php echo e($item->photo); ?>" alt="img-placeholder" />
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="item-name">
                                                <?php echo e($item->title); ?>

                                                <span class="card-text item-company">By <span class="company-name text-success"><?php echo e($item->categories->companies->companyname); ?></span></span>
                                            </h6>
                                            <p class="card-text item-description">
                                            <?php echo e($item->description); ?>

                                            </p>
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="input-group d-inline-flex">
                                                <input type="number" class="touchspin-min-max product_qty<?php echo e($item->id); ?>" value="0"/>
                                            </div>
                                            <button data-id="<?php echo e($item->id); ?>" data-title="<?php echo e($item->title); ?>" data-price="<?php echo e($item->usprice); ?>" class="btn btn-primary btn-cart add-to-cart-send">
                                                <i data-feather="shopping-cart"></i>
                                                <span class="add-to-cart">Add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </section>
                            <!-- E-commerce Products Ends -->                                    
                            <!-- E-commerce Pagination Starts -->
                            <section id="ecommerce-pagination">
                                
                                <?php echo $items->links(); ?>

                            </section>
                            <!-- E-commerce Pagination Ends -->
        
                        </div>
                    </div>
                
                </div>
               
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
  <!-- BEGIN: Page Vendor JS-->
  <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
  <!-- END: Page Vendor JS-->
  <!-- BEGIN: Page JS-->
  <script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
  <script src="../../../app-assets/js/scripts/forms/form-number-input.js"></script>


  <script src="../../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
  
  <!-- END: Page JS-->
    
    <script>
        $(function(){
            var nowpath = window.location.href;
            var linkquesry = nowpath.replace("http://localhost:8000/shopping?query=", "");
            if(linkquesry == 'company'){
                $('#customRadio2').prop('checked', true)
            }
            else if(linkquesry == 'category'){
                $('#customRadio3').prop('checked', true)
            }
            else{
                $('#customRadio1').prop('checked', true)
            }
        });
    </script>


</body>
<!-- END: Body-->

</html><?php /**PATH D:\Lebanon\phpframe\data\resources\views//shopping.blade.php ENDPATH**/ ?>