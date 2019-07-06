@if ($paginator->hasPages())
  <li>           
    @if ($paginator->onFirstPage())

      <a><i class="flaticon-back" disabled></i></a>

    @else

      <a href="{{ $paginator->previousPageUrl() }}"><i class="flaticon-back"></i></a>

    @endif

  </li>
  @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
        
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
              <li class="active"><a>{{ $page }}</a></li>
            @else
              <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach
    @endif
  @endforeach

  @if ($paginator->hasMorePages())
    <li><a href="{{ $paginator->nextPageUrl() }}"><i class="flaticon-right-arrow"></i></a></li>
  @else

    <li><a><i class="flaticon-right-arrow" disabled></i></a></li>

  @endif

@endif
