@extends('admin.layouts.master')
@section('title','categories')
@section('category-active','active')
@section('content')

 <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Categories</h4>

            <div class="card mb-4">
@livewire('admin.categories.categories-component')


            </div>
        </div>
    </div>
@endsection
