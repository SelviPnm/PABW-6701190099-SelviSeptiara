<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="my-3">Form Tambah Data Sampah</h2>
            <form action="/sampah/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="wilayah" name="wilayah" autofocus>
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Sampah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jenis" name="jenis">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="berat" class="col-sm-2 col-form-label">Berat Sampah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="berat" name="berat" step="any">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label for="tinggi" class="col-sm-2 col-form-label">Tinggi Sampah</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="tinggi" name="tinggi" step="any">
                    </div>
                </div><br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-danger">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>