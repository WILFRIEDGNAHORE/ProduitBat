@extends('frontend.layouts.master')
@section('title')
    {{ $settings->site_name }}
@endsection

@section('content')

    @include('frontend.sections.hero')

    @include('frontend.sections.cta-info')

    @include('frontend.sections.discount-you-love')

    @include('frontend.sections.best-selling-products')

    @include('frontend.sections.category')

    @include('frontend.sections.top-selling-products')

    @include('frontend.sections.our-products')

    @include('frontend.sections.cta-banner')

    @include('frontend.sections.newly-launched-products')
    
    @if ($flashSaleDate->end_date >= now())
    @include('frontend.sections.hot-deals')
    @endif
    
    @include('frontend.sections.banner')

    @include('frontend.sections.blog')

    @include('frontend.sections.subscribe')

@endsection
