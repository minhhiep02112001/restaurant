@php
    $menu = getMenuParent(0, 0);
@endphp

<div class="header header-main header-tem header-post-temlate">
    <div class="container">
        <div class="row">
            <div class="header-left pull-left">
                <div class="main-menu">
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="navbar-header">
                            <div class="logo">
                                <a href="/" title="{{ $config_website->website }}"><img
                                        src="{{ convertPathImage($config_website->logo ?? '') }}"
                                        alt="{{ $config_website->website }}"></a>
                            </div><!-- .logo -->
                            <a href="/tim-kiem/" class="icon-search-mobile"><i class="fa fa-search"
                                    aria-hidden="true"></i></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span
                                    class="sr-only">Toggle navigation
                                </span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <div class="menu-main-menu-ha-noi-container">
                                <ul id="menu-main-menu-ha-noi" class="nav navbar-nav">
                                    <li id="menu-item-302"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-302">
                                        <a href="/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">TOP EVENTS</font>
                                            </font>
                                        </a>
                                    </li>
                                    <li id="menu-item-218"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-218">
                                        <a href="/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">COMBO &amp; DEALS</font>
                                            </font>
                                        </a>
                                    </li>
                                    <li id="menu-item-219"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-219">
                                        <a href="/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">KARAOKE</font>
                                            </font>
                                        </a>
                                    </li>
                                    <li id="menu-item-303"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-303">
                                        <a href="{{ url('/about') }}">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">ABOUT</font>
                                            </font>
                                        </a>
                                    </li>

                                    <li id="menu-item-311"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-311">
                                        <a href="{{ url('/gallery') }}">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">GALLERY</font>
                                            </font>
                                        </a>
                                    </li>
                                    <li id="menu-item-311"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-311">
                                        <a href="{{ url('/contact') }}">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">CONTACT</font>
                                            </font>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header-right pull-right">
                <div class="hotline-footer">
                    <a href="tel:9691 4852"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hotline: 9691 4852</font>
                            </font>
                        </span></a>
                </div>
            </div><!-- .header-right -->
        </div>
    </div>
</div>
<div class="menu-post-temlate clearfix affix-top">
    <div class="container">
        <div class="row">
            <ul class="navbar-nav nav">
                @if (!empty($menu))
                    @foreach ($menu as $item)
                        <li class="">
                            <a href="{{url($item->link)}}">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$item->title}}</font>
                                </font>
                            </a>
                        </li>
                    @endforeach
                @endif 
            </ul>
        </div>
    </div>
</div>
