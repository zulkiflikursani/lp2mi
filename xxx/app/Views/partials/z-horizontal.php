<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>/assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>/assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url() ?>/assets/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url() ?>/assets/images/logo-light.png" class='bg-light' alt="" height="49">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?= lang('Files.Search') ?>...">
                    <span class="bx bx-search-alt"></span>
                </div>

            </form>


            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                    aria-haspopup="false" aria-expanded="false">
                    <!-- <span key="t-megamenu"><?= lang('Files.Mega Menu') ?></span> -->
                    <!-- <i class="mdi mdi-chevron-down"></i>  -->
                </button>

            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ssearch ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

            <div class="dropdown d-inline-block">

                <div class="dropdown-menu dropdown-menu-end">


                </div>
            </div>

            <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-customize"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <div class="px-lg-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#">
                                    <img src="assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div> -->

            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> <?= lang('Files.Notifications') ?> </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small" key="t-view-all"> <?= lang('Files.View All') ?> </a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-3.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1" key="t-shipped">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-4.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> 
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                     
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                    <a class="dropdown-item" href="auth-lock-screen"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="auth-login"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                </div>
            </div> -->

            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div> -->

        </div>
    </div>
</header>

<div class="topnav" style="background-color:#FFF400">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="<?= base_url() ?>" id="topnav-dashboard"
                            role="button">
                            <i class="bx bx-home-circle me-2"></i><span
                                key="t-dashboards"><?= lang('Files.Dashboards') ?></span>
                            <div class="arrow-down"></div>
                        </a>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="download-file" id="topnav-uielement"
                            role="button">
                            <i class="bx bx-tone me-2"></i>
                            <span key="t-ui-elements"> <?= lang('Download') ?></span>
                            <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl"
                            aria-labelledby="topnav-uielement">
                            <div class="row">
                                <div class="col-lg-6 text-wrap">
                                    <div>
                                        <a class='fw-bold'>STANDAR PROSEDUR OPERASIONAL</a>
                                        <a href="https://drive.google.com/file/d/1DV4GG_6Y4oZW8MtR4PwG798HiD1NfNE_/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-alerts"><?= lang('SPO SDM DAN BIRO UMUM') ?></a>
                                        <a href="https://drive.google.com/file/d/1d6LtZXLda_fOzrZBiLzj9ZyJZ6uUngYT/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-buttons"><?= lang('SPO SARANA DAN PRASARANA') ?></a>
                                        <a href="https://drive.google.com/file/d/1VIQXbFELUWPRm7c7qtmshubOjWEZdago/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-cards"><?= lang('SPO PERPUSTAKAAN') ?></a>
                                        <a href="https://drive.google.com/file/d/12GPvBv7mtJY0AM9aT3viSqD0_V7rTKzP/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-carousel"><?= lang('SPO MAHASISWA') ?></a>
                                        <a href="https://drive.google.com/file/d/1PzgnCtvQmb9hSsvMtYL3peKjXCBF4WPs/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-dropdowns"><?= lang('SPO LABORATORIUM') ?></a>
                                        <a href="https://drive.google.com/file/d/1RTvLDSIHqftXUZq96EIWB_UsTKQr_TK-/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO KEUANGAN') ?></a>
                                        <a href="https://drive.google.com/file/d/1isOUlmxVnRt0hrkTsPzZcAPQvDYGjFmJ/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO MERDEKA BELAJAR DAN KAMPUS MERDEKA') ?></a>
                                        <a href="https://drive.google.com/file/d/1XaFr7nhhlCNIuhYY25Ax9JBBmGFBaYs4/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO PENETAPAN DOSEN PENGAMPUH') ?></a>
                                        <a href="https://drive.google.com/file/d/1141QGmGiiqIuIOBKvs3MJDaZpoP8y9fD/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO PELAKSANAAN MID TEST DAN FINAL TEST') ?></a>
                                        <a href="https://drive.google.com/file/d/1nFwqeePUef2P36_NUQdOKQZ-OifG_is3/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO PROGRAM SEMESETER PENDEK') ?></a>
                                        <a href="https://drive.google.com/file/d/1LL-WktblsSd1BoSHE96O-F0GKTBCNKEs/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO PENTAPAN BIMBINGAN KP DAN KKLP') ?></a>
                                        <a href="https://drive.google.com/file/d/1b3-BcIj0NPpwmDNKuTTKIfKzyaR1TIu1/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO PENTAPAN BIMBINGAN TUGAS AKHIR') ?></a>
                                        <a href="https://drive.google.com/file/d/1N2w_xTeP_isYdVaKFS2NgKwNjsp5yYs0/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-grid"><?= lang('SPO PROGRAM MAGANG') ?></a>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a class='fw-bold'>STANDAR SPMI</a>
                                        <a href="https://drive.google.com/file/d/15kF8xvZJuVs39ygAjG7DvS6uIOt-nXJk/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-modals"><?= lang('Standar Pendidikan') ?></a>
                                        <a href="https://drive.google.com/file/d/1M_s4ur7DA3bthSWpONIfM4N7DXgU3CbI/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-offcanvas"><?= lang('Standar Penelitian') ?></a>
                                        <a href="https://drive.google.com/file/d/1cScemA5H53z3tR-NK72l24ZfkrZCsElp/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-range-slider"><?= lang('Standar PKM') ?></a>
                                        <a href="https://drive.google.com/file/d/1MSpzHXLfZ-RFbyI5RCe-fODOqcgKzWKi/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-progress-bars"><?= lang('Standar SDM') ?></a>
                                        <a href="https://drive.google.com/file/d/1Y0uk54_-gAtPkYBpDYcII-LAIn53SnUX/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-session-timeout"><?= lang('Standar Lahan Sarana dan Prasarana') ?></a>
                                        <a href="https://drive.google.com/file/d/1nc4m4efcTxVaAqUBlbGlACYClMRaYz92/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-Placeholders"><?= lang('Standar Keuangan') ?></a>
                                        <a href="https://drive.google.com/file/d/1lAMPwLqzP5e_W-gdSiz7kX8me8O9gfnV/view?usp=sharing"
                                            target="_blank" class="dropdown-item"
                                            key="t-sweet-alert"><?= lang('Standar Administrasi dan Pengelolaan') ?></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                            <i class="bx bx-customize me-2"></i><span key="t-apps"><?= lang('Audit') ?></span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="formulir-audit" class="dropdown-item"
                                key="t-chat"><?= lang('Formulir Audit') ?></a>
                            <a href="audit" class="dropdown-item" key="t-chat"><?= lang('Audit') ?></a>
                            <a href="monitoring-dan-evaluasi" class="dropdown-item"
                                key="t-chat"><?= lang('Monitoring dan Evaluasi') ?></a>

                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                            <i class="bx bx-customize me-2"></i><span key="t-apps"><?= lang('Tentang Kami') ?></span>
                            <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                            <a href="profil-pejabat" class="dropdown-item"
                                key="t-chat"><?= lang('Profil Pejabat') ?></a>
                            <a href="profil-tendik" class="dropdown-item"
                                key="t-chat"><?= lang('Profil Tenaga Kependidikan') ?></a>
                            <a href="sejarah-lp2mi" class="dropdown-item"
                                key="t-chat"><?= lang('Sejarah Singkat LP2MI') ?></a>
                            <a href="tugas-pokok" class="dropdown-item"
                                key="t-chat"><?= lang('Tugas Pokok dan Fungsi') ?></a>
                            <a href="struktur-organisasi" class="dropdown-item"
                                key="t-chat"><?= lang('Struktur Organisasi') ?></a>
                            <a href="visi-dan-misi" class="dropdown-item" key="t-chat"><?= lang('Visi dan Misi') ?></a>
                            <a href="kebijakan-mutu" class="dropdown-item"
                                key="t-chat"><?= lang('Kebijakan Mutu') ?></a>
                        </div>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button"                        >
                            <i class="bx bx-collection me-2"></i><span key="t-extra-pages"><?= lang('Files.Extra Pages') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoice"
                                    role="button">
                                    <span key="t-invoices"><?= lang('Files.Invoices') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-invoice">
                                    <a href="invoices-list" class="dropdown-item" key="t-invoice-list"><?= lang('Files.Invoice List') ?></a>
                                    <a href="invoices-detail" class="dropdown-item" key="t-invoice-detail"><?= lang('Files.Invoice Detail') ?></a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button">
                                    <span key="t-authentication"><?= lang('Files.Authentication') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="auth-login" class="dropdown-item" key="t-login"><?= lang('Files.Login') ?></a>
                                    <a href="auth-login-2" class="dropdown-item" key="t-login-2"><?= lang('Files.Login') ?> 2</a>
                                    <a href="auth-register" class="dropdown-item" key="t-register"><?= lang('Files.Register') ?></a>
                                    <a href="auth-register-2" class="dropdown-item" key="t-register-2"><?= lang('Files.Register') ?> 2</a>
                                    <a href="auth-recoverpw" class="dropdown-item" key="t-recover-password"><?= lang('Files.Recover Password') ?></a>
                                    <a href="auth-recoverpw-2" class="dropdown-item" key="t-recover-password-2"><?= lang('Files.Recover Password') ?> 2</a>
                                    <a href="auth-lock-screen" class="dropdown-item" key="t-lock-screen"><?= lang('Files.Lock Screen') ?></a>
                                    <a href="auth-lock-screen-2" class="dropdown-item" key="t-lock-screen-2"><?= lang('Files.Lock Screen') ?> 2</a>
                                    <a href="auth-confirm-mail" class="dropdown-item" key="t-confirm-mail"><?= lang('Files.Confirm Mail') ?></a>
                                    <a href="auth-confirm-mail-2" class="dropdown-item" key="t-confirm-mail-2"><?= lang('Files.Confirm Mail') ?> 2</a>
                                    <a href="auth-email-verification" class="dropdown-item" key="t-email-verification"><?= lang('Files.Email Verification') ?></a>
                                    <a href="auth-email-verification-2" class="dropdown-item" key="t-email-verification-2"><?= lang('Files.Email Verification') ?> 2</a>
                                    <a href="auth-two-step-verification" class="dropdown-item" key="t-two-step-verification"><?= lang('Files.Two Step Verification') ?></a>
                                    <a href="auth-two-step-verification-2" class="dropdown-item" key="t-two-step-verification-2"><?= lang('Files.Two Step Verification') ?> 2</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button">
                                    <span key="t-utility"><?= lang('Files.Utility') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="pages-starter" class="dropdown-item" key="t-starter-page"><?= lang('Files.Starter Page') ?></a>
                                    <a href="pages-maintenance" class="dropdown-item" key="t-maintenance"><?= lang('Files.Maintenance') ?></a>
                                    <a href="pages-comingsoon" class="dropdown-item" key="t-coming-soon"><?= lang('Files.Coming Soon') ?></a>
                                    <a href="pages-timeline" class="dropdown-item" key="t-timeline"><?= lang('Files.Timeline') ?></a>
                                    <a href="pages-faqs" class="dropdown-item" key="t-faqs"><?= lang('Files.FAQs') ?></a>
                                    <a href="pages-pricing" class="dropdown-item" key="t-pricing"><?= lang('Files.Pricing') ?></a>
                                    <a href="pages-404" class="dropdown-item" key="t-error-404"><?= lang('Files.Error') ?> 404</a>
                                    <a href="pages-500" class="dropdown-item" key="t-error-500"><?= lang('Files.Error') ?> 500</a>
                                    <a href="layouts-light-sidebar" class="dropdown-item" key="t-light-sidebar"><?= lang('Files.Light Sidebar') ?></a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                        >
                            <i class="bx bx-layout me-2"></i><span key="t-layouts"><?= lang('Files.Layouts') ?></span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti"
                                    role="button">
                                    <span key="t-vertical"><?= lang('Files.Vertical') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                    <a href="layouts-compact-sidebar" class="dropdown-item" key="t-compact-sidebar"><?= lang('Files.Compact Sidebar') ?></a>
                                    <a href="layouts-icon-sidebar" class="dropdown-item" key="t-icon-sidebar"><?= lang('Files.Icon Sidebar') ?></a>
                                    <a href="layouts-boxed" class="dropdown-item" key="t-boxed-width"><?= lang('Files.Boxed Width') ?></a>
                                    <a href="layouts-preloader" class="dropdown-item" key="t-preloader"><?= lang('Files.Preloader') ?></a>
                                    <a href="layouts-colored-sidebar" class="dropdown-item" key="t-colored-sidebar"><?= lang('Files.Colored Sidebar') ?></a>
                                    <a href="layouts-scrollable" class="dropdown-item" key="t-scrollable"><?= lang('Files.Scrollable') ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori"
                                    role="button">
                                    <span key="t-horizontal"><?= lang('Files.Horizontal') ?></span> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal" class="dropdown-item" key="t-horizontal"><?= lang('Files.Horizontal') ?></a>
                                    <a href="layouts-hori-topbar-light" class="dropdown-item" key="t-topbar-light"><?= lang('Files.Topbar Light') ?></a>
                                    <a href="layouts-hori-boxed-width" class="dropdown-item" key="t-boxed-width"><?= lang('Files.Boxed Width') ?></a>
                                    <a href="layouts-hori-preloader" class="dropdown-item" key="t-preloader"><?= lang('Files.Preloader') ?></a>
                                    <a href="layouts-hori-colored-header" class="dropdown-item" key="t-colored-topbar"><?= lang('Files.Colored Header') ?></a>
                                    <a href="layouts-hori-scrollable" class="dropdown-item" key="t-scrollable"><?= lang('Files.Scrollable') ?></a>
                                </div>
                            </div>
                        </div>
                    </li> -->

                </ul>
            </div>
        </nav>
    </div>
</div>