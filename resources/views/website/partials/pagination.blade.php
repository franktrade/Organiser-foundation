@if ($paginator->hasPages())
    <ul class="pagination_wrap align-center mt-30">
        @if ($paginator->onFirstPage())
            <li class="disabled"><i class="ti-arrow-left"></i></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="ti-arrow-left"></i></a></li>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="active">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}"><i class="ti-arrow-right"></i></a></li>
        @else
            <li class="disabled"><i class="ti-arrow-right"></i></li>
        @endif
    </ul><!-- Pagination -->
@endif
