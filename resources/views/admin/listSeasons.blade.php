@extends('admin.admin')

@section('content')
	veci k uprave:<br>
	@foreach ($seasons as $season)
		<a href="/season/{{ $season->id }}/edit">{{ $season->name }}</a>
	@endforeach
	<a href="/season/create">Add season</a>
@stop
