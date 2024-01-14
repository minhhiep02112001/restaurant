@php
    $menu = getMenuParent(0, 0); 
@endphp 
<header class="Header Header--bottom Header--overlay">
    <div class="Header-inner Header-inner--bottom" data-nc-group="bottom">
        <div data-nc-container="bottom-left">
            <nav class="Header-nav Header-nav--primary" data-nc-element="primary-nav" data-content-field="navigation">

                <div class="Header-nav-inner">
                    @foreach ($menu as $k => $item)
                        <a href="{{ url($item->link) }}"
                            class="Header-nav-item  {{ $k == 0 ? 'Header-nav-item--active' : '' }}"
                            data-test="template-nav">
                            {{ $item->title }}
                        </a>
                    @endforeach
                </div>

            </nav>
        </div>
        <div data-nc-container="bottom-center">
            <a href="/" class="Header-branding" data-nc-element="branding" data-content-field="site-title">
                <img src="{{ convertPathImage($config_website->logo ?? '') }}"
                    alt="{{$config_website->website}}" class="Header-branding-logo" />
            </a>
        </div>
        <div data-nc-container="bottom-right">
            <nav class="Header-nav Header-nav--secondary" data-nc-element="secondary-nav"
                data-content-field="navigation">
            </nav>
        </div>
    </div>
</header>
