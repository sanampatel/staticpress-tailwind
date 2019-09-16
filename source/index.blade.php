---
pagination:
    collection: posts
    perPage: 4 {{-- Per page pages need to display --}}
---
@extends('_layouts.master')

@section('content') 
	<div class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
		<h2 class="text-5xl font-extrabold text-gray-800">Recent Posts</h2>
		
		<div class="mt-12 mb-12 post-wrapper"> 
			@foreach ($pagination->items as $post)
			
				@include('_components.post-preview')

			@endforeach

			<div class="pt-2"> 
				@include('_components.pagination')
			</div>
		</div>
		
		<div class="tags mb-2">
			<h3 class="text-3xl mb-4 font-extrabold text-gray-800">Popular Tags</h3>
			@foreach ($tags as $tag)
				<a href="/tags/{{ $tag->title }}">
					<span class="inline-block bg-grey-lighter leading-loose tracking-wide text-gray-700 uppercase text-xs font-semibold rounded mr-3 px-3 pt-px shadow" title="View articles in {{ $tag->title }}">
						{{ $tag->title }}
					</span>
				</a>
			@endforeach
		</div>

	</div>
@endsection