@php
    $config_seo = json_decode(getValueSetting('config_seo'));
    $config_website = json_decode(getValueSetting('config_website'));
    $ver = '1.1.2';

@endphp

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('front_end.layout.config_seo_header')

    <link rel="stylesheet" href="{{ asset('assets/plugin/font-awesome/css/font-awesome.min.css') }}?v=1.2.2"
        media="all" type="text/css">
    <link rel="stylesheet" href="{{ asset('wp-content/themes/jquery_ui.css' . "?v=$ver") }}" />
    @yield('css')


    <link rel="stylesheet" id="fp_google_fonts-css"
        href="http://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600%2C700%2C400%2C300&amp;ver=6.1.4"
        type="text/css" media="screen" />
    <style id="front-all-inline-css" type="text/css">
        @font-face {
            font-family: 'icomoon';
            src: url(wp-content/themes/vip-restaurant/vamtam/assets/fonts/icons/icons.ttf) format('truetype');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'theme';
            src: url(https://shangpalace.thenorfolkgroup.com/wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.ttf) format('truetype'), url(https://shangpalace.thenorfolkgroup.com/wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.woff) format('woff'), url(https://shangpalace.thenorfolkgroup.com/wp-content/themes/vip-restaurant/vamtam/assets/fonts/theme-icons/theme-icons.svg#theme-icons) format('svg');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css' . "?v=$ver") }}" />
    <link rel="stylesheet" id="my-child-theme-style-css"
        href="wp-content/themes/vip-restaurant-child/style5152.css?ver=1.0" type="text/css" media="all" />
    <link rel="stylesheet" id="vamtam-gfonts-css"
        href="https://fonts.googleapis.com/css?family=Playfair+Display%3Anormal%2Cbold&amp;subset=latin&amp;display=swap&amp;ver=10"
        type="text/css" media="all" />
    <link rel="stylesheet" id="cubeportfolio-css"
        href="wp-content/themes/vip-restaurant/vamtam/assets/cubeportfolio/css/cubeportfolio.min474a.css?ver=4.4.0"
        type="text/css" media="all" />
    <script type="text/javascript" src="wp-content/themes/vip-restaurant/vamtam/assets/js/modernizr.min55a0.js?ver=3.2.0"
        id="modernizr-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.mina7a0.js?ver=3.6.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2" id="jquery-migrate-js">
    </script>

    <script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=GT-5TJZSXZ" id="google_gtagjs-js" async>
    </script>
    <script type="text/javascript" id="google_gtagjs-js-after">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("set", "developer_id.dZTNiMT", true);
        gtag("config", "GT-5TJZSXZ");
    </script>

    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/16416.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.4" />
    <link rel="shortlink" href="index.html" />
 
    <style type="text/css" id="wp-custom-css">
        /* latin-ext */
        @font-face {
            font-family: 'Kaushan Script';
            font-style: normal;
            font-weight: 400;
            src: local('Kaushan Script'), local('KaushanScript-Regular'), url(https://fonts.gstatic.com/s/kaushanscript/v6/vm8vdRfvXFLG3OLnsO15WYS5DG72wNJHMw.woff2) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Kaushan Script';
            font-style: normal;
            font-weight: 400;
            src: local('Kaushan Script'), local('KaushanScript-Regular'), url(https://fonts.gstatic.com/s/kaushanscript/v6/vm8vdRfvXFLG3OLnsO15WYS5DG74wNI.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* style sticky header */
        .fixed-header-box {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }

        .admin-bar .fixed-header-box {
            top: 32px;
        }

        @media screen and (max-width: 782px) {
            .admin-bar .fixed-header-box {
                top: 46px;
            }
        }
    </style>
    <style type="text/css">
        /** Mega Menu CSS: fs **/
    </style>
</head>

<body
    class="home page-template-default page page-id-16416 mega-menu-menu-header mega-menu-menu-top mega-menu-menu-detail-page full header-layout-logo-menu pagination-load-more page-vertical-padding-none sticky-header-type-over vamtam-not-scrolled no-page-header has-header-slider no-header-sidebars responsive-layout sticky-footer vamtam-limit-wrapper layout-left-only">

    <span id="top"></span>
    @include('front_end.layout.header')
    <div id="page" class="main-container">
        <div class="boxed-layout">
            <div class="pane-wrapper clearfix">
                <header class="header-middle row type-slider">
                    <div id="header-slider-container" class="revslider">
                        <div class="header-slider-wrapper">
                            <p class="rs-p-wp-fix"></p>
                            <rs-module-wrap id="rev_slider_18_1_wrapper" data-source="gallery"
                                style="background:transparent;padding:0;">
                                <rs-module id="rev_slider_18_1" style="display:none;" data-version="6.1.3">
                                    <rs-slides>
                                        <rs-slide data-key="rs-84" data-title="Slide"
                                            data-thumb="/wp-content/uploads/2019/10/Shang-5_F-1-100x50.jpg"
                                            data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;" data-hsom="1">
                                            <img src="{{ asset('wp-content/uploads/2023/01/dummy.png') }}"
                                                title="Home-en"
                                                data-lazyload="{{ asset('/wp-content/uploads/2019/10/Shang-5_F-1.jpg') }}"
                                                data-bg="p:left center;" data-parallax="11"
                                                data-panzoom="d:20000;ss:100;se:110;" class="rev-slidebg"
                                                data-no-retina>
                                            <rs-layer id="slider-18-slide-84-layer-1" class="rs-pxl-1" data-type="text"
                                                data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on"
                                                data-xy="x:c;xo:-347px,-302px,-167px,-25px;y:m;yo:178px,157px,100px,222px;"
                                                data-text="w:normal;s:30,30,30,25;l:30,30,30,34;"
                                                data-dim="w:505px,408px,408px,340px;h:34px,33px,33px,69px;"
                                                data-frame_0="x:-50px;tp:600;"
                                                data-frame_1="tp:600;e:Power2.easeOut;sp:1900;sR:10;"
                                                data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1590;"
                                                style="z-index:5;font-family:Playfair Display;">Traditional Cantonese
                                                Cuisine
                                            </rs-layer> </rs-slide>
                                        <rs-slide data-key="rs-86" data-title="Slide"
                                            data-thumb="{{ asset('wp-content/uploads/2023/01/big-bowl-scaled-100x50.jpg') }}"
                                            data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                            <img src="{{ asset('wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                title="big bowl" width="2560" height="1707"
                                                data-lazyload="{{ asset('wp-content/uploads/2023/01/big-bowl-scaled.jpg') }}"
                                                data-bg="p:right center;" data-parallax="off" class="rev-slidebg"
                                                data-no-retina>
                                            <rs-layer id="slider-18-slide-86-layer-1" class="rs-pxl-1"
                                                data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on"
                                                data-xy="x:c;xo:-363px,-302px,-126px,-25px;y:m;yo:172px,157px,101px,222px;"
                                                data-text="w:normal;s:30,30,30,25;l:30,30,30,34;"
                                                data-dim="w:500px,408px,auto,340px;h:60px,33px,33px,69px;"
                                                data-frame_0="x:-50px;tp:600;"
                                                data-frame_1="tp:600;e:Power2.easeOut;sp:1900;sR:10;"
                                                data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1590;"
                                                style="z-index:5;font-family:Playfair Display;">Traditional Cantonese
                                                Cuisine
                                            </rs-layer> </rs-slide>
                                        <rs-slide data-key="rs-87" data-title="Slide"
                                            data-thumb="{{ asset('wp-content/uploads/2019/10/anh-bia_full-copy-100x50.jpg') }}"
                                            data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                            <img src="{{ asset('wp-content/plugins/revslider/public/assets/assets/dummy.png') }}"
                                                title="anh bia_full copy" width="2440" height="1177"
                                                data-lazyload="{{ asset('wp-content/uploads/2019/10/anh-bia_full-copy.jpg') }}"
                                                data-parallax="off" class="rev-slidebg" data-no-retina>
                                            <rs-layer id="slider-18-slide-87-layer-1" class="rs-pxl-1"
                                                data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on"
                                                data-xy="x:c;xo:-362px,-302px,-122px,-39px;y:m;yo:176px,157px,100px,221px;"
                                                data-text="w:normal;s:30,30,30,25;l:30,30,30,34;"
                                                data-dim="w:514px,408px,496px,256px;h:60px,33px,34px,70px;"
                                                data-frame_0="x:-50px;tp:600;"
                                                data-frame_1="tp:600;e:Power2.easeOut;sp:1900;sR:10;"
                                                data-frame_999="o:0;tp:600;e:nothing;st:w;sR:1590;"
                                                style="z-index:5;font-family:Playfair Display;">Traditional Cantonese
                                                Cuisine
                                            </rs-layer> </rs-slide>
                                    </rs-slides>
                                    <rs-static-layers></rs-static-layers>
                                    <rs-progress style="height: 5px; background: rgba(0,0,0,0.15);"></rs-progress>
                                </rs-module>
                                <script>
                                    var htmlDivCss = unescape("%0A%0A%0A%0A%0A%0A%0A%0A");
                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                            </rs-module-wrap>

                        </div>
                    </div>
                </header>
                <header class="header-middle header-middle-bottom row normal type-featured" style="min-height:0px">
                    <div class="limit-wrapper">
                        <div class="header-middle-content">
                        </div>
                    </div>
                </header>
                <div id="main-content">
                    @yield('content')
                </div>
               @include('front_end.layout.footer')
            </div>
        </div>
    </div>
    
    <div id="scroll-to-top" class="icon">&#59662;</div>


    <script>
        VAMTAM_HIDDEN_WIDGETS = [];
    </script>
    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event) {
            if ("fb_pxl_code" in event.detail.apiResponse) {
                eval(event.detail.apiResponse.fb_pxl_code);
            }
        }, false);
    </script>

    <div id="fb-pxl-ajax-code"></div>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400%7CRoboto:400" rel="stylesheet"
        property="stylesheet" media="all" type="text/css">
    <script type="text/javascript">
        if (typeof revslider_showDoubleJqueryError === "undefined") {
            function revslider_showDoubleJqueryError(sliderID) {
                var err = "<div class='rs_error_message_box'>";
                err += "<div class='rs_error_message_oops'>Oops...</div>";
                err += "<div class='rs_error_message_content'>";
                err +=
                    "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                err +=
                    "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                err += "</div>";
                err += "</div>";
                jQuery(sliderID).show().html(err);
            }
        }
    </script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/shangpalace.thenorfolkgroup.com\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "cached": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/scripts58e0.js?ver=5.1.4"
        id="contact-form-7-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/revolution.tools.minf049.js?ver=6.0"
        defer="defer" id="tp-tools-js"></script>
    <script type="text/javascript" src="wp-content/plugins/revslider/public/assets/js/rs6.min6fb3.js?ver=6.1.3"
        defer="defer" id="revmin-js"></script>
    <script type="text/javascript"
        src="wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/jquery.matchheight.mind633.js?ver=0.5.1"
        id="jquery-match-height-js"></script>
    <script type="text/javascript"
        src="wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/jquery.easypiechart4c71.js?ver=2.1.3"
        id="jquery-easypiechart-js"></script>
    <script type="text/javascript"
        src="wp-content/themes/vip-restaurant/vamtam/assets/js/plugins/thirdparty/responsive-elements4963.js?ver=1.1"
        id="vamtam-reponsive-elements-js"></script>
    <script type="text/javascript"
        src="wp-content/themes/vip-restaurant/vamtam/assets/cubeportfolio/js/jquery.cubeportfolio.min474a.js?ver=4.4.0"
        id="cubeportfolio-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/effect.min3f14.js?ver=1.13.2" id="jquery-effects-core-js">
    </script>
    <script type="text/javascript" src="wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
    <script type="text/javascript" id="vamtam-all-js-extra">
        /* <![CDATA[ */
        var VAMTAM_FRONT = {
            "ajaxurl": "https:\/\/shangpalace.thenorfolkgroup.com\/wp-admin\/admin-ajax.php",
            "jspath": "https:\/\/shangpalace.thenorfolkgroup.com\/wp-content\/themes\/vip-restaurant\/vamtam\/assets\/js\/",
            "mobile_header_breakpoint": "900px"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/themes/vip-restaurant/vamtam/assets/js/all.min4963.js?ver=1.1"
        id="vamtam-all-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/datepicker.min3f14.js?ver=1.13.2"
        id="jquery-ui-datepicker-js"></script>
    <script type="text/javascript" id="jquery-ui-datepicker-js-after">
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "dd M yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type="text/javascript" src="wp-content/plugins/foodpress/assets/js/jquery.timepickere225.js?ver=1.5.3"
        id="fp_reservation_timepicker-js"></script>
    <script type="text/javascript" id="fp_ajax_handle-js-extra">
        /* <![CDATA[ */
        var fp_ajax_script = {
            "ajaxurl": "https:\/\/shangpalace.thenorfolkgroup.com\/wp-admin\/admin-ajax.php"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/foodpress/assets/js/foodpress_frontende225.js?ver=1.5.3"
        id="fp_ajax_handle-js"></script>
    <script type="text/javascript" src="wp-content/plugins/foodpress/assets/js/intlTelInput.min5152.js?ver=1.0"
        id="fp_res_intl_phone_script-js"></script>
    <script type="text/javascript" src="wp-content/plugins/foodpress/assets/js/intlTelInputUtils5152.js?ver=1.0"
        id="fp_res_intl_phone_utils_script-js"></script>
    <script type="text/javascript" src="wp-content/themes/vip-restaurant-child/scripts5152.js?ver=1.0"
        id="my-child-theme-script-js"></script>
    <script type="text/javascript" src="wp-includes/js/hoverIntent.min3e5a.js?ver=1.10.2" id="hoverIntent-js"></script>
    <script type="text/javascript" id="megamenu-js-extra">
        /* <![CDATA[ */
        var megamenu = {
            "timeout": "300",
            "interval": "100"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="wp-content/plugins/megamenu/js/maxmegamenu3890.js?ver=2.7.1.4" id="megamenu-js">
    </script>
    <script type="text/javascript"
        src="wp-content/themes/vip-restaurant/vamtam/assets/js/build/sticky-header.minacd0.js?ver=1635405331"
        id="vamtam-sticky-header-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/ui/tabs.min3f14.js?ver=1.13.2" id="jquery-ui-tabs-js">
    </script>
    <script type="text/javascript">
        (function() {
            var expirationDate = new Date();
            expirationDate.setTime(expirationDate.getTime() + 31536000 * 1000);
            document.cookie = "pll_language=en; expires=" + expirationDate.toUTCString() +
                "; path=/; secure; SameSite=Lax";
        }());
    </script>
    <script type="text/javascript">
        setREVStartSize({
            c: 'rev_slider_18_1',
            rl: [1240, 1024, 778, 480],
            el: [600, 600, 500, 676],
            gw: [1240, 1024, 778, 414],
            gh: [600, 600, 500, 676],
            layout: 'fullscreen',
            offsetContainer: 'header.main-header, #top-nav-wrapper',
            offset: '',
            mh: "0"
        });
        var revapi18,
            tpj;
        jQuery(function() {
            tpj = jQuery;
            if (tpj("#rev_slider_18_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_18_1");
            } else {
                revapi18 = tpj("#rev_slider_18_1").show().revolution({
                    jsFileLocation: "//shangpalace.thenorfolkgroup.com/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullscreen",
                    duration: 3500,
                    visibilityLevels: "1240,1024,778,480",
                    gridwidth: "1240,1024,778,414",
                    gridheight: "600,600,500,676",
                    minHeight: "",
                    lazyType: "smart",
                    editorheight: "600,600,500,676",
                    responsiveLevels: "1240,1024,778,480",
                    fullScreenOffsetContainer: "header.main-header, #top-nav-wrapper",
                    navigation: {
                        mouseScrollNavigation: false,
                        touch: {
                            touchenabled: true,
                            swipe_min_touches: 50
                        },
                        arrows: {
                            enable: true,
                            style: "hesperiden",
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            rtl: true,
                            left: {
                                h_offset: 30
                            },
                            right: {
                                h_offset: 30
                            }
                        },
                        bullets: {
                            enable: true,
                            tmp: "",
                            style: "persephone",
                            hide_onmobile: true,
                            hide_under: 1000,
                            h_align: "right",
                            h_offset: 200,
                            v_offset: 83,
                            space: 6
                        }
                    },
                    parallax: {
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000
                    },
                    scrolleffect: {
                        set: true,
                        fade: true,
                        multiplicator: 1.3,
                        multiplicator_layers: 1.3
                    },
                    fallbacks: {
                        panZoomDisableOnMobile: true
                    },
                });
            }

        });
    </script>
    <script>
        var htmlDivCss = unescape(
            "%23rev_slider_18_1_wrapper%20.hesperiden.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A%23rev_slider_18_1_wrapper%20.hesperiden.tparrows%3Ahover%20%7B%0A%09background%3A%23000000%3B%0A%7D%0A%23rev_slider_18_1_wrapper%20.hesperiden.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A20px%3B%0A%09color%3A%23ffffff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_18_1_wrapper%20.hesperiden.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82c%27%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A%23rev_slider_18_1_wrapper%20.hesperiden.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce82d%27%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A%23rev_slider_18_1_wrapper%20.persephone%20.tp-bullet%20%7B%0A%09width%3A4px%3B%0A%09height%3A4px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23ffffff%3B%0A%09border%3A1px%20solid%20%23a71c20%3B%09%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A%23rev_slider_18_1_wrapper%20.persephone%20.tp-bullet%3Ahover%2C%0A%23rev_slider_18_1_wrapper%20.persephone%20.tp-bullet.selected%20%7B%0A%09background%3A%23a71c20%3B%0A%7D%0A%0A%0A"
        );
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>

</body>

<!-- Mirrored from shangpalace.thenorfolkgroup.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Dec 2023 15:49:39 GMT -->

</html>
