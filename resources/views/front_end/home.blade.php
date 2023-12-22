@php
    $config_seo = json_decode(getValueSetting('config_seo'));
    $config_website = json_decode(getValueSetting('config_website'));
    $content_home = $config_seo->content_home ?? '';
@endphp
@extends('front_end._index')

@section('content')
    <article style="height: auto" class="container-fluid" id="banner_slide">

        {{-- <section class="hero-image"> --}}
        <section class="banner_home slider" data-sizes="50vw">
            <div>
                <img src="{{ asset('images/banner_home_1.jpg') }}"data-sizes="100vw" style="max-height:650px;">
            </div>
            <div>
                <img src="{{ asset('images/banner_home_2.png') }}"data-sizes="100vw" style="max-height:650px;">
            </div>
            <div>
                <img src="{{ asset('images/bannerhom.png') }}"data-sizes="100vw" style="max-height:650px;">
            </div>

        </section>
        {{-- </section> --}}
        <section class="grey-section" id="content">
            {!! $content_home !!}
        </section>
        <section class="white-section">
            <h2 id="gallery" class="title-sections">Gallery</h2>
            <div class="section-content">
                <div class="row">
                    <div style="margin-bottom: 20px" class="col-sm-3">
                        <img alt="banner-1" class="img-thumbnail img-responsive cld-responsive" height="198"
                            width="400" data-src="{{ asset('images/banner_1.jpg') }}">
                    </div>
                    <div style="margin-bottom: 20px" class="col-sm-3"><img alt="banner-2"
                            class="img-thumbnail img-responsive cld-responsive" height="198" width="400"
                            data-src="{{ asset('images/banner_2.jpg') }}">
                    </div>
                    <div style="margin-bottom: 20px" class="col-sm-3"> <img alt="banner-3"
                            class="img-thumbnail img-responsive cld-responsive" height="198" width="400"
                            data-src="{{ asset('images/banner_3.jpg') }}">
                    </div>
                    <div style="margin-bottom: 20px" class="col-sm-3"><img alt="banner-4"
                            class="img-thumbnail img-responsive cld-responsive" height="198" width="400"
                            data-src="{{ asset('images/banner_4.jpg') }}">
                    </div>
                </div>
            </div>
        </section>
        <section class="grey-section">
            <h2 id="hours" class="title-sections">Hours</h2>
            <div class="section-content"> <b>Monday - Sunday</b><br />11:00 am – 8:30 pm<br /> </div>
        </section>
        <section class="white-section hours-section">
            <h2 id="press" class="title-sections">Press</h2>
            <div class="row">
                <div class="col-sm-3"> </div>
                <div class="col-sm-3"><img alt="{{ $config_website->website }}" src="{{ asset('images/press.png') }}"
                        class="img-responsive img-thumbnail" /> </div>
                <div class="col-sm-3"> <img alt="{{ $config_website->website }}" src="{{ asset('images/press_1.png') }}"
                        class="img-responsive img-thumbnail" /></div>
            </div>
        </section>

    </article>
@endsection
