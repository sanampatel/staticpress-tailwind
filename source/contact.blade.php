@extends('_layouts.master')

@section('content')
	{{-- Container --}}
	<div class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
		
		<h2 class="text-gray-800 text-3xl my-3 font-extrabold">Contact</h2>
		<p>Fill out the below and i'll be sure to get back to you soon!</p>
		
		{{-- Contact form --}}
		<form class="w-full mt-5">
			<div class="flex flex-wrap -mx-3 mb-6">
				<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
						Name
					</label>
					<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" id="grid-last-name" type="text" placeholder="Enter your name">
				</div>
				<div class="w-full md:w-1/2 px-3">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
						Email
					</label>
					<input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" id="grid-last-name" type="text" placeholder="Enter our email">
				</div>
			</div>
			<div class="flex flex-wrap -mx-3 mb-6">
				<div class="w-full px-3">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
						Message
					</label>
					<textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 w-full" id="grid-password" rows="5" placeholder="Enter your message"></textarea>
				</div>
			</div>
			<div class="flex flex-wrap -mx-3 mb-2">
				<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
						Submit
					</button>
				</div>
			</div>
		</form>

	</div>
	{{-- Container end --}}

@endsection