@if ($paginator->hasPages())

    <nav aria-label="...">
        <ul class="pagination justify-content-start">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <a class="page-link" href="#"><i class="far fa-angle-double-left" aria-hidden="true"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="far fa-angle-double-left" aria-hidden="true"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="far fa-angle-double-right" aria-hidden="true"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <a class="page-link" href="#"><i class="far fa-angle-double-right" aria-hidden="true"></i></a>
                </li>
            @endif
        </ul>
    </nav>
@endif
