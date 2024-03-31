@extends('layouts.app')
@section('title')
    Home | IndicatorFx Signals
@endsection

@section('container')
    <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    @include('includes.basic.header')
    @include('includes.home.carousel')
    @include('includes.home.services')
    @include('includes.home.about')
    @include('includes.home.contact')
    @include('includes.basic.footer')
@endsection
