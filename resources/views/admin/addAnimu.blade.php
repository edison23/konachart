@extends('admin.admin')

@section('content')
<h1>Add animu</h1>
	{!! Form::open(array('action' => ['AnimusController@store', $season->slug], 'method' => 'post')) !!}
		@include('admin.animuForm')
	{!! Form::close() !!}
@stop