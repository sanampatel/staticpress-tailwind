@extends('_layouts.master')

@section('head')
	<title>{{ seo("tag", ucwords($page->name()), "", "", "") }} | {{ $page->sitename }}</title>
	<meta name="keywords" content="Tag, {{ seo("tag", $page->name(), "", "", "") }}, {{ seo("tag", $page->name(), "", "", "") }} tag">

	<meta name="description" content="Post under tag {{ seo("tag", $page->name(), "", "", "") }}.">
@endsection

@section('content')
	<div class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
		<h2 class="text-4xl font-extrabold text-gray-800">
			Posts tagged of tag '{{ ucwords($page->name()) }}'
		</h2>
		<div class="mt-12 mb-12 post-wrapper">
			@forelse (posts_filter($posts, $page) as $post)
				@include('_partials.components.post-preview')
			@empty
				<p>No posts to show.</p>
			@endforelse
		</div>	
	</div>
@endsection