@extends('front_end._index')

@section('content')
    <style>
        .ir-main-container {
            max-width: 1260px;
            margin: 0 auto;
            width: 100%;
        }

        #irwWrapper * {
            -webkit-border-radius: 0px !important;
            -moz-border-radius: 0px !important;
            border-radius: 0px !important;
        }

        #filmstrip-main {
            display: flex;
            width: 100%;
        }

        #irwWrapper * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        #irwWrapper #InstitutionalOwnershipForm #filmstrip-main .filmstrip-item {
            max-width: 100%;
            width: 25%;
        }
 
        #irwWrapper img {
            vertical-align: middle;
            max-width: 75%;
        }

        #irwWrapper img {
            vertical-align: middle;
        }

        #irwWrapper img {
            border: 0;
        }

        #irwWrapper h1 {
            font-size: 28px;
            margin-bottom: 0px;
            line-height: 28px;
        }
        h1.block-title{
            margin-bottom: 0px;
        }
        #irwWrapper h2 {
            font-size: 25px;
            font-family: sans-serif;
            line-height: 25px;
        }

        #irwWrapper h3 {
            font-size: 23px;
            font-family: sans-serif;
            line-height: 23px;
        }

        #irwWrapper h4 {
            font-size: 20px;
            line-height: 20px;font-family: sans-serif;
        }

        #irwWrapper {
            text-align: justify;
        }

        #irwWrapper p,
        #irwWrapper li {
            font-size: 16px;font-family: sans-serif;
            line-height: 20px;
        }
        #content{
            padding:10px 20px;
            box-sizing: border-box;
        }
    </style>
    <div id="main" role="main" class="vamtam-main ">
        <div class="wrapper ir-main-container">
            <div class="pane pane--breadcrumb">
                <span class="BreadcrumbPaneDiv10">
                    <div id="_ctrl0_ctl30_divModuleContainer" class="module module-embed">

                        <div class="custom-container">
                            <h1 class="block-title">
                                {{$oneItem->title}}
                            </h1>
                        </div>
                        <script>
                            $('.block-title').text($('.page--title').text())
                        </script>
                    </div>
                </span>
            </div>
            <div class="IRContainerDiv mainPage_201657">
                <div class="main-container">
                    <div class="clearfix"></div>

                    <div class="custom-container">
                        <div id="irwWrapper">
                            <main role="main" tabindex="-1" class="pane pane--content">
                                <span class="ContentPaneDiv"><span class="ContentPaneDiv1">
                                        <div id="_ctrl0_ctl39_divModuleContainer" class="module module-embed"> 
                                            <div id="InstitutionalOwnershipForm">
                                                <div class="InsiderOwnership">
                                                    <div class="row irwHeaderRow">
                                                        <div class="col-xs-12">
                                                            <div class="irwPageHeader"> 
                                                                <section class="col-sm-12">
                                                                    <div class="row" id="content">
                                                                        {!!$oneItem->content!!}
                                                                    </div>
                                                                </section>
                                                                <section id="filmstrip-main">
                                                                    <img src="//s26.q4cdn.com/317237604/files/images/2021/BK-New-VI-Image-5.jpg"
                                                                        class="filmstrip-item" alt="About Us Thumbnail">
                                                                    <img src="//s26.q4cdn.com/317237604/files/images/2023/Tims-Interior-1.jpg"
                                                                        class="filmstrip-item" alt="About Us Thumbnail">
                                                                    <img src="//s26.q4cdn.com/317237604/files/images/2022/05/New-Restaurant-Image-NOLA-Makers-USA-(4).jpg"
                                                                        class="filmstrip-item" alt="About Us Thumbnail">
                                                                    <img src="//s26.q4cdn.com/317237604/files/images/irw/2021/Firehouse_443x338.jpg"
                                                                        class="filmstrip-item" alt="About Us Thumbnail">
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="about-us-content"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span></span>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
