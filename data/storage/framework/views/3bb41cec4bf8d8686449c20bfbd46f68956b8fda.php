<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-sliders.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce.css">
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
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- E-commerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                                        </button>
                                        <div class="search-results">16285 results found</div>
                                    </div>
                                    <div class="view-options d-flex">
                                        
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn">
                                                <input type="radio" name="radio_options" id="radio_option1" checked />
                                                <i data-feather="grid" class="font-medium-3"></i>
                                            </label>
                                            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn">
                                                <input type="radio" name="radio_options" id="radio_option2" />
                                                <i data-feather="list" class="font-medium-3"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Content Section Starts -->

                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="body-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- E-commerce Search Bar Starts -->
                    
                    <!-- E-commerce Search Bar Ends -->

                    <!-- E-commerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="#">
                                    <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/1.png" alt="img-placeholder" /></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <h6 class="item-price">$339.99</h6>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6 class="item-price">$339.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="#">title</a>
                                    <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">Apple</a></span>
                                </h6>
                                <p class="card-text item-description">
                                   description
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$339.99</h4>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="#">
                                    <img class="img-fluid card-img-top" src="../../../app-assets/images/pages/eCommerce/1.png" alt="img-placeholder" /></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <ul class="unstyled-list list-inline">
                                            <h6 class="item-price">$339.99</h6>
                                        </ul>
                                    </div>
                                    <div>
                                        <h6 class="item-price">$339.99</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="#">title</a>
                                    <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name">Apple</a></span>
                                </h6>
                                <p class="card-text item-description">
                                   description
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price">$339.99</h4>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-light btn-wishlist">
                                    <i data-feather="heart"></i>
                                    <span>Wishlist</span>
                                </a>
                                <a href="javascript:void(0)" class="btn btn-primary btn-cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span class="add-to-cart">Add to cart</span>
                                </a>
                            </div>
                        </div>
                        
                    </section>
                    <!-- E-commerce Products Ends -->

                    <!-- E-commerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                        <li class="page-item prev-item"><a class="page-link" ></a></li>
                                        <li class="page-item active"><a class="page-link" >1</a></li>
                                        <li class="page-item"><a class="page-link" >2</a></li>
                                        <li class="page-item"><a class="page-link" >3</a></li>
                                        <li class="page-item" aria-current="page"><a class="page-link" >4</a></li>
                                        <li class="page-item"><a class="page-link" >5</a></li>
                                        <li class="page-item"><a class="page-link" >6</a></li>
                                        <li class="page-item"><a class="page-link" >7</a></li>
                                        <li class="page-item next-item"><a class="page-link" ></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Pagination Ends -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <!-- Price Slider starts -->
                                <div class="price-slider">
                                    <h6 class="filter-title">Price Range(USD)</h6>
                                    <div class="price-slider">
                                        <div class="range-slider mt-2" id="price-slider"></div>
                                    </div>
                                </div>
                                <div class="price-lbp">
                                    <h6 class="filter-title">Price Range(LBP)</h6>
                                    <div class="price-lbp">
                                        <div class="range-slider mt-2" id="price-lbp"></div>
                                    </div>
                                </div>
                                <!-- Price Range ends -->

                                <!-- Categories Starts -->
                                
                                <!-- Categories Ends -->

                                <!-- Brands starts -->
                                
                                <!-- Brand ends -->

                                <!-- Rating starts -->
                                
                                <!-- Rating ends -->

                                <!-- Clear Filters Starts -->
                                
                                <!-- Clear Filters Ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->

                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <p class="clearfix mb-0"></p>
    <!-- BEGIN: Footer-->
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Footer-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/vendors/js/extensions/wNumb.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-ecommerce.js"></script>
    <!-- END: Page JS-->

    <script>
   
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

</html><?php /**PATH D:\Lebanon\phpframe\data\resources\views//frontend.blade.php ENDPATH**/ ?>