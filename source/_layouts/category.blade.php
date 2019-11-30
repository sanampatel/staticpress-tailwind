@extends('_layouts.master')

@section('head')
	<title>{{ seo("category", ucwords($page->name()), "", "", "") }} | {{ $page->sitename }}</title>
	<meta name="keywords" content="Tag, {{ seo("category", $page->name(), "", "", "") }}, {{ seo("category", $page->name(), "", "", "") }} category">
	<meta name="description" content="Post under category {{ seo("category", $page->name(), "", "", "") }}.">
@endsection

@section('content')
	<div class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
		<h2 class="text-4xl font-extrabold text-gray-800">
			Posts tagged of category '{{ ucwords($page->name()) }}'
		</h2>
		<div class="mt-12 mb-12 post-wrapper">
			@forelse (posts_filter_cat($posts, $page) as $post)
				@include('_partials.components.post-preview')
			@empty
				<p>No posts to show.</p>
			@endforelse
		</div>	
	</div>
@endsection