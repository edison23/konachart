@extends('admin.master')

@section('content')
    <h1>Přidat sezónu</h1>
    {!! Form::open(['action'=>'SeasonsController@store', 'method'=>'post']) !!}
        @include('admin.seasonForm')
    {!! Form::close() !!}
@stop
