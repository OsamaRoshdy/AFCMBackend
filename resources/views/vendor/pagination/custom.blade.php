

@if ($paginator->hasPages())

        @if ($paginator->onFirstPage())
            <a href="#" class="prev page-numbers">
                <i class="ri-arrow-left-line"></i>
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="prev page-numbers">
                <i class="ri-arrow-left-line"></i>
            </a>
{{--            <a href="{{ $paginator->previousPageUrl() }}">&laquo;</a>--}}
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <span class="page-numbers current" aria-current="page">{{ $element }}</span>

{{--                <li class="disabled"><span>{{ $element }}</span></li>--}}
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-numbers current" aria-current="page">{{ $page }}</span>
{{--                        <a class="active">{{ $page }}</a>--}}
                    @else
                        <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>

{{--                        <a href="{{ $url }}">{{ $page }}</a>--}}
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers">
                <i class="ri-arrow-right-line"></i>
            </a>
{{--            <a href="{{ $paginator->nextPageUrl() }}">&raquo;</a>--}}
        @else
            <a href="#" class="next page-numbers">
                <i class="ri-arrow-right-line"></i>
            </a>
{{--            <a>&raquo;</a>--}}
        @endif
    </ul>
@endif
