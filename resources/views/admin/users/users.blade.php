@extends('admin.layouts.master')
@section('title', 'users')
@section('user-active', 'active')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Users</h4>

            <div class="card mb-4">
                <livewire:admin.users.user-component/>


            </div>
        </div>

@endsection
