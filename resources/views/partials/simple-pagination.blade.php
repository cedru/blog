@if ($paginator->hasPages())
    <div>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></button>
            @else
                <button class="join-item btn"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></button>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <button class="join-item btn"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></button>
            @else
                <button class="join-item btn btn-disabled" aria-disabled="true"><span>@lang('pagination.next')</span></button>
            @endif
        </ul>
    </div>
@endif
