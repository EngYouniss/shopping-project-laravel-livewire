<div>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome to Shopping Dashboard! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>

                        <form id="formAuthentication" class="mb-3" wire:submit.prevent="login">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="email" name="email-username"
                                    wire:model="email" placeholder="Enter your email or username" autofocus />
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="auth-forgot-password-basic.html">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" wire:model="password"
                                        placeholder="••••••••••" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>

                            <button
                                    class="btn btn-primary d-flex justify-content-center align-items-center gap-2 w-100"
                                    type="submit" wire:loading.attr="disabled">
                                    Sign in
                                    <div class="spinner-border spinner-border-sm text-light" role="status" wire:loading
                                        wire:target="login">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                        </form>


                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="auth-register-basic.html">
                                <span>Create an account</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>
</div>
