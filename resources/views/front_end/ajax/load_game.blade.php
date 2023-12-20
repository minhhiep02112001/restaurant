@if (!empty($games))
    @foreach ($games as $item)
        <article class="item">
            <div class="row apkbox apkbox_detail">
                <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}" class="pic"
                    title="{{ $item->title }}">
                    {!! getThumbnail($item, 100, 100, 'lazyload apk-img') !!}
                </a>
                <div class="apkinfo">
                    <strong>
                        <a class="title-box" href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"
                            title="{{ $item->title }}">{{ $item->title }}</a> 
                        <span class="version">Ver: {{ $item->version_title ?? 'Update' }}</span> 
                         <span class="emo cmz">View: {{ $item->viewed }}</span>
                        
                        <span style="display: flex;margin-top: -5px;">Vote: <span class="score">{{ $item->avg_vote ?? 0 }}</i> </span> 
                    </strong>
                </div>
                <div class="doms">
                    <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"
                        title="{{ $item->title }}">
                        <i class="icon-font icon-download-new"></i>
                    </a>
                </div>
            </div>
        </article>
    @endforeach
@endif
