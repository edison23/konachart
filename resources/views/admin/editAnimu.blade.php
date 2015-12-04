@extends('admin.master')


@section('content')
<h1>Edit animu {{ $animu->title }}</h1>
	{!! Form::model($animu, array('action'=> ['AnimusController@update', $animu->id], 'method' => 'patch')) !!}
		@include('admin.animuForm')
	{!! Form::close() !!}
@stop
