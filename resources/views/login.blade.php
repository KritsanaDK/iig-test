<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="Hyper/assets/images/favicon.ico">

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}

    @include('lib_css')

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('lib_leftside')

        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('lib_navbar')
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">Login >> {{ $login }}</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->





                    <div class="row">
                        <div class="col-xl-6 col-lg-6 order-lg-2 order-xl-1">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('profile') }}" id="id_login" enctype="multipart/form-data"
                                        method="post">

                                        @csrf
                                        <!-- Equivalent to... -->
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                        {{-- <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"> --}}

                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label text-danger">Required</label>

                                                </div>
                                                <label class="col-md-3 col-form-label" for="userName"><span
                                                        class="text-danger">*</span>User name</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="userName"
                                                        name="userName" value="" required maxlength="12"
                                                        size="12">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="pass"> <span
                                                        class="text-danger">*</span>Password</label>
                                                <div class="col-md-9">
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" id="pass" name="pass"
                                                            class="form-control" value="" required
                                                            pattern="[A-Za-z0-9]+" minlength="6">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-eye"></i>
                                                            </span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-md-9 offset-md-3">
                                                    <button type="submit" class="btn btn-secondary"
                                                        id="btn_login">Login</button>
                                                    <a href="register" class="btn btn-warning">Register</a>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->




                    </div>
                    <!-- end row -->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            @include('lib_footer')

            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- /End-bar -->

    @include('lib_js')

    <script type="text/javascript">
        $(document).ready(function() {
            console.log("Hello");
            $("#show_hide_password i").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") === "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("mdi mdi-eye-off");
                    $('#show_hide_password i').addClass("mdi mdi-eye");
                } else {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').removeClass("mdi mdi-eye");
                    $('#show_hide_password i').addClass("mdi mdi-eye-off");
                }
            });

        });

        // $("#btn_login").click(function(event) {
        //     event.preventDefault();

        //     // $.ajaxSetup({
        //     //     headers: {
        //     //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     //     }
        //     // });

        //     console.log("Login");

        //     // let _token = $('meta[name="csrf-token"]').attr('content');

        //     let userName = $("#userName").val();
        //     let password = $("#password").val();
        //     console.log("userName : " + userName);
        //     console.log("password : " + password);


        //     $.ajax({
        //         type: "POST",
        //         url: "{{ url('register_login') }}",

        //         dataType: "json",
        //         data: {
        //             "_token": "{{ csrf_token() }}",
        //             userName: userName,
        //             password: password
        //         },
        //         success: function(res) {
        //             console.log(res);
        //         },
        //         //
        //     });
        // });
    </script>



</body>

</html>
