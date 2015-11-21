@extends('admin.admin')

@section('content')
	veci k uprave:<br>
	@foreach ($seasons as $season)
		<a href="/season/{{ $season->slug }}/edit">{{ $season->name }}</a> 
	@endforeach
@stop



