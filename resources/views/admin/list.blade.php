@extends('admin.master')

@section('content')
	{{ $title }}<br>
	@foreach ($items as $item)
		<a href="/{{ $name }}/{{ $item->id }}/edit">{{ $item->name }}</a> <br>
	@endforeach
	<a href="/{{ $name }}/create">Add {{ $name }}</a>
@stop
