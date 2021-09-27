<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
@include('layouts/header')
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    @include('layouts/navbar')
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    @include('layouts/layout')
    <!-- END LAYOUT -->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body {{Auth::user()->role}} @if(Auth::user()->role == 'editor') subscriber @endif">
                <!-- users list start -->
                <section class="app-user-list">
                    <!-- users filter start -->
                    <div class="card">
                        <h5 class="card-header">Search</h5>
                        <div class="d-flex justify-content-between align-items-center mx-50 row pt-0 pb-2">
                            <div class="col-md-4 user_role"></div>
                            <div class="col-md-4 user_where"></div>
                            <div class="col-md-4 user_event"></div>
                        </div>
                    </div>
                    <!-- users filter end -->
                    <!-- list section start -->
                    <div class="card">
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>UserName</th>
                                        <th>Where</th>
                                        <th>Event</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                    @foreach ($logss as $logs)
                                    <tr>
                                        <td style="cursor:pointer;">
                                            <div class="rounded-circle justify-content-center text-center" style="width:34px;height:34px;background-color:#7367f0;color:white;line-height: 2.3;font-weight: 600;">
                                                <?php  echo $index++ ?>
                                            </div>
                                        </td>
                                        <td>{{$logs -> username}}</td>
                                        <td>{{$logs -> tablename}}</td>
                                        <td>{{$logs -> crudevent}}</td>
                                        <td>{{$logs -> description}}</td>
                                        <td>{{$logs -> created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
    @include('layouts/footer')
    <!-- END: Footer-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-logs-list.js"></script>
    <!-- END: Page JS-->

    <script>
    $(function() {
      
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