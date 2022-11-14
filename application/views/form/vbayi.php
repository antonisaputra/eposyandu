
<main id="main" class="main">

<div class="pagetitle">
      <h1>Form Bayi & Balita</h1>
      
    </div><!-- End Page Title -->
<section class="section  ">
  <div class="row ml-auto justify-content-center">
    <div class="col-lg-8">
      <div class="card ">
        <div class="card-body ">
          <h3 class="card-title ">Bayi & Balita</h3>
          <!-- Multi Columns Form -->
          <form class="row g-3" method="POST" action="<?= base_url(); ?>Halaman/add_bayi_page">
            
            <div class="col-md-12">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" value="" name="nama" class="form-control" id="nama">
              <?= form_error('nama'.'<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-12">
              <label for="nik" class="form-label">NIK Ibu </label>
              <input type="number" value=""class="form-control" id="nik">
            </div>
            <div class="col-md-12">
              <label for="nama" class="form-label">Nama Ibu</label>
              <input type="text" value="" class="form-control" id="nama">
            </div>
            <div class="col-md-6">
              <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
              <select id="jeniskelamin"  class="form-select">
                <option value="L">L</option>
                <option value="P">P</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggallahir">
            </div>
            <div class="col-12">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text"  class="form-control" id="tempat_lahir" placeholder="Rakam">
            </div>
            <div class="col-12">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Rakam">
            </div>
            <div class="col-12">
              <label for="bpjs" class="form-label">No Kartu BPJS</label>
              <input type="number" class="form-control" id="bpjs" placeholder="123245">
            </div>
            <div class="col-md-6">
              <label for="beratbadan" class="form-label">Berat Badan</label>
              <input type="number" class="form-control" id="beratbadan">
            </div>
            <div class="col-md-6">
              <label for="tinggibadan" class="form-label">Tinggi badan</label>
              <input type="number" class="form-control" id="tinggibadan">
            </div>

            <div class="col-md-6">
              <label for="l2p" class="form-label">L2P</label>
              <input type="number" class="form-control" id="l2p">
            </div>
            <div class="col-md-6">
              <label for="lila" class="form-label">LILA</label>
              <input type="number"  class="form-control" id="lila">
            </div>
            <div class="col-md-12">
              <label for="keterangan" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="keterangan">
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

    </div>


  </div>
  </div>

  </div>
  </div>
</section>
</main>