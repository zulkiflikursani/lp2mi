<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">

    <?= $this->include('partials/head-css') ?>

</head>

<body class="auth-body-bg">

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">

                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">

                                                <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied clients</h4>

                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>

                                                                <div>
                                                                    <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                    <p class="font-size-14 mb-0">- Skote User</p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p>

                                                                <div>
                                                                    <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                    <p class="font-size-14 mb-0">- Skote User</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="/" class="d-block auth-logo">
                                        <img src="assets/images/logo-dark.png" alt="" height="18" class="auth-logo-dark">
                                        <img src="assets/images/logo-light.png" alt="" height="18" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto">
                                    <div class="text-center">

                                        <div class="avatar-md mx-auto">
                                            <div class="avatar-title rounded-circle bg-light">
                                                <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="p-2 mt-4">

                                            <h4>Verify your email</h4>
                                            <p class="mb-5">Please enter the 4 digit code sent to <span class="fw-semibold">example@abc.com</span></p>

                                            <form>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                            <input type="text" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="1" id="digit1-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                            <input type="text" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="2" id="digit2-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                            <input type="text" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="3" id="digit3-input">
                                                        </div>
                                                    </div>

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                            <input type="text" class="form-control form-control-lg text-center two-step" maxLength="1" data-value="4" id="digit4-input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="mt-4">
                                                <a href="/" class="btn btn-success w-md">Confirm</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© <script>
                                            document.write(new Date().getFullYear())
                                        </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <?= $this->include('partials/vendor-scripts') ?>

    <!-- owl.carousel js -->
    <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>

    <!-- auth-2-carousel init -->
    <script src="assets/js/pages/auth-2-carousel.init.js"></script>

    <!-- two-step-verification js -->
    <script src="assets/js/pages/two-step-verification.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>