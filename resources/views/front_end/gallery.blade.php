@extends('front_end._index')
@section('content')
    <style>
        [data-ux="Grid"] {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        [data-ux="GridCell"] {
            width: 33.3%;
            height: 250px;
            overflow: hidden;
        }

        [data-ux="GridCell"] img {
            width: 100%;
            height: 100%;
        }

        .zoom {
            padding: 50px;
            background-color: green;
            transition: transform .5s;
            /* Animation */
            width: 102%;
            height: 102%;
            margin: 0 auto;
        }


        [data-ux="GridCell"] img:hover {
            transform: scale(1.05);
        }

        .main-wrap {
            max-width: 1140px;
            margin: 0 auto;
        }

        @media (min-width: 1536px) {

            .x .c1-5a {
                width: 1280px;
            }
        }

        @media (min-width: 1536px) {

            .x .c1-g {
                font-size: 18px;
            }
        }

        @media (min-width: 1280px) {

            .x .c1-59 {
                width: 1160px;
            }
        }

        @media (min-width: 1280px) {

            .x .c1-f {
                font-size: 16px;
            }
        }

        @media (min-width: 1024px) {

            .x .c1-58 {
                width: 984px;
            }
        }

        @media (min-width: 1024px) {

            .x .c1-e {
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {

            .x .c1-57 {
                width: 100%;
            }
        }

        @media (min-width: 768px) {

            .x .c1-d {
                font-size: 16px;
            }
        }

        #content-about {
            width: 100%;
        }

        #content-about [data-ux="FeaturedText"] {
            padding: 15px 0px;
        }

        #content-about h1 {
            font-size: 30px;
            text-align: center;
        }

        #content-about h2 {
            font-size: 24px;
        }

        #content-about h3 {
            font-size: 20px;
        }

        #content-about h4 {
            font-size: 20px;
        }

        #content-about {
            font-size: 16px;
        }

        #content-about p,
        #content-about li {
            font-size: 16px;
        }
    </style>
    <div id="814a111e-1f0d-40b9-9341-6e328321d015" class="widget widget-content widget-content-content-4">
        <div data-ux="Widget" role="region" id="814a111e-1f0d-40b9-9341-6e328321d015"
            class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
            <div>
                <section data-ux="Section"
                    class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-m c1-n c1-d c1-e c1-f c1-g">
                    <div data-ux="Container"
                        class="x-el x-el-div c1-1 c1-2 c1-31 c1-32 c1-v c1-w c1-1k c1-b c1-c c1-57 c1-d c1-58 c1-e c1-59 c1-f c1-5a c1-g">
                        <div id="content-about"
                            class="x-el x-el-div c1-1 c1-2 c1-15 c1-5j c1-5k c1-5l c1-16 c1-5m c1-18 c1-5n c1-5o c1-b c1-c c1-5p c1-5q c1-5r c1-5s c1-d c1-e c1-f c1-g">
                            <div data-ux="ContentBasic"
                                class="x-el x-el-div x-el c1-1 c1-2 c1-15 c1-50 c1-4 c1-68 c1-13 c1-5o c1-69 c1-6a c1-b c1-c c1-6b c1-6c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
                                <h1 role="heading" aria-level="1" data-ux="FeaturedHeading"
                                    data-aid="CONTENT_WELCOME_TITLE_RENDERED" data-promoted-from="4" data-order="0"
                                    data-typography="HeadingDelta"
                                    class="x-el x-el-h1 c1-1 c1-2 c1-1r c1-1f c1-6d c1-19 c1-17 c1-16 c1-18 c1-b c1-6e c1-24 c1-25 c1-26 c1-27 c1-28 c1-29">
                                    {{ $oneItem->title }}</h1>
                                <div data-ux="FeaturedText" alignment="center"
                                    data-aid="CONTENT_WELCOME_DESCRIPTION_RENDERED" data-typography="BodyAlpha"
                                    class="x-el c1-1 c1-2 c1-1r c1-1f c1-4p c1-16 c1-18 c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-6u c1-6v c1-6w c1-6x c1-6y c1-6z c1-70 c1-71 c1-72 c1-73 c1-74 c1-75 c1-76 c1-5t c1-b c1-77 c1-c c1-25 c1-d c1-e c1-f c1-g x-rt">
                                    {!! $oneItem->content !!}
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="969c8ffc-f3af-4973-a86c-c5e772233751" class="widget widget-gallery widget-gallery-gallery-2">
        <div data-ux="WidgetBanner" role="region" id="969c8ffc-f3af-4973-a86c-c5e772233751"
            class="x-el x-el-div x-el c1-1 c1-2 c1-7q c1-b c1-c c1-d c1-e c1-f c1-g c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g">
            <div>
                <div data-ux="Element" id="bs-3" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g"><span
                        data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                        <section data-ux="SectionBanner"
                            class="x-el x-el-section c2-1 c2-2 c2-13 c2-14 c2-15 c2-3 c2-4 c2-16 c2-17 c2-5 c2-6 c2-7 c2-8">
                            <div data-ux="Container"
                                class="x-el x-el-div c2-1 c2-2 c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                <div data-ux="Grid"
                                    class="x-el x-el-div c2-1 c2-2 c2-l c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-1k c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                    <div data-ux="GridCell"
                                        class="x-el x-el-div c2-1 c2-2 c2-1e c2-1l c2-1m c2-1n c2-1o c2-14 c2-1p c2-15 c2-1q c2-1r c2-1s c2-1t c2-12 c2-m c2-3 c2-4 c2-1u c2-5 c2-1v c2-6 c2-1w c2-1x c2-7 c2-8">
                                        <div data-ux="Block"
                                            class="x-el x-el-div dim c2-1 c2-2 c2-1y c2-1z c2-1r c2-3 c2-4 c2-5 c2-20 c2-21 c2-22 c2-6 c2-7 c2-8">
                                            <div data-ux="Block"
                                                class="x-el x-el-div c2-1 c2-2 c2-1z c2-1r c2-23 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                                <div role="img" data-aid="GALLERY_IMAGE0_RENDERED" data-ux="Background"
                                                    class="x-el x-el-div image c2-1 c2-2 c2-24 c2-1z c2-1r c2-23 c2-25 c2-26 c2-27 c2-28 c2-3 c2-4 c2-29 c2-2a c2-2b c2-2c c2-2d c2-2e c2-2f c2-2g c2-2h c2-2i c2-2j c2-2k c2-2l c2-2m c2-2n c2-2o c2-2p c2-2q c2-2r c2-2s c2-2t c2-5 c2-6 c2-7 c2-8">
                                                    <img src="{{ asset('images/GALLERY_1.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-ux="GridCell"
                                        class="x-el x-el-div c2-1 c2-2 c2-1e c2-1l c2-1m c2-1n c2-1o c2-14 c2-1p c2-15 c2-1q c2-1r c2-1s c2-1t c2-12 c2-m c2-3 c2-4 c2-1u c2-5 c2-1v c2-6 c2-1w c2-1x c2-7 c2-8">
                                        <div data-ux="Block"
                                            class="x-el x-el-div dim c2-1 c2-2 c2-1y c2-1z c2-1r c2-3 c2-4 c2-5 c2-20 c2-21 c2-22 c2-6 c2-7 c2-8">
                                            <div data-ux="Block"
                                                class="x-el x-el-div c2-1 c2-2 c2-1z c2-1r c2-23 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                                <div role="img" data-aid="GALLERY_IMAGE1_RENDERED" data-ux="Background"
                                                    class="x-el x-el-div image c2-1 c2-2 c2-24 c2-1z c2-1r c2-23 c2-25 c2-26 c2-27 c2-28 c2-3 c2-4 c2-2u c2-2v c2-2w c2-2x c2-2y c2-2z c2-30 c2-31 c2-32 c2-33 c2-34 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3a c2-3b c2-3c c2-3d c2-3e c2-5 c2-6 c2-7 c2-8">
                                                    <img src="{{ asset('images/GALLERY_2.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-ux="GridCell"
                                        class="x-el x-el-div c2-1 c2-2 c2-1e c2-1l c2-1m c2-1n c2-1o c2-14 c2-1p c2-15 c2-1q c2-1r c2-1s c2-1t c2-12 c2-m c2-3 c2-4 c2-1u c2-5 c2-1v c2-6 c2-1w c2-1x c2-7 c2-8">
                                        <div data-ux="Block"
                                            class="x-el x-el-div dim c2-1 c2-2 c2-1y c2-1z c2-1r c2-3 c2-4 c2-5 c2-20 c2-21 c2-22 c2-6 c2-7 c2-8">
                                            <div data-ux="Block"
                                                class="x-el x-el-div c2-1 c2-2 c2-1z c2-1r c2-23 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                                <div role="img" data-aid="GALLERY_IMAGE2_RENDERED" data-ux="Background"
                                                    class="x-el x-el-div image c2-1 c2-2 c2-24 c2-1z c2-1r c2-23 c2-25 c2-26 c2-27 c2-28 c2-3 c2-4 c2-3f c2-3g c2-3h c2-3i c2-3j c2-3k c2-3l c2-3m c2-3n c2-3o c2-3p c2-3q c2-3r c2-3s c2-3t c2-3u c2-3v c2-3w c2-3x c2-3y c2-3z c2-5 c2-6 c2-7 c2-8">
                                                    <img src="{{ asset('images/GALLERY_3.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-ux="Grid"
                                    class="x-el x-el-div c2-1 c2-2 c2-l c2-1e c2-1f c2-1g c2-1h c2-1i c2-1j c2-1k c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                    <div data-ux="GridCell"
                                        class="x-el x-el-div c2-1 c2-2 c2-1e c2-1l c2-1m c2-1n c2-1o c2-14 c2-1p c2-15 c2-1q c2-1r c2-1s c2-1t c2-12 c2-m c2-3 c2-4 c2-1u c2-5 c2-1v c2-6 c2-1w c2-1x c2-7 c2-8">
                                        <div data-ux="Block"
                                            class="x-el x-el-div dim c2-1 c2-2 c2-1y c2-1z c2-1r c2-3 c2-4 c2-5 c2-20 c2-21 c2-22 c2-6 c2-7 c2-8">
                                            <div data-ux="Block"
                                                class="x-el x-el-div c2-1 c2-2 c2-1z c2-1r c2-23 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                                <div role="img" data-aid="GALLERY_IMAGE3_RENDERED" data-ux="Background"
                                                    class="x-el x-el-div image c2-1 c2-2 c2-24 c2-1z c2-1r c2-23 c2-25 c2-26 c2-27 c2-28 c2-3 c2-4 c2-40 c2-41 c2-42 c2-43 c2-44 c2-45 c2-46 c2-47 c2-48 c2-49 c2-4a c2-4b c2-4c c2-4d c2-4e c2-4f c2-4g c2-4h c2-4i c2-4j c2-4k c2-5 c2-6 c2-7 c2-8">
                                                    <img src="{{ asset('images/GALLERY_4.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-ux="GridCell"
                                        class="x-el x-el-div c2-1 c2-2 c2-1e c2-1l c2-1m c2-1n c2-1o c2-14 c2-1p c2-15 c2-1q c2-1r c2-1s c2-1t c2-12 c2-m c2-3 c2-4 c2-1u c2-5 c2-1v c2-6 c2-1w c2-1x c2-7 c2-8">
                                        <div data-ux="Block"
                                            class="x-el x-el-div dim c2-1 c2-2 c2-1y c2-1z c2-1r c2-3 c2-4 c2-5 c2-20 c2-21 c2-22 c2-6 c2-7 c2-8">
                                            <div data-ux="Block"
                                                class="x-el x-el-div c2-1 c2-2 c2-1z c2-1r c2-23 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                                <div role="img" data-aid="GALLERY_IMAGE4_RENDERED"
                                                    data-ux="Background"
                                                    class="x-el x-el-div image c2-1 c2-2 c2-24 c2-1z c2-1r c2-23 c2-25 c2-26 c2-27 c2-28 c2-3 c2-4 c2-4l c2-4m c2-4n c2-4o c2-4p c2-4q c2-4r c2-4s c2-4t c2-4u c2-4v c2-4w c2-4x c2-4y c2-4z c2-50 c2-51 c2-52 c2-53 c2-54 c2-55 c2-5 c2-6 c2-7 c2-8">
                                                    <img src="{{ asset('images/GALLERY_5.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-ux="GridCell"
                                        class="x-el x-el-div c2-1 c2-2 c2-1e c2-1l c2-1m c2-1n c2-1o c2-14 c2-1p c2-15 c2-1q c2-1r c2-1s c2-1t c2-12 c2-m c2-3 c2-4 c2-1u c2-5 c2-1v c2-6 c2-1w c2-1x c2-7 c2-8">
                                        <div data-ux="Block"
                                            class="x-el x-el-div dim c2-1 c2-2 c2-1y c2-1z c2-1r c2-3 c2-4 c2-5 c2-20 c2-21 c2-22 c2-6 c2-7 c2-8">
                                            <div data-ux="Block"
                                                class="x-el x-el-div c2-1 c2-2 c2-1z c2-1r c2-23 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
                                                <div role="img" data-aid="GALLERY_IMAGE5_RENDERED"
                                                    data-ux="Background"
                                                    class="x-el x-el-div image c2-1 c2-2 c2-24 c2-1z c2-1r c2-23 c2-25 c2-26 c2-27 c2-28 c2-3 c2-4 c2-56 c2-57 c2-58 c2-59 c2-5a c2-5b c2-5c c2-5d c2-5e c2-5f c2-5g c2-5h c2-5i c2-5j c2-5k c2-5l c2-5m c2-5n c2-5o c2-5p c2-5q c2-5 c2-6 c2-7 c2-8">
                                                    <img src="{{ asset('images/GALLERY_6.jpg') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </span></div>
            </div>
        </div>
    </div>
    <div style="margin: 20px 0px;">
        <!-- Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Alpine.js -->
        <script src="//unpkg.com/alpinejs" defer></script>

        <div class="w-full flex items-center justify-center">
            <div class="max-w-[650px]">
                <div x-data="{ activeSlide: 1, slideCount: 5 }" class="overflow-hidden relative">
                    <!-- Slider -->
                    <!-- You can remove x-init if you dont want to autoplay -->
                    <div class="whitespace-nowrap transition-transform duration-500 ease-in-out"
                        :style="'transform: translateX(-' + (activeSlide - 1) * 100.5 + '%)'" x-init="setInterval(() => { activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1 }, 5000)">
                        <!-- Item 1 -->
                        <div class="inline-block w-full">
                            <span class="yelp-review" data-review-id="emHuMnWAJrcoTONzFwLF-Q"
                                data-hostname="www.yelp.com">Read <a
                                    href="https://www.yelp.com/user_details?userid=ls9Z1mRQ9m4sYG4f-WzoUA"
                                    rel="nofollow noopener">Mike L.</a>'s <a
                                    href="https://www.yelp.com/biz/tian-tian-hainanese-chicken-rice-singapore-7?hrid=emHuMnWAJrcoTONzFwLF-Q"
                                    rel="nofollow noopener">review</a> of <a
                                    href="https://www.yelp.com/biz/fY1IkBnRft1KR0O2tqu7pg" rel="nofollow noopener">Tian
                                    Tian Hainanese Chicken Rice</a> on <a href="https://www.yelp.com"
                                    rel="nofollow noopener">Yelp</a>
                                <script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script>
                            </span>
                        </div>
                        <!-- Item 2 -->
                        <div class="inline-block w-full">
                            <span class="yelp-review" data-review-id="fL1hjHUMZda-FydRRjuRtw"
                                data-hostname="www.yelp.com">Read <a
                                    href="https://www.yelp.com/user_details?userid=GYQtbBi3L7Vs-PeD7xsQVA"
                                    rel="nofollow noopener">Stephen C.</a>'s <a
                                    href="https://www.yelp.com/biz/tian-tian-hainanese-chicken-rice-singapore-7?hrid=fL1hjHUMZda-FydRRjuRtw"
                                    rel="nofollow noopener">review</a> of <a
                                    href="https://www.yelp.com/biz/fY1IkBnRft1KR0O2tqu7pg" rel="nofollow noopener">Tian
                                    Tian Hainanese Chicken Rice</a> on <a href="https://www.yelp.com"
                                    rel="nofollow noopener">Yelp</a>
                                <script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script>
                            </span>
                        </div>
                        <!-- Item 3 -->
                        <div class="inline-block w-full">
                            <span class="yelp-review" data-review-id="R870_AV1FEik0kFViC7zng"
                                data-hostname="www.yelp.com">Read <a
                                    href="https://www.yelp.com/user_details?userid=lB6wTQ-xAa5oG9mHP-2Axw"
                                    rel="nofollow noopener">Caili C.</a>'s <a
                                    href="https://www.yelp.com/biz/tian-tian-hainanese-chicken-rice-singapore-7?hrid=R870_AV1FEik0kFViC7zng"
                                    rel="nofollow noopener">review</a> of <a
                                    href="https://www.yelp.com/biz/fY1IkBnRft1KR0O2tqu7pg" rel="nofollow noopener">Tian
                                    Tian Hainanese Chicken Rice</a> on <a href="https://www.yelp.com"
                                    rel="nofollow noopener">Yelp</a>
                                <script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script>
                            </span>
                        </div>
                        <!-- Item 3 -->
                        <div class="inline-block w-full">
                            <span class="yelp-review" data-review-id="pjNchhBn85wL9VU7E2wU0g"
                                data-hostname="www.yelp.com">Read <a
                                    href="https://www.yelp.com/user_details?userid=VlkXMgJwPLE7ntaakRbj5Q"
                                    rel="nofollow noopener">Tracey N.</a>'s <a
                                    href="https://www.yelp.com/biz/tian-tian-hainanese-chicken-rice-singapore-7?hrid=pjNchhBn85wL9VU7E2wU0g"
                                    rel="nofollow noopener">review</a> of <a
                                    href="https://www.yelp.com/biz/fY1IkBnRft1KR0O2tqu7pg" rel="nofollow noopener">Tian
                                    Tian Hainanese Chicken Rice</a> on <a href="https://www.yelp.com"
                                    rel="nofollow noopener">Yelp</a>
                                <script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script>
                            </span>
                        </div>
                        <!-- Item 3 -->
                        <div class="inline-block w-full"> 

                            <span class="yelp-review" data-review-id="pjNchhBn85wL9VU7E2wU0g"
                                data-hostname="www.yelp.com">Read <a
                                    href="https://www.yelp.com/user_details?userid=VlkXMgJwPLE7ntaakRbj5Q"
                                    rel="nofollow noopener">Tracey N.</a>'s <a
                                    href="https://www.yelp.com/biz/tian-tian-hainanese-chicken-rice-singapore-7?hrid=pjNchhBn85wL9VU7E2wU0g"
                                    rel="nofollow noopener">review</a> of <a
                                    href="https://www.yelp.com/biz/fY1IkBnRft1KR0O2tqu7pg" rel="nofollow noopener">Tian
                                    Tian Hainanese Chicken Rice</a> on <a href="https://www.yelp.com"
                                    rel="nofollow noopener">Yelp</a>
                                <script src="https://www.yelp.com/embed/widgets.js" type="text/javascript" async></script>
                            </span>

                        </div>
                         
                    </div>

                    <!-- Prev/Next Arrows -->
                    <div class="absolute inset-0 flex items-center justify-between px-2">
                        <button @click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slideCount"
                            class="w-[30px] h-[30px] flex items-center bg-black/30 text-white p-2 rounded-full">
                            &#8592;
                        </button>
                        <button @click="activeSlide = activeSlide < slideCount ? activeSlide + 1 : 1"
                            class="w-[30px] h-[30px] flex items-center bg-black/30 text-white p-2 rounded-full">
                            &#8594;
                        </button>
                    </div>

                    <!-- Dots Navigation -->
                    <div class="absolute bottom-0 left-0 right-0 flex justify-center space-x-2 p-4">
                        <template x-for="slideIndex in slideCount" :key="slideIndex">
                            <button @click="activeSlide = slideIndex" class="h-2 w-2 rounded-full"
                                :class="{
                                    'bg-orange-500': activeSlide === slideIndex,
                                    'bg-white/50': activeSlide !==
                                        slideIndex
                                }"></button>
                        </template>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
