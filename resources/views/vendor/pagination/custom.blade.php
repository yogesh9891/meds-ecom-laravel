@if ($paginator->hasPages())
  <ul class="pagination">
       
        @if ($paginator->onFirstPage())
         <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1"><<</a>
          </li>
        @else
            <li class="page-item"><a  class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1"><<</a></li>
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                         <li class="page-item active"> <a class="page-link" href="#">{{ $page }}<span class="sr-only">(current)</span></a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
          <li class="page-item">
                                  <a class="page-link" href="{{ $paginator->nextPageUrl() }}" >>></a></li>
        @else
            <li class="page-item disabled">
                                  <a class="page-link" href="#">>></a></li>
        @endif
    </ul>
@endif 
{{-- 
<ul class="pagination">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1"><<</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#">>></a>
                                </li>
                              </ul> --}}