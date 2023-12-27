@php
    $config_seo = json_decode(getValueSetting('config_seo'));
    $config_website = json_decode(getValueSetting('config_website'));
    $ver = '1.1.2';
    $content_home = $config_seo->content_home ?? '';
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

    <link rel="stylesheet" href="/wp-content/themes/topgo/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/wp-content/themes/topgo/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/wp-content/themes/topgo/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="/wp-content/themes/topgo/css/images-grid.css" type="text/css" />
    <link rel="stylesheet" href="/wp-content/themes/topgo/css/jquery-ui.css" type="text/css" />
    <script type="text/javascript" src="/wp-content/themes/topgo/js/jquery.js"></script>
    <script type="text/javascript" src="/wp-content/themes/topgo/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/topgo/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/wp-content/themes/topgo/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/topgo/js/images-grid.js"></script>


    <link rel='stylesheet' id='wp-block-library-css'
        href='/wp-includes/css/dist/block-library/style.mine35d.css?ver=6.3.2' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>

    <link rel='stylesheet' id='wp-pagenavi-css' href='/wp-content/plugins/wp-pagenavi/pagenavi-css44fd.css?ver=2.70'
        type='text/css' media='all' />
    <link rel='stylesheet' id='twentyfourteen-lato-css'
        href='https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='genericons-css' href='/wp-content/themes/topgo/genericons/genericons19ce.css?ver=3.0.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='twentyfourteen-style-css' href='/wp-content/themes/topgo/stylee35d.css?ver=6.3.2'
        type='text/css' media='all' />
    <!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfourteen-ie-css' href='/wp-content/themes/topgo/css/ie.css?ver=20131205' type='text/css' media='all' />
<![endif]-->
    <script type='text/javascript' src='/wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1' id='jquery-migrate-js'>
    </script>

    <script type='text/javascript' src='/wp-content/themes/topgo/js/script5152.js?ver=1.0' id='main-js-js'></script>
    <style type="text/css">
        div.socialicons {
            float: left;
            display: block;
            margin-right: 10px;
            line-height: 1;
            padding-bottom: 10px;
        }

        div.socialiconsv {
            line-height: 1;
        }

        div.socialiconsv p {
            line-height: 1;
            display: none;
        }

        div.socialicons p {
            margin-bottom: 0px !important;
            margin-top: 0px !important;
            padding-bottom: 0px !important;
            padding-top: 0px !important;
        }

        div.social4iv {
            background: none repeat scroll 0 0 #FFFFFF;
            border: 1px solid #aaa;
            border-radius: 3px 3px 3px 3px;
            box-shadow: 3px 3px 3px #DDDDDD;
            padding: 3px;
            position: fixed;
            text-align: center;
            top: 55px;
            width: 76px;
            display: none;
        }

        div.socialiconsv {
            padding-bottom: 5px;
        }
    </style>

</head>

<body data-rsssl="1"
    class="post-template-default single single-post postid-41506 single-format-standard post-template post-template-page-templates/detail-location-php group-blog masthead-fixed full-width singular">

    @include('front_end.layout.header')
    <div class="main-wrap">
        @yield('content')

    </div><!-- .main-wrap -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                
                <div class="footer-bottom clearfix">
                    <div class="footer-column footer-column1">
                        <div class="logo-footer"><a href="/"><img
                                    src="/wp-content/uploads/2017/07/logo-footer.jpg" alt="logo-footer"></a></div>
                    </div><!-- .footer-column -->

                    <div class="footer-column footer-column2">
                        <ul>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Contact phone</font>
                                </font><br><a href="tel:9691 4852"><i class="fa fa-phone"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">9691 4852</font>
                                    </font>
                                </a>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Contact email</font>
                                </font><br><i class="fa fa-envelope"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">topgo.vn@gmail.com</font>
                                </font>
                            </li>
                            <li>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Office in Singapore</font>
                                </font><br><i class="fa fa-map-marker"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">1 Kadayanallur St #01 -10/11 Maxwell Food Center Singapore 069120 Singapore</font>
                                </font>
                            </li>
                        </ul>
                    </div><!-- .footer-column -->
                    <div class="footer-column footer-column3">
                        <div class="menu-main-menu-footer-ha-noi-container">
                            <ul id="menu-main-menu-footer-ha-noi" class="">
                                <li id="menu-item-28976"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28976">
                                    <a href="/bar-lounge/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">BAR &amp; LOUNGE</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28978"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28978">
                                    <a href="/combo-deals/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">COMBO &amp; DEALS</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28980"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28980">
                                    <a href="/karaoke/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">KARAOKE</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28982"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-28982">
                                    <a href="/restaurants/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">RESTAURANTS</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28984"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28984">
                                    <a href="/top-events/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">TOP EVENTS</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28985"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28985">
                                    <a href="/top-goi-y/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">TOP SUGGESTIONS</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28981"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28981">
                                    <a href="/nha-tai-tro/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">DONORS</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28983"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28983">
                                    <a href="/spa/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">SPA</font>
                                        </font>
                                    </a>
                                </li>
                                <li id="menu-item-28977"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28977">
                                    <a href="/blog/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">BLOG</font>
                                        </font>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .footer-column -->

                    <div class="footer-column footer-column4">
                        <div class="menu-menu-about-company-ha-noi-container">
                            <ul id="menu-menu-about-company-ha-noi" class="menuaboutcompany">
                                <li id="menu-item-28986"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28986"><a
                                        href="#">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Introduce</font>
                                        </font>
                                    </a></li>
                                <li id="menu-item-28987"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28987"><a
                                        href="#">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Company</font>
                                        </font>
                                    </a></li>
                            </ul>
                        </div> <!--<h5>Đăng kí email nhận thông tin</h5>-->
                        <h5>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Follow us</font>
                            </font>
                        </h5>
                        <div class="social-footer">
                            <a rel="nofollow" target="_blank" href="/"><i class="fa fa-facebook-square"
                                    aria-hidden="true"></i></a>
                            <!--<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>-->
                        </div>
                    </div><!-- .footer-column -->
                </div>
                <div class="copy-right">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            © TopGo </font>
                    </font>
                </div>
            </div>
        </div>


    </footer><!-- #colophon -->
    <!-- #page -->



    <script type="text/javascript">
        $(document).ready(function() {
            // Optimalisation: Store the references outside the event handler:
            var $window = $(window);
            //var $pane = $('#pane1');

            function checkWidth() {
                var windowsize = $window.width();
                if (windowsize < 767) {
                    //if the window is greater than 440px wide then turn on jScrollPane..
                    var headerHeight2 = $('.header-main').outerHeight(
                        true); // true value, adds margins to the total height
                    var footerHeight2 = $('.copy-right').innerHeight();
                    $('.header-main').affix({
                        offset: {
                            top: headerHeight2,
                            bottom: footerHeight2
                        }
                    }).on('affix.bs.affix', function() { // before affix
                        $(this).css({
                            'width': $(this).outerWidth()
                        });
                    }).on('affix-bottom.bs.affix', function() { // before affix-bottom
                        $(this).css('bottom', 'auto'); // THIS is what makes the jumping
                    });
                    //add class and tog menu bootstrp
                    $(document).ready(function() {
                        $("ul.sub-menu").parent().addClass("dropdown");
                        $("ul.sub-menu").addClass("dropdown-menu");
                        $("ul#menu-main-menu-ha-noi li.dropdown a").addClass("dropdown-toggle");
                        $("ul.sub-menu li a").removeClass("dropdown-toggle");
                        $('.navbar .dropdown-toggle').append('');
                        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
                    });

                }
            }
            // Execute on load
            checkWidth();
            // Bind event listener
            $(window).resize(checkWidth);
        });
    </script>
    <script type="text/javascript" src="/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8" id="swv-js">
    </script>

    <script type="text/javascript"
        src="/wp-content/plugins/date-time-picker-for-contact-form-7/assets/js/jquery.datetimepicker.full.min.js?ver=6.3.2"
        id="walcf7-datepicker-js-js"></script>
    <script type="text/javascript"
        src="/wp-content/plugins/date-time-picker-for-contact-form-7/assets/js/datetimepicker.js?ver=1.0.0"
        id="walcf7-datepicker-js"></script>


    <script type="text/javascript" src="/wp-includes/js/comment-reply.min.js?ver=6.3.2" id="comment-reply-js"></script>
    <script type="text/javascript" src="/wp-content/themes/topgo/js/functions.js?ver=20150315"
        id="twentyfourteen-script-js"></script>
    <script type="text/javascript" src="/wp-content/plugins/lazy-load/js/jquery.sonar.min.js?ver=0.6.1"
        id="jquery-sonar-js"></script>
    <script type="text/javascript" src="/wp-content/plugins/lazy-load/js/lazy-load.js?ver=0.6.1"
        id="wpcom-lazy-load-images-js"></script>
    <script type="text/javascript" src="/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
        id="wp-polyfill-inert-js"></script>





    <script type="text/javascript" src="/wp-content/themes/topgo/js/readmore.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('.gioithieufield').readmore({
                speed: 200
            });
        });
        /*$( function() {
            $( "#select-adrress" ).selectmenu();
        });*/
    </script>


</body>

<!-- Mirrored from topgo.vn/bbq-hotpot/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Dec 2023 16:04:57 GMT -->

</html>
