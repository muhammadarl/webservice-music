<ul class="navbar-nav warna-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-text mx-3">
            <i class="fab fa-spotify"></i>
            <span>Music Management</span> 
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard')}}">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Kelola Album
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('album')}}">
            <i class="fas fa-compact-disc"></i>
            <span>Album</span></a>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Artist
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('artist')}}">
            <i class="fab fa-napster"></i>
            <span>Artist</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kelola Chart
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('chart')}}">
            <i class="fab fa-soundcloud"></i>
            <span>Chart</span></a>
    </li>
    <div class="sidebar-heading">
        Kelola Genre
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('genre')}}">
            <i class="fas fa-headphones-alt"></i>
            <span>Genre</span></a>
    </li>
    <div class="sidebar-heading">
        Kelola Label
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('label')}}">
            <i class="fas fa-record-vinyl"></i>
            <span>Label</span></a>
    </li>
    <div class="sidebar-heading">
        Kelola License
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('license')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>License</span></a>
    </li>
    <div class="sidebar-heading">
        Kelola Publisher
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('publisher')}}">
            <i class="far fa-file-audio"></i>
            <span>Music Publisher</span></a>
    </li>
    <div class="sidebar-heading">
        Kelola Producer
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('producer')}}">
            <i class="fas fa-sliders-h"></i>
            <span>Producer</span></a>
    </li>
    <div class="sidebar-heading">
        Kelola Song
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('songs')}}">
            <i class="fas fa-music"></i>
            <span>Song</span></a>
    </li>
    <div class="sidebar-heading">
        Kelola Studio
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('studio')}}">
            <i class="fas fa-microphone-alt"></i>
            <span>Studio</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->