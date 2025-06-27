<div>

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        @if (session()->has('error'))
                            <p>{{ session('error') }}</p>
                        @endif
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">

                                <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Welcome to Sneat! 👋</h4>
                        <p class="mb-4">Please sign-in to your account and start the adventure</p>

                        <form id="formAuthentication" class="mb-3" wire:submit.prevent="login">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="text" class="form-control" id="email" name="email-username"
                                    placeholder="Enter your email or username" autofocus wire:model="email" />
                                @error('email')
                                    <span class="error">{{ $message }} </span>
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
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" wire:model="password" />

                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                </div>
                                @error('password')
                                    <span class="error">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button
                                    class="btn btn-primary d-flex justify-content-center align-items-center gap-2 w-100"
                                    type="submit" wire:loading.attr="disabled">
                                    Sign in
                                    <div class="spinner-border spinner-border-sm text-light" role="status" wire:loading
                                        wire:target="login">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </button>
                            </div>



                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="{{ route('user.register') }}">
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
