@extends('layouts.app')
@section('title')
    Privacy Policy | IndicatorFx Signals
@endsection

@section('container')
    <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54" style="margin-top: 0%;background: var(--bs-light);">
    @include('includes.basic.header')
    @include('includes.privacy_policy.services')
    @include('includes.basic.footer')
@endsection
