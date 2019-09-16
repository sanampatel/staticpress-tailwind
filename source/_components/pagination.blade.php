<nav aria-label="..." class="pagination mt-10">
	@if ($previous = $pagination->previous)
		{{-- Previous --}}
		<a
			href="{{ $previous }}"
			title="Previous Page"
			class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-gray-300 hover:text-black text-brand-dark no-underline"
		>Previous</a>
	@endif
	@foreach ($pagination->pages as $pageNumber => $path)
		<a
		href="{{ $path }}"
		title="Go to Page {{ $pageNumber }}"
		class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-gray-300 hover:text-black text-brand-dark no-underline {{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}"
	>{{ $pageNumber }}</a>
	@endforeach
	@if ($next = $pagination->next)
		{{-- Next --}}
		<a
			href="{{ $next }}"
			title="Next Page"
			class="rounded-r rounded-sm border border-brand-light px-3 py-2 hover:bg-gray-300 hover:text-black text-brand-dark no-underline"
		>Next</a>
	@endif
</nav>