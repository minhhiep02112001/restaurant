@extends('front_end._index')

@php
    $category = $categories[0] ?? [];
@endphp

@section('content')
    <div class="topadd pddsa"></div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".hv").click(function() {
                $(this).toggleClass("hvs").parents(".llbb").find(".hvls").toggleClass("hv_sblock");
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".iksa").click(function() {
                $(this).toggleClass("hvssz").parents(".like-apk-file").find(".oksaz").toggleClass(
                    "hv_sblock");
            });
        });
    </script>
    <div class="content iphonesign kops boiiyy row detail_game">
        <div class="qierba kknew douuii">
            <div class="content_box main row">
                <article class="sac">
                    <div class="row apkbox">
                        <a href="{{ route('detail.game', ['slug' => $oneItem->slug, 'id' => $oneItem->id]) }}"
                            title="{{ $oneItem->title }}" class="pic">

                            {!! getThumbnail($oneItem, 150, 150, 'lazyload') !!}

                        </a>
                        <div class="apkinfo">
                            <h1>
                                <strong class="sing"> {{ $oneItem->title }}
                                    <span class="szk"> </span><span
                                        class="emo">{{ $version['title'] ?? 'Updated' }}</span></strong>
                            </h1>
                            <div class="votes row">
                                <div class="rating">
                                    <span class="stars-container" id="vote_rating" score="{{ $oneItem->avg_vote }}"
                                        id="{{ $oneItem->total_vote }}">
                                        @for ($i = 5; $i > 0; $i--)
                                            <span id="star{{ $i }}" data-vote="{{ $i }}"
                                                data-game_id="{{ $oneItem->id }}"
                                                class="fa star vote_game {{ $oneItem->avg_vote == $i ? 'selected' : '' }}"></span>
                                        @endfor
                                    </span>
                                    <a class="reviews">({{ $oneItem->total_vote }})</a>
                                </div>


                                <div id="post-ratings-6953" class="post-ratings">

                                    <div class="pfba" style=""><i class="icon-font icon-award"></i> <i
                                            class="cmr oisjs">{{ $oneItem->avg_vote }}</i></div>

                                </div>
                                <div id="post-ratings-6953-loading" class="post-ratings-loading">
                                    <img src="{{ asset('assets/img/loading.gif') }}" width="16" height="16"
                                        class="post-ratings-image">Loading...
                                </div>
                            </div>

                            @include('front_end.block.share_socail')
                        </div>

                    </div>
                </article>
                @if (!empty($file))
                    @if (!empty($file['file_name_apk']))
                        <div id="DAPK" name="DAPK">
                            <div class="like-apk-file">
                                <span class="freedow download-file" style="cursor:pointer;" data-id="<?php echo $file['id']; ?>"
                                    data-type='apk'>
                                    <span>Download APK</span> <i class="mode">({{ trim($file['storage']) }})</i>
                                </span>
                            </div>
                        </div>
                    @endif
                    {{-- <div class="gp2023" style="text-align: center;background: #ccc;padding: 10px;">
                        <div class="aobb">
                            <p><a target="_blank" href="/how-to-install-apks-xapk-zip-games.html">How to
                                    install APKS, XAPK, ZIP games?</a></p>
                        </div>If Google Play prevents the app from installing, click (Details &gt; Install Anyway &gt; OK).
                    </div> --}}
                @endif

                @if (!empty($files))
                    <div class="flashBox" id="all_variants"><span id="more-6953"></span>
                        <div class="table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Variants</th>
                                        <th>Publish at</th>
                                        <th>Requires</th>
                                        <th>Storage</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($files as $item)
                                        <tr>
                                            <td>{{ $item['structure'] ?? '' }}</td>
                                            <td>{{ $item['publish_at'] ?? '' }}</td>
                                            <td>{{ $item['requires'] ?? '' }}</td>
                                            <td>{{ $item['storage'] ?? '' }}</td>
                                            <td>
                                                <div class="download_file" data-link="">
                                                    <i class="icon-font icon-download-new"></i>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <div class="more-post addinfo" style="padding-bottom:0;">
                    <h3>Additional Information</h3>
                    <ul class="row">

                        <li class="">
                            <div><strong><i class="icon-font icon-level"></i> Category</strong>
                                @if (!empty($category))
                                    <span>
                                        <a href="{{ route('category.game', ['slug' => $category->slug, 'id' => $category->id]) }}"
                                            title="{{ $category->title }}" rel="category tag">{{ $category->title }}</a>
                                    </span>
                                @else
                                    <span>Updated</span>
                                @endif
                            </div>
                        </li>
                        <li class="">
                            <div><strong><i class="icon-font icon-complain"></i> Current
                                    Version</strong><span>{{ $version['title'] ?? 'Updated' }}</span></div>
                        </li>
                        <li class="">
                            <div><strong><i class="icon-font ic-zhongbo"></i> Updated</strong>
                                <span>{{ $oneItem->publish_at }}</span>
                            </div>
                        </li>
                        <li class="">
                            <div><strong><i class="icon-font icon-android"></i> Requires Android</strong><span>5.0 and
                                    up</span></div>
                        </li>
                        <li class="">
                            <div><strong><i class="icon-font icon-success"></i> Structure</strong>
                                <span>{{ $file['structure'] ?? 'Updated' }}</span>
                            </div>
                        </li>
                        <li class="">
                            <div><strong><i class="icon-font icon-success"></i> Size</strong>
                                <span>{{ $file['storage'] ?? 'Updated' }}</span>
                            </div>
                        </li>


                        <li class="">
                            <div><strong><i class="icon-font icon-set"></i> Developer</strong><span
                                    class="pid-games">{{ $oneItem->developer ?? 'Updated' }}</span></div>
                        </li>

                        <li class="">
                            <div>
                                <strong>
                                    <i class="icon-font icon-play"></i> Get it on
                                </strong>
                                @if (!empty($oneItem->link_gg_play))
                                    <a href="{{ $oneItem->link_gg_play }}" target="_blank"><span>Google Play<span></a>
                                @else
                                    <span>Updated<span>
                                @endif

                            </div>
                        </li>
                    </ul>
                </div>

                <div class="more-post" style="padding-top:20px;">
                    <div class="more-show detail-content">
                        {!! $oneItem->content !!}
                    </div>
                </div>
            </div>

            @if (!empty($versions))
                <div class="Populargames azsz">
                    <div class="most_box">
                        <h2 class="inx">Old Versions</h2></a>
                    </div>
                    <div class="main-box row" style="padding-bottom: 10px;">
                        <div class="old_version pgame csszp" id="old_version" data-game_id="{{ $oneItem->id }}">
                            @foreach ($versions as $item)
                                <article class="item">
                                    <div class="row apkbox">
                                        <a href="{{ route('old_version.game', ['slug' => $oneItem->slug, 'code' => $item['hash_code']]) }}"
                                            class="pic" title="{{ $oneItem->title . ' ' . $item['title'] }}">

                                            {!! getThumbnail($oneItem, 50, 50, 'lazyload') !!}

                                        </a>
                                        <div class="apkinfo">
                                            <strong>
                                                <a class="title"
                                                    href="{{ route('old_version.game', ['slug' => $oneItem->slug, 'code' => $item['hash_code']]) }}"
                                                    title="{{ $oneItem->title . ' ' . $item['title'] }}">{{ $item['title'] }}</a>
                                                <i class="emo cmz">{{ $item['publish_at'] ?? '' }}</i>
                                            </strong>
                                        </div>
                                        <div class="doms">
                                            <a href="{{ route('old_version.game', ['slug' => $oneItem->slug, 'code' => $item['hash_code']]) }}"
                                                title="{{ $oneItem->title . ' ' . $item['title'] }}">
                                                <i class="icon-font icon-download-new"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif

            <div class="Populargames azsz">
                <div class="most_box">
                    <h2 class="inx">Editor's Choice Games</h2>
                </div>
                <div class="main-box row">
                    <div class="topics_boxsoll">
                        <div class="sollaaa">
                            @if (!empty($game_relationship))
                                @foreach ($game_relationship as $item)
                                    <article>
                                        <div class="row apkbox apkbox_detail">
                                            <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"
                                                class="pic" title="{{ $item->title }}">
                                                {!! getThumbnail($item, 150, 150, 'lazyload apk-img-detail') !!}
                                            </a>
                                            <div class="apkinfo">
                                                <strong>
                                                    <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"
                                                        title="{{ $item->title }}">
                                                        {{ $item->title }}</a>
                                                    {!! view_vote($item) !!}
                                                </strong>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            @endif
                            <style type="text/css">
                                .qierba .Populargames .main-box article {}

                                .content article strong i.emo {
                                    display: inline-block;
                                    white-space: normal;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="Populargames popsz">
                <div class="most_box">
                    @if (!empty($category_parent) && $category_parent->id == 1)
                        <h2 class="inx">Update New Games</h2><a href="/games-new.html" class="smore">See More</a>
                    @elseif(!empty($category_parent) && $category_parent->id == 20)
                        <h2 class="inx">Update New App</h2><a href="/apps-new.html" class="smore">See More</a>
                    @else
                        <h2 class="inx">Update Games</h2><a href="/update-games.html" class="smore">See More</a>
                    @endif
                </div>
                <div class="main-box row">
                    <div class="topics_boxsoll">
                        <div class="sollaaa">
                            @if (!empty($game_news))
                                @foreach ($game_news as $item)
                                    <article>
                                        <div class="row apkbox apkups">
                                            <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"
                                                class="pic" title="{{ $item->title }}">
                                                {!! getThumbnail($item, 50, 50, 'lazyload') !!}

                                            </a>
                                            <div class="apkinfo">
                                                <strong>
                                                    <a
                                                        href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}">
                                                        {{ $item->title }}
                                                    </a>
                                                    {!! view_vote($item) !!}
                                                </strong>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if (!empty($game_hots))
                <div class="topics_box" style="">
                    <ul class="row">
                        @foreach ($game_hots as $item)
                            <li><a {{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"
                                    title="{{ $item->title }}">

                                    <img src="{{ getImageThumb($item->background_img, 250, 180) }}"
                                        alt="{{ $item->title }}" />

                                    <strong>{{ $item->title }}</strong></a></li>
                        @endforeach

                    </ul>
                </div>
            @endif
        </div>
    </div>
    <div class="com_block"><i class="icon-font icon-close-notice"
            style=" position: fixed; right: 0; top: 110px; color: #eee; font-size: 30px; "></i></div>
    <div class="comments-f coms">

        <script type="text/javascript">
            $(document).ready(function() {
                $(".coma").click(function() {
                    $(".coma").toggleClass("comas");
                    $(".comments-f").toggleClass("comments-fs");
                    $("body").toggleClass("ksm");
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".com_block").click(function() {
                    $(".coma").toggleClass("coma");
                    $(".comments-f").toggleClass("comments-fs");
                    $("body").toggleClass("ksm");
                });
            });
        </script>
    </div>
    <script>
        function countapk(node, apkUrl, count) {
            node.style.pointerEvents = "none";
            node.style.cursor = "default";
            if (count == 0) {
                window.location.href = apkUrl;
                node.style.pointerEvents = "auto";
                node.style.cursor = "pointer"
            } else {
                count -= 1;
                setTimeout(function() {
                    countapk(node, apkUrl, count)
                }, 1000)
            }
        }

        function apk_mod(node, apkUrl) {
            countapk(node, apkUrl, 0)
        };
        $(document).ready(function() {
            $(".coma").click(function() {
                $(".coms").show();
            });
        });
    </script>

@endsection
