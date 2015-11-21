@extends('public.public')

@section('title', $current->name)

@section('chart')
	Tohle je animu pro sezonu {{ $current->name}}.
	@foreach ($animus as $animu)
		<p>{{ $animu->title }}</p>
	@endforeach

@stop