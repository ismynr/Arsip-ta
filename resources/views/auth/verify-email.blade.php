<x-guest-layout>
    <x-slot name="title">
        Verifikasi Email
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
                {{__ ('Terima kasih telah mendaftar! Sebelum memulai, dapatkah Anda memverifikasi alamat email Anda dengan mengklik link yang baru saja kami kirim melalui email kepada Anda? Jika Anda tidak menerima email tersebut, kami akan dengan senang hati mengirimkan email lainnya.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success mx-5" role="alert">
                    {{__ ('Tautan verifikasi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.')}}
                </div>
            @endif

            <div class="card-body">
                <form method="POST" action="{{ route('verification.send') }}" class="float-left">
                    @csrf

                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary ml-2">
                            {{ __('Mengirim ulang email verifikasi') }}
                        </button>
                      </div>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="float-right">
                    @csrf

                    <button type="submit" class="btn btn-danger">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-guest-layout>