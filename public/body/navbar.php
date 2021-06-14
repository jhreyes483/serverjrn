<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
            <div class="text-center d-none d-md-inline">
                <a type="button" class="border-0 mb-1" id="sidebarToggle">
                <i class="fas fa-bars"></i>
                </a>
            </div>
    <!-- Topbar Search -->
    <h4 class="ml-3">Panel Administrativo</h4>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ($_SESSION['usuario']['nombres'] ?? '') ?></span>
                <img class="img-profile rounded-circle" src="public/img/us/jav.png">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Mi perfil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Cerrar Sesion
                </a>
            </div>
        </li>
    </ul>
</nav>