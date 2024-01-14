@extends('front_end._index')

@section('content')
    <style>
        .ce {
            padding: 0 40px;
        }

        .cd {
            min-width: 1024px;
        }

        .cc {
            max-width: 1920px;
        }

        .cb {
            margin: 0 auto;
        }

        .af {
            box-sizing: border-box;
        }

        .fd {
            -webkit-box-align: start;
            align-items: flex-start;
        }

        .aq {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .al {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
        }

        .gp {
            max-height: calc(100vh - 76px);
        }

        .go {
            top: 76px;
        }

        .gn {
            position: -webkit-sticky;
            position: sticky;
        }

        .d2 {
            flex-shrink: 0;
        }

        .b6 {
            overflow-y: auto;
        }

        .gq {
            width: 306px;
        }

        .gl {
            height: 16px;
        }

        .d2 {
            flex-shrink: 0;
        }

        .gr {
            margin-top: 8px;
        }

        .am {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
        }

        .ak {
            position: relative;
        }

        .cf {
            -webkit-box-align: center;
            align-items: center;
        }

        .b9 {
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .gu {
            text-align: center;
        }

        .gt {
            border-bottom: 2px solid #000000;
        }

        .gs {
            text-overflow: ellipsis;
        }

        .du {
            line-height: 20px;
        }

        .ct {
            font-size: 16px;
        }

        .bn {
            white-space: nowrap;
        }

        .bl {
            overflow: hidden;
        }

        .bg {
            font-weight: 500;
        }

        .be {
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .bc {
            margin-bottom: 24px;
        }

        .b1 {
            color: #fff;
        }

        button {
            border-width: 0;
            cursor: pointer;
            padding: 0;
            margin: 0;
            background: transparent;
            font: inherit;
            color: inherit;
            letter-spacing: inherit;
        }

        .gy {
            -ms-grid-row-align: stretch;
            align-self: stretch;
        }

        .gx {
            min-width: 0;
        }

        .c9 {
            width: 100%;
        }

        .gz {
            list-style: none;
        }

        .cq {
            display: block;
        }

        .bb {
            margin-top: 24px;
        }

        .h3:first-of-type {
            margin-top: 24px;
        }

        .cx {
            border: none;
        }

        .h6 {
            background-color: transparent;
        }

        .h5 {
            $border-radius: 0px 0px 0 0;
        }

        .h4 {
            padding: 8px 0 16px 0;
        }

        .g2 {
            -webkit-box-align: end;
            align-items: flex-end;
        }

        .b9 {
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .h9 {
            -webkit-line-clamp: 1;
        }

        .h8 {
            -webkit-box-orient: vertical;
        }

        .h7 {
            display: -webkit-box;
        }

        .bl {
            overflow: hidden;
        }

        .hb {
            line-height: 32px;
        }

        .ha {
            font-size: 24px;
        }

        .fa {
            font-weight: 700;
        }

        .f8 {
            font-family: UberMove, sans-serif;
        }

        .hl {
            scrollbar-width: none;
        }

        .hk {
            overflow-x: scroll;
        }

        .hj {
            padding: none;
        }

        .hi {
            margin: -16px;
        }

        .av {
            overflow-y: hidden;
        }

        .hq {
            padding: 16px;
        }

        .hp {
            scroll-snap-align: start;
        }

        .ho {
            margin-right: 24px;
        }

        .hn {
            flex-basis: 100%;
        }

        .dg {
            -webkit-box-flex: 0;
            flex-grow: 0;
        }

        .d2 {
            flex-shrink: 0;
        }

        .cq {
            display: block;
        }

        .c9 {
            width: 100%;
        }

        .af {
            box-sizing: border-box;
        }

        .ht {
            -ms-grid-columns: repeat(5, 1fr);
            grid-template-columns: repeat(5, 1fr);
        }

        .hs {
            grid-gap: 40px 24px;
        }

        .hr {
            display: -ms-grid;
            display: grid;
        }

        .ae {
            height: 100%;
        }

        .i0 {
            grid-column: span 1;
        }

        .gx {
            min-width: 0;
        }

        .ak {
            position: relative;
        }

        .i5 {
            text-decoration: none;
        }

        .cs {
            flex: 1;
        }

        .cj {
            cursor: pointer;
        }

        .i6 {
            flex-flow: column nowrap;
        }

        .i7 {
            height: 188px;
        }

        .d2 {
            flex-shrink: 0;
        }

        .k5 {
            border-radius: 0px;
        }

        .k4 {
            transform: scale(1);
        }

        .k3 {
            transition: transform 0.5s ease-in-out 0s;
        }

        .i7 {
            height: 188px;
        }

        .ez {
            opacity: 1;
        }

        .ey {
            object-fit: cover;
        }

        .f1 {
            background: rgba(0, 0, 0, 0.02);
        }

        .eu {
            bottom: 0;
        }

        .dc {
            right: 0;
        }

        .at {
            left: 0;
        }

        .as {
            top: 0;
        }

        .ag {
            position: absolute;
        }

        .ij {
            max-width: 90%;
        }

        .ii {
            padding: 4px 12px;
        }

        .ih {
            border-radius: 0 12px 12px 0;
        }

        .ig {
            top: 8px;
        }

        .if {
            background: #048848;
        }

        .gs {
            text-overflow: ellipsis;
        }

        .g9 {
            font-size: 12px;
        }

        .f4 {
            color: #FFFFFF;
        }

        .ch {
            height: 24px;
        }

        .bn {
            white-space: nowrap;
        }

        .bl {
            overflow: hidden;
        }

        .bh {
            line-height: 16px;
        }

        .bg {
            font-weight: 500;
        }

        .be {
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .ag {
            position: absolute;
        }

        .af {
            box-sizing: border-box;
        }

        .im {
            bottom: 8px;
        }

        .il {
            transform: translate(-50%, 0);
        }

        .ik {
            left: 50%;
        }

        .ag {
            position: absolute;
        }

        .is {
            border: 1px solid #E2E2E2;
        }

        .ir {
            pointer-events: auto;
        }

        .iq {
            -webkit-transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        .io {
            padding: 0 12px;
        }

        .in {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        .i4:hover {
            -webkit-transition: box-shadow 0.3s ease-in-out;
            -moz-transition: box-shadow 0.3s ease-in-out;
            transition: box-shadow 0.3s ease-in-out;
        }

        .iw {
            margin-top: 48px;
        }

        .i3:hover {
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.12);
        }

        .i2:hover {
            padding: 8px;
        }

        .i1:hover {
            margin: -8px;
        }

        ul {
            list-style: none;
        }

        p.cf {
            padding: 0;
            margin: 0px;
        }

        ul>ul {
            padding: 0px;
        }

        .im {
            bottom: 8px;
        }

        .il {
            transform: translate(-50%, 0);
        }

        .ik {
            left: 50%;
        }

        .ag {
            position: absolute;
        }

        .i5 {
            text-decoration: none;
        }

        .cs {
            flex: 1;
        }

        .cj {
            cursor: pointer;
        }

        .i0 {
            grid-column: span 1;
        }

        .gx {
            min-width: 0;
        }

        .ak {
            position: relative;
        }

        .i6 {
            flex-flow: column nowrap;
        }

        .c9 {
            width: 100%;
        }

        .h9 {
            -webkit-line-clamp: 1;
        }

        .h8 {
            -webkit-box-orient: vertical;
        }

        .h7 {
            display: -webkit-box;
        }

        .bl {
            overflow: hidden;
        }

        .i7 {
            height: 188px;
        }

        .d2 {
            flex-shrink: 0;
        }

        .c9 {
            width: 100%;
        }

        .iz {
            -ms-grid-columns: repeat(2, 1fr);
            grid-template-columns: repeat(2, 1fr);
        }

        .j1 {
            -ms-grid-columns: repeat(4, 1fr);
            grid-template-columns: repeat(4, 1fr);
        }

        .iy {
            grid-gap: 24px;
        }

        .hr {
            display: -ms-grid;
            display: grid;
        }

        .bc {
            margin-bottom: 24px;
            padding-left: 0px;
        }

        .im {
            bottom: 8px;
        }

        .il {
            transform: translate(-50%, 0);
        }

        .ik {
            left: 50%;
        }

        .iu {
            padding-top: 4px;
        }

        .am {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
        }

        .kh {
            grid-column: span 2;
        }

        .kj {
            overflow: visible;
        }

        .cs {
            flex: 1;
        }

        .kk {
            padding-right: 8px;
        }

        .ff {
            padding-bottom: 8px;
        }

        .du {
            line-height: 20px;
        }

        .ct {
            font-size: 16px;
        }

        .bg {
            font-weight: 500;
        }

        .be {
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .du {
            line-height: 20px;
        }

        .ct {
            font-size: 16px;
        }

        .eo {
            vertical-align: middle;
        }

        .d3 {
            line-height: 1;
        }

        .kp {
            flex: 0 1 47%;
        }

        .ko {
            height: 158px;
        }

        .it {
            right: 8px;
        }

        .ig {
            top: 8px;
        }

        .is {
            color: black;
            border: 1px solid #E2E2E2;
        }

        .ir {
            pointer-events: auto;
        }

        .iq {
            -webkit-transition: opacity 0.3s ease-in-out;
            -moz-transition: opacity 0.3s ease-in-out;
            transition: opacity 0.3s ease-in-out;
        }

        .io {
            padding: 0 12px;
        }

        .in {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
        }

        .gs {
            text-overflow: ellipsis;
        }

        .g1 {
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.12);
        }

        .ez {
            opacity: 1;
        }

        .dm {
            height: 36px;
        }

        .dj {
            border-radius: 500px;
        }

        .cj {
            cursor: pointer;
        }

        .cf {
            -webkit-box-align: center;
            align-items: center;
        }

        .ca {
            background: #FFFFFF;
        }

        .bg {
            font-weight: 500;
        }

        .bf {
            font-size: 14px;
        }

        .be {
            font-family: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .gu {
            text-align: center;
        }

        .gt {
            border-bottom: 2px solid #000000;
        }

        .gs {
            text-overflow: ellipsis;
        }
    </style>

    <main class="Main Main--page" id="yui_3_17_2_1_1703774776121_74">

        <section class="Main-content" data-content-field="main-content" id="yui_3_17_2_1_1703774776121_73">
            <div class="sqs-layout sqs-grid-12 columns-12" data-type="page" data-updated-on="1694202887291"
                id="page-611179aca9a76f3f59b74e8a">
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
                                    <h3 style="text-align:center;white-space:pre-wrap;"><strong>MENU</strong></h3>

                                </div>
                            </div>
                        </div>
                        <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21"
                            id="block-3a7b851800c0c816bb67">
                            <div class="sqs-block-content">&nbsp;</div>
                        </div>
                    </div>
                    <div class="col sqs-col-1 span-1">
                        <div class="sqs-block spacer-block sqs-block-spacer sized vsize-1" data-block-type="21"
                            id="block-5f9cd351d04e20cc8169">
                            <div class="sqs-block-content">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="row sqs-row">
                    <div class="col sqs-col-12 span-12">
                        <div class="">
                            <div class="cc cd cb af ce">
                                <div class="al aq fd">
                                    <div></div>
                                    <div class="gn go b6 al gp d2">
                                        <div class="gq cs">
                                            <div class="d2 gl"></div>
                                            <div>
                                                <div class="gr al am">
                                                    <div class="ak">
                                                        <nav role="navigation" class="al cs am">
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gt gu gv">
                                                                    <div class="be ct bg du">Featured items</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Breakfast Burritos</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Tots</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Toasts</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Lil' Breakfast</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Oatmeal</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">French Toasts</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Tacos</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">OG Drinks</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Signature Drinks</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Other Drinks</div>
                                                                </button></div>
                                                            <div class="al cf b9"><button
                                                                    class="be ct bg du b1 bc bn bl gs gw gu gv">
                                                                    <div class="be ct bg du">Pastries</div>
                                                                </button></div>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d2 ch"></div>
                                        </div>
                                        <div class="spacer _8"></div>
                                    </div>
                                    <div class="spacer _40"></div>
                                    <div class="c9 gx gy">
                                        <ul class="gz cq bb">
                                            <li class="h0 cx h1 h2 h3">
                                                <div class="h4 al b9 g2 h5 h6">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Featured items</h3>
                                                    </div>
                                                    <div class="spacer _8"></div>
                                                    <div class="al g2 af">
                                                        <div class="al"><button data-testid="previous-arrow-carousel"
                                                                aria-label="Previous"
                                                                class="hc cv be bg la hd he al cf et af e0 fq eq er dm hf hg"
                                                                disabled=""><svg aria-hidden="true" focusable="false"
                                                                    viewBox="0 0 24 24" class="fl gl cm cn">
                                                                    <path
                                                                        d="M22 13.5H6.3l5.5 7.5H8.3l-6.5-9 6.5-9h3.5l-5.5 7.5H22v3z">
                                                                    </path>
                                                                </svg></button>
                                                            <div class="spacer _4"></div><button
                                                                data-testid="next-arrow-carousel" aria-label="Next"
                                                                class="hc cv be bg cj hd he al cf et af e0 fq b1 dn do dp dq dr dm hf hg"><svg
                                                                    aria-hidden="true" focusable="false"
                                                                    viewBox="0 0 24 24" class="fl gl cm cn hh">
                                                                    <path
                                                                        d="M22 13.5H6.3l5.5 7.5H8.3l-6.5-9 6.5-9h3.5l-5.5 7.5H22v3z">
                                                                    </path>
                                                                </svg></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="av hi hj hk al hl hm">
                                                    <ul class="cq d2 dg c9 hn ho hp hq af">
                                                        <ul class="hr hs ht hu hv hw hx ae">
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/f00e5f61-24e6-4d51-b33d-7a1c690e8caa">
                                                                    <div data-testid="store-menu-item--f00e5f61-24e6-4d51-b33d-7a1c690e8caa"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvZGY5ZGMxODc3ZTBhMjI3ODk1YWZmNDY2NzRmYTg2MjAvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="THE OG"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/df9dc1877e0a227895aff46674fa8620/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div
                                                                                class="be g9 bg bh ag if f4 af ch ig ih ii gs ij bn bl">
                                                                                #1 most liked</div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%2522f00e5f61-24e6-4d51-b33d-7a1c690e8caa%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">THE
                                                                                    OG</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$12.25</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/6ee2e678-5c26-4ef7-9d40-2d2dc0767daf">
                                                                    <div data-testid="store-menu-item--6ee2e678-5c26-4ef7-9d40-2d2dc0767daf"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvOTA0YzI3ZWQzZDU3Zjk5NmFmZjQ4ODhjZjdjODVkNDAvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="EL SANCHO"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/904c27ed3d57f996aff4888cf7c85d40/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div
                                                                                class="be g9 bg bh ag if f4 af ch ig ih ii gs ij bn bl">
                                                                                #2 most liked</div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%25226ee2e678-5c26-4ef7-9d40-2d2dc0767daf%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">EL
                                                                                    SANCHO</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$14.50</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/da01be63-8052-4481-b0df-5b5606bc72db">
                                                                    <div data-testid="store-menu-item--da01be63-8052-4481-b0df-5b5606bc72db"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMjlkYWIxYTNmZGM1MWNmMjRlOWVhZjc4Zjc1ZDA1NjQvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="TIA MARIA"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/29dab1a3fdc51cf24e9eaf78f75d0564/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div
                                                                                class="be g9 bg bh ag if f4 af ch ig ih ii gs ij bn bl">
                                                                                #3 most liked</div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%2522da01be63-8052-4481-b0df-5b5606bc72db%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">TIA
                                                                                    MARIA</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$14.25</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/fa5abf9b-a3d1-4b75-aa2a-a9c349395415">
                                                                    <div data-testid="store-menu-item--fa5abf9b-a3d1-4b75-aa2a-a9c349395415"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMzNmODEyY2JjMTc2MzViOTc0ZGNmYTY3M2I1YjAyYjYvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="BREAKFAST LITTLE SANDWICH"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/33f812cbc17635b974dcfa673b5b02b6/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%2522fa5abf9b-a3d1-4b75-aa2a-a9c349395415%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">BREAKFAST
                                                                                    LITTLE SANDWICH</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$11.00</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/d9521e32-2d37-4825-bfbc-63c075edb570">
                                                                    <div data-testid="store-menu-item--d9521e32-2d37-4825-bfbc-63c075edb570"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvZDY5NDVjMjg5OTc0ODZhNTI3NDQwYWE1YjhmYTY4ODYvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="AGUA FRESCA"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/d6945c28997486a527440aa5b8fa6886/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%2522d9521e32-2d37-4825-bfbc-63c075edb570%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">AGUA
                                                                                    FRESCA</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$6.50</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </ul>
                                                    <ul class="cq d2 dg c9 hn ho hp hq af">
                                                        <ul class="hr hs ht hu hv hw hx ae">
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/3ccfa13d-629f-4c84-83fd-dd672d71a0b1">
                                                                    <div data-testid="store-menu-item--3ccfa13d-629f-4c84-83fd-dd672d71a0b1"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNDgwMmQwZTZkODg3YjRlOWFjN2M5YWM3NzUwZmQ2MjQvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="FRENCH TOAST"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/4802d0e6d887b4e9ac7c9ac7750fd624/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%25223ccfa13d-629f-4c84-83fd-dd672d71a0b1%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">FRENCH
                                                                                    TOAST</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$9.75</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/bd6978b2-6c73-436e-8760-0aef75d81728">
                                                                    <div data-testid="store-menu-item--bd6978b2-6c73-436e-8760-0aef75d81728"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNGQ0YTVkYjdkZWRjYzZhYjVjZWMyZDg0ZDAwNjI0MWQvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="BAD AND BOUJEE"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/4d4a5db7dedcc6ab5cec2d84d006241d/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%2522bd6978b2-6c73-436e-8760-0aef75d81728%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">BAD AND
                                                                                    BOUJEE</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$14.25</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/1139c363-3193-456d-bec9-17a3f5161580">
                                                                    <div data-testid="store-menu-item--1139c363-3193-456d-bec9-17a3f5161580"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvOTg4ZjE3N2RkZTA0YzYyMzFlN2Y4NzVjOWYzYmY4NzgvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="SEÑORITA"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/988f177dde04c6231e7f875c9f3bf878/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%25221139c363-3193-456d-bec9-17a3f5161580%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">SEÑORITA</span>
                                                                            </div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/95e19fd9-4141-42c3-bbfd-2c0ef7a19386">
                                                                    <div data-testid="store-menu-item--95e19fd9-4141-42c3-bbfd-2c0ef7a19386"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNThkNDhmYjkxNmY4MGQ4NTM0ZjY5ODYxZTA1Zjg3MjEvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="BL TOTS"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/58d48fb916f80d8534f69861e05f8721/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%252295e19fd9-4141-42c3-bbfd-2c0ef7a19386%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">BL
                                                                                    TOTS</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$12.25</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/679a4971-9235-4cf6-88fc-48cf75c75a66">
                                                                    <div data-testid="store-menu-item--679a4971-9235-4cf6-88fc-48cf75c75a66"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNThjODk5N2YyZmM3Y2QzZDU3MTY1NWUwOTVmOGRhMDkvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="THE ZEUS"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/58c8997f2fc7cd3d571655e095f8da09/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%2522679a4971-9235-4cf6-88fc-48cf75c75a66%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">THE
                                                                                    ZEUS</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$13.50</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </ul>
                                                    <ul class="cq d2 dg c9 hn ho hp hq af">
                                                        <ul class="hr hs ht hu hv hw hx ae">
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/44ef7c90-f2d0-4124-9935-179a5293448c">
                                                                    <div data-testid="store-menu-item--44ef7c90-f2d0-4124-9935-179a5293448c"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvZjZjMmY1YTc2YzhiNzQ5YmQ2ODQ3NDFmZTc3MDg5ZTIvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="AVOCADO TOAST"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/f6c2f5a76c8b749bd684741fe77089e2/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%252244ef7c90-f2d0-4124-9935-179a5293448c%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">AVOCADO
                                                                                    TOAST</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$12.25</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/17035fc2-ca86-4e16-8948-8557ca3dfee9">
                                                                    <div data-testid="store-menu-item--17035fc2-ca86-4e16-8948-8557ca3dfee9"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMDFlZjA1YWViNzBjMjhmMmM5OGNiM2Y5MDVjZDIwYWYvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="LATTE"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/01ef05aeb70c28f2c98cb3f905cd20af/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%252217035fc2-ca86-4e16-8948-8557ca3dfee9%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">LATTE</span>
                                                                            </div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$6.75</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/38ca1d69-87a7-44ab-b976-60b71687e819">
                                                                    <div data-testid="store-menu-item--38ca1d69-87a7-44ab-b976-60b71687e819"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvYmQwZTE4NTU5ODJlOTE0YzY1NDJjMjg2Y2YyNmM1YmEvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="THE HUSSLE YOGURT"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/bd0e1855982e914c6542c286cf26c5ba/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%252238ca1d69-87a7-44ab-b976-60b71687e819%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">THE
                                                                                    HUSSLE YOGURT</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.75</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                    class="al cs i5 cj"
                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0379a62a-1156-4ddb-a09a-7e1dc45d5dfb/363ea40d-55b5-487b-9504-58dd9983a6fa">
                                                                    <div data-testid="store-menu-item--363ea40d-55b5-487b-9504-58dd9983a6fa"
                                                                        class="c9 al i6 ak">
                                                                        <div class="i7 c9 d2 bl ak">
                                                                            <div class="ak ae">
                                                                                <div class="lazyload-wrapper ">
                                                                                    <picture>
                                                                                        <source type="image/webp"
                                                                                            srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvYTNkMjFhMjI2NGEyZmE0NTM2MTg2YTI1YjhkYzM3N2QvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                        <img alt="CHURRO TOTS"
                                                                                            src="https://tb-static.uber.com/prod/image-proc/processed_images/a3d21a2264a2fa4536186a25b8dc377d/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                            aria-hidden="true"
                                                                                            class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                    </picture>
                                                                                </div>
                                                                                <div class="ag as at dc eu f1"></div>
                                                                            </div>
                                                                            <div class="ag ik il im"><a
                                                                                    class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                    href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220379a62a-1156-4ddb-a09a-7e1dc45d5dfb%2522%252C%2522itemUuid%2522%253A%2522363ea40d-55b5-487b-9504-58dd9983a6fa%2522%257D&amp;ps=1">Quick
                                                                                    view</a></div>
                                                                            <div class="ag it al cf aq ig"></div>
                                                                        </div>
                                                                        <div class="iu al am ae">
                                                                            <div class="h7 h8 iv bl"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be ct bg du b1">CHURRO
                                                                                    TOTS</span></div>
                                                                            <p class="al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$9.25</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                    </ul>
                                                </div>
                                            </li>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Breakfast Burritos</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/babb3204-383e-4f12-a880-35441c9dfc6b/f00e5f61-24e6-4d51-b33d-7a1c690e8caa">
                                                                <div data-testid="store-menu-item--f00e5f61-24e6-4d51-b33d-7a1c690e8caa"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvZGY5ZGMxODc3ZTBhMjI3ODk1YWZmNDY2NzRmYTg2MjAvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="THE OG"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/df9dc1877e0a227895aff46674fa8620/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522babb3204-383e-4f12-a880-35441c9dfc6b%2522%252C%2522itemUuid%2522%253A%2522f00e5f61-24e6-4d51-b33d-7a1c690e8caa%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">THE
                                                                                OG</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$12.25</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>95% (427)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/babb3204-383e-4f12-a880-35441c9dfc6b/6ee2e678-5c26-4ef7-9d40-2d2dc0767daf">
                                                                <div data-testid="store-menu-item--6ee2e678-5c26-4ef7-9d40-2d2dc0767daf"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvOTA0YzI3ZWQzZDU3Zjk5NmFmZjQ4ODhjZjdjODVkNDAvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="EL SANCHO"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/904c27ed3d57f996aff4888cf7c85d40/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522babb3204-383e-4f12-a880-35441c9dfc6b%2522%252C%2522itemUuid%2522%253A%25226ee2e678-5c26-4ef7-9d40-2d2dc0767daf%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">EL
                                                                                SANCHO</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$14.50</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>97% (165)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/babb3204-383e-4f12-a880-35441c9dfc6b/da01be63-8052-4481-b0df-5b5606bc72db">
                                                                <div data-testid="store-menu-item--da01be63-8052-4481-b0df-5b5606bc72db"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMjlkYWIxYTNmZGM1MWNmMjRlOWVhZjc4Zjc1ZDA1NjQvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="TIA MARIA"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/29dab1a3fdc51cf24e9eaf78f75d0564/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522babb3204-383e-4f12-a880-35441c9dfc6b%2522%252C%2522itemUuid%2522%253A%2522da01be63-8052-4481-b0df-5b5606bc72db%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">TIA
                                                                                MARIA</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$14.25</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>97% (125)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/babb3204-383e-4f12-a880-35441c9dfc6b/bd6978b2-6c73-436e-8760-0aef75d81728">
                                                                <div data-testid="store-menu-item--bd6978b2-6c73-436e-8760-0aef75d81728"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNGQ0YTVkYjdkZWRjYzZhYjVjZWMyZDg0ZDAwNjI0MWQvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="BAD AND BOUJEE"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/4d4a5db7dedcc6ab5cec2d84d006241d/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522babb3204-383e-4f12-a880-35441c9dfc6b%2522%252C%2522itemUuid%2522%253A%2522bd6978b2-6c73-436e-8760-0aef75d81728%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">BAD AND
                                                                                BOUJEE</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$14.25</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>88% (62)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/babb3204-383e-4f12-a880-35441c9dfc6b/679a4971-9235-4cf6-88fc-48cf75c75a66">
                                                                <div data-testid="store-menu-item--679a4971-9235-4cf6-88fc-48cf75c75a66"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNThjODk5N2YyZmM3Y2QzZDU3MTY1NWUwOTVmOGRhMDkvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="THE ZEUS"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/58c8997f2fc7cd3d571655e095f8da09/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522babb3204-383e-4f12-a880-35441c9dfc6b%2522%252C%2522itemUuid%2522%253A%2522679a4971-9235-4cf6-88fc-48cf75c75a66%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">THE
                                                                                ZEUS</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$13.50</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>91% (34)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Tots</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li data-test="store-item-95e19fd9-4141-42c3-bbfd-2c0ef7a19386"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0ee43837-e3d3-4b16-8bd7-e304be2ba6b7/95e19fd9-4141-42c3-bbfd-2c0ef7a19386">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">BL TOTS <span
                                                                                        class="eo d3"><img alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/leaf.png"
                                                                                            width="14"
                                                                                            height="14"></span> <span
                                                                                        class="eo d3"><img alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/grain.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$12.25</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Egg, bacon, cheese,
                                                                                        and garlic aioli on tater
                                                                                        tots.</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>88% (43)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNThkNDhmYjkxNmY4MGQ4NTM0ZjY5ODYxZTA1Zjg3MjEvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="BL TOTS"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/58d48fb916f80d8534f69861e05f8721/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220ee43837-e3d3-4b16-8bd7-e304be2ba6b7%2522%252C%2522itemUuid%2522%253A%252295e19fd9-4141-42c3-bbfd-2c0ef7a19386%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-363ea40d-55b5-487b-9504-58dd9983a6fa"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0ee43837-e3d3-4b16-8bd7-e304be2ba6b7/363ea40d-55b5-487b-9504-58dd9983a6fa">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">CHURRO TOTS <span
                                                                                        class="eo d3"><img alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/vegan.png"
                                                                                            width="14"
                                                                                            height="14"></span> <span
                                                                                        class="eo d3"><img alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/grain.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$9.25</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Honey and cinnamon
                                                                                        tots.</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>86% (30)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvYTNkMjFhMjI2NGEyZmE0NTM2MTg2YTI1YjhkYzM3N2QvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="CHURRO TOTS"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/a3d21a2264a2fa4536186a25b8dc377d/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220ee43837-e3d3-4b16-8bd7-e304be2ba6b7%2522%252C%2522itemUuid%2522%253A%2522363ea40d-55b5-487b-9504-58dd9983a6fa%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-84f7e7e4-acc2-42ea-9a9b-5a5be57c0b77"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/0ee43837-e3d3-4b16-8bd7-e304be2ba6b7/84f7e7e4-acc2-42ea-9a9b-5a5be57c0b77">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">CLASSICOS TOTS <span
                                                                                        class="eo d3"><img alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/vegan.png"
                                                                                            width="14"
                                                                                            height="14"></span> <span
                                                                                        class="eo d3"><img alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/grain.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Original
                                                                                        tots.</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>85% (78)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25220ee43837-e3d3-4b16-8bd7-e304be2ba6b7%2522%252C%2522itemUuid%2522%253A%252284f7e7e4-acc2-42ea-9a9b-5a5be57c0b77%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Toasts</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ba5da6cd-8321-42d1-acdc-6224babd5714/44ef7c90-f2d0-4124-9935-179a5293448c">
                                                                <div data-testid="store-menu-item--44ef7c90-f2d0-4124-9935-179a5293448c"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvZjZjMmY1YTc2YzhiNzQ5YmQ2ODQ3NDFmZTc3MDg5ZTIvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="AVOCADO TOAST"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/f6c2f5a76c8b749bd684741fe77089e2/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ba5da6cd-8321-42d1-acdc-6224babd5714%2522%252C%2522itemUuid%2522%253A%252244ef7c90-f2d0-4124-9935-179a5293448c%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">AVOCADO
                                                                                TOAST</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$12.25</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>90% (33)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ba5da6cd-8321-42d1-acdc-6224babd5714/05693aef-ffee-4570-85b5-fc26e9351251">
                                                                <div data-testid="store-menu-item--05693aef-ffee-4570-85b5-fc26e9351251"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMTczZDk0MTg2Nzk2ODgyY2M1MjFhNTA1NjRiMGE2NmIvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="KING KONG"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/173d94186796882cc521a50564b0a66b/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ba5da6cd-8321-42d1-acdc-6224babd5714%2522%252C%2522itemUuid%2522%253A%252205693aef-ffee-4570-85b5-fc26e9351251%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">KING
                                                                                KONG</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$9.75</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>83% (12)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ba5da6cd-8321-42d1-acdc-6224babd5714/b6a9d373-4d5a-434e-beb1-abfd3f6a6b31">
                                                                <div data-testid="store-menu-item--b6a9d373-4d5a-434e-beb1-abfd3f6a6b31"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvM2Q1NGRiY2YyYzdjZDhiMzQ0OGFkN2Y0YTZkZGEwZTMvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="MR FANCY PANTS"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/3d54dbcf2c7cd8b3448ad7f4a6dda0e3/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ba5da6cd-8321-42d1-acdc-6224babd5714%2522%252C%2522itemUuid%2522%253A%2522b6a9d373-4d5a-434e-beb1-abfd3f6a6b31%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">MR FANCY
                                                                                PANTS</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$11.00</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>100% (4)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ba5da6cd-8321-42d1-acdc-6224babd5714/d3d9c6bb-faf1-49f2-af57-fe08803ee93d">
                                                                <div data-testid="store-menu-item--d3d9c6bb-faf1-49f2-af57-fe08803ee93d"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMzkwZDdmYmU4ZDA3ZmJjMGEzOGNlMTAzYzhmZDdhZmUvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="MORNING SPRING"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/390d7fbe8d07fbc0a38ce103c8fd7afe/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ba5da6cd-8321-42d1-acdc-6224babd5714%2522%252C%2522itemUuid%2522%253A%2522d3d9c6bb-faf1-49f2-af57-fe08803ee93d%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">MORNING
                                                                                SPRING</span></div>
                                                                        <p class="al cf g6"><span data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$8.75</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>100% (11)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li data-test="store-item-e2109beb-1c6e-44f1-9ac2-7a917fc04b8b"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ba5da6cd-8321-42d1-acdc-6224babd5714/e2109beb-1c6e-44f1-9ac2-7a917fc04b8b">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">NOT YOUR MOM'S PB &amp;
                                                                                    J <span class="eo d3"><img
                                                                                            alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/vegan.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Peanut butter, jam,
                                                                                        and coconut flakes on sourdough
                                                                                        toast. Proudly served on fox and
                                                                                        lion sourdough.</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvOTcwMzI2MDUyODE4ZjY4ZWQ2YjVhNDQ3ZDAwYmNhYzEvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="NOT YOUR MOM'S PB &amp; J"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/970326052818f68ed6b5a447d00bcac1/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ba5da6cd-8321-42d1-acdc-6224babd5714%2522%252C%2522itemUuid%2522%253A%2522e2109beb-1c6e-44f1-9ac2-7a917fc04b8b%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-048bc231-7a96-4bd7-b75b-e4fc43e8975a"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ba5da6cd-8321-42d1-acdc-6224babd5714/048bc231-7a96-4bd7-b75b-e4fc43e8975a">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">MOLLETTE <span
                                                                                        class="eo d3"><img
                                                                                            alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/leaf.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Black beans, queso
                                                                                        fresco, and salsa on sourdough
                                                                                        toast. Proudly served on fox and
                                                                                        lion sourdough.</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMGJhMzRjYTRmZDkxMjMyNGQyNzcxYWI2MGQ5MjYxNGQvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="MOLLETTE"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/0ba34ca4fd912324d2771ab60d92614d/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ba5da6cd-8321-42d1-acdc-6224babd5714%2522%252C%2522itemUuid%2522%253A%2522048bc231-7a96-4bd7-b75b-e4fc43e8975a%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-0c5106aa-d385-4f3b-92f7-695dff87569f"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ba5da6cd-8321-42d1-acdc-6224babd5714/0c5106aa-d385-4f3b-92f7-695dff87569f">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">HONEY BEAR <span
                                                                                        class="eo d3"><img
                                                                                            alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/leaf.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Coconut oil, honey,
                                                                                        and cinnamon on sourdough toast.
                                                                                        Proudly served on fox and lion
                                                                                        sourdough.</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ba5da6cd-8321-42d1-acdc-6224babd5714%2522%252C%2522itemUuid%2522%253A%25220c5106aa-d385-4f3b-92f7-695dff87569f%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Lil' Breakfast</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/d7d3486e-042c-4fb7-a848-211cfb2d695d/fa5abf9b-a3d1-4b75-aa2a-a9c349395415">
                                                                <div data-testid="store-menu-item--fa5abf9b-a3d1-4b75-aa2a-a9c349395415"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMzNmODEyY2JjMTc2MzViOTc0ZGNmYTY3M2I1YjAyYjYvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="BREAKFAST LITTLE SANDWICH"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/33f812cbc17635b974dcfa673b5b02b6/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522d7d3486e-042c-4fb7-a848-211cfb2d695d%2522%252C%2522itemUuid%2522%253A%2522fa5abf9b-a3d1-4b75-aa2a-a9c349395415%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">BREAKFAST
                                                                                LITTLE SANDWICH</span></div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$11.00</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>93% (103)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/d7d3486e-042c-4fb7-a848-211cfb2d695d/38ca1d69-87a7-44ab-b976-60b71687e819">
                                                                <div data-testid="store-menu-item--38ca1d69-87a7-44ab-b976-60b71687e819"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvYmQwZTE4NTU5ODJlOTE0YzY1NDJjMjg2Y2YyNmM1YmEvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="THE HUSSLE YOGURT"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/bd0e1855982e914c6542c286cf26c5ba/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522d7d3486e-042c-4fb7-a848-211cfb2d695d%2522%252C%2522itemUuid%2522%253A%252238ca1d69-87a7-44ab-b976-60b71687e819%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">THE HUSSLE
                                                                                YOGURT</span></div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$8.75</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>100% (16)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Oatmeal</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li data-test="store-item-18be9dc4-2085-4cfd-bdcd-9299e249dfd6"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/9ea75cfc-af70-4a98-99a7-f916050bd5d3/18be9dc4-2085-4cfd-bdcd-9299e249dfd6">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">THE GOOD GOOD <span
                                                                                        class="eo d3"><img
                                                                                            alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/leaf.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$9.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">All natural
                                                                                        chocolate hazelnut butter, bananas,
                                                                                        walnuts, and topped with condensed
                                                                                        milk.</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>100% (6)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNTc4MDc2ZmJlZmU1MDM0ZWEwNmViZDdmMTU5YzA2YmUvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="THE GOOD GOOD"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/578076fbefe5034ea06ebd7f159c06be/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25229ea75cfc-af70-4a98-99a7-f916050bd5d3%2522%252C%2522itemUuid%2522%253A%252218be9dc4-2085-4cfd-bdcd-9299e249dfd6%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-d1a36f4c-6511-4442-a473-1fe5db548547"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/9ea75cfc-af70-4a98-99a7-f916050bd5d3/d1a36f4c-6511-4442-a473-1fe5db548547">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">HEY SUNSHINE ! <span
                                                                                        class="eo d3"><img
                                                                                            alt=""
                                                                                            role="presentation"
                                                                                            src="https://d4p17acsd5wyj.cloudfront.net/bazaar/leaf.png"
                                                                                            width="14"
                                                                                            height="14"></span></span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Peanut butter, jam,
                                                                                        honey, and coconut flakes.</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>100% (5)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNjVlMGZhNjNmNzJlMTE1YWNlNjU1NTQxODg3YmY0MGEvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="HEY SUNSHINE !"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/65e0fa63f72e115ace655541887bf40a/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25229ea75cfc-af70-4a98-99a7-f916050bd5d3%2522%252C%2522itemUuid%2522%253A%2522d1a36f4c-6511-4442-a473-1fe5db548547%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-eb852834-4150-46a5-bdd8-3cd127fb7dab"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/9ea75cfc-af70-4a98-99a7-f916050bd5d3/eb852834-4150-46a5-bdd8-3cd127fb7dab">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">YES, OATMEAL !</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$11.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Egg, bacon,
                                                                                        cheddar, jack blend cheese and
                                                                                        garlic aioli.</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%25229ea75cfc-af70-4a98-99a7-f916050bd5d3%2522%252C%2522itemUuid%2522%253A%2522eb852834-4150-46a5-bdd8-3cd127fb7dab%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">French Toasts</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/b6555fa1-8640-4ffe-9ee8-db58c1bd99d5/3ccfa13d-629f-4c84-83fd-dd672d71a0b1">
                                                                <div data-testid="store-menu-item--3ccfa13d-629f-4c84-83fd-dd672d71a0b1"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvNDgwMmQwZTZkODg3YjRlOWFjN2M5YWM3NzUwZmQ2MjQvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="FRENCH TOAST"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/4802d0e6d887b4e9ac7c9ac7750fd624/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522b6555fa1-8640-4ffe-9ee8-db58c1bd99d5%2522%252C%2522itemUuid%2522%253A%25223ccfa13d-629f-4c84-83fd-dd672d71a0b1%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">FRENCH
                                                                                TOAST</span></div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$9.75</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>89% (74)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Tacos</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ae7eb15d-49ac-4cc0-846d-29074ead964c/8b40ed25-dff3-41fa-b2c1-cf7338f8c287">
                                                                <div data-testid="store-menu-item--8b40ed25-dff3-41fa-b2c1-cf7338f8c287"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvOWQwY2RhNWNkYmUyMjE3OTkzMDZjZTY4OGM4ZGEyYmYvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="BREAKFAST TACOS"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/9d0cda5cdbe221799306ce688c8da2bf/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez i7 c9 ey d2 k3 k4 k5">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ae7eb15d-49ac-4cc0-846d-29074ead964c%2522%252C%2522itemUuid%2522%253A%25228b40ed25-dff3-41fa-b2c1-cf7338f8c287%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">BREAKFAST
                                                                                TACOS</span></div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$12.25</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>77% (9)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">OG Drinks</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li data-test="store-item-17035fc2-ca86-4e16-8948-8557ca3dfee9"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ab299026-7c14-4880-8bf8-77b125a7a2c4/17035fc2-ca86-4e16-8948-8557ca3dfee9">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">LATTE</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$6.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">2 SHOTS.</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>91% (37)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvMDFlZjA1YWViNzBjMjhmMmM5OGNiM2Y5MDVjZDIwYWYvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="LATTE"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/01ef05aeb70c28f2c98cb3f905cd20af/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ab299026-7c14-4880-8bf8-77b125a7a2c4%2522%252C%2522itemUuid%2522%253A%252217035fc2-ca86-4e16-8948-8557ca3dfee9%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-a60b177d-8549-4a77-899c-e4ba05d03529"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ab299026-7c14-4880-8bf8-77b125a7a2c4/a60b177d-8549-4a77-899c-e4ba05d03529">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">HOUSE COFFEE</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.00</span>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>100% (20)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ab299026-7c14-4880-8bf8-77b125a7a2c4%2522%252C%2522itemUuid%2522%253A%2522a60b177d-8549-4a77-899c-e4ba05d03529%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-38806eda-026a-4b12-ab4f-4499fcea6448"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ab299026-7c14-4880-8bf8-77b125a7a2c4/38806eda-026a-4b12-ab4f-4499fcea6448">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">AMERICANO</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ab299026-7c14-4880-8bf8-77b125a7a2c4%2522%252C%2522itemUuid%2522%253A%252238806eda-026a-4b12-ab4f-4499fcea6448%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-f7e26b29-b7c4-4f36-a100-d4eaa8b9fbed"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ab299026-7c14-4880-8bf8-77b125a7a2c4/f7e26b29-b7c4-4f36-a100-d4eaa8b9fbed">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">CAPPUCCINO</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$6.75</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ab299026-7c14-4880-8bf8-77b125a7a2c4%2522%252C%2522itemUuid%2522%253A%2522f7e26b29-b7c4-4f36-a100-d4eaa8b9fbed%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-09d6dac7-a4ee-4c46-942a-ce3dc0388129"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ab299026-7c14-4880-8bf8-77b125a7a2c4/09d6dac7-a4ee-4c46-942a-ce3dc0388129">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">HOT CHOCOLATE</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$6.75</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ab299026-7c14-4880-8bf8-77b125a7a2c4%2522%252C%2522itemUuid%2522%253A%252209d6dac7-a4ee-4c46-942a-ce3dc0388129%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-49549bda-4e80-443e-9a83-55ad3353d86a"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/ab299026-7c14-4880-8bf8-77b125a7a2c4/49549bda-4e80-443e-9a83-55ad3353d86a">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">LOOSE LEAF TEA</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Early grey,
                                                                                        jasmine, English breakfast, lemon
                                                                                        ginger, and blue moon herbal.</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522ab299026-7c14-4880-8bf8-77b125a7a2c4%2522%252C%2522itemUuid%2522%253A%252249549bda-4e80-443e-9a83-55ad3353d86a%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Signature Drinks</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li data-test="store-item-1139c363-3193-456d-bec9-17a3f5161580"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f443e4b7-1757-47ae-a21a-28630aa85cb4/1139c363-3193-456d-bec9-17a3f5161580">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">SEÑORITA</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Lightly sweetened
                                                                                        cinnamon latte. <br>*Sweeter
                                                                                        contains dairy. Cannot be made
                                                                                        Vegan*</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>95% (120)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ko c9 kp bl ak">
                                                                            <div class="lazyload-wrapper ">
                                                                                <picture>
                                                                                    <source type="image/webp"
                                                                                        srcset="https://cn-geo1.uber.com/image-proc/resize/eats/format=webp/width=550/height=440/quality=70/srcb64=aHR0cHM6Ly90Yi1zdGF0aWMudWJlci5jb20vcHJvZC9pbWFnZS1wcm9jL3Byb2Nlc3NlZF9pbWFnZXMvOTg4ZjE3N2RkZTA0YzYyMzFlN2Y4NzVjOWYzYmY4NzgvYTE5YmIwOTY5MjMxMGRmZDQxZTQ5YTk2YzQyNGIzYTYuanBlZw==">
                                                                                    <img alt="SEÑORITA"
                                                                                        src="https://tb-static.uber.com/prod/image-proc/processed_images/988f177dde04c6231e7f875c9f3bf878/a19bb09692310dfd41e49a96c424b3a6.jpeg"
                                                                                        aria-hidden="true"
                                                                                        class="ez ko c9 ey l9 k4 k3 d2">
                                                                                </picture>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f443e4b7-1757-47ae-a21a-28630aa85cb4%2522%252C%2522itemUuid%2522%253A%25221139c363-3193-456d-bec9-17a3f5161580%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-5e0067ac-f738-4bf8-b07e-681ae3478024"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f443e4b7-1757-47ae-a21a-28630aa85cb4/5e0067ac-f738-4bf8-b07e-681ae3478024">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">VANILLA LATTE</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">House-made vanilla
                                                                                        latte. Only Signature latte that can
                                                                                        be made Vegan by swapping to
                                                                                        Dairy-Free Milk.</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>96% (31)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f443e4b7-1757-47ae-a21a-28630aa85cb4%2522%252C%2522itemUuid%2522%253A%25225e0067ac-f738-4bf8-b07e-681ae3478024%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-e23c2057-1b90-41c2-a959-2e554ce9f306"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f443e4b7-1757-47ae-a21a-28630aa85cb4/e23c2057-1b90-41c2-a959-2e554ce9f306">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">VIEJITO</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Mexican caramel
                                                                                        latte.<br>*Sweeter contains dairy.
                                                                                        Cannot be made Vegan*</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>96% (32)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f443e4b7-1757-47ae-a21a-28630aa85cb4%2522%252C%2522itemUuid%2522%253A%2522e23c2057-1b90-41c2-a959-2e554ce9f306%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-51872630-fdf1-4004-bc82-816d042aea1d"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f443e4b7-1757-47ae-a21a-28630aa85cb4/51872630-fdf1-4004-bc82-816d042aea1d">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">CHAI TEA LATTE</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">*Sweeter contain
                                                                                        dairy. Cannot be made Vegan*</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f443e4b7-1757-47ae-a21a-28630aa85cb4%2522%252C%2522itemUuid%2522%253A%252251872630-fdf1-4004-bc82-816d042aea1d%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-4f77dc47-7e33-45b9-a2fe-a10d60449620"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f443e4b7-1757-47ae-a21a-28630aa85cb4/4f77dc47-7e33-45b9-a2fe-a10d60449620">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">SPICY MEXICAN
                                                                                    MOCHA</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">House blend
                                                                                        chocolate and spices.<br>*Sweeter
                                                                                        contain dairy. Cannot be made
                                                                                        Vegan*</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>80% (10)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f443e4b7-1757-47ae-a21a-28630aa85cb4%2522%252C%2522itemUuid%2522%253A%25224f77dc47-7e33-45b9-a2fe-a10d60449620%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-05cb9dc2-7d6b-4672-b63c-06c529029bd8"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f443e4b7-1757-47ae-a21a-28630aa85cb4/05cb9dc2-7d6b-4672-b63c-06c529029bd8">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">BITTERSWEET
                                                                                    MOCHA</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$8.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Real dark chocolate
                                                                                        latte.<br>*Sweeter contain dairy.
                                                                                        Cannot be made Vegan*</span></div>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>88% (9)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f443e4b7-1757-47ae-a21a-28630aa85cb4%2522%252C%2522itemUuid%2522%253A%252205cb9dc2-7d6b-4672-b63c-06c529029bd8%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Other Drinks</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/207236e0-d1fe-4e7a-b62c-fbb5c69b24ba/d9521e32-2d37-4825-bfbc-63c075edb570">
                                                                <div data-testid="store-menu-item--d9521e32-2d37-4825-bfbc-63c075edb570"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <div class="i8 i9 ia ib ic id ak ie i7">
                                                                                </div>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522207236e0-d1fe-4e7a-b62c-fbb5c69b24ba%2522%252C%2522itemUuid%2522%253A%2522d9521e32-2d37-4825-bfbc-63c075edb570%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">AGUA
                                                                                FRESCA</span></div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$6.50</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>96% (50)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/207236e0-d1fe-4e7a-b62c-fbb5c69b24ba/a2c773a9-ccf8-4714-93e2-e63096b631c6">
                                                                <div data-testid="store-menu-item--a2c773a9-ccf8-4714-93e2-e63096b631c6"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <div class="i8 i9 ia ib ic id ak ie i7">
                                                                                </div>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522207236e0-d1fe-4e7a-b62c-fbb5c69b24ba%2522%252C%2522itemUuid%2522%253A%2522a2c773a9-ccf8-4714-93e2-e63096b631c6%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">ELECTROLIT</span>
                                                                        </div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$6.25</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/207236e0-d1fe-4e7a-b62c-fbb5c69b24ba/7d70e807-94f1-4266-a633-5da12e2365b7">
                                                                <div data-testid="store-menu-item--7d70e807-94f1-4266-a633-5da12e2365b7"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <div class="i8 i9 ia ib ic id ak ie i7">
                                                                                </div>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522207236e0-d1fe-4e7a-b62c-fbb5c69b24ba%2522%252C%2522itemUuid%2522%253A%25227d70e807-94f1-4266-a633-5da12e2365b7%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">COCONUT
                                                                                WATER</span></div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$4.75</span>
                                                                        </p>
                                                                        <div
                                                                            class="be g9 bg bh ch b1 dn af j2 f5 j3 in bl gs bn j4 al cf">
                                                                            <svg width="1em" height="1em"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <title>Thumb up</title>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                            <div class="spacer _4"></div>
                                                                            <div class="spacer _4"></div>100% (4)
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li class="gx hy hz ak i0 i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/207236e0-d1fe-4e7a-b62c-fbb5c69b24ba/04e64413-0814-4520-9837-3513611072d1">
                                                                <div data-testid="store-menu-item--04e64413-0814-4520-9837-3513611072d1"
                                                                    class="c9 al i6 ak">
                                                                    <div class="i7 c9 d2 bl ak">
                                                                        <div class="ak ae">
                                                                            <div class="lazyload-wrapper ">
                                                                                <div class="i8 i9 ia ib ic id ak ie i7">
                                                                                </div>
                                                                            </div>
                                                                            <div class="ag as at dc eu f1"></div>
                                                                        </div>
                                                                        <div class="ag ik il im"><a
                                                                                class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522207236e0-d1fe-4e7a-b62c-fbb5c69b24ba%2522%252C%2522itemUuid%2522%253A%252204e64413-0814-4520-9837-3513611072d1%2522%257D&amp;ps=1">Quick
                                                                                view</a></div>
                                                                        <div class="ag it al cf aq ig"></div>
                                                                    </div>
                                                                    <div class="iu al am ae">
                                                                        <div class="h7 h8 iv bl"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be ct bg du b1">LA
                                                                                CROIX</span></div>
                                                                        <p class="al cf g6"><span
                                                                                data-testid="rich-text"
                                                                                class="g7 e0 g8 be bf cu du b1">$2.50</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li data-test="store-item-5596d62f-1ffb-4ea0-b315-8257510db9f4"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/207236e0-d1fe-4e7a-b62c-fbb5c69b24ba/5596d62f-1ffb-4ea0-b315-8257510db9f4">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">TOPO CHICO</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$4.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522207236e0-d1fe-4e7a-b62c-fbb5c69b24ba%2522%252C%2522itemUuid%2522%253A%25225596d62f-1ffb-4ea0-b315-8257510db9f4%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-147840a8-30fe-4dc8-bad6-364e587fdf97"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/207236e0-d1fe-4e7a-b62c-fbb5c69b24ba/147840a8-30fe-4dc8-bad6-364e587fdf97">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">SMART WATER</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$4.00</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">23.7 Oz</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522207236e0-d1fe-4e7a-b62c-fbb5c69b24ba%2522%252C%2522itemUuid%2522%253A%2522147840a8-30fe-4dc8-bad6-364e587fdf97%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                            <div class="iw">
                                                <li class="h0 ix">
                                                    <div class="h7 h8 h9 bl">
                                                        <h3 class="ha hb fa f8 b1">Pastries</h3>
                                                    </div>
                                                    <div class="d2 gl"></div>
                                                    <ul class="hr iy iz hu hv hw kg j1 bc">
                                                        <li data-test="store-item-05d37f0e-1159-437d-adbd-c32c35190544"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f7463d08-d653-4c24-86b1-3004b77091bd/05d37f0e-1159-437d-adbd-c32c35190544">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">CHOCOLATE
                                                                                    CROISSANT</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.75</span>
                                                                            </div>
                                                                            <div class="f5">
                                                                                <div
                                                                                    class="af in bl gs bn j4 be g9 bg bh b1 j3 ch j2 al dn cf">
                                                                                    <svg width="1em" height="1em"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none">
                                                                                        <title>Thumb up</title>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M15 3v6h5.5c1.4 0 2.5 1.1 2.5 2.5v3l-2.7 5.8c-.5 1-1.5 1.7-2.7 1.7H7V10l4.5-10h.5c1.7 0 3 1.3 3 3ZM2 10h3v12H2V10Z"
                                                                                            fill="currentColor"></path>
                                                                                    </svg>
                                                                                    <div class="spacer _4"></div>100% (11)
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f7463d08-d653-4c24-86b1-3004b77091bd%2522%252C%2522itemUuid%2522%253A%252205d37f0e-1159-437d-adbd-c32c35190544%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-b6a26642-29cb-45e0-83fa-ce76f548cd8f"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f7463d08-d653-4c24-86b1-3004b77091bd/b6a26642-29cb-45e0-83fa-ce76f548cd8f">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">ALMOND CROISSANT</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.75</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f7463d08-d653-4c24-86b1-3004b77091bd%2522%252C%2522itemUuid%2522%253A%2522b6a26642-29cb-45e0-83fa-ce76f548cd8f%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-21ec86b9-814c-4256-895d-7b269daa0399"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f7463d08-d653-4c24-86b1-3004b77091bd/21ec86b9-814c-4256-895d-7b269daa0399">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">MUFFIN</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Flavors Change
                                                                                        Daily.</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f7463d08-d653-4c24-86b1-3004b77091bd%2522%252C%2522itemUuid%2522%253A%252221ec86b9-814c-4256-895d-7b269daa0399%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-abc7546b-fb86-4af3-82b2-24f3329b038e"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f7463d08-d653-4c24-86b1-3004b77091bd/abc7546b-fb86-4af3-82b2-24f3329b038e">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">SUPRISE
                                                                                    CROISSANT</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.75</span>
                                                                            </div>
                                                                            <div class="iu h7 kl h8 bl km cm">
                                                                                <div class="be bf cu du b1"><span
                                                                                        class="kn">Flavors Change
                                                                                        Daily.</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f7463d08-d653-4c24-86b1-3004b77091bd%2522%252C%2522itemUuid%2522%253A%2522abc7546b-fb86-4af3-82b2-24f3329b038e%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-41cb2a01-a40e-4517-b017-c16dd7ab1dd3"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f7463d08-d653-4c24-86b1-3004b77091bd/41cb2a01-a40e-4517-b017-c16dd7ab1dd3">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">SCONES</span></div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.75</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f7463d08-d653-4c24-86b1-3004b77091bd%2522%252C%2522itemUuid%2522%253A%252241cb2a01-a40e-4517-b017-c16dd7ab1dd3%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                        <li data-test="store-item-3113c58c-3b1c-45a1-8cda-c1aef9f3b505"
                                                            class="gx hy hz kh ak i1 i2 i3 i4"><a tabindex="0"
                                                                class="al cs i5 cj ki"
                                                                href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A/aaecfcc0-9e20-4c6d-89a9-4adadaabcc98/f7463d08-d653-4c24-86b1-3004b77091bd/3113c58c-3b1c-45a1-8cda-c1aef9f3b505">
                                                                <div class="al am c9 ae ak kj">
                                                                    <div class="al cs aq">
                                                                        <div class="al cs ff kk am c9">
                                                                            <div class="be ct bg du b1"><span
                                                                                    class="">PLAIN CROISSANT</span>
                                                                            </div>
                                                                            <div class="iu al cf g6"><span
                                                                                    data-testid="rich-text"
                                                                                    class="g7 e0 g8 be bf cu du b1">$5.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ag it al cf aq ig"><a
                                                                            class="be bf bg bh in dm io cf ca b1 al cj ip dp dq dr dj iq ax g1 ir is bn gs"
                                                                            href="/store/breakfast-little/WlvVXhU9WFuakA-iBZOW-A?mod=quickView&amp;modctx=%257B%2522storeUuid%2522%253A%25225a5bd55e-153d-585b-9a90-0fa2059396f8%2522%252C%2522sectionUuid%2522%253A%2522aaecfcc0-9e20-4c6d-89a9-4adadaabcc98%2522%252C%2522subsectionUuid%2522%253A%2522f7463d08-d653-4c24-86b1-3004b77091bd%2522%252C%2522itemUuid%2522%253A%25223113c58c-3b1c-45a1-8cda-c1aef9f3b505%2522%257D&amp;ps=1">Quick
                                                                            view</a></div>
                                                                </div>
                                                            </a></li>
                                                    </ul>
                                                </li>
                                            </div>
                                        </ul>
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
