<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
@include('layouts/header')
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-sliders.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce.css">
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
                    {{-- <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}
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
                                {{-- <div id="product-categories">
                                    <h6 class="filter-title">Categories</h6>
                                    <ul class="list-unstyled categories-list">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category1" name="category-filter" class="custom-control-input" checked />
                                                <label class="custom-control-label" for="category1">Appliances</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category2" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category2">Audio</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category3" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category3">Cameras & Camcorders</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category4" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category4">Car Electronics & GPS</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category5" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category5">Cell Phones</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category6" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category6">Computers & Tablets</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category7" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category7">Health, Fitness & Beauty</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category8" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category8">Office & School Supplies</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category9" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category9">TV & Home Theater</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="category10" name="category-filter" class="custom-control-input" />
                                                <label class="custom-control-label" for="category10">Video Games</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
                                <!-- Categories Ends -->

                                <!-- Brands starts -->
                                {{-- <div class="brands">
                                    <h6 class="filter-title">Brands</h6>
                                    <ul class="list-unstyled brand-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand1" />
                                                <label class="custom-control-label" for="productBrand1">Insignia™</label>
                                            </div>
                                            <span>746</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand2" checked />
                                                <label class="custom-control-label" for="productBrand2">Samsung</label>
                                            </div>
                                            <span>633</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand3" />
                                                <label class="custom-control-label" for="productBrand3">Metra</label>
                                            </div>
                                            <span>591</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand4" />
                                                <label class="custom-control-label" for="productBrand4">HP</label>
                                            </div>
                                            <span>530</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand5" checked />
                                                <label class="custom-control-label" for="productBrand5">Apple</label>
                                            </div>
                                            <span>442</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand6" />
                                                <label class="custom-control-label" for="productBrand6">GE</label>
                                            </div>
                                            <span>394</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand7" />
                                                <label class="custom-control-label" for="productBrand7">Sony</label>
                                            </div>
                                            <span>350</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand8" />
                                                <label class="custom-control-label" for="productBrand8">Incipio</label>
                                            </div>
                                            <span>320</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand9" />
                                                <label class="custom-control-label" for="productBrand9">KitchenAid</label>
                                            </div>
                                            <span>318</span>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="productBrand10" />
                                                <label class="custom-control-label" for="productBrand10">Whirlpool</label>
                                            </div>
                                            <span>298</span>
                                        </li>
                                    </ul>
                                </div> --}}
                                <!-- Brand ends -->

                                <!-- Rating starts -->
                                {{-- <div id="ratings">
                                    <h6 class="filter-title">Ratings</h6>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">160</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">176</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">291</div>
                                    </div>
                                    <div class="ratings-list">
                                        <a href="javascript:void(0)">
                                            <ul class="unstyled-list list-inline">
                                                <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                                <li>& up</li>
                                            </ul>
                                        </a>
                                        <div class="stars-received">190</div>
                                    </div>
                                </div> --}}
                                <!-- Rating ends -->

                                <!-- Clear Filters Starts -->
                                {{-- <div id="clear-filters">
                                    <button type="button" class="btn btn-block btn-primary">Clear All Filters</button>
                                </div> --}}
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
    @include('layouts/footer')
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

</html>