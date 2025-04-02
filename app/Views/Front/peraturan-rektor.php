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
                                                    <div class="text">
                                                        <div class="mb-4 text-center">
                                                            <a href="#" class="badge bg-light font-size-12">
                                                                <i
                                                                    class="bx bx-purchase-tag-alt align-middle text-muted me-1 "></i>
                                                                Pertauran Rektor
                                                            </a>
                                                        </div>
                                                        <hr>

                                                        <div class="mb-4">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Nama Dokumen</th>
                                                                        <th>Download</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    if (isset($data_doc)) {
                                                                        $kat = '';
                                                                        $no = 0;

                                                                        foreach ($data_doc as $riana) {
                                                                            echo "<tr>
                                                                                <td>" . $riana['id'] . "</td>
                                                                                <td class='text-justify'>" . $riana['nama_doc'] . "</td>
                                                                                <td><a href='" . $riana['link_doc'] . "' target='_blank'>Download</a></td>
                                                                            </tr>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
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