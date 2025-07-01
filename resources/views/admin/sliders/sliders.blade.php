@extends('admin.layouts.master')
@section('title', 'sliders')
@section('slider-active', 'active')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Sliders</h4>

            <div class="card mb-4">
                <livewire:admin.sliders.sliders-component/>


            </div>
            <livewire:admin.sliders.create-slider-component />
        </div>

@endsection
