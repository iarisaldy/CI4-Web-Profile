<?= $this->extend('BE/layout/template') ?>
<?= $this->section('content') ?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Menu User</h1>
        <button id="tambah" class="btn btn-primary" type="button" data-toggle="modal" data-target="#TambahModal">
          <a class="m-0 font-weight-bold text-light"> <i class="fas fa-plus fa-sm"></i> Tambah User</a>
        </button>
      </div>

      <!-- DataTales User -->
      <div class=" card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tabel ser</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="Table1" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($user as $key => $data) { ?>
                <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $data['nama_user']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['password']; ?></td>
                  <td style="text-align:center">
                      <button id="tambah" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                      <button id="tambah" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  <?= $this->endSection() ?>