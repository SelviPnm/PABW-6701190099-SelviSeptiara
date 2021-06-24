<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/sampah/create/" class="btn btn-danger mt-3">Tambah Data Sampah</a>
            <h1 class="mt-2">Data Sampah</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr class="table table-danger">
                        <th scope="col">#</th>
                        <th scope="col">Wilayah</th>
                        <th scope="col">Jenis Sampah</th>
                        <th scope="col">Berat Sampah</th>
                        <th scope="col">Tinggi Sampah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $i = 1; ?>
                    <?php foreach ($sampah as $s) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $s['wilayah']; ?></td>
                            <td><?= $s['jenis']; ?></td>
                            <td><?= $s['berat']; ?></td>
                            <td><?= $s['tinggi']; ?></td>
                            <td>
                                <a href="/sampah/edit/<?= $s['id']; ?>" class="btn btn-danger">Update</a>
                                <a href="/sampah/delete/<?= $s['id']; ?>" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>