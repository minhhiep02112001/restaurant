<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="/">
                    <h3>ADMIN</h3>
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">

                <li class="{{ \Request::route()->getName() == 'admin.dashboard' ? 'has-sub active' : '' }}">
                    <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                </li>
                <li class="{{ \Request::route()->getName() == 'admin.category.game' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.category.game') }}"> <i class="fas fa-table"></i>Quản lý danh mục game</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.category.post' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.category.post') }}"> <i class="fas fa-table"></i>Quản lý danh mục post</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.tag.index' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}"> <i class="fas fa-table"></i>Quản lý thể loại (tag)</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.post.index' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.post.index') }}"> <i class="fas fa-table"></i>Quản lý bài viết</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.page.index' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.page.index') }}"> <i class="fas fa-table"></i>Quản lý page</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.redirect.index' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.redirect.index') }}"> <i class="fas fa-table"></i>Quản lý link 301</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.setting' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.setting') }}"> <i class="fas fa-table"></i>Cài đặt hệ thống</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.menu.index' ? 'has-sub active' : '' }}">
                    <a href="{{ route('admin.menu.index') }}"> <i class="fas fa-table"></i>Cài đặt menu</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
