@if ($paginator->hasPages())
    <div class="col-lg-12">
        <div class="que_pagination text-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="prev disabled"><i class="fa-solid fa-arrow-left"></i></span>
            @else
                <a class="prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="page-numbers dots">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="current">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            @else
                <span class="next disabled"><i class="fa-solid fa-arrow-right"></i></span>
            @endif
        </div>
    </div>
@endif
