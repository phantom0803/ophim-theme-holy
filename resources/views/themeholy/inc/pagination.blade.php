@if ($paginator->hasPages())
    <div class="text-center" style="margin-top: 3vh;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        @else
            <a class="btn btn-outline-secondary" type="button"
                style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);margin-bottom: 1vh;"
                href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">« Previous</a>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span class="">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page"
                            style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);margin-bottom: 1vh;"
                            class="btn btn-outline-warning">{{ $page }}</span>
                    @else
                        <a class="btn btn-outline-secondary" type="button"
                            style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);margin-bottom: 1vh;"
                            href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn btn-outline-secondary" type="button"
                style="margin-right: 1vw;padding-right: 15px;padding-left: 15px;padding-top: 5px;padding-bottom: 5px;font-size: calc(0.6rem + 0.4vw);margin-bottom: 1vh;"
                href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next »</a>
        @else
        @endif
    </div>
@endif
