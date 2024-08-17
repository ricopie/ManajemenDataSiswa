<aside class="main-sidebar sidebar-light-indigo elevation-4">

  <a href="<?= base_url() ?>" class="brand-link">
    <img src="<?= base_url('assets') ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">MDS</span>
  </a>

  <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets') ?>/img/<?= env('github.user.profile') ?>" class="img-circle elevation-2"
          alt="User Image">
      </div>
      <div class="info">
        <a href="<?= site_url('admin') ?>" class="d-block"><?= env('github.user.name') ?></a>
      </div>
    </div>

    <div class="form-inline d-none invisible">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
          aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview"
        role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="<?= site_url('admin') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= site_url('admin/student') ?>" class="nav-link">
            <i class="nav-icon fas fa-user-graduate"></i>
            <p>
              Student
            </p>
          </a>
        </li>

      </ul>
    </nav>

  </div>

</aside>

<aside class="control-sidebar control-sidebar-dark">
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>