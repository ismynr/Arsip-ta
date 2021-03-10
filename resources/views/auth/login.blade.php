<x-guest-layout>
  <x-slot name="title">
      Area Login
  </x-slot>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="login-brand">
          <img src="{{ asset('tempelate/img/logo.svg') }}" alt="logo" class="auth-logo shadow-light rounded-circle">
        </div>
      </div>
      <div class="col-md-8">
        <div class="card card-primary">
          <div class="card-header text-center px-5">
            Sebelum memulai, anda harus login terlebih dauhulu atau mendaftar sebagai anggota jika anda belum memiliki akun
          </div>
          <div class="card-body">
            <!-- Session Status -->
            <x-auth-session-status class="mb-3" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <form form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
              @csrf

              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                  <div class="float-right">
                    @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}" class="text-small">
                        {{ __('Lupa Kata Sandi?') }}
                      </a>
                    @endif
                  </div>
                </div>
                <input id="password" type="password" class="form-control" name="password" autocomplete="current-password" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember_me">
                  <label class="custom-control-label" for="remember_me">{{ __('Ingat Saya') }}</label>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                  {{ __('Login') }}
                </button>
              </div>
            </form>

            <div class="mt-4 text-center">
              Belum terdaftar sebagai anggota ? <br>
              Daftar sekarang <a href="/register">Klik disini</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>
