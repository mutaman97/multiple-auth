@extends('layouts.backend.app')

@section('title',__('Recharge Student Card'))

@section('head')
    @include('layouts.backend.partials.headersection',['title'=>__('Recharge Student Card')])
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        @if (Session::has('message'))
            <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('message') }}</div>
        @endif
    </div>
    @foreach ($students ?? [] as $student)

        <div class="col-12 col-md-4 col-lg-4">
            {{-- <div class="pricing {{ $plan->is_featured ? 'pricing-highlight' : '' }}"> --}}
            <div class="pricing pricing-highlight">
                <div class="pricing-padding">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar-1.png" class="img-fluid">
                        <div class="user-details">
                            <div class="user-name">{{__('Student Name')}}</div>

                        </div>
                    </div>
                    <div class="pricing-price">
                        <div>{{ $student->balance }}&nbsp;{{ __('AED') }}</div>
                    </div>
                    <div class="pricing-details">
                        <div class="pricing-item-label">{{__('Card Number:')}} 783213216323221</div>
                    </div>
                </div>
                <div class="pricing-cta">
                    <a href="{{ route('merchant.plan.gateways', $plan->id) }}">{{ __('Recharge') }}<i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
