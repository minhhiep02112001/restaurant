<a href="{{url('/')}}">
    <img class="logo center-block img-responsive" alt="{{ $config_website->website }}"
    src="{{ convertPathImage($config_website->logo ?? '') }}">
</a>

@if (empty($show_menu))
    @php
        $menu = getMenuParent(0, 0);

    @endphp
    {{-- <h2 class="text-center">{{ $config_website->website }}</h2> --}}
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
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
