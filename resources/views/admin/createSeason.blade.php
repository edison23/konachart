@extends('admin.admin')

@section('content')
	<h1>Create Season</h1>
	{!! Form::open(array('route' => 'season.store', 'method' => 'post')) !!}
		@include('admin.seasonForm')
	{!! Form::close() !!}
@stop