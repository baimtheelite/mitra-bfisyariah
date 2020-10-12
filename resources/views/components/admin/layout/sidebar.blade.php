<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
<a href="{{ url("admin-wp") }}" class="brand-link">
    <img src="{{ asset("img/bfi.png") }}" alt="AdminLTE Logo" class="brand-image float-left"
         style="opacity: .8">
    <span class="brand-text font-weight-light">BFI Syariah</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset("administrator/dist/img/user2-160x160.jpg") }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ url("admin-wp") }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
        <a href="{{ url("admin-wp/content") }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Content
            </p>
          </a>
        </li>
        <li class="nav-item">
        <a href="{{ url("admin-wp/page") }}" class="nav-link">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
              Page
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>