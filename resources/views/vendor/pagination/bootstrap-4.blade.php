@if ($paginator->hasPages())
<div class="pagination bg-white shadow-md px-3 py-3 rounded-sm" role="navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
    <div class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
        <span class="page-link" aria-hidden="true">&lsaquo; Prev</span>
    </div>
    @else
    <div class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo; Prev</a>
    </div>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
    @if (is_string($element))
    <div class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></div>
    @endif

    {{-- Array Of Links --}}
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <div class="page-item text-blue-400 active" aria-current="page"><span class="page-link">{{ $page }}</span></div>
    @else
    <a class="page-item" href="{{ $url }}">{{ $page }}</a>
    @endif
    @endforeach
    @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
    <div class="page-item next-btn">
        <a class="page-link hover:text-blue-400" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next &rsaquo;</a>
    </div>
    @else
    <div class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
        <span class="page-link" aria-hidden="true">Next &rsaquo;</span>
    </div>
    @endif
</div>
@endif
