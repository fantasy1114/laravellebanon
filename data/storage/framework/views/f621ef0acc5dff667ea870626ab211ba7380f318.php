    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="author" content="Grayrids">
      <?php $__currentLoopData = $siteinfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siteinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <title><?php echo e($siteinfo -> title); ?></title>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <!--====== Favicon Icon ======-->
      <link rel="shortcut icon" href="./dashboards/img/2.png" type="image/png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="./dashboards/css/bootstrap.min.css">
      <link rel="stylesheet" href="./dashboards/css/animate.css">
      <link rel="stylesheet" href="./dashboards/css/LineIcons.css">
      <link rel="stylesheet" href="./dashboards/css/owl.carousel.css">
      <link rel="stylesheet" href="./dashboards/css/owl.theme.css">
      <link rel="stylesheet" href="./dashboards/css/magnific-popup.css">
      <link rel="stylesheet" href="./dashboards/css/nivo-lightbox.css">
      <link rel="stylesheet" href="./dashboards/css/main.css">    
      <link rel="stylesheet" href="./dashboards/css/responsive.css">
  
    </head>
    
    <body>
  
      <!-- Header Section Start -->
      <header id="home" class="hero-area">    
        <div class="overlay">
          <span></span>
          <span></span>
        </div>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
          <div class="container">
            <a href="/dashboard" class="navbar-brand">
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
                  <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services">About</a>
                </li>  
                <li class="nav-item">
                  <a class="nav-link" href="#features">Services</a>
                </li>                            
                <li class="nav-item">
                  <a class="nav-link" href="#showcase">Showcase</a>
                </li>       
                <li class="nav-item">
                  <a class="nav-link" href="#pricing">Pricing</a>
                </li>     
                <li class="nav-item">
                  <a class="nav-link" href="#team">Team</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#blog">Blog</a>
                </li>  
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li> 
                <li class="nav-item">
                  <a class="btn btn-singin" href="/logins">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>  
        <div class="container">      
          <div class="row space-100">
            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title">You are Using Free Lite Version</h2>
                <p>Please, Purchase full version of Slick to get all pages, features and permission to use in commercial projects</p>
                
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 p-0 bg-gradient-secondary">
              <div class="intro-img">
                <img src="#" alt="">
              </div>            
            </div>
          </div> 
        </div>             
      </header>
      <!-- Header Section End --> 
  
  
      <!-- Services Section Start -->
      <section id="services" class="section">
        <div class="container">
  
          <div class="row">
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="services-item text-center">
                <div class="icon">
                  <i class="lni-cog"></i>
                </div>
                <h4>Bootstrap 4</h4>
                <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="services-item text-center">
                <div class="icon">
                  <i class="lni-brush"></i>
                </div>
                <h4>Slick Design</h4>
                <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="services-item text-center">
                <div class="icon">
                  <i class="lni-heart"></i>
                </div>
                <h4>Crafted with Love</h4>
                <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
              </div>
            </div>
            <!-- End Col -->
  
          </div>
        </div>
      </section>
      <!-- Services Section End -->
  
  
  
      <!-- Business Plan Section Start -->
      <section id="business-plan">
        <div class="container">
  
          <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
              <div class="business-item-img">
                <img src="./dashboards/img/business/business-img.png" class="img-fluid" alt="">
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12 pl-4">
              <div class="business-item-info">
                <h3>Crafted For Business, Startup and Agency Websites</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br> commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br> velit esse cillum dolore eu fugiat nulla pariatur.</p>
  
                <a class="btn btn-common" href="#">download</a>
              </div>
            </div>
            <!-- End Col -->
  
          </div>
        </div>
      </section>
      <!-- Business Plan Section End -->
  
  
  
      <!-- Cool Fetatures Section Start -->
      <section id="features" class="section">
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="features-text section-header text-center">  
                <div>   
                  <h2 class="section-title">Services We Provide</h2>
                  <div class="desc-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> eiusmod tempor incididunt ut labore et dolore.</p>
                  </div>
                </div> 
              </div>
            </div>
  
          </div>
          <!-- End Row -->
          <!-- Start Row -->
          <div class="row featured-bg">
           <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
               <!-- Start Fetatures -->
              <div class="feature-item featured-border1">
                 <div class="feature-icon float-left">
                   <i class="lni-coffee-cup"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Easy to Customize</h4>
                   <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                 </div>
              </div>
              <!-- End Fetatures -->
            </div>
             <!-- End Col -->
            
           <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
               <!-- Start Fetatures -->
              <div class="feature-item featured-border2">
                 <div class="feature-icon float-left">
                   <i class="lni-briefcase"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Business Template</h4>
                   <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                 </div>
              </div>
              <!-- End Fetatures -->
            </div>
             <!-- End Col -->
            
           <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
               <!-- Start Fetatures -->
              <div class="feature-item featured-border1">
                 <div class="feature-icon float-left">
                   <i class="lni-invention"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Clean & Trendy Design</h4>
                   <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                 </div>
              </div>
              <!-- End Fetatures -->
            </div>
             <!-- End Col -->
            
           <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
               <!-- Start Fetatures -->
              <div class="feature-item featured-border2">
                 <div class="feature-icon float-left">
                  <i class="lni-layers"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Tons of Sections</h4>
                   <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                 </div>
              </div>
              <!-- End Fetatures -->
            </div>
             <!-- End Col -->
            
           <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
               <!-- Start Fetatures -->
              <div class="feature-item featured-border3">
                 <div class="feature-icon float-left">
                   <i class="lni-reload"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Free Future Updates</h4>
                   <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                 </div>
              </div>
              <!-- End Fetatures -->
            </div>
             <!-- End Col -->
            
           <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
               <!-- Start Fetatures -->
              <div class="feature-item">
                 <div class="feature-icon float-left">
                   <i class="lni-support"></i>
                 </div>
                 <div class="feature-info float-left">
                   <h4>Premier Support</h4>
                   <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                 </div>
              </div>
              <!-- End Fetatures -->
            </div>
             <!-- End Col -->
            
  
          </div>
          <!-- End Row -->
        </div>
      </section>
      <!-- Cool Fetatures Section End --> 
  
  
      <!-- Recent Showcase Section Start -->
      <section id="showcase">
        <div class="container-fluid right-position">
          <!-- Start Row -->
          <div class="row gradient-bg">
            <div class="col-lg-12">
              <div class="showcase-text section-header text-center">  
                <div>   
                  <h2 class="section-title">Recent Works</h2>
                  <div class="desc-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>  
                    <p>eiusmod tempor incididunt ut labore et dolore.</p>
                  </div>
                </div> 
              </div>
            </div>
  
          </div>
          <!-- End Row -->
          <!-- Start Row -->
        
            <div class="row justify-content-center showcase-area">
              <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
                <div class="showcase-slider owl-carousel">
                  <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item bg-info">
                      <div class="screenshot-thumb">
                        <img src="<?php echo e($item->photo); ?>" class="img-fluid" alt="" style="width: 290px; height:250px;" />
                        <div class="hover-content text-center">
                          <div class="fancy-table">
                            <div class="table-cell">
                              <div class="single-text">
                                <p><?php echo e($item->title); ?></p>
                                <h5><?php echo e($item->description); ?></h5>
                              </div>
                              <div class="zoom-icon">
                                <a class="lightbox" href="<?php echo e($item -> photo); ?>"><i class="lni-zoom-in"></i></a>
                                <a href="#"><i class="lni-link"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
      
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </div>
              </div>
            </div>
          
          
          <!-- End Row -->
        </div>
      </section>
      <!-- Recent Showcase Section End --> 
  
      <!-- Our Pricing Plan Section Start -->
      <section id="pricing" class="section">
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="pricing-text section-header text-center">  
                <div>   
                  <h2 class="section-title">Pricing Plans</h2>
                  <div class="desc-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>  
                    <p>eiusmod tempor incididunt ut labore et dolore.</p>
                  </div>
                </div> 
              </div>
            </div>
  
          </div>
          <!-- End Row -->
          <!-- Start Row -->
          <div class="row pricing-tables">
           <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
              <div class="pricing-table text-center">
                <div class="pricing-details">
                  <h3>Free</h3>
                  <h1><span>$</span>00</h1>
                  <ul>
                    <li>Free Instalation</li>
                    <li>500MB Storage</li>
                    <li>Single User</li>
                    <li>5 GB Bandwith</li>
                    <li>Minimal Features</li>
                    <li>No Dashboards</li>
                  </ul>
                </div>
                <div class="plan-button">
                  <a href="#" class="btn btn-border">Purchase</a>
                </div>
              </div>
            </div>
             <!--  End Col -->
           <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
              <div class="pricing-table text-center">
                <div class="pricing-details">
                  <h3>standard</h3>
                  <h1><span>$</span>19.99</h1>
                  <ul>
                    <li>Free Instalation</li>
                    <li>2 GB Storage</li>
                    <li>Upto 2 users</li>
                    <li>50 GB Bandwith</li>
                    <li>All Features</li>
                    <li>Sales Dashboards</li>                  
                  </ul>
                </div>
                <div class="plan-button">
                  <a href="#" class="btn btn-common">Purchase</a>
                </div>
              </div>
            </div>
             <!--  End Col -->
           <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
              <div class="pricing-table text-center">
                <div class="pricing-details">
                  <h3>Business</h3>
                  <h1><span>$</span>29.99</h1>
                  <ul>
                    <li>Free Instalation</li>
                    <li>5 GB Storage</li>
                    <li>Upto 4 users</li>
                    <li>100 GB Bandwith</li>
                    <li>All Features</li>
                    <li>Sales Dashboards</li>
                  </ul>
                </div>
                <div class="plan-button">
                  <a href="#" class="btn btn-border">Purchase</a>
                </div>
              </div>
            </div>
             <!--  End Col -->
  
          </div>
          <!-- End Row -->
        </div>
      </section>
      <!-- Our Pricing Plan Section End --> 
  
      <!-- Client Testimoninals Section Start -->
      <section id="testimonial" class="section">
        <div class="container right-position">
          <!-- Start Row -->
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
  
                <a id="play-video" class="video-play-button video-popup" href="https://www.youtube.com/watch?v=Y4fodpIwal8&list=RDXCElIIYx_8s&index=13">
                  <span></span>
                </a>
  
              </div>
            </div>
          </div>
          <!-- End Row -->
          <!-- Start Row -->
          <div class="row justify-content-center testimonial-area">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-20 pl-20" style="overflow: hidden;padding-bottom: 60px">
              <div id="client-testimonial" class="text-center owl-carousel">
                <div class="item">
                  <div class="testimonial-item">
                    <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                      <div class="author-info">
                        <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                      </div>
                    </div>
                    <div class="client-thumb">
                      <img src="./dashboards/img/testimonial/01.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                      <div class="author-info">
                        <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                      </div>
                    </div>
                    <div class="client-thumb">
                      <img src="./dashboards/img/testimonial/01.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                      <div class="author-info">
                        <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                      </div>
                    </div>
                    <div class="client-thumb">
                      <img src="./dashboards/img/testimonial/01.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                      <div class="author-info">
                        <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                      </div>
                    </div>
                    <div class="client-thumb">
                      <img src="./dashboards/img/testimonial/01.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                      <div class="author-info">
                        <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                      </div>
                    </div>
                    <div class="client-thumb">
                      <img src="./dashboards/img/testimonial/01.png" alt="">
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="content-inner">
                      <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                      <div class="author-info">
                        <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                      </div>
                    </div>
                    <div class="client-thumb">
                      <img src="./dashboards/img/testimonial/01.png" alt="">
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
          </div>
          <!-- End Row -->
        </div>
      </section>
      <!-- Client Testimoninals Section End --> 
  
  
      <!-- Team section Start -->
      <section id="team" class="section">
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="team-text section-header text-center">  
                <div>   
                  <h2 class="section-title">Team Members</h2>
                  <div class="desc-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>  
                    <p>eiusmod tempor incididunt ut labore et dolore.</p>
                  </div>
                </div> 
              </div>
            </div>
  
          </div>
          <!-- End Row -->
          <!-- Start Row -->
          <div class="row">

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- Start Col -->
              <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                  <div class="team-thumb">
                    <img src="<?php echo e($user -> profile_photo_path); ?>" class="img-fluid" alt="" style="width: 263px;height:310px;">
                  </div>
    
                  <div class="team-details">
                  <div class="team-social-icons">
                      <ul class="social-list">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                        <li><a href="#"><i class="lni-google-plus"></i></a></li>
                      </ul>
                    </div> 
                    <div class="team-inner text-center">
                      <h5 class="team-title"><?php echo e($user->name); ?></h5>
                      <p><?php echo e($user->role); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Start Col -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
  
          </div>
          <!-- End Row -->
        </div>
      </section>
      <!-- Team section End -->
  
  
      <!-- Blog Section -->
      <section id="blog" class="section">
        <!-- Container Starts -->
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-text section-header text-center">  
                <div>   
                  <h2 class="section-title">Latest Blog Posts</h2>
                  <div class="desc-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>  
                    <p>eiusmod tempor incididunt ut labore et dolore.</p>
                  </div>
                </div> 
              </div>
            </div>
  
          </div>
          <!-- End Row -->
          <!-- Start Row -->
          <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <!-- Start Col -->
              <div class="col-sm-4 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper p-5">
                  <div class="blog-item-img">
                    <a href="#">
                      <img src="<?php echo e($blog->photo); ?>" class="img-fluid" alt="" style="width:240px;height:180px;">
                    </a>             
                  </div>
                  <div class="blog-item-text"> 
                    <h3><a class="lightbox" href="<?php echo e($blog->photo); ?>"><?php echo e($blog->title); ?></a></h3>
                    <p><?php echo e($blog->blog_text); ?></p>
                    <a href="#" class="read-more"></a>
                  </div>
                  <div class="author">
                    
                    <span class="date float-right"><i class="lni-calendar"></i><?php echo e($blog->blog_date); ?></span>
                  </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
              </div>
              <!-- End Col -->
              <!-- Start Col -->
            
              <!-- End Col -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <!-- End Row -->
        </div>
      </section>
      <!-- blog Section End -->
  
      <!-- Contact Us Section -->
      <section id="contact" class="section">
        <!-- Container Starts -->
        <div class="container">
          <!-- Start Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="contact-text section-header text-center">  
                <div>   
                  <h2 class="section-title">Get In Touch</h2>
                  <div class="desc-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>  
                    <p>eiusmod tempor incididunt ut labore et dolore.</p>
                  </div>
                </div> 
              </div>
            </div>
  
          </div>
          <!-- End Row -->
          <!-- Start Row -->
          <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12">
            <form id="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>                                 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" placeholder="Subject" id="msg_subject" class="form-control" name="msg_subject" required data-error="Please enter your subject">
                    <div class="help-block with-errors"></div>
                  </div> 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                    <div class="help-block with-errors"></div>
                  </div>                                 
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" placeholder="Budget" id="budget" class="form-control" name="budget" required data-error="Please enter your Budget">
                    <div class="help-block with-errors"></div>
                  </div> 
                </div>
                <div class="col-md-12">
                  <div class="form-group"> 
                    <textarea class="form-control" id="message"  name="message" placeholder="Write Message" rows="4" data-error="Write your message" required></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="submit-button">
                    <button class="btn btn-common" id="submit" type="submit">Submit</button>
                    <div id="msgSubmit" class="h3 hidden"></div> 
                    <div class="clearfix"></div> 
                  </div>
                </div>
              </div>            
            </form>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">
              
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-12">
              <div class="contact-img">
                <img src="./dashboards/img/contact/01.png" class="img-fluid" alt="">
              </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">
            </div>
            <!-- End Col -->
  
          </div>
          <!-- End Row -->
        </div>
      </section>
      <!-- Contact Us Section End -->
  
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
  
  
      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
      </a> 
  
      <!-- Preloader -->
      <div id="preloader">
        <div class="loader" id="loader-1"></div>
      </div>
      <!-- End Preloader -->
  
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
      <script src="./dashboards/js/jquery-min.js"></script>
      <script src="./dashboards/js/popper.min.js"></script>
      <script src="./dashboards/js/bootstrap.min.js"></script>
      <script src="./dashboards/js/owl.carousel.js"></script>      
      <script src="./dashboards/js/jquery.nav.js"></script>    
      <script src="./dashboards/js/scrolling-nav.js"></script>    
      <script src="./dashboards/js/jquery.easing.min.js"></script>     
      <script src="./dashboards/js/nivo-lightbox.js"></script>     
      <script src="./dashboards/js/jquery.magnific-popup.min.js"></script>     
      
      
      <script src="./dashboards/js/main.js"></script>
      
    </body>
  </html>
<?php /**PATH D:\Lebanon\phpframe\data\resources\views/front/mainpage.blade.php ENDPATH**/ ?>