@extends('layouts.master')

@section('title')
@parent
	::{{$title}}
@stop

@section('navTitle')
@parent
	{{$navTitle}}
@stop

@section('content-container')
	@yield('toolbar')
	@yield('photos')
@stop

@section('scripts')

@stop