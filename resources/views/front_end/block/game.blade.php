@if (!empty($data_game))
    @foreach ($data_game as $item)
        <article>
            <div class="row apkbox apkbox_detail">
                <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}" class="pic"
                    title="{{ $item->title }}">
                    {!! getThumbnail($item, 150, 150, 'lazyload apk-img') !!}
                </a>
                <div class="apkinfo">
                    <strong>
                        <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"
                            class="data-title" title="{{ $item->title }}">{{ $item->title }}</a>
                         
                        <span class="version">{{ $item->version_title ?? 'Update' }}</span> 
                        <span class="score">{{ $item->avg_vote ?? 0 }}</span> 
                    </strong>
                </div>
            </div>
        </article>
    @endforeach
@endif 
