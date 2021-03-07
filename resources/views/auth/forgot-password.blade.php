<x-guest-layout>
    <x-slot name="title">
        Reset Password
    </x-slot>
  
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="login-brand">
            <img src="{{ asset('img/logo.svg') }}" alt="logo" class="auth-logo shadow-light rounded-circle">
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header text-center px-5">
                {{ __('Lupa kata sandi Anda? Tidak masalah. Beri tahu kami alamat email Anda dan kami akan mengirimkan email berisi tautan pengaturan ulang kata sandi yang memungkinkan Anda memilih sandi yang baru.') }}
            </div>
            <div class="card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-3" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-3" :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                @csrf

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                      <div class="invalid-feedback">
                        Please fill in your email
                      </div>
                  </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        {{ __('Kirim Link Reset Password') }}
                      </button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-guest-layout>