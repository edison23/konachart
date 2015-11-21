<html>
	<head>
		<title>Konachart - @yield('title')</title>
	</head>

	<body>
		<div class="seasonLinks">
			<p> Linky: 
			@foreach ($seasons as $season)
				<a href="/season/{{ $season->slug }}">{{ $season->name }}</a> 
			@endforeach
		</div>

		<div class="chart">
			@yield('chart')
		</div>
	</body>
</html>