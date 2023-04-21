<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index.html">
        <div class="sidebar-brand-icon">
            <img src="/../logo-blug.png" alt="" srcset="" />
        </div>
        <div class="sidebar-brand-text mr-3">BLUG</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0" />

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="\admin">
            <i class="fas fa-users"></i>
            <span>Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />

    <!-- Heading -->
    <div class="sidebar-heading">Content</div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('divisi') ? 'active' : '' }}">
        <a class="nav-link" href="\divisi">
            <i class="fas fa-photo-video"></i>
            <span>Divisi</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('category') ? 'active' : '' }}">
        <a class="nav-link" href="\category">
            <i class="fas fa-photo-video"></i>
            <span>Category</span>
        </a>
    </li>

    <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
        <a class="nav-link" href="\posts">
            <i class="fas fa-photo-video"></i>
            <span>Posts</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" />
</ul>
<!-- End of Sidebar -->
