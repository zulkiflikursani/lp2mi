<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/z-head-css') ?>
    <style type="text/css">
    a {
        padding-left: 5px;
        padding-right: 5px;
        margin-left: 5px;
        margin-right: 5px;
    }

    .pagination li.active {
        background: deepskyblue;
        color: white;
    }

    .pagination li.active a {
        color: white;
        text-decoration: none;
    }
    </style>

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
                        <div class="col-xl-9 col-lg-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Selamat Datang di Website Resmi LP2MI</h3>
                                    <h3>UNIVERSITAS FAJAR MAKASSAR</h3>
                                </div>
                            </div>
                            <div class="card bg-opacity-50 px-1 py-1 " style="background-color: #FFF400;">
                                <marquee width="100%" height="40" class="text-bold font-size-20"><span
                                        style='font-weight: bold;'> Breaking News
                                        :</span>
                                </marquee>
                            </div>


                            <div class="card">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                                            All Post
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#archive" role="tab">
                        Archive
                    </a>
                </li> -->
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-4">
                                    <div class="tab-pane active" id="all-post" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <div>

                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <div>
                                                                    <h5 class="mb-0">Blog List</h5>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- end row -->

                                                        <hr class="mb-4">


                                                        <?php
                                                        // $data_postingan = json_decode($data_postingan);
                                                        foreach ($data_postingan as $riana) {
                                                            $img = "assets/images/small/img-" . $riana['id'] . ".jpg";
                                                        ?>
                                                        <div>
                                                            <!-- title blog -->
                                                            <h5><a href="blogdetail?id=<?= $riana['id']; ?>"
                                                                    class="text-dark"><?= $riana['judul'] ?></a></h5>
                                                            <!-- tanggal posting -->
                                                            <p class="text-muted"><?= $riana['tgl_posting'] ?></p>

                                                            <!-- gambat-postingan -->
                                                            <div class="position-relative mb-3">
                                                                <img src="<?= $img ?>" alt="" class="img-thumbnail">
                                                            </div>

                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="#" class="text-muted">
                                                                        <i
                                                                            class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                                        Project
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="#" class="text-muted">
                                                                        <i
                                                                            class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                                        0 Comments
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!-- descripsi singkat postingan -->
                                                            <p><?= substr($riana['deskripsi'], 0, 200) . "..."   ?></p>

                                                            <!-- readmore for detail -->
                                                            <div>
                                                                <a href="<?= base_url() . "/blogdetail/" . $riana['id'] ?>"
                                                                    class="text-primary">Read more <i
                                                                        class="mdi mdi-arrow-right"></i></a>
                                                            </div>
                                                        </div>

                                                        <hr class="my-5">

                                                        <?php
                                                        }

                                                        ?>






                                                        <div class="text-center">
                                                            <ul
                                                                class="pagination justify-content-center pagination-rounded">
                                                                <?php if ($pager) : ?>
                                                                <div style='margin-top: 10px;'>
                                                                    <?= $pager->links() ?>
                                                                </div>
                                                                <?php endif ?>
                                                                <!-- <li class="page-item disabled">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">...</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">10</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                            </li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Achive -->
                                    <!-- <div class="tab-pane" id="archive" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8">
                                                    <h5>Archive</h5>

                                                    <div class="mt-5">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="me-2">
                                                                <h4>2020</h4>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <span
                                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-2">

                                                        <div class="list-group list-group-flush">
                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Beautiful
                                                                Day with Friends</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a
                                                                sketch</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Project
                                                                discussion with team</a>

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="me-2">
                                                                <h4>2019</h4>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <span
                                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-2">

                                                        <div class="list-group list-group-flush">
                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Coffee with
                                                                Friends</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Neque porro
                                                                quisquam est</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Quis autem
                                                                vel eum iure</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Cras mi eu
                                                                turpis</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a
                                                                sketch</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Project
                                                                discussion with team</a>

                                                        </div>
                                                    </div>

                                                    <div class="mt-5">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="me-2">
                                                                <h4>2018</h4>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <span
                                                                    class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-2">

                                                        <div class="list-group list-group-flush">
                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Beautiful
                                                                Day with Friends</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Drawing a
                                                                sketch</a>

                                                            <a href="blog-details" class="list-group-item text-muted"><i
                                                                    class="mdi mdi-circle-medium me-1"></i> Project
                                                                discussion with team</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="search-box">
                                        <p class="text-muted">Search</p>
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-light"
                                                placeholder="Search...">
                                            <i class="mdi mdi-magnify search-icon"></i>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <div>
                                        <p class="text-muted">Categories</p>

                                        <ul class="list-unstyled fw-medium">
                                            <?php
                                            if (isset($datakat)) {
                                                foreach ($datakat as $riana) {
                                            ?>
                                            <li><a href="#" class="text-muted py-2 d-block"><i
                                                        class="mdi mdi-chevron-right me-1"></i>
                                                    <?= $riana->categori ?><span
                                                        class="badge badge-soft-success rounded-pill ms-1 float-end font-size-12"><?= $riana->jumlah; ?></span></a>
                                            </li>

                                            <?php
                                                };
                                            }
                                            ?>
                                            <!-- <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Development <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">04</span></a></li>
                        <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Business</a></li>
                        <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Project</a></li>
                        <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> Travel<span class="badge badge-soft-success rounded-pill ms-1 float-end font-size-12">12</span></a></li> -->
                                        </ul>
                                    </div>

                                    <hr class="my-4">

                                    <div>
                                        <p class="text-muted">Archive</p>

                                        <ul class="list-unstyled fw-medium">
                                            <?php
                                            if (isset($datapertahun)) {
                                                foreach ($datapertahun as $riana) {
                                            ?>
                                            <li><a href="#" class="text-muted py-2 d-block"><i
                                                        class="mdi mdi-chevron-right me-1"></i> <?= $riana->tahun ?>
                                                    <span
                                                        class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12"><?= $riana->jumlah ?></span></a>
                                            </li>

                                            <?php
                                                }
                                            }
                                            ?>
                                            <!-- <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2020 <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">03</span></a></li>
                        <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2019 <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">06</span></a></li>
                        <li><a href="#" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2018 <span class="badge badge-soft-success rounded-pill float-end ms-1 font-size-12">05</span></a></li> -->
                                        </ul>
                                    </div>

                                    <hr class="my-4">

                                    <!-- Populer -->
                                    <!-- <div>
                                        <p class="text-muted mb-2">Popular Posts</p>

                                        <div class="list-group list-group-flush">

                                            <a href="#" class="list-group-item text-muted py-3 px-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/small/img-7.jpg" alt=""
                                                            class="avatar-md h-auto d-block rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 text-truncate">Beautiful Day with
                                                            Friends</h5>
                                                        <p class="mb-0 text-truncate">10 Apr, 2020</p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="list-group-item text-muted py-3 px-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/small/img-4.jpg" alt=""
                                                            class="avatar-md h-auto d-block rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 text-truncate">Drawing a sketch</h5>
                                                        <p class="mb-0 text-truncate">24 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#" class="list-group-item text-muted py-3 px-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/small/img-6.jpg" alt=""
                                                            class="avatar-md h-auto d-block rounded">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 text-truncate">Project discussion with
                                                            team</h5>
                                                        <p class="mb-0 text-truncate">11 Mar, 2020</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> -->

                                    <!-- <hr class="my-4"> -->

                                    <div>
                                        <p class="text-muted">Tags</p>

                                        <div class="d-flex flex-wrap gap-2 widget-tag">
                                            <div><a href="#" class="badge bg-light font-size-12">Design</a></div>
                                            <div><a href="#" class="badge bg-light font-size-12">Development</a></div>
                                            <div><a href="#" class="badge bg-light font-size-12">Business</a></div>
                                            <div><a href="#" class="badge bg-light font-size-12">Project</a></div>
                                            <div><a href="#" class="badge bg-light font-size-12">Travel</a></div>
                                            <div><a href="#" class="badge bg-light font-size-12">Lifestyle</a></div>
                                            <div><a href="#" class="badge bg-light font-size-12">Photography</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Transaction Modal -->

            <!-- end modal -->

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