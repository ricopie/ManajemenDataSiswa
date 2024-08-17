<?= $this->extend('admin/master') ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="#" class="btn bg-gradient-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered data-example">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Nomor Induk</th>
                            <th class="no-sort">Foto</th>
                            <th>Nama Lengkap</th>
                            <th class="no-sort">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($faker as $i => $fake) : ?>

                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= $fake['number'] ?></td>
                                <td><img src="<?= $fake['image'] ?>" alt="" width="35" class="rounded-circle"></td>
                                <td><?= $fake['name'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->section('script'); ?>
<script {csp-script-nonce}>
    $(".data-example").DataTable({
        "button": ["print", "csv"],
        "columnDefs": [{
            "sortable": false,
            "targets": "no-sort"
        }]
    }).button();
</script>
<?= $this->endSection(); ?>
<?= $this->endSection(); ?>