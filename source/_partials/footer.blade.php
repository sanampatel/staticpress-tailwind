<p class="text-right m-5">
	<a href="#" class="bg-white pl-3 pr-3 pt-2 pb-2 text-right">&uparrow;</a>
</p>
<footer class="blog-footer bg-white p-3">
	<div class="container text-center">
		<small>Made with 
			<span class="ml-3 mr-3"></span>
			<div class="heart heart-main"></div>
			Build on 
			<a class="text-dark" href="https://tailwindcss.com/">
				<span class="text-bold">Tailwindcss</span>
			</a> 
			using 
			<a class="text-dark" href="https://staticpress.io">
				<span class="text-bold">StaticPress</span>
			</a>
		</small>
	</div>
</footer>

<!-- Main.js -->
<script src="{{ $page->mainUrl }}/asset/build/js/main.js"></script>

<!-- Customize footer scripts -->
@yield('footer-scripts')

<!-- Identity redirect -->
@include('_partials.cms.identity_redirect')

<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-23560239-19');

	/**
	*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
	
	var disqus_config = function () {
	this.page.url = getUrl();  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = getUrl(); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	
	(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://static-press.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
</script>
</body>
</html>