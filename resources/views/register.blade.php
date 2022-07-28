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

                                <h4 class="page-title">Register </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->





                    <div class="row">
                        <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                            <div class="card">
                                <div class="card-body">
                                    <form action="javascript:void(0);" id="id_profile" enctype="multipart/form-data"
                                        method="post"
                                        oninput='confirm2.setCustomValidity(confirm2.value != confirm1.value ? "Passwords do not match." : "")'>
                                        {{-- oninput='confirm2.setCustomValidity(confirm2.value != confirm1.value ? "Passwords do not match." : "")' --}}
                                        {{-- <form id="id_profile" enctype="multipart/form-data" method="post"
                                        action="{{ route('register_add') }}"> --}}


                                        @csrf
                                        <!-- Equivalent to... -->
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label text-danger">Required</label>
                                            </div>

                                            <div class="row mb-3">

                                                <label class="col-md-2 col-form-label" for="userName"><span
                                                        class="text-danger">*</span>User name</label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="userName"
                                                        name="userName" value="" pattern="[A-Za-z0-9_]+" required
                                                        maxlength="12" minlength="4">
                                                    <span class="visible " id='valid_userName'></span>

                                                </div>
                                                <label class="col-md-4 col-form-label">min 4 max 12 characters<br>A-Z,
                                                    a-z,
                                                    0-9 and _ (underscore)</label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label" for="confirm1"> <span
                                                        class="text-danger">*</span>Password</label>
                                                <div class="col-md-5">
                                                    <div class="input-group" id="show_hide_password2">
                                                        <input type="password" id="confirm1" name="confirm1"
                                                            class="form-control" value="" required minlength="6">

                                                        <div class="input-group-addon">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-eye"></i>
                                                            </span>
                                                        </div>

                                                    </div>
                                                    <span class="visible " id='valid_confirm1'></span>

                                                </div>
                                                <label class="col-md-4 col-form-label">min 6 characters
                                                    <br>ต้องไม่เป็นตัวอักษรหรือตัวเลขเรียงกัน เช่น 123456, abcde
                                                </label>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label" for="confirm2"><span
                                                        class="text-danger">*</span>Re
                                                    Password</label>
                                                <div class="col-md-5">

                                                    <div class="input-group" id="show_hide_password2">
                                                        <input type="password" id="confirm2" name="confirm2"
                                                            class="form-control" value="" minlength="6">
                                                        <div class="input-group-addon">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-eye"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <span class="visible " id='valid_confirm2'></span>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label" for="first_name"> <span
                                                        class="text-danger">*</span>First
                                                    name</label>
                                                <div class="col-md-5">
                                                    <input type="text" id="first_name" name="first_name"
                                                        class="form-control" value="" required maxlength="60">
                                                    <span class="visible " id='valid_first_name'></span>
                                                </div>
                                                <label class="col-md-4 col-form-label">ความยาวไม่เกิน 60 ตัวอักษร

                                                </label>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-2 col-form-label" for="last_name"> Last
                                                    name</label>
                                                <div class="col-md-5">
                                                    <input type="text" id="last_name" name="last_name"
                                                        class="form-control" value="" maxlength="60">
                                                    <span class="visible " id='valid_last_name'></span>
                                                </div>
                                                <label class="col-md-4 col-form-label">ความยาวไม่เกิน 60 ตัวอักษร

                                                </label>
                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-md-5 offset-md-2">
                                                    <img id="img_show" name="img_show"
                                                        src="{{ asset('Hyper/assets/img/people.png') }}"
                                                        alt="Italian Trulli" width="180" height="180">
                                                    <br>
                                                    <div id="file_name"></div>
                                                    <div id="file_size"></div>
                                                    <input accept=".jpg, .jpeg, .png, .bmp" type='file'
                                                        id="image_file" name="image_file" onchange="loadFile(event)"
                                                        required style="display: none;visibility: none;" />
                                                    <span class="invisible " id='valid_img_show'>img_show</span>
                                                </div>

                                            </div>


                                            <div class="row mb-3">

                                                <div class="col-md-9 offset-md-2">
                                                    <button type="submit" class="btn btn-warning"
                                                        id="btn_Submit">Register</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->
                <!-- Success Alert Modal -->
                <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content modal-filled bg-success">
                            <div class="modal-body p-4">
                                <div class="text-center">
                                    <i class="dripicons-checkmark h1"></i>
                                    <h4 class="mt-2">Save</h4>
                                    <p class="mt-3">Information : Saved</p>
                                    <button type="button" class="btn btn-light my-2"
                                        data-bs-dismiss="modal">Continue</button>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Danger Alert Modal -->
                <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content modal-filled bg-danger">
                            <div class="modal-body p-4">
                                <div class="text-center">
                                    <i class="dripicons-wrong h1"></i>
                                    <h4 class="mt-2">Save</h4>
                                    <p class="mt-3">Can't save profile</p>
                                    <button type="button" class="btn btn-light my-2"
                                        data-bs-dismiss="modal">Continue</button>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Warning Alert Modal -->
                <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-body p-4">
                                <div class="text-center">
                                    <i class="dripicons-warning h1 text-warning"></i>
                                    <h4 class="mt-2">Warning</h4>
                                    <p class="mt-3">User is duplicate</p>
                                    <button type="button" class="btn btn-warning my-2"
                                        data-bs-dismiss="modal">Continue</button>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
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


    {{-- @section('script') --}}
    <script type="text/javascript">
        $("#show_hide_password i").on('click', function(event) {
            eye_off('show_hide_password');
        });

        $("#show_hide_password2 i").on('click', function(event) {
            event.preventDefault();
            eye_off('show_hide_password2');

        });

        function eye_off(key) {
            if ($('#' + key + ' input').attr("type") === "password") {
                $('#' + key + ' input').attr('type', 'text');
                $('#' + key + '  i').removeClass("mdi mdi-eye-off");
                $('#' + key + '  i').addClass("mdi mdi-eye");
            } else {
                $('#' + key + '  input').attr('type', 'password');
                $('#' + key + '  i').removeClass("mdi mdi-eye");
                $('#' + key + '  i').addClass("mdi mdi-eye-off");
            }
        }

        function validate(tag1, tag2, reg, patt, warning) {
            try {
                let msg = tag1[0].value;
                var matches = reg.test(msg);
                console.log("--------------------------------");

                console.log(tag1[0].name);
                console.log("matches >> " + matches);
                let pattern = patt;
                let result = false;
                if (msg.length <= 10 && pattern.length >= 6) {
                    result = pattern.match(msg).length > 0 ? true : false;
                } else {
                    result = false;
                }

                console.log("result >> " + result);

                if (matches == true && result == true) {
                    tag2.html(warning);
                    tag2.attr("class", "visible text-warning");
                    return false;
                } else {
                    tag2.attr("class", "invisible");
                    return true;
                }
            } catch {
                return true;
            }
        }
        $('#btn_Submit').on('click', function(e) {
            // let a_1 = validate($('#confirm1'), $('#valid_confirm1'), /[a-zA-Z0-9]+/i, '0123456789',
            //     'Password ไม่ถูกต้อง');
            // let a_2 = validate($('#confirm2'), $('#valid_confirm2'), /[a-zA-Z0-9]+/i, '0123456789',
            //     'Password ไม่ถูกต้อง');
            // let a_3 = validate($('#userName'), $('#valid_userName'), /\w+/i, '', 'User Name ไม่ถูกต้อง');
            // let a_4 = validate($('#first_name'), $('#valid_first_name'), /[a-zA-Z]+/i, '', 'First Name ไม่ถูกต้อง');
            // let a_5 = validate($('#last_name'), $('#valid_last_name'), /[a-zA-Z]+/i, '', 'Last Name ไม่ถูกต้อง');
            // let a_6 = true;

            try {
                if ($("#file_size")[0].textContent.length == 0) {
                    $('#valid_img_show').html('Plase Select Image');
                    $("#valid_img_show").attr("class", "visible text-warning");
                    a_6 = false;
                } else {
                    $("#valid_img_show").attr("class", "invisible");
                    a_6 = true;
                }
            } catch (err) {
                $("#valid_img_show").attr("class", "invisible");
                a_6 = true;
            }
        });

        $('#id_profile').submit(
            function(e) {

                let a_1 = validate($('#confirm1'), $('#valid_confirm1'), /[a-zA-Z0-9]+/i, '123456789',
                    'Password ไม่ถูกต้อง');
                let a_2 = validate($('#confirm2'), $('#valid_confirm2'), /[a-zA-Z0-9]+/i, '123456789',
                    'Password ไม่ถูกต้อง');
                let a_3 = validate($('#userName'), $('#valid_userName'), /\w+/i, '', 'User Name ไม่ถูกต้อง');
                let a_4 = validate($('#first_name'), $('#valid_first_name'), /\w+$/i, '', 'First Name ไม่ถูกต้อง');
                let a_5 = validate($('#last_name'), $('#valid_last_name'), /\w+$/i, '', 'Last Name ไม่ถูกต้อง');
                let a_6 = true;

                try {
                    if ($("#file_size")[0].textContent.length == 0) {
                        $('#valid_img_show').html('Plase Select Image');
                        $("#valid_img_show").attr("class", "visible text-warning");
                        a_6 = false;
                    } else {
                        $("#valid_img_show").attr("class", "invisible");
                        a_6 = true;
                    }
                } catch (err) {
                    $("#valid_img_show").attr("class", "invisible");
                    a_6 = true;
                }

                if (a_1 && a_2 && a_3 && a_4 && a_5 && a_6) {
                    $.ajax({
                        url: '{{ route('register_add') }}',
                        type: 'POST',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            if (result.status == 200) {
                                $("#success-alert-modal").modal("toggle");

                            } else {
                                $("#danger-alert-modal").modal("toggle");
                            }
                        }
                    });
                }


                e.preventDefault();
            }
        );


        $("#userName").keyup(function(event) {
            event.preventDefault();
            let userName = $("#userName").val();
            console.log(userName);

            $.ajax({
                type: "POST",
                url: "{{ route('register_checkName') }}",
                async: true,
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    userName: userName,
                },
                success: function(res) {
                    console.log(res);
                    console.log(res.length);

                    if (res.length > 0) {
                        //Alrady Have
                        console.log("Duplicate");

                        $("#warning-alert-modal").modal("toggle");
                        // $("#userName")[0].value = "";
                        // $('#btn_Submit').prop('disabled', true);

                        // $("#userDuplicate").removeClass("invisible");
                        // $("#userDuplicate").addClass("visible");

                    } else if (res.length == 0) {
                        //Not Have
                        console.log("Not Duplicate");
                        // $('#btn_Submit').prop('disabled', false);
                        // $("#userDuplicate").removeClass("visible");
                        // $("#userDuplicate").addClass("invisible");
                    }
                },
                //
            });
        });

        $("#img_show").click(function(e) {
            //imgInp
            console.log("img_show");
            // var fd = new FormData();
            // var files = $('#file')[0].files;
            $('#image_file').trigger('click');
        });



        var loadFile = function(event) {
            var image = document.getElementById('img_show');
            console.log(image);
            console.log(event.target.files[0]);

            if (event.target.files[0].size / 1024 <= 1024 * 5) {
                image.src = URL.createObjectURL(event.target.files[0]);
                $("#file_size").html("<b>Size</b> : " + numeral(event.target.files[0].size / 1024 / 1024).format(
                        '0,0.00') +
                    " MB");
                $("#file_name").html("<b>File Name</b> : " + event.target.files[0].name);
            } else {

            }


        };
    </script>
    {{-- @endsection(); --}}

</body>

</html>
