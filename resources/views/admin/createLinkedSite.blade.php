@extends('admin.master')

@section('content')
    <h1>Pridat linkovany web</h1>
    {!! Form::open(['action'=>'LinkedSiteController@store', 'method'=>'post']) !!}
        @include('admin.linkedSiteForm')
    {!! Form::close() !!}
@stop
