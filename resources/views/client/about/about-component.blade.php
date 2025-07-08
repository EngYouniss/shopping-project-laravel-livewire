<div>
    <section class="py-5 bg-light">
        <div class="container">
            <!-- عنوان -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">About Us</h2>
                <p class="text-muted">Learn more about who we are and what we do.</p>
            </div>

            <!-- محتوى -->
            <div class="row align-items-center">
                <!-- صورة -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('client/images/blog/2.jpg') }}" alt="About Us" class="img-fluid rounded shadow-sm">
                </div>

                <!-- نص -->
                <div class="col-md-6">
                    <h3 class="fw-semibold">Our Story</h3>
                    <p class="text-muted">
                        We are a passionate team dedicated to providing high-quality products and services that meet our
                        customers’ needs. With years of experience and a commitment to excellence, we strive to deliver
                        the best shopping experience possible.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Trusted by thousands of
                            customers</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> High-quality products
                        </li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Fast and reliable service</li>
                    </ul>
                    <a href="{{route('contact-us')}}" class="btn btn-primary mt-3">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</div>
