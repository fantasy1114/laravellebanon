    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="Dmitro Project">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="author" content="Dmitro">
      @foreach ($siteinfos as $siteinfo)
        <title>{{$siteinfo -> title}}</title>
      @endforeach
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
    <style>
      .feature-info{
        width: 60%;
      }
     
      #exampleModalLong {
        margin-top: 10%;
      }
    </style>
    <body>
  
      <!-- Header Section Start -->
      <header id="home" class="hero-area">    
        <div class="overlay">
          <span></span>
          <span></span>
        </div>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
          <div class="container">
            <a href="/" class="navbar-brand">
              @foreach ($siteinfos as $siteinfo)
                <img src="{{$siteinfo -> logo}}" alt="" style="max-width: 120px; min-width:60px;">
              @endforeach
              
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
        <div class="container blogpageno">
          @foreach ($staticinfos as $staticinfo)
            <div class="row space-100">
              <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="contents">
                  <h2 class="head-title">{{$staticinfo->home_title}}</h2>
                  <p>{!! $staticinfo->home_desc !!}</p>
                  <div class="header-button">
                    <a href="{{$staticinfo->home_button_one_desc}}" rel="nofollow" target="_blank" class="btn btn-border-filled">{{$staticinfo->home_button_one_title}}</a>
                    <a href="{{$staticinfo->home_button_two_desc}}" rel="nofollow" target="_blank" class="btn btn-border page-scroll">{{$staticinfo->home_button_two_title}}</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-xs-12 p-0">
                <div class="intro-img">
                  <img src="{{$staticinfo->home_image}}" alt="" style="width: 560px;height:450px;">
                </div>            
              </div>
            </div>
          @endforeach    
           
        </div>             
      </header>
      <!-- Header Section End --> 
  
      <div class="blogpageno">
        <!-- Services Section Start -->
        <section id="services" class="section">
          @foreach ($staticinfos as $staticinfo)

            <section id="business-plan">
              <div class="container">
      
                <div class="row">
                  <!-- Start Col -->
                  <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
                    <div class="business-item-img">
                      <img src="{{$staticinfo->about_image}}" class="img-fluid" alt="" style="width: 550px;height:400px">
                    </div>
                  </div>
                  <!-- End Col -->
                  <!-- Start Col -->
                  <div class="col-lg-6 col-md-12 pl-4 pt-3">
                    <div class="business-item-info">
                      <h3>{{$staticinfo->about_title}}</h3>
                      <p>{!! $staticinfo->about_desc !!}</p>
        
                      {{-- <a class="btn btn-common" href="#">download</a> --}}
                    </div>
                  </div>
                  <!-- End Col -->
        
                </div>
              </div>
            </section>
            <div class="container">
      
              <div class="row">
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="services-item text-center">
                    <div class="icon">
                      <i class="lni-cog"></i>
                    </div>
                    <h4>{{$staticinfo->about_one_title}}</h4>
                    <p>{!! $staticinfo->about_one_desc !!}</p>
                  </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="services-item text-center">
                    <div class="icon">
                      <i class="lni-brush"></i>
                    </div>
                    <h4>{{$staticinfo->about_two_title}}</h4>
                    <p>{!! $staticinfo->about_two_desc !!}</p>
                  </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="services-item text-center">
                    <div class="icon">
                      <i class="lni-heart"></i>
                    </div>
                    <h4>{{$staticinfo->about_three_title}}</h4>
                    <p>{!! $staticinfo->about_three_desc !!}</p>
                  </div>
                </div>
                <!-- End Col -->
      
              </div>
            </div>
            
          @endforeach
        </section>
        <!-- Services Section End -->
    
    
        <!-- Cool Fetatures Section Start -->
        <section id="features" class="section">
          @foreach ($staticinfos as $staticinfo)
            <div class="container">
              <!-- Start Row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="features-text section-header text-center">  
                    <div>   
                      <h2 class="section-title">{{$staticinfo->service_title}}</h2>
                      <div class="desc-text">
                      {{$staticinfo->service_desc}}</p>
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
                      <h4>{{$staticinfo->service_one_title}}</h4>
                      {!! $staticinfo->service_one_desc !!}
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
                      <h4>{{$staticinfo->service_two_title}}</h4>
                    {!! $staticinfo->service_two_desc !!}
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
                      <h4>{{$staticinfo->service_three_title}}</h4>
                    {!! $staticinfo->service_three_desc !!}
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
                      <h4>{{$staticinfo->service_four_title}}</h4>
                    {!! $staticinfo->service_four_desc !!}
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
                      <h4>{{$staticinfo->service_five_title}}</h4>
                    {!! $staticinfo->service_five_desc !!}
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
                      <h4>{{$staticinfo->service_six_title}}</h4>
                    {!! $staticinfo->service_six_desc !!}
                    </div>
                  </div>
                  <!-- End Fetatures -->
                </div>
                <!-- End Col -->
                
      
              </div>
              <!-- End Row -->
            </div>
          @endforeach
        </section>
        <!-- Cool Fetatures Section End --> 
    
    
        <!-- Recent Showcase Section Start -->
        <section id="showcase">
          @foreach ($staticinfos as $staticinfo)
            
            <div class="container-fluid right-position">
              <!-- Start Row -->
              <div class="row gradient-bg">
                <div class="col-lg-12">
                  <div class="showcase-text section-header text-center">  
                    <div>   
                      <h2 class="section-title">{{$staticinfo->showcase_title}}</h2>
                      <div class="desc-text">
                        <p>{{$staticinfo->showcase_desc}}</p>
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
                      @foreach ($items as $item)
                        <div class="item bg-info">
                          <div class="screenshot-thumb">
                            <img src="{{$item->photo}}" class="img-fluid" alt="" style="width: 290px; height:250px;" />
                            <div class="hover-content text-center">
                              <div class="fancy-table">
                                <div class="table-cell">
                                  <div class="single-text">
                                    <p>{{$item->title}}</p>
                                    <h5>{{$item->description}}</h5>
                                  </div>
                                  <div class="zoom-icon">
                                    <a class="lightbox" href="{{$item -> photo}}">
                                      <i class="lni-zoom-in"></i>
                                    </a>
                                    <a href="#"><i class="lni-link"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
          
                          </div>
                        </div>
                      @endforeach
                      
                    </div>
                  </div>
                </div>
              
              
              <!-- End Row -->
            </div>
          
          @endforeach
        </section>
        <!-- Recent Showcase Section End --> 
    
        <!-- Our Pricing Plan Section Start -->
        <section id="pricing" class="section">
          @foreach ($staticinfos as $staticinfo)
          
            <div class="container">
              <!-- Start Row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="pricing-text section-header text-center">  
                    <div>   
                      <h2 class="section-title">{{$staticinfo->pricing_title}}</h2>
                      <div class="desc-text">
                        <p>{{$staticinfo->pricing_desc}}</p>
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
                      <h3>{{$staticinfo->package_one}}</h3>
                      <h1><span>$</span>{{$staticinfo->package_one_price}}</h1>
                      <ul>
                        
                        {!! $staticinfo->package_one_feature !!}
                        
                      </ul>
                    </div>
                    <div class="plan-button">
                      <a href="{{$staticinfo->package_one_link}}" target="_blank" class="btn btn-border">{{$staticinfo->package_one_button}}</a>
                    </div>
                  </div>
                </div>
                <!--  End Col -->
                <!--  Start Col -->
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="pricing-table text-center">
                    <div class="pricing-details">
                      <h3>{{$staticinfo->package_two}}</h3>
                      <h1><span>$</span>{{$staticinfo->package_two_price}}</h1>
                      <ul>
                        
                        {!! $staticinfo->package_two_feature !!}
                        
                      </ul>
                    </div>
                    <div class="plan-button">
                      <a href="{{$staticinfo->package_two_link}}" target="_blank" class="btn btn-border">{{$staticinfo->package_two_button}}</a>
                    </div>
                  </div>
                </div>
                <!--  End Col -->
                <!--  Start Col -->
                <div class="col-lg-4 col-md-4 col-xs-12">
                  <div class="pricing-table text-center">
                    <div class="pricing-details">
                      <h3>{{$staticinfo->package_three}}</h3>
                      <h1><span>$</span>{{$staticinfo->package_three_price}}</h1>
                      <ul>
                        
                        {!! $staticinfo->package_three_feature !!}
                        
                      </ul>
                    </div>
                    <div class="plan-button">
                      <a href="{{$staticinfo->package_three_link}}" target="_blank" class="btn btn-border">{{$staticinfo->package_three_button}}</a>
                    </div>
                  </div>
                </div>
                <!--  End Col -->
      
              </div>
              <!-- End Row -->
            </div>
          
          @endforeach
        </section>
        <!-- Our Pricing Plan Section End --> 
        @foreach ($staticinfos as $staticinfo)
          <!-- Client Testimoninals Section Start -->
          <section id="testimonial" class="section" style=" 
          margin-bottom: 270px;
          background: url('{{$staticinfo->pricing_img}}') no-repeat center center;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover; ">
            <div class="container right-position">
              <!-- Start Row -->
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <div class="video-promo-content text-center">
                    @foreach ($staticinfos as $staticinfo)
                      <a id="play-video" class="video-play-button video-popup" href="{{$staticinfo->pricing_video_link}}">
                        <span></span>
                      </a>
                    @endforeach
      
                  </div>
                </div>
              </div>
              <!-- End Row -->
              <!-- Start Row -->
              <div class="row justify-content-center testimonial-area">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-20 pl-20" style="overflow: hidden;padding-bottom: 60px">
                  <div id="client-testimonial" class="text-center owl-carousel">
                    @foreach ($pricingsliders as $pricingslider)
                      
                      <div class="item">
                        <div class="testimonial-item">
                          <div class="content-inner">
                            <p class="description">{{$pricingslider->description}}</p>
                            <div class="author-info">
                              <h5>{{$pricingslider->title}}</h5>
                            </div>
                          </div>
                          <div class="client-thumb">
                            <img src="{{$pricingslider->photo}}" alt="" style="width: 90px; height:90px;">
                          </div>
                        </div>
                      </div>
                      
                    @endforeach
                  </div>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </section>
          <!-- Client Testimoninals Section End --> 
        @endforeach
      
    
    
        <!-- Team section Start -->
        <section id="team" class="section">
          @foreach ($staticinfos as $staticinfo)
            <div class="container">
              <!-- Start Row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="team-text section-header text-center">  
                    <div>   
                      <h2 class="section-title">{{$staticinfo->team_title}}</h2>
                      <div class="desc-text">
                        <p>{{$staticinfo->team_desc}}</p>
                      </div>
                    </div> 
                  </div>
                </div>
      
              </div>
              <!-- End Row -->
              <!-- Start Row -->
              <div class="row">

                @foreach ($users as $user)
                  <!-- Start Col -->
                  <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="single-team">
                      <div class="team-thumb">
                        <img src="{{$user -> profile_photo_path}}" class="img-fluid" alt="" style="width: 263px;height:310px;">
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
                          <h5 class="team-title">{{$user->name}}</h5>
                          <p>{{$user->role}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Start Col -->
                @endforeach  
      
              </div>
              <!-- End Row -->
            </div>
          @endforeach
        </section>
        <!-- Team section End -->
    
    
        <!-- Blog Section -->
        <section id="blog" class="section">
          <!-- Container Starts -->
          <div class="container">
            <!-- Start Row -->
            @foreach ($staticinfos as $staticinfo)
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-text section-header text-center">  
                    <div>   
                      <h2 class="section-title">{{$staticinfo->blog_title}}</h2>
                      <div class="desc-text">
                        <p>{{$staticinfo->blog_desc}}</p>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            @endforeach
            <!-- End Row -->
            <!-- Start Row -->
            <div class="row">
              @foreach ($blogs as $blog)
                <!-- Start Col -->
                <div class="col-sm-4 col-xs-12 blog-item">
                  <!-- Blog Item Starts -->
                  <div class="blog-item-wrapper p-5">
                    <div class="blog-item-img">
                      <a href="#">
                        <img src="{{$blog->photo}}" class="img-fluid" alt="" style="width:240px;height:180px;">
                      </a>             
                    </div>
                    {{-- <div class="blog-item-text" data-toggle="modal" data-title="{{$blog->title}}" data-blog_text="{!! $blog->blog_text !!}" data-target="#exampleModalLong{{$blog->id}}" style="overflow: hidden; height:250px; cursor:pointer;">  --}}
                    <div class="blog-item-text" style="overflow: hidden; height:250px; cursor:pointer;">
                      <a href="/blogpages#blog{{$blog->id}}" class="nav-link">
                        <h3>{{$blog->title}}</h3>
                        <p>{!! $blog->blog_text !!}</p>
                      </a>
                      <a href="#" class="read-more"></a>
                    </div>
                    
                    <div class="author">
                      {{-- <span class="name"><i class="lni-user"></i>posted date</span> --}}
                      <span class="date float-right"><i class="lni-calendar"></i>{!! $blog->blog_date !!}</span>
                    </div>
                  </div>
                  <!-- Blog Item Wrapper Ends-->
                </div>
                <!-- End Col -->
                <!-- Start Col -->
              
                <!-- End Col -->
              @endforeach
            </div>
            <!-- End Row -->
          </div>
        </section>
        <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="exampleModalbody">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
      <!-- blog Section End -->
        <!-- Contact Us Section -->
        <section id="contact" class="section">
          @foreach ($staticinfos as $staticinfo)
            
            <!-- Container Starts -->
            <div class="container">
              <!-- Start Row -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="contact-text section-header text-center">  
                    <div>   
                      <h2 class="section-title">{{$staticinfo->contact_title}}</h2>
                      <div class="desc-text">
                        <p>{{$staticinfo->contact_desc}}</p>
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
          
          @endforeach
        </section>
        <!-- Contact Us Section End -->
      </div>
     
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
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6140d4a7d326717cb6817076/1ffijtccl';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
      </script>
      <script>
        // $('.blog-item-text').on('click', function(e){
          // $('#exampleModalLongTitle').text($(this).data('title'));
          // $('#exampleModalbody').html($(this).data('blog_text'))
          // $('#exampleModalLong').modal('show');
          // $('.blogpageno').css('display', 'none');          
        // })
        // $('.navbar-collapse').on('click', function(e){
          // $('.blogpageno').css('display', 'block'); 
        // })
      </script>
      <!--End of Tawk.to Script-->
      
    </body>
  </html>
