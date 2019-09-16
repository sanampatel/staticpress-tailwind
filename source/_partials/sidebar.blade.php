<div class="sidebar">

	<!-- About widget-->
	<aside class="card">
		<div class="card-header text-uppercase">About Us</div>
		<div class="about-widget card-body">
			<p class="mb-0">{{ $settings->setting->aboutauthor }}</p>
		</div>
	</aside>
	<!-- About widget end-->

	<!-- Categories widget-->
	<aside class="card my-5">
		<div class="card-header text-uppercase">Categories</div>
		<div class="categories-widget">
			<ul class="pl-0 mb-0 list-group list-group-flush">
				@foreach ($categories as $category)
					<li class="list-group-item p-0"><a href="/categories/{{ $category->title }}" title="View posts in {{ $category->title }}" class="list-group-item text-dark list-group-item-action">{{ ucwords($category->title) }}</a> </li>
				@endforeach
			</ul>
		</div>
	</aside>
	<!-- Categories widget end-->

	<!-- Tags widget-->
	<aside class="card my-5">
		<div class="card-header text-uppercase">Tags</div>
		<div class="tags-widget card-body">
			@foreach($tags as $tag)
				<a class="badge badge-light p-2 mr-2 mt-2 text-uppercase" href="{{ '/tags/' . $tag->title }}" title="View posts in {{ $tag }}">{{ ucwords($tag->title) }}</a>
			@endforeach
		</div>
	</aside>
	<!-- Tags widget end-->
	
</div>