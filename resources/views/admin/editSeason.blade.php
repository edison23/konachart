@extends('admin.admin')

@section('content')
	<h1>Edit season</h1>
	{!! Form::model($season, array('route' => 'season.update', 'method' => 'put')) !!}
		@include('admin.seasonForm')
	{!! Form::close() !!}

	<a href="/season/{{ $season->slug }}/addAnimu">Add animu to this season</a>
	<a href="/season/{{ $season->slug }}/editAnimu">Edit animu of this season</a>
@stop
