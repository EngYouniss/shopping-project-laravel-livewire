<div>
    <section class="special-offer py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center gy-4">
                <!-- Text Content -->
                <div class="col-md-6">
                    <h2 class="fw-bold mb-3">{{ $offers->title?? 'Special Offer' }}</h2>

                    <p class="mb-4">
                        {!! nl2br(e($offers->description?? 'Special Offer')) !!}
                        <br>
                        <strong class="fs-5">Discounted Price: YER {{ $offers->discount_price?? '0.00' }}</strong>
                        <br>
                        <span class="badge bg-light text-primary fw-bold mt-2">DISCOUNT CODE: ELECTRO30</span>
                    </p>

                    <!-- Countdown Timer -->
                    <div class="countdown-timer mb-4">
                        <div class="d-flex justify-content-between text-center">
                            <div>
                                <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="days">00</div>
                                <div class="small">Days</div>
                            </div>
                            <div>
                                <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="hours">00</div>
                                <div class="small">Hours</div>
                            </div>
                            <div>
                                <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="minutes">00</div>
                                <div class="small">Minutes</div>
                            </div>
                            <div>
                                <div class="bg-dark bg-opacity-75 rounded fs-3 fw-bold px-3 py-2" id="seconds">00</div>
                                <div class="small">Seconds</div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="#" class="btn btn-light btn-lg px-4 rounded-pill">Shop Now</a>
                </div>

                <!-- Offer Image -->
                <div class="col-md-6">
                    <img src="{{ $offers->image??'nothing' }}"
                         alt="Special Offer"
                         class="img-fluid rounded-4 shadow-sm"
                         style="object-fit: cover; height: 100%; max-height: 400px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Countdown Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let offerEndDate = new Date("{{ \Carbon\Carbon::parse($offers->end_date?? '')->format('Y-m-d H:i:s') }}").getTime();

            let countdown = setInterval(function () {
                let now = new Date().getTime();
                let distance = offerEndDate - now;

                if (distance < 0) {
                    clearInterval(countdown);
                    document.getElementById("days").innerHTML = "00";
                    document.getElementById("hours").innerHTML = "00";
                    document.getElementById("minutes").innerHTML = "00";
                    document.getElementById("seconds").innerHTML = "00";
                    return;
                }

                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = String(days).padStart(2, '0');
                document.getElementById("hours").innerHTML = String(hours).padStart(2, '0');
                document.getElementById("minutes").innerHTML = String(minutes).padStart(2, '0');
                document.getElementById("seconds").innerHTML = String(seconds).padStart(2, '0');
            }, 1000);
        });
    </script>
</div>
