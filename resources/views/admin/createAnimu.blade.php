@extends('admin.master')

@section('content')
<h1>Přidat animu</h1>
	{!! Form::open(['action' => ['AnimusController@store'], 'method' => 'post']) !!}
		{!! Form::hidden('season_id', $season_id) !!}
		@include('admin.animuForm')
	{!! Form::close() !!}
@stop
