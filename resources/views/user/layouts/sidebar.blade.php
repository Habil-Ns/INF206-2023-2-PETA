<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            @if(auth()->check() && auth()->user()->registration && (auth()->user()->registration->status === 'Diterima' || auth()->user()->registration->status === 'Cuti'))
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/orders') ? 'active' : ''}}" href="/dashboard/orders">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    My Orders
                </a>
            </li>
            @endif
        </ul>
        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/cvpemandu*') ? 'active' : ''}}" href="/dashboard/cvpemandu">
                    <span data-feather="users" class="align-text-bottom"></span>
                    CV Pemandu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/daftarsaran*') ? 'active' : ''}}" href="/dashboard/daftarsaran">
                    <span data-feather="inbox" class="align-text-bottom"></span>
                    Daftar Saran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/rating') ? 'active' : ''}}" href="/dashboard/rating">
                    <span data-feather="star" class="align-text-bottom"></span>
                    Rating view
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>