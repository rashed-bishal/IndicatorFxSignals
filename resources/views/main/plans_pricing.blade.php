@extends('layouts.app')
@section('title')
    Plans & Pricing | IndicatorFx Signals
@endsection

@section('container')
    <body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    @include('includes.basic.header')
    @include('includes.plans_pricing.services')
    @include('includes.basic.footer')
@endsection
