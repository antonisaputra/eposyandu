
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
          <form class="row g-3" method="POST" action="">
            
          <div class="col-md-12">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" id="nama" value="<?= $bayi['nama']; ?>">
              <?= form_error('nama','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-12">
              <label for="nik" class="form-label">NIK Ibu </label>
              <input type="number" class="form-control" value="<?= $bayi['nik_ibu']; ?>" name="nik_ibu" id="nik">
              <?= form_error('nik_ibu','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-12">
              <label for="nama" class="form-label">Nama Ibu</label>
              <input type="text" name="nama_ibu" value="<?= $bayi['nama_ibu']; ?>" class="form-control" id="nama">
              <?= form_error('nama_ibu','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-6">
              <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
              <select id="jeniskelamin" name="jk" class="form-select">
                <option value="L">L</option>
                <option value="P">P</option>
              </select>
              <?= form_error('jk','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-6">
              <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" value="<?= $bayi['tanggal_lahir']; ?>" class="form-control" id="tanggallahir">
              <?= form_error('tanggal_lahir','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-12">
              <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" value="<?= $bayi['tempat_lahir']; ?>"  class="form-control" id="tempat_lahir" placeholder="Rakam">
              <?= form_error('tempat_lahir','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-12">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" name="alamat" class="form-control" value="<?= $bayi['alamat']; ?>"  id="alamat" placeholder="Rakam">
              <?= form_error('alamat','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-12">
              <label for="bpjs" class="form-label">No Kartu BPJS</label>
              <input type="number" name="bpjs" value="<?= $bayi['bpjs']; ?>"  class="form-control" id="bpjs" placeholder="123245">
              <?= form_error('bpjs','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-6">
              <label for="beratbadan" class="form-label">Berat Badan</label>
              <input type="number" value="<?= $bayi['bb']; ?>"  name="bb" class="form-control" id="beratbadan">
              <?= form_error('bb','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-6">
              <label for="tinggibadan" class="form-label">Tinggi badan</label>
              <input type="number" name="tb" class="form-control" id="tinggibadan" value="<?= $bayi['tb']; ?>" >
              <?= form_error('tb','<small class="text-danger">','</small>'); ?>
            </div>

            <div class="col-md-6">
              <label for="l2p" class="form-label">L2P</label>
              <input type="number" name="l2p" class="form-control" id="l2p" value="<?= $bayi['l2p']; ?>" >
              <?= form_error('nik_ibu','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-6">
              <label for="lila" class="form-label">LILA</label>
              <input type="number" name="lila" class="form-control" value="<?= $bayi['lila']; ?>"  id="lila">
              <?= form_error('lila','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-12">
              <label for="penyakit" class="form-label">Penyakit</label>
              <input type="text" name="penyakit" class="form-control" id="penyakit" value="<?= $bayi['penyakit']; ?>" >
              <?= form_error('penyakit','<small class="text-danger">','</small>'); ?>
            </div>
            <div class="col-md-12">
              <label for="keterangan" class="form-label">Keterangan</label>
              <input type="text" name="keterangan" class="form-control" value="<?= $bayi['keterangan']; ?>"  id="keterangan">
              <?= form_error('keterangan','<small class="text-danger">','</small>'); ?>
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