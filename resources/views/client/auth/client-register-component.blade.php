<div>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">

                  <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Shopping website! 👋</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>
      @if (session('success'))
    <div class="alert alert-success mt-2">
        {{ session('success') }}
    </div>
@endif
              <form id="formAuthentication" class="mb-3" wire:submit.prevent="register" >
                <div class="mb-3">
                  <label for="name" class="form-label"> Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    placeholder="Enter your name"
                    autofocus
                    wire:model="name"
                  />
                  @error('name')
                    <span class="error">{{$message}} </span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email </label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    placeholder="Enter your email"
                    autofocus
                    wire:model="email"
                  />
                  @error('email')
                    <span class="error">{{$message}} </span>
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
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      wire:model="password"
                    />

                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                  </div>
                     @error('password')
                    <span class="error">{{$message}} </span>
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
        type="submit"
        wire:loading.attr="disabled">
        Sign in
        <div class="spinner-border spinner-border-sm text-light"
            role="status"
            wire:loading
            wire:target="register">
            <span class="visually-hidden">Loading...</span>
        </div>
    </button>
</div>

              </form>

              <p class="text-center">

                <a href="{{route('user.login')}}">
                  <span>Already have an acount?Sign in</span>
                </a>
              </p>
            </div>
          </div>


          <!-- /Register -->
        </div>
      </div>
    </div>

</div>
