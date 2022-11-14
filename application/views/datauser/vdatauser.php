<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kader</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">ePosyandu Rakam</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search forwidth: 13rem;"
                    aria-label="Search forwidth: 13rem;" aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Login</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Jenis Posyandu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="bayi.html">Balita</a>
                                <a class="nav-link" href="ibuHamil.html">Ibu Hamil</a>
                                <a class="nav-link" href="remaja.html">Remaja</a>
                                <a class="nav-link" href="ptm.html">PTM</a>
                                <a class="nav-link" href="lansia.html">Lansia</a>
                                <a class="nav-link" href="stunting.html">Stunting</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Laporan Posyandu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="l_bayi.html">Balita</a>
                                <a class="nav-link" href="l_ibuHamil.html">Ibu Hamil</a>
                                <a class="nav-link" href="l_remaja.html">Remaja</a>
                                <a class="nav-link" href="l_ptm.html">PTM</a>
                                <a class="nav-link" href="l_lansia.html">Lansia</a>
                                <a class="nav-link" href="l_stunting.html">Stunting</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="datauser.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Data User
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    ePosyandu Rakam
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <section id="about" class="about">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-12">
                                <main>
                                    <div class="container-fluid">
                                        <h1 class="mt-4">Pengguna</h1>
                                        <div class="card mb-4">
                                            <div class="card-header bg-light">
                                                <!-- Button to Open the Modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#myModal">
                                                    Tambah Pengguna
                                                </button>
                                            </div>
                                            <div class="card-body bg-light">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-light" id="dataTable"
                                                        width="100%" cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama</th>
                                                                <th>Username</th>
                                                                <th>Password</th>
                                                                <th>Hak Akses</th>
                                                                <th>Aksi</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <?= $no++ ?>
                                                                </td>
                                                                <td>
                                                                    <?= $nama; ?>
                                                                </td>
                                                                <td>
                                                                    <?= $username; ?>
                                                                </td>
                                                                <td>
                                                                    <?= $password; ?>
                                                                </td>
                                                                <td>
                                                                    <?= $level; ?>
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-warning"
                                                                        data-toggle="modal"
                                                                        data-target="#edit<?= $iduser; ?>">
                                                                        Edit
                                                                    </button>
                                                                    <input type="hidden" name="iduserhapus"
                                                                        value="<?= $iduser; ?>">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-toggle="modal"
                                                                        data-target="#delet<?= $iduser; ?>">
                                                                        Hapus
                                                                    </button>
                                                                </td>

                                                            </tr>
                                                            </tr>
                                                            <!-- The Modal Edit data barang -->
                                                            <div class="modal fade" id="edit<?= $iduser; ?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">

                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Edit Barang</h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal">&times;</button>
                                                                        </div>

                                                                        <!-- Modal body -->
                                                                        <form method="post">
                                                                            <div class="modal-body">
                                                                                <input type="text" class="form-control"
                                                                                    name="nama" value="<?= $nama; ?>">
                                                                                <br>
                                                                                <input type="text" class="form-control"
                                                                                    name="username"
                                                                                    value="<?= $username; ?>">
                                                                                <br>
                                                                                <input type="text" class="form-control"
                                                                                    name="password"
                                                                                    value="<?= $password; ?>">
                                                                                <br>
                                                                                <input type="text" class="form-control"
                                                                                    name="level" value="<?= $level; ?>">
                                                                                <br>
                                                                                <input type="hidden" name="iduser"
                                                                                    value="<?= $iduser;?>">
                                                                                <button type="submit"
                                                                                    class="btn btn-primary"
                                                                                    name="updateuser">Simpan</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- The Modal hapus data barang -->
                                                            <div class="modal fade" id="delet<?= $iduser; ?>">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">

                                                                        <!-- Modal Header -->
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Hapus Barang</h4>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal">&times;</button>
                                                                        </div>

                                                                        <!-- Modal body -->
                                                                        <form method="post">
                                                                            <div class="modal-body">

                                                                                <input type="hidden" name="iduser"
                                                                                    value="<?= $iduser; ?>">
                                                                                <br><br>

                                                                                <button type="submit"
                                                                                    class="btn btn-danger"
                                                                                    name="hapususer">Hapus</button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                            </div>
                </section>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>