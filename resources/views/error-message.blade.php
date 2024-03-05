@if($error = Session::get('error'))
	@if($error['lang'] == 'en')
		<div class="flex flex-col gap-2 text-white mx-2 mb-5 -mt-10 p-5 rounded-lg bg-red-500">
			<h1 class="font-semibold">{{ $error['en']['title'] }}</h1>
			<p>{{ $error['en']['content'] }}</p>
		</div>
	@else
		<div class="flex flex-col gap-2 text-white mx-2 mb-5 -mt-10 p-5 rounded-lg bg-red-500">
			<h1 class="font-semibold">{{ $error['pt']['title'] }}</h1>
			<p>{{ $error['pt']['content'] }}</p>
		</div>
	@endif
@endif