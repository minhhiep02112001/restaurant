@extends('front_end._index')

@section('content')
    <style>
        .gallery-photos-box .uk-grid>div {
            box-sizing: border-box;
            padding: 5px;
            text-align: center;
            width: 25%;
        }

        @media (min-width: 1200px) {
            .uk-grid>* {
                padding-left: 40px;
            }
        }

        @media (min-width: 960px) {
            .uk-child-width-1-4\@m>* {
                width: 25%;
            }
        }

        @media (min-width: 640px) {
            .uk-child-width-1-2\@s>* {
                width: 50%;
            }
        }



        [class*="uk-child-width"]>* {
            box-sizing: border-box;
            width: 100%;
        }


        .uk-grid>* {
            padding-left: 30px;
        }

        .uk-grid>* {
            margin: 0;
        }

        .uk-grid>*> :last-child {
            margin-bottom: 0;
        }

        .gallery-photos-box a {
            transform: scale(1);
            transition: ease all 0.6s;
        }

        .uk-child-width-1-2\@s.uk-child-width-1-4\@m.uk-grid {
            display: flex;
            flex-wrap: wrap;
        }

        .uk-inline-clip {
            overflow: hidden;
        }

        [class*="uk-inline"] {
            display: inline-block;
            position: relative;
            max-width: 100%;
            vertical-align: middle;
            -webkit-backface-visibility: hidden;
        }

        .uk-link {
            color: var(--highlight-text-color);
        }

        .footer {
            padding: 0 0 20px 0;
            font-size: 17px;
            line-height: 40px;
            letter-spacing: 0.51px;
        }

        .container640,
        .container720,
        .container980,
        .container1080,
        .container1180,
        .container1240,
        .container1260,
        .container1430,
        .container1500 {
            max-width: inherit;
            margin: 0px auto;
            padding: 0 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .footer-inner {
            margin: 0 0 60px 0;
            background: #fff;
            padding: 64px 170px 90px;
            position: relative;
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .footer-inner {
                padding: 50px 30px;
            }
        }

        .contactus-section h2 {
            margin: 0 0 12px 0;
            font-size: 40px;
            letter-spacing: 0;
        }

        .footer__address {
            margin-bottom: 30px;
            font-family: var(--title-fonts);
        }

        .uk-grid {
            margin-left: -30px;
        }

        .uk-grid {
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
            list-style: none;
        }


        [class*="uk-child-width"]>* {
            box-sizing: border-box;
            width: 100%;
        }

        .uk-grid>* {
            padding-left: 30px;
        }

        .uk-grid>* {
            margin: 0;
        }

        @media (min-width: 640px) {

            .uk-child-width-1-2\@s>* {
                width: 50%;
            }
        }

        .footer-stay-connected-section h2 {
            margin: 0 0 20px 0;
            font-size: 40px;
            letter-spacing: 0;
        }

        .footer-stay-connected-section .full-width {
            width: 100%;
            text-align: left;
            margin: 10px 0px;
        }

        *+.uk-margin {
            margin-top: 20px !important;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
            color: #000;
            background: #fff;
        }

        .footer-stay-connected-section input {
            max-width: 400px;
            background: transparent;
            padding: 6px 10px 5px;
            text-transform: uppercase;
            width: 100%;
            font-size: 14px;
            color: rgba(0, 0, 0, 0);
            text-shadow: 0 0 0 var(--text-color);
            letter-spacing: 1.54px;
            border: 1.5px solid #0B2B40;
            height: 55px;
        }
    </style>

    <main class="Main Main--page" id="yui_3_17_2_1_1703774776121_74">
        <section class="Main-content" id="yui_3_17_2_1_1703774776121_73">
            <div class="sqs-layout sqs-grid-12 columns-12" id="page-611179aca9a76f3f59b74e8a">
                <div class="row sqs-row">
                    <div class="col sqs-col-1 span-1">
                        <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21"
                            id="block-3837e01b864f27f6fe18">
                            <div class="sqs-block-content">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col sqs-col-10 span-10">
                        <div class="sqs-block html-block sqs-block-html" data-block-type="2"
                            id="block-e13e27aac13e825cda56">
                            <div class="sqs-block-content">

                                <div class="sqs-html-content">
                                    <h3 style="text-align:center;"><strong>Gallery</strong></h3>

                                </div>
                            </div>
                        </div>
                        <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21"
                            id="block-3a7b851800c0c816bb67">
                            <div class="sqs-block-content">&nbsp;</div>
                        </div>
                    </div>

                </div>
                <div class="row sqs-row">
                    <div class="col sqs-col-12 span-12">
                        <div id="uk-content">
                            <div class="gallerypage">
                                <div class="container1180">

                                    <div class="gallery-photos-box">
                                        <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid" uk-grid=""
                                            uk-lightbox="animation: slide">
                                            <div class="dynamiccomponenteditenable uk-first-column" data-id="500430"
                                                data-editbuttontext="" data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/tartare1.jpg?width=1200&amp;height=1200"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/tartare1.jpg?width=1200&amp;height=1200"
                                                        width="310" height="310"
                                                        alt="A Modern &amp; Vibrant American Bistro  at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable" data-id="500431" data-editbuttontext=""
                                                data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/breakfast-at-the-henley-southlake.jpg?cropX=1120&amp;cropW=4480&amp;cropH=4480"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/breakfast-at-the-henley-southlake.jpg?cropX=1120&amp;cropW=4480&amp;cropH=4480"
                                                        width="310" height="310"
                                                        alt="Breakfast at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable" data-id="500432" data-editbuttontext=""
                                                data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/cocktails-at-the-henley-southlake.jpg?cropY=1798&amp;cropW=4211&amp;cropH=4211"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/cocktails-at-the-henley-southlake.jpg?cropY=1798&amp;cropW=4211&amp;cropH=4211"
                                                        width="310" height="310"
                                                        alt="Cocktails at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable" data-id="500433" data-editbuttontext=""
                                                data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/frenchedchicken1.jpg?width=1200&amp;height=1200"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/frenchedchicken1.jpg?width=1200&amp;height=1200"
                                                        width="310" height="310" alt="Dine at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin uk-first-column"
                                                data-id="539269" data-editbuttontext="" data-editable="True"> <a
                                                    data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/dinner-at-the-henley-southlake.jpg?cropX=1120&amp;cropW=4480&amp;cropH=4480"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/dinner-at-the-henley-southlake.jpg?cropX=1120&amp;cropW=4480&amp;cropH=4480"
                                                        width="310" height="310"
                                                        alt="Dinner at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin" data-id="539270"
                                                data-editbuttontext="" data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/food-at-the-henley-southlake.jpg?cropX=1120&amp;cropW=4480&amp;cropH=4480"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/food-at-the-henley-southlake.jpg?cropX=1120&amp;cropW=4480&amp;cropH=4480"
                                                        width="310" height="310" alt="Food at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin" data-id="539271"
                                                data-editbuttontext="" data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/gift-cards-at-the-henley-southlake.jpg?cropX=1100&amp;cropW=4400&amp;cropH=4400"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/gift-cards-at-the-henley-southlake.jpg?cropX=1100&amp;cropW=4400&amp;cropH=4400"
                                                        width="310" height="310"
                                                        alt="Gift Cards at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin" data-id="539272"
                                                data-editbuttontext="" data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/beefcarpacc1.jpg?width=1200&amp;height=1200"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/beefcarpacc1.jpg?width=1200&amp;height=1200"
                                                        width="310" height="310"
                                                        alt="Lunch at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin uk-first-column"
                                                data-id="539273" data-editbuttontext="" data-editable="True"> <a
                                                    data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/menu-at-the-henley-southlake.jpg?cropX=896&amp;cropW=3990&amp;cropH=3990"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/menu-at-the-henley-southlake.jpg?cropX=896&amp;cropW=3990&amp;cropH=3990"
                                                        width="310" height="310" alt="menu at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin" data-id="539274"
                                                data-editbuttontext="" data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/offers-at-the-henley-southlake.jpg?cropX=1088&amp;cropW=4352&amp;cropH=4352"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/offers-at-the-henley-southlake.jpg?cropX=1088&amp;cropW=4352&amp;cropH=4352"
                                                        width="310" height="310"
                                                        alt="offers at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin" data-id="539275"
                                                data-editbuttontext="" data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/wines-at-the-henley-southlake.jpg?cropX=148&amp;cropW=1414&amp;cropH=1414"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/width=1200,height=1200,f=auto/driftwood-hospitality/the-henley-southlake/siteimages/wines-at-the-henley-southlake.jpg?cropX=148&amp;cropW=1414&amp;cropH=1414"
                                                        width="310" height="310"
                                                        alt="Wines at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                            <div class="dynamiccomponenteditenable uk-grid-margin" data-id="571533"
                                                data-editbuttontext="" data-editable="True"> <a data-autodatalayer=""
                                                    href="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/bass2.jpg?width=1200&amp;height=1200"
                                                    class="dynamiccomponenteditenable uk-inline-clip uk-transition-toggle content-focus"
                                                    target="_blank" rel="nofollow" title="Opens in a new Window"> <img
                                                        src="https://assets.milestoneinternet.com/cdn-cgi/image/f=auto/driftwood-hospitality/the-henley-southlake/bass2.jpg?width=1200&amp;height=1200"
                                                        width="310" height="310" alt="Food at The Henley Southlake">
                                                    <div
                                                        class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                                                        <p class="uk-h4 uk-margin-remove">+</p>
                                                    </div>
                                                </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-inner">
                            <div class="uk-grid uk-child-width-1-2@s">
                                <div class="contactus-section uk-scrollspy-inview "
                                    data-uk-scrollspy="cls: uk-animation-slide-bottom-medium" style="">
                                    <h2 class="contentfocus dynamiccomponenteditenable" tabindex="0" data-id="540733"
                                        data-editbuttontext="" data-editable="True">Contact Us</h2>
                                    <div class="footer__address">
                                        <div class="hotel-info uk-child-width-1-1 uk-grid uk-grid-collapse uk-grid-stack"
                                            data-uk-grid="">
                                            <div class="htl-addr uk-first-column">  <span
                                                        aria-hidden="true" class="formslable">map-Gallery</span>   <span
                                                        class="ht-state">3275 22nd St San Francisco, CA 94110</span>
                                                </div>
                                            <div class="htl-number uk-grid-margin uk-first-column"> <a
                                                    data-autodatalayer="" data-msevent="calls"
                                                    data-mscategory="phone call" data-msaction="click"
                                                    onclick="pushToGtmRenderByDom(this)" href="tel:(415) 619-8686"
                                                    data-phonenumber="hotel-property-phone" target="_blank"
                                                    rel="nofollow" title="Opens in a new Window"><span aria-hidden="true"
                                                        class="formslable">call-Gallery</span> (415) 619-8686</a> </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="stayconnected-section">
                                    <div class="footer-stay-connected-section">
                                        <div class="container720">
                                            <div class="stay-connected-info">
                                                <h2 class="contentfocus dynamiccomponenteditenable" data-id="500463"
                                                    data-editbuttontext="" data-editable="True" tabindex="0">Stay
                                                    Connected</h2>
                                                <p class="contentfocus" tabindex="0"> </p>
                                            </div>
                                            <form method="post"
                                                action="#"
                                                name="Form1" id="stayInToutchForm" enctype="multipart/form-data"
                                                class="uk-grid uk-grid-small" data-autodatalayer="" data-msevent="email"
                                                data-mscategory="email" data-msaction="form submission"> <span
                                                    class="formslable" aria-hidden="true">email signup form</span>
                                                <div class="uk-width-1-1 full-width uk-margin"> <label class="sr-only"
                                                        for="NAME">Name</label> <input type="text"
                                                        class="uk-input required" name="FIRSTNAME" id="NAME"
                                                        placeholder="Name" data-label="Name"> </div>
                                                <div class="uk-width-1-1 full-width"> <label class="sr-only"
                                                        for="EMAILADDRESS">Email Address</label> <input type="text"
                                                        class="uk-input email required" name="EMAIL" id="EMAILADDRESS"
                                                        placeholder="Email Address" data-label="Email Address"> </div>
                                                <input type="hidden" name="g-recaptcha-response"
                                                    value="03AFcWeA7u7eaL1yNqSNeCLqQCMbhGzTGZDAp8i7KGes4se613Tc1PyzrGSXy7xPZwszPI5BtxIREyKBMcbCmvLf5mOtFeNPoQZFSoZVzmNv8UyRBmFin31fXijuglGQ9hlnN4KsHnlJRCnA0dcf_4lrZ5LMNWwKsDKVatCGR1UBzkOq2vG3vAY2WBq3cpVUcbC3PmIdyArmAiDDeG8nfVlQhxFr-Fdmb8xFBdgMsqhynatdGn1xAN34rBQdd1P8fbALM6TLmjT6LWJBqqWux9ZL05nROwaC93tpihxKhw6s9V1z9mnwICV8Sgt9NEuB4kfSr7zQR1GJiGpLjehcVu_0MzjOu06qZ9_WIZ9fVNZotUu8PDYKAPOilNfoXlWZwDg-gZ6A-bgrgnky6ewXZmSHjd9mpzozW0vjdBnsjnQZv6CwV-eAXO2dK3_CfzAzGbZQFSpyA9n2M9eMcYMkrQ1Uex871nSHgwlGAPFSvdR0u_NLqfVhpWuTbzmrlajBaYfHWOp29h1MrSsj33SphLoqhBYMo8tAAnMSk7xusDPdh5DRN78GVxBFASDz5OrCwJIbl0oE_tIMHqLOHwmBq733U4VvW_xiOU-A">
                                                <div class="uk-width-1-1">
                                                    <div class="uk-width-expand"> <input type="hidden"
                                                            value="#"
                                                            id="urlredirect" name="urlredirect"> <input type="hidden"
                                                            value="50319" id="dformId" name="dformId"> <input
                                                            type="hidden" name="dformname" id="dformname"
                                                            value="contactus"> <input name="formtype" id="formtype"
                                                            value="rfp" type="hidden"> <button type="button"
                                                            class="button filled-primary-button signup-btn" id="btnsubmit"
                                                            data-autodatalayer="">Sign Me Up<span class="sr-only">Email
                                                                Form Submit</span></button> </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

    </main>
@endsection
