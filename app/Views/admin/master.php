<?= $this->include('admin/_partial/__head') ?>

<!-- Navbar -->
<?= $this->include('admin/_partial/__navbar') ?>
<!--/Navbar -->

<!-- Sidebar -->
<?= $this->include('admin/_partial/__sidebar') ?>
<!--/Sidebar -->

<!-- Content -->
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= esc($pageName) ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= esc($pageName) ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">

            <?= $this->renderSection('content'); ?>

        </div>
    </div>

</div>
<!--/Content -->

<!-- Footer -->
<?= $this->include('admin/_partial/__foot_copyright') ?>
<!--/Footer -->

<?= $this->include('admin/_partial/__footer') ?>