<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>Data VIP</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <span class="navbar-brand mb-0 h1">KKD X MLS</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Data VIP KKD X MLS</h3>
                 <a href="<?= base_url('vip/tambah/'); ?>" class="btn btn-primary mb-2">Tambah Data</a>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($vip as $v) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $v['nama']; ?></td>
                                    <td><?= $v['jabatan']; ?></td>
                                    <td><a href="<?= base_url('vip/hapus/'); ?><?= $v['id']; ?>" class=
                                    "badge badge-danger pl-2 pr-2" onclick="return confirm('Apakah anda ingin menghapus data ini?');
                                    ">Hapus</a></td>
                                     <td><a href="<?= base_url('vip/ubah/'); ?><?= $v['id']; ?>" class="badge badge-warning">Ubah</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>

</html>