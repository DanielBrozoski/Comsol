@extends('basicModel')

@section('content')

    @section('optionsMenu')
        @include('optionsMenu')
    @stop


    @section('content')
        @yield('content')
    @stop


    @section('sideMenuRight')
        @include('sideMenuRight')
    @stop
@stop