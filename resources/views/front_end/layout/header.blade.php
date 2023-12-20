<img class="logo center-block img-responsive" alt="Shanghai 21"
    src="https://web.archive.org/web/20221006061539im_/https://www.simplemenu.com/simplemenu/client_store_assets/673/sub_679/logo.png">
@if (!empty($title))
    <h1 class="text-center">{{ $title }}</h1>
@endif

@if (empty($show_menu))
    @php
        $menu = getMenuParent(0, 0);

    @endphp
    <h2 class="text-center">{{ $config_website->website }}</h2>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <img class="center-block mobile-logo img-responsive"
                    src="/web/20221006061539im_/https://shanghai21togo.com/Home/index">
            </div><button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle
                    navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
                    class="icon-bar"></span></button>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if (!empty($menu))
                        @foreach ($menu as $item)
                            <li><a class="nav-link" href="{{ $item->link }}">{{strtoupper( $item->title )}}</a></li>
                        @endforeach
                    @endif 
                </ul>
            </div>
        </div>
    </nav>
@endif
