@php
    $config_seo = json_decode(getValueSetting('config_seo'));
    $config_website = json_decode(getValueSetting('config_website'));
    $content_home = $config_seo->content_home ?? '';
@endphp
@extends('front_end._index')

@section('content')
<div class="featured-img">
    <img src="{{ asset('/images/banner_home.jpg') }}">
</div><!-- .featured-img -->

<div class="cleafix" id="abouts">
    <div class="container">
        <div class="row">
            <div class="header-detail-events">
                <h1><span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tian Tian Hainanese Chicken Rice</font>
                        </font>
                    </span></h1>
                <div class="header-detail-events-left">
                    <div class="date-detail">
                        <img width="100" src="{{ asset('/images/chicken-rice-outside.jpeg') }}">

                    </div>
                </div>
                <div class="header-detail-events-right">
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    1 Kadayanallur St #01 -10/11 Maxwell Food Center Singapore 069120 Singapore
                                </font>
                            </font>
                        </li>
                        <li>
                            <!--<li>
                                <i class="fa fa-tags"></i>
                                                                    <li>-->
                            <a href="tel:9691 4852"><i class="fa fa-phone"></i>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">9691 4852</font>
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
            <div class="gioithieufield" data-readmore="" aria-expanded="false" id="rmjs-1">

                {!! $content_home !!}
            </div>
        </div>
    </div>
</div><!-- .tier-row -->

<div class="tier-row datban-location cleafix" id="ticket-map"
    style="background: url('{{asset('images/chicken-rice.jpg')}}') no-repeat; background-size:cover;">
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
                                            src="{{asset('images/menu.jpeg')}}">
                                    </div>
                                    <div class="item">
                                        <img
                                            src="{{asset('images/menu.jpeg')}}">
                                    </div>
                                    <div class="item active">
                                        <img
                                            src="{{asset('images/menu.jpeg')}}">
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
                </span> <a href="tel:9691 4852">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">9691 4852</font>
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
                                            placeholder="Mobile (Phone Number)" value="" type="tel"
                                            name="sodienthoai"></span>
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
                                            class="wpcf7-form-control wpcf7-submit has-spinner" type="button"
                                            value="Send now"></font>
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
                    '{{asset('images/GALLERY_1.jpg')}}',
                    '{{asset('images/GALLERY_2.jpg')}}',
                    '{{asset('images/GALLERY_3.jpg')}}',
                    '{{asset('images/GALLERY_4.jpg')}}',
                    '{{asset('images/GALLERY_5.jpg')}}',
                    '{{asset('images/GALLERY_6.jpg')}}',
                    '{{asset('images/GALLERY_7.jpg')}}',
                    '{{asset('images/GALLERY_8.jpg')}}',
                    '{{asset('images/GALLERY_9.jpg')}}',
                    '{{asset('images/GALLERY_10.jpg')}}',
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
        <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.288110715092!2d103.8447987!3d1.2804528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da190d52e090d9%3A0xda3a74c41269425d!2sTian%20Tian%20Hainanese%20Chicken%20Rice!5e0!3m2!1sen!2sus!4v1703684818406!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
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
@endsection
