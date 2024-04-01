@extends('layouts.app')
@section('title')
    Terms & Conditions | IndicatorFx Signals
@endsection

@section('container')
    <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54" style="margin-top: 0%;background: var(--bs-light);">
    @include('includes.basic.header')
    @include('includes.terms_conditions.services')
    @include('includes.basic.footer')
@endsection
