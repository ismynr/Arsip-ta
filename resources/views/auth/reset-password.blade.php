<x-guest-layout>
    <x-slot name="title">
        Reset Password
    </x-slot>
  
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="login-brand">
            <img src="{{ asset('img/logo.svg') }}" alt="logo" width="120" class="shadow-light rounded-circle">
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-primary">

            <div class="card-header text-center px-5">
                {{ __('Silahkan isikan password baru untuk mengganti password anda yang lama, kemudian login menggunakan password baru anda') }}
            </div>

            <div class="card-body">
                <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-3" :errors="$errors" />

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $request->email) }}" required autofocus readonly>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Ketik Ulang Password</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        {{ __('Reset Password') }}
                    </button>
                  </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-guest-layout>