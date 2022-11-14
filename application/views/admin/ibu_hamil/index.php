<main id="main" class="main">
    <!-- Table -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Laporan Posyandu Ibu Hamil</h2>
                    <br>

                    <?php if (!empty($this->session->flashdata('pesan'))) : ?>
                        <div class="alert <?= $this->session->flashdata('alert'); ?>" role="alert">
                            <?= $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="container-fluid">
                        <div class="card mb-4">
                            <div class="card-header bg-light">
                                <a href="<?= base_url('Admin_Ibu_Hamil/tambah'); ?>" class="btn btn-primary me-2 ms-2">Tambah</a>
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
                                                        <th>Usia Nipas</th>
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
                                                    <?php foreach ($ibuHamil as $ibu) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $ibu->nama; ?></td>
                                                            <td><?= $ibu->un; ?></td>
                                                            <td><?= $ibu->temp; ?> , <?= date('d F Y', strtotime($ibu->ttl)); ?></td>
                                                            <td><?= $ibu->nik; ?></td>
                                                            <td><?= $ibu->alamat; ?></td>
                                                            <td><?= $ibu->bpjs; ?></td>
                                                            <td><?= $ibu->bb; ?></td>
                                                            <td><?= $ibu->tb; ?></td>
                                                            <td><?= $ibu->l2p; ?></td>
                                                            <td><?= $ibu->lila; ?></td>
                                                            <td><?= $ibu->penyakit; ?></td>
                                                            <td><?= $ibu->darah; ?></td>
                                                            <td><?= $ibu->ket; ?></td>

                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="<?= base_url('Admin_Remaja/edit/') . $ibu->id_ibuhamil; ?>" class="btn btn-warning me-2">Edit</a>
                                                                    <a href="<?= base_url(); ?>Admin_Remaja/hapus/<?= $ibu->id_ibuhamil; ?>" onclick="return confirm('Yakin Ingin Dihapus ?');" class="btn btn-danger">Hapus</a>
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