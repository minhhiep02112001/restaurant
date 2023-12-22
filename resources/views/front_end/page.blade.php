@extends('front_end._index')
@section('content')
    <article style="height: auto" class="container-fluid section-content" id="content_page">
        <h1>{!! $oneItem->title !!}</h1>
        <span class="publish_at">Publish at: {!! $oneItem->updated_at !!}</span>
        <p class="center"></p>
        <div class="content">
            {!! $oneItem->content !!}
        </div>
    </article>
@endsection
