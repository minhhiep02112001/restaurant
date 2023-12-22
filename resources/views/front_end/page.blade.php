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
