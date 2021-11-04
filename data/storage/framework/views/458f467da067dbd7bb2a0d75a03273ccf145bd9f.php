<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Dmitro Laravel">
    <meta name="keywords" content="Dmitro Laravel">
    <meta name="author" content="Dmitro">
    <title>BLOGPAGS</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">

    <link rel="stylesheet" href="./dashboards/css/animate.css">
    <link rel="stylesheet" href="./dashboards/css/LineIcons.css">
    <link rel="stylesheet" href="./dashboards/css/owl.carousel.css">
    <link rel="stylesheet" href="./dashboards/css/owl.theme.css">
    <link rel="stylesheet" href="./dashboards/css/magnific-popup.css">
    <link rel="stylesheet" href="./dashboards/css/nivo-lightbox.css">
    <link rel="stylesheet" href="./dashboards/css/main.css">    
    <link rel="stylesheet" href="./dashboards/css/responsive.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce.css">
    <!-- END: Page CSS-->

</head>
<!-- END: Head-->
<style>
    .navbar-back{
        background: linear-gradient(95deg, #5533ff 40%, #25ddf5 100%);
        box-shadow: 0 0 7px 1px rgb(0 0 0 / 10%);
        z-index: 9999;
        padding: 5px;
        -webkit-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }
    .nav-link{
        color: #ffffff !important;
        letter-spacing: 1px;
        font-weight: 500;
    }
    .btn-singin{
        background: #7fc9fb;
        color: #fff;
        padding: 10px 33px;
        margin-left: 30px;
        box-shadow: 0px 8px 9px 0px rgb(96 94 94 / 17%);
        margin-right:100px;
    }
    .ecommerce-application .list-view .ecommerce-card .card-body{
        border: none;
    }
    #scroll-top{
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #7367f0;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }
</style>
<!-- BEGIN: Body-->

<body> 
    <header class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar navbar-back">
        <div class="container">
            <a href="/" class="navbar-brand">
            <?php $__currentLoopData = $siteinfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siteinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($siteinfo -> logo); ?>" alt="" style="max-width: 120px; min-width:60px;">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </a>       
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                <a class="nav-link" href="/#home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/#services">About</a>
                </li>  
                <li class="nav-item">
                <a class="nav-link" href="/#features">Services</a>
                </li>                            
                <li class="nav-item">
                <a class="nav-link" href="/#showcase">Showcase</a>
                </li>       
                <li class="nav-item">
                <a class="nav-link" href="/#pricing">Pricing</a>
                </li>     
                <li class="nav-item">
                <a class="nav-link" href="/#team">Team</a>
                </li> 
                <li class="nav-item">
                <a class="nav-link" href="/#blog">Blog</a>
                </li>  
                <li class="nav-item">
                <a class="nav-link" href="/#contact">Contact</a>
                </li> 
                <li class="nav-item">
                <a class="btn btn-singin" href="/logins">Login</a>
                </li>
            </ul>
            </div>
        </div>
    </header>            
 
    <!-- BEGIN: Content-->
    <div class="mt-5 pt-5 ecommerce-application">
        
            <div class="content-detached">
                <div class="content-body">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <section id="blog<?php echo e($blog->id); ?>" class="list-view">
                            <div class="card ecommerce-card">
                                <div class="item-img text-center">
                                    <a>
                                        <img class="img-fluid card-img-top" src="<?php echo e($blog->photo); ?>" alt="img-placeholder">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h2>
                                        <?php echo e($blog->title); ?>

                                    </h2>
                                    <p class="card-text item-description">
                                       <?php echo $blog->blog_text; ?>

                                    </p>
                                </div>
                            
                            </div>                        
                        </section>
                        <!-- E-commerce Products Ends -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            
        </div>
    
    <!-- END: Content-->
         
    <!-- Footer Section Start -->
    <footer>
    <!-- Footer Area Start -->
    <section id="footer-Content">
        <div class="container">
        <!-- Start Row -->
        <div class="row">

        <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
            
            <div class="footer-logo">
                <img src="./dashboards/img/footer-logo.png" alt="">
            </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
            <div class="widget">
                <h3 class="block-title">Company</h3>
                <ul class="menu">
                <li><a href="#">  - About Us</a></li>
                <li><a href="#">- Career</a></li>
                <li><a href="#">- Blog</a></li>
                <li><a href="#">- Press</a></li>
                </ul>
            </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
            <div class="widget">
                <h3 class="block-title">Product</h3>
                <ul class="menu">
                <li><a href="#">  - Customer Service</a></li>
                <li><a href="#">- Enterprise</a></li>
                <li><a href="#">- Price</a></li>
                <li><a href="#">- Scurity</a></li>
                <li><a href="#">- Why SLICK?</a></li>
                </ul>
            </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
            <div class="widget">
                <h3 class="block-title">Download App</h3>
                <ul class="menu">
                <li><a href="#">  - Android App</a></li>
                <li><a href="#">- IOS App</a></li>
                <li><a href="#">- Windows App</a></li>
                <li><a href="#">- Play Store</a></li>
                <li><a href="#">- IOS Store</a></li>
                </ul>
            </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
            <div class="widget">
                <h3 class="block-title">Subscribe Now</h3>
                <p>Appropriately implement calysts for change visa wireless catalysts for change. </p>
                <div class="subscribe-area">
                <input type="email" class="form-control" placeholder="Enter Email">
                <span><i class="lni-chevron-right"></i></span>
                </div>
            </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        </div>
        <!-- Copyright Start  -->

        <div class="copyright">
        <div class="container">
            <!-- Star Row -->
            <div class="row">
            <div class="col-md-12">
                <div class="site-info text-center">
                <p>Crafted by UIdeck</p>
                </div>              
                
            </div>
            <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        </div>
    <!-- Copyright End -->
    </section>
    <!-- Footer area End -->
    
    </footer>
    <!-- Footer Section End --> 
  
    <div class="sidenav-overlay" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
    <div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>

    <!-- BEGIN: Footer-->
    
    <button class="btn btn-primary btn-icon" id="scroll-top" onclick="topFunction()" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <!-- BEGIN: Page JS-->
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
        })
        var mybutton = document.getElementById("scroll-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
  
  <!-- END: Body-->
  
  </body>
<!-- END: Body-->

</html><?php /**PATH D:\Lebanon\phpframe\data\resources\views//blogpages.blade.php ENDPATH**/ ?>