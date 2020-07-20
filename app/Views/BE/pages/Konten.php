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
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- About Us Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div onclick="location.href='Table2'" class="btn btn-light card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-primary">About Us</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div onclick="location.href='Table2'" class="btn btn-light card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-success">Services</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Portofolio Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div onclick="location.href='TambahUser'" class="btn btn-light card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-info">Portofolio</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard fa-2x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div href="#Table2" class="btn btn-light card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-warning">Team</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- About Us DataTales -->
            <div class=" card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">About Us</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="Table1" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Text</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>About Us</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>EIUSMOD TEMPOR</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>MAGNI DOLORES</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>DOLOR SITEMA/td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Services DataTales -->
            <div class=" card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Services</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="Table2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Text</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Services</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>EIUSMOD TEMPOR</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>MAGNI DOLORES</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>DOLOR SITEMA</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Services</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>EIUSMOD TEMPOR</td>
                                    <td> IKI GAMBAR APIK
                                    </td>
                                    <td>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Portofolio DataTales -->
            <div class=" card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Portofolio</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="Table3" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Text</th>
                                    <th>Gambar</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Porto</td>
                                    <td>APP</td>
                                    <td> IKI GAMBAR APIK</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>EIUSMOD TEMPOR</td>
                                    <td>Web</td>
                                    <td> IKI GAMBAR APIK</td>
                                    <td>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>MAGNI DOLORES</td>
                                    <td>Web</td>
                                    <td> IKI GAMBAR APIK</td>
                                    <td>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>DOLOR SITEMA</td>
                                    <td>Logo</td>
                                    <td> IKI GAMBAR APIK</td>
                                    <td>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>DOLOR SITEMA</td>
                                    <td>Card</td>
                                    <td> IKI GAMBAR APIK</td>
                                    <td>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Team DataTales -->
            <div class=" card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Team</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="Table4" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Gambar</th>
                                    <th>Divisi</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Agil</td>
                                    <td>IKI GAMBAR APIK</td>
                                    <td>Developer</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-info" type="button" data-toggle="modal" data-target="#SosmedModal"><i class="fa fa-clipboard"></i></button>
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Agil</td>
                                    <td>IKI GAMBAR APIK</td>
                                    <td>Developer</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-info" type="button" data-toggle="modal" data-target="#SosmedModal"><i class="fa fa-clipboard"></i></button>
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#SosmedModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Agil</td>
                                    <td>IKI GAMBAR APIK</td>
                                    <td>Developer</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-info" type="button" data-toggle="modal" data-target="#SosmedModal"><i class="fa fa-clipboard"></i></button>
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Agil</td>
                                    <td>IKI GAMBAR APIK</td>
                                    <td>Developer</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-info" type="button" data-toggle="modal" data-target="#SosmedModal"><i class="fa fa-clipboard"></i></button>
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

<?= $this->endSection() ?>