<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-text mx-3">Admin </div>
    </a>


    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Edit Content
    </div>


    <li class="nav-item">
        <a class="nav-link collapsed" href="/index" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fa fa-clone"></i>
            <span>Add News</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Add News</h6>
                <a class="collapse-item" href="/dashboard/posts">Add Berita</a>
            </div>
        </div>
    </li>


    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Addons
    </div>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu Navigasi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="collapse-item custom-button" type="submit">Logout</button>
                </form>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="/">Back To Beranda</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>


    <hr class="sidebar-divider d-none d-md-block">


    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
