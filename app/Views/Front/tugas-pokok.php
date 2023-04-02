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
                                                    <div class="text-justify">
                                                        <div class="mb-4 text-center">
                                                            <a href="#" class="badge text-center bg-light font-size-12">
                                                                <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                Tugas Pokok Lembaga Pengendalian dan Penjaminan Mutu
                                                                Internal Unifa
                                                            </a>
                                                        </div>
                                                        <hr>

                                                        <div class="mb-4">
                                                            <div class="mb-4 ">
                                                                <h3 class="">Tugas Pokok
                                                                    (LP2MI) </h3>

                                                                <p>Tugas pokok LP2MI diatur berdasarkan Peraturan Rektor
                                                                    Nomor: 002/PRUNIFA/I/2015 tentang uraian tugas dan
                                                                    tanggung jawab LP2MI sebagai berikut: </p>

                                                                <div class="">
                                                                    <p class="text-justify">1) Melakukan pengkajian dan
                                                                        pengembangan inovasi
                                                                        dalam penyelenggaraan tridharma Perguruan Tinggi
                                                                        (PT) untuk peningkatan mutu.
                                                                        </br>2) Mengembangkan sistem penjaminan mutu
                                                                        penyelenggaraan tridarma PT.
                                                                        </br>3) Mengembangkan standar mutu
                                                                        penyelenggaraan
                                                                        tridharma PT.
                                                                        </br>4) Melakukan pemantauan dan evaluasi
                                                                        penyelenggaraan
                                                                        tridharma PT.
                                                                        </br> 5) Mengembangkan instrument evaluasi
                                                                        internal
                                                                        penjaminan mutu.
                                                                        </br> 6) Mengkoordinasikan pelaksanaan
                                                                        penjaminan
                                                                        mutu di
                                                                        seluruh unit.
                                                                        </br>7) Melaporkan hasil penyelenggaraan
                                                                        penjaminan
                                                                        mutu
                                                                        kepada pimpinan Universitas secara berkala.
                                                                        </br>8) Mengembangkan jaringan kerjasama di
                                                                        bidang
                                                                        penjaminan mutu dengan perguruan tinggi di dalam
                                                                        dan
                                                                        luar negeri.
                                                                        </br>9) Menyajikan informasi yang terkait dengan
                                                                        akreditasi, sertifikasi dosen, dan lainnya yang
                                                                        terkait dengan penjaminan mutu.
                                                                        </br>10) Melakukan pendampingan terhadap tim
                                                                        akreditasi
                                                                        Institusi, Fakultas dan Program Studi.
                                                                        </br>11) Memberikan masukan dan rekomendasi
                                                                        kepada
                                                                        unit-unit lain terkait mutu.
                                                                        </br>12) Mengkomunikasikan seluruh
                                                                        langkah/kegiatan
                                                                        penjaminan mutu kepada pimpinan dan unit-unit
                                                                        lain
                                                                        terkait mutu.
                                                                        </br>13) Menyusun pembagian tugas bawahan.
                                                                        </br>14) Menilai, membina dan mengarahkan
                                                                        bawahan
                                                                        15.
                                                                        Melakukan tugas lain yang diberikan oleh atasan.
                                                                    </p>

                                                                    <h3>Gugus Jaminan Mutu Program Studi (GJMP) </h3>
                                                                    <p>LP2MI berkoordinasi dengan UJMF untuk memastikan
                                                                        bahwa sistem penjaminan mutu dan implementasinya
                                                                        ditingkat Fakultas berjalan dengan baik. UJMF
                                                                        berkoordinasi dengan Gugus Jaminan Mutu pada
                                                                        tingkat Program Studi (GJMP) untuk memastikan
                                                                        bahwa penerapan sistem penjaminan mutu serta
                                                                        evaluasi diri di Program Studi berjalan dengan
                                                                        baik. Penjaminan dan pengembangan mutu yang
                                                                        berdasarkan dokumendokumen mutu yang dimiliki,
                                                                        masing masing diemban oleh Unit Jaminan Mutu
                                                                        Fakultas dan Gugus Jaminan Mutu Prodi.
                                                                        Implementasi sistem penjaminan mutu, minimal
                                                                        mencakup: </p>
                                                                    <p>
                                                                        1) Keberadaan unsur pelaksana penjaminan mutu
                                                                        internal yang berlaku pada UPPS yang didukung
                                                                        dokumen formal pembentukannya.</br>
                                                                        2) Keterlaksanaan penjaminan mutu program studi
                                                                        yang sesuai dengan kebijakan, manual, standar,
                                                                        dan dokumen penjaminan mutu lainnya. </br>
                                                                        3) Ketersediaan bukti sahih efektivitas
                                                                        pelaksanaan penjaminan mutu sesuai dengan siklus
                                                                        penetapan, pelaksanaan, evaluasi, pengendalian,
                                                                        dan perbaikan berkelanjutan (PPEPP).</br>

                                                                    </p>
                                                                </div>
                                                            </div>

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