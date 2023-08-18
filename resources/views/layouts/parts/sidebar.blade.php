<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Form Sederhana</div>
    </a>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Route:: current()->uri === '/' || Route::current()->uri === 'tambah-pengguna' ? 'active' : '' }}">
        <a class="nav-link {{ Route:: current()->uri === '/' || Route::current()->uri === 'tambah-pengguna' ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Route:: current()->uri === '/' || Route::current()->uri === 'tambah-pengguna' ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu Pengguna:</h6>
                <a class="collapse-item {{ Route::current()->uri === 'tambah-pengguna' ? 'active' : '' }}" href="/tambah-pengguna">Tambah Pengguna</a>
                <a class="collapse-item {{ Route::current()->uri === '/' ? 'active' : '' }}" href="/">Daftar User</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
