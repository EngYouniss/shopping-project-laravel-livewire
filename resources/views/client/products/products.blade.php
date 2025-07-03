@extends('client.layouts.master')
@section('content')


    <!-- Main Content -->
    @livewire('client.products.products-component')

    <style>
        /* Custom column for 5 items per row */
        .col-lg-2-4 {
            position: relative;
            width: 20%;
            padding-right: 15px;
            padding-left: 15px;
        }

        @media (max-width: 1199.98px) {
            .col-lg-2-4 {
                width: 25%;
            }
        }

        @media (max-width: 991.98px) {
            .col-lg-2-4 {
                width: 33.333%;
            }
        }

        @media (max-width: 767.98px) {
            .col-lg-2-4 {
                width: 50%;
            }
        }

        .hero-section {
            background: linear-gradient(135deg, #2c3e50, #3498db);
        }

        /* Navigation-style filter */
        .filter-nav .nav-link {
            color: #495057;
            font-weight: 500;
            border: none;
            padding: 12px 15px;
            position: relative;
        }

        .filter-nav .nav-link.active {
            color: #0d6efd;
            background-color: transparent;
            border-bottom: 3px solid #0d6efd;
        }

        .filter-nav .nav-link:not(.active):hover {
            color: #0d6efd;
            background-color: rgba(13, 110, 253, 0.05);
        }

        /* Product cards */
        .product-card {
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-img-container {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: #f8f9fa;
        }

        .product-img-container img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        /* Pagination */
        .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .page-link {
            color: #0d6efd;
        }

        /* Empty state */
        .empty-state {
            color: #6c757d;
        }
    </style>

    <script>
        // You can add JavaScript to handle the tab changes and filtering
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Bootstrap tabs
            var tabElms = document.querySelectorAll('button[data-bs-toggle="tab"]');
            tabElms.forEach(function(tabEl) {
                tabEl.addEventListener('shown.bs.tab', function(event) {
                    // You could add AJAX loading here for each category
                    console.log('Tab changed to: ' + event.target.id);
                });
            });
        });
    </script>
@endsection
