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
                                <a href="<?= base_url('Admin_Bayi/tambah'); ?>" class="btn btn-primary me-2 ms-2">Tambah</a>
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
                                                        <th>Nama Ibu</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Tempat Tanggal Lahir</th>
                                                        <th>NIK Ibu</th>
                                                        <th>Alamat</th>
                                                        <th>No Kartu BPJS</th>
                                                        <th>Berat Badan</th>
                                                        <th>Tinggi Badan</th>
                                                        <th>L2P</th>
                                                        <th>LILA</th>
                                                        <th>Jenis Penyakit</th>
                                                        <th>Keterangan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($bayi as $b) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $b->nama; ?></td>
                                                            <td><?= $b->nama_ibu; ?></td>
                                                            <td><?= $b->jk; ?></td>
                                                            <td><?= $b->tempat_lahir; ?> , <?= date('d F Y', strtotime($b->tanggal_lahir)); ?></td>
                                                            <td><?= $b->nik_ibu; ?></td>
                                                            <td><?= $b->alamat; ?></td>
                                                            <td><?= $b->bpjs; ?></td>
                                                            <td><?= $b->bb; ?></td>
                                                            <td><?= $b->tb; ?></td>
                                                            <td><?= $b->l2p; ?></td>
                                                            <td><?= $b->lila; ?></td>
                                                            <td><?= $b->penyakit; ?></td>
                                                            <td><?= $b->keterangan; ?></td>

                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="<?= base_url('Admin_Bayi/edit/') . $b->id_bayi; ?>" class="btn btn-warning me-2">Edit</a>
                                                                    <a href="<?= base_url(); ?>Admin_Bayi/hapus/<?= $b->id_bayi; ?>" onclick="return confirm('Yakin Ingin Dihapus ?');" class="btn btn-danger">Hapus</a>
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