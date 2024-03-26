<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">A k u k a s i r</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{ url()->current() == route('produk') || url()->current() == route('formproduk') ? 'menu-open active' : '' }}">
            <a href="{{ route('produk') }}" class="nav-link {{ url()->current() == route('produk') || url()->current() == route('formproduk') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cube"></i>
                <p>
                    Produk
                </p>
            </a>
        </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Pembelian
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-check"></i>
              <p>
                Penjualan
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->