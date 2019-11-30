<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('head')

	<link rel="icon" href="{{ $page->mainUrl }}/asset/images/favicon.ico">

	<!-- Tailwind CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.1.2/tailwind.css">

	{{-- Custom CSS --}}
	<link rel="stylesheet" href="{{ $page->mainUrl }}/asset/build/css/main.css">

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

	{{-- Font awesome --}}
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.css">

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

	@include('_custom.header')

</head>
<body class="flex flex-col justify-between min-h-screen bg-grey-lightest text-grey-darkest leading-normal font-sans bg-grey-lightest font-sans">
	
	<header class="blog-header border-bottom shadow-sm">
		@include('_partials.nav')
	</header>