<nav aria-label="..." class="paginate_nav d-flex w-100 justify-content-center" id="{{ $paginator->lastPage()-1 }}">
  <ul class="pagination">
      @if ($paginator->onFirstPage())
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
      @else
          <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a></li>
      @endif
        @for($i=1; $i<=$paginator->lastPage(); $i++)
            <li class="page-item pg-link" id="{{ $i }}"><a class="page-link">{{ $i }}</a></li>
        @endFor
        @if ($paginator->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
        @else
          <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
        @endif
  </ul>
</nav>
@dump($paginator)