@php
    $config_seo = json_decode(getValueSetting('config_seo'));
    $config_website = json_decode(getValueSetting('config_website')); 
    $content_home = $config_seo->content_home ?? '';
@endphp
@extends('front_end._index')

@section('content')
    <article style="height: auto" class="container-fluid">
        <section class="hero-image">
            <h1 class="hero-text"> </h1>
        </section>
        <section class="grey-section">
            {!! $content_home !!}

        </section>
        <section class="white-section">
            <h2 id="gallery" class="title-sections">Gallery</h2>
            <div class="section-content">
                <div class="row">
                    <div style="margin-bottom: 20px" class="col-sm-3"> <a
                            href="{{ asset('images/banner_1.jpg') }}"
                            data-lightbox="image">
                            <img alt="banner-1" class="img-thumbnail img-responsive cld-responsive" height="198" width="400"
                                data-src="{{ asset('images/banner_1.jpg') }}"></a>
                    </div>
                    <div style="margin-bottom: 20px" class="col-sm-3"> <a
                            href="{{ asset('images/banner_2.jpg') }}"
                            data-lightbox="image"><img  alt="banner-2" class="img-thumbnail img-responsive cld-responsive" height="198"
                                width="400" data-src="{{ asset('images/banner_2.jpg') }}"></a>
                    </div>
                    <div style="margin-bottom: 20px" class="col-sm-3"> <a
                            href="{{ asset('images/banner_3.jpg') }}"
                            data-lightbox="image"><img alt="banner-3" class="img-thumbnail img-responsive cld-responsive" height="198"
                                width="400" data-src="{{ asset('images/banner_3.jpg') }}"></a>
                    </div>
                    <div style="margin-bottom: 20px" class="col-sm-3"> <a
                            href="{{ asset('images/banner_4.jpg') }}"
                            data-lightbox="image"><img  alt="banner-4" class="img-thumbnail img-responsive cld-responsive" height="198"
                                width="400" data-src="{{ asset('images/banner_4.jpg') }}"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="grey-section">
            <h2 id="hours" class="title-sections">Hours</h2>
            <div class="section-content"> <b>Monday - Sunday</b><br />11:00 am – 8:30 pm<br /> </div>
        </section>
        <section class="white-section">
            <h2 id="press" class="title-sections">Press</h2>
            <div class="row">
                <div class="col-sm-3"> </div>
                <div class="col-sm-3"> <a
                        href="/"><img alt="{{ $config_website->website }}"
                            src="{{ asset('images/press.png') }}"
                            class="img-responsive img-thumbnail" /></a> </div>
                <div class="col-sm-3"> <a
                        href="/"><img alt="{{ $config_website->website }}"
                            src="{{ asset('images/press_1.png') }}"
                            class="img-responsive img-thumbnail" /></a> </div>
            </div>
        </section>

    </article>
@endsection
