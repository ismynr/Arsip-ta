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
            
            <div class="card-body">
                <div class="main-container">
                    <div id="timeline" class="timeline-outer">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                              <h3 class="text-center text-primary">Alur Pendaftaran Anggota PGSI</h3>
                              <div class="card-header text-center px-5 d-block">
                                Untuk guru yang ingin melakukan pendaftaran sebagai anggota, silahkan hubungi TU sekolah / 
                                pihak Sekolah untuk mendaftarkan sekolahnya terlebih dahulu, kemudian pihak sekolah dapat mendaftarkan 
                                gurunya untuk menjadi anggota PGSI.
                              </div>
                            <ul class="timeline">
                              <li class="event">
                                <h3>
                                    (1) Calon anggota membuka website
                                </h3>
                                <p>
                                  Calon anggota dapat mengakses website PGSI pada bagian <a href="#">https://pgsi.or-ids/pendaftaran</a> 
                                  untuk mengetahui alur pendaftaran untuk menjadi anggota PGSI
                                </p>
                              </li>
                              <li class="event">
                                <h3>(2) Pastikan untuk mendaftarkan sekolahnya</h3>
                                <p>
                                  Untuk mendaftar sebagai anggota PGSI, hubungi pihak sekolah atau TU sekolah, 
                                  pastikan bahwa sekolah telah terdaftar dalam database sistem, 
                                  jika belum terdaftar silahkan untuk TU sekolah mendaftarkan sekolahnya dengan cara menghubungi 
                                  Pengurus Daerah, dapat anda lihat kontak Pengurus Daerah 
                                  <a href="#" class="btn btn-primary btn-sm mx-2">Disini</a>
                                </p>
                              </li>
                              <li class="event">
                                <h3>(3) Masuk akun operator sekolah</h3>
                                <p>Jika telah menghubungi Pengurus Daerah, admin sekolah / TU sekolah dapat login menggunakan akun yang 
                                    telah diberikan oleh Pengurus Daerah, kemudian isi dengan lengkap tentang sekolahnya, 
                                    setelah itu lengkapi profile anda (admin sekolah / TU sekolah) sebagai bagian dari anggota PGSI
                                </p>
                              </li>
                              <li class="event">
                                <h3>(4) Daftarkan Anggota</h3>
                                <p>Admin sekolah / TU sekolah yang telah mengisi formulir, dapat mendaftarkan guru yang ada 
                                    di sekolah tersebut untuk bergabung menjadi anggota PGSI</p>
                              </li>
                              <li class="event">
                                <h3>(5) Dapatkan Manfaat Sebagai Anggota PGSI</h3>
                                <p>Setelah operator mendaftarkan gurunya, guru dapat langsung masuk ke akun masing-masing sesuai informasi 
                                    dari admin sekolah / TU sekolah. Guru yang yang telah menjadi anggota PGSI mendapatkan hak untuk :
                                    <ol>
                                        <li>Menyampaikan pendapat / keluh kesah seorang guru</li>
                                        <li>Peningkatan kompetensi dengan cara mengikuti seminar, workshop, 
                                            ataupun pelatihan yang ada pada menu agenda kegiatan
                                        </li>
                                        <li>Serta berita penting mengenai PGSI lainnya</li>
                                    </ol>
                                </p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-guest-layout>
