@extends('admin.layouts.master')
@section('title', 'settings')
@section('product-active', 'active')
@section('content')
    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Products</h4>

            <div class="card mb-4">
                <livewire:admin.products.products-component />


            </div>
        </div>
        <livewire:admin.products.edit-product />

    </div>


@endsection
