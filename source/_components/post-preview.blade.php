<article class="w-full mb-6">
	{{-- Featured post image --}}
	@if ($post->featured)
		<img class="mb-6 border-solid border-2 border-gray-200" src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}">
	@endif
	{{-- Featured post image end --}}

	<div class="date-wrapper">
		<p class="text-gray-600 text-lg my-2 inline-block">
			{{ date('F j, Y', $post->date) }}
		</p>
		<span class="ml-1 mr-1 text-gray-600 text-lg inline-block">•</span>
		<span class="inline-block text-gray-600 text-lg">Post under 
			<a href="/categories/{{ $post->categories }}" title="View posts in - {{ $post->categories }}" class="uppercase text-blue-600 font-semibold tracking-wider mb-4 text-md">
				{{ ucwords($post->categories) }}	
			</a>
		</span>
	</div>

	<h2 class="text-3xl mt-0 mb-4">
		<a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="text-gray-800 font-extrabold">
			{{ ucwords($post->title) }}	
		</a>
	</h2>

	{{-- Content --}}
	<p class="mt-0 mb-4 text-lg text-gray-700">{!! $post->excerpt(200) !!}</p>
	{{-- Content end --}}

	<div class="wrapper">
		<a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="uppercase text-blue-600 font-semibold tracking-wider mb-4 text-lg inline-block">
			Read More
		</a>
		<span class="ml-1 mr-2 text-gray-600 text-lg inline-block">•</span>
		
		{{-- Tag loop --}}
		<span class="inline-block">
			@if ($post->tags)
				@foreach ($post->tags as $i => $tag)
					<a class="taglist" href="{{ '/tags/' . $tag }}" title="View posts in {{ $tag }}">
						<span class="inline-block bg-grey-lighter leading-loose tracking-wide text-gray-700 uppercase text-xs font-semibold rounded mr-3 px-3 pt-px shadow" title="View articles in {{ $tag }}">
							{{ ucwords($tag) }}
						</span>
					</a>
				@endforeach
			@endif
		</span>
		{{-- Tag loop end --}}

	</div>

</article>

@if (! $loop->last)
	<hr class="border-b my-8">
@endif 	