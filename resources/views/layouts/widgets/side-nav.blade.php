<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <a href="/">
                    <img src="{{ asset('images/logo.jpg') }}" alt="">
                </a>
            </span>

            <div class="text logo-text">
                <span class="name">Trendy</span>
                <span class="profession">Dashboard</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>

            <li class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class='bx bx-home-alt icon'></i>
                    <span class="text nav-text">Dashboard</span>
                </a>
            </li>
        </div>
    </div>
</nav>

<script src="{{ asset('js/side-nav.js') }}"></script>
