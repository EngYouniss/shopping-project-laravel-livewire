@extends('client.layouts.master')
@section('content')
    <!-- شريط الإعلان العلوي -->
    <div class="alert alert-warning alert-dismissible fade show mb-0 text-center" role="alert">
        <strong>عروض خاصة!</strong> خصم يصل إلى 50% على مجموعة من المنتجات المختارة
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!-- سلايدر المنتجات المميزة -->
    <div id="heroCarousel" class="carousel slide " data-bs-ride="carousel" style="margin-top: 20px">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('client/images/clothes/2.jpg') }}" class="d-block w-100" alt="عرض خاص"
                    style="max-height: 300px;object-fit:contain; ">
                <div class="carousel-caption bg-dark bg-opacity-50 rounded-3 p-4">
                    <h5 class="fw-bold text-white fs-3">وصلت منتجات جديدة</h5>
                    <p class="text-light">اكتشف أحدث المنتجات في متجرنا</p>
                    <a href="#" class="btn btn-light btn-sm px-4 rounded-pill">استعرض المنتجات</a>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ asset('client/images/clothes/clothe4.jpg') }}" class="d-block w-100" alt="منتجات جديدة"
                    style="max-height: 400px;object-fit:contain;">
                <div class="carousel-caption bg-dark bg-opacity-50 rounded-3 p-4">
                    <h5 class="fw-bold text-white fs-3">وصلت منتجات جديدة</h5>
                    <p class="text-light">اكتشف أحدث المنتجات في متجرنا</p>
                    <a href="#" class="btn btn-light btn-sm px-4 rounded-pill">استعرض المنتجات</a>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{ asset('client/images/shoes/2.jpg') }}" class="d-block w-100" alt="شحن مجاني"
                    style="max-height: 400px;object-fit:contain;">
                <div class="carousel-caption bg-dark bg-opacity-50 rounded-3 p-4">
                    <h5 class="fw-bold text-white fs-3">وصلت منتجات جديدة</h5>
                    <p class="text-light">اكتشف أحدث المنتجات في متجرنا</p>
                    <a href="#" class="btn btn-light btn-sm px-4 rounded-pill">استعرض المنتجات</a>
                </div>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!-- المنتجات المميزة -->
   @include('client.partials.distanguished_products')

   <!-- قسم العروض الخاصة -->
@include('client.partials.spicial_tenders')

    <!-- أحدث المنتجات -->
    @include('client.partials.latest_products')

    <!-- قسم الفئات -->
    <section class="categories py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">تصفح حسب الفئة</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/featured/2.jpg') }}" class="card-img-top"
                                alt="إلكترونيات">
                            <div class="card-body text-center">
                                <h5 class="card-title">الإلكترونيات</h5>
                                <p class="text-muted">125 منتج</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/shop/shop24.jpg') }}" class="card-img-top" alt="ملابس">
                            <div class="card-body text-center">
                                <h5 class="card-title">الملابس</h5>
                                <p class="text-muted">89 منتج</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/shop/shop12.jpg') }}" class="card-img-top" alt="أثاث">
                            <div class="card-body text-center">
                                <h5 class="card-title">الأثاث</h5>
                                <p class="text-muted">45 منتج</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="#" class="category-card text-decoration-none">
                        <div class="card h-100">
                            <img src="{{ asset('client/images/banner/parallax.jpg') }}" class="card-img-top"
                                alt="أجهزة منزلية">
                            <div class="card-body text-center">
                                <h5 class="card-title">الأجهزة المنزلية</h5>
                                <p class="text-muted">67 منتج</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم آراء العملاء -->
    <section class="testimonials py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">آراء عملائنا</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('client/images/profile/user.png') }}" class="rounded-circle mb-3"
                                width="80" alt="عميل">
                            <h5 class="card-title">أحمد محمد</h5>
                            <div class="product-rating mb-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="card-text">تجربة رائعة مع المتجر، المنتجات ذات جودة عالية والتوصيل سريع جدًا. أنصح
                                الجميع بالتسوق من هنا.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('client/images/profile/user.png') }}" class="rounded-circle mb-3"
                                width="80" alt="عميل">
                            <h5 class="card-title">سارة عبدالله</h5>
                            <div class="product-rating mb-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <p class="card-text">خدمة العملاء ممتازة وساعدوني في اختيار المنتج المناسب. شكرًا لكم على هذه
                                التجربة الممتازة.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset('client/images/profile/user.png') }}" class="rounded-circle mb-3"
                                width="80" alt="عميل">
                            <h5 class="card-title">خالد علي</h5>
                            <div class="product-rating mb-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                            <p class="card-text">الأسعار تنافسية والمنتجات أصلية. استلمت طلبي قبل الموعد المحدد. شكرًا لكم.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ميزات المتجر -->
    <section class="features py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-box p-4">
                        <i class="fas fa-truck fa-3x text-primary mb-3"></i>
                        <h4>شحن سريع</h4>
                        <p class="text-muted">توصيل خلال 24-48 ساعة</p>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-sm-6">
                            <div class="feature-box p-4">
                                <i class="fas fa-undo fa-3x text-primary mb-3"></i>
                                <h4>إرجاع سهل</h4>
                                <p class="text-muted">30 يومًا لإرجاع المنتج</p>
                            </div>
                        </div> -->
                <div class="col-md-3 col-sm-6">
                    <div class="feature-box p-4">
                        <i class="fas fa-lock fa-3x text-primary mb-3"></i>
                        <h4>دفع آمن</h4>
                        <p class="text-muted">دفع عبر بوابات آمنة</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-box p-4">
                        <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                        <h4>دعم فني</h4>
                        <p class="text-muted">24/7 خدمة العملاء</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- النشرة البريدية -->
    <section class="newsletter py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>اشترك في نشرتنا البريدية</h3>
                    <p class="mb-0">احصل على آخر العروض والتخفيضات مباشرة إلى بريدك الإلكتروني</p>
                </div>
                <div class="col-md-6">
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="بريدك الإلكتروني" required>
                            <button class="btn btn-primary" type="submit">اشترك</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
