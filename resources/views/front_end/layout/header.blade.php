@php
    $menu = getMenuParent(0, 0);
@endphp

<div class="fixed-header-box sticky-header-state-reset" style>
    <header class="main-header layout-logo-menu header-content-wrapper">
        <div id="top-nav-wrapper" style="background-color:#D7CFC5;background-image:none;">
            <nav class="top-nav text-menu">
                <div class="limit-wrapper header-maybe-limit-wrapper top-nav-inner header-padding">
                    <div class="row">
                        <div class="row ">
                            <div class="grid-1-2 lowres-width-override lowres-grid-1-2" id="top-nav-text">
                            </div>
                            <div class="grid-1-2 lowres-width-override lowres-grid-1-2 menu-wrapper">
                                <div id="mega-menu-wrap-menu-top" class="mega-menu-wrap">
                                    <div class="mega-menu-toggle">
                                        <div class="mega-toggle-blocks-left">
                                            <div class="mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-1"
                                                id="mega-toggle-block-1"><button aria-label="Toggle Menu"
                                                    class="mega-toggle-animated mega-toggle-animated-slider"
                                                    type="button" aria-expanded="false">
                                                    <span class="mega-toggle-animated-box">
                                                        <span class="mega-toggle-animated-inner"></span>
                                                    </span>
                                                </button></div>
                                        </div>
                                        <div class="mega-toggle-blocks-center"></div>
                                        <div class="mega-toggle-blocks-right"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="limit-wrapper header-maybe-limit-wrapper header-padding">
            <div class="header-contents">
                <div class="first-row">
                    <div class="logo-wrapper">
                        <div class="logo-tagline">
                            <a href="/" title="{{ $config_website->website }}" class="logo "
                                style="min-width:85px">
                                <img src="{{ convertPathImage($config_website->logo ?? '') }}"
                                    alt="{{ $config_website->website }}" class="normal-logo" width="85"
                                    height="134" style="max-height: 134px;" />
                            </a>
                            <span class="site-tagline">Authentic Cantonese Cuisine</span>
                        </div>
                        <div class="mobile-logo-additions">
                            <div id="vamtam-megamenu-main-menu-toggle"></div>
                        </div>
                    </div>
                </div>
                <div class="second-row ">
                    <div id="menus">
                        <nav id="main-menu">
                            <a href="#main" title="Skip to content" class="visuallyhidden">Skip to content</a>
                            <div id="mega-menu-wrap-menu-header" class="mega-menu-wrap">
                                <div class="mega-menu-toggle">
                                    <div class="mega-toggle-blocks-left">
                                        <div class="mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-1"
                                            id="mega-toggle-block-1"><button aria-label="Toggle Menu"
                                                class="mega-toggle-animated mega-toggle-animated-slider" type="button"
                                                aria-expanded="false">
                                                <span class="mega-toggle-animated-box">
                                                    <span class="mega-toggle-animated-inner"></span>
                                                </span>
                                            </button></div>
                                    </div>
                                    <div class="mega-toggle-blocks-center"></div>
                                    <div class="mega-toggle-blocks-right"></div>
                                </div>
                                <ul id="mega-menu-menu-header"
                                    class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
                                    data-event="hover_intent" data-effect="slide" data-effect-speed="400"
                                    data-effect-mobile="slide" data-effect-speed-mobile="600"
                                    data-panel-width="#main-menu" data-mobile-force-width="false" data-second-click="go"
                                    data-document-click="collapse" data-vertical-behaviour="accordion"
                                    data-breakpoint="900" data-unbind="false">
                                   
                                    @if (!empty($menu))
                                        @foreach ($menu as $item)
                                            <li class="mega-vamtam-animated-page-scroll mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current_page_item mega-menu-item-home mega-align-bottom-left mega-menu-flyout mega-menu-item-13968 vamtam-animated-page-scroll maybe-current-menu-item"
                                                id="mega-menu-item-13968"><a class="mega-menu-link"
                                                    href="{{ url($item->link) }}" tabindex="0">{{ $item->title }}</a>
                                            </li>
                                        @endforeach
                                    @endif


                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
