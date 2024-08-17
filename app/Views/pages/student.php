<?= $this->extend('admin/master') ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="#" class="btn bg-gradient-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered" id="tbl_dataStudent">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Nomor Induk</th>
                            <th>Foto</th>
                            <th>Nama Lengkap</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--<tr>
                            <th scope="row">1</th>
                            <td>123456</td>
                            <td>0</td>
                            <td>Fulan bin Fulan</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                            <?= base_url('assets') ?>/img/<?= env('github.user.profile') ?>
                        </tr>-->
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

<?= $this->endSection(); ?>