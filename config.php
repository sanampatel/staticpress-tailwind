<?php

return [
	'production' => false,
	'google_analytic_code' => 'UA-23560239-19',
	'disqus_code' => 'static-press',
	'title' => 'Tailwind Demo',
	'siteName' => 'StaticPress',
	'seokeywords' => 'seo, keywords, title, header, demo, posts',
	'seodescription' => 'seo, keywords, title, header, demo, posts',
	'mainUrl' => 'https://tailwind-demo.staticpress.io',
	'baseUrl' => 'https://tailwind-demo.staticpress.io',
	'siteAuthor' => 'Hence Media Pvt. Ltd.',
	'site' => [
		'title' => 'Tailwind Demo | StaticPress',
	],
	'collections' => [
		'posts' => [
			'path' => 'posts/{filename}',
			'sort' => '-date',
			'extends' => '_layouts.post',
			'section' => 'postContent',
			'isPost' => true,
			'isFeatured' => true,
			'tags' => [],
			'categories' => [],
		],
		'tags' => [
			'path' => 'tags/{filename}',
			'extends' => '_layouts.tag',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
		'categories' => [
			'path' => 'categories/{filename}',
			'extends' => '_layouts.category',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
		'settings' => [
			'path' => 'settings/{filename}',
			'extends' => '_layouts.master',
			'section' => '',
			'name' => function ($page) {
				return $page->getFilename();
			},
		],
	],
	'excerpt' => function ($page, $limit = 250, $end = '...') {
		return $page->isPost
			? str_limit_soft(content_sanitize($page->getContent()), $limit, $end)
			: null;
	},
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
