@extends('admin.layouts.master')
@section('title', 'settings')
@section('setting-active', 'active')
@section('content')
    <div class="content-wrapper">

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">Settings</h4>

            <div class="card mb-4">
              <livewire:admin.settings.update-settings/>

            </div>

            <!-- Form controls -->



        </div>
    @endsection
