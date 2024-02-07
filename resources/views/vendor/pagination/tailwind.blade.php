@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        {{-- Previous Page Link --}}
        <a class="pagination-previous" {{ $paginator->onFirstPage() ? "disabled" : "" }}
        href="{{ $paginator->previousPageUrl() }}">
            @lang('pagination.previous')
        </a>

        <a class="pagination-next" {{ $paginator->hasMorePages() ? "" : "disabled" }}
        href="{{ $paginator->nextPageUrl() }}">
            @lang('pagination.next')
        </a>
        {{-- Next Page Link --}}

        {{-- Pagination Elements --}}
        <ul class="pagination-list">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>
                        <span class="pagination-ellipsis">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            <a class="pagination-link {{ $page == $paginator->currentPage() ? "is-current" : "" }}"
                               href="{{ $url }}" aria-label="Goto page {{ $page }}">{{ $page }}</a>
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
@endif