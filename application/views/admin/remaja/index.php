<main id="main" class="main">
    <!-- Table -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Laporan Posyandu Balita</h2>
                    <br>

                    <?php if (!empty($this->session->flashdata('pesan'))) : ?>
                        <div class="alert <?= $this->session->flashdata('alert'); ?>" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="container-fluid">
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <a href="<?= base_url('Admin_Remaja/tambah'); ?>" class="btn btn-primary me-2 ms-2">Tambah</a>
                                <a href="" class="btn btn-primary">print</a>
                            </div>

                            <div class="card-body bg-light">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-light" id="dataTable" width="100%" cellspacing="0">

                                        <div class="table-responsive">
                                            <table class="table table-light table-striped ">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Tempat Tanggal Lahir</th>
                                                        <th>NIK</th>
                                                        <th>Alamat</th>
                                                        <th>No Kartu BPJS</th>
                                                        <th>Berat Badan</th>
                                                        <th>Tinggi Badan</th>
                                                        <th>L2P</th>
                                                        <th>LILA</th>
                                                        <th>Jenis Penyakit</th>
                                                        <th>Tekanan Darah</th>
                                                        <th>Keterangan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($remaja as $r) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $r->nama; ?></td>
                                                            <td><?= $r->jk; ?></td>
                                                            <td><?= $r->tempat_lahir; ?> , <?= date('d F Y', strtotime($r->ttl)); ?></td>
                                                            <td><?= $r->nik; ?></td>
                                                            <td><?= $r->alamat; ?></td>
                                                            <td><?= $r->bpjs; ?></td>
                                                            <td><?= $r->bb; ?></td>
                                                            <td><?= $r->tb; ?></td>
                                                            <td><?= $r->l2p; ?></td>
                                                            <td><?= $r->lila; ?></td>
                                                            <td><?= $r->penyakit; ?></td>
                                                            <td><?= $r->darah; ?></td>
                                                            <td><?= $r->ket; ?></td>

                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="<?= base_url('Admin_Remaja/edit/') . $r->id_remaja; ?>" class="btn btn-warning me-2">Edit</a>
                                                                    <a href="<?= base_url(); ?>Admin_Remaja/hapus/<?= $r->id_remaja; ?>" onclick="return confirm('Yakin Ingin Dihapus ?');" class="btn btn-danger">Hapus</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    </section>
    <!-- end table -->
</main>