<main id="main" class="main">
  <!-- Table -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12">
          <br>

          <div class="container-fluid">
            <div class="card mb-4">
              <div class="card-header bg-light">
              <a href="<?= base_url(); ?>Halaman/add_bayi" class="btn btn-primary me-2 ms-2">Tambah User</a>

              </div>
              
              <div class="card-body bg-light">
                <div class="table-responsive">
                  <table class="table table-bordered table-light" id="dataTable" width="100%" cellspacing="0">

          <div class="table-responsive">
            <table class="table table-light table-striped ">
              <center>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Tier</th>
                  <th scope="col">Aksi</th>
                  
                </tr>
              </thead>
              </center>
              
           <tbody>
           <!-- <?php $no = 1;?>
           <?php foreach($bayi as $b): ?> -->
           <tr>
               <td><?= $no++; ?></td>
               <td><?= $b->username; ?></td>
               <td><?= $b->email; ?></td>
               <td><?= $b->password; ?></td>
               <td><?= $b->tier; ?></td>
               <td>
                   <div class="d-flex">
                       <a href="" class="btn btn-warning me-2">Edit</a>
                       <a href="" class="btn btn-danger">Hapus</a>
                   </div>
               </td>
           </tr>
           <!-- <?php endforeach; ?> -->
       </tbody>
                  
                </tr>
                
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