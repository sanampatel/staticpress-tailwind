@extends('_layouts.master')

@section('head')
	<title>{{ $page->seotitle ? $page->seotitle : $page->title}} | {{ $page->sitename }}</title>
	<meta name="keywords" content="{{ $page->seokeywords ? $page->seokeywords : seo("post", $page->tags, $page->categories, $page->title, "keywords") }}">
	<meta name="description" content="{{ $page->seodescription ? $page->seodescription : seo("post", "", "", $page->description, "description") }}">
@endsection

@section('content')

	<div class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
		
		{{-- Content --}}
		<div class="content">
			<article class="post">
				<h1 class="text-4xl mt-0 mb-3 text-gray-900 font-extrabold">
					{{ ucwords($page->title) }}
				</h1>
				<div class="wrapper">
					<p class="text-gray-600 text-lg my-2 inline-block">
						{{ date('F j, Y', $page->date) }}
					</p>
					<span class="ml-1 mr-1 text-gray-600 text-lg inline-block">•</span>
					<span class="inline-block text-gray-600 text-lg">Post under 
						<a href="/categories/{{ $page->categories }}" title="View posts in - {{ $page->categories }}" class="uppercase text-blue-600 font-semibold tracking-wider mb-4 text-md">
							{{ ucwords($page->categories) }}
						</a>
					</span>
				</div>
				
				@if ($page->image)
					<div class="text-center">
						<img class="mt-5 border-solid border-2 border-gray-200" src="{{ $page->mainUrl }}/images/{{ basename($page->image) }}">
					</div>
				@endif

				<div class="text-lg my-5 text-gray-700 postContent">
					@yield('postContent')
				</div>

				<div class="mb-5 mt-5 text-gray-700">
					<span class="mr-1">Tags: </span>
					@if ($page->tags)
						@foreach ($page->tags as $i => $tag)
							<a href="/tags/{{ $tag }}">
								<span class="inline-block bg-grey-lighter leading-loose tracking-wide text-gray-700 uppercase text-xs font-semibold rounded mr-3 px-3 pt-px shadow" title="View articles in {{ $tag }}">
									{{ $tag }}
								</span>
							</a>
						@endforeach
					@endif
				</div>
			</article>
		</div>
		{{-- Content end --}}

		{{-- Post pagination --}}
		<nav class="pt-10 pb-10">
			<div class="inline-block float-left">
				@if ($next = $page->getNext())
					<a class="alter-clr-2 uk-text-left text-blue-600 font-semibold tracking-wider text-md" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
						&LeftArrow; {{ ucwords($next->title) }}
					</a>
				@endif
			</div>
			<div class="inline-block float-right">
				@if ($previous = $page->getPrevious())
					<a class="alter-clr-2 uk-text-right text-blue-600 font-semibold tracking-wider text-md" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
						{{ ucwords($previous->title) }} &RightArrow;
					</a>
				@endif
			</div>
		</nav>
		{{-- Post pagination end --}}

		{{-- Disqus commnet section --}}
			@include('_partials.comments')
		{{-- Disqus commnet section end --}}
	</div>

@endsection