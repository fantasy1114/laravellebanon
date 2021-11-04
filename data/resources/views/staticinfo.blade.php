<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts/header')
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    @include('layouts/navbar')
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    @include('layouts/layout')
    <!-- END LAYOUT -->

    <!-- BEGIN: Content-->
    <div class="app-content content @if(Auth::user()->rolefunction->staticinfo_view != 'on') data-page-close @endif">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body mb-5">
                <!-- users list start -->
                <div class="content-body @if(Auth::user()->rolefunction->staticinfo_write != 'on') data-page-close @endif">
                    <!-- account setting page -->
                    <section id="page-account-settings">
                        <div class="row">
                            <!-- left menu section -->
                            <div class="col-md-3 mb-2 mb-md-0">
                                <ul class="nav nav-pills flex-column nav-left">
                                    <!-- Home -->
                                    <li class="nav-item">
                                        <a class="nav-link active" id="account-pill-home" data-toggle="pill" href="#account-vertical-home" aria-expanded="true">
                                            <i data-feather='home' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Home</span>
                                        </a>
                                    </li>
                                    <!-- About -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-about" data-toggle="pill" href="#account-vertical-about" aria-expanded="false">
                                            <i data-feather='help-circle' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">About</span>
                                        </a>
                                    </li>
                                    <!-- Service -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-Service" data-toggle="pill" href="#account-vertical-service" aria-expanded="false">
                                            <i data-feather='gift' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Service</span>
                                        </a>
                                    </li>
                                    <!-- Showcase -->
                                     <li class="nav-item">
                                        <a class="nav-link" id="account-pill-showcase" data-toggle="pill" href="#account-vertical-showcase" aria-expanded="false">
                                            <i data-feather='eye' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Showcase</span>
                                        </a>
                                    </li>
                                    <!-- Pricing -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-pricing" data-toggle="pill" href="#account-vertical-pricing" aria-expanded="false">
                                            <i data-feather='credit-card' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Pricing</span>
                                        </a>
                                    </li>
                                    <!-- Team -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-team" data-toggle="pill" href="#account-vertical-team" aria-expanded="false">
                                            <i data-feather='users' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Team</span>
                                        </a>
                                    </li>
                                    <!-- blog -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-blog" data-toggle="pill" href="#account-vertical-blog" aria-expanded="false">
                                            <i data-feather='command' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Blog</span>
                                        </a>
                                    </li>
                                    <!-- contact -->
                                    <li class="nav-item">
                                        <a class="nav-link" id="account-pill-contact" data-toggle="pill" href="#account-vertical-contact" aria-expanded="false">
                                            <i data-feather='inbox' class="font-medium-3 mr-1"></i>
                                            <span class="font-weight-bold">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ left menu section -->
    
                            <!-- right content section -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            @foreach ($staticinfos as $staticinfo)
                                                <!-- home tab -->
                                                <div role="tabpanel" class="tab-pane active" id="account-vertical-home" aria-labelledby="account-pill-home" aria-expanded="true">
        
                                                    <!-- form -->
                                                    <form class="validate-form update-home-page mt-2">
                                                    
                                                            <!-- header media -->
                                                            <div class="media">
                                                                <a href="javascript:void(0);" class="mr-25">
                                                                    <img src="{{$staticinfo->home_image}}" id="home_image-img" class="rounded mr-50" alt="profile image" height="240" width="360" />
                                                                </a>
                                                                <!-- upload and reset button -->
                                                                <div class="media-body mt-75 ml-1 align-middle">
                                                                    <label for="home_image" class="btn btn-sm btn-primary mb-75 mr-75 mt-75">Upload</label>
                                                                    <input type="file" id="home_image" hidden accept="image/*" name="home_image" />
                                                                </div>
                                                                <!--/ upload and reset button -->
                                                            </div>
                                                            <!--/ header media -->
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="home_title">Title</label>
                                                                        <input type="text" class="form-control" id="home_title" name="home_title" placeholder="Title" value="{{$staticinfo->home_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="home_desc">Description</label>
                                                                        <textarea class="form-control" id="home_desc" name="home_desc" placeholder="description"  rows="5">{{$staticinfo->home_desc}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="home_button_one_title">Button Title</label>
                                                                        <input type="text" class="form-control" id="home_button_one_title" name="home_button_one_title" placeholder="Title" value="{{$staticinfo->home_button_one_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="home_button_one_desc">Link</label>
                                                                        <input type="text" class="form-control" id="home_button_one_desc" name="home_button_one_desc" placeholder="Link" value="{{$staticinfo->home_button_one_desc}}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="home_button_two_title">Title</label>
                                                                        <input type="text" class="form-control" id="home_button_two_title" name="home_button_two_title" placeholder="Title" value="{{$staticinfo->home_button_two_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="home_button_two_desc">Link</label>
                                                                        <input type="text" class="form-control" id="home_button_two_desc" name="home_button_two_desc" placeholder="Link" value="{{$staticinfo->home_button_two_desc}}" />
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                            </div>
                                                    
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ home tab -->
        
                                                <!-- about  -->
                                                <div class="tab-pane fade" id="account-vertical-about" role="tabpanel" aria-labelledby="account-pill-about" aria-expanded="false">
                                                    <!-- form -->
                                                    <form class="validate-form update-about-page">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="about_one_title">Title</label>
                                                                    <input type="text" class="form-control" id="about_one_title" name="about_one_title" placeholder="Title" value="{{$staticinfo->about_one_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="about_one_desc">Description</label>
                                                                    <textarea class="form-control" id="about_one_desc" name="about_one_desc" placeholder="description"  rows="5">{{$staticinfo->about_one_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="about_two_title">Title</label>
                                                                    <input type="text" class="form-control" id="about_two_title" name="about_two_title" placeholder="Title" value="{{$staticinfo->about_two_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="about_two_desc">Description</label>
                                                                    <textarea class="form-control" id="about_two_desc" name="about_two_desc" placeholder="description"  rows="5">{{$staticinfo->about_two_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="about_three_title">Title</label>
                                                                    <input type="text" class="form-control" id="about_three_title" name="about_three_title" placeholder="Title" value="{{$staticinfo->about_three_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="about_three_desc">Description</label>
                                                                    <textarea class="form-control" id="about_three_desc" name="about_three_desc" placeholder="description"  rows="5">{{$staticinfo->about_three_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- about image media -->
                                                            <div class="col-12 col-sm-6">
                                                                <div class="row">
                                                                    <a href="javascript:void(0);" class="mr-25">
                                                                        <img src="{{$staticinfo->about_image}}" id="about_image_img" class="rounded mr-50" alt="profile image" height="160" width="240" />
                                                                    </a>
                                                                </div>
                                                                <!-- upload and reset button -->
                                                                
                                                                <div class="row text-center">
                                                                    <label for="about_image" class="btn btn-sm btn-primary ml-5 mt-1 justify-content-center">Upload</label>
                                                                    <input type="file" id="about_image" hidden accept="image/*" name="about_image" />
                                                                </div>
                                                                
                                                                <!--/ upload and reset button -->
                                                            </div>
                                                            <!--/ about image media -->
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="about_title">Title</label>
                                                                    <input type="text" class="form-control" id="about_title" name="about_title" placeholder="Title" value="{{$staticinfo->about_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="about_desc">Description</label>
                                                                    <textarea class="form-control" id="about_desc" name="about_desc" placeholder="description"  rows="5">{{$staticinfo->about_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        </div>
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ about password -->

                                                <!-- service tab -->
                                                <div role="tabpanel" class="tab-pane" id="account-vertical-service" aria-labelledby="account-pill-service" aria-expanded="true">
        
                                                    <!-- form -->
                                                    <form class="validate-form update-service-page mt-2">
                                                        <div class="row">
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="service_title">Title</label>
                                                                        <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Title" value="{{$staticinfo->service_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="service_desc">Description</label>
                                                                        <textarea class="form-control" id="service_desc" name="service_desc" placeholder="description"  rows="5">{{$staticinfo->service_desc}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="service_one_title">Title</label>
                                                                    <input type="text" class="form-control" id="service_one_title" name="service_one_title" placeholder="Title" value="{{$staticinfo->service_one_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="service_one_desc">Description</label>
                                                                    <textarea class="form-control" id="service_one_desc" name="service_one_desc" placeholder="description"  rows="5">{{$staticinfo->service_one_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="service_two_title">Title</label>
                                                                    <input type="text" class="form-control" id="service_two_title" name="service_two_title" placeholder="Title" value="{{$staticinfo->service_two_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="service_two_desc">Description</label>
                                                                    <textarea class="form-control" id="service_two_desc" name="service_two_desc" placeholder="description"  rows="5">{{$staticinfo->service_two_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="service_three_title">Title</label>
                                                                    <input type="text" class="form-control" id="service_three_title" name="service_three_title" placeholder="Title" value="{{$staticinfo->service_three_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="service_three_desc">Description</label>
                                                                    <textarea class="form-control" id="service_three_desc" name="service_three_desc" placeholder="description"  rows="5">{{$staticinfo->service_three_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="service_four_title">Title</label>
                                                                    <input type="text" class="form-control" id="service_four_title" name="service_four_title" placeholder="Title" value="{{$staticinfo->service_four_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="service_four_desc">Description</label>
                                                                    <textarea class="form-control" id="service_four_desc" name="service_four_desc" placeholder="description"  rows="5">{{$staticinfo->service_four_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="service_five_title">Title</label>
                                                                    <input type="text" class="form-control" id="service_five_title" name="service_five_title" placeholder="Title" value="{{$staticinfo->service_five_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="service_five_desc">Description</label>
                                                                    <textarea class="form-control" id="service_five_desc" name="service_five_desc" placeholder="description"  rows="5">{{$staticinfo->service_five_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="service_six_title">Title</label>
                                                                    <input type="text" class="form-control" id="service_six_title" name="service_six_title" placeholder="Title" value="{{$staticinfo->service_six_title}}" />
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <label for="service_six_desc">Description</label>
                                                                    <textarea class="form-control" id="service_six_desc" name="service_six_desc" placeholder="description"  rows="5">{{$staticinfo->service_six_desc}}
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        </div>
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ service tab -->

                                                <!-- showcase tab -->
                                                <div role="tabpanel" class="tab-pane" id="account-vertical-showcase" aria-labelledby="account-pill-showcase" aria-expanded="true">
        
                                                    <!-- form -->
                                                    <form class="validate-form update-showcase-page mt-2">
                                                           
                                                        <div class="row">
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="showcase_title">Title</label>
                                                                        <input type="text" class="form-control" id="showcase_title" name="showcase_title" placeholder="Title" value="{{$staticinfo->showcase_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="showcase_desc">Description</label>
                                                                        <textarea class="form-control" id="showcase_desc" name="showcase_desc" placeholder="description"  rows="5">{{$staticinfo->showcase_desc}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        </div>
                                                    </form>
                                                    <!--/ form -->

                                                </div>
                                                <!--/ showcase tab -->

                                                <!-- pricing tab -->
                                                <div role="tabpanel" class="tab-pane" id="account-vertical-pricing" aria-labelledby="account-pill-pricing" aria-expanded="true">
        
                                                    <!-- form -->
                                                    <form class="validate-form update-pricing-page mt-2">
                                                        <div class="row">
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="pricing_title">Title</label>
                                                                        <input type="text" class="form-control" id="pricing_title" name="pricing_title" placeholder="Title" value="{{$staticinfo->pricing_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="pricing_desc">Description</label>
                                                                        <textarea class="form-control" id="pricing_desc" name="pricing_desc" placeholder="description"  rows="5">{{$staticinfo->pricing_desc}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <input type="text" class="form-control" id="pricing_video_link" name="pricing_video_link" placeholder="https://www.youtube.com" value="{{$staticinfo->pricing_video_link}}" />
                                                            </div>
                                                        </div>
                                                        <div class="row col-12 mt-2">
                                                            <!-- header media -->
                                                           <div class="media">
                                                               <a href="javascript:void(0);" class="mr-25 mt-5">
                                                                   <img src="{{$staticinfo->pricing_img}}" id="pricing_img-img" class="rounded mr-50" alt="profile image" height="240" width="360" />
                                                               </a>
                                                               <!-- upload and reset button -->
                                                               <div class="media-body mt-75 ml-1 align-middle">
                                                                   <label for="pricing_img" class="btn btn-sm btn-primary mb-75 mr-75 mt-5">Upload</label>
                                                                   <input type="file" id="pricing_img" hidden accept="image/*" name="pricing_img" />
                                                               </div>
                                                               <!--/ upload and reset button -->
                                                           </div>
                                                           <!--/ header media -->
                                                        </div>
                                                        <div class="row col-12">
                                                            
                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="package_one">Package</label>
                                                                    <input type="text" class="form-control" id="package_one" name="package_one" placeholder="Title" value="{{$staticinfo->package_one}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_one_price">Price</label>
                                                                    <input type="text" class="form-control" id="package_one_price" name="package_one_price" placeholder="Title" value="{{$staticinfo->package_one_price}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_one_feature">Features</label>
                                                                    <textarea  class="form-control" id="package_one_feature" name="package_one_feature" placeholder="Title" value=""> {{$staticinfo->package_one_feature}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_one_button">Button Name</label>
                                                                    <input type="text" class="form-control" id="package_one_button" name="package_one_button" placeholder="Title" value="{{$staticinfo->package_one_button}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_one_link">Link</label>
                                                                    <input type="text" class="form-control" id="package_one_link" name="package_one_link" placeholder="http://" value="{{$staticinfo->package_one_link}}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="package_two">Package</label>
                                                                    <input type="text" class="form-control" id="package_two" name="package_two" placeholder="Title" value="{{$staticinfo->package_two}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_two_price">Price</label>
                                                                    <input type="text" class="form-control" id="package_two_price" name="package_two_price" placeholder="Title" value="{{$staticinfo->package_two_price}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_two_feature">Features</label>
                                                                    <textarea  class="form-control" id="package_two_feature" name="package_two_feature" placeholder="Title" value=""> {{$staticinfo->package_two_feature}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_two_button">Button Name</label>
                                                                    <input type="text" class="form-control" id="package_two_button" name="package_two_button" placeholder="Title" value="{{$staticinfo->package_two_button}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_two_link">Link</label>
                                                                    <input type="text" class="form-control" id="package_two_link" name="package_two_link" placeholder="http://" value="{{$staticinfo->package_two_link}}" />
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-4">
                                                                <div class="form-group">
                                                                    <label for="package_three">Package</label>
                                                                    <input type="text" class="form-control" id="package_three" name="package_three" placeholder="Title" value="{{$staticinfo->package_three}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_three_price">Price</label>
                                                                    <input type="text" class="form-control" id="package_three_price" name="package_three_price" placeholder="Title" value="{{$staticinfo->package_three_price}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_three_feature">Features</label>
                                                                    <textarea  class="form-control" id="package_three_feature" name="package_three_feature" placeholder="Title" value=""> {{$staticinfo->package_three_feature}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_three_button">Button Name</label>
                                                                    <input type="text" class="form-control" id="package_three_button" name="package_three_button" placeholder="Title" value="{{$staticinfo->package_three_button}}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="package_three_link">Link</label>
                                                                    <input type="text" class="form-control" id="package_three_link" name="package_three_link" placeholder="http://" value="{{$staticinfo->package_three_link}}" />
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        </div>
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ pricing tab -->

                                                <!-- team tab -->
                                                <div role="tabpanel" class="tab-pane" id="account-vertical-team" aria-labelledby="account-pill-team" aria-expanded="true">
        
                                                    <!-- form -->
                                                    <form class="validate-form update-team-page mt-2">
                                                        
                                                        <div class="row">
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="team_title">Title</label>
                                                                        <input type="text" class="form-control" id="team_title" name="team_title" placeholder="Title" value="{{$staticinfo->team_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="team_desc">Description</label>
                                                                        <textarea class="form-control" id="team_desc" name="team_desc" placeholder="description"  rows="5">{{$staticinfo->team_desc}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        </div>
                                                    
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ team tab -->

                                                <!-- blog tab -->
                                                <div role="tabpanel" class="tab-pane" id="account-vertical-blog" aria-labelledby="account-pill-blog" aria-expanded="true">
        
                                                    <!-- form -->
                                                    <form class="validate-form update-blog-page mt-2">
                                                        
                                                        <div class="row">
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="blog_title">Title</label>
                                                                        <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Title" value="{{$staticinfo->blog_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="blog_desc">Description</label>
                                                                        <textarea class="form-control" id="blog_desc" name="blog_desc" placeholder="description"  rows="5">{{$staticinfo->blog_desc}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        </div>
                                                    
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ blog tab -->

                                                <!-- contact tab -->
                                                <div role="tabpanel" class="tab-pane" id="account-vertical-contact" aria-labelledby="account-pill-contact" aria-expanded="true">
        
                                                    <!-- form -->
                                                    <form class="validate-form update-contact-page mt-2">
                                                        
                                                        <div class="row">
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="contact_title">Title</label>
                                                                        <input type="text" class="form-control" id="contact_title" name="contact_title" placeholder="Title" value="{{$staticinfo->contact_title}}" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-12 col-sm-3"></div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="contact_desc">Description</label>
                                                                        <textarea class="form-control" id="contact_desc" name="contact_desc" placeholder="description"  rows="5">{{$staticinfo->contact_desc}}
                                                                        </textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-3"></div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        </div>
                                                    
                                                    </form>
                                                    <!--/ form -->
                                                </div>
                                                <!--/ blog tab -->
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ right content section -->
                        </div>
                    </section>
                    <!-- / account setting page -->
    
                </div>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts/footer')
    <!-- END: Footer-->

    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    <!-- END: Page JS-->

    <script>
        $(function(){                
            $('.update-home-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'statichomeupdate/1';
                console.log(formData);
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

            $('.update-about-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'staticaboutupdate/1'
                
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

            $('.update-service-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'staticserviceupdate/1'
                
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
            
            $('.update-showcase-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'staticshowcaseupdate/1'
                
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

            $('.update-pricing-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'staticpricingupdate/1'
                
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

            $('.update-team-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'staticteamupdate/1'
                
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

            $('.update-blog-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'staticblogupdate/1'
                
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

            $('.update-contact-page').submit(function(e){
                var formData = new FormData(this);
                var $userid = 'staticcontactupdate/1'
                
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

</html>