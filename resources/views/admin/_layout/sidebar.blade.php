<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="/admins/images/icon/logo.png" alt="Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ \Request::route()->getName() == 'admin.dashboard' ? 'active' : '' }}">
                    <a class="js-arrow" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>

                </li>

                {{-- <li class=" ">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Quản lý danh mục</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.category.game') }}">Games</a>
                        </li>
                        <li class="m-menu__item--active">
                            <a href="{{ route('admin.category.post') }}">Posts</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class=" ">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Quản lý Trending</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.drag.game') }}">Games</a>
                        </li>
                        <li class="m-menu__item--active">
                            <a href="{{ route('admin.drag.category') }}">Category</a>
                        </li>
                    </ul>
                </li>

                <li class=" ">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Quản lý Games</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.game') }}">Games</a>
                        </li>
                        <li class="m-menu__item--active">
                            <a href="{{ route('admin.app') }}">Apps</a>
                        </li>
                    </ul>
                </li> --}}
 
                {{-- <li class="{{ \Request::route()->getName() == 'admin.post.index' ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}"> <i class="fas fa-table"></i>Quản lý bài viết</a>
                </li> --}}
                <li class="{{ \Request::route()->getName() == 'admin.page.index' ? 'active' : '' }}">
                    <a href="{{ route('admin.page.index') }}"> <i class="fas fa-table"></i>Quản lý page</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.redirect.index' ? 'active' : '' }}">
                    <a href="{{ route('admin.redirect.index') }}"> <i class="fas fa-table"></i>Quản lý link 301</a>
                </li>

                <li class=" ">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Cài đặt hệ thống</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.setting') }}">Cài đặt</a>
                        </li>
                        <li class="m-menu__item--active">
                            <a href="{{ route('admin.menu.index') }}">Cài đặt menu</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
