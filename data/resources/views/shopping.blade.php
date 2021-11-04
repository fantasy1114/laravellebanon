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
@include('layouts/header')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">

{{-- <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css"> --}}

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
    <div class="app-content content @if(Auth::user()->rolefunction->shopping_list != 'View') data-page-close @endif">
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
                            {{-- <div class="col-12">
                                <button class="btn btn-outline-secondary dropdown-toggle ml-1 float-left print_stud">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                </button>
                                <button class="btn btn-outline-secondary dropdown-toggle mr-1 float-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                </button>
                            </div> --}}
                            <div class="card-datatable table-responsive pt-2">
                                <table class="w-100 datatables-basic datatables-basic-shopping d-nowrap" id="vorschlaege">
                                    <thead>
                                        <tr>
                                            <th style="text-align: left;">product</th>
                                            <th style="text-align: left;">price</th>
                                            <th style="text-align: left;">qty</th>             
                                            <th style="text-align: left;">subtotal</th>
                                            <th style="text-align: left;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody_data text-center">

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
                               
                                <select class="form-control form-control-lg" name="query" style="width: 65%!important; display:inline-block">
                                    <option value="all" @if(request()->get('query') == 'all') selected @endif>All</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{$category->id}}" @if(request()->get('query') == $category->id) selected @endif>{{$category->categoryname}}<small>({{$category->companies->companyname}})</small></option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-outline-success ml-1">Filter</button>
                            </form>
                            <!-- E-commerce Products Starts -->
                            <section id="ecommerce-products" class="grid-view row">
                                @foreach ($items as $item)
                                    <div class="card ecommerce-card col-md-4 col-12">
                                        <div class="item-wrapper mt-1">
                                            <div class="float-left">
                                                <h6 class="item-price">${{$item->usprice}}</h6>
                                            </div>
                                            <div class="float-right">
                                                <h6 class="item-price">LBP{{$item->lbpprice}}</h6>
                                            </div>
                                        </div>
                                        <div class="item-img text-center">
                                            <img class="img-fluid card-img-top" src="{{$item->photo}}" alt="img-placeholder" />
                                        </div>
                                        <div class="card-body text-center">
                                            <h6 class="item-name">
                                                {{$item->title}}
                                                <span class="card-text item-company">By <span class="company-name text-success">{{$item->categories->companies->companyname}}</span></span>
                                            </h6>
                                            <p class="card-text item-description">
                                            {{$item->description}}
                                            </p>
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="input-group" hidden>
                                                <input type="number" class="touchspin-min-max product_qty{{$item->id}}" value="1"/>
                                            </div>
                                            <button data-id="{{$item->id}}" data-title="{{$item->title}}" data-price="{{$item->usprice}}" class="btn btn-primary btn-cart add-to-cart-send">
                                                <i data-feather="shopping-cart"></i>
                                                <span class="add-to-cart">Add to cart</span>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </section>
                            <!-- E-commerce Products Ends -->                                    
                            {!! $items->links() !!}
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
    @include('layouts/footer')  
    <!-- END: Footer-->

    <script>
        var nowusername = '{{Auth::user()->name}}'
        var datetime = new Date;
        var currentyear = datetime.getFullYear();
        var currentmonth = Number(datetime.getMonth()) + 1;
        var currentday = datetime.getDay();
        var currenthour = datetime.getHours();
        var currentminute = datetime.getMinutes();
        var currenttime = currentyear + '/' + currentmonth + '/' + currentday + '/' + currenthour + '/' + currentminute;
      
    </script>
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
  <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>

  <script src="../../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
  <script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>
  
  <!-- END: Page JS-->
    
    <script>
        // $(function(){
            // var nowpath = window.location.href;
            // var linkquesry = nowpath.replace("https://eduxhub.com/shopping?query=", "");
            // if(linkquesry == 'company'){
            //     $('#customRadio2').prop('checked', true)
            // }
            // else if(linkquesry == 'category'){
            //     $('#customRadio3').prop('checked', true)
            // }
            // else{
            //     $('#customRadio1').prop('checked', true)
            // }
            
        // });
        
    </script>


</body>
<!-- END: Body-->

</html>
