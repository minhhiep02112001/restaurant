@if (!empty($games))
    @foreach ($games as $item)
        <article class="item">
            <div class="row apkbox">
                <div class="test">
                    <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}">
                        {{-- {!! getThumbnail($item, 100, 100, 'lazyload') !!} --}}
                        <img  src="{{getImageThumb($item->background_img, 250, 180)}}" alt="{{ $item->title }}" />
                                              
                    </a>
                </div>
                <div class="ifacs">
                    <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}" class="pic"
                        title="{{ $item->title }}">
                        {!! getThumbnail($item, 50, 50, 'lazyload apk-img') !!}
                    </a>
                    <div class="apkinfo">
                        <strong>
                            <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}">
                                {{ $item->title }}
                            </a>
                            <i class="cmr">
                                @for ($i = 1; $i <= 5; $i++)
                                    <img src="{{ asset('assets/img/stars/' . ($i < $item->avg_vote ? 'rating_off.png' : 'rating_on.png')) }}"
                                        alt="{{ $item->total_vote ?? 0 }} votes, average: {{ $item->avg_vote ?? 0 }} out of {{ $i }}"
                                        class="post-ratings-image" />
                                @endfor
                            </i>
                        </strong>
                    </div>
                    <div class="doms"><a title="{{ $item->title }}"
                            href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}"><i
                                class="icon-font icon-download-new"
                                style="display: inline-block;margin: 0;color: #fff;"></i></a>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
@endif
