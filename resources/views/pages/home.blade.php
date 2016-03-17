@extends('layouts.fullwidth')

@section('title')
    Feeria Home
@stop

@section('keywords')
    webdevelopment, tests
@stop

@section('content')
    <p class="title">{{ trans('pages.home.title') }}</p>
    <p>{{ trans('pages.home.content') }}</p>
@stop