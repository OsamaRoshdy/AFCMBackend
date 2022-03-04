{{--<a href="#">&laquo;</a>--}}
{{--<a href="#">1</a>--}}
{{--<a href="#" class="active">2</a>--}}
{{--<a href="#">3</a>--}}
{{--<a href="#">4</a>--}}
{{--<a href="#">5</a>--}}
{{--<a href="#">6</a>--}}
{{--<a href="#">&raquo;</a>--}}




@if ($paginator->hasPages())

        @if ($paginator->onFirstPage())
            <a>&laquo;</a>
{{--            <li class="disabled"><span><a href="#">&laquo;</a></span></li>--}}
        @else
            <a href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
{{--            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>--}}
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="active">{{ $page }}</a>
{{--                        <li class="active my-active"><span>{{ $page }}</span></li>--}}
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
{{--                        <li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
{{--            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>--}}
        @else
            <a>&raquo;</a>
{{--            <li class="disabled"><span>Next →</span></li>--}}
        @endif
    </ul>
@endif
