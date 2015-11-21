@extends('admin.admin')

@section('content')
	{!! Form::open(array('url' => '/season/'. $season->slug, 'method' => 'post')) !!}
		{!! Form::label('Jmeno') !!}
		{!! Form::text('title', null) !!}

		{!! Form::label('Studio') !!}
		{!! Form::text('studio', null) !!}

		{!! Form::label('Popis') !!}
		{!! Form::text('description', null) !!}

		{!! Form::label('Obrazek') !!}
		{!! Form::text('image', null) !!}

		{!! Form::submit('Save') !!}
	{!! Form::close() !!}
@stop