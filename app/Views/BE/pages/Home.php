<?= $this->extend('BE/layout/template') ?>
<?= $this->section('content') ?>

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h2 mb-2 text-gray-800">Konten Home</h1>
        <p class="mb-4">Edit Konten yang akan dirubah <a target="_blank" href="<?php echo base_url(); ?>https://datatables.net">official DataTables documentation</a>.</p>

        <label for="basic-url">Judul</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <label for="basic-url">Upload Foto</label>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>

        <label for="basic-url">With TextArea</label>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class="input-group">
        <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>
        <i class="fa fa-envelope-open" aria-hidden="true"></i>
    </div>

</div>


<?= $this->endSection() ?>