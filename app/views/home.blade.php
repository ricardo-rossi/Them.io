@extends('layout.main')

@section('head')
	<link rel="stylesheet" href="/poll.css">
	<link rel="stylesheet" href="/css/editors.css">
@stop

@section('title')
	Them.io - Welcome!
@stop

@section('extrabar')
	@include('layout.extrabar')
@stop

@section('content')

@stop

@section('scripts')
	<script src="/poll.js"></script>
	<script src="/dnd.js"></script>
@stop

