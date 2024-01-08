<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon">
        <img class="logo" id="logo-icon" src="<?= base_url() ?>assets/img/resto.jpg" alt="Logo Ssayomart" width="60px" height="60px">
    </div>
</a>


<!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
    PESANAN
</div>

<!-- Input Produk Admin Produk -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url(); ?>" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <i class="bi bi-box2-fill"></i>
        <span>Pesanan</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header text-danger">Pesanan :</h6>
            <a class="collapse-item" href="<?= base_url(); ?>">Pesanan Masuk</a>
            <!-- <a class="collapse-item" href="<?= base_url(); ?>">Tambah Produk</a>
            <a class="collapse-item" href="<?= base_url(); ?>">Produk-Kategori Batch</a>
            <a class="collapse-item" href="<?= base_url(); ?>">Tambah Variasi</a>
            <a class="collapse-item" href="<?= base_url(); ?>">Fetching Produk</a> -->
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>