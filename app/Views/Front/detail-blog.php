<!doctype html>
<html lang="en">
<?php
if (isset($data_postingan)) {
    foreach ($data_postingan as $riana) {
        $judul = $riana->judul;
        $deskripsi = $riana->deskripsi;
        $tgl_posting = $riana->tgl_posting;
        $penulis = $riana->penulis;
    }
}
?>

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/z-head-css') ?>


</head>

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include("partials/z-horizontal") ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?= $page_title ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="pt-3">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8">
                                                <div>
                                                    <div class="text-center">
                                                        <div class="mb-4">
                                                            <a href="#" class="badge bg-light font-size-12">
                                                                <i
                                                                    class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                SPMI
                                                            </a>
                                                        </div>
                                                        <h4><?= $judul ?></h4>
                                                        <p class="text-muted mb-4"><i class="mdi mdi-calendar me-1"></i>
                                                            <?= $tgl_posting ?></p>
                                                    </div>

                                                    <hr>
                                                    <div class="text-center">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div>
                                                                    <p class="text-muted mb-2">Categories</p>
                                                                    <h5 class="font-size-15">Project</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="mt-4 mt-sm-0">
                                                                    <p class="text-muted mb-2">Date</p>
                                                                    <h5 class="font-size-15"> <?= $tgl_posting ?></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="mt-4 mt-sm-0">
                                                                    <p class="text-muted mb-2">Post by</p>
                                                                    <h5 class="font-size-15"> <?= $penulis ?></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                    <div class="my-5">
                                                        <img src="../assets/images/small/img-2.jpg" alt=""
                                                            class="img-thumbnail mx-auto d-block">
                                                    </div>

                                                    <hr>

                                                    <div class="mt-4">
                                                        <div class="text-muted font-size-14 d-flex">
                                                            <?= $deskripsi ?>

                                                        </div>

                                                        <hr>

                                                        <div class="mt-5">
                                                            <h5 class="font-size-15"><i
                                                                    class="bx bx-message-dots text-muted align-middle me-1"></i>
                                                                Comments :</h5>


                                                        </div>

                                                        <div class="mt-4">
                                                            <h5 class="font-size-16 mb-3">Leave a Message</h5>

                                                            <form>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="commentname-input"
                                                                                class="form-label">Name</label>
                                                                            <input type="text" class="form-control"
                                                                                id="commentname-input"
                                                                                placeholder="Enter name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label for="commentemail-input"
                                                                                class="form-label">Email</label>
                                                                            <input type="email" class="form-control"
                                                                                id="commentemail-input"
                                                                                placeholder="Enter email">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="commentmessage-input"
                                                                        class="form-label">Message</label>
                                                                    <textarea class="form-control"
                                                                        id="commentmessage-input"
                                                                        placeholder="Your message..."
                                                                        rows="3"></textarea>
                                                                </div>

                                                                <div class="text-end">
                                                                    <button type="submit"
                                                                        class="btn btn-success w-sm">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?= $this->include('partials/z-footer') ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?= $this->include('partials/right-sidebar') ?>

    <?= $this->include('partials/vendor-scripts') ?>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- dashboard init -->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>