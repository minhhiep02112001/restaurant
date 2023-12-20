@php
    header('Content-type: text/xml');
@endphp
<?xml version = "1.0"?>
<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:media="http://search.yahoo.com/mrss/" xml:lang="en" version="2.0">
    <channel>
        <lastBuildDate>{{ now() }}</lastBuildDate>
        <title>RSS {{env('APP_NAME' , '')}}</title>
        <description>Google News RSS {{env('APP_NAME' , '')}}</description>
        <link>{{ url('/') }}</link>
        @foreach ($data as $item)
            @php
                $time = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->updated_at);
            @endphp
            <item>
                <guid isPermaLink="true">{{ route('page', ['slug' => $item->slug ]) }}</guid>
                <title>{{ $item->title }}</title>
                <description>
                    <![CDATA[ <a title="{{$item->title}}" href="{{ route('page', ['slug' => $item->slug ]) }}"><img src="{{convertPathImage($item->thumbnail) }}" alt="{{$item->title}}"></a></br>{!! $item->description !!} ]]>
                </description>
                <content:encoded>
                    <![CDATA[ {!! $item->description !!} ]]>
                </content:encoded>
                <pubDate>{{ $time->format('Y-m-d\TH:i:sP') }}</pubDate>
                <link>{{ route('page', ['slug' => $item->slug ])  }}</link>
                <guid>{{ route('page', ['slug' => $item->slug ])  }}</guid>
                <author>{{env('APP_NAME' , '')}}</author>
            </item>
        @endforeach
    </channel>
</rss>
