<x-guest-layout>
    <x-slot name="title">
        Area Pendaftaran
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
            <div class="card-header text-center px-5 d-block">
              Untuk guru yang ingin melakukan pendaftaran sebagai anggota, silahkan hubungi TU sekolah / pihak Sekolah untuk mendaftarkan sekolahnya terlebih dahulu, kemudian pihak sekolah dapat mendaftarkan gurunya untuk menjadi anggota PGSI. 
              Cara pendaftaran <a href="#">Klik Disini</a>
            </div>
            <div class="card-body">
              <!-- Session Status -->
              <x-auth-session-status class="mb-3" :status="session('status')" />
  
              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-3" :errors="$errors" />
  
              <form form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                @csrf
  
                <p class="text-primary font-weight-bold">Data Sekolah</p>
                <div class="form-group">
                    <label for="nama_sekolah">Nama Sekolah</label>
                    <input id="nama_sekolah" type="text" class="form-control" name="nama_sekolah" 
                           value="{{ old('nama_sekolah') }}" required autofocus>
                    <div class="invalid-feedback">Please fill in your email</div>
                </div>

                <div class="form-group">
                    <label for="npsn">NPSN</label>
                    <input id="npsn" type="number" class="form-control" name="npsn" 
                           value="{{ old('npsn') }}" required>
                    <div class="invalid-feedback">Please fill in your email</div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="status_sekolah">Status Sekolah</label>
                            <select id="status_sekolah" class="form-control" name="status_sekolah" required>
                                <option selected disabled>Pilih Status</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                            <div class="invalid-feedback">Please fill in your email</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="jenjang_pendidikan">Jenjang Pendidikan</label>
                            <select id="jenjang_pendidikan" class="form-control" name="jenjang_pendidikan" required>
                                <option selected disabled>Pilih Jenjang</option>
                                <option value="tex">tex</option>
                            </select>
                            <div class="invalid-feedback">Please fill in your email</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="notelp">No Telp Sekolah</label>
                            <input id="notelp" type="number" class="form-control" name="notelp" 
                                   value="{{ old('notelp') }}" required>
                            <div class="invalid-feedback">Please fill in your email</div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat_sekolah">Alamat Singkat Sekolah</label>
                    <textarea name="alamat_sekolah" id="alamat_sekolah" class="form-control" required>{{ old('alamat_sekolah') }}</textarea>
                    <div class="invalid-feedback">Please fill in your email</div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select id="kecamatan" class="form-control" name="kecamatan" required>
                                <option selected disabled>Pilih Kecamatan</option>
                                <option value="tex">tex</option>
                            </select>
                            <div class="invalid-feedback">Please fill in your email</div>
                        </div>
                    </div>
                    <div class="col-md 4">
                        <div class="form-group">
                            <label for="kabupaten">Kabupaten</label>
                            <select id="kabupaten" class="form-control" name="kabupaten" required>
                                <option selected disabled>Pilih Kabupaten</option>
                                <option value="tex">tex</option>
                            </select>
                            <div class="invalid-feedback">Please fill in your email</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="provnisi">Provinsi</label>
                            <select id="provinsi" class="form-control" name="provinsi" required>
                                <option selected disabled>Pilih Provinsi</option>
                                <option value="tex">tex</option>
                            </select>
                            <div class="invalid-feedback">Please fill in your email</div>
                        </div>
                    </div>
                </div>
  
                <p class="text-primary font-weight-bold mt-2">Data Pendaftar</p>
                <div class="form-group">
                    <label for="nama_anggota">Nama Pendaftar / Operator Sekolah</label>
                    <input id="nama_anggota" type="text" class="form-control" name="nama_anggota" 
                           value="{{ old('nama_anggota') }}" required>
                    <div class="invalid-feedback">Please fill in your email</div>
                </div>

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" type="text" class="form-control" name="nik" 
                           value="{{ old('nik') }}" required>
                    <div class="invalid-feedback">Please fill in your email</div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" 
                           value="{{ old('email') }}" required>
                    <div class="invalid-feedback">Please fill in your email</div>
                </div>

                <div class="form-group">
                  <label for="password" class="control-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" autocomplete="current-password" tabindex="2" required>
                  <div class="invalid-feedback">
                    please fill in your password
                  </div>
                </div>
  
                <div class="my-4 text-center">
                    Dengan ini saya sebagai operator sekolah mendaftarkan diri menjadi anggota Persatuan Guru Seluruh Indonesia (PGSI), Dan formulir ini telah saya isi dengan sebenar-benarnya.<br>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    {{ __('Register') }}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-guest-layout>
