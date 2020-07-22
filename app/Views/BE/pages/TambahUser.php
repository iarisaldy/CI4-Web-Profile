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
                <h1 class="h3 mb-2 text-gray-800">Menu Admin</h1>
                <button id="tambah" class="btn btn-primary" type="button" data-toggle="modal" data-target="#TambahModal">
                    <a class="m-0 font-weight-bold text-light"> <i class="fas fa-plus fa-sm"></i> Tambah Admin</a>
                </button>
            </div>

            <!-- DataTales Example -->
            <div class=" card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="Table1" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td style="text-align:center">
                                        <button id="edit" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="delete" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>$170,750</td>
                                    <td style="text-align:center">
                                        <button id="tambah" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="tambah" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009/01/12</td>
                                    <td>$86,000</td>
                                    <td style="text-align:center">
                                        <button id="tambah" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="tambah" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012/03/29</td>
                                    <td>$433,060</td>
                                    <td style="text-align:center">
                                        <button id="tambah" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="tambah" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008/11/28</td>
                                    <td>$162,700</td>
                                    <td style="text-align:center">
                                        <button id="tambah" class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditModal"><i class="fa fa-cog"></i></button>
                                        <button id="tambah" class="btn btn-danger" type="button" data-toggle="modal" data-target="#DeleteModal"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?= $this->endSection() ?>