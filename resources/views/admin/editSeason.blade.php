@extends('admin.admin')

@section('content')
	<h1>Edit season {{ $season->name }}</h1>
	<!-- why doesnt 'action' => 'SeasonsController@update' work? -->
	{!! Form::model($season, array('url' => '/season/'. $season->id, 'method' => 'patch')) !!}
		@include('admin.seasonForm')
	{!! Form::close() !!}

	<div id="animuList">
		@foreach($animus as $animu)
			<div class="animu">
				<span class="title">{{ $animu->title }}</span>
				<!-- <div class="img"><img src="{{ $animu->img }}"></div>
				<div class="description">{{ $animu->description }}</div> -->
				<a href="/animu/{{ $animu->id }}/edit">Edit</a>
				{!! Form::open(['action' => ['AnimusController@destroy', $animu->id], 'method' => 'delete']) !!}
					{!! Form::submit('Smazat') !!}
				{!! Form::close() !!}
			</div>
		@endforeach
	</div>

	<a href="/season/{{ $season->slug }}/add">Add animu to this season</a>
@stop
