@extends('frontend.layouts.master')
@section('title')
    {{ $settings->site_name }}
@endsection

@section('content')

    @include('frontend.sections.hero')

    {{-- @include('frontend.sections.category') --}}

    @include('frontend.sections.our-products')
    
    @if ($flashSaleDate->end_date >= now())
    @include('frontend.sections.hot-deals')
    @endif
    

    {{-- @include('frontend.sections.blog') --}}

    @include('frontend.sections.subscribe')

@endsection
