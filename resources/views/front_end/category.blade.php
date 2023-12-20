@extends('front_end._index')

@section('content')
    <div class="apkaadd" style="border-top:0;max-width:100%;margin:50px 0 0;"></div>
    <div class="content row autow">
        <div class="qierba">
            <div class="content_box Populargames pgame row">
                <div class="most_box mostbx">
                    <div class="xsmos row">
                        {!! getBreadCrumbs($bread_crumbs) !!}

                        <h2 class="inx">{{ $oneItem->title }}</h2>
                        <div class="most">
                            <div class="kijsaz" id="fillter-category">
                                <a class="filter active" data-order_by="updated_at" class="current"
                                    href="/"><span>Update</span></a>
                                <a class="filter" data-order_by="viewed" href="/"><span>Popular</span></a>
                                <a class="filter" data-order_by="avg_vote" href="/"><span>Rating</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-box category row agood">
                    <div class="Populargames  pgame csszp ">
                        <div class="main-box row" id="box-data-game" data-type="category"
                            data-category_id="{{ $oneItem->id }}" data-page="1" data-limit="20"
                            data-order_by="publish_at">
                        </div>
                    </div>
                    <div class="cssmore" id="paginate"><a href="Javascript:void(0)" class="loadmore">Load more games</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        .cnx-float {
            position: fixed !important;
            z-index: -1 !important;
            position: static !important;
        }

        #goTop i {
            font-size: 25px;
        }

        #goTop {
            width: 50px;
            height: 50px;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 3;
            display: none;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .02);
            box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .06);
            text-align: center;
            border-radius: 5px;
            line-height: 50px;
        }

        #goTop img {
            width: 50px;
            height: 50px;
            opacity: 0.37;
        }

        #goTop img:hover {
            opacity: 0.72
        }

        @media screen and (min-width:300px) and (max-width:600px) {
            body #goTop {
                right: 10px;
                bottom: 60px;
                width: 25px;
                height: 25px;
            }

            #goTop img {
                width: 25px;
                height: 25px;
            }
        }

        #footer {
            background: #222;
        }

        #footer i {
            margin-left: 20px;
        }

        #footer i a {
            margin-left: 5px;
        }

        @media screen and (min-width: 0px) and (max-width: 600px) {
            #footer i {
                display: block;
                margin: 0;
            }

            #footer {
                margin: 20px 0 50px;
            }

            #goTop {
                line-height: 26px;
            }

            #goTop i {
                font-size: 15px;
            }

            .doms a {
                width: 40px;
            }

            .pgame .main-box .apkinfo {
                margin: 0 55px 0 105px;
            }
        }

        .content article strong i.cmr img {
            width: 10px;
        }

        #st-1 .st-total {
            display: none;
        }

        @media screen and (min-width: 400px) and (max-width: 600px) {
            .content .pgame .main-box .apkinfo {
                margin: 0 55px 0 130px;
            }

            .content .awgs .main-box .apkinfo {
                margin: 2px 55px 0 60px;
            }
        }

     
    </style>
@endsection
