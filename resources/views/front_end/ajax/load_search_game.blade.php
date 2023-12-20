@if (!empty($games))
    @foreach ($games as $item)
        <li>
            <a href="{{ route('detail.game', ['slug' => $item->slug, 'id' => $item->id]) }}" title="{{ $item->title }}">
                <i class="icon-font icon-flame"></i>
                {{ $item->title }}
            </a>
        </li>
    @endforeach
@endif
