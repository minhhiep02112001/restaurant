@php
    $menu_footer = getMenuParent(0, 1);
@endphp

<article id="footer" style="height: auto" class="container-fluid">
    <section class="white-section">
        <h3 id="hours" class="title-sections">We Deliver To:</h3>
        <div class="section-content">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">10005 | 10271 | 10280 | 10038 | 10006 | 10046 | 10047 |
                    10048 | 10015 | 10079 | 10094 | 10096 | 10099 | 10184 | 10196 | 10197 | 10279 | 10007 |
                    10278 | 10282 | 10013 | 10012 | 10014</div>
            </div>
        </div>
    </section> 
    <div style="padding-left:20px; width: 300px; margin: auto">
        <div class="footer-info">{{$config_website->website}}</div> | <h4 class="footer-info">{{$config_website->phone}}</h4>
        <h2 style="padding-left: 24px" class="footer-info">{{$config_website->address}}</h2>
    </div>
    <div style="margin-top: 20px" class="text-center"><a
            href="/privacy_policy">Privacy Policy</a>
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
            @if (!empty($menu_footer))
                @foreach ($menu_footer as $item)
                    <a href="{{ $item->link }}" title="{{$item->title}}">{{ $item->title }}</a>
                @endforeach
            @endif
        </div>
    </div>
</article>
