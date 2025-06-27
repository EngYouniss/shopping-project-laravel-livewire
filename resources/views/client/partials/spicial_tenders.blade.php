<section class="special-offer py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center gy-4">
            <!-- المحتوى النصي -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">عرض خاص لمدة محدودة</h2>
                <p class="mb-4">احصل على خصم <strong>30%</strong> على جميع المنتجات الإلكترونية عند استخدام الكود: <span class="badge bg-light text-primary fw-bold">ELECTRO30</span></p>

                <!-- العداد -->
                <div class="countdown-timer mb-4">
                    <div class="d-flex justify-content-between text-center">
                        <div>
                            <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="days">00</div>
                            <div class="small">أيام</div>
                        </div>
                        <div>
                            <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="hours">00</div>
                            <div class="small">ساعات</div>
                        </div>
                        <div>
                            <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="minutes">00</div>
                            <div class="small">دقائق</div>
                        </div>
                        <div>
                            <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="seconds">00</div>
                            <div class="small">ثواني</div>
                        </div>
                    </div>
                </div>

                <!-- زر -->
                <a href="#" class="btn btn-light btn-lg px-4 rounded-pill">تسوق الآن</a>
            </div>

            <!-- صورة العرض -->
            <div class="col-md-6">
                <img src="{{ asset('client/images/clothes/1.jpg') }}"
                     alt="عرض خاص"
                     class="img-fluid rounded-4 shadow-sm"
                     style="object-fit: cover; height: 100%; max-height: 400px; width: 100%;">
            </div>
        </div>
    </div>
</section>
