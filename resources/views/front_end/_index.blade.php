<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
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
    <link rel='stylesheet' id='genericons-css'
        href='/wp-content/themes/topgo/genericons/genericons19ce.css?ver=3.0.3' type='text/css' media='all' />
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

    <div class="header header-main header-tem header-post-temlate">
        <div class="container">
            <div class="row">
                <div class="header-left pull-left">
                    <div class="main-menu">
                        <nav class="navbar navbar-default navbar-static-top">
                            <div class="navbar-header">
                                <div class="logo">
                                    <a href="/"><img src="/wp-content/uploads/2017/07/logo.jpg"></a>
                                </div><!-- .logo -->
                                <a href="/tim-kiem/" class="icon-search-mobile"><i class="fa fa-search"
                                        aria-hidden="true"></i></a>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span
                                        class="sr-only">Toggle navigation
                                    </span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div id="navbar" class="navbar-collapse collapse">
                                <div class="menu-main-menu-ha-noi-container">
                                    <ul id="menu-main-menu-ha-noi" class="nav navbar-nav">
                                        <li id="menu-item-302"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-302">
                                            <a href="/top-events/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">TOP EVENTS</font>
                                                </font>
                                            </a>
                                        </li>
                                        <li id="menu-item-218"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-218">
                                            <a href="/combo-deals/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">COMBO &amp; DEALS</font>
                                                </font>
                                            </a>
                                        </li>
                                        <li id="menu-item-219"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-219">
                                            <a href="/karaoke/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">KARAOKE</font>
                                                </font>
                                            </a>
                                        </li>
                                        <li id="menu-item-303"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-303">
                                            <a href="/restaurants/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">RESTAURANTS</font>
                                                </font>
                                            </a>
                                        </li>
                                        <li id="menu-item-6571"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6571">
                                            <a href="/bar-lounge/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">BAR &amp; LOUNGE</font>
                                                </font>
                                            </a>
                                        </li>
                                        <li id="menu-item-312"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-312">
                                            <a href="/spa/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">SPA</font>
                                                </font>
                                            </a>
                                        </li>
                                        <li id="menu-item-311"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-311">
                                            <a href="/trip/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">TRIP</font>
                                                </font>
                                            </a>
                                        </li>
                                        <li id="menu-item-221"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-221">
                                            <a href="/blog/">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">BLOG</font>
                                                </font>
                                            </a>
                                            <ul class="sub-menu">
                                                <li id="menu-item-28917"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28917">
                                                    <a href="/top-goi-y/">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">TOP SUGGESTIONS
                                                            </font>
                                                        </font>
                                                    </a>
                                                </li>
                                                <li id="menu-item-28918"
                                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28918">
                                                    <a href="/diem-nhan/">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">HIGHLIGHT</font>
                                                        </font>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="header-right pull-right">
                    <div class="hotline-footer">
                        <a href="tel:0913515351"><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hotline: 0913.51.53.51</font>
                                </font>
                            </span></a>
                    </div>
                </div><!-- .header-right -->
            </div>
        </div>
    </div>
    <div class="menu-post-temlate clearfix affix-top" style="width: 1519px;">
        <div class="container">
            <div class="row">
                <ul class="navbar-nav nav">
                    <li class=""><a href="#abouts">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Introduce</font>
                            </font>
                        </a></li>
                    <li class=""><a href="#ticket-map">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Menu &amp; Reservations</font>
                            </font>
                        </a></li>
                    <li class=""><a href="#events-location">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Events</font>
                            </font>
                        </a></li>
                    <li class=""><a href="#artists-participating">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Photos</font>
                            </font>
                        </a></li>
                    <li class=""><a href="#organizer">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Map</font>
                            </font>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-wrap">
        <div class="featured-img">
            <img src=" /wp-content/uploads/2023/04/z4393839704896_41771f8c1eac4895d1933282df648cff.jpg ">
        </div><!-- .featured-img -->

        <div class="cleafix" id="abouts">
            <div class="container">
                <div class="row">
                    <div class="header-detail-events">
                        <h1><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">BBQ Hotpot</font>
                                </font>
                            </span></h1>
                        <div class="header-detail-events-left">
                            <div class="date-detail">
                                <img width="100"
                                    src="/wp-content/uploads/2023/04/176907720_5321725094567843_4691793959038571079_n.jpg">

                            </div>
                        </div>
                        <div class="header-detail-events-right">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            107K1, Giang Vo, Dong Da, Hanoi </font>
                                    </font>
                                </li>
                                <li>
                                    <!--<li>
                                        <i class="fa fa-tags"></i>
                                                                            <li>-->
                                    <a href="tel:0913515351"><i class="fa fa-phone"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">0913515351</font>
                                        </font>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .header-detail-events -->
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Introduce</font>
                            </font>
                        </span></h3>
                    <div class="gioithieufield clearfix" style="max-height: none; height: 1127.05px;"
                        data-readmore="" aria-expanded="false" id="rmjs-1">
                        <p style="text-align: justify;"><span style="font-weight: 400;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">For Hanoi food lovers, BBQ Hotpot is always
                                        in the top restaurants loved by young people because of its spacious, youthful
                                        space, unique grilled hot pot menu and flavorful chicken dishes. </font>
                                    <font style="vertical-align: inherit;">The restaurant is an ideal destination for
                                        meetings, meetings, parties or dates of domestic and foreign diners, bringing
                                        comfortable and happy moments with rich and memorable dishes. </font>
                                </font>
                            </span>
                            <font style="vertical-align: inherit;"><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">Let's explore&nbsp; </font>
                                </span></font><span style="font-weight: 400;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">with </font>
                                </font><a href="/">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Topgo the special features only
                                            available at BBQ Hotpot!</font>
                                    </font>
                                </a>
                                <font style="vertical-align: inherit;"></font>
                            </span>
                        </p>
                        <h2><b>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Detailed information about BBQ Hotpot</font>
                                </font>
                            </b></h2>
                        <ul>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Address: </font>
                                    </font>
                                </span><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">107K1, Giang Vo, Dong Da, Hanoi</font>
                                    </font>
                                </span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Table reservation hotline: 0913515351
                                        </font>
                                    </font>
                                </span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Reference price: </font>
                                    </font>
                                </span><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">200k </font>
                                    </font>
                                </span><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">/person.</font>
                                    </font>
                                </span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;" class="">Promotion: </font>
                                    </font>
                                </span><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;" class="">Book a table in advance
                                            for free birthday decoration package of 1,000,000 VND and audio speaker
                                            service.&nbsp;</font>
                                    </font>
                                </span></li>
                            <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Opening hours: 9am - 10:30pm</font>
                                    </font>
                                </span></li>
                        </ul>
                        <p style="text-align: justify;"><span style="font-weight: 400;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Located in Dong Da district - the most
                                        entertainment area in Hanoi, BBQ Hotpot brings you a "familiar yet strange"
                                        grilled hot pot model with a rich and diverse menu. </font>
                                    <font style="vertical-align: inherit;">Or BBQ chicken dishes are prepared according
                                        to many different recipes, bringing a special delicious flavor. </font>
                                    <font style="vertical-align: inherit;">This is the only place in Hanoi with a
                                        flexible menu, suitable for all diners' needs at very reasonable prices. </font>
                                    <font style="vertical-align: inherit;">Now, you can safely entrust all your parties
                                        to BBQ Hotpot, the space, food and service here will definitely not disappoint
                                        you!&nbsp;&nbsp;</font>
                                </font>
                            </span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-10.jpg"><img
                                    src="/wp-content/uploads/2023/05/bbq-hotpot-10-300x225.jpg" decoding="async"
                                    fetchpriority="high" class="wp-image-41515 aligncenter" alt=""
                                    width="1071" height="803"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-10-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-10-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-10-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-10-1536x1151.jpg 1536w"
                                    sizes="(max-width: 1071px) 100vw, 1071px" data-lazy-loaded="true"
                                    style=""><noscript><img decoding="async" fetchpriority="high"
                                        class="wp-image-41515 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-10-300x225.jpg" alt=""
                                        width="1071" height="803"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-10-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-10-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-10-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-10-1536x1151.jpg 1536w"
                                        sizes="(max-width: 1071px) 100vw, 1071px" /></noscript></a></p>
                        <h2><b>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The ideal space for every party</font>
                                </font>
                            </b></h2>
                        <p style="text-align: justify;"><span style="font-weight: 400;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">BBQ Hotpot is located right on Giang Vo
                                        street so it is easy to find and convenient for moving and parking. </font>
                                    <font style="vertical-align: inherit;">The restaurant has an area of ​​250m2 with a
                                        capacity of up to 300 guests, including 2 spacious and airy floors for diners to
                                        comfortably choose the most satisfactory seats. </font>
                                    <font style="vertical-align: inherit;">There is also a private room that can
                                        accommodate 80 guests for appointments that require privacy, or family
                                        gatherings.</font>
                                </font>
                            </span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-7.jpg"><img
                                    src="/wp-content/uploads/2023/05/bbq-hotpot-7-300x225.jpg" decoding="async"
                                    class="wp-image-41512 aligncenter" alt="" width="1088" height="816"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-7-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-7-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-7-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-7-1536x1151.jpg 1536w"
                                    sizes="(max-width: 1088px) 100vw, 1088px" data-lazy-loaded="true"
                                    style=""><noscript><img decoding="async" class="wp-image-41512 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-7-300x225.jpg" alt=""
                                        width="1088" height="816"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-7-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-7-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-7-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-7-1536x1151.jpg 1536w"
                                        sizes="(max-width: 1088px) 100vw, 1088px" /></noscript></a></p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">The restaurant serves the hot pot -
                                        smokeless grill model so it is always cool and clean, especially in the summer,
                                        the air conditioner is always on 24/7 to help you eat and drink comfortably
                                        without worrying about the heat. </font>
                                    <font style="vertical-align: inherit;">The main red tone design with a diverse and
                                        striking background helps diners feel lost in an exciting culinary adventure.
                                    </font>
                                </font>
                            </span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-6.jpg"><img
                                    src="/wp-content/uploads/2023/05/bbq-hotpot-6-300x169.jpg" decoding="async"
                                    class="wp-image-41511 aligncenter" alt="" width="1105" height="623"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-6-300x169.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-6-1024x576.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-6-768x432.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-6-1536x864.jpg 1536w"
                                    sizes="(max-width: 1105px) 100vw, 1105px" data-lazy-loaded="true"
                                    style=""><noscript><img decoding="async" class="wp-image-41511 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-6-300x169.jpg" alt=""
                                        width="1105" height="623"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-6-300x169.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-6-1024x576.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-6-768x432.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-6-1536x864.jpg 1536w"
                                        sizes="(max-width: 1105px) 100vw, 1105px" /></noscript></a></p>
                        <p>&nbsp;</p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">In particular, the restaurant supports party
                                        decorations with quality sound systems, lighting and "genuine" check-in
                                        backgrounds to help you and your relatives and friends feel secure to enjoy
                                        every party without hesitation. Measure how to set up properly.</font>
                                </font>
                            </span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-2.jpg"><img
                                    src="/wp-content/uploads/2023/05/bbq-hotpot-2-225x300.jpg" decoding="async"
                                    loading="lazy" class="wp-image-41507 aligncenter" alt="" width="994"
                                    height="1326"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-2-225x300.jpg 225w, /wp-content/uploads/2023/05/bbq-hotpot-2-768x1025.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-2-1151x1536.jpg 1151w, /wp-content/uploads/2023/05/bbq-hotpot-2.jpg 1536w"
                                    sizes="(max-width: 994px) 100vw, 994px" data-lazy-loaded="true"
                                    style=""><noscript><img decoding="async" loading="lazy"
                                        class="wp-image-41507 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-2-225x300.jpg" alt=""
                                        width="994" height="1326"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-2-225x300.jpg 225w, /wp-content/uploads/2023/05/bbq-hotpot-2-768x1025.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-2-1151x1536.jpg 1151w, /wp-content/uploads/2023/05/bbq-hotpot-2.jpg 1536w"
                                        sizes="(max-width: 994px) 100vw, 994px" /></noscript></a></p>
                        <h2><b>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Unique combination of BBQ Chicken and
                                        Hotpot&nbsp;</font>
                                </font>
                            </b></h2>
                        <p style="text-align: justify;"><span style="font-weight: 400;">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">BBQ Hotpot is always confident to be the
                                        leading restaurant in culinary excellence in Vietnam, with knowledge and 20
                                        years of experience in culinary nutrition implemented by experts and A-class
                                        chefs. </font>
                                    <font style="vertical-align: inherit;">The restaurant offers a unique hot pot -
                                        grill model, combined with more than 30 BBQ Chicken dishes that will definitely
                                        "please" even the most demanding people.</font>
                                </font>
                            </span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-8.jpg"><img
                                    src="/wp-content/uploads/2023/05/bbq-hotpot-8-241x300.jpg" decoding="async"
                                    loading="lazy" class="wp-image-41513 aligncenter" alt="" width="1199"
                                    height="1492"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-8-241x300.jpg 241w, /wp-content/uploads/2023/05/bbq-hotpot-8-823x1024.jpg 823w, /wp-content/uploads/2023/05/bbq-hotpot-8-768x955.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-8-1235x1536.jpg 1235w, /wp-content/uploads/2023/05/bbq-hotpot-8.jpg 1647w"
                                    sizes="(max-width: 1199px) 100vw, 1199px" data-lazy-loaded="true"
                                    style=""><noscript><img decoding="async" loading="lazy"
                                        class="wp-image-41513 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-8-241x300.jpg" alt=""
                                        width="1199" height="1492"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-8-241x300.jpg 241w, /wp-content/uploads/2023/05/bbq-hotpot-8-823x1024.jpg 823w, /wp-content/uploads/2023/05/bbq-hotpot-8-768x955.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-8-1235x1536.jpg 1235w, /wp-content/uploads/2023/05/bbq-hotpot-8.jpg 1647w"
                                        sizes="(max-width: 1199px) 100vw, 1199px" /></noscript></a></p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">Với mô hình lẩu – nướng, bạn
                                sẽ được lựa chọn combo theo số lượng người, sau đó gọi thêm các món lẻ để nhâm nhi cùng
                                món chính. Bạn sẽ được thưởng thức menu đồ nướng và nhúng lẩu đa dạng, tươi ngon như:
                                thịt ba chỉ, thịt bò cuốn nấm kim châm, thịt dải, bạch tuộc, nầm, chân gà rút xương,
                                sườn nướng…&nbsp;</span></p>
                        <p><span style="font-weight: 400;">Thực khách sẽ được chọn nướng không khói hoặc lẩu Thái hải
                                sản để thưởng thức trọn vẹn menu món đa dạng của nhà hàng. Tất cả nguyên liệu đều được
                                nhập mới mỗi ngày nên luôn đảm bảo độ tươi ngon và chất lượng.</span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-9.jpg"><img
                                    src="/wp-content/uploads/2023/05/bbq-hotpot-9-240x300.jpg" decoding="async"
                                    loading="lazy" class="wp-image-41514 aligncenter" alt="" width="1226"
                                    height="1532" data-lazy-loaded="true" style=""><noscript><img
                                        decoding="async" loading="lazy" class="wp-image-41514 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-9-240x300.jpg" alt=""
                                        width="1226" height="1532" /></noscript></a></p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">Đối với món gà BBQ – món khoái
                                khẩu của các em bé – được chế biến một cách độc đáo với hơn 30 món gà chuẩn vị Hàn Quốc
                                đầy hấp dẫn như: gà chiên, gà hun khói, gà nướng, gà rán giòn.. Bên ngoài giòn rụm, bên
                                trong mềm mọng, các món gà của BBQ Hotpot “đánh thức” mọi giác quan, đem lại trải nghiệm
                                ẩm thực thú vị cho nhiều thực khách.</span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-5.jpg"><img
                                    src="/wp-content/plugins/lazy-load/images/1x1.trans.gif"
                                    data-lazy-src="/wp-content/uploads/2023/05/bbq-hotpot-5-240x300.jpg"
                                    decoding="async" loading="lazy" class="wp-image-41510 aligncenter"
                                    alt="" width="1235" height="1543"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-5-240x300.jpg 240w, /wp-content/uploads/2023/05/bbq-hotpot-5-819x1024.jpg 819w, /wp-content/uploads/2023/05/bbq-hotpot-5-768x961.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-5.jpg 1125w"
                                    sizes="(max-width: 1235px) 100vw, 1235px"><noscript><img decoding="async"
                                        loading="lazy" class="wp-image-41510 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-5-240x300.jpg" alt=""
                                        width="1235" height="1543"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-5-240x300.jpg 240w, /wp-content/uploads/2023/05/bbq-hotpot-5-819x1024.jpg 819w, /wp-content/uploads/2023/05/bbq-hotpot-5-768x961.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-5.jpg 1125w"
                                        sizes="(max-width: 1235px) 100vw, 1235px" /></noscript></a></p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">Ngoài ra còn có những món ngon
                                khác cho bạn lựa chọn thêm tùy sở thích như: pizza, tokbokki, hamburger.. đều được chế
                                biến rất ngon miệng và tròn vị.</span></p>
                        <h2><b>Tại sao nên chọn BBQ Hotpot giữa “vũ trụ” hàng quán?</b></h2>
                        <p style="text-align: justify;"><span style="font-weight: 400;">BBQ Hotpot đem đến trải nghiệm
                                ẩm thực đa dạng với 3 mô hình khác nhau, đáp ứng mọi nhu cầu và mọi lứa tuổi. Nếu như
                                người lớn thích lẩu nướng để có thể nhâm nhi với chai soju thì các em nhỏ lại mê mẩn món
                                gà giòn thơm phức. Hơn thế, với nhóm đông người, nhà hàng lại càng là sự lựa chọn hợp lý
                                bởi phục vụ được sở thích của nhiều người, muốn ăn kiểu gì, BBQ Hotpot đều có đủ!</span>
                        </p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-4.jpg"><img
                                    src="/wp-content/plugins/lazy-load/images/1x1.trans.gif"
                                    data-lazy-src="/wp-content/uploads/2023/05/bbq-hotpot-4-300x225.jpg"
                                    decoding="async" loading="lazy" class="wp-image-41509 aligncenter"
                                    alt="" width="1229" height="922"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-4-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-4-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-4-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-4.jpg 1440w"
                                    sizes="(max-width: 1229px) 100vw, 1229px"><noscript><img decoding="async"
                                        loading="lazy" class="wp-image-41509 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-4-300x225.jpg" alt=""
                                        width="1229" height="922"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-4-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-4-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-4-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-4.jpg 1440w"
                                        sizes="(max-width: 1229px) 100vw, 1229px" /></noscript></a></p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">Mặc dù có nhiều mô hình đa
                                dạng, BBQ Hotpot lại có mức giá phải chăng, rất phù hợp cho các bạn học sinh, sinh viên,
                                hay cả người đi làm đều có thể cân nhắc. Vừa được ăn ngon, vừa có nhiều ưu đãi hấp dẫn,
                                đây cũng chính là điểm nhấn giúp nhà hàng luôn là điểm đến quen thuộc của hàng ngàn thực
                                khách. Đến ngay cả những diễn viên nổi tiếng như Lương Thanh cũng đã từng ghé quán
                                thưởng thức và thốt lên rằng “quá ngon và hấp dẫn!”.</span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-1.jpg"><img
                                    src="/wp-content/plugins/lazy-load/images/1x1.trans.gif"
                                    data-lazy-src="/wp-content/uploads/2023/05/bbq-hotpot-1-300x225.jpg"
                                    decoding="async" loading="lazy" class="wp-image-41516 aligncenter"
                                    alt="" width="1224" height="918"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-1-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-1-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-1-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-1-1536x1151.jpg 1536w"
                                    sizes="(max-width: 1224px) 100vw, 1224px"><noscript><img decoding="async"
                                        loading="lazy" class="wp-image-41516 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-1-300x225.jpg" alt=""
                                        width="1224" height="918"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-1-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-1-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-1-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-1-1536x1151.jpg 1536w"
                                        sizes="(max-width: 1224px) 100vw, 1224px" /></noscript></a></p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">Bên cạnh đó, đội ngũ nhân viên
                                tại đây cũng là một điểm cộng lớn khi luôn hết mình phục vụ thực khách, sự tận tâm, chu
                                đáo của các bạn nhân viên chính là một cách giúp nhà hàng có thể sát gần lại với thực
                                khách hơn.&nbsp;</span></p>
                        <p><a href="/wp-content/uploads/2023/05/bbq-hotpot-3.jpg"><img
                                    src="/wp-content/plugins/lazy-load/images/1x1.trans.gif"
                                    data-lazy-src="/wp-content/uploads/2023/05/bbq-hotpot-3-300x225.jpg"
                                    decoding="async" loading="lazy" class="wp-image-41508 aligncenter"
                                    alt="" width="1206" height="904"
                                    srcset="/wp-content/uploads/2023/05/bbq-hotpot-3-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-3-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-3-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-3-1536x1151.jpg 1536w"
                                    sizes="(max-width: 1206px) 100vw, 1206px"><noscript><img decoding="async"
                                        loading="lazy" class="wp-image-41508 aligncenter"
                                        src="/wp-content/uploads/2023/05/bbq-hotpot-3-300x225.jpg" alt=""
                                        width="1206" height="904"
                                        srcset="/wp-content/uploads/2023/05/bbq-hotpot-3-300x225.jpg 300w, /wp-content/uploads/2023/05/bbq-hotpot-3-1024x768.jpg 1024w, /wp-content/uploads/2023/05/bbq-hotpot-3-768x576.jpg 768w, /wp-content/uploads/2023/05/bbq-hotpot-3-1536x1151.jpg 1536w"
                                        sizes="(max-width: 1206px) 100vw, 1206px" /></noscript></a></p>
                        <p style="text-align: justify;"><span style="font-weight: 400;">Nếu bạn đang tìm kiếm một địa
                                điểm để “xả hơi” sau một tuần làm việc căng thẳng, muốn được tận hưởng những món ăn ngon
                                và tự do tán gẫu thoải mái thì chắc chắn không thể bỏ lỡ Lê Grill House </span><span
                                style="font-weight: 400;">Hãy liên hệ với Topgo qua số hotline: 0913515351 để được tư
                                vấn miễn phí và đặt bàn nhanh nhất cho một cuối tuần đầy ý nghĩa!&nbsp;</span></p>
                        <p><span style="font-weight: 400;">———————————————————</span></p>
                        <h3><b>TopGo – Chuyên gia bố trí chỗ ăn chỗ chơi. Top những điểm đến thú vị và chất lượng.</b>
                        </h3>
                        <p><b><i>Hợp tác quảng bá, đặt chỗ những địa điểm hàng đầu và uy tín. Hotline:
                                    0913515351</i></b></p>
                        <table>
                            <tbody>
                                <tr>
                                    <td><a href="/ha-noi/restaurants/"><span style="font-weight: 400;">Top nhà hàng
                                                cao cấp</span></a>
                                        <p></p>
                                        <p><a href="/ha-noi/bars-coffee/"><span style="font-weight: 400;">Top bar cao
                                                    cấp</span></a></p>
                                        <p><a href="/ha-noi/karaoke/"><span style="font-weight: 400;">Top karaoke cao
                                                    cấp</span></a></p>
                                        <p><a href="/ha-noi/bars-coffee/"><span style="font-weight: 400;">Top bar
                                                    &amp; café cao cấp</span></a></p>
                                        <p><a href="/ha-noi/restaurants/"><span style="font-weight: 400;">Top nhà hàng
                                                    Hà Nội</span></a></p>
                                        <p><a href="/ha-noi/karaoke/"><span style="font-weight: 400;">Top karaoke Hà
                                                    Nội</span></a></p>
                                        <p><a href="/ha-noi/bars-coffee/"><span style="font-weight: 400;">Top bar
                                                    &amp; café Hà Nội</span></a></p>
                                        <p><a href="/ho-chi-minh/restaurants-ho-chi-minh/"><span
                                                    style="font-weight: 400;">Top nhà hàng Hồ Chí Minh</span></a></p>
                                        <p><a href="/ho-chi-minh/karaoke-ho-chi-minh/"><span
                                                    style="font-weight: 400;">Top karaoke Hồ Chí Minh</span></a></p>
                                        <p><a href="/ho-chi-minh/bar-coffee-ho-chi-minh/"><span
                                                    style="font-weight: 400;">Top bar &amp; café Hồ Chí Minh</span></a>
                                        </p>
                                    </td>
                                    <td><a href="/ha-noi/topevents/"><span style="font-weight: 400;">Top sự kiện phòng
                                                trà Hà Nội</span></a>
                                        <p></p>
                                        <p><a href="/ho-chi-minh/top-events/"><span style="font-weight: 400;">Top sự
                                                    kiện phòng trà Hồ Chí
                                                    Minh</span></a></p>
                                        <p><a href="https://topgo.v/"><span style="font-weight: 400;">Top nhà hàng món
                                                    việt</span></a></p>
                                        <p><a href="/ha-noi/restaurants/"><span style="font-weight: 400;">Top nhà hàng
                                                    Âu tại Hà Nội</span></a></p>
                                        <p><a href="/ha-noi/restaurants/"><span style="font-weight: 400;">Top các nhà
                                                    hàng ngon Hà Nội</span></a>
                                        </p>
                                        <p><a href="/ha-noi/restaurants/"><span style="font-weight: 400;">Top nhà hàng
                                                    hải sản Hà Nội</span></a>
                                        </p>
                                        <p><a href="/ho-chi-minh/restaurants-ho-chi-minh/"><span
                                                    style="font-weight: 400;">Top nhà hàng steak cao cấp</span></a></p>
                                        <p><a href="/ho-chi-minh/restaurants-ho-chi-minh/"><span
                                                    style="font-weight: 400;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Top seafood restaurants
                                                            in Ho Chi Minh</font>
                                                    </font>
                                                </span></a></p>
                                        <p><a href="/ho-chi-minh/restaurants-ho-chi-minh/"><span
                                                    style="font-weight: 400;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Top European restaurants
                                                            in Ho Chi Minh</font>
                                                    </font>
                                                </span></a></p>
                                        <p><a href="/ho-chi-minh/restaurants-ho-chi-minh/"><span
                                                    style="font-weight: 400;">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Top Vietnamese
                                                            restaurants in Ho Chi Minh</font>
                                                    </font>
                                                </span></a></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div><a href="#" class="readmore-h" data-readmore-toggle="" aria-controls="rmjs-1"><i
                            class="fa fa-plus-square-o"></i>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">see more</font>
                        </font>
                    </a>
                </div>
            </div>
        </div><!-- .tier-row -->

        <div class="tier-row datban-location cleafix" id="ticket-map"
            style="background: url(' /wp-content/uploads/2023/04/z4393843933626_127edc72196fbd6beba1571fb6f6483b.jpg ') no-repeat; background-size:cover;">
            <div class="container-fluid">
                <div class="col-sm-8 sodove">
                    <div class="danh-sach-thuc-don">
                        <a href="#lightbox" data-toggle="modal"><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Menu</font>
                                </font>
                            </span></a>
                        <span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Click on MENU to view the menu</font>
                            </font><br> <img src="/wp-content/themes/topgo/images/red-arrow-left-md.png">
                        </span>
                    </div>
                    <div class="modal fade and slide" id="lightbox">
                        <div class="modal-dialog">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">×</font>
                                            </font>
                                        </span></button>
                                </div>
                                <div class="modal-body">
                                    <div id="slider-menu-content" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item">
                                                <img
                                                    src="/wp-content/uploads/2023/04/322475607_633498018776596_6847293295172165636_n.jpg">
                                            </div>
                                            <div class="item">
                                                <img
                                                    src="/wp-content/uploads/2023/04/321615538_1801388410260150_3891525821179094387_n.jpg">
                                            </div>
                                            <div class="item active">
                                                <img
                                                    src="/wp-content/uploads/2023/04/277533996_7149949975078670_4230690420763323630_n.jpg">
                                            </div>
                                        </div><!-- /.carousel-inner -->

                                        <a class="left carousel-control" href="#slider-menu-content" role="button"
                                            data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#slider-menu-content" role="button"
                                            data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div><!-- /.modal-body -->
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <div class="col-sm-4 datve">
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Reservations</font>
                            </font>
                        </span> <a href="tel:0913515351">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">0913.51.53.51</font>
                            </font>
                        </a></h3>
                    <div class="form-dat-cho">

                        <div class="wpcf7 js" id="wpcf7-f307-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="/bbq-hotpot/#wpcf7-f307-o1" method="post" class="wpcf7-form init"
                                aria-label="Contact form" novalidate="novalidate" data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="307">
                                    <input type="hidden" name="_wpcf7_version" value="5.8">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f307-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="0">
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                    <input type="hidden" name="_wpcf7_recaptcha_response"
                                        value="03AFcWeA7JZ-vQDl60w8nc2nZM5e3rTWy3P_eH0kBMZgxXRzQ3r_mrdDi8IRlnXE41IjR8mYzivMO0dzMQGqbzjJ7PPCRDAVF-LqVUtn-5btb3QZgxQ00o3b5cDVE_tyRmRebE3Pw6kSzL8UHAZbB0t1Xf-VhdzR0kG9MekuIzTA7cjUC_sRTPZ0EMa-qvkhtOHw-PrsJZ1YeAk9U3ZKAt3w7JDu4JAgFwKoJtlDit4xdxWXgLo8MXUB9KORdl8b0-vAMKR9tXnCi8JWbuZmfCOs3ijhcjyE2hoTtm3lxkacWUitLKF5xHwVSUxK6wXdw32UAESCa7PqNu67fBpW60auuk0WiPRBgHX7n7nncUbV7esbtQqb632K0X12RsX2dulTDjYuUm5Y1f7DpZY1AJcTj7WXXDX5tGnBuGWf9wsM-MEv2tQs1cxstMd4ZHcciyvsZxWq4PB5OyOq5pl5_k2xEO94XsY4MeY02fUeB6yYg1JBtSXlqXbXz7zas6VpUHvnsBXAITqPYfq1w5JPCtgfcpQnlE9Kva-oe2BVOP6MMrICNdHVLA66W9W-WN-DyLdBuScJgDZx7xOA5Pae9DZG5FjX80JBqpWLcCBxW1UjFEECWB9CzFIAI">
                                </div>
                                <span class="wpcf7-form-control-wrap dynamicnameurld"
                                    data-name="dynamicnameurld"><input type="hidden" name="dynamicnameurld"
                                        size="40"
                                        class="wpcf7-form-control wpcf7-hidden wpcf7dtx wpcf7dtx-hidden"
                                        aria-invalid="false" value="/bbq-hotpot/" autocomplete="off"></span>
                                <div class="form-row form-row-col">
                                    <div class="tite-form-row">
                                        <p><label>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Information</font>
                                                </font>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="cotent-form-row clearfix">
                                        <div class="col-md-4 col-sm-12">
                                            <p><span class="wpcf7-form-control-wrap" data-name="songuoi"><select
                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false" name="songuoi">
                                                        <option value="">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Amount of people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="1 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">1 person</font>
                                                            </font>
                                                        </option>
                                                        <option value="2 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">2 people</font>
                                                            </font>
                                                        </option>
                                                        <option value="3 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">3 people</font>
                                                            </font>
                                                        </option>
                                                        <option value="4 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">4 persons</font>
                                                            </font>
                                                        </option>
                                                        <option value="5 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">5 people</font>
                                                            </font>
                                                        </option>
                                                        <option value="6 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">6 people</font>
                                                            </font>
                                                        </option>
                                                        <option value="7 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">7 people</font>
                                                            </font>
                                                        </option>
                                                        <option value="8 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">8 people</font>
                                                            </font>
                                                        </option>
                                                        <option value="9 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">9 people</font>
                                                            </font>
                                                        </option>
                                                        <option value="10 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">10 peoples
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="11 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">11 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="12 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">12 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="13 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">13 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="14 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">14 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="15 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">15 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="16 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">16 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="17 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">17 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="18 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">18 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="19 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">19 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="20 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">20 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="21 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">21 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="22 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">22 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="23 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">23 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="24 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">24 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="25 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">25 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="26 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">26 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="27 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">27 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="28 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">28 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="29 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">29 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="30 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">30 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="31 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">31 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="32 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">32 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="333 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">333 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="34 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">34 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="35 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">35 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="36 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">36 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="37 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">37 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="38 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">38 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="39 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">39 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="40 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">40 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="41 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">41 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="42 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">42 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="43 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">43 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="44 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">44 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="45 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">45 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="46 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">46 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="47 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">47 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="48 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">48 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="49 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">49 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="50 người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">50 people
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="50 + người">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">50+ people
                                                                </font>
                                                            </font>
                                                        </option>
                                                    </select></span>
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <p><span class="wpcf7-form-control-wrap" data-name="ngaypiker"><input
                                                        size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required walcf7-datepicker"
                                                        aria-required="true" aria-invalid="false" placeholder="Day"
                                                        value="" type="text" name="ngaypiker"
                                                        readonly=""></span>
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <p><span class="wpcf7-form-control-wrap" data-name="giodat"><select
                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                                        aria-required="true" aria-invalid="false" name="giodat">
                                                        <option value="">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Hour</font>
                                                            </font>
                                                        </option>
                                                        <option value="00:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">00:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="00:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">00:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="01:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">01:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="01:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">01:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="02:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">02:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="02:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">02:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="03:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">03:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="03:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">03:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="04:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">04:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="04:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">04:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="05:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">05:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="05:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">05:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="06:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">06:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="06:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">06:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="07:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">07:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="07:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">07:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="08:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">8:00 am</font>
                                                            </font>
                                                        </option>
                                                        <option value="08:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">08:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="09:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">09:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="09:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">09:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="10:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">10:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="10:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">half past ten
                                                                </font>
                                                            </font>
                                                        </option>
                                                        <option value="11:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">11:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="11:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">half past
                                                                    eleven</font>
                                                            </font>
                                                        </option>
                                                        <option value="12:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">12:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="12:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">12:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="13:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">1:00 pm</font>
                                                            </font>
                                                        </option>
                                                        <option value="13:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">13:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="14:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">14:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="14:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">14:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="15:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">15:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="15:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">15:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="16:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">16:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="16:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">16:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="17:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">17:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="17:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">17:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="18:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">18:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="18:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">18:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="19:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">7:00 pm</font>
                                                            </font>
                                                        </option>
                                                        <option value="19:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">19:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="20:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">20:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="20:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">20:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="21:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">21:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="21:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">9:30 p.m</font>
                                                            </font>
                                                        </option>
                                                        <option value="22:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">22:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="22:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">22:30</font>
                                                            </font>
                                                        </option>
                                                        <option value="23:00">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">23:00</font>
                                                            </font>
                                                        </option>
                                                        <option value="23:30">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">23:30</font>
                                                            </font>
                                                        </option>
                                                    </select></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="tite-form-row">
                                        <p><label>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Full name</font>
                                                </font>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="cotent-form-row">
                                        <p><span class="wpcf7-form-control-wrap" data-name="hoten"><input
                                                    size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Example: A. Long (Your Name)" value=""
                                                    type="text" name="hoten"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="tite-form-row">
                                        <p><label>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Phone number</font>
                                                </font>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="cotent-form-row">
                                        <p><span class="wpcf7-form-control-wrap" data-name="sodienthoai"><input
                                                    size="40" maxlength="10"
                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Mobile (Phone Number)" value=""
                                                    type="tel" name="sodienthoai"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="tite-form-row">
                                        <p><label>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Note</font>
                                                </font>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="cotent-form-row">
                                        <p><span class="wpcf7-form-control-wrap" data-name="your-message">
                                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                    placeholder="Tell us if you have a special request - Enter your email address and tell us if you have a special request"
                                                    name="your-message"></textarea>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="cotent-form-row">

                                    </div>
                                </div>
                                <div class="form-row">
                                    <p>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"><input
                                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                                    type="button" value="Send now"></font>
                                        </font><span class="wpcf7-spinner"></span>
                                    </p>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .tier-row -->

        <div class="tier-row cleafix" id="events-location">
            <div class="container">
                <h3 class="title-post-template-tier"><span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">The event is taking place</font>
                        </font>
                    </span></h3>
                <div class="post-row clearfix">

                    <div class="col-xs-6 column-post column-post-marginb">
                        <div class="column-post-in column-post-in-h3">
                            <div class="column-post-img">
                                <a href="/jinro-bbq-huynh-thuc-khang/"><img
                                        src="/wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14.jpg"
                                        width="900" height="556"
                                        class="attachment-full size-full wp-post-image" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="/wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14.jpg 900w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-300x185.jpg 300w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-768x474.jpg 768w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-278x171.jpg 278w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-373x231.jpg 373w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-565x348.jpg 565w"
                                        sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                        style=""><noscript><img width="900" height="556"
                                            src="/wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14.jpg"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14.jpg 900w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-300x185.jpg 300w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-768x474.jpg 768w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-278x171.jpg 278w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-373x231.jpg 373w, /wp-content/uploads/2023/11/JINRO-BBQ-Huynh-THuc-Khang-14-565x348.jpg 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                <div class="name-book">
                                    <a class="cat-name cat-name3" href="/jinro-bbq-huynh-thuc-khang/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                RESTAURANTS </font>
                                        </font>
                                    </a>
                                </div>
                            </div>
                            <div class="column-post-c">
                                <div class="column-post-day">
                                    <span>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">THG 11</font>
                                        </font>
                                    </span><br>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            24 </font>
                                    </font>
                                </div>
                                <h3 class="column-post-t">
                                    <a href="/jinro-bbq-huynh-thuc-khang/" title="JINRO BBQ – Huynh Thuc Khang">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">JINRO BBQ – Huynh Thuc Khang</font>
                                        </font>
                                    </a>
                                </h3>
                                <div class="column-post-adress"><span><i class="fa fa-map-marker"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Opposite 63 Huynh Thuc Khang, Dong
                                                Da, Hanoi</font>
                                        </font>
                                    </span> <span><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">0913515351</font>
                                            </font>
                                        </a></span></div>
                                <div class="excerpt column-post-excerpt">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Must be! </font>
                                        <font style="vertical-align: inherit;">You are looking for a place "Korean
                                            Grilled Hot Pot buffet - delicious, diverse food and attractive deals!"
                                        </font>
                                        <font style="vertical-align: inherit;">Come to JINRO BBQ - Huynh Thuc Khang.
                                        </font>
                                        <font style="vertical-align: inherit;">This is one of the establishments of
                                            the Jinro BBQ chain - always leading in the rankings of…</font>
                                    </font><a href="/jinro-bbq-huynh-thuc-khang/" class="more-link">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Continue reading</font>
                                        </font><span class="screen-reader-text">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">JINRO BBQ – Huynh Thuc Khang
                                                </font>
                                            </font>
                                        </span> <span class="meta-nav">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">→</font>
                                            </font>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 column-post column-post-marginb">
                        <div class="column-post-in column-post-in-h48">
                            <div class="column-post-img">
                                <a href="/top-nha-hang-do-nuong-han-quoc-vip-nhat-ha-noi/"><img
                                        src="/wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat.png"
                                        width="900" height="556"
                                        class="attachment-full size-full wp-post-image" alt=""
                                        decoding="async" loading="lazy"
                                        srcset="/wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat.png 900w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-300x185.png 300w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-768x474.png 768w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-278x171.png 278w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-373x231.png 373w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-565x348.png 565w"
                                        sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                        style=""><noscript><img width="900" height="556"
                                            src="/wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat.png"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat.png 900w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-300x185.png 300w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-768x474.png 768w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-278x171.png 278w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-373x231.png 373w, /wp-content/uploads/2023/11/Top-nha-hang-do-nuong-Han-Quoc-VIP-nhat-565x348.png 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                <div class="name-book">
                                    <a class="cat-name cat-name48"
                                        href="/top-nha-hang-do-nuong-han-quoc-vip-nhat-ha-noi/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                TOP SUGGESTIONS </font>
                                        </font>
                                    </a>
                                </div>
                            </div>
                            <div class="column-post-c">
                                <div class="column-post-day">
                                    <span>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">THG 07</font>
                                        </font>
                                    </span><br>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            01 </font>
                                    </font>
                                </div>
                                <h3 class="column-post-t">
                                    <a href="/top-nha-hang-do-nuong-han-quoc-vip-nhat-ha-noi/"
                                        title="Top VIP Korean barbecue restaurants in Hanoi">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Top VIP Korean barbecue restaurants
                                                in Hanoi</font>
                                        </font>
                                    </a>
                                </h3>
                                <div class="excerpt column-post-excerpt">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">You are one of Hanoi's gourmet grilled
                                            food connoisseurs. </font>
                                        <font style="vertical-align: inherit;">You love Korean barbecue. </font>
                                        <font style="vertical-align: inherit;">Hot pot fans cannot ignore the article
                                            below. </font>
                                        <font style="vertical-align: inherit;">TopGo will immediately share with you
                                            the Top VIP Korean barbecue restaurants in Hanoi today. </font>
                                        <font style="vertical-align: inherit;">When …</font>
                                    </font><a href="/top-nha-hang-do-nuong-han-quoc-vip-nhat-ha-noi/"
                                        class="more-link">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Continue reading</font>
                                        </font><span class="screen-reader-text">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Top VIP Korean barbecue
                                                    restaurants in Hanoi</font>
                                            </font>
                                        </span> <span class="meta-nav">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">→</font>
                                            </font>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tier-row cleafix" id="artists-participating">
            <div class="container">
                <div class="row">
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Image gallery</font>
                            </font>
                        </span></h3>
                    <script>
                        var images = [
                            '/wp-content/uploads/2023/04/1-7.jpg',
                            '/wp-content/uploads/2023/04/2-6.jpg',
                            '/wp-content/uploads/2023/04/3-6.jpg',
                            '/wp-content/uploads/2023/04/4-6.jpg',
                            '/wp-content/uploads/2023/04/5-5.jpg',
                            '/wp-content/uploads/2023/04/z4393844658588_e53de2dc47049929b6697549bbc1af7c.jpg',
                            '/wp-content/uploads/2023/04/z4393844649506_2078666f9dafbd0b6c64953aa290f85b.jpg',
                            '/wp-content/uploads/2023/04/z4393844653686_ef479041886fc3eab2a21360070aff49.jpg',
                            '/wp-content/uploads/2023/04/z4393844646604_726ebfbb59ffb5ec9c6999f871e56531.jpg',
                            '/wp-content/uploads/2023/04/z4393844643354_d1d1588784145816434f47de12594e7b.jpg',
                        ];
                        $(function() {
                            $('#gallery1').imagesGrid({
                                images: images
                            });
                        });
                    </script>
                    <div id="gallery1" class="imgs-grid imgs-grid-5">
                        <div class="imgs-grid-image">
                            <div class="image-wrap"><img src="/wp-content/uploads/2023/04/1-7.jpg" alt=""
                                    title=""></div>
                        </div>
                        <div class="imgs-grid-image">
                            <div class="image-wrap"><img src="/wp-content/uploads/2023/04/2-6.jpg" alt=""
                                    title=""></div>
                        </div>
                        <div class="imgs-grid-image">
                            <div class="image-wrap"><img src="/wp-content/uploads/2023/04/3-6.jpg" alt=""
                                    title=""></div>
                        </div>
                        <div class="imgs-grid-image">
                            <div class="image-wrap"><img src="/wp-content/uploads/2023/04/4-6.jpg" alt=""
                                    title=""></div>
                        </div>
                        <div class="imgs-grid-image">
                            <div class="image-wrap"><img src="/wp-content/uploads/2023/04/5-5.jpg" alt=""
                                    title="">
                                <div class="view-all"><span class="view-all-cover"></span><span
                                        class="view-all-text">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">+ 5</font>
                                        </font>
                                    </span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- .tier-row -->

        <div class="tier-row cleafix" id="organizer">
            <div class="container">
                <div class="row">
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Map</font>
                            </font>
                        </span></h3>
                </div>
            </div>
            <div class="bando-location clearfix">
                <p><iframe loading="lazy" style="border: 0;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1410134754724!2d105.82174787467976!3d21.027042980621825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab06476de345%3A0x8da321a2ae619666!2sBBQ%20HOTPOT!5e0!3m2!1svi!2s!4v1685551266896!5m2!1svi!2s"
                        width="600" height="450" allowfullscreen="allowfullscreen"></iframe></p>
            </div>
        </div><!-- .tier-row -->
 

        <div class="tier-row cleafix">
            <div class="container">
                <div class="row">
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Maybe you will like it</font>
                            </font>
                        </span></h3>
                    <div class="post-row clearfix">


                    </div><!-- .post-intro -->
                </div>
            </div>
        </div><!-- .tier-row -->

        <div class="tier-row cleafix">
            <div class="container">
                <div class="row">
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Combos &amp; Deals</font>
                            </font>
                        </span></h3>
                    <div class="post-row clearfix">

                        <div class="col-xs-3 column-post">
                            <div class="column-post-in column-post-in-h4">
                                <div class="column-post-img">
                                    <a href="/chuyen-mua-sieu-uu-dai-chinh-thuy-ha-noi/"><img
                                            src="/wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1.png"
                                            width="900" height="556"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1.png 900w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-300x185.png 300w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-768x474.png 768w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-278x171.png 278w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-373x231.png 373w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-565x348.png 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style=""><noscript><img width="900" height="556"
                                                src="/wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1.png 900w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-300x185.png 300w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-768x474.png 768w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-278x171.png 278w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-373x231.png 373w, /wp-content/uploads/2023/10/Chinh-Thuy-Ha-Noi-3-1-565x348.png 565w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                    <div class="name-book">

                                        <a class="cat-name cat-name4"
                                            href="/chuyen-mua-sieu-uu-dai-chinh-thuy-ha-noi/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    COMBO &amp; DEALS </font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/chuyen-mua-sieu-uu-dai-chinh-thuy-ha-noi/"
                                            title="Changing seasons with super incentives - Chinh Thuy Hanoi">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Changing seasons with super
                                                    incentives - Chinh Thuy Hanoi</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="column-post-adress"><span><i class="fa fa-map-marker"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">23 Nguyen Dinh Chieu, Nguyen
                                                    Du, Hai Ba Trung, Hanoi</font>
                                            </font>
                                        </span> <span><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">0913515351</font>
                                                </font>
                                            </a></span></div>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">It's been raining in Hanoi these
                                                past few days. </font>
                                            <font style="vertical-align: inherit;">Warm your belly on a rainy autumn
                                                day with seafood at the 5-star luxury restaurant Chinh Thuy. </font>
                                            <font style="vertical-align: inherit;">This weather is perfect for eating
                                                seafood. </font>
                                            <font style="vertical-align: inherit;">Fresh seafood and imported seafood
                                                depending on customer's taste. </font>
                                            <font style="vertical-align: inherit;">…</font>
                                        </font><a href="/chuyen-mua-sieu-uu-dai-chinh-thuy-ha-noi/"
                                            class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Changing seasons with super
                                                        incentives - Chinh Thuy Hanoi</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-3 column-post">
                            <div class="column-post-in column-post-in-h4">
                                <div class="column-post-img">
                                    <a href="/dai-tiec-lau-ngon-tram-mon-tai-to-hop-cong-vien-nho/"><img
                                            src="/wp-content/uploads/2023/09/cong-vien-nho-4.jpg" width="1600"
                                            height="1070" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/09/cong-vien-nho-4.jpg 1600w, /wp-content/uploads/2023/09/cong-vien-nho-4-300x201.jpg 300w, /wp-content/uploads/2023/09/cong-vien-nho-4-1024x685.jpg 1024w, /wp-content/uploads/2023/09/cong-vien-nho-4-768x514.jpg 768w, /wp-content/uploads/2023/09/cong-vien-nho-4-1536x1027.jpg 1536w"
                                            sizes="(max-width: 1600px) 100vw, 1600px" data-lazy-loaded="true"
                                            style=""><noscript><img width="1600" height="1070"
                                                src="/wp-content/uploads/2023/09/cong-vien-nho-4.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/09/cong-vien-nho-4.jpg 1600w, /wp-content/uploads/2023/09/cong-vien-nho-4-300x201.jpg 300w, /wp-content/uploads/2023/09/cong-vien-nho-4-1024x685.jpg 1024w, /wp-content/uploads/2023/09/cong-vien-nho-4-768x514.jpg 768w, /wp-content/uploads/2023/09/cong-vien-nho-4-1536x1027.jpg 1536w"
                                                sizes="(max-width: 1600px) 100vw, 1600px" /></noscript></a>
                                    <div class="name-book">

                                        <a class="cat-name cat-name4"
                                            href="/dai-tiec-lau-ngon-tram-mon-tai-to-hop-cong-vien-nho/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    COMBO &amp; DEALS </font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/dai-tiec-lau-ngon-tram-mon-tai-to-hop-cong-vien-nho/"
                                            title="Hundreds of delicious hot pot parties at the Small Park complex">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Hundreds of delicious hot pot
                                                    parties at the Small Park complex</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="column-post-adress"><span><i class="fa fa-map-marker"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">No. 36, Lane 76 - An Duong -
                                                    Tay Ho - Hanoi</font>
                                            </font>
                                        </span> <span><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">0913515351</font>
                                                </font>
                                            </a></span></div>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">In the cool autumn weather of
                                                Hanoi, the golden sunlight softens behind the green trees. It's great to
                                                gather with relatives and friends to enjoy something warm, spicy, and
                                                rich. </font>
                                            <font style="vertical-align: inherit;">With a spacious, airy space and a
                                                rich menu offering…</font>
                                        </font><a href="/dai-tiec-lau-ngon-tram-mon-tai-to-hop-cong-vien-nho/"
                                            class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Hundreds of delicious hot
                                                        pot parties at the Small Park complex</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-3 column-post">
                            <div class="column-post-in column-post-in-h4">
                                <div class="column-post-img">
                                    <a href="/5-sieu-pham-cocktailk-moi-rat-trung-thu-majesty-skybar/"><img
                                            src="/wp-content/uploads/2023/09/Majesty-Skybar-2.jpg" width="900"
                                            height="556" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/09/Majesty-Skybar-2.jpg 900w, /wp-content/uploads/2023/09/Majesty-Skybar-2-300x185.jpg 300w, /wp-content/uploads/2023/09/Majesty-Skybar-2-768x474.jpg 768w, /wp-content/uploads/2023/09/Majesty-Skybar-2-278x171.jpg 278w, /wp-content/uploads/2023/09/Majesty-Skybar-2-373x231.jpg 373w, /wp-content/uploads/2023/09/Majesty-Skybar-2-565x348.jpg 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style=""><noscript><img width="900" height="556"
                                                src="/wp-content/uploads/2023/09/Majesty-Skybar-2.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/09/Majesty-Skybar-2.jpg 900w, /wp-content/uploads/2023/09/Majesty-Skybar-2-300x185.jpg 300w, /wp-content/uploads/2023/09/Majesty-Skybar-2-768x474.jpg 768w, /wp-content/uploads/2023/09/Majesty-Skybar-2-278x171.jpg 278w, /wp-content/uploads/2023/09/Majesty-Skybar-2-373x231.jpg 373w, /wp-content/uploads/2023/09/Majesty-Skybar-2-565x348.jpg 565w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                    <div class="name-book">

                                        <a class="cat-name cat-name4"
                                            href="/5-sieu-pham-cocktailk-moi-rat-trung-thu-majesty-skybar/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    COMBO &amp; DEALS </font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/5-sieu-pham-cocktailk-moi-rat-trung-thu-majesty-skybar/"
                                            title="5 new super cocktails &quot;very Mid-Autumn Festival&quot; - Majesty Skybar">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">5 new super cocktails "very
                                                    Mid-Autumn Festival" - Majesty Skybar</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="column-post-adress"><span><i class="fa fa-map-marker"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">8th floor, La Sinfonia Majesty
                                                    Hotel &amp; Spa, 1 Cau Go, Hoan Kiem District, City. </font>
                                                <font style="vertical-align: inherit;">Hanoi</font>
                                            </font>
                                        </span> <span><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">0913515351</font>
                                                </font>
                                            </a></span></div>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Tung Ring Ring! </font>
                                            <font style="vertical-align: inherit;">The atmosphere of the moon season
                                                has filled Majesty Skybar with the appearance of a set of 5 new cocktail
                                                masterpieces. </font>
                                            <font style="vertical-align: inherit;">From the flavors, colors to the
                                                "very Mid-Autumn Festival" spirit, it is guaranteed to make diners
                                                happy, drunk and exhausted. </font>
                                            <font style="vertical-align: inherit;">With only 250,000 VND/cocktail,
                                                with…</font>
                                        </font><a href="/5-sieu-pham-cocktailk-moi-rat-trung-thu-majesty-skybar/"
                                            class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">5 new super cocktails "very
                                                        Mid-Autumn Festival" - Majesty Skybar</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-3 column-post">
                            <div class="column-post-in column-post-in-h4">
                                <div class="column-post-img">
                                    <a href="/suong-suong-uu-dai-mood-changer-tai-eleven/"><img
                                            src="/wp-content/uploads/2023/09/Mood-changer-Eleven-3.jpg"
                                            width="900" height="556"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/09/Mood-changer-Eleven-3.jpg 900w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-300x185.jpg 300w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-768x474.jpg 768w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-278x171.jpg 278w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-373x231.jpg 373w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-565x348.jpg 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style=""><noscript><img width="900" height="556"
                                                src="/wp-content/uploads/2023/09/Mood-changer-Eleven-3.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/09/Mood-changer-Eleven-3.jpg 900w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-300x185.jpg 300w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-768x474.jpg 768w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-278x171.jpg 278w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-373x231.jpg 373w, /wp-content/uploads/2023/09/Mood-changer-Eleven-3-565x348.jpg 565w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                    <div class="name-book">

                                        <a class="cat-name cat-name4"
                                            href="/suong-suong-uu-dai-mood-changer-tai-eleven/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    COMBO &amp; DEALS </font>
                                            </font>
                                        </a>

                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/suong-suong-uu-dai-mood-changer-tai-eleven/"
                                            title="“Mist” MOOD CHANGER promotion at Eleven">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">“Mist” MOOD CHANGER promotion
                                                    at Eleven</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="column-post-adress"><span><i class="fa fa-map-marker"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">1 Ward Nguyen Van To, Cua Dong,
                                                    Hoan Kiem, Hanoi</font>
                                            </font>
                                        </span> <span><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">0913515351</font>
                                                </font>
                                            </a></span></div>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">You are losing your “Mood” after
                                                the weekend. </font>
                                            <font style="vertical-align: inherit;">Or lethargic and tired? </font>
                                            <font style="vertical-align: inherit;">Don't worry. </font>
                                            <font style="vertical-align: inherit;">There's MOOD CHANGER at Emotion
                                                Station Eleven. </font>
                                            <font style="vertical-align: inherit;">The weekend is running out of
                                                energy, so if you don't go out with your friends at the beginning of the
                                                week, it's your fault. </font>
                                            <font style="vertical-align: inherit;">Join TopGo to…</font>
                                        </font><a href="/suong-suong-uu-dai-mood-changer-tai-eleven/"
                                            class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">“Mist” MOOD CHANGER
                                                        promotion at Eleven</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .post-intro -->
                    <div class="view-more-column clearfix"><a href="/combo-deals/">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">See more outstanding Combos &amp; Deals</font>
                            </font><i class="fa fa-angle-double-right"></i>
                        </a></div>
                </div><!-- .container -->
            </div><!-- .row -->
        </div><!-- .tier-row -->
        <div class="tier-row cleafix">
            <div class="container">
                <div class="row">
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Top suggestions</font>
                            </font>
                        </span></h3>
                    <div class="post-row clearfix">
                        <div class="col-xs-4 column-post">
                            <div class="column-post-in column-post-in-h48">
                                <div class="column-post-img">
                                    <a href="/top-5-nha-hang-do-au-dang-den-dip-noel-o-quan-hoan-kiem/"><img
                                            src="/wp-content/uploads/2023/12/dang-den-dip-Noel-2023.jpg"
                                            width="900" height="556"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/12/dang-den-dip-Noel-2023.jpg 900w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-300x185.jpg 300w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-768x474.jpg 768w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-278x171.jpg 278w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-373x231.jpg 373w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-565x348.jpg 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style=""><noscript><img width="900" height="556"
                                                src="/wp-content/uploads/2023/12/dang-den-dip-Noel-2023.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/12/dang-den-dip-Noel-2023.jpg 900w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-300x185.jpg 300w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-768x474.jpg 768w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-278x171.jpg 278w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-373x231.jpg 373w, /wp-content/uploads/2023/12/dang-den-dip-Noel-2023-565x348.jpg 565w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                    <div class="name-book">


                                        <a class="cat-name cat-name48"
                                            href="/top-5-nha-hang-do-au-dang-den-dip-noel-o-quan-hoan-kiem/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    TOP SUGGESTIONS </font>
                                            </font>
                                        </a>
                                        <a class="book-k" href="tel:0913515351">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Book now</font>
                                            </font>
                                        </a>
                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/top-5-nha-hang-do-au-dang-den-dip-noel-o-quan-hoan-kiem/"
                                            title="Top 5 European restaurants worth visiting for Christmas in Hoan Kiem district">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Top 5 European restaurants
                                                    worth visiting for Christmas in Hoan Kiem district</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Christmas is probably the most
                                                emotional time. </font>
                                            <font style="vertical-align: inherit;">That is the moment the couple has
                                                dinner together, holds hands, talks and enjoys a romantic dinner
                                                together. </font>
                                            <font style="vertical-align: inherit;">If this Christmas you haven't
                                                chosen a restaurant to hold a warm party...</font>
                                        </font><a href="/top-5-nha-hang-do-au-dang-den-dip-noel-o-quan-hoan-kiem/"
                                            class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Top 5 European restaurants
                                                        worth visiting for Christmas in Hoan Kiem district</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 column-post">
                            <div class="column-post-in column-post-in-h48">
                                <div class="column-post-img">
                                    <a href="/top-5-nha-hang-co-khong-gian-rong-to-chuc-tat-nien-o-quan-tay-ho/"><img
                                            src="/wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1.jpg"
                                            width="900" height="556"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1.jpg 900w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-300x185.jpg 300w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-768x474.jpg 768w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-278x171.jpg 278w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-373x231.jpg 373w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-565x348.jpg 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style=""><noscript><img width="900" height="556"
                                                src="/wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1.jpg 900w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-300x185.jpg 300w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-768x474.jpg 768w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-278x171.jpg 278w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-373x231.jpg 373w, /wp-content/uploads/2023/12/Top-5-nha-hang-co-khong-gian-rong-1-565x348.jpg 565w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                    <div class="name-book">


                                        <a class="cat-name cat-name48"
                                            href="/top-5-nha-hang-co-khong-gian-rong-to-chuc-tat-nien-o-quan-tay-ho/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    TOP SUGGESTIONS </font>
                                            </font>
                                        </a>
                                        <a class="book-k" href="tel:0913515351">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Book now</font>
                                            </font>
                                        </a>
                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/top-5-nha-hang-co-khong-gian-rong-to-chuc-tat-nien-o-quan-tay-ho/"
                                            title="Top 5 restaurants with large space for year-end celebrations in Tay Ho district">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Top 5 restaurants with large
                                                    space for year-end celebrations in Tay Ho district</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">The Year End Party is an important
                                                and necessary party for every company and business where all employees
                                                sit together to summarize the year's achievements and set goals for the
                                                new year. </font>
                                            <font style="vertical-align: inherit;">And send each other good wishes.
                                            </font>
                                            <font style="vertical-align: inherit;">Companies, agencies…</font>
                                        </font><a
                                            href="/top-5-nha-hang-co-khong-gian-rong-to-chuc-tat-nien-o-quan-tay-ho/"
                                            class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Top 5 restaurants with
                                                        large space for year-end celebrations in Tay Ho district</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 column-post">
                            <div class="column-post-in column-post-in-h48">
                                <div class="column-post-img">
                                    <a href="/top-7-nha-hang-dang-den-dip-noel-2023/"><img
                                            src="/wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023.jpg"
                                            width="900" height="556"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023.jpg 900w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-300x185.jpg 300w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-768x474.jpg 768w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-278x171.jpg 278w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-373x231.jpg 373w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-565x348.jpg 565w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style=""><noscript><img width="900" height="556"
                                                src="/wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023.jpg 900w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-300x185.jpg 300w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-768x474.jpg 768w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-278x171.jpg 278w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-373x231.jpg 373w, /wp-content/uploads/2023/12/Top-7-nha-hang-dang-den-dip-Noel-2023-565x348.jpg 565w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a>
                                    <div class="name-book">


                                        <a class="cat-name cat-name48"
                                            href="/top-7-nha-hang-dang-den-dip-noel-2023/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    TOP SUGGESTIONS </font>
                                            </font>
                                        </a>
                                        <a class="book-k" href="tel:0913515351">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Book now</font>
                                            </font>
                                        </a>
                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/top-7-nha-hang-dang-den-dip-noel-2023/"
                                            title="Top 7 restaurants worth visiting for Christmas 2023">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Top 7 restaurants worth
                                                    visiting for Christmas 2023</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">The Christmas atmosphere has filled
                                                the streets and restaurants in Hanoi. </font>
                                            <font style="vertical-align: inherit;">Do you have any plans for this
                                                holiday season? </font>
                                            <font style="vertical-align: inherit;">Enjoy a cozy dinner, gather with
                                                friends and family in a cozy Christmas atmosphere at the Top 7
                                                restaurants worth visiting...</font>
                                        </font><a href="/top-7-nha-hang-dang-den-dip-noel-2023/" class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Top 7 restaurants worth
                                                        visiting for Christmas 2023</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .post-intro -->
                    <div class="view-more-column clearfix"><a href="/top-goi-y/">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">See more suggestions</font>
                            </font><i class="fa fa-angle-double-right"></i>
                        </a></div>
                </div>
            </div>
        </div><!-- .tier-row -->

        <div class="tier-row cleafix">
            <div class="container">
                <div class="row">
                    <h3 class="title-post-template-tier"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Donors</font>
                            </font>
                        </span></h3>
                    <div class="post-row clearfix">
                        <div class="col-xs-6 column-post">
                            <div class="column-post-in column-post-in-h3">
                                <div class="column-post-img">
                                    <a href="/el-gaucho-ha-noi/"><img
                                            src="/wp-content/uploads/2023/09/el-gaucho-menu-3.jpg" width="1024"
                                            height="632" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2023/09/el-gaucho-menu-3.jpg 1024w, /wp-content/uploads/2023/09/el-gaucho-menu-3-300x185.jpg 300w, /wp-content/uploads/2023/09/el-gaucho-menu-3-768x474.jpg 768w, /wp-content/uploads/2023/09/el-gaucho-menu-3-278x171.jpg 278w, /wp-content/uploads/2023/09/el-gaucho-menu-3-373x231.jpg 373w, /wp-content/uploads/2023/09/el-gaucho-menu-3-565x348.jpg 565w"
                                            sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-loaded="true"
                                            style=""><noscript><img width="1024" height="632"
                                                src="/wp-content/uploads/2023/09/el-gaucho-menu-3.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2023/09/el-gaucho-menu-3.jpg 1024w, /wp-content/uploads/2023/09/el-gaucho-menu-3-300x185.jpg 300w, /wp-content/uploads/2023/09/el-gaucho-menu-3-768x474.jpg 768w, /wp-content/uploads/2023/09/el-gaucho-menu-3-278x171.jpg 278w, /wp-content/uploads/2023/09/el-gaucho-menu-3-373x231.jpg 373w, /wp-content/uploads/2023/09/el-gaucho-menu-3-565x348.jpg 565w"
                                                sizes="(max-width: 1024px) 100vw, 1024px" /></noscript></a>
                                    <div class="name-book">
                                        <a class="cat-name cat-name3" href="/el-gaucho-ha-noi/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    RESTAURANTS </font>
                                            </font>
                                        </a>
                                        <a class="book-k" href="tel:0913515351">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Book now</font>
                                            </font>
                                        </a>
                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/el-gaucho-ha-noi/" title="El Gaucho Hanoi">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">El Gaucho Hanoi</font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="column-post-adress"><span><i class="fa fa-map-marker"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Facility 1: No. 11 Trang Tien,
                                                    Hoan Kiem, Hanoi. </font>
                                            </font><br>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Facility 2: Lot G2 Ground Floor, Somerset West Point Building, No. 2
                                                    Tay Ho Street, Quang An, Tay Ho, Hanoi. </font>
                                            </font><br>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Facility 3: L1-16A Ground Floor, Vincom Center Metropolis, 29 Lieu
                                                    Giai Ward, Ngoc Khanh, Ba Dinh, Hanoi. </font>
                                            </font><br>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Facility 4: L1-117A &amp; L2-215 Vincom Plaza, Vinhomes Riverside
                                                    Urban Area, Chu Huy Man Ward, Phuc Loi, Long Bien, Hanoi. </font>
                                            </font><br>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Facility 5: Ground Floor, Lot 1-68 Lotte Mall Tay Ho Hanoi, Lane
                                                    683, Lac Long Quan Street, Phu Thuong, Tay Ho, Hanoi</font>
                                            </font><br>
                                        </span> <span><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">0913515351</font>
                                                </font>
                                            </a></span></div>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">If you are a lover of premium beef
                                                with unique and distinct flavors in a luxurious, classy space, then the
                                                name El Gaucho Steakhouse is always an ideal destination. </font>
                                            <font style="vertical-align: inherit;">Currently the restaurant has many
                                                branches in Hanoi and…</font>
                                        </font><a href="/el-gaucho-ha-noi/" class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">El Gaucho Hanoi</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 column-post">
                            <div class="column-post-in column-post-in-h3">
                                <div class="column-post-img">
                                    <a href="/nha-hang-golden-lake-palace/"><img
                                            src="/wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3.jpg"
                                            width="1024" height="633"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3.jpg 1024w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-300x185.jpg 300w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-768x475.jpg 768w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-278x171.jpg 278w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-373x231.jpg 373w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-565x348.jpg 565w"
                                            sizes="(max-width: 1024px) 100vw, 1024px" data-lazy-loaded="true"
                                            style=""><noscript><img width="1024" height="633"
                                                src="/wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3.jpg 1024w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-300x185.jpg 300w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-768x475.jpg 768w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-278x171.jpg 278w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-373x231.jpg 373w, /wp-content/uploads/2022/07/Nha-hang-Golden-Lake-Palace-3-565x348.jpg 565w"
                                                sizes="(max-width: 1024px) 100vw, 1024px" /></noscript></a>
                                    <div class="name-book">
                                        <a class="cat-name cat-name3" href="/nha-hang-golden-lake-palace/">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    RESTAURANTS </font>
                                            </font>
                                        </a>
                                        <a class="book-k" href="tel:0913515351">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Book now</font>
                                            </font>
                                        </a>
                                    </div>
                                </div>
                                <div class="column-post-c">
                                    <h3 class="column-post-t">
                                        <a href="/nha-hang-golden-lake-palace/"
                                            title="Golden Lake Palace Restaurant">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Golden Lake Palace Restaurant
                                                </font>
                                            </font>
                                        </a>
                                    </h3>
                                    <div class="column-post-adress"><span><i class="fa fa-map-marker"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"> 3rd Floor, Dolce Hanoi Hotel,
                                                    B7 Giang Vo, Ba Dinh, Hanoi</font>
                                            </font>
                                        </span> <span><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">0913515351</font>
                                                </font>
                                            </a></span></div>
                                    <div class="excerpt column-post-excerpt">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">When it comes to famous Chinese
                                                cuisine in Hanoi, surely the name Golden Lake Palace Restaurant is
                                                always on the first nomination list. </font>
                                            <font style="vertical-align: inherit;">With many years of experience in
                                                the culinary field, Golden Lake Palace Giang Vo has further affirmed its
                                                position and reputation...</font>
                                        </font><a href="/nha-hang-golden-lake-palace/" class="more-link">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Continue reading</font>
                                            </font><span class="screen-reader-text">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Golden Lake Palace
                                                        Restaurant</font>
                                                </font>
                                            </span> <span class="meta-nav">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">→</font>
                                                </font>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .post-intro -->
                    <div class="view-more-column clearfix"><a href="/nha-tai-tro/">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">See other sponsors</font>
                            </font><i class="fa fa-angle-double-right"></i>
                        </a></div>
                </div>
            </div>

        </div><!-- .tier-row -->

        <script type="text/javascript">
            $(document).ready(function() {
                var headerHeight2 = $('.header ').outerHeight(true); // true value, adds margins to the total height
                var footerHeight2 = $('.site-footer').innerHeight();
                $('.menu-post-temlate').affix({
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

                /////////////
                $('body').scrollspy({
                    target: '.menu-post-temlate',
                    offset: 80
                });
                $(".menu-post-temlate a[href^='#']").on('click', function(e) {
                    // prevent default anchor click behavior
                    e.preventDefault();
                    // store hash
                    var hash = this.hash;
                    // animate
                    $('html, body').animate({
                        scrollTop: $(this.hash).offset().top - 70
                    }, 800, function() {});
                });
            });
        </script>

    </div><!-- .main-wrap -->

    <footer id="colophon" class="site-footer" role="contentinfo">


        <div class="container">
            <div class="row">
                <div class="hotline-footer">
                    <a href="tel:0913515351"><span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hotline: 0913.51.53.51</font>
                            </font>
                        </span></a>
                </div>
                <div class="customer-logo">
                    <h2>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Typical partners</font>
                        </font>
                    </h2>
                    <div class="owl-carousel owl-carousel-customer owl-theme owl-responsive-1000 owl-loaded">































                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-2280px, 0px, 0px); transition: all 0.25s ease 0s; width: 5130px;">
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="/the-rooftop-bar/"><img
                                            src="/wp-content/uploads/2019/10/PHT-TopGo.png" width="225"
                                            height="225" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/PHT-TopGo.png 225w, /wp-content/uploads/2019/10/PHT-TopGo-150x150.png 150w"
                                            sizes="(max-width: 225px) 100vw, 225px" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="225"
                                                height="225" src="/wp-content/uploads/2019/10/PHT-TopGo.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/PHT-TopGo.png 225w, /wp-content/uploads/2019/10/PHT-TopGo-150x150.png 150w"
                                                sizes="(max-width: 225px) 100vw, 225px" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href=""><img src="/wp-content/uploads/2017/03/British.jpeg"
                                            width="175" height="92"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="175"
                                                height="92" src="/wp-content/uploads/2017/03/British.jpeg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href=""><img src="/wp-content/uploads/2017/03/TEDx.jpeg"
                                            width="175" height="92"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="175"
                                                height="92" src="/wp-content/uploads/2017/03/TEDx.jpeg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href=""><img src="/wp-content/uploads/2017/03/Yantv.jpeg"
                                            width="175" height="92"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="175"
                                                height="92" src="/wp-content/uploads/2017/03/Yantv.jpeg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="http://musicshow.vn"><img
                                            src="/wp-content/uploads/2017/03/Musicshow-white-1.png" width="290"
                                            height="145" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            data-lazy-loaded="true" style="opacity: 0.00813569;"><noscript><img
                                                width="290" height="145"
                                                src="/wp-content/uploads/2017/03/Musicshow-white-1.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="http://pinup.vn"><img
                                            src="/wp-content/uploads/2017/03/Pinup_Logo-1-1.png" width="300"
                                            height="150" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            data-lazy-loaded="true" style="opacity: 0.00813569;"><noscript><img
                                                width="300" height="150"
                                                src="/wp-content/uploads/2017/03/Pinup_Logo-1-1.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-red-bean-trendy-khong-gian-lang-man/"><img
                                            src="/wp-content/uploads/2018/07/Redbean-logo.jpg" width="931"
                                            height="785" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2018/07/Redbean-logo.jpg 931w, /wp-content/uploads/2018/07/Redbean-logo-300x253.jpg 300w, /wp-content/uploads/2018/07/Redbean-logo-768x648.jpg 768w"
                                            sizes="(max-width: 931px) 100vw, 931px" data-lazy-loaded="true"
                                            style=""><noscript><img width="931" height="785"
                                                src="/wp-content/uploads/2018/07/Redbean-logo.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2018/07/Redbean-logo.jpg 931w, /wp-content/uploads/2018/07/Redbean-logo-300x253.jpg 300w, /wp-content/uploads/2018/07/Redbean-logo-768x648.jpg 768w"
                                                sizes="(max-width: 931px) 100vw, 931px" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="/red-bean-central/"><img
                                            src="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg" width="900"
                                            height="900" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg 900w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-150x150.jpg 150w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-300x300.jpg 300w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-768x768.jpg 768w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style=""><noscript><img width="900" height="900"
                                                src="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg 900w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-150x150.jpg 150w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-300x300.jpg 300w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-768x768.jpg 768w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-jade-moon/"><img
                                            src="/wp-content/uploads/2019/10/DoJi-TopGo.png" width="803"
                                            height="803" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/DoJi-TopGo.png 803w, /wp-content/uploads/2019/10/DoJi-TopGo-150x150.png 150w, /wp-content/uploads/2019/10/DoJi-TopGo-300x300.png 300w, /wp-content/uploads/2019/10/DoJi-TopGo-768x768.png 768w"
                                            sizes="(max-width: 803px) 100vw, 803px" data-lazy-loaded="true"
                                            style=""><noscript><img width="803" height="803"
                                                src="/wp-content/uploads/2019/10/DoJi-TopGo.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/DoJi-TopGo.png 803w, /wp-content/uploads/2019/10/DoJi-TopGo-150x150.png 150w, /wp-content/uploads/2019/10/DoJi-TopGo-300x300.png 300w, /wp-content/uploads/2019/10/DoJi-TopGo-768x768.png 768w"
                                                sizes="(max-width: 803px) 100vw, 803px" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-nam-phuong/"><img
                                            src="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg"
                                            width="720" height="720"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg 720w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-150x150.jpg 150w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-300x300.jpg 300w"
                                            sizes="(max-width: 720px) 100vw, 720px" data-lazy-loaded="true"
                                            style=""><noscript><img width="720" height="720"
                                                src="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg 720w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-150x150.jpg 150w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-300x300.jpg 300w"
                                                sizes="(max-width: 720px) 100vw, 720px" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-nhat-sushi-bar/"><img
                                            src="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg"
                                            width="452" height="450"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg 452w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-150x150.jpg 150w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-300x300.jpg 300w"
                                            sizes="(max-width: 452px) 100vw, 452px" data-lazy-loaded="true"
                                            style=""><noscript><img width="452" height="450"
                                                src="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg 452w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-150x150.jpg 150w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-300x300.jpg 300w"
                                                sizes="(max-width: 452px) 100vw, 452px" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="/the-rooftop-bar/"><img
                                            src="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg" width="500"
                                            height="500" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg 500w, /wp-content/uploads/2017/09/rooftop-bar-Logo-150x150.jpg 150w, /wp-content/uploads/2017/09/rooftop-bar-Logo-300x300.jpg 300w"
                                            sizes="(max-width: 500px) 100vw, 500px" data-lazy-loaded="true"
                                            style=""><noscript><img width="500" height="500"
                                                src="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg 500w, /wp-content/uploads/2017/09/rooftop-bar-Logo-150x150.jpg 150w, /wp-content/uploads/2017/09/rooftop-bar-Logo-300x300.jpg 300w"
                                                sizes="(max-width: 500px) 100vw, 500px" /></noscript></a></div>
                                <div class="owl-item active" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-37-hung-vuong/"><img
                                            src="/wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo.png"
                                            width="960" height="960"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo.png 960w, /wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo-150x150.png 150w, /wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo-300x300.png 300w, /wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo-768x768.png 768w"
                                            sizes="(max-width: 960px) 100vw, 960px" data-lazy-loaded="true"
                                            style=""><noscript><img width="960" height="960"
                                                src="/wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo.png 960w, /wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo-150x150.png 150w, /wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo-300x300.png 300w, /wp-content/uploads/2019/10/Nha-hang-37-Hung-Vuong-TopGo-768x768.png 768w"
                                                sizes="(max-width: 960px) 100vw, 960px" /></noscript></a></div>
                                <div class="owl-item active" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-home-hanoi/"><img
                                            src="/wp-content/uploads/2019/10/nha-hang-home-hanoi-60.png"
                                            width="882" height="558"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/nha-hang-home-hanoi-60.png 882w, /wp-content/uploads/2019/10/nha-hang-home-hanoi-60-300x190.png 300w, /wp-content/uploads/2019/10/nha-hang-home-hanoi-60-768x486.png 768w"
                                            sizes="(max-width: 882px) 100vw, 882px" data-lazy-loaded="true"
                                            style=""><noscript><img width="882" height="558"
                                                src="/wp-content/uploads/2019/10/nha-hang-home-hanoi-60.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/nha-hang-home-hanoi-60.png 882w, /wp-content/uploads/2019/10/nha-hang-home-hanoi-60-300x190.png 300w, /wp-content/uploads/2019/10/nha-hang-home-hanoi-60-768x486.png 768w"
                                                sizes="(max-width: 882px) 100vw, 882px" /></noscript></a></div>
                                <div class="owl-item active" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-home-hanoi/"><img
                                            src="/wp-content/uploads/2019/10/Viet-Deli.jpg" width="700"
                                            height="400" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/Viet-Deli.jpg 700w, /wp-content/uploads/2019/10/Viet-Deli-300x171.jpg 300w"
                                            sizes="(max-width: 700px) 100vw, 700px" data-lazy-loaded="true"
                                            style=""><noscript><img width="700" height="400"
                                                src="/wp-content/uploads/2019/10/Viet-Deli.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/Viet-Deli.jpg 700w, /wp-content/uploads/2019/10/Viet-Deli-300x171.jpg 300w"
                                                sizes="(max-width: 700px) 100vw, 700px" /></noscript></a></div>
                                <div class="owl-item active" style="width: 190px; margin-right: 0px;"><a
                                        href="/the-rooftop-bar/"><img
                                            src="/wp-content/uploads/2019/10/PHT-TopGo.png" width="225"
                                            height="225" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/PHT-TopGo.png 225w, /wp-content/uploads/2019/10/PHT-TopGo-150x150.png 150w"
                                            sizes="(max-width: 225px) 100vw, 225px" data-lazy-loaded="true"
                                            style=""><noscript><img width="225" height="225"
                                                src="/wp-content/uploads/2019/10/PHT-TopGo.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/PHT-TopGo.png 225w, /wp-content/uploads/2019/10/PHT-TopGo-150x150.png 150w"
                                                sizes="(max-width: 225px) 100vw, 225px" /></noscript></a></div>
                                <div class="owl-item active" style="width: 190px; margin-right: 0px;"><a
                                        href=""><img src="/wp-content/uploads/2017/03/British.jpeg"
                                            width="175" height="92"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy" data-lazy-loaded="true"
                                            style=""><noscript><img width="175" height="92"
                                                src="/wp-content/uploads/2017/03/British.jpeg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item active" style="width: 190px; margin-right: 0px;"><a
                                        href=""><img src="/wp-content/uploads/2017/03/TEDx.jpeg"
                                            width="175" height="92"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy" data-lazy-loaded="true"
                                            style=""><noscript><img width="175" height="92"
                                                src="/wp-content/uploads/2017/03/TEDx.jpeg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href=""><img src="/wp-content/uploads/2017/03/Yantv.jpeg"
                                            width="175" height="92"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy" data-lazy-loaded="true"
                                            style=""><noscript><img width="175" height="92"
                                                src="/wp-content/uploads/2017/03/Yantv.jpeg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="http://musicshow.vn"><img
                                            src="/wp-content/uploads/2017/03/Musicshow-white-1.png" width="290"
                                            height="145" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            data-lazy-loaded="true" style=""><noscript><img width="290"
                                                height="145"
                                                src="/wp-content/uploads/2017/03/Musicshow-white-1.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item" style="width: 190px; margin-right: 0px;"><a
                                        href="http://pinup.vn"><img
                                            src="/wp-content/uploads/2017/03/Pinup_Logo-1-1.png" width="300"
                                            height="150" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            data-lazy-loaded="true" style=""><noscript><img width="300"
                                                height="150" src="/wp-content/uploads/2017/03/Pinup_Logo-1-1.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-red-bean-trendy-khong-gian-lang-man/"><img
                                            src="/wp-content/uploads/2018/07/Redbean-logo.jpg" width="931"
                                            height="785" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2018/07/Redbean-logo.jpg 931w, /wp-content/uploads/2018/07/Redbean-logo-300x253.jpg 300w, /wp-content/uploads/2018/07/Redbean-logo-768x648.jpg 768w"
                                            sizes="(max-width: 931px) 100vw, 931px" data-lazy-loaded="true"
                                            style="opacity: 0.00885637;"><noscript><img width="931"
                                                height="785" src="/wp-content/uploads/2018/07/Redbean-logo.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2018/07/Redbean-logo.jpg 931w, /wp-content/uploads/2018/07/Redbean-logo-300x253.jpg 300w, /wp-content/uploads/2018/07/Redbean-logo-768x648.jpg 768w"
                                                sizes="(max-width: 931px) 100vw, 931px" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="/red-bean-central/"><img
                                            src="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg" width="900"
                                            height="900" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg 900w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-150x150.jpg 150w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-300x300.jpg 300w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-768x768.jpg 768w"
                                            sizes="(max-width: 900px) 100vw, 900px" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="900"
                                                height="900"
                                                src="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_.jpg 900w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-150x150.jpg 150w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-300x300.jpg 300w, /wp-content/uploads/2017/03/EHG-LOGO-TOPGO.VN_-768x768.jpg 768w"
                                                sizes="(max-width: 900px) 100vw, 900px" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-jade-moon/"><img
                                            src="/wp-content/uploads/2019/10/DoJi-TopGo.png" width="803"
                                            height="803" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/DoJi-TopGo.png 803w, /wp-content/uploads/2019/10/DoJi-TopGo-150x150.png 150w, /wp-content/uploads/2019/10/DoJi-TopGo-300x300.png 300w, /wp-content/uploads/2019/10/DoJi-TopGo-768x768.png 768w"
                                            sizes="(max-width: 803px) 100vw, 803px" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="803"
                                                height="803" src="/wp-content/uploads/2019/10/DoJi-TopGo.png"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/DoJi-TopGo.png 803w, /wp-content/uploads/2019/10/DoJi-TopGo-150x150.png 150w, /wp-content/uploads/2019/10/DoJi-TopGo-300x300.png 300w, /wp-content/uploads/2019/10/DoJi-TopGo-768x768.png 768w"
                                                sizes="(max-width: 803px) 100vw, 803px" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-nam-phuong/"><img
                                            src="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg"
                                            width="720" height="720"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg 720w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-150x150.jpg 150w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-300x300.jpg 300w"
                                            sizes="(max-width: 720px) 100vw, 720px" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="720"
                                                height="720"
                                                src="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo.jpg 720w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-150x150.jpg 150w, /wp-content/uploads/2018/08/Nha-hang-nam-phuong-Logo-300x300.jpg 300w"
                                                sizes="(max-width: 720px) 100vw, 720px" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="/nha-hang-nhat-sushi-bar/"><img
                                            src="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg"
                                            width="452" height="450"
                                            class="attachment-full size-full wp-post-image" alt=""
                                            decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg 452w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-150x150.jpg 150w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-300x300.jpg 300w"
                                            sizes="(max-width: 452px) 100vw, 452px" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="452"
                                                height="450"
                                                src="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19.jpg 452w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-150x150.jpg 150w, /wp-content/uploads/2019/10/nha-hang-sushibar-xuan-dieu-19-300x300.jpg 300w"
                                                sizes="(max-width: 452px) 100vw, 452px" /></noscript></a></div>
                                <div class="owl-item cloned" style="width: 190px; margin-right: 0px;"><a
                                        href="/the-rooftop-bar/"><img
                                            src="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg" width="500"
                                            height="500" class="attachment-full size-full wp-post-image"
                                            alt="" decoding="async" loading="lazy"
                                            srcset="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg 500w, /wp-content/uploads/2017/09/rooftop-bar-Logo-150x150.jpg 150w, /wp-content/uploads/2017/09/rooftop-bar-Logo-300x300.jpg 300w"
                                            sizes="(max-width: 500px) 100vw, 500px" data-lazy-loaded="true"
                                            style="opacity: 0.00813569;"><noscript><img width="500"
                                                height="500"
                                                src="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="/wp-content/uploads/2017/09/rooftop-bar-Logo.jpg 500w, /wp-content/uploads/2017/09/rooftop-bar-Logo-150x150.jpg 150w, /wp-content/uploads/2017/09/rooftop-bar-Logo-300x300.jpg 300w"
                                                sizes="(max-width: 500px) 100vw, 500px" /></noscript></a></div>
                            </div>
                        </div>
                        <div class="owl-controls">
                            <div class="owl-nav">
                                <div class="owl-prev" style="display: none;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">prev</font>
                                    </font>
                                </div>
                                <div class="owl-next" style="display: none;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">next</font>
                                    </font>
                                </div>
                            </div>
                            <div class="owl-dots" style="display: none;"></div>
                        </div>
                    </div>
                </div><!-- .customer-logo -->
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
                                </font><br><a href="tel:0913515351"><i class="fa fa-phone"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">0913.51.53.51</font>
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
                                    <font style="vertical-align: inherit;">Office in Hanoi</font>
                                </font><br><i class="fa fa-map-marker"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> G8-98 To Ngoc Van, Tay Ho, Hanoi</font>
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
                            <a rel="nofollow" target="_blank" href="/"><i
                                    class="fa fa-facebook-square" aria-hidden="true"></i></a>
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
