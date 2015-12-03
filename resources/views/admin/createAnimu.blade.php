@extends('admin.admin')

@section('content')
<h1>Přidat animu</h1>
	{!! Form::open(['action' => ['AnimusController@store'], 'method' => 'post']) !!}
		{!! Form::hidden('season_id', $season->id) !!}
		@include('admin.animuForm')
	{!! Form::close() !!}
@stop
