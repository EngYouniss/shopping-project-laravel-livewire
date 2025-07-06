@extends('admin.layouts.master')
@section('title', 'offers')
@section('offer-active', 'active')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Offers</h4>

    <div class="card mb-4">
        <livewire:admin.offers.offers-component/>


    </div>
</div>

@endsection
