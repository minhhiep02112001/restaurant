@extends('front_end._index')
@section('content')
    <article style="height: auto" class="container-fluid section-content" id="content_page">
        <h1 style="text-align: center;">{!! $oneItem->title !!}</h1>
        <p class="center"></p>
        <div class="content">
            {!! $oneItem->content !!}
        </div>
    </article>
@endsection

@extends('front_end._index')
@section('content')
    <div id="main-content" style="margin-bottom: 365px;">
        <div id="sub-header" class="layout-left-only">
            <div class="meta-header" style="">
                <div class="limit-wrapper">
                    <div class="meta-header-inside">
                        <header class="page-header layout-centered  " data-progressive-animation="page-title">
                            <h1 style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);" itemprop="headline">
                                {!! $oneItem->title !!}
                            </h1>
                            <div class="page-header-line"
                                style="opacity: 1; width: 500px; transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div id="main" role="main" class="vamtam-main layout-left-only  ">
            <div class="limit-wrapper">
                <div class="row page-wrapper">
                    <article id="post-3" class="left-only post-3 page type-page status-publish hentry">
                        <div class="page-content pitoki">
                            <div class="row ">
                                <div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1  first unextended no-extended-padding"
                                    style="padding-top:0.05px;padding-bottom:0.05px;"
                                    id="vamtam-column-a71303dde15d1f7de56faf0ae3a8c989">
                                    {!! $oneItem->content !!}
                                </div>
                            </div>
                            @include('front_end.block.location')
                        </div>
                        <div class="limit-wrapper">
                        </div>
                    </article>
                    <aside class="left vamtam-body-sidebar">
                        @include('front_end.block.sidebar')
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
