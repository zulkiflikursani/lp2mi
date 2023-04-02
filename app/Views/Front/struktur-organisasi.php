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
                                                                Struktur Organisasi
                                                            </a>
                                                        </div>
                                                        <hr>

                                                        <div class="mb-4">
                                                            <div class="my-5">
                                                                <img src="../assets/images/struktur-organisasi.png"
                                                                    alt="" class="img-thumbnail mx-auto d-block">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <div class="text-center">
                                                        <div class="mb-4">
                                                            <a href="#" class="badge bg-light font-size-12">
                                                                <i
                                                                    class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                PENJAMINAN MUTU
                                                            </a>
                                                        </div>
                                                        <hr>


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