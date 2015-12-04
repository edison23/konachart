@extends('admin.master')

@section('content')
	Přehled sezón<br>
	@foreach ($seasons as $season)
		<a href="/season/{{ $season->id }}/edit">{{ $season->name }}</a> <br>
	@endforeach
	<a href="/season/create">Add season</a>
@stop
