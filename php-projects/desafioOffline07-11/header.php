
    <nav class="navbar md:navbar-expand bg-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Dashboard</a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
            <div class="drawer-header">
                <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
            </div>
            <div class="drawer-body mb-2 md:mb-0">
                <ul class="nav navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                    Menu
                    </button>
                    <div class="menu">
                    <a class="menu-item" href="tableclient.php">Clientes</a>
                    <a class="menu-item" href="tableproduct.php">Produtos</a>
                    <hr class="menu-divider">
                    <a class="menu-item" href="#">Something else here</a>
                    </div>
                </li>
                
                </ul>

            </div>
            </dialog>
        </div>
    </nav>
