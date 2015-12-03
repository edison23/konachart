@extends('admin.admin')

@section('content')
<h1>Add animu</h1>
	{!! Form::open(array('action' => ['AnimusController@store'], 'method' => 'post')) !!}
		{!! Form::hidden('season_id', $season->id) !!}
		@include('admin.animuForm')
	{!! Form::close() !!}
@stop
