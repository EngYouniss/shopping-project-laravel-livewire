<div>
    <section class="py-5">
        <div class="container">
            <!-- العنوان -->
            <div class="text-center mb-5">
                <h2 class="fw-bold">Contact Us</h2>
                <p class="text-muted">We’d love to hear from you. Fill out the form or reach us through the following
                    details.</p>
            </div>

            <div class="row">
                <!-- معلومات التواصل -->
                <div class="col-md-5 mb-4">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <h5 class="mb-3">Get In Touch</h5>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                Sana'a, Yemen
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone text-primary me-2"></i>
                                +967 771985327
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                contact@example.com
                            </li>
                            <li>
                                <i class="fas fa-clock text-primary me-2"></i>
                                Sun - Thu: 9am - 5pm
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- نموذج التواصل -->
                <div class="col-md-7">
                    <div class="p-4 bg-light rounded shadow-sm">
                        <form wire:submit.prevent="submit">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" id="name" class="form-control" placeholder="Enter your name"
                                    wire:model="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Enter your email"
                                    wire:model="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea id="message" class="form-control" rows="5" placeholder="Write your message..." wire:model="message"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2"
                                role="alert">
                                <i class="fas fa-check-circle fa-lg"></i>
                                <div>{{ session('success') }}</div>
                                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center gap-2"
                                role="alert">
                                <i class="fas fa-exclamation-triangle fa-lg"></i>
                                <div>{{ session('error') }}</div>
                                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
