<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $page->title }}</title>
	
	<meta name="keywords" content="{{ $page->seokeywords ?? $page->seokeywords }}">
	<meta name="description" content="{{ $page->seodescription ?? $page->seodescription }}">
	<meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ $page->getUrl() }}"/>
	<meta property="og:keywords" content="{{ $page->seokeywords }}" />
	<meta property="og:description" content="{{ $page->seodescription }}" />

	<link rel="home" href="{{ $page->baseUrl }}">
	<link rel="icon" href="/favicon.ico">
	<link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

	<!-- Tailwind CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.css">

	{{-- Font awesome --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.5/fuse.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

	@yield('meta')
	<style>
		.brand_logo {
			width: 210px; 
			background: url(/images/{{ basename($settings->setting->sitelogo) }}) no-repeat; 
			background-size: 210px;
			text-indent: -9999px;
			margin: 10px 0 0 0;
			vertical-align: middle;
			height: 60px;
			margin-left: 0px;
		}
		.bg-grey-lightest {
			background-color: rgb(249, 249, 249);
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	
	@yield('meta')

	@include('_partials.cms.identity_widget')

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="{{ $page->mainUrl }}/asset/build/css/main.css">
</head>
<body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans bg-grey-lightest font-sans">
	
	<header class="blog-header border-bottom shadow-sm">
		@include('_partials.nav')
	</header>