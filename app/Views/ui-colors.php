<!doctype html>
<html lang="en">

    <head>
        
        <?= $title_meta ?>

        <?= $this->include('partials/head-css') ?>

    </head>

    <?= $this->include('partials/body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?= $this->include('partials/menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?= $page_title ?>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            <div class="color-box bg-primary p-4">
                                                <h5 class="my-2 text-white">#556ee6</h5>
                                            </div>
                                            <div class="color-box bg-primary bg-gradient p-4">
                                                <h5 class="my-2 text-white">bg-gradient</h5>
                                            </div>
                                            <div class="color-box bg-primary bg-soft p-4">
                                                <h5 class="my-2 text-primary">bg-soft</h5>
                                            </div>
                                        </div>
                                        
                                        <h5 class="mb-0 mt-3 text-primary">Primary</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            <div class="color-box bg-success p-4">
                                                <h5 class="my-2 text-white">#34c38f</h5>
                                            </div>
                                            <div class="color-box bg-success bg-gradient p-4">
                                                <h5 class="my-2 text-white">bg-gradient</h5>
                                            </div>
                                            <div class="color-box bg-success bg-soft p-4">
                                                <h5 class="my-2 text-success">bg-soft</h5>
                                            </div>
                                        </div>
                                        <h5 class="mb-0 mt-3 text-success">Success</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            <div class="color-box bg-info p-4">
                                                <h5 class="my-2 text-white">#50a5f1</h5>
                                            </div>
                                            <div class="color-box bg-info bg-gradient p-4">
                                                <h5 class="my-2 text-white">bg-gradient</h5>
                                            </div>
                                            <div class="color-box bg-info bg-soft p-4">
                                                <h5 class="my-2 text-info">bg-soft</h5>
                                            </div>
                                        </div>
                                        <h5 class="mb-0 mt-3 text-info">Info</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            <div class="color-box bg-warning p-4">
                                                <h5 class="my-2 text-white">#f1b44c</h5>
                                            </div>
                                            <div class="color-box bg-warning bg-gradient p-4">
                                                <h5 class="my-2 text-white">bg-gradient</h5>
                                            </div>
                                            <div class="color-box bg-warning bg-soft p-4">
                                                <h5 class="my-2 text-warning">bg-soft</h5>
                                            </div>
                                        </div>
                                        <h5 class="mb-0 mt-3 text-warning">Warning</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            <div class="color-box bg-danger p-4">
                                                <h5 class="my-2 text-white">#f46a6a</h5>
                                            </div>
                                            <div class="color-box bg-danger bg-gradient p-4">
                                                <h5 class="my-2 text-white">bg-gradient</h5>
                                            </div>
                                            <div class="color-box bg-danger bg-soft p-4">
                                                <h5 class="my-2 text-danger">bg-soft</h5>
                                            </div>
                                        </div>
                                        <h5 class="mb-0 mt-3 text-danger">Danger</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            <div class="color-box bg-dark p-4">
                                                <h5 class="my-2 text-light">#343a40</h5>
                                            </div>
                                            <div class="color-box bg-dark bg-gradient p-4">
                                                <h5 class="my-2 text-light">bg-gradient</h5>
                                            </div>
                                            <div class="color-box bg-dark bg-soft p-4">
                                                <h5 class="my-2 text-dark">bg-soft</h5>
                                            </div>
                                        </div>
                                        <h5 class="mb-0 mt-3 text-dark">Dark</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            <div class="color-box bg-secondary p-4">
                                                <h5 class="my-2 text-light">#74788d</h5>
                                            </div>
                                            <div class="color-box bg-secondary bg-gradient p-4">
                                                <h5 class="my-2 text-light">bg-gradient</h5>
                                            </div>
                                            <div class="color-box bg-secondary bg-soft p-4">
                                                <h5 class="my-2 text-secondary">bg-soft</h5>
                                            </div>
                                        </div>
                                        <h5 class="mb-0 mt-3 text-muted">Secondary</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="rounded overflow-hidden">
                                            
                                            <div class="bg-primary opacity-75 p-4">
                                                <h5 class="my-2 text-white">opacity-75</h5>
                                            </div>
                                            <div class="bg-primary opacity-50 p-4">
                                                <h5 class="my-2 text-white">opacity-50</h5>
                                            </div>
                                            <div class="bg-primary opacity-25 p-4">
                                                <h5 class="my-2 text-white">opacity-25</h5>
                                            </div>
                                        </div>
                                        <h5 class="mb-0 mt-3 text-muted">Opacity</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?= $this->include('partials/right-sidebar') ?>

        <?= $this->include('partials/vendor-scripts') ?>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
